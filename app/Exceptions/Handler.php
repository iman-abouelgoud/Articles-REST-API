<?php

namespace App\Exceptions;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->renderable(function(NotFoundHttpException $e, $request){
            if ($request->is('api/*')) {
                return response()->json([
                    'error' => [
                        'message' => 'Resource not found',
                        'code' => '404',
                        'status_code' => $e->getStatusCode(),
                        'link' => route('articles.index'),
                        'type' => 'NotFoundHttpException',
                    ]
                ], 404);
            }
        });


    }

    // public function render($request, Throwable $exception)
    // {
    //     if ($request->is('api/*')) {
    //         return $this->handleApiException($request, $exception);
    //     }

    //     return parent::render($request, $exception);
    // }

    // private function handleApiException($request, Throwable $exception)
    // {
    //     if ($exception instanceof HttpResponseException) {
    //         $exception = $exception->getResponse();
    //     } elseif ($exception instanceof ModelNotFoundException) {
    //         $exception = new NotFoundHttpException('Resource not found');
    //     } elseif ($exception instanceof AuthenticationException) {
    //         $exception = new AuthenticationException('Unauthenticated');
    //     } elseif ($exception instanceof ValidationException) {
    //         return $this->convertValidationExceptionToResponse($exception, $request);
    //     }

    //     return response()->json([
    //         'message' => $exception->getMessage(),
    //         'errors' => method_exists($exception, 'errors') ? $exception->errors() : null,
    //         'code' => $exception->getStatusCode() ? $exception->getStatusCode() : 500,
    //     ], $exception->getStatusCode() ? $exception->getStatusCode() : 500);
    // }

    // protected function convertValidationExceptionToResponse(ValidationException $exception, $request)
    // {
    //     return response()->json([
    //         'message' => $exception->getMessage(),
    //         'errors' => $exception->errors(),
    //         'code' => 422,
    //     ], 422);
    // }

}
