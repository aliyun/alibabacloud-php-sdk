<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809;

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
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\AddFaceRecordAdvanceRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\AddFaceRecordRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\AddFaceRecordResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\AddressCompareIntlRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\AddressCompareIntlResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\AddressVerifyIntlRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\AddressVerifyIntlResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\AddressVerifyV2IntlRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\AddressVerifyV2IntlResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\BankMetaVerifyIntlRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\BankMetaVerifyIntlResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\CardOcrRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\CardOcrResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\CheckResultRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\CheckResultResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\CheckVerifyLogRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\CheckVerifyLogResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\CredentialGetResultIntlRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\CredentialGetResultIntlResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\CredentialRecognitionIntlRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\CredentialRecognitionIntlResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\CredentialSubmitIntlRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\CredentialSubmitIntlResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\CredentialVerifyIntlAdvanceRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\CredentialVerifyIntlRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\CredentialVerifyIntlResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DeepfakeDetectIntlRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DeepfakeDetectIntlResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DeepfakeDetectIntlStreamAdvanceRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DeepfakeDetectIntlStreamRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DeepfakeDetectIntlStreamResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DeleteFaceGroupRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DeleteFaceGroupResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DeleteFaceRecordRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DeleteFaceRecordResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DeleteVerifyResultRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DeleteVerifyResultResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DocOcrMaxRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DocOcrMaxResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DocOcrMaxV2AdvanceRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DocOcrMaxV2Request;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DocOcrMaxV2Response;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DocOcrRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DocOcrResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DocOcrV2AdvanceRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DocOcrV2Request;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DocOcrV2Response;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DownloadVerifyRecordIntlRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DownloadVerifyRecordIntlResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\EkycVerifyRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\EkycVerifyResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\EkycVerifyV2AdvanceRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\EkycVerifyV2Request;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\EkycVerifyV2Response;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\FaceCompareRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\FaceCompareResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\FaceCompareV2AdvanceRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\FaceCompareV2Request;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\FaceCompareV2Response;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\FaceCrossCompareIntlRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\FaceCrossCompareIntlResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\FaceDuplicationCheckIntlRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\FaceDuplicationCheckIntlResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\FaceGuardRiskRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\FaceGuardRiskResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\FaceLivenessRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\FaceLivenessResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\FaceLivenessV2AdvanceRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\FaceLivenessV2Request;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\FaceLivenessV2Response;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\FaceVerifyIntlAdvanceRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\FaceVerifyIntlRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\FaceVerifyIntlResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\FraudResultCallBackRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\FraudResultCallBackResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\Id2MetaPeriodVerifyIntlRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\Id2MetaPeriodVerifyIntlResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\Id2MetaVerifyIntlRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\Id2MetaVerifyIntlResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\InitializeRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\InitializeResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\InitializeShrinkRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\InitializeV2AdvanceRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\InitializeV2Request;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\InitializeV2Response;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\InitializeV2ShrinkRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\KeepaliveIntlResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\Mobile2MetaVerifyIntlRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\Mobile2MetaVerifyIntlResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\Mobile3MetaVerifyIntlRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\Mobile3MetaVerifyIntlResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\ModifyFaceGroupRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\ModifyFaceGroupResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\ModifyFaceRecordRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\ModifyFaceRecordResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\QueryFaceGroupRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\QueryFaceGroupResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\QueryFaceRecordRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\QueryFaceRecordResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\TempAccessTokenIntlRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\TempAccessTokenIntlResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\TempOssUrlIntlRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\TempOssUrlIntlResponse;
use Darabonba\OpenApi\Exceptions\ClientException;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Cloudauthintl extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-hongkong' => 'cloudauth-intl.cn-hongkong.aliyuncs.com',
            'ap-southeast-5' => 'cloudauth-intl.ap-southeast-5.aliyuncs.com',
            'ap-southeast-3' => 'cloudauth-intl.ap-southeast-3.aliyuncs.com',
            'ap-southeast-1' => 'cloudauth-intl.ap-southeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cloudauth-intl', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
                $tmp = '' . @$form['host'];
                $host = '' . $bucketName . '.' . $tmp . '';
                $_request->protocol = 'HTTPS';
                $_request->method = 'POST';
                $_request->pathname = '/';
                $_request->headers = [
                    'host' => $host,
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
     * Adds a face image to a specified face library.
     *
     * @param Request - AddFaceRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddFaceRecordResponse
     *
     * @param AddFaceRecordRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddFaceRecordResponse
     */
    public function addFaceRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->faceGroupCode) {
            @$body['FaceGroupCode'] = $request->faceGroupCode;
        }

        if (null !== $request->facePicture) {
            @$body['FacePicture'] = $request->facePicture;
        }

        if (null !== $request->facePictureFile) {
            @$body['FacePictureFile'] = $request->facePictureFile;
        }

        if (null !== $request->facePictureUrl) {
            @$body['FacePictureUrl'] = $request->facePictureUrl;
        }

        if (null !== $request->faceQualityCheck) {
            @$body['FaceQualityCheck'] = $request->faceQualityCheck;
        }

        if (null !== $request->merchantUserId) {
            @$body['MerchantUserId'] = $request->merchantUserId;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddFaceRecord',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddFaceRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a face image to a specified face library.
     *
     * @param Request - AddFaceRecordRequest
     *
     * @returns AddFaceRecordResponse
     *
     * @param AddFaceRecordRequest $request
     *
     * @return AddFaceRecordResponse
     */
    public function addFaceRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addFaceRecordWithOptions($request, $runtime);
    }

    /**
     * @param AddFaceRecordAdvanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddFaceRecordResponse
     */
    public function addFaceRecordAdvance($request, $runtime)
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
            'Product' => 'Cloudauth-intl',
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
        $addFaceRecordReq = new AddFaceRecordRequest([]);
        Utils::convert($request, $addFaceRecordReq);
        if (null !== $request->facePictureFileObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->facePictureFileObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType),
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $addFaceRecordReq->facePictureFile = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->addFaceRecordWithOptions($addFaceRecordReq, $runtime);
    }

    /**
     * Compares the similarity of two addresses.
     *
     * @remarks
     * Compares two addresses for consistency by using address standardization.
     *
     * @param Request - AddressCompareIntlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddressCompareIntlResponse
     *
     * @param AddressCompareIntlRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AddressCompareIntlResponse
     */
    public function addressCompareIntlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->defaultCountry) {
            @$query['DefaultCountry'] = $request->defaultCountry;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->text1) {
            @$query['Text1'] = $request->text1;
        }

        if (null !== $request->text2) {
            @$query['Text2'] = $request->text2;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddressCompareIntl',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddressCompareIntlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Compares the similarity of two addresses.
     *
     * @remarks
     * Compares two addresses for consistency by using address standardization.
     *
     * @param Request - AddressCompareIntlRequest
     *
     * @returns AddressCompareIntlResponse
     *
     * @param AddressCompareIntlRequest $request
     *
     * @return AddressCompareIntlResponse
     */
    public function addressCompareIntl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addressCompareIntlWithOptions($request, $runtime);
    }

    /**
     * Verifies whether a specified address belongs to a user\\"s residential address based on telecommunications service provider capabilities, using a phone number and an address (or coordinates).
     *
     * @remarks
     * Verifies whether a specified address belongs to a user\\"s residential address based on telecommunications service provider capabilities, using a phone number and an address (or coordinates).
     *
     * @deprecated openAPI AddressVerifyIntl is deprecated, please use Cloudauth-intl::2022-08-09::AddressVerifyV2Intl instead
     *
     * @param Request - AddressVerifyIntlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddressVerifyIntlResponse
     *
     * @param AddressVerifyIntlRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AddressVerifyIntlResponse
     */
    public function addressVerifyIntlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addressType) {
            @$query['AddressType'] = $request->addressType;
        }

        if (null !== $request->defaultCity) {
            @$query['DefaultCity'] = $request->defaultCity;
        }

        if (null !== $request->defaultCountry) {
            @$query['DefaultCountry'] = $request->defaultCountry;
        }

        if (null !== $request->defaultDistrict) {
            @$query['DefaultDistrict'] = $request->defaultDistrict;
        }

        if (null !== $request->defaultProvince) {
            @$query['DefaultProvince'] = $request->defaultProvince;
        }

        if (null !== $request->latitude) {
            @$query['Latitude'] = $request->latitude;
        }

        if (null !== $request->longitude) {
            @$query['Longitude'] = $request->longitude;
        }

        if (null !== $request->mobile) {
            @$query['Mobile'] = $request->mobile;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->text) {
            @$query['Text'] = $request->text;
        }

        if (null !== $request->verifyType) {
            @$query['VerifyType'] = $request->verifyType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddressVerifyIntl',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddressVerifyIntlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Verifies whether a specified address belongs to a user\\"s residential address based on telecommunications service provider capabilities, using a phone number and an address (or coordinates).
     *
     * @remarks
     * Verifies whether a specified address belongs to a user\\"s residential address based on telecommunications service provider capabilities, using a phone number and an address (or coordinates).
     *
     * @deprecated openAPI AddressVerifyIntl is deprecated, please use Cloudauth-intl::2022-08-09::AddressVerifyV2Intl instead
     *
     * @param Request - AddressVerifyIntlRequest
     *
     * @returns AddressVerifyIntlResponse
     *
     * @param AddressVerifyIntlRequest $request
     *
     * @return AddressVerifyIntlResponse
     */
    public function addressVerifyIntl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addressVerifyIntlWithOptions($request, $runtime);
    }

    /**
     * Verifies an address.
     *
     * @param Request - AddressVerifyV2IntlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddressVerifyV2IntlResponse
     *
     * @param AddressVerifyV2IntlRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AddressVerifyV2IntlResponse
     */
    public function addressVerifyV2IntlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceToken) {
            @$query['DeviceToken'] = $request->deviceToken;
        }

        if (null !== $request->mobile) {
            @$query['Mobile'] = $request->mobile;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->regCountry) {
            @$query['RegCountry'] = $request->regCountry;
        }

        if (null !== $request->text) {
            @$query['Text'] = $request->text;
        }

        if (null !== $request->verifyType) {
            @$query['VerifyType'] = $request->verifyType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddressVerifyV2Intl',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddressVerifyV2IntlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies an address.
     *
     * @param Request - AddressVerifyV2IntlRequest
     *
     * @returns AddressVerifyV2IntlResponse
     *
     * @param AddressVerifyV2IntlRequest $request
     *
     * @return AddressVerifyV2IntlResponse
     */
    public function addressVerifyV2Intl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addressVerifyV2IntlWithOptions($request, $runtime);
    }

    /**
     * Provides bank card element verification (two-element, three-element, and four-element) API operations.
     *
     * @remarks
     * Verifies bank card elements, including two-element verification (name + bank card number), three-element verification (name + ID card number + bank card number), and four-element verification (name + ID card number + phone number + bank card number) for consistency.
     *
     * @param Request - BankMetaVerifyIntlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BankMetaVerifyIntlResponse
     *
     * @param BankMetaVerifyIntlRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return BankMetaVerifyIntlResponse
     */
    public function bankMetaVerifyIntlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bankCard) {
            @$query['BankCard'] = $request->bankCard;
        }

        if (null !== $request->identifyNum) {
            @$query['IdentifyNum'] = $request->identifyNum;
        }

        if (null !== $request->identityType) {
            @$query['IdentityType'] = $request->identityType;
        }

        if (null !== $request->mobile) {
            @$query['Mobile'] = $request->mobile;
        }

        if (null !== $request->paramType) {
            @$query['ParamType'] = $request->paramType;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        if (null !== $request->verifyMode) {
            @$query['VerifyMode'] = $request->verifyMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BankMetaVerifyIntl',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BankMetaVerifyIntlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Provides bank card element verification (two-element, three-element, and four-element) API operations.
     *
     * @remarks
     * Verifies bank card elements, including two-element verification (name + bank card number), three-element verification (name + ID card number + bank card number), and four-element verification (name + ID card number + phone number + bank card number) for consistency.
     *
     * @param Request - BankMetaVerifyIntlRequest
     *
     * @returns BankMetaVerifyIntlResponse
     *
     * @param BankMetaVerifyIntlRequest $request
     *
     * @return BankMetaVerifyIntlResponse
     */
    public function bankMetaVerifyIntl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bankMetaVerifyIntlWithOptions($request, $runtime);
    }

    /**
     * Provides server-side ID card and certificate OCR capabilities.
     *
     * @deprecated openAPI CardOcr is deprecated, please use Cloudauth-intl::2022-08-09::DocOcr instead
     *
     * @param Request - CardOcrRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CardOcrResponse
     *
     * @param CardOcrRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return CardOcrResponse
     */
    public function cardOcrWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->docType) {
            @$query['DocType'] = $request->docType;
        }

        if (null !== $request->idFaceQuality) {
            @$query['IdFaceQuality'] = $request->idFaceQuality;
        }

        if (null !== $request->idOcrPictureUrl) {
            @$query['IdOcrPictureUrl'] = $request->idOcrPictureUrl;
        }

        if (null !== $request->merchantBizId) {
            @$query['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->merchantUserId) {
            @$query['MerchantUserId'] = $request->merchantUserId;
        }

        if (null !== $request->ocr) {
            @$query['Ocr'] = $request->ocr;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->spoof) {
            @$query['Spoof'] = $request->spoof;
        }

        $body = [];
        if (null !== $request->idOcrPictureBase64) {
            @$body['IdOcrPictureBase64'] = $request->idOcrPictureBase64;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CardOcr',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CardOcrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Provides server-side ID card and certificate OCR capabilities.
     *
     * @deprecated openAPI CardOcr is deprecated, please use Cloudauth-intl::2022-08-09::DocOcr instead
     *
     * @param Request - CardOcrRequest
     *
     * @returns CardOcrResponse
     *
     * @param CardOcrRequest $request
     *
     * @return CardOcrResponse
     */
    public function cardOcr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cardOcrWithOptions($request, $runtime);
    }

    /**
     * Queries the verification result.
     *
     * @param Request - CheckResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckResultResponse
     *
     * @param CheckResultRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CheckResultResponse
     */
    public function checkResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->extraImageControlList) {
            @$query['ExtraImageControlList'] = $request->extraImageControlList;
        }

        if (null !== $request->isReturnImage) {
            @$query['IsReturnImage'] = $request->isReturnImage;
        }

        if (null !== $request->merchantBizId) {
            @$query['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->returnFiveCategorySpoofResult) {
            @$query['ReturnFiveCategorySpoofResult'] = $request->returnFiveCategorySpoofResult;
        }

        if (null !== $request->transactionId) {
            @$query['TransactionId'] = $request->transactionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckResult',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the verification result.
     *
     * @param Request - CheckResultRequest
     *
     * @returns CheckResultResponse
     *
     * @param CheckResultRequest $request
     *
     * @return CheckResultResponse
     */
    public function checkResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkResultWithOptions($request, $runtime);
    }

    /**
     * Authentication log query.
     *
     * @param Request - CheckVerifyLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckVerifyLogResponse
     *
     * @param CheckVerifyLogRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CheckVerifyLogResponse
     */
    public function checkVerifyLogWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->merchantBizId) {
            @$body['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->transactionId) {
            @$body['TransactionId'] = $request->transactionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CheckVerifyLog',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckVerifyLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Authentication log query.
     *
     * @param Request - CheckVerifyLogRequest
     *
     * @returns CheckVerifyLogResponse
     *
     * @param CheckVerifyLogRequest $request
     *
     * @return CheckVerifyLogResponse
     */
    public function checkVerifyLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkVerifyLogWithOptions($request, $runtime);
    }

    /**
     * Queries the credential recognition result.
     *
     * @remarks
     * After you obtain the TransactionId, you can call this operation on the server side to retrieve the corresponding authentication result.
     *
     * @param Request - CredentialGetResultIntlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CredentialGetResultIntlResponse
     *
     * @param CredentialGetResultIntlRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CredentialGetResultIntlResponse
     */
    public function credentialGetResultIntlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->transactionId) {
            @$query['TransactionId'] = $request->transactionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CredentialGetResultIntl',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CredentialGetResultIntlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the credential recognition result.
     *
     * @remarks
     * After you obtain the TransactionId, you can call this operation on the server side to retrieve the corresponding authentication result.
     *
     * @param Request - CredentialGetResultIntlRequest
     *
     * @returns CredentialGetResultIntlResponse
     *
     * @param CredentialGetResultIntlRequest $request
     *
     * @return CredentialGetResultIntlResponse
     */
    public function credentialGetResultIntl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->credentialGetResultIntlWithOptions($request, $runtime);
    }

    /**
     * An API operation that uploads a credential image, such as a utility bill or credit card statement, and uses Qwen-VL to intelligently fetch the billing address and name from the credential.
     *
     * @remarks
     * Uses AI technology to detect whether a credential (such as a water, electricity, gas, or credit card electronic bill) has been forged, and extracts key information from the credential.
     *
     * @param Request - CredentialRecognitionIntlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CredentialRecognitionIntlResponse
     *
     * @param CredentialRecognitionIntlRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CredentialRecognitionIntlResponse
     */
    public function credentialRecognitionIntlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->docType) {
            @$query['DocType'] = $request->docType;
        }

        if (null !== $request->fraudCheck) {
            @$query['FraudCheck'] = $request->fraudCheck;
        }

        if (null !== $request->ocrArea) {
            @$query['OcrArea'] = $request->ocrArea;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        $body = [];
        if (null !== $request->credentialOcrPictureBase64) {
            @$body['CredentialOcrPictureBase64'] = $request->credentialOcrPictureBase64;
        }

        if (null !== $request->credentialOcrPictureUrl) {
            @$body['CredentialOcrPictureUrl'] = $request->credentialOcrPictureUrl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CredentialRecognitionIntl',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CredentialRecognitionIntlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * An API operation that uploads a credential image, such as a utility bill or credit card statement, and uses Qwen-VL to intelligently fetch the billing address and name from the credential.
     *
     * @remarks
     * Uses AI technology to detect whether a credential (such as a water, electricity, gas, or credit card electronic bill) has been forged, and extracts key information from the credential.
     *
     * @param Request - CredentialRecognitionIntlRequest
     *
     * @returns CredentialRecognitionIntlResponse
     *
     * @param CredentialRecognitionIntlRequest $request
     *
     * @return CredentialRecognitionIntlResponse
     */
    public function credentialRecognitionIntl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->credentialRecognitionIntlWithOptions($request, $runtime);
    }

    /**
     * Submits credential recognition information.
     *
     * @remarks
     * Initializes the credential recognition OCR operation and retrieves a transactionId.
     *
     * @param Request - CredentialSubmitIntlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CredentialSubmitIntlResponse
     *
     * @param CredentialSubmitIntlRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CredentialSubmitIntlResponse
     */
    public function credentialSubmitIntlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->docType) {
            @$query['DocType'] = $request->docType;
        }

        if (null !== $request->fraudCheck) {
            @$query['FraudCheck'] = $request->fraudCheck;
        }

        if (null !== $request->merchantBizId) {
            @$query['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->ocrArea) {
            @$query['OcrArea'] = $request->ocrArea;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->sceneCode) {
            @$query['SceneCode'] = $request->sceneCode;
        }

        $body = [];
        if (null !== $request->credentialOcrPictureBase64) {
            @$body['CredentialOcrPictureBase64'] = $request->credentialOcrPictureBase64;
        }

        if (null !== $request->credentialOcrPictureUrl) {
            @$body['CredentialOcrPictureUrl'] = $request->credentialOcrPictureUrl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CredentialSubmitIntl',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CredentialSubmitIntlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits credential recognition information.
     *
     * @remarks
     * Initializes the credential recognition OCR operation and retrieves a transactionId.
     *
     * @param Request - CredentialSubmitIntlRequest
     *
     * @returns CredentialSubmitIntlResponse
     *
     * @param CredentialSubmitIntlRequest $request
     *
     * @return CredentialSubmitIntlResponse
     */
    public function credentialSubmitIntl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->credentialSubmitIntlWithOptions($request, $runtime);
    }

    /**
     * Provides the API operation for the credential verification service. This operation uses a large language model to detect image tampering, forgery, and image quality issues in submitted credential images.
     *
     * @remarks
     * Submits credential image information, performs image quality, tampering, and forgery detection, and returns the detection results.
     *
     * @param Request - CredentialVerifyIntlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CredentialVerifyIntlResponse
     *
     * @param CredentialVerifyIntlRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CredentialVerifyIntlResponse
     */
    public function credentialVerifyIntlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->credName) {
            @$query['CredName'] = $request->credName;
        }

        if (null !== $request->credType) {
            @$query['CredType'] = $request->credType;
        }

        if (null !== $request->imageUrl) {
            @$query['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        $body = [];
        if (null !== $request->imageFile) {
            @$body['ImageFile'] = $request->imageFile;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CredentialVerifyIntl',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CredentialVerifyIntlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Provides the API operation for the credential verification service. This operation uses a large language model to detect image tampering, forgery, and image quality issues in submitted credential images.
     *
     * @remarks
     * Submits credential image information, performs image quality, tampering, and forgery detection, and returns the detection results.
     *
     * @param Request - CredentialVerifyIntlRequest
     *
     * @returns CredentialVerifyIntlResponse
     *
     * @param CredentialVerifyIntlRequest $request
     *
     * @return CredentialVerifyIntlResponse
     */
    public function credentialVerifyIntl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->credentialVerifyIntlWithOptions($request, $runtime);
    }

    /**
     * @param CredentialVerifyIntlAdvanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CredentialVerifyIntlResponse
     */
    public function credentialVerifyIntlAdvance($request, $runtime)
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
            'Product' => 'Cloudauth-intl',
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
        $credentialVerifyIntlReq = new CredentialVerifyIntlRequest([]);
        Utils::convert($request, $credentialVerifyIntlReq);
        if (null !== $request->imageFileObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageFileObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType),
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $credentialVerifyIntlReq->imageFile = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->credentialVerifyIntlWithOptions($credentialVerifyIntlReq, $runtime);
    }

    /**
     * Detects deepfake risks in facial images.
     *
     * @remarks
     * Submits a facial image and uses algorithms to detect potential deepfake risks. This operation covers risk scenarios such as AIGC-generated faces, deep forgery face swaps, template faces, and recaptured faces. It returns risk labels and confidence scores.
     *
     * @param Request - DeepfakeDetectIntlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeepfakeDetectIntlResponse
     *
     * @param DeepfakeDetectIntlRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeepfakeDetectIntlResponse
     */
    public function deepfakeDetectIntlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->faceInputType) {
            @$query['FaceInputType'] = $request->faceInputType;
        }

        if (null !== $request->faceUrl) {
            @$query['FaceUrl'] = $request->faceUrl;
        }

        if (null !== $request->merchantBizId) {
            @$query['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->sceneCode) {
            @$query['SceneCode'] = $request->sceneCode;
        }

        $body = [];
        if (null !== $request->faceBase64) {
            @$body['FaceBase64'] = $request->faceBase64;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeepfakeDetectIntl',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeepfakeDetectIntlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detects deepfake risks in facial images.
     *
     * @remarks
     * Submits a facial image and uses algorithms to detect potential deepfake risks. This operation covers risk scenarios such as AIGC-generated faces, deep forgery face swaps, template faces, and recaptured faces. It returns risk labels and confidence scores.
     *
     * @param Request - DeepfakeDetectIntlRequest
     *
     * @returns DeepfakeDetectIntlResponse
     *
     * @param DeepfakeDetectIntlRequest $request
     *
     * @return DeepfakeDetectIntlResponse
     */
    public function deepfakeDetectIntl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deepfakeDetectIntlWithOptions($request, $runtime);
    }

    /**
     * ID Verification provides face deepfake detection capabilities, which can be integrated independently through API calls.
     *
     * @remarks
     * Submit a face image to detect deepfake risks through algorithms. This covers risk scenarios such as AIGC-generated faces, deep forgery face swaps, template faces, and re-captured faces, and outputs risk labels and confidence scores.
     *
     * @param Request - DeepfakeDetectIntlStreamRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeepfakeDetectIntlStreamResponse
     *
     * @param DeepfakeDetectIntlStreamRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeepfakeDetectIntlStreamResponse
     */
    public function deepfakeDetectIntlStreamWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->faceBase64) {
            @$body['FaceBase64'] = $request->faceBase64;
        }

        if (null !== $request->faceFile) {
            @$body['FaceFile'] = $request->faceFile;
        }

        if (null !== $request->faceInputType) {
            @$body['FaceInputType'] = $request->faceInputType;
        }

        if (null !== $request->faceUrl) {
            @$body['FaceUrl'] = $request->faceUrl;
        }

        if (null !== $request->merchantBizId) {
            @$body['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->sceneCode) {
            @$body['SceneCode'] = $request->sceneCode;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeepfakeDetectIntlStream',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeepfakeDetectIntlStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ID Verification provides face deepfake detection capabilities, which can be integrated independently through API calls.
     *
     * @remarks
     * Submit a face image to detect deepfake risks through algorithms. This covers risk scenarios such as AIGC-generated faces, deep forgery face swaps, template faces, and re-captured faces, and outputs risk labels and confidence scores.
     *
     * @param Request - DeepfakeDetectIntlStreamRequest
     *
     * @returns DeepfakeDetectIntlStreamResponse
     *
     * @param DeepfakeDetectIntlStreamRequest $request
     *
     * @return DeepfakeDetectIntlStreamResponse
     */
    public function deepfakeDetectIntlStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deepfakeDetectIntlStreamWithOptions($request, $runtime);
    }

    /**
     * @param DeepfakeDetectIntlStreamAdvanceRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DeepfakeDetectIntlStreamResponse
     */
    public function deepfakeDetectIntlStreamAdvance($request, $runtime)
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
            'Product' => 'Cloudauth-intl',
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
        $deepfakeDetectIntlStreamReq = new DeepfakeDetectIntlStreamRequest([]);
        Utils::convert($request, $deepfakeDetectIntlStreamReq);
        if (null !== $request->faceFileObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->faceFileObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType),
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $deepfakeDetectIntlStreamReq->faceFile = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->deepfakeDetectIntlStreamWithOptions($deepfakeDetectIntlStreamReq, $runtime);
    }

    /**
     * Deletes a face library.
     *
     * @param Request - DeleteFaceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFaceGroupResponse
     *
     * @param DeleteFaceGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteFaceGroupResponse
     */
    public function deleteFaceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteFaceGroup',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteFaceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a face library.
     *
     * @param Request - DeleteFaceGroupRequest
     *
     * @returns DeleteFaceGroupResponse
     *
     * @param DeleteFaceGroupRequest $request
     *
     * @return DeleteFaceGroupResponse
     */
    public function deleteFaceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFaceGroupWithOptions($request, $runtime);
    }

    /**
     * Deletes a face record.
     *
     * @param Request - DeleteFaceRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFaceRecordResponse
     *
     * @param DeleteFaceRecordRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteFaceRecordResponse
     */
    public function deleteFaceRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteFaceRecord',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteFaceRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a face record.
     *
     * @param Request - DeleteFaceRecordRequest
     *
     * @returns DeleteFaceRecordResponse
     *
     * @param DeleteFaceRecordRequest $request
     *
     * @return DeleteFaceRecordResponse
     */
    public function deleteFaceRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFaceRecordWithOptions($request, $runtime);
    }

    /**
     * Deletes data related to a user authentication record.
     *
     * @param Request - DeleteVerifyResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVerifyResultResponse
     *
     * @param DeleteVerifyResultRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteVerifyResultResponse
     */
    public function deleteVerifyResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deleteAfterQuery) {
            @$query['DeleteAfterQuery'] = $request->deleteAfterQuery;
        }

        if (null !== $request->deleteType) {
            @$query['DeleteType'] = $request->deleteType;
        }

        if (null !== $request->transactionId) {
            @$query['TransactionId'] = $request->transactionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteVerifyResult',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteVerifyResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes data related to a user authentication record.
     *
     * @param Request - DeleteVerifyResultRequest
     *
     * @returns DeleteVerifyResultResponse
     *
     * @param DeleteVerifyResultRequest $request
     *
     * @return DeleteVerifyResultResponse
     */
    public function deleteVerifyResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVerifyResultWithOptions($request, $runtime);
    }

    /**
     * Provides server-side card and certificate OCR capabilities.
     *
     * @param Request - DocOcrRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DocOcrResponse
     *
     * @param DocOcrRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return DocOcrResponse
     */
    public function docOcrWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cardSide) {
            @$query['CardSide'] = $request->cardSide;
        }

        if (null !== $request->docType) {
            @$query['DocType'] = $request->docType;
        }

        if (null !== $request->idFaceQuality) {
            @$query['IdFaceQuality'] = $request->idFaceQuality;
        }

        if (null !== $request->idOcrPictureUrl) {
            @$query['IdOcrPictureUrl'] = $request->idOcrPictureUrl;
        }

        if (null !== $request->idThreshold) {
            @$query['IdThreshold'] = $request->idThreshold;
        }

        if (null !== $request->merchantBizId) {
            @$query['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->merchantUserId) {
            @$query['MerchantUserId'] = $request->merchantUserId;
        }

        if (null !== $request->ocr) {
            @$query['Ocr'] = $request->ocr;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->spoof) {
            @$query['Spoof'] = $request->spoof;
        }

        $body = [];
        if (null !== $request->idOcrPictureBase64) {
            @$body['IdOcrPictureBase64'] = $request->idOcrPictureBase64;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DocOcr',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DocOcrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Provides server-side card and certificate OCR capabilities.
     *
     * @param Request - DocOcrRequest
     *
     * @returns DocOcrResponse
     *
     * @param DocOcrRequest $request
     *
     * @return DocOcrResponse
     */
    public function docOcr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->docOcrWithOptions($request, $runtime);
    }

    /**
     * Recognizes global identity documents through OCR.
     *
     * @param Request - DocOcrMaxRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DocOcrMaxResponse
     *
     * @param DocOcrMaxRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DocOcrMaxResponse
     */
    public function docOcrMaxWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ocrValueStandard) {
            @$query['OcrValueStandard'] = $request->ocrValueStandard;
        }

        $body = [];
        if (null !== $request->authorize) {
            @$body['Authorize'] = $request->authorize;
        }

        if (null !== $request->docPage) {
            @$body['DocPage'] = $request->docPage;
        }

        if (null !== $request->docType) {
            @$body['DocType'] = $request->docType;
        }

        if (null !== $request->idOcrPictureBase64) {
            @$body['IdOcrPictureBase64'] = $request->idOcrPictureBase64;
        }

        if (null !== $request->idOcrPictureUrl) {
            @$body['IdOcrPictureUrl'] = $request->idOcrPictureUrl;
        }

        if (null !== $request->idSpoof) {
            @$body['IdSpoof'] = $request->idSpoof;
        }

        if (null !== $request->idThreshold) {
            @$body['IdThreshold'] = $request->idThreshold;
        }

        if (null !== $request->merchantBizId) {
            @$body['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->merchantUserId) {
            @$body['MerchantUserId'] = $request->merchantUserId;
        }

        if (null !== $request->ocrModel) {
            @$body['OcrModel'] = $request->ocrModel;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->prompt) {
            @$body['Prompt'] = $request->prompt;
        }

        if (null !== $request->sceneCode) {
            @$body['SceneCode'] = $request->sceneCode;
        }

        if (null !== $request->spoof) {
            @$body['Spoof'] = $request->spoof;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DocOcrMax',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DocOcrMaxResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Recognizes global identity documents through OCR.
     *
     * @param Request - DocOcrMaxRequest
     *
     * @returns DocOcrMaxResponse
     *
     * @param DocOcrMaxRequest $request
     *
     * @return DocOcrMaxResponse
     */
    public function docOcrMax($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->docOcrMaxWithOptions($request, $runtime);
    }

    /**
     * 全球证件ocr识别接口.
     *
     * @param Request - DocOcrMaxV2Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DocOcrMaxV2Response
     *
     * @param DocOcrMaxV2Request $request
     * @param RuntimeOptions     $runtime
     *
     * @return DocOcrMaxV2Response
     */
    public function docOcrMaxV2WithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ocrValueStandard) {
            @$query['OcrValueStandard'] = $request->ocrValueStandard;
        }

        $body = [];
        if (null !== $request->authorize) {
            @$body['Authorize'] = $request->authorize;
        }

        if (null !== $request->docPage) {
            @$body['DocPage'] = $request->docPage;
        }

        if (null !== $request->docType) {
            @$body['DocType'] = $request->docType;
        }

        if (null !== $request->idOcrPictureBase64) {
            @$body['IdOcrPictureBase64'] = $request->idOcrPictureBase64;
        }

        if (null !== $request->idOcrPictureFile) {
            @$body['IdOcrPictureFile'] = $request->idOcrPictureFile;
        }

        if (null !== $request->idOcrPictureUrl) {
            @$body['IdOcrPictureUrl'] = $request->idOcrPictureUrl;
        }

        if (null !== $request->idSpoof) {
            @$body['IdSpoof'] = $request->idSpoof;
        }

        if (null !== $request->idThreshold) {
            @$body['IdThreshold'] = $request->idThreshold;
        }

        if (null !== $request->merchantBizId) {
            @$body['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->merchantUserId) {
            @$body['MerchantUserId'] = $request->merchantUserId;
        }

        if (null !== $request->ocrModel) {
            @$body['OcrModel'] = $request->ocrModel;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->sceneCode) {
            @$body['SceneCode'] = $request->sceneCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DocOcrMaxV2',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DocOcrMaxV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 全球证件ocr识别接口.
     *
     * @param Request - DocOcrMaxV2Request
     *
     * @returns DocOcrMaxV2Response
     *
     * @param DocOcrMaxV2Request $request
     *
     * @return DocOcrMaxV2Response
     */
    public function docOcrMaxV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->docOcrMaxV2WithOptions($request, $runtime);
    }

    /**
     * @param DocOcrMaxV2AdvanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DocOcrMaxV2Response
     */
    public function docOcrMaxV2Advance($request, $runtime)
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
            'Product' => 'Cloudauth-intl',
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
        $docOcrMaxV2Req = new DocOcrMaxV2Request([]);
        Utils::convert($request, $docOcrMaxV2Req);
        if (null !== $request->idOcrPictureFileObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->idOcrPictureFileObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType),
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $docOcrMaxV2Req->idOcrPictureFile = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->docOcrMaxV2WithOptions($docOcrMaxV2Req, $runtime);
    }

    /**
     * Provides server-side card and certificate OCR capabilities.
     *
     * @param Request - DocOcrV2Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DocOcrV2Response
     *
     * @param DocOcrV2Request $request
     * @param RuntimeOptions  $runtime
     *
     * @return DocOcrV2Response
     */
    public function docOcrV2WithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cardSide) {
            @$query['CardSide'] = $request->cardSide;
        }

        if (null !== $request->docType) {
            @$query['DocType'] = $request->docType;
        }

        if (null !== $request->idFaceQuality) {
            @$query['IdFaceQuality'] = $request->idFaceQuality;
        }

        if (null !== $request->idOcrPictureUrl) {
            @$query['IdOcrPictureUrl'] = $request->idOcrPictureUrl;
        }

        if (null !== $request->idThreshold) {
            @$query['IdThreshold'] = $request->idThreshold;
        }

        if (null !== $request->merchantBizId) {
            @$query['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->merchantUserId) {
            @$query['MerchantUserId'] = $request->merchantUserId;
        }

        if (null !== $request->ocr) {
            @$query['Ocr'] = $request->ocr;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->spoof) {
            @$query['Spoof'] = $request->spoof;
        }

        $body = [];
        if (null !== $request->idOcrPictureBase64) {
            @$body['IdOcrPictureBase64'] = $request->idOcrPictureBase64;
        }

        if (null !== $request->idOcrPictureFile) {
            @$body['IdOcrPictureFile'] = $request->idOcrPictureFile;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DocOcrV2',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DocOcrV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Provides server-side card and certificate OCR capabilities.
     *
     * @param Request - DocOcrV2Request
     *
     * @returns DocOcrV2Response
     *
     * @param DocOcrV2Request $request
     *
     * @return DocOcrV2Response
     */
    public function docOcrV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->docOcrV2WithOptions($request, $runtime);
    }

    /**
     * @param DocOcrV2AdvanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DocOcrV2Response
     */
    public function docOcrV2Advance($request, $runtime)
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
            'Product' => 'Cloudauth-intl',
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
        $docOcrV2Req = new DocOcrV2Request([]);
        Utils::convert($request, $docOcrV2Req);
        if (null !== $request->idOcrPictureFileObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->idOcrPictureFileObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType),
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $docOcrV2Req->idOcrPictureFile = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->docOcrV2WithOptions($docOcrV2Req, $runtime);
    }

    /**
     * Downloads verification task records.
     *
     * @param Request - DownloadVerifyRecordIntlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DownloadVerifyRecordIntlResponse
     *
     * @param DownloadVerifyRecordIntlRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DownloadVerifyRecordIntlResponse
     */
    public function downloadVerifyRecordIntlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->code) {
            @$query['Code'] = $request->code;
        }

        if (null !== $request->downloadMode) {
            @$query['DownloadMode'] = $request->downloadMode;
        }

        if (null !== $request->param) {
            @$query['Param'] = $request->param;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DownloadVerifyRecordIntl',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DownloadVerifyRecordIntlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Downloads verification task records.
     *
     * @param Request - DownloadVerifyRecordIntlRequest
     *
     * @returns DownloadVerifyRecordIntlResponse
     *
     * @param DownloadVerifyRecordIntlRequest $request
     *
     * @return DownloadVerifyRecordIntlResponse
     */
    public function downloadVerifyRecordIntl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadVerifyRecordIntlWithOptions($request, $runtime);
    }

    /**
     * Provides a server-side-only API for the eKYC solution.
     *
     * @param Request - EkycVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EkycVerifyResponse
     *
     * @param EkycVerifyRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return EkycVerifyResponse
     */
    public function ekycVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authorize) {
            @$query['Authorize'] = $request->authorize;
        }

        if (null !== $request->crop) {
            @$query['Crop'] = $request->crop;
        }

        if (null !== $request->docName) {
            @$query['DocName'] = $request->docName;
        }

        if (null !== $request->docNo) {
            @$query['DocNo'] = $request->docNo;
        }

        if (null !== $request->docType) {
            @$query['DocType'] = $request->docType;
        }

        if (null !== $request->facePictureUrl) {
            @$query['FacePictureUrl'] = $request->facePictureUrl;
        }

        if (null !== $request->idOcrPictureUrl) {
            @$query['IdOcrPictureUrl'] = $request->idOcrPictureUrl;
        }

        if (null !== $request->idThreshold) {
            @$query['IdThreshold'] = $request->idThreshold;
        }

        if (null !== $request->merchantBizId) {
            @$query['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->merchantUserId) {
            @$query['MerchantUserId'] = $request->merchantUserId;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        $body = [];
        if (null !== $request->facePictureBase64) {
            @$body['FacePictureBase64'] = $request->facePictureBase64;
        }

        if (null !== $request->idOcrPictureBase64) {
            @$body['IdOcrPictureBase64'] = $request->idOcrPictureBase64;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EkycVerify',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EkycVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Provides a server-side-only API for the eKYC solution.
     *
     * @param Request - EkycVerifyRequest
     *
     * @returns EkycVerifyResponse
     *
     * @param EkycVerifyRequest $request
     *
     * @return EkycVerifyResponse
     */
    public function ekycVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->ekycVerifyWithOptions($request, $runtime);
    }

    /**
     * Server-side-only eKYC API.
     *
     * @param Request - EkycVerifyV2Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EkycVerifyV2Response
     *
     * @param EkycVerifyV2Request $request
     * @param RuntimeOptions      $runtime
     *
     * @return EkycVerifyV2Response
     */
    public function ekycVerifyV2WithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authorize) {
            @$query['Authorize'] = $request->authorize;
        }

        if (null !== $request->crop) {
            @$query['Crop'] = $request->crop;
        }

        if (null !== $request->docName) {
            @$query['DocName'] = $request->docName;
        }

        if (null !== $request->docNo) {
            @$query['DocNo'] = $request->docNo;
        }

        if (null !== $request->docType) {
            @$query['DocType'] = $request->docType;
        }

        if (null !== $request->facePictureUrl) {
            @$query['FacePictureUrl'] = $request->facePictureUrl;
        }

        if (null !== $request->idOcrPictureUrl) {
            @$query['IdOcrPictureUrl'] = $request->idOcrPictureUrl;
        }

        if (null !== $request->idThreshold) {
            @$query['IdThreshold'] = $request->idThreshold;
        }

        if (null !== $request->merchantBizId) {
            @$query['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->merchantUserId) {
            @$query['MerchantUserId'] = $request->merchantUserId;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        $body = [];
        if (null !== $request->facePictureBase64) {
            @$body['FacePictureBase64'] = $request->facePictureBase64;
        }

        if (null !== $request->facePictureFile) {
            @$body['FacePictureFile'] = $request->facePictureFile;
        }

        if (null !== $request->idOcrPictureBase64) {
            @$body['IdOcrPictureBase64'] = $request->idOcrPictureBase64;
        }

        if (null !== $request->idOcrPictureFile) {
            @$body['IdOcrPictureFile'] = $request->idOcrPictureFile;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EkycVerifyV2',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EkycVerifyV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Server-side-only eKYC API.
     *
     * @param Request - EkycVerifyV2Request
     *
     * @returns EkycVerifyV2Response
     *
     * @param EkycVerifyV2Request $request
     *
     * @return EkycVerifyV2Response
     */
    public function ekycVerifyV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->ekycVerifyV2WithOptions($request, $runtime);
    }

    /**
     * @param EkycVerifyV2AdvanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return EkycVerifyV2Response
     */
    public function ekycVerifyV2Advance($request, $runtime)
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
            'Product' => 'Cloudauth-intl',
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
        $ekycVerifyV2Req = new EkycVerifyV2Request([]);
        Utils::convert($request, $ekycVerifyV2Req);
        if (null !== $request->facePictureFileObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->facePictureFileObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType),
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $ekycVerifyV2Req->facePictureFile = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        if (null !== $request->idOcrPictureFileObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->idOcrPictureFileObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType),
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $ekycVerifyV2Req->idOcrPictureFile = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->ekycVerifyV2WithOptions($ekycVerifyV2Req, $runtime);
    }

    /**
     * Compares two face images by using face recognition technology and returns the comparison result and similarity score.
     *
     * @param Request - FaceCompareRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FaceCompareResponse
     *
     * @param FaceCompareRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return FaceCompareResponse
     */
    public function faceCompareWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->facePictureQualityCheck) {
            @$query['FacePictureQualityCheck'] = $request->facePictureQualityCheck;
        }

        if (null !== $request->faceQualityCheck) {
            @$query['FaceQualityCheck'] = $request->faceQualityCheck;
        }

        if (null !== $request->merchantBizId) {
            @$query['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->sourceFacePictureUrl) {
            @$query['SourceFacePictureUrl'] = $request->sourceFacePictureUrl;
        }

        if (null !== $request->targetFacePictureUrl) {
            @$query['TargetFacePictureUrl'] = $request->targetFacePictureUrl;
        }

        $body = [];
        if (null !== $request->sourceFacePicture) {
            @$body['SourceFacePicture'] = $request->sourceFacePicture;
        }

        if (null !== $request->targetFacePicture) {
            @$body['TargetFacePicture'] = $request->targetFacePicture;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'FaceCompare',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FaceCompareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Compares two face images by using face recognition technology and returns the comparison result and similarity score.
     *
     * @param Request - FaceCompareRequest
     *
     * @returns FaceCompareResponse
     *
     * @param FaceCompareRequest $request
     *
     * @return FaceCompareResponse
     */
    public function faceCompare($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->faceCompareWithOptions($request, $runtime);
    }

    /**
     * Compares two face images by using face recognition technology and returns the comparison result and a similarity score.
     *
     * @param Request - FaceCompareV2Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FaceCompareV2Response
     *
     * @param FaceCompareV2Request $request
     * @param RuntimeOptions       $runtime
     *
     * @return FaceCompareV2Response
     */
    public function faceCompareV2WithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->facePictureQualityCheck) {
            @$query['FacePictureQualityCheck'] = $request->facePictureQualityCheck;
        }

        if (null !== $request->faceQualityCheck) {
            @$query['FaceQualityCheck'] = $request->faceQualityCheck;
        }

        if (null !== $request->merchantBizId) {
            @$query['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->sourceFacePictureUrl) {
            @$query['SourceFacePictureUrl'] = $request->sourceFacePictureUrl;
        }

        if (null !== $request->targetFacePictureUrl) {
            @$query['TargetFacePictureUrl'] = $request->targetFacePictureUrl;
        }

        $body = [];
        if (null !== $request->sourceFacePicture) {
            @$body['SourceFacePicture'] = $request->sourceFacePicture;
        }

        if (null !== $request->sourceFacePictureFile) {
            @$body['SourceFacePictureFile'] = $request->sourceFacePictureFile;
        }

        if (null !== $request->targetFacePicture) {
            @$body['TargetFacePicture'] = $request->targetFacePicture;
        }

        if (null !== $request->targetFacePictureFile) {
            @$body['TargetFacePictureFile'] = $request->targetFacePictureFile;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'FaceCompareV2',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FaceCompareV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Compares two face images by using face recognition technology and returns the comparison result and a similarity score.
     *
     * @param Request - FaceCompareV2Request
     *
     * @returns FaceCompareV2Response
     *
     * @param FaceCompareV2Request $request
     *
     * @return FaceCompareV2Response
     */
    public function faceCompareV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->faceCompareV2WithOptions($request, $runtime);
    }

    /**
     * @param FaceCompareV2AdvanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return FaceCompareV2Response
     */
    public function faceCompareV2Advance($request, $runtime)
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
            'Product' => 'Cloudauth-intl',
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
        $faceCompareV2Req = new FaceCompareV2Request([]);
        Utils::convert($request, $faceCompareV2Req);
        if (null !== $request->sourceFacePictureFileObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->sourceFacePictureFileObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType),
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $faceCompareV2Req->sourceFacePictureFile = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        if (null !== $request->targetFacePictureFileObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->targetFacePictureFileObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType),
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $faceCompareV2Req->targetFacePictureFile = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->faceCompareV2WithOptions($faceCompareV2Req, $runtime);
    }

    /**
     * Performs cross-comparison of faces.
     *
     * @param Request - FaceCrossCompareIntlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FaceCrossCompareIntlResponse
     *
     * @param FaceCrossCompareIntlRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return FaceCrossCompareIntlResponse
     */
    public function faceCrossCompareIntlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->compareModel) {
            @$query['CompareModel'] = $request->compareModel;
        }

        if (null !== $request->faceVerifyThreshold) {
            @$query['FaceVerifyThreshold'] = $request->faceVerifyThreshold;
        }

        if (null !== $request->merchantBizId) {
            @$query['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->sceneCode) {
            @$query['SceneCode'] = $request->sceneCode;
        }

        if (null !== $request->sourceAFacePictureUrl) {
            @$query['SourceAFacePictureUrl'] = $request->sourceAFacePictureUrl;
        }

        if (null !== $request->sourceBFacePictureUrl) {
            @$query['SourceBFacePictureUrl'] = $request->sourceBFacePictureUrl;
        }

        if (null !== $request->sourceCFacePictureUrl) {
            @$query['SourceCFacePictureUrl'] = $request->sourceCFacePictureUrl;
        }

        $body = [];
        if (null !== $request->sourceAFacePicture) {
            @$body['SourceAFacePicture'] = $request->sourceAFacePicture;
        }

        if (null !== $request->sourceBFacePicture) {
            @$body['SourceBFacePicture'] = $request->sourceBFacePicture;
        }

        if (null !== $request->sourceCFacePicture) {
            @$body['SourceCFacePicture'] = $request->sourceCFacePicture;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'FaceCrossCompareIntl',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FaceCrossCompareIntlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs cross-comparison of faces.
     *
     * @param Request - FaceCrossCompareIntlRequest
     *
     * @returns FaceCrossCompareIntlResponse
     *
     * @param FaceCrossCompareIntlRequest $request
     *
     * @return FaceCrossCompareIntlResponse
     */
    public function faceCrossCompareIntl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->faceCrossCompareIntlWithOptions($request, $runtime);
    }

    /**
     * FaceDuplicationCheckIntl is designed for scenarios where SDK integration is not feasible. You can call this API operation to submit facial images and perform the following functions: verify whether the user is a real person, compare the submitted face against a stored face to verify identity, search a face database to check for existing records, and automatically register the face in a specified face database after successful verification.
     *
     * @param Request - FaceDuplicationCheckIntlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FaceDuplicationCheckIntlResponse
     *
     * @param FaceDuplicationCheckIntlRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return FaceDuplicationCheckIntlResponse
     */
    public function faceDuplicationCheckIntlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        $body = [];
        if (null !== $request->autoRegistration) {
            @$body['AutoRegistration'] = $request->autoRegistration;
        }

        if (null !== $request->faceGroupCodes) {
            @$body['FaceGroupCodes'] = $request->faceGroupCodes;
        }

        if (null !== $request->faceQualityCheck) {
            @$body['FaceQualityCheck'] = $request->faceQualityCheck;
        }

        if (null !== $request->faceRegisterGroupCode) {
            @$body['FaceRegisterGroupCode'] = $request->faceRegisterGroupCode;
        }

        if (null !== $request->faceVerifyThreshold) {
            @$body['FaceVerifyThreshold'] = $request->faceVerifyThreshold;
        }

        if (null !== $request->liveness) {
            @$body['Liveness'] = $request->liveness;
        }

        if (null !== $request->merchantBizId) {
            @$body['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->merchantUserId) {
            @$body['MerchantUserId'] = $request->merchantUserId;
        }

        if (null !== $request->returnFaces) {
            @$body['ReturnFaces'] = $request->returnFaces;
        }

        if (null !== $request->saveFacePicture) {
            @$body['SaveFacePicture'] = $request->saveFacePicture;
        }

        if (null !== $request->sceneCode) {
            @$body['SceneCode'] = $request->sceneCode;
        }

        if (null !== $request->sourceFacePicture) {
            @$body['SourceFacePicture'] = $request->sourceFacePicture;
        }

        if (null !== $request->sourceFacePictureUrl) {
            @$body['SourceFacePictureUrl'] = $request->sourceFacePictureUrl;
        }

        if (null !== $request->targetFacePicture) {
            @$body['TargetFacePicture'] = $request->targetFacePicture;
        }

        if (null !== $request->targetFacePictureUrl) {
            @$body['TargetFacePictureUrl'] = $request->targetFacePictureUrl;
        }

        if (null !== $request->verifyModel) {
            @$body['VerifyModel'] = $request->verifyModel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'FaceDuplicationCheckIntl',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FaceDuplicationCheckIntlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * FaceDuplicationCheckIntl is designed for scenarios where SDK integration is not feasible. You can call this API operation to submit facial images and perform the following functions: verify whether the user is a real person, compare the submitted face against a stored face to verify identity, search a face database to check for existing records, and automatically register the face in a specified face database after successful verification.
     *
     * @param Request - FaceDuplicationCheckIntlRequest
     *
     * @returns FaceDuplicationCheckIntlResponse
     *
     * @param FaceDuplicationCheckIntlRequest $request
     *
     * @return FaceDuplicationCheckIntlResponse
     */
    public function faceDuplicationCheckIntl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->faceDuplicationCheckIntlWithOptions($request, $runtime);
    }

    /**
     * Server-side API for the international Face Guard service.
     *
     * @param Request - FaceGuardRiskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FaceGuardRiskResponse
     *
     * @param FaceGuardRiskRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return FaceGuardRiskResponse
     */
    public function faceGuardRiskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->deviceToken) {
            @$query['DeviceToken'] = $request->deviceToken;
        }

        if (null !== $request->merchantBizId) {
            @$query['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FaceGuardRisk',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FaceGuardRiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Server-side API for the international Face Guard service.
     *
     * @param Request - FaceGuardRiskRequest
     *
     * @returns FaceGuardRiskResponse
     *
     * @param FaceGuardRiskRequest $request
     *
     * @return FaceGuardRiskResponse
     */
    public function faceGuardRisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->faceGuardRiskWithOptions($request, $runtime);
    }

    /**
     * Calls the server-side API for passive liveness detection.
     *
     * @param Request - FaceLivenessRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FaceLivenessResponse
     *
     * @param FaceLivenessRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return FaceLivenessResponse
     */
    public function faceLivenessWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->crop) {
            @$query['Crop'] = $request->crop;
        }

        if (null !== $request->facePictureUrl) {
            @$query['FacePictureUrl'] = $request->facePictureUrl;
        }

        if (null !== $request->faceQuality) {
            @$query['FaceQuality'] = $request->faceQuality;
        }

        if (null !== $request->faceQualityCheck) {
            @$query['FaceQualityCheck'] = $request->faceQualityCheck;
        }

        if (null !== $request->merchantBizId) {
            @$query['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->merchantUserId) {
            @$query['MerchantUserId'] = $request->merchantUserId;
        }

        if (null !== $request->occlusion) {
            @$query['Occlusion'] = $request->occlusion;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        $body = [];
        if (null !== $request->facePictureBase64) {
            @$body['FacePictureBase64'] = $request->facePictureBase64;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'FaceLiveness',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FaceLivenessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls the server-side API for passive liveness detection.
     *
     * @param Request - FaceLivenessRequest
     *
     * @returns FaceLivenessResponse
     *
     * @param FaceLivenessRequest $request
     *
     * @return FaceLivenessResponse
     */
    public function faceLiveness($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->faceLivenessWithOptions($request, $runtime);
    }

    /**
     * 人脸活体验证
     *
     * @remarks
     * 调用FaceLivenessV2接口对人脸图片进行活体检测。
     *
     * @param Request - FaceLivenessV2Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FaceLivenessV2Response
     *
     * @param FaceLivenessV2Request $request
     * @param RuntimeOptions        $runtime
     *
     * @return FaceLivenessV2Response
     */
    public function faceLivenessV2WithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->facePictureFile) {
            @$query['FacePictureFile'] = $request->facePictureFile;
        }

        if (null !== $request->facePictureUrl) {
            @$query['FacePictureUrl'] = $request->facePictureUrl;
        }

        if (null !== $request->faceQualityCheck) {
            @$query['FaceQualityCheck'] = $request->faceQualityCheck;
        }

        if (null !== $request->merchantBizId) {
            @$query['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->merchantUserId) {
            @$query['MerchantUserId'] = $request->merchantUserId;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        $body = [];
        if (null !== $request->facePictureBase64) {
            @$body['FacePictureBase64'] = $request->facePictureBase64;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'FaceLivenessV2',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FaceLivenessV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 人脸活体验证
     *
     * @remarks
     * 调用FaceLivenessV2接口对人脸图片进行活体检测。
     *
     * @param Request - FaceLivenessV2Request
     *
     * @returns FaceLivenessV2Response
     *
     * @param FaceLivenessV2Request $request
     *
     * @return FaceLivenessV2Response
     */
    public function faceLivenessV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->faceLivenessV2WithOptions($request, $runtime);
    }

    /**
     * @param FaceLivenessV2AdvanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return FaceLivenessV2Response
     */
    public function faceLivenessV2Advance($request, $runtime)
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
            'Product' => 'Cloudauth-intl',
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
        $faceLivenessV2Req = new FaceLivenessV2Request([]);
        Utils::convert($request, $faceLivenessV2Req);
        if (null !== $request->facePictureFileObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->facePictureFileObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType),
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $faceLivenessV2Req->facePictureFile = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->faceLivenessV2WithOptions($faceLivenessV2Req, $runtime);
    }

    /**
     * 人脸活体验证
     *
     * @remarks
     * 调用FaceVerifyIntl接口对人脸图片进行活体检测。
     *
     * @param Request - FaceVerifyIntlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FaceVerifyIntlResponse
     *
     * @param FaceVerifyIntlRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return FaceVerifyIntlResponse
     */
    public function faceVerifyIntlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoRegistration) {
            @$query['AutoRegistration'] = $request->autoRegistration;
        }

        if (null !== $request->faceGroupCodes) {
            @$query['FaceGroupCodes'] = $request->faceGroupCodes;
        }

        if (null !== $request->faceQualityCheck) {
            @$query['FaceQualityCheck'] = $request->faceQualityCheck;
        }

        if (null !== $request->faceRegisterGroupCode) {
            @$query['FaceRegisterGroupCode'] = $request->faceRegisterGroupCode;
        }

        if (null !== $request->merchantBizId) {
            @$query['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->merchantUserId) {
            @$query['MerchantUserId'] = $request->merchantUserId;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->returnFaces) {
            @$query['ReturnFaces'] = $request->returnFaces;
        }

        if (null !== $request->sourceFacePictureFile) {
            @$query['SourceFacePictureFile'] = $request->sourceFacePictureFile;
        }

        if (null !== $request->sourceFacePictureUrl) {
            @$query['SourceFacePictureUrl'] = $request->sourceFacePictureUrl;
        }

        if (null !== $request->targetFacePictureFile) {
            @$query['TargetFacePictureFile'] = $request->targetFacePictureFile;
        }

        if (null !== $request->targetFacePictureUrl) {
            @$query['TargetFacePictureUrl'] = $request->targetFacePictureUrl;
        }

        if (null !== $request->verifyModel) {
            @$query['VerifyModel'] = $request->verifyModel;
        }

        $body = [];
        if (null !== $request->sourceFacePicture) {
            @$body['SourceFacePicture'] = $request->sourceFacePicture;
        }

        if (null !== $request->targetFacePicture) {
            @$body['TargetFacePicture'] = $request->targetFacePicture;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'FaceVerifyIntl',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FaceVerifyIntlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 人脸活体验证
     *
     * @remarks
     * 调用FaceVerifyIntl接口对人脸图片进行活体检测。
     *
     * @param Request - FaceVerifyIntlRequest
     *
     * @returns FaceVerifyIntlResponse
     *
     * @param FaceVerifyIntlRequest $request
     *
     * @return FaceVerifyIntlResponse
     */
    public function faceVerifyIntl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->faceVerifyIntlWithOptions($request, $runtime);
    }

    /**
     * @param FaceVerifyIntlAdvanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return FaceVerifyIntlResponse
     */
    public function faceVerifyIntlAdvance($request, $runtime)
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
            'Product' => 'Cloudauth-intl',
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
        $faceVerifyIntlReq = new FaceVerifyIntlRequest([]);
        Utils::convert($request, $faceVerifyIntlReq);
        if (null !== $request->sourceFacePictureFileObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->sourceFacePictureFileObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType),
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $faceVerifyIntlReq->sourceFacePictureFile = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        if (null !== $request->targetFacePictureFileObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->targetFacePictureFileObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType),
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $faceVerifyIntlReq->targetFacePictureFile = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->faceVerifyIntlWithOptions($faceVerifyIntlReq, $runtime);
    }

    /**
     * Calls the eKYC global anti-spoofing callback operation.
     *
     * @deprecated OpenAPI FraudResultCallBack is deprecated
     *
     * @param Request - FraudResultCallBackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FraudResultCallBackResponse
     *
     * @param FraudResultCallBackRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return FraudResultCallBackResponse
     */
    public function fraudResultCallBackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certifyId) {
            @$query['CertifyId'] = $request->certifyId;
        }

        if (null !== $request->extParams) {
            @$query['ExtParams'] = $request->extParams;
        }

        if (null !== $request->resultCode) {
            @$query['ResultCode'] = $request->resultCode;
        }

        if (null !== $request->verifyDeployEnv) {
            @$query['VerifyDeployEnv'] = $request->verifyDeployEnv;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FraudResultCallBack',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FraudResultCallBackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Calls the eKYC global anti-spoofing callback operation.
     *
     * @deprecated OpenAPI FraudResultCallBack is deprecated
     *
     * @param Request - FraudResultCallBackRequest
     *
     * @returns FraudResultCallBackResponse
     *
     * @param FraudResultCallBackRequest $request
     *
     * @return FraudResultCallBackResponse
     */
    public function fraudResultCallBack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->fraudResultCallBackWithOptions($request, $runtime);
    }

    /**
     * Verifies the validity period of an identity document as a two-factor authentication element.
     *
     * @param Request - Id2MetaPeriodVerifyIntlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Id2MetaPeriodVerifyIntlResponse
     *
     * @param Id2MetaPeriodVerifyIntlRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return Id2MetaPeriodVerifyIntlResponse
     */
    public function id2MetaPeriodVerifyIntlWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->docName) {
            @$body['DocName'] = $request->docName;
        }

        if (null !== $request->docNo) {
            @$body['DocNo'] = $request->docNo;
        }

        if (null !== $request->docType) {
            @$body['DocType'] = $request->docType;
        }

        if (null !== $request->merchantBizId) {
            @$body['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->merchantUserId) {
            @$body['MerchantUserId'] = $request->merchantUserId;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->sceneCode) {
            @$body['SceneCode'] = $request->sceneCode;
        }

        if (null !== $request->validityEndDate) {
            @$body['ValidityEndDate'] = $request->validityEndDate;
        }

        if (null !== $request->validityStartDate) {
            @$body['ValidityStartDate'] = $request->validityStartDate;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Id2MetaPeriodVerifyIntl',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return Id2MetaPeriodVerifyIntlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies the validity period of an identity document as a two-factor authentication element.
     *
     * @param Request - Id2MetaPeriodVerifyIntlRequest
     *
     * @returns Id2MetaPeriodVerifyIntlResponse
     *
     * @param Id2MetaPeriodVerifyIntlRequest $request
     *
     * @return Id2MetaPeriodVerifyIntlResponse
     */
    public function id2MetaPeriodVerifyIntl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->id2MetaPeriodVerifyIntlWithOptions($request, $runtime);
    }

    /**
     * Verifies the authenticity and consistency of a name and ID card number against an authoritative data source.
     *
     * @param Request - Id2MetaVerifyIntlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Id2MetaVerifyIntlResponse
     *
     * @param Id2MetaVerifyIntlRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return Id2MetaVerifyIntlResponse
     */
    public function id2MetaVerifyIntlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->identifyNum) {
            @$query['IdentifyNum'] = $request->identifyNum;
        }

        if (null !== $request->paramType) {
            @$query['ParamType'] = $request->paramType;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'Id2MetaVerifyIntl',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return Id2MetaVerifyIntlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies the authenticity and consistency of a name and ID card number against an authoritative data source.
     *
     * @param Request - Id2MetaVerifyIntlRequest
     *
     * @returns Id2MetaVerifyIntlResponse
     *
     * @param Id2MetaVerifyIntlRequest $request
     *
     * @return Id2MetaVerifyIntlResponse
     */
    public function id2MetaVerifyIntl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->id2MetaVerifyIntlWithOptions($request, $runtime);
    }

    /**
     * Initializes an authentication session.
     *
     * @param tmpReq - InitializeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InitializeResponse
     *
     * @param InitializeRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return InitializeResponse
     */
    public function initializeWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new InitializeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->docPageConfig) {
            $request->docPageConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->docPageConfig, 'DocPageConfig', 'json');
        }

        $query = [];
        if (null !== $request->appQualityCheck) {
            @$query['AppQualityCheck'] = $request->appQualityCheck;
        }

        if (null !== $request->authorize) {
            @$query['Authorize'] = $request->authorize;
        }

        if (null !== $request->autoRegistration) {
            @$query['AutoRegistration'] = $request->autoRegistration;
        }

        if (null !== $request->callbackToken) {
            @$query['CallbackToken'] = $request->callbackToken;
        }

        if (null !== $request->callbackUrl) {
            @$query['CallbackUrl'] = $request->callbackUrl;
        }

        if (null !== $request->chameleonFrameEnable) {
            @$query['ChameleonFrameEnable'] = $request->chameleonFrameEnable;
        }

        if (null !== $request->crop) {
            @$query['Crop'] = $request->crop;
        }

        if (null !== $request->dateOfBirth) {
            @$query['DateOfBirth'] = $request->dateOfBirth;
        }

        if (null !== $request->dateOfExpiry) {
            @$query['DateOfExpiry'] = $request->dateOfExpiry;
        }

        if (null !== $request->docName) {
            @$query['DocName'] = $request->docName;
        }

        if (null !== $request->docNo) {
            @$query['DocNo'] = $request->docNo;
        }

        if (null !== $request->docPageConfigShrink) {
            @$query['DocPageConfig'] = $request->docPageConfigShrink;
        }

        if (null !== $request->docScanMode) {
            @$query['DocScanMode'] = $request->docScanMode;
        }

        if (null !== $request->docType) {
            @$query['DocType'] = $request->docType;
        }

        if (null !== $request->docVideo) {
            @$query['DocVideo'] = $request->docVideo;
        }

        if (null !== $request->documentNumber) {
            @$query['DocumentNumber'] = $request->documentNumber;
        }

        if (null !== $request->editOcrResult) {
            @$query['EditOcrResult'] = $request->editOcrResult;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->experienceCode) {
            @$query['ExperienceCode'] = $request->experienceCode;
        }

        if (null !== $request->faceGroupCodes) {
            @$query['FaceGroupCodes'] = $request->faceGroupCodes;
        }

        if (null !== $request->facePictureUrl) {
            @$query['FacePictureUrl'] = $request->facePictureUrl;
        }

        if (null !== $request->faceRegisterGroupCode) {
            @$query['FaceRegisterGroupCode'] = $request->faceRegisterGroupCode;
        }

        if (null !== $request->faceVerifyThreshold) {
            @$query['FaceVerifyThreshold'] = $request->faceVerifyThreshold;
        }

        if (null !== $request->idFaceQuality) {
            @$query['IdFaceQuality'] = $request->idFaceQuality;
        }

        if (null !== $request->idSpoof) {
            @$query['IdSpoof'] = $request->idSpoof;
        }

        if (null !== $request->idThreshold) {
            @$query['IdThreshold'] = $request->idThreshold;
        }

        if (null !== $request->languageConfig) {
            @$query['LanguageConfig'] = $request->languageConfig;
        }

        if (null !== $request->MRTDInput) {
            @$query['MRTDInput'] = $request->MRTDInput;
        }

        if (null !== $request->merchantBizId) {
            @$query['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->merchantUserId) {
            @$query['MerchantUserId'] = $request->merchantUserId;
        }

        if (null !== $request->metaInfo) {
            @$query['MetaInfo'] = $request->metaInfo;
        }

        if (null !== $request->mobile) {
            @$query['Mobile'] = $request->mobile;
        }

        if (null !== $request->model) {
            @$query['Model'] = $request->model;
        }

        if (null !== $request->ocr) {
            @$query['Ocr'] = $request->ocr;
        }

        if (null !== $request->ocrValueStandard) {
            @$query['OcrValueStandard'] = $request->ocrValueStandard;
        }

        if (null !== $request->pages) {
            @$query['Pages'] = $request->pages;
        }

        if (null !== $request->procedurePriority) {
            @$query['ProcedurePriority'] = $request->procedurePriority;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productFlow) {
            @$query['ProductFlow'] = $request->productFlow;
        }

        if (null !== $request->returnFaces) {
            @$query['ReturnFaces'] = $request->returnFaces;
        }

        if (null !== $request->returnUrl) {
            @$query['ReturnUrl'] = $request->returnUrl;
        }

        if (null !== $request->saveFacePicture) {
            @$query['SaveFacePicture'] = $request->saveFacePicture;
        }

        if (null !== $request->sceneCode) {
            @$query['SceneCode'] = $request->sceneCode;
        }

        if (null !== $request->securityLevel) {
            @$query['SecurityLevel'] = $request->securityLevel;
        }

        if (null !== $request->showAlbumIcon) {
            @$query['ShowAlbumIcon'] = $request->showAlbumIcon;
        }

        if (null !== $request->showGuidePage) {
            @$query['ShowGuidePage'] = $request->showGuidePage;
        }

        if (null !== $request->showOcrResult) {
            @$query['ShowOcrResult'] = $request->showOcrResult;
        }

        if (null !== $request->styleConfig) {
            @$query['StyleConfig'] = $request->styleConfig;
        }

        if (null !== $request->targetFacePicture) {
            @$query['TargetFacePicture'] = $request->targetFacePicture;
        }

        if (null !== $request->targetFacePictureUrl) {
            @$query['TargetFacePictureUrl'] = $request->targetFacePictureUrl;
        }

        if (null !== $request->templateConfig) {
            @$query['TemplateConfig'] = $request->templateConfig;
        }

        if (null !== $request->templateRanCount) {
            @$query['TemplateRanCount'] = $request->templateRanCount;
        }

        if (null !== $request->templateType) {
            @$query['TemplateType'] = $request->templateType;
        }

        if (null !== $request->useNFC) {
            @$query['UseNFC'] = $request->useNFC;
        }

        if (null !== $request->verifyModel) {
            @$query['VerifyModel'] = $request->verifyModel;
        }

        $body = [];
        if (null !== $request->facePictureBase64) {
            @$body['FacePictureBase64'] = $request->facePictureBase64;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Initialize',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InitializeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initializes an authentication session.
     *
     * @param Request - InitializeRequest
     *
     * @returns InitializeResponse
     *
     * @param InitializeRequest $request
     *
     * @return InitializeResponse
     */
    public function initialize($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initializeWithOptions($request, $runtime);
    }

    /**
     * 认证初始化.
     *
     * @param tmpReq - InitializeV2Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InitializeV2Response
     *
     * @param InitializeV2Request $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return InitializeV2Response
     */
    public function initializeV2WithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new InitializeV2ShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->docPageConfig) {
            $request->docPageConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->docPageConfig, 'DocPageConfig', 'json');
        }

        $query = [];
        if (null !== $request->appQualityCheck) {
            @$query['AppQualityCheck'] = $request->appQualityCheck;
        }

        if (null !== $request->authorize) {
            @$query['Authorize'] = $request->authorize;
        }

        if (null !== $request->autoRegistration) {
            @$query['AutoRegistration'] = $request->autoRegistration;
        }

        if (null !== $request->callbackToken) {
            @$query['CallbackToken'] = $request->callbackToken;
        }

        if (null !== $request->callbackUrl) {
            @$query['CallbackUrl'] = $request->callbackUrl;
        }

        if (null !== $request->chameleonFrameEnable) {
            @$query['ChameleonFrameEnable'] = $request->chameleonFrameEnable;
        }

        if (null !== $request->crop) {
            @$query['Crop'] = $request->crop;
        }

        if (null !== $request->dateOfBirth) {
            @$query['DateOfBirth'] = $request->dateOfBirth;
        }

        if (null !== $request->dateOfExpiry) {
            @$query['DateOfExpiry'] = $request->dateOfExpiry;
        }

        if (null !== $request->docName) {
            @$query['DocName'] = $request->docName;
        }

        if (null !== $request->docNo) {
            @$query['DocNo'] = $request->docNo;
        }

        if (null !== $request->docPageConfigShrink) {
            @$query['DocPageConfig'] = $request->docPageConfigShrink;
        }

        if (null !== $request->docScanMode) {
            @$query['DocScanMode'] = $request->docScanMode;
        }

        if (null !== $request->docType) {
            @$query['DocType'] = $request->docType;
        }

        if (null !== $request->docVideo) {
            @$query['DocVideo'] = $request->docVideo;
        }

        if (null !== $request->documentNumber) {
            @$query['DocumentNumber'] = $request->documentNumber;
        }

        if (null !== $request->editOcrResult) {
            @$query['EditOcrResult'] = $request->editOcrResult;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->experienceCode) {
            @$query['ExperienceCode'] = $request->experienceCode;
        }

        if (null !== $request->faceGroupCodes) {
            @$query['FaceGroupCodes'] = $request->faceGroupCodes;
        }

        if (null !== $request->facePictureFile) {
            @$query['FacePictureFile'] = $request->facePictureFile;
        }

        if (null !== $request->facePictureUrl) {
            @$query['FacePictureUrl'] = $request->facePictureUrl;
        }

        if (null !== $request->faceRegisterGroupCode) {
            @$query['FaceRegisterGroupCode'] = $request->faceRegisterGroupCode;
        }

        if (null !== $request->faceVerifyThreshold) {
            @$query['FaceVerifyThreshold'] = $request->faceVerifyThreshold;
        }

        if (null !== $request->idFaceQuality) {
            @$query['IdFaceQuality'] = $request->idFaceQuality;
        }

        if (null !== $request->idSpoof) {
            @$query['IdSpoof'] = $request->idSpoof;
        }

        if (null !== $request->idThreshold) {
            @$query['IdThreshold'] = $request->idThreshold;
        }

        if (null !== $request->languageConfig) {
            @$query['LanguageConfig'] = $request->languageConfig;
        }

        if (null !== $request->MRTDInput) {
            @$query['MRTDInput'] = $request->MRTDInput;
        }

        if (null !== $request->merchantBizId) {
            @$query['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->merchantUserId) {
            @$query['MerchantUserId'] = $request->merchantUserId;
        }

        if (null !== $request->metaInfo) {
            @$query['MetaInfo'] = $request->metaInfo;
        }

        if (null !== $request->mobile) {
            @$query['Mobile'] = $request->mobile;
        }

        if (null !== $request->model) {
            @$query['Model'] = $request->model;
        }

        if (null !== $request->ocr) {
            @$query['Ocr'] = $request->ocr;
        }

        if (null !== $request->ocrValueStandard) {
            @$query['OcrValueStandard'] = $request->ocrValueStandard;
        }

        if (null !== $request->pages) {
            @$query['Pages'] = $request->pages;
        }

        if (null !== $request->procedurePriority) {
            @$query['ProcedurePriority'] = $request->procedurePriority;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productFlow) {
            @$query['ProductFlow'] = $request->productFlow;
        }

        if (null !== $request->returnFaces) {
            @$query['ReturnFaces'] = $request->returnFaces;
        }

        if (null !== $request->returnUrl) {
            @$query['ReturnUrl'] = $request->returnUrl;
        }

        if (null !== $request->saveFacePicture) {
            @$query['SaveFacePicture'] = $request->saveFacePicture;
        }

        if (null !== $request->sceneCode) {
            @$query['SceneCode'] = $request->sceneCode;
        }

        if (null !== $request->securityLevel) {
            @$query['SecurityLevel'] = $request->securityLevel;
        }

        if (null !== $request->showAlbumIcon) {
            @$query['ShowAlbumIcon'] = $request->showAlbumIcon;
        }

        if (null !== $request->showGuidePage) {
            @$query['ShowGuidePage'] = $request->showGuidePage;
        }

        if (null !== $request->showOcrResult) {
            @$query['ShowOcrResult'] = $request->showOcrResult;
        }

        if (null !== $request->styleConfig) {
            @$query['StyleConfig'] = $request->styleConfig;
        }

        if (null !== $request->targetFacePictureFile) {
            @$query['TargetFacePictureFile'] = $request->targetFacePictureFile;
        }

        if (null !== $request->targetFacePictureUrl) {
            @$query['TargetFacePictureUrl'] = $request->targetFacePictureUrl;
        }

        if (null !== $request->templateConfig) {
            @$query['TemplateConfig'] = $request->templateConfig;
        }

        if (null !== $request->templateRanCount) {
            @$query['TemplateRanCount'] = $request->templateRanCount;
        }

        if (null !== $request->templateType) {
            @$query['TemplateType'] = $request->templateType;
        }

        if (null !== $request->useNFC) {
            @$query['UseNFC'] = $request->useNFC;
        }

        if (null !== $request->verifyModel) {
            @$query['VerifyModel'] = $request->verifyModel;
        }

        $body = [];
        if (null !== $request->facePictureBase64) {
            @$body['FacePictureBase64'] = $request->facePictureBase64;
        }

        if (null !== $request->targetFacePicture) {
            @$body['TargetFacePicture'] = $request->targetFacePicture;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InitializeV2',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InitializeV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 认证初始化.
     *
     * @param Request - InitializeV2Request
     *
     * @returns InitializeV2Response
     *
     * @param InitializeV2Request $request
     *
     * @return InitializeV2Response
     */
    public function initializeV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initializeV2WithOptions($request, $runtime);
    }

    /**
     * @param InitializeV2AdvanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return InitializeV2Response
     */
    public function initializeV2Advance($request, $runtime)
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
            'Product' => 'Cloudauth-intl',
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
        $initializeV2Req = new InitializeV2Request([]);
        Utils::convert($request, $initializeV2Req);
        if (null !== $request->facePictureFileObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->facePictureFileObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType),
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $initializeV2Req->facePictureFile = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        if (null !== $request->targetFacePictureFileObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->targetFacePictureFileObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType),
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $initializeV2Req->targetFacePictureFile = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->initializeV2WithOptions($initializeV2Req, $runtime);
    }

    /**
     * Configures client connection keep-alive settings.
     *
     * @remarks
     * Configures client connection keep-alive settings.
     *
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns KeepaliveIntlResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return KeepaliveIntlResponse
     */
    public function keepaliveIntlWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'KeepaliveIntl',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return KeepaliveIntlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures client connection keep-alive settings.
     *
     * @remarks
     * Configures client connection keep-alive settings.
     *
     * @returns KeepaliveIntlResponse
     *
     * @return KeepaliveIntlResponse
     */
    public function keepaliveIntl()
    {
        $runtime = new RuntimeOptions([]);

        return $this->keepaliveIntlWithOptions($runtime);
    }

    /**
     * Verifies the identity of a phone number owner by using two-factor authentication.
     *
     * @remarks
     * Pass in a phone number and name to verify their authenticity and consistency through an authoritative data source. Before using this operation, make sure that you fully understand the billing method and pricing of the two-factor phone number verification service.
     *
     * @param Request - Mobile2MetaVerifyIntlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Mobile2MetaVerifyIntlResponse
     *
     * @param Mobile2MetaVerifyIntlRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return Mobile2MetaVerifyIntlResponse
     */
    public function mobile2MetaVerifyIntlWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->mobile) {
            @$body['Mobile'] = $request->mobile;
        }

        if (null !== $request->paramType) {
            @$body['ParamType'] = $request->paramType;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Mobile2MetaVerifyIntl',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return Mobile2MetaVerifyIntlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies the identity of a phone number owner by using two-factor authentication.
     *
     * @remarks
     * Pass in a phone number and name to verify their authenticity and consistency through an authoritative data source. Before using this operation, make sure that you fully understand the billing method and pricing of the two-factor phone number verification service.
     *
     * @param Request - Mobile2MetaVerifyIntlRequest
     *
     * @returns Mobile2MetaVerifyIntlResponse
     *
     * @param Mobile2MetaVerifyIntlRequest $request
     *
     * @return Mobile2MetaVerifyIntlResponse
     */
    public function mobile2MetaVerifyIntl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mobile2MetaVerifyIntlWithOptions($request, $runtime);
    }

    /**
     * Verifies the authenticity and consistency of a phone number, name, and ID card number against an authoritative data source. If the information is inconsistent, returns the reason for the inconsistency.
     *
     * @param Request - Mobile3MetaVerifyIntlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Mobile3MetaVerifyIntlResponse
     *
     * @param Mobile3MetaVerifyIntlRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return Mobile3MetaVerifyIntlResponse
     */
    public function mobile3MetaVerifyIntlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->identifyNum) {
            @$query['IdentifyNum'] = $request->identifyNum;
        }

        if (null !== $request->mobile) {
            @$query['Mobile'] = $request->mobile;
        }

        if (null !== $request->paramType) {
            @$query['ParamType'] = $request->paramType;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'Mobile3MetaVerifyIntl',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return Mobile3MetaVerifyIntlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies the authenticity and consistency of a phone number, name, and ID card number against an authoritative data source. If the information is inconsistent, returns the reason for the inconsistency.
     *
     * @param Request - Mobile3MetaVerifyIntlRequest
     *
     * @returns Mobile3MetaVerifyIntlResponse
     *
     * @param Mobile3MetaVerifyIntlRequest $request
     *
     * @return Mobile3MetaVerifyIntlResponse
     */
    public function mobile3MetaVerifyIntl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mobile3MetaVerifyIntlWithOptions($request, $runtime);
    }

    /**
     * Modifies a face library.
     *
     * @param Request - ModifyFaceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyFaceGroupResponse
     *
     * @param ModifyFaceGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyFaceGroupResponse
     */
    public function modifyFaceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyFaceGroup',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyFaceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a face library.
     *
     * @param Request - ModifyFaceGroupRequest
     *
     * @returns ModifyFaceGroupResponse
     *
     * @param ModifyFaceGroupRequest $request
     *
     * @return ModifyFaceGroupResponse
     */
    public function modifyFaceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFaceGroupWithOptions($request, $runtime);
    }

    /**
     * Edits a face record.
     *
     * @param Request - ModifyFaceRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyFaceRecordResponse
     *
     * @param ModifyFaceRecordRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyFaceRecordResponse
     */
    public function modifyFaceRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->faceGroupCode) {
            @$body['FaceGroupCode'] = $request->faceGroupCode;
        }

        if (null !== $request->imgOssInfos) {
            @$body['ImgOssInfos'] = $request->imgOssInfos;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyFaceRecord',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyFaceRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Edits a face record.
     *
     * @param Request - ModifyFaceRecordRequest
     *
     * @returns ModifyFaceRecordResponse
     *
     * @param ModifyFaceRecordRequest $request
     *
     * @return ModifyFaceRecordResponse
     */
    public function modifyFaceRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFaceRecordWithOptions($request, $runtime);
    }

    /**
     * Queries face libraries.
     *
     * @param Request - QueryFaceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryFaceGroupResponse
     *
     * @param QueryFaceGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryFaceGroupResponse
     */
    public function queryFaceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->groupCode) {
            @$query['GroupCode'] = $request->groupCode;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryFaceGroup',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryFaceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries face libraries.
     *
     * @param Request - QueryFaceGroupRequest
     *
     * @returns QueryFaceGroupResponse
     *
     * @param QueryFaceGroupRequest $request
     *
     * @return QueryFaceGroupResponse
     */
    public function queryFaceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFaceGroupWithOptions($request, $runtime);
    }

    /**
     * Queries face records.
     *
     * @param Request - QueryFaceRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryFaceRecordResponse
     *
     * @param QueryFaceRecordRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryFaceRecordResponse
     */
    public function queryFaceRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->faceGroupCode) {
            @$query['FaceGroupCode'] = $request->faceGroupCode;
        }

        if (null !== $request->faceId) {
            @$query['FaceId'] = $request->faceId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->merchantUserId) {
            @$query['MerchantUserId'] = $request->merchantUserId;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->registrationType) {
            @$query['RegistrationType'] = $request->registrationType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryFaceRecord',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryFaceRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries face records.
     *
     * @param Request - QueryFaceRecordRequest
     *
     * @returns QueryFaceRecordResponse
     *
     * @param QueryFaceRecordRequest $request
     *
     * @return QueryFaceRecordResponse
     */
    public function queryFaceRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFaceRecordWithOptions($request, $runtime);
    }

    /**
     * Retrieves a temporary token.
     *
     * @param Request - TempAccessTokenIntlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TempAccessTokenIntlResponse
     *
     * @param TempAccessTokenIntlRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return TempAccessTokenIntlResponse
     */
    public function tempAccessTokenIntlWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TempAccessTokenIntl',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TempAccessTokenIntlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a temporary token.
     *
     * @param Request - TempAccessTokenIntlRequest
     *
     * @returns TempAccessTokenIntlResponse
     *
     * @param TempAccessTokenIntlRequest $request
     *
     * @return TempAccessTokenIntlResponse
     */
    public function tempAccessTokenIntl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tempAccessTokenIntlWithOptions($request, $runtime);
    }

    /**
     * Retrieves a temporary URL for a file.
     *
     * @param Request - TempOssUrlIntlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TempOssUrlIntlResponse
     *
     * @param TempOssUrlIntlRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return TempOssUrlIntlResponse
     */
    public function tempOssUrlIntlWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->objectName) {
            @$body['ObjectName'] = $request->objectName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TempOssUrlIntl',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TempOssUrlIntlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a temporary URL for a file.
     *
     * @param Request - TempOssUrlIntlRequest
     *
     * @returns TempOssUrlIntlResponse
     *
     * @param TempOssUrlIntlRequest $request
     *
     * @return TempOssUrlIntlResponse
     */
    public function tempOssUrlIntl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tempOssUrlIntlWithOptions($request, $runtime);
    }
}
