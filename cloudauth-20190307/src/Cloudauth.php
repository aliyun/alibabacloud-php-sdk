<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307;

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
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\AIGCFaceVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\AIGCFaceVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\BankMetaVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\BankMetaVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CompareFacesRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CompareFacesResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CompareFaceVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CompareFaceVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\ContrastFaceVerifyAdvanceRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\ContrastFaceVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\ContrastFaceVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CreateAntCloudAuthSceneRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CreateAntCloudAuthSceneResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CreateAuthKeyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CreateAuthKeyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CreateCloudauthstSceneRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CreateCloudauthstSceneResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CreateSceneConfigRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CreateSceneConfigResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CreateVerifySettingRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CreateVerifySettingResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CreateWhitelistSettingRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CreateWhitelistSettingResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CredentialProductVerifyV2AdvanceRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CredentialProductVerifyV2Request;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CredentialProductVerifyV2Response;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CredentialVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CredentialVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CredentialVerifyShrinkRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CredentialVerifyV2AdvanceRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CredentialVerifyV2Request;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CredentialVerifyV2Response;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CredentialVerifyV2ShrinkRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DeepfakeDetectRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DeepfakeDetectResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DeleteAllCustomizeFlowStrategyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DeleteAllCustomizeFlowStrategyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DeleteAntCloudAuthSceneRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DeleteAntCloudAuthSceneResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DeleteBlackListStrategyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DeleteBlackListStrategyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DeleteCloudauthstSceneRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DeleteCloudauthstSceneResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DeleteControlStrategyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DeleteControlStrategyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DeleteCustomizeFlowStrategyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DeleteCustomizeFlowStrategyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DeleteFaceVerifyResultRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DeleteFaceVerifyResultResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DeleteSceneConfigRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DeleteSceneConfigResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DeleteWhitelistSettingRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DeleteWhitelistSettingResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeAntAndCloudAuthUserStatusResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeAuthVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeAuthVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeCardVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeCardVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeCloudauthstSceneListRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeCloudauthstSceneListResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeDeviceInfoRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeDeviceInfoResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeFaceGuardRiskRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeFaceGuardRiskResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeFaceVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeFaceVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeInfoCheckExportRecordRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeInfoCheckExportRecordResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeListAntCloudAuthScenesRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeListAntCloudAuthScenesResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeListFaceVerifyDataRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeListFaceVerifyDataResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeListFaceVerifyInfosRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeListFaceVerifyInfosResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeMetaSearchPageListRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeMetaSearchPageListResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeMetaStatisticsListRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeMetaStatisticsListResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeMetaStatisticsPageListRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeMetaStatisticsPageListResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeOssStatusRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeOssStatusResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeOssStatusV2Request;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeOssStatusV2Response;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeOssUploadTokenResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribePageFaceVerifyDataRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribePageFaceVerifyDataResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribePageSettingResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeProductCodeResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeSmartStatisticsPageListRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeSmartStatisticsPageListResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyDeviceRiskStatisticsRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyDeviceRiskStatisticsResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyFailStatisticsRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyFailStatisticsResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyPersonasDeviceModelStatisticsRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyPersonasDeviceModelStatisticsResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyPersonasOsStatisticsRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyPersonasOsStatisticsResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyPersonasProvinceStatisticsRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyPersonasProvinceStatisticsResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyPersonasSexStatisticsRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyPersonasSexStatisticsResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyResultRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyResultResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifySDKRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifySDKResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifySearchPageListRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifySearchPageListResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyStatisticsRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyStatisticsResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyTokenRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyTokenResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeWhitelistSettingRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeWhitelistSettingResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DownloadVerifyRecordsRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DownloadVerifyRecordsResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Id2MetaPeriodVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Id2MetaPeriodVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Id2MetaStandardVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Id2MetaStandardVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Id2MetaVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Id2MetaVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Id2MetaVerifyWithOCRAdvanceRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Id2MetaVerifyWithOCRRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Id2MetaVerifyWithOCRResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Id3MetaVerifyAdvanceRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Id3MetaVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Id3MetaVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Id3MetaVerifyWithOCRAdvanceRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Id3MetaVerifyWithOCRRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Id3MetaVerifyWithOCRResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\InitAuthVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\InitAuthVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\InitCardVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\InitCardVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\InitFaceVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\InitFaceVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\InsertWhiteListSettingRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\InsertWhiteListSettingResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\LivenessFaceVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\LivenessFaceVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Mobile2MetaVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Mobile2MetaVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Mobile3MetaDetailStandardVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Mobile3MetaDetailStandardVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Mobile3MetaDetailVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Mobile3MetaDetailVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Mobile3MetaSimpleStandardVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Mobile3MetaSimpleStandardVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Mobile3MetaSimpleVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Mobile3MetaSimpleVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\MobileDetectRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\MobileDetectResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\MobileOnlineStatusRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\MobileOnlineStatusResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\MobileOnlineTimeRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\MobileOnlineTimeResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\ModifyBlackListStrategyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\ModifyBlackListStrategyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\ModifyBlackListStrategyShrinkRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\ModifyControlStrategyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\ModifyControlStrategyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\ModifyControlStrategyShrinkRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\ModifyCustomizeFlowStrategyListRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\ModifyCustomizeFlowStrategyListResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\ModifyCustomizeFlowStrategyListShrinkRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\ModifyDeviceInfoRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\ModifyDeviceInfoResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\PageQueryWhiteListSettingRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\PageQueryWhiteListSettingResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\QueryBlackListStrategyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\QueryBlackListStrategyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\QueryControlStrategyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\QueryControlStrategyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\QueryCustomizeFlowStrategyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\QueryCustomizeFlowStrategyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\QuerySceneConfigsRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\QuerySceneConfigsResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\QueryVerifyDownloadTaskRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\QueryVerifyDownloadTaskResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\QueryVerifyFlowPackageRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\QueryVerifyFlowPackageResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\QueryVerifyInvokeSatisticRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\QueryVerifyInvokeSatisticResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\RemoveWhiteListSettingRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\RemoveWhiteListSettingResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\RemoveWhiteListSettingShrinkRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\UpdateAntCloudAuthSceneRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\UpdateAntCloudAuthSceneResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\UpdateSceneConfigRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\UpdateSceneConfigResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Vehicle5ItemQueryRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Vehicle5ItemQueryResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\VehicleInsureQueryRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\VehicleInsureQueryResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\VehicleMetaVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\VehicleMetaVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\VehicleMetaVerifyV2Request;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\VehicleMetaVerifyV2Response;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\VehicleQueryRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\VehicleQueryResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\VerifyMaterialRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\VerifyMaterialResponse;
use Darabonba\OpenApi\Exceptions\ClientException;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Cloudauth extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cloudauth', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Add AIGC Face Detection Capability.
     *
     * @param Request - AIGCFaceVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AIGCFaceVerifyResponse
     *
     * @param AIGCFaceVerifyRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AIGCFaceVerifyResponse
     */
    public function aIGCFaceVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->faceContrastPictureUrl) {
            @$query['FaceContrastPictureUrl'] = $request->faceContrastPictureUrl;
        }

        if (null !== $request->ossBucketName) {
            @$query['OssBucketName'] = $request->ossBucketName;
        }

        if (null !== $request->ossObjectName) {
            @$query['OssObjectName'] = $request->ossObjectName;
        }

        if (null !== $request->outerOrderNo) {
            @$query['OuterOrderNo'] = $request->outerOrderNo;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $body = [];
        if (null !== $request->faceContrastPicture) {
            @$body['FaceContrastPicture'] = $request->faceContrastPicture;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AIGCFaceVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AIGCFaceVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add AIGC Face Detection Capability.
     *
     * @param Request - AIGCFaceVerifyRequest
     *
     * @returns AIGCFaceVerifyResponse
     *
     * @param AIGCFaceVerifyRequest $request
     *
     * @return AIGCFaceVerifyResponse
     */
    public function aIGCFaceVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->aIGCFaceVerifyWithOptions($request, $runtime);
    }

    /**
     * Bank Card Element Verification Interface.
     *
     * @remarks
     * Bank card verification, including: two elements (name + bank card number), three elements (name + ID number + bank card number), and four elements (name + ID number + mobile phone number + bank card number) consistency verification.
     * - Service address:
     *   - Beijing region: cloudauth.cn-beijing.aliyuncs.com (IPv4) or cloudauth-dualstack.cn-beijing.aliyuncs.com (IPv6).
     *   - Shanghai region: cloudauth.cn-shanghai.aliyuncs.com (IPv4) or cloudauth-dualstack.cn-shanghai.aliyuncs.com (IPv6).
     * - Request method: POST and GET.
     * - Transfer protocol: HTTPS.
     *
     * @param Request - BankMetaVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BankMetaVerifyResponse
     *
     * @param BankMetaVerifyRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return BankMetaVerifyResponse
     */
    public function bankMetaVerifyWithOptions($request, $runtime)
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
            'action' => 'BankMetaVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BankMetaVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Bank Card Element Verification Interface.
     *
     * @remarks
     * Bank card verification, including: two elements (name + bank card number), three elements (name + ID number + bank card number), and four elements (name + ID number + mobile phone number + bank card number) consistency verification.
     * - Service address:
     *   - Beijing region: cloudauth.cn-beijing.aliyuncs.com (IPv4) or cloudauth-dualstack.cn-beijing.aliyuncs.com (IPv6).
     *   - Shanghai region: cloudauth.cn-shanghai.aliyuncs.com (IPv4) or cloudauth-dualstack.cn-shanghai.aliyuncs.com (IPv6).
     * - Request method: POST and GET.
     * - Transfer protocol: HTTPS.
     *
     * @param Request - BankMetaVerifyRequest
     *
     * @returns BankMetaVerifyResponse
     *
     * @param BankMetaVerifyRequest $request
     *
     * @return BankMetaVerifyResponse
     */
    public function bankMetaVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bankMetaVerifyWithOptions($request, $runtime);
    }

    /**
     * Financial-grade Pure Server-Side API for Face Comparison.
     *
     * @remarks
     * - API Name: CompareFaceVerify.
     * - Service Address: cloudauth.aliyuncs.com.
     * - Request Method: HTTPS POST and GET.
     * - API Description: An interface to achieve real-person authentication through server-side integration.
     * #### Photo Format Requirements
     * When performing face comparison, please upload 2 facial photos that meet all the following conditions:
     * - Recent photo/recent database photo, with a complete, clear, unobstructed face, natural expression, and facing the camera directly.
     * - Clear photo with normal exposure, no overly dark, overly bright, or halo effects on the face, and no significant angle deviation.
     * - Resolution not exceeding 1920*1080, at least 640*480, recommended to scale the shorter side to 720 pixels, with a compression ratio greater than 0.9.
     * - Photo size: <1MB.
     * - Supports 90, 180, and 270-degree photos; in cases of multiple faces, the largest face will be selected.
     *
     * @param Request - CompareFaceVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CompareFaceVerifyResponse
     *
     * @param CompareFaceVerifyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CompareFaceVerifyResponse
     */
    public function compareFaceVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->crop) {
            @$body['Crop'] = $request->crop;
        }

        if (null !== $request->outerOrderNo) {
            @$body['OuterOrderNo'] = $request->outerOrderNo;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->sceneId) {
            @$body['SceneId'] = $request->sceneId;
        }

        if (null !== $request->sourceCertifyId) {
            @$body['SourceCertifyId'] = $request->sourceCertifyId;
        }

        if (null !== $request->sourceFaceContrastPicture) {
            @$body['SourceFaceContrastPicture'] = $request->sourceFaceContrastPicture;
        }

        if (null !== $request->sourceFaceContrastPictureUrl) {
            @$body['SourceFaceContrastPictureUrl'] = $request->sourceFaceContrastPictureUrl;
        }

        if (null !== $request->sourceOssBucketName) {
            @$body['SourceOssBucketName'] = $request->sourceOssBucketName;
        }

        if (null !== $request->sourceOssObjectName) {
            @$body['SourceOssObjectName'] = $request->sourceOssObjectName;
        }

        if (null !== $request->targetCertifyId) {
            @$body['TargetCertifyId'] = $request->targetCertifyId;
        }

        if (null !== $request->targetFaceContrastPicture) {
            @$body['TargetFaceContrastPicture'] = $request->targetFaceContrastPicture;
        }

        if (null !== $request->targetFaceContrastPictureUrl) {
            @$body['TargetFaceContrastPictureUrl'] = $request->targetFaceContrastPictureUrl;
        }

        if (null !== $request->targetOssBucketName) {
            @$body['TargetOssBucketName'] = $request->targetOssBucketName;
        }

        if (null !== $request->targetOssObjectName) {
            @$body['TargetOssObjectName'] = $request->targetOssObjectName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CompareFaceVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CompareFaceVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Financial-grade Pure Server-Side API for Face Comparison.
     *
     * @remarks
     * - API Name: CompareFaceVerify.
     * - Service Address: cloudauth.aliyuncs.com.
     * - Request Method: HTTPS POST and GET.
     * - API Description: An interface to achieve real-person authentication through server-side integration.
     * #### Photo Format Requirements
     * When performing face comparison, please upload 2 facial photos that meet all the following conditions:
     * - Recent photo/recent database photo, with a complete, clear, unobstructed face, natural expression, and facing the camera directly.
     * - Clear photo with normal exposure, no overly dark, overly bright, or halo effects on the face, and no significant angle deviation.
     * - Resolution not exceeding 1920*1080, at least 640*480, recommended to scale the shorter side to 720 pixels, with a compression ratio greater than 0.9.
     * - Photo size: <1MB.
     * - Supports 90, 180, and 270-degree photos; in cases of multiple faces, the largest face will be selected.
     *
     * @param Request - CompareFaceVerifyRequest
     *
     * @returns CompareFaceVerifyResponse
     *
     * @param CompareFaceVerifyRequest $request
     *
     * @return CompareFaceVerifyResponse
     */
    public function compareFaceVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->compareFaceVerifyWithOptions($request, $runtime);
    }

    /**
     * Invoke CompareFaces for face comparison.
     *
     * @remarks
     * Request Method: Only supports sending requests via HTTPS POST.
     * Interface Description: Compares two face images and outputs the similarity score of the faces in the two images as the result.
     * - At least one of the specified comparison images should be a face photo (FacePic).
     * - If an image contains multiple faces, the algorithm will automatically select the largest face in the image.
     * - If one of the two comparison images does not detect a face, the system will return an error message stating \\"No face detected\\".
     * When uploading images, you need to provide the HTTP address or base64 encoding of the image.
     * - HTTP Address: A publicly accessible HTTP address. For example, `http://image-demo.img-cn-hangzhou.aliyuncs.com/example.jpg`.
     * - Base64 Encoding: An image encoded in base64, formatted as `base64://<base64 string of the image>`.
     * Image Restrictions
     * - Does not support relative or absolute paths for local images.
     * - Please keep the size of a single image within 2MB to avoid timeout during retrieval by the algorithm.
     * - The body of a single request has a size limit of 8MB; please calculate the total size of all images and other information in the request to ensure it does not exceed this limit.
     * - When using base64 to transmit images, the request method must be changed to POST; the header description such as `data:image/png;base64,` should be removed from the base64 string of the image.
     *
     * @param Request - CompareFacesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CompareFacesResponse
     *
     * @param CompareFacesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CompareFacesResponse
     */
    public function compareFacesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->sourceImageType) {
            @$body['SourceImageType'] = $request->sourceImageType;
        }

        if (null !== $request->sourceImageValue) {
            @$body['SourceImageValue'] = $request->sourceImageValue;
        }

        if (null !== $request->targetImageType) {
            @$body['TargetImageType'] = $request->targetImageType;
        }

        if (null !== $request->targetImageValue) {
            @$body['TargetImageValue'] = $request->targetImageValue;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CompareFaces',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CompareFacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke CompareFaces for face comparison.
     *
     * @remarks
     * Request Method: Only supports sending requests via HTTPS POST.
     * Interface Description: Compares two face images and outputs the similarity score of the faces in the two images as the result.
     * - At least one of the specified comparison images should be a face photo (FacePic).
     * - If an image contains multiple faces, the algorithm will automatically select the largest face in the image.
     * - If one of the two comparison images does not detect a face, the system will return an error message stating \\"No face detected\\".
     * When uploading images, you need to provide the HTTP address or base64 encoding of the image.
     * - HTTP Address: A publicly accessible HTTP address. For example, `http://image-demo.img-cn-hangzhou.aliyuncs.com/example.jpg`.
     * - Base64 Encoding: An image encoded in base64, formatted as `base64://<base64 string of the image>`.
     * Image Restrictions
     * - Does not support relative or absolute paths for local images.
     * - Please keep the size of a single image within 2MB to avoid timeout during retrieval by the algorithm.
     * - The body of a single request has a size limit of 8MB; please calculate the total size of all images and other information in the request to ensure it does not exceed this limit.
     * - When using base64 to transmit images, the request method must be changed to POST; the header description such as `data:image/png;base64,` should be removed from the base64 string of the image.
     *
     * @param Request - CompareFacesRequest
     *
     * @returns CompareFacesResponse
     *
     * @param CompareFacesRequest $request
     *
     * @return CompareFacesResponse
     */
    public function compareFaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->compareFacesWithOptions($request, $runtime);
    }

    /**
     * This interface is used to submit authentication materials for verification and comparison, and it synchronously returns the authentication result.
     *
     * @remarks
     * - Interface Name: ContrastFaceVerify.
     * - Service Address: cloudauth.aliyuncs.com.
     * - Request Method: HTTPS POST and GET.
     * - Interface Description: An interface for real person authentication through server-side integration.
     * #### Image Format Requirements
     * When performing real person authentication, please ensure that the images you upload meet all of the following conditions:
     * - Recent photo with a clear, unobstructed, and natural expression, facing the camera directly.
     * - Clear and properly exposed photo, without overly dark, bright, or haloed faces, and with minimal angle deviation.
     * - Resolution not exceeding 1920*1080, at least 640*480, with the shorter side recommended to be resized to 720 pixels, and a compression ratio greater than 0.9.
     * - Photo size: <1MB.
     * - Supports 90, 180, and 270-degree photos; in cases of multiple faces, the largest face will be selected.
     *
     * @param Request - ContrastFaceVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ContrastFaceVerifyResponse
     *
     * @param ContrastFaceVerifyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ContrastFaceVerifyResponse
     */
    public function contrastFaceVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->model) {
            @$query['Model'] = $request->model;
        }

        $body = [];
        if (null !== $request->certName) {
            @$body['CertName'] = $request->certName;
        }

        if (null !== $request->certNo) {
            @$body['CertNo'] = $request->certNo;
        }

        if (null !== $request->certType) {
            @$body['CertType'] = $request->certType;
        }

        if (null !== $request->certifyId) {
            @$body['CertifyId'] = $request->certifyId;
        }

        if (null !== $request->crop) {
            @$body['Crop'] = $request->crop;
        }

        if (null !== $request->deviceToken) {
            @$body['DeviceToken'] = $request->deviceToken;
        }

        if (null !== $request->encryptType) {
            @$body['EncryptType'] = $request->encryptType;
        }

        if (null !== $request->faceContrastFile) {
            @$body['FaceContrastFile'] = $request->faceContrastFile;
        }

        if (null !== $request->faceContrastPicture) {
            @$body['FaceContrastPicture'] = $request->faceContrastPicture;
        }

        if (null !== $request->faceContrastPictureUrl) {
            @$body['FaceContrastPictureUrl'] = $request->faceContrastPictureUrl;
        }

        if (null !== $request->ip) {
            @$body['Ip'] = $request->ip;
        }

        if (null !== $request->mobile) {
            @$body['Mobile'] = $request->mobile;
        }

        if (null !== $request->ossBucketName) {
            @$body['OssBucketName'] = $request->ossBucketName;
        }

        if (null !== $request->ossObjectName) {
            @$body['OssObjectName'] = $request->ossObjectName;
        }

        if (null !== $request->outerOrderNo) {
            @$body['OuterOrderNo'] = $request->outerOrderNo;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->sceneId) {
            @$body['SceneId'] = $request->sceneId;
        }

        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ContrastFaceVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ContrastFaceVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This interface is used to submit authentication materials for verification and comparison, and it synchronously returns the authentication result.
     *
     * @remarks
     * - Interface Name: ContrastFaceVerify.
     * - Service Address: cloudauth.aliyuncs.com.
     * - Request Method: HTTPS POST and GET.
     * - Interface Description: An interface for real person authentication through server-side integration.
     * #### Image Format Requirements
     * When performing real person authentication, please ensure that the images you upload meet all of the following conditions:
     * - Recent photo with a clear, unobstructed, and natural expression, facing the camera directly.
     * - Clear and properly exposed photo, without overly dark, bright, or haloed faces, and with minimal angle deviation.
     * - Resolution not exceeding 1920*1080, at least 640*480, with the shorter side recommended to be resized to 720 pixels, and a compression ratio greater than 0.9.
     * - Photo size: <1MB.
     * - Supports 90, 180, and 270-degree photos; in cases of multiple faces, the largest face will be selected.
     *
     * @param Request - ContrastFaceVerifyRequest
     *
     * @returns ContrastFaceVerifyResponse
     *
     * @param ContrastFaceVerifyRequest $request
     *
     * @return ContrastFaceVerifyResponse
     */
    public function contrastFaceVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->contrastFaceVerifyWithOptions($request, $runtime);
    }

    /**
     * @param ContrastFaceVerifyAdvanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ContrastFaceVerifyResponse
     */
    public function contrastFaceVerifyAdvance($request, $runtime)
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
            'Product' => 'Cloudauth',
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
        $contrastFaceVerifyReq = new ContrastFaceVerifyRequest([]);
        Utils::convert($request, $contrastFaceVerifyReq);
        if (null !== $request->faceContrastFileObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->faceContrastFileObject,
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
            $contrastFaceVerifyReq->faceContrastFile = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->contrastFaceVerifyWithOptions($contrastFaceVerifyReq, $runtime);
    }

    /**
     * Create a financial-grade authentication scenario.
     *
     * @remarks
     * Request Method: Supports sending requests via HTTPS POST and GET methods.
     * > The authorization key is valid for 30 minutes and cannot be reused. It is recommended to reacquire it before each activation.
     *
     * @param Request - CreateAntCloudAuthSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAntCloudAuthSceneResponse
     *
     * @param CreateAntCloudAuthSceneRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateAntCloudAuthSceneResponse
     */
    public function createAntCloudAuthSceneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bindMiniProgram) {
            @$query['BindMiniProgram'] = $request->bindMiniProgram;
        }

        if (null !== $request->checkFileBody) {
            @$query['CheckFileBody'] = $request->checkFileBody;
        }

        if (null !== $request->checkFileName) {
            @$query['CheckFileName'] = $request->checkFileName;
        }

        if (null !== $request->miniProgramName) {
            @$query['MiniProgramName'] = $request->miniProgramName;
        }

        if (null !== $request->platform) {
            @$query['Platform'] = $request->platform;
        }

        if (null !== $request->returnPicCount) {
            @$query['ReturnPicCount'] = $request->returnPicCount;
        }

        if (null !== $request->returnVideoLength) {
            @$query['ReturnVideoLength'] = $request->returnVideoLength;
        }

        if (null !== $request->sceneName) {
            @$query['SceneName'] = $request->sceneName;
        }

        if (null !== $request->storeImage) {
            @$query['StoreImage'] = $request->storeImage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAntCloudAuthScene',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAntCloudAuthSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a financial-grade authentication scenario.
     *
     * @remarks
     * Request Method: Supports sending requests via HTTPS POST and GET methods.
     * > The authorization key is valid for 30 minutes and cannot be reused. It is recommended to reacquire it before each activation.
     *
     * @param Request - CreateAntCloudAuthSceneRequest
     *
     * @returns CreateAntCloudAuthSceneResponse
     *
     * @param CreateAntCloudAuthSceneRequest $request
     *
     * @return CreateAntCloudAuthSceneResponse
     */
    public function createAntCloudAuthScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAntCloudAuthSceneWithOptions($request, $runtime);
    }

    /**
     * Call CreateAuthKey to get the authorization key, which is used for offline face recognition SDK activation.
     *
     * @remarks
     * Request Method: Supports sending requests via HTTPS POST and GET methods.
     * > The authorization key is valid for 30 minutes and cannot be reused. It is recommended to re-obtain it before each activation.
     *
     * @param Request - CreateAuthKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAuthKeyResponse
     *
     * @param CreateAuthKeyRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateAuthKeyResponse
     */
    public function createAuthKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authYears) {
            @$query['AuthYears'] = $request->authYears;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->test) {
            @$query['Test'] = $request->test;
        }

        if (null !== $request->userDeviceId) {
            @$query['UserDeviceId'] = $request->userDeviceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAuthKey',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAuthKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Call CreateAuthKey to get the authorization key, which is used for offline face recognition SDK activation.
     *
     * @remarks
     * Request Method: Supports sending requests via HTTPS POST and GET methods.
     * > The authorization key is valid for 30 minutes and cannot be reused. It is recommended to re-obtain it before each activation.
     *
     * @param Request - CreateAuthKeyRequest
     *
     * @returns CreateAuthKeyResponse
     *
     * @param CreateAuthKeyRequest $request
     *
     * @return CreateAuthKeyResponse
     */
    public function createAuthKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAuthKeyWithOptions($request, $runtime);
    }

    /**
     * Create Cloud Scene.
     *
     * @remarks
     * Request Method: Supports sending requests via HTTPS POST and GET methods.
     * > The authorization key is valid for 30 minutes and cannot be reused. It is recommended to reacquire it before each activation.
     *
     * @param Request - CreateCloudauthstSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCloudauthstSceneResponse
     *
     * @param CreateCloudauthstSceneRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateCloudauthstSceneResponse
     */
    public function createCloudauthstSceneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->sceneName) {
            @$query['SceneName'] = $request->sceneName;
        }

        if (null !== $request->storeImage) {
            @$query['StoreImage'] = $request->storeImage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCloudauthstScene',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCloudauthstSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Cloud Scene.
     *
     * @remarks
     * Request Method: Supports sending requests via HTTPS POST and GET methods.
     * > The authorization key is valid for 30 minutes and cannot be reused. It is recommended to reacquire it before each activation.
     *
     * @param Request - CreateCloudauthstSceneRequest
     *
     * @returns CreateCloudauthstSceneResponse
     *
     * @param CreateCloudauthstSceneRequest $request
     *
     * @return CreateCloudauthstSceneResponse
     */
    public function createCloudauthstScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCloudauthstSceneWithOptions($request, $runtime);
    }

    /**
     * Create Scene Configuration.
     *
     * @remarks
     * Request Method: Supports sending requests via HTTPS POST.
     * Request Address: cloudauth.aliyuncs.com.
     * > The authorization key is valid for 30 minutes and cannot be reused. It is recommended to reacquire it before each activation.
     *
     * @param Request - CreateSceneConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSceneConfigResponse
     *
     * @param CreateSceneConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateSceneConfigResponse
     */
    public function createSceneConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->config) {
            @$body['config'] = $request->config;
        }

        if (null !== $request->sceneId) {
            @$body['sceneId'] = $request->sceneId;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSceneConfig',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSceneConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Scene Configuration.
     *
     * @remarks
     * Request Method: Supports sending requests via HTTPS POST.
     * Request Address: cloudauth.aliyuncs.com.
     * > The authorization key is valid for 30 minutes and cannot be reused. It is recommended to reacquire it before each activation.
     *
     * @param Request - CreateSceneConfigRequest
     *
     * @returns CreateSceneConfigResponse
     *
     * @param CreateSceneConfigRequest $request
     *
     * @return CreateSceneConfigResponse
     */
    public function createSceneConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSceneConfigWithOptions($request, $runtime);
    }

    /**
     * Call CreateVerifySetting to create a verification scenario configuration. This operation is equivalent to creating a new verification scenario on the console.
     *
     * @remarks
     * Request Method: Only supports sending requests via HTTPS POST.
     *
     * @param Request - CreateVerifySettingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVerifySettingResponse
     *
     * @param CreateVerifySettingRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateVerifySettingResponse
     */
    public function createVerifySettingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizName) {
            @$query['BizName'] = $request->bizName;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->guideStep) {
            @$query['GuideStep'] = $request->guideStep;
        }

        if (null !== $request->privacyStep) {
            @$query['PrivacyStep'] = $request->privacyStep;
        }

        if (null !== $request->resultStep) {
            @$query['ResultStep'] = $request->resultStep;
        }

        if (null !== $request->solution) {
            @$query['Solution'] = $request->solution;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateVerifySetting',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVerifySettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Call CreateVerifySetting to create a verification scenario configuration. This operation is equivalent to creating a new verification scenario on the console.
     *
     * @remarks
     * Request Method: Only supports sending requests via HTTPS POST.
     *
     * @param Request - CreateVerifySettingRequest
     *
     * @returns CreateVerifySettingResponse
     *
     * @param CreateVerifySettingRequest $request
     *
     * @return CreateVerifySettingResponse
     */
    public function createVerifySetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVerifySettingWithOptions($request, $runtime);
    }

    /**
     * Create Whitelist.
     *
     * @remarks
     * Request Method: Only supports sending requests via HTTPS POST.
     *
     * @param Request - CreateWhitelistSettingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWhitelistSettingResponse
     *
     * @param CreateWhitelistSettingRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateWhitelistSettingResponse
     */
    public function createWhitelistSettingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certNo) {
            @$query['CertNo'] = $request->certNo;
        }

        if (null !== $request->certifyId) {
            @$query['CertifyId'] = $request->certifyId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        if (null !== $request->serviceCode) {
            @$query['ServiceCode'] = $request->serviceCode;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        if (null !== $request->validDay) {
            @$query['ValidDay'] = $request->validDay;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateWhitelistSetting',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateWhitelistSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Whitelist.
     *
     * @remarks
     * Request Method: Only supports sending requests via HTTPS POST.
     *
     * @param Request - CreateWhitelistSettingRequest
     *
     * @returns CreateWhitelistSettingResponse
     *
     * @param CreateWhitelistSettingRequest $request
     *
     * @return CreateWhitelistSettingResponse
     */
    public function createWhitelistSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWhitelistSettingWithOptions($request, $runtime);
    }

    /**
     * Product Credential Verification.
     *
     * @remarks
     * Upload e-commerce product images to perform tampering, quality (clarity), and similar image detection, returning risk labels and scores.
     *
     * @param Request - CredentialProductVerifyV2Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CredentialProductVerifyV2Response
     *
     * @param CredentialProductVerifyV2Request $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CredentialProductVerifyV2Response
     */
    public function credentialProductVerifyV2WithOptions($request, $runtime)
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

        if (null !== $request->merchantId) {
            @$query['MerchantId'] = $request->merchantId;
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
            'action' => 'CredentialProductVerifyV2',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CredentialProductVerifyV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Product Credential Verification.
     *
     * @remarks
     * Upload e-commerce product images to perform tampering, quality (clarity), and similar image detection, returning risk labels and scores.
     *
     * @param Request - CredentialProductVerifyV2Request
     *
     * @returns CredentialProductVerifyV2Response
     *
     * @param CredentialProductVerifyV2Request $request
     *
     * @return CredentialProductVerifyV2Response
     */
    public function credentialProductVerifyV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->credentialProductVerifyV2WithOptions($request, $runtime);
    }

    /**
     * @param CredentialProductVerifyV2AdvanceRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return CredentialProductVerifyV2Response
     */
    public function credentialProductVerifyV2Advance($request, $runtime)
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
            'Product' => 'Cloudauth',
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
        $credentialProductVerifyV2Req = new CredentialProductVerifyV2Request([]);
        Utils::convert($request, $credentialProductVerifyV2Req);
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
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $credentialProductVerifyV2Req->imageFile = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->credentialProductVerifyV2WithOptions($credentialProductVerifyV2Req, $runtime);
    }

    /**
     * Credential verification.
     *
     * @param tmpReq - CredentialVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CredentialVerifyResponse
     *
     * @param CredentialVerifyRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CredentialVerifyResponse
     */
    public function credentialVerifyWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CredentialVerifyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->merchantDetail) {
            $request->merchantDetailShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->merchantDetail, 'MerchantDetail', 'json');
        }

        $query = [];
        if (null !== $request->certNum) {
            @$query['CertNum'] = $request->certNum;
        }

        if (null !== $request->credName) {
            @$query['CredName'] = $request->credName;
        }

        if (null !== $request->credType) {
            @$query['CredType'] = $request->credType;
        }

        if (null !== $request->identifyNum) {
            @$query['IdentifyNum'] = $request->identifyNum;
        }

        if (null !== $request->imageUrl) {
            @$query['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->isCheck) {
            @$query['IsCheck'] = $request->isCheck;
        }

        if (null !== $request->isOCR) {
            @$query['IsOCR'] = $request->isOCR;
        }

        if (null !== $request->merchantDetailShrink) {
            @$query['MerchantDetail'] = $request->merchantDetailShrink;
        }

        if (null !== $request->merchantId) {
            @$query['MerchantId'] = $request->merchantId;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->prompt) {
            @$query['Prompt'] = $request->prompt;
        }

        if (null !== $request->promptModel) {
            @$query['PromptModel'] = $request->promptModel;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $body = [];
        if (null !== $request->imageContext) {
            @$body['ImageContext'] = $request->imageContext;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CredentialVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CredentialVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Credential verification.
     *
     * @param Request - CredentialVerifyRequest
     *
     * @returns CredentialVerifyResponse
     *
     * @param CredentialVerifyRequest $request
     *
     * @return CredentialVerifyResponse
     */
    public function credentialVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->credentialVerifyWithOptions($request, $runtime);
    }

    /**
     * Credential Verification.
     *
     * @remarks
     * Input credential image information, perform image tampering and forgery detection, and image semantic understanding. Return the risk detection results.
     *
     * @param tmpReq - CredentialVerifyV2Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CredentialVerifyV2Response
     *
     * @param CredentialVerifyV2Request $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return CredentialVerifyV2Response
     */
    public function credentialVerifyV2WithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CredentialVerifyV2ShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->merchantDetail) {
            $request->merchantDetailShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->merchantDetail, 'MerchantDetail', 'json');
        }

        $query = [];
        if (null !== $request->certNum) {
            @$query['CertNum'] = $request->certNum;
        }

        if (null !== $request->credName) {
            @$query['CredName'] = $request->credName;
        }

        if (null !== $request->credType) {
            @$query['CredType'] = $request->credType;
        }

        if (null !== $request->identifyNum) {
            @$query['IdentifyNum'] = $request->identifyNum;
        }

        if (null !== $request->imageUrl) {
            @$query['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->isCheck) {
            @$query['IsCheck'] = $request->isCheck;
        }

        if (null !== $request->isOcr) {
            @$query['IsOcr'] = $request->isOcr;
        }

        if (null !== $request->merchantDetailShrink) {
            @$query['MerchantDetail'] = $request->merchantDetailShrink;
        }

        if (null !== $request->merchantId) {
            @$query['MerchantId'] = $request->merchantId;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->prompt) {
            @$query['Prompt'] = $request->prompt;
        }

        if (null !== $request->promptModel) {
            @$query['PromptModel'] = $request->promptModel;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $body = [];
        if (null !== $request->imageContext) {
            @$body['ImageContext'] = $request->imageContext;
        }

        if (null !== $request->imageFile) {
            @$body['ImageFile'] = $request->imageFile;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CredentialVerifyV2',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CredentialVerifyV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Credential Verification.
     *
     * @remarks
     * Input credential image information, perform image tampering and forgery detection, and image semantic understanding. Return the risk detection results.
     *
     * @param Request - CredentialVerifyV2Request
     *
     * @returns CredentialVerifyV2Response
     *
     * @param CredentialVerifyV2Request $request
     *
     * @return CredentialVerifyV2Response
     */
    public function credentialVerifyV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->credentialVerifyV2WithOptions($request, $runtime);
    }

    /**
     * @param CredentialVerifyV2AdvanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CredentialVerifyV2Response
     */
    public function credentialVerifyV2Advance($request, $runtime)
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
            'Product' => 'Cloudauth',
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
        $credentialVerifyV2Req = new CredentialVerifyV2Request([]);
        Utils::convert($request, $credentialVerifyV2Req);
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
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $credentialVerifyV2Req->imageFile = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->credentialVerifyV2WithOptions($credentialVerifyV2Req, $runtime);
    }

    /**
     * Face Credential Verification Service.
     *
     * @remarks
     * > The Face Deepfake Detection API is currently in the free public beta stage, which will end on August 30, 2024, at 23:59:59. During the public beta, the QPS (Queries Per Second) cannot exceed 3 times/second.
     * - Service address: cloudauth.aliyuncs.com (IPv4) or cloudauth-dualstack.aliyuncs.com (IPv6).
     * - Request method: POST and GET.
     * - Transfer protocol: HTTPS.
     *
     * @param Request - DeepfakeDetectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeepfakeDetectResponse
     *
     * @param DeepfakeDetectRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeepfakeDetectResponse
     */
    public function deepfakeDetectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->faceInputType) {
            @$query['FaceInputType'] = $request->faceInputType;
        }

        if (null !== $request->faceUrl) {
            @$query['FaceUrl'] = $request->faceUrl;
        }

        if (null !== $request->outerOrderNo) {
            @$query['OuterOrderNo'] = $request->outerOrderNo;
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
            'action' => 'DeepfakeDetect',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeepfakeDetectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Face Credential Verification Service.
     *
     * @remarks
     * > The Face Deepfake Detection API is currently in the free public beta stage, which will end on August 30, 2024, at 23:59:59. During the public beta, the QPS (Queries Per Second) cannot exceed 3 times/second.
     * - Service address: cloudauth.aliyuncs.com (IPv4) or cloudauth-dualstack.aliyuncs.com (IPv6).
     * - Request method: POST and GET.
     * - Transfer protocol: HTTPS.
     *
     * @param Request - DeepfakeDetectRequest
     *
     * @returns DeepfakeDetectResponse
     *
     * @param DeepfakeDetectRequest $request
     *
     * @return DeepfakeDetectResponse
     */
    public function deepfakeDetect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deepfakeDetectWithOptions($request, $runtime);
    }

    /**
     * Delete All Custom Flow Control Strategies.
     *
     * @remarks
     * Request Method: Supports sending requests via HTTPS POST and GET methods.
     * > The authorization key is valid for 30 minutes and cannot be reused. It is recommended to reacquire it before each activation.
     *
     * @param Request - DeleteAllCustomizeFlowStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAllCustomizeFlowStrategyResponse
     *
     * @param DeleteAllCustomizeFlowStrategyRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteAllCustomizeFlowStrategyResponse
     */
    public function deleteAllCustomizeFlowStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAllCustomizeFlowStrategy',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAllCustomizeFlowStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete All Custom Flow Control Strategies.
     *
     * @remarks
     * Request Method: Supports sending requests via HTTPS POST and GET methods.
     * > The authorization key is valid for 30 minutes and cannot be reused. It is recommended to reacquire it before each activation.
     *
     * @param Request - DeleteAllCustomizeFlowStrategyRequest
     *
     * @returns DeleteAllCustomizeFlowStrategyResponse
     *
     * @param DeleteAllCustomizeFlowStrategyRequest $request
     *
     * @return DeleteAllCustomizeFlowStrategyResponse
     */
    public function deleteAllCustomizeFlowStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAllCustomizeFlowStrategyWithOptions($request, $runtime);
    }

    /**
     * Delete Watermark Scene.
     *
     * @remarks
     * - Service Address: cloudauth.aliyuncs.com.
     * - Request Method: HTTPS POST and GET.
     *
     * @param Request - DeleteAntCloudAuthSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAntCloudAuthSceneResponse
     *
     * @param DeleteAntCloudAuthSceneRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteAntCloudAuthSceneResponse
     */
    public function deleteAntCloudAuthSceneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAntCloudAuthScene',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAntCloudAuthSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Watermark Scene.
     *
     * @remarks
     * - Service Address: cloudauth.aliyuncs.com.
     * - Request Method: HTTPS POST and GET.
     *
     * @param Request - DeleteAntCloudAuthSceneRequest
     *
     * @returns DeleteAntCloudAuthSceneResponse
     *
     * @param DeleteAntCloudAuthSceneRequest $request
     *
     * @return DeleteAntCloudAuthSceneResponse
     */
    public function deleteAntCloudAuthScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAntCloudAuthSceneWithOptions($request, $runtime);
    }

    /**
     * Delete Black and White List Policy.
     *
     * @remarks
     * Request Method: Only supports sending requests via HTTPS POST method.
     *
     * @param Request - DeleteBlackListStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteBlackListStrategyResponse
     *
     * @param DeleteBlackListStrategyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteBlackListStrategyResponse
     */
    public function deleteBlackListStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->productName) {
            @$query['ProductName'] = $request->productName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteBlackListStrategy',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteBlackListStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Black and White List Policy.
     *
     * @remarks
     * Request Method: Only supports sending requests via HTTPS POST method.
     *
     * @param Request - DeleteBlackListStrategyRequest
     *
     * @returns DeleteBlackListStrategyResponse
     *
     * @param DeleteBlackListStrategyRequest $request
     *
     * @return DeleteBlackListStrategyResponse
     */
    public function deleteBlackListStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBlackListStrategyWithOptions($request, $runtime);
    }

    /**
     * Delete Cloud Scene.
     *
     * @remarks
     * Request Method: Supports sending requests using HTTPS POST and GET methods.
     * > The authorization key is valid for 30 minutes and cannot be reused. It is recommended to re-obtain it before each activation.
     *
     * @param Request - DeleteCloudauthstSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCloudauthstSceneResponse
     *
     * @param DeleteCloudauthstSceneRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteCloudauthstSceneResponse
     */
    public function deleteCloudauthstSceneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCloudauthstScene',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCloudauthstSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Cloud Scene.
     *
     * @remarks
     * Request Method: Supports sending requests using HTTPS POST and GET methods.
     * > The authorization key is valid for 30 minutes and cannot be reused. It is recommended to re-obtain it before each activation.
     *
     * @param Request - DeleteCloudauthstSceneRequest
     *
     * @returns DeleteCloudauthstSceneResponse
     *
     * @param DeleteCloudauthstSceneRequest $request
     *
     * @return DeleteCloudauthstSceneResponse
     */
    public function deleteCloudauthstScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCloudauthstSceneWithOptions($request, $runtime);
    }

    /**
     * Delete Security Control Strategy.
     *
     * @remarks
     * Request Method: Supports sending requests via HTTPS POST.
     * Request URL: cloudauth.aliyuncs.com.
     *
     * @param Request - DeleteControlStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteControlStrategyResponse
     *
     * @param DeleteControlStrategyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteControlStrategyResponse
     */
    public function deleteControlStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiName) {
            @$query['ApiName'] = $request->apiName;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteControlStrategy',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteControlStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Security Control Strategy.
     *
     * @remarks
     * Request Method: Supports sending requests via HTTPS POST.
     * Request URL: cloudauth.aliyuncs.com.
     *
     * @param Request - DeleteControlStrategyRequest
     *
     * @returns DeleteControlStrategyResponse
     *
     * @param DeleteControlStrategyRequest $request
     *
     * @return DeleteControlStrategyResponse
     */
    public function deleteControlStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteControlStrategyWithOptions($request, $runtime);
    }

    /**
     * Delete Customized Flow Control Strategy.
     *
     * @remarks
     * Request Method: Supports sending requests using HTTPS POST and GET methods.
     * > The authorization key is valid for 30 minutes and cannot be reused. It is recommended to reacquire it before each activation.
     *
     * @param Request - DeleteCustomizeFlowStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCustomizeFlowStrategyResponse
     *
     * @param DeleteCustomizeFlowStrategyRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteCustomizeFlowStrategyResponse
     */
    public function deleteCustomizeFlowStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiName) {
            @$query['ApiName'] = $request->apiName;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCustomizeFlowStrategy',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCustomizeFlowStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Customized Flow Control Strategy.
     *
     * @remarks
     * Request Method: Supports sending requests using HTTPS POST and GET methods.
     * > The authorization key is valid for 30 minutes and cannot be reused. It is recommended to reacquire it before each activation.
     *
     * @param Request - DeleteCustomizeFlowStrategyRequest
     *
     * @returns DeleteCustomizeFlowStrategyResponse
     *
     * @param DeleteCustomizeFlowStrategyRequest $request
     *
     * @return DeleteCustomizeFlowStrategyResponse
     */
    public function deleteCustomizeFlowStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomizeFlowStrategyWithOptions($request, $runtime);
    }

    /**
     * Financial Level Sensitive Data Deletion Interface.
     *
     * @remarks
     * Deletes all personal information fields in the request, including name, ID number, phone number, IP, images, videos, and device information, etc.
     *
     * @param Request - DeleteFaceVerifyResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFaceVerifyResultResponse
     *
     * @param DeleteFaceVerifyResultRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteFaceVerifyResultResponse
     */
    public function deleteFaceVerifyResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certifyId) {
            @$query['CertifyId'] = $request->certifyId;
        }

        if (null !== $request->deleteAfterQuery) {
            @$query['DeleteAfterQuery'] = $request->deleteAfterQuery;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteFaceVerifyResult',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteFaceVerifyResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Financial Level Sensitive Data Deletion Interface.
     *
     * @remarks
     * Deletes all personal information fields in the request, including name, ID number, phone number, IP, images, videos, and device information, etc.
     *
     * @param Request - DeleteFaceVerifyResultRequest
     *
     * @returns DeleteFaceVerifyResultResponse
     *
     * @param DeleteFaceVerifyResultRequest $request
     *
     * @return DeleteFaceVerifyResultResponse
     */
    public function deleteFaceVerifyResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFaceVerifyResultWithOptions($request, $runtime);
    }

    /**
     * Delete Scene Configuration.
     *
     * @remarks
     * - Request Method: Supports sending requests via HTTPS POST and GET methods.
     * - Request URL: cloudauth.aliyuncs.com.
     * > The authorization key is valid for 30 minutes and cannot be reused. It is recommended to re-obtain it before each activation.
     *
     * @param Request - DeleteSceneConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSceneConfigResponse
     *
     * @param DeleteSceneConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteSceneConfigResponse
     */
    public function deleteSceneConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->sceneConfigId) {
            @$body['sceneConfigId'] = $request->sceneConfigId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteSceneConfig',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSceneConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Scene Configuration.
     *
     * @remarks
     * - Request Method: Supports sending requests via HTTPS POST and GET methods.
     * - Request URL: cloudauth.aliyuncs.com.
     * > The authorization key is valid for 30 minutes and cannot be reused. It is recommended to re-obtain it before each activation.
     *
     * @param Request - DeleteSceneConfigRequest
     *
     * @returns DeleteSceneConfigResponse
     *
     * @param DeleteSceneConfigRequest $request
     *
     * @return DeleteSceneConfigResponse
     */
    public function deleteSceneConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSceneConfigWithOptions($request, $runtime);
    }

    /**
     * Delete Whitelist Configuration.
     *
     * @remarks
     * Request Method: Only supports sending requests via HTTPS POST method.
     *
     * @param Request - DeleteWhitelistSettingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWhitelistSettingResponse
     *
     * @param DeleteWhitelistSettingRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteWhitelistSettingResponse
     */
    public function deleteWhitelistSettingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ids) {
            @$query['Ids'] = $request->ids;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->serviceCode) {
            @$query['ServiceCode'] = $request->serviceCode;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteWhitelistSetting',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteWhitelistSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Whitelist Configuration.
     *
     * @remarks
     * Request Method: Only supports sending requests via HTTPS POST method.
     *
     * @param Request - DeleteWhitelistSettingRequest
     *
     * @returns DeleteWhitelistSettingResponse
     *
     * @param DeleteWhitelistSettingRequest $request
     *
     * @return DeleteWhitelistSettingResponse
     */
    public function deleteWhitelistSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWhitelistSettingWithOptions($request, $runtime);
    }

    /**
     * Query the User Status of Ant Blockchain.
     *
     * @remarks
     * Request Method: Supports sending requests via HTTPS POST and GET methods.
     * > The authorization key is valid for 30 minutes and cannot be reused. It is recommended to re-obtain it before each activation.
     *
     * @param Request - DescribeAntAndCloudAuthUserStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAntAndCloudAuthUserStatusResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeAntAndCloudAuthUserStatusResponse
     */
    public function describeAntAndCloudAuthUserStatusWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeAntAndCloudAuthUserStatus',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAntAndCloudAuthUserStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the User Status of Ant Blockchain.
     *
     * @remarks
     * Request Method: Supports sending requests via HTTPS POST and GET methods.
     * > The authorization key is valid for 30 minutes and cannot be reused. It is recommended to re-obtain it before each activation.
     *
     * @returns DescribeAntAndCloudAuthUserStatusResponse
     *
     * @return DescribeAntAndCloudAuthUserStatusResponse
     */
    public function describeAntAndCloudAuthUserStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntAndCloudAuthUserStatusWithOptions($runtime);
    }

    /**
     * 获取结果.
     *
     * @param Request - DescribeAuthVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAuthVerifyResponse
     *
     * @param DescribeAuthVerifyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeAuthVerifyResponse
     */
    public function describeAuthVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->certifyId) {
            @$body['CertifyId'] = $request->certifyId;
        }

        if (null !== $request->sceneId) {
            @$body['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeAuthVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAuthVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取结果.
     *
     * @param Request - DescribeAuthVerifyRequest
     *
     * @returns DescribeAuthVerifyResponse
     *
     * @param DescribeAuthVerifyRequest $request
     *
     * @return DescribeAuthVerifyResponse
     */
    public function describeAuthVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuthVerifyWithOptions($request, $runtime);
    }

    /**
     * Obtain Authentication Results from Image Element Verification.
     *
     * @remarks
     * After receiving the callback notification, you can use this interface on the server side to obtain the corresponding authentication status and information.
     *
     * @param Request - DescribeCardVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCardVerifyResponse
     *
     * @param DescribeCardVerifyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeCardVerifyResponse
     */
    public function describeCardVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certifyId) {
            @$query['CertifyId'] = $request->certifyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCardVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCardVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain Authentication Results from Image Element Verification.
     *
     * @remarks
     * After receiving the callback notification, you can use this interface on the server side to obtain the corresponding authentication status and information.
     *
     * @param Request - DescribeCardVerifyRequest
     *
     * @returns DescribeCardVerifyResponse
     *
     * @param DescribeCardVerifyRequest $request
     *
     * @return DescribeCardVerifyResponse
     */
    public function describeCardVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCardVerifyWithOptions($request, $runtime);
    }

    /**
     * Query Dashboard Data.
     *
     * @remarks
     * Request Method: Supports sending requests via HTTPS POST and GET methods.
     * > The authorization key is valid for 30 minutes and cannot be reused. It is recommended to reacquire it before each activation.
     *
     * @param Request - DescribeCloudauthstSceneListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCloudauthstSceneListResponse
     *
     * @param DescribeCloudauthstSceneListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeCloudauthstSceneListResponse
     */
    public function describeCloudauthstSceneListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCloudauthstSceneList',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCloudauthstSceneListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Dashboard Data.
     *
     * @remarks
     * Request Method: Supports sending requests via HTTPS POST and GET methods.
     * > The authorization key is valid for 30 minutes and cannot be reused. It is recommended to reacquire it before each activation.
     *
     * @param Request - DescribeCloudauthstSceneListRequest
     *
     * @returns DescribeCloudauthstSceneListResponse
     *
     * @param DescribeCloudauthstSceneListRequest $request
     *
     * @return DescribeCloudauthstSceneListResponse
     */
    public function describeCloudauthstSceneList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudauthstSceneListWithOptions($request, $runtime);
    }

    /**
     * Call DescribeDeviceInfo to query device-related information, such as the validity period of authorization, business identifiers customized by the access party, and device ID, etc.
     *
     * @remarks
     * Request Method: Supports sending requests using HTTPS POST and GET methods.
     *
     * @param Request - DescribeDeviceInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDeviceInfoResponse
     *
     * @param DescribeDeviceInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDeviceInfoResponse
     */
    public function describeDeviceInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->expiredEndDay) {
            @$query['ExpiredEndDay'] = $request->expiredEndDay;
        }

        if (null !== $request->expiredStartDay) {
            @$query['ExpiredStartDay'] = $request->expiredStartDay;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->userDeviceId) {
            @$query['UserDeviceId'] = $request->userDeviceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDeviceInfo',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDeviceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Call DescribeDeviceInfo to query device-related information, such as the validity period of authorization, business identifiers customized by the access party, and device ID, etc.
     *
     * @remarks
     * Request Method: Supports sending requests using HTTPS POST and GET methods.
     *
     * @param Request - DescribeDeviceInfoRequest
     *
     * @returns DescribeDeviceInfoResponse
     *
     * @param DescribeDeviceInfoRequest $request
     *
     * @return DescribeDeviceInfoResponse
     */
    public function describeDeviceInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeviceInfoWithOptions($request, $runtime);
    }

    /**
     * Financial-Grade Face Guard Service.
     *
     * @param Request - DescribeFaceGuardRiskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFaceGuardRiskResponse
     *
     * @param DescribeFaceGuardRiskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeFaceGuardRiskResponse
     */
    public function describeFaceGuardRiskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->deviceToken) {
            @$query['DeviceToken'] = $request->deviceToken;
        }

        if (null !== $request->outerOrderNo) {
            @$query['OuterOrderNo'] = $request->outerOrderNo;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeFaceGuardRisk',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFaceGuardRiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Financial-Grade Face Guard Service.
     *
     * @param Request - DescribeFaceGuardRiskRequest
     *
     * @returns DescribeFaceGuardRiskResponse
     *
     * @param DescribeFaceGuardRiskRequest $request
     *
     * @return DescribeFaceGuardRiskResponse
     */
    public function describeFaceGuardRisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFaceGuardRiskWithOptions($request, $runtime);
    }

    /**
     * After the mobile end of the integrator receives the callback, its server can call this interface to obtain the corresponding authentication status and authentication information.
     *
     * @remarks
     * - Service Address: cloudauth.aliyuncs.com.
     * - Request Method: HTTPS POST and GET.
     *
     * @param Request - DescribeFaceVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFaceVerifyResponse
     *
     * @param DescribeFaceVerifyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeFaceVerifyResponse
     */
    public function describeFaceVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certifyId) {
            @$query['CertifyId'] = $request->certifyId;
        }

        if (null !== $request->pictureReturnType) {
            @$query['PictureReturnType'] = $request->pictureReturnType;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeFaceVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFaceVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After the mobile end of the integrator receives the callback, its server can call this interface to obtain the corresponding authentication status and authentication information.
     *
     * @remarks
     * - Service Address: cloudauth.aliyuncs.com.
     * - Request Method: HTTPS POST and GET.
     *
     * @param Request - DescribeFaceVerifyRequest
     *
     * @returns DescribeFaceVerifyResponse
     *
     * @param DescribeFaceVerifyRequest $request
     *
     * @return DescribeFaceVerifyResponse
     */
    public function describeFaceVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFaceVerifyWithOptions($request, $runtime);
    }

    /**
     * 查询任务导出记录.
     *
     * @param Request - DescribeInfoCheckExportRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInfoCheckExportRecordResponse
     *
     * @param DescribeInfoCheckExportRecordRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeInfoCheckExportRecordResponse
     */
    public function describeInfoCheckExportRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInfoCheckExportRecord',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInfoCheckExportRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询任务导出记录.
     *
     * @param Request - DescribeInfoCheckExportRecordRequest
     *
     * @returns DescribeInfoCheckExportRecordResponse
     *
     * @param DescribeInfoCheckExportRecordRequest $request
     *
     * @return DescribeInfoCheckExportRecordResponse
     */
    public function describeInfoCheckExportRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInfoCheckExportRecordWithOptions($request, $runtime);
    }

    /**
     * Query the cloud scenario authentication records of a specific region.
     *
     * @remarks
     * Request Method: Supports sending requests via HTTPS POST and GET methods.
     * > The authorization key is valid for 30 minutes and cannot be reused. It is recommended to re-obtain it before each activation.
     *
     * @param Request - DescribeListAntCloudAuthScenesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeListAntCloudAuthScenesResponse
     *
     * @param DescribeListAntCloudAuthScenesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeListAntCloudAuthScenesResponse
     */
    public function describeListAntCloudAuthScenesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeListAntCloudAuthScenes',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeListAntCloudAuthScenesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the cloud scenario authentication records of a specific region.
     *
     * @remarks
     * Request Method: Supports sending requests via HTTPS POST and GET methods.
     * > The authorization key is valid for 30 minutes and cannot be reused. It is recommended to re-obtain it before each activation.
     *
     * @param Request - DescribeListAntCloudAuthScenesRequest
     *
     * @returns DescribeListAntCloudAuthScenesResponse
     *
     * @param DescribeListAntCloudAuthScenesRequest $request
     *
     * @return DescribeListAntCloudAuthScenesResponse
     */
    public function describeListAntCloudAuthScenes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeListAntCloudAuthScenesWithOptions($request, $runtime);
    }

    /**
     * Query Face Verification Data.
     *
     * @remarks
     * - Service Address: cloudauth.aliyuncs.com.
     * - Request Method: HTTPS POST and GET.
     *
     * @param Request - DescribeListFaceVerifyDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeListFaceVerifyDataResponse
     *
     * @param DescribeListFaceVerifyDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeListFaceVerifyDataResponse
     */
    public function describeListFaceVerifyDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gmtEnd) {
            @$query['GmtEnd'] = $request->gmtEnd;
        }

        if (null !== $request->gmtStart) {
            @$query['GmtStart'] = $request->gmtStart;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeListFaceVerifyData',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeListFaceVerifyDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Face Verification Data.
     *
     * @remarks
     * - Service Address: cloudauth.aliyuncs.com.
     * - Request Method: HTTPS POST and GET.
     *
     * @param Request - DescribeListFaceVerifyDataRequest
     *
     * @returns DescribeListFaceVerifyDataResponse
     *
     * @param DescribeListFaceVerifyDataRequest $request
     *
     * @return DescribeListFaceVerifyDataResponse
     */
    public function describeListFaceVerifyData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeListFaceVerifyDataWithOptions($request, $runtime);
    }

    /**
     * Get Face Verification Information.
     *
     * @remarks
     * - Service address: cloudauth.aliyuncs.com.
     * - Request method: HTTPS POST and GET.
     *
     * @param Request - DescribeListFaceVerifyInfosRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeListFaceVerifyInfosResponse
     *
     * @param DescribeListFaceVerifyInfosRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeListFaceVerifyInfosResponse
     */
    public function describeListFaceVerifyInfosWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certifyId) {
            @$query['CertifyId'] = $request->certifyId;
        }

        if (null !== $request->gmtEnd) {
            @$query['GmtEnd'] = $request->gmtEnd;
        }

        if (null !== $request->gmtStart) {
            @$query['GmtStart'] = $request->gmtStart;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeListFaceVerifyInfos',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeListFaceVerifyInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Face Verification Information.
     *
     * @remarks
     * - Service address: cloudauth.aliyuncs.com.
     * - Request method: HTTPS POST and GET.
     *
     * @param Request - DescribeListFaceVerifyInfosRequest
     *
     * @returns DescribeListFaceVerifyInfosResponse
     *
     * @param DescribeListFaceVerifyInfosRequest $request
     *
     * @return DescribeListFaceVerifyInfosResponse
     */
    public function describeListFaceVerifyInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeListFaceVerifyInfosWithOptions($request, $runtime);
    }

    /**
     * 查询页面元数据.
     *
     * @param Request - DescribeMetaSearchPageListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMetaSearchPageListResponse
     *
     * @param DescribeMetaSearchPageListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeMetaSearchPageListResponse
     */
    public function describeMetaSearchPageListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->api) {
            @$query['Api'] = $request->api;
        }

        if (null !== $request->bankCard) {
            @$query['BankCard'] = $request->bankCard;
        }

        if (null !== $request->bizCode) {
            @$query['BizCode'] = $request->bizCode;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->identifyNum) {
            @$query['IdentifyNum'] = $request->identifyNum;
        }

        if (null !== $request->ispName) {
            @$query['IspName'] = $request->ispName;
        }

        if (null !== $request->mobile) {
            @$query['Mobile'] = $request->mobile;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->reqId) {
            @$query['ReqId'] = $request->reqId;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->subCode) {
            @$query['SubCode'] = $request->subCode;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        if (null !== $request->vehicleNum) {
            @$query['VehicleNum'] = $request->vehicleNum;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMetaSearchPageList',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMetaSearchPageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询页面元数据.
     *
     * @param Request - DescribeMetaSearchPageListRequest
     *
     * @returns DescribeMetaSearchPageListResponse
     *
     * @param DescribeMetaSearchPageListRequest $request
     *
     * @return DescribeMetaSearchPageListResponse
     */
    public function describeMetaSearchPageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetaSearchPageListWithOptions($request, $runtime);
    }

    /**
     * 查询认证统计信息.
     *
     * @param Request - DescribeMetaStatisticsListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMetaStatisticsListResponse
     *
     * @param DescribeMetaStatisticsListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeMetaStatisticsListResponse
     */
    public function describeMetaStatisticsListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->api) {
            @$query['Api'] = $request->api;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMetaStatisticsList',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMetaStatisticsListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询认证统计信息.
     *
     * @param Request - DescribeMetaStatisticsListRequest
     *
     * @returns DescribeMetaStatisticsListResponse
     *
     * @param DescribeMetaStatisticsListRequest $request
     *
     * @return DescribeMetaStatisticsListResponse
     */
    public function describeMetaStatisticsList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetaStatisticsListWithOptions($request, $runtime);
    }

    /**
     * 查询认证统计页面.
     *
     * @param Request - DescribeMetaStatisticsPageListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMetaStatisticsPageListResponse
     *
     * @param DescribeMetaStatisticsPageListRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeMetaStatisticsPageListResponse
     */
    public function describeMetaStatisticsPageListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->api) {
            @$query['Api'] = $request->api;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMetaStatisticsPageList',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMetaStatisticsPageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询认证统计页面.
     *
     * @param Request - DescribeMetaStatisticsPageListRequest
     *
     * @returns DescribeMetaStatisticsPageListResponse
     *
     * @param DescribeMetaStatisticsPageListRequest $request
     *
     * @return DescribeMetaStatisticsPageListResponse
     */
    public function describeMetaStatisticsPageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetaStatisticsPageListWithOptions($request, $runtime);
    }

    /**
     * Query OSS status.
     *
     * @remarks
     * - Request Method: Supports sending requests via HTTPS POST and GET methods.
     * - Service Address: cloudauth.aliyuncs.com.
     *
     * @param Request - DescribeOssStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeOssStatusResponse
     *
     * @param DescribeOssStatusRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeOssStatusResponse
     */
    public function describeOssStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->serviceCode) {
            @$query['ServiceCode'] = $request->serviceCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeOssStatus',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeOssStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query OSS status.
     *
     * @remarks
     * - Request Method: Supports sending requests via HTTPS POST and GET methods.
     * - Service Address: cloudauth.aliyuncs.com.
     *
     * @param Request - DescribeOssStatusRequest
     *
     * @returns DescribeOssStatusResponse
     *
     * @param DescribeOssStatusRequest $request
     *
     * @return DescribeOssStatusResponse
     */
    public function describeOssStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOssStatusWithOptions($request, $runtime);
    }

    /**
     * Get OSS Activation Status.
     *
     * @remarks
     * - Request Method: Supports sending requests via HTTPS POST and GET methods.
     * - Service Address: cloudauth.aliyuncs.com.
     *
     * @param Request - DescribeOssStatusV2Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeOssStatusV2Response
     *
     * @param DescribeOssStatusV2Request $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeOssStatusV2Response
     */
    public function describeOssStatusV2WithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->serviceCode) {
            @$query['ServiceCode'] = $request->serviceCode;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeOssStatusV2',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeOssStatusV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get OSS Activation Status.
     *
     * @remarks
     * - Request Method: Supports sending requests via HTTPS POST and GET methods.
     * - Service Address: cloudauth.aliyuncs.com.
     *
     * @param Request - DescribeOssStatusV2Request
     *
     * @returns DescribeOssStatusV2Response
     *
     * @param DescribeOssStatusV2Request $request
     *
     * @return DescribeOssStatusV2Response
     */
    public function describeOssStatusV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOssStatusV2WithOptions($request, $runtime);
    }

    /**
     * Call DescribeOssUploadToken to get the Token required for uploading photos to OSS.
     *
     * @param Request - DescribeOssUploadTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeOssUploadTokenResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeOssUploadTokenResponse
     */
    public function describeOssUploadTokenWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeOssUploadToken',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeOssUploadTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Call DescribeOssUploadToken to get the Token required for uploading photos to OSS.
     *
     * @returns DescribeOssUploadTokenResponse
     *
     * @return DescribeOssUploadTokenResponse
     */
    public function describeOssUploadToken()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOssUploadTokenWithOptions($runtime);
    }

    /**
     * Open API adds financial-grade data statistics API.
     *
     * @param Request - DescribePageFaceVerifyDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePageFaceVerifyDataResponse
     *
     * @param DescribePageFaceVerifyDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribePageFaceVerifyDataResponse
     */
    public function describePageFaceVerifyDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePageFaceVerifyData',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePageFaceVerifyDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Open API adds financial-grade data statistics API.
     *
     * @param Request - DescribePageFaceVerifyDataRequest
     *
     * @returns DescribePageFaceVerifyDataResponse
     *
     * @param DescribePageFaceVerifyDataRequest $request
     *
     * @return DescribePageFaceVerifyDataResponse
     */
    public function describePageFaceVerifyData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePageFaceVerifyDataWithOptions($request, $runtime);
    }

    /**
     * Query Page Settings.
     *
     * @remarks
     * Request Method: Only supports sending requests via HTTPS POST method.
     *
     * @param Request - DescribePageSettingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePageSettingResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribePageSettingResponse
     */
    public function describePageSettingWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribePageSetting',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePageSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Page Settings.
     *
     * @remarks
     * Request Method: Only supports sending requests via HTTPS POST method.
     *
     * @returns DescribePageSettingResponse
     *
     * @return DescribePageSettingResponse
     */
    public function describePageSetting()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePageSettingWithOptions($runtime);
    }

    /**
     * Get Product Code.
     *
     * @remarks
     * Request Method: Supports sending requests via HTTPS GET/POST methods.
     *
     * @param Request - DescribeProductCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeProductCodeResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeProductCodeResponse
     */
    public function describeProductCodeWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeProductCode',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeProductCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Product Code.
     *
     * @remarks
     * Request Method: Supports sending requests via HTTPS GET/POST methods.
     *
     * @returns DescribeProductCodeResponse
     *
     * @return DescribeProductCodeResponse
     */
    public function describeProductCode()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProductCodeWithOptions($runtime);
    }

    /**
     * Enhanced Real Person Authentication Call Statistics Pagination Query Interface.
     *
     * @param Request - DescribeSmartStatisticsPageListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSmartStatisticsPageListResponse
     *
     * @param DescribeSmartStatisticsPageListRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeSmartStatisticsPageListResponse
     */
    public function describeSmartStatisticsPageListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        if (null !== $request->serviceCode) {
            @$query['ServiceCode'] = $request->serviceCode;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSmartStatisticsPageList',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSmartStatisticsPageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enhanced Real Person Authentication Call Statistics Pagination Query Interface.
     *
     * @param Request - DescribeSmartStatisticsPageListRequest
     *
     * @returns DescribeSmartStatisticsPageListResponse
     *
     * @param DescribeSmartStatisticsPageListRequest $request
     *
     * @return DescribeSmartStatisticsPageListResponse
     */
    public function describeSmartStatisticsPageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSmartStatisticsPageListWithOptions($request, $runtime);
    }

    /**
     * Get Verification Device Statistics.
     *
     * @remarks
     * - Service address: cloudauth.aliyuncs.com.
     * - Request method: HTTPS POST and GET.
     *
     * @param Request - DescribeVerifyDeviceRiskStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVerifyDeviceRiskStatisticsResponse
     *
     * @param DescribeVerifyDeviceRiskStatisticsRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeVerifyDeviceRiskStatisticsResponse
     */
    public function describeVerifyDeviceRiskStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        if (null !== $request->serviceCode) {
            @$query['ServiceCode'] = $request->serviceCode;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVerifyDeviceRiskStatistics',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVerifyDeviceRiskStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Verification Device Statistics.
     *
     * @remarks
     * - Service address: cloudauth.aliyuncs.com.
     * - Request method: HTTPS POST and GET.
     *
     * @param Request - DescribeVerifyDeviceRiskStatisticsRequest
     *
     * @returns DescribeVerifyDeviceRiskStatisticsResponse
     *
     * @param DescribeVerifyDeviceRiskStatisticsRequest $request
     *
     * @return DescribeVerifyDeviceRiskStatisticsResponse
     */
    public function describeVerifyDeviceRiskStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVerifyDeviceRiskStatisticsWithOptions($request, $runtime);
    }

    /**
     * Overview of authentication request statistics.
     *
     * @remarks
     * - Service address: cloudauth.aliyuncs.com.
     * - Request method: HTTPS POST and GET.
     *
     * @param Request - DescribeVerifyFailStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVerifyFailStatisticsResponse
     *
     * @param DescribeVerifyFailStatisticsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeVerifyFailStatisticsResponse
     */
    public function describeVerifyFailStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ageGt) {
            @$query['AgeGt'] = $request->ageGt;
        }

        if (null !== $request->api) {
            @$query['Api'] = $request->api;
        }

        if (null !== $request->deviceType) {
            @$query['DeviceType'] = $request->deviceType;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->serviceCode) {
            @$query['ServiceCode'] = $request->serviceCode;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVerifyFailStatistics',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVerifyFailStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Overview of authentication request statistics.
     *
     * @remarks
     * - Service address: cloudauth.aliyuncs.com.
     * - Request method: HTTPS POST and GET.
     *
     * @param Request - DescribeVerifyFailStatisticsRequest
     *
     * @returns DescribeVerifyFailStatisticsResponse
     *
     * @param DescribeVerifyFailStatisticsRequest $request
     *
     * @return DescribeVerifyFailStatisticsResponse
     */
    public function describeVerifyFailStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVerifyFailStatisticsWithOptions($request, $runtime);
    }

    /**
     * Query Statistics on Device Face Comparison.
     *
     * @remarks
     * - Service Address: cloudauth.aliyuncs.com.
     * - Request Method: HTTPS POST and GET.
     *
     * @param Request - DescribeVerifyPersonasDeviceModelStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVerifyPersonasDeviceModelStatisticsResponse
     *
     * @param DescribeVerifyPersonasDeviceModelStatisticsRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return DescribeVerifyPersonasDeviceModelStatisticsResponse
     */
    public function describeVerifyPersonasDeviceModelStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        if (null !== $request->serviceCode) {
            @$query['ServiceCode'] = $request->serviceCode;
        }

        if (null !== $request->timeRange) {
            @$query['TimeRange'] = $request->timeRange;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVerifyPersonasDeviceModelStatistics',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVerifyPersonasDeviceModelStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Statistics on Device Face Comparison.
     *
     * @remarks
     * - Service Address: cloudauth.aliyuncs.com.
     * - Request Method: HTTPS POST and GET.
     *
     * @param Request - DescribeVerifyPersonasDeviceModelStatisticsRequest
     *
     * @returns DescribeVerifyPersonasDeviceModelStatisticsResponse
     *
     * @param DescribeVerifyPersonasDeviceModelStatisticsRequest $request
     *
     * @return DescribeVerifyPersonasDeviceModelStatisticsResponse
     */
    public function describeVerifyPersonasDeviceModelStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVerifyPersonasDeviceModelStatisticsWithOptions($request, $runtime);
    }

    /**
     * Query Authentication Personnel Statistics.
     *
     * @remarks
     * - Service address: cloudauth.aliyuncs.com.
     * - Request method: HTTPS POST and GET.
     *
     * @param Request - DescribeVerifyPersonasOsStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVerifyPersonasOsStatisticsResponse
     *
     * @param DescribeVerifyPersonasOsStatisticsRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeVerifyPersonasOsStatisticsResponse
     */
    public function describeVerifyPersonasOsStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        if (null !== $request->serviceCode) {
            @$query['ServiceCode'] = $request->serviceCode;
        }

        if (null !== $request->timeRange) {
            @$query['TimeRange'] = $request->timeRange;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVerifyPersonasOsStatistics',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVerifyPersonasOsStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Authentication Personnel Statistics.
     *
     * @remarks
     * - Service address: cloudauth.aliyuncs.com.
     * - Request method: HTTPS POST and GET.
     *
     * @param Request - DescribeVerifyPersonasOsStatisticsRequest
     *
     * @returns DescribeVerifyPersonasOsStatisticsResponse
     *
     * @param DescribeVerifyPersonasOsStatisticsRequest $request
     *
     * @return DescribeVerifyPersonasOsStatisticsResponse
     */
    public function describeVerifyPersonasOsStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVerifyPersonasOsStatisticsWithOptions($request, $runtime);
    }

    /**
     * Obtain statistical information on the location of authenticated individuals.
     *
     * @remarks
     * - Service Address: cloudauth.aliyuncs.com.
     * - Request Method: HTTPS POST and GET.
     *
     * @param Request - DescribeVerifyPersonasProvinceStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVerifyPersonasProvinceStatisticsResponse
     *
     * @param DescribeVerifyPersonasProvinceStatisticsRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeVerifyPersonasProvinceStatisticsResponse
     */
    public function describeVerifyPersonasProvinceStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        if (null !== $request->serviceCode) {
            @$query['ServiceCode'] = $request->serviceCode;
        }

        if (null !== $request->timeRange) {
            @$query['TimeRange'] = $request->timeRange;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVerifyPersonasProvinceStatistics',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVerifyPersonasProvinceStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain statistical information on the location of authenticated individuals.
     *
     * @remarks
     * - Service Address: cloudauth.aliyuncs.com.
     * - Request Method: HTTPS POST and GET.
     *
     * @param Request - DescribeVerifyPersonasProvinceStatisticsRequest
     *
     * @returns DescribeVerifyPersonasProvinceStatisticsResponse
     *
     * @param DescribeVerifyPersonasProvinceStatisticsRequest $request
     *
     * @return DescribeVerifyPersonasProvinceStatisticsResponse
     */
    public function describeVerifyPersonasProvinceStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVerifyPersonasProvinceStatisticsWithOptions($request, $runtime);
    }

    /**
     * Query gender statistics of authentication.
     *
     * @remarks
     * - Service address: cloudauth.aliyuncs.com.
     * - Request method: HTTPS POST and GET.
     *
     * @param Request - DescribeVerifyPersonasSexStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVerifyPersonasSexStatisticsResponse
     *
     * @param DescribeVerifyPersonasSexStatisticsRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeVerifyPersonasSexStatisticsResponse
     */
    public function describeVerifyPersonasSexStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        if (null !== $request->serviceCode) {
            @$query['ServiceCode'] = $request->serviceCode;
        }

        if (null !== $request->timeRange) {
            @$query['TimeRange'] = $request->timeRange;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVerifyPersonasSexStatistics',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVerifyPersonasSexStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query gender statistics of authentication.
     *
     * @remarks
     * - Service address: cloudauth.aliyuncs.com.
     * - Request method: HTTPS POST and GET.
     *
     * @param Request - DescribeVerifyPersonasSexStatisticsRequest
     *
     * @returns DescribeVerifyPersonasSexStatisticsResponse
     *
     * @param DescribeVerifyPersonasSexStatisticsRequest $request
     *
     * @return DescribeVerifyPersonasSexStatisticsResponse
     */
    public function describeVerifyPersonasSexStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVerifyPersonasSexStatisticsWithOptions($request, $runtime);
    }

    /**
     * Query the result of real-person authentication.
     *
     * @remarks
     * Prerequisites: Before accessing this API, please ensure that you have completed the necessary preparations. For more details, see [Real Person Authentication Server-side Preparation](https://help.aliyun.com/document_detail/127471.html) and [Liveness Face Verification Server-side Preparation](https://help.aliyun.com/document_detail/127717.html).
     * > Alibaba Cloud Real Person Authentication only stores authentication data for the last 180 days. For any subsequent business use, please call this interface in a timely manner to retrieve and store the data yourself to avoid any impact on usage.
     * Request Method: HTTPS POST and GET.
     * Interface Description: After the mobile end of the access party receives the callback, its server can call this interface to obtain the corresponding authentication status and authentication information.
     * Applicable Scope: This interface is applicable to the authentication solution with SDK + server-side integration.
     *
     * @param Request - DescribeVerifyResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVerifyResultResponse
     *
     * @param DescribeVerifyResultRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeVerifyResultResponse
     */
    public function describeVerifyResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVerifyResult',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVerifyResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the result of real-person authentication.
     *
     * @remarks
     * Prerequisites: Before accessing this API, please ensure that you have completed the necessary preparations. For more details, see [Real Person Authentication Server-side Preparation](https://help.aliyun.com/document_detail/127471.html) and [Liveness Face Verification Server-side Preparation](https://help.aliyun.com/document_detail/127717.html).
     * > Alibaba Cloud Real Person Authentication only stores authentication data for the last 180 days. For any subsequent business use, please call this interface in a timely manner to retrieve and store the data yourself to avoid any impact on usage.
     * Request Method: HTTPS POST and GET.
     * Interface Description: After the mobile end of the access party receives the callback, its server can call this interface to obtain the corresponding authentication status and authentication information.
     * Applicable Scope: This interface is applicable to the authentication solution with SDK + server-side integration.
     *
     * @param Request - DescribeVerifyResultRequest
     *
     * @returns DescribeVerifyResultResponse
     *
     * @param DescribeVerifyResultRequest $request
     *
     * @return DescribeVerifyResultResponse
     */
    public function describeVerifyResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVerifyResultWithOptions($request, $runtime);
    }

    /**
     * Call DescribeVerifySDK to get the offline SDK download address.
     *
     * @remarks
     * Request Method: Supports sending requests via HTTPS POST and GET methods.
     * Interface Description: Obtain the SDK generation result based on the task ID for generating an offline facial recognition SDK.
     *
     * @param Request - DescribeVerifySDKRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVerifySDKResponse
     *
     * @param DescribeVerifySDKRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeVerifySDKResponse
     */
    public function describeVerifySDKWithOptions($request, $runtime)
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
            'action' => 'DescribeVerifySDK',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVerifySDKResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Call DescribeVerifySDK to get the offline SDK download address.
     *
     * @remarks
     * Request Method: Supports sending requests via HTTPS POST and GET methods.
     * Interface Description: Obtain the SDK generation result based on the task ID for generating an offline facial recognition SDK.
     *
     * @param Request - DescribeVerifySDKRequest
     *
     * @returns DescribeVerifySDKResponse
     *
     * @param DescribeVerifySDKRequest $request
     *
     * @return DescribeVerifySDKResponse
     */
    public function describeVerifySDK($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVerifySDKWithOptions($request, $runtime);
    }

    /**
     * Query the list of authentication schemes.
     *
     * @remarks
     * - Service Address: cloudauth.aliyuncs.com.
     * - Request Method: HTTPS POST and GET.
     *
     * @param Request - DescribeVerifySearchPageListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVerifySearchPageListResponse
     *
     * @param DescribeVerifySearchPageListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeVerifySearchPageListResponse
     */
    public function describeVerifySearchPageListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certNo) {
            @$query['CertNo'] = $request->certNo;
        }

        if (null !== $request->certifyId) {
            @$query['CertifyId'] = $request->certifyId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->hasDeviceRisk) {
            @$query['HasDeviceRisk'] = $request->hasDeviceRisk;
        }

        if (null !== $request->model) {
            @$query['Model'] = $request->model;
        }

        if (null !== $request->outerOrderNo) {
            @$query['OuterOrderNo'] = $request->outerOrderNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->passed) {
            @$query['Passed'] = $request->passed;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->root) {
            @$query['Root'] = $request->root;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        if (null !== $request->simulator) {
            @$query['Simulator'] = $request->simulator;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->subCode) {
            @$query['SubCode'] = $request->subCode;
        }

        if (null !== $request->subCodes) {
            @$query['SubCodes'] = $request->subCodes;
        }

        if (null !== $request->virtualVideo) {
            @$query['VirtualVideo'] = $request->virtualVideo;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVerifySearchPageList',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVerifySearchPageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the list of authentication schemes.
     *
     * @remarks
     * - Service Address: cloudauth.aliyuncs.com.
     * - Request Method: HTTPS POST and GET.
     *
     * @param Request - DescribeVerifySearchPageListRequest
     *
     * @returns DescribeVerifySearchPageListResponse
     *
     * @param DescribeVerifySearchPageListRequest $request
     *
     * @return DescribeVerifySearchPageListResponse
     */
    public function describeVerifySearchPageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVerifySearchPageListWithOptions($request, $runtime);
    }

    /**
     * Query Authentication Statistics.
     *
     * @remarks
     * - Request Method: Supports sending requests using HTTPS POST and GET methods.
     * - Service Address: cloudauth.aliyuncs.com.
     *
     * @param Request - DescribeVerifyStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVerifyStatisticsResponse
     *
     * @param DescribeVerifyStatisticsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeVerifyStatisticsResponse
     */
    public function describeVerifyStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ageGt) {
            @$query['AgeGt'] = $request->ageGt;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->serviceCode) {
            @$query['ServiceCode'] = $request->serviceCode;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVerifyStatistics',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVerifyStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Authentication Statistics.
     *
     * @remarks
     * - Request Method: Supports sending requests using HTTPS POST and GET methods.
     * - Service Address: cloudauth.aliyuncs.com.
     *
     * @param Request - DescribeVerifyStatisticsRequest
     *
     * @returns DescribeVerifyStatisticsResponse
     *
     * @param DescribeVerifyStatisticsRequest $request
     *
     * @return DescribeVerifyStatisticsResponse
     */
    public function describeVerifyStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVerifyStatisticsWithOptions($request, $runtime);
    }

    /**
     * Call DescribeVerifyToken to initiate an authentication request and obtain an authentication Token. This interface is suitable for authentication solutions using SDK + server-side integration.
     *
     * @remarks
     * Preparation for Access: When integrating this API, please ensure that the corresponding preparations have been completed. For details, see [Overview of Real Person Authentication Solution Integration Process](https://help.aliyun.com/document_detail/127536.html) and [Overview of Live Face Verification Solution (Liveness Detection Solution) Integration Process](https://help.aliyun.com/document_detail/127687.html).
     * Request Method: HTTPS POST and GET
     * API Description: Before each authentication, use this interface to obtain an authentication Token (VerifyToken), which is used to link various interfaces in the authentication request.
     * Applicable Scope: This interface is suitable for wireless SDK integration.
     * Image Address: Use HTTP or HTTPS addresses that are publicly accessible over the Internet. For example, `http://image-demo.img-cn-hangzhou.aliyuncs.com/example.jpg`.
     * Image Restrictions:
     * - Relative or absolute paths of local images are not supported.
     * - The size of a single image should be controlled within 2 MB to avoid algorithm retrieval timeout.
     * - The face area in the image must be at least 64*64 pixels (px).
     * - There is an 8 MB size limit for the Body of a single request. Please calculate the total size of all images and other information in the request to ensure it does not exceed the limit.
     *
     * @param Request - DescribeVerifyTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVerifyTokenResponse
     *
     * @param DescribeVerifyTokenRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeVerifyTokenResponse
     */
    public function describeVerifyTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->callbackSeed) {
            @$query['CallbackSeed'] = $request->callbackSeed;
        }

        if (null !== $request->callbackUrl) {
            @$query['CallbackUrl'] = $request->callbackUrl;
        }

        if (null !== $request->faceRetainedImageUrl) {
            @$query['FaceRetainedImageUrl'] = $request->faceRetainedImageUrl;
        }

        if (null !== $request->failedRedirectUrl) {
            @$query['FailedRedirectUrl'] = $request->failedRedirectUrl;
        }

        if (null !== $request->idCardBackImageUrl) {
            @$query['IdCardBackImageUrl'] = $request->idCardBackImageUrl;
        }

        if (null !== $request->idCardFrontImageUrl) {
            @$query['IdCardFrontImageUrl'] = $request->idCardFrontImageUrl;
        }

        if (null !== $request->idCardNumber) {
            @$query['IdCardNumber'] = $request->idCardNumber;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->passedRedirectUrl) {
            @$query['PassedRedirectUrl'] = $request->passedRedirectUrl;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->userIp) {
            @$query['UserIp'] = $request->userIp;
        }

        if (null !== $request->userPhoneNumber) {
            @$query['UserPhoneNumber'] = $request->userPhoneNumber;
        }

        if (null !== $request->userRegistTime) {
            @$query['UserRegistTime'] = $request->userRegistTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVerifyToken',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVerifyTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Call DescribeVerifyToken to initiate an authentication request and obtain an authentication Token. This interface is suitable for authentication solutions using SDK + server-side integration.
     *
     * @remarks
     * Preparation for Access: When integrating this API, please ensure that the corresponding preparations have been completed. For details, see [Overview of Real Person Authentication Solution Integration Process](https://help.aliyun.com/document_detail/127536.html) and [Overview of Live Face Verification Solution (Liveness Detection Solution) Integration Process](https://help.aliyun.com/document_detail/127687.html).
     * Request Method: HTTPS POST and GET
     * API Description: Before each authentication, use this interface to obtain an authentication Token (VerifyToken), which is used to link various interfaces in the authentication request.
     * Applicable Scope: This interface is suitable for wireless SDK integration.
     * Image Address: Use HTTP or HTTPS addresses that are publicly accessible over the Internet. For example, `http://image-demo.img-cn-hangzhou.aliyuncs.com/example.jpg`.
     * Image Restrictions:
     * - Relative or absolute paths of local images are not supported.
     * - The size of a single image should be controlled within 2 MB to avoid algorithm retrieval timeout.
     * - The face area in the image must be at least 64*64 pixels (px).
     * - There is an 8 MB size limit for the Body of a single request. Please calculate the total size of all images and other information in the request to ensure it does not exceed the limit.
     *
     * @param Request - DescribeVerifyTokenRequest
     *
     * @returns DescribeVerifyTokenResponse
     *
     * @param DescribeVerifyTokenRequest $request
     *
     * @return DescribeVerifyTokenResponse
     */
    public function describeVerifyToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVerifyTokenWithOptions($request, $runtime);
    }

    /**
     * Get Whitelist Collection Get Whitelist Collection.
     *
     * @remarks
     * Request Method: Only supports sending requests via HTTPS POST method.
     *
     * @param Request - DescribeWhitelistSettingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeWhitelistSettingResponse
     *
     * @param DescribeWhitelistSettingRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeWhitelistSettingResponse
     */
    public function describeWhitelistSettingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certNo) {
            @$query['CertNo'] = $request->certNo;
        }

        if (null !== $request->certifyId) {
            @$query['CertifyId'] = $request->certifyId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        if (null !== $request->serviceCode) {
            @$query['ServiceCode'] = $request->serviceCode;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->validEndDate) {
            @$query['ValidEndDate'] = $request->validEndDate;
        }

        if (null !== $request->validStartDate) {
            @$query['ValidStartDate'] = $request->validStartDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeWhitelistSetting',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeWhitelistSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Whitelist Collection Get Whitelist Collection.
     *
     * @remarks
     * Request Method: Only supports sending requests via HTTPS POST method.
     *
     * @param Request - DescribeWhitelistSettingRequest
     *
     * @returns DescribeWhitelistSettingResponse
     *
     * @param DescribeWhitelistSettingRequest $request
     *
     * @return DescribeWhitelistSettingResponse
     */
    public function describeWhitelistSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWhitelistSettingWithOptions($request, $runtime);
    }

    /**
     * Detect Validity Attributes in Face Photos.
     *
     * @remarks
     * Request Method: Only supports sending requests via HTTPS POST.
     * Interface Description: Detects the validity-related attributes of faces in the input photo, which helps the business side to determine whether the photo meets their own business retention or comparison requirements. The currently supported face validity-related attributes include: whether it is a face, whether it is blurry, whether glasses are worn, face pose, whether it is a smile, etc.
     * Instructions for Uploading Image Addresses: When passing in images, you need to upload their corresponding HTTP, OSS addresses, or Base64 encoding.
     * - HTTP Address: A publicly accessible HTTP address. For example, `http://image-demo.img-cn-hangzhou.aliyuncs.com/example.jpg`.
     * - Base64 Encoding: An image encoded through base64, with the format being `base64://<image base64 string>`.
     * Image Limitations:
     * - Does not support relative or absolute paths of local images.
     * - Please keep the size of a single image within 2 MB to avoid algorithm timeout.
     * - There is an 8 MB size limit for the Body of a single request; please calculate the total size of all images and other information in the request and do not exceed the limit.
     * - When using Base64 to pass images, the request method needs to be changed to POST; the header description of the image Base64 string, such as `data:image/png;base64`, should be removed.
     *
     * @param Request - DetectFaceAttributesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectFaceAttributesResponse
     *
     * @param DetectFaceAttributesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DetectFaceAttributesResponse
     */
    public function detectFaceAttributesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->bizType) {
            @$body['BizType'] = $request->bizType;
        }

        if (null !== $request->materialValue) {
            @$body['MaterialValue'] = $request->materialValue;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DetectFaceAttributes',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectFaceAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detect Validity Attributes in Face Photos.
     *
     * @remarks
     * Request Method: Only supports sending requests via HTTPS POST.
     * Interface Description: Detects the validity-related attributes of faces in the input photo, which helps the business side to determine whether the photo meets their own business retention or comparison requirements. The currently supported face validity-related attributes include: whether it is a face, whether it is blurry, whether glasses are worn, face pose, whether it is a smile, etc.
     * Instructions for Uploading Image Addresses: When passing in images, you need to upload their corresponding HTTP, OSS addresses, or Base64 encoding.
     * - HTTP Address: A publicly accessible HTTP address. For example, `http://image-demo.img-cn-hangzhou.aliyuncs.com/example.jpg`.
     * - Base64 Encoding: An image encoded through base64, with the format being `base64://<image base64 string>`.
     * Image Limitations:
     * - Does not support relative or absolute paths of local images.
     * - Please keep the size of a single image within 2 MB to avoid algorithm timeout.
     * - There is an 8 MB size limit for the Body of a single request; please calculate the total size of all images and other information in the request and do not exceed the limit.
     * - When using Base64 to pass images, the request method needs to be changed to POST; the header description of the image Base64 string, such as `data:image/png;base64`, should be removed.
     *
     * @param Request - DetectFaceAttributesRequest
     *
     * @returns DetectFaceAttributesResponse
     *
     * @param DetectFaceAttributesRequest $request
     *
     * @return DetectFaceAttributesResponse
     */
    public function detectFaceAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectFaceAttributesWithOptions($request, $runtime);
    }

    /**
     * Real-person Authentication Record Download.
     *
     * @remarks
     * Obtain the download link for statistical call data files under the product plan based on query conditions.
     * - Method: HTTPS POST
     * - Service Address: cloudauth.aliyuncs.com
     * > Real-person authentication products use CertifyId to count call volumes. For ease of reconciliation, please retain the CertifyId field in your system.
     *
     * @param Request - DownloadVerifyRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DownloadVerifyRecordsResponse
     *
     * @param DownloadVerifyRecordsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DownloadVerifyRecordsResponse
     */
    public function downloadVerifyRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizParam) {
            @$query['BizParam'] = $request->bizParam;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DownloadVerifyRecords',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DownloadVerifyRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Real-person Authentication Record Download.
     *
     * @remarks
     * Obtain the download link for statistical call data files under the product plan based on query conditions.
     * - Method: HTTPS POST
     * - Service Address: cloudauth.aliyuncs.com
     * > Real-person authentication products use CertifyId to count call volumes. For ease of reconciliation, please retain the CertifyId field in your system.
     *
     * @param Request - DownloadVerifyRecordsRequest
     *
     * @returns DownloadVerifyRecordsResponse
     *
     * @param DownloadVerifyRecordsRequest $request
     *
     * @return DownloadVerifyRecordsResponse
     */
    public function downloadVerifyRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadVerifyRecordsWithOptions($request, $runtime);
    }

    /**
     * Two-Factor Validity Verification API.
     *
     * @param Request - Id2MetaPeriodVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Id2MetaPeriodVerifyResponse
     *
     * @param Id2MetaPeriodVerifyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return Id2MetaPeriodVerifyResponse
     */
    public function id2MetaPeriodVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->identifyNum) {
            @$body['IdentifyNum'] = $request->identifyNum;
        }

        if (null !== $request->paramType) {
            @$body['ParamType'] = $request->paramType;
        }

        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
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
            'action' => 'Id2MetaPeriodVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return Id2MetaPeriodVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Two-Factor Validity Verification API.
     *
     * @param Request - Id2MetaPeriodVerifyRequest
     *
     * @returns Id2MetaPeriodVerifyResponse
     *
     * @param Id2MetaPeriodVerifyRequest $request
     *
     * @return Id2MetaPeriodVerifyResponse
     */
    public function id2MetaPeriodVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->id2MetaPeriodVerifyWithOptions($request, $runtime);
    }

    /**
     * Identity Two-Factor Standard.
     *
     * @param Request - Id2MetaStandardVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Id2MetaStandardVerifyResponse
     *
     * @param Id2MetaStandardVerifyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return Id2MetaStandardVerifyResponse
     */
    public function id2MetaStandardVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->identifyNum) {
            @$body['IdentifyNum'] = $request->identifyNum;
        }

        if (null !== $request->paramType) {
            @$body['ParamType'] = $request->paramType;
        }

        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Id2MetaStandardVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return Id2MetaStandardVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Identity Two-Factor Standard.
     *
     * @param Request - Id2MetaStandardVerifyRequest
     *
     * @returns Id2MetaStandardVerifyResponse
     *
     * @param Id2MetaStandardVerifyRequest $request
     *
     * @return Id2MetaStandardVerifyResponse
     */
    public function id2MetaStandardVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->id2MetaStandardVerifyWithOptions($request, $runtime);
    }

    /**
     * Identity Two-Factor Interface.
     *
     * @remarks
     * - Service address: cloudauth.aliyuncs.com (IPv4) or cloudauth-dualstack.aliyuncs.com (IPv6).
     * - Request method: POST and GET.
     * - Transfer protocol: HTTPS.
     *
     * @param Request - Id2MetaVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Id2MetaVerifyResponse
     *
     * @param Id2MetaVerifyRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return Id2MetaVerifyResponse
     */
    public function id2MetaVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->identifyNum) {
            @$body['IdentifyNum'] = $request->identifyNum;
        }

        if (null !== $request->paramType) {
            @$body['ParamType'] = $request->paramType;
        }

        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Id2MetaVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return Id2MetaVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Identity Two-Factor Interface.
     *
     * @remarks
     * - Service address: cloudauth.aliyuncs.com (IPv4) or cloudauth-dualstack.aliyuncs.com (IPv6).
     * - Request method: POST and GET.
     * - Transfer protocol: HTTPS.
     *
     * @param Request - Id2MetaVerifyRequest
     *
     * @returns Id2MetaVerifyResponse
     *
     * @param Id2MetaVerifyRequest $request
     *
     * @return Id2MetaVerifyResponse
     */
    public function id2MetaVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->id2MetaVerifyWithOptions($request, $runtime);
    }

    /**
     * ID Two-Factor Image Verification.
     *
     * @remarks
     * Upload both sides of the ID card, and get the verification result of the two factors from an authoritative data source.
     *
     * @param Request - Id2MetaVerifyWithOCRRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Id2MetaVerifyWithOCRResponse
     *
     * @param Id2MetaVerifyWithOCRRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return Id2MetaVerifyWithOCRResponse
     */
    public function id2MetaVerifyWithOCRWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->certFile) {
            @$body['CertFile'] = $request->certFile;
        }

        if (null !== $request->certNationalFile) {
            @$body['CertNationalFile'] = $request->certNationalFile;
        }

        if (null !== $request->certNationalUrl) {
            @$body['CertNationalUrl'] = $request->certNationalUrl;
        }

        if (null !== $request->certUrl) {
            @$body['CertUrl'] = $request->certUrl;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Id2MetaVerifyWithOCR',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return Id2MetaVerifyWithOCRResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ID Two-Factor Image Verification.
     *
     * @remarks
     * Upload both sides of the ID card, and get the verification result of the two factors from an authoritative data source.
     *
     * @param Request - Id2MetaVerifyWithOCRRequest
     *
     * @returns Id2MetaVerifyWithOCRResponse
     *
     * @param Id2MetaVerifyWithOCRRequest $request
     *
     * @return Id2MetaVerifyWithOCRResponse
     */
    public function id2MetaVerifyWithOCR($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->id2MetaVerifyWithOCRWithOptions($request, $runtime);
    }

    /**
     * @param Id2MetaVerifyWithOCRAdvanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return Id2MetaVerifyWithOCRResponse
     */
    public function id2MetaVerifyWithOCRAdvance($request, $runtime)
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
            'Product' => 'Cloudauth',
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
        $id2MetaVerifyWithOCRReq = new Id2MetaVerifyWithOCRRequest([]);
        Utils::convert($request, $id2MetaVerifyWithOCRReq);
        if (null !== $request->certFileObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->certFileObject,
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
            $id2MetaVerifyWithOCRReq->certFile = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        if (null !== $request->certNationalFileObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->certNationalFileObject,
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
            $id2MetaVerifyWithOCRReq->certNationalFile = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->id2MetaVerifyWithOCRWithOptions($id2MetaVerifyWithOCRReq, $runtime);
    }

    /**
     * Identity Three Elements Verification.
     *
     * @remarks
     * Input name, ID number, and face photo to verify their authenticity and consistency through authoritative sources.
     *
     * @param Request - Id3MetaVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Id3MetaVerifyResponse
     *
     * @param Id3MetaVerifyRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return Id3MetaVerifyResponse
     */
    public function id3MetaVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->crop) {
            @$body['Crop'] = $request->crop;
        }

        if (null !== $request->faceFile) {
            @$body['FaceFile'] = $request->faceFile;
        }

        if (null !== $request->faceUrl) {
            @$body['FaceUrl'] = $request->faceUrl;
        }

        if (null !== $request->identifyNum) {
            @$body['IdentifyNum'] = $request->identifyNum;
        }

        if (null !== $request->paramType) {
            @$body['ParamType'] = $request->paramType;
        }

        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Id3MetaVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return Id3MetaVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Identity Three Elements Verification.
     *
     * @remarks
     * Input name, ID number, and face photo to verify their authenticity and consistency through authoritative sources.
     *
     * @param Request - Id3MetaVerifyRequest
     *
     * @returns Id3MetaVerifyResponse
     *
     * @param Id3MetaVerifyRequest $request
     *
     * @return Id3MetaVerifyResponse
     */
    public function id3MetaVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->id3MetaVerifyWithOptions($request, $runtime);
    }

    /**
     * @param Id3MetaVerifyAdvanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return Id3MetaVerifyResponse
     */
    public function id3MetaVerifyAdvance($request, $runtime)
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
            'Product' => 'Cloudauth',
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
        $id3MetaVerifyReq = new Id3MetaVerifyRequest([]);
        Utils::convert($request, $id3MetaVerifyReq);
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
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $id3MetaVerifyReq->faceFile = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->id3MetaVerifyWithOptions($id3MetaVerifyReq, $runtime);
    }

    /**
     * Identity Three Elements Image Verification.
     *
     * @remarks
     * Upload both sides of the ID card to get the verification result of the three identity elements from an authoritative data source.
     *
     * @param Request - Id3MetaVerifyWithOCRRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Id3MetaVerifyWithOCRResponse
     *
     * @param Id3MetaVerifyWithOCRRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return Id3MetaVerifyWithOCRResponse
     */
    public function id3MetaVerifyWithOCRWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->certFile) {
            @$body['CertFile'] = $request->certFile;
        }

        if (null !== $request->certNationalFile) {
            @$body['CertNationalFile'] = $request->certNationalFile;
        }

        if (null !== $request->certNationalUrl) {
            @$body['CertNationalUrl'] = $request->certNationalUrl;
        }

        if (null !== $request->certUrl) {
            @$body['CertUrl'] = $request->certUrl;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Id3MetaVerifyWithOCR',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return Id3MetaVerifyWithOCRResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Identity Three Elements Image Verification.
     *
     * @remarks
     * Upload both sides of the ID card to get the verification result of the three identity elements from an authoritative data source.
     *
     * @param Request - Id3MetaVerifyWithOCRRequest
     *
     * @returns Id3MetaVerifyWithOCRResponse
     *
     * @param Id3MetaVerifyWithOCRRequest $request
     *
     * @return Id3MetaVerifyWithOCRResponse
     */
    public function id3MetaVerifyWithOCR($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->id3MetaVerifyWithOCRWithOptions($request, $runtime);
    }

    /**
     * @param Id3MetaVerifyWithOCRAdvanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return Id3MetaVerifyWithOCRResponse
     */
    public function id3MetaVerifyWithOCRAdvance($request, $runtime)
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
            'Product' => 'Cloudauth',
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
        $id3MetaVerifyWithOCRReq = new Id3MetaVerifyWithOCRRequest([]);
        Utils::convert($request, $id3MetaVerifyWithOCRReq);
        if (null !== $request->certFileObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->certFileObject,
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
            $id3MetaVerifyWithOCRReq->certFile = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        if (null !== $request->certNationalFileObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->certNationalFileObject,
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
            $id3MetaVerifyWithOCRReq->certNationalFile = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->id3MetaVerifyWithOCRWithOptions($id3MetaVerifyWithOCRReq, $runtime);
    }

    /**
     * 服务端初始化.
     *
     * @param Request - InitAuthVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InitAuthVerifyResponse
     *
     * @param InitAuthVerifyRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return InitAuthVerifyResponse
     */
    public function initAuthVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->callbackToken) {
            @$body['CallbackToken'] = $request->callbackToken;
        }

        if (null !== $request->callbackUrl) {
            @$body['CallbackUrl'] = $request->callbackUrl;
        }

        if (null !== $request->cardPageNumber) {
            @$body['CardPageNumber'] = $request->cardPageNumber;
        }

        if (null !== $request->cardType) {
            @$body['CardType'] = $request->cardType;
        }

        if (null !== $request->docScanMode) {
            @$body['DocScanMode'] = $request->docScanMode;
        }

        if (null !== $request->idSpoof) {
            @$body['IdSpoof'] = $request->idSpoof;
        }

        if (null !== $request->metaInfo) {
            @$body['MetaInfo'] = $request->metaInfo;
        }

        if (null !== $request->outerOrderNo) {
            @$body['OuterOrderNo'] = $request->outerOrderNo;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->sceneId) {
            @$body['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InitAuthVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InitAuthVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 服务端初始化.
     *
     * @param Request - InitAuthVerifyRequest
     *
     * @returns InitAuthVerifyResponse
     *
     * @param InitAuthVerifyRequest $request
     *
     * @return InitAuthVerifyResponse
     */
    public function initAuthVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initAuthVerifyWithOptions($request, $runtime);
    }

    /**
     * Initiate an authentication request for image verification.
     *
     * @remarks
     * Before each authentication, use this interface to obtain the CertifyId, which is used to link various interfaces in the authentication request.
     *
     * @param Request - InitCardVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InitCardVerifyResponse
     *
     * @param InitCardVerifyRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return InitCardVerifyResponse
     */
    public function initCardVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callbackToken) {
            @$query['CallbackToken'] = $request->callbackToken;
        }

        if (null !== $request->callbackUrl) {
            @$query['CallbackUrl'] = $request->callbackUrl;
        }

        if (null !== $request->cardPageNumber) {
            @$query['CardPageNumber'] = $request->cardPageNumber;
        }

        if (null !== $request->cardType) {
            @$query['CardType'] = $request->cardType;
        }

        if (null !== $request->docScanMode) {
            @$query['DocScanMode'] = $request->docScanMode;
        }

        if (null !== $request->merchantBizId) {
            @$query['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->metaInfo) {
            @$query['MetaInfo'] = $request->metaInfo;
        }

        if (null !== $request->model) {
            @$query['Model'] = $request->model;
        }

        if (null !== $request->pictureSave) {
            @$query['PictureSave'] = $request->pictureSave;
        }

        if (null !== $request->verifyMeta) {
            @$query['VerifyMeta'] = $request->verifyMeta;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InitCardVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InitCardVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initiate an authentication request for image verification.
     *
     * @remarks
     * Before each authentication, use this interface to obtain the CertifyId, which is used to link various interfaces in the authentication request.
     *
     * @param Request - InitCardVerifyRequest
     *
     * @returns InitCardVerifyResponse
     *
     * @param InitCardVerifyRequest $request
     *
     * @return InitCardVerifyResponse
     */
    public function initCardVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initCardVerifyWithOptions($request, $runtime);
    }

    /**
     * Real-Person Server Initialization Interface.
     *
     * @remarks
     * - Service Address: cloudauth.aliyuncs.com
     * - Request Method: HTTPS POST and GET.
     * - This interface uses different parameters for different product solutions. For details, please refer to the [official documentation](https://help.aliyun.com/zh/id-verification/financial-grade-id-verification/product-overview/introduction/?spm=a2c4g.11186623.help-menu-2401581.d_0_0.13f644ecRzFHfm&scm=20140722.H_99169._.OR_help-T_cn~zh-V_1).
     * #### Image Format Requirements
     * When performing real-person authentication, please provide images that meet all of the following conditions:
     * - Recent photo with a clear, unobstructed face, natural expression, and facing the camera directly.
     * - Clear photo with normal exposure, no overexposure, underexposure, or halo effects, and no significant angle deviation.
     * - Resolution not exceeding 1920*1080, at least 640*480, recommended short side scaled to 720 pixels, compression ratio greater than 0.9.
     * - Photo size: <1MB.
     * - Supports 90, 180, and 270-degree photos; in the case of multiple faces, the largest face will be selected.
     *
     * @param Request - InitFaceVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InitFaceVerifyResponse
     *
     * @param InitFaceVerifyRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return InitFaceVerifyResponse
     */
    public function initFaceVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appQualityCheck) {
            @$query['AppQualityCheck'] = $request->appQualityCheck;
        }

        if (null !== $request->birthday) {
            @$query['Birthday'] = $request->birthday;
        }

        if (null !== $request->callbackToken) {
            @$query['CallbackToken'] = $request->callbackToken;
        }

        if (null !== $request->callbackUrl) {
            @$query['CallbackUrl'] = $request->callbackUrl;
        }

        if (null !== $request->cameraSelection) {
            @$query['CameraSelection'] = $request->cameraSelection;
        }

        if (null !== $request->certName) {
            @$query['CertName'] = $request->certName;
        }

        if (null !== $request->certNo) {
            @$query['CertNo'] = $request->certNo;
        }

        if (null !== $request->certType) {
            @$query['CertType'] = $request->certType;
        }

        if (null !== $request->certifyId) {
            @$query['CertifyId'] = $request->certifyId;
        }

        if (null !== $request->certifyUrlStyle) {
            @$query['CertifyUrlStyle'] = $request->certifyUrlStyle;
        }

        if (null !== $request->certifyUrlType) {
            @$query['CertifyUrlType'] = $request->certifyUrlType;
        }

        if (null !== $request->encryptType) {
            @$query['EncryptType'] = $request->encryptType;
        }

        if (null !== $request->faceContrastPictureUrl) {
            @$query['FaceContrastPictureUrl'] = $request->faceContrastPictureUrl;
        }

        if (null !== $request->faceGuardOutput) {
            @$query['FaceGuardOutput'] = $request->faceGuardOutput;
        }

        if (null !== $request->h5DegradeConfirmBtn) {
            @$query['H5DegradeConfirmBtn'] = $request->h5DegradeConfirmBtn;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->metaInfo) {
            @$query['MetaInfo'] = $request->metaInfo;
        }

        if (null !== $request->mobile) {
            @$query['Mobile'] = $request->mobile;
        }

        if (null !== $request->mode) {
            @$query['Mode'] = $request->mode;
        }

        if (null !== $request->needMultiFaceCheck) {
            @$query['NeedMultiFaceCheck'] = $request->needMultiFaceCheck;
        }

        if (null !== $request->ossBucketName) {
            @$query['OssBucketName'] = $request->ossBucketName;
        }

        if (null !== $request->ossObjectName) {
            @$query['OssObjectName'] = $request->ossObjectName;
        }

        if (null !== $request->outerOrderNo) {
            @$query['OuterOrderNo'] = $request->outerOrderNo;
        }

        if (null !== $request->procedurePriority) {
            @$query['ProcedurePriority'] = $request->procedurePriority;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->rarelyCharacters) {
            @$query['RarelyCharacters'] = $request->rarelyCharacters;
        }

        if (null !== $request->readImg) {
            @$query['ReadImg'] = $request->readImg;
        }

        if (null !== $request->returnUrl) {
            @$query['ReturnUrl'] = $request->returnUrl;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        if (null !== $request->suitableType) {
            @$query['SuitableType'] = $request->suitableType;
        }

        if (null !== $request->uiCustomUrl) {
            @$query['UiCustomUrl'] = $request->uiCustomUrl;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->validityDate) {
            @$query['ValidityDate'] = $request->validityDate;
        }

        if (null !== $request->videoEvidence) {
            @$query['VideoEvidence'] = $request->videoEvidence;
        }

        if (null !== $request->voluntaryCustomizedContent) {
            @$query['VoluntaryCustomizedContent'] = $request->voluntaryCustomizedContent;
        }

        $body = [];
        if (null !== $request->authId) {
            @$body['AuthId'] = $request->authId;
        }

        if (null !== $request->crop) {
            @$body['Crop'] = $request->crop;
        }

        if (null !== $request->faceContrastPicture) {
            @$body['FaceContrastPicture'] = $request->faceContrastPicture;
        }

        if (null !== $request->model) {
            @$body['Model'] = $request->model;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InitFaceVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InitFaceVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Real-Person Server Initialization Interface.
     *
     * @remarks
     * - Service Address: cloudauth.aliyuncs.com
     * - Request Method: HTTPS POST and GET.
     * - This interface uses different parameters for different product solutions. For details, please refer to the [official documentation](https://help.aliyun.com/zh/id-verification/financial-grade-id-verification/product-overview/introduction/?spm=a2c4g.11186623.help-menu-2401581.d_0_0.13f644ecRzFHfm&scm=20140722.H_99169._.OR_help-T_cn~zh-V_1).
     * #### Image Format Requirements
     * When performing real-person authentication, please provide images that meet all of the following conditions:
     * - Recent photo with a clear, unobstructed face, natural expression, and facing the camera directly.
     * - Clear photo with normal exposure, no overexposure, underexposure, or halo effects, and no significant angle deviation.
     * - Resolution not exceeding 1920*1080, at least 640*480, recommended short side scaled to 720 pixels, compression ratio greater than 0.9.
     * - Photo size: <1MB.
     * - Supports 90, 180, and 270-degree photos; in the case of multiple faces, the largest face will be selected.
     *
     * @param Request - InitFaceVerifyRequest
     *
     * @returns InitFaceVerifyResponse
     *
     * @param InitFaceVerifyRequest $request
     *
     * @return InitFaceVerifyResponse
     */
    public function initFaceVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initFaceVerifyWithOptions($request, $runtime);
    }

    /**
     * Add Real Person Whitelist.
     *
     * @param Request - InsertWhiteListSettingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InsertWhiteListSettingResponse
     *
     * @param InsertWhiteListSettingRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return InsertWhiteListSettingResponse
     */
    public function insertWhiteListSettingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certNo) {
            @$query['CertNo'] = $request->certNo;
        }

        if (null !== $request->certifyId) {
            @$query['CertifyId'] = $request->certifyId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        if (null !== $request->serviceCode) {
            @$query['ServiceCode'] = $request->serviceCode;
        }

        if (null !== $request->validDay) {
            @$query['ValidDay'] = $request->validDay;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InsertWhiteListSetting',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InsertWhiteListSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add Real Person Whitelist.
     *
     * @param Request - InsertWhiteListSettingRequest
     *
     * @returns InsertWhiteListSettingResponse
     *
     * @param InsertWhiteListSettingRequest $request
     *
     * @return InsertWhiteListSettingResponse
     */
    public function insertWhiteListSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->insertWhiteListSettingWithOptions($request, $runtime);
    }

    /**
     * Silent Liveness Face (LivenessFaceVerify) refers to a service that performs real face detection by inputting pre-obtained face images through an API. The algorithm primarily identifies whether the face is from a screen recording, printed picture, or other types of liveness attacks. This service is suitable for low-risk business scenarios or in conjunction with offline facial recognition SDKs. If your business has higher requirements for real face security, it is recommended to integrate App or WebSDK mode, or integrate with Deepfake face detection services to assist in identifying more dimensions of face forgery risks.
     *
     * @remarks
     * Invoke the LivenessFaceVerify interface to perform liveness detection on a face image.
     *
     * @param Request - LivenessFaceVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LivenessFaceVerifyResponse
     *
     * @param LivenessFaceVerifyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return LivenessFaceVerifyResponse
     */
    public function livenessFaceVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->model) {
            @$query['Model'] = $request->model;
        }

        $body = [];
        if (null !== $request->certifyId) {
            @$body['CertifyId'] = $request->certifyId;
        }

        if (null !== $request->crop) {
            @$body['Crop'] = $request->crop;
        }

        if (null !== $request->deviceToken) {
            @$body['DeviceToken'] = $request->deviceToken;
        }

        if (null !== $request->faceContrastPicture) {
            @$body['FaceContrastPicture'] = $request->faceContrastPicture;
        }

        if (null !== $request->faceContrastPictureUrl) {
            @$body['FaceContrastPictureUrl'] = $request->faceContrastPictureUrl;
        }

        if (null !== $request->ip) {
            @$body['Ip'] = $request->ip;
        }

        if (null !== $request->mobile) {
            @$body['Mobile'] = $request->mobile;
        }

        if (null !== $request->ossBucketName) {
            @$body['OssBucketName'] = $request->ossBucketName;
        }

        if (null !== $request->ossObjectName) {
            @$body['OssObjectName'] = $request->ossObjectName;
        }

        if (null !== $request->outerOrderNo) {
            @$body['OuterOrderNo'] = $request->outerOrderNo;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->sceneId) {
            @$body['SceneId'] = $request->sceneId;
        }

        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'LivenessFaceVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LivenessFaceVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Silent Liveness Face (LivenessFaceVerify) refers to a service that performs real face detection by inputting pre-obtained face images through an API. The algorithm primarily identifies whether the face is from a screen recording, printed picture, or other types of liveness attacks. This service is suitable for low-risk business scenarios or in conjunction with offline facial recognition SDKs. If your business has higher requirements for real face security, it is recommended to integrate App or WebSDK mode, or integrate with Deepfake face detection services to assist in identifying more dimensions of face forgery risks.
     *
     * @remarks
     * Invoke the LivenessFaceVerify interface to perform liveness detection on a face image.
     *
     * @param Request - LivenessFaceVerifyRequest
     *
     * @returns LivenessFaceVerifyResponse
     *
     * @param LivenessFaceVerifyRequest $request
     *
     * @return LivenessFaceVerifyResponse
     */
    public function livenessFaceVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->livenessFaceVerifyWithOptions($request, $runtime);
    }

    /**
     * Mobile Two-Factor Verification.
     *
     * @remarks
     * Input the phone number and name, verify their authenticity and consistency through authoritative data sources.
     *
     * @param Request - Mobile2MetaVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Mobile2MetaVerifyResponse
     *
     * @param Mobile2MetaVerifyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return Mobile2MetaVerifyResponse
     */
    public function mobile2MetaVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->mobile) {
            @$body['Mobile'] = $request->mobile;
        }

        if (null !== $request->paramType) {
            @$body['ParamType'] = $request->paramType;
        }

        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Mobile2MetaVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return Mobile2MetaVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Mobile Two-Factor Verification.
     *
     * @remarks
     * Input the phone number and name, verify their authenticity and consistency through authoritative data sources.
     *
     * @param Request - Mobile2MetaVerifyRequest
     *
     * @returns Mobile2MetaVerifyResponse
     *
     * @param Mobile2MetaVerifyRequest $request
     *
     * @return Mobile2MetaVerifyResponse
     */
    public function mobile2MetaVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mobile2MetaVerifyWithOptions($request, $runtime);
    }

    /**
     * Detailed Three-Element Verification for Phone Number_Standard Version.
     *
     * @remarks
     * Input the phone number, name, and ID number to verify their authenticity and consistency through authoritative data sources. If they do not match, the reason for the mismatch is returned.
     *
     * @param Request - Mobile3MetaDetailStandardVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Mobile3MetaDetailStandardVerifyResponse
     *
     * @param Mobile3MetaDetailStandardVerifyRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return Mobile3MetaDetailStandardVerifyResponse
     */
    public function mobile3MetaDetailStandardVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->identifyNum) {
            @$body['IdentifyNum'] = $request->identifyNum;
        }

        if (null !== $request->mobile) {
            @$body['Mobile'] = $request->mobile;
        }

        if (null !== $request->paramType) {
            @$body['ParamType'] = $request->paramType;
        }

        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Mobile3MetaDetailStandardVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return Mobile3MetaDetailStandardVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detailed Three-Element Verification for Phone Number_Standard Version.
     *
     * @remarks
     * Input the phone number, name, and ID number to verify their authenticity and consistency through authoritative data sources. If they do not match, the reason for the mismatch is returned.
     *
     * @param Request - Mobile3MetaDetailStandardVerifyRequest
     *
     * @returns Mobile3MetaDetailStandardVerifyResponse
     *
     * @param Mobile3MetaDetailStandardVerifyRequest $request
     *
     * @return Mobile3MetaDetailStandardVerifyResponse
     */
    public function mobile3MetaDetailStandardVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mobile3MetaDetailStandardVerifyWithOptions($request, $runtime);
    }

    /**
     * Detailed Mobile Three-Element Verification Interface.
     *
     * @remarks
     * - Service address: cloudauth.aliyuncs.com (IPv4) or cloudauth-dualstack.aliyuncs.com (IPv6).
     * - Request method: POST and GET.
     * - Transfer protocol: HTTPS.
     *
     * @param Request - Mobile3MetaDetailVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Mobile3MetaDetailVerifyResponse
     *
     * @param Mobile3MetaDetailVerifyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return Mobile3MetaDetailVerifyResponse
     */
    public function mobile3MetaDetailVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->identifyNum) {
            @$body['IdentifyNum'] = $request->identifyNum;
        }

        if (null !== $request->mobile) {
            @$body['Mobile'] = $request->mobile;
        }

        if (null !== $request->paramType) {
            @$body['ParamType'] = $request->paramType;
        }

        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Mobile3MetaDetailVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return Mobile3MetaDetailVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detailed Mobile Three-Element Verification Interface.
     *
     * @remarks
     * - Service address: cloudauth.aliyuncs.com (IPv4) or cloudauth-dualstack.aliyuncs.com (IPv6).
     * - Request method: POST and GET.
     * - Transfer protocol: HTTPS.
     *
     * @param Request - Mobile3MetaDetailVerifyRequest
     *
     * @returns Mobile3MetaDetailVerifyResponse
     *
     * @param Mobile3MetaDetailVerifyRequest $request
     *
     * @return Mobile3MetaDetailVerifyResponse
     */
    public function mobile3MetaDetailVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mobile3MetaDetailVerifyWithOptions($request, $runtime);
    }

    /**
     * Simplified Three-Element Verification for Phone Number_Standard Version.
     *
     * @remarks
     * Input the phone number, name, and ID number to verify their authenticity and consistency through authoritative data sources.
     *
     * @param Request - Mobile3MetaSimpleStandardVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Mobile3MetaSimpleStandardVerifyResponse
     *
     * @param Mobile3MetaSimpleStandardVerifyRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return Mobile3MetaSimpleStandardVerifyResponse
     */
    public function mobile3MetaSimpleStandardVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->identifyNum) {
            @$body['IdentifyNum'] = $request->identifyNum;
        }

        if (null !== $request->mobile) {
            @$body['Mobile'] = $request->mobile;
        }

        if (null !== $request->paramType) {
            @$body['ParamType'] = $request->paramType;
        }

        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Mobile3MetaSimpleStandardVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return Mobile3MetaSimpleStandardVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Simplified Three-Element Verification for Phone Number_Standard Version.
     *
     * @remarks
     * Input the phone number, name, and ID number to verify their authenticity and consistency through authoritative data sources.
     *
     * @param Request - Mobile3MetaSimpleStandardVerifyRequest
     *
     * @returns Mobile3MetaSimpleStandardVerifyResponse
     *
     * @param Mobile3MetaSimpleStandardVerifyRequest $request
     *
     * @return Mobile3MetaSimpleStandardVerifyResponse
     */
    public function mobile3MetaSimpleStandardVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mobile3MetaSimpleStandardVerifyWithOptions($request, $runtime);
    }

    /**
     * Mobile Three Elements Simplified Interface.
     *
     * @remarks
     * - Service address: cloudauth.aliyuncs.com (IPv4) or cloudauth-dualstack.aliyuncs.com (IPv6).
     * - Request method: POST and GET.
     * - Transfer protocol: HTTPS.
     *
     * @param Request - Mobile3MetaSimpleVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Mobile3MetaSimpleVerifyResponse
     *
     * @param Mobile3MetaSimpleVerifyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return Mobile3MetaSimpleVerifyResponse
     */
    public function mobile3MetaSimpleVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->identifyNum) {
            @$body['IdentifyNum'] = $request->identifyNum;
        }

        if (null !== $request->mobile) {
            @$body['Mobile'] = $request->mobile;
        }

        if (null !== $request->paramType) {
            @$body['ParamType'] = $request->paramType;
        }

        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Mobile3MetaSimpleVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return Mobile3MetaSimpleVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Mobile Three Elements Simplified Interface.
     *
     * @remarks
     * - Service address: cloudauth.aliyuncs.com (IPv4) or cloudauth-dualstack.aliyuncs.com (IPv6).
     * - Request method: POST and GET.
     * - Transfer protocol: HTTPS.
     *
     * @param Request - Mobile3MetaSimpleVerifyRequest
     *
     * @returns Mobile3MetaSimpleVerifyResponse
     *
     * @param Mobile3MetaSimpleVerifyRequest $request
     *
     * @return Mobile3MetaSimpleVerifyResponse
     */
    public function mobile3MetaSimpleVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mobile3MetaSimpleVerifyWithOptions($request, $runtime);
    }

    /**
     * Number Detection.
     *
     * @param Request - MobileDetectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MobileDetectResponse
     *
     * @param MobileDetectRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return MobileDetectResponse
     */
    public function mobileDetectWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->mobiles) {
            @$body['Mobiles'] = $request->mobiles;
        }

        if (null !== $request->paramType) {
            @$body['ParamType'] = $request->paramType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'MobileDetect',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MobileDetectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Number Detection.
     *
     * @param Request - MobileDetectRequest
     *
     * @returns MobileDetectResponse
     *
     * @param MobileDetectRequest $request
     *
     * @return MobileDetectResponse
     */
    public function mobileDetect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mobileDetectWithOptions($request, $runtime);
    }

    /**
     * Query the online status of a mobile number.
     *
     * @param Request - MobileOnlineStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MobileOnlineStatusResponse
     *
     * @param MobileOnlineStatusRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return MobileOnlineStatusResponse
     */
    public function mobileOnlineStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->mobile) {
            @$body['Mobile'] = $request->mobile;
        }

        if (null !== $request->paramType) {
            @$body['ParamType'] = $request->paramType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'MobileOnlineStatus',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MobileOnlineStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the online status of a mobile number.
     *
     * @param Request - MobileOnlineStatusRequest
     *
     * @returns MobileOnlineStatusResponse
     *
     * @param MobileOnlineStatusRequest $request
     *
     * @return MobileOnlineStatusResponse
     */
    public function mobileOnlineStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mobileOnlineStatusWithOptions($request, $runtime);
    }

    /**
     * Query the online duration of a mobile number.
     *
     * @param Request - MobileOnlineTimeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MobileOnlineTimeResponse
     *
     * @param MobileOnlineTimeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return MobileOnlineTimeResponse
     */
    public function mobileOnlineTimeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->mobile) {
            @$body['Mobile'] = $request->mobile;
        }

        if (null !== $request->paramType) {
            @$body['ParamType'] = $request->paramType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'MobileOnlineTime',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MobileOnlineTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the online duration of a mobile number.
     *
     * @param Request - MobileOnlineTimeRequest
     *
     * @returns MobileOnlineTimeResponse
     *
     * @param MobileOnlineTimeRequest $request
     *
     * @return MobileOnlineTimeResponse
     */
    public function mobileOnlineTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mobileOnlineTimeWithOptions($request, $runtime);
    }

    /**
     * Modify Black and White List Policy.
     *
     * @remarks
     * - Service Address: cloudauth.aliyuncs.com.
     * - Request Method: HTTPS POST and GET.
     * - Interface Description: Add or modify blacklist rule.
     *
     * @param tmpReq - ModifyBlackListStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyBlackListStrategyResponse
     *
     * @param ModifyBlackListStrategyRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyBlackListStrategyResponse
     */
    public function modifyBlackListStrategyWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyBlackListStrategyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->blackListStrategy) {
            $request->blackListStrategyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->blackListStrategy, 'BlackListStrategy', 'json');
        }

        $query = [];
        if (null !== $request->blackListStrategyShrink) {
            @$query['BlackListStrategy'] = $request->blackListStrategyShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyBlackListStrategy',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyBlackListStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify Black and White List Policy.
     *
     * @remarks
     * - Service Address: cloudauth.aliyuncs.com.
     * - Request Method: HTTPS POST and GET.
     * - Interface Description: Add or modify blacklist rule.
     *
     * @param Request - ModifyBlackListStrategyRequest
     *
     * @returns ModifyBlackListStrategyResponse
     *
     * @param ModifyBlackListStrategyRequest $request
     *
     * @return ModifyBlackListStrategyResponse
     */
    public function modifyBlackListStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBlackListStrategyWithOptions($request, $runtime);
    }

    /**
     * Modify Security Control Strategy.
     *
     * @remarks
     * - Request Method: Supports sending requests via HTTPS POST method.
     * - Request Address: cloudauth.aliyuncs.com.
     *
     * @param tmpReq - ModifyControlStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyControlStrategyResponse
     *
     * @param ModifyControlStrategyRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyControlStrategyResponse
     */
    public function modifyControlStrategyWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyControlStrategyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->controlStrategyList) {
            $request->controlStrategyListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->controlStrategyList, 'ControlStrategyList', 'json');
        }

        $query = [];
        if (null !== $request->controlStrategyListShrink) {
            @$query['ControlStrategyList'] = $request->controlStrategyListShrink;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyControlStrategy',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyControlStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify Security Control Strategy.
     *
     * @remarks
     * - Request Method: Supports sending requests via HTTPS POST method.
     * - Request Address: cloudauth.aliyuncs.com.
     *
     * @param Request - ModifyControlStrategyRequest
     *
     * @returns ModifyControlStrategyResponse
     *
     * @param ModifyControlStrategyRequest $request
     *
     * @return ModifyControlStrategyResponse
     */
    public function modifyControlStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyControlStrategyWithOptions($request, $runtime);
    }

    /**
     * Information Verification Security Management.
     *
     * @remarks
     * - Request Method: Supports sending requests via HTTPS POST and GET methods.
     * - Service Address: cloudauth.aliyuncs.com.
     *
     * @param tmpReq - ModifyCustomizeFlowStrategyListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCustomizeFlowStrategyListResponse
     *
     * @param ModifyCustomizeFlowStrategyListRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyCustomizeFlowStrategyListResponse
     */
    public function modifyCustomizeFlowStrategyListWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyCustomizeFlowStrategyListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->strategyObject) {
            $request->strategyObjectShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->strategyObject, 'StrategyObject', 'json');
        }

        $query = [];
        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->strategyObjectShrink) {
            @$query['StrategyObject'] = $request->strategyObjectShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyCustomizeFlowStrategyList',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyCustomizeFlowStrategyListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Information Verification Security Management.
     *
     * @remarks
     * - Request Method: Supports sending requests via HTTPS POST and GET methods.
     * - Service Address: cloudauth.aliyuncs.com.
     *
     * @param Request - ModifyCustomizeFlowStrategyListRequest
     *
     * @returns ModifyCustomizeFlowStrategyListResponse
     *
     * @param ModifyCustomizeFlowStrategyListRequest $request
     *
     * @return ModifyCustomizeFlowStrategyListResponse
     */
    public function modifyCustomizeFlowStrategyList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCustomizeFlowStrategyListWithOptions($request, $runtime);
    }

    /**
     * Call ModifyDeviceInfo to update device-related information, such as extending the device authorization validity period, updating the business party\\"s custom business identifier, and device ID. Suitable for scenarios like renewing the device validity period.
     *
     * @remarks
     * Request Method: Supports sending requests using HTTPS POST and GET methods.
     *
     * @param Request - ModifyDeviceInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDeviceInfoResponse
     *
     * @param ModifyDeviceInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyDeviceInfoResponse
     */
    public function modifyDeviceInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->expiredDay) {
            @$query['ExpiredDay'] = $request->expiredDay;
        }

        if (null !== $request->userDeviceId) {
            @$query['UserDeviceId'] = $request->userDeviceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDeviceInfo',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDeviceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Call ModifyDeviceInfo to update device-related information, such as extending the device authorization validity period, updating the business party\\"s custom business identifier, and device ID. Suitable for scenarios like renewing the device validity period.
     *
     * @remarks
     * Request Method: Supports sending requests using HTTPS POST and GET methods.
     *
     * @param Request - ModifyDeviceInfoRequest
     *
     * @returns ModifyDeviceInfoResponse
     *
     * @param ModifyDeviceInfoRequest $request
     *
     * @return ModifyDeviceInfoResponse
     */
    public function modifyDeviceInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDeviceInfoWithOptions($request, $runtime);
    }

    /**
     * Paging Query for Real Person Whitelist Configuration.
     *
     * @param Request - PageQueryWhiteListSettingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PageQueryWhiteListSettingResponse
     *
     * @param PageQueryWhiteListSettingRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return PageQueryWhiteListSettingResponse
     */
    public function pageQueryWhiteListSettingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certNo) {
            @$query['CertNo'] = $request->certNo;
        }

        if (null !== $request->certifyId) {
            @$query['CertifyId'] = $request->certifyId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        if (null !== $request->serviceCode) {
            @$query['ServiceCode'] = $request->serviceCode;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->validEndDate) {
            @$query['ValidEndDate'] = $request->validEndDate;
        }

        if (null !== $request->validStartDate) {
            @$query['ValidStartDate'] = $request->validStartDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PageQueryWhiteListSetting',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PageQueryWhiteListSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Paging Query for Real Person Whitelist Configuration.
     *
     * @param Request - PageQueryWhiteListSettingRequest
     *
     * @returns PageQueryWhiteListSettingResponse
     *
     * @param PageQueryWhiteListSettingRequest $request
     *
     * @return PageQueryWhiteListSettingResponse
     */
    public function pageQueryWhiteListSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pageQueryWhiteListSettingWithOptions($request, $runtime);
    }

    /**
     * Query Blacklist and Whitelist Policies.
     *
     * @remarks
     * - Request URL: cloudauth.aliyuncs.com
     * - Request Method: HTTPS POST and GET.
     * > Supports setting blacklists for IP, ID number, phone number, bank card number, etc. When a blacklist is hit, the system rejects the request and returns a fixed error code.
     * Supports setting blacklists for IP, ID number, phone number, bank card number, etc. When a blacklist is hit, the system rejects the request and returns a fixed error code.
     *
     * @param Request - QueryBlackListStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryBlackListStrategyResponse
     *
     * @param QueryBlackListStrategyRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryBlackListStrategyResponse
     */
    public function queryBlackListStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryBlackListStrategy',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryBlackListStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Blacklist and Whitelist Policies.
     *
     * @remarks
     * - Request URL: cloudauth.aliyuncs.com
     * - Request Method: HTTPS POST and GET.
     * > Supports setting blacklists for IP, ID number, phone number, bank card number, etc. When a blacklist is hit, the system rejects the request and returns a fixed error code.
     * Supports setting blacklists for IP, ID number, phone number, bank card number, etc. When a blacklist is hit, the system rejects the request and returns a fixed error code.
     *
     * @param Request - QueryBlackListStrategyRequest
     *
     * @returns QueryBlackListStrategyResponse
     *
     * @param QueryBlackListStrategyRequest $request
     *
     * @return QueryBlackListStrategyResponse
     */
    public function queryBlackListStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBlackListStrategyWithOptions($request, $runtime);
    }

    /**
     * Query Security Control Strategy.
     *
     * @remarks
     * - Request Method: Supports sending requests via HTTPS POST and GET methods.
     * - Request Address: cloudauth.aliyuncs.com.
     *
     * @param Request - QueryControlStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryControlStrategyResponse
     *
     * @param QueryControlStrategyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryControlStrategyResponse
     */
    public function queryControlStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryControlStrategy',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryControlStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Security Control Strategy.
     *
     * @remarks
     * - Request Method: Supports sending requests via HTTPS POST and GET methods.
     * - Request Address: cloudauth.aliyuncs.com.
     *
     * @param Request - QueryControlStrategyRequest
     *
     * @returns QueryControlStrategyResponse
     *
     * @param QueryControlStrategyRequest $request
     *
     * @return QueryControlStrategyResponse
     */
    public function queryControlStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryControlStrategyWithOptions($request, $runtime);
    }

    /**
     * Query Custom Flow Control Strategy.
     *
     * @remarks
     * - Service Address: cloudauth.aliyuncs.com
     * - Request Method: HTTPS POST and GET.
     * - Security Rules: These are rules to ensure system security, such as monitoring for API abuse, account theft, etc. When a threshold is triggered, the system supports alerting.
     *
     * @param Request - QueryCustomizeFlowStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCustomizeFlowStrategyResponse
     *
     * @param QueryCustomizeFlowStrategyRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryCustomizeFlowStrategyResponse
     */
    public function queryCustomizeFlowStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryCustomizeFlowStrategy',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCustomizeFlowStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Custom Flow Control Strategy.
     *
     * @remarks
     * - Service Address: cloudauth.aliyuncs.com
     * - Request Method: HTTPS POST and GET.
     * - Security Rules: These are rules to ensure system security, such as monitoring for API abuse, account theft, etc. When a threshold is triggered, the system supports alerting.
     *
     * @param Request - QueryCustomizeFlowStrategyRequest
     *
     * @returns QueryCustomizeFlowStrategyResponse
     *
     * @param QueryCustomizeFlowStrategyRequest $request
     *
     * @return QueryCustomizeFlowStrategyResponse
     */
    public function queryCustomizeFlowStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCustomizeFlowStrategyWithOptions($request, $runtime);
    }

    /**
     * Query Scene Configuration.
     *
     * @remarks
     * - Service address: cloudauth.aliyuncs.com.
     * - Request method: HTTPS POST and GET.
     *
     * @param Request - QuerySceneConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySceneConfigsResponse
     *
     * @param QuerySceneConfigsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QuerySceneConfigsResponse
     */
    public function querySceneConfigsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySceneConfigs',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySceneConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Scene Configuration.
     *
     * @remarks
     * - Service address: cloudauth.aliyuncs.com.
     * - Request method: HTTPS POST and GET.
     *
     * @param Request - QuerySceneConfigsRequest
     *
     * @returns QuerySceneConfigsResponse
     *
     * @param QuerySceneConfigsRequest $request
     *
     * @return QuerySceneConfigsResponse
     */
    public function querySceneConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySceneConfigsWithOptions($request, $runtime);
    }

    /**
     * Query Real-Person Download Task.
     *
     * @remarks
     * Obtain the download link for statistical call data files under the product plan based on query conditions.
     * - Method: HTTPS POST
     * - Service Address: cloudauth.aliyuncs.com
     * > The real-person authentication product uses CertifyId to count the number of calls. For ease of reconciliation, please retain the CertifyId field in your system.
     *
     * @param Request - QueryVerifyDownloadTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryVerifyDownloadTaskResponse
     *
     * @param QueryVerifyDownloadTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryVerifyDownloadTaskResponse
     */
    public function queryVerifyDownloadTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryVerifyDownloadTask',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryVerifyDownloadTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Real-Person Download Task.
     *
     * @remarks
     * Obtain the download link for statistical call data files under the product plan based on query conditions.
     * - Method: HTTPS POST
     * - Service Address: cloudauth.aliyuncs.com
     * > The real-person authentication product uses CertifyId to count the number of calls. For ease of reconciliation, please retain the CertifyId field in your system.
     *
     * @param Request - QueryVerifyDownloadTaskRequest
     *
     * @returns QueryVerifyDownloadTaskResponse
     *
     * @param QueryVerifyDownloadTaskRequest $request
     *
     * @return QueryVerifyDownloadTaskResponse
     */
    public function queryVerifyDownloadTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryVerifyDownloadTaskWithOptions($request, $runtime);
    }

    /**
     * Query Flow Package.
     *
     * @remarks
     * - Service address: cloudauth.aliyuncs.com
     * - Request method: HTTPS POST and GET.
     * - This interface uses different parameters for different product solutions. For details, please refer to the [official documentation](https://help.aliyun.com/zh/id-verification/financial-grade-id-verification/product-overview/introduction/?spm=a2c4g.11186623.help-menu-2401581.d_0_0.13f644ecRzFHfm&scm=20140722.H_99169._.OR_help-T_cn~zh-V_1).
     *
     * @param Request - QueryVerifyFlowPackageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryVerifyFlowPackageResponse
     *
     * @param QueryVerifyFlowPackageRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryVerifyFlowPackageResponse
     */
    public function queryVerifyFlowPackageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryVerifyFlowPackage',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryVerifyFlowPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Flow Package.
     *
     * @remarks
     * - Service address: cloudauth.aliyuncs.com
     * - Request method: HTTPS POST and GET.
     * - This interface uses different parameters for different product solutions. For details, please refer to the [official documentation](https://help.aliyun.com/zh/id-verification/financial-grade-id-verification/product-overview/introduction/?spm=a2c4g.11186623.help-menu-2401581.d_0_0.13f644ecRzFHfm&scm=20140722.H_99169._.OR_help-T_cn~zh-V_1).
     *
     * @param Request - QueryVerifyFlowPackageRequest
     *
     * @returns QueryVerifyFlowPackageResponse
     *
     * @param QueryVerifyFlowPackageRequest $request
     *
     * @return QueryVerifyFlowPackageResponse
     */
    public function queryVerifyFlowPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryVerifyFlowPackageWithOptions($request, $runtime);
    }

    /**
     * Call Volume Statistics.
     *
     * @remarks
     * - Request URL: cloudauth.aliyuncs.com
     * - Request Method: HTTPS POST and GET.
     * > Real-person authentication products use CertifyId to count call volume. For ease of reconciliation, please retain the CertifyId field in your system.
     *
     * @param Request - QueryVerifyInvokeSatisticRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryVerifyInvokeSatisticResponse
     *
     * @param QueryVerifyInvokeSatisticRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryVerifyInvokeSatisticResponse
     */
    public function queryVerifyInvokeSatisticWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productProgramList) {
            @$query['ProductProgramList'] = $request->productProgramList;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->sceneIdList) {
            @$query['SceneIdList'] = $request->sceneIdList;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->statisticsType) {
            @$query['StatisticsType'] = $request->statisticsType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryVerifyInvokeSatistic',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryVerifyInvokeSatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Call Volume Statistics.
     *
     * @remarks
     * - Request URL: cloudauth.aliyuncs.com
     * - Request Method: HTTPS POST and GET.
     * > Real-person authentication products use CertifyId to count call volume. For ease of reconciliation, please retain the CertifyId field in your system.
     *
     * @param Request - QueryVerifyInvokeSatisticRequest
     *
     * @returns QueryVerifyInvokeSatisticResponse
     *
     * @param QueryVerifyInvokeSatisticRequest $request
     *
     * @return QueryVerifyInvokeSatisticResponse
     */
    public function queryVerifyInvokeSatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryVerifyInvokeSatisticWithOptions($request, $runtime);
    }

    /**
     * Delete Real Person Whitelist.
     *
     * @param tmpReq - RemoveWhiteListSettingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveWhiteListSettingResponse
     *
     * @param RemoveWhiteListSettingRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return RemoveWhiteListSettingResponse
     */
    public function removeWhiteListSettingWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RemoveWhiteListSettingShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ids) {
            $request->idsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ids, 'Ids', 'json');
        }

        $query = [];
        if (null !== $request->idsShrink) {
            @$query['Ids'] = $request->idsShrink;
        }

        if (null !== $request->serviceCode) {
            @$query['ServiceCode'] = $request->serviceCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveWhiteListSetting',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveWhiteListSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Real Person Whitelist.
     *
     * @param Request - RemoveWhiteListSettingRequest
     *
     * @returns RemoveWhiteListSettingResponse
     *
     * @param RemoveWhiteListSettingRequest $request
     *
     * @return RemoveWhiteListSettingResponse
     */
    public function removeWhiteListSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeWhiteListSettingWithOptions($request, $runtime);
    }

    /**
     * Update Ant Blockchain Transaction Scenario.
     *
     * @remarks
     * Update the information of a financial-level authentication scenario based on the scenario ID.
     * - Service address: cloudauth.aliyuncs.com.
     * - Request method: HTTPS POST.
     *
     * @param Request - UpdateAntCloudAuthSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAntCloudAuthSceneResponse
     *
     * @param UpdateAntCloudAuthSceneRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateAntCloudAuthSceneResponse
     */
    public function updateAntCloudAuthSceneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bindMiniProgram) {
            @$query['BindMiniProgram'] = $request->bindMiniProgram;
        }

        if (null !== $request->checkFileBody) {
            @$query['CheckFileBody'] = $request->checkFileBody;
        }

        if (null !== $request->checkFileName) {
            @$query['CheckFileName'] = $request->checkFileName;
        }

        if (null !== $request->miniProgramName) {
            @$query['MiniProgramName'] = $request->miniProgramName;
        }

        if (null !== $request->platform) {
            @$query['Platform'] = $request->platform;
        }

        if (null !== $request->returnPicCount) {
            @$query['ReturnPicCount'] = $request->returnPicCount;
        }

        if (null !== $request->returnVideoLength) {
            @$query['ReturnVideoLength'] = $request->returnVideoLength;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        if (null !== $request->sceneName) {
            @$query['SceneName'] = $request->sceneName;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->storeImage) {
            @$query['StoreImage'] = $request->storeImage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAntCloudAuthScene',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAntCloudAuthSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update Ant Blockchain Transaction Scenario.
     *
     * @remarks
     * Update the information of a financial-level authentication scenario based on the scenario ID.
     * - Service address: cloudauth.aliyuncs.com.
     * - Request method: HTTPS POST.
     *
     * @param Request - UpdateAntCloudAuthSceneRequest
     *
     * @returns UpdateAntCloudAuthSceneResponse
     *
     * @param UpdateAntCloudAuthSceneRequest $request
     *
     * @return UpdateAntCloudAuthSceneResponse
     */
    public function updateAntCloudAuthScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAntCloudAuthSceneWithOptions($request, $runtime);
    }

    /**
     * Update Scene Configuration.
     *
     * @remarks
     * - Request Method: Supports sending requests via HTTPS POST.
     * - Request URL: cloudauth.aliyuncs.com.
     *
     * @param Request - UpdateSceneConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSceneConfigResponse
     *
     * @param UpdateSceneConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateSceneConfigResponse
     */
    public function updateSceneConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->config) {
            @$body['config'] = $request->config;
        }

        if (null !== $request->id) {
            @$body['id'] = $request->id;
        }

        if (null !== $request->sceneId) {
            @$body['sceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateSceneConfig',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSceneConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update Scene Configuration.
     *
     * @remarks
     * - Request Method: Supports sending requests via HTTPS POST.
     * - Request URL: cloudauth.aliyuncs.com.
     *
     * @param Request - UpdateSceneConfigRequest
     *
     * @returns UpdateSceneConfigResponse
     *
     * @param UpdateSceneConfigRequest $request
     *
     * @return UpdateSceneConfigResponse
     */
    public function updateSceneConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSceneConfigWithOptions($request, $runtime);
    }

    /**
     * Five-Item Vehicle Information Recognition.
     *
     * @remarks
     * Query basic vehicle information through the license plate number and vehicle type.
     *
     * @param Request - Vehicle5ItemQueryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Vehicle5ItemQueryResponse
     *
     * @param Vehicle5ItemQueryRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return Vehicle5ItemQueryResponse
     */
    public function vehicle5ItemQueryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->paramType) {
            @$query['ParamType'] = $request->paramType;
        }

        if (null !== $request->vehicleNum) {
            @$query['VehicleNum'] = $request->vehicleNum;
        }

        if (null !== $request->vehicleType) {
            @$query['VehicleType'] = $request->vehicleType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'Vehicle5ItemQuery',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return Vehicle5ItemQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Five-Item Vehicle Information Recognition.
     *
     * @remarks
     * Query basic vehicle information through the license plate number and vehicle type.
     *
     * @param Request - Vehicle5ItemQueryRequest
     *
     * @returns Vehicle5ItemQueryResponse
     *
     * @param Vehicle5ItemQueryRequest $request
     *
     * @return Vehicle5ItemQueryResponse
     */
    public function vehicle5ItemQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->vehicle5ItemQueryWithOptions($request, $runtime);
    }

    /**
     * Vehicle Insurance Date Inquiry.
     *
     * @remarks
     * Query the vehicle insurance date through the license plate number, vehicle type, and vehicle identification number (VIN).
     *
     * @param Request - VehicleInsureQueryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VehicleInsureQueryResponse
     *
     * @param VehicleInsureQueryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return VehicleInsureQueryResponse
     */
    public function vehicleInsureQueryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->paramType) {
            @$query['ParamType'] = $request->paramType;
        }

        if (null !== $request->vehicleNum) {
            @$query['VehicleNum'] = $request->vehicleNum;
        }

        if (null !== $request->vehicleType) {
            @$query['VehicleType'] = $request->vehicleType;
        }

        if (null !== $request->vin) {
            @$query['Vin'] = $request->vin;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VehicleInsureQuery',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VehicleInsureQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Vehicle Insurance Date Inquiry.
     *
     * @remarks
     * Query the vehicle insurance date through the license plate number, vehicle type, and vehicle identification number (VIN).
     *
     * @param Request - VehicleInsureQueryRequest
     *
     * @returns VehicleInsureQueryResponse
     *
     * @param VehicleInsureQueryRequest $request
     *
     * @return VehicleInsureQueryResponse
     */
    public function vehicleInsureQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->vehicleInsureQueryWithOptions($request, $runtime);
    }

    /**
     * Vehicle Element Verification.
     *
     * @remarks
     * Verifies the consistency of name, ID number, vehicle license plate, and vehicle type.
     *
     * @param Request - VehicleMetaVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VehicleMetaVerifyResponse
     *
     * @param VehicleMetaVerifyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return VehicleMetaVerifyResponse
     */
    public function vehicleMetaVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->identifyNum) {
            @$query['IdentifyNum'] = $request->identifyNum;
        }

        if (null !== $request->paramType) {
            @$query['ParamType'] = $request->paramType;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        if (null !== $request->vehicleNum) {
            @$query['VehicleNum'] = $request->vehicleNum;
        }

        if (null !== $request->vehicleType) {
            @$query['VehicleType'] = $request->vehicleType;
        }

        if (null !== $request->verifyMetaType) {
            @$query['VerifyMetaType'] = $request->verifyMetaType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VehicleMetaVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VehicleMetaVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Vehicle Element Verification.
     *
     * @remarks
     * Verifies the consistency of name, ID number, vehicle license plate, and vehicle type.
     *
     * @param Request - VehicleMetaVerifyRequest
     *
     * @returns VehicleMetaVerifyResponse
     *
     * @param VehicleMetaVerifyRequest $request
     *
     * @return VehicleMetaVerifyResponse
     */
    public function vehicleMetaVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->vehicleMetaVerifyWithOptions($request, $runtime);
    }

    /**
     * Enhanced Vehicle Element Verification.
     *
     * @remarks
     * Verifies the consistency of name, ID number, license plate number, and vehicle type, and supports returning detailed vehicle information.
     *
     * @param Request - VehicleMetaVerifyV2Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VehicleMetaVerifyV2Response
     *
     * @param VehicleMetaVerifyV2Request $request
     * @param RuntimeOptions             $runtime
     *
     * @return VehicleMetaVerifyV2Response
     */
    public function vehicleMetaVerifyV2WithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->identifyNum) {
            @$query['IdentifyNum'] = $request->identifyNum;
        }

        if (null !== $request->paramType) {
            @$query['ParamType'] = $request->paramType;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        if (null !== $request->vehicleNum) {
            @$query['VehicleNum'] = $request->vehicleNum;
        }

        if (null !== $request->vehicleType) {
            @$query['VehicleType'] = $request->vehicleType;
        }

        if (null !== $request->verifyMetaType) {
            @$query['VerifyMetaType'] = $request->verifyMetaType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VehicleMetaVerifyV2',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VehicleMetaVerifyV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enhanced Vehicle Element Verification.
     *
     * @remarks
     * Verifies the consistency of name, ID number, license plate number, and vehicle type, and supports returning detailed vehicle information.
     *
     * @param Request - VehicleMetaVerifyV2Request
     *
     * @returns VehicleMetaVerifyV2Response
     *
     * @param VehicleMetaVerifyV2Request $request
     *
     * @return VehicleMetaVerifyV2Response
     */
    public function vehicleMetaVerifyV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->vehicleMetaVerifyV2WithOptions($request, $runtime);
    }

    /**
     * Vehicle Information Recognition.
     *
     * @remarks
     * Query detailed vehicle information through the license plate number and vehicle type.
     *
     * @param Request - VehicleQueryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VehicleQueryResponse
     *
     * @param VehicleQueryRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return VehicleQueryResponse
     */
    public function vehicleQueryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->paramType) {
            @$query['ParamType'] = $request->paramType;
        }

        if (null !== $request->vehicleNum) {
            @$query['VehicleNum'] = $request->vehicleNum;
        }

        if (null !== $request->vehicleType) {
            @$query['VehicleType'] = $request->vehicleType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VehicleQuery',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VehicleQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Vehicle Information Recognition.
     *
     * @remarks
     * Query detailed vehicle information through the license plate number and vehicle type.
     *
     * @param Request - VehicleQueryRequest
     *
     * @returns VehicleQueryResponse
     *
     * @param VehicleQueryRequest $request
     *
     * @return VehicleQueryResponse
     */
    public function vehicleQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->vehicleQueryWithOptions($request, $runtime);
    }

    /**
     * Call VerifyMaterial, in a pure server-side access authentication solution, input name, ID number, portrait photo, and front and back photos of the ID card (optional) for real-person authentication, and return the authentication result synchronously.
     *
     * @remarks
     * Preparation for Access: When integrating this API, please ensure that the corresponding preparatory work has been completed. For details, please refer to [Server-side Access Preparation](https://help.aliyun.com/document_detail/127471.html).
     * Request Method: HTTPS POST and GET.
     * API Description: The server of the access party submits the authentication materials to the real-person authentication service for verification and comparison, with the results returned synchronously.
     * Applicable Scope: This interface is only applicable to pure server-side access authentication solutions.
     * Image Upload Address Explanation:
     * - HTTP or HTTPS address: Supports publicly accessible HTTP or HTTPS addresses. For example, `http://image-demo.img-cn-hangzhou.aliyuncs.com/example.jpg`.
     * - OSS address: If the images from the access party are local files, Alibaba Cloud also provides an upload SDK, supporting the business party to upload the images to the specified OSS bucket of the real-person authentication service, and use the obtained OSS address as the image address parameter in the interface. If your business needs to use the upload SDK, please submit a [ticket](https://selfservice.console.aliyun.com/ticket/category/cloudauth/today) to contact us for acquisition.
     * Image Limitations:
     * - Does not support relative or absolute paths of local images.
     * - Please keep the size of a single image within 2 MB to avoid algorithm retrieval timeout.
     * - The face area in the image should be at least 64*64 pixels.
     * - There is an 8 MB size limit for the Body of a single request. Please calculate the total size of all images and other information in the request, and do not exceed the limit.
     *
     * @param Request - VerifyMaterialRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VerifyMaterialResponse
     *
     * @param VerifyMaterialRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return VerifyMaterialResponse
     */
    public function verifyMaterialWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->faceImageUrl) {
            @$query['FaceImageUrl'] = $request->faceImageUrl;
        }

        if (null !== $request->idCardBackImageUrl) {
            @$query['IdCardBackImageUrl'] = $request->idCardBackImageUrl;
        }

        if (null !== $request->idCardFrontImageUrl) {
            @$query['IdCardFrontImageUrl'] = $request->idCardFrontImageUrl;
        }

        if (null !== $request->idCardNumber) {
            @$query['IdCardNumber'] = $request->idCardNumber;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VerifyMaterial',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VerifyMaterialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Call VerifyMaterial, in a pure server-side access authentication solution, input name, ID number, portrait photo, and front and back photos of the ID card (optional) for real-person authentication, and return the authentication result synchronously.
     *
     * @remarks
     * Preparation for Access: When integrating this API, please ensure that the corresponding preparatory work has been completed. For details, please refer to [Server-side Access Preparation](https://help.aliyun.com/document_detail/127471.html).
     * Request Method: HTTPS POST and GET.
     * API Description: The server of the access party submits the authentication materials to the real-person authentication service for verification and comparison, with the results returned synchronously.
     * Applicable Scope: This interface is only applicable to pure server-side access authentication solutions.
     * Image Upload Address Explanation:
     * - HTTP or HTTPS address: Supports publicly accessible HTTP or HTTPS addresses. For example, `http://image-demo.img-cn-hangzhou.aliyuncs.com/example.jpg`.
     * - OSS address: If the images from the access party are local files, Alibaba Cloud also provides an upload SDK, supporting the business party to upload the images to the specified OSS bucket of the real-person authentication service, and use the obtained OSS address as the image address parameter in the interface. If your business needs to use the upload SDK, please submit a [ticket](https://selfservice.console.aliyun.com/ticket/category/cloudauth/today) to contact us for acquisition.
     * Image Limitations:
     * - Does not support relative or absolute paths of local images.
     * - Please keep the size of a single image within 2 MB to avoid algorithm retrieval timeout.
     * - The face area in the image should be at least 64*64 pixels.
     * - There is an 8 MB size limit for the Body of a single request. Please calculate the total size of all images and other information in the request, and do not exceed the limit.
     *
     * @param Request - VerifyMaterialRequest
     *
     * @returns VerifyMaterialResponse
     *
     * @param VerifyMaterialRequest $request
     *
     * @return VerifyMaterialResponse
     */
    public function verifyMaterial($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyMaterialWithOptions($request, $runtime);
    }
}
