<?php 
namespace App\Traits;

use App\Enums\HttpStatusCode;

use Illuminate\Http\JsonResponse;

trait RespondsWithHttpStatus 
{
  /**
   * @param array<mixed> $data
   */
  protected function success(
      string $message, mixed $data = null, int $status = 200): JsonResponse
  {
    return response()->json([
      'message' => $message,
      'data' => $data,
    ], $status);
  }

  /**
   * @param array<mixed> $data
   */

  protected function error(
      string $message, mixed $data = null, int $status = 500): JsonResponse
  { 
    return response()->json([
      'message' => $message,
      'data' => $data,
    ], $status);
  }
}

?>