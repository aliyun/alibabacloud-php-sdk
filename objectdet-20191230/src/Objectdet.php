<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\ClassifyVehicleInsuranceAdvanceRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\ClassifyVehicleInsuranceRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\ClassifyVehicleInsuranceResponse;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectIPCObjectRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectIPCObjectResponse;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectKitchenAnimalsAdvanceRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectKitchenAnimalsRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectKitchenAnimalsResponse;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectMainBodyAdvanceRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectMainBodyRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectMainBodyResponse;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectObjectAdvanceRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectObjectRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectObjectResponse;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectTransparentImageAdvanceRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectTransparentImageRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectTransparentImageResponse;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleAdvanceRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleICongestionRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleICongestionResponse;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleICongestionShrinkRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleIllegalParkingRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleIllegalParkingResponse;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleIllegalParkingShrinkRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleResponse;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVideoFrameRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVideoFrameResponse;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVideoFrameShrinkRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVideoIPCObjectAdvanceRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVideoIPCObjectRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVideoIPCObjectResponse;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectWhiteBaseImageAdvanceRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectWhiteBaseImageRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectWhiteBaseImageResponse;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectWorkwearAdvanceRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectWorkwearRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectWorkwearResponse;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectWorkwearShrinkRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\GenerateVehicleRepairPlanRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\GenerateVehicleRepairPlanResponse;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\GetAsyncJobResultRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\GetAsyncJobResultResponse;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\GetVehicleRepairPlanRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\GetVehicleRepairPlanResponse;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\RecognizeVehicleDamageAdvanceRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\RecognizeVehicleDamageRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\RecognizeVehicleDamageResponse;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\RecognizeVehicleDashboardAdvanceRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\RecognizeVehicleDashboardRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\RecognizeVehicleDashboardResponse;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\RecognizeVehiclePartsAdvanceRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\RecognizeVehiclePartsRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\RecognizeVehiclePartsResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use AlibabaCloud\Tea\Rpc\Rpc\Config;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Objectdet extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('objectdet', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ClassifyVehicleInsuranceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ClassifyVehicleInsuranceResponse
     */
    public function classifyVehicleInsuranceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ClassifyVehicleInsuranceResponse::fromMap($this->doRPCRequest('ClassifyVehicleInsurance', '2019-12-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ClassifyVehicleInsuranceRequest $request
     *
     * @return ClassifyVehicleInsuranceResponse
     */
    public function classifyVehicleInsurance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->classifyVehicleInsuranceWithOptions($request, $runtime);
    }

    /**
     * @param ClassifyVehicleInsuranceAdvanceRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ClassifyVehicleInsuranceResponse
     */
    public function classifyVehicleInsuranceAdvance($request, $runtime)
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
            'product'  => 'objectdet',
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
        $classifyVehicleInsuranceReq = new ClassifyVehicleInsuranceRequest([]);
        OpenApiUtilClient::convert($request, $classifyVehicleInsuranceReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $classifyVehicleInsuranceReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->classifyVehicleInsuranceWithOptions($classifyVehicleInsuranceReq, $runtime);
    }

    /**
     * @param DetectIPCObjectRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DetectIPCObjectResponse
     */
    public function detectIPCObjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetectIPCObjectResponse::fromMap($this->doRPCRequest('DetectIPCObject', '2019-12-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DetectIPCObjectRequest $request
     *
     * @return DetectIPCObjectResponse
     */
    public function detectIPCObject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectIPCObjectWithOptions($request, $runtime);
    }

    /**
     * @param DetectKitchenAnimalsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DetectKitchenAnimalsResponse
     */
    public function detectKitchenAnimalsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetectKitchenAnimalsResponse::fromMap($this->doRPCRequest('DetectKitchenAnimals', '2019-12-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DetectKitchenAnimalsRequest $request
     *
     * @return DetectKitchenAnimalsResponse
     */
    public function detectKitchenAnimals($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectKitchenAnimalsWithOptions($request, $runtime);
    }

    /**
     * @param DetectKitchenAnimalsAdvanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DetectKitchenAnimalsResponse
     */
    public function detectKitchenAnimalsAdvance($request, $runtime)
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
            'product'  => 'objectdet',
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
        $detectKitchenAnimalsReq = new DetectKitchenAnimalsRequest([]);
        OpenApiUtilClient::convert($request, $detectKitchenAnimalsReq);
        if (!Utils::isUnset($request->imageURLAObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLAObject,
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
            $detectKitchenAnimalsReq->imageURLA = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->detectKitchenAnimalsWithOptions($detectKitchenAnimalsReq, $runtime);
    }

    /**
     * @param DetectMainBodyRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DetectMainBodyResponse
     */
    public function detectMainBodyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetectMainBodyResponse::fromMap($this->doRPCRequest('DetectMainBody', '2019-12-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DetectMainBodyRequest $request
     *
     * @return DetectMainBodyResponse
     */
    public function detectMainBody($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectMainBodyWithOptions($request, $runtime);
    }

    /**
     * @param DetectMainBodyAdvanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DetectMainBodyResponse
     */
    public function detectMainBodyAdvance($request, $runtime)
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
            'product'  => 'objectdet',
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
        $detectMainBodyReq = new DetectMainBodyRequest([]);
        OpenApiUtilClient::convert($request, $detectMainBodyReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $detectMainBodyReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->detectMainBodyWithOptions($detectMainBodyReq, $runtime);
    }

    /**
     * @param DetectObjectRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DetectObjectResponse
     */
    public function detectObjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetectObjectResponse::fromMap($this->doRPCRequest('DetectObject', '2019-12-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DetectObjectRequest $request
     *
     * @return DetectObjectResponse
     */
    public function detectObject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectObjectWithOptions($request, $runtime);
    }

    /**
     * @param DetectObjectAdvanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DetectObjectResponse
     */
    public function detectObjectAdvance($request, $runtime)
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
            'product'  => 'objectdet',
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
        $detectObjectReq = new DetectObjectRequest([]);
        OpenApiUtilClient::convert($request, $detectObjectReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $detectObjectReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->detectObjectWithOptions($detectObjectReq, $runtime);
    }

    /**
     * @param DetectTransparentImageRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DetectTransparentImageResponse
     */
    public function detectTransparentImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetectTransparentImageResponse::fromMap($this->doRPCRequest('DetectTransparentImage', '2019-12-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DetectTransparentImageRequest $request
     *
     * @return DetectTransparentImageResponse
     */
    public function detectTransparentImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectTransparentImageWithOptions($request, $runtime);
    }

    /**
     * @param DetectTransparentImageAdvanceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DetectTransparentImageResponse
     */
    public function detectTransparentImageAdvance($request, $runtime)
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
            'product'  => 'objectdet',
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
        $detectTransparentImageReq = new DetectTransparentImageRequest([]);
        OpenApiUtilClient::convert($request, $detectTransparentImageReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $detectTransparentImageReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->detectTransparentImageWithOptions($detectTransparentImageReq, $runtime);
    }

    /**
     * @param DetectVehicleRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DetectVehicleResponse
     */
    public function detectVehicleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetectVehicleResponse::fromMap($this->doRPCRequest('DetectVehicle', '2019-12-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DetectVehicleRequest $request
     *
     * @return DetectVehicleResponse
     */
    public function detectVehicle($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectVehicleWithOptions($request, $runtime);
    }

    /**
     * @param DetectVehicleAdvanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DetectVehicleResponse
     */
    public function detectVehicleAdvance($request, $runtime)
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
            'product'  => 'objectdet',
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
        $detectVehicleReq = new DetectVehicleRequest([]);
        OpenApiUtilClient::convert($request, $detectVehicleReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $detectVehicleReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->detectVehicleWithOptions($detectVehicleReq, $runtime);
    }

    /**
     * @param DetectVehicleICongestionRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return DetectVehicleICongestionResponse
     */
    public function detectVehicleICongestionWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DetectVehicleICongestionShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->preRegionIntersectFeatures)) {
            $request->preRegionIntersectFeaturesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->preRegionIntersectFeatures, 'PreRegionIntersectFeatures', 'json');
        }
        if (!Utils::isUnset($tmpReq->roadRegions)) {
            $request->roadRegionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->roadRegions, 'RoadRegions', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetectVehicleICongestionResponse::fromMap($this->doRPCRequest('DetectVehicleICongestion', '2019-12-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DetectVehicleICongestionRequest $request
     *
     * @return DetectVehicleICongestionResponse
     */
    public function detectVehicleICongestion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectVehicleICongestionWithOptions($request, $runtime);
    }

    /**
     * @param DetectVehicleIllegalParkingRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return DetectVehicleIllegalParkingResponse
     */
    public function detectVehicleIllegalParkingWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DetectVehicleIllegalParkingShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->roadRegions)) {
            $request->roadRegionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->roadRegions, 'RoadRegions', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetectVehicleIllegalParkingResponse::fromMap($this->doRPCRequest('DetectVehicleIllegalParking', '2019-12-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DetectVehicleIllegalParkingRequest $request
     *
     * @return DetectVehicleIllegalParkingResponse
     */
    public function detectVehicleIllegalParking($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectVehicleIllegalParkingWithOptions($request, $runtime);
    }

    /**
     * @param DetectVideoFrameRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return DetectVideoFrameResponse
     */
    public function detectVideoFrameWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DetectVideoFrameShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->features)) {
            $request->featuresShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->features, 'Features', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetectVideoFrameResponse::fromMap($this->doRPCRequest('DetectVideoFrame', '2019-12-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DetectVideoFrameRequest $request
     *
     * @return DetectVideoFrameResponse
     */
    public function detectVideoFrame($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectVideoFrameWithOptions($request, $runtime);
    }

    /**
     * @param DetectVideoIPCObjectRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DetectVideoIPCObjectResponse
     */
    public function detectVideoIPCObjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetectVideoIPCObjectResponse::fromMap($this->doRPCRequest('DetectVideoIPCObject', '2019-12-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DetectVideoIPCObjectRequest $request
     *
     * @return DetectVideoIPCObjectResponse
     */
    public function detectVideoIPCObject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectVideoIPCObjectWithOptions($request, $runtime);
    }

    /**
     * @param DetectVideoIPCObjectAdvanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DetectVideoIPCObjectResponse
     */
    public function detectVideoIPCObjectAdvance($request, $runtime)
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
            'product'  => 'objectdet',
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
        $detectVideoIPCObjectReq = new DetectVideoIPCObjectRequest([]);
        OpenApiUtilClient::convert($request, $detectVideoIPCObjectReq);
        if (!Utils::isUnset($request->videoURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->videoURLObject,
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
            $detectVideoIPCObjectReq->videoURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->detectVideoIPCObjectWithOptions($detectVideoIPCObjectReq, $runtime);
    }

    /**
     * @param DetectWhiteBaseImageRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DetectWhiteBaseImageResponse
     */
    public function detectWhiteBaseImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetectWhiteBaseImageResponse::fromMap($this->doRPCRequest('DetectWhiteBaseImage', '2019-12-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DetectWhiteBaseImageRequest $request
     *
     * @return DetectWhiteBaseImageResponse
     */
    public function detectWhiteBaseImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectWhiteBaseImageWithOptions($request, $runtime);
    }

    /**
     * @param DetectWhiteBaseImageAdvanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DetectWhiteBaseImageResponse
     */
    public function detectWhiteBaseImageAdvance($request, $runtime)
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
            'product'  => 'objectdet',
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
        $detectWhiteBaseImageReq = new DetectWhiteBaseImageRequest([]);
        OpenApiUtilClient::convert($request, $detectWhiteBaseImageReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $detectWhiteBaseImageReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->detectWhiteBaseImageWithOptions($detectWhiteBaseImageReq, $runtime);
    }

    /**
     * @param DetectWorkwearRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return DetectWorkwearResponse
     */
    public function detectWorkwearWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DetectWorkwearShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->clothes)) {
            $request->clothesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->clothes), 'Clothes', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetectWorkwearResponse::fromMap($this->doRPCRequest('DetectWorkwear', '2019-12-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DetectWorkwearRequest $request
     *
     * @return DetectWorkwearResponse
     */
    public function detectWorkwear($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectWorkwearWithOptions($request, $runtime);
    }

    /**
     * @param DetectWorkwearAdvanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DetectWorkwearResponse
     */
    public function detectWorkwearAdvance($request, $runtime)
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
            'product'  => 'objectdet',
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
        $detectWorkwearReq = new DetectWorkwearRequest([]);
        OpenApiUtilClient::convert($request, $detectWorkwearReq);
        if (!Utils::isUnset($request->imageUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageUrlObject,
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
            $detectWorkwearReq->imageUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->detectWorkwearWithOptions($detectWorkwearReq, $runtime);
    }

    /**
     * @param GenerateVehicleRepairPlanRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GenerateVehicleRepairPlanResponse
     */
    public function generateVehicleRepairPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GenerateVehicleRepairPlanResponse::fromMap($this->doRPCRequest('GenerateVehicleRepairPlan', '2019-12-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GenerateVehicleRepairPlanRequest $request
     *
     * @return GenerateVehicleRepairPlanResponse
     */
    public function generateVehicleRepairPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateVehicleRepairPlanWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAsyncJobResultResponse::fromMap($this->doRPCRequest('GetAsyncJobResult', '2019-12-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetVehicleRepairPlanRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetVehicleRepairPlanResponse
     */
    public function getVehicleRepairPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetVehicleRepairPlanResponse::fromMap($this->doRPCRequest('GetVehicleRepairPlan', '2019-12-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetVehicleRepairPlanRequest $request
     *
     * @return GetVehicleRepairPlanResponse
     */
    public function getVehicleRepairPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVehicleRepairPlanWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeVehicleDamageRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RecognizeVehicleDamageResponse
     */
    public function recognizeVehicleDamageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RecognizeVehicleDamageResponse::fromMap($this->doRPCRequest('RecognizeVehicleDamage', '2019-12-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RecognizeVehicleDamageRequest $request
     *
     * @return RecognizeVehicleDamageResponse
     */
    public function recognizeVehicleDamage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeVehicleDamageWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeVehicleDamageAdvanceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return RecognizeVehicleDamageResponse
     */
    public function recognizeVehicleDamageAdvance($request, $runtime)
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
            'product'  => 'objectdet',
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
        $recognizeVehicleDamageReq = new RecognizeVehicleDamageRequest([]);
        OpenApiUtilClient::convert($request, $recognizeVehicleDamageReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $recognizeVehicleDamageReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->recognizeVehicleDamageWithOptions($recognizeVehicleDamageReq, $runtime);
    }

    /**
     * @param RecognizeVehicleDashboardRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RecognizeVehicleDashboardResponse
     */
    public function recognizeVehicleDashboardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RecognizeVehicleDashboardResponse::fromMap($this->doRPCRequest('RecognizeVehicleDashboard', '2019-12-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RecognizeVehicleDashboardRequest $request
     *
     * @return RecognizeVehicleDashboardResponse
     */
    public function recognizeVehicleDashboard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeVehicleDashboardWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeVehicleDashboardAdvanceRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return RecognizeVehicleDashboardResponse
     */
    public function recognizeVehicleDashboardAdvance($request, $runtime)
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
            'product'  => 'objectdet',
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
        $recognizeVehicleDashboardReq = new RecognizeVehicleDashboardRequest([]);
        OpenApiUtilClient::convert($request, $recognizeVehicleDashboardReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $recognizeVehicleDashboardReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->recognizeVehicleDashboardWithOptions($recognizeVehicleDashboardReq, $runtime);
    }

    /**
     * @param RecognizeVehiclePartsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RecognizeVehiclePartsResponse
     */
    public function recognizeVehiclePartsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RecognizeVehiclePartsResponse::fromMap($this->doRPCRequest('RecognizeVehicleParts', '2019-12-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RecognizeVehiclePartsRequest $request
     *
     * @return RecognizeVehiclePartsResponse
     */
    public function recognizeVehicleParts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeVehiclePartsWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeVehiclePartsAdvanceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return RecognizeVehiclePartsResponse
     */
    public function recognizeVehiclePartsAdvance($request, $runtime)
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
            'product'  => 'objectdet',
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
        $recognizeVehiclePartsReq = new RecognizeVehiclePartsRequest([]);
        OpenApiUtilClient::convert($request, $recognizeVehiclePartsReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $recognizeVehiclePartsReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->recognizeVehiclePartsWithOptions($recognizeVehiclePartsReq, $runtime);
    }
}
