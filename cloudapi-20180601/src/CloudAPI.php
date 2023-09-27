<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20180601;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\AbolishApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\AbolishApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\AddBlackListRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\AddBlackListResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\AddIpControlPolicyItemRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\AddIpControlPolicyItemResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\AddTrafficSpecialControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\AddTrafficSpecialControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\CreateApiGroupRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\CreateApiGroupResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\CreateApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\CreateApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\CreateApiStageVariableRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\CreateApiStageVariableResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\CreateAppRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\CreateAppResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\CreateCustomizedInfoRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\CreateCustomizedInfoResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\CreateIpControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\CreateIpControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\CreateLogConfigRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\CreateLogConfigResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\CreateRaceWorkForInnerRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\CreateRaceWorkForInnerResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\CreateSecretKeyRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\CreateSecretKeyResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\CreateTrafficControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\CreateTrafficControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DeleteAllTrafficSpecialControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DeleteAllTrafficSpecialControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DeleteApiGroupRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DeleteApiGroupResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DeleteApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DeleteApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DeleteApiStageVariableRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DeleteApiStageVariableResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DeleteAppRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DeleteAppResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DeleteDomainCertificateRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DeleteDomainCertificateResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DeleteDomainRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DeleteDomainResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DeleteIpControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DeleteIpControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DeleteLogConfigRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DeleteLogConfigResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DeleteSecretKeyRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DeleteSecretKeyResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DeleteTrafficControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DeleteTrafficControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DeleteTrafficSpecialControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DeleteTrafficSpecialControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DeployApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DeployApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiDocRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiDocResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiDocsRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiDocsResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiErrorRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiErrorResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiGroupDetailForConsumerRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiGroupDetailForConsumerResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiGroupDetailRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiGroupDetailResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiGroupsRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiGroupsResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiIpControlsRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiIpControlsResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiLatencyRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiLatencyResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiQpsRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiQpsResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiRulesRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiRulesResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApisByAppRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApisByAppResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApisByIpControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApisByIpControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApisByRuleRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApisByRuleResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApisForConsoleRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApisForConsoleResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiStageDetailRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiStageDetailResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiTrafficRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiTrafficResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeAppRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeAppResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeAppsByApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeAppsByApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeAppSecuritiesRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeAppSecuritiesResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeAppSecurityRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeAppSecurityResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeAppsForProviderRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeAppsForProviderResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeAppsRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeAppsResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeBlackListsRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeBlackListsResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeDeployedApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeDeployedApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeDeployedApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeDeployedApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeDomainRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeDomainResolutionRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeDomainResolutionResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeDomainResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeHistoryApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeHistoryApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeHistoryApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeHistoryApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeIpControlPolicyItemsRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeIpControlPolicyItemsResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeIpControlsRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeIpControlsResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeLogConfigRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeLogConfigResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribePurchasedApiGroupDetailRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribePurchasedApiGroupDetailResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribePurchasedApiGroupsRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribePurchasedApiGroupsResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribePurchasedApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribePurchasedApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribePurchasedApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribePurchasedApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeRaceWorkForInnerRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeRaceWorkForInnerResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeRulesByApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeRulesByApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeSecretKeysRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeSecretKeysResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeSystemParametersRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeSystemParametersResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeSystemParamsRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeSystemParamsResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeTrafficControlsRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeTrafficControlsResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\GetApiMethodsRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\GetApiMethodsResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\GetCustomizedInfoRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\GetCustomizedInfoResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\ModifyApiGroupRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\ModifyApiGroupResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\ModifyApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\ModifyApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\ModifyAppRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\ModifyAppResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\ModifyIpControlPolicyItemRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\ModifyIpControlPolicyItemResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\ModifyIpControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\ModifyIpControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\ModifyLogConfigRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\ModifyLogConfigResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\ModifySecretKeyRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\ModifySecretKeyResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\ModifyTrafficControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\ModifyTrafficControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\ReactivateDomainRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\ReactivateDomainResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\RecoverApiFromHistoricalRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\RecoverApiFromHistoricalResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\RecoveryApiDefineFromHistoricalRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\RecoveryApiDefineFromHistoricalResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\RecoveryApiFromHistoricalRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\RecoveryApiFromHistoricalResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\RefreshDomainRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\RefreshDomainResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\RemoveAccessPermissionByApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\RemoveAccessPermissionByApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\RemoveAccessPermissionByAppsRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\RemoveAccessPermissionByAppsResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\RemoveAllBlackListRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\RemoveAllBlackListResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\RemoveApiRuleRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\RemoveApiRuleResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\RemoveAppsFromApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\RemoveAppsFromApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\RemoveBlackListRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\RemoveBlackListResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\RemoveIpControlApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\RemoveIpControlApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\RemoveIpControlPolicyItemRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\RemoveIpControlPolicyItemResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\ResetAppKeySecretRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\ResetAppKeySecretResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\ResetCustomizedRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\ResetCustomizedResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\SdkGenerateByAppRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\SdkGenerateByAppResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\SdkGenerateByGroupRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\SdkGenerateByGroupResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\SdkGenerateRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\SdkGenerateResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\SetAccessPermissionByApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\SetAccessPermissionByApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\SetAccessPermissionsRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\SetAccessPermissionsResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\SetApiRuleRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\SetApiRuleResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\SetDomainCertificateRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\SetDomainCertificateResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\SetDomainRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\SetDomainResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\SetDomainWebSocketStatusRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\SetDomainWebSocketStatusResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\SetIpControlApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\SetIpControlApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\SetMockIntegrationRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\SetMockIntegrationResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\SwitchApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\SwitchApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\VpcDescribeAccessesRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\VpcDescribeAccessesResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\VpcGrantAccessRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\VpcGrantAccessResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\VpcModifyAccessRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\VpcModifyAccessResponse;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\VpcRevokeAccessRequest;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\VpcRevokeAccessResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class CloudAPI extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-qingdao'            => 'apigateway.cn-qingdao.aliyuncs.com',
            'cn-beijing'            => 'apigateway.cn-beijing.aliyuncs.com',
            'cn-chengdu'            => 'apigateway.cn-chengdu.aliyuncs.com',
            'cn-zhangjiakou'        => 'apigateway.cn-zhangjiakou.aliyuncs.com',
            'cn-huhehaote'          => 'apigateway.cn-huhehaote.aliyuncs.com',
            'cn-hangzhou'           => 'apigateway.cn-hangzhou.aliyuncs.com',
            'cn-shanghai'           => 'apigateway.cn-shanghai.aliyuncs.com',
            'cn-shenzhen'           => 'apigateway.cn-shenzhen.aliyuncs.com',
            'cn-hongkong'           => 'apigateway.cn-hongkong.aliyuncs.com',
            'ap-southeast-1'        => 'apigateway.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'        => 'apigateway.ap-southeast-2.aliyuncs.com',
            'ap-southeast-3'        => 'apigateway.ap-southeast-3.aliyuncs.com',
            'ap-southeast-5'        => 'apigateway.ap-southeast-5.aliyuncs.com',
            'ap-northeast-1'        => 'apigateway.ap-northeast-1.aliyuncs.com',
            'eu-west-1'             => 'apigateway.eu-west-1.aliyuncs.com',
            'us-west-1'             => 'apigateway.us-west-1.aliyuncs.com',
            'us-east-1'             => 'apigateway.us-east-1.aliyuncs.com',
            'eu-central-1'          => 'apigateway.eu-central-1.aliyuncs.com',
            'me-east-1'             => 'apigateway.me-east-1.aliyuncs.com',
            'ap-south-1'            => 'apigateway.ap-south-1.aliyuncs.com',
            'cn-north-2-gov-1'      => 'apigateway.cn-north-2-gov-1.aliyuncs.com',
            'cn-hangzhou-finance'   => 'apigateway.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'apigateway.aliyuncs.com',
            'cn-shanghai-finance-1' => 'apigateway.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cloudapi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AbolishApiRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AbolishApiResponse
     */
    public function abolishApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AbolishApi',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AbolishApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AbolishApiRequest $request
     *
     * @return AbolishApiResponse
     */
    public function abolishApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->abolishApiWithOptions($request, $runtime);
    }

    /**
     * @param AddBlackListRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AddBlackListResponse
     */
    public function addBlackListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->blackContent)) {
            $query['BlackContent'] = $request->blackContent;
        }
        if (!Utils::isUnset($request->blackType)) {
            $query['BlackType'] = $request->blackType;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddBlackList',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddBlackListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddBlackListRequest $request
     *
     * @return AddBlackListResponse
     */
    public function addBlackList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addBlackListWithOptions($request, $runtime);
    }

    /**
     * @param AddIpControlPolicyItemRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AddIpControlPolicyItemResponse
     */
    public function addIpControlPolicyItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->cidrIp)) {
            $query['CidrIp'] = $request->cidrIp;
        }
        if (!Utils::isUnset($request->ipControlId)) {
            $query['IpControlId'] = $request->ipControlId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddIpControlPolicyItem',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddIpControlPolicyItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddIpControlPolicyItemRequest $request
     *
     * @return AddIpControlPolicyItemResponse
     */
    public function addIpControlPolicyItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addIpControlPolicyItemWithOptions($request, $runtime);
    }

    /**
     * @param AddTrafficSpecialControlRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AddTrafficSpecialControlResponse
     */
    public function addTrafficSpecialControlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->specialKey)) {
            $query['SpecialKey'] = $request->specialKey;
        }
        if (!Utils::isUnset($request->specialType)) {
            $query['SpecialType'] = $request->specialType;
        }
        if (!Utils::isUnset($request->trafficControlId)) {
            $query['TrafficControlId'] = $request->trafficControlId;
        }
        if (!Utils::isUnset($request->trafficValue)) {
            $query['TrafficValue'] = $request->trafficValue;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddTrafficSpecialControl',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddTrafficSpecialControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddTrafficSpecialControlRequest $request
     *
     * @return AddTrafficSpecialControlResponse
     */
    public function addTrafficSpecialControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTrafficSpecialControlWithOptions($request, $runtime);
    }

    /**
     * @param CreateApiRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateApiResponse
     */
    public function createApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allowSignatureMethod)) {
            $query['AllowSignatureMethod'] = $request->allowSignatureMethod;
        }
        if (!Utils::isUnset($request->apiName)) {
            $query['ApiName'] = $request->apiName;
        }
        if (!Utils::isUnset($request->authType)) {
            $query['AuthType'] = $request->authType;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->errorCodeSamples)) {
            $query['ErrorCodeSamples'] = $request->errorCodeSamples;
        }
        if (!Utils::isUnset($request->failResultSample)) {
            $query['FailResultSample'] = $request->failResultSample;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->openIdConnectConfig)) {
            $query['OpenIdConnectConfig'] = $request->openIdConnectConfig;
        }
        if (!Utils::isUnset($request->requestConfig)) {
            $query['RequestConfig'] = $request->requestConfig;
        }
        if (!Utils::isUnset($request->requestParamters)) {
            $query['RequestParamters'] = $request->requestParamters;
        }
        if (!Utils::isUnset($request->resultDescriptions)) {
            $query['ResultDescriptions'] = $request->resultDescriptions;
        }
        if (!Utils::isUnset($request->resultSample)) {
            $query['ResultSample'] = $request->resultSample;
        }
        if (!Utils::isUnset($request->resultType)) {
            $query['ResultType'] = $request->resultType;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->serviceConfig)) {
            $query['ServiceConfig'] = $request->serviceConfig;
        }
        if (!Utils::isUnset($request->serviceParameters)) {
            $query['ServiceParameters'] = $request->serviceParameters;
        }
        if (!Utils::isUnset($request->serviceParametersMap)) {
            $query['ServiceParametersMap'] = $request->serviceParametersMap;
        }
        if (!Utils::isUnset($request->visibility)) {
            $query['Visibility'] = $request->visibility;
        }
        if (!Utils::isUnset($request->webSocketApiType)) {
            $query['WebSocketApiType'] = $request->webSocketApiType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateApi',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateApiRequest $request
     *
     * @return CreateApiResponse
     */
    public function createApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApiWithOptions($request, $runtime);
    }

    /**
     * @param CreateApiGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateApiGroupResponse
     */
    public function createApiGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateApiGroup',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateApiGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateApiGroupRequest $request
     *
     * @return CreateApiGroupResponse
     */
    public function createApiGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApiGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateApiStageVariableRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateApiStageVariableResponse
     */
    public function createApiStageVariableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageId)) {
            $query['StageId'] = $request->stageId;
        }
        if (!Utils::isUnset($request->stageRouteModel)) {
            $query['StageRouteModel'] = $request->stageRouteModel;
        }
        if (!Utils::isUnset($request->supportRoute)) {
            $query['SupportRoute'] = $request->supportRoute;
        }
        if (!Utils::isUnset($request->variableName)) {
            $query['VariableName'] = $request->variableName;
        }
        if (!Utils::isUnset($request->variableValue)) {
            $query['VariableValue'] = $request->variableValue;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateApiStageVariable',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateApiStageVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateApiStageVariableRequest $request
     *
     * @return CreateApiStageVariableResponse
     */
    public function createApiStageVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApiStageVariableWithOptions($request, $runtime);
    }

    /**
     * @param CreateAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateAppResponse
     */
    public function createAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateApp',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAppRequest $request
     *
     * @return CreateAppResponse
     */
    public function createApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppWithOptions($request, $runtime);
    }

    /**
     * @param CreateCustomizedInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateCustomizedInfoResponse
     */
    public function createCustomizedInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->apiName)) {
            $query['ApiName'] = $request->apiName;
        }
        if (!Utils::isUnset($request->csharpDemo)) {
            $query['CsharpDemo'] = $request->csharpDemo;
        }
        if (!Utils::isUnset($request->curlDemo)) {
            $query['CurlDemo'] = $request->curlDemo;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->javaDemo)) {
            $query['JavaDemo'] = $request->javaDemo;
        }
        if (!Utils::isUnset($request->objectcDemo)) {
            $query['ObjectcDemo'] = $request->objectcDemo;
        }
        if (!Utils::isUnset($request->phpDemo)) {
            $query['PhpDemo'] = $request->phpDemo;
        }
        if (!Utils::isUnset($request->pythonDemo)) {
            $query['PythonDemo'] = $request->pythonDemo;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageId)) {
            $query['StageId'] = $request->stageId;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCustomizedInfo',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCustomizedInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCustomizedInfoRequest $request
     *
     * @return CreateCustomizedInfoResponse
     */
    public function createCustomizedInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomizedInfoWithOptions($request, $runtime);
    }

    /**
     * @param CreateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountQuantity)) {
            $query['AccountQuantity'] = $request->accountQuantity;
        }
        if (!Utils::isUnset($request->expiredOn)) {
            $query['ExpiredOn'] = $request->expiredOn;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->skuId)) {
            $query['SkuId'] = $request->skuId;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateInstance',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateInstanceRequest $request
     *
     * @return CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateIpControlRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateIpControlResponse
     */
    public function createIpControlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->ipControlName)) {
            $query['IpControlName'] = $request->ipControlName;
        }
        if (!Utils::isUnset($request->ipControlPolicys)) {
            $query['IpControlPolicys'] = $request->ipControlPolicys;
        }
        if (!Utils::isUnset($request->ipControlType)) {
            $query['IpControlType'] = $request->ipControlType;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateIpControl',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateIpControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateIpControlRequest $request
     *
     * @return CreateIpControlResponse
     */
    public function createIpControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIpControlWithOptions($request, $runtime);
    }

    /**
     * @param CreateLogConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateLogConfigResponse
     */
    public function createLogConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->logType)) {
            $query['LogType'] = $request->logType;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->slsLogStore)) {
            $query['SlsLogStore'] = $request->slsLogStore;
        }
        if (!Utils::isUnset($request->slsProject)) {
            $query['SlsProject'] = $request->slsProject;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLogConfig',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateLogConfigRequest $request
     *
     * @return CreateLogConfigResponse
     */
    public function createLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLogConfigWithOptions($request, $runtime);
    }

    /**
     * @param CreateRaceWorkForInnerRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateRaceWorkForInnerResponse
     */
    public function createRaceWorkForInnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->commodityCode)) {
            $query['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->keywords)) {
            $query['Keywords'] = $request->keywords;
        }
        if (!Utils::isUnset($request->logoUrl)) {
            $query['LogoUrl'] = $request->logoUrl;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->shortDescription)) {
            $query['ShortDescription'] = $request->shortDescription;
        }
        if (!Utils::isUnset($request->workName)) {
            $query['WorkName'] = $request->workName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRaceWorkForInner',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRaceWorkForInnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateRaceWorkForInnerRequest $request
     *
     * @return CreateRaceWorkForInnerResponse
     */
    public function createRaceWorkForInner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRaceWorkForInnerWithOptions($request, $runtime);
    }

    /**
     * @param CreateSecretKeyRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateSecretKeyResponse
     */
    public function createSecretKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->secretKey)) {
            $query['SecretKey'] = $request->secretKey;
        }
        if (!Utils::isUnset($request->secretKeyName)) {
            $query['SecretKeyName'] = $request->secretKeyName;
        }
        if (!Utils::isUnset($request->secretValue)) {
            $query['SecretValue'] = $request->secretValue;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSecretKey',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSecretKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSecretKeyRequest $request
     *
     * @return CreateSecretKeyResponse
     */
    public function createSecretKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSecretKeyWithOptions($request, $runtime);
    }

    /**
     * @param CreateTrafficControlRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateTrafficControlResponse
     */
    public function createTrafficControlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiDefault)) {
            $query['ApiDefault'] = $request->apiDefault;
        }
        if (!Utils::isUnset($request->appDefault)) {
            $query['AppDefault'] = $request->appDefault;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->trafficControlName)) {
            $query['TrafficControlName'] = $request->trafficControlName;
        }
        if (!Utils::isUnset($request->trafficControlUnit)) {
            $query['TrafficControlUnit'] = $request->trafficControlUnit;
        }
        if (!Utils::isUnset($request->userDefault)) {
            $query['UserDefault'] = $request->userDefault;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTrafficControl',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTrafficControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTrafficControlRequest $request
     *
     * @return CreateTrafficControlResponse
     */
    public function createTrafficControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTrafficControlWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAllTrafficSpecialControlRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteAllTrafficSpecialControlResponse
     */
    public function deleteAllTrafficSpecialControlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->trafficControlId)) {
            $query['TrafficControlId'] = $request->trafficControlId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAllTrafficSpecialControl',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAllTrafficSpecialControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAllTrafficSpecialControlRequest $request
     *
     * @return DeleteAllTrafficSpecialControlResponse
     */
    public function deleteAllTrafficSpecialControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAllTrafficSpecialControlWithOptions($request, $runtime);
    }

    /**
     * @param DeleteApiRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteApiResponse
     */
    public function deleteApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteApi',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteApiRequest $request
     *
     * @return DeleteApiResponse
     */
    public function deleteApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApiWithOptions($request, $runtime);
    }

    /**
     * @param DeleteApiGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteApiGroupResponse
     */
    public function deleteApiGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteApiGroup',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteApiGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteApiGroupRequest $request
     *
     * @return DeleteApiGroupResponse
     */
    public function deleteApiGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApiGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteApiStageVariableRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteApiStageVariableResponse
     */
    public function deleteApiStageVariableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageId)) {
            $query['StageId'] = $request->stageId;
        }
        if (!Utils::isUnset($request->variableName)) {
            $query['VariableName'] = $request->variableName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteApiStageVariable',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteApiStageVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteApiStageVariableRequest $request
     *
     * @return DeleteApiStageVariableResponse
     */
    public function deleteApiStageVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApiStageVariableWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteAppResponse
     */
    public function deleteAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteApp',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAppRequest $request
     *
     * @return DeleteAppResponse
     */
    public function deleteApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDomainRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDomain',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDomainRequest $request
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDomainCertificateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteDomainCertificateResponse
     */
    public function deleteDomainCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certificateId)) {
            $query['CertificateId'] = $request->certificateId;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDomainCertificate',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDomainCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDomainCertificateRequest $request
     *
     * @return DeleteDomainCertificateResponse
     */
    public function deleteDomainCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainCertificateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteIpControlRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteIpControlResponse
     */
    public function deleteIpControlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipControlId)) {
            $query['IpControlId'] = $request->ipControlId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteIpControl',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteIpControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteIpControlRequest $request
     *
     * @return DeleteIpControlResponse
     */
    public function deleteIpControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIpControlWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLogConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteLogConfigResponse
     */
    public function deleteLogConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->logType)) {
            $query['LogType'] = $request->logType;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLogConfig',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLogConfigRequest $request
     *
     * @return DeleteLogConfigResponse
     */
    public function deleteLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLogConfigWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSecretKeyRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteSecretKeyResponse
     */
    public function deleteSecretKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->secretKeyId)) {
            $query['SecretKeyId'] = $request->secretKeyId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSecretKey',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSecretKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSecretKeyRequest $request
     *
     * @return DeleteSecretKeyResponse
     */
    public function deleteSecretKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSecretKeyWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTrafficControlRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteTrafficControlResponse
     */
    public function deleteTrafficControlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->trafficControlId)) {
            $query['TrafficControlId'] = $request->trafficControlId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTrafficControl',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTrafficControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteTrafficControlRequest $request
     *
     * @return DeleteTrafficControlResponse
     */
    public function deleteTrafficControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTrafficControlWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTrafficSpecialControlRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteTrafficSpecialControlResponse
     */
    public function deleteTrafficSpecialControlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->specialKey)) {
            $query['SpecialKey'] = $request->specialKey;
        }
        if (!Utils::isUnset($request->specialType)) {
            $query['SpecialType'] = $request->specialType;
        }
        if (!Utils::isUnset($request->trafficControlId)) {
            $query['TrafficControlId'] = $request->trafficControlId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTrafficSpecialControl',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTrafficSpecialControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteTrafficSpecialControlRequest $request
     *
     * @return DeleteTrafficSpecialControlResponse
     */
    public function deleteTrafficSpecialControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTrafficSpecialControlWithOptions($request, $runtime);
    }

    /**
     * @param DeployApiRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeployApiResponse
     */
    public function deployApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        if (!Utils::isUnset($request->supportMock)) {
            $query['SupportMock'] = $request->supportMock;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeployApi',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeployApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeployApiRequest $request
     *
     * @return DeployApiResponse
     */
    public function deployApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deployApiWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApiRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DescribeApiResponse
     */
    public function describeApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApi',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApiRequest $request
     *
     * @return DescribeApiResponse
     */
    public function describeApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApiDocRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeApiDocResponse
     */
    public function describeApiDocWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiDoc',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApiDocResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApiDocRequest $request
     *
     * @return DescribeApiDocResponse
     */
    public function describeApiDoc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiDocWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApiDocsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeApiDocsResponse
     */
    public function describeApiDocsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->apiName)) {
            $query['ApiName'] = $request->apiName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiDocs',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApiDocsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApiDocsRequest $request
     *
     * @return DescribeApiDocsResponse
     */
    public function describeApiDocs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiDocsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApiErrorRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeApiErrorResponse
     */
    public function describeApiErrorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiError',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApiErrorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApiErrorRequest $request
     *
     * @return DescribeApiErrorResponse
     */
    public function describeApiError($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiErrorWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApiGroupDetailRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeApiGroupDetailResponse
     */
    public function describeApiGroupDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiGroupDetail',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApiGroupDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApiGroupDetailRequest $request
     *
     * @return DescribeApiGroupDetailResponse
     */
    public function describeApiGroupDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiGroupDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApiGroupDetailForConsumerRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeApiGroupDetailForConsumerResponse
     */
    public function describeApiGroupDetailForConsumerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiGroupDetailForConsumer',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApiGroupDetailForConsumerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApiGroupDetailForConsumerRequest $request
     *
     * @return DescribeApiGroupDetailForConsumerResponse
     */
    public function describeApiGroupDetailForConsumer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiGroupDetailForConsumerWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApiGroupsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeApiGroupsResponse
     */
    public function describeApiGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiGroups',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApiGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApiGroupsRequest $request
     *
     * @return DescribeApiGroupsResponse
     */
    public function describeApiGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApiIpControlsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeApiIpControlsResponse
     */
    public function describeApiIpControlsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiIds)) {
            $query['ApiIds'] = $request->apiIds;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiIpControls',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApiIpControlsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApiIpControlsRequest $request
     *
     * @return DescribeApiIpControlsResponse
     */
    public function describeApiIpControls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiIpControlsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApiLatencyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeApiLatencyResponse
     */
    public function describeApiLatencyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiLatency',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApiLatencyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApiLatencyRequest $request
     *
     * @return DescribeApiLatencyResponse
     */
    public function describeApiLatency($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiLatencyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApiQpsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeApiQpsResponse
     */
    public function describeApiQpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiQps',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApiQpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApiQpsRequest $request
     *
     * @return DescribeApiQpsResponse
     */
    public function describeApiQps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiQpsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApiRulesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeApiRulesResponse
     */
    public function describeApiRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiIds)) {
            $query['ApiIds'] = $request->apiIds;
        }
        if (!Utils::isUnset($request->apiName)) {
            $query['ApiName'] = $request->apiName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $query['RuleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiRules',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApiRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApiRulesRequest $request
     *
     * @return DescribeApiRulesResponse
     */
    public function describeApiRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiRulesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApiStageDetailRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeApiStageDetailResponse
     */
    public function describeApiStageDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageId)) {
            $query['StageId'] = $request->stageId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiStageDetail',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApiStageDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApiStageDetailRequest $request
     *
     * @return DescribeApiStageDetailResponse
     */
    public function describeApiStageDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiStageDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApiTrafficRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeApiTrafficResponse
     */
    public function describeApiTrafficWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiTraffic',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApiTrafficResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApiTrafficRequest $request
     *
     * @return DescribeApiTrafficResponse
     */
    public function describeApiTraffic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiTrafficWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApisRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeApisResponse
     */
    public function describeApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->apiName)) {
            $query['ApiName'] = $request->apiName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->visibility)) {
            $query['Visibility'] = $request->visibility;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApis',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApisRequest $request
     *
     * @return DescribeApisResponse
     */
    public function describeApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApisByAppRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeApisByAppResponse
     */
    public function describeApisByAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApisByApp',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApisByAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApisByAppRequest $request
     *
     * @return DescribeApisByAppResponse
     */
    public function describeApisByApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisByAppWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApisByIpControlRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeApisByIpControlResponse
     */
    public function describeApisByIpControlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipControlId)) {
            $query['IpControlId'] = $request->ipControlId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApisByIpControl',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApisByIpControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApisByIpControlRequest $request
     *
     * @return DescribeApisByIpControlResponse
     */
    public function describeApisByIpControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisByIpControlWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApisByRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeApisByRuleResponse
     */
    public function describeApisByRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $query['RuleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApisByRule',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApisByRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApisByRuleRequest $request
     *
     * @return DescribeApisByRuleResponse
     */
    public function describeApisByRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisByRuleWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApisForConsoleRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeApisForConsoleResponse
     */
    public function describeApisForConsoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->apiName)) {
            $query['ApiName'] = $request->apiName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        if (!Utils::isUnset($request->visibility)) {
            $query['Visibility'] = $request->visibility;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApisForConsole',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApisForConsoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApisForConsoleRequest $request
     *
     * @return DescribeApisForConsoleResponse
     */
    public function describeApisForConsole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisForConsoleWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAppRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DescribeAppResponse
     */
    public function describeAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApp',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAppRequest $request
     *
     * @return DescribeAppResponse
     */
    public function describeApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAppSecuritiesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeAppSecuritiesResponse
     */
    public function describeAppSecuritiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAppSecurities',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAppSecuritiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAppSecuritiesRequest $request
     *
     * @return DescribeAppSecuritiesResponse
     */
    public function describeAppSecurities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppSecuritiesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAppSecurityRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeAppSecurityResponse
     */
    public function describeAppSecurityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAppSecurity',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAppSecurityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAppSecurityRequest $request
     *
     * @return DescribeAppSecurityResponse
     */
    public function describeAppSecurity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppSecurityWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAppsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeAppsResponse
     */
    public function describeAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApps',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAppsRequest $request
     *
     * @return DescribeAppsResponse
     */
    public function describeApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAppsByApiRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeAppsByApiResponse
     */
    public function describeAppsByApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAppsByApi',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAppsByApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAppsByApiRequest $request
     *
     * @return DescribeAppsByApiResponse
     */
    public function describeAppsByApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppsByApiWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAppsForProviderRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeAppsForProviderResponse
     */
    public function describeAppsForProviderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appOwnerId)) {
            $query['AppOwnerId'] = $request->appOwnerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAppsForProvider',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAppsForProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAppsForProviderRequest $request
     *
     * @return DescribeAppsForProviderResponse
     */
    public function describeAppsForProvider($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppsForProviderWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBlackListsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeBlackListsResponse
     */
    public function describeBlackListsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->blackType)) {
            $query['BlackType'] = $request->blackType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBlackLists',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBlackListsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBlackListsRequest $request
     *
     * @return DescribeBlackListsResponse
     */
    public function describeBlackLists($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBlackListsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDeployedApiRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDeployedApiResponse
     */
    public function describeDeployedApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDeployedApi',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDeployedApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDeployedApiRequest $request
     *
     * @return DescribeDeployedApiResponse
     */
    public function describeDeployedApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeployedApiWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDeployedApisRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDeployedApisResponse
     */
    public function describeDeployedApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->apiName)) {
            $query['ApiName'] = $request->apiName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDeployedApis',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDeployedApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDeployedApisRequest $request
     *
     * @return DescribeDeployedApisResponse
     */
    public function describeDeployedApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeployedApisWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeDomainResponse
     */
    public function describeDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomain',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainRequest $request
     *
     * @return DescribeDomainResponse
     */
    public function describeDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainResolutionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDomainResolutionResponse
     */
    public function describeDomainResolutionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainNames)) {
            $query['DomainNames'] = $request->domainNames;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainResolution',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainResolutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainResolutionRequest $request
     *
     * @return DescribeDomainResolutionResponse
     */
    public function describeDomainResolution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainResolutionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHistoryApiRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeHistoryApiResponse
     */
    public function describeHistoryApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->historyVersion)) {
            $query['HistoryVersion'] = $request->historyVersion;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHistoryApi',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHistoryApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeHistoryApiRequest $request
     *
     * @return DescribeHistoryApiResponse
     */
    public function describeHistoryApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHistoryApiWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHistoryApisRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeHistoryApisResponse
     */
    public function describeHistoryApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->apiName)) {
            $query['ApiName'] = $request->apiName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHistoryApis',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHistoryApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeHistoryApisRequest $request
     *
     * @return DescribeHistoryApisResponse
     */
    public function describeHistoryApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHistoryApisWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIpControlPolicyItemsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeIpControlPolicyItemsResponse
     */
    public function describeIpControlPolicyItemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipControlId)) {
            $query['IpControlId'] = $request->ipControlId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->policyItemId)) {
            $query['PolicyItemId'] = $request->policyItemId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeIpControlPolicyItems',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeIpControlPolicyItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeIpControlPolicyItemsRequest $request
     *
     * @return DescribeIpControlPolicyItemsResponse
     */
    public function describeIpControlPolicyItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpControlPolicyItemsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIpControlsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeIpControlsResponse
     */
    public function describeIpControlsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipControlId)) {
            $query['IpControlId'] = $request->ipControlId;
        }
        if (!Utils::isUnset($request->ipControlName)) {
            $query['IpControlName'] = $request->ipControlName;
        }
        if (!Utils::isUnset($request->ipControlType)) {
            $query['IpControlType'] = $request->ipControlType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeIpControls',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeIpControlsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeIpControlsRequest $request
     *
     * @return DescribeIpControlsResponse
     */
    public function describeIpControls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpControlsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLogConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeLogConfigResponse
     */
    public function describeLogConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->logType)) {
            $query['LogType'] = $request->logType;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLogConfig',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLogConfigRequest $request
     *
     * @return DescribeLogConfigResponse
     */
    public function describeLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribePurchasedApiRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribePurchasedApiResponse
     */
    public function describePurchasedApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePurchasedApi',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePurchasedApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePurchasedApiRequest $request
     *
     * @return DescribePurchasedApiResponse
     */
    public function describePurchasedApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePurchasedApiWithOptions($request, $runtime);
    }

    /**
     * @param DescribePurchasedApiGroupDetailRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribePurchasedApiGroupDetailResponse
     */
    public function describePurchasedApiGroupDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePurchasedApiGroupDetail',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePurchasedApiGroupDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePurchasedApiGroupDetailRequest $request
     *
     * @return DescribePurchasedApiGroupDetailResponse
     */
    public function describePurchasedApiGroupDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePurchasedApiGroupDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribePurchasedApiGroupsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribePurchasedApiGroupsResponse
     */
    public function describePurchasedApiGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePurchasedApiGroups',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePurchasedApiGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePurchasedApiGroupsRequest $request
     *
     * @return DescribePurchasedApiGroupsResponse
     */
    public function describePurchasedApiGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePurchasedApiGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribePurchasedApisRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribePurchasedApisResponse
     */
    public function describePurchasedApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->apiName)) {
            $query['ApiName'] = $request->apiName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePurchasedApis',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePurchasedApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePurchasedApisRequest $request
     *
     * @return DescribePurchasedApisResponse
     */
    public function describePurchasedApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePurchasedApisWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRaceWorkForInnerRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeRaceWorkForInnerResponse
     */
    public function describeRaceWorkForInnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRaceWorkForInner',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRaceWorkForInnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRaceWorkForInnerRequest $request
     *
     * @return DescribeRaceWorkForInnerResponse
     */
    public function describeRaceWorkForInner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRaceWorkForInnerWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRulesByApiRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeRulesByApiResponse
     */
    public function describeRulesByApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRulesByApi',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRulesByApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRulesByApiRequest $request
     *
     * @return DescribeRulesByApiResponse
     */
    public function describeRulesByApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRulesByApiWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSecretKeysRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeSecretKeysResponse
     */
    public function describeSecretKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->secretKeyId)) {
            $query['SecretKeyId'] = $request->secretKeyId;
        }
        if (!Utils::isUnset($request->secretKeyName)) {
            $query['SecretKeyName'] = $request->secretKeyName;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSecretKeys',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSecretKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSecretKeysRequest $request
     *
     * @return DescribeSecretKeysResponse
     */
    public function describeSecretKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecretKeysWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSystemParametersRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeSystemParametersResponse
     */
    public function describeSystemParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSystemParameters',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSystemParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSystemParametersRequest $request
     *
     * @return DescribeSystemParametersResponse
     */
    public function describeSystemParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSystemParametersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSystemParamsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeSystemParamsResponse
     */
    public function describeSystemParamsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSystemParams',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSystemParamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSystemParamsRequest $request
     *
     * @return DescribeSystemParamsResponse
     */
    public function describeSystemParams($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSystemParamsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTrafficControlsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeTrafficControlsResponse
     */
    public function describeTrafficControlsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiUid)) {
            $query['ApiUid'] = $request->apiUid;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        if (!Utils::isUnset($request->trafficControlId)) {
            $query['TrafficControlId'] = $request->trafficControlId;
        }
        if (!Utils::isUnset($request->trafficControlName)) {
            $query['TrafficControlName'] = $request->trafficControlName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTrafficControls',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTrafficControlsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTrafficControlsRequest $request
     *
     * @return DescribeTrafficControlsResponse
     */
    public function describeTrafficControls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTrafficControlsWithOptions($request, $runtime);
    }

    /**
     * @param GetApiMethodsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetApiMethodsResponse
     */
    public function getApiMethodsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiPath)) {
            $query['ApiPath'] = $request->apiPath;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetApiMethods',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetApiMethodsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetApiMethodsRequest $request
     *
     * @return GetApiMethodsResponse
     */
    public function getApiMethods($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApiMethodsWithOptions($request, $runtime);
    }

    /**
     * @param GetCustomizedInfoRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetCustomizedInfoResponse
     */
    public function getCustomizedInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->apiName)) {
            $query['ApiName'] = $request->apiName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageId)) {
            $query['StageId'] = $request->stageId;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCustomizedInfo',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCustomizedInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCustomizedInfoRequest $request
     *
     * @return GetCustomizedInfoResponse
     */
    public function getCustomizedInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomizedInfoWithOptions($request, $runtime);
    }

    /**
     * @param ModifyApiRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ModifyApiResponse
     */
    public function modifyApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allowSignatureMethod)) {
            $query['AllowSignatureMethod'] = $request->allowSignatureMethod;
        }
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->apiName)) {
            $query['ApiName'] = $request->apiName;
        }
        if (!Utils::isUnset($request->authType)) {
            $query['AuthType'] = $request->authType;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->errorCodeSamples)) {
            $query['ErrorCodeSamples'] = $request->errorCodeSamples;
        }
        if (!Utils::isUnset($request->failResultSample)) {
            $query['FailResultSample'] = $request->failResultSample;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->openIdConnectConfig)) {
            $query['OpenIdConnectConfig'] = $request->openIdConnectConfig;
        }
        if (!Utils::isUnset($request->requestConfig)) {
            $query['RequestConfig'] = $request->requestConfig;
        }
        if (!Utils::isUnset($request->requestParamters)) {
            $query['RequestParamters'] = $request->requestParamters;
        }
        if (!Utils::isUnset($request->resultDescriptions)) {
            $query['ResultDescriptions'] = $request->resultDescriptions;
        }
        if (!Utils::isUnset($request->resultSample)) {
            $query['ResultSample'] = $request->resultSample;
        }
        if (!Utils::isUnset($request->resultType)) {
            $query['ResultType'] = $request->resultType;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->serviceConfig)) {
            $query['ServiceConfig'] = $request->serviceConfig;
        }
        if (!Utils::isUnset($request->serviceParameters)) {
            $query['ServiceParameters'] = $request->serviceParameters;
        }
        if (!Utils::isUnset($request->serviceParametersMap)) {
            $query['ServiceParametersMap'] = $request->serviceParametersMap;
        }
        if (!Utils::isUnset($request->visibility)) {
            $query['Visibility'] = $request->visibility;
        }
        if (!Utils::isUnset($request->webSocketApiType)) {
            $query['WebSocketApiType'] = $request->webSocketApiType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyApi',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyApiRequest $request
     *
     * @return ModifyApiResponse
     */
    public function modifyApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApiWithOptions($request, $runtime);
    }

    /**
     * @param ModifyApiGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyApiGroupResponse
     */
    public function modifyApiGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyApiGroup',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyApiGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyApiGroupRequest $request
     *
     * @return ModifyApiGroupResponse
     */
    public function modifyApiGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApiGroupWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ModifyAppResponse
     */
    public function modifyAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyApp',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyAppRequest $request
     *
     * @return ModifyAppResponse
     */
    public function modifyApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppWithOptions($request, $runtime);
    }

    /**
     * @param ModifyIpControlRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyIpControlResponse
     */
    public function modifyIpControlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->ipControlId)) {
            $query['IpControlId'] = $request->ipControlId;
        }
        if (!Utils::isUnset($request->ipControlName)) {
            $query['IpControlName'] = $request->ipControlName;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyIpControl',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyIpControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyIpControlRequest $request
     *
     * @return ModifyIpControlResponse
     */
    public function modifyIpControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIpControlWithOptions($request, $runtime);
    }

    /**
     * @param ModifyIpControlPolicyItemRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyIpControlPolicyItemResponse
     */
    public function modifyIpControlPolicyItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->cidrIp)) {
            $query['CidrIp'] = $request->cidrIp;
        }
        if (!Utils::isUnset($request->ipControlId)) {
            $query['IpControlId'] = $request->ipControlId;
        }
        if (!Utils::isUnset($request->policyItemId)) {
            $query['PolicyItemId'] = $request->policyItemId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyIpControlPolicyItem',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyIpControlPolicyItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyIpControlPolicyItemRequest $request
     *
     * @return ModifyIpControlPolicyItemResponse
     */
    public function modifyIpControlPolicyItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIpControlPolicyItemWithOptions($request, $runtime);
    }

    /**
     * @param ModifyLogConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyLogConfigResponse
     */
    public function modifyLogConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->logType)) {
            $query['LogType'] = $request->logType;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->slsLogStore)) {
            $query['SlsLogStore'] = $request->slsLogStore;
        }
        if (!Utils::isUnset($request->slsProject)) {
            $query['SlsProject'] = $request->slsProject;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyLogConfig',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyLogConfigRequest $request
     *
     * @return ModifyLogConfigResponse
     */
    public function modifyLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLogConfigWithOptions($request, $runtime);
    }

    /**
     * @param ModifySecretKeyRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifySecretKeyResponse
     */
    public function modifySecretKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->secretKey)) {
            $query['SecretKey'] = $request->secretKey;
        }
        if (!Utils::isUnset($request->secretKeyId)) {
            $query['SecretKeyId'] = $request->secretKeyId;
        }
        if (!Utils::isUnset($request->secretKeyName)) {
            $query['SecretKeyName'] = $request->secretKeyName;
        }
        if (!Utils::isUnset($request->secretValue)) {
            $query['SecretValue'] = $request->secretValue;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySecretKey',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySecretKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifySecretKeyRequest $request
     *
     * @return ModifySecretKeyResponse
     */
    public function modifySecretKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySecretKeyWithOptions($request, $runtime);
    }

    /**
     * @param ModifyTrafficControlRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyTrafficControlResponse
     */
    public function modifyTrafficControlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiDefault)) {
            $query['ApiDefault'] = $request->apiDefault;
        }
        if (!Utils::isUnset($request->appDefault)) {
            $query['AppDefault'] = $request->appDefault;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->trafficControlId)) {
            $query['TrafficControlId'] = $request->trafficControlId;
        }
        if (!Utils::isUnset($request->trafficControlName)) {
            $query['TrafficControlName'] = $request->trafficControlName;
        }
        if (!Utils::isUnset($request->trafficControlUnit)) {
            $query['TrafficControlUnit'] = $request->trafficControlUnit;
        }
        if (!Utils::isUnset($request->userDefault)) {
            $query['UserDefault'] = $request->userDefault;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyTrafficControl',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTrafficControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyTrafficControlRequest $request
     *
     * @return ModifyTrafficControlResponse
     */
    public function modifyTrafficControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTrafficControlWithOptions($request, $runtime);
    }

    /**
     * @param ReactivateDomainRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ReactivateDomainResponse
     */
    public function reactivateDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReactivateDomain',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReactivateDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReactivateDomainRequest $request
     *
     * @return ReactivateDomainResponse
     */
    public function reactivateDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reactivateDomainWithOptions($request, $runtime);
    }

    /**
     * @param RecoverApiFromHistoricalRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RecoverApiFromHistoricalResponse
     */
    public function recoverApiFromHistoricalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->historyVersion)) {
            $query['HistoryVersion'] = $request->historyVersion;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RecoverApiFromHistorical',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecoverApiFromHistoricalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecoverApiFromHistoricalRequest $request
     *
     * @return RecoverApiFromHistoricalResponse
     */
    public function recoverApiFromHistorical($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recoverApiFromHistoricalWithOptions($request, $runtime);
    }

    /**
     * @param RecoveryApiDefineFromHistoricalRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return RecoveryApiDefineFromHistoricalResponse
     */
    public function recoveryApiDefineFromHistoricalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->historyVersion)) {
            $query['HistoryVersion'] = $request->historyVersion;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RecoveryApiDefineFromHistorical',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecoveryApiDefineFromHistoricalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecoveryApiDefineFromHistoricalRequest $request
     *
     * @return RecoveryApiDefineFromHistoricalResponse
     */
    public function recoveryApiDefineFromHistorical($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recoveryApiDefineFromHistoricalWithOptions($request, $runtime);
    }

    /**
     * @param RecoveryApiFromHistoricalRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RecoveryApiFromHistoricalResponse
     */
    public function recoveryApiFromHistoricalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->historyVersion)) {
            $query['HistoryVersion'] = $request->historyVersion;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RecoveryApiFromHistorical',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecoveryApiFromHistoricalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecoveryApiFromHistoricalRequest $request
     *
     * @return RecoveryApiFromHistoricalResponse
     */
    public function recoveryApiFromHistorical($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recoveryApiFromHistoricalWithOptions($request, $runtime);
    }

    /**
     * @param RefreshDomainRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RefreshDomainResponse
     */
    public function refreshDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RefreshDomain',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefreshDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RefreshDomainRequest $request
     *
     * @return RefreshDomainResponse
     */
    public function refreshDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshDomainWithOptions($request, $runtime);
    }

    /**
     * @param RemoveAccessPermissionByApisRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return RemoveAccessPermissionByApisResponse
     */
    public function removeAccessPermissionByApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiIds)) {
            $query['ApiIds'] = $request->apiIds;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveAccessPermissionByApis',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveAccessPermissionByApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveAccessPermissionByApisRequest $request
     *
     * @return RemoveAccessPermissionByApisResponse
     */
    public function removeAccessPermissionByApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeAccessPermissionByApisWithOptions($request, $runtime);
    }

    /**
     * @param RemoveAccessPermissionByAppsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return RemoveAccessPermissionByAppsResponse
     */
    public function removeAccessPermissionByAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->appIds)) {
            $query['AppIds'] = $request->appIds;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveAccessPermissionByApps',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveAccessPermissionByAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveAccessPermissionByAppsRequest $request
     *
     * @return RemoveAccessPermissionByAppsResponse
     */
    public function removeAccessPermissionByApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeAccessPermissionByAppsWithOptions($request, $runtime);
    }

    /**
     * @param RemoveAllBlackListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RemoveAllBlackListResponse
     */
    public function removeAllBlackListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->blackType)) {
            $query['BlackType'] = $request->blackType;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveAllBlackList',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveAllBlackListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveAllBlackListRequest $request
     *
     * @return RemoveAllBlackListResponse
     */
    public function removeAllBlackList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeAllBlackListWithOptions($request, $runtime);
    }

    /**
     * @param RemoveApiRuleRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RemoveApiRuleResponse
     */
    public function removeApiRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiIds)) {
            $query['ApiIds'] = $request->apiIds;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $query['RuleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveApiRule',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveApiRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveApiRuleRequest $request
     *
     * @return RemoveApiRuleResponse
     */
    public function removeApiRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeApiRuleWithOptions($request, $runtime);
    }

    /**
     * @param RemoveAppsFromApiRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RemoveAppsFromApiResponse
     */
    public function removeAppsFromApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->appIds)) {
            $query['AppIds'] = $request->appIds;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveAppsFromApi',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveAppsFromApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveAppsFromApiRequest $request
     *
     * @return RemoveAppsFromApiResponse
     */
    public function removeAppsFromApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeAppsFromApiWithOptions($request, $runtime);
    }

    /**
     * @param RemoveBlackListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RemoveBlackListResponse
     */
    public function removeBlackListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->blackContent)) {
            $query['BlackContent'] = $request->blackContent;
        }
        if (!Utils::isUnset($request->blackType)) {
            $query['BlackType'] = $request->blackType;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveBlackList',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveBlackListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveBlackListRequest $request
     *
     * @return RemoveBlackListResponse
     */
    public function removeBlackList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeBlackListWithOptions($request, $runtime);
    }

    /**
     * @param RemoveIpControlApisRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RemoveIpControlApisResponse
     */
    public function removeIpControlApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiIds)) {
            $query['ApiIds'] = $request->apiIds;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->ipControlId)) {
            $query['IpControlId'] = $request->ipControlId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveIpControlApis',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveIpControlApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveIpControlApisRequest $request
     *
     * @return RemoveIpControlApisResponse
     */
    public function removeIpControlApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeIpControlApisWithOptions($request, $runtime);
    }

    /**
     * @param RemoveIpControlPolicyItemRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RemoveIpControlPolicyItemResponse
     */
    public function removeIpControlPolicyItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipControlId)) {
            $query['IpControlId'] = $request->ipControlId;
        }
        if (!Utils::isUnset($request->policyItemIds)) {
            $query['PolicyItemIds'] = $request->policyItemIds;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveIpControlPolicyItem',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveIpControlPolicyItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveIpControlPolicyItemRequest $request
     *
     * @return RemoveIpControlPolicyItemResponse
     */
    public function removeIpControlPolicyItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeIpControlPolicyItemWithOptions($request, $runtime);
    }

    /**
     * @param ResetAppKeySecretRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ResetAppKeySecretResponse
     */
    public function resetAppKeySecretWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetAppKeySecret',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetAppKeySecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResetAppKeySecretRequest $request
     *
     * @return ResetAppKeySecretResponse
     */
    public function resetAppKeySecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAppKeySecretWithOptions($request, $runtime);
    }

    /**
     * @param ResetCustomizedRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ResetCustomizedResponse
     */
    public function resetCustomizedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->apiName)) {
            $query['ApiName'] = $request->apiName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageId)) {
            $query['StageId'] = $request->stageId;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetCustomized',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetCustomizedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResetCustomizedRequest $request
     *
     * @return ResetCustomizedResponse
     */
    public function resetCustomized($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetCustomizedWithOptions($request, $runtime);
    }

    /**
     * @param SdkGenerateRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SdkGenerateResponse
     */
    public function sdkGenerateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SdkGenerate',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SdkGenerateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SdkGenerateRequest $request
     *
     * @return SdkGenerateResponse
     */
    public function sdkGenerate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sdkGenerateWithOptions($request, $runtime);
    }

    /**
     * @param SdkGenerateByAppRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SdkGenerateByAppResponse
     */
    public function sdkGenerateByAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SdkGenerateByApp',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SdkGenerateByAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SdkGenerateByAppRequest $request
     *
     * @return SdkGenerateByAppResponse
     */
    public function sdkGenerateByApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sdkGenerateByAppWithOptions($request, $runtime);
    }

    /**
     * @param SdkGenerateByGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SdkGenerateByGroupResponse
     */
    public function sdkGenerateByGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SdkGenerateByGroup',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SdkGenerateByGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SdkGenerateByGroupRequest $request
     *
     * @return SdkGenerateByGroupResponse
     */
    public function sdkGenerateByGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sdkGenerateByGroupWithOptions($request, $runtime);
    }

    /**
     * @param SetAccessPermissionByApisRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SetAccessPermissionByApisResponse
     */
    public function setAccessPermissionByApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiIds)) {
            $query['ApiIds'] = $request->apiIds;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetAccessPermissionByApis',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetAccessPermissionByApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetAccessPermissionByApisRequest $request
     *
     * @return SetAccessPermissionByApisResponse
     */
    public function setAccessPermissionByApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAccessPermissionByApisWithOptions($request, $runtime);
    }

    /**
     * @param SetAccessPermissionsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SetAccessPermissionsResponse
     */
    public function setAccessPermissionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->appIds)) {
            $query['AppIds'] = $request->appIds;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetAccessPermissions',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetAccessPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetAccessPermissionsRequest $request
     *
     * @return SetAccessPermissionsResponse
     */
    public function setAccessPermissions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAccessPermissionsWithOptions($request, $runtime);
    }

    /**
     * @param SetApiRuleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SetApiRuleResponse
     */
    public function setApiRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiIds)) {
            $query['ApiIds'] = $request->apiIds;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $query['RuleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetApiRule',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetApiRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetApiRuleRequest $request
     *
     * @return SetApiRuleResponse
     */
    public function setApiRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setApiRuleWithOptions($request, $runtime);
    }

    /**
     * @param SetDomainRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return SetDomainResponse
     */
    public function setDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certificateBody)) {
            $query['CertificateBody'] = $request->certificateBody;
        }
        if (!Utils::isUnset($request->certificateName)) {
            $query['CertificateName'] = $request->certificateName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->privateKey)) {
            $query['PrivateKey'] = $request->privateKey;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDomain',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetDomainRequest $request
     *
     * @return SetDomainResponse
     */
    public function setDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDomainWithOptions($request, $runtime);
    }

    /**
     * @param SetDomainCertificateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SetDomainCertificateResponse
     */
    public function setDomainCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certificateBody)) {
            $query['CertificateBody'] = $request->certificateBody;
        }
        if (!Utils::isUnset($request->certificateName)) {
            $query['CertificateName'] = $request->certificateName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->privateKey)) {
            $query['PrivateKey'] = $request->privateKey;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDomainCertificate',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDomainCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetDomainCertificateRequest $request
     *
     * @return SetDomainCertificateResponse
     */
    public function setDomainCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDomainCertificateWithOptions($request, $runtime);
    }

    /**
     * @param SetDomainWebSocketStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SetDomainWebSocketStatusResponse
     */
    public function setDomainWebSocketStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->actionValue)) {
            $query['ActionValue'] = $request->actionValue;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDomainWebSocketStatus',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDomainWebSocketStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetDomainWebSocketStatusRequest $request
     *
     * @return SetDomainWebSocketStatusResponse
     */
    public function setDomainWebSocketStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDomainWebSocketStatusWithOptions($request, $runtime);
    }

    /**
     * @param SetIpControlApisRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SetIpControlApisResponse
     */
    public function setIpControlApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiIds)) {
            $query['ApiIds'] = $request->apiIds;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->ipControlId)) {
            $query['IpControlId'] = $request->ipControlId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetIpControlApis',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetIpControlApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetIpControlApisRequest $request
     *
     * @return SetIpControlApisResponse
     */
    public function setIpControlApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setIpControlApisWithOptions($request, $runtime);
    }

    /**
     * @param SetMockIntegrationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetMockIntegrationResponse
     */
    public function setMockIntegrationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->mock)) {
            $query['Mock'] = $request->mock;
        }
        if (!Utils::isUnset($request->mockResult)) {
            $query['MockResult'] = $request->mockResult;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetMockIntegration',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetMockIntegrationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetMockIntegrationRequest $request
     *
     * @return SetMockIntegrationResponse
     */
    public function setMockIntegration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setMockIntegrationWithOptions($request, $runtime);
    }

    /**
     * @param SwitchApiRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return SwitchApiResponse
     */
    public function switchApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->historyVersion)) {
            $query['HistoryVersion'] = $request->historyVersion;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SwitchApi',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SwitchApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SwitchApiRequest $request
     *
     * @return SwitchApiResponse
     */
    public function switchApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchApiWithOptions($request, $runtime);
    }

    /**
     * @param VpcDescribeAccessesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return VpcDescribeAccessesResponse
     */
    public function vpcDescribeAccessesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instancePort)) {
            $query['InstancePort'] = $request->instancePort;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VpcDescribeAccesses',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VpcDescribeAccessesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VpcDescribeAccessesRequest $request
     *
     * @return VpcDescribeAccessesResponse
     */
    public function vpcDescribeAccesses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->vpcDescribeAccessesWithOptions($request, $runtime);
    }

    /**
     * @param VpcGrantAccessRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return VpcGrantAccessResponse
     */
    public function vpcGrantAccessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instancePort)) {
            $query['InstancePort'] = $request->instancePort;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VpcGrantAccess',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VpcGrantAccessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VpcGrantAccessRequest $request
     *
     * @return VpcGrantAccessResponse
     */
    public function vpcGrantAccess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->vpcGrantAccessWithOptions($request, $runtime);
    }

    /**
     * @param VpcModifyAccessRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return VpcModifyAccessResponse
     */
    public function vpcModifyAccessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instancePort)) {
            $query['InstancePort'] = $request->instancePort;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VpcModifyAccess',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VpcModifyAccessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VpcModifyAccessRequest $request
     *
     * @return VpcModifyAccessResponse
     */
    public function vpcModifyAccess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->vpcModifyAccessWithOptions($request, $runtime);
    }

    /**
     * @param VpcRevokeAccessRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return VpcRevokeAccessResponse
     */
    public function vpcRevokeAccessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instancePort)) {
            $query['InstancePort'] = $request->instancePort;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VpcRevokeAccess',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VpcRevokeAccessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VpcRevokeAccessRequest $request
     *
     * @return VpcRevokeAccessResponse
     */
    public function vpcRevokeAccess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->vpcRevokeAccessWithOptions($request, $runtime);
    }
}
