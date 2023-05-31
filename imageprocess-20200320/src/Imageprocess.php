<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\AnalyzeChestVesselAdvanceRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\AnalyzeChestVesselRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\AnalyzeChestVesselResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\CalcBMDAdvanceRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\CalcBMDRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\CalcBMDResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\CalcCACSAdvanceRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\CalcCACSRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\CalcCACSResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ClassifyFNFAdvanceRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ClassifyFNFRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ClassifyFNFResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectCovid19CadAdvanceRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectCovid19CadRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectCovid19CadResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectHipKeypointXRayAdvanceRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectHipKeypointXRayRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectHipKeypointXRayResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectKneeKeypointXRayAdvanceRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectKneeKeypointXRayRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectKneeKeypointXRayResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectKneeXRayAdvanceRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectKneeXRayRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectKneeXRayResponse;
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
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectSpineMRIAdvanceRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectSpineMRIRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectSpineMRIResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\FeedbackSessionRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\FeedbackSessionResponse;
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
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\TranslateMedRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\TranslateMedResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param AnalyzeChestVesselRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AnalyzeChestVesselResponse
     */
    public function analyzeChestVesselWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dataFormat)) {
            $body['DataFormat'] = $request->dataFormat;
        }
        if (!Utils::isUnset($request->dataSourceType)) {
            $body['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->orgId)) {
            $body['OrgId'] = $request->orgId;
        }
        if (!Utils::isUnset($request->orgName)) {
            $body['OrgName'] = $request->orgName;
        }
        if (!Utils::isUnset($request->URLList)) {
            $body['URLList'] = $request->URLList;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AnalyzeChestVessel',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AnalyzeChestVesselResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'product'  => 'imageprocess',
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
        $analyzeChestVesselReq = new AnalyzeChestVesselRequest([]);
        OpenApiUtilClient::convert($request, $analyzeChestVesselReq);
        if (!Utils::isUnset($request->URLList)) {
            $i0 = 0;
            foreach ($request->URLList as $item0) {
                if (!Utils::isUnset($item0->URLObject)) {
                    $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient              = new OSS($ossConfig);
                    $fileObj                = new FileField([
                        'filename'    => $authResponse->body->objectKey,
                        'content'     => $item0->URLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId'         => $authResponse->body->accessKeyId,
                        'policy'              => $authResponse->body->encodedPolicy,
                        'signature'           => $authResponse->body->signature,
                        'key'                 => $authResponse->body->objectKey,
                        'file'                => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header'     => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp      = @$analyzeChestVesselReq->URLList[$i0];
                    $tmp->URL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    $i0       = $i0 + 1;
                }
            }
        }

        return $this->analyzeChestVesselWithOptions($analyzeChestVesselReq, $runtime);
    }

    /**
     * @param CalcBMDRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return CalcBMDResponse
     */
    public function calcBMDWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dataFormat)) {
            $body['DataFormat'] = $request->dataFormat;
        }
        if (!Utils::isUnset($request->orgId)) {
            $body['OrgId'] = $request->orgId;
        }
        if (!Utils::isUnset($request->orgName)) {
            $body['OrgName'] = $request->orgName;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $body['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->URLList)) {
            $body['URLList'] = $request->URLList;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CalcBMD',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CalcBMDResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'product'  => 'imageprocess',
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
        $calcBMDReq = new CalcBMDRequest([]);
        OpenApiUtilClient::convert($request, $calcBMDReq);
        if (!Utils::isUnset($request->URLList)) {
            $i0 = 0;
            foreach ($request->URLList as $item0) {
                if (!Utils::isUnset($item0->URLObject)) {
                    $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient              = new OSS($ossConfig);
                    $fileObj                = new FileField([
                        'filename'    => $authResponse->body->objectKey,
                        'content'     => $item0->URLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId'         => $authResponse->body->accessKeyId,
                        'policy'              => $authResponse->body->encodedPolicy,
                        'signature'           => $authResponse->body->signature,
                        'key'                 => $authResponse->body->objectKey,
                        'file'                => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header'     => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp      = @$calcBMDReq->URLList[$i0];
                    $tmp->URL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    $i0       = $i0 + 1;
                }
            }
        }

        return $this->calcBMDWithOptions($calcBMDReq, $runtime);
    }

    /**
     * @param CalcCACSRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return CalcCACSResponse
     */
    public function calcCACSWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dataFormat)) {
            $body['DataFormat'] = $request->dataFormat;
        }
        if (!Utils::isUnset($request->dataSourceType)) {
            $body['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->orgId)) {
            $body['OrgId'] = $request->orgId;
        }
        if (!Utils::isUnset($request->orgName)) {
            $body['OrgName'] = $request->orgName;
        }
        if (!Utils::isUnset($request->URLList)) {
            $body['URLList'] = $request->URLList;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CalcCACS',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CalcCACSResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'product'  => 'imageprocess',
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
        $calcCACSReq = new CalcCACSRequest([]);
        OpenApiUtilClient::convert($request, $calcCACSReq);
        if (!Utils::isUnset($request->URLList)) {
            $i0 = 0;
            foreach ($request->URLList as $item0) {
                if (!Utils::isUnset($item0->URLObject)) {
                    $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient              = new OSS($ossConfig);
                    $fileObj                = new FileField([
                        'filename'    => $authResponse->body->objectKey,
                        'content'     => $item0->URLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId'         => $authResponse->body->accessKeyId,
                        'policy'              => $authResponse->body->encodedPolicy,
                        'signature'           => $authResponse->body->signature,
                        'key'                 => $authResponse->body->objectKey,
                        'file'                => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header'     => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp      = @$calcCACSReq->URLList[$i0];
                    $tmp->URL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    $i0       = $i0 + 1;
                }
            }
        }

        return $this->calcCACSWithOptions($calcCACSReq, $runtime);
    }

    /**
     * @param ClassifyFNFRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ClassifyFNFResponse
     */
    public function classifyFNFWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dataFormat)) {
            $body['DataFormat'] = $request->dataFormat;
        }
        if (!Utils::isUnset($request->imageUrl)) {
            $body['ImageUrl'] = $request->imageUrl;
        }
        if (!Utils::isUnset($request->orgId)) {
            $body['OrgId'] = $request->orgId;
        }
        if (!Utils::isUnset($request->orgName)) {
            $body['OrgName'] = $request->orgName;
        }
        if (!Utils::isUnset($request->tracerId)) {
            $body['TracerId'] = $request->tracerId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ClassifyFNF',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ClassifyFNFResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ClassifyFNFRequest $request
     *
     * @return ClassifyFNFResponse
     */
    public function classifyFNF($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->classifyFNFWithOptions($request, $runtime);
    }

    /**
     * @param ClassifyFNFAdvanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ClassifyFNFResponse
     */
    public function classifyFNFAdvance($request, $runtime)
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
            'product'  => 'imageprocess',
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
        $classifyFNFReq = new ClassifyFNFRequest([]);
        OpenApiUtilClient::convert($request, $classifyFNFReq);
        if (!Utils::isUnset($request->imageUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->imageUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $classifyFNFReq->imageUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->classifyFNFWithOptions($classifyFNFReq, $runtime);
    }

    /**
     * @param DetectCovid19CadRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DetectCovid19CadResponse
     */
    public function detectCovid19CadWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dataFormat)) {
            $body['DataFormat'] = $request->dataFormat;
        }
        if (!Utils::isUnset($request->orgId)) {
            $body['OrgId'] = $request->orgId;
        }
        if (!Utils::isUnset($request->orgName)) {
            $body['OrgName'] = $request->orgName;
        }
        if (!Utils::isUnset($request->URLList)) {
            $body['URLList'] = $request->URLList;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DetectCovid19Cad',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectCovid19CadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'product'  => 'imageprocess',
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
        $detectCovid19CadReq = new DetectCovid19CadRequest([]);
        OpenApiUtilClient::convert($request, $detectCovid19CadReq);
        if (!Utils::isUnset($request->URLList)) {
            $i0 = 0;
            foreach ($request->URLList as $item0) {
                if (!Utils::isUnset($item0->URLObject)) {
                    $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient              = new OSS($ossConfig);
                    $fileObj                = new FileField([
                        'filename'    => $authResponse->body->objectKey,
                        'content'     => $item0->URLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId'         => $authResponse->body->accessKeyId,
                        'policy'              => $authResponse->body->encodedPolicy,
                        'signature'           => $authResponse->body->signature,
                        'key'                 => $authResponse->body->objectKey,
                        'file'                => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header'     => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp      = @$detectCovid19CadReq->URLList[$i0];
                    $tmp->URL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    $i0       = $i0 + 1;
                }
            }
        }

        return $this->detectCovid19CadWithOptions($detectCovid19CadReq, $runtime);
    }

    /**
     * @param DetectHipKeypointXRayRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DetectHipKeypointXRayResponse
     */
    public function detectHipKeypointXRayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dataFormat)) {
            $body['DataFormat'] = $request->dataFormat;
        }
        if (!Utils::isUnset($request->imageUrl)) {
            $body['ImageUrl'] = $request->imageUrl;
        }
        if (!Utils::isUnset($request->orgId)) {
            $body['OrgId'] = $request->orgId;
        }
        if (!Utils::isUnset($request->orgName)) {
            $body['OrgName'] = $request->orgName;
        }
        if (!Utils::isUnset($request->tracerId)) {
            $body['TracerId'] = $request->tracerId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DetectHipKeypointXRay',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectHipKeypointXRayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetectHipKeypointXRayRequest $request
     *
     * @return DetectHipKeypointXRayResponse
     */
    public function detectHipKeypointXRay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectHipKeypointXRayWithOptions($request, $runtime);
    }

    /**
     * @param DetectHipKeypointXRayAdvanceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DetectHipKeypointXRayResponse
     */
    public function detectHipKeypointXRayAdvance($request, $runtime)
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
            'product'  => 'imageprocess',
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
        $detectHipKeypointXRayReq = new DetectHipKeypointXRayRequest([]);
        OpenApiUtilClient::convert($request, $detectHipKeypointXRayReq);
        if (!Utils::isUnset($request->imageUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->imageUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $detectHipKeypointXRayReq->imageUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->detectHipKeypointXRayWithOptions($detectHipKeypointXRayReq, $runtime);
    }

    /**
     * @param DetectKneeKeypointXRayRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DetectKneeKeypointXRayResponse
     */
    public function detectKneeKeypointXRayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dataFormat)) {
            $body['DataFormat'] = $request->dataFormat;
        }
        if (!Utils::isUnset($request->imageUrl)) {
            $body['ImageUrl'] = $request->imageUrl;
        }
        if (!Utils::isUnset($request->orgId)) {
            $body['OrgId'] = $request->orgId;
        }
        if (!Utils::isUnset($request->orgName)) {
            $body['OrgName'] = $request->orgName;
        }
        if (!Utils::isUnset($request->tracerId)) {
            $body['TracerId'] = $request->tracerId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DetectKneeKeypointXRay',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectKneeKeypointXRayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetectKneeKeypointXRayRequest $request
     *
     * @return DetectKneeKeypointXRayResponse
     */
    public function detectKneeKeypointXRay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectKneeKeypointXRayWithOptions($request, $runtime);
    }

    /**
     * @param DetectKneeKeypointXRayAdvanceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DetectKneeKeypointXRayResponse
     */
    public function detectKneeKeypointXRayAdvance($request, $runtime)
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
            'product'  => 'imageprocess',
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
        $detectKneeKeypointXRayReq = new DetectKneeKeypointXRayRequest([]);
        OpenApiUtilClient::convert($request, $detectKneeKeypointXRayReq);
        if (!Utils::isUnset($request->imageUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->imageUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $detectKneeKeypointXRayReq->imageUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->detectKneeKeypointXRayWithOptions($detectKneeKeypointXRayReq, $runtime);
    }

    /**
     * @param DetectKneeXRayRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DetectKneeXRayResponse
     */
    public function detectKneeXRayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dataFormat)) {
            $body['DataFormat'] = $request->dataFormat;
        }
        if (!Utils::isUnset($request->orgId)) {
            $body['OrgId'] = $request->orgId;
        }
        if (!Utils::isUnset($request->orgName)) {
            $body['OrgName'] = $request->orgName;
        }
        if (!Utils::isUnset($request->url)) {
            $body['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DetectKneeXRay',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectKneeXRayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetectKneeXRayRequest $request
     *
     * @return DetectKneeXRayResponse
     */
    public function detectKneeXRay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectKneeXRayWithOptions($request, $runtime);
    }

    /**
     * @param DetectKneeXRayAdvanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DetectKneeXRayResponse
     */
    public function detectKneeXRayAdvance($request, $runtime)
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
            'product'  => 'imageprocess',
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
        $detectKneeXRayReq = new DetectKneeXRayRequest([]);
        OpenApiUtilClient::convert($request, $detectKneeXRayReq);
        if (!Utils::isUnset($request->urlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->urlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $detectKneeXRayReq->url = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->detectKneeXRayWithOptions($detectKneeXRayReq, $runtime);
    }

    /**
     * @param DetectLiverSteatosisRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DetectLiverSteatosisResponse
     */
    public function detectLiverSteatosisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dataFormat)) {
            $body['DataFormat'] = $request->dataFormat;
        }
        if (!Utils::isUnset($request->orgId)) {
            $body['OrgId'] = $request->orgId;
        }
        if (!Utils::isUnset($request->orgName)) {
            $body['OrgName'] = $request->orgName;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $body['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->URLList)) {
            $body['URLList'] = $request->URLList;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DetectLiverSteatosis',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectLiverSteatosisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'product'  => 'imageprocess',
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
        $detectLiverSteatosisReq = new DetectLiverSteatosisRequest([]);
        OpenApiUtilClient::convert($request, $detectLiverSteatosisReq);
        if (!Utils::isUnset($request->URLList)) {
            $i0 = 0;
            foreach ($request->URLList as $item0) {
                if (!Utils::isUnset($item0->URLObject)) {
                    $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient              = new OSS($ossConfig);
                    $fileObj                = new FileField([
                        'filename'    => $authResponse->body->objectKey,
                        'content'     => $item0->URLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId'         => $authResponse->body->accessKeyId,
                        'policy'              => $authResponse->body->encodedPolicy,
                        'signature'           => $authResponse->body->signature,
                        'key'                 => $authResponse->body->objectKey,
                        'file'                => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header'     => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp      = @$detectLiverSteatosisReq->URLList[$i0];
                    $tmp->URL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    $i0       = $i0 + 1;
                }
            }
        }

        return $this->detectLiverSteatosisWithOptions($detectLiverSteatosisReq, $runtime);
    }

    /**
     * @param DetectLungNoduleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DetectLungNoduleResponse
     */
    public function detectLungNoduleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dataFormat)) {
            $body['DataFormat'] = $request->dataFormat;
        }
        if (!Utils::isUnset($request->orgId)) {
            $body['OrgId'] = $request->orgId;
        }
        if (!Utils::isUnset($request->orgName)) {
            $body['OrgName'] = $request->orgName;
        }
        if (!Utils::isUnset($request->threshold)) {
            $body['Threshold'] = $request->threshold;
        }
        if (!Utils::isUnset($request->URLList)) {
            $body['URLList'] = $request->URLList;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DetectLungNodule',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectLungNoduleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'product'  => 'imageprocess',
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
        $detectLungNoduleReq = new DetectLungNoduleRequest([]);
        OpenApiUtilClient::convert($request, $detectLungNoduleReq);
        if (!Utils::isUnset($request->URLList)) {
            $i0 = 0;
            foreach ($request->URLList as $item0) {
                if (!Utils::isUnset($item0->URLObject)) {
                    $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient              = new OSS($ossConfig);
                    $fileObj                = new FileField([
                        'filename'    => $authResponse->body->objectKey,
                        'content'     => $item0->URLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId'         => $authResponse->body->accessKeyId,
                        'policy'              => $authResponse->body->encodedPolicy,
                        'signature'           => $authResponse->body->signature,
                        'key'                 => $authResponse->body->objectKey,
                        'file'                => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header'     => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp      = @$detectLungNoduleReq->URLList[$i0];
                    $tmp->URL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    $i0       = $i0 + 1;
                }
            }
        }

        return $this->detectLungNoduleWithOptions($detectLungNoduleReq, $runtime);
    }

    /**
     * @param DetectLymphRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DetectLymphResponse
     */
    public function detectLymphWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dataSourceType)) {
            $body['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->URLList)) {
            $body['URLList'] = $request->URLList;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DetectLymph',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectLymphResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'product'  => 'imageprocess',
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
        $detectLymphReq = new DetectLymphRequest([]);
        OpenApiUtilClient::convert($request, $detectLymphReq);
        if (!Utils::isUnset($request->URLList)) {
            $i0 = 0;
            foreach ($request->URLList as $item0) {
                if (!Utils::isUnset($item0->URLObject)) {
                    $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient              = new OSS($ossConfig);
                    $fileObj                = new FileField([
                        'filename'    => $authResponse->body->objectKey,
                        'content'     => $item0->URLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId'         => $authResponse->body->accessKeyId,
                        'policy'              => $authResponse->body->encodedPolicy,
                        'signature'           => $authResponse->body->signature,
                        'key'                 => $authResponse->body->objectKey,
                        'file'                => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header'     => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp      = @$detectLymphReq->URLList[$i0];
                    $tmp->URL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    $i0       = $i0 + 1;
                }
            }
        }

        return $this->detectLymphWithOptions($detectLymphReq, $runtime);
    }

    /**
     * @param DetectPancRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DetectPancResponse
     */
    public function detectPancWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dataSourceType)) {
            $body['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->URLList)) {
            $body['URLList'] = $request->URLList;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DetectPanc',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectPancResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'product'  => 'imageprocess',
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
        $detectPancReq = new DetectPancRequest([]);
        OpenApiUtilClient::convert($request, $detectPancReq);
        if (!Utils::isUnset($request->URLList)) {
            $i0 = 0;
            foreach ($request->URLList as $item0) {
                if (!Utils::isUnset($item0->URLObject)) {
                    $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient              = new OSS($ossConfig);
                    $fileObj                = new FileField([
                        'filename'    => $authResponse->body->objectKey,
                        'content'     => $item0->URLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId'         => $authResponse->body->accessKeyId,
                        'policy'              => $authResponse->body->encodedPolicy,
                        'signature'           => $authResponse->body->signature,
                        'key'                 => $authResponse->body->objectKey,
                        'file'                => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header'     => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp      = @$detectPancReq->URLList[$i0];
                    $tmp->URL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    $i0       = $i0 + 1;
                }
            }
        }

        return $this->detectPancWithOptions($detectPancReq, $runtime);
    }

    /**
     * @param DetectRibFractureRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DetectRibFractureResponse
     */
    public function detectRibFractureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dataFormat)) {
            $body['DataFormat'] = $request->dataFormat;
        }
        if (!Utils::isUnset($request->orgId)) {
            $body['OrgId'] = $request->orgId;
        }
        if (!Utils::isUnset($request->orgName)) {
            $body['OrgName'] = $request->orgName;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $body['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->URLList)) {
            $body['URLList'] = $request->URLList;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DetectRibFracture',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectRibFractureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'product'  => 'imageprocess',
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
        $detectRibFractureReq = new DetectRibFractureRequest([]);
        OpenApiUtilClient::convert($request, $detectRibFractureReq);
        if (!Utils::isUnset($request->URLList)) {
            $i0 = 0;
            foreach ($request->URLList as $item0) {
                if (!Utils::isUnset($item0->URLObject)) {
                    $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient              = new OSS($ossConfig);
                    $fileObj                = new FileField([
                        'filename'    => $authResponse->body->objectKey,
                        'content'     => $item0->URLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId'         => $authResponse->body->accessKeyId,
                        'policy'              => $authResponse->body->encodedPolicy,
                        'signature'           => $authResponse->body->signature,
                        'key'                 => $authResponse->body->objectKey,
                        'file'                => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header'     => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp      = @$detectRibFractureReq->URLList[$i0];
                    $tmp->URL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    $i0       = $i0 + 1;
                }
            }
        }

        return $this->detectRibFractureWithOptions($detectRibFractureReq, $runtime);
    }

    /**
     * @param DetectSkinDiseaseRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DetectSkinDiseaseResponse
     */
    public function detectSkinDiseaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->orgId)) {
            $body['OrgId'] = $request->orgId;
        }
        if (!Utils::isUnset($request->orgName)) {
            $body['OrgName'] = $request->orgName;
        }
        if (!Utils::isUnset($request->url)) {
            $body['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DetectSkinDisease',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectSkinDiseaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'product'  => 'imageprocess',
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
        $detectSkinDiseaseReq = new DetectSkinDiseaseRequest([]);
        OpenApiUtilClient::convert($request, $detectSkinDiseaseReq);
        if (!Utils::isUnset($request->urlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->urlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $detectSkinDiseaseReq->url = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->detectSkinDiseaseWithOptions($detectSkinDiseaseReq, $runtime);
    }

    /**
     * @param DetectSpineMRIRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DetectSpineMRIResponse
     */
    public function detectSpineMRIWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dataFormat)) {
            $body['DataFormat'] = $request->dataFormat;
        }
        if (!Utils::isUnset($request->orgId)) {
            $body['OrgId'] = $request->orgId;
        }
        if (!Utils::isUnset($request->orgName)) {
            $body['OrgName'] = $request->orgName;
        }
        if (!Utils::isUnset($request->URLList)) {
            $body['URLList'] = $request->URLList;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DetectSpineMRI',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectSpineMRIResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetectSpineMRIRequest $request
     *
     * @return DetectSpineMRIResponse
     */
    public function detectSpineMRI($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectSpineMRIWithOptions($request, $runtime);
    }

    /**
     * @param DetectSpineMRIAdvanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DetectSpineMRIResponse
     */
    public function detectSpineMRIAdvance($request, $runtime)
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
            'product'  => 'imageprocess',
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
        $detectSpineMRIReq = new DetectSpineMRIRequest([]);
        OpenApiUtilClient::convert($request, $detectSpineMRIReq);
        if (!Utils::isUnset($request->URLList)) {
            $i0 = 0;
            foreach ($request->URLList as $item0) {
                if (!Utils::isUnset($item0->URLObject)) {
                    $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient              = new OSS($ossConfig);
                    $fileObj                = new FileField([
                        'filename'    => $authResponse->body->objectKey,
                        'content'     => $item0->URLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId'         => $authResponse->body->accessKeyId,
                        'policy'              => $authResponse->body->encodedPolicy,
                        'signature'           => $authResponse->body->signature,
                        'key'                 => $authResponse->body->objectKey,
                        'file'                => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header'     => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp      = @$detectSpineMRIReq->URLList[$i0];
                    $tmp->URL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    $i0       = $i0 + 1;
                }
            }
        }

        return $this->detectSpineMRIWithOptions($detectSpineMRIReq, $runtime);
    }

    /**
     * @param FeedbackSessionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return FeedbackSessionResponse
     */
    public function feedbackSessionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->feedback)) {
            $body['Feedback'] = $request->feedback;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'FeedbackSession',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FeedbackSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'version'     => '2020-03-20',
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
     * @param PredictCVDRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return PredictCVDResponse
     */
    public function predictCVDWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dataFormat)) {
            $body['DataFormat'] = $request->dataFormat;
        }
        if (!Utils::isUnset($request->dataSourceType)) {
            $body['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->orgId)) {
            $body['OrgId'] = $request->orgId;
        }
        if (!Utils::isUnset($request->orgName)) {
            $body['OrgName'] = $request->orgName;
        }
        if (!Utils::isUnset($request->URLList)) {
            $body['URLList'] = $request->URLList;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PredictCVD',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PredictCVDResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'product'  => 'imageprocess',
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
        $predictCVDReq = new PredictCVDRequest([]);
        OpenApiUtilClient::convert($request, $predictCVDReq);
        if (!Utils::isUnset($request->URLList)) {
            $i0 = 0;
            foreach ($request->URLList as $item0) {
                if (!Utils::isUnset($item0->URLObject)) {
                    $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient              = new OSS($ossConfig);
                    $fileObj                = new FileField([
                        'filename'    => $authResponse->body->objectKey,
                        'content'     => $item0->URLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId'         => $authResponse->body->accessKeyId,
                        'policy'              => $authResponse->body->encodedPolicy,
                        'signature'           => $authResponse->body->signature,
                        'key'                 => $authResponse->body->objectKey,
                        'file'                => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header'     => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp      = @$predictCVDReq->URLList[$i0];
                    $tmp->URL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    $i0       = $i0 + 1;
                }
            }
        }

        return $this->predictCVDWithOptions($predictCVDReq, $runtime);
    }

    /**
     * @param RunCTRegistrationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RunCTRegistrationResponse
     */
    public function runCTRegistrationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dataFormat)) {
            $body['DataFormat'] = $request->dataFormat;
        }
        if (!Utils::isUnset($request->dataSourceType)) {
            $body['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->floatingList)) {
            $body['FloatingList'] = $request->floatingList;
        }
        if (!Utils::isUnset($request->orgId)) {
            $body['OrgId'] = $request->orgId;
        }
        if (!Utils::isUnset($request->orgName)) {
            $body['OrgName'] = $request->orgName;
        }
        if (!Utils::isUnset($request->referenceList)) {
            $body['ReferenceList'] = $request->referenceList;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RunCTRegistration',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RunCTRegistrationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'product'  => 'imageprocess',
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
        $runCTRegistrationReq = new RunCTRegistrationRequest([]);
        OpenApiUtilClient::convert($request, $runCTRegistrationReq);
        if (!Utils::isUnset($request->floatingList)) {
            $i0 = 0;
            foreach ($request->floatingList as $item0) {
                if (!Utils::isUnset($item0->floatingURLObject)) {
                    $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient              = new OSS($ossConfig);
                    $fileObj                = new FileField([
                        'filename'    => $authResponse->body->objectKey,
                        'content'     => $item0->floatingURLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId'         => $authResponse->body->accessKeyId,
                        'policy'              => $authResponse->body->encodedPolicy,
                        'signature'           => $authResponse->body->signature,
                        'key'                 => $authResponse->body->objectKey,
                        'file'                => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header'     => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp              = @$runCTRegistrationReq->floatingList[$i0];
                    $tmp->floatingURL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    $i0               = $i0 + 1;
                }
            }
        }
        if (!Utils::isUnset($request->referenceList)) {
            $i1 = 0;
            foreach ($request->referenceList as $item0) {
                if (!Utils::isUnset($item0->referenceURLObject)) {
                    $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient              = new OSS($ossConfig);
                    $fileObj                = new FileField([
                        'filename'    => $authResponse->body->objectKey,
                        'content'     => $item0->referenceURLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId'         => $authResponse->body->accessKeyId,
                        'policy'              => $authResponse->body->encodedPolicy,
                        'signature'           => $authResponse->body->signature,
                        'key'                 => $authResponse->body->objectKey,
                        'file'                => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header'     => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp               = @$runCTRegistrationReq->referenceList[$i1];
                    $tmp->referenceURL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    $i1                = $i1 + 1;
                }
            }
        }

        return $this->runCTRegistrationWithOptions($runCTRegistrationReq, $runtime);
    }

    /**
     * @param RunMedQARequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return RunMedQAResponse
     */
    public function runMedQAWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->answerImageDataList)) {
            $body['AnswerImageDataList'] = $request->answerImageDataList;
        }
        if (!Utils::isUnset($request->answerImageURLList)) {
            $body['AnswerImageURLList'] = $request->answerImageURLList;
        }
        if (!Utils::isUnset($request->answerTextList)) {
            $body['AnswerTextList'] = $request->answerTextList;
        }
        if (!Utils::isUnset($request->department)) {
            $body['Department'] = $request->department;
        }
        if (!Utils::isUnset($request->orgId)) {
            $body['OrgId'] = $request->orgId;
        }
        if (!Utils::isUnset($request->orgName)) {
            $body['OrgName'] = $request->orgName;
        }
        if (!Utils::isUnset($request->questionType)) {
            $body['QuestionType'] = $request->questionType;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RunMedQA',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RunMedQAResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'product'  => 'imageprocess',
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
        $runMedQAReq = new RunMedQARequest([]);
        OpenApiUtilClient::convert($request, $runMedQAReq);
        if (!Utils::isUnset($request->answerImageURLList)) {
            $i0 = 0;
            foreach ($request->answerImageURLList as $item0) {
                if (!Utils::isUnset($item0->answerImageURLObject)) {
                    $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient              = new OSS($ossConfig);
                    $fileObj                = new FileField([
                        'filename'    => $authResponse->body->objectKey,
                        'content'     => $item0->answerImageURLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId'         => $authResponse->body->accessKeyId,
                        'policy'              => $authResponse->body->encodedPolicy,
                        'signature'           => $authResponse->body->signature,
                        'key'                 => $authResponse->body->objectKey,
                        'file'                => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header'     => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp                 = @$runMedQAReq->answerImageURLList[$i0];
                    $tmp->answerImageURL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    $i0                  = $i0 + 1;
                }
            }
        }

        return $this->runMedQAWithOptions($runMedQAReq, $runtime);
    }

    /**
     * @param ScreenCRCRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ScreenCRCResponse
     */
    public function screenCRCWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dataFormat)) {
            $body['DataFormat'] = $request->dataFormat;
        }
        if (!Utils::isUnset($request->dataSourceType)) {
            $body['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->orgId)) {
            $body['OrgId'] = $request->orgId;
        }
        if (!Utils::isUnset($request->orgName)) {
            $body['OrgName'] = $request->orgName;
        }
        if (!Utils::isUnset($request->URLList)) {
            $body['URLList'] = $request->URLList;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ScreenCRC',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ScreenCRCResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'product'  => 'imageprocess',
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
        $screenCRCReq = new ScreenCRCRequest([]);
        OpenApiUtilClient::convert($request, $screenCRCReq);
        if (!Utils::isUnset($request->URLList)) {
            $i0 = 0;
            foreach ($request->URLList as $item0) {
                if (!Utils::isUnset($item0->URLObject)) {
                    $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient              = new OSS($ossConfig);
                    $fileObj                = new FileField([
                        'filename'    => $authResponse->body->objectKey,
                        'content'     => $item0->URLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId'         => $authResponse->body->accessKeyId,
                        'policy'              => $authResponse->body->encodedPolicy,
                        'signature'           => $authResponse->body->signature,
                        'key'                 => $authResponse->body->objectKey,
                        'file'                => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header'     => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp      = @$screenCRCReq->URLList[$i0];
                    $tmp->URL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    $i0       = $i0 + 1;
                }
            }
        }

        return $this->screenCRCWithOptions($screenCRCReq, $runtime);
    }

    /**
     * @param ScreenChestCTRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ScreenChestCTResponse
     */
    public function screenChestCTWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dataFormat)) {
            $body['DataFormat'] = $request->dataFormat;
        }
        if (!Utils::isUnset($request->mask)) {
            $body['Mask'] = $request->mask;
        }
        if (!Utils::isUnset($request->orgId)) {
            $body['OrgId'] = $request->orgId;
        }
        if (!Utils::isUnset($request->orgName)) {
            $body['OrgName'] = $request->orgName;
        }
        if (!Utils::isUnset($request->URLList)) {
            $body['URLList'] = $request->URLList;
        }
        if (!Utils::isUnset($request->verbose)) {
            $body['Verbose'] = $request->verbose;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ScreenChestCT',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ScreenChestCTResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'product'  => 'imageprocess',
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
        $screenChestCTReq = new ScreenChestCTRequest([]);
        OpenApiUtilClient::convert($request, $screenChestCTReq);
        if (!Utils::isUnset($request->URLList)) {
            $i0 = 0;
            foreach ($request->URLList as $item0) {
                if (!Utils::isUnset($item0->URLObject)) {
                    $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient              = new OSS($ossConfig);
                    $fileObj                = new FileField([
                        'filename'    => $authResponse->body->objectKey,
                        'content'     => $item0->URLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId'         => $authResponse->body->accessKeyId,
                        'policy'              => $authResponse->body->encodedPolicy,
                        'signature'           => $authResponse->body->signature,
                        'key'                 => $authResponse->body->objectKey,
                        'file'                => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header'     => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp      = @$screenChestCTReq->URLList[$i0];
                    $tmp->URL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    $i0       = $i0 + 1;
                }
            }
        }

        return $this->screenChestCTWithOptions($screenChestCTReq, $runtime);
    }

    /**
     * @param ScreenECRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ScreenECResponse
     */
    public function screenECWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dataSourceType)) {
            $body['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->URLList)) {
            $body['URLList'] = $request->URLList;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ScreenEC',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ScreenECResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ScreenGCRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ScreenGCResponse
     */
    public function screenGCWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dataFormat)) {
            $body['DataFormat'] = $request->dataFormat;
        }
        if (!Utils::isUnset($request->dataSourceType)) {
            $body['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->orgId)) {
            $body['OrgId'] = $request->orgId;
        }
        if (!Utils::isUnset($request->orgName)) {
            $body['OrgName'] = $request->orgName;
        }
        if (!Utils::isUnset($request->URLList)) {
            $body['URLList'] = $request->URLList;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ScreenGC',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ScreenGCResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'product'  => 'imageprocess',
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
        $screenGCReq = new ScreenGCRequest([]);
        OpenApiUtilClient::convert($request, $screenGCReq);
        if (!Utils::isUnset($request->URLList)) {
            $i0 = 0;
            foreach ($request->URLList as $item0) {
                if (!Utils::isUnset($item0->URLObject)) {
                    $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient              = new OSS($ossConfig);
                    $fileObj                = new FileField([
                        'filename'    => $authResponse->body->objectKey,
                        'content'     => $item0->URLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId'         => $authResponse->body->accessKeyId,
                        'policy'              => $authResponse->body->encodedPolicy,
                        'signature'           => $authResponse->body->signature,
                        'key'                 => $authResponse->body->objectKey,
                        'file'                => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header'     => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp      = @$screenGCReq->URLList[$i0];
                    $tmp->URL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    $i0       = $i0 + 1;
                }
            }
        }

        return $this->screenGCWithOptions($screenGCReq, $runtime);
    }

    /**
     * @param ScreenLCRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ScreenLCResponse
     */
    public function screenLCWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dataFormat)) {
            $body['DataFormat'] = $request->dataFormat;
        }
        if (!Utils::isUnset($request->dataSourceType)) {
            $body['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->orgId)) {
            $body['OrgId'] = $request->orgId;
        }
        if (!Utils::isUnset($request->orgName)) {
            $body['OrgName'] = $request->orgName;
        }
        if (!Utils::isUnset($request->URLList)) {
            $body['URLList'] = $request->URLList;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ScreenLC',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ScreenLCResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'product'  => 'imageprocess',
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
        $screenLCReq = new ScreenLCRequest([]);
        OpenApiUtilClient::convert($request, $screenLCReq);
        if (!Utils::isUnset($request->URLList)) {
            $i0 = 0;
            foreach ($request->URLList as $item0) {
                if (!Utils::isUnset($item0->URLObject)) {
                    $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient              = new OSS($ossConfig);
                    $fileObj                = new FileField([
                        'filename'    => $authResponse->body->objectKey,
                        'content'     => $item0->URLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId'         => $authResponse->body->accessKeyId,
                        'policy'              => $authResponse->body->encodedPolicy,
                        'signature'           => $authResponse->body->signature,
                        'key'                 => $authResponse->body->objectKey,
                        'file'                => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header'     => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp      = @$screenLCReq->URLList[$i0];
                    $tmp->URL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    $i0       = $i0 + 1;
                }
            }
        }

        return $this->screenLCWithOptions($screenLCReq, $runtime);
    }

    /**
     * @param SegmentLymphNodeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SegmentLymphNodeResponse
     */
    public function segmentLymphNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bodyPart)) {
            $body['BodyPart'] = $request->bodyPart;
        }
        if (!Utils::isUnset($request->dataFormat)) {
            $body['DataFormat'] = $request->dataFormat;
        }
        if (!Utils::isUnset($request->orgId)) {
            $body['OrgId'] = $request->orgId;
        }
        if (!Utils::isUnset($request->orgName)) {
            $body['OrgName'] = $request->orgName;
        }
        if (!Utils::isUnset($request->URLList)) {
            $body['URLList'] = $request->URLList;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SegmentLymphNode',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SegmentLymphNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'product'  => 'imageprocess',
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
        $segmentLymphNodeReq = new SegmentLymphNodeRequest([]);
        OpenApiUtilClient::convert($request, $segmentLymphNodeReq);
        if (!Utils::isUnset($request->URLList)) {
            $i0 = 0;
            foreach ($request->URLList as $item0) {
                if (!Utils::isUnset($item0->URLObject)) {
                    $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient              = new OSS($ossConfig);
                    $fileObj                = new FileField([
                        'filename'    => $authResponse->body->objectKey,
                        'content'     => $item0->URLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId'         => $authResponse->body->accessKeyId,
                        'policy'              => $authResponse->body->encodedPolicy,
                        'signature'           => $authResponse->body->signature,
                        'key'                 => $authResponse->body->objectKey,
                        'file'                => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header'     => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp      = @$segmentLymphNodeReq->URLList[$i0];
                    $tmp->URL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    $i0       = $i0 + 1;
                }
            }
        }

        return $this->segmentLymphNodeWithOptions($segmentLymphNodeReq, $runtime);
    }

    /**
     * @param SegmentOARRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SegmentOARResponse
     */
    public function segmentOARWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bodyPart)) {
            $body['BodyPart'] = $request->bodyPart;
        }
        if (!Utils::isUnset($request->contrast)) {
            $body['Contrast'] = $request->contrast;
        }
        if (!Utils::isUnset($request->dataFormat)) {
            $body['DataFormat'] = $request->dataFormat;
        }
        if (!Utils::isUnset($request->maskList)) {
            $body['MaskList'] = $request->maskList;
        }
        if (!Utils::isUnset($request->orgId)) {
            $body['OrgId'] = $request->orgId;
        }
        if (!Utils::isUnset($request->orgName)) {
            $body['OrgName'] = $request->orgName;
        }
        if (!Utils::isUnset($request->URLList)) {
            $body['URLList'] = $request->URLList;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SegmentOAR',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SegmentOARResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'product'  => 'imageprocess',
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
        $segmentOARReq = new SegmentOARRequest([]);
        OpenApiUtilClient::convert($request, $segmentOARReq);
        if (!Utils::isUnset($request->URLList)) {
            $i0 = 0;
            foreach ($request->URLList as $item0) {
                if (!Utils::isUnset($item0->URLObject)) {
                    $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient              = new OSS($ossConfig);
                    $fileObj                = new FileField([
                        'filename'    => $authResponse->body->objectKey,
                        'content'     => $item0->URLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId'         => $authResponse->body->accessKeyId,
                        'policy'              => $authResponse->body->encodedPolicy,
                        'signature'           => $authResponse->body->signature,
                        'key'                 => $authResponse->body->objectKey,
                        'file'                => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header'     => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp      = @$segmentOARReq->URLList[$i0];
                    $tmp->URL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    $i0       = $i0 + 1;
                }
            }
        }

        return $this->segmentOARWithOptions($segmentOARReq, $runtime);
    }

    /**
     * @param TargetVolumeSegmentRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return TargetVolumeSegmentResponse
     */
    public function targetVolumeSegmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cancerType)) {
            $body['CancerType'] = $request->cancerType;
        }
        if (!Utils::isUnset($request->dataFormat)) {
            $body['DataFormat'] = $request->dataFormat;
        }
        if (!Utils::isUnset($request->orgId)) {
            $body['OrgId'] = $request->orgId;
        }
        if (!Utils::isUnset($request->orgName)) {
            $body['OrgName'] = $request->orgName;
        }
        if (!Utils::isUnset($request->targetVolumeType)) {
            $body['TargetVolumeType'] = $request->targetVolumeType;
        }
        if (!Utils::isUnset($request->URLList)) {
            $body['URLList'] = $request->URLList;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TargetVolumeSegment',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TargetVolumeSegmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'product'  => 'imageprocess',
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
        $targetVolumeSegmentReq = new TargetVolumeSegmentRequest([]);
        OpenApiUtilClient::convert($request, $targetVolumeSegmentReq);
        if (!Utils::isUnset($request->URLList)) {
            $i0 = 0;
            foreach ($request->URLList as $item0) {
                if (!Utils::isUnset($item0->URLObject)) {
                    $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient              = new OSS($ossConfig);
                    $fileObj                = new FileField([
                        'filename'    => $authResponse->body->objectKey,
                        'content'     => $item0->URLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId'         => $authResponse->body->accessKeyId,
                        'policy'              => $authResponse->body->encodedPolicy,
                        'signature'           => $authResponse->body->signature,
                        'key'                 => $authResponse->body->objectKey,
                        'file'                => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header'     => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp      = @$targetVolumeSegmentReq->URLList[$i0];
                    $tmp->URL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    $i0       = $i0 + 1;
                }
            }
        }

        return $this->targetVolumeSegmentWithOptions($targetVolumeSegmentReq, $runtime);
    }

    /**
     * @param TranslateMedRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TranslateMedResponse
     */
    public function translateMedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fromLanguage)) {
            $body['FromLanguage'] = $request->fromLanguage;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        if (!Utils::isUnset($request->toLanguage)) {
            $body['ToLanguage'] = $request->toLanguage;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TranslateMed',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TranslateMedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TranslateMedRequest $request
     *
     * @return TranslateMedResponse
     */
    public function translateMed($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->translateMedWithOptions($request, $runtime);
    }
}
