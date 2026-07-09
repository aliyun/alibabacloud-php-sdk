<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIDeepSign\V20260511;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\CreateImageDetectionTaskRequest;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\CreateImageDetectionTaskResponse;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\CreateImageTaskRequest;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\CreateImageTaskResponse;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\CreateSensitiveScanTaskRequest;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\CreateSensitiveScanTaskResponse;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\DetectAigcImageRequest;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\DetectAigcImageResponse;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\DetectImageBasicInfoRequest;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\DetectImageBasicInfoResponse;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\GetImageDetectionTaskResultRequest;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\GetImageDetectionTaskResultResponse;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\GetImageTaskResultRequest;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\GetImageTaskResultResponse;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\GetSensitiveScanResultRequest;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\GetSensitiveScanResultResponse;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\SignUserImageRequest;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\SignUserImageResponse;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\VerifyImageSignatureRequest;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\VerifyImageSignatureResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class AIDeepSign extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('aideepsign', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Creates an asynchronous image detection task that supports AIGC and tampering detection.
     *
     * @remarks
     * ## Operation description
     * - This operation creates an asynchronous image detection task that supports automatic classification, AIGC detection, and tampering detection.
     * - You must specify at least one of `ImageUrl` and `ObjectKey`. If both are specified, `ObjectKey` takes precedence.
     * - If you set `DetectType` to `auto`, the system automatically determines whether to perform AIGC detection or tampering detection based on the image content.
     *
     * @param request - CreateImageDetectionTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateImageDetectionTaskResponse
     *
     * @param CreateImageDetectionTaskRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateImageDetectionTaskResponse
     */
    public function createImageDetectionTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->credType) {
            @$query['CredType'] = $request->credType;
        }

        if (null !== $request->detectType) {
            @$query['DetectType'] = $request->detectType;
        }

        if (null !== $request->imageUrl) {
            @$query['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->objectKey) {
            @$query['ObjectKey'] = $request->objectKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateImageDetectionTask',
            'version' => '2026-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateImageDetectionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an asynchronous image detection task that supports AIGC and tampering detection.
     *
     * @remarks
     * ## Operation description
     * - This operation creates an asynchronous image detection task that supports automatic classification, AIGC detection, and tampering detection.
     * - You must specify at least one of `ImageUrl` and `ObjectKey`. If both are specified, `ObjectKey` takes precedence.
     * - If you set `DetectType` to `auto`, the system automatically determines whether to perform AIGC detection or tampering detection based on the image content.
     *
     * @param request - CreateImageDetectionTaskRequest
     *
     * @returns CreateImageDetectionTaskResponse
     *
     * @param CreateImageDetectionTaskRequest $request
     *
     * @return CreateImageDetectionTaskResponse
     */
    public function createImageDetectionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImageDetectionTaskWithOptions($request, $runtime);
    }

    /**
     * Generates images based on a provided text description and returns a task ID.
     *
     * @remarks
     * ## Operation description
     * - This operation creates an AI image generation task. The system generates images based on the positive prompt provided by the user.
     * - You can configure parameters such as negative prompt, model, and image size to optimize the generation results.
     * - By default, generated images are automatically embedded with a C2PA digital signature. You can optionally add a watermark in the lower-right corner.
     * - Set the ClientToken parameter to ensure the idempotence of the request and guarantee uniqueness across different requests.
     * - After the task is created, call the GetImageTaskResult operation with the TaskId to query the generation results.
     *
     * @param request - CreateImageTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateImageTaskResponse
     *
     * @param CreateImageTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateImageTaskResponse
     */
    public function createImageTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->model) {
            @$query['Model'] = $request->model;
        }

        if (null !== $request->n) {
            @$query['N'] = $request->n;
        }

        if (null !== $request->negativePrompt) {
            @$query['NegativePrompt'] = $request->negativePrompt;
        }

        if (null !== $request->prompt) {
            @$query['Prompt'] = $request->prompt;
        }

        if (null !== $request->promptExtend) {
            @$query['PromptExtend'] = $request->promptExtend;
        }

        if (null !== $request->seed) {
            @$query['Seed'] = $request->seed;
        }

        if (null !== $request->size) {
            @$query['Size'] = $request->size;
        }

        if (null !== $request->watermark) {
            @$query['Watermark'] = $request->watermark;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateImageTask',
            'version' => '2026-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateImageTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates images based on a provided text description and returns a task ID.
     *
     * @remarks
     * ## Operation description
     * - This operation creates an AI image generation task. The system generates images based on the positive prompt provided by the user.
     * - You can configure parameters such as negative prompt, model, and image size to optimize the generation results.
     * - By default, generated images are automatically embedded with a C2PA digital signature. You can optionally add a watermark in the lower-right corner.
     * - Set the ClientToken parameter to ensure the idempotence of the request and guarantee uniqueness across different requests.
     * - After the task is created, call the GetImageTaskResult operation with the TaskId to query the generation results.
     *
     * @param request - CreateImageTaskRequest
     *
     * @returns CreateImageTaskResponse
     *
     * @param CreateImageTaskRequest $request
     *
     * @return CreateImageTaskResponse
     */
    public function createImageTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImageTaskWithOptions($request, $runtime);
    }

    /**
     * Creates an image sensitive information scan task and returns the task ID.
     *
     * @remarks
     * ## Operation description
     * - This operation creates an image sensitive information scan task. The system performs sensitive data identification on the specified image.
     * - You can specify the image to scan by using an image URL or an OSS ObjectKey.
     * - The image size cannot exceed 10 MB.
     * - You must specify at least one of ImageUrl and ObjectKey. If both are specified, ObjectKey takes precedence.
     * - When you use ObjectKey, make sure that the key belongs to the namespace of the current caller. Cross-tenant access is not allowed.
     * - You can use the ClientToken parameter to ensure the idempotence of the request.
     *
     * @param request - CreateSensitiveScanTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSensitiveScanTaskResponse
     *
     * @param CreateSensitiveScanTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateSensitiveScanTaskResponse
     */
    public function createSensitiveScanTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->imageUrl) {
            @$query['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->objectKey) {
            @$query['ObjectKey'] = $request->objectKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSensitiveScanTask',
            'version' => '2026-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSensitiveScanTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an image sensitive information scan task and returns the task ID.
     *
     * @remarks
     * ## Operation description
     * - This operation creates an image sensitive information scan task. The system performs sensitive data identification on the specified image.
     * - You can specify the image to scan by using an image URL or an OSS ObjectKey.
     * - The image size cannot exceed 10 MB.
     * - You must specify at least one of ImageUrl and ObjectKey. If both are specified, ObjectKey takes precedence.
     * - When you use ObjectKey, make sure that the key belongs to the namespace of the current caller. Cross-tenant access is not allowed.
     * - You can use the ClientToken parameter to ensure the idempotence of the request.
     *
     * @param request - CreateSensitiveScanTaskRequest
     *
     * @returns CreateSensitiveScanTaskResponse
     *
     * @param CreateSensitiveScanTaskRequest $request
     *
     * @return CreateSensitiveScanTaskResponse
     */
    public function createSensitiveScanTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSensitiveScanTaskWithOptions($request, $runtime);
    }

    /**
     * Determines whether an image is AI-generated and returns detection labels and confidence levels.
     *
     * @remarks
     * ## Operation description
     * - This operation detects whether a specified image is AI-generated content (AIGC). You can specify the image to detect by using an image URL or an OSS ObjectKey.
     * - You must provide at least one of ImageUrl and ObjectKey. If both are provided, ObjectKey takes precedence.
     * - When you use the ObjectKey method, the system verifies whether the ObjectKey belongs to the current caller. Cross-tenant access is not allowed.
     * - This is a synchronous operation suitable for real-time detection of a single image. To perform asynchronous detection or credential detection at the same time, use the CreateImageDetectionTask operation.
     *
     * @param request - DetectAigcImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectAigcImageResponse
     *
     * @param DetectAigcImageRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DetectAigcImageResponse
     */
    public function detectAigcImageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->imageUrl) {
            @$query['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->objectKey) {
            @$query['ObjectKey'] = $request->objectKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetectAigcImage',
            'version' => '2026-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectAigcImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Determines whether an image is AI-generated and returns detection labels and confidence levels.
     *
     * @remarks
     * ## Operation description
     * - This operation detects whether a specified image is AI-generated content (AIGC). You can specify the image to detect by using an image URL or an OSS ObjectKey.
     * - You must provide at least one of ImageUrl and ObjectKey. If both are provided, ObjectKey takes precedence.
     * - When you use the ObjectKey method, the system verifies whether the ObjectKey belongs to the current caller. Cross-tenant access is not allowed.
     * - This is a synchronous operation suitable for real-time detection of a single image. To perform asynchronous detection or credential detection at the same time, use the CreateImageDetectionTask operation.
     *
     * @param request - DetectAigcImageRequest
     *
     * @returns DetectAigcImageResponse
     *
     * @param DetectAigcImageRequest $request
     *
     * @return DetectAigcImageResponse
     */
    public function detectAigcImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectAigcImageWithOptions($request, $runtime);
    }

    /**
     * Retrieves basic information about a specified image, such as the file name, format, size, and resolution.
     *
     * @remarks
     * ## Description
     * - This operation detects and returns basic information about an image, including but not limited to the file name, image format (such as JPEG or PNG), file size, and resolution.
     * - You can specify the image to detect by providing an image URL or an OSS ObjectKey. If both ImageUrl and ObjectKey are provided, ObjectKey takes precedence.
     * - When using ObjectKey, ensure that the object belongs to the namespace of the current caller. Cross-tenant access is not allowed.
     * - The optional parameter ClientToken ensures the idempotence of the request. Generate a new unique value for each request.
     *
     * @param request - DetectImageBasicInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectImageBasicInfoResponse
     *
     * @param DetectImageBasicInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DetectImageBasicInfoResponse
     */
    public function detectImageBasicInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->imageUrl) {
            @$query['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->objectKey) {
            @$query['ObjectKey'] = $request->objectKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetectImageBasicInfo',
            'version' => '2026-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectImageBasicInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves basic information about a specified image, such as the file name, format, size, and resolution.
     *
     * @remarks
     * ## Description
     * - This operation detects and returns basic information about an image, including but not limited to the file name, image format (such as JPEG or PNG), file size, and resolution.
     * - You can specify the image to detect by providing an image URL or an OSS ObjectKey. If both ImageUrl and ObjectKey are provided, ObjectKey takes precedence.
     * - When using ObjectKey, ensure that the object belongs to the namespace of the current caller. Cross-tenant access is not allowed.
     * - The optional parameter ClientToken ensures the idempotence of the request. Generate a new unique value for each request.
     *
     * @param request - DetectImageBasicInfoRequest
     *
     * @returns DetectImageBasicInfoResponse
     *
     * @param DetectImageBasicInfoRequest $request
     *
     * @return DetectImageBasicInfoResponse
     */
    public function detectImageBasicInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectImageBasicInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the status and results of an image detection task, including AIGC detection labels and tamper detection results.
     *
     * @remarks
     * ## Operation description
     * Call this operation to query the execution status and results of an asynchronous detection task created by `CreateImageDetectionTask`. Poll at intervals of 2 to 5 seconds until the task status changes to `succeeded` or `failed`.
     * ### Before you begin
     * - Use a valid `TaskId` for the query.
     * - If the task is not complete, increase the polling interval to avoid unnecessary resource consumption caused by frequent requests.
     *
     * @param request - GetImageDetectionTaskResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetImageDetectionTaskResultResponse
     *
     * @param GetImageDetectionTaskResultRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetImageDetectionTaskResultResponse
     */
    public function getImageDetectionTaskResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetImageDetectionTaskResult',
            'version' => '2026-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetImageDetectionTaskResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status and results of an image detection task, including AIGC detection labels and tamper detection results.
     *
     * @remarks
     * ## Operation description
     * Call this operation to query the execution status and results of an asynchronous detection task created by `CreateImageDetectionTask`. Poll at intervals of 2 to 5 seconds until the task status changes to `succeeded` or `failed`.
     * ### Before you begin
     * - Use a valid `TaskId` for the query.
     * - If the task is not complete, increase the polling interval to avoid unnecessary resource consumption caused by frequent requests.
     *
     * @param request - GetImageDetectionTaskResultRequest
     *
     * @returns GetImageDetectionTaskResultResponse
     *
     * @param GetImageDetectionTaskResultRequest $request
     *
     * @return GetImageDetectionTaskResultResponse
     */
    public function getImageDetectionTaskResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImageDetectionTaskResultWithOptions($request, $runtime);
    }

    /**
     * Queries the status and result of an asynchronous image generation task and retrieves the image download URL.
     *
     * @remarks
     * ## Operation description
     * - Call this operation to query the execution status and result of an asynchronous image generation task created by `CreateImageTask`.
     * - Poll at intervals of 2 to 5 seconds until the task status changes to `succeeded` or `failed`.
     * - The image download URL (Url) returned after the task succeeds is a pre-signed URL that is valid for 1 hour.
     * - To ensure idempotence of the request, set the `ClientToken` parameter.
     *
     * @param request - GetImageTaskResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetImageTaskResultResponse
     *
     * @param GetImageTaskResultRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetImageTaskResultResponse
     */
    public function getImageTaskResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetImageTaskResult',
            'version' => '2026-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetImageTaskResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status and result of an asynchronous image generation task and retrieves the image download URL.
     *
     * @remarks
     * ## Operation description
     * - Call this operation to query the execution status and result of an asynchronous image generation task created by `CreateImageTask`.
     * - Poll at intervals of 2 to 5 seconds until the task status changes to `succeeded` or `failed`.
     * - The image download URL (Url) returned after the task succeeds is a pre-signed URL that is valid for 1 hour.
     * - To ensure idempotence of the request, set the `ClientToken` parameter.
     *
     * @param request - GetImageTaskResultRequest
     *
     * @returns GetImageTaskResultResponse
     *
     * @param GetImageTaskResultRequest $request
     *
     * @return GetImageTaskResultResponse
     */
    public function getImageTaskResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImageTaskResultWithOptions($request, $runtime);
    }

    /**
     * Queries the status and result of a sensitive information scan task and returns the details of the sensitive data discovered during the scan.
     *
     * @remarks
     * ## Operation description
     * - Call this operation to query the execution status and result of a sensitive information scan task created by `CreateSensitiveScanTask`.
     * - Poll at intervals of 3 to 5 seconds until the task status changes to `completed` or `terminated`.
     * - The `ClientToken` parameter ensures the idempotence of the request. It is generated by the client, must be unique across different requests, supports ASCII characters, and cannot exceed 64 characters in length.
     *
     * @param request - GetSensitiveScanResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSensitiveScanResultResponse
     *
     * @param GetSensitiveScanResultRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetSensitiveScanResultResponse
     */
    public function getSensitiveScanResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSensitiveScanResult',
            'version' => '2026-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSensitiveScanResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status and result of a sensitive information scan task and returns the details of the sensitive data discovered during the scan.
     *
     * @remarks
     * ## Operation description
     * - Call this operation to query the execution status and result of a sensitive information scan task created by `CreateSensitiveScanTask`.
     * - Poll at intervals of 3 to 5 seconds until the task status changes to `completed` or `terminated`.
     * - The `ClientToken` parameter ensures the idempotence of the request. It is generated by the client, must be unique across different requests, supports ASCII characters, and cannot exceed 64 characters in length.
     *
     * @param request - GetSensitiveScanResultRequest
     *
     * @returns GetSensitiveScanResultResponse
     *
     * @param GetSensitiveScanResultRequest $request
     *
     * @return GetSensitiveScanResultResponse
     */
    public function getSensitiveScanResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSensitiveScanResultWithOptions($request, $runtime);
    }

    /**
     * Embeds a C2PA digital signature into a user-uploaded image and returns the download URL.
     *
     * @remarks
     * ## Operation description
     * - Specify at least one of `ImageUrl` and `ObjectKey`. If both are specified, `ObjectKey` takes precedence.
     * - When you use `ObjectKey`, the system verifies that the `ObjectKey` belongs to the current caller. Cross-tenant access is not allowed.
     * - Supported image formats are JPEG and PNG. Unsupported formats return the `C2PA_FORMAT_UNSUPPORTED` error.
     * - If the original image already contains a C2PA signature, the system retains the original signature as an ingredient and appends a new signature.
     * - Use the `ClientToken` parameter to ensure idempotence. Make sure the value is unique across different requests and does not exceed 64 characters.
     *
     * @param request - SignUserImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SignUserImageResponse
     *
     * @param SignUserImageRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SignUserImageResponse
     */
    public function signUserImageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->imageUrl) {
            @$query['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->objectKey) {
            @$query['ObjectKey'] = $request->objectKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SignUserImage',
            'version' => '2026-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SignUserImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Embeds a C2PA digital signature into a user-uploaded image and returns the download URL.
     *
     * @remarks
     * ## Operation description
     * - Specify at least one of `ImageUrl` and `ObjectKey`. If both are specified, `ObjectKey` takes precedence.
     * - When you use `ObjectKey`, the system verifies that the `ObjectKey` belongs to the current caller. Cross-tenant access is not allowed.
     * - Supported image formats are JPEG and PNG. Unsupported formats return the `C2PA_FORMAT_UNSUPPORTED` error.
     * - If the original image already contains a C2PA signature, the system retains the original signature as an ingredient and appends a new signature.
     * - Use the `ClientToken` parameter to ensure idempotence. Make sure the value is unique across different requests and does not exceed 64 characters.
     *
     * @param request - SignUserImageRequest
     *
     * @returns SignUserImageResponse
     *
     * @param SignUserImageRequest $request
     *
     * @return SignUserImageResponse
     */
    public function signUserImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->signUserImageWithOptions($request, $runtime);
    }

    /**
     * Verifies the C2PA digital signature in an image and returns the signature status and issuer information.
     *
     * @remarks
     * ## Operation description
     * - This operation verifies the C2PA digital signature embedded in an image and returns the signature verification status, issuer trustworthiness, issuer information, and the complete content credentials manifest.
     * - You can specify the image to verify by using an image URL or an OSS ObjectKey. If both ImageUrl and ObjectKey are provided, ObjectKey takes precedence.
     * - When you use the ObjectKey method, the system verifies whether the ObjectKey belongs to the current caller. Cross-tenant access is not allowed.
     * - To ensure request idempotency, provide the ClientToken parameter. Ensure that the value is unique across different requests and does not exceed 64 characters.
     *
     * @param request - VerifyImageSignatureRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VerifyImageSignatureResponse
     *
     * @param VerifyImageSignatureRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return VerifyImageSignatureResponse
     */
    public function verifyImageSignatureWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->imageUrl) {
            @$query['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->objectKey) {
            @$query['ObjectKey'] = $request->objectKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VerifyImageSignature',
            'version' => '2026-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VerifyImageSignatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies the C2PA digital signature in an image and returns the signature status and issuer information.
     *
     * @remarks
     * ## Operation description
     * - This operation verifies the C2PA digital signature embedded in an image and returns the signature verification status, issuer trustworthiness, issuer information, and the complete content credentials manifest.
     * - You can specify the image to verify by using an image URL or an OSS ObjectKey. If both ImageUrl and ObjectKey are provided, ObjectKey takes precedence.
     * - When you use the ObjectKey method, the system verifies whether the ObjectKey belongs to the current caller. Cross-tenant access is not allowed.
     * - To ensure request idempotency, provide the ClientToken parameter. Ensure that the value is unique across different requests and does not exceed 64 characters.
     *
     * @param request - VerifyImageSignatureRequest
     *
     * @returns VerifyImageSignatureResponse
     *
     * @param VerifyImageSignatureRequest $request
     *
     * @return VerifyImageSignatureResponse
     */
    public function verifyImageSignature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyImageSignatureWithOptions($request, $runtime);
    }
}
