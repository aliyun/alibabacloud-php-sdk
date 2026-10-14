<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIDeepSign\V20260511;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\CancelC2paBucketSignTaskRequest;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\CancelC2paBucketSignTaskResponse;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\CreateC2paBucketSignTaskRequest;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\CreateC2paBucketSignTaskResponse;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\CreateC2paSignTaskRequest;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\CreateC2paSignTaskResponse;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\CreateImageDefectDetectionTaskRequest;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\CreateImageDefectDetectionTaskResponse;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\CreateImageDetectionTaskRequest;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\CreateImageDetectionTaskResponse;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\CreateImageIncomeTaxDetectionTaskRequest;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\CreateImageIncomeTaxDetectionTaskResponse;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\CreateImageTaskRequest;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\CreateImageTaskResponse;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\CreateSensitiveScanTaskRequest;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\CreateSensitiveScanTaskResponse;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\CreateVideoTaskRequest;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\CreateVideoTaskResponse;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\CreateWatermarkEmbedTaskRequest;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\CreateWatermarkEmbedTaskResponse;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\CreateWatermarkExtractTaskRequest;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\CreateWatermarkExtractTaskResponse;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\DetectAigcImageRequest;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\DetectAigcImageResponse;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\DetectImageBasicInfoRequest;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\DetectImageBasicInfoResponse;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\GetC2paSignResultRequest;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\GetC2paSignResultResponse;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\GetImageDefectDetectionTaskResultRequest;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\GetImageDefectDetectionTaskResultResponse;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\GetImageDetectionTaskResultRequest;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\GetImageDetectionTaskResultResponse;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\GetImageIncomeTaxDetectionTaskResultRequest;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\GetImageIncomeTaxDetectionTaskResultResponse;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\GetImageTaskResultRequest;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\GetImageTaskResultResponse;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\GetSensitiveScanResultRequest;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\GetSensitiveScanResultResponse;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\GetVideoTaskResultRequest;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\GetVideoTaskResultResponse;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\GetWatermarkEmbedTaskResultRequest;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\GetWatermarkEmbedTaskResultResponse;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\GetWatermarkExtractTaskResultRequest;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\GetWatermarkExtractTaskResultResponse;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\PauseC2paBucketSignTaskRequest;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\PauseC2paBucketSignTaskResponse;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\ResumeC2paBucketSignTaskRequest;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\ResumeC2paBucketSignTaskResponse;
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
     * Stops a batch C2PA trusted signing task for a specified OSS bucket.
     *
     * @remarks
     * ## Operation description
     * - This operation stops a batch trusted signing task for a bucket owned by the currently authenticated account. TaskId is the parent task ID of the bucket returned by CreateC2paBucketSignTask.
     * - When the returned Status is `CANCELING`, the task is completing the stop process. Repeated requests may return the completed `CANCELED` status.
     * - Call GetC2paSignResult to query the task status and final result.
     *
     * @param request - CancelC2paBucketSignTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelC2paBucketSignTaskResponse
     *
     * @param CancelC2paBucketSignTaskRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CancelC2paBucketSignTaskResponse
     */
    public function cancelC2paBucketSignTaskWithOptions($request, $runtime)
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
            'action' => 'CancelC2paBucketSignTask',
            'version' => '2026-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelC2paBucketSignTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops a batch C2PA trusted signing task for a specified OSS bucket.
     *
     * @remarks
     * ## Operation description
     * - This operation stops a batch trusted signing task for a bucket owned by the currently authenticated account. TaskId is the parent task ID of the bucket returned by CreateC2paBucketSignTask.
     * - When the returned Status is `CANCELING`, the task is completing the stop process. Repeated requests may return the completed `CANCELED` status.
     * - Call GetC2paSignResult to query the task status and final result.
     *
     * @param request - CancelC2paBucketSignTaskRequest
     *
     * @returns CancelC2paBucketSignTaskResponse
     *
     * @param CancelC2paBucketSignTaskRequest $request
     *
     * @return CancelC2paBucketSignTaskResponse
     */
    public function cancelC2paBucketSignTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelC2paBucketSignTaskWithOptions($request, $runtime);
    }

    /**
     * Creates a batch C2PA content credential signing task for objects in a specified OSS bucket.
     *
     * @remarks
     * ## Operation description
     * - This operation creates a batch C2PA content credential signing task for files under a specified source prefix in an OSS bucket. It supports JPEG, JPG, PNG, MP4, FLAC, M4A, MP3, and WAV formats, and allows mixed processing under the same prefix.
     * - `SourcePrefix` must be `ai-deepsign/` or its subdirectory, and must not overlap with the output prefix `ai-deepsign-signed/`.
     * - By default, a single task processes up to 20,000 non-directory objects. The size of a single file must not exceed 800 MiB.
     * - The RAM identity of the caller must have permissions to call this operation. The service-linked role `AliyunServiceRoleForAIDeepSign` must have access permissions to the specified bucket and associated paths.
     * - File name extensions are case-insensitive. Files in unsupported formats are recorded as failed, but this does not abort the processing of other files.
     * - The signing results are written to the `ai-deepsign-signed/<TaskId>/` directory in the same bucket. The subdirectories relative to `SourcePrefix` and the source file name extensions are preserved, and `_signed` is added before the file name extension. The processing report is `c2pa_report.json` in the task directory.
     * - For example, if `SourcePrefix=ai-deepsign/images/`, the signing result for the source file `ai-deepsign/images/audio/demo.m4a` is `ai-deepsign-signed/<TaskId>/audio/demo_signed.m4a`.
     * - A successful creation only indicates that the task has been accepted. Call `GetC2paSignResult` to query the results. A `SUCCEEDED` status for a batch task does not mean that every file was signed successfully. Check the final statistics and processing report for file-by-file results.
     *
     * @param request - CreateC2paBucketSignTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateC2paBucketSignTaskResponse
     *
     * @param CreateC2paBucketSignTaskRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateC2paBucketSignTaskResponse
     */
    public function createC2paBucketSignTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bucketName) {
            @$query['BucketName'] = $request->bucketName;
        }

        if (null !== $request->bucketRegionId) {
            @$query['BucketRegionId'] = $request->bucketRegionId;
        }

        if (null !== $request->softwareAgent) {
            @$query['SoftwareAgent'] = $request->softwareAgent;
        }

        if (null !== $request->sourcePrefix) {
            @$query['SourcePrefix'] = $request->sourcePrefix;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateC2paBucketSignTask',
            'version' => '2026-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateC2paBucketSignTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a batch C2PA content credential signing task for objects in a specified OSS bucket.
     *
     * @remarks
     * ## Operation description
     * - This operation creates a batch C2PA content credential signing task for files under a specified source prefix in an OSS bucket. It supports JPEG, JPG, PNG, MP4, FLAC, M4A, MP3, and WAV formats, and allows mixed processing under the same prefix.
     * - `SourcePrefix` must be `ai-deepsign/` or its subdirectory, and must not overlap with the output prefix `ai-deepsign-signed/`.
     * - By default, a single task processes up to 20,000 non-directory objects. The size of a single file must not exceed 800 MiB.
     * - The RAM identity of the caller must have permissions to call this operation. The service-linked role `AliyunServiceRoleForAIDeepSign` must have access permissions to the specified bucket and associated paths.
     * - File name extensions are case-insensitive. Files in unsupported formats are recorded as failed, but this does not abort the processing of other files.
     * - The signing results are written to the `ai-deepsign-signed/<TaskId>/` directory in the same bucket. The subdirectories relative to `SourcePrefix` and the source file name extensions are preserved, and `_signed` is added before the file name extension. The processing report is `c2pa_report.json` in the task directory.
     * - For example, if `SourcePrefix=ai-deepsign/images/`, the signing result for the source file `ai-deepsign/images/audio/demo.m4a` is `ai-deepsign-signed/<TaskId>/audio/demo_signed.m4a`.
     * - A successful creation only indicates that the task has been accepted. Call `GetC2paSignResult` to query the results. A `SUCCEEDED` status for a batch task does not mean that every file was signed successfully. Check the final statistics and processing report for file-by-file results.
     *
     * @param request - CreateC2paBucketSignTaskRequest
     *
     * @returns CreateC2paBucketSignTaskResponse
     *
     * @param CreateC2paBucketSignTaskRequest $request
     *
     * @return CreateC2paBucketSignTaskResponse
     */
    public function createC2paBucketSignTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createC2paBucketSignTaskWithOptions($request, $runtime);
    }

    /**
     * Creates a C2PA content credential signing task for a specified file and returns the task ID.
     *
     * @remarks
     * ## Request description
     * - This operation adds standard C2PA content credentials to a single JPEG/JPG, PNG, MP4, FLAC, M4A, MP3, or WAV file.
     * - `FileUrl` must be an absolute HTTP or HTTPS URL accessible by the service and cannot contain a username or password.
     * - File name extensions are case-insensitive, and URL query parameters are not used for file name identification. For example, the file name for `https://example.com/media/demo.m4a?token=xxx` is `demo.m4a`.
     * - The source URL must directly return an HTTP 200 status code. Redirect URLs are not supported.
     * - The size of a single file cannot exceed 800 MiB. Provide a valid file in a supported format. Changing only the file name extension does not transform the file format.
     * - The signing result retains the source file name extension and adds `_signed` before the extension. For example, `demo.m4a` becomes `demo_signed.m4a`.
     * - Unsupported file name extensions return `InvalidParam`, and the error message is `FileUrl only supports files with .jpg, .jpeg, .png, .mp4, .flac, .m4a, .mp3, or .wav extensions`.
     * - A successful creation only indicates that the task has been accepted. Save the returned `TaskId` and invoke `GetC2paSignResult` to query the task status and final result.
     *
     * @param request - CreateC2paSignTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateC2paSignTaskResponse
     *
     * @param CreateC2paSignTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateC2paSignTaskResponse
     */
    public function createC2paSignTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileUrl) {
            @$query['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->softwareAgent) {
            @$query['SoftwareAgent'] = $request->softwareAgent;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateC2paSignTask',
            'version' => '2026-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateC2paSignTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a C2PA content credential signing task for a specified file and returns the task ID.
     *
     * @remarks
     * ## Request description
     * - This operation adds standard C2PA content credentials to a single JPEG/JPG, PNG, MP4, FLAC, M4A, MP3, or WAV file.
     * - `FileUrl` must be an absolute HTTP or HTTPS URL accessible by the service and cannot contain a username or password.
     * - File name extensions are case-insensitive, and URL query parameters are not used for file name identification. For example, the file name for `https://example.com/media/demo.m4a?token=xxx` is `demo.m4a`.
     * - The source URL must directly return an HTTP 200 status code. Redirect URLs are not supported.
     * - The size of a single file cannot exceed 800 MiB. Provide a valid file in a supported format. Changing only the file name extension does not transform the file format.
     * - The signing result retains the source file name extension and adds `_signed` before the extension. For example, `demo.m4a` becomes `demo_signed.m4a`.
     * - Unsupported file name extensions return `InvalidParam`, and the error message is `FileUrl only supports files with .jpg, .jpeg, .png, .mp4, .flac, .m4a, .mp3, or .wav extensions`.
     * - A successful creation only indicates that the task has been accepted. Save the returned `TaskId` and invoke `GetC2paSignResult` to query the task status and final result.
     *
     * @param request - CreateC2paSignTaskRequest
     *
     * @returns CreateC2paSignTaskResponse
     *
     * @param CreateC2paSignTaskRequest $request
     *
     * @return CreateC2paSignTaskResponse
     */
    public function createC2paSignTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createC2paSignTaskWithOptions($request, $runtime);
    }

    /**
     * Submits an image for defect detection and returns a task ID for querying results.
     *
     * @remarks
     * ## Request description
     * - This operation commits an image to the server for defect detection, including but not limited to blurriness, distortion, glare, and other anomalies in the image subject.
     * - **ImageUrl is required** and must be a publicly accessible HTTP/HTTPS URL. Currently, only image URLs accessible from the Chinese mainland public network are supported. Upload the image to an Alibaba Cloud OSS bucket in a Chinese mainland region first, and then use the presigned URL of the image as the input parameter for this operation. References: [How to obtain the URL of a single object or the URLs of multiple objects](https://www.alibabacloud.com/help/en/oss/user-guide/how-to-obtain-the-url-of-a-single-object-or-the-urls-of-multiple-objects)
     * - After successful commit, a node ID is returned immediately. Regardless of whether the node has been completed or is still being processed, call the GetImageDefectDetectionTaskResult operation to perform polling for the final detection result.
     * - If a parameter fault or other issue occurs during the commit procedure, the corresponding error message is returned directly without creating a node record.
     * - The image file size cannot exceed 10 MB. Detection is failed for images that exceed this limit.
     *
     * @param request - CreateImageDefectDetectionTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateImageDefectDetectionTaskResponse
     *
     * @param CreateImageDefectDetectionTaskRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateImageDefectDetectionTaskResponse
     */
    public function createImageDefectDetectionTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->imageUrl) {
            @$query['ImageUrl'] = $request->imageUrl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateImageDefectDetectionTask',
            'version' => '2026-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateImageDefectDetectionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits an image for defect detection and returns a task ID for querying results.
     *
     * @remarks
     * ## Request description
     * - This operation commits an image to the server for defect detection, including but not limited to blurriness, distortion, glare, and other anomalies in the image subject.
     * - **ImageUrl is required** and must be a publicly accessible HTTP/HTTPS URL. Currently, only image URLs accessible from the Chinese mainland public network are supported. Upload the image to an Alibaba Cloud OSS bucket in a Chinese mainland region first, and then use the presigned URL of the image as the input parameter for this operation. References: [How to obtain the URL of a single object or the URLs of multiple objects](https://www.alibabacloud.com/help/en/oss/user-guide/how-to-obtain-the-url-of-a-single-object-or-the-urls-of-multiple-objects)
     * - After successful commit, a node ID is returned immediately. Regardless of whether the node has been completed or is still being processed, call the GetImageDefectDetectionTaskResult operation to perform polling for the final detection result.
     * - If a parameter fault or other issue occurs during the commit procedure, the corresponding error message is returned directly without creating a node record.
     * - The image file size cannot exceed 10 MB. Detection is failed for images that exceed this limit.
     *
     * @param request - CreateImageDefectDetectionTaskRequest
     *
     * @returns CreateImageDefectDetectionTaskResponse
     *
     * @param CreateImageDefectDetectionTaskRequest $request
     *
     * @return CreateImageDefectDetectionTaskResponse
     */
    public function createImageDefectDetectionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImageDefectDetectionTaskWithOptions($request, $runtime);
    }

    /**
     * Creates an asynchronous image tampering detection task and returns the task ID.
     *
     * @remarks
     * ## Request description
     * - **ImageUrl** is required and must be a publicly accessible HTTP/HTTPS URL.
     * - External images are not currently supported. Only image URLs accessible from the Chinese mainland public network are supported. Upload images to an Alibaba Cloud OSS bucket in a Chinese mainland region first, and then use the presigned URL as the input parameter for this operation. References: [How to obtain the URL of a single object or the URLs of multiple objects](https://www.alibabacloud.com/help/en/oss/user-guide/how-to-obtain-the-url-of-a-single-object-or-the-urls-of-multiple-objects).
     * - The **DetectType** parameter is deprecated. This parameter is still accepted (`tamper`/`aigc`) but does not affect the actual detection pattern. Regardless of the value passed, tampering detection is executed and `DetectMode=tamper` is returned. New callers should not pass this parameter.
     * - The **UseTamperSmallModel** parameter specifies whether to use the small model. If set to `true`, the small model is used and no large model report is generated. If set to `false` or not passed, the large model is used by default and a comprehensive large model analysis report is returned.
     * ## Settings
     * - When **UseTamperSmallModel** is not specified, the large model is used by default.
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

        if (null !== $request->detectType) {
            @$query['DetectType'] = $request->detectType;
        }

        if (null !== $request->imageUrl) {
            @$query['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->useTamperSmallModel) {
            @$query['UseTamperSmallModel'] = $request->useTamperSmallModel;
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
     * Creates an asynchronous image tampering detection task and returns the task ID.
     *
     * @remarks
     * ## Request description
     * - **ImageUrl** is required and must be a publicly accessible HTTP/HTTPS URL.
     * - External images are not currently supported. Only image URLs accessible from the Chinese mainland public network are supported. Upload images to an Alibaba Cloud OSS bucket in a Chinese mainland region first, and then use the presigned URL as the input parameter for this operation. References: [How to obtain the URL of a single object or the URLs of multiple objects](https://www.alibabacloud.com/help/en/oss/user-guide/how-to-obtain-the-url-of-a-single-object-or-the-urls-of-multiple-objects).
     * - The **DetectType** parameter is deprecated. This parameter is still accepted (`tamper`/`aigc`) but does not affect the actual detection pattern. Regardless of the value passed, tampering detection is executed and `DetectMode=tamper` is returned. New callers should not pass this parameter.
     * - The **UseTamperSmallModel** parameter specifies whether to use the small model. If set to `true`, the small model is used and no large model report is generated. If set to `false` or not passed, the large model is used by default and a comprehensive large model analysis report is returned.
     * ## Settings
     * - When **UseTamperSmallModel** is not specified, the large model is used by default.
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
     * Submits a personal income tax record screenshot for forgery detection and returns a task ID.
     *
     * @remarks
     * ## Request description
     * - **ImageUrl** is required and must be a publicly accessible HTTP/HTTPS URL (the server needs to download the image).
     * - External images are not supported. Only image URLs accessible from the Chinese mainland public network are supported. Upload the image to an Alibaba Cloud OSS bucket in a Chinese mainland region first, and then use the presigned URL of the image as the input parameter of this operation. References: [How do I obtain the URL of one or more files?](https://www.alibabacloud.com/help/en/oss/user-guide/how-to-obtain-the-url-of-a-single-object-or-the-urls-of-multiple-objects)
     * - The image file size cannot exceed 10 MB. Detection of images that exceed this limit will be failed.
     *
     * @param request - CreateImageIncomeTaxDetectionTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateImageIncomeTaxDetectionTaskResponse
     *
     * @param CreateImageIncomeTaxDetectionTaskRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return CreateImageIncomeTaxDetectionTaskResponse
     */
    public function createImageIncomeTaxDetectionTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->imageUrl) {
            @$query['ImageUrl'] = $request->imageUrl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateImageIncomeTaxDetectionTask',
            'version' => '2026-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateImageIncomeTaxDetectionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a personal income tax record screenshot for forgery detection and returns a task ID.
     *
     * @remarks
     * ## Request description
     * - **ImageUrl** is required and must be a publicly accessible HTTP/HTTPS URL (the server needs to download the image).
     * - External images are not supported. Only image URLs accessible from the Chinese mainland public network are supported. Upload the image to an Alibaba Cloud OSS bucket in a Chinese mainland region first, and then use the presigned URL of the image as the input parameter of this operation. References: [How do I obtain the URL of one or more files?](https://www.alibabacloud.com/help/en/oss/user-guide/how-to-obtain-the-url-of-a-single-object-or-the-urls-of-multiple-objects)
     * - The image file size cannot exceed 10 MB. Detection of images that exceed this limit will be failed.
     *
     * @param request - CreateImageIncomeTaxDetectionTaskRequest
     *
     * @returns CreateImageIncomeTaxDetectionTaskResponse
     *
     * @param CreateImageIncomeTaxDetectionTaskRequest $request
     *
     * @return CreateImageIncomeTaxDetectionTaskResponse
     */
    public function createImageIncomeTaxDetectionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImageIncomeTaxDetectionTaskWithOptions($request, $runtime);
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
     * - **ImageUrl** is required and must be a publicly accessible HTTP/HTTPS URL.
     * - External images are not supported. Only image URLs accessible from the Chinese mainland public network are supported. Upload images to an Alibaba Cloud OSS bucket in a Chinese mainland region first, and then use the pre-signed URL of the image as the input parameter of this operation. References: [How to obtain the URL of a single file or the URLs of multiple files](https://www.alibabacloud.com/help/en/oss/user-guide/how-to-obtain-the-url-of-a-single-object-or-the-urls-of-multiple-objects).
     * - The size of the image uploaded by using ImageUrl cannot exceed 10 MB.
     * - The optional parameter **ClientToken** ensures the idempotence of the request. The client generates this parameter value, which must be unique across different requests. ClientToken supports only ASCII characters and cannot exceed 64 characters.
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
     * - **ImageUrl** is required and must be a publicly accessible HTTP/HTTPS URL.
     * - External images are not supported. Only image URLs accessible from the Chinese mainland public network are supported. Upload images to an Alibaba Cloud OSS bucket in a Chinese mainland region first, and then use the pre-signed URL of the image as the input parameter of this operation. References: [How to obtain the URL of a single file or the URLs of multiple files](https://www.alibabacloud.com/help/en/oss/user-guide/how-to-obtain-the-url-of-a-single-object-or-the-urls-of-multiple-objects).
     * - The size of the image uploaded by using ImageUrl cannot exceed 10 MB.
     * - The optional parameter **ClientToken** ensures the idempotence of the request. The client generates this parameter value, which must be unique across different requests. ClientToken supports only ASCII characters and cannot exceed 64 characters.
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
     * Creates a video generation task.
     *
     * @remarks
     * ## Request description
     * - This operation creates an AI video generation task. The system generates a video based on the positive prompt provided by the user.
     * - By default, the generated video is automatically embedded with a C2PA digital signature.
     * - After creating the task, use the `TaskId` to call the `GetVideoTaskResult` operation to query the generation result.
     *
     * @param request - CreateVideoTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVideoTaskResponse
     *
     * @param CreateVideoTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateVideoTaskResponse
     */
    public function createVideoTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->audio) {
            @$query['Audio'] = $request->audio;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->model) {
            @$query['Model'] = $request->model;
        }

        if (null !== $request->prompt) {
            @$query['Prompt'] = $request->prompt;
        }

        if (null !== $request->promptExtend) {
            @$query['PromptExtend'] = $request->promptExtend;
        }

        if (null !== $request->ratio) {
            @$query['Ratio'] = $request->ratio;
        }

        if (null !== $request->resolution) {
            @$query['Resolution'] = $request->resolution;
        }

        if (null !== $request->seed) {
            @$query['Seed'] = $request->seed;
        }

        if (null !== $request->watermark) {
            @$query['Watermark'] = $request->watermark;
        }

        if (null !== $request->media) {
            @$query['Media'] = $request->media;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateVideoTask',
            'version' => '2026-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVideoTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a video generation task.
     *
     * @remarks
     * ## Request description
     * - This operation creates an AI video generation task. The system generates a video based on the positive prompt provided by the user.
     * - By default, the generated video is automatically embedded with a C2PA digital signature.
     * - After creating the task, use the `TaskId` to call the `GetVideoTaskResult` operation to query the generation result.
     *
     * @param request - CreateVideoTaskRequest
     *
     * @returns CreateVideoTaskResponse
     *
     * @param CreateVideoTaskRequest $request
     *
     * @return CreateVideoTaskResponse
     */
    public function createVideoTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVideoTaskWithOptions($request, $runtime);
    }

    /**
     * Submits an image or video file for invisible watermark embedding and returns a task ID for querying the result.
     *
     * @remarks
     * ## Operation description
     * - **FileUrl** must be a publicly accessible HTTP/HTTPS URL. External files are not supported. Only file URLs accessible over the Chinese mainland public network are supported. Upload the file to an Alibaba Cloud Object Storage Service (OSS) bucket in a Chinese mainland region first, and then use the presigned URL of the file as the input parameter for this operation. References: [How do I obtain the URL of one or more objects?](https://www.alibabacloud.com/help/en/oss/user-guide/how-to-obtain-the-url-of-a-single-object-or-the-urls-of-multiple-objects)
     * - **FileType** must match the actual file type. The same value must be specified during both embedding and fetch.
     * - Supported file specifications: Video files must be no longer than 10 minutes and no larger than 100 MB. Image files must be no larger than 100 MB.
     * - The task completion time is approximately equal to the file duration. For example, embedding a 10-second video takes about 10 seconds.
     * - If the submission fails, no task record is created and a synchronous error is returned.
     *
     * @param request - CreateWatermarkEmbedTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWatermarkEmbedTaskResponse
     *
     * @param CreateWatermarkEmbedTaskRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateWatermarkEmbedTaskResponse
     */
    public function createWatermarkEmbedTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->fileType) {
            @$query['FileType'] = $request->fileType;
        }

        if (null !== $request->fileUrl) {
            @$query['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->level) {
            @$query['Level'] = $request->level;
        }

        if (null !== $request->reserved) {
            @$query['Reserved'] = $request->reserved;
        }

        if (null !== $request->watermarkContent) {
            @$query['WatermarkContent'] = $request->watermarkContent;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateWatermarkEmbedTask',
            'version' => '2026-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateWatermarkEmbedTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits an image or video file for invisible watermark embedding and returns a task ID for querying the result.
     *
     * @remarks
     * ## Operation description
     * - **FileUrl** must be a publicly accessible HTTP/HTTPS URL. External files are not supported. Only file URLs accessible over the Chinese mainland public network are supported. Upload the file to an Alibaba Cloud Object Storage Service (OSS) bucket in a Chinese mainland region first, and then use the presigned URL of the file as the input parameter for this operation. References: [How do I obtain the URL of one or more objects?](https://www.alibabacloud.com/help/en/oss/user-guide/how-to-obtain-the-url-of-a-single-object-or-the-urls-of-multiple-objects)
     * - **FileType** must match the actual file type. The same value must be specified during both embedding and fetch.
     * - Supported file specifications: Video files must be no longer than 10 minutes and no larger than 100 MB. Image files must be no larger than 100 MB.
     * - The task completion time is approximately equal to the file duration. For example, embedding a 10-second video takes about 10 seconds.
     * - If the submission fails, no task record is created and a synchronous error is returned.
     *
     * @param request - CreateWatermarkEmbedTaskRequest
     *
     * @returns CreateWatermarkEmbedTaskResponse
     *
     * @param CreateWatermarkEmbedTaskRequest $request
     *
     * @return CreateWatermarkEmbedTaskResponse
     */
    public function createWatermarkEmbedTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWatermarkEmbedTaskWithOptions($request, $runtime);
    }

    /**
     * Submits an image or video file to extract a dark watermark and returns a task ID.
     *
     * @remarks
     * ## Request description
     * - **FileUrl** must be a publicly accessible HTTP/HTTPS URL. External files are not supported. Only file URLs accessible from the Chinese mainland public network are supported. Upload the file to an Alibaba Cloud OSS bucket in a region within the Chinese mainland first, and then use the presigned URL of the file as the input parameter of this operation. References: [How do I obtain the URL of one or more objects?](https://www.alibabacloud.com/help/en/oss/user-guide/how-to-obtain-the-url-of-a-single-object-or-the-urls-of-multiple-objects)
     * - **FileType must be the same as the one used during embedding**: Make sure that the file type (image or video) for extraction is the same as the file type used when the watermark was embedded.
     * - **File specification limits**: Video files must be no longer than 10 minutes and no larger than 100 MB. Image files must also be no larger than 100 MB.
     * - **Processing time**: Approximately equal to the actual playback duration of the file. For example, a 10-second video takes approximately 10 seconds to complete the watermark fetch procedure.
     *
     * @param request - CreateWatermarkExtractTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWatermarkExtractTaskResponse
     *
     * @param CreateWatermarkExtractTaskRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateWatermarkExtractTaskResponse
     */
    public function createWatermarkExtractTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->fileType) {
            @$query['FileType'] = $request->fileType;
        }

        if (null !== $request->fileUrl) {
            @$query['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->reserved) {
            @$query['Reserved'] = $request->reserved;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateWatermarkExtractTask',
            'version' => '2026-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateWatermarkExtractTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits an image or video file to extract a dark watermark and returns a task ID.
     *
     * @remarks
     * ## Request description
     * - **FileUrl** must be a publicly accessible HTTP/HTTPS URL. External files are not supported. Only file URLs accessible from the Chinese mainland public network are supported. Upload the file to an Alibaba Cloud OSS bucket in a region within the Chinese mainland first, and then use the presigned URL of the file as the input parameter of this operation. References: [How do I obtain the URL of one or more objects?](https://www.alibabacloud.com/help/en/oss/user-guide/how-to-obtain-the-url-of-a-single-object-or-the-urls-of-multiple-objects)
     * - **FileType must be the same as the one used during embedding**: Make sure that the file type (image or video) for extraction is the same as the file type used when the watermark was embedded.
     * - **File specification limits**: Video files must be no longer than 10 minutes and no larger than 100 MB. Image files must also be no larger than 100 MB.
     * - **Processing time**: Approximately equal to the actual playback duration of the file. For example, a 10-second video takes approximately 10 seconds to complete the watermark fetch procedure.
     *
     * @param request - CreateWatermarkExtractTaskRequest
     *
     * @returns CreateWatermarkExtractTaskResponse
     *
     * @param CreateWatermarkExtractTaskRequest $request
     *
     * @return CreateWatermarkExtractTaskResponse
     */
    public function createWatermarkExtractTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWatermarkExtractTaskWithOptions($request, $runtime);
    }

    /**
     * Determines whether an image is AI-generated and returns detection labels with confidence scores.
     *
     * @remarks
     * ## Request description
     * - This operation detects whether a specified image is AI-generated content (AIGC). You can specify the image to detect by using an image URL or an OSS ObjectKey.
     * - You must provide at least one of ImageUrl and ObjectKey. If both are provided, ObjectKey takes precedence.
     * - When using the ObjectKey method, the system verifies whether the ObjectKey belongs to the current caller. Cross-tenant access is not allowed.
     * - This is a synchronous operation suitable for real-time detection of a single image. If you need asynchronous detection or credential detection at the same time, use the CreateImageDetectionTask operation.
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
     * Determines whether an image is AI-generated and returns detection labels with confidence scores.
     *
     * @remarks
     * ## Request description
     * - This operation detects whether a specified image is AI-generated content (AIGC). You can specify the image to detect by using an image URL or an OSS ObjectKey.
     * - You must provide at least one of ImageUrl and ObjectKey. If both are provided, ObjectKey takes precedence.
     * - When using the ObjectKey method, the system verifies whether the ObjectKey belongs to the current caller. Cross-tenant access is not allowed.
     * - This is a synchronous operation suitable for real-time detection of a single image. If you need asynchronous detection or credential detection at the same time, use the CreateImageDetectionTask operation.
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
     * - This operation detects and returns basic information about an image, including but not limited to the file name, image format (such as JPEG/PNG), file size, and resolution.
     * - `ImageUrl` is required and must be a publicly accessible HTTP/HTTPS URL. Currently, only image URLs accessible from the Chinese mainland public network are supported. Upload the image to an Alibaba Cloud OSS bucket in a Chinese mainland region first, and then use the presigned URL of the image as the input parameter for this operation. References: [How do I obtain the URL of one or more objects?](https://www.alibabacloud.com/help/en/oss/user-guide/how-to-obtain-the-url-of-a-single-object-or-the-urls-of-multiple-objects)
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
     * - This operation detects and returns basic information about an image, including but not limited to the file name, image format (such as JPEG/PNG), file size, and resolution.
     * - `ImageUrl` is required and must be a publicly accessible HTTP/HTTPS URL. Currently, only image URLs accessible from the Chinese mainland public network are supported. Upload the image to an Alibaba Cloud OSS bucket in a Chinese mainland region first, and then use the presigned URL of the image as the input parameter for this operation. References: [How do I obtain the URL of one or more objects?](https://www.alibabacloud.com/help/en/oss/user-guide/how-to-obtain-the-url-of-a-single-object-or-the-urls-of-multiple-objects)
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
     * Queries the status and results of a single-file or OSS Bucket batch C2PA signing task.
     *
     * @remarks
     * ## Request description
     * - This operation queries the status and final results of nodes created by using CreateC2paSignTask or CreateC2paBucketSignTask.
     * - It supports signing node queries for images, videos, and various audio formats (FLAC, M4A, MP3, and WAV).
     * - For BUCKET nodes, intermediate statistics information is not provided when the node is in the PROCESSING, PAUSING, PAUSED, or CANCELING state. Complete statistics information and the report location are returned only after the node enters the SUCCEEDED or CANCELED state.
     * - A valid TaskId must be provided for the query. This ID must be the value returned when the node was created. It supports the standard UUID format and is compatible with legacy decimal node IDs.
     *
     * @param request - GetC2paSignResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetC2paSignResultResponse
     *
     * @param GetC2paSignResultRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetC2paSignResultResponse
     */
    public function getC2paSignResultWithOptions($request, $runtime)
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
            'action' => 'GetC2paSignResult',
            'version' => '2026-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetC2paSignResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status and results of a single-file or OSS Bucket batch C2PA signing task.
     *
     * @remarks
     * ## Request description
     * - This operation queries the status and final results of nodes created by using CreateC2paSignTask or CreateC2paBucketSignTask.
     * - It supports signing node queries for images, videos, and various audio formats (FLAC, M4A, MP3, and WAV).
     * - For BUCKET nodes, intermediate statistics information is not provided when the node is in the PROCESSING, PAUSING, PAUSED, or CANCELING state. Complete statistics information and the report location are returned only after the node enters the SUCCEEDED or CANCELED state.
     * - A valid TaskId must be provided for the query. This ID must be the value returned when the node was created. It supports the standard UUID format and is compatible with legacy decimal node IDs.
     *
     * @param request - GetC2paSignResultRequest
     *
     * @returns GetC2paSignResultResponse
     *
     * @param GetC2paSignResultRequest $request
     *
     * @return GetC2paSignResultResponse
     */
    public function getC2paSignResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getC2paSignResultWithOptions($request, $runtime);
    }

    /**
     * Queries the status and result of an image defect detection task, including the abnormality score and reason.
     *
     * @remarks
     * ## Request description
     * This operation queries the execution status and result of an image defect detection task created by `CreateImageDefectDetectionTask`. Follow these polling conventions:
     * * **Set the polling interval to at least 5 seconds**: When the task is in the `running` state, each call to this operation triggers a real downstream query. Excessively frequent polling only increases system load and does not speed up result retrieval.
     * * **Total timeout is 30 minutes**: If no result is received within 30 minutes after the task is created, the server marks the task as `failed` with the message `poll timeout: no result within 30m0s`. After that, the task no longer initiates new downstream query requests.
     * * After the task reaches the `succeeded` or `failed` desired state, subsequent calls to this operation directly return the stored result without triggering additional downstream processing.
     * Note: The content in the `Result` field may be HTML-escaped JSON data. Unescape it before parsing.
     *
     * @param request - GetImageDefectDetectionTaskResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetImageDefectDetectionTaskResultResponse
     *
     * @param GetImageDefectDetectionTaskResultRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return GetImageDefectDetectionTaskResultResponse
     */
    public function getImageDefectDetectionTaskResultWithOptions($request, $runtime)
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
            'action' => 'GetImageDefectDetectionTaskResult',
            'version' => '2026-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetImageDefectDetectionTaskResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status and result of an image defect detection task, including the abnormality score and reason.
     *
     * @remarks
     * ## Request description
     * This operation queries the execution status and result of an image defect detection task created by `CreateImageDefectDetectionTask`. Follow these polling conventions:
     * * **Set the polling interval to at least 5 seconds**: When the task is in the `running` state, each call to this operation triggers a real downstream query. Excessively frequent polling only increases system load and does not speed up result retrieval.
     * * **Total timeout is 30 minutes**: If no result is received within 30 minutes after the task is created, the server marks the task as `failed` with the message `poll timeout: no result within 30m0s`. After that, the task no longer initiates new downstream query requests.
     * * After the task reaches the `succeeded` or `failed` desired state, subsequent calls to this operation directly return the stored result without triggering additional downstream processing.
     * Note: The content in the `Result` field may be HTML-escaped JSON data. Unescape it before parsing.
     *
     * @param request - GetImageDefectDetectionTaskResultRequest
     *
     * @returns GetImageDefectDetectionTaskResultResponse
     *
     * @param GetImageDefectDetectionTaskResultRequest $request
     *
     * @return GetImageDefectDetectionTaskResultResponse
     */
    public function getImageDefectDetectionTaskResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImageDefectDetectionTaskResultWithOptions($request, $runtime);
    }

    /**
     * Queries the status and result of an image detection task created by CreateImageDetectionTask.
     *
     * @remarks
     * ## Description
     * Call this operation to query the execution status and result of a specified image detection task, including AIGC detection labels and tamper detection results. Poll at intervals of 2 to 5 seconds until the task status changes to succeeded or failed.
     * ## Precautions
     * * Ensure that you use a valid TaskId for the query.
     * * If the task is not complete, increase the polling interval to avoid wasting resources due to frequent requests.
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
     * Queries the status and result of an image detection task created by CreateImageDetectionTask.
     *
     * @remarks
     * ## Description
     * Call this operation to query the execution status and result of a specified image detection task, including AIGC detection labels and tamper detection results. Poll at intervals of 2 to 5 seconds until the task status changes to succeeded or failed.
     * ## Precautions
     * * Ensure that you use a valid TaskId for the query.
     * * If the task is not complete, increase the polling interval to avoid wasting resources due to frequent requests.
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
     * Queries the status and list of abnormal items for an individual income tax screenshot detection task.
     *
     * @remarks
     * ## Operation description
     * - **Polling recommendation**: Set the polling interval to at least 5 seconds. Polling more frequently while the task is in `running` status does not return results faster.
     * - **Total timeout**: If no result is obtained within 30 minutes after the task is created, the task is marked as `failed` with the Message `poll timeout: no result within 30m0s`.
     * - **Desired state handling**: `succeeded` and `failed` are the final states of the task. The result does not change after the task reaches either state.
     * - **Items is an empty array**: This indicates that no abnormal items are detected. It is not an error.
     * - **Coordinates may be an empty array**: Some abnormalities are image-wide in nature (for example, quality issues affecting the entire image) and cannot be located within a specific bounding box. In this case, `Coordinates` is an empty array, but the abnormal item itself is still valid and should still be presented to the user.
     * - **Stage is an open value set**: Future versions may introduce new `Stage` values. Display unknown values as-is. Do not perform whitelist validation on `Stage` or filter abnormal items based on it.
     * - **quality stage**: A `Stage` value of `quality` indicates that the image quality is too low and the detection result has low confidence. Prompt the user to resubmit a clear original screenshot and run the detection again.
     *
     * @param request - GetImageIncomeTaxDetectionTaskResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetImageIncomeTaxDetectionTaskResultResponse
     *
     * @param GetImageIncomeTaxDetectionTaskResultRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return GetImageIncomeTaxDetectionTaskResultResponse
     */
    public function getImageIncomeTaxDetectionTaskResultWithOptions($request, $runtime)
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
            'action' => 'GetImageIncomeTaxDetectionTaskResult',
            'version' => '2026-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetImageIncomeTaxDetectionTaskResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status and list of abnormal items for an individual income tax screenshot detection task.
     *
     * @remarks
     * ## Operation description
     * - **Polling recommendation**: Set the polling interval to at least 5 seconds. Polling more frequently while the task is in `running` status does not return results faster.
     * - **Total timeout**: If no result is obtained within 30 minutes after the task is created, the task is marked as `failed` with the Message `poll timeout: no result within 30m0s`.
     * - **Desired state handling**: `succeeded` and `failed` are the final states of the task. The result does not change after the task reaches either state.
     * - **Items is an empty array**: This indicates that no abnormal items are detected. It is not an error.
     * - **Coordinates may be an empty array**: Some abnormalities are image-wide in nature (for example, quality issues affecting the entire image) and cannot be located within a specific bounding box. In this case, `Coordinates` is an empty array, but the abnormal item itself is still valid and should still be presented to the user.
     * - **Stage is an open value set**: Future versions may introduce new `Stage` values. Display unknown values as-is. Do not perform whitelist validation on `Stage` or filter abnormal items based on it.
     * - **quality stage**: A `Stage` value of `quality` indicates that the image quality is too low and the detection result has low confidence. Prompt the user to resubmit a clear original screenshot and run the detection again.
     *
     * @param request - GetImageIncomeTaxDetectionTaskResultRequest
     *
     * @returns GetImageIncomeTaxDetectionTaskResultResponse
     *
     * @param GetImageIncomeTaxDetectionTaskResultRequest $request
     *
     * @return GetImageIncomeTaxDetectionTaskResultResponse
     */
    public function getImageIncomeTaxDetectionTaskResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImageIncomeTaxDetectionTaskResultWithOptions($request, $runtime);
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
     * Queries the task result of a video generation node.
     *
     * @remarks
     * ## Request description
     * - Call this operation to query the execution status and result of an asynchronous video generation task created by calling `CreateVideoTask`.
     * - Poll the task status at an interval of 2 to 5 seconds until the task status changes to `succeeded` or `failed`.
     *
     * @param request - GetVideoTaskResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVideoTaskResultResponse
     *
     * @param GetVideoTaskResultRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetVideoTaskResultResponse
     */
    public function getVideoTaskResultWithOptions($request, $runtime)
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
            'action' => 'GetVideoTaskResult',
            'version' => '2026-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVideoTaskResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the task result of a video generation node.
     *
     * @remarks
     * ## Request description
     * - Call this operation to query the execution status and result of an asynchronous video generation task created by calling `CreateVideoTask`.
     * - Poll the task status at an interval of 2 to 5 seconds until the task status changes to `succeeded` or `failed`.
     *
     * @param request - GetVideoTaskResultRequest
     *
     * @returns GetVideoTaskResultResponse
     *
     * @param GetVideoTaskResultRequest $request
     *
     * @return GetVideoTaskResultResponse
     */
    public function getVideoTaskResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVideoTaskResultWithOptions($request, $runtime);
    }

    /**
     * Queries the status and download URL of an invisible watermark embedding task.
     *
     * @remarks
     * ## Operation description
     * - This operation queries the execution status and result of an invisible watermark embedding task created by `CreateWatermarkEmbedTask`.
     * - Tasks are processed asynchronously on the server side. Call this operation to retrieve the latest status.
     * - **Polling recommendations**: Ensure that the polling interval is at least 5 seconds. For video tasks, the expected completion time is approximately equal to the media duration (about 1x speed). Image tasks are completed within 5 minutes.
     * - **Timeout mechanism**: The total timeout window for video tasks is 10 minutes, and for image tasks is 5 minutes. Tasks that are not completed within this period are marked as failed, and the corresponding error message is returned.
     * - When the task status is `succeeded` or `failed`, the task has reached a desired state, and the result no longer changes.
     *
     * @param request - GetWatermarkEmbedTaskResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWatermarkEmbedTaskResultResponse
     *
     * @param GetWatermarkEmbedTaskResultRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetWatermarkEmbedTaskResultResponse
     */
    public function getWatermarkEmbedTaskResultWithOptions($request, $runtime)
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
            'action' => 'GetWatermarkEmbedTaskResult',
            'version' => '2026-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetWatermarkEmbedTaskResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status and download URL of an invisible watermark embedding task.
     *
     * @remarks
     * ## Operation description
     * - This operation queries the execution status and result of an invisible watermark embedding task created by `CreateWatermarkEmbedTask`.
     * - Tasks are processed asynchronously on the server side. Call this operation to retrieve the latest status.
     * - **Polling recommendations**: Ensure that the polling interval is at least 5 seconds. For video tasks, the expected completion time is approximately equal to the media duration (about 1x speed). Image tasks are completed within 5 minutes.
     * - **Timeout mechanism**: The total timeout window for video tasks is 10 minutes, and for image tasks is 5 minutes. Tasks that are not completed within this period are marked as failed, and the corresponding error message is returned.
     * - When the task status is `succeeded` or `failed`, the task has reached a desired state, and the result no longer changes.
     *
     * @param request - GetWatermarkEmbedTaskResultRequest
     *
     * @returns GetWatermarkEmbedTaskResultResponse
     *
     * @param GetWatermarkEmbedTaskResultRequest $request
     *
     * @return GetWatermarkEmbedTaskResultResponse
     */
    public function getWatermarkEmbedTaskResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWatermarkEmbedTaskResultWithOptions($request, $runtime);
    }

    /**
     * Queries the status and extraction result of a dark watermark extraction task.
     *
     * @remarks
     * ## Operation description
     * - **Polling recommendation**: Set the polling interval to at least 5 seconds. The task completion time is approximately equal to the duration of the carrier media (approximately 1x speed).
     * - **Timeout handling**: The total timeout window for video tasks is 10 minutes, and for image tasks is 5 minutes. If a task is not completed within this time, the task status changes to `failed`.
     * - **Desired state confirmation**: `succeeded` or `failed` is the final status. The result does not change after the task reaches either status.
     *
     * @param request - GetWatermarkExtractTaskResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWatermarkExtractTaskResultResponse
     *
     * @param GetWatermarkExtractTaskResultRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetWatermarkExtractTaskResultResponse
     */
    public function getWatermarkExtractTaskResultWithOptions($request, $runtime)
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
            'action' => 'GetWatermarkExtractTaskResult',
            'version' => '2026-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetWatermarkExtractTaskResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status and extraction result of a dark watermark extraction task.
     *
     * @remarks
     * ## Operation description
     * - **Polling recommendation**: Set the polling interval to at least 5 seconds. The task completion time is approximately equal to the duration of the carrier media (approximately 1x speed).
     * - **Timeout handling**: The total timeout window for video tasks is 10 minutes, and for image tasks is 5 minutes. If a task is not completed within this time, the task status changes to `failed`.
     * - **Desired state confirmation**: `succeeded` or `failed` is the final status. The result does not change after the task reaches either status.
     *
     * @param request - GetWatermarkExtractTaskResultRequest
     *
     * @returns GetWatermarkExtractTaskResultResponse
     *
     * @param GetWatermarkExtractTaskResultRequest $request
     *
     * @return GetWatermarkExtractTaskResultResponse
     */
    public function getWatermarkExtractTaskResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWatermarkExtractTaskResultWithOptions($request, $runtime);
    }

    /**
     * Pauses a batch C2PA trusted signing task for a specified OSS bucket.
     *
     * @remarks
     * ## Operation description
     * - This operation pauses a batch trusted signing parent task for a bucket that is owned and still controllable by the currently authenticated account.
     * - The paused state is persisted to the database and remains effective after a service restart.
     * - If no files have been submitted to the trusted signing service, the task directly enters the `PAUSED` state. If submitted files exist, the task first enters the `PAUSING` state, stops scanning and new submissions, and continues to query the actual results of those files. After all results converge, the task enters the `PAUSED` state.
     * - Pausing does not interrupt an in-progress individual OSS or trusted signing service invoke, nor does it revoke signatures or metering that have already been completed.
     * - Invoking this operation repeatedly on a task that is already in the `PAUSING` or `PAUSED` state is idempotent and succeeds.
     * - Tasks in the `SUCCEEDED`, `FAILED`, `CANCELING`, or `CANCELED` state cannot be paused.
     *
     * @param request - PauseC2paBucketSignTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PauseC2paBucketSignTaskResponse
     *
     * @param PauseC2paBucketSignTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return PauseC2paBucketSignTaskResponse
     */
    public function pauseC2paBucketSignTaskWithOptions($request, $runtime)
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
            'action' => 'PauseC2paBucketSignTask',
            'version' => '2026-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PauseC2paBucketSignTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Pauses a batch C2PA trusted signing task for a specified OSS bucket.
     *
     * @remarks
     * ## Operation description
     * - This operation pauses a batch trusted signing parent task for a bucket that is owned and still controllable by the currently authenticated account.
     * - The paused state is persisted to the database and remains effective after a service restart.
     * - If no files have been submitted to the trusted signing service, the task directly enters the `PAUSED` state. If submitted files exist, the task first enters the `PAUSING` state, stops scanning and new submissions, and continues to query the actual results of those files. After all results converge, the task enters the `PAUSED` state.
     * - Pausing does not interrupt an in-progress individual OSS or trusted signing service invoke, nor does it revoke signatures or metering that have already been completed.
     * - Invoking this operation repeatedly on a task that is already in the `PAUSING` or `PAUSED` state is idempotent and succeeds.
     * - Tasks in the `SUCCEEDED`, `FAILED`, `CANCELING`, or `CANCELED` state cannot be paused.
     *
     * @param request - PauseC2paBucketSignTaskRequest
     *
     * @returns PauseC2paBucketSignTaskResponse
     *
     * @param PauseC2paBucketSignTaskRequest $request
     *
     * @return PauseC2paBucketSignTaskResponse
     */
    public function pauseC2paBucketSignTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pauseC2paBucketSignTaskWithOptions($request, $runtime);
    }

    /**
     * Resumes a paused or pausing OSS Bucket batch C2PA trusted signing task.
     *
     * @remarks
     * ## Operation description
     * - This operation resumes a Bucket batch trusted signing parent task owned by the currently authenticated account.
     * - After resumption, the task continues execution from the saved scan cursor and per-file stage. It does not rebuild the object list or resubmit trusted signing service tasks that have already been persisted.
     * - This operation supports resuming from the `PAUSED` or `PAUSING` state. For tasks already in the `PROCESSING` state, repeated calls are idempotent and succeed.
     * - If the task was previously auto-paused due to failures in shared dependencies such as user OSS, internal OSS, or the trusted signing service, the pause error recorded on the parent task is cleared upon resumption. If the dependencies have not yet recovered, the task may enter the `PAUSING` or `PAUSED` state again with a new reason recorded.
     * - Before resuming a task that was paused due to permission issues, restore the OSS permissions of `AliyunServiceRoleForAIDeepSign` for the source prefix and output prefix. Otherwise, the task will be auto-paused again.
     * - Tasks in the `SUCCEEDED`, `FAILED`, `CANCELING`, or `CANCELED` state cannot be resumed.
     *
     * @param request - ResumeC2paBucketSignTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResumeC2paBucketSignTaskResponse
     *
     * @param ResumeC2paBucketSignTaskRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ResumeC2paBucketSignTaskResponse
     */
    public function resumeC2paBucketSignTaskWithOptions($request, $runtime)
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
            'action' => 'ResumeC2paBucketSignTask',
            'version' => '2026-05-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResumeC2paBucketSignTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resumes a paused or pausing OSS Bucket batch C2PA trusted signing task.
     *
     * @remarks
     * ## Operation description
     * - This operation resumes a Bucket batch trusted signing parent task owned by the currently authenticated account.
     * - After resumption, the task continues execution from the saved scan cursor and per-file stage. It does not rebuild the object list or resubmit trusted signing service tasks that have already been persisted.
     * - This operation supports resuming from the `PAUSED` or `PAUSING` state. For tasks already in the `PROCESSING` state, repeated calls are idempotent and succeed.
     * - If the task was previously auto-paused due to failures in shared dependencies such as user OSS, internal OSS, or the trusted signing service, the pause error recorded on the parent task is cleared upon resumption. If the dependencies have not yet recovered, the task may enter the `PAUSING` or `PAUSED` state again with a new reason recorded.
     * - Before resuming a task that was paused due to permission issues, restore the OSS permissions of `AliyunServiceRoleForAIDeepSign` for the source prefix and output prefix. Otherwise, the task will be auto-paused again.
     * - Tasks in the `SUCCEEDED`, `FAILED`, `CANCELING`, or `CANCELED` state cannot be resumed.
     *
     * @param request - ResumeC2paBucketSignTaskRequest
     *
     * @returns ResumeC2paBucketSignTaskResponse
     *
     * @param ResumeC2paBucketSignTaskRequest $request
     *
     * @return ResumeC2paBucketSignTaskResponse
     */
    public function resumeC2paBucketSignTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeC2paBucketSignTaskWithOptions($request, $runtime);
    }

    /**
     * Signs an image with a basic C2PA signature by using a platform-owned certificate, supports content integrity verification, and returns the download URL of the signed image.
     *
     * @remarks
     * ## Signature types
     * - **Basic signature**: Signs with a platform-owned certificate and supports content integrity verification.
     * - **Trusted signature**: In addition to integrity verification, the signing certificate chain can be verified through the C2PA official trust list.
     * This operation provides basic signing. For trusted signing, call `CreateC2paSignTask` to create a task and call `GetC2paSignResult` to query the result.
     * ## Request description
     * - `ImageUrl` is required and must be a publicly accessible HTTP/HTTPS URL.
     * - External image URLs are not currently supported. Only image URLs that are publicly accessible within the Chinese mainland are supported. Upload the image to an Alibaba Cloud OSS bucket in a region within the Chinese mainland first, and then use the pre-signed URL of the image as the input parameter of this operation. References: [How to obtain the URL of a single file or the URLs of multiple files](https://www.alibabacloud.com/help/en/oss/user-guide/how-to-obtain-the-url-of-a-single-object-or-the-urls-of-multiple-objects).
     * - Supported image formats: JPEG and PNG. Unsupported formats return the C2PA_FORMAT_UNSUPPORTED fault.
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
     * Signs an image with a basic C2PA signature by using a platform-owned certificate, supports content integrity verification, and returns the download URL of the signed image.
     *
     * @remarks
     * ## Signature types
     * - **Basic signature**: Signs with a platform-owned certificate and supports content integrity verification.
     * - **Trusted signature**: In addition to integrity verification, the signing certificate chain can be verified through the C2PA official trust list.
     * This operation provides basic signing. For trusted signing, call `CreateC2paSignTask` to create a task and call `GetC2paSignResult` to query the result.
     * ## Request description
     * - `ImageUrl` is required and must be a publicly accessible HTTP/HTTPS URL.
     * - External image URLs are not currently supported. Only image URLs that are publicly accessible within the Chinese mainland are supported. Upload the image to an Alibaba Cloud OSS bucket in a region within the Chinese mainland first, and then use the pre-signed URL of the image as the input parameter of this operation. References: [How to obtain the URL of a single file or the URLs of multiple files](https://www.alibabacloud.com/help/en/oss/user-guide/how-to-obtain-the-url-of-a-single-object-or-the-urls-of-multiple-objects).
     * - Supported image formats: JPEG and PNG. Unsupported formats return the C2PA_FORMAT_UNSUPPORTED fault.
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
     * Verifies the C2PA signature in an image and returns the content integrity verification status and issuer certificate trust information.
     *
     * @remarks
     * ## Signature types
     * - **Basic signature**: Uses the platform\\"s own certificate for signing. Supports content integrity verification.
     * - **Trusted signature**: In addition to integrity verification, the signing certificate chain can be verified through the C2PA official trust list.
     * ## Verification result description
     * - Content integrity verification checks whether the image and its signature-protected provenance information remain consistent with the state at the time of signing. It does not indicate that the visual content itself is authentic.
     * - `VerificationState=Valid` indicates that the signature and data hash are valid and content integrity verification has passed. This alone cannot be used to determine that the signature is a trusted signature.
     * - `VerificationState=Trusted` and `IssuerTrusted` present the certificate trust verification results. Whether a signature qualifies as a trusted signature as defined in this topic depends on whether the signing certificate chain can be verified through the C2PA official trust list, not solely on the certificate issuer name.
     * ## Request description
     * - This operation verifies the C2PA (Coalition for Content Provenance and Authenticity) digital signature embedded in a specified image.
     * - `ImageUrl` **does not currently support images from external networks. Only image URLs accessible over the China public network are supported. Upload the image to an Alibaba Cloud OSS bucket in a China region first, and then use the presigned URL of the image as the input parameter for this operation.** References: [How do I obtain the URL of one or more objects?](https://www.alibabacloud.com/help/en/oss/user-guide/how-to-obtain-the-url-of-a-single-object-or-the-urls-of-multiple-objects)
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
     * Verifies the C2PA signature in an image and returns the content integrity verification status and issuer certificate trust information.
     *
     * @remarks
     * ## Signature types
     * - **Basic signature**: Uses the platform\\"s own certificate for signing. Supports content integrity verification.
     * - **Trusted signature**: In addition to integrity verification, the signing certificate chain can be verified through the C2PA official trust list.
     * ## Verification result description
     * - Content integrity verification checks whether the image and its signature-protected provenance information remain consistent with the state at the time of signing. It does not indicate that the visual content itself is authentic.
     * - `VerificationState=Valid` indicates that the signature and data hash are valid and content integrity verification has passed. This alone cannot be used to determine that the signature is a trusted signature.
     * - `VerificationState=Trusted` and `IssuerTrusted` present the certificate trust verification results. Whether a signature qualifies as a trusted signature as defined in this topic depends on whether the signing certificate chain can be verified through the C2PA official trust list, not solely on the certificate issuer name.
     * ## Request description
     * - This operation verifies the C2PA (Coalition for Content Provenance and Authenticity) digital signature embedded in a specified image.
     * - `ImageUrl` **does not currently support images from external networks. Only image URLs accessible over the China public network are supported. Upload the image to an Alibaba Cloud OSS bucket in a China region first, and then use the presigned URL of the image as the input parameter for this operation.** References: [How do I obtain the URL of one or more objects?](https://www.alibabacloud.com/help/en/oss/user-guide/how-to-obtain-the-url-of-a-single-object-or-the-urls-of-multiple-objects)
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
