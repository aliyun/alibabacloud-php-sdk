<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\APIG\V20240327\Models\AddGatewayQuotaRuleRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\AddGatewayQuotaRuleResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\AddGatewaySecurityGroupRuleRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\AddGatewaySecurityGroupRuleResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\BatchAddConsumerGroupConsumersRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\BatchAddConsumerGroupConsumersResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\BatchDeleteConsumerAuthorizationRuleRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\BatchDeleteConsumerAuthorizationRuleResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\BatchRemoveConsumerGroupConsumersRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\BatchRemoveConsumerGroupConsumersResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateAiModelCardRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateAiModelCardResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateAiModelProviderRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateAiModelProviderResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateAndAttachPolicyRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateAndAttachPolicyResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateConsumerAuthorizationRuleRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateConsumerAuthorizationRuleResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateConsumerAuthorizationRulesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateConsumerAuthorizationRulesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateConsumerGroupRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateConsumerGroupResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateConsumerRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateConsumerResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateDomainRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateDomainResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateEnvironmentRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateEnvironmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateGatewayRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateGatewayResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiOperationRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiOperationResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiRouteRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiRouteResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateMcpServerRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateMcpServerResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreatePluginAttachmentRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreatePluginAttachmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreatePluginClassRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreatePluginClassResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreatePolicyAttachmentRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreatePolicyAttachmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreatePolicyRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreatePolicyResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateSecretRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateSecretResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateServiceRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateServiceResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateServiceVersionRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateServiceVersionResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateSourceRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateSourceResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteAiModelCardRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteAiModelCardResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteAiModelProviderRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteAiModelProviderResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteConsumerAuthorizationRuleResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteConsumerGroupRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteConsumerGroupResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteConsumerResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteDomainResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteEnvironmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteGatewayQuotaRuleRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteGatewayQuotaRuleResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteGatewayResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteGatewaySecurityGroupRuleRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteGatewaySecurityGroupRuleResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteHttpApiOperationResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteHttpApiResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteHttpApiRouteResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteMcpServerResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeletePluginAttachmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeletePluginClassRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeletePluginClassResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeletePolicyAttachmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeletePolicyResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteSecretResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteServiceResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteServiceVersionResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteSourceResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeployHttpApiRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeployHttpApiResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeployMcpServerResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ExportHttpApiRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ExportHttpApiResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetAiModelCardRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetAiModelCardResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetAiModelProviderRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetAiModelProviderResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetConsumerAuthorizationRuleResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetConsumerGroupRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetConsumerGroupResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetConsumerResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetDashboardRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetDashboardResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetDashboardShrinkRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetDomainRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetDomainResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetEnvironmentRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetEnvironmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayQuotaRuleRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayQuotaRuleResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayQuotaRuleSubjectUsageRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayQuotaRuleSubjectUsageResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetHttpApiOperationResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetHttpApiResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetHttpApiRouteResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetMcpServerResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetPluginAttachmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetPluginClassRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetPluginClassResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetPolicyAttachmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetPolicyResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetResourceOverviewRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetResourceOverviewResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetSecretResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetSecretValueResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetServiceResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetSourceResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetTraceConfigRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetTraceConfigResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ImportHttpApiRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ImportHttpApiResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\InstallPluginRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\InstallPluginResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListAiModelCardsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListAiModelCardsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListAiModelProvidersRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListAiModelProvidersResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumerAuthorizationRulesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumerAuthorizationRulesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumerGroupConsumersRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumerGroupConsumersResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumerGroupsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumerGroupsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumerQuotaRulesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumerQuotaRulesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumersRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumersResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListDomainsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListDomainsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListEnvironmentsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListEnvironmentsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListExternalServicesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListExternalServicesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewayFeaturesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewayQuotaRulesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewayQuotaRulesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewaysRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewaysResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewaysShrinkRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListHttpApiOperationsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListHttpApiOperationsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListHttpApiRoutesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListHttpApiRoutesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListHttpApisRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListHttpApisResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListMcpServersRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListMcpServersResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginAttachmentsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginAttachmentsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginClassesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginClassesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPoliciesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPoliciesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPolicyClassesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPolicyClassesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListSecretReferencesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListSecretReferencesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListSecretsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListSecretsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListServicesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListServicesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListSslCertsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListSslCertsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListTagResourcesShrinkRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListZonesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListZonesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\QueryConsumerAuthorizationRulesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\QueryConsumerAuthorizationRulesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\RemoveConsumerAuthorizationRuleResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ResetGatewayQuotaRuleRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ResetGatewayQuotaRuleResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\RestartGatewayResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\SyncMCPServersRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\SyncMCPServersResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\TagResourcesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\TagResourcesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UndeployHttpApiRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UndeployHttpApiResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UnDeployMcpServerResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UninstallPluginResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UntagResourcesShrinkRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateAiModelCardRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateAiModelCardResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateAiModelProviderRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateAiModelProviderResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateAndAttachPolicyRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateAndAttachPolicyResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateConsumerAuthorizationRuleRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateConsumerAuthorizationRuleResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateConsumerGroupRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateConsumerGroupResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateConsumerRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateConsumerResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateDomainRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateDomainResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateEnvironmentRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateEnvironmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayFeatureRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayFeatureResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayNameRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayNameResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayQuotaRuleRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayQuotaRuleResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayQuotaRuleStatusRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayQuotaRuleStatusResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiOperationRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiOperationResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiRouteRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiRouteResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateMcpServerRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateMcpServerResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdatePluginAttachmentRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdatePluginAttachmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdatePolicyRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdatePolicyResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateSecretRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateSecretResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateServiceRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateServiceResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateServiceVersionRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateServiceVersionResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpgradeGatewayRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpgradeGatewayResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class APIG extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'us-west-1' => 'apig.us-west-1.aliyuncs.com',
            'us-east-1' => 'apig.us-east-1.aliyuncs.com',
            'me-east-1' => 'apig.me-east-1.aliyuncs.com',
            'me-central-1' => 'apig.me-central-1.aliyuncs.com',
            'eu-west-1' => 'apig.eu-west-1.aliyuncs.com',
            'eu-central-1' => 'apig.eu-central-1.aliyuncs.com',
            'cn-zhangjiakou' => 'apig.cn-zhangjiakou.aliyuncs.com',
            'cn-wulanchabu' => 'apig.cn-wulanchabu.aliyuncs.com',
            'cn-shenzhen' => 'apig.cn-shenzhen.aliyuncs.com',
            'cn-shanghai' => 'apig.cn-shanghai.aliyuncs.com',
            'cn-qingdao' => 'apig.cn-qingdao.aliyuncs.com',
            'cn-hongkong' => 'apig.cn-hongkong.aliyuncs.com',
            'cn-heyuan' => 'apig.cn-heyuan.aliyuncs.com',
            'cn-hangzhou' => 'apig.cn-hangzhou.aliyuncs.com',
            'cn-guangzhou' => 'apig.cn-guangzhou.aliyuncs.com',
            'cn-chengdu' => 'apig.cn-chengdu.aliyuncs.com',
            'cn-beijing' => 'apig.cn-beijing.aliyuncs.com',
            'ap-southeast-7' => 'apig.ap-southeast-7.aliyuncs.com',
            'ap-southeast-6' => 'apig.ap-southeast-6.aliyuncs.com',
            'ap-southeast-5' => 'apig.ap-southeast-5.aliyuncs.com',
            'ap-southeast-3' => 'apig.ap-southeast-3.aliyuncs.com',
            'ap-southeast-2' => 'apig.ap-southeast-2.aliyuncs.com',
            'ap-southeast-1' => 'apig.ap-southeast-1.aliyuncs.com',
            'ap-northeast-2' => 'apig.ap-northeast-2.aliyuncs.com',
            'ap-northeast-1' => 'apig.ap-northeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('apig', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Creates a gateway quota throttling rule.
     *
     * @remarks
     * Creates a consumer-based quota rule for an AI gateway. This operation takes effect only on AI gateways of version 2.1.19 or later.
     * >
     * >  Recommended call sequence:
     * > - Step 1: Perform a dry run to check for rule conflicts.
     * > - - Set dryRun to true.
     * > - - The response contains a conflict preview with a conflictHash value.
     * > - Step 2: Submit the request after confirmation.
     * > - - No conflicts: Set dryRun to false and overwrite to false.
     * > - - Conflicts exist and you confirm the overwrite: Set dryRun to false, overwrite to true, and conflictHash to the value returned in the previous step.
     *
     * @param request - AddGatewayQuotaRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddGatewayQuotaRuleResponse
     *
     * @param string                     $gatewayId
     * @param AddGatewayQuotaRuleRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return AddGatewayQuotaRuleResponse
     */
    public function addGatewayQuotaRuleWithOptions($gatewayId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->conflictHash) {
            @$body['conflictHash'] = $request->conflictHash;
        }

        if (null !== $request->consumerGroupIds) {
            @$body['consumerGroupIds'] = $request->consumerGroupIds;
        }

        if (null !== $request->consumerIds) {
            @$body['consumerIds'] = $request->consumerIds;
        }

        if (null !== $request->dryRun) {
            @$body['dryRun'] = $request->dryRun;
        }

        if (null !== $request->overwrite) {
            @$body['overwrite'] = $request->overwrite;
        }

        if (null !== $request->periodMultiplier) {
            @$body['periodMultiplier'] = $request->periodMultiplier;
        }

        if (null !== $request->periodType) {
            @$body['periodType'] = $request->periodType;
        }

        if (null !== $request->quotaDimension) {
            @$body['quotaDimension'] = $request->quotaDimension;
        }

        if (null !== $request->quotaLimit) {
            @$body['quotaLimit'] = $request->quotaLimit;
        }

        if (null !== $request->ruleName) {
            @$body['ruleName'] = $request->ruleName;
        }

        if (null !== $request->timezone) {
            @$body['timezone'] = $request->timezone;
        }

        if (null !== $request->windowAlignment) {
            @$body['windowAlignment'] = $request->windowAlignment;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddGatewayQuotaRule',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/quota-rules',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AddGatewayQuotaRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a gateway quota throttling rule.
     *
     * @remarks
     * Creates a consumer-based quota rule for an AI gateway. This operation takes effect only on AI gateways of version 2.1.19 or later.
     * >
     * >  Recommended call sequence:
     * > - Step 1: Perform a dry run to check for rule conflicts.
     * > - - Set dryRun to true.
     * > - - The response contains a conflict preview with a conflictHash value.
     * > - Step 2: Submit the request after confirmation.
     * > - - No conflicts: Set dryRun to false and overwrite to false.
     * > - - Conflicts exist and you confirm the overwrite: Set dryRun to false, overwrite to true, and conflictHash to the value returned in the previous step.
     *
     * @param request - AddGatewayQuotaRuleRequest
     *
     * @returns AddGatewayQuotaRuleResponse
     *
     * @param string                     $gatewayId
     * @param AddGatewayQuotaRuleRequest $request
     *
     * @return AddGatewayQuotaRuleResponse
     */
    public function addGatewayQuotaRule($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addGatewayQuotaRuleWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * Authorizes a security group that allows a gateway to access services.
     *
     * @param request - AddGatewaySecurityGroupRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddGatewaySecurityGroupRuleResponse
     *
     * @param string                             $gatewayId
     * @param AddGatewaySecurityGroupRuleRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return AddGatewaySecurityGroupRuleResponse
     */
    public function addGatewaySecurityGroupRuleWithOptions($gatewayId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->portRanges) {
            @$body['portRanges'] = $request->portRanges;
        }

        if (null !== $request->securityGroupId) {
            @$body['securityGroupId'] = $request->securityGroupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddGatewaySecurityGroupRule',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/security-group-rules',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AddGatewaySecurityGroupRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Authorizes a security group that allows a gateway to access services.
     *
     * @param request - AddGatewaySecurityGroupRuleRequest
     *
     * @returns AddGatewaySecurityGroupRuleResponse
     *
     * @param string                             $gatewayId
     * @param AddGatewaySecurityGroupRuleRequest $request
     *
     * @return AddGatewaySecurityGroupRuleResponse
     */
    public function addGatewaySecurityGroupRule($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addGatewaySecurityGroupRuleWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * 批量添加消费者组成员.
     *
     * @param request - BatchAddConsumerGroupConsumersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchAddConsumerGroupConsumersResponse
     *
     * @param string                                $consumerGroupId
     * @param BatchAddConsumerGroupConsumersRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return BatchAddConsumerGroupConsumersResponse
     */
    public function batchAddConsumerGroupConsumersWithOptions($consumerGroupId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->consumerIds) {
            @$body['consumerIds'] = $request->consumerIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchAddConsumerGroupConsumers',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumer-groups/' . Url::percentEncode($consumerGroupId) . '/consumers/batch-add',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BatchAddConsumerGroupConsumersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量添加消费者组成员.
     *
     * @param request - BatchAddConsumerGroupConsumersRequest
     *
     * @returns BatchAddConsumerGroupConsumersResponse
     *
     * @param string                                $consumerGroupId
     * @param BatchAddConsumerGroupConsumersRequest $request
     *
     * @return BatchAddConsumerGroupConsumersResponse
     */
    public function batchAddConsumerGroupConsumers($consumerGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchAddConsumerGroupConsumersWithOptions($consumerGroupId, $request, $headers, $runtime);
    }

    /**
     * Revokes consumer authorization rules in batches.
     *
     * @param request - BatchDeleteConsumerAuthorizationRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchDeleteConsumerAuthorizationRuleResponse
     *
     * @param BatchDeleteConsumerAuthorizationRuleRequest $request
     * @param string[]                                    $headers
     * @param RuntimeOptions                              $runtime
     *
     * @return BatchDeleteConsumerAuthorizationRuleResponse
     */
    public function batchDeleteConsumerAuthorizationRuleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consumerAuthorizationRuleIds) {
            @$query['consumerAuthorizationRuleIds'] = $request->consumerAuthorizationRuleIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchDeleteConsumerAuthorizationRule',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/authorization-rules',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BatchDeleteConsumerAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Revokes consumer authorization rules in batches.
     *
     * @param request - BatchDeleteConsumerAuthorizationRuleRequest
     *
     * @returns BatchDeleteConsumerAuthorizationRuleResponse
     *
     * @param BatchDeleteConsumerAuthorizationRuleRequest $request
     *
     * @return BatchDeleteConsumerAuthorizationRuleResponse
     */
    public function batchDeleteConsumerAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchDeleteConsumerAuthorizationRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * 批量移除消费者组成员.
     *
     * @param request - BatchRemoveConsumerGroupConsumersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchRemoveConsumerGroupConsumersResponse
     *
     * @param string                                   $consumerGroupId
     * @param BatchRemoveConsumerGroupConsumersRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return BatchRemoveConsumerGroupConsumersResponse
     */
    public function batchRemoveConsumerGroupConsumersWithOptions($consumerGroupId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->consumerIds) {
            @$body['consumerIds'] = $request->consumerIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchRemoveConsumerGroupConsumers',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumer-groups/' . Url::percentEncode($consumerGroupId) . '/consumers/batch-remove',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BatchRemoveConsumerGroupConsumersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量移除消费者组成员.
     *
     * @param request - BatchRemoveConsumerGroupConsumersRequest
     *
     * @returns BatchRemoveConsumerGroupConsumersResponse
     *
     * @param string                                   $consumerGroupId
     * @param BatchRemoveConsumerGroupConsumersRequest $request
     *
     * @return BatchRemoveConsumerGroupConsumersResponse
     */
    public function batchRemoveConsumerGroupConsumers($consumerGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchRemoveConsumerGroupConsumersWithOptions($consumerGroupId, $request, $headers, $runtime);
    }

    /**
     * Moves a resource to a different resource group.
     *
     * @param request - ChangeResourceGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->service) {
            @$query['Service'] = $request->service;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeResourceGroup',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/move-resource-group',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Moves a resource to a different resource group.
     *
     * @param request - ChangeResourceGroupRequest
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->changeResourceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建AI模型卡片.
     *
     * @remarks
     * 在指定AI网关实例的已有模型供应商下创建模型卡片。目标网关必须存在、属于当前账号且类型为AI网关，modelProvider必须引用该网关中已存在的模型供应商。
     * 同一AI网关实例、同一模型供应商下的modelName必须唯一；单个网关实例最多可创建1000张模型卡片。credit当前仅支持fixed类型，费用单位为Credits/百万Token；未传时type默认为fixed，各项费用默认为0。availablePaths中的每一项必须同时包含path和type。
     *
     * @param request - CreateAiModelCardRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAiModelCardResponse
     *
     * @param CreateAiModelCardRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateAiModelCardResponse
     */
    public function createAiModelCardWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->availablePaths) {
            @$body['availablePaths'] = $request->availablePaths;
        }

        if (null !== $request->credit) {
            @$body['credit'] = $request->credit;
        }

        if (null !== $request->features) {
            @$body['features'] = $request->features;
        }

        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->meta) {
            @$body['meta'] = $request->meta;
        }

        if (null !== $request->modelName) {
            @$body['modelName'] = $request->modelName;
        }

        if (null !== $request->modelProvider) {
            @$body['modelProvider'] = $request->modelProvider;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAiModelCard',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/ai-model-cards',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateAiModelCardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建AI模型卡片.
     *
     * @remarks
     * 在指定AI网关实例的已有模型供应商下创建模型卡片。目标网关必须存在、属于当前账号且类型为AI网关，modelProvider必须引用该网关中已存在的模型供应商。
     * 同一AI网关实例、同一模型供应商下的modelName必须唯一；单个网关实例最多可创建1000张模型卡片。credit当前仅支持fixed类型，费用单位为Credits/百万Token；未传时type默认为fixed，各项费用默认为0。availablePaths中的每一项必须同时包含path和type。
     *
     * @param request - CreateAiModelCardRequest
     *
     * @returns CreateAiModelCardResponse
     *
     * @param CreateAiModelCardRequest $request
     *
     * @return CreateAiModelCardResponse
     */
    public function createAiModelCard($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAiModelCardWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建AI模型供应商.
     *
     * @param request - CreateAiModelProviderRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAiModelProviderResponse
     *
     * @param CreateAiModelProviderRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateAiModelProviderResponse
     */
    public function createAiModelProviderWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->provider) {
            @$body['provider'] = $request->provider;
        }

        if (null !== $request->serviceIds) {
            @$body['serviceIds'] = $request->serviceIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAiModelProvider',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/ai-model-providers',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateAiModelProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建AI模型供应商.
     *
     * @param request - CreateAiModelProviderRequest
     *
     * @returns CreateAiModelProviderResponse
     *
     * @param CreateAiModelProviderRequest $request
     *
     * @return CreateAiModelProviderResponse
     */
    public function createAiModelProvider($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAiModelProviderWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates and attaches a policy.
     *
     * @param request - CreateAndAttachPolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAndAttachPolicyResponse
     *
     * @param CreateAndAttachPolicyRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateAndAttachPolicyResponse
     */
    public function createAndAttachPolicyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->attachResourceIds) {
            @$body['attachResourceIds'] = $request->attachResourceIds;
        }

        if (null !== $request->attachResourceType) {
            @$body['attachResourceType'] = $request->attachResourceType;
        }

        if (null !== $request->className) {
            @$body['className'] = $request->className;
        }

        if (null !== $request->config) {
            @$body['config'] = $request->config;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->environmentId) {
            @$body['environmentId'] = $request->environmentId;
        }

        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAndAttachPolicy',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/policies',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateAndAttachPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates and attaches a policy.
     *
     * @param request - CreateAndAttachPolicyRequest
     *
     * @returns CreateAndAttachPolicyResponse
     *
     * @param CreateAndAttachPolicyRequest $request
     *
     * @return CreateAndAttachPolicyResponse
     */
    public function createAndAttachPolicy($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAndAttachPolicyWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a consumer.
     *
     * @param request - CreateConsumerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateConsumerResponse
     *
     * @param CreateConsumerRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateConsumerResponse
     */
    public function createConsumerWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->akSkIdentityConfigs) {
            @$body['akSkIdentityConfigs'] = $request->akSkIdentityConfigs;
        }

        if (null !== $request->apikeyIdentityConfig) {
            @$body['apikeyIdentityConfig'] = $request->apikeyIdentityConfig;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->enable) {
            @$body['enable'] = $request->enable;
        }

        if (null !== $request->gatewayType) {
            @$body['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->jwtIdentityConfig) {
            @$body['jwtIdentityConfig'] = $request->jwtIdentityConfig;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateConsumer',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumers',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateConsumerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a consumer.
     *
     * @param request - CreateConsumerRequest
     *
     * @returns CreateConsumerResponse
     *
     * @param CreateConsumerRequest $request
     *
     * @return CreateConsumerResponse
     */
    public function createConsumer($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createConsumerWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a consumer authorization rule.
     *
     * @param request - CreateConsumerAuthorizationRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateConsumerAuthorizationRuleResponse
     *
     * @param string                                 $consumerId
     * @param CreateConsumerAuthorizationRuleRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateConsumerAuthorizationRuleResponse
     */
    public function createConsumerAuthorizationRuleWithOptions($consumerId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authorizationResourceInfos) {
            @$body['authorizationResourceInfos'] = $request->authorizationResourceInfos;
        }

        if (null !== $request->expireMode) {
            @$body['expireMode'] = $request->expireMode;
        }

        if (null !== $request->expireTimestamp) {
            @$body['expireTimestamp'] = $request->expireTimestamp;
        }

        if (null !== $request->parentResourceType) {
            @$body['parentResourceType'] = $request->parentResourceType;
        }

        if (null !== $request->resourceType) {
            @$body['resourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateConsumerAuthorizationRule',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumers/' . Url::percentEncode($consumerId) . '/authorization-rules',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateConsumerAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a consumer authorization rule.
     *
     * @param request - CreateConsumerAuthorizationRuleRequest
     *
     * @returns CreateConsumerAuthorizationRuleResponse
     *
     * @param string                                 $consumerId
     * @param CreateConsumerAuthorizationRuleRequest $request
     *
     * @return CreateConsumerAuthorizationRuleResponse
     */
    public function createConsumerAuthorizationRule($consumerId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createConsumerAuthorizationRuleWithOptions($consumerId, $request, $headers, $runtime);
    }

    /**
     * Creates consumer authorization rules.
     *
     * @param request - CreateConsumerAuthorizationRulesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateConsumerAuthorizationRulesResponse
     *
     * @param CreateConsumerAuthorizationRulesRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateConsumerAuthorizationRulesResponse
     */
    public function createConsumerAuthorizationRulesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authorizationRules) {
            @$body['authorizationRules'] = $request->authorizationRules;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateConsumerAuthorizationRules',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/authorization-rules',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateConsumerAuthorizationRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates consumer authorization rules.
     *
     * @param request - CreateConsumerAuthorizationRulesRequest
     *
     * @returns CreateConsumerAuthorizationRulesResponse
     *
     * @param CreateConsumerAuthorizationRulesRequest $request
     *
     * @return CreateConsumerAuthorizationRulesResponse
     */
    public function createConsumerAuthorizationRules($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createConsumerAuthorizationRulesWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建消费者组.
     *
     * @param request - CreateConsumerGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateConsumerGroupResponse
     *
     * @param CreateConsumerGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateConsumerGroupResponse
     */
    public function createConsumerGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->consumerGroupId) {
            @$body['consumerGroupId'] = $request->consumerGroupId;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->gatewayType) {
            @$body['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateConsumerGroup',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumer-groups',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateConsumerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建消费者组.
     *
     * @param request - CreateConsumerGroupRequest
     *
     * @returns CreateConsumerGroupResponse
     *
     * @param CreateConsumerGroupRequest $request
     *
     * @return CreateConsumerGroupResponse
     */
    public function createConsumerGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createConsumerGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a domain name.
     *
     * @param request - CreateDomainRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDomainResponse
     *
     * @param CreateDomainRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateDomainResponse
     */
    public function createDomainWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->caCertIdentifier) {
            @$body['caCertIdentifier'] = $request->caCertIdentifier;
        }

        if (null !== $request->certIdentifier) {
            @$body['certIdentifier'] = $request->certIdentifier;
        }

        if (null !== $request->clientCACert) {
            @$body['clientCACert'] = $request->clientCACert;
        }

        if (null !== $request->domainScope) {
            @$body['domainScope'] = $request->domainScope;
        }

        if (null !== $request->forceHttps) {
            @$body['forceHttps'] = $request->forceHttps;
        }

        if (null !== $request->gatewayType) {
            @$body['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->http2Option) {
            @$body['http2Option'] = $request->http2Option;
        }

        if (null !== $request->mTLSEnabled) {
            @$body['mTLSEnabled'] = $request->mTLSEnabled;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->protocol) {
            @$body['protocol'] = $request->protocol;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tlsCipherSuitesConfig) {
            @$body['tlsCipherSuitesConfig'] = $request->tlsCipherSuitesConfig;
        }

        if (null !== $request->tlsMax) {
            @$body['tlsMax'] = $request->tlsMax;
        }

        if (null !== $request->tlsMin) {
            @$body['tlsMin'] = $request->tlsMin;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDomain',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/domains',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a domain name.
     *
     * @param request - CreateDomainRequest
     *
     * @returns CreateDomainResponse
     *
     * @param CreateDomainRequest $request
     *
     * @return CreateDomainResponse
     */
    public function createDomain($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDomainWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates an environment.
     *
     * @deprecated OpenAPI CreateEnvironment is deprecated
     *
     * @param request - CreateEnvironmentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEnvironmentResponse
     *
     * @param CreateEnvironmentRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateEnvironmentResponse
     */
    public function createEnvironmentWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alias) {
            @$body['alias'] = $request->alias;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateEnvironment',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/environments',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Creates an environment.
     *
     * @deprecated OpenAPI CreateEnvironment is deprecated
     *
     * @param request - CreateEnvironmentRequest
     *
     * @returns CreateEnvironmentResponse
     *
     * @param CreateEnvironmentRequest $request
     *
     * @return CreateEnvironmentResponse
     */
    public function createEnvironment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createEnvironmentWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a cloud-native gateway.
     *
     * @param request - CreateGatewayRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateGatewayResponse
     *
     * @param CreateGatewayRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateGatewayResponse
     */
    public function createGatewayWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->chargeType) {
            @$body['chargeType'] = $request->chargeType;
        }

        if (null !== $request->gatewayEdition) {
            @$body['gatewayEdition'] = $request->gatewayEdition;
        }

        if (null !== $request->gatewayType) {
            @$body['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->logConfig) {
            @$body['logConfig'] = $request->logConfig;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->networkAccessConfig) {
            @$body['networkAccessConfig'] = $request->networkAccessConfig;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->spec) {
            @$body['spec'] = $request->spec;
        }

        if (null !== $request->tag) {
            @$body['tag'] = $request->tag;
        }

        if (null !== $request->vpcId) {
            @$body['vpcId'] = $request->vpcId;
        }

        if (null !== $request->zoneConfig) {
            @$body['zoneConfig'] = $request->zoneConfig;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateGateway',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a cloud-native gateway.
     *
     * @param request - CreateGatewayRequest
     *
     * @returns CreateGatewayResponse
     *
     * @param CreateGatewayRequest $request
     *
     * @return CreateGatewayResponse
     */
    public function createGateway($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createGatewayWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates an HTTP API.
     *
     * @param request - CreateHttpApiRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateHttpApiResponse
     *
     * @param CreateHttpApiRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateHttpApiResponse
     */
    public function createHttpApiWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentProtocols) {
            @$body['agentProtocols'] = $request->agentProtocols;
        }

        if (null !== $request->aiProtocols) {
            @$body['aiProtocols'] = $request->aiProtocols;
        }

        if (null !== $request->authConfig) {
            @$body['authConfig'] = $request->authConfig;
        }

        if (null !== $request->basePath) {
            @$body['basePath'] = $request->basePath;
        }

        if (null !== $request->belongGatewayId) {
            @$body['belongGatewayId'] = $request->belongGatewayId;
        }

        if (null !== $request->deployConfigs) {
            @$body['deployConfigs'] = $request->deployConfigs;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->dryRun) {
            @$body['dryRun'] = $request->dryRun;
        }

        if (null !== $request->enableAuth) {
            @$body['enableAuth'] = $request->enableAuth;
        }

        if (null !== $request->firstByteTimeout) {
            @$body['firstByteTimeout'] = $request->firstByteTimeout;
        }

        if (null !== $request->ingressConfig) {
            @$body['ingressConfig'] = $request->ingressConfig;
        }

        if (null !== $request->modelCategory) {
            @$body['modelCategory'] = $request->modelCategory;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->protocols) {
            @$body['protocols'] = $request->protocols;
        }

        if (null !== $request->removeBasePathOnForward) {
            @$body['removeBasePathOnForward'] = $request->removeBasePathOnForward;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->strategy) {
            @$body['strategy'] = $request->strategy;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        if (null !== $request->versionConfig) {
            @$body['versionConfig'] = $request->versionConfig;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateHttpApi',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateHttpApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an HTTP API.
     *
     * @param request - CreateHttpApiRequest
     *
     * @returns CreateHttpApiResponse
     *
     * @param CreateHttpApiRequest $request
     *
     * @return CreateHttpApiResponse
     */
    public function createHttpApi($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createHttpApiWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates operations for an HTTP API.
     *
     * @param request - CreateHttpApiOperationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateHttpApiOperationResponse
     *
     * @param string                        $httpApiId
     * @param CreateHttpApiOperationRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateHttpApiOperationResponse
     */
    public function createHttpApiOperationWithOptions($httpApiId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->operations) {
            @$body['operations'] = $request->operations;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateHttpApiOperation',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/operations',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateHttpApiOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates operations for an HTTP API.
     *
     * @param request - CreateHttpApiOperationRequest
     *
     * @returns CreateHttpApiOperationResponse
     *
     * @param string                        $httpApiId
     * @param CreateHttpApiOperationRequest $request
     *
     * @return CreateHttpApiOperationResponse
     */
    public function createHttpApiOperation($httpApiId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createHttpApiOperationWithOptions($httpApiId, $request, $headers, $runtime);
    }

    /**
     * Creates a route for an HTTP API.
     *
     * @param request - CreateHttpApiRouteRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateHttpApiRouteResponse
     *
     * @param string                    $httpApiId
     * @param CreateHttpApiRouteRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateHttpApiRouteResponse
     */
    public function createHttpApiRouteWithOptions($httpApiId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->backendConfig) {
            @$body['backendConfig'] = $request->backendConfig;
        }

        if (null !== $request->deployConfigs) {
            @$body['deployConfigs'] = $request->deployConfigs;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->domainIds) {
            @$body['domainIds'] = $request->domainIds;
        }

        if (null !== $request->environmentId) {
            @$body['environmentId'] = $request->environmentId;
        }

        if (null !== $request->match) {
            @$body['match'] = $request->match;
        }

        if (null !== $request->mcpRouteConfig) {
            @$body['mcpRouteConfig'] = $request->mcpRouteConfig;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->policyConfigs) {
            @$body['policyConfigs'] = $request->policyConfigs;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateHttpApiRoute',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/routes',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateHttpApiRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a route for an HTTP API.
     *
     * @param request - CreateHttpApiRouteRequest
     *
     * @returns CreateHttpApiRouteResponse
     *
     * @param string                    $httpApiId
     * @param CreateHttpApiRouteRequest $request
     *
     * @return CreateHttpApiRouteResponse
     */
    public function createHttpApiRoute($httpApiId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createHttpApiRouteWithOptions($httpApiId, $request, $headers, $runtime);
    }

    /**
     * Creates a Model Context Protocol (MCP) server.
     *
     * @param request - CreateMcpServerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMcpServerResponse
     *
     * @param CreateMcpServerRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateMcpServerResponse
     */
    public function createMcpServerWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->assembledSources) {
            @$body['assembledSources'] = $request->assembledSources;
        }

        if (null !== $request->backendConfig) {
            @$body['backendConfig'] = $request->backendConfig;
        }

        if (null !== $request->createFromType) {
            @$body['createFromType'] = $request->createFromType;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->domainIds) {
            @$body['domainIds'] = $request->domainIds;
        }

        if (null !== $request->exposedUriPath) {
            @$body['exposedUriPath'] = $request->exposedUriPath;
        }

        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->grayMcpServerConfigs) {
            @$body['grayMcpServerConfigs'] = $request->grayMcpServerConfigs;
        }

        if (null !== $request->match) {
            @$body['match'] = $request->match;
        }

        if (null !== $request->mcpServerConfig) {
            @$body['mcpServerConfig'] = $request->mcpServerConfig;
        }

        if (null !== $request->mcpStatisticsEnable) {
            @$body['mcpStatisticsEnable'] = $request->mcpStatisticsEnable;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->protocol) {
            @$body['protocol'] = $request->protocol;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMcpServer',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/mcp-servers',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateMcpServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Model Context Protocol (MCP) server.
     *
     * @param request - CreateMcpServerRequest
     *
     * @returns CreateMcpServerResponse
     *
     * @param CreateMcpServerRequest $request
     *
     * @return CreateMcpServerResponse
     */
    public function createMcpServer($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMcpServerWithOptions($request, $headers, $runtime);
    }

    /**
     * Mounts a plug-in.
     *
     * @param request - CreatePluginAttachmentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePluginAttachmentResponse
     *
     * @param CreatePluginAttachmentRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreatePluginAttachmentResponse
     */
    public function createPluginAttachmentWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->attachResourceIds) {
            @$body['attachResourceIds'] = $request->attachResourceIds;
        }

        if (null !== $request->attachResourceType) {
            @$body['attachResourceType'] = $request->attachResourceType;
        }

        if (null !== $request->enable) {
            @$body['enable'] = $request->enable;
        }

        if (null !== $request->environmentId) {
            @$body['environmentId'] = $request->environmentId;
        }

        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->pluginConfig) {
            @$body['pluginConfig'] = $request->pluginConfig;
        }

        if (null !== $request->pluginId) {
            @$body['pluginId'] = $request->pluginId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePluginAttachment',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugin-attachments',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePluginAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Mounts a plug-in.
     *
     * @param request - CreatePluginAttachmentRequest
     *
     * @returns CreatePluginAttachmentResponse
     *
     * @param CreatePluginAttachmentRequest $request
     *
     * @return CreatePluginAttachmentResponse
     */
    public function createPluginAttachment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPluginAttachmentWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a custom plugin class.
     *
     * @param request - CreatePluginClassRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePluginClassResponse
     *
     * @param CreatePluginClassRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreatePluginClassResponse
     */
    public function createPluginClassWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alias) {
            @$body['alias'] = $request->alias;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->executePriority) {
            @$body['executePriority'] = $request->executePriority;
        }

        if (null !== $request->executeStage) {
            @$body['executeStage'] = $request->executeStage;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->supportedMinGatewayVersion) {
            @$body['supportedMinGatewayVersion'] = $request->supportedMinGatewayVersion;
        }

        if (null !== $request->version) {
            @$body['version'] = $request->version;
        }

        if (null !== $request->versionDescription) {
            @$body['versionDescription'] = $request->versionDescription;
        }

        if (null !== $request->wasmLanguage) {
            @$body['wasmLanguage'] = $request->wasmLanguage;
        }

        if (null !== $request->wasmUrl) {
            @$body['wasmUrl'] = $request->wasmUrl;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePluginClass',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugin-classes',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePluginClassResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a custom plugin class.
     *
     * @param request - CreatePluginClassRequest
     *
     * @returns CreatePluginClassResponse
     *
     * @param CreatePluginClassRequest $request
     *
     * @return CreatePluginClassResponse
     */
    public function createPluginClass($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPluginClassWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a policy.
     *
     * @param request - CreatePolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePolicyResponse
     *
     * @param CreatePolicyRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreatePolicyResponse
     */
    public function createPolicyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->className) {
            @$body['className'] = $request->className;
        }

        if (null !== $request->config) {
            @$body['config'] = $request->config;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePolicy',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/policies',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a policy.
     *
     * @param request - CreatePolicyRequest
     *
     * @returns CreatePolicyResponse
     *
     * @param CreatePolicyRequest $request
     *
     * @return CreatePolicyResponse
     */
    public function createPolicy($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPolicyWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a policy attachment to a resource.
     *
     * @param request - CreatePolicyAttachmentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePolicyAttachmentResponse
     *
     * @param CreatePolicyAttachmentRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreatePolicyAttachmentResponse
     */
    public function createPolicyAttachmentWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->attachResourceId) {
            @$body['attachResourceId'] = $request->attachResourceId;
        }

        if (null !== $request->attachResourceType) {
            @$body['attachResourceType'] = $request->attachResourceType;
        }

        if (null !== $request->environmentId) {
            @$body['environmentId'] = $request->environmentId;
        }

        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->policyId) {
            @$body['policyId'] = $request->policyId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePolicyAttachment',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/policy-attachments',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePolicyAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a policy attachment to a resource.
     *
     * @param request - CreatePolicyAttachmentRequest
     *
     * @returns CreatePolicyAttachmentResponse
     *
     * @param CreatePolicyAttachmentRequest $request
     *
     * @return CreatePolicyAttachmentResponse
     */
    public function createPolicyAttachment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPolicyAttachmentWithOptions($request, $headers, $runtime);
    }

    /**
     * Generates a key.
     *
     * @param request - CreateSecretRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSecretResponse
     *
     * @param CreateSecretRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateSecretResponse
     */
    public function createSecretWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->gatewayType) {
            @$body['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->kmsConfig) {
            @$body['kmsConfig'] = $request->kmsConfig;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->secretData) {
            @$body['secretData'] = $request->secretData;
        }

        if (null !== $request->secretSource) {
            @$body['secretSource'] = $request->secretSource;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSecret',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/secrets',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates a key.
     *
     * @param request - CreateSecretRequest
     *
     * @returns CreateSecretResponse
     *
     * @param CreateSecretRequest $request
     *
     * @return CreateSecretResponse
     */
    public function createSecret($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSecretWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates services.
     *
     * @remarks
     * This operation supports creating multiple services.
     *
     * @param request - CreateServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateServiceResponse
     *
     * @param CreateServiceRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateServiceResponse
     */
    public function createServiceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->serviceConfigs) {
            @$body['serviceConfigs'] = $request->serviceConfigs;
        }

        if (null !== $request->sourceType) {
            @$body['sourceType'] = $request->sourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateService',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/services',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates services.
     *
     * @remarks
     * This operation supports creating multiple services.
     *
     * @param request - CreateServiceRequest
     *
     * @returns CreateServiceResponse
     *
     * @param CreateServiceRequest $request
     *
     * @return CreateServiceResponse
     */
    public function createService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a service version.
     *
     * @param request - CreateServiceVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateServiceVersionResponse
     *
     * @param string                      $serviceId
     * @param CreateServiceVersionRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateServiceVersionResponse
     */
    public function createServiceVersionWithOptions($serviceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->labels) {
            @$body['labels'] = $request->labels;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateServiceVersion',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/services/' . Url::percentEncode($serviceId) . '/versions',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateServiceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a service version.
     *
     * @param request - CreateServiceVersionRequest
     *
     * @returns CreateServiceVersionResponse
     *
     * @param string                      $serviceId
     * @param CreateServiceVersionRequest $request
     *
     * @return CreateServiceVersionResponse
     */
    public function createServiceVersion($serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceVersionWithOptions($serviceId, $request, $headers, $runtime);
    }

    /**
     * Creates a source.
     *
     * @param request - CreateSourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSourceResponse
     *
     * @param CreateSourceRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateSourceResponse
     */
    public function createSourceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->k8sSourceConfig) {
            @$body['k8sSourceConfig'] = $request->k8sSourceConfig;
        }

        if (null !== $request->nacosSourceConfig) {
            @$body['nacosSourceConfig'] = $request->nacosSourceConfig;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSource',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/sources',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a source.
     *
     * @param request - CreateSourceRequest
     *
     * @returns CreateSourceResponse
     *
     * @param CreateSourceRequest $request
     *
     * @return CreateSourceResponse
     */
    public function createSource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSourceWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除AI模型卡片.
     *
     * @param request - DeleteAiModelCardRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAiModelCardResponse
     *
     * @param string                   $modelCardId
     * @param DeleteAiModelCardRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteAiModelCardResponse
     */
    public function deleteAiModelCardWithOptions($modelCardId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteAiModelCard',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/ai-model-cards/' . Url::percentEncode($modelCardId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteAiModelCardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除AI模型卡片.
     *
     * @param request - DeleteAiModelCardRequest
     *
     * @returns DeleteAiModelCardResponse
     *
     * @param string                   $modelCardId
     * @param DeleteAiModelCardRequest $request
     *
     * @return DeleteAiModelCardResponse
     */
    public function deleteAiModelCard($modelCardId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAiModelCardWithOptions($modelCardId, $request, $headers, $runtime);
    }

    /**
     * 删除AI模型供应商.
     *
     * @param request - DeleteAiModelProviderRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAiModelProviderResponse
     *
     * @param string                       $modelProviderId
     * @param DeleteAiModelProviderRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteAiModelProviderResponse
     */
    public function deleteAiModelProviderWithOptions($modelProviderId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteAiModelProvider',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/ai-model-providers/' . Url::percentEncode($modelProviderId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteAiModelProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除AI模型供应商.
     *
     * @param request - DeleteAiModelProviderRequest
     *
     * @returns DeleteAiModelProviderResponse
     *
     * @param string                       $modelProviderId
     * @param DeleteAiModelProviderRequest $request
     *
     * @return DeleteAiModelProviderResponse
     */
    public function deleteAiModelProvider($modelProviderId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAiModelProviderWithOptions($modelProviderId, $request, $headers, $runtime);
    }

    /**
     * Deletes an API consumer.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteConsumerResponse
     *
     * @param string         $consumerId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteConsumerResponse
     */
    public function deleteConsumerWithOptions($consumerId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteConsumer',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumers/' . Url::percentEncode($consumerId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteConsumerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an API consumer.
     *
     * @returns DeleteConsumerResponse
     *
     * @param string $consumerId
     *
     * @return DeleteConsumerResponse
     */
    public function deleteConsumer($consumerId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteConsumerWithOptions($consumerId, $headers, $runtime);
    }

    /**
     * Deletes an API consumer authorization rule.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteConsumerAuthorizationRuleResponse
     *
     * @param string         $consumerAuthorizationRuleId
     * @param string         $consumerId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteConsumerAuthorizationRuleResponse
     */
    public function deleteConsumerAuthorizationRuleWithOptions($consumerAuthorizationRuleId, $consumerId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteConsumerAuthorizationRule',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumers/' . Url::percentEncode($consumerId) . '/authorization-rules/' . Url::percentEncode($consumerAuthorizationRuleId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteConsumerAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an API consumer authorization rule.
     *
     * @returns DeleteConsumerAuthorizationRuleResponse
     *
     * @param string $consumerAuthorizationRuleId
     * @param string $consumerId
     *
     * @return DeleteConsumerAuthorizationRuleResponse
     */
    public function deleteConsumerAuthorizationRule($consumerAuthorizationRuleId, $consumerId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteConsumerAuthorizationRuleWithOptions($consumerAuthorizationRuleId, $consumerId, $headers, $runtime);
    }

    /**
     * 删除消费者组.
     *
     * @param request - DeleteConsumerGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteConsumerGroupResponse
     *
     * @param string                     $consumerGroupId
     * @param DeleteConsumerGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteConsumerGroupResponse
     */
    public function deleteConsumerGroupWithOptions($consumerGroupId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteConsumerGroup',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumer-groups/' . Url::percentEncode($consumerGroupId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteConsumerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除消费者组.
     *
     * @param request - DeleteConsumerGroupRequest
     *
     * @returns DeleteConsumerGroupResponse
     *
     * @param string                     $consumerGroupId
     * @param DeleteConsumerGroupRequest $request
     *
     * @return DeleteConsumerGroupResponse
     */
    public function deleteConsumerGroup($consumerGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteConsumerGroupWithOptions($consumerGroupId, $request, $headers, $runtime);
    }

    /**
     * Deletes a domain name.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDomainResponse
     *
     * @param string         $domainId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomainWithOptions($domainId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteDomain',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/domains/' . Url::percentEncode($domainId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a domain name.
     *
     * @returns DeleteDomainResponse
     *
     * @param string $domainId
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomain($domainId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDomainWithOptions($domainId, $headers, $runtime);
    }

    /**
     * Deletes an environment.
     *
     * @deprecated OpenAPI DeleteEnvironment is deprecated
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEnvironmentResponse
     *
     * @param string         $environmentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteEnvironmentResponse
     */
    public function deleteEnvironmentWithOptions($environmentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteEnvironment',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/environments/' . Url::percentEncode($environmentId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Deletes an environment.
     *
     * @deprecated OpenAPI DeleteEnvironment is deprecated
     *
     * @returns DeleteEnvironmentResponse
     *
     * @param string $environmentId
     *
     * @return DeleteEnvironmentResponse
     */
    public function deleteEnvironment($environmentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteEnvironmentWithOptions($environmentId, $headers, $runtime);
    }

    /**
     * Deletes a gateway.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGatewayResponse
     *
     * @param string         $gatewayId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteGatewayResponse
     */
    public function deleteGatewayWithOptions($gatewayId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteGateway',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a gateway.
     *
     * @returns DeleteGatewayResponse
     *
     * @param string $gatewayId
     *
     * @return DeleteGatewayResponse
     */
    public function deleteGateway($gatewayId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteGatewayWithOptions($gatewayId, $headers, $runtime);
    }

    /**
     * Deletes a quota throttling rule from a gateway.
     *
     * @remarks
     * Deletes a consumer-based quota rule from an AI gateway. This operation takes effect only for AI gateways of version 2.1.19 or later.
     *
     * @param request - DeleteGatewayQuotaRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGatewayQuotaRuleResponse
     *
     * @param string                        $gatewayId
     * @param string                        $ruleId
     * @param DeleteGatewayQuotaRuleRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteGatewayQuotaRuleResponse
     */
    public function deleteGatewayQuotaRuleWithOptions($gatewayId, $ruleId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteGatewayQuotaRule',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/quota-rules/' . Url::percentEncode($ruleId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteGatewayQuotaRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a quota throttling rule from a gateway.
     *
     * @remarks
     * Deletes a consumer-based quota rule from an AI gateway. This operation takes effect only for AI gateways of version 2.1.19 or later.
     *
     * @param request - DeleteGatewayQuotaRuleRequest
     *
     * @returns DeleteGatewayQuotaRuleResponse
     *
     * @param string                        $gatewayId
     * @param string                        $ruleId
     * @param DeleteGatewayQuotaRuleRequest $request
     *
     * @return DeleteGatewayQuotaRuleResponse
     */
    public function deleteGatewayQuotaRule($gatewayId, $ruleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteGatewayQuotaRuleWithOptions($gatewayId, $ruleId, $request, $headers, $runtime);
    }

    /**
     * Deletes a security group rule from a gateway.
     *
     * @param request - DeleteGatewaySecurityGroupRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGatewaySecurityGroupRuleResponse
     *
     * @param string                                $gatewayId
     * @param string                                $securityGroupRuleId
     * @param DeleteGatewaySecurityGroupRuleRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteGatewaySecurityGroupRuleResponse
     */
    public function deleteGatewaySecurityGroupRuleWithOptions($gatewayId, $securityGroupRuleId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cascadingDelete) {
            @$query['cascadingDelete'] = $request->cascadingDelete;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteGatewaySecurityGroupRule',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/security-group-rules/' . Url::percentEncode($securityGroupRuleId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteGatewaySecurityGroupRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a security group rule from a gateway.
     *
     * @param request - DeleteGatewaySecurityGroupRuleRequest
     *
     * @returns DeleteGatewaySecurityGroupRuleResponse
     *
     * @param string                                $gatewayId
     * @param string                                $securityGroupRuleId
     * @param DeleteGatewaySecurityGroupRuleRequest $request
     *
     * @return DeleteGatewaySecurityGroupRuleResponse
     */
    public function deleteGatewaySecurityGroupRule($gatewayId, $securityGroupRuleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteGatewaySecurityGroupRuleWithOptions($gatewayId, $securityGroupRuleId, $request, $headers, $runtime);
    }

    /**
     * Deletes a specified HTTP API.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteHttpApiResponse
     *
     * @param string         $httpApiId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteHttpApiResponse
     */
    public function deleteHttpApiWithOptions($httpApiId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteHttpApi',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteHttpApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified HTTP API.
     *
     * @returns DeleteHttpApiResponse
     *
     * @param string $httpApiId
     *
     * @return DeleteHttpApiResponse
     */
    public function deleteHttpApi($httpApiId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteHttpApiWithOptions($httpApiId, $headers, $runtime);
    }

    /**
     * Deletes a specified operation.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteHttpApiOperationResponse
     *
     * @param string         $httpApiId
     * @param string         $operationId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteHttpApiOperationResponse
     */
    public function deleteHttpApiOperationWithOptions($httpApiId, $operationId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteHttpApiOperation',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/operations/' . Url::percentEncode($operationId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteHttpApiOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified operation.
     *
     * @returns DeleteHttpApiOperationResponse
     *
     * @param string $httpApiId
     * @param string $operationId
     *
     * @return DeleteHttpApiOperationResponse
     */
    public function deleteHttpApiOperation($httpApiId, $operationId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteHttpApiOperationWithOptions($httpApiId, $operationId, $headers, $runtime);
    }

    /**
     * Deletes a route of an HTTP API.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteHttpApiRouteResponse
     *
     * @param string         $httpApiId
     * @param string         $routeId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteHttpApiRouteResponse
     */
    public function deleteHttpApiRouteWithOptions($httpApiId, $routeId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteHttpApiRoute',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/routes/' . Url::percentEncode($routeId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteHttpApiRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a route of an HTTP API.
     *
     * @returns DeleteHttpApiRouteResponse
     *
     * @param string $httpApiId
     * @param string $routeId
     *
     * @return DeleteHttpApiRouteResponse
     */
    public function deleteHttpApiRoute($httpApiId, $routeId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteHttpApiRouteWithOptions($httpApiId, $routeId, $headers, $runtime);
    }

    /**
     * Deletes an MCP server.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMcpServerResponse
     *
     * @param string         $mcpServerId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteMcpServerResponse
     */
    public function deleteMcpServerWithOptions($mcpServerId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteMcpServer',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/mcp-servers/' . Url::percentEncode($mcpServerId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteMcpServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an MCP server.
     *
     * @returns DeleteMcpServerResponse
     *
     * @param string $mcpServerId
     *
     * @return DeleteMcpServerResponse
     */
    public function deleteMcpServer($mcpServerId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMcpServerWithOptions($mcpServerId, $headers, $runtime);
    }

    /**
     * Deletes a plugin mount.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePluginAttachmentResponse
     *
     * @param string         $pluginAttachmentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeletePluginAttachmentResponse
     */
    public function deletePluginAttachmentWithOptions($pluginAttachmentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeletePluginAttachment',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugin-attachments/' . Url::percentEncode($pluginAttachmentId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePluginAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a plugin mount.
     *
     * @returns DeletePluginAttachmentResponse
     *
     * @param string $pluginAttachmentId
     *
     * @return DeletePluginAttachmentResponse
     */
    public function deletePluginAttachment($pluginAttachmentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePluginAttachmentWithOptions($pluginAttachmentId, $headers, $runtime);
    }

    /**
     * DeletePluginClass.
     *
     * @param request - DeletePluginClassRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePluginClassResponse
     *
     * @param string                   $pluginClassId
     * @param DeletePluginClassRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DeletePluginClassResponse
     */
    public function deletePluginClassWithOptions($pluginClassId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeletePluginClass',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugin-classes/' . Url::percentEncode($pluginClassId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePluginClassResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DeletePluginClass.
     *
     * @param request - DeletePluginClassRequest
     *
     * @returns DeletePluginClassResponse
     *
     * @param string                   $pluginClassId
     * @param DeletePluginClassRequest $request
     *
     * @return DeletePluginClassResponse
     */
    public function deletePluginClass($pluginClassId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePluginClassWithOptions($pluginClassId, $request, $headers, $runtime);
    }

    /**
     * Deletes a policy.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePolicyResponse
     *
     * @param string         $policyId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeletePolicyResponse
     */
    public function deletePolicyWithOptions($policyId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeletePolicy',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/policies/' . Url::percentEncode($policyId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a policy.
     *
     * @returns DeletePolicyResponse
     *
     * @param string $policyId
     *
     * @return DeletePolicyResponse
     */
    public function deletePolicy($policyId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePolicyWithOptions($policyId, $headers, $runtime);
    }

    /**
     * Deletes a policy attachment.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePolicyAttachmentResponse
     *
     * @param string         $policyAttachmentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeletePolicyAttachmentResponse
     */
    public function deletePolicyAttachmentWithOptions($policyAttachmentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeletePolicyAttachment',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/policy-attachments/' . Url::percentEncode($policyAttachmentId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePolicyAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a policy attachment.
     *
     * @returns DeletePolicyAttachmentResponse
     *
     * @param string $policyAttachmentId
     *
     * @return DeletePolicyAttachmentResponse
     */
    public function deletePolicyAttachment($policyAttachmentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePolicyAttachmentWithOptions($policyAttachmentId, $headers, $runtime);
    }

    /**
     * Deletes a key value.
     *
     * @remarks
     * The operation supports creating multiple services.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSecretResponse
     *
     * @param string         $secretId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteSecretResponse
     */
    public function deleteSecretWithOptions($secretId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteSecret',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/secrets/' . Url::percentEncode($secretId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a key value.
     *
     * @remarks
     * The operation supports creating multiple services.
     *
     * @returns DeleteSecretResponse
     *
     * @param string $secretId
     *
     * @return DeleteSecretResponse
     */
    public function deleteSecret($secretId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSecretWithOptions($secretId, $headers, $runtime);
    }

    /**
     * Deletes a service.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteServiceResponse
     *
     * @param string         $serviceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteServiceResponse
     */
    public function deleteServiceWithOptions($serviceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteService',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/services/' . Url::percentEncode($serviceId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a service.
     *
     * @returns DeleteServiceResponse
     *
     * @param string $serviceId
     *
     * @return DeleteServiceResponse
     */
    public function deleteService($serviceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceWithOptions($serviceId, $headers, $runtime);
    }

    /**
     * Deletes a service version.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteServiceVersionResponse
     *
     * @param string         $serviceId
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteServiceVersionResponse
     */
    public function deleteServiceVersionWithOptions($serviceId, $name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteServiceVersion',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/services/' . Url::percentEncode($serviceId) . '/versions/' . Url::percentEncode($name) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteServiceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a service version.
     *
     * @returns DeleteServiceVersionResponse
     *
     * @param string $serviceId
     * @param string $name
     *
     * @return DeleteServiceVersionResponse
     */
    public function deleteServiceVersion($serviceId, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceVersionWithOptions($serviceId, $name, $headers, $runtime);
    }

    /**
     * Deletes a service source.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSourceResponse
     *
     * @param string         $sourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteSourceResponse
     */
    public function deleteSourceWithOptions($sourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteSource',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/sources/' . Url::percentEncode($sourceId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a service source.
     *
     * @returns DeleteSourceResponse
     *
     * @param string $sourceId
     *
     * @return DeleteSourceResponse
     */
    public function deleteSource($sourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSourceWithOptions($sourceId, $headers, $runtime);
    }

    /**
     * Publishes an HTTP API. This includes REST APIs and routes within HTTP APIs.
     *
     * @param request - DeployHttpApiRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeployHttpApiResponse
     *
     * @param string               $httpApiId
     * @param DeployHttpApiRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeployHttpApiResponse
     */
    public function deployHttpApiWithOptions($httpApiId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->httpApiConfig) {
            @$body['httpApiConfig'] = $request->httpApiConfig;
        }

        if (null !== $request->restApiConfig) {
            @$body['restApiConfig'] = $request->restApiConfig;
        }

        if (null !== $request->routeId) {
            @$body['routeId'] = $request->routeId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeployHttpApi',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/deploy',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeployHttpApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Publishes an HTTP API. This includes REST APIs and routes within HTTP APIs.
     *
     * @param request - DeployHttpApiRequest
     *
     * @returns DeployHttpApiResponse
     *
     * @param string               $httpApiId
     * @param DeployHttpApiRequest $request
     *
     * @return DeployHttpApiResponse
     */
    public function deployHttpApi($httpApiId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deployHttpApiWithOptions($httpApiId, $request, $headers, $runtime);
    }

    /**
     * Publishes an MCP server.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeployMcpServerResponse
     *
     * @param string         $mcpServerId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeployMcpServerResponse
     */
    public function deployMcpServerWithOptions($mcpServerId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeployMcpServer',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/mcp-servers/' . Url::percentEncode($mcpServerId) . '/deploy',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeployMcpServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Publishes an MCP server.
     *
     * @returns DeployMcpServerResponse
     *
     * @param string $mcpServerId
     *
     * @return DeployMcpServerResponse
     */
    public function deployMcpServer($mcpServerId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deployMcpServerWithOptions($mcpServerId, $headers, $runtime);
    }

    /**
     * Queries the regions where the cloud-native API gateway is available for the current account.
     *
     * @param request - DescribeRegionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->language) {
            @$query['language'] = $request->language;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/regions',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the regions where the cloud-native API gateway is available for the current account.
     *
     * @param request - DescribeRegionsRequest
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRegionsWithOptions($request, $headers, $runtime);
    }

    /**
     * Exports a specified HTTP API.
     *
     * @param request - ExportHttpApiRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportHttpApiResponse
     *
     * @param string               $httpApiId
     * @param ExportHttpApiRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ExportHttpApiResponse
     */
    public function exportHttpApiWithOptions($httpApiId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->extensionConfig) {
            @$body['extensionConfig'] = $request->extensionConfig;
        }

        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->operationIds) {
            @$body['operationIds'] = $request->operationIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExportHttpApi',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/export',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExportHttpApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Exports a specified HTTP API.
     *
     * @param request - ExportHttpApiRequest
     *
     * @returns ExportHttpApiResponse
     *
     * @param string               $httpApiId
     * @param ExportHttpApiRequest $request
     *
     * @return ExportHttpApiResponse
     */
    public function exportHttpApi($httpApiId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->exportHttpApiWithOptions($httpApiId, $request, $headers, $runtime);
    }

    /**
     * 查询AI模型卡片详情.
     *
     * @param request - GetAiModelCardRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAiModelCardResponse
     *
     * @param string                $modelCardId
     * @param GetAiModelCardRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetAiModelCardResponse
     */
    public function getAiModelCardWithOptions($modelCardId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetAiModelCard',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/ai-model-cards/' . Url::percentEncode($modelCardId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAiModelCardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询AI模型卡片详情.
     *
     * @param request - GetAiModelCardRequest
     *
     * @returns GetAiModelCardResponse
     *
     * @param string                $modelCardId
     * @param GetAiModelCardRequest $request
     *
     * @return GetAiModelCardResponse
     */
    public function getAiModelCard($modelCardId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAiModelCardWithOptions($modelCardId, $request, $headers, $runtime);
    }

    /**
     * 查询AI模型供应商详情.
     *
     * @param request - GetAiModelProviderRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAiModelProviderResponse
     *
     * @param string                    $modelProviderId
     * @param GetAiModelProviderRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetAiModelProviderResponse
     */
    public function getAiModelProviderWithOptions($modelProviderId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetAiModelProvider',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/ai-model-providers/' . Url::percentEncode($modelProviderId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAiModelProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询AI模型供应商详情.
     *
     * @param request - GetAiModelProviderRequest
     *
     * @returns GetAiModelProviderResponse
     *
     * @param string                    $modelProviderId
     * @param GetAiModelProviderRequest $request
     *
     * @return GetAiModelProviderResponse
     */
    public function getAiModelProvider($modelProviderId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAiModelProviderWithOptions($modelProviderId, $request, $headers, $runtime);
    }

    /**
     * Retrieves an API consumer.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConsumerResponse
     *
     * @param string         $consumerId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetConsumerResponse
     */
    public function getConsumerWithOptions($consumerId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetConsumer',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumers/' . Url::percentEncode($consumerId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetConsumerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves an API consumer.
     *
     * @returns GetConsumerResponse
     *
     * @param string $consumerId
     *
     * @return GetConsumerResponse
     */
    public function getConsumer($consumerId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getConsumerWithOptions($consumerId, $headers, $runtime);
    }

    /**
     * Retrieves a consumer authorization rule.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConsumerAuthorizationRuleResponse
     *
     * @param string         $consumerAuthorizationRuleId
     * @param string         $consumerId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetConsumerAuthorizationRuleResponse
     */
    public function getConsumerAuthorizationRuleWithOptions($consumerAuthorizationRuleId, $consumerId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetConsumerAuthorizationRule',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumers/' . Url::percentEncode($consumerId) . '/authorization-rules/' . Url::percentEncode($consumerAuthorizationRuleId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetConsumerAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a consumer authorization rule.
     *
     * @returns GetConsumerAuthorizationRuleResponse
     *
     * @param string $consumerAuthorizationRuleId
     * @param string $consumerId
     *
     * @return GetConsumerAuthorizationRuleResponse
     */
    public function getConsumerAuthorizationRule($consumerAuthorizationRuleId, $consumerId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getConsumerAuthorizationRuleWithOptions($consumerAuthorizationRuleId, $consumerId, $headers, $runtime);
    }

    /**
     * 查询消费者组.
     *
     * @param request - GetConsumerGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConsumerGroupResponse
     *
     * @param string                  $consumerGroupId
     * @param GetConsumerGroupRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetConsumerGroupResponse
     */
    public function getConsumerGroupWithOptions($consumerGroupId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetConsumerGroup',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumer-groups/' . Url::percentEncode($consumerGroupId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetConsumerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询消费者组.
     *
     * @param request - GetConsumerGroupRequest
     *
     * @returns GetConsumerGroupResponse
     *
     * @param string                  $consumerGroupId
     * @param GetConsumerGroupRequest $request
     *
     * @return GetConsumerGroupResponse
     */
    public function getConsumerGroup($consumerGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getConsumerGroupWithOptions($consumerGroupId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the monitoring log dashboard.
     *
     * @param tmpReq - GetDashboardRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDashboardResponse
     *
     * @param string              $gatewayId
     * @param GetDashboardRequest $tmpReq
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetDashboardResponse
     */
    public function getDashboardWithOptions($gatewayId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GetDashboardShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filter) {
            $request->filterShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'filter', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['acceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->apiId) {
            @$query['apiId'] = $request->apiId;
        }

        if (null !== $request->filterShrink) {
            @$query['filter'] = $request->filterShrink;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->pluginClassId) {
            @$query['pluginClassId'] = $request->pluginClassId;
        }

        if (null !== $request->pluginId) {
            @$query['pluginId'] = $request->pluginId;
        }

        if (null !== $request->routeId) {
            @$query['routeId'] = $request->routeId;
        }

        if (null !== $request->source) {
            @$query['source'] = $request->source;
        }

        if (null !== $request->upstreamCluster) {
            @$query['upstreamCluster'] = $request->upstreamCluster;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDashboard',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/dashboards',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDashboardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the monitoring log dashboard.
     *
     * @param request - GetDashboardRequest
     *
     * @returns GetDashboardResponse
     *
     * @param string              $gatewayId
     * @param GetDashboardRequest $request
     *
     * @return GetDashboardResponse
     */
    public function getDashboard($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDashboardWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * Queries a domain name.
     *
     * @param request - GetDomainRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDomainResponse
     *
     * @param string           $domainId
     * @param GetDomainRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetDomainResponse
     */
    public function getDomainWithOptions($domainId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->withStatistics) {
            @$query['withStatistics'] = $request->withStatistics;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDomain',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/domains/' . Url::percentEncode($domainId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a domain name.
     *
     * @param request - GetDomainRequest
     *
     * @returns GetDomainResponse
     *
     * @param string           $domainId
     * @param GetDomainRequest $request
     *
     * @return GetDomainResponse
     */
    public function getDomain($domainId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDomainWithOptions($domainId, $request, $headers, $runtime);
    }

    /**
     * Queries an environment.
     *
     * @deprecated OpenAPI GetEnvironment is deprecated
     *
     * @param request - GetEnvironmentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEnvironmentResponse
     *
     * @param string                $environmentId
     * @param GetEnvironmentRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetEnvironmentResponse
     */
    public function getEnvironmentWithOptions($environmentId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->withStatistics) {
            @$query['withStatistics'] = $request->withStatistics;
        }

        if (null !== $request->withVpcInfo) {
            @$query['withVpcInfo'] = $request->withVpcInfo;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEnvironment',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/environments/' . Url::percentEncode($environmentId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Queries an environment.
     *
     * @deprecated OpenAPI GetEnvironment is deprecated
     *
     * @param request - GetEnvironmentRequest
     *
     * @returns GetEnvironmentResponse
     *
     * @param string                $environmentId
     * @param GetEnvironmentRequest $request
     *
     * @return GetEnvironmentResponse
     */
    public function getEnvironment($environmentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEnvironmentWithOptions($environmentId, $request, $headers, $runtime);
    }

    /**
     * Retrieves basic information about a gateway, including the associated VPC, vSwitch, and gateway ingress.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGatewayResponse
     *
     * @param string         $gatewayId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetGatewayResponse
     */
    public function getGatewayWithOptions($gatewayId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetGateway',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves basic information about a gateway, including the associated VPC, vSwitch, and gateway ingress.
     *
     * @returns GetGatewayResponse
     *
     * @param string $gatewayId
     *
     * @return GetGatewayResponse
     */
    public function getGateway($gatewayId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGatewayWithOptions($gatewayId, $headers, $runtime);
    }

    /**
     * Queries the details of a gateway quota rate limiting rule.
     *
     * @remarks
     * Queries the details of a consumer quota rule on an AI gateway.
     *
     * @param request - GetGatewayQuotaRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGatewayQuotaRuleResponse
     *
     * @param string                     $gatewayId
     * @param string                     $ruleId
     * @param GetGatewayQuotaRuleRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetGatewayQuotaRuleResponse
     */
    public function getGatewayQuotaRuleWithOptions($gatewayId, $ruleId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consumerPageNumber) {
            @$query['consumerPageNumber'] = $request->consumerPageNumber;
        }

        if (null !== $request->consumerPageSize) {
            @$query['consumerPageSize'] = $request->consumerPageSize;
        }

        if (null !== $request->withConsumers) {
            @$query['withConsumers'] = $request->withConsumers;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetGatewayQuotaRule',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/quota-rules/' . Url::percentEncode($ruleId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetGatewayQuotaRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a gateway quota rate limiting rule.
     *
     * @remarks
     * Queries the details of a consumer quota rule on an AI gateway.
     *
     * @param request - GetGatewayQuotaRuleRequest
     *
     * @returns GetGatewayQuotaRuleResponse
     *
     * @param string                     $gatewayId
     * @param string                     $ruleId
     * @param GetGatewayQuotaRuleRequest $request
     *
     * @return GetGatewayQuotaRuleResponse
     */
    public function getGatewayQuotaRule($gatewayId, $ruleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGatewayQuotaRuleWithOptions($gatewayId, $ruleId, $request, $headers, $runtime);
    }

    /**
     * Queries the usage details of a subject under a gateway quota throttling rule, including used quota, total quota, whether the limit is exceeded, usage details, and consumption records.
     *
     * @remarks
     * Retrieves the usage details of a specific consumer under a quota rule. This operation takes effect only for AI gateways with a version later than 2.1.19.
     *
     * @param request - GetGatewayQuotaRuleSubjectUsageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGatewayQuotaRuleSubjectUsageResponse
     *
     * @param string                                 $gatewayId
     * @param string                                 $ruleId
     * @param string                                 $subjectId
     * @param GetGatewayQuotaRuleSubjectUsageRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return GetGatewayQuotaRuleSubjectUsageResponse
     */
    public function getGatewayQuotaRuleSubjectUsageWithOptions($gatewayId, $ruleId, $subjectId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetGatewayQuotaRuleSubjectUsage',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/quota-rules/' . Url::percentEncode($ruleId) . '/subjects/' . Url::percentEncode($subjectId) . '/usage',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetGatewayQuotaRuleSubjectUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the usage details of a subject under a gateway quota throttling rule, including used quota, total quota, whether the limit is exceeded, usage details, and consumption records.
     *
     * @remarks
     * Retrieves the usage details of a specific consumer under a quota rule. This operation takes effect only for AI gateways with a version later than 2.1.19.
     *
     * @param request - GetGatewayQuotaRuleSubjectUsageRequest
     *
     * @returns GetGatewayQuotaRuleSubjectUsageResponse
     *
     * @param string                                 $gatewayId
     * @param string                                 $ruleId
     * @param string                                 $subjectId
     * @param GetGatewayQuotaRuleSubjectUsageRequest $request
     *
     * @return GetGatewayQuotaRuleSubjectUsageResponse
     */
    public function getGatewayQuotaRuleSubjectUsage($gatewayId, $ruleId, $subjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGatewayQuotaRuleSubjectUsageWithOptions($gatewayId, $ruleId, $subjectId, $request, $headers, $runtime);
    }

    /**
     * Retrieves HTTP API information.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHttpApiResponse
     *
     * @param string         $httpApiId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetHttpApiResponse
     */
    public function getHttpApiWithOptions($httpApiId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetHttpApi',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetHttpApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves HTTP API information.
     *
     * @returns GetHttpApiResponse
     *
     * @param string $httpApiId
     *
     * @return GetHttpApiResponse
     */
    public function getHttpApi($httpApiId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHttpApiWithOptions($httpApiId, $headers, $runtime);
    }

    /**
     * Retrieves operation information.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHttpApiOperationResponse
     *
     * @param string         $httpApiId
     * @param string         $operationId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetHttpApiOperationResponse
     */
    public function getHttpApiOperationWithOptions($httpApiId, $operationId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetHttpApiOperation',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/operations/' . Url::percentEncode($operationId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetHttpApiOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves operation information.
     *
     * @returns GetHttpApiOperationResponse
     *
     * @param string $httpApiId
     * @param string $operationId
     *
     * @return GetHttpApiOperationResponse
     */
    public function getHttpApiOperation($httpApiId, $operationId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHttpApiOperationWithOptions($httpApiId, $operationId, $headers, $runtime);
    }

    /**
     * Retrieves the route details of an HTTP API.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHttpApiRouteResponse
     *
     * @param string         $httpApiId
     * @param string         $routeId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetHttpApiRouteResponse
     */
    public function getHttpApiRouteWithOptions($httpApiId, $routeId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetHttpApiRoute',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/routes/' . Url::percentEncode($routeId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetHttpApiRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the route details of an HTTP API.
     *
     * @returns GetHttpApiRouteResponse
     *
     * @param string $httpApiId
     * @param string $routeId
     *
     * @return GetHttpApiRouteResponse
     */
    public function getHttpApiRoute($httpApiId, $routeId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHttpApiRouteWithOptions($httpApiId, $routeId, $headers, $runtime);
    }

    /**
     * Retrieves an MCP server.
     *
     * @remarks
     * The operation supports creating multiple services.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMcpServerResponse
     *
     * @param string         $mcpServerId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetMcpServerResponse
     */
    public function getMcpServerWithOptions($mcpServerId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMcpServer',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/mcp-servers/' . Url::percentEncode($mcpServerId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMcpServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves an MCP server.
     *
     * @remarks
     * The operation supports creating multiple services.
     *
     * @returns GetMcpServerResponse
     *
     * @param string $mcpServerId
     *
     * @return GetMcpServerResponse
     */
    public function getMcpServer($mcpServerId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMcpServerWithOptions($mcpServerId, $headers, $runtime);
    }

    /**
     * Queries a plugin mount.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPluginAttachmentResponse
     *
     * @param string         $pluginAttachmentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPluginAttachmentResponse
     */
    public function getPluginAttachmentWithOptions($pluginAttachmentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetPluginAttachment',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugin-attachments/' . Url::percentEncode($pluginAttachmentId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPluginAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a plugin mount.
     *
     * @returns GetPluginAttachmentResponse
     *
     * @param string $pluginAttachmentId
     *
     * @return GetPluginAttachmentResponse
     */
    public function getPluginAttachment($pluginAttachmentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPluginAttachmentWithOptions($pluginAttachmentId, $headers, $runtime);
    }

    /**
     * Retrieves a custom plug-in class.
     *
     * @param request - GetPluginClassRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPluginClassResponse
     *
     * @param string                $pluginClassId
     * @param GetPluginClassRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetPluginClassResponse
     */
    public function getPluginClassWithOptions($pluginClassId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetPluginClass',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugin-classes/' . Url::percentEncode($pluginClassId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPluginClassResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a custom plug-in class.
     *
     * @param request - GetPluginClassRequest
     *
     * @returns GetPluginClassResponse
     *
     * @param string                $pluginClassId
     * @param GetPluginClassRequest $request
     *
     * @return GetPluginClassResponse
     */
    public function getPluginClass($pluginClassId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPluginClassWithOptions($pluginClassId, $request, $headers, $runtime);
    }

    /**
     * Retrieves a policy.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPolicyResponse
     *
     * @param string         $policyId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPolicyResponse
     */
    public function getPolicyWithOptions($policyId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetPolicy',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/policies/' . Url::percentEncode($policyId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a policy.
     *
     * @returns GetPolicyResponse
     *
     * @param string $policyId
     *
     * @return GetPolicyResponse
     */
    public function getPolicy($policyId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPolicyWithOptions($policyId, $headers, $runtime);
    }

    /**
     * Queries the resource attachment of a policy.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPolicyAttachmentResponse
     *
     * @param string         $policyAttachmentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPolicyAttachmentResponse
     */
    public function getPolicyAttachmentWithOptions($policyAttachmentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetPolicyAttachment',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/policy-attachments/' . Url::percentEncode($policyAttachmentId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPolicyAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the resource attachment of a policy.
     *
     * @returns GetPolicyAttachmentResponse
     *
     * @param string $policyAttachmentId
     *
     * @return GetPolicyAttachmentResponse
     */
    public function getPolicyAttachment($policyAttachmentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPolicyAttachmentWithOptions($policyAttachmentId, $headers, $runtime);
    }

    /**
     * Retrieves resource overview information.
     *
     * @param request - GetResourceOverviewRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceOverviewResponse
     *
     * @param GetResourceOverviewRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetResourceOverviewResponse
     */
    public function getResourceOverviewWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gatewayType) {
            @$query['gatewayType'] = $request->gatewayType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourceOverview',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/overview/resources',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetResourceOverviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves resource overview information.
     *
     * @param request - GetResourceOverviewRequest
     *
     * @returns GetResourceOverviewResponse
     *
     * @param GetResourceOverviewRequest $request
     *
     * @return GetResourceOverviewResponse
     */
    public function getResourceOverview($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getResourceOverviewWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves a key.
     *
     * @remarks
     * The operation supports creating multiple services.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSecretResponse
     *
     * @param string         $secretId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetSecretResponse
     */
    public function getSecretWithOptions($secretId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetSecret',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/secrets/' . Url::percentEncode($secretId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a key.
     *
     * @remarks
     * The operation supports creating multiple services.
     *
     * @returns GetSecretResponse
     *
     * @param string $secretId
     *
     * @return GetSecretResponse
     */
    public function getSecret($secretId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSecretWithOptions($secretId, $headers, $runtime);
    }

    /**
     * Retrieves the value of a key.
     *
     * @remarks
     * The operation supports creating multiple services.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSecretValueResponse
     *
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetSecretValueResponse
     */
    public function getSecretValueWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetSecretValue',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/secrets/name/' . Url::percentEncode($name) . '/value',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSecretValueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the value of a key.
     *
     * @remarks
     * The operation supports creating multiple services.
     *
     * @returns GetSecretValueResponse
     *
     * @param string $name
     *
     * @return GetSecretValueResponse
     */
    public function getSecretValue($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSecretValueWithOptions($name, $headers, $runtime);
    }

    /**
     * Retrieves the details of a service.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceResponse
     *
     * @param string         $serviceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetServiceResponse
     */
    public function getServiceWithOptions($serviceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetService',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/services/' . Url::percentEncode($serviceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a service.
     *
     * @returns GetServiceResponse
     *
     * @param string $serviceId
     *
     * @return GetServiceResponse
     */
    public function getService($serviceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceWithOptions($serviceId, $headers, $runtime);
    }

    /**
     * Retrieves the details of a service source.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSourceResponse
     *
     * @param string         $sourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetSourceResponse
     */
    public function getSourceWithOptions($sourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetSource',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/sources/' . Url::percentEncode($sourceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a service source.
     *
     * @returns GetSourceResponse
     *
     * @param string $sourceId
     *
     * @return GetSourceResponse
     */
    public function getSource($sourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSourceWithOptions($sourceId, $headers, $runtime);
    }

    /**
     * Retrieves the Tracing Analysis configuration.
     *
     * @param request - GetTraceConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTraceConfigResponse
     *
     * @param string                $gatewayId
     * @param GetTraceConfigRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetTraceConfigResponse
     */
    public function getTraceConfigWithOptions($gatewayId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['acceptLanguage'] = $request->acceptLanguage;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTraceConfig',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/trace',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTraceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the Tracing Analysis configuration.
     *
     * @param request - GetTraceConfigRequest
     *
     * @returns GetTraceConfigResponse
     *
     * @param string                $gatewayId
     * @param GetTraceConfigRequest $request
     *
     * @return GetTraceConfigResponse
     */
    public function getTraceConfig($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTraceConfigWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * Imports an HTTP API. This operation supports importing OpenAPI 2.0 and OpenAPI 3.0.x definition files as REST-type APIs.
     *
     * @param request - ImportHttpApiRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportHttpApiResponse
     *
     * @param ImportHttpApiRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ImportHttpApiResponse
     */
    public function importHttpApiWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->deployConfigs) {
            @$body['deployConfigs'] = $request->deployConfigs;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->dryRun) {
            @$body['dryRun'] = $request->dryRun;
        }

        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->mcpRouteId) {
            @$body['mcpRouteId'] = $request->mcpRouteId;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->specContentBase64) {
            @$body['specContentBase64'] = $request->specContentBase64;
        }

        if (null !== $request->specFileUrl) {
            @$body['specFileUrl'] = $request->specFileUrl;
        }

        if (null !== $request->specOssConfig) {
            @$body['specOssConfig'] = $request->specOssConfig;
        }

        if (null !== $request->strategy) {
            @$body['strategy'] = $request->strategy;
        }

        if (null !== $request->targetHttpApiId) {
            @$body['targetHttpApiId'] = $request->targetHttpApiId;
        }

        if (null !== $request->versionConfig) {
            @$body['versionConfig'] = $request->versionConfig;
        }

        if (null !== $request->withGatewayExtension) {
            @$body['withGatewayExtension'] = $request->withGatewayExtension;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ImportHttpApi',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/import',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ImportHttpApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Imports an HTTP API. This operation supports importing OpenAPI 2.0 and OpenAPI 3.0.x definition files as REST-type APIs.
     *
     * @param request - ImportHttpApiRequest
     *
     * @returns ImportHttpApiResponse
     *
     * @param ImportHttpApiRequest $request
     *
     * @return ImportHttpApiResponse
     */
    public function importHttpApi($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->importHttpApiWithOptions($request, $headers, $runtime);
    }

    /**
     * Installs a plug-in.
     *
     * @param request - InstallPluginRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InstallPluginResponse
     *
     * @param InstallPluginRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return InstallPluginResponse
     */
    public function installPluginWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->gatewayIds) {
            @$body['gatewayIds'] = $request->gatewayIds;
        }

        if (null !== $request->pluginClassId) {
            @$body['pluginClassId'] = $request->pluginClassId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InstallPlugin',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugins/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InstallPluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Installs a plug-in.
     *
     * @param request - InstallPluginRequest
     *
     * @returns InstallPluginResponse
     *
     * @param InstallPluginRequest $request
     *
     * @return InstallPluginResponse
     */
    public function installPlugin($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->installPluginWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询AI模型卡片列表.
     *
     * @param request - ListAiModelCardsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAiModelCardsResponse
     *
     * @param ListAiModelCardsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListAiModelCardsResponse
     */
    public function listAiModelCardsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAiModelCards',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/ai-model-cards',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAiModelCardsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询AI模型卡片列表.
     *
     * @param request - ListAiModelCardsRequest
     *
     * @returns ListAiModelCardsResponse
     *
     * @param ListAiModelCardsRequest $request
     *
     * @return ListAiModelCardsResponse
     */
    public function listAiModelCards($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAiModelCardsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询AI模型供应商列表.
     *
     * @param request - ListAiModelProvidersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAiModelProvidersResponse
     *
     * @param ListAiModelProvidersRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListAiModelProvidersResponse
     */
    public function listAiModelProvidersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->provider) {
            @$query['provider'] = $request->provider;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAiModelProviders',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/ai-model-providers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAiModelProvidersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询AI模型供应商列表.
     *
     * @param request - ListAiModelProvidersRequest
     *
     * @returns ListAiModelProvidersResponse
     *
     * @param ListAiModelProvidersRequest $request
     *
     * @return ListAiModelProvidersResponse
     */
    public function listAiModelProviders($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAiModelProvidersWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the list of consumer authorization rules.
     *
     * @param request - ListConsumerAuthorizationRulesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConsumerAuthorizationRulesResponse
     *
     * @param string                                $consumerId
     * @param ListConsumerAuthorizationRulesRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return ListConsumerAuthorizationRulesResponse
     */
    public function listConsumerAuthorizationRulesWithOptions($consumerId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiNameLike) {
            @$query['apiNameLike'] = $request->apiNameLike;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListConsumerAuthorizationRules',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumers/' . Url::percentEncode($consumerId) . '/authorization-rules',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListConsumerAuthorizationRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of consumer authorization rules.
     *
     * @param request - ListConsumerAuthorizationRulesRequest
     *
     * @returns ListConsumerAuthorizationRulesResponse
     *
     * @param string                                $consumerId
     * @param ListConsumerAuthorizationRulesRequest $request
     *
     * @return ListConsumerAuthorizationRulesResponse
     */
    public function listConsumerAuthorizationRules($consumerId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConsumerAuthorizationRulesWithOptions($consumerId, $request, $headers, $runtime);
    }

    /**
     * 查询消费者组成员列表.
     *
     * @param request - ListConsumerGroupConsumersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConsumerGroupConsumersResponse
     *
     * @param string                            $consumerGroupId
     * @param ListConsumerGroupConsumersRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ListConsumerGroupConsumersResponse
     */
    public function listConsumerGroupConsumersWithOptions($consumerGroupId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nameLike) {
            @$query['nameLike'] = $request->nameLike;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListConsumerGroupConsumers',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumer-groups/' . Url::percentEncode($consumerGroupId) . '/consumers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListConsumerGroupConsumersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询消费者组成员列表.
     *
     * @param request - ListConsumerGroupConsumersRequest
     *
     * @returns ListConsumerGroupConsumersResponse
     *
     * @param string                            $consumerGroupId
     * @param ListConsumerGroupConsumersRequest $request
     *
     * @return ListConsumerGroupConsumersResponse
     */
    public function listConsumerGroupConsumers($consumerGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConsumerGroupConsumersWithOptions($consumerGroupId, $request, $headers, $runtime);
    }

    /**
     * 查询消费者组列表.
     *
     * @param request - ListConsumerGroupsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConsumerGroupsResponse
     *
     * @param ListConsumerGroupsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListConsumerGroupsResponse
     */
    public function listConsumerGroupsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gatewayType) {
            @$query['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->nameLike) {
            @$query['nameLike'] = $request->nameLike;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListConsumerGroups',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumer-groups',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListConsumerGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询消费者组列表.
     *
     * @param request - ListConsumerGroupsRequest
     *
     * @returns ListConsumerGroupsResponse
     *
     * @param ListConsumerGroupsRequest $request
     *
     * @return ListConsumerGroupsResponse
     */
    public function listConsumerGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConsumerGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the list of quota rules configured for a specific consumer.
     *
     * @param request - ListConsumerQuotaRulesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConsumerQuotaRulesResponse
     *
     * @param string                        $consumerId
     * @param ListConsumerQuotaRulesRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListConsumerQuotaRulesResponse
     */
    public function listConsumerQuotaRulesWithOptions($consumerId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListConsumerQuotaRules',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumers/' . Url::percentEncode($consumerId) . '/quota-rules',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListConsumerQuotaRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of quota rules configured for a specific consumer.
     *
     * @param request - ListConsumerQuotaRulesRequest
     *
     * @returns ListConsumerQuotaRulesResponse
     *
     * @param string                        $consumerId
     * @param ListConsumerQuotaRulesRequest $request
     *
     * @return ListConsumerQuotaRulesResponse
     */
    public function listConsumerQuotaRules($consumerId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConsumerQuotaRulesWithOptions($consumerId, $request, $headers, $runtime);
    }

    /**
     * Retrieves a list of consumers.
     *
     * @param request - ListConsumersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConsumersResponse
     *
     * @param ListConsumersRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListConsumersResponse
     */
    public function listConsumersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gatewayType) {
            @$query['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->nameLike) {
            @$query['nameLike'] = $request->nameLike;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListConsumers',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListConsumersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of consumers.
     *
     * @param request - ListConsumersRequest
     *
     * @returns ListConsumersResponse
     *
     * @param ListConsumersRequest $request
     *
     * @return ListConsumersResponse
     */
    public function listConsumers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConsumersWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries a list of domain names.
     *
     * @param request - ListDomainsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDomainsResponse
     *
     * @param ListDomainsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListDomainsResponse
     */
    public function listDomainsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainScope) {
            @$query['domainScope'] = $request->domainScope;
        }

        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayType) {
            @$query['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->nameLike) {
            @$query['nameLike'] = $request->nameLike;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDomains',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/domains',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of domain names.
     *
     * @param request - ListDomainsRequest
     *
     * @returns ListDomainsResponse
     *
     * @param ListDomainsRequest $request
     *
     * @return ListDomainsResponse
     */
    public function listDomains($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDomainsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the list of environments.
     *
     * @deprecated OpenAPI ListEnvironments is deprecated
     *
     * @param request - ListEnvironmentsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEnvironmentsResponse
     *
     * @param ListEnvironmentsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListEnvironmentsResponse
     */
    public function listEnvironmentsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliasLike) {
            @$query['aliasLike'] = $request->aliasLike;
        }

        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayNameLike) {
            @$query['gatewayNameLike'] = $request->gatewayNameLike;
        }

        if (null !== $request->gatewayType) {
            @$query['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->nameLike) {
            @$query['nameLike'] = $request->nameLike;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEnvironments',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/environments',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListEnvironmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Queries the list of environments.
     *
     * @deprecated OpenAPI ListEnvironments is deprecated
     *
     * @param request - ListEnvironmentsRequest
     *
     * @returns ListEnvironmentsResponse
     *
     * @param ListEnvironmentsRequest $request
     *
     * @return ListEnvironmentsResponse
     */
    public function listEnvironments($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEnvironmentsWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the external service information of a gateway.
     *
     * @remarks
     * This operation supports creating multiple services.
     *
     * @param request - ListExternalServicesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListExternalServicesResponse
     *
     * @param string                      $gatewayId
     * @param ListExternalServicesRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListExternalServicesResponse
     */
    public function listExternalServicesWithOptions($gatewayId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->importableOnly) {
            @$query['importableOnly'] = $request->importableOnly;
        }

        if (null !== $request->limit) {
            @$query['limit'] = $request->limit;
        }

        if (null !== $request->nameLike) {
            @$query['nameLike'] = $request->nameLike;
        }

        if (null !== $request->paiWorkspaceId) {
            @$query['paiWorkspaceId'] = $request->paiWorkspaceId;
        }

        if (null !== $request->sourceType) {
            @$query['sourceType'] = $request->sourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListExternalServices',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/external-services',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListExternalServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the external service information of a gateway.
     *
     * @remarks
     * This operation supports creating multiple services.
     *
     * @param request - ListExternalServicesRequest
     *
     * @returns ListExternalServicesResponse
     *
     * @param string                      $gatewayId
     * @param ListExternalServicesRequest $request
     *
     * @return ListExternalServicesResponse
     */
    public function listExternalServices($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listExternalServicesWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * Queries the list of gateway attribute parameter settings.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGatewayFeaturesResponse
     *
     * @param string         $gatewayId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListGatewayFeaturesResponse
     */
    public function listGatewayFeaturesWithOptions($gatewayId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListGatewayFeatures',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/gateway-features',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListGatewayFeaturesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of gateway attribute parameter settings.
     *
     * @returns ListGatewayFeaturesResponse
     *
     * @param string $gatewayId
     *
     * @return ListGatewayFeaturesResponse
     */
    public function listGatewayFeatures($gatewayId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGatewayFeaturesWithOptions($gatewayId, $headers, $runtime);
    }

    /**
     * Queries the list of consumer quota rules bound to a gateway.
     *
     * @remarks
     * Queries the list of consumer quota rules bound to a gateway.
     *
     * @param request - ListGatewayQuotaRulesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGatewayQuotaRulesResponse
     *
     * @param string                       $gatewayId
     * @param ListGatewayQuotaRulesRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListGatewayQuotaRulesResponse
     */
    public function listGatewayQuotaRulesWithOptions($gatewayId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGatewayQuotaRules',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/quota-rules',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListGatewayQuotaRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of consumer quota rules bound to a gateway.
     *
     * @remarks
     * Queries the list of consumer quota rules bound to a gateway.
     *
     * @param request - ListGatewayQuotaRulesRequest
     *
     * @returns ListGatewayQuotaRulesResponse
     *
     * @param string                       $gatewayId
     * @param ListGatewayQuotaRulesRequest $request
     *
     * @return ListGatewayQuotaRulesResponse
     */
    public function listGatewayQuotaRules($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGatewayQuotaRulesWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * Queries a list of gateways.
     *
     * @param tmpReq - ListGatewaysRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGatewaysResponse
     *
     * @param ListGatewaysRequest $tmpReq
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListGatewaysResponse
     */
    public function listGatewaysWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListGatewaysShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'tag', 'json');
        }

        $query = [];
        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayType) {
            @$query['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tagShrink) {
            @$query['tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGateways',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListGatewaysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of gateways.
     *
     * @param request - ListGatewaysRequest
     *
     * @returns ListGatewaysResponse
     *
     * @param ListGatewaysRequest $request
     *
     * @return ListGatewaysResponse
     */
    public function listGateways($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGatewaysWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves a list of API operations.
     *
     * @param request - ListHttpApiOperationsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListHttpApiOperationsResponse
     *
     * @param string                       $httpApiId
     * @param ListHttpApiOperationsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListHttpApiOperationsResponse
     */
    public function listHttpApiOperationsWithOptions($httpApiId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consumerAuthorizationRuleId) {
            @$query['consumerAuthorizationRuleId'] = $request->consumerAuthorizationRuleId;
        }

        if (null !== $request->enableAuth) {
            @$query['enableAuth'] = $request->enableAuth;
        }

        if (null !== $request->forDeploy) {
            @$query['forDeploy'] = $request->forDeploy;
        }

        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->method) {
            @$query['method'] = $request->method;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->nameLike) {
            @$query['nameLike'] = $request->nameLike;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->pathLike) {
            @$query['pathLike'] = $request->pathLike;
        }

        if (null !== $request->withConsumerInEnvironmentId) {
            @$query['withConsumerInEnvironmentId'] = $request->withConsumerInEnvironmentId;
        }

        if (null !== $request->withConsumerInfoById) {
            @$query['withConsumerInfoById'] = $request->withConsumerInfoById;
        }

        if (null !== $request->withPluginAttachmentByPluginId) {
            @$query['withPluginAttachmentByPluginId'] = $request->withPluginAttachmentByPluginId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListHttpApiOperations',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/operations',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListHttpApiOperationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of API operations.
     *
     * @param request - ListHttpApiOperationsRequest
     *
     * @returns ListHttpApiOperationsResponse
     *
     * @param string                       $httpApiId
     * @param ListHttpApiOperationsRequest $request
     *
     * @return ListHttpApiOperationsResponse
     */
    public function listHttpApiOperations($httpApiId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listHttpApiOperationsWithOptions($httpApiId, $request, $headers, $runtime);
    }

    /**
     * Queries the route list of an HTTP API.
     *
     * @param request - ListHttpApiRoutesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListHttpApiRoutesResponse
     *
     * @param string                   $httpApiId
     * @param ListHttpApiRoutesRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListHttpApiRoutesResponse
     */
    public function listHttpApiRoutesWithOptions($httpApiId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backendServiceName) {
            @$query['backendServiceName'] = $request->backendServiceName;
        }

        if (null !== $request->consumerAuthorizationRuleId) {
            @$query['consumerAuthorizationRuleId'] = $request->consumerAuthorizationRuleId;
        }

        if (null !== $request->deployStatuses) {
            @$query['deployStatuses'] = $request->deployStatuses;
        }

        if (null !== $request->domainId) {
            @$query['domainId'] = $request->domainId;
        }

        if (null !== $request->environmentId) {
            @$query['environmentId'] = $request->environmentId;
        }

        if (null !== $request->forDeploy) {
            @$query['forDeploy'] = $request->forDeploy;
        }

        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->nameLike) {
            @$query['nameLike'] = $request->nameLike;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->pathLike) {
            @$query['pathLike'] = $request->pathLike;
        }

        if (null !== $request->withAuthPolicyInfo) {
            @$query['withAuthPolicyInfo'] = $request->withAuthPolicyInfo;
        }

        if (null !== $request->withConsumerInfoById) {
            @$query['withConsumerInfoById'] = $request->withConsumerInfoById;
        }

        if (null !== $request->withPluginAttachmentByPluginId) {
            @$query['withPluginAttachmentByPluginId'] = $request->withPluginAttachmentByPluginId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListHttpApiRoutes',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/routes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListHttpApiRoutesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the route list of an HTTP API.
     *
     * @param request - ListHttpApiRoutesRequest
     *
     * @returns ListHttpApiRoutesResponse
     *
     * @param string                   $httpApiId
     * @param ListHttpApiRoutesRequest $request
     *
     * @return ListHttpApiRoutesResponse
     */
    public function listHttpApiRoutes($httpApiId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listHttpApiRoutesWithOptions($httpApiId, $request, $headers, $runtime);
    }

    /**
     * Retrieves a list of HTTP APIs.
     *
     * @param request - ListHttpApisRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListHttpApisResponse
     *
     * @param ListHttpApisRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListHttpApisResponse
     */
    public function listHttpApisWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayType) {
            @$query['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->types) {
            @$query['types'] = $request->types;
        }

        if (null !== $request->withAPIsPublishedToEnvironment) {
            @$query['withAPIsPublishedToEnvironment'] = $request->withAPIsPublishedToEnvironment;
        }

        if (null !== $request->withAuthPolicyInEnvironmentId) {
            @$query['withAuthPolicyInEnvironmentId'] = $request->withAuthPolicyInEnvironmentId;
        }

        if (null !== $request->withAuthPolicyList) {
            @$query['withAuthPolicyList'] = $request->withAuthPolicyList;
        }

        if (null !== $request->withConsumerInfoById) {
            @$query['withConsumerInfoById'] = $request->withConsumerInfoById;
        }

        if (null !== $request->withEnvironmentInfo) {
            @$query['withEnvironmentInfo'] = $request->withEnvironmentInfo;
        }

        if (null !== $request->withEnvironmentInfoById) {
            @$query['withEnvironmentInfoById'] = $request->withEnvironmentInfoById;
        }

        if (null !== $request->withIngressInfo) {
            @$query['withIngressInfo'] = $request->withIngressInfo;
        }

        if (null !== $request->withPluginAttachmentByPluginId) {
            @$query['withPluginAttachmentByPluginId'] = $request->withPluginAttachmentByPluginId;
        }

        if (null !== $request->withPolicyConfigs) {
            @$query['withPolicyConfigs'] = $request->withPolicyConfigs;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListHttpApis',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListHttpApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of HTTP APIs.
     *
     * @param request - ListHttpApisRequest
     *
     * @returns ListHttpApisResponse
     *
     * @param ListHttpApisRequest $request
     *
     * @return ListHttpApisResponse
     */
    public function listHttpApis($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listHttpApisWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves a list of MCP servers.
     *
     * @remarks
     * The operation supports creating multiple services.
     *
     * @param request - ListMcpServersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMcpServersResponse
     *
     * @param ListMcpServersRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListMcpServersResponse
     */
    public function listMcpServersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->createFromTypes) {
            @$query['createFromTypes'] = $request->createFromTypes;
        }

        if (null !== $request->deployStatuses) {
            @$query['deployStatuses'] = $request->deployStatuses;
        }

        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->nameLike) {
            @$query['nameLike'] = $request->nameLike;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMcpServers',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/mcp-servers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMcpServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of MCP servers.
     *
     * @remarks
     * The operation supports creating multiple services.
     *
     * @param request - ListMcpServersRequest
     *
     * @returns ListMcpServersResponse
     *
     * @param ListMcpServersRequest $request
     *
     * @return ListMcpServersResponse
     */
    public function listMcpServers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMcpServersWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the list of plug-in mounts.
     *
     * @param request - ListPluginAttachmentsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPluginAttachmentsResponse
     *
     * @param ListPluginAttachmentsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListPluginAttachmentsResponse
     */
    public function listPluginAttachmentsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->attachResourceId) {
            @$query['attachResourceId'] = $request->attachResourceId;
        }

        if (null !== $request->attachResourceType) {
            @$query['attachResourceType'] = $request->attachResourceType;
        }

        if (null !== $request->attachResourceTypes) {
            @$query['attachResourceTypes'] = $request->attachResourceTypes;
        }

        if (null !== $request->environmentId) {
            @$query['environmentId'] = $request->environmentId;
        }

        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->pluginId) {
            @$query['pluginId'] = $request->pluginId;
        }

        if (null !== $request->withParentResource) {
            @$query['withParentResource'] = $request->withParentResource;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPluginAttachments',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugin-attachments',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPluginAttachmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of plug-in mounts.
     *
     * @param request - ListPluginAttachmentsRequest
     *
     * @returns ListPluginAttachmentsResponse
     *
     * @param ListPluginAttachmentsRequest $request
     *
     * @return ListPluginAttachmentsResponse
     */
    public function listPluginAttachments($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPluginAttachmentsWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves plug-ins.
     *
     * @remarks
     * The operation supports creating multiple services.
     *
     * @param request - ListPluginClassesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPluginClassesResponse
     *
     * @param ListPluginClassesRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListPluginClassesResponse
     */
    public function listPluginClassesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliasLike) {
            @$query['aliasLike'] = $request->aliasLike;
        }

        if (null !== $request->direction) {
            @$query['direction'] = $request->direction;
        }

        if (null !== $request->excludeBuiltinAiProxy) {
            @$query['excludeBuiltinAiProxy'] = $request->excludeBuiltinAiProxy;
        }

        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayType) {
            @$query['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->installed) {
            @$query['installed'] = $request->installed;
        }

        if (null !== $request->nameLike) {
            @$query['nameLike'] = $request->nameLike;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->source) {
            @$query['source'] = $request->source;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPluginClasses',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugin-classes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPluginClassesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves plug-ins.
     *
     * @remarks
     * The operation supports creating multiple services.
     *
     * @param request - ListPluginClassesRequest
     *
     * @returns ListPluginClassesResponse
     *
     * @param ListPluginClassesRequest $request
     *
     * @return ListPluginClassesResponse
     */
    public function listPluginClasses($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPluginClassesWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves a list of plugins.
     *
     * @param request - ListPluginsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPluginsResponse
     *
     * @param ListPluginsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListPluginsResponse
     */
    public function listPluginsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->attachResourceId) {
            @$query['attachResourceId'] = $request->attachResourceId;
        }

        if (null !== $request->attachResourceType) {
            @$query['attachResourceType'] = $request->attachResourceType;
        }

        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayType) {
            @$query['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->includeBuiltinAiGateway) {
            @$query['includeBuiltinAiGateway'] = $request->includeBuiltinAiGateway;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->pluginClassId) {
            @$query['pluginClassId'] = $request->pluginClassId;
        }

        if (null !== $request->pluginClassName) {
            @$query['pluginClassName'] = $request->pluginClassName;
        }

        if (null !== $request->withAttachmentInfo) {
            @$query['withAttachmentInfo'] = $request->withAttachmentInfo;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPlugins',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugins',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPluginsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of plugins.
     *
     * @param request - ListPluginsRequest
     *
     * @returns ListPluginsResponse
     *
     * @param ListPluginsRequest $request
     *
     * @return ListPluginsResponse
     */
    public function listPlugins($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPluginsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries a list of policies.
     *
     * @param request - ListPoliciesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPoliciesResponse
     *
     * @param ListPoliciesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListPoliciesResponse
     */
    public function listPoliciesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->attachResourceId) {
            @$query['attachResourceId'] = $request->attachResourceId;
        }

        if (null !== $request->attachResourceType) {
            @$query['attachResourceType'] = $request->attachResourceType;
        }

        if (null !== $request->environmentId) {
            @$query['environmentId'] = $request->environmentId;
        }

        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->withAttachments) {
            @$query['withAttachments'] = $request->withAttachments;
        }

        if (null !== $request->withSystemPolicy) {
            @$query['withSystemPolicy'] = $request->withSystemPolicy;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPolicies',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/policies',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of policies.
     *
     * @param request - ListPoliciesRequest
     *
     * @returns ListPoliciesResponse
     *
     * @param ListPoliciesRequest $request
     *
     * @return ListPoliciesResponse
     */
    public function listPolicies($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPoliciesWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves policy templates.
     *
     * @param request - ListPolicyClassesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPolicyClassesResponse
     *
     * @param ListPolicyClassesRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListPolicyClassesResponse
     */
    public function listPolicyClassesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->attachResourceId) {
            @$query['attachResourceId'] = $request->attachResourceId;
        }

        if (null !== $request->attachResourceType) {
            @$query['attachResourceType'] = $request->attachResourceType;
        }

        if (null !== $request->direction) {
            @$query['direction'] = $request->direction;
        }

        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPolicyClasses',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/policy-classes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPolicyClassesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves policy templates.
     *
     * @param request - ListPolicyClassesRequest
     *
     * @returns ListPolicyClassesResponse
     *
     * @param ListPolicyClassesRequest $request
     *
     * @return ListPolicyClassesResponse
     */
    public function listPolicyClasses($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPolicyClassesWithOptions($request, $headers, $runtime);
    }

    /**
     * Lists secret references.
     *
     * @remarks
     * This operation supports creating multiple services.
     *
     * @param request - ListSecretReferencesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSecretReferencesResponse
     *
     * @param string                      $secretId
     * @param ListSecretReferencesRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListSecretReferencesResponse
     */
    public function listSecretReferencesWithOptions($secretId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSecretReferences',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/secrets/' . Url::percentEncode($secretId) . '/references',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSecretReferencesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists secret references.
     *
     * @remarks
     * This operation supports creating multiple services.
     *
     * @param request - ListSecretReferencesRequest
     *
     * @returns ListSecretReferencesResponse
     *
     * @param string                      $secretId
     * @param ListSecretReferencesRequest $request
     *
     * @return ListSecretReferencesResponse
     */
    public function listSecretReferences($secretId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSecretReferencesWithOptions($secretId, $request, $headers, $runtime);
    }

    /**
     * Lists keys.
     *
     * @remarks
     * The operation supports creating multiple services.
     *
     * @param request - ListSecretsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSecretsResponse
     *
     * @param ListSecretsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListSecretsResponse
     */
    public function listSecretsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gatewayType) {
            @$query['gatewayType'] = $request->gatewayType;
        }

        if (null !== $request->nameLike) {
            @$query['nameLike'] = $request->nameLike;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSecrets',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/secrets',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSecretsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists keys.
     *
     * @remarks
     * The operation supports creating multiple services.
     *
     * @param request - ListSecretsRequest
     *
     * @returns ListSecretsResponse
     *
     * @param ListSecretsRequest $request
     *
     * @return ListSecretsResponse
     */
    public function listSecrets($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSecretsWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves a list of services.
     *
     * @param request - ListServicesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServicesResponse
     *
     * @param ListServicesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListServicesResponse
     */
    public function listServicesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gatewayId) {
            @$query['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceType) {
            @$query['sourceType'] = $request->sourceType;
        }

        if (null !== $request->sourceTypes) {
            @$query['sourceTypes'] = $request->sourceTypes;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListServices',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/services',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of services.
     *
     * @param request - ListServicesRequest
     *
     * @returns ListServicesResponse
     *
     * @param ListServicesRequest $request
     *
     * @return ListServicesResponse
     */
    public function listServices($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServicesWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves a list of certificates.
     *
     * @param request - ListSslCertsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSslCertsResponse
     *
     * @param ListSslCertsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListSslCertsResponse
     */
    public function listSslCertsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certNameLike) {
            @$query['certNameLike'] = $request->certNameLike;
        }

        if (null !== $request->domainName) {
            @$query['domainName'] = $request->domainName;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSslCerts',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/ssl/certs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSslCertsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of certificates.
     *
     * @param request - ListSslCertsRequest
     *
     * @returns ListSslCertsResponse
     *
     * @param ListSslCertsRequest $request
     *
     * @return ListSslCertsResponse
     */
    public function listSslCerts($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSslCertsWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the list of resource labels.
     *
     * @param tmpReq - ListTagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListTagResourcesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceId) {
            $request->resourceIdShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceId, 'ResourceId', 'json');
        }

        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceIdShrink) {
            @$query['ResourceId'] = $request->resourceIdShrink;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/tags',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of resource labels.
     *
     * @param request - ListTagResourcesRequest
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the zones available for a cloud-native API gateway in a specific region.
     *
     * @param request - ListZonesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListZonesResponse
     *
     * @param ListZonesRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListZonesResponse
     */
    public function listZonesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gatewayEdition) {
            @$query['gatewayEdition'] = $request->gatewayEdition;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListZones',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/zones',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the zones available for a cloud-native API gateway in a specific region.
     *
     * @param request - ListZonesRequest
     *
     * @returns ListZonesResponse
     *
     * @param ListZonesRequest $request
     *
     * @return ListZonesResponse
     */
    public function listZones($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listZonesWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the list of consumer authorization rules.
     *
     * @param request - QueryConsumerAuthorizationRulesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryConsumerAuthorizationRulesResponse
     *
     * @param QueryConsumerAuthorizationRulesRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return QueryConsumerAuthorizationRulesResponse
     */
    public function queryConsumerAuthorizationRulesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiNameLike) {
            @$query['apiNameLike'] = $request->apiNameLike;
        }

        if (null !== $request->consumerGroupId) {
            @$query['consumerGroupId'] = $request->consumerGroupId;
        }

        if (null !== $request->consumerId) {
            @$query['consumerId'] = $request->consumerId;
        }

        if (null !== $request->consumerNameLike) {
            @$query['consumerNameLike'] = $request->consumerNameLike;
        }

        if (null !== $request->environmentId) {
            @$query['environmentId'] = $request->environmentId;
        }

        if (null !== $request->groupByApi) {
            @$query['groupByApi'] = $request->groupByApi;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->parentResourceId) {
            @$query['parentResourceId'] = $request->parentResourceId;
        }

        if (null !== $request->principalType) {
            @$query['principalType'] = $request->principalType;
        }

        if (null !== $request->resourceId) {
            @$query['resourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['resourceType'] = $request->resourceType;
        }

        if (null !== $request->resourceTypes) {
            @$query['resourceTypes'] = $request->resourceTypes;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryConsumerAuthorizationRules',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/authorization-rules',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryConsumerAuthorizationRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of consumer authorization rules.
     *
     * @param request - QueryConsumerAuthorizationRulesRequest
     *
     * @returns QueryConsumerAuthorizationRulesResponse
     *
     * @param QueryConsumerAuthorizationRulesRequest $request
     *
     * @return QueryConsumerAuthorizationRulesResponse
     */
    public function queryConsumerAuthorizationRules($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryConsumerAuthorizationRulesWithOptions($request, $headers, $runtime);
    }

    /**
     * Deletes an API consumer authorization rule.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveConsumerAuthorizationRuleResponse
     *
     * @param string         $consumerAuthorizationRuleId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RemoveConsumerAuthorizationRuleResponse
     */
    public function removeConsumerAuthorizationRuleWithOptions($consumerAuthorizationRuleId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'RemoveConsumerAuthorizationRule',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/authorization-rules/' . Url::percentEncode($consumerAuthorizationRuleId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RemoveConsumerAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an API consumer authorization rule.
     *
     * @returns RemoveConsumerAuthorizationRuleResponse
     *
     * @param string $consumerAuthorizationRuleId
     *
     * @return RemoveConsumerAuthorizationRuleResponse
     */
    public function removeConsumerAuthorizationRule($consumerAuthorizationRuleId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeConsumerAuthorizationRuleWithOptions($consumerAuthorizationRuleId, $headers, $runtime);
    }

    /**
     * Resets a quota throttling rule on a gateway.
     *
     * @remarks
     * Resets a quota throttling rule on a gateway. This operation takes effect only on AI gateways running version 2.1.19 or later. Resetting a rule clears the historical usage of consumers associated with the rule.
     * >
     * >  Recommended call sequence:
     * > - 1. Perform a dry run to check for rule conflicts.
     * > - - Set dryRun to true.
     * > - - The response contains a conflict preview with conflictHash.
     * > - 2. Submit the request after confirmation.
     * > - - No conflicts: Set dryRun to false and overwrite to false.
     * > - - Conflicts exist and you confirm the overwrite: Set dryRun to false, overwrite to true, and conflictHash to the value returned in the previous step.
     *
     * @param request - ResetGatewayQuotaRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetGatewayQuotaRuleResponse
     *
     * @param string                       $gatewayId
     * @param string                       $ruleId
     * @param ResetGatewayQuotaRuleRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ResetGatewayQuotaRuleResponse
     */
    public function resetGatewayQuotaRuleWithOptions($gatewayId, $ruleId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->conflictHash) {
            @$body['conflictHash'] = $request->conflictHash;
        }

        if (null !== $request->dryRun) {
            @$body['dryRun'] = $request->dryRun;
        }

        if (null !== $request->overwrite) {
            @$body['overwrite'] = $request->overwrite;
        }

        if (null !== $request->periodMultiplier) {
            @$body['periodMultiplier'] = $request->periodMultiplier;
        }

        if (null !== $request->periodType) {
            @$body['periodType'] = $request->periodType;
        }

        if (null !== $request->quotaLimit) {
            @$body['quotaLimit'] = $request->quotaLimit;
        }

        if (null !== $request->timezone) {
            @$body['timezone'] = $request->timezone;
        }

        if (null !== $request->windowAlignment) {
            @$body['windowAlignment'] = $request->windowAlignment;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ResetGatewayQuotaRule',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/quota-rules/' . Url::percentEncode($ruleId) . '/reset',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ResetGatewayQuotaRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resets a quota throttling rule on a gateway.
     *
     * @remarks
     * Resets a quota throttling rule on a gateway. This operation takes effect only on AI gateways running version 2.1.19 or later. Resetting a rule clears the historical usage of consumers associated with the rule.
     * >
     * >  Recommended call sequence:
     * > - 1. Perform a dry run to check for rule conflicts.
     * > - - Set dryRun to true.
     * > - - The response contains a conflict preview with conflictHash.
     * > - 2. Submit the request after confirmation.
     * > - - No conflicts: Set dryRun to false and overwrite to false.
     * > - - Conflicts exist and you confirm the overwrite: Set dryRun to false, overwrite to true, and conflictHash to the value returned in the previous step.
     *
     * @param request - ResetGatewayQuotaRuleRequest
     *
     * @returns ResetGatewayQuotaRuleResponse
     *
     * @param string                       $gatewayId
     * @param string                       $ruleId
     * @param ResetGatewayQuotaRuleRequest $request
     *
     * @return ResetGatewayQuotaRuleResponse
     */
    public function resetGatewayQuotaRule($gatewayId, $ruleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resetGatewayQuotaRuleWithOptions($gatewayId, $ruleId, $request, $headers, $runtime);
    }

    /**
     * Restarts a gateway.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartGatewayResponse
     *
     * @param string         $gatewayId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RestartGatewayResponse
     */
    public function restartGatewayWithOptions($gatewayId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'RestartGateway',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/restart',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RestartGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restarts a gateway.
     *
     * @returns RestartGatewayResponse
     *
     * @param string $gatewayId
     *
     * @return RestartGatewayResponse
     */
    public function restartGateway($gatewayId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->restartGatewayWithOptions($gatewayId, $headers, $runtime);
    }

    /**
     * Syncs an external MCP server.
     *
     * @param request - SyncMCPServersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SyncMCPServersResponse
     *
     * @param SyncMCPServersRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return SyncMCPServersResponse
     */
    public function syncMCPServersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->domainIds) {
            @$body['domainIds'] = $request->domainIds;
        }

        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->nacosMcpServers) {
            @$body['nacosMcpServers'] = $request->nacosMcpServers;
        }

        if (null !== $request->namespace) {
            @$body['namespace'] = $request->namespace;
        }

        if (null !== $request->sourceId) {
            @$body['sourceId'] = $request->sourceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SyncMCPServers',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/mcp-servers/sync-mcp-server',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SyncMCPServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Syncs an external MCP server.
     *
     * @param request - SyncMCPServersRequest
     *
     * @returns SyncMCPServersResponse
     *
     * @param SyncMCPServersRequest $request
     *
     * @return SyncMCPServersResponse
     */
    public function syncMCPServers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->syncMCPServersWithOptions($request, $headers, $runtime);
    }

    /**
     * Adds labels to resources.
     *
     * @param request - TagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->resourceId) {
            @$body['resourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['resourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$body['tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/tags',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds labels to resources.
     *
     * @param request - TagResourcesRequest
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->tagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * Cancels the publication of an MCP server.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnDeployMcpServerResponse
     *
     * @param string         $mcpServerId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return UnDeployMcpServerResponse
     */
    public function unDeployMcpServerWithOptions($mcpServerId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'UnDeployMcpServer',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/mcp-servers/' . Url::percentEncode($mcpServerId) . '/undeploy',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UnDeployMcpServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels the publication of an MCP server.
     *
     * @returns UnDeployMcpServerResponse
     *
     * @param string $mcpServerId
     *
     * @return UnDeployMcpServerResponse
     */
    public function unDeployMcpServer($mcpServerId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->unDeployMcpServerWithOptions($mcpServerId, $headers, $runtime);
    }

    /**
     * Cancels the deployment of an HTTP API.
     *
     * @param request - UndeployHttpApiRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UndeployHttpApiResponse
     *
     * @param string                 $httpApiId
     * @param UndeployHttpApiRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UndeployHttpApiResponse
     */
    public function undeployHttpApiWithOptions($httpApiId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->environmentId) {
            @$body['environmentId'] = $request->environmentId;
        }

        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->operationId) {
            @$body['operationId'] = $request->operationId;
        }

        if (null !== $request->routeId) {
            @$body['routeId'] = $request->routeId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UndeployHttpApi',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/undeploy',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UndeployHttpApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels the deployment of an HTTP API.
     *
     * @param request - UndeployHttpApiRequest
     *
     * @returns UndeployHttpApiResponse
     *
     * @param string                 $httpApiId
     * @param UndeployHttpApiRequest $request
     *
     * @return UndeployHttpApiResponse
     */
    public function undeployHttpApi($httpApiId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->undeployHttpApiWithOptions($httpApiId, $request, $headers, $runtime);
    }

    /**
     * Uninstalls a plugin.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UninstallPluginResponse
     *
     * @param string         $pluginId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return UninstallPluginResponse
     */
    public function uninstallPluginWithOptions($pluginId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'UninstallPlugin',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugins/' . Url::percentEncode($pluginId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UninstallPluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uninstalls a plugin.
     *
     * @returns UninstallPluginResponse
     *
     * @param string $pluginId
     *
     * @return UninstallPluginResponse
     */
    public function uninstallPlugin($pluginId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->uninstallPluginWithOptions($pluginId, $headers, $runtime);
    }

    /**
     * Removes tags from resources.
     *
     * @param tmpReq - UntagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $tmpReq
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UntagResourcesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceId) {
            $request->resourceIdShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceId, 'ResourceId', 'json');
        }

        if (null !== $tmpReq->tagKey) {
            $request->tagKeyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tagKey, 'TagKey', 'json');
        }

        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->resourceIdShrink) {
            @$query['ResourceId'] = $request->resourceIdShrink;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKeyShrink) {
            @$query['TagKey'] = $request->tagKeyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/tags',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes tags from resources.
     *
     * @param request - UntagResourcesRequest
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->untagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新AI模型卡片.
     *
     * @param request - UpdateAiModelCardRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAiModelCardResponse
     *
     * @param string                   $modelCardId
     * @param UpdateAiModelCardRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateAiModelCardResponse
     */
    public function updateAiModelCardWithOptions($modelCardId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->availablePaths) {
            @$body['availablePaths'] = $request->availablePaths;
        }

        if (null !== $request->credit) {
            @$body['credit'] = $request->credit;
        }

        if (null !== $request->features) {
            @$body['features'] = $request->features;
        }

        if (null !== $request->meta) {
            @$body['meta'] = $request->meta;
        }

        if (null !== $request->modelName) {
            @$body['modelName'] = $request->modelName;
        }

        if (null !== $request->modelProvider) {
            @$body['modelProvider'] = $request->modelProvider;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAiModelCard',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/ai-model-cards/' . Url::percentEncode($modelCardId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateAiModelCardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新AI模型卡片.
     *
     * @param request - UpdateAiModelCardRequest
     *
     * @returns UpdateAiModelCardResponse
     *
     * @param string                   $modelCardId
     * @param UpdateAiModelCardRequest $request
     *
     * @return UpdateAiModelCardResponse
     */
    public function updateAiModelCard($modelCardId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAiModelCardWithOptions($modelCardId, $request, $headers, $runtime);
    }

    /**
     * 更新AI模型供应商.
     *
     * @param request - UpdateAiModelProviderRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAiModelProviderResponse
     *
     * @param string                       $modelProviderId
     * @param UpdateAiModelProviderRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateAiModelProviderResponse
     */
    public function updateAiModelProviderWithOptions($modelProviderId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->serviceIds) {
            @$body['serviceIds'] = $request->serviceIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAiModelProvider',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/ai-model-providers/' . Url::percentEncode($modelProviderId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateAiModelProviderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新AI模型供应商.
     *
     * @param request - UpdateAiModelProviderRequest
     *
     * @returns UpdateAiModelProviderResponse
     *
     * @param string                       $modelProviderId
     * @param UpdateAiModelProviderRequest $request
     *
     * @return UpdateAiModelProviderResponse
     */
    public function updateAiModelProvider($modelProviderId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAiModelProviderWithOptions($modelProviderId, $request, $headers, $runtime);
    }

    /**
     * Updates and mounts a policy.
     *
     * @param request - UpdateAndAttachPolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAndAttachPolicyResponse
     *
     * @param string                       $policyId
     * @param UpdateAndAttachPolicyRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateAndAttachPolicyResponse
     */
    public function updateAndAttachPolicyWithOptions($policyId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->attachResourceIds) {
            @$body['attachResourceIds'] = $request->attachResourceIds;
        }

        if (null !== $request->attachResourceType) {
            @$body['attachResourceType'] = $request->attachResourceType;
        }

        if (null !== $request->config) {
            @$body['config'] = $request->config;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->environmentId) {
            @$body['environmentId'] = $request->environmentId;
        }

        if (null !== $request->gatewayId) {
            @$body['gatewayId'] = $request->gatewayId;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAndAttachPolicy',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/policies/' . Url::percentEncode($policyId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateAndAttachPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates and mounts a policy.
     *
     * @param request - UpdateAndAttachPolicyRequest
     *
     * @returns UpdateAndAttachPolicyResponse
     *
     * @param string                       $policyId
     * @param UpdateAndAttachPolicyRequest $request
     *
     * @return UpdateAndAttachPolicyResponse
     */
    public function updateAndAttachPolicy($policyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAndAttachPolicyWithOptions($policyId, $request, $headers, $runtime);
    }

    /**
     * Updates an API consumer.
     *
     * @param request - UpdateConsumerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateConsumerResponse
     *
     * @param string                $consumerId
     * @param UpdateConsumerRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateConsumerResponse
     */
    public function updateConsumerWithOptions($consumerId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->akSkIdentityConfigs) {
            @$body['akSkIdentityConfigs'] = $request->akSkIdentityConfigs;
        }

        if (null !== $request->apikeyIdentityConfig) {
            @$body['apikeyIdentityConfig'] = $request->apikeyIdentityConfig;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->enable) {
            @$body['enable'] = $request->enable;
        }

        if (null !== $request->jwtIdentityConfig) {
            @$body['jwtIdentityConfig'] = $request->jwtIdentityConfig;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateConsumer',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumers/' . Url::percentEncode($consumerId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateConsumerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an API consumer.
     *
     * @param request - UpdateConsumerRequest
     *
     * @returns UpdateConsumerResponse
     *
     * @param string                $consumerId
     * @param UpdateConsumerRequest $request
     *
     * @return UpdateConsumerResponse
     */
    public function updateConsumer($consumerId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateConsumerWithOptions($consumerId, $request, $headers, $runtime);
    }

    /**
     * Updates a consumer authorization rule.
     *
     * @param request - UpdateConsumerAuthorizationRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateConsumerAuthorizationRuleResponse
     *
     * @param string                                 $consumerId
     * @param string                                 $consumerAuthorizationRuleId
     * @param UpdateConsumerAuthorizationRuleRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateConsumerAuthorizationRuleResponse
     */
    public function updateConsumerAuthorizationRuleWithOptions($consumerId, $consumerAuthorizationRuleId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authorizationResourceInfos) {
            @$body['authorizationResourceInfos'] = $request->authorizationResourceInfos;
        }

        if (null !== $request->expireMode) {
            @$body['expireMode'] = $request->expireMode;
        }

        if (null !== $request->expireTimestamp) {
            @$body['expireTimestamp'] = $request->expireTimestamp;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateConsumerAuthorizationRule',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumers/' . Url::percentEncode($consumerId) . '/authorization-rules/' . Url::percentEncode($consumerAuthorizationRuleId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateConsumerAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a consumer authorization rule.
     *
     * @param request - UpdateConsumerAuthorizationRuleRequest
     *
     * @returns UpdateConsumerAuthorizationRuleResponse
     *
     * @param string                                 $consumerId
     * @param string                                 $consumerAuthorizationRuleId
     * @param UpdateConsumerAuthorizationRuleRequest $request
     *
     * @return UpdateConsumerAuthorizationRuleResponse
     */
    public function updateConsumerAuthorizationRule($consumerId, $consumerAuthorizationRuleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateConsumerAuthorizationRuleWithOptions($consumerId, $consumerAuthorizationRuleId, $request, $headers, $runtime);
    }

    /**
     * 更新消费者组.
     *
     * @param request - UpdateConsumerGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateConsumerGroupResponse
     *
     * @param string                     $consumerGroupId
     * @param UpdateConsumerGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateConsumerGroupResponse
     */
    public function updateConsumerGroupWithOptions($consumerGroupId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateConsumerGroup',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/consumer-groups/' . Url::percentEncode($consumerGroupId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateConsumerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新消费者组.
     *
     * @param request - UpdateConsumerGroupRequest
     *
     * @returns UpdateConsumerGroupResponse
     *
     * @param string                     $consumerGroupId
     * @param UpdateConsumerGroupRequest $request
     *
     * @return UpdateConsumerGroupResponse
     */
    public function updateConsumerGroup($consumerGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateConsumerGroupWithOptions($consumerGroupId, $request, $headers, $runtime);
    }

    /**
     * Updates a domain name.
     *
     * @remarks
     * Only sources of the **Container Service** type allow you to update the listener Ingress configuration.
     *
     * @param request - UpdateDomainRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDomainResponse
     *
     * @param string              $domainId
     * @param UpdateDomainRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateDomainResponse
     */
    public function updateDomainWithOptions($domainId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->caCertIdentifier) {
            @$body['caCertIdentifier'] = $request->caCertIdentifier;
        }

        if (null !== $request->certIdentifier) {
            @$body['certIdentifier'] = $request->certIdentifier;
        }

        if (null !== $request->clientCACert) {
            @$body['clientCACert'] = $request->clientCACert;
        }

        if (null !== $request->domainScope) {
            @$body['domainScope'] = $request->domainScope;
        }

        if (null !== $request->forceHttps) {
            @$body['forceHttps'] = $request->forceHttps;
        }

        if (null !== $request->http2Option) {
            @$body['http2Option'] = $request->http2Option;
        }

        if (null !== $request->mTLSEnabled) {
            @$body['mTLSEnabled'] = $request->mTLSEnabled;
        }

        if (null !== $request->protocol) {
            @$body['protocol'] = $request->protocol;
        }

        if (null !== $request->tlsCipherSuitesConfig) {
            @$body['tlsCipherSuitesConfig'] = $request->tlsCipherSuitesConfig;
        }

        if (null !== $request->tlsMax) {
            @$body['tlsMax'] = $request->tlsMax;
        }

        if (null !== $request->tlsMin) {
            @$body['tlsMin'] = $request->tlsMin;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDomain',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/domains/' . Url::percentEncode($domainId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a domain name.
     *
     * @remarks
     * Only sources of the **Container Service** type allow you to update the listener Ingress configuration.
     *
     * @param request - UpdateDomainRequest
     *
     * @returns UpdateDomainResponse
     *
     * @param string              $domainId
     * @param UpdateDomainRequest $request
     *
     * @return UpdateDomainResponse
     */
    public function updateDomain($domainId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDomainWithOptions($domainId, $request, $headers, $runtime);
    }

    /**
     * Updates an environment.
     *
     * @deprecated OpenAPI UpdateEnvironment is deprecated
     *
     * @param request - UpdateEnvironmentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateEnvironmentResponse
     *
     * @param string                   $environmentId
     * @param UpdateEnvironmentRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateEnvironmentResponse
     */
    public function updateEnvironmentWithOptions($environmentId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alias) {
            @$body['alias'] = $request->alias;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateEnvironment',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/environments/' . Url::percentEncode($environmentId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Updates an environment.
     *
     * @deprecated OpenAPI UpdateEnvironment is deprecated
     *
     * @param request - UpdateEnvironmentRequest
     *
     * @returns UpdateEnvironmentResponse
     *
     * @param string                   $environmentId
     * @param UpdateEnvironmentRequest $request
     *
     * @return UpdateEnvironmentResponse
     */
    public function updateEnvironment($environmentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateEnvironmentWithOptions($environmentId, $request, $headers, $runtime);
    }

    /**
     * Updates the attribute parameters of a gateway.
     *
     * @param request - UpdateGatewayFeatureRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayFeatureResponse
     *
     * @param string                      $gatewayId
     * @param string                      $name
     * @param UpdateGatewayFeatureRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateGatewayFeatureResponse
     */
    public function updateGatewayFeatureWithOptions($gatewayId, $name, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->value) {
            @$body['value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayFeature',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/gateway-features/' . Url::percentEncode($name) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateGatewayFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the attribute parameters of a gateway.
     *
     * @param request - UpdateGatewayFeatureRequest
     *
     * @returns UpdateGatewayFeatureResponse
     *
     * @param string                      $gatewayId
     * @param string                      $name
     * @param UpdateGatewayFeatureRequest $request
     *
     * @return UpdateGatewayFeatureResponse
     */
    public function updateGatewayFeature($gatewayId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateGatewayFeatureWithOptions($gatewayId, $name, $request, $headers, $runtime);
    }

    /**
     * Modifies the name of a gateway.
     *
     * @deprecated OpenAPI UpdateGatewayName is deprecated
     *
     * @param request - UpdateGatewayNameRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayNameResponse
     *
     * @param string                   $gatewayId
     * @param UpdateGatewayNameRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateGatewayNameResponse
     */
    public function updateGatewayNameWithOptions($gatewayId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayName',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/name',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateGatewayNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Modifies the name of a gateway.
     *
     * @deprecated OpenAPI UpdateGatewayName is deprecated
     *
     * @param request - UpdateGatewayNameRequest
     *
     * @returns UpdateGatewayNameResponse
     *
     * @param string                   $gatewayId
     * @param UpdateGatewayNameRequest $request
     *
     * @return UpdateGatewayNameResponse
     */
    public function updateGatewayName($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateGatewayNameWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * Edits a quota throttling rule on a gateway.
     *
     * @remarks
     * Edits a quota rule on a gateway. This operation takes effect only on AI gateways with a version later than 2.1.19. Editing a rule preserves the historical usage of consumers on the rule.
     * >  Recommended call logic:
     * > - Step 1: Perform a dry run to check for rule conflicts.
     * > - - Set dryRun to true.
     * > - - The response contains a conflict preview with conflictHash.
     * > - Step 2: Submit the request after confirmation.
     * > - - No conflicts: Set dryRun to false and overwrite to false.
     * > - - Conflicts exist and you confirm the overwrite: Set dryRun to false, overwrite to true, and conflictHash to the value returned in the previous step.
     *
     * @param request - UpdateGatewayQuotaRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayQuotaRuleResponse
     *
     * @param string                        $gatewayId
     * @param string                        $ruleId
     * @param UpdateGatewayQuotaRuleRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateGatewayQuotaRuleResponse
     */
    public function updateGatewayQuotaRuleWithOptions($gatewayId, $ruleId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->addIds) {
            @$body['addIds'] = $request->addIds;
        }

        if (null !== $request->conflictHash) {
            @$body['conflictHash'] = $request->conflictHash;
        }

        if (null !== $request->consumerGroupIds) {
            @$body['consumerGroupIds'] = $request->consumerGroupIds;
        }

        if (null !== $request->dryRun) {
            @$body['dryRun'] = $request->dryRun;
        }

        if (null !== $request->overwrite) {
            @$body['overwrite'] = $request->overwrite;
        }

        if (null !== $request->quotaLimit) {
            @$body['quotaLimit'] = $request->quotaLimit;
        }

        if (null !== $request->removeIds) {
            @$body['removeIds'] = $request->removeIds;
        }

        if (null !== $request->ruleName) {
            @$body['ruleName'] = $request->ruleName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayQuotaRule',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/quota-rules/' . Url::percentEncode($ruleId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateGatewayQuotaRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Edits a quota throttling rule on a gateway.
     *
     * @remarks
     * Edits a quota rule on a gateway. This operation takes effect only on AI gateways with a version later than 2.1.19. Editing a rule preserves the historical usage of consumers on the rule.
     * >  Recommended call logic:
     * > - Step 1: Perform a dry run to check for rule conflicts.
     * > - - Set dryRun to true.
     * > - - The response contains a conflict preview with conflictHash.
     * > - Step 2: Submit the request after confirmation.
     * > - - No conflicts: Set dryRun to false and overwrite to false.
     * > - - Conflicts exist and you confirm the overwrite: Set dryRun to false, overwrite to true, and conflictHash to the value returned in the previous step.
     *
     * @param request - UpdateGatewayQuotaRuleRequest
     *
     * @returns UpdateGatewayQuotaRuleResponse
     *
     * @param string                        $gatewayId
     * @param string                        $ruleId
     * @param UpdateGatewayQuotaRuleRequest $request
     *
     * @return UpdateGatewayQuotaRuleResponse
     */
    public function updateGatewayQuotaRule($gatewayId, $ruleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateGatewayQuotaRuleWithOptions($gatewayId, $ruleId, $request, $headers, $runtime);
    }

    /**
     * Enables or disables a quota throttling rule for a gateway.
     *
     * @remarks
     * Enables or disables a quota rule on a gateway. This operation takes effect only for AI gateways with a version later than 2.1.19.
     *
     * @param request - UpdateGatewayQuotaRuleStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayQuotaRuleStatusResponse
     *
     * @param string                              $gatewayId
     * @param string                              $ruleId
     * @param UpdateGatewayQuotaRuleStatusRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateGatewayQuotaRuleStatusResponse
     */
    public function updateGatewayQuotaRuleStatusWithOptions($gatewayId, $ruleId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clearHistory) {
            @$body['clearHistory'] = $request->clearHistory;
        }

        if (null !== $request->enable) {
            @$body['enable'] = $request->enable;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayQuotaRuleStatus',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/quota-rules/' . Url::percentEncode($ruleId) . '/status',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateGatewayQuotaRuleStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables a quota throttling rule for a gateway.
     *
     * @remarks
     * Enables or disables a quota rule on a gateway. This operation takes effect only for AI gateways with a version later than 2.1.19.
     *
     * @param request - UpdateGatewayQuotaRuleStatusRequest
     *
     * @returns UpdateGatewayQuotaRuleStatusResponse
     *
     * @param string                              $gatewayId
     * @param string                              $ruleId
     * @param UpdateGatewayQuotaRuleStatusRequest $request
     *
     * @return UpdateGatewayQuotaRuleStatusResponse
     */
    public function updateGatewayQuotaRuleStatus($gatewayId, $ruleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateGatewayQuotaRuleStatusWithOptions($gatewayId, $ruleId, $request, $headers, $runtime);
    }

    /**
     * Updates an HTTP API.
     *
     * @param request - UpdateHttpApiRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateHttpApiResponse
     *
     * @param string               $httpApiId
     * @param UpdateHttpApiRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateHttpApiResponse
     */
    public function updateHttpApiWithOptions($httpApiId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentProtocols) {
            @$body['agentProtocols'] = $request->agentProtocols;
        }

        if (null !== $request->aiProtocols) {
            @$body['aiProtocols'] = $request->aiProtocols;
        }

        if (null !== $request->authConfig) {
            @$body['authConfig'] = $request->authConfig;
        }

        if (null !== $request->basePath) {
            @$body['basePath'] = $request->basePath;
        }

        if (null !== $request->deployConfigs) {
            @$body['deployConfigs'] = $request->deployConfigs;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->enableAuth) {
            @$body['enableAuth'] = $request->enableAuth;
        }

        if (null !== $request->firstByteTimeout) {
            @$body['firstByteTimeout'] = $request->firstByteTimeout;
        }

        if (null !== $request->ingressConfig) {
            @$body['ingressConfig'] = $request->ingressConfig;
        }

        if (null !== $request->onlyChangeConfig) {
            @$body['onlyChangeConfig'] = $request->onlyChangeConfig;
        }

        if (null !== $request->protocols) {
            @$body['protocols'] = $request->protocols;
        }

        if (null !== $request->removeBasePathOnForward) {
            @$body['removeBasePathOnForward'] = $request->removeBasePathOnForward;
        }

        if (null !== $request->versionConfig) {
            @$body['versionConfig'] = $request->versionConfig;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateHttpApi',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateHttpApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an HTTP API.
     *
     * @param request - UpdateHttpApiRequest
     *
     * @returns UpdateHttpApiResponse
     *
     * @param string               $httpApiId
     * @param UpdateHttpApiRequest $request
     *
     * @return UpdateHttpApiResponse
     */
    public function updateHttpApi($httpApiId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateHttpApiWithOptions($httpApiId, $request, $headers, $runtime);
    }

    /**
     * Updates an API operation.
     *
     * @param request - UpdateHttpApiOperationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateHttpApiOperationResponse
     *
     * @param string                        $httpApiId
     * @param string                        $operationId
     * @param UpdateHttpApiOperationRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateHttpApiOperationResponse
     */
    public function updateHttpApiOperationWithOptions($httpApiId, $operationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->operation) {
            @$body['operation'] = $request->operation;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateHttpApiOperation',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/operations/' . Url::percentEncode($operationId) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateHttpApiOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an API operation.
     *
     * @param request - UpdateHttpApiOperationRequest
     *
     * @returns UpdateHttpApiOperationResponse
     *
     * @param string                        $httpApiId
     * @param string                        $operationId
     * @param UpdateHttpApiOperationRequest $request
     *
     * @return UpdateHttpApiOperationResponse
     */
    public function updateHttpApiOperation($httpApiId, $operationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateHttpApiOperationWithOptions($httpApiId, $operationId, $request, $headers, $runtime);
    }

    /**
     * Updates a route of an HttpApi.
     *
     * @param request - UpdateHttpApiRouteRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateHttpApiRouteResponse
     *
     * @param string                    $httpApiId
     * @param string                    $routeId
     * @param UpdateHttpApiRouteRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateHttpApiRouteResponse
     */
    public function updateHttpApiRouteWithOptions($httpApiId, $routeId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->backendConfig) {
            @$body['backendConfig'] = $request->backendConfig;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->domainIds) {
            @$body['domainIds'] = $request->domainIds;
        }

        if (null !== $request->environmentId) {
            @$body['environmentId'] = $request->environmentId;
        }

        if (null !== $request->match) {
            @$body['match'] = $request->match;
        }

        if (null !== $request->mcpRouteConfig) {
            @$body['mcpRouteConfig'] = $request->mcpRouteConfig;
        }

        if (null !== $request->policyConfigs) {
            @$body['policyConfigs'] = $request->policyConfigs;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateHttpApiRoute',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/http-apis/' . Url::percentEncode($httpApiId) . '/routes/' . Url::percentEncode($routeId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateHttpApiRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a route of an HttpApi.
     *
     * @param request - UpdateHttpApiRouteRequest
     *
     * @returns UpdateHttpApiRouteResponse
     *
     * @param string                    $httpApiId
     * @param string                    $routeId
     * @param UpdateHttpApiRouteRequest $request
     *
     * @return UpdateHttpApiRouteResponse
     */
    public function updateHttpApiRoute($httpApiId, $routeId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateHttpApiRouteWithOptions($httpApiId, $routeId, $request, $headers, $runtime);
    }

    /**
     * Updates an MCP server.
     *
     * @remarks
     * Only sources of the **Container Service** type can update the Ingress listener configuration.
     *
     * @param request - UpdateMcpServerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMcpServerResponse
     *
     * @param string                 $mcpServerId
     * @param UpdateMcpServerRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateMcpServerResponse
     */
    public function updateMcpServerWithOptions($mcpServerId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->assembledSources) {
            @$body['assembledSources'] = $request->assembledSources;
        }

        if (null !== $request->backendConfig) {
            @$body['backendConfig'] = $request->backendConfig;
        }

        if (null !== $request->createFromType) {
            @$body['createFromType'] = $request->createFromType;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->domainIds) {
            @$body['domainIds'] = $request->domainIds;
        }

        if (null !== $request->exposedUriPath) {
            @$body['exposedUriPath'] = $request->exposedUriPath;
        }

        if (null !== $request->grayMcpServerConfigs) {
            @$body['grayMcpServerConfigs'] = $request->grayMcpServerConfigs;
        }

        if (null !== $request->match) {
            @$body['match'] = $request->match;
        }

        if (null !== $request->mcpServerConfig) {
            @$body['mcpServerConfig'] = $request->mcpServerConfig;
        }

        if (null !== $request->mcpStatisticsEnable) {
            @$body['mcpStatisticsEnable'] = $request->mcpStatisticsEnable;
        }

        if (null !== $request->protocol) {
            @$body['protocol'] = $request->protocol;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateMcpServer',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/mcp-servers/' . Url::percentEncode($mcpServerId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateMcpServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an MCP server.
     *
     * @remarks
     * Only sources of the **Container Service** type can update the Ingress listener configuration.
     *
     * @param request - UpdateMcpServerRequest
     *
     * @returns UpdateMcpServerResponse
     *
     * @param string                 $mcpServerId
     * @param UpdateMcpServerRequest $request
     *
     * @return UpdateMcpServerResponse
     */
    public function updateMcpServer($mcpServerId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMcpServerWithOptions($mcpServerId, $request, $headers, $runtime);
    }

    /**
     * Updates a plugin mount.
     *
     * @param request - UpdatePluginAttachmentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePluginAttachmentResponse
     *
     * @param string                        $pluginAttachmentId
     * @param UpdatePluginAttachmentRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdatePluginAttachmentResponse
     */
    public function updatePluginAttachmentWithOptions($pluginAttachmentId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->attachResourceIds) {
            @$body['attachResourceIds'] = $request->attachResourceIds;
        }

        if (null !== $request->enable) {
            @$body['enable'] = $request->enable;
        }

        if (null !== $request->pluginConfig) {
            @$body['pluginConfig'] = $request->pluginConfig;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdatePluginAttachment',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/plugin-attachments/' . Url::percentEncode($pluginAttachmentId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePluginAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a plugin mount.
     *
     * @param request - UpdatePluginAttachmentRequest
     *
     * @returns UpdatePluginAttachmentResponse
     *
     * @param string                        $pluginAttachmentId
     * @param UpdatePluginAttachmentRequest $request
     *
     * @return UpdatePluginAttachmentResponse
     */
    public function updatePluginAttachment($pluginAttachmentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePluginAttachmentWithOptions($pluginAttachmentId, $request, $headers, $runtime);
    }

    /**
     * Updates a policy.
     *
     * @param request - UpdatePolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePolicyResponse
     *
     * @param string              $policyId
     * @param UpdatePolicyRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdatePolicyResponse
     */
    public function updatePolicyWithOptions($policyId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->config) {
            @$body['config'] = $request->config;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdatePolicy',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/policies/' . Url::percentEncode($policyId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a policy.
     *
     * @param request - UpdatePolicyRequest
     *
     * @returns UpdatePolicyResponse
     *
     * @param string              $policyId
     * @param UpdatePolicyRequest $request
     *
     * @return UpdatePolicyResponse
     */
    public function updatePolicy($policyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePolicyWithOptions($policyId, $request, $headers, $runtime);
    }

    /**
     * Updates a key pair.
     *
     * @remarks
     * Only sources of the **container service** type allow you to update the configuration for listening to Ingress.
     *
     * @param request - UpdateSecretRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSecretResponse
     *
     * @param string              $secretId
     * @param UpdateSecretRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateSecretResponse
     */
    public function updateSecretWithOptions($secretId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->secretData) {
            @$body['secretData'] = $request->secretData;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateSecret',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/secrets/' . Url::percentEncode($secretId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a key pair.
     *
     * @remarks
     * Only sources of the **container service** type allow you to update the configuration for listening to Ingress.
     *
     * @param request - UpdateSecretRequest
     *
     * @returns UpdateSecretResponse
     *
     * @param string              $secretId
     * @param UpdateSecretRequest $request
     *
     * @return UpdateSecretResponse
     */
    public function updateSecret($secretId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSecretWithOptions($secretId, $request, $headers, $runtime);
    }

    /**
     * Updates a service. You can update the health check configuration, DNS domain name, and address configuration of fixed addresses for the service.
     *
     * @param request - UpdateServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateServiceResponse
     *
     * @param string               $serviceId
     * @param UpdateServiceRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateServiceResponse
     */
    public function updateServiceWithOptions($serviceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->addresses) {
            @$body['addresses'] = $request->addresses;
        }

        if (null !== $request->agentServiceConfig) {
            @$body['agentServiceConfig'] = $request->agentServiceConfig;
        }

        if (null !== $request->aiServiceConfig) {
            @$body['aiServiceConfig'] = $request->aiServiceConfig;
        }

        if (null !== $request->dnsServers) {
            @$body['dnsServers'] = $request->dnsServers;
        }

        if (null !== $request->healthCheckConfig) {
            @$body['healthCheckConfig'] = $request->healthCheckConfig;
        }

        if (null !== $request->healthyPanicThreshold) {
            @$body['healthyPanicThreshold'] = $request->healthyPanicThreshold;
        }

        if (null !== $request->modelProviderId) {
            @$body['modelProviderId'] = $request->modelProviderId;
        }

        if (null !== $request->outlierDetectionConfig) {
            @$body['outlierDetectionConfig'] = $request->outlierDetectionConfig;
        }

        if (null !== $request->ports) {
            @$body['ports'] = $request->ports;
        }

        if (null !== $request->protocol) {
            @$body['protocol'] = $request->protocol;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateService',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/services/' . Url::percentEncode($serviceId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a service. You can update the health check configuration, DNS domain name, and address configuration of fixed addresses for the service.
     *
     * @param request - UpdateServiceRequest
     *
     * @returns UpdateServiceResponse
     *
     * @param string               $serviceId
     * @param UpdateServiceRequest $request
     *
     * @return UpdateServiceResponse
     */
    public function updateService($serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceWithOptions($serviceId, $request, $headers, $runtime);
    }

    /**
     * Updates a service version.
     *
     * @param request - UpdateServiceVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateServiceVersionResponse
     *
     * @param string                      $serviceId
     * @param string                      $name
     * @param UpdateServiceVersionRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateServiceVersionResponse
     */
    public function updateServiceVersionWithOptions($serviceId, $name, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->labels) {
            @$body['labels'] = $request->labels;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateServiceVersion',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/services/' . Url::percentEncode($serviceId) . '/versions/' . Url::percentEncode($name) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateServiceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a service version.
     *
     * @param request - UpdateServiceVersionRequest
     *
     * @returns UpdateServiceVersionResponse
     *
     * @param string                      $serviceId
     * @param string                      $name
     * @param UpdateServiceVersionRequest $request
     *
     * @return UpdateServiceVersionResponse
     */
    public function updateServiceVersion($serviceId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceVersionWithOptions($serviceId, $name, $request, $headers, $runtime);
    }

    /**
     * Upgrades the gateway version.
     *
     * @param request - UpgradeGatewayRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeGatewayResponse
     *
     * @param string                $gatewayId
     * @param UpgradeGatewayRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpgradeGatewayResponse
     */
    public function upgradeGatewayWithOptions($gatewayId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeGateway',
            'version' => '2024-03-27',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/gateways/' . Url::percentEncode($gatewayId) . '/upgrade',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpgradeGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upgrades the gateway version.
     *
     * @param request - UpgradeGatewayRequest
     *
     * @returns UpgradeGatewayResponse
     *
     * @param string                $gatewayId
     * @param UpgradeGatewayRequest $request
     *
     * @return UpgradeGatewayResponse
     */
    public function upgradeGateway($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->upgradeGatewayWithOptions($gatewayId, $request, $headers, $runtime);
    }
}
