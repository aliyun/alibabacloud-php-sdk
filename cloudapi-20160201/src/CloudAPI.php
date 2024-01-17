<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160201;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\AbolishApiForInnerRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\AbolishApiForInnerResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\AbolishApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\AbolishApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\AddBlackListRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\AddBlackListResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\AddTrafficSpecialControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\AddTrafficSpecialControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\CheckAccountForInnerRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\CheckAccountForInnerResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\CheckAoneAppAuditRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\CheckAoneAppAuditResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\CopyConsumerOpenForInnerRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\CopyConsumerOpenForInnerResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\CreateApiForInnerRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\CreateApiForInnerResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\CreateApiGroupForInnerRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\CreateApiGroupForInnerResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\CreateApiGroupRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\CreateApiGroupResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\CreateApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\CreateApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\CreateAppForBackendRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\CreateAppForBackendResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\CreateAppForInnerRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\CreateAppForInnerResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\CreateAppRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\CreateAppResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\CreateRaceWorkForInnerRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\CreateRaceWorkForInnerResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\CreateSecretKeyRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\CreateSecretKeyResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\CreateTrafficControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\CreateTrafficControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\CreateUserWhiteListRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\CreateUserWhiteListResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DeleteAllTrafficSpecialControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DeleteAllTrafficSpecialControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DeleteApiForInnerRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DeleteApiForInnerResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DeleteApiGroupRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DeleteApiGroupResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DeleteApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DeleteApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DeleteAppForInnerRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DeleteAppForInnerResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DeleteAppRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DeleteAppResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DeleteDomainCertificateRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DeleteDomainCertificateResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DeleteDomainRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DeleteDomainResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DeleteSecretKeyRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DeleteSecretKeyResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DeleteTrafficControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DeleteTrafficControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DeleteTrafficSpecialControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DeleteTrafficSpecialControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DeleteUserWhiteListByTypeRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DeleteUserWhiteListByTypeResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DeployApiForInnerRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DeployApiForInnerResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DeployApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DeployApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApiDocRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApiDocResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApiDocsForBackendRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApiDocsForBackendResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApiDocsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApiDocsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApiErrorRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApiErrorResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApiGroupDetailRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApiGroupDetailResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApiGroupsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApiGroupsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApiLatencyRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApiLatencyResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApiMarketInstanceRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApiMarketInstanceResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApiQpsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApiQpsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApiRulesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApiRulesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApisByAppRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApisByAppResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApisByRuleRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApisByRuleResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApisForConsoleRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApisForConsoleResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApiTrafficRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApiTrafficResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeAppRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeAppResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeAppsByApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeAppsByApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeAppSecuritiesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeAppSecuritiesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeAppSecurityForInnerRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeAppSecurityForInnerResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeAppSecurityRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeAppSecurityResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeAppsForProviderRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeAppsForProviderResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeAppsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeAppsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeAvailableVipsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeAvailableVipsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeBidByUserIdForInnerRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeBidByUserIdForInnerResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeBlackListsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeBlackListsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeDeployedApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeDeployedApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeDeployedApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeDeployedApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeDomainRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeDomainResolutionRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeDomainResolutionResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeDomainResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeHistoryApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeHistoryApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeHistoryApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeHistoryApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeModelsForInnerRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeModelsForInnerResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribePurchasedApiGroupDetailRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribePurchasedApiGroupDetailResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribePurchasedApiGroupsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribePurchasedApiGroupsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribePurchasedApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribePurchasedApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribePurchasedApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribePurchasedApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeRaceWorkForInnerRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeRaceWorkForInnerResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeRaceWorksForInnerRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeRaceWorksForInnerResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeRulesByApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeRulesByApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeSecretKeysRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeSecretKeysResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeSystemParametersRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeSystemParametersResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeSystemParamsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeSystemParamsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeTrafficControlsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeTrafficControlsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeUserWhiteListsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeUserWhiteListsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\IsIncludedByUserWhitelistRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\IsIncludedByUserWhitelistResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\ModifyApiForInnerRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\ModifyApiForInnerResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\ModifyApiGroupRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\ModifyApiGroupResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\ModifyApiMarketInstanceAttributeRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\ModifyApiMarketInstanceAttributeResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\ModifyApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\ModifyApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\ModifyAppForInnerRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\ModifyAppForInnerResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\ModifyAppRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\ModifyAppResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\ModifyGroupAuthAppCodeForBackendRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\ModifyGroupAuthAppCodeForBackendResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\ModifySecretKeyRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\ModifySecretKeyResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\ModifyTrafficControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\ModifyTrafficControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\ModifyUserWhiteListValueByTypeRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\ModifyUserWhiteListValueByTypeResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\ReactivateDomainForBackendRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\ReactivateDomainForBackendResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\RecoverApiFromHistoricalRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\RecoverApiFromHistoricalResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\RecoveryApiDefineFromHistoricalRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\RecoveryApiDefineFromHistoricalResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\RecoveryApiFromHistoricalRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\RecoveryApiFromHistoricalResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\RefreshDomainRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\RefreshDomainResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\RemoveAccessPermissionByApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\RemoveAccessPermissionByApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\RemoveAccessPermissionByAppsForInnerRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\RemoveAccessPermissionByAppsForInnerResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\RemoveAccessPermissionByAppsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\RemoveAccessPermissionByAppsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\RemoveAllBlackListRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\RemoveAllBlackListResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\RemoveApiRuleRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\RemoveApiRuleResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\RemoveAppsFromApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\RemoveAppsFromApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\RemoveBlackListRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\RemoveBlackListResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\ResetAppCodeForInnerRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\ResetAppCodeForInnerResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\ResetAppCodeRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\ResetAppCodeResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\ResetAppKeySecretRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\ResetAppKeySecretResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\ResetSecretByAppKeyForInnerRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\ResetSecretByAppKeyForInnerResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\SetAccessPermissionByApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\SetAccessPermissionByApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\SetAccessPermissionByGroupForBackendRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\SetAccessPermissionByGroupForBackendResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\SetAccessPermissionsForInnerRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\SetAccessPermissionsForInnerResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\SetAccessPermissionsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\SetAccessPermissionsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\SetApiRuleRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\SetApiRuleResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\SetDomainCertificateRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\SetDomainCertificateResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\SetDomainForBackendRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\SetDomainForBackendResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\SetDomainRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\SetDomainResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\SetMockIntegrationRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\SetMockIntegrationResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\SetPurchasedApiGroupStatusRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\SetPurchasedApiGroupStatusResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\SwitchApiForInnerRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\SwitchApiForInnerResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\SwitchApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\SwitchApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\SynCreateAppForInnerRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\SynCreateAppForInnerResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\TagResourcesSystemTagsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\TagResourcesSystemTagsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\UntagResourcesSystemTagsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\UntagResourcesSystemTagsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\VipMigrationByUidRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\VipMigrationByUidResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\VipMigrationRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\VipMigrationResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\VpcAddAppServerRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\VpcAddAppServerResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\VpcCreateAddressPoolRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\VpcCreateAddressPoolResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\VpcQueryAppServersRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\VpcQueryAppServersResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\VpcRegisterAppRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\VpcRegisterAppResponse;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\VpcRemoveAppServerRequest;
use AlibabaCloud\SDK\CloudAPI\V20160201\Models\VpcRemoveAppServerResponse;
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
            'cn-qingdao'                  => 'apigateway.cn-qingdao.aliyuncs.com',
            'cn-beijing'                  => 'apigateway.cn-beijing.aliyuncs.com',
            'cn-zhangjiakou'              => 'apigateway.cn-zhangjiakou.aliyuncs.com',
            'cn-huhehaote'                => 'apigateway.cn-huhehaote.aliyuncs.com',
            'cn-wulanchabu'               => 'apigateway.cn-wulanchabu.aliyuncs.com',
            'cn-hangzhou'                 => 'apigateway.cn-hangzhou.aliyuncs.com',
            'cn-shanghai'                 => 'apigateway.cn-shanghai.aliyuncs.com',
            'cn-shenzhen'                 => 'apigateway.cn-shenzhen.aliyuncs.com',
            'cn-heyuan'                   => 'apigateway.cn-heyuan.aliyuncs.com',
            'cn-guangzhou'                => 'apigateway.cn-guangzhou.aliyuncs.com',
            'cn-chengdu'                  => 'apigateway.cn-chengdu.aliyuncs.com',
            'cn-hongkong'                 => 'apigateway.cn-hongkong.aliyuncs.com',
            'ap-northeast-1'              => 'apigateway.ap-northeast-1.aliyuncs.com',
            'ap-southeast-1'              => 'apigateway.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'              => 'apigateway.ap-southeast-2.aliyuncs.com',
            'ap-southeast-3'              => 'apigateway.ap-southeast-3.aliyuncs.com',
            'ap-southeast-5'              => 'apigateway.ap-southeast-5.aliyuncs.com',
            'ap-southeast-6'              => 'apigateway.ap-southeast-6.aliyuncs.com',
            'ap-southeast-7'              => 'apigateway.ap-southeast-7.aliyuncs.com',
            'us-east-1'                   => 'apigateway.us-east-1.aliyuncs.com',
            'us-west-1'                   => 'apigateway.us-west-1.aliyuncs.com',
            'eu-west-1'                   => 'apigateway.eu-west-1.aliyuncs.com',
            'eu-central-1'                => 'apigateway.eu-central-1.aliyuncs.com',
            'ap-south-1'                  => 'apigateway.ap-south-1.aliyuncs.com',
            'me-east-1'                   => 'apigateway.me-east-1.aliyuncs.com',
            'me-central-1'                => 'apigateway.me-central-1.aliyuncs.com',
            'cn-hangzhou-finance'         => 'apigateway.cn-hangzhou-finance.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'apigateway.cn-shanghai-finance-1.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'apigateway.cn-shenzhen-finance-1.aliyuncs.com',
            'cn-north-2-gov-1'            => 'apigateway.cn-north-2-gov-1.aliyuncs.com',
            'ap-northeast-2-pop'          => 'apigateway.aliyuncs.com',
            'cn-beijing-finance-1'        => 'apigateway.cn-beijing-finance-1.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'apigateway.aliyuncs.com',
            'cn-beijing-gov-1'            => 'apigateway.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'apigateway.aliyuncs.com',
            'cn-edge-1'                   => 'apigateway.aliyuncs.com',
            'cn-fujian'                   => 'apigateway.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'apigateway.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'apigateway.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'apigateway.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'apigateway.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'apigateway.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'apigateway.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'apigateway.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'apigateway.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'apigateway.aliyuncs.com',
            'cn-qingdao-nebula'           => 'apigateway.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'apigateway.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'apigateway.aliyuncs.com',
            'cn-shanghai-inner'           => 'apigateway.cn-shanghai-inner.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'apigateway.aliyuncs.com',
            'cn-shenzhen-inner'           => 'apigateway.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'apigateway.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'apigateway.aliyuncs.com',
            'cn-wuhan'                    => 'apigateway.aliyuncs.com',
            'cn-yushanfang'               => 'apigateway.aliyuncs.com',
            'cn-zhangbei'                 => 'apigateway.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'apigateway.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'apigateway.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'apigateway.aliyuncs.com',
            'eu-west-1-oxs'               => 'apigateway.aliyuncs.com',
            'rus-west-1-pop'              => 'apigateway.aliyuncs.com',
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
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AbolishApi',
            'version'     => '2016-02-01',
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
     * @param AbolishApiForInnerRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AbolishApiForInnerResponse
     */
    public function abolishApiForInnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AbolishApiForInner',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AbolishApiForInnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AbolishApiForInnerRequest $request
     *
     * @return AbolishApiForInnerResponse
     */
    public function abolishApiForInner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->abolishApiForInnerWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddBlackList',
            'version'     => '2016-02-01',
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
     * @param AddTrafficSpecialControlRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AddTrafficSpecialControlResponse
     */
    public function addTrafficSpecialControlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'version'     => '2016-02-01',
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
     * @param CheckAccountForInnerRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CheckAccountForInnerResponse
     */
    public function checkAccountForInnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckAccountForInner',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckAccountForInnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckAccountForInnerRequest $request
     *
     * @return CheckAccountForInnerResponse
     */
    public function checkAccountForInner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkAccountForInnerWithOptions($request, $runtime);
    }

    /**
     * @param CheckAoneAppAuditRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CheckAoneAppAuditResponse
     */
    public function checkAoneAppAuditWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aoneAppName)) {
            $query['AoneAppName'] = $request->aoneAppName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckAoneAppAudit',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckAoneAppAuditResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckAoneAppAuditRequest $request
     *
     * @return CheckAoneAppAuditResponse
     */
    public function checkAoneAppAudit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkAoneAppAuditWithOptions($request, $runtime);
    }

    /**
     * @param CopyConsumerOpenForInnerRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CopyConsumerOpenForInnerResponse
     */
    public function copyConsumerOpenForInnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->copyList)) {
            $query['CopyList'] = $request->copyList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CopyConsumerOpenForInner',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CopyConsumerOpenForInnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CopyConsumerOpenForInnerRequest $request
     *
     * @return CopyConsumerOpenForInnerResponse
     */
    public function copyConsumerOpenForInner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyConsumerOpenForInnerWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->apiName)) {
            $query['ApiName'] = $request->apiName;
        }
        if (!Utils::isUnset($request->authType)) {
            $query['AuthType'] = $request->authType;
        }
        if (!Utils::isUnset($request->bodyFormat)) {
            $query['BodyFormat'] = $request->bodyFormat;
        }
        if (!Utils::isUnset($request->constantParameters)) {
            $query['ConstantParameters'] = $request->constantParameters;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->httpMethod)) {
            $query['HttpMethod'] = $request->httpMethod;
        }
        if (!Utils::isUnset($request->httpProtocol)) {
            $query['HttpProtocol'] = $request->httpProtocol;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->pathParameters)) {
            $query['PathParameters'] = $request->pathParameters;
        }
        if (!Utils::isUnset($request->postBodyDescription)) {
            $query['PostBodyDescription'] = $request->postBodyDescription;
        }
        if (!Utils::isUnset($request->postBodyType)) {
            $query['PostBodyType'] = $request->postBodyType;
        }
        if (!Utils::isUnset($request->requestBody)) {
            $query['RequestBody'] = $request->requestBody;
        }
        if (!Utils::isUnset($request->requestHeaders)) {
            $query['RequestHeaders'] = $request->requestHeaders;
        }
        if (!Utils::isUnset($request->requestQueries)) {
            $query['RequestQueries'] = $request->requestQueries;
        }
        if (!Utils::isUnset($request->resultSample)) {
            $query['ResultSample'] = $request->resultSample;
        }
        if (!Utils::isUnset($request->resultType)) {
            $query['ResultType'] = $request->resultType;
        }
        if (!Utils::isUnset($request->serviceAddress)) {
            $query['ServiceAddress'] = $request->serviceAddress;
        }
        if (!Utils::isUnset($request->serviceProtocol)) {
            $query['ServiceProtocol'] = $request->serviceProtocol;
        }
        if (!Utils::isUnset($request->serviceTimeout)) {
            $query['ServiceTimeout'] = $request->serviceTimeout;
        }
        if (!Utils::isUnset($request->systemParameters)) {
            $query['SystemParameters'] = $request->systemParameters;
        }
        if (!Utils::isUnset($request->visibility)) {
            $query['Visibility'] = $request->visibility;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateApi',
            'version'     => '2016-02-01',
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
     * @param CreateApiForInnerRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateApiForInnerResponse
     */
    public function createApiForInnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
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
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->requestConfig)) {
            $query['RequestConfig'] = $request->requestConfig;
        }
        if (!Utils::isUnset($request->requestParamters)) {
            $query['RequestParamters'] = $request->requestParamters;
        }
        if (!Utils::isUnset($request->resultSample)) {
            $query['ResultSample'] = $request->resultSample;
        }
        if (!Utils::isUnset($request->resultType)) {
            $query['ResultType'] = $request->resultType;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateApiForInner',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateApiForInnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateApiForInnerRequest $request
     *
     * @return CreateApiForInnerResponse
     */
    public function createApiForInner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApiForInnerWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateApiGroup',
            'version'     => '2016-02-01',
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
     * @param CreateApiGroupForInnerRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateApiGroupForInnerResponse
     */
    public function createApiGroupForInnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateApiGroupForInner',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateApiGroupForInnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateApiGroupForInnerRequest $request
     *
     * @return CreateApiGroupForInnerResponse
     */
    public function createApiGroupForInner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApiGroupForInnerWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateApp',
            'version'     => '2016-02-01',
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
     * @param CreateAppForBackendRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateAppForBackendResponse
     */
    public function createAppForBackendWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAppForBackend',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAppForBackendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAppForBackendRequest $request
     *
     * @return CreateAppForBackendResponse
     */
    public function createAppForBackend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppForBackendWithOptions($request, $runtime);
    }

    /**
     * @param CreateAppForInnerRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateAppForInnerResponse
     */
    public function createAppForInnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->appCode)) {
            $query['AppCode'] = $request->appCode;
        }
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->appSecret)) {
            $query['AppSecret'] = $request->appSecret;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->extend)) {
            $query['Extend'] = $request->extend;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAppForInner',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAppForInnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAppForInnerRequest $request
     *
     * @return CreateAppForInnerResponse
     */
    public function createAppForInner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppForInnerWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->alarmQuota)) {
            $query['AlarmQuota'] = $request->alarmQuota;
        }
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->billingType)) {
            $query['BillingType'] = $request->billingType;
        }
        if (!Utils::isUnset($request->cloudMarketInstanceId)) {
            $query['CloudMarketInstanceId'] = $request->cloudMarketInstanceId;
        }
        if (!Utils::isUnset($request->expiredOn)) {
            $query['ExpiredOn'] = $request->expiredOn;
        }
        if (!Utils::isUnset($request->instanceAttributes)) {
            $query['InstanceAttributes'] = $request->instanceAttributes;
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
            'version'     => '2016-02-01',
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
            'version'     => '2016-02-01',
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSecretKey',
            'version'     => '2016-02-01',
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
            'version'     => '2016-02-01',
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
     * @param CreateUserWhiteListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateUserWhiteListResponse
     */
    public function createUserWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aoneId)) {
            $query['AoneId'] = $request->aoneId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->entityId)) {
            $query['EntityId'] = $request->entityId;
        }
        if (!Utils::isUnset($request->limitCount)) {
            $query['LimitCount'] = $request->limitCount;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateUserWhiteList',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateUserWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateUserWhiteListRequest $request
     *
     * @return CreateUserWhiteListResponse
     */
    public function createUserWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserWhiteListWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->trafficControlId)) {
            $query['TrafficControlId'] = $request->trafficControlId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAllTrafficSpecialControl',
            'version'     => '2016-02-01',
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteApi',
            'version'     => '2016-02-01',
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
     * @param DeleteApiForInnerRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteApiForInnerResponse
     */
    public function deleteApiForInnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteApiForInner',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteApiForInnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteApiForInnerRequest $request
     *
     * @return DeleteApiForInnerResponse
     */
    public function deleteApiForInner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApiForInnerWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteApiGroup',
            'version'     => '2016-02-01',
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteApp',
            'version'     => '2016-02-01',
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
     * @param DeleteAppForInnerRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteAppForInnerResponse
     */
    public function deleteAppForInnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAppForInner',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAppForInnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAppForInnerRequest $request
     *
     * @return DeleteAppForInnerResponse
     */
    public function deleteAppForInner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppForInnerWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDomain',
            'version'     => '2016-02-01',
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDomainCertificate',
            'version'     => '2016-02-01',
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSecretKey',
            'version'     => '2016-02-01',
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
        if (!Utils::isUnset($request->trafficControlId)) {
            $query['TrafficControlId'] = $request->trafficControlId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTrafficControl',
            'version'     => '2016-02-01',
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
            'version'     => '2016-02-01',
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
     * @param DeleteUserWhiteListByTypeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteUserWhiteListByTypeResponse
     */
    public function deleteUserWhiteListByTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->entityId)) {
            $query['EntityId'] = $request->entityId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUserWhiteListByType',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUserWhiteListByTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteUserWhiteListByTypeRequest $request
     *
     * @return DeleteUserWhiteListByTypeResponse
     */
    public function deleteUserWhiteListByType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserWhiteListByTypeWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeployApi',
            'version'     => '2016-02-01',
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
     * @param DeployApiForInnerRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeployApiForInnerResponse
     */
    public function deployApiForInnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeployApiForInner',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeployApiForInnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeployApiForInnerRequest $request
     *
     * @return DeployApiForInnerResponse
     */
    public function deployApiForInner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deployApiForInnerWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApi',
            'version'     => '2016-02-01',
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
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiDoc',
            'version'     => '2016-02-01',
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
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiDocs',
            'version'     => '2016-02-01',
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
     * @param DescribeApiDocsForBackendRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeApiDocsForBackendResponse
     */
    public function describeApiDocsForBackendWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
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
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiDocsForBackend',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApiDocsForBackendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApiDocsForBackendRequest $request
     *
     * @return DescribeApiDocsForBackendResponse
     */
    public function describeApiDocsForBackend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiDocsForBackendWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiError',
            'version'     => '2016-02-01',
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiGroupDetail',
            'version'     => '2016-02-01',
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiGroups',
            'version'     => '2016-02-01',
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
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiLatency',
            'version'     => '2016-02-01',
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
     * @param DescribeApiMarketInstanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeApiMarketInstanceResponse
     */
    public function describeApiMarketInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiMarketInstance',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApiMarketInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApiMarketInstanceRequest $request
     *
     * @return DescribeApiMarketInstanceResponse
     */
    public function describeApiMarketInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiMarketInstanceWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiQps',
            'version'     => '2016-02-01',
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
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiRules',
            'version'     => '2016-02-01',
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
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiTraffic',
            'version'     => '2016-02-01',
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
        if (!Utils::isUnset($request->visibility)) {
            $query['Visibility'] = $request->visibility;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApis',
            'version'     => '2016-02-01',
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApisByApp',
            'version'     => '2016-02-01',
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApisByRule',
            'version'     => '2016-02-01',
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
            'version'     => '2016-02-01',
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApp',
            'version'     => '2016-02-01',
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
            'version'     => '2016-02-01',
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAppSecurity',
            'version'     => '2016-02-01',
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
     * @param DescribeAppSecurityForInnerRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeAppSecurityForInnerResponse
     */
    public function describeAppSecurityForInnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
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
            'action'      => 'DescribeAppSecurityForInner',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAppSecurityForInnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAppSecurityForInnerRequest $request
     *
     * @return DescribeAppSecurityForInnerResponse
     */
    public function describeAppSecurityForInner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppSecurityForInnerWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApps',
            'version'     => '2016-02-01',
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
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAppsByApi',
            'version'     => '2016-02-01',
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
        if (!Utils::isUnset($request->appOwner)) {
            $query['AppOwner'] = $request->appOwner;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAppsForProvider',
            'version'     => '2016-02-01',
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
     * @param DescribeAvailableVipsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeAvailableVipsResponse
     */
    public function describeAvailableVipsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->vip)) {
            $query['Vip'] = $request->vip;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAvailableVips',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAvailableVipsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAvailableVipsRequest $request
     *
     * @return DescribeAvailableVipsResponse
     */
    public function describeAvailableVips($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableVipsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBidByUserIdForInnerRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeBidByUserIdForInnerResponse
     */
    public function describeBidByUserIdForInnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBidByUserIdForInner',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBidByUserIdForInnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBidByUserIdForInnerRequest $request
     *
     * @return DescribeBidByUserIdForInnerResponse
     */
    public function describeBidByUserIdForInner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBidByUserIdForInnerWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBlackLists',
            'version'     => '2016-02-01',
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
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDeployedApi',
            'version'     => '2016-02-01',
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
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDeployedApis',
            'version'     => '2016-02-01',
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomain',
            'version'     => '2016-02-01',
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainResolution',
            'version'     => '2016-02-01',
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
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHistoryApi',
            'version'     => '2016-02-01',
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
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHistoryApis',
            'version'     => '2016-02-01',
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
     * @param DescribeModelsForInnerRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeModelsForInnerResponse
     */
    public function describeModelsForInnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->modelId)) {
            $query['ModelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->modelName)) {
            $query['ModelName'] = $request->modelName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeModelsForInner',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeModelsForInnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeModelsForInnerRequest $request
     *
     * @return DescribeModelsForInnerResponse
     */
    public function describeModelsForInner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeModelsForInnerWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePurchasedApi',
            'version'     => '2016-02-01',
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePurchasedApiGroupDetail',
            'version'     => '2016-02-01',
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
        if (!Utils::isUnset($request->groupIds)) {
            $query['GroupIds'] = $request->groupIds;
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
            'action'      => 'DescribePurchasedApiGroups',
            'version'     => '2016-02-01',
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
            'action'      => 'DescribePurchasedApis',
            'version'     => '2016-02-01',
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRaceWorkForInner',
            'version'     => '2016-02-01',
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
     * @param DescribeRaceWorksForInnerRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeRaceWorksForInnerResponse
     */
    public function describeRaceWorksForInnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRaceWorksForInner',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRaceWorksForInnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRaceWorksForInnerRequest $request
     *
     * @return DescribeRaceWorksForInnerResponse
     */
    public function describeRaceWorksForInner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRaceWorksForInnerWithOptions($request, $runtime);
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
            'version'     => '2016-02-01',
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
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRulesByApi',
            'version'     => '2016-02-01',
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSecretKeys',
            'version'     => '2016-02-01',
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
            'version'     => '2016-02-01',
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
            'version'     => '2016-02-01',
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
            'version'     => '2016-02-01',
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
     * @param DescribeUserWhiteListsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeUserWhiteListsResponse
     */
    public function describeUserWhiteListsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserWhiteLists',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserWhiteListsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUserWhiteListsRequest $request
     *
     * @return DescribeUserWhiteListsResponse
     */
    public function describeUserWhiteLists($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserWhiteListsWithOptions($request, $runtime);
    }

    /**
     * @param IsIncludedByUserWhitelistRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return IsIncludedByUserWhitelistResponse
     */
    public function isIncludedByUserWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'IsIncludedByUserWhitelist',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return IsIncludedByUserWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param IsIncludedByUserWhitelistRequest $request
     *
     * @return IsIncludedByUserWhitelistResponse
     */
    public function isIncludedByUserWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->isIncludedByUserWhitelistWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->apiName)) {
            $query['ApiName'] = $request->apiName;
        }
        if (!Utils::isUnset($request->authType)) {
            $query['AuthType'] = $request->authType;
        }
        if (!Utils::isUnset($request->bodyFormat)) {
            $query['BodyFormat'] = $request->bodyFormat;
        }
        if (!Utils::isUnset($request->constantParameters)) {
            $query['ConstantParameters'] = $request->constantParameters;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->httpMethod)) {
            $query['HttpMethod'] = $request->httpMethod;
        }
        if (!Utils::isUnset($request->httpProtocol)) {
            $query['HttpProtocol'] = $request->httpProtocol;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->pathParameters)) {
            $query['PathParameters'] = $request->pathParameters;
        }
        if (!Utils::isUnset($request->postBodyDescription)) {
            $query['PostBodyDescription'] = $request->postBodyDescription;
        }
        if (!Utils::isUnset($request->postBodyType)) {
            $query['PostBodyType'] = $request->postBodyType;
        }
        if (!Utils::isUnset($request->requestBody)) {
            $query['RequestBody'] = $request->requestBody;
        }
        if (!Utils::isUnset($request->requestHeaders)) {
            $query['RequestHeaders'] = $request->requestHeaders;
        }
        if (!Utils::isUnset($request->requestQueries)) {
            $query['RequestQueries'] = $request->requestQueries;
        }
        if (!Utils::isUnset($request->resultSample)) {
            $query['ResultSample'] = $request->resultSample;
        }
        if (!Utils::isUnset($request->resultType)) {
            $query['ResultType'] = $request->resultType;
        }
        if (!Utils::isUnset($request->serviceAddress)) {
            $query['ServiceAddress'] = $request->serviceAddress;
        }
        if (!Utils::isUnset($request->serviceProtocol)) {
            $query['ServiceProtocol'] = $request->serviceProtocol;
        }
        if (!Utils::isUnset($request->serviceTimeout)) {
            $query['ServiceTimeout'] = $request->serviceTimeout;
        }
        if (!Utils::isUnset($request->systemParameters)) {
            $query['SystemParameters'] = $request->systemParameters;
        }
        if (!Utils::isUnset($request->visibility)) {
            $query['Visibility'] = $request->visibility;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyApi',
            'version'     => '2016-02-01',
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
     * @param ModifyApiForInnerRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyApiForInnerResponse
     */
    public function modifyApiForInnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
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
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->requestConfig)) {
            $query['RequestConfig'] = $request->requestConfig;
        }
        if (!Utils::isUnset($request->requestParamters)) {
            $query['RequestParamters'] = $request->requestParamters;
        }
        if (!Utils::isUnset($request->resultSample)) {
            $query['ResultSample'] = $request->resultSample;
        }
        if (!Utils::isUnset($request->resultType)) {
            $query['ResultType'] = $request->resultType;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyApiForInner',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyApiForInnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyApiForInnerRequest $request
     *
     * @return ModifyApiForInnerResponse
     */
    public function modifyApiForInner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApiForInnerWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyApiGroup',
            'version'     => '2016-02-01',
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
     * @param ModifyApiMarketInstanceAttributeRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifyApiMarketInstanceAttributeResponse
     */
    public function modifyApiMarketInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->instanceAttributes)) {
            $query['InstanceAttributes'] = $request->instanceAttributes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyApiMarketInstanceAttribute',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyApiMarketInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyApiMarketInstanceAttributeRequest $request
     *
     * @return ModifyApiMarketInstanceAttributeResponse
     */
    public function modifyApiMarketInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApiMarketInstanceAttributeWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyApp',
            'version'     => '2016-02-01',
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
     * @param ModifyAppForInnerRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyAppForInnerResponse
     */
    public function modifyAppForInnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->extend)) {
            $query['Extend'] = $request->extend;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAppForInner',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAppForInnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyAppForInnerRequest $request
     *
     * @return ModifyAppForInnerResponse
     */
    public function modifyAppForInner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppForInnerWithOptions($request, $runtime);
    }

    /**
     * @param ModifyGroupAuthAppCodeForBackendRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifyGroupAuthAppCodeForBackendResponse
     */
    public function modifyGroupAuthAppCodeForBackendWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->authAppCode)) {
            $query['AuthAppCode'] = $request->authAppCode;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyGroupAuthAppCodeForBackend',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyGroupAuthAppCodeForBackendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyGroupAuthAppCodeForBackendRequest $request
     *
     * @return ModifyGroupAuthAppCodeForBackendResponse
     */
    public function modifyGroupAuthAppCodeForBackend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGroupAuthAppCodeForBackendWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySecretKey',
            'version'     => '2016-02-01',
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
            'version'     => '2016-02-01',
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
     * @param ModifyUserWhiteListValueByTypeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyUserWhiteListValueByTypeResponse
     */
    public function modifyUserWhiteListValueByTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyUserWhiteListValueByType',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyUserWhiteListValueByTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyUserWhiteListValueByTypeRequest $request
     *
     * @return ModifyUserWhiteListValueByTypeResponse
     */
    public function modifyUserWhiteListValueByType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUserWhiteListValueByTypeWithOptions($request, $runtime);
    }

    /**
     * @param ReactivateDomainForBackendRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ReactivateDomainForBackendResponse
     */
    public function reactivateDomainForBackendWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliuid)) {
            $query['Aliuid'] = $request->aliuid;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReactivateDomainForBackend',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReactivateDomainForBackendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReactivateDomainForBackendRequest $request
     *
     * @return ReactivateDomainForBackendResponse
     */
    public function reactivateDomainForBackend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reactivateDomainForBackendWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RecoverApiFromHistorical',
            'version'     => '2016-02-01',
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
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RecoveryApiDefineFromHistorical',
            'version'     => '2016-02-01',
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
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RecoveryApiFromHistorical',
            'version'     => '2016-02-01',
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RefreshDomain',
            'version'     => '2016-02-01',
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
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveAccessPermissionByApis',
            'version'     => '2016-02-01',
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
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveAccessPermissionByApps',
            'version'     => '2016-02-01',
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
     * @param RemoveAccessPermissionByAppsForInnerRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return RemoveAccessPermissionByAppsForInnerResponse
     */
    public function removeAccessPermissionByAppsForInnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->appIds)) {
            $query['AppIds'] = $request->appIds;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveAccessPermissionByAppsForInner',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveAccessPermissionByAppsForInnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveAccessPermissionByAppsForInnerRequest $request
     *
     * @return RemoveAccessPermissionByAppsForInnerResponse
     */
    public function removeAccessPermissionByAppsForInner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeAccessPermissionByAppsForInnerWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveAllBlackList',
            'version'     => '2016-02-01',
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
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveApiRule',
            'version'     => '2016-02-01',
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
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveAppsFromApi',
            'version'     => '2016-02-01',
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveBlackList',
            'version'     => '2016-02-01',
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
     * @param ResetAppCodeRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ResetAppCodeResponse
     */
    public function resetAppCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appCode)) {
            $query['AppCode'] = $request->appCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetAppCode',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetAppCodeResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ResetAppCodeForInnerRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ResetAppCodeForInnerResponse
     */
    public function resetAppCodeForInnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->appCode)) {
            $query['AppCode'] = $request->appCode;
        }
        if (!Utils::isUnset($request->newAppCode)) {
            $query['NewAppCode'] = $request->newAppCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetAppCodeForInner',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetAppCodeForInnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResetAppCodeForInnerRequest $request
     *
     * @return ResetAppCodeForInnerResponse
     */
    public function resetAppCodeForInner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAppCodeForInnerWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetAppKeySecret',
            'version'     => '2016-02-01',
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
     * @param ResetSecretByAppKeyForInnerRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ResetSecretByAppKeyForInnerResponse
     */
    public function resetSecretByAppKeyForInnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->newAppKey)) {
            $query['NewAppKey'] = $request->newAppKey;
        }
        if (!Utils::isUnset($request->newAppSecret)) {
            $query['NewAppSecret'] = $request->newAppSecret;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetSecretByAppKeyForInner',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetSecretByAppKeyForInnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResetSecretByAppKeyForInnerRequest $request
     *
     * @return ResetSecretByAppKeyForInnerResponse
     */
    public function resetSecretByAppKeyForInner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetSecretByAppKeyForInnerWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetAccessPermissionByApis',
            'version'     => '2016-02-01',
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
     * @param SetAccessPermissionByGroupForBackendRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return SetAccessPermissionByGroupForBackendResponse
     */
    public function setAccessPermissionByGroupForBackendWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetAccessPermissionByGroupForBackend',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetAccessPermissionByGroupForBackendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetAccessPermissionByGroupForBackendRequest $request
     *
     * @return SetAccessPermissionByGroupForBackendResponse
     */
    public function setAccessPermissionByGroupForBackend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAccessPermissionByGroupForBackendWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetAccessPermissions',
            'version'     => '2016-02-01',
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
     * @param SetAccessPermissionsForInnerRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return SetAccessPermissionsForInnerResponse
     */
    public function setAccessPermissionsForInnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
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
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetAccessPermissionsForInner',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetAccessPermissionsForInnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetAccessPermissionsForInnerRequest $request
     *
     * @return SetAccessPermissionsForInnerResponse
     */
    public function setAccessPermissionsForInner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAccessPermissionsForInnerWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetApiRule',
            'version'     => '2016-02-01',
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDomain',
            'version'     => '2016-02-01',
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDomainCertificate',
            'version'     => '2016-02-01',
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
     * @param SetDomainForBackendRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SetDomainForBackendResponse
     */
    public function setDomainForBackendWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certificateBody)) {
            $query['CertificateBody'] = $request->certificateBody;
        }
        if (!Utils::isUnset($request->certificateName)) {
            $query['CertificateName'] = $request->certificateName;
        }
        if (!Utils::isUnset($request->certificatePrivateKey)) {
            $query['CertificatePrivateKey'] = $request->certificatePrivateKey;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDomainForBackend',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDomainForBackendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetDomainForBackendRequest $request
     *
     * @return SetDomainForBackendResponse
     */
    public function setDomainForBackend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDomainForBackendWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetMockIntegration',
            'version'     => '2016-02-01',
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
     * @param SetPurchasedApiGroupStatusRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SetPurchasedApiGroupStatusResponse
     */
    public function setPurchasedApiGroupStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->billingStatus)) {
            $query['BillingStatus'] = $request->billingStatus;
        }
        if (!Utils::isUnset($request->closeOrder)) {
            $query['CloseOrder'] = $request->closeOrder;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetPurchasedApiGroupStatus',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetPurchasedApiGroupStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetPurchasedApiGroupStatusRequest $request
     *
     * @return SetPurchasedApiGroupStatusResponse
     */
    public function setPurchasedApiGroupStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setPurchasedApiGroupStatusWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SwitchApi',
            'version'     => '2016-02-01',
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
     * @param SwitchApiForInnerRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SwitchApiForInnerResponse
     */
    public function switchApiForInnerWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SwitchApiForInner',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SwitchApiForInnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SwitchApiForInnerRequest $request
     *
     * @return SwitchApiForInnerResponse
     */
    public function switchApiForInner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchApiForInnerWithOptions($request, $runtime);
    }

    /**
     * @param SynCreateAppForInnerRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SynCreateAppForInnerResponse
     */
    public function synCreateAppForInnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->appSecret)) {
            $query['AppSecret'] = $request->appSecret;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SynCreateAppForInner',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SynCreateAppForInnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SynCreateAppForInnerRequest $request
     *
     * @return SynCreateAppForInnerResponse
     */
    public function synCreateAppForInner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->synCreateAppForInnerWithOptions($request, $runtime);
    }

    /**
     * @param TagResourcesSystemTagsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return TagResourcesSystemTagsResponse
     */
    public function tagResourcesSystemTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->scope)) {
            $query['Scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->tagOwnerBid)) {
            $query['TagOwnerBid'] = $request->tagOwnerBid;
        }
        if (!Utils::isUnset($request->tagOwnerUid)) {
            $query['TagOwnerUid'] = $request->tagOwnerUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagResourcesSystemTags',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TagResourcesSystemTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TagResourcesSystemTagsRequest $request
     *
     * @return TagResourcesSystemTagsResponse
     */
    public function tagResourcesSystemTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesSystemTagsWithOptions($request, $runtime);
    }

    /**
     * @param UntagResourcesSystemTagsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UntagResourcesSystemTagsResponse
     */
    public function untagResourcesSystemTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        if (!Utils::isUnset($request->tagOwnerBid)) {
            $query['TagOwnerBid'] = $request->tagOwnerBid;
        }
        if (!Utils::isUnset($request->tagOwnerUid)) {
            $query['TagOwnerUid'] = $request->tagOwnerUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UntagResourcesSystemTags',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UntagResourcesSystemTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UntagResourcesSystemTagsRequest $request
     *
     * @return UntagResourcesSystemTagsResponse
     */
    public function untagResourcesSystemTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesSystemTagsWithOptions($request, $runtime);
    }

    /**
     * @param VipMigrationRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return VipMigrationResponse
     */
    public function vipMigrationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->newVip)) {
            $query['NewVip'] = $request->newVip;
        }
        if (!Utils::isUnset($request->originalVip)) {
            $query['OriginalVip'] = $request->originalVip;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VipMigration',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'none',
        ]);

        return VipMigrationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VipMigrationRequest $request
     *
     * @return VipMigrationResponse
     */
    public function vipMigration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->vipMigrationWithOptions($request, $runtime);
    }

    /**
     * @param VipMigrationByUidRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return VipMigrationByUidResponse
     */
    public function vipMigrationByUidWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->newVip)) {
            $query['NewVip'] = $request->newVip;
        }
        if (!Utils::isUnset($request->originalVip)) {
            $query['OriginalVip'] = $request->originalVip;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VipMigrationByUid',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VipMigrationByUidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VipMigrationByUidRequest $request
     *
     * @return VipMigrationByUidResponse
     */
    public function vipMigrationByUid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->vipMigrationByUidWithOptions($request, $runtime);
    }

    /**
     * @param VpcAddAppServerRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return VpcAddAppServerResponse
     */
    public function vpcAddAppServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addressPoolId)) {
            $query['AddressPoolId'] = $request->addressPoolId;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->serverIp)) {
            $query['ServerIp'] = $request->serverIp;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VpcAddAppServer',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VpcAddAppServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VpcAddAppServerRequest $request
     *
     * @return VpcAddAppServerResponse
     */
    public function vpcAddAppServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->vpcAddAppServerWithOptions($request, $runtime);
    }

    /**
     * @param VpcCreateAddressPoolRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return VpcCreateAddressPoolResponse
     */
    public function vpcCreateAddressPoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VpcCreateAddressPool',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VpcCreateAddressPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VpcCreateAddressPoolRequest $request
     *
     * @return VpcCreateAddressPoolResponse
     */
    public function vpcCreateAddressPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->vpcCreateAddressPoolWithOptions($request, $runtime);
    }

    /**
     * @param VpcQueryAppServersRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return VpcQueryAppServersResponse
     */
    public function vpcQueryAppServersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addressPoolId)) {
            $query['AddressPoolId'] = $request->addressPoolId;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->serverIp)) {
            $query['ServerIp'] = $request->serverIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VpcQueryAppServers',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VpcQueryAppServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VpcQueryAppServersRequest $request
     *
     * @return VpcQueryAppServersResponse
     */
    public function vpcQueryAppServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->vpcQueryAppServersWithOptions($request, $runtime);
    }

    /**
     * @param VpcRegisterAppRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return VpcRegisterAppResponse
     */
    public function vpcRegisterAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VpcRegisterApp',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VpcRegisterAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VpcRegisterAppRequest $request
     *
     * @return VpcRegisterAppResponse
     */
    public function vpcRegisterApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->vpcRegisterAppWithOptions($request, $runtime);
    }

    /**
     * @param VpcRemoveAppServerRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return VpcRemoveAppServerResponse
     */
    public function vpcRemoveAppServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->serverIp)) {
            $query['ServerIp'] = $request->serverIp;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VpcRemoveAppServer',
            'version'     => '2016-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VpcRemoveAppServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VpcRemoveAppServerRequest $request
     *
     * @return VpcRemoveAppServerResponse
     */
    public function vpcRemoveAppServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->vpcRemoveAppServerWithOptions($request, $runtime);
    }
}
