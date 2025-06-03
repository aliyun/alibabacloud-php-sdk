<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\AnalyzeChestVesselAdvanceRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\AnalyzeChestVesselRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\AnalyzeChestVesselResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\CalcBMDAdvanceRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\CalcBMDRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\CalcBMDResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\CalcCACSAdvanceRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\CalcCACSRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\CalcCACSResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectCovid19CadAdvanceRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectCovid19CadRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectCovid19CadResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectLiverSteatosisAdvanceRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectLiverSteatosisRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectLiverSteatosisResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectLungNoduleAdvanceRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectLungNoduleRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectLungNoduleResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectLymphAdvanceRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectLymphRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectLymphResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectPancAdvanceRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectPancRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectPancResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectRibFractureAdvanceRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectRibFractureRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectRibFractureResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectSkinDiseaseAdvanceRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectSkinDiseaseRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectSkinDiseaseResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\FeedbackSessionRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\FeedbackSessionResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\GenerateReportRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\GenerateReportResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\GenerateReportShrinkRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\GetAsyncJobResultRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\GetAsyncJobResultResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\PredictCVDAdvanceRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\PredictCVDRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\PredictCVDResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunCTRegistrationAdvanceRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunCTRegistrationRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunCTRegistrationResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunMedQAAdvanceRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunMedQARequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunMedQAResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTAdvanceRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenCRCAdvanceRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenCRCRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenCRCResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenECAdvanceRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenECRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenECResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenGCAdvanceRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenGCRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenGCResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenLCAdvanceRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenLCRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenLCResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\SegmentLymphNodeAdvanceRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\SegmentLymphNodeRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\SegmentLymphNodeResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\SegmentOARAdvanceRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\SegmentOARRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\SegmentOARResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\TargetVolumeSegmentAdvanceRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\TargetVolumeSegmentRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\TargetVolumeSegmentResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Imageprocess extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('imageprocess', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 主动脉瘤肺动脉高压检测.
     *
     * @param request - AnalyzeChestVesselRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AnalyzeChestVesselResponse
     *
     * @param AnalyzeChestVesselRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AnalyzeChestVesselResponse
     */
    public function analyzeChestVesselWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataFormat) {
            @$body['DataFormat'] = $request->dataFormat;
        }

        if (null !== $request->dataSourceType) {
            @$body['DataSourceType'] = $request->dataSourceType;
        }

        if (null !== $request->orgId) {
            @$body['OrgId'] = $request->orgId;
        }

        if (null !== $request->orgName) {
            @$body['OrgName'] = $request->orgName;
        }

        if (null !== $request->URLList) {
            @$body['URLList'] = $request->URLList;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AnalyzeChestVessel',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AnalyzeChestVesselResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 主动脉瘤肺动脉高压检测.
     *
     * @param request - AnalyzeChestVesselRequest
     *
     * @returns AnalyzeChestVesselResponse
     *
     * @param AnalyzeChestVesselRequest $request
     *
     * @return AnalyzeChestVesselResponse
     */
    public function analyzeChestVessel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->analyzeChestVesselWithOptions($request, $runtime);
    }

    /**
     * @param AnalyzeChestVesselAdvanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AnalyzeChestVesselResponse
     */
    public function analyzeChestVesselAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'imageprocess',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $analyzeChestVesselReq = new AnalyzeChestVesselRequest([]);
        Utils::convert($request, $analyzeChestVesselReq);
        if (null !== $request->URLList) {
            $i0 = 0;

            foreach ($request->URLList as $item0) {
                if (null !== $item0->URLObject) {
                    $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient = new OSS($ossConfig);
                    $fileObj = new FileField([
                        'filename' => $authResponse->body->objectKey,
                        'content' => $item0->URLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId' => $authResponse->body->accessKeyId,
                        'policy' => $authResponse->body->encodedPolicy,
                        'signature' => $authResponse->body->signature,
                        'key' => $authResponse->body->objectKey,
                        'file' => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header' => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp = @$analyzeChestVesselReq->URLList[$i0];
                    $tmp->URL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    ++$i0;
                }
            }
        }

        return $this->analyzeChestVesselWithOptions($analyzeChestVesselReq, $runtime);
    }

    /**
     * 骨密度估计
     *
     * @param request - CalcBMDRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CalcBMDResponse
     *
     * @param CalcBMDRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return CalcBMDResponse
     */
    public function calcBMDWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataFormat) {
            @$body['DataFormat'] = $request->dataFormat;
        }

        if (null !== $request->orgId) {
            @$body['OrgId'] = $request->orgId;
        }

        if (null !== $request->orgName) {
            @$body['OrgName'] = $request->orgName;
        }

        if (null !== $request->sourceType) {
            @$body['SourceType'] = $request->sourceType;
        }

        if (null !== $request->URLList) {
            @$body['URLList'] = $request->URLList;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CalcBMD',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CalcBMDResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 骨密度估计
     *
     * @param request - CalcBMDRequest
     *
     * @returns CalcBMDResponse
     *
     * @param CalcBMDRequest $request
     *
     * @return CalcBMDResponse
     */
    public function calcBMD($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->calcBMDWithOptions($request, $runtime);
    }

    /**
     * @param CalcBMDAdvanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CalcBMDResponse
     */
    public function calcBMDAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'imageprocess',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $calcBMDReq = new CalcBMDRequest([]);
        Utils::convert($request, $calcBMDReq);
        if (null !== $request->URLList) {
            $i0 = 0;

            foreach ($request->URLList as $item0) {
                if (null !== $item0->URLObject) {
                    $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient = new OSS($ossConfig);
                    $fileObj = new FileField([
                        'filename' => $authResponse->body->objectKey,
                        'content' => $item0->URLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId' => $authResponse->body->accessKeyId,
                        'policy' => $authResponse->body->encodedPolicy,
                        'signature' => $authResponse->body->signature,
                        'key' => $authResponse->body->objectKey,
                        'file' => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header' => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp = @$calcBMDReq->URLList[$i0];
                    $tmp->URL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    ++$i0;
                }
            }
        }

        return $this->calcBMDWithOptions($calcBMDReq, $runtime);
    }

    /**
     * @param request - CalcCACSRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CalcCACSResponse
     *
     * @param CalcCACSRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return CalcCACSResponse
     */
    public function calcCACSWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataFormat) {
            @$body['DataFormat'] = $request->dataFormat;
        }

        if (null !== $request->dataSourceType) {
            @$body['DataSourceType'] = $request->dataSourceType;
        }

        if (null !== $request->orgId) {
            @$body['OrgId'] = $request->orgId;
        }

        if (null !== $request->orgName) {
            @$body['OrgName'] = $request->orgName;
        }

        if (null !== $request->URLList) {
            @$body['URLList'] = $request->URLList;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CalcCACS',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CalcCACSResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CalcCACSRequest
     *
     * @returns CalcCACSResponse
     *
     * @param CalcCACSRequest $request
     *
     * @return CalcCACSResponse
     */
    public function calcCACS($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->calcCACSWithOptions($request, $runtime);
    }

    /**
     * @param CalcCACSAdvanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CalcCACSResponse
     */
    public function calcCACSAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'imageprocess',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $calcCACSReq = new CalcCACSRequest([]);
        Utils::convert($request, $calcCACSReq);
        if (null !== $request->URLList) {
            $i0 = 0;

            foreach ($request->URLList as $item0) {
                if (null !== $item0->URLObject) {
                    $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient = new OSS($ossConfig);
                    $fileObj = new FileField([
                        'filename' => $authResponse->body->objectKey,
                        'content' => $item0->URLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId' => $authResponse->body->accessKeyId,
                        'policy' => $authResponse->body->encodedPolicy,
                        'signature' => $authResponse->body->signature,
                        'key' => $authResponse->body->objectKey,
                        'file' => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header' => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp = @$calcCACSReq->URLList[$i0];
                    $tmp->URL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    ++$i0;
                }
            }
        }

        return $this->calcCACSWithOptions($calcCACSReq, $runtime);
    }

    /**
     * @param request - DetectCovid19CadRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectCovid19CadResponse
     *
     * @param DetectCovid19CadRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DetectCovid19CadResponse
     */
    public function detectCovid19CadWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataFormat) {
            @$body['DataFormat'] = $request->dataFormat;
        }

        if (null !== $request->orgId) {
            @$body['OrgId'] = $request->orgId;
        }

        if (null !== $request->orgName) {
            @$body['OrgName'] = $request->orgName;
        }

        if (null !== $request->URLList) {
            @$body['URLList'] = $request->URLList;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DetectCovid19Cad',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectCovid19CadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DetectCovid19CadRequest
     *
     * @returns DetectCovid19CadResponse
     *
     * @param DetectCovid19CadRequest $request
     *
     * @return DetectCovid19CadResponse
     */
    public function detectCovid19Cad($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectCovid19CadWithOptions($request, $runtime);
    }

    /**
     * @param DetectCovid19CadAdvanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DetectCovid19CadResponse
     */
    public function detectCovid19CadAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'imageprocess',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $detectCovid19CadReq = new DetectCovid19CadRequest([]);
        Utils::convert($request, $detectCovid19CadReq);
        if (null !== $request->URLList) {
            $i0 = 0;

            foreach ($request->URLList as $item0) {
                if (null !== $item0->URLObject) {
                    $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient = new OSS($ossConfig);
                    $fileObj = new FileField([
                        'filename' => $authResponse->body->objectKey,
                        'content' => $item0->URLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId' => $authResponse->body->accessKeyId,
                        'policy' => $authResponse->body->encodedPolicy,
                        'signature' => $authResponse->body->signature,
                        'key' => $authResponse->body->objectKey,
                        'file' => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header' => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp = @$detectCovid19CadReq->URLList[$i0];
                    $tmp->URL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    ++$i0;
                }
            }
        }

        return $this->detectCovid19CadWithOptions($detectCovid19CadReq, $runtime);
    }

    /**
     * 脂肪肝检测.
     *
     * @param request - DetectLiverSteatosisRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectLiverSteatosisResponse
     *
     * @param DetectLiverSteatosisRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DetectLiverSteatosisResponse
     */
    public function detectLiverSteatosisWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataFormat) {
            @$body['DataFormat'] = $request->dataFormat;
        }

        if (null !== $request->orgId) {
            @$body['OrgId'] = $request->orgId;
        }

        if (null !== $request->orgName) {
            @$body['OrgName'] = $request->orgName;
        }

        if (null !== $request->sourceType) {
            @$body['SourceType'] = $request->sourceType;
        }

        if (null !== $request->URLList) {
            @$body['URLList'] = $request->URLList;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DetectLiverSteatosis',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectLiverSteatosisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 脂肪肝检测.
     *
     * @param request - DetectLiverSteatosisRequest
     *
     * @returns DetectLiverSteatosisResponse
     *
     * @param DetectLiverSteatosisRequest $request
     *
     * @return DetectLiverSteatosisResponse
     */
    public function detectLiverSteatosis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectLiverSteatosisWithOptions($request, $runtime);
    }

    /**
     * @param DetectLiverSteatosisAdvanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DetectLiverSteatosisResponse
     */
    public function detectLiverSteatosisAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'imageprocess',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $detectLiverSteatosisReq = new DetectLiverSteatosisRequest([]);
        Utils::convert($request, $detectLiverSteatosisReq);
        if (null !== $request->URLList) {
            $i0 = 0;

            foreach ($request->URLList as $item0) {
                if (null !== $item0->URLObject) {
                    $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient = new OSS($ossConfig);
                    $fileObj = new FileField([
                        'filename' => $authResponse->body->objectKey,
                        'content' => $item0->URLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId' => $authResponse->body->accessKeyId,
                        'policy' => $authResponse->body->encodedPolicy,
                        'signature' => $authResponse->body->signature,
                        'key' => $authResponse->body->objectKey,
                        'file' => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header' => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp = @$detectLiverSteatosisReq->URLList[$i0];
                    $tmp->URL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    ++$i0;
                }
            }
        }

        return $this->detectLiverSteatosisWithOptions($detectLiverSteatosisReq, $runtime);
    }

    /**
     * @param request - DetectLungNoduleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectLungNoduleResponse
     *
     * @param DetectLungNoduleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DetectLungNoduleResponse
     */
    public function detectLungNoduleWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataFormat) {
            @$body['DataFormat'] = $request->dataFormat;
        }

        if (null !== $request->orgId) {
            @$body['OrgId'] = $request->orgId;
        }

        if (null !== $request->orgName) {
            @$body['OrgName'] = $request->orgName;
        }

        if (null !== $request->threshold) {
            @$body['Threshold'] = $request->threshold;
        }

        if (null !== $request->URLList) {
            @$body['URLList'] = $request->URLList;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DetectLungNodule',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectLungNoduleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DetectLungNoduleRequest
     *
     * @returns DetectLungNoduleResponse
     *
     * @param DetectLungNoduleRequest $request
     *
     * @return DetectLungNoduleResponse
     */
    public function detectLungNodule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectLungNoduleWithOptions($request, $runtime);
    }

    /**
     * @param DetectLungNoduleAdvanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DetectLungNoduleResponse
     */
    public function detectLungNoduleAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'imageprocess',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $detectLungNoduleReq = new DetectLungNoduleRequest([]);
        Utils::convert($request, $detectLungNoduleReq);
        if (null !== $request->URLList) {
            $i0 = 0;

            foreach ($request->URLList as $item0) {
                if (null !== $item0->URLObject) {
                    $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient = new OSS($ossConfig);
                    $fileObj = new FileField([
                        'filename' => $authResponse->body->objectKey,
                        'content' => $item0->URLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId' => $authResponse->body->accessKeyId,
                        'policy' => $authResponse->body->encodedPolicy,
                        'signature' => $authResponse->body->signature,
                        'key' => $authResponse->body->objectKey,
                        'file' => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header' => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp = @$detectLungNoduleReq->URLList[$i0];
                    $tmp->URL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    ++$i0;
                }
            }
        }

        return $this->detectLungNoduleWithOptions($detectLungNoduleReq, $runtime);
    }

    /**
     * 淋巴结检测.
     *
     * @param request - DetectLymphRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectLymphResponse
     *
     * @param DetectLymphRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DetectLymphResponse
     */
    public function detectLymphWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataSourceType) {
            @$body['DataSourceType'] = $request->dataSourceType;
        }

        if (null !== $request->URLList) {
            @$body['URLList'] = $request->URLList;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DetectLymph',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectLymphResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 淋巴结检测.
     *
     * @param request - DetectLymphRequest
     *
     * @returns DetectLymphResponse
     *
     * @param DetectLymphRequest $request
     *
     * @return DetectLymphResponse
     */
    public function detectLymph($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectLymphWithOptions($request, $runtime);
    }

    /**
     * @param DetectLymphAdvanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DetectLymphResponse
     */
    public function detectLymphAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'imageprocess',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $detectLymphReq = new DetectLymphRequest([]);
        Utils::convert($request, $detectLymphReq);
        if (null !== $request->URLList) {
            $i0 = 0;

            foreach ($request->URLList as $item0) {
                if (null !== $item0->URLObject) {
                    $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient = new OSS($ossConfig);
                    $fileObj = new FileField([
                        'filename' => $authResponse->body->objectKey,
                        'content' => $item0->URLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId' => $authResponse->body->accessKeyId,
                        'policy' => $authResponse->body->encodedPolicy,
                        'signature' => $authResponse->body->signature,
                        'key' => $authResponse->body->objectKey,
                        'file' => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header' => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp = @$detectLymphReq->URLList[$i0];
                    $tmp->URL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    ++$i0;
                }
            }
        }

        return $this->detectLymphWithOptions($detectLymphReq, $runtime);
    }

    /**
     * 胰腺癌检测.
     *
     * @param request - DetectPancRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectPancResponse
     *
     * @param DetectPancRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DetectPancResponse
     */
    public function detectPancWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataSourceType) {
            @$body['DataSourceType'] = $request->dataSourceType;
        }

        if (null !== $request->URLList) {
            @$body['URLList'] = $request->URLList;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DetectPanc',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectPancResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 胰腺癌检测.
     *
     * @param request - DetectPancRequest
     *
     * @returns DetectPancResponse
     *
     * @param DetectPancRequest $request
     *
     * @return DetectPancResponse
     */
    public function detectPanc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectPancWithOptions($request, $runtime);
    }

    /**
     * @param DetectPancAdvanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DetectPancResponse
     */
    public function detectPancAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'imageprocess',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $detectPancReq = new DetectPancRequest([]);
        Utils::convert($request, $detectPancReq);
        if (null !== $request->URLList) {
            $i0 = 0;

            foreach ($request->URLList as $item0) {
                if (null !== $item0->URLObject) {
                    $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient = new OSS($ossConfig);
                    $fileObj = new FileField([
                        'filename' => $authResponse->body->objectKey,
                        'content' => $item0->URLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId' => $authResponse->body->accessKeyId,
                        'policy' => $authResponse->body->encodedPolicy,
                        'signature' => $authResponse->body->signature,
                        'key' => $authResponse->body->objectKey,
                        'file' => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header' => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp = @$detectPancReq->URLList[$i0];
                    $tmp->URL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    ++$i0;
                }
            }
        }

        return $this->detectPancWithOptions($detectPancReq, $runtime);
    }

    /**
     * @param request - DetectRibFractureRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectRibFractureResponse
     *
     * @param DetectRibFractureRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DetectRibFractureResponse
     */
    public function detectRibFractureWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataFormat) {
            @$body['DataFormat'] = $request->dataFormat;
        }

        if (null !== $request->orgId) {
            @$body['OrgId'] = $request->orgId;
        }

        if (null !== $request->orgName) {
            @$body['OrgName'] = $request->orgName;
        }

        if (null !== $request->sourceType) {
            @$body['SourceType'] = $request->sourceType;
        }

        if (null !== $request->URLList) {
            @$body['URLList'] = $request->URLList;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DetectRibFracture',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectRibFractureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DetectRibFractureRequest
     *
     * @returns DetectRibFractureResponse
     *
     * @param DetectRibFractureRequest $request
     *
     * @return DetectRibFractureResponse
     */
    public function detectRibFracture($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectRibFractureWithOptions($request, $runtime);
    }

    /**
     * @param DetectRibFractureAdvanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DetectRibFractureResponse
     */
    public function detectRibFractureAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'imageprocess',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $detectRibFractureReq = new DetectRibFractureRequest([]);
        Utils::convert($request, $detectRibFractureReq);
        if (null !== $request->URLList) {
            $i0 = 0;

            foreach ($request->URLList as $item0) {
                if (null !== $item0->URLObject) {
                    $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient = new OSS($ossConfig);
                    $fileObj = new FileField([
                        'filename' => $authResponse->body->objectKey,
                        'content' => $item0->URLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId' => $authResponse->body->accessKeyId,
                        'policy' => $authResponse->body->encodedPolicy,
                        'signature' => $authResponse->body->signature,
                        'key' => $authResponse->body->objectKey,
                        'file' => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header' => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp = @$detectRibFractureReq->URLList[$i0];
                    $tmp->URL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    ++$i0;
                }
            }
        }

        return $this->detectRibFractureWithOptions($detectRibFractureReq, $runtime);
    }

    /**
     * @param request - DetectSkinDiseaseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectSkinDiseaseResponse
     *
     * @param DetectSkinDiseaseRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DetectSkinDiseaseResponse
     */
    public function detectSkinDiseaseWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->orgId) {
            @$body['OrgId'] = $request->orgId;
        }

        if (null !== $request->orgName) {
            @$body['OrgName'] = $request->orgName;
        }

        if (null !== $request->url) {
            @$body['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DetectSkinDisease',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectSkinDiseaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DetectSkinDiseaseRequest
     *
     * @returns DetectSkinDiseaseResponse
     *
     * @param DetectSkinDiseaseRequest $request
     *
     * @return DetectSkinDiseaseResponse
     */
    public function detectSkinDisease($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectSkinDiseaseWithOptions($request, $runtime);
    }

    /**
     * @param DetectSkinDiseaseAdvanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DetectSkinDiseaseResponse
     */
    public function detectSkinDiseaseAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'imageprocess',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $detectSkinDiseaseReq = new DetectSkinDiseaseRequest([]);
        Utils::convert($request, $detectSkinDiseaseReq);
        if (null !== $request->urlObject) {
            $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient = new OSS($ossConfig);
            $fileObj = new FileField([
                'filename' => $authResponse->body->objectKey,
                'content' => $request->urlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId' => $authResponse->body->accessKeyId,
                'policy' => $authResponse->body->encodedPolicy,
                'signature' => $authResponse->body->signature,
                'key' => $authResponse->body->objectKey,
                'file' => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header' => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $detectSkinDiseaseReq->url = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->detectSkinDiseaseWithOptions($detectSkinDiseaseReq, $runtime);
    }

    /**
     * 会话反馈.
     *
     * @param request - FeedbackSessionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FeedbackSessionResponse
     *
     * @param FeedbackSessionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return FeedbackSessionResponse
     */
    public function feedbackSessionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->feedback) {
            @$body['Feedback'] = $request->feedback;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'FeedbackSession',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FeedbackSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 会话反馈.
     *
     * @param request - FeedbackSessionRequest
     *
     * @returns FeedbackSessionResponse
     *
     * @param FeedbackSessionRequest $request
     *
     * @return FeedbackSessionResponse
     */
    public function feedbackSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->feedbackSessionWithOptions($request, $runtime);
    }

    /**
     * 胸部CT平扫筛查结果报告生成.
     *
     * @param tmpReq - GenerateReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateReportResponse
     *
     * @param GenerateReportRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return GenerateReportResponse
     */
    public function generateReportWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GenerateReportShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->reportConfigs) {
            $request->reportConfigsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->reportConfigs, 'ReportConfigs', 'json');
        }

        $body = [];
        if (null !== $request->reportConfigsShrink) {
            @$body['ReportConfigs'] = $request->reportConfigsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GenerateReport',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 胸部CT平扫筛查结果报告生成.
     *
     * @param request - GenerateReportRequest
     *
     * @returns GenerateReportResponse
     *
     * @param GenerateReportRequest $request
     *
     * @return GenerateReportResponse
     */
    public function generateReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateReportWithOptions($request, $runtime);
    }

    /**
     * @param request - GetAsyncJobResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAsyncJobResultResponse
     *
     * @param GetAsyncJobResultRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetAsyncJobResultResponse
     */
    public function getAsyncJobResultWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->jobId) {
            @$body['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetAsyncJobResult',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAsyncJobResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetAsyncJobResultRequest
     *
     * @returns GetAsyncJobResultResponse
     *
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
     * CVD心血管不良事件预测.
     *
     * @param request - PredictCVDRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PredictCVDResponse
     *
     * @param PredictCVDRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return PredictCVDResponse
     */
    public function predictCVDWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataFormat) {
            @$body['DataFormat'] = $request->dataFormat;
        }

        if (null !== $request->dataSourceType) {
            @$body['DataSourceType'] = $request->dataSourceType;
        }

        if (null !== $request->orgId) {
            @$body['OrgId'] = $request->orgId;
        }

        if (null !== $request->orgName) {
            @$body['OrgName'] = $request->orgName;
        }

        if (null !== $request->URLList) {
            @$body['URLList'] = $request->URLList;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PredictCVD',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PredictCVDResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * CVD心血管不良事件预测.
     *
     * @param request - PredictCVDRequest
     *
     * @returns PredictCVDResponse
     *
     * @param PredictCVDRequest $request
     *
     * @return PredictCVDResponse
     */
    public function predictCVD($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->predictCVDWithOptions($request, $runtime);
    }

    /**
     * @param PredictCVDAdvanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return PredictCVDResponse
     */
    public function predictCVDAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'imageprocess',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $predictCVDReq = new PredictCVDRequest([]);
        Utils::convert($request, $predictCVDReq);
        if (null !== $request->URLList) {
            $i0 = 0;

            foreach ($request->URLList as $item0) {
                if (null !== $item0->URLObject) {
                    $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient = new OSS($ossConfig);
                    $fileObj = new FileField([
                        'filename' => $authResponse->body->objectKey,
                        'content' => $item0->URLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId' => $authResponse->body->accessKeyId,
                        'policy' => $authResponse->body->encodedPolicy,
                        'signature' => $authResponse->body->signature,
                        'key' => $authResponse->body->objectKey,
                        'file' => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header' => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp = @$predictCVDReq->URLList[$i0];
                    $tmp->URL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    ++$i0;
                }
            }
        }

        return $this->predictCVDWithOptions($predictCVDReq, $runtime);
    }

    /**
     * @param request - RunCTRegistrationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunCTRegistrationResponse
     *
     * @param RunCTRegistrationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RunCTRegistrationResponse
     */
    public function runCTRegistrationWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataFormat) {
            @$body['DataFormat'] = $request->dataFormat;
        }

        if (null !== $request->dataSourceType) {
            @$body['DataSourceType'] = $request->dataSourceType;
        }

        if (null !== $request->floatingList) {
            @$body['FloatingList'] = $request->floatingList;
        }

        if (null !== $request->orgId) {
            @$body['OrgId'] = $request->orgId;
        }

        if (null !== $request->orgName) {
            @$body['OrgName'] = $request->orgName;
        }

        if (null !== $request->referenceList) {
            @$body['ReferenceList'] = $request->referenceList;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunCTRegistration',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunCTRegistrationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RunCTRegistrationRequest
     *
     * @returns RunCTRegistrationResponse
     *
     * @param RunCTRegistrationRequest $request
     *
     * @return RunCTRegistrationResponse
     */
    public function runCTRegistration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runCTRegistrationWithOptions($request, $runtime);
    }

    /**
     * @param RunCTRegistrationAdvanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RunCTRegistrationResponse
     */
    public function runCTRegistrationAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'imageprocess',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $runCTRegistrationReq = new RunCTRegistrationRequest([]);
        Utils::convert($request, $runCTRegistrationReq);
        if (null !== $request->floatingList) {
            $i0 = 0;

            foreach ($request->floatingList as $item0) {
                if (null !== $item0->floatingURLObject) {
                    $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient = new OSS($ossConfig);
                    $fileObj = new FileField([
                        'filename' => $authResponse->body->objectKey,
                        'content' => $item0->floatingURLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId' => $authResponse->body->accessKeyId,
                        'policy' => $authResponse->body->encodedPolicy,
                        'signature' => $authResponse->body->signature,
                        'key' => $authResponse->body->objectKey,
                        'file' => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header' => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp = @$runCTRegistrationReq->floatingList[$i0];
                    $tmp->floatingURL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    ++$i0;
                }
            }
        }

        if (null !== $request->referenceList) {
            $i1 = 0;

            foreach ($request->referenceList as $item0) {
                if (null !== $item0->referenceURLObject) {
                    $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient = new OSS($ossConfig);
                    $fileObj = new FileField([
                        'filename' => $authResponse->body->objectKey,
                        'content' => $item0->referenceURLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId' => $authResponse->body->accessKeyId,
                        'policy' => $authResponse->body->encodedPolicy,
                        'signature' => $authResponse->body->signature,
                        'key' => $authResponse->body->objectKey,
                        'file' => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header' => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp = @$runCTRegistrationReq->referenceList[$i1];
                    $tmp->referenceURL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    ++$i1;
                }
            }
        }

        return $this->runCTRegistrationWithOptions($runCTRegistrationReq, $runtime);
    }

    /**
     * @param request - RunMedQARequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunMedQAResponse
     *
     * @param RunMedQARequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return RunMedQAResponse
     */
    public function runMedQAWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->answerImageDataList) {
            @$body['AnswerImageDataList'] = $request->answerImageDataList;
        }

        if (null !== $request->answerImageURLList) {
            @$body['AnswerImageURLList'] = $request->answerImageURLList;
        }

        if (null !== $request->answerTextList) {
            @$body['AnswerTextList'] = $request->answerTextList;
        }

        if (null !== $request->department) {
            @$body['Department'] = $request->department;
        }

        if (null !== $request->orgId) {
            @$body['OrgId'] = $request->orgId;
        }

        if (null !== $request->orgName) {
            @$body['OrgName'] = $request->orgName;
        }

        if (null !== $request->questionType) {
            @$body['QuestionType'] = $request->questionType;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunMedQA',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunMedQAResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RunMedQARequest
     *
     * @returns RunMedQAResponse
     *
     * @param RunMedQARequest $request
     *
     * @return RunMedQAResponse
     */
    public function runMedQA($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runMedQAWithOptions($request, $runtime);
    }

    /**
     * @param RunMedQAAdvanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RunMedQAResponse
     */
    public function runMedQAAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'imageprocess',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $runMedQAReq = new RunMedQARequest([]);
        Utils::convert($request, $runMedQAReq);
        if (null !== $request->answerImageURLList) {
            $i0 = 0;

            foreach ($request->answerImageURLList as $item0) {
                if (null !== $item0->answerImageURLObject) {
                    $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient = new OSS($ossConfig);
                    $fileObj = new FileField([
                        'filename' => $authResponse->body->objectKey,
                        'content' => $item0->answerImageURLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId' => $authResponse->body->accessKeyId,
                        'policy' => $authResponse->body->encodedPolicy,
                        'signature' => $authResponse->body->signature,
                        'key' => $authResponse->body->objectKey,
                        'file' => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header' => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp = @$runMedQAReq->answerImageURLList[$i0];
                    $tmp->answerImageURL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    ++$i0;
                }
            }
        }

        return $this->runMedQAWithOptions($runMedQAReq, $runtime);
    }

    /**
     * 结直肠癌筛查.
     *
     * @param request - ScreenCRCRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ScreenCRCResponse
     *
     * @param ScreenCRCRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ScreenCRCResponse
     */
    public function screenCRCWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataFormat) {
            @$body['DataFormat'] = $request->dataFormat;
        }

        if (null !== $request->dataSourceType) {
            @$body['DataSourceType'] = $request->dataSourceType;
        }

        if (null !== $request->orgId) {
            @$body['OrgId'] = $request->orgId;
        }

        if (null !== $request->orgName) {
            @$body['OrgName'] = $request->orgName;
        }

        if (null !== $request->URLList) {
            @$body['URLList'] = $request->URLList;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ScreenCRC',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ScreenCRCResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 结直肠癌筛查.
     *
     * @param request - ScreenCRCRequest
     *
     * @returns ScreenCRCResponse
     *
     * @param ScreenCRCRequest $request
     *
     * @return ScreenCRCResponse
     */
    public function screenCRC($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->screenCRCWithOptions($request, $runtime);
    }

    /**
     * @param ScreenCRCAdvanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ScreenCRCResponse
     */
    public function screenCRCAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'imageprocess',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $screenCRCReq = new ScreenCRCRequest([]);
        Utils::convert($request, $screenCRCReq);
        if (null !== $request->URLList) {
            $i0 = 0;

            foreach ($request->URLList as $item0) {
                if (null !== $item0->URLObject) {
                    $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient = new OSS($ossConfig);
                    $fileObj = new FileField([
                        'filename' => $authResponse->body->objectKey,
                        'content' => $item0->URLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId' => $authResponse->body->accessKeyId,
                        'policy' => $authResponse->body->encodedPolicy,
                        'signature' => $authResponse->body->signature,
                        'key' => $authResponse->body->objectKey,
                        'file' => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header' => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp = @$screenCRCReq->URLList[$i0];
                    $tmp->URL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    ++$i0;
                }
            }
        }

        return $this->screenCRCWithOptions($screenCRCReq, $runtime);
    }

    /**
     * 胸部CT平扫.
     *
     * @param request - ScreenChestCTRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ScreenChestCTResponse
     *
     * @param ScreenChestCTRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ScreenChestCTResponse
     */
    public function screenChestCTWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataFormat) {
            @$body['DataFormat'] = $request->dataFormat;
        }

        if (null !== $request->mask) {
            @$body['Mask'] = $request->mask;
        }

        if (null !== $request->orgId) {
            @$body['OrgId'] = $request->orgId;
        }

        if (null !== $request->orgName) {
            @$body['OrgName'] = $request->orgName;
        }

        if (null !== $request->URLList) {
            @$body['URLList'] = $request->URLList;
        }

        if (null !== $request->verbose) {
            @$body['Verbose'] = $request->verbose;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ScreenChestCT',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ScreenChestCTResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 胸部CT平扫.
     *
     * @param request - ScreenChestCTRequest
     *
     * @returns ScreenChestCTResponse
     *
     * @param ScreenChestCTRequest $request
     *
     * @return ScreenChestCTResponse
     */
    public function screenChestCT($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->screenChestCTWithOptions($request, $runtime);
    }

    /**
     * @param ScreenChestCTAdvanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ScreenChestCTResponse
     */
    public function screenChestCTAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'imageprocess',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $screenChestCTReq = new ScreenChestCTRequest([]);
        Utils::convert($request, $screenChestCTReq);
        if (null !== $request->URLList) {
            $i0 = 0;

            foreach ($request->URLList as $item0) {
                if (null !== $item0->URLObject) {
                    $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient = new OSS($ossConfig);
                    $fileObj = new FileField([
                        'filename' => $authResponse->body->objectKey,
                        'content' => $item0->URLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId' => $authResponse->body->accessKeyId,
                        'policy' => $authResponse->body->encodedPolicy,
                        'signature' => $authResponse->body->signature,
                        'key' => $authResponse->body->objectKey,
                        'file' => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header' => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp = @$screenChestCTReq->URLList[$i0];
                    $tmp->URL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    ++$i0;
                }
            }
        }

        return $this->screenChestCTWithOptions($screenChestCTReq, $runtime);
    }

    /**
     * 食管癌筛查.
     *
     * @param request - ScreenECRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ScreenECResponse
     *
     * @param ScreenECRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ScreenECResponse
     */
    public function screenECWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataSourceType) {
            @$body['DataSourceType'] = $request->dataSourceType;
        }

        if (null !== $request->URLList) {
            @$body['URLList'] = $request->URLList;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ScreenEC',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ScreenECResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 食管癌筛查.
     *
     * @param request - ScreenECRequest
     *
     * @returns ScreenECResponse
     *
     * @param ScreenECRequest $request
     *
     * @return ScreenECResponse
     */
    public function screenEC($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->screenECWithOptions($request, $runtime);
    }

    /**
     * @param ScreenECAdvanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ScreenECResponse
     */
    public function screenECAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'imageprocess',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $screenECReq = new ScreenECRequest([]);
        Utils::convert($request, $screenECReq);
        if (null !== $request->URLList) {
            $i0 = 0;

            foreach ($request->URLList as $item0) {
                if (null !== $item0->URLObject) {
                    $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient = new OSS($ossConfig);
                    $fileObj = new FileField([
                        'filename' => $authResponse->body->objectKey,
                        'content' => $item0->URLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId' => $authResponse->body->accessKeyId,
                        'policy' => $authResponse->body->encodedPolicy,
                        'signature' => $authResponse->body->signature,
                        'key' => $authResponse->body->objectKey,
                        'file' => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header' => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp = @$screenECReq->URLList[$i0];
                    $tmp->URL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    ++$i0;
                }
            }
        }

        return $this->screenECWithOptions($screenECReq, $runtime);
    }

    /**
     * 胃癌筛查.
     *
     * @param request - ScreenGCRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ScreenGCResponse
     *
     * @param ScreenGCRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ScreenGCResponse
     */
    public function screenGCWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataFormat) {
            @$body['DataFormat'] = $request->dataFormat;
        }

        if (null !== $request->dataSourceType) {
            @$body['DataSourceType'] = $request->dataSourceType;
        }

        if (null !== $request->orgId) {
            @$body['OrgId'] = $request->orgId;
        }

        if (null !== $request->orgName) {
            @$body['OrgName'] = $request->orgName;
        }

        if (null !== $request->URLList) {
            @$body['URLList'] = $request->URLList;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ScreenGC',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ScreenGCResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 胃癌筛查.
     *
     * @param request - ScreenGCRequest
     *
     * @returns ScreenGCResponse
     *
     * @param ScreenGCRequest $request
     *
     * @return ScreenGCResponse
     */
    public function screenGC($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->screenGCWithOptions($request, $runtime);
    }

    /**
     * @param ScreenGCAdvanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ScreenGCResponse
     */
    public function screenGCAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'imageprocess',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $screenGCReq = new ScreenGCRequest([]);
        Utils::convert($request, $screenGCReq);
        if (null !== $request->URLList) {
            $i0 = 0;

            foreach ($request->URLList as $item0) {
                if (null !== $item0->URLObject) {
                    $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient = new OSS($ossConfig);
                    $fileObj = new FileField([
                        'filename' => $authResponse->body->objectKey,
                        'content' => $item0->URLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId' => $authResponse->body->accessKeyId,
                        'policy' => $authResponse->body->encodedPolicy,
                        'signature' => $authResponse->body->signature,
                        'key' => $authResponse->body->objectKey,
                        'file' => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header' => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp = @$screenGCReq->URLList[$i0];
                    $tmp->URL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    ++$i0;
                }
            }
        }

        return $this->screenGCWithOptions($screenGCReq, $runtime);
    }

    /**
     * 肝癌筛查.
     *
     * @param request - ScreenLCRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ScreenLCResponse
     *
     * @param ScreenLCRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ScreenLCResponse
     */
    public function screenLCWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataFormat) {
            @$body['DataFormat'] = $request->dataFormat;
        }

        if (null !== $request->dataSourceType) {
            @$body['DataSourceType'] = $request->dataSourceType;
        }

        if (null !== $request->orgId) {
            @$body['OrgId'] = $request->orgId;
        }

        if (null !== $request->orgName) {
            @$body['OrgName'] = $request->orgName;
        }

        if (null !== $request->URLList) {
            @$body['URLList'] = $request->URLList;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ScreenLC',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ScreenLCResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 肝癌筛查.
     *
     * @param request - ScreenLCRequest
     *
     * @returns ScreenLCResponse
     *
     * @param ScreenLCRequest $request
     *
     * @return ScreenLCResponse
     */
    public function screenLC($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->screenLCWithOptions($request, $runtime);
    }

    /**
     * @param ScreenLCAdvanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ScreenLCResponse
     */
    public function screenLCAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'imageprocess',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $screenLCReq = new ScreenLCRequest([]);
        Utils::convert($request, $screenLCReq);
        if (null !== $request->URLList) {
            $i0 = 0;

            foreach ($request->URLList as $item0) {
                if (null !== $item0->URLObject) {
                    $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient = new OSS($ossConfig);
                    $fileObj = new FileField([
                        'filename' => $authResponse->body->objectKey,
                        'content' => $item0->URLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId' => $authResponse->body->accessKeyId,
                        'policy' => $authResponse->body->encodedPolicy,
                        'signature' => $authResponse->body->signature,
                        'key' => $authResponse->body->objectKey,
                        'file' => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header' => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp = @$screenLCReq->URLList[$i0];
                    $tmp->URL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    ++$i0;
                }
            }
        }

        return $this->screenLCWithOptions($screenLCReq, $runtime);
    }

    /**
     * 放疗淋巴站分割.
     *
     * @param request - SegmentLymphNodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SegmentLymphNodeResponse
     *
     * @param SegmentLymphNodeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SegmentLymphNodeResponse
     */
    public function segmentLymphNodeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->bodyPart) {
            @$body['BodyPart'] = $request->bodyPart;
        }

        if (null !== $request->dataFormat) {
            @$body['DataFormat'] = $request->dataFormat;
        }

        if (null !== $request->orgId) {
            @$body['OrgId'] = $request->orgId;
        }

        if (null !== $request->orgName) {
            @$body['OrgName'] = $request->orgName;
        }

        if (null !== $request->URLList) {
            @$body['URLList'] = $request->URLList;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SegmentLymphNode',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SegmentLymphNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 放疗淋巴站分割.
     *
     * @param request - SegmentLymphNodeRequest
     *
     * @returns SegmentLymphNodeResponse
     *
     * @param SegmentLymphNodeRequest $request
     *
     * @return SegmentLymphNodeResponse
     */
    public function segmentLymphNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->segmentLymphNodeWithOptions($request, $runtime);
    }

    /**
     * @param SegmentLymphNodeAdvanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SegmentLymphNodeResponse
     */
    public function segmentLymphNodeAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'imageprocess',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $segmentLymphNodeReq = new SegmentLymphNodeRequest([]);
        Utils::convert($request, $segmentLymphNodeReq);
        if (null !== $request->URLList) {
            $i0 = 0;

            foreach ($request->URLList as $item0) {
                if (null !== $item0->URLObject) {
                    $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient = new OSS($ossConfig);
                    $fileObj = new FileField([
                        'filename' => $authResponse->body->objectKey,
                        'content' => $item0->URLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId' => $authResponse->body->accessKeyId,
                        'policy' => $authResponse->body->encodedPolicy,
                        'signature' => $authResponse->body->signature,
                        'key' => $authResponse->body->objectKey,
                        'file' => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header' => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp = @$segmentLymphNodeReq->URLList[$i0];
                    $tmp->URL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    ++$i0;
                }
            }
        }

        return $this->segmentLymphNodeWithOptions($segmentLymphNodeReq, $runtime);
    }

    /**
     * 多器官分割.
     *
     * @param request - SegmentOARRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SegmentOARResponse
     *
     * @param SegmentOARRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SegmentOARResponse
     */
    public function segmentOARWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->bodyPart) {
            @$body['BodyPart'] = $request->bodyPart;
        }

        if (null !== $request->contrast) {
            @$body['Contrast'] = $request->contrast;
        }

        if (null !== $request->dataFormat) {
            @$body['DataFormat'] = $request->dataFormat;
        }

        if (null !== $request->maskList) {
            @$body['MaskList'] = $request->maskList;
        }

        if (null !== $request->orgId) {
            @$body['OrgId'] = $request->orgId;
        }

        if (null !== $request->orgName) {
            @$body['OrgName'] = $request->orgName;
        }

        if (null !== $request->URLList) {
            @$body['URLList'] = $request->URLList;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SegmentOAR',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SegmentOARResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 多器官分割.
     *
     * @param request - SegmentOARRequest
     *
     * @returns SegmentOARResponse
     *
     * @param SegmentOARRequest $request
     *
     * @return SegmentOARResponse
     */
    public function segmentOAR($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->segmentOARWithOptions($request, $runtime);
    }

    /**
     * @param SegmentOARAdvanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SegmentOARResponse
     */
    public function segmentOARAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'imageprocess',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $segmentOARReq = new SegmentOARRequest([]);
        Utils::convert($request, $segmentOARReq);
        if (null !== $request->URLList) {
            $i0 = 0;

            foreach ($request->URLList as $item0) {
                if (null !== $item0->URLObject) {
                    $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient = new OSS($ossConfig);
                    $fileObj = new FileField([
                        'filename' => $authResponse->body->objectKey,
                        'content' => $item0->URLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId' => $authResponse->body->accessKeyId,
                        'policy' => $authResponse->body->encodedPolicy,
                        'signature' => $authResponse->body->signature,
                        'key' => $authResponse->body->objectKey,
                        'file' => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header' => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp = @$segmentOARReq->URLList[$i0];
                    $tmp->URL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    ++$i0;
                }
            }
        }

        return $this->segmentOARWithOptions($segmentOARReq, $runtime);
    }

    /**
     * 放疗靶区勾画算法.
     *
     * @param request - TargetVolumeSegmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TargetVolumeSegmentResponse
     *
     * @param TargetVolumeSegmentRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return TargetVolumeSegmentResponse
     */
    public function targetVolumeSegmentWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->cancerType) {
            @$body['CancerType'] = $request->cancerType;
        }

        if (null !== $request->dataFormat) {
            @$body['DataFormat'] = $request->dataFormat;
        }

        if (null !== $request->orgId) {
            @$body['OrgId'] = $request->orgId;
        }

        if (null !== $request->orgName) {
            @$body['OrgName'] = $request->orgName;
        }

        if (null !== $request->targetVolumeType) {
            @$body['TargetVolumeType'] = $request->targetVolumeType;
        }

        if (null !== $request->URLList) {
            @$body['URLList'] = $request->URLList;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TargetVolumeSegment',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TargetVolumeSegmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 放疗靶区勾画算法.
     *
     * @param request - TargetVolumeSegmentRequest
     *
     * @returns TargetVolumeSegmentResponse
     *
     * @param TargetVolumeSegmentRequest $request
     *
     * @return TargetVolumeSegmentResponse
     */
    public function targetVolumeSegment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->targetVolumeSegmentWithOptions($request, $runtime);
    }

    /**
     * @param TargetVolumeSegmentAdvanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return TargetVolumeSegmentResponse
     */
    public function targetVolumeSegmentAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'imageprocess',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $targetVolumeSegmentReq = new TargetVolumeSegmentRequest([]);
        Utils::convert($request, $targetVolumeSegmentReq);
        if (null !== $request->URLList) {
            $i0 = 0;

            foreach ($request->URLList as $item0) {
                if (null !== $item0->URLObject) {
                    $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient = new OSS($ossConfig);
                    $fileObj = new FileField([
                        'filename' => $authResponse->body->objectKey,
                        'content' => $item0->URLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId' => $authResponse->body->accessKeyId,
                        'policy' => $authResponse->body->encodedPolicy,
                        'signature' => $authResponse->body->signature,
                        'key' => $authResponse->body->objectKey,
                        'file' => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header' => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp = @$targetVolumeSegmentReq->URLList[$i0];
                    $tmp->URL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    ++$i0;
                }
            }
        }

        return $this->targetVolumeSegmentWithOptions($targetVolumeSegmentReq, $runtime);
    }
}
