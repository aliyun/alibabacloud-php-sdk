<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivpd\V20190625;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\ChangeImageSizeRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\ChangeImageSizeResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\CreateSegmentBodyJobRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\CreateSegmentBodyJobResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\DetectImageElementsRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\DetectImageElementsResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\EraseLogoInVideoRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\EraseLogoInVideoResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\ExtendImageStyleRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\ExtendImageStyleResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\GetAsyncJobResultRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\GetAsyncJobResultResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\GetAsyncResultRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\GetAsyncResultResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\GetJobResultRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\GetJobResultResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\GetJobStatusRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\GetJobStatusResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\GetUserBucketConfigResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\HighlightGameVideoAdvanceRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\HighlightGameVideoRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\HighlightGameVideoResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\ListPackageDesignModelTypesResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\ListUserBucketsRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\ListUserBucketsResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\MakeSuperResolutionImageRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\MakeSuperResolutionImageResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\RecognizeImageColorRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\RecognizeImageColorResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\RecognizeImageStyleRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\RecognizeImageStyleResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\RecolorImageRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\RecolorImageResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\SegmentBodyRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\SegmentBodyResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\SegmentCommodityRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\SegmentCommodityResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\SegmentImageRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\SegmentImageResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\UpdateUserBucketConfigRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\UpdateUserBucketConfigResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use AlibabaCloud\Tea\Rpc\Rpc\Config;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Ivpd extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ivpd', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param ChangeImageSizeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ChangeImageSizeResponse
     */
    public function changeImageSizeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->height)) {
            $body['Height'] = $request->height;
        }
        if (!Utils::isUnset($request->url)) {
            $body['Url'] = $request->url;
        }
        if (!Utils::isUnset($request->width)) {
            $body['Width'] = $request->width;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ChangeImageSize',
            'version'     => '2019-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeImageSizeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ChangeImageSizeRequest $request
     *
     * @return ChangeImageSizeResponse
     */
    public function changeImageSize($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeImageSizeWithOptions($request, $runtime);
    }

    /**
     * @param CreateSegmentBodyJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateSegmentBodyJobResponse
     */
    public function createSegmentBodyJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dataList)) {
            $body['DataList'] = $request->dataList;
        }
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->timeToLive)) {
            $body['TimeToLive'] = $request->timeToLive;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSegmentBodyJob',
            'version'     => '2019-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSegmentBodyJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSegmentBodyJobRequest $request
     *
     * @return CreateSegmentBodyJobResponse
     */
    public function createSegmentBodyJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSegmentBodyJobWithOptions($request, $runtime);
    }

    /**
     * @param DetectImageElementsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DetectImageElementsResponse
     */
    public function detectImageElementsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->url)) {
            $body['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DetectImageElements',
            'version'     => '2019-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectImageElementsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetectImageElementsRequest $request
     *
     * @return DetectImageElementsResponse
     */
    public function detectImageElements($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectImageElementsWithOptions($request, $runtime);
    }

    /**
     * @param EraseLogoInVideoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return EraseLogoInVideoResponse
     */
    public function eraseLogoInVideoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->boxes)) {
            $body['Boxes'] = $request->boxes;
        }
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->videoUrl)) {
            $body['VideoUrl'] = $request->videoUrl;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EraseLogoInVideo',
            'version'     => '2019-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EraseLogoInVideoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EraseLogoInVideoRequest $request
     *
     * @return EraseLogoInVideoResponse
     */
    public function eraseLogoInVideo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->eraseLogoInVideoWithOptions($request, $runtime);
    }

    /**
     * @param ExtendImageStyleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ExtendImageStyleResponse
     */
    public function extendImageStyleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->majorUrl)) {
            $body['MajorUrl'] = $request->majorUrl;
        }
        if (!Utils::isUnset($request->styleUrl)) {
            $body['StyleUrl'] = $request->styleUrl;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExtendImageStyle',
            'version'     => '2019-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExtendImageStyleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExtendImageStyleRequest $request
     *
     * @return ExtendImageStyleResponse
     */
    public function extendImageStyle($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->extendImageStyleWithOptions($request, $runtime);
    }

    /**
     * @param GetAsyncJobResultRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetAsyncJobResultResponse
     */
    public function getAsyncJobResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetAsyncJobResult',
            'version'     => '2019-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAsyncJobResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAsyncJobResultRequest $request
     *
     * @return GetAsyncJobResultResponse
     */
    public function getAsyncJobResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAsyncJobResultWithOptions($request, $runtime);
    }

    /**
     * @param GetAsyncResultRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetAsyncResultResponse
     */
    public function getAsyncResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetAsyncResult',
            'version'     => '2019-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAsyncResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAsyncResultRequest $request
     *
     * @return GetAsyncResultResponse
     */
    public function getAsyncResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAsyncResultWithOptions($request, $runtime);
    }

    /**
     * @param GetJobResultRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetJobResultResponse
     */
    public function getJobResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetJobResult',
            'version'     => '2019-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetJobResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetJobResultRequest $request
     *
     * @return GetJobResultResponse
     */
    public function getJobResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobResultWithOptions($request, $runtime);
    }

    /**
     * @param GetJobStatusRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetJobStatusResponse
     */
    public function getJobStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetJobStatus',
            'version'     => '2019-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetJobStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetJobStatusRequest $request
     *
     * @return GetJobStatusResponse
     */
    public function getJobStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobStatusWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetUserBucketConfigResponse
     */
    public function getUserBucketConfigWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetUserBucketConfig',
            'version'     => '2019-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserBucketConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetUserBucketConfigResponse
     */
    public function getUserBucketConfig()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserBucketConfigWithOptions($runtime);
    }

    /**
     * @param HighlightGameVideoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return HighlightGameVideoResponse
     */
    public function highlightGameVideoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->async)) {
            $body['Async'] = $request->async;
        }
        if (!Utils::isUnset($request->videoUrl)) {
            $body['VideoUrl'] = $request->videoUrl;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'HighlightGameVideo',
            'version'     => '2019-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return HighlightGameVideoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HighlightGameVideoRequest $request
     *
     * @return HighlightGameVideoResponse
     */
    public function highlightGameVideo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->highlightGameVideoWithOptions($request, $runtime);
    }

    /**
     * @param HighlightGameVideoAdvanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return HighlightGameVideoResponse
     */
    public function highlightGameVideoAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'ivpd',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = null;
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $highlightGameVideoReq = new HighlightGameVideoRequest([]);
        OpenApiUtilClient::convert($request, $highlightGameVideoReq);
        if (!Utils::isUnset($request->videoUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->videoUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->accessKeyId,
                'policy'              => $authResponse->encodedPolicy,
                'signature'           => $authResponse->signature,
                'key'                 => $authResponse->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $highlightGameVideoReq->videoUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->highlightGameVideoWithOptions($highlightGameVideoReq, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListPackageDesignModelTypesResponse
     */
    public function listPackageDesignModelTypesWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListPackageDesignModelTypes',
            'version'     => '2019-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPackageDesignModelTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListPackageDesignModelTypesResponse
     */
    public function listPackageDesignModelTypes()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPackageDesignModelTypesWithOptions($runtime);
    }

    /**
     * @param ListUserBucketsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListUserBucketsResponse
     */
    public function listUserBucketsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->data)) {
            $body['Data'] = $request->data;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListUserBuckets',
            'version'     => '2019-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserBucketsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUserBucketsRequest $request
     *
     * @return ListUserBucketsResponse
     */
    public function listUserBuckets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserBucketsWithOptions($request, $runtime);
    }

    /**
     * @param MakeSuperResolutionImageRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return MakeSuperResolutionImageResponse
     */
    public function makeSuperResolutionImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->url)) {
            $body['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'MakeSuperResolutionImage',
            'version'     => '2019-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MakeSuperResolutionImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MakeSuperResolutionImageRequest $request
     *
     * @return MakeSuperResolutionImageResponse
     */
    public function makeSuperResolutionImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->makeSuperResolutionImageWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeImageColorRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RecognizeImageColorResponse
     */
    public function recognizeImageColorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->colorCount)) {
            $body['ColorCount'] = $request->colorCount;
        }
        if (!Utils::isUnset($request->url)) {
            $body['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RecognizeImageColor',
            'version'     => '2019-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeImageColorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeImageColorRequest $request
     *
     * @return RecognizeImageColorResponse
     */
    public function recognizeImageColor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeImageColorWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeImageStyleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RecognizeImageStyleResponse
     */
    public function recognizeImageStyleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->url)) {
            $body['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RecognizeImageStyle',
            'version'     => '2019-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeImageStyleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeImageStyleRequest $request
     *
     * @return RecognizeImageStyleResponse
     */
    public function recognizeImageStyle($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeImageStyleWithOptions($request, $runtime);
    }

    /**
     * @param RecolorImageRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RecolorImageResponse
     */
    public function recolorImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->colorCount)) {
            $body['ColorCount'] = $request->colorCount;
        }
        if (!Utils::isUnset($request->colorTemplate)) {
            $body['ColorTemplate'] = $request->colorTemplate;
        }
        if (!Utils::isUnset($request->mode)) {
            $body['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->refUrl)) {
            $body['RefUrl'] = $request->refUrl;
        }
        if (!Utils::isUnset($request->url)) {
            $body['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RecolorImage',
            'version'     => '2019-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecolorImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecolorImageRequest $request
     *
     * @return RecolorImageResponse
     */
    public function recolorImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recolorImageWithOptions($request, $runtime);
    }

    /**
     * @param SegmentBodyRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SegmentBodyResponse
     */
    public function segmentBodyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->imageUrl)) {
            $body['ImageUrl'] = $request->imageUrl;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SegmentBody',
            'version'     => '2019-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SegmentBodyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SegmentBodyRequest $request
     *
     * @return SegmentBodyResponse
     */
    public function segmentBody($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->segmentBodyWithOptions($request, $runtime);
    }

    /**
     * @param SegmentCommodityRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SegmentCommodityResponse
     */
    public function segmentCommodityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageURL)) {
            $query['ImageURL'] = $request->imageURL;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SegmentCommodity',
            'version'     => '2019-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SegmentCommodityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SegmentCommodityRequest $request
     *
     * @return SegmentCommodityResponse
     */
    public function segmentCommodity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->segmentCommodityWithOptions($request, $runtime);
    }

    /**
     * @param SegmentImageRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SegmentImageResponse
     */
    public function segmentImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->url)) {
            $body['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SegmentImage',
            'version'     => '2019-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SegmentImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SegmentImageRequest $request
     *
     * @return SegmentImageResponse
     */
    public function segmentImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->segmentImageWithOptions($request, $runtime);
    }

    /**
     * @param UpdateUserBucketConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateUserBucketConfigResponse
     */
    public function updateUserBucketConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->data)) {
            $body['Data'] = $request->data;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateUserBucketConfig',
            'version'     => '2019-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateUserBucketConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateUserBucketConfigRequest $request
     *
     * @return UpdateUserBucketConfigResponse
     */
    public function updateUserBucketConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserBucketConfigWithOptions($request, $runtime);
    }
}
