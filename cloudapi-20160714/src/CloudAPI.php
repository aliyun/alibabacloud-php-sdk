<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AbolishApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AbolishApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AddIpControlPolicyItemRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AddIpControlPolicyItemResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AddTrafficSpecialControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AddTrafficSpecialControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AttachPluginRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AttachPluginResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\BatchAbolishApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\BatchAbolishApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\BatchDeployApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\BatchDeployApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateApiGroupRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateApiGroupResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateApiStageVariableRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateApiStageVariableResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateAppRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateAppResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateIntranetDomainRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateIntranetDomainResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateIpControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateIpControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateLogConfigRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateLogConfigResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateModelRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateModelResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateMonitorGroupRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateMonitorGroupResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreatePluginRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreatePluginResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateSignatureRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateSignatureResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateTrafficControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateTrafficControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteAllTrafficSpecialControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteAllTrafficSpecialControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteApiGroupRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteApiGroupResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteApiStageVariableRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteApiStageVariableResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteAppRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteAppResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteDomainCertificateRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteDomainCertificateResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteDomainRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteDomainResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteIpControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteIpControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteLogConfigRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteLogConfigResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteModelRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteModelResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeletePluginRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeletePluginResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteSignatureRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteSignatureResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteTrafficControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteTrafficControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteTrafficSpecialControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteTrafficSpecialControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeployApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeployApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAbolishApiTaskRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAbolishApiTaskResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiDocRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiDocResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiGroupRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiGroupResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiGroupsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiGroupsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiGroupVpcWhitelistRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiGroupVpcWhitelistResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoriesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoriesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiIpControlsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiIpControlsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiLatencyDataRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiLatencyDataResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiMarketAttributesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiMarketAttributesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiQpsDataRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiQpsDataResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByAppRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByAppResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByIpControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByIpControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisBySignatureRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisBySignatureResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByTrafficControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByTrafficControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiSignaturesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiSignaturesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiStageRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiStageResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiTrafficControlsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiTrafficControlsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiTrafficDataRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiTrafficDataResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppAttributesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppAttributesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppSecurityRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppSecurityResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAuthorizedApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAuthorizedApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAuthorizedAppsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAuthorizedAppsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployApiTaskRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployApiTaskResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDomainRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDomainResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeHistoryApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeHistoryApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeIpControlPolicyItemsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeIpControlPolicyItemsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeIpControlsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeIpControlsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeLogConfigRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeLogConfigResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeMarketRemainsQuotaRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeMarketRemainsQuotaResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeModelsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeModelsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginsByApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginsByApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginSchemasRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginSchemasResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginTemplatesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginTemplatesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePurchasedApiGroupRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePurchasedApiGroupResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePurchasedApiGroupsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePurchasedApiGroupsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePurchasedApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePurchasedApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSignaturesByApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSignaturesByApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSignaturesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSignaturesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSystemParametersRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSystemParametersResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsByApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsByApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeUpdateVpcInfoTaskRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeUpdateVpcInfoTaskResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeVpcAccessesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeVpcAccessesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeZonesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeZonesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DryRunSwaggerRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DryRunSwaggerResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DryRunSwaggerShrinkRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportSwaggerRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportSwaggerResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportSwaggerShrinkRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyApiGroupRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyApiGroupResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyApiGroupVpcWhitelistRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyApiGroupVpcWhitelistResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyAppRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyAppResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyInstanceSpecRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyInstanceSpecResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyIpControlPolicyItemRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyIpControlPolicyItemResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyIpControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyIpControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyLogConfigRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyLogConfigResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyModelRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyModelResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyPluginRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyPluginResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifySignatureRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifySignatureResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyTrafficControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyTrafficControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\OpenApiGatewayServiceResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ReactivateDomainRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ReactivateDomainResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveApisAuthoritiesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveApisAuthoritiesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveAppsAuthoritiesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveAppsAuthoritiesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveIpControlApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveIpControlApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveIpControlPolicyItemRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveIpControlPolicyItemResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveSignatureApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveSignatureApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveTrafficControlApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveTrafficControlApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveVpcAccessAndAbolishApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveVpcAccessAndAbolishApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveVpcAccessRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveVpcAccessResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ResetAppCodeRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ResetAppCodeResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ResetAppSecretRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ResetAppSecretResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SdkGenerateByAppRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SdkGenerateByAppResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SdkGenerateByGroupRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SdkGenerateByGroupResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetApisAuthoritiesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetApisAuthoritiesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetAppsAuthoritiesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetAppsAuthoritiesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetDomainCertificateRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetDomainCertificateResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetDomainRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetDomainResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetDomainWebSocketStatusRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetDomainWebSocketStatusResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetIpControlApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetIpControlApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetSignatureApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetSignatureApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetTrafficControlApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetTrafficControlApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetVpcAccessRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetVpcAccessResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetWildcardDomainPatternsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetWildcardDomainPatternsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SwitchApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SwitchApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\TagResourcesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\TagResourcesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\UntagResourcesResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AbolishApiResponse::fromMap($this->doRPCRequest('AbolishApi', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param AddIpControlPolicyItemRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AddIpControlPolicyItemResponse
     */
    public function addIpControlPolicyItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddIpControlPolicyItemResponse::fromMap($this->doRPCRequest('AddIpControlPolicyItem', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddTrafficSpecialControlResponse::fromMap($this->doRPCRequest('AddTrafficSpecialControl', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param AttachPluginRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AttachPluginResponse
     */
    public function attachPluginWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AttachPluginResponse::fromMap($this->doRPCRequest('AttachPlugin', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AttachPluginRequest $request
     *
     * @return AttachPluginResponse
     */
    public function attachPlugin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachPluginWithOptions($request, $runtime);
    }

    /**
     * @param BatchAbolishApisRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return BatchAbolishApisResponse
     */
    public function batchAbolishApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchAbolishApisResponse::fromMap($this->doRPCRequest('BatchAbolishApis', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BatchAbolishApisRequest $request
     *
     * @return BatchAbolishApisResponse
     */
    public function batchAbolishApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchAbolishApisWithOptions($request, $runtime);
    }

    /**
     * @param BatchDeployApisRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return BatchDeployApisResponse
     */
    public function batchDeployApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchDeployApisResponse::fromMap($this->doRPCRequest('BatchDeployApis', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BatchDeployApisRequest $request
     *
     * @return BatchDeployApisResponse
     */
    public function batchDeployApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeployApisWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateApiResponse::fromMap($this->doRPCRequest('CreateApi', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateApiGroupResponse::fromMap($this->doRPCRequest('CreateApiGroup', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateApiStageVariableResponse::fromMap($this->doRPCRequest('CreateApiStageVariable', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAppResponse::fromMap($this->doRPCRequest('CreateApp', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateInstanceResponse::fromMap($this->doRPCRequest('CreateInstance', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateIntranetDomainRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateIntranetDomainResponse
     */
    public function createIntranetDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateIntranetDomainResponse::fromMap($this->doRPCRequest('CreateIntranetDomain', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateIntranetDomainRequest $request
     *
     * @return CreateIntranetDomainResponse
     */
    public function createIntranetDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIntranetDomainWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateIpControlResponse::fromMap($this->doRPCRequest('CreateIpControl', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateLogConfigResponse::fromMap($this->doRPCRequest('CreateLogConfig', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateModelRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateModelResponse
     */
    public function createModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateModelResponse::fromMap($this->doRPCRequest('CreateModel', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateModelRequest $request
     *
     * @return CreateModelResponse
     */
    public function createModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createModelWithOptions($request, $runtime);
    }

    /**
     * @param CreateMonitorGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateMonitorGroupResponse
     */
    public function createMonitorGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateMonitorGroupResponse::fromMap($this->doRPCRequest('CreateMonitorGroup', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateMonitorGroupRequest $request
     *
     * @return CreateMonitorGroupResponse
     */
    public function createMonitorGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMonitorGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreatePluginRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreatePluginResponse
     */
    public function createPluginWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreatePluginResponse::fromMap($this->doRPCRequest('CreatePlugin', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreatePluginRequest $request
     *
     * @return CreatePluginResponse
     */
    public function createPlugin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPluginWithOptions($request, $runtime);
    }

    /**
     * @param CreateSignatureRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateSignatureResponse
     */
    public function createSignatureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSignatureResponse::fromMap($this->doRPCRequest('CreateSignature', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSignatureRequest $request
     *
     * @return CreateSignatureResponse
     */
    public function createSignature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSignatureWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateTrafficControlResponse::fromMap($this->doRPCRequest('CreateTrafficControl', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAllTrafficSpecialControlResponse::fromMap($this->doRPCRequest('DeleteAllTrafficSpecialControl', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteApiResponse::fromMap($this->doRPCRequest('DeleteApi', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteApiGroupResponse::fromMap($this->doRPCRequest('DeleteApiGroup', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteApiStageVariableResponse::fromMap($this->doRPCRequest('DeleteApiStageVariable', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAppResponse::fromMap($this->doRPCRequest('DeleteApp', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDomainResponse::fromMap($this->doRPCRequest('DeleteDomain', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDomainCertificateResponse::fromMap($this->doRPCRequest('DeleteDomainCertificate', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteInstanceResponse::fromMap($this->doRPCRequest('DeleteInstance', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteInstanceRequest $request
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteIpControlResponse::fromMap($this->doRPCRequest('DeleteIpControl', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteLogConfigResponse::fromMap($this->doRPCRequest('DeleteLogConfig', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteModelRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteModelResponse
     */
    public function deleteModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteModelResponse::fromMap($this->doRPCRequest('DeleteModel', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteModelRequest $request
     *
     * @return DeleteModelResponse
     */
    public function deleteModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteModelWithOptions($request, $runtime);
    }

    /**
     * @param DeletePluginRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeletePluginResponse
     */
    public function deletePluginWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeletePluginResponse::fromMap($this->doRPCRequest('DeletePlugin', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeletePluginRequest $request
     *
     * @return DeletePluginResponse
     */
    public function deletePlugin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePluginWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSignatureRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteSignatureResponse
     */
    public function deleteSignatureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSignatureResponse::fromMap($this->doRPCRequest('DeleteSignature', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteSignatureRequest $request
     *
     * @return DeleteSignatureResponse
     */
    public function deleteSignature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSignatureWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteTrafficControlResponse::fromMap($this->doRPCRequest('DeleteTrafficControl', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteTrafficSpecialControlResponse::fromMap($this->doRPCRequest('DeleteTrafficSpecialControl', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeployApiResponse::fromMap($this->doRPCRequest('DeployApi', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeAbolishApiTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeAbolishApiTaskResponse
     */
    public function describeAbolishApiTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAbolishApiTaskResponse::fromMap($this->doRPCRequest('DescribeAbolishApiTask', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAbolishApiTaskRequest $request
     *
     * @return DescribeAbolishApiTaskResponse
     */
    public function describeAbolishApiTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAbolishApiTaskWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeApiResponse::fromMap($this->doRPCRequest('DescribeApi', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeApiDocResponse::fromMap($this->doRPCRequest('DescribeApiDoc', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeApiGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeApiGroupResponse
     */
    public function describeApiGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeApiGroupResponse::fromMap($this->doRPCRequest('DescribeApiGroup', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeApiGroupRequest $request
     *
     * @return DescribeApiGroupResponse
     */
    public function describeApiGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiGroupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApiGroupVpcWhitelistRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeApiGroupVpcWhitelistResponse
     */
    public function describeApiGroupVpcWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeApiGroupVpcWhitelistResponse::fromMap($this->doRPCRequest('DescribeApiGroupVpcWhitelist', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeApiGroupVpcWhitelistRequest $request
     *
     * @return DescribeApiGroupVpcWhitelistResponse
     */
    public function describeApiGroupVpcWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiGroupVpcWhitelistWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeApiGroupsResponse::fromMap($this->doRPCRequest('DescribeApiGroups', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeApiHistoriesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeApiHistoriesResponse
     */
    public function describeApiHistoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeApiHistoriesResponse::fromMap($this->doRPCRequest('DescribeApiHistories', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeApiHistoriesRequest $request
     *
     * @return DescribeApiHistoriesResponse
     */
    public function describeApiHistories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiHistoriesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApiHistoryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeApiHistoryResponse
     */
    public function describeApiHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeApiHistoryResponse::fromMap($this->doRPCRequest('DescribeApiHistory', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeApiHistoryRequest $request
     *
     * @return DescribeApiHistoryResponse
     */
    public function describeApiHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiHistoryWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeApiIpControlsResponse::fromMap($this->doRPCRequest('DescribeApiIpControls', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeApiLatencyDataRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeApiLatencyDataResponse
     */
    public function describeApiLatencyDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeApiLatencyDataResponse::fromMap($this->doRPCRequest('DescribeApiLatencyData', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeApiLatencyDataRequest $request
     *
     * @return DescribeApiLatencyDataResponse
     */
    public function describeApiLatencyData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiLatencyDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApiMarketAttributesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeApiMarketAttributesResponse
     */
    public function describeApiMarketAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeApiMarketAttributesResponse::fromMap($this->doRPCRequest('DescribeApiMarketAttributes', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeApiMarketAttributesRequest $request
     *
     * @return DescribeApiMarketAttributesResponse
     */
    public function describeApiMarketAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiMarketAttributesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApiQpsDataRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeApiQpsDataResponse
     */
    public function describeApiQpsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeApiQpsDataResponse::fromMap($this->doRPCRequest('DescribeApiQpsData', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeApiQpsDataRequest $request
     *
     * @return DescribeApiQpsDataResponse
     */
    public function describeApiQpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiQpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApiSignaturesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeApiSignaturesResponse
     */
    public function describeApiSignaturesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeApiSignaturesResponse::fromMap($this->doRPCRequest('DescribeApiSignatures', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeApiSignaturesRequest $request
     *
     * @return DescribeApiSignaturesResponse
     */
    public function describeApiSignatures($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiSignaturesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApiStageRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeApiStageResponse
     */
    public function describeApiStageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeApiStageResponse::fromMap($this->doRPCRequest('DescribeApiStage', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeApiStageRequest $request
     *
     * @return DescribeApiStageResponse
     */
    public function describeApiStage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiStageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApiTrafficControlsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeApiTrafficControlsResponse
     */
    public function describeApiTrafficControlsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeApiTrafficControlsResponse::fromMap($this->doRPCRequest('DescribeApiTrafficControls', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeApiTrafficControlsRequest $request
     *
     * @return DescribeApiTrafficControlsResponse
     */
    public function describeApiTrafficControls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiTrafficControlsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApiTrafficDataRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeApiTrafficDataResponse
     */
    public function describeApiTrafficDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeApiTrafficDataResponse::fromMap($this->doRPCRequest('DescribeApiTrafficData', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeApiTrafficDataRequest $request
     *
     * @return DescribeApiTrafficDataResponse
     */
    public function describeApiTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiTrafficDataWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeApisResponse::fromMap($this->doRPCRequest('DescribeApis', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeApisByAppResponse::fromMap($this->doRPCRequest('DescribeApisByApp', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeApisByIpControlResponse::fromMap($this->doRPCRequest('DescribeApisByIpControl', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeApisBySignatureRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeApisBySignatureResponse
     */
    public function describeApisBySignatureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeApisBySignatureResponse::fromMap($this->doRPCRequest('DescribeApisBySignature', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeApisBySignatureRequest $request
     *
     * @return DescribeApisBySignatureResponse
     */
    public function describeApisBySignature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisBySignatureWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApisByTrafficControlRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeApisByTrafficControlResponse
     */
    public function describeApisByTrafficControlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeApisByTrafficControlResponse::fromMap($this->doRPCRequest('DescribeApisByTrafficControl', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeApisByTrafficControlRequest $request
     *
     * @return DescribeApisByTrafficControlResponse
     */
    public function describeApisByTrafficControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisByTrafficControlWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAppResponse::fromMap($this->doRPCRequest('DescribeApp', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeAppAttributesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeAppAttributesResponse
     */
    public function describeAppAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAppAttributesResponse::fromMap($this->doRPCRequest('DescribeAppAttributes', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAppAttributesRequest $request
     *
     * @return DescribeAppAttributesResponse
     */
    public function describeAppAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppAttributesWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAppSecurityResponse::fromMap($this->doRPCRequest('DescribeAppSecurity', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAppsResponse::fromMap($this->doRPCRequest('DescribeApps', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeAuthorizedApisRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeAuthorizedApisResponse
     */
    public function describeAuthorizedApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAuthorizedApisResponse::fromMap($this->doRPCRequest('DescribeAuthorizedApis', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAuthorizedApisRequest $request
     *
     * @return DescribeAuthorizedApisResponse
     */
    public function describeAuthorizedApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuthorizedApisWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAuthorizedAppsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeAuthorizedAppsResponse
     */
    public function describeAuthorizedAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAuthorizedAppsResponse::fromMap($this->doRPCRequest('DescribeAuthorizedApps', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAuthorizedAppsRequest $request
     *
     * @return DescribeAuthorizedAppsResponse
     */
    public function describeAuthorizedApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuthorizedAppsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDeployApiTaskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDeployApiTaskResponse
     */
    public function describeDeployApiTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDeployApiTaskResponse::fromMap($this->doRPCRequest('DescribeDeployApiTask', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDeployApiTaskRequest $request
     *
     * @return DescribeDeployApiTaskResponse
     */
    public function describeDeployApiTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeployApiTaskWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDeployedApiResponse::fromMap($this->doRPCRequest('DescribeDeployedApi', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDeployedApisResponse::fromMap($this->doRPCRequest('DescribeDeployedApis', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainResponse::fromMap($this->doRPCRequest('DescribeDomain', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeHistoryApisRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeHistoryApisResponse
     */
    public function describeHistoryApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeHistoryApisResponse::fromMap($this->doRPCRequest('DescribeHistoryApis', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeIpControlPolicyItemsResponse::fromMap($this->doRPCRequest('DescribeIpControlPolicyItems', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeIpControlsResponse::fromMap($this->doRPCRequest('DescribeIpControls', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLogConfigResponse::fromMap($this->doRPCRequest('DescribeLogConfig', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeMarketRemainsQuotaRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeMarketRemainsQuotaResponse
     */
    public function describeMarketRemainsQuotaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMarketRemainsQuotaResponse::fromMap($this->doRPCRequest('DescribeMarketRemainsQuota', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeMarketRemainsQuotaRequest $request
     *
     * @return DescribeMarketRemainsQuotaResponse
     */
    public function describeMarketRemainsQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMarketRemainsQuotaWithOptions($request, $runtime);
    }

    /**
     * @param DescribeModelsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeModelsResponse
     */
    public function describeModelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeModelsResponse::fromMap($this->doRPCRequest('DescribeModels', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeModelsRequest $request
     *
     * @return DescribeModelsResponse
     */
    public function describeModels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeModelsWithOptions($request, $runtime);
    }

    /**
     * @param DescribePluginSchemasRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribePluginSchemasResponse
     */
    public function describePluginSchemasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePluginSchemasResponse::fromMap($this->doRPCRequest('DescribePluginSchemas', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePluginSchemasRequest $request
     *
     * @return DescribePluginSchemasResponse
     */
    public function describePluginSchemas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePluginSchemasWithOptions($request, $runtime);
    }

    /**
     * @param DescribePluginTemplatesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribePluginTemplatesResponse
     */
    public function describePluginTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePluginTemplatesResponse::fromMap($this->doRPCRequest('DescribePluginTemplates', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePluginTemplatesRequest $request
     *
     * @return DescribePluginTemplatesResponse
     */
    public function describePluginTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePluginTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param DescribePluginsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribePluginsResponse
     */
    public function describePluginsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePluginsResponse::fromMap($this->doRPCRequest('DescribePlugins', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePluginsRequest $request
     *
     * @return DescribePluginsResponse
     */
    public function describePlugins($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePluginsWithOptions($request, $runtime);
    }

    /**
     * @param DescribePluginsByApiRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribePluginsByApiResponse
     */
    public function describePluginsByApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePluginsByApiResponse::fromMap($this->doRPCRequest('DescribePluginsByApi', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePluginsByApiRequest $request
     *
     * @return DescribePluginsByApiResponse
     */
    public function describePluginsByApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePluginsByApiWithOptions($request, $runtime);
    }

    /**
     * @param DescribePurchasedApiGroupRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribePurchasedApiGroupResponse
     */
    public function describePurchasedApiGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePurchasedApiGroupResponse::fromMap($this->doRPCRequest('DescribePurchasedApiGroup', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePurchasedApiGroupRequest $request
     *
     * @return DescribePurchasedApiGroupResponse
     */
    public function describePurchasedApiGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePurchasedApiGroupWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePurchasedApiGroupsResponse::fromMap($this->doRPCRequest('DescribePurchasedApiGroups', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePurchasedApisResponse::fromMap($this->doRPCRequest('DescribePurchasedApis', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeSignaturesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeSignaturesResponse
     */
    public function describeSignaturesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSignaturesResponse::fromMap($this->doRPCRequest('DescribeSignatures', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSignaturesRequest $request
     *
     * @return DescribeSignaturesResponse
     */
    public function describeSignatures($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSignaturesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSignaturesByApiRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSignaturesByApiResponse
     */
    public function describeSignaturesByApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSignaturesByApiResponse::fromMap($this->doRPCRequest('DescribeSignaturesByApi', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSignaturesByApiRequest $request
     *
     * @return DescribeSignaturesByApiResponse
     */
    public function describeSignaturesByApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSignaturesByApiWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSystemParametersResponse::fromMap($this->doRPCRequest('DescribeSystemParameters', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeTrafficControlsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeTrafficControlsResponse
     */
    public function describeTrafficControlsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeTrafficControlsResponse::fromMap($this->doRPCRequest('DescribeTrafficControls', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeTrafficControlsByApiRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeTrafficControlsByApiResponse
     */
    public function describeTrafficControlsByApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeTrafficControlsByApiResponse::fromMap($this->doRPCRequest('DescribeTrafficControlsByApi', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeTrafficControlsByApiRequest $request
     *
     * @return DescribeTrafficControlsByApiResponse
     */
    public function describeTrafficControlsByApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTrafficControlsByApiWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUpdateVpcInfoTaskRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeUpdateVpcInfoTaskResponse
     */
    public function describeUpdateVpcInfoTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUpdateVpcInfoTaskResponse::fromMap($this->doRPCRequest('DescribeUpdateVpcInfoTask', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeUpdateVpcInfoTaskRequest $request
     *
     * @return DescribeUpdateVpcInfoTaskResponse
     */
    public function describeUpdateVpcInfoTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUpdateVpcInfoTaskWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVpcAccessesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeVpcAccessesResponse
     */
    public function describeVpcAccessesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVpcAccessesResponse::fromMap($this->doRPCRequest('DescribeVpcAccesses', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVpcAccessesRequest $request
     *
     * @return DescribeVpcAccessesResponse
     */
    public function describeVpcAccesses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcAccessesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeZonesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeZonesResponse
     */
    public function describeZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeZonesResponse::fromMap($this->doRPCRequest('DescribeZones', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeZonesRequest $request
     *
     * @return DescribeZonesResponse
     */
    public function describeZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeZonesWithOptions($request, $runtime);
    }

    /**
     * @param DryRunSwaggerRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return DryRunSwaggerResponse
     */
    public function dryRunSwaggerWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DryRunSwaggerShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->globalCondition)) {
            $request->globalConditionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->globalCondition, 'GlobalCondition', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DryRunSwaggerResponse::fromMap($this->doRPCRequest('DryRunSwagger', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DryRunSwaggerRequest $request
     *
     * @return DryRunSwaggerResponse
     */
    public function dryRunSwagger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dryRunSwaggerWithOptions($request, $runtime);
    }

    /**
     * @param ImportSwaggerRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return ImportSwaggerResponse
     */
    public function importSwaggerWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ImportSwaggerShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->globalCondition)) {
            $request->globalConditionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->globalCondition, 'GlobalCondition', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ImportSwaggerResponse::fromMap($this->doRPCRequest('ImportSwagger', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ImportSwaggerRequest $request
     *
     * @return ImportSwaggerResponse
     */
    public function importSwagger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importSwaggerWithOptions($request, $runtime);
    }

    /**
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagResourcesResponse::fromMap($this->doRPCRequest('ListTagResources', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyApiResponse::fromMap($this->doRPCRequest('ModifyApi', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyApiGroupResponse::fromMap($this->doRPCRequest('ModifyApiGroup', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyApiGroupVpcWhitelistRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyApiGroupVpcWhitelistResponse
     */
    public function modifyApiGroupVpcWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyApiGroupVpcWhitelistResponse::fromMap($this->doRPCRequest('ModifyApiGroupVpcWhitelist', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyApiGroupVpcWhitelistRequest $request
     *
     * @return ModifyApiGroupVpcWhitelistResponse
     */
    public function modifyApiGroupVpcWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApiGroupVpcWhitelistWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyAppResponse::fromMap($this->doRPCRequest('ModifyApp', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyInstanceSpecRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyInstanceSpecResponse
     */
    public function modifyInstanceSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceSpecResponse::fromMap($this->doRPCRequest('ModifyInstanceSpec', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyInstanceSpecRequest $request
     *
     * @return ModifyInstanceSpecResponse
     */
    public function modifyInstanceSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceSpecWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyIpControlResponse::fromMap($this->doRPCRequest('ModifyIpControl', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyIpControlPolicyItemResponse::fromMap($this->doRPCRequest('ModifyIpControlPolicyItem', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyLogConfigResponse::fromMap($this->doRPCRequest('ModifyLogConfig', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyModelRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ModifyModelResponse
     */
    public function modifyModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyModelResponse::fromMap($this->doRPCRequest('ModifyModel', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyModelRequest $request
     *
     * @return ModifyModelResponse
     */
    public function modifyModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyModelWithOptions($request, $runtime);
    }

    /**
     * @param ModifyPluginRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ModifyPluginResponse
     */
    public function modifyPluginWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyPluginResponse::fromMap($this->doRPCRequest('ModifyPlugin', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyPluginRequest $request
     *
     * @return ModifyPluginResponse
     */
    public function modifyPlugin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPluginWithOptions($request, $runtime);
    }

    /**
     * @param ModifySignatureRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifySignatureResponse
     */
    public function modifySignatureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySignatureResponse::fromMap($this->doRPCRequest('ModifySignature', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySignatureRequest $request
     *
     * @return ModifySignatureResponse
     */
    public function modifySignature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySignatureWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyTrafficControlResponse::fromMap($this->doRPCRequest('ModifyTrafficControl', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RuntimeOptions $runtime
     *
     * @return OpenApiGatewayServiceResponse
     */
    public function openApiGatewayServiceWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return OpenApiGatewayServiceResponse::fromMap($this->doRPCRequest('OpenApiGatewayService', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return OpenApiGatewayServiceResponse
     */
    public function openApiGatewayService()
    {
        $runtime = new RuntimeOptions([]);

        return $this->openApiGatewayServiceWithOptions($runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReactivateDomainResponse::fromMap($this->doRPCRequest('ReactivateDomain', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RemoveApisAuthoritiesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RemoveApisAuthoritiesResponse
     */
    public function removeApisAuthoritiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveApisAuthoritiesResponse::fromMap($this->doRPCRequest('RemoveApisAuthorities', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveApisAuthoritiesRequest $request
     *
     * @return RemoveApisAuthoritiesResponse
     */
    public function removeApisAuthorities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeApisAuthoritiesWithOptions($request, $runtime);
    }

    /**
     * @param RemoveAppsAuthoritiesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RemoveAppsAuthoritiesResponse
     */
    public function removeAppsAuthoritiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveAppsAuthoritiesResponse::fromMap($this->doRPCRequest('RemoveAppsAuthorities', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveAppsAuthoritiesRequest $request
     *
     * @return RemoveAppsAuthoritiesResponse
     */
    public function removeAppsAuthorities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeAppsAuthoritiesWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveIpControlApisResponse::fromMap($this->doRPCRequest('RemoveIpControlApis', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveIpControlPolicyItemResponse::fromMap($this->doRPCRequest('RemoveIpControlPolicyItem', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RemoveSignatureApisRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RemoveSignatureApisResponse
     */
    public function removeSignatureApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveSignatureApisResponse::fromMap($this->doRPCRequest('RemoveSignatureApis', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveSignatureApisRequest $request
     *
     * @return RemoveSignatureApisResponse
     */
    public function removeSignatureApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeSignatureApisWithOptions($request, $runtime);
    }

    /**
     * @param RemoveTrafficControlApisRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RemoveTrafficControlApisResponse
     */
    public function removeTrafficControlApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveTrafficControlApisResponse::fromMap($this->doRPCRequest('RemoveTrafficControlApis', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveTrafficControlApisRequest $request
     *
     * @return RemoveTrafficControlApisResponse
     */
    public function removeTrafficControlApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeTrafficControlApisWithOptions($request, $runtime);
    }

    /**
     * @param RemoveVpcAccessRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RemoveVpcAccessResponse
     */
    public function removeVpcAccessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveVpcAccessResponse::fromMap($this->doRPCRequest('RemoveVpcAccess', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveVpcAccessRequest $request
     *
     * @return RemoveVpcAccessResponse
     */
    public function removeVpcAccess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeVpcAccessWithOptions($request, $runtime);
    }

    /**
     * @param RemoveVpcAccessAndAbolishApisRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return RemoveVpcAccessAndAbolishApisResponse
     */
    public function removeVpcAccessAndAbolishApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveVpcAccessAndAbolishApisResponse::fromMap($this->doRPCRequest('RemoveVpcAccessAndAbolishApis', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveVpcAccessAndAbolishApisRequest $request
     *
     * @return RemoveVpcAccessAndAbolishApisResponse
     */
    public function removeVpcAccessAndAbolishApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeVpcAccessAndAbolishApisWithOptions($request, $runtime);
    }

    /**
     * @param ResetAppCodeRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ResetAppCodeResponse
     */
    public function resetAppCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResetAppCodeResponse::fromMap($this->doRPCRequest('ResetAppCode', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ResetAppCodeRequest $request
     *
     * @return ResetAppCodeResponse
     */
    public function resetAppCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAppCodeWithOptions($request, $runtime);
    }

    /**
     * @param ResetAppSecretRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ResetAppSecretResponse
     */
    public function resetAppSecretWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResetAppSecretResponse::fromMap($this->doRPCRequest('ResetAppSecret', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ResetAppSecretRequest $request
     *
     * @return ResetAppSecretResponse
     */
    public function resetAppSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAppSecretWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SdkGenerateByAppResponse::fromMap($this->doRPCRequest('SdkGenerateByApp', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SdkGenerateByGroupResponse::fromMap($this->doRPCRequest('SdkGenerateByGroup', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SetApisAuthoritiesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetApisAuthoritiesResponse
     */
    public function setApisAuthoritiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetApisAuthoritiesResponse::fromMap($this->doRPCRequest('SetApisAuthorities', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetApisAuthoritiesRequest $request
     *
     * @return SetApisAuthoritiesResponse
     */
    public function setApisAuthorities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setApisAuthoritiesWithOptions($request, $runtime);
    }

    /**
     * @param SetAppsAuthoritiesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetAppsAuthoritiesResponse
     */
    public function setAppsAuthoritiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetAppsAuthoritiesResponse::fromMap($this->doRPCRequest('SetAppsAuthorities', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetAppsAuthoritiesRequest $request
     *
     * @return SetAppsAuthoritiesResponse
     */
    public function setAppsAuthorities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAppsAuthoritiesWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetDomainResponse::fromMap($this->doRPCRequest('SetDomain', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetDomainCertificateResponse::fromMap($this->doRPCRequest('SetDomainCertificate', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetDomainWebSocketStatusResponse::fromMap($this->doRPCRequest('SetDomainWebSocketStatus', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetIpControlApisResponse::fromMap($this->doRPCRequest('SetIpControlApis', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SetSignatureApisRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SetSignatureApisResponse
     */
    public function setSignatureApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetSignatureApisResponse::fromMap($this->doRPCRequest('SetSignatureApis', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetSignatureApisRequest $request
     *
     * @return SetSignatureApisResponse
     */
    public function setSignatureApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setSignatureApisWithOptions($request, $runtime);
    }

    /**
     * @param SetTrafficControlApisRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetTrafficControlApisResponse
     */
    public function setTrafficControlApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetTrafficControlApisResponse::fromMap($this->doRPCRequest('SetTrafficControlApis', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetTrafficControlApisRequest $request
     *
     * @return SetTrafficControlApisResponse
     */
    public function setTrafficControlApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setTrafficControlApisWithOptions($request, $runtime);
    }

    /**
     * @param SetVpcAccessRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SetVpcAccessResponse
     */
    public function setVpcAccessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetVpcAccessResponse::fromMap($this->doRPCRequest('SetVpcAccess', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetVpcAccessRequest $request
     *
     * @return SetVpcAccessResponse
     */
    public function setVpcAccess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setVpcAccessWithOptions($request, $runtime);
    }

    /**
     * @param SetWildcardDomainPatternsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SetWildcardDomainPatternsResponse
     */
    public function setWildcardDomainPatternsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetWildcardDomainPatternsResponse::fromMap($this->doRPCRequest('SetWildcardDomainPatterns', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetWildcardDomainPatternsRequest $request
     *
     * @return SetWildcardDomainPatternsResponse
     */
    public function setWildcardDomainPatterns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setWildcardDomainPatternsWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SwitchApiResponse::fromMap($this->doRPCRequest('SwitchApi', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TagResourcesResponse::fromMap($this->doRPCRequest('TagResources', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UntagResourcesResponse::fromMap($this->doRPCRequest('UntagResources', '2016-07-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }
}
