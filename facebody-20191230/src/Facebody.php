<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230;

use AlibabaCloud\Dara\Dara;
use AlibabaCloud\Dara\Exception\DaraException;
use AlibabaCloud\Dara\Exception\DaraUnableRetryException;
use AlibabaCloud\Dara\Models\FileField;
use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Request;
use AlibabaCloud\Dara\RetryPolicy\RetryPolicyContext;
use AlibabaCloud\Dara\Util\FormUtil;
use AlibabaCloud\Dara\Util\StreamUtil;
use AlibabaCloud\Dara\Util\XML;
use AlibabaCloud\SDK\Facebody\V20191230\Models\AddFaceAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\AddFaceEntityRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\AddFaceEntityResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\AddFaceImageTemplateAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\AddFaceImageTemplateRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\AddFaceImageTemplateResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\AddFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\AddFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\BatchAddFacesAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\BatchAddFacesRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\BatchAddFacesResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\BatchAddFacesShrinkRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\BlurFaceAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\BlurFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\BlurFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\BodyPostureAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\BodyPostureRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\BodyPostureResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\CompareFaceAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\CompareFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\CompareFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\CompareFaceWithMaskAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\CompareFaceWithMaskRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\CompareFaceWithMaskResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\CreateFaceDbRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\CreateFaceDbResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DeepfakeFaceAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DeepfakeFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DeepfakeFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DeleteFaceDbRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DeleteFaceDbResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DeleteFaceEntityRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DeleteFaceEntityResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DeleteFaceImageTemplateRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DeleteFaceImageTemplateResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DeleteFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DeleteFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectBodyCountAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectBodyCountRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectBodyCountResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectCelebrityAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectCelebrityRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectCelebrityResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectFaceAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectInfraredLivingFaceAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectInfraredLivingFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectInfraredLivingFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectLivingFaceAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectLivingFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectLivingFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectPedestrianAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectPedestrianRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectPedestrianResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectVideoLivingFaceAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectVideoLivingFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectVideoLivingFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\EnhanceFaceAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\EnhanceFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\EnhanceFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\ExtractFingerPrintAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\ExtractFingerPrintRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\ExtractFingerPrintResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\FaceBeautyAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\FaceBeautyRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\FaceBeautyResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\GenerateHumanAnimeStyleAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\GenerateHumanAnimeStyleRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\GenerateHumanAnimeStyleResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\GenerateHumanSketchStyleAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\GenerateHumanSketchStyleRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\GenerateHumanSketchStyleResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\GenRealPersonVerificationTokenRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\GenRealPersonVerificationTokenResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\GetFaceEntityRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\GetFaceEntityResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\GetRealPersonVerificationResultRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\GetRealPersonVerificationResultResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\LiquifyFaceAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\LiquifyFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\LiquifyFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\ListFaceDbsRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\ListFaceDbsResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\ListFaceEntitiesRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\ListFaceEntitiesResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\MergeImageFaceAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\MergeImageFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\MergeImageFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\MonitorExaminationAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\MonitorExaminationRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\MonitorExaminationResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\QueryFaceImageTemplateRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\QueryFaceImageTemplateResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeActionAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeActionRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeActionResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeExpressionAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeExpressionRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeExpressionResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeFaceAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizePublicFaceAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizePublicFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizePublicFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RetouchSkinAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RetouchSkinRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RetouchSkinResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\SearchFaceAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\SearchFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\SearchFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\UpdateFaceEntityRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\UpdateFaceEntityResponse;
use Darabonba\OpenApi\Exceptions\ClientException;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Facebody extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('facebody', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string         $bucketName
     * @param mixed[]        $form
     * @param RuntimeOptions $runtime
     *
     * @return mixed[]
     */
    public function _postOSSObject($bucketName, $form, $runtime)
    {
        $_runtime = [
            'key' => '' . ($runtime->key ?: $this->_key),
            'cert' => '' . ($runtime->cert ?: $this->_cert),
            'ca' => '' . ($runtime->ca ?: $this->_ca),
            'readTimeout' => (($runtime->readTimeout ?: $this->_readTimeout) + 0),
            'connectTimeout' => (($runtime->connectTimeout ?: $this->_connectTimeout) + 0),
            'httpProxy' => '' . ($runtime->httpProxy ?: $this->_httpProxy),
            'httpsProxy' => '' . ($runtime->httpsProxy ?: $this->_httpsProxy),
            'noProxy' => '' . ($runtime->noProxy ?: $this->_noProxy),
            'socks5Proxy' => '' . ($runtime->socks5Proxy ?: $this->_socks5Proxy),
            'socks5NetWork' => '' . ($runtime->socks5NetWork ?: $this->_socks5NetWork),
            'maxIdleConns' => (($runtime->maxIdleConns ?: $this->_maxIdleConns) + 0),
            'retryOptions' => $this->_retryOptions,
            'ignoreSSL' => (bool) (($runtime->ignoreSSL ?: false)),
            'tlsMinVersion' => $this->_tlsMinVersion,
        ];

        $_retriesAttempted = 0;
        $_lastRequest = null;
        $_lastResponse = null;
        $_context = new RetryPolicyContext([
            'retriesAttempted' => $_retriesAttempted,
        ]);
        while (Dara::shouldRetry($_runtime['retryOptions'], $_context)) {
            if ($_retriesAttempted > 0) {
                $_backoffTime = Dara::getBackoffDelay($_runtime['retryOptions'], $_context);
                if ($_backoffTime > 0) {
                    Dara::sleep($_backoffTime);
                }
            }

            ++$_retriesAttempted;

            try {
                $_request = new Request();
                $boundary = FormUtil::getBoundary();
                $_request->protocol = 'HTTPS';
                $_request->method = 'POST';
                $_request->pathname = '/';
                $_request->headers = [
                    'host' => '' . @$form['host'],
                    'date' => Utils::getDateUTCString(),
                    'user-agent' => Utils::getUserAgent(''),
                ];
                @$_request->headers['content-type'] = 'multipart/form-data; boundary=' . $boundary . '';
                $_request->body = FormUtil::toFileForm($form, $boundary);
                $_lastRequest = $_request;
                $_response = Dara::send($_request, $_runtime);
                $_lastResponse = $_response;

                $respMap = null;
                $bodyStr = StreamUtil::readAsString($_response->body);
                if (($_response->statusCode >= 400) && ($_response->statusCode < 600)) {
                    $respMap = XML::parseXml($bodyStr, null);
                    $err = @$respMap['Error'];

                    throw new ClientException([
                        'code' => '' . @$err['Code'],
                        'message' => '' . @$err['Message'],
                        'data' => [
                            'httpCode' => $_response->statusCode,
                            'requestId' => '' . @$err['RequestId'],
                            'hostId' => '' . @$err['HostId'],
                        ],
                    ]);
                }

                $respMap = XML::parseXml($bodyStr, null);

                return Dara::merge([
                ], $respMap);
            } catch (DaraException $e) {
                $_context = new RetryPolicyContext([
                    'retriesAttempted' => $_retriesAttempted,
                    'lastRequest' => $_lastRequest,
                    'lastResponse' => $_lastResponse,
                    'exception' => $e,
                ]);

                continue;
            }
        }

        throw new DaraUnableRetryException($_context);
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
     * @param Request - AddFaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddFaceResponse
     *
     * @param AddFaceRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return AddFaceResponse
     */
    public function addFaceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dbName) {
            @$body['DbName'] = $request->dbName;
        }

        if (null !== $request->entityId) {
            @$body['EntityId'] = $request->entityId;
        }

        if (null !== $request->extraData) {
            @$body['ExtraData'] = $request->extraData;
        }

        if (null !== $request->imageUrl) {
            @$body['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->qualityScoreThreshold) {
            @$body['QualityScoreThreshold'] = $request->qualityScoreThreshold;
        }

        if (null !== $request->similarityScoreThresholdBetweenEntity) {
            @$body['SimilarityScoreThresholdBetweenEntity'] = $request->similarityScoreThresholdBetweenEntity;
        }

        if (null !== $request->similarityScoreThresholdInEntity) {
            @$body['SimilarityScoreThresholdInEntity'] = $request->similarityScoreThresholdInEntity;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddFace',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - AddFaceRequest
     *
     * @returns AddFaceResponse
     *
     * @param AddFaceRequest $request
     *
     * @return AddFaceResponse
     */
    public function addFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addFaceWithOptions($request, $runtime);
    }

    /**
     * @param AddFaceAdvanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddFaceResponse
     */
    public function addFaceAdvance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
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
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'facebody',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $addFaceReq = new AddFaceRequest([]);
        Utils::convert($request, $addFaceReq);
        if (null !== $request->imageUrlObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $addFaceReq->imageUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->addFaceWithOptions($addFaceReq, $runtime);
    }

    /**
     * @param Request - AddFaceEntityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddFaceEntityResponse
     *
     * @param AddFaceEntityRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddFaceEntityResponse
     */
    public function addFaceEntityWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dbName) {
            @$body['DbName'] = $request->dbName;
        }

        if (null !== $request->entityId) {
            @$body['EntityId'] = $request->entityId;
        }

        if (null !== $request->labels) {
            @$body['Labels'] = $request->labels;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddFaceEntity',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddFaceEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - AddFaceEntityRequest
     *
     * @returns AddFaceEntityResponse
     *
     * @param AddFaceEntityRequest $request
     *
     * @return AddFaceEntityResponse
     */
    public function addFaceEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addFaceEntityWithOptions($request, $runtime);
    }

    /**
     * 图像人脸融合模板增加.
     *
     * @param Request - AddFaceImageTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddFaceImageTemplateResponse
     *
     * @param AddFaceImageTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddFaceImageTemplateResponse
     */
    public function addFaceImageTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageURL) {
            @$body['ImageURL'] = $request->imageURL;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddFaceImageTemplate',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddFaceImageTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 图像人脸融合模板增加.
     *
     * @param Request - AddFaceImageTemplateRequest
     *
     * @returns AddFaceImageTemplateResponse
     *
     * @param AddFaceImageTemplateRequest $request
     *
     * @return AddFaceImageTemplateResponse
     */
    public function addFaceImageTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addFaceImageTemplateWithOptions($request, $runtime);
    }

    /**
     * @param AddFaceImageTemplateAdvanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return AddFaceImageTemplateResponse
     */
    public function addFaceImageTemplateAdvance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
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
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'facebody',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $addFaceImageTemplateReq = new AddFaceImageTemplateRequest([]);
        Utils::convert($request, $addFaceImageTemplateReq);
        if (null !== $request->imageURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageURLObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $addFaceImageTemplateReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->addFaceImageTemplateWithOptions($addFaceImageTemplateReq, $runtime);
    }

    /**
     * 批量添加人脸数据.
     *
     * @param tmpReq - BatchAddFacesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchAddFacesResponse
     *
     * @param BatchAddFacesRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return BatchAddFacesResponse
     */
    public function batchAddFacesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchAddFacesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->faces) {
            $request->facesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->faces, 'Faces', 'json');
        }

        $body = [];
        if (null !== $request->dbName) {
            @$body['DbName'] = $request->dbName;
        }

        if (null !== $request->entityId) {
            @$body['EntityId'] = $request->entityId;
        }

        if (null !== $request->facesShrink) {
            @$body['Faces'] = $request->facesShrink;
        }

        if (null !== $request->qualityScoreThreshold) {
            @$body['QualityScoreThreshold'] = $request->qualityScoreThreshold;
        }

        if (null !== $request->similarityScoreThresholdBetweenEntity) {
            @$body['SimilarityScoreThresholdBetweenEntity'] = $request->similarityScoreThresholdBetweenEntity;
        }

        if (null !== $request->similarityScoreThresholdInEntity) {
            @$body['SimilarityScoreThresholdInEntity'] = $request->similarityScoreThresholdInEntity;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchAddFaces',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchAddFacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量添加人脸数据.
     *
     * @param Request - BatchAddFacesRequest
     *
     * @returns BatchAddFacesResponse
     *
     * @param BatchAddFacesRequest $request
     *
     * @return BatchAddFacesResponse
     */
    public function batchAddFaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchAddFacesWithOptions($request, $runtime);
    }

    /**
     * @param BatchAddFacesAdvanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return BatchAddFacesResponse
     */
    public function batchAddFacesAdvance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
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
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'facebody',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $batchAddFacesReq = new BatchAddFacesRequest([]);
        Utils::convert($request, $batchAddFacesReq);
        if (null !== $request->faces) {
            $i0 = 0;

            foreach ($request->faces as $item0) {
                if (null !== $item0->imageURLObject) {
                    $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
                    $tmpBody = @$authResponse['body'];
                    $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
                    $authResponseBody = Utils::stringifyMapValue($tmpBody);
                    $fileObj = new FileField([
                        'filename' => @$authResponseBody['ObjectKey'],
                        'content' => $item0->imageURLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = [
                        'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                        'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                        'policy' => @$authResponseBody['EncodedPolicy'],
                        'Signature' => @$authResponseBody['Signature'],
                        'key' => @$authResponseBody['ObjectKey'],
                        'file' => $fileObj,
                        'success_action_status' => '201',
                    ];
                    $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
                    $tmpObj = @$batchAddFacesReq->faces[$i0];
                    $tmpObj->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
                    ++$i0;
                }
            }
        }

        return $this->batchAddFacesWithOptions($batchAddFacesReq, $runtime);
    }

    /**
     * @param Request - BlurFaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BlurFaceResponse
     *
     * @param BlurFaceRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return BlurFaceResponse
     */
    public function blurFaceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageURL) {
            @$body['ImageURL'] = $request->imageURL;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BlurFace',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BlurFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - BlurFaceRequest
     *
     * @returns BlurFaceResponse
     *
     * @param BlurFaceRequest $request
     *
     * @return BlurFaceResponse
     */
    public function blurFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->blurFaceWithOptions($request, $runtime);
    }

    /**
     * @param BlurFaceAdvanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return BlurFaceResponse
     */
    public function blurFaceAdvance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
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
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'facebody',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $blurFaceReq = new BlurFaceRequest([]);
        Utils::convert($request, $blurFaceReq);
        if (null !== $request->imageURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageURLObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $blurFaceReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->blurFaceWithOptions($blurFaceReq, $runtime);
    }

    /**
     * @param Request - BodyPostureRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BodyPostureResponse
     *
     * @param BodyPostureRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return BodyPostureResponse
     */
    public function bodyPostureWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageURL) {
            @$body['ImageURL'] = $request->imageURL;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BodyPosture',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BodyPostureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - BodyPostureRequest
     *
     * @returns BodyPostureResponse
     *
     * @param BodyPostureRequest $request
     *
     * @return BodyPostureResponse
     */
    public function bodyPosture($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bodyPostureWithOptions($request, $runtime);
    }

    /**
     * @param BodyPostureAdvanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return BodyPostureResponse
     */
    public function bodyPostureAdvance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
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
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'facebody',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $bodyPostureReq = new BodyPostureRequest([]);
        Utils::convert($request, $bodyPostureReq);
        if (null !== $request->imageURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageURLObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $bodyPostureReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->bodyPostureWithOptions($bodyPostureReq, $runtime);
    }

    /**
     * 人脸比对(1:1).
     *
     * @param Request - CompareFaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CompareFaceResponse
     *
     * @param CompareFaceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CompareFaceResponse
     */
    public function compareFaceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageDataA) {
            @$body['ImageDataA'] = $request->imageDataA;
        }

        if (null !== $request->imageDataB) {
            @$body['ImageDataB'] = $request->imageDataB;
        }

        if (null !== $request->imageURLA) {
            @$body['ImageURLA'] = $request->imageURLA;
        }

        if (null !== $request->imageURLB) {
            @$body['ImageURLB'] = $request->imageURLB;
        }

        if (null !== $request->qualityScoreThreshold) {
            @$body['QualityScoreThreshold'] = $request->qualityScoreThreshold;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CompareFace',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CompareFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 人脸比对(1:1).
     *
     * @param Request - CompareFaceRequest
     *
     * @returns CompareFaceResponse
     *
     * @param CompareFaceRequest $request
     *
     * @return CompareFaceResponse
     */
    public function compareFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->compareFaceWithOptions($request, $runtime);
    }

    /**
     * @param CompareFaceAdvanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CompareFaceResponse
     */
    public function compareFaceAdvance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
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
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'facebody',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $compareFaceReq = new CompareFaceRequest([]);
        Utils::convert($request, $compareFaceReq);
        if (null !== $request->imageURLAObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageURLAObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $compareFaceReq->imageURLA = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        if (null !== $request->imageURLBObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageURLBObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $compareFaceReq->imageURLB = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->compareFaceWithOptions($compareFaceReq, $runtime);
    }

    /**
     * 口罩人脸比对1:1.
     *
     * @param Request - CompareFaceWithMaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CompareFaceWithMaskResponse
     *
     * @param CompareFaceWithMaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CompareFaceWithMaskResponse
     */
    public function compareFaceWithMaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageURLA) {
            @$body['ImageURLA'] = $request->imageURLA;
        }

        if (null !== $request->imageURLB) {
            @$body['ImageURLB'] = $request->imageURLB;
        }

        if (null !== $request->qualityScoreThreshold) {
            @$body['QualityScoreThreshold'] = $request->qualityScoreThreshold;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CompareFaceWithMask',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CompareFaceWithMaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 口罩人脸比对1:1.
     *
     * @param Request - CompareFaceWithMaskRequest
     *
     * @returns CompareFaceWithMaskResponse
     *
     * @param CompareFaceWithMaskRequest $request
     *
     * @return CompareFaceWithMaskResponse
     */
    public function compareFaceWithMask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->compareFaceWithMaskWithOptions($request, $runtime);
    }

    /**
     * @param CompareFaceWithMaskAdvanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CompareFaceWithMaskResponse
     */
    public function compareFaceWithMaskAdvance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
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
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'facebody',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $compareFaceWithMaskReq = new CompareFaceWithMaskRequest([]);
        Utils::convert($request, $compareFaceWithMaskReq);
        if (null !== $request->imageURLAObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageURLAObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $compareFaceWithMaskReq->imageURLA = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        if (null !== $request->imageURLBObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageURLBObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $compareFaceWithMaskReq->imageURLB = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->compareFaceWithMaskWithOptions($compareFaceWithMaskReq, $runtime);
    }

    /**
     * @param Request - CreateFaceDbRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFaceDbResponse
     *
     * @param CreateFaceDbRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateFaceDbResponse
     */
    public function createFaceDbWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateFaceDb',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateFaceDbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - CreateFaceDbRequest
     *
     * @returns CreateFaceDbResponse
     *
     * @param CreateFaceDbRequest $request
     *
     * @return CreateFaceDbResponse
     */
    public function createFaceDb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFaceDbWithOptions($request, $runtime);
    }

    /**
     * 换脸鉴别.
     *
     * @param Request - DeepfakeFaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeepfakeFaceResponse
     *
     * @param DeepfakeFaceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeepfakeFaceResponse
     */
    public function deepfakeFaceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->tasks) {
            @$body['Tasks'] = $request->tasks;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeepfakeFace',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeepfakeFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 换脸鉴别.
     *
     * @param Request - DeepfakeFaceRequest
     *
     * @returns DeepfakeFaceResponse
     *
     * @param DeepfakeFaceRequest $request
     *
     * @return DeepfakeFaceResponse
     */
    public function deepfakeFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deepfakeFaceWithOptions($request, $runtime);
    }

    /**
     * @param DeepfakeFaceAdvanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeepfakeFaceResponse
     */
    public function deepfakeFaceAdvance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
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
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'facebody',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $deepfakeFaceReq = new DeepfakeFaceRequest([]);
        Utils::convert($request, $deepfakeFaceReq);
        if (null !== $request->tasks) {
            $i0 = 0;

            foreach ($request->tasks as $item0) {
                if (null !== $item0->imageURLObject) {
                    $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
                    $tmpBody = @$authResponse['body'];
                    $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
                    $authResponseBody = Utils::stringifyMapValue($tmpBody);
                    $fileObj = new FileField([
                        'filename' => @$authResponseBody['ObjectKey'],
                        'content' => $item0->imageURLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = [
                        'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                        'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                        'policy' => @$authResponseBody['EncodedPolicy'],
                        'Signature' => @$authResponseBody['Signature'],
                        'key' => @$authResponseBody['ObjectKey'],
                        'file' => $fileObj,
                        'success_action_status' => '201',
                    ];
                    $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
                    $tmpObj = @$deepfakeFaceReq->tasks[$i0];
                    $tmpObj->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
                    ++$i0;
                }
            }
        }

        return $this->deepfakeFaceWithOptions($deepfakeFaceReq, $runtime);
    }

    /**
     * @param Request - DeleteFaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFaceResponse
     *
     * @param DeleteFaceRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteFaceResponse
     */
    public function deleteFaceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dbName) {
            @$body['DbName'] = $request->dbName;
        }

        if (null !== $request->faceId) {
            @$body['FaceId'] = $request->faceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteFace',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - DeleteFaceRequest
     *
     * @returns DeleteFaceResponse
     *
     * @param DeleteFaceRequest $request
     *
     * @return DeleteFaceResponse
     */
    public function deleteFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFaceWithOptions($request, $runtime);
    }

    /**
     * @param Request - DeleteFaceDbRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFaceDbResponse
     *
     * @param DeleteFaceDbRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteFaceDbResponse
     */
    public function deleteFaceDbWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteFaceDb',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteFaceDbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - DeleteFaceDbRequest
     *
     * @returns DeleteFaceDbResponse
     *
     * @param DeleteFaceDbRequest $request
     *
     * @return DeleteFaceDbResponse
     */
    public function deleteFaceDb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFaceDbWithOptions($request, $runtime);
    }

    /**
     * @param Request - DeleteFaceEntityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFaceEntityResponse
     *
     * @param DeleteFaceEntityRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteFaceEntityResponse
     */
    public function deleteFaceEntityWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dbName) {
            @$body['DbName'] = $request->dbName;
        }

        if (null !== $request->entityId) {
            @$body['EntityId'] = $request->entityId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteFaceEntity',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteFaceEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - DeleteFaceEntityRequest
     *
     * @returns DeleteFaceEntityResponse
     *
     * @param DeleteFaceEntityRequest $request
     *
     * @return DeleteFaceEntityResponse
     */
    public function deleteFaceEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFaceEntityWithOptions($request, $runtime);
    }

    /**
     * 图像人脸融合模板删除.
     *
     * @param Request - DeleteFaceImageTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFaceImageTemplateResponse
     *
     * @param DeleteFaceImageTemplateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteFaceImageTemplateResponse
     */
    public function deleteFaceImageTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->templateId) {
            @$body['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteFaceImageTemplate',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteFaceImageTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 图像人脸融合模板删除.
     *
     * @param Request - DeleteFaceImageTemplateRequest
     *
     * @returns DeleteFaceImageTemplateResponse
     *
     * @param DeleteFaceImageTemplateRequest $request
     *
     * @return DeleteFaceImageTemplateResponse
     */
    public function deleteFaceImageTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFaceImageTemplateWithOptions($request, $runtime);
    }

    /**
     * @param Request - DetectBodyCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectBodyCountResponse
     *
     * @param DetectBodyCountRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DetectBodyCountResponse
     */
    public function detectBodyCountWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageURL) {
            @$body['ImageURL'] = $request->imageURL;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DetectBodyCount',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectBodyCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - DetectBodyCountRequest
     *
     * @returns DetectBodyCountResponse
     *
     * @param DetectBodyCountRequest $request
     *
     * @return DetectBodyCountResponse
     */
    public function detectBodyCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectBodyCountWithOptions($request, $runtime);
    }

    /**
     * @param DetectBodyCountAdvanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DetectBodyCountResponse
     */
    public function detectBodyCountAdvance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
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
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'facebody',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $detectBodyCountReq = new DetectBodyCountRequest([]);
        Utils::convert($request, $detectBodyCountReq);
        if (null !== $request->imageURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageURLObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $detectBodyCountReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->detectBodyCountWithOptions($detectBodyCountReq, $runtime);
    }

    /**
     * @param Request - DetectCelebrityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectCelebrityResponse
     *
     * @param DetectCelebrityRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DetectCelebrityResponse
     */
    public function detectCelebrityWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageURL) {
            @$body['ImageURL'] = $request->imageURL;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DetectCelebrity',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectCelebrityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - DetectCelebrityRequest
     *
     * @returns DetectCelebrityResponse
     *
     * @param DetectCelebrityRequest $request
     *
     * @return DetectCelebrityResponse
     */
    public function detectCelebrity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectCelebrityWithOptions($request, $runtime);
    }

    /**
     * @param DetectCelebrityAdvanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DetectCelebrityResponse
     */
    public function detectCelebrityAdvance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
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
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'facebody',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $detectCelebrityReq = new DetectCelebrityRequest([]);
        Utils::convert($request, $detectCelebrityReq);
        if (null !== $request->imageURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageURLObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $detectCelebrityReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->detectCelebrityWithOptions($detectCelebrityReq, $runtime);
    }

    /**
     * @param Request - DetectFaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectFaceResponse
     *
     * @param DetectFaceRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DetectFaceResponse
     */
    public function detectFaceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageURL) {
            @$body['ImageURL'] = $request->imageURL;
        }

        if (null !== $request->landmark) {
            @$body['Landmark'] = $request->landmark;
        }

        if (null !== $request->maxFaceNumber) {
            @$body['MaxFaceNumber'] = $request->maxFaceNumber;
        }

        if (null !== $request->pose) {
            @$body['Pose'] = $request->pose;
        }

        if (null !== $request->quality) {
            @$body['Quality'] = $request->quality;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DetectFace',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - DetectFaceRequest
     *
     * @returns DetectFaceResponse
     *
     * @param DetectFaceRequest $request
     *
     * @return DetectFaceResponse
     */
    public function detectFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectFaceWithOptions($request, $runtime);
    }

    /**
     * @param DetectFaceAdvanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DetectFaceResponse
     */
    public function detectFaceAdvance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
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
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'facebody',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $detectFaceReq = new DetectFaceRequest([]);
        Utils::convert($request, $detectFaceReq);
        if (null !== $request->imageURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageURLObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $detectFaceReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->detectFaceWithOptions($detectFaceReq, $runtime);
    }

    /**
     * 红外人脸活体检测.
     *
     * @param Request - DetectInfraredLivingFaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectInfraredLivingFaceResponse
     *
     * @param DetectInfraredLivingFaceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DetectInfraredLivingFaceResponse
     */
    public function detectInfraredLivingFaceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->tasks) {
            @$body['Tasks'] = $request->tasks;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DetectInfraredLivingFace',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectInfraredLivingFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 红外人脸活体检测.
     *
     * @param Request - DetectInfraredLivingFaceRequest
     *
     * @returns DetectInfraredLivingFaceResponse
     *
     * @param DetectInfraredLivingFaceRequest $request
     *
     * @return DetectInfraredLivingFaceResponse
     */
    public function detectInfraredLivingFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectInfraredLivingFaceWithOptions($request, $runtime);
    }

    /**
     * @param DetectInfraredLivingFaceAdvanceRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DetectInfraredLivingFaceResponse
     */
    public function detectInfraredLivingFaceAdvance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
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
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'facebody',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $detectInfraredLivingFaceReq = new DetectInfraredLivingFaceRequest([]);
        Utils::convert($request, $detectInfraredLivingFaceReq);
        if (null !== $request->tasks) {
            $i0 = 0;

            foreach ($request->tasks as $item0) {
                if (null !== $item0->imageURLObject) {
                    $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
                    $tmpBody = @$authResponse['body'];
                    $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
                    $authResponseBody = Utils::stringifyMapValue($tmpBody);
                    $fileObj = new FileField([
                        'filename' => @$authResponseBody['ObjectKey'],
                        'content' => $item0->imageURLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = [
                        'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                        'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                        'policy' => @$authResponseBody['EncodedPolicy'],
                        'Signature' => @$authResponseBody['Signature'],
                        'key' => @$authResponseBody['ObjectKey'],
                        'file' => $fileObj,
                        'success_action_status' => '201',
                    ];
                    $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
                    $tmpObj = @$detectInfraredLivingFaceReq->tasks[$i0];
                    $tmpObj->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
                    ++$i0;
                }
            }
        }

        return $this->detectInfraredLivingFaceWithOptions($detectInfraredLivingFaceReq, $runtime);
    }

    /**
     * 人脸活体检测(DetectLivingFace).
     *
     * @param Request - DetectLivingFaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectLivingFaceResponse
     *
     * @param DetectLivingFaceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DetectLivingFaceResponse
     */
    public function detectLivingFaceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->tasks) {
            @$body['Tasks'] = $request->tasks;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DetectLivingFace',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectLivingFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 人脸活体检测(DetectLivingFace).
     *
     * @param Request - DetectLivingFaceRequest
     *
     * @returns DetectLivingFaceResponse
     *
     * @param DetectLivingFaceRequest $request
     *
     * @return DetectLivingFaceResponse
     */
    public function detectLivingFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectLivingFaceWithOptions($request, $runtime);
    }

    /**
     * @param DetectLivingFaceAdvanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DetectLivingFaceResponse
     */
    public function detectLivingFaceAdvance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
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
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'facebody',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $detectLivingFaceReq = new DetectLivingFaceRequest([]);
        Utils::convert($request, $detectLivingFaceReq);
        if (null !== $request->tasks) {
            $i0 = 0;

            foreach ($request->tasks as $item0) {
                if (null !== $item0->imageURLObject) {
                    $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
                    $tmpBody = @$authResponse['body'];
                    $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
                    $authResponseBody = Utils::stringifyMapValue($tmpBody);
                    $fileObj = new FileField([
                        'filename' => @$authResponseBody['ObjectKey'],
                        'content' => $item0->imageURLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = [
                        'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                        'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                        'policy' => @$authResponseBody['EncodedPolicy'],
                        'Signature' => @$authResponseBody['Signature'],
                        'key' => @$authResponseBody['ObjectKey'],
                        'file' => $fileObj,
                        'success_action_status' => '201',
                    ];
                    $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
                    $tmpObj = @$detectLivingFaceReq->tasks[$i0];
                    $tmpObj->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
                    ++$i0;
                }
            }
        }

        return $this->detectLivingFaceWithOptions($detectLivingFaceReq, $runtime);
    }

    /**
     * @param Request - DetectPedestrianRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectPedestrianResponse
     *
     * @param DetectPedestrianRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DetectPedestrianResponse
     */
    public function detectPedestrianWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageURL) {
            @$body['ImageURL'] = $request->imageURL;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DetectPedestrian',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectPedestrianResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - DetectPedestrianRequest
     *
     * @returns DetectPedestrianResponse
     *
     * @param DetectPedestrianRequest $request
     *
     * @return DetectPedestrianResponse
     */
    public function detectPedestrian($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectPedestrianWithOptions($request, $runtime);
    }

    /**
     * @param DetectPedestrianAdvanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DetectPedestrianResponse
     */
    public function detectPedestrianAdvance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
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
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'facebody',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $detectPedestrianReq = new DetectPedestrianRequest([]);
        Utils::convert($request, $detectPedestrianReq);
        if (null !== $request->imageURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageURLObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $detectPedestrianReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->detectPedestrianWithOptions($detectPedestrianReq, $runtime);
    }

    /**
     * @param Request - DetectVideoLivingFaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectVideoLivingFaceResponse
     *
     * @param DetectVideoLivingFaceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DetectVideoLivingFaceResponse
     */
    public function detectVideoLivingFaceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->videoUrl) {
            @$body['VideoUrl'] = $request->videoUrl;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DetectVideoLivingFace',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectVideoLivingFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - DetectVideoLivingFaceRequest
     *
     * @returns DetectVideoLivingFaceResponse
     *
     * @param DetectVideoLivingFaceRequest $request
     *
     * @return DetectVideoLivingFaceResponse
     */
    public function detectVideoLivingFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectVideoLivingFaceWithOptions($request, $runtime);
    }

    /**
     * @param DetectVideoLivingFaceAdvanceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DetectVideoLivingFaceResponse
     */
    public function detectVideoLivingFaceAdvance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
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
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'facebody',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $detectVideoLivingFaceReq = new DetectVideoLivingFaceRequest([]);
        Utils::convert($request, $detectVideoLivingFaceReq);
        if (null !== $request->videoUrlObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->videoUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $detectVideoLivingFaceReq->videoUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->detectVideoLivingFaceWithOptions($detectVideoLivingFaceReq, $runtime);
    }

    /**
     * @param Request - EnhanceFaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnhanceFaceResponse
     *
     * @param EnhanceFaceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return EnhanceFaceResponse
     */
    public function enhanceFaceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageURL) {
            @$body['ImageURL'] = $request->imageURL;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnhanceFace',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnhanceFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - EnhanceFaceRequest
     *
     * @returns EnhanceFaceResponse
     *
     * @param EnhanceFaceRequest $request
     *
     * @return EnhanceFaceResponse
     */
    public function enhanceFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enhanceFaceWithOptions($request, $runtime);
    }

    /**
     * @param EnhanceFaceAdvanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return EnhanceFaceResponse
     */
    public function enhanceFaceAdvance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
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
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'facebody',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $enhanceFaceReq = new EnhanceFaceRequest([]);
        Utils::convert($request, $enhanceFaceReq);
        if (null !== $request->imageURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageURLObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $enhanceFaceReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->enhanceFaceWithOptions($enhanceFaceReq, $runtime);
    }

    /**
     * 指纹提取.
     *
     * @param Request - ExtractFingerPrintRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExtractFingerPrintResponse
     *
     * @param ExtractFingerPrintRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ExtractFingerPrintResponse
     */
    public function extractFingerPrintWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageData) {
            @$body['ImageData'] = $request->imageData;
        }

        if (null !== $request->imageURL) {
            @$body['ImageURL'] = $request->imageURL;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExtractFingerPrint',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExtractFingerPrintResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 指纹提取.
     *
     * @param Request - ExtractFingerPrintRequest
     *
     * @returns ExtractFingerPrintResponse
     *
     * @param ExtractFingerPrintRequest $request
     *
     * @return ExtractFingerPrintResponse
     */
    public function extractFingerPrint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->extractFingerPrintWithOptions($request, $runtime);
    }

    /**
     * @param ExtractFingerPrintAdvanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ExtractFingerPrintResponse
     */
    public function extractFingerPrintAdvance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
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
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'facebody',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $extractFingerPrintReq = new ExtractFingerPrintRequest([]);
        Utils::convert($request, $extractFingerPrintReq);
        if (null !== $request->imageURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageURLObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $extractFingerPrintReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->extractFingerPrintWithOptions($extractFingerPrintReq, $runtime);
    }

    /**
     * @param Request - FaceBeautyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FaceBeautyResponse
     *
     * @param FaceBeautyRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return FaceBeautyResponse
     */
    public function faceBeautyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageURL) {
            @$body['ImageURL'] = $request->imageURL;
        }

        if (null !== $request->sharp) {
            @$body['Sharp'] = $request->sharp;
        }

        if (null !== $request->smooth) {
            @$body['Smooth'] = $request->smooth;
        }

        if (null !== $request->white) {
            @$body['White'] = $request->white;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'FaceBeauty',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FaceBeautyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - FaceBeautyRequest
     *
     * @returns FaceBeautyResponse
     *
     * @param FaceBeautyRequest $request
     *
     * @return FaceBeautyResponse
     */
    public function faceBeauty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->faceBeautyWithOptions($request, $runtime);
    }

    /**
     * @param FaceBeautyAdvanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return FaceBeautyResponse
     */
    public function faceBeautyAdvance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
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
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'facebody',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $faceBeautyReq = new FaceBeautyRequest([]);
        Utils::convert($request, $faceBeautyReq);
        if (null !== $request->imageURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageURLObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $faceBeautyReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->faceBeautyWithOptions($faceBeautyReq, $runtime);
    }

    /**
     * @param Request - GenRealPersonVerificationTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenRealPersonVerificationTokenResponse
     *
     * @param GenRealPersonVerificationTokenRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GenRealPersonVerificationTokenResponse
     */
    public function genRealPersonVerificationTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->certificateName) {
            @$body['CertificateName'] = $request->certificateName;
        }

        if (null !== $request->certificateNumber) {
            @$body['CertificateNumber'] = $request->certificateNumber;
        }

        if (null !== $request->metaInfo) {
            @$body['MetaInfo'] = $request->metaInfo;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GenRealPersonVerificationToken',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenRealPersonVerificationTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - GenRealPersonVerificationTokenRequest
     *
     * @returns GenRealPersonVerificationTokenResponse
     *
     * @param GenRealPersonVerificationTokenRequest $request
     *
     * @return GenRealPersonVerificationTokenResponse
     */
    public function genRealPersonVerificationToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->genRealPersonVerificationTokenWithOptions($request, $runtime);
    }

    /**
     * @param Request - GenerateHumanAnimeStyleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateHumanAnimeStyleResponse
     *
     * @param GenerateHumanAnimeStyleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GenerateHumanAnimeStyleResponse
     */
    public function generateHumanAnimeStyleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->algoType) {
            @$query['AlgoType'] = $request->algoType;
        }

        if (null !== $request->imageURL) {
            @$query['ImageURL'] = $request->imageURL;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GenerateHumanAnimeStyle',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateHumanAnimeStyleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - GenerateHumanAnimeStyleRequest
     *
     * @returns GenerateHumanAnimeStyleResponse
     *
     * @param GenerateHumanAnimeStyleRequest $request
     *
     * @return GenerateHumanAnimeStyleResponse
     */
    public function generateHumanAnimeStyle($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateHumanAnimeStyleWithOptions($request, $runtime);
    }

    /**
     * @param GenerateHumanAnimeStyleAdvanceRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GenerateHumanAnimeStyleResponse
     */
    public function generateHumanAnimeStyleAdvance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
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
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'facebody',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $generateHumanAnimeStyleReq = new GenerateHumanAnimeStyleRequest([]);
        Utils::convert($request, $generateHumanAnimeStyleReq);
        if (null !== $request->imageURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageURLObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $generateHumanAnimeStyleReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->generateHumanAnimeStyleWithOptions($generateHumanAnimeStyleReq, $runtime);
    }

    /**
     * 人像素描风格化.
     *
     * @param Request - GenerateHumanSketchStyleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateHumanSketchStyleResponse
     *
     * @param GenerateHumanSketchStyleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GenerateHumanSketchStyleResponse
     */
    public function generateHumanSketchStyleWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageURL) {
            @$body['ImageURL'] = $request->imageURL;
        }

        if (null !== $request->returnType) {
            @$body['ReturnType'] = $request->returnType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GenerateHumanSketchStyle',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateHumanSketchStyleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 人像素描风格化.
     *
     * @param Request - GenerateHumanSketchStyleRequest
     *
     * @returns GenerateHumanSketchStyleResponse
     *
     * @param GenerateHumanSketchStyleRequest $request
     *
     * @return GenerateHumanSketchStyleResponse
     */
    public function generateHumanSketchStyle($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateHumanSketchStyleWithOptions($request, $runtime);
    }

    /**
     * @param GenerateHumanSketchStyleAdvanceRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return GenerateHumanSketchStyleResponse
     */
    public function generateHumanSketchStyleAdvance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
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
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'facebody',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $generateHumanSketchStyleReq = new GenerateHumanSketchStyleRequest([]);
        Utils::convert($request, $generateHumanSketchStyleReq);
        if (null !== $request->imageURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageURLObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $generateHumanSketchStyleReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->generateHumanSketchStyleWithOptions($generateHumanSketchStyleReq, $runtime);
    }

    /**
     * @param Request - GetFaceEntityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFaceEntityResponse
     *
     * @param GetFaceEntityRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetFaceEntityResponse
     */
    public function getFaceEntityWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dbName) {
            @$body['DbName'] = $request->dbName;
        }

        if (null !== $request->entityId) {
            @$body['EntityId'] = $request->entityId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetFaceEntity',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetFaceEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - GetFaceEntityRequest
     *
     * @returns GetFaceEntityResponse
     *
     * @param GetFaceEntityRequest $request
     *
     * @return GetFaceEntityResponse
     */
    public function getFaceEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFaceEntityWithOptions($request, $runtime);
    }

    /**
     * @param Request - GetRealPersonVerificationResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRealPersonVerificationResultResponse
     *
     * @param GetRealPersonVerificationResultRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return GetRealPersonVerificationResultResponse
     */
    public function getRealPersonVerificationResultWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->verificationToken) {
            @$body['VerificationToken'] = $request->verificationToken;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetRealPersonVerificationResult',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRealPersonVerificationResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - GetRealPersonVerificationResultRequest
     *
     * @returns GetRealPersonVerificationResultResponse
     *
     * @param GetRealPersonVerificationResultRequest $request
     *
     * @return GetRealPersonVerificationResultResponse
     */
    public function getRealPersonVerificationResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRealPersonVerificationResultWithOptions($request, $runtime);
    }

    /**
     * 智能瘦脸.
     *
     * @param Request - LiquifyFaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LiquifyFaceResponse
     *
     * @param LiquifyFaceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return LiquifyFaceResponse
     */
    public function liquifyFaceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageURL) {
            @$body['ImageURL'] = $request->imageURL;
        }

        if (null !== $request->slimDegree) {
            @$body['SlimDegree'] = $request->slimDegree;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'LiquifyFace',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LiquifyFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 智能瘦脸.
     *
     * @param Request - LiquifyFaceRequest
     *
     * @returns LiquifyFaceResponse
     *
     * @param LiquifyFaceRequest $request
     *
     * @return LiquifyFaceResponse
     */
    public function liquifyFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->liquifyFaceWithOptions($request, $runtime);
    }

    /**
     * @param LiquifyFaceAdvanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return LiquifyFaceResponse
     */
    public function liquifyFaceAdvance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
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
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'facebody',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $liquifyFaceReq = new LiquifyFaceRequest([]);
        Utils::convert($request, $liquifyFaceReq);
        if (null !== $request->imageURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageURLObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $liquifyFaceReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->liquifyFaceWithOptions($liquifyFaceReq, $runtime);
    }

    /**
     * @param Request - ListFaceDbsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFaceDbsResponse
     *
     * @param ListFaceDbsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListFaceDbsResponse
     */
    public function listFaceDbsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->limit) {
            @$body['Limit'] = $request->limit;
        }

        if (null !== $request->offset) {
            @$body['Offset'] = $request->offset;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListFaceDbs',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListFaceDbsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - ListFaceDbsRequest
     *
     * @returns ListFaceDbsResponse
     *
     * @param ListFaceDbsRequest $request
     *
     * @return ListFaceDbsResponse
     */
    public function listFaceDbs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFaceDbsWithOptions($request, $runtime);
    }

    /**
     * @param Request - ListFaceEntitiesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFaceEntitiesResponse
     *
     * @param ListFaceEntitiesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListFaceEntitiesResponse
     */
    public function listFaceEntitiesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dbName) {
            @$body['DbName'] = $request->dbName;
        }

        if (null !== $request->entityIdPrefix) {
            @$body['EntityIdPrefix'] = $request->entityIdPrefix;
        }

        if (null !== $request->labels) {
            @$body['Labels'] = $request->labels;
        }

        if (null !== $request->limit) {
            @$body['Limit'] = $request->limit;
        }

        if (null !== $request->offset) {
            @$body['Offset'] = $request->offset;
        }

        if (null !== $request->order) {
            @$body['Order'] = $request->order;
        }

        if (null !== $request->token) {
            @$body['Token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListFaceEntities',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListFaceEntitiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - ListFaceEntitiesRequest
     *
     * @returns ListFaceEntitiesResponse
     *
     * @param ListFaceEntitiesRequest $request
     *
     * @return ListFaceEntitiesResponse
     */
    public function listFaceEntities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFaceEntitiesWithOptions($request, $runtime);
    }

    /**
     * 图像人脸融合.
     *
     * @param Request - MergeImageFaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MergeImageFaceResponse
     *
     * @param MergeImageFaceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return MergeImageFaceResponse
     */
    public function mergeImageFaceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->addWatermark) {
            @$body['AddWatermark'] = $request->addWatermark;
        }

        if (null !== $request->imageURL) {
            @$body['ImageURL'] = $request->imageURL;
        }

        if (null !== $request->mergeInfos) {
            @$body['MergeInfos'] = $request->mergeInfos;
        }

        if (null !== $request->modelVersion) {
            @$body['ModelVersion'] = $request->modelVersion;
        }

        if (null !== $request->templateId) {
            @$body['TemplateId'] = $request->templateId;
        }

        if (null !== $request->watermarkType) {
            @$body['WatermarkType'] = $request->watermarkType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'MergeImageFace',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MergeImageFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 图像人脸融合.
     *
     * @param Request - MergeImageFaceRequest
     *
     * @returns MergeImageFaceResponse
     *
     * @param MergeImageFaceRequest $request
     *
     * @return MergeImageFaceResponse
     */
    public function mergeImageFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mergeImageFaceWithOptions($request, $runtime);
    }

    /**
     * @param MergeImageFaceAdvanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return MergeImageFaceResponse
     */
    public function mergeImageFaceAdvance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
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
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'facebody',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $mergeImageFaceReq = new MergeImageFaceRequest([]);
        Utils::convert($request, $mergeImageFaceReq);
        if (null !== $request->imageURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageURLObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $mergeImageFaceReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->mergeImageFaceWithOptions($mergeImageFaceReq, $runtime);
    }

    /**
     * 线上监考.
     *
     * @param Request - MonitorExaminationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MonitorExaminationResponse
     *
     * @param MonitorExaminationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return MonitorExaminationResponse
     */
    public function monitorExaminationWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageURL) {
            @$body['ImageURL'] = $request->imageURL;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'MonitorExamination',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MonitorExaminationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 线上监考.
     *
     * @param Request - MonitorExaminationRequest
     *
     * @returns MonitorExaminationResponse
     *
     * @param MonitorExaminationRequest $request
     *
     * @return MonitorExaminationResponse
     */
    public function monitorExamination($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->monitorExaminationWithOptions($request, $runtime);
    }

    /**
     * @param MonitorExaminationAdvanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return MonitorExaminationResponse
     */
    public function monitorExaminationAdvance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
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
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'facebody',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $monitorExaminationReq = new MonitorExaminationRequest([]);
        Utils::convert($request, $monitorExaminationReq);
        if (null !== $request->imageURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageURLObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $monitorExaminationReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->monitorExaminationWithOptions($monitorExaminationReq, $runtime);
    }

    /**
     * @param Request - PedestrianDetectAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PedestrianDetectAttributeResponse
     *
     * @param PedestrianDetectAttributeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return PedestrianDetectAttributeResponse
     */
    public function pedestrianDetectAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageURL) {
            @$body['ImageURL'] = $request->imageURL;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PedestrianDetectAttribute',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PedestrianDetectAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - PedestrianDetectAttributeRequest
     *
     * @returns PedestrianDetectAttributeResponse
     *
     * @param PedestrianDetectAttributeRequest $request
     *
     * @return PedestrianDetectAttributeResponse
     */
    public function pedestrianDetectAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pedestrianDetectAttributeWithOptions($request, $runtime);
    }

    /**
     * @param PedestrianDetectAttributeAdvanceRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return PedestrianDetectAttributeResponse
     */
    public function pedestrianDetectAttributeAdvance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
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
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'facebody',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $pedestrianDetectAttributeReq = new PedestrianDetectAttributeRequest([]);
        Utils::convert($request, $pedestrianDetectAttributeReq);
        if (null !== $request->imageURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageURLObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $pedestrianDetectAttributeReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->pedestrianDetectAttributeWithOptions($pedestrianDetectAttributeReq, $runtime);
    }

    /**
     * 图像人脸融合模板查询.
     *
     * @param Request - QueryFaceImageTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryFaceImageTemplateResponse
     *
     * @param QueryFaceImageTemplateRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryFaceImageTemplateResponse
     */
    public function queryFaceImageTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryFaceImageTemplate',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryFaceImageTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 图像人脸融合模板查询.
     *
     * @param Request - QueryFaceImageTemplateRequest
     *
     * @returns QueryFaceImageTemplateResponse
     *
     * @param QueryFaceImageTemplateRequest $request
     *
     * @return QueryFaceImageTemplateResponse
     */
    public function queryFaceImageTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFaceImageTemplateWithOptions($request, $runtime);
    }

    /**
     * 动作行为识别(RecognizeAction).
     *
     * @param Request - RecognizeActionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeActionResponse
     *
     * @param RecognizeActionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RecognizeActionResponse
     */
    public function recognizeActionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->URLList) {
            @$body['URLList'] = $request->URLList;
        }

        if (null !== $request->videoData) {
            @$body['VideoData'] = $request->videoData;
        }

        if (null !== $request->videoUrl) {
            @$body['VideoUrl'] = $request->videoUrl;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RecognizeAction',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeActionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 动作行为识别(RecognizeAction).
     *
     * @param Request - RecognizeActionRequest
     *
     * @returns RecognizeActionResponse
     *
     * @param RecognizeActionRequest $request
     *
     * @return RecognizeActionResponse
     */
    public function recognizeAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeActionWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeActionAdvanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RecognizeActionResponse
     */
    public function recognizeActionAdvance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
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
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'facebody',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $recognizeActionReq = new RecognizeActionRequest([]);
        Utils::convert($request, $recognizeActionReq);
        if (null !== $request->URLList) {
            $i0 = 0;

            foreach ($request->URLList as $item0) {
                if (null !== $item0->URLObject) {
                    $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
                    $tmpBody = @$authResponse['body'];
                    $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
                    $authResponseBody = Utils::stringifyMapValue($tmpBody);
                    $fileObj = new FileField([
                        'filename' => @$authResponseBody['ObjectKey'],
                        'content' => $item0->URLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = [
                        'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                        'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                        'policy' => @$authResponseBody['EncodedPolicy'],
                        'Signature' => @$authResponseBody['Signature'],
                        'key' => @$authResponseBody['ObjectKey'],
                        'file' => $fileObj,
                        'success_action_status' => '201',
                    ];
                    $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
                    $tmpObj = @$recognizeActionReq->URLList[$i0];
                    $tmpObj->URL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
                    ++$i0;
                }
            }
        }

        if (null !== $request->videoUrlObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->videoUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $recognizeActionReq->videoUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->recognizeActionWithOptions($recognizeActionReq, $runtime);
    }

    /**
     * @param Request - RecognizeExpressionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeExpressionResponse
     *
     * @param RecognizeExpressionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RecognizeExpressionResponse
     */
    public function recognizeExpressionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageURL) {
            @$body['ImageURL'] = $request->imageURL;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RecognizeExpression',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeExpressionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - RecognizeExpressionRequest
     *
     * @returns RecognizeExpressionResponse
     *
     * @param RecognizeExpressionRequest $request
     *
     * @return RecognizeExpressionResponse
     */
    public function recognizeExpression($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeExpressionWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeExpressionAdvanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return RecognizeExpressionResponse
     */
    public function recognizeExpressionAdvance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
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
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'facebody',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $recognizeExpressionReq = new RecognizeExpressionRequest([]);
        Utils::convert($request, $recognizeExpressionReq);
        if (null !== $request->imageURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageURLObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $recognizeExpressionReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->recognizeExpressionWithOptions($recognizeExpressionReq, $runtime);
    }

    /**
     * @param Request - RecognizeFaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeFaceResponse
     *
     * @param RecognizeFaceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RecognizeFaceResponse
     */
    public function recognizeFaceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->age) {
            @$body['Age'] = $request->age;
        }

        if (null !== $request->beauty) {
            @$body['Beauty'] = $request->beauty;
        }

        if (null !== $request->expression) {
            @$body['Expression'] = $request->expression;
        }

        if (null !== $request->gender) {
            @$body['Gender'] = $request->gender;
        }

        if (null !== $request->glass) {
            @$body['Glass'] = $request->glass;
        }

        if (null !== $request->hat) {
            @$body['Hat'] = $request->hat;
        }

        if (null !== $request->imageURL) {
            @$body['ImageURL'] = $request->imageURL;
        }

        if (null !== $request->mask) {
            @$body['Mask'] = $request->mask;
        }

        if (null !== $request->maxFaceNumber) {
            @$body['MaxFaceNumber'] = $request->maxFaceNumber;
        }

        if (null !== $request->quality) {
            @$body['Quality'] = $request->quality;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RecognizeFace',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - RecognizeFaceRequest
     *
     * @returns RecognizeFaceResponse
     *
     * @param RecognizeFaceRequest $request
     *
     * @return RecognizeFaceResponse
     */
    public function recognizeFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeFaceWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeFaceAdvanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RecognizeFaceResponse
     */
    public function recognizeFaceAdvance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
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
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'facebody',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $recognizeFaceReq = new RecognizeFaceRequest([]);
        Utils::convert($request, $recognizeFaceReq);
        if (null !== $request->imageURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageURLObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $recognizeFaceReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->recognizeFaceWithOptions($recognizeFaceReq, $runtime);
    }

    /**
     * 公众人脸识别(RecognizePublicFace).
     *
     * @param Request - RecognizePublicFaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizePublicFaceResponse
     *
     * @param RecognizePublicFaceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RecognizePublicFaceResponse
     */
    public function recognizePublicFaceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->task) {
            @$body['Task'] = $request->task;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RecognizePublicFace',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizePublicFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 公众人脸识别(RecognizePublicFace).
     *
     * @param Request - RecognizePublicFaceRequest
     *
     * @returns RecognizePublicFaceResponse
     *
     * @param RecognizePublicFaceRequest $request
     *
     * @return RecognizePublicFaceResponse
     */
    public function recognizePublicFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizePublicFaceWithOptions($request, $runtime);
    }

    /**
     * @param RecognizePublicFaceAdvanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return RecognizePublicFaceResponse
     */
    public function recognizePublicFaceAdvance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
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
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'facebody',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $recognizePublicFaceReq = new RecognizePublicFaceRequest([]);
        Utils::convert($request, $recognizePublicFaceReq);
        if (null !== $request->task) {
            $i0 = 0;

            foreach ($request->task as $item0) {
                if (null !== $item0->imageURLObject) {
                    $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
                    $tmpBody = @$authResponse['body'];
                    $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
                    $authResponseBody = Utils::stringifyMapValue($tmpBody);
                    $fileObj = new FileField([
                        'filename' => @$authResponseBody['ObjectKey'],
                        'content' => $item0->imageURLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = [
                        'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                        'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                        'policy' => @$authResponseBody['EncodedPolicy'],
                        'Signature' => @$authResponseBody['Signature'],
                        'key' => @$authResponseBody['ObjectKey'],
                        'file' => $fileObj,
                        'success_action_status' => '201',
                    ];
                    $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
                    $tmpObj = @$recognizePublicFaceReq->task[$i0];
                    $tmpObj->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
                    ++$i0;
                }
            }
        }

        return $this->recognizePublicFaceWithOptions($recognizePublicFaceReq, $runtime);
    }

    /**
     * 美肤.
     *
     * @param Request - RetouchSkinRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RetouchSkinResponse
     *
     * @param RetouchSkinRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return RetouchSkinResponse
     */
    public function retouchSkinWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageURL) {
            @$body['ImageURL'] = $request->imageURL;
        }

        if (null !== $request->retouchDegree) {
            @$body['RetouchDegree'] = $request->retouchDegree;
        }

        if (null !== $request->whiteningDegree) {
            @$body['WhiteningDegree'] = $request->whiteningDegree;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RetouchSkin',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RetouchSkinResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 美肤.
     *
     * @param Request - RetouchSkinRequest
     *
     * @returns RetouchSkinResponse
     *
     * @param RetouchSkinRequest $request
     *
     * @return RetouchSkinResponse
     */
    public function retouchSkin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->retouchSkinWithOptions($request, $runtime);
    }

    /**
     * @param RetouchSkinAdvanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RetouchSkinResponse
     */
    public function retouchSkinAdvance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
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
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'facebody',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $retouchSkinReq = new RetouchSkinRequest([]);
        Utils::convert($request, $retouchSkinReq);
        if (null !== $request->imageURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageURLObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $retouchSkinReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->retouchSkinWithOptions($retouchSkinReq, $runtime);
    }

    /**
     * summary.
     *
     * @param Request - SearchFaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchFaceResponse
     *
     * @param SearchFaceRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SearchFaceResponse
     */
    public function searchFaceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dbName) {
            @$body['DbName'] = $request->dbName;
        }

        if (null !== $request->dbNames) {
            @$body['DbNames'] = $request->dbNames;
        }

        if (null !== $request->imageUrl) {
            @$body['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->limit) {
            @$body['Limit'] = $request->limit;
        }

        if (null !== $request->maxFaceNum) {
            @$body['MaxFaceNum'] = $request->maxFaceNum;
        }

        if (null !== $request->qualityScoreThreshold) {
            @$body['QualityScoreThreshold'] = $request->qualityScoreThreshold;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SearchFace',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * summary.
     *
     * @param Request - SearchFaceRequest
     *
     * @returns SearchFaceResponse
     *
     * @param SearchFaceRequest $request
     *
     * @return SearchFaceResponse
     */
    public function searchFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchFaceWithOptions($request, $runtime);
    }

    /**
     * @param SearchFaceAdvanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SearchFaceResponse
     */
    public function searchFaceAdvance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
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
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'facebody',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $searchFaceReq = new SearchFaceRequest([]);
        Utils::convert($request, $searchFaceReq);
        if (null !== $request->imageUrlObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $searchFaceReq->imageUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->searchFaceWithOptions($searchFaceReq, $runtime);
    }

    /**
     * @param Request - UpdateFaceEntityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateFaceEntityResponse
     *
     * @param UpdateFaceEntityRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateFaceEntityResponse
     */
    public function updateFaceEntityWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dbName) {
            @$body['DbName'] = $request->dbName;
        }

        if (null !== $request->entityId) {
            @$body['EntityId'] = $request->entityId;
        }

        if (null !== $request->labels) {
            @$body['Labels'] = $request->labels;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateFaceEntity',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateFaceEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - UpdateFaceEntityRequest
     *
     * @returns UpdateFaceEntityResponse
     *
     * @param UpdateFaceEntityRequest $request
     *
     * @return UpdateFaceEntityResponse
     */
    public function updateFaceEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFaceEntityWithOptions($request, $runtime);
    }
}
