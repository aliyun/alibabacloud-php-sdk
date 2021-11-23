<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Dds\V20151201\Models\AllocateNodePrivateNetworkAddressRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\AllocateNodePrivateNetworkAddressResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\AllocatePublicNetworkAddressRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\AllocatePublicNetworkAddressResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\CheckCloudResourceAuthorizedRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\CheckCloudResourceAuthorizedResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\CheckRecoveryConditionRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\CheckRecoveryConditionResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateBackupRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateBackupResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateDBInstanceRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateDBInstanceResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateNodeBatchRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateNodeBatchResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateNodeRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateNodeResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateRecommendationTaskRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateRecommendationTaskResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateServerlessDBInstanceRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateServerlessDBInstanceResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateShardingDBInstanceRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\CreateShardingDBInstanceResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DeleteDBInstanceRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DeleteDBInstanceResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DeleteNodeRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DeleteNodeResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAccountsRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAccountsResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeActiveOperationTaskCountRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeActiveOperationTaskCountResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeActiveOperationTaskTypeRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeActiveOperationTaskTypeResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAuditFilesRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAuditFilesResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAuditLogFilterRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAuditLogFilterResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAuditPolicyRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAuditPolicyResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAuditRecordsRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAuditRecordsResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableEngineVersionRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableEngineVersionResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableResourceRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableResourceResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableTimeRangeRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableTimeRangeResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeBackupDBsRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeBackupDBsResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeBackupPolicyRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeBackupPolicyResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeBackupsRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeBackupsResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceAttributeRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceAttributeResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceEncryptionKeyRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceEncryptionKeyResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceMonitorRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceMonitorResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancePerformanceRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancePerformanceResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancesRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancesResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceSSLRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceSSLResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceTDEInfoRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceTDEInfoResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDedicatedClusterInstanceListRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDedicatedClusterInstanceListResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeErrorLogRecordsRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeErrorLogRecordsResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeInstanceAutoRenewalAttributeRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeInstanceAutoRenewalAttributeResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeKernelReleaseNotesRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeKernelReleaseNotesResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeMongoDBLogConfigRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeMongoDBLogConfigResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeParameterModificationHistoryRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeParameterModificationHistoryResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeParametersRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeParametersResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeParameterTemplatesRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeParameterTemplatesResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRenewalPriceRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRenewalPriceResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeReplicaSetRoleRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeReplicaSetRoleResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRoleZoneInfoRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRoleZoneInfoResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRunningLogRecordsRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRunningLogRecordsResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeSecurityGroupConfigurationRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeSecurityGroupConfigurationResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeSecurityIpsRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeSecurityIpsResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeShardingNetworkAddressRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeShardingNetworkAddressResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeSlowLogRecordsRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeSlowLogRecordsResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeTagsRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeTagsResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeUserEncryptionKeyListRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeUserEncryptionKeyListResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\DestroyInstanceRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\DestroyInstanceResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\EvaluateResourceRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\EvaluateResourceResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\MigrateAvailableZoneRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\MigrateAvailableZoneResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\MigrateToOtherZoneRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\MigrateToOtherZoneResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyAccountDescriptionRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyAccountDescriptionResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyAuditLogFilterRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyAuditLogFilterResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyAuditPolicyRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyAuditPolicyResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyBackupPolicyRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyBackupPolicyResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceConnectionStringRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceConnectionStringResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceDescriptionRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceDescriptionResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceMaintainTimeRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceMaintainTimeResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceMonitorRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceMonitorResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceNetExpireTimeRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceNetExpireTimeResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceNetworkTypeRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceNetworkTypeResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceSpecRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceSpecResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceSSLRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceSSLResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceTDERequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyDBInstanceTDEResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyInstanceAutoRenewalAttributeRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyInstanceAutoRenewalAttributeResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyInstanceVpcAuthModeRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyInstanceVpcAuthModeResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyNodeSpecBatchRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyNodeSpecBatchResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyNodeSpecRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyNodeSpecResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyParametersRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyParametersResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyResourceGroupRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyResourceGroupResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifySecurityGroupConfigurationRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifySecurityGroupConfigurationResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifySecurityIpsRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ModifySecurityIpsResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ReleaseNodePrivateNetworkAddressRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ReleaseNodePrivateNetworkAddressResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ReleasePublicNetworkAddressRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ReleasePublicNetworkAddressResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\RenewDBInstanceRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\RenewDBInstanceResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\ResetAccountPasswordRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\ResetAccountPasswordResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\RestartDBInstanceRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\RestartDBInstanceResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\RestoreDBInstanceRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\RestoreDBInstanceResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\SwitchDBInstanceHARequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\SwitchDBInstanceHAResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\TransformToPrePaidRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\TransformToPrePaidResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\UpgradeDBInstanceEngineVersionRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\UpgradeDBInstanceEngineVersionResponse;
use AlibabaCloud\SDK\Dds\V20151201\Models\UpgradeDBInstanceKernelVersionRequest;
use AlibabaCloud\SDK\Dds\V20151201\Models\UpgradeDBInstanceKernelVersionResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Dds extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-qingdao'                  => 'mongodb.aliyuncs.com',
            'cn-beijing'                  => 'mongodb.aliyuncs.com',
            'cn-chengdu'                  => 'mongodb.cn-chengdu.aliyuncs.com',
            'cn-zhangjiakou'              => 'mongodb.cn-zhangjiakou.aliyuncs.com',
            'cn-huhehaote'                => 'mongodb.cn-huhehaote.aliyuncs.com',
            'cn-hangzhou'                 => 'mongodb.aliyuncs.com',
            'cn-shanghai'                 => 'mongodb.aliyuncs.com',
            'cn-shenzhen'                 => 'mongodb.aliyuncs.com',
            'cn-heyuan'                   => 'mongodb.aliyuncs.com',
            'cn-hongkong'                 => 'mongodb.aliyuncs.com',
            'ap-southeast-1'              => 'mongodb.aliyuncs.com',
            'ap-southeast-2'              => 'mongodb.ap-southeast-2.aliyuncs.com',
            'ap-southeast-3'              => 'mongodb.ap-southeast-3.aliyuncs.com',
            'ap-southeast-5'              => 'mongodb.ap-southeast-5.aliyuncs.com',
            'ap-northeast-1'              => 'mongodb.ap-northeast-1.aliyuncs.com',
            'eu-west-1'                   => 'mongodb.eu-west-1.aliyuncs.com',
            'us-west-1'                   => 'mongodb.aliyuncs.com',
            'us-east-1'                   => 'mongodb.aliyuncs.com',
            'eu-central-1'                => 'mongodb.eu-central-1.aliyuncs.com',
            'me-east-1'                   => 'mongodb.me-east-1.aliyuncs.com',
            'ap-south-1'                  => 'mongodb.ap-south-1.aliyuncs.com',
            'cn-hangzhou-finance'         => 'mongodb.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'mongodb.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'mongodb.aliyuncs.com',
            'cn-north-2-gov-1'            => 'mongodb.aliyuncs.com',
            'ap-northeast-2-pop'          => 'mongodb.aliyuncs.com',
            'cn-beijing-finance-1'        => 'mongodb.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'mongodb.aliyuncs.com',
            'cn-beijing-gov-1'            => 'mongodb.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'mongodb.aliyuncs.com',
            'cn-edge-1'                   => 'mongodb.aliyuncs.com',
            'cn-fujian'                   => 'mongodb.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'mongodb.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'mongodb.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'mongodb.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'mongodb.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'mongodb.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'mongodb.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'mongodb.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'mongodb.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'mongodb.aliyuncs.com',
            'cn-qingdao-nebula'           => 'mongodb.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'mongodb.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'mongodb.aliyuncs.com',
            'cn-shanghai-inner'           => 'mongodb.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'mongodb.aliyuncs.com',
            'cn-shenzhen-inner'           => 'mongodb.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'mongodb.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'mongodb.aliyuncs.com',
            'cn-wuhan'                    => 'mongodb.aliyuncs.com',
            'cn-wulanchabu'               => 'mongodb.aliyuncs.com',
            'cn-yushanfang'               => 'mongodb.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'mongodb.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'mongodb.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'mongodb.aliyuncs.com',
            'eu-west-1-oxs'               => 'mongodb.aliyuncs.com',
            'rus-west-1-pop'              => 'mongodb.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dds', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AllocateNodePrivateNetworkAddressRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return AllocateNodePrivateNetworkAddressResponse
     */
    public function allocateNodePrivateNetworkAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AllocateNodePrivateNetworkAddressResponse::fromMap($this->doRPCRequest('AllocateNodePrivateNetworkAddress', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AllocateNodePrivateNetworkAddressRequest $request
     *
     * @return AllocateNodePrivateNetworkAddressResponse
     */
    public function allocateNodePrivateNetworkAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateNodePrivateNetworkAddressWithOptions($request, $runtime);
    }

    /**
     * @param AllocatePublicNetworkAddressRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return AllocatePublicNetworkAddressResponse
     */
    public function allocatePublicNetworkAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AllocatePublicNetworkAddressResponse::fromMap($this->doRPCRequest('AllocatePublicNetworkAddress', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AllocatePublicNetworkAddressRequest $request
     *
     * @return AllocatePublicNetworkAddressResponse
     */
    public function allocatePublicNetworkAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocatePublicNetworkAddressWithOptions($request, $runtime);
    }

    /**
     * @param CheckCloudResourceAuthorizedRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CheckCloudResourceAuthorizedResponse
     */
    public function checkCloudResourceAuthorizedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckCloudResourceAuthorizedResponse::fromMap($this->doRPCRequest('CheckCloudResourceAuthorized', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CheckCloudResourceAuthorizedRequest $request
     *
     * @return CheckCloudResourceAuthorizedResponse
     */
    public function checkCloudResourceAuthorized($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkCloudResourceAuthorizedWithOptions($request, $runtime);
    }

    /**
     * @param CheckRecoveryConditionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CheckRecoveryConditionResponse
     */
    public function checkRecoveryConditionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckRecoveryConditionResponse::fromMap($this->doRPCRequest('CheckRecoveryCondition', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CheckRecoveryConditionRequest $request
     *
     * @return CheckRecoveryConditionResponse
     */
    public function checkRecoveryCondition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkRecoveryConditionWithOptions($request, $runtime);
    }

    /**
     * @param CreateBackupRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateBackupResponse
     */
    public function createBackupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateBackupResponse::fromMap($this->doRPCRequest('CreateBackup', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateBackupRequest $request
     *
     * @return CreateBackupResponse
     */
    public function createBackup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBackupWithOptions($request, $runtime);
    }

    /**
     * @param CreateDBInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDBInstanceResponse
     */
    public function createDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDBInstanceResponse::fromMap($this->doRPCRequest('CreateDBInstance', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDBInstanceRequest $request
     *
     * @return CreateDBInstanceResponse
     */
    public function createDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateNodeRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateNodeResponse
     */
    public function createNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateNodeResponse::fromMap($this->doRPCRequest('CreateNode', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateNodeRequest $request
     *
     * @return CreateNodeResponse
     */
    public function createNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNodeWithOptions($request, $runtime);
    }

    /**
     * @param CreateNodeBatchRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateNodeBatchResponse
     */
    public function createNodeBatchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateNodeBatchResponse::fromMap($this->doRPCRequest('CreateNodeBatch', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateNodeBatchRequest $request
     *
     * @return CreateNodeBatchResponse
     */
    public function createNodeBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNodeBatchWithOptions($request, $runtime);
    }

    /**
     * @param CreateRecommendationTaskRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateRecommendationTaskResponse
     */
    public function createRecommendationTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateRecommendationTaskResponse::fromMap($this->doRPCRequest('CreateRecommendationTask', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateRecommendationTaskRequest $request
     *
     * @return CreateRecommendationTaskResponse
     */
    public function createRecommendationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRecommendationTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateServerlessDBInstanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateServerlessDBInstanceResponse
     */
    public function createServerlessDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateServerlessDBInstanceResponse::fromMap($this->doRPCRequest('CreateServerlessDBInstance', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateServerlessDBInstanceRequest $request
     *
     * @return CreateServerlessDBInstanceResponse
     */
    public function createServerlessDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServerlessDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateShardingDBInstanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateShardingDBInstanceResponse
     */
    public function createShardingDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateShardingDBInstanceResponse::fromMap($this->doRPCRequest('CreateShardingDBInstance', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateShardingDBInstanceRequest $request
     *
     * @return CreateShardingDBInstanceResponse
     */
    public function createShardingDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createShardingDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDBInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDBInstanceResponse
     */
    public function deleteDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDBInstanceResponse::fromMap($this->doRPCRequest('DeleteDBInstance', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDBInstanceRequest $request
     *
     * @return DeleteDBInstanceResponse
     */
    public function deleteDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteNodeRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteNodeResponse
     */
    public function deleteNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteNodeResponse::fromMap($this->doRPCRequest('DeleteNode', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteNodeRequest $request
     *
     * @return DeleteNodeResponse
     */
    public function deleteNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNodeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAccountsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeAccountsResponse
     */
    public function describeAccountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAccountsResponse::fromMap($this->doRPCRequest('DescribeAccounts', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAccountsRequest $request
     *
     * @return DescribeAccountsResponse
     */
    public function describeAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeActiveOperationTaskCountRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeActiveOperationTaskCountResponse
     */
    public function describeActiveOperationTaskCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeActiveOperationTaskCountResponse::fromMap($this->doRPCRequest('DescribeActiveOperationTaskCount', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeActiveOperationTaskCountRequest $request
     *
     * @return DescribeActiveOperationTaskCountResponse
     */
    public function describeActiveOperationTaskCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeActiveOperationTaskCountWithOptions($request, $runtime);
    }

    /**
     * @param DescribeActiveOperationTaskTypeRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeActiveOperationTaskTypeResponse
     */
    public function describeActiveOperationTaskTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeActiveOperationTaskTypeResponse::fromMap($this->doRPCRequest('DescribeActiveOperationTaskType', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeActiveOperationTaskTypeRequest $request
     *
     * @return DescribeActiveOperationTaskTypeResponse
     */
    public function describeActiveOperationTaskType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeActiveOperationTaskTypeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAuditFilesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeAuditFilesResponse
     */
    public function describeAuditFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAuditFilesResponse::fromMap($this->doRPCRequest('DescribeAuditFiles', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAuditFilesRequest $request
     *
     * @return DescribeAuditFilesResponse
     */
    public function describeAuditFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuditFilesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAuditLogFilterRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeAuditLogFilterResponse
     */
    public function describeAuditLogFilterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAuditLogFilterResponse::fromMap($this->doRPCRequest('DescribeAuditLogFilter', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAuditLogFilterRequest $request
     *
     * @return DescribeAuditLogFilterResponse
     */
    public function describeAuditLogFilter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuditLogFilterWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAuditPolicyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeAuditPolicyResponse
     */
    public function describeAuditPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAuditPolicyResponse::fromMap($this->doRPCRequest('DescribeAuditPolicy', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAuditPolicyRequest $request
     *
     * @return DescribeAuditPolicyResponse
     */
    public function describeAuditPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuditPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAuditRecordsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeAuditRecordsResponse
     */
    public function describeAuditRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAuditRecordsResponse::fromMap($this->doRPCRequest('DescribeAuditRecords', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAuditRecordsRequest $request
     *
     * @return DescribeAuditRecordsResponse
     */
    public function describeAuditRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuditRecordsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAvailableEngineVersionRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeAvailableEngineVersionResponse
     */
    public function describeAvailableEngineVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAvailableEngineVersionResponse::fromMap($this->doRPCRequest('DescribeAvailableEngineVersion', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAvailableEngineVersionRequest $request
     *
     * @return DescribeAvailableEngineVersionResponse
     */
    public function describeAvailableEngineVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableEngineVersionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAvailableResourceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAvailableResourceResponse
     */
    public function describeAvailableResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAvailableResourceResponse::fromMap($this->doRPCRequest('DescribeAvailableResource', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAvailableResourceRequest $request
     *
     * @return DescribeAvailableResourceResponse
     */
    public function describeAvailableResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableResourceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAvailableTimeRangeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeAvailableTimeRangeResponse
     */
    public function describeAvailableTimeRangeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAvailableTimeRangeResponse::fromMap($this->doRPCRequest('DescribeAvailableTimeRange', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAvailableTimeRangeRequest $request
     *
     * @return DescribeAvailableTimeRangeResponse
     */
    public function describeAvailableTimeRange($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableTimeRangeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackupDBsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeBackupDBsResponse
     */
    public function describeBackupDBsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBackupDBsResponse::fromMap($this->doRPCRequest('DescribeBackupDBs', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeBackupDBsRequest $request
     *
     * @return DescribeBackupDBsResponse
     */
    public function describeBackupDBs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupDBsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackupPolicyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeBackupPolicyResponse
     */
    public function describeBackupPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBackupPolicyResponse::fromMap($this->doRPCRequest('DescribeBackupPolicy', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeBackupPolicyRequest $request
     *
     * @return DescribeBackupPolicyResponse
     */
    public function describeBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackupsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeBackupsResponse
     */
    public function describeBackupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBackupsResponse::fromMap($this->doRPCRequest('DescribeBackups', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeBackupsRequest $request
     *
     * @return DescribeBackupsResponse
     */
    public function describeBackups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstanceAttributeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDBInstanceAttributeResponse
     */
    public function describeDBInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBInstanceAttributeResponse::fromMap($this->doRPCRequest('DescribeDBInstanceAttribute', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDBInstanceAttributeRequest $request
     *
     * @return DescribeDBInstanceAttributeResponse
     */
    public function describeDBInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstanceEncryptionKeyRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDBInstanceEncryptionKeyResponse
     */
    public function describeDBInstanceEncryptionKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBInstanceEncryptionKeyResponse::fromMap($this->doRPCRequest('DescribeDBInstanceEncryptionKey', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDBInstanceEncryptionKeyRequest $request
     *
     * @return DescribeDBInstanceEncryptionKeyResponse
     */
    public function describeDBInstanceEncryptionKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceEncryptionKeyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstanceMonitorRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDBInstanceMonitorResponse
     */
    public function describeDBInstanceMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBInstanceMonitorResponse::fromMap($this->doRPCRequest('DescribeDBInstanceMonitor', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDBInstanceMonitorRequest $request
     *
     * @return DescribeDBInstanceMonitorResponse
     */
    public function describeDBInstanceMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceMonitorWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstancePerformanceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDBInstancePerformanceResponse
     */
    public function describeDBInstancePerformanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBInstancePerformanceResponse::fromMap($this->doRPCRequest('DescribeDBInstancePerformance', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDBInstancePerformanceRequest $request
     *
     * @return DescribeDBInstancePerformanceResponse
     */
    public function describeDBInstancePerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstancePerformanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstanceSSLRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDBInstanceSSLResponse
     */
    public function describeDBInstanceSSLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBInstanceSSLResponse::fromMap($this->doRPCRequest('DescribeDBInstanceSSL', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDBInstanceSSLRequest $request
     *
     * @return DescribeDBInstanceSSLResponse
     */
    public function describeDBInstanceSSL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceSSLWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstanceTDEInfoRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDBInstanceTDEInfoResponse
     */
    public function describeDBInstanceTDEInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBInstanceTDEInfoResponse::fromMap($this->doRPCRequest('DescribeDBInstanceTDEInfo', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDBInstanceTDEInfoRequest $request
     *
     * @return DescribeDBInstanceTDEInfoResponse
     */
    public function describeDBInstanceTDEInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceTDEInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstancesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDBInstancesResponse
     */
    public function describeDBInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBInstancesResponse::fromMap($this->doRPCRequest('DescribeDBInstances', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDBInstancesRequest $request
     *
     * @return DescribeDBInstancesResponse
     */
    public function describeDBInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDedicatedClusterInstanceListRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeDedicatedClusterInstanceListResponse
     */
    public function describeDedicatedClusterInstanceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDedicatedClusterInstanceListResponse::fromMap($this->doRPCRequest('DescribeDedicatedClusterInstanceList', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDedicatedClusterInstanceListRequest $request
     *
     * @return DescribeDedicatedClusterInstanceListResponse
     */
    public function describeDedicatedClusterInstanceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedClusterInstanceListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeErrorLogRecordsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeErrorLogRecordsResponse
     */
    public function describeErrorLogRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeErrorLogRecordsResponse::fromMap($this->doRPCRequest('DescribeErrorLogRecords', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeErrorLogRecordsRequest $request
     *
     * @return DescribeErrorLogRecordsResponse
     */
    public function describeErrorLogRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeErrorLogRecordsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceAutoRenewalAttributeRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeInstanceAutoRenewalAttributeResponse
     */
    public function describeInstanceAutoRenewalAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceAutoRenewalAttributeResponse::fromMap($this->doRPCRequest('DescribeInstanceAutoRenewalAttribute', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstanceAutoRenewalAttributeRequest $request
     *
     * @return DescribeInstanceAutoRenewalAttributeResponse
     */
    public function describeInstanceAutoRenewalAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceAutoRenewalAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeKernelReleaseNotesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeKernelReleaseNotesResponse
     */
    public function describeKernelReleaseNotesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeKernelReleaseNotesResponse::fromMap($this->doRPCRequest('DescribeKernelReleaseNotes', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeKernelReleaseNotesRequest $request
     *
     * @return DescribeKernelReleaseNotesResponse
     */
    public function describeKernelReleaseNotes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeKernelReleaseNotesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMongoDBLogConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeMongoDBLogConfigResponse
     */
    public function describeMongoDBLogConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMongoDBLogConfigResponse::fromMap($this->doRPCRequest('DescribeMongoDBLogConfig', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeMongoDBLogConfigRequest $request
     *
     * @return DescribeMongoDBLogConfigResponse
     */
    public function describeMongoDBLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMongoDBLogConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeParameterModificationHistoryRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeParameterModificationHistoryResponse
     */
    public function describeParameterModificationHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeParameterModificationHistoryResponse::fromMap($this->doRPCRequest('DescribeParameterModificationHistory', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeParameterModificationHistoryRequest $request
     *
     * @return DescribeParameterModificationHistoryResponse
     */
    public function describeParameterModificationHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParameterModificationHistoryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeParameterTemplatesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeParameterTemplatesResponse
     */
    public function describeParameterTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeParameterTemplatesResponse::fromMap($this->doRPCRequest('DescribeParameterTemplates', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeParameterTemplatesRequest $request
     *
     * @return DescribeParameterTemplatesResponse
     */
    public function describeParameterTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParameterTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeParametersRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeParametersResponse
     */
    public function describeParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeParametersResponse::fromMap($this->doRPCRequest('DescribeParameters', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeParametersRequest $request
     *
     * @return DescribeParametersResponse
     */
    public function describeParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParametersWithOptions($request, $runtime);
    }

    /**
     * @param DescribePriceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribePriceResponse
     */
    public function describePriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePriceResponse::fromMap($this->doRPCRequest('DescribePrice', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePriceRequest $request
     *
     * @return DescribePriceResponse
     */
    public function describePrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePriceWithOptions($request, $runtime);
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

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeRenewalPriceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeRenewalPriceResponse
     */
    public function describeRenewalPriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRenewalPriceResponse::fromMap($this->doRPCRequest('DescribeRenewalPrice', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRenewalPriceRequest $request
     *
     * @return DescribeRenewalPriceResponse
     */
    public function describeRenewalPrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRenewalPriceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeReplicaSetRoleRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeReplicaSetRoleResponse
     */
    public function describeReplicaSetRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeReplicaSetRoleResponse::fromMap($this->doRPCRequest('DescribeReplicaSetRole', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeReplicaSetRoleRequest $request
     *
     * @return DescribeReplicaSetRoleResponse
     */
    public function describeReplicaSetRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeReplicaSetRoleWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRoleZoneInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeRoleZoneInfoResponse
     */
    public function describeRoleZoneInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRoleZoneInfoResponse::fromMap($this->doRPCRequest('DescribeRoleZoneInfo', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRoleZoneInfoRequest $request
     *
     * @return DescribeRoleZoneInfoResponse
     */
    public function describeRoleZoneInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRoleZoneInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRunningLogRecordsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeRunningLogRecordsResponse
     */
    public function describeRunningLogRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRunningLogRecordsResponse::fromMap($this->doRPCRequest('DescribeRunningLogRecords', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRunningLogRecordsRequest $request
     *
     * @return DescribeRunningLogRecordsResponse
     */
    public function describeRunningLogRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRunningLogRecordsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSecurityGroupConfigurationRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeSecurityGroupConfigurationResponse
     */
    public function describeSecurityGroupConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSecurityGroupConfigurationResponse::fromMap($this->doRPCRequest('DescribeSecurityGroupConfiguration', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSecurityGroupConfigurationRequest $request
     *
     * @return DescribeSecurityGroupConfigurationResponse
     */
    public function describeSecurityGroupConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityGroupConfigurationWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSecurityIpsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSecurityIpsResponse
     */
    public function describeSecurityIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSecurityIpsResponse::fromMap($this->doRPCRequest('DescribeSecurityIps', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSecurityIpsRequest $request
     *
     * @return DescribeSecurityIpsResponse
     */
    public function describeSecurityIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityIpsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeShardingNetworkAddressRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeShardingNetworkAddressResponse
     */
    public function describeShardingNetworkAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeShardingNetworkAddressResponse::fromMap($this->doRPCRequest('DescribeShardingNetworkAddress', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeShardingNetworkAddressRequest $request
     *
     * @return DescribeShardingNetworkAddressResponse
     */
    public function describeShardingNetworkAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeShardingNetworkAddressWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSlowLogRecordsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSlowLogRecordsResponse
     */
    public function describeSlowLogRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSlowLogRecordsResponse::fromMap($this->doRPCRequest('DescribeSlowLogRecords', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSlowLogRecordsRequest $request
     *
     * @return DescribeSlowLogRecordsResponse
     */
    public function describeSlowLogRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlowLogRecordsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTagsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeTagsResponse
     */
    public function describeTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeTagsResponse::fromMap($this->doRPCRequest('DescribeTags', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeTagsRequest $request
     *
     * @return DescribeTagsResponse
     */
    public function describeTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserEncryptionKeyListRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeUserEncryptionKeyListResponse
     */
    public function describeUserEncryptionKeyListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUserEncryptionKeyListResponse::fromMap($this->doRPCRequest('DescribeUserEncryptionKeyList', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeUserEncryptionKeyListRequest $request
     *
     * @return DescribeUserEncryptionKeyListResponse
     */
    public function describeUserEncryptionKeyList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserEncryptionKeyListWithOptions($request, $runtime);
    }

    /**
     * @param DestroyInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DestroyInstanceResponse
     */
    public function destroyInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DestroyInstanceResponse::fromMap($this->doRPCRequest('DestroyInstance', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DestroyInstanceRequest $request
     *
     * @return DestroyInstanceResponse
     */
    public function destroyInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->destroyInstanceWithOptions($request, $runtime);
    }

    /**
     * @param EvaluateResourceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return EvaluateResourceResponse
     */
    public function evaluateResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EvaluateResourceResponse::fromMap($this->doRPCRequest('EvaluateResource', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EvaluateResourceRequest $request
     *
     * @return EvaluateResourceResponse
     */
    public function evaluateResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->evaluateResourceWithOptions($request, $runtime);
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

        return ListTagResourcesResponse::fromMap($this->doRPCRequest('ListTagResources', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param MigrateAvailableZoneRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return MigrateAvailableZoneResponse
     */
    public function migrateAvailableZoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return MigrateAvailableZoneResponse::fromMap($this->doRPCRequest('MigrateAvailableZone', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param MigrateAvailableZoneRequest $request
     *
     * @return MigrateAvailableZoneResponse
     */
    public function migrateAvailableZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->migrateAvailableZoneWithOptions($request, $runtime);
    }

    /**
     * @param MigrateToOtherZoneRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return MigrateToOtherZoneResponse
     */
    public function migrateToOtherZoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return MigrateToOtherZoneResponse::fromMap($this->doRPCRequest('MigrateToOtherZone', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param MigrateToOtherZoneRequest $request
     *
     * @return MigrateToOtherZoneResponse
     */
    public function migrateToOtherZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->migrateToOtherZoneWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAccountDescriptionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyAccountDescriptionResponse
     */
    public function modifyAccountDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyAccountDescriptionResponse::fromMap($this->doRPCRequest('ModifyAccountDescription', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyAccountDescriptionRequest $request
     *
     * @return ModifyAccountDescriptionResponse
     */
    public function modifyAccountDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccountDescriptionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAuditLogFilterRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyAuditLogFilterResponse
     */
    public function modifyAuditLogFilterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyAuditLogFilterResponse::fromMap($this->doRPCRequest('ModifyAuditLogFilter', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyAuditLogFilterRequest $request
     *
     * @return ModifyAuditLogFilterResponse
     */
    public function modifyAuditLogFilter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAuditLogFilterWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAuditPolicyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyAuditPolicyResponse
     */
    public function modifyAuditPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyAuditPolicyResponse::fromMap($this->doRPCRequest('ModifyAuditPolicy', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyAuditPolicyRequest $request
     *
     * @return ModifyAuditPolicyResponse
     */
    public function modifyAuditPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAuditPolicyWithOptions($request, $runtime);
    }

    /**
     * @param ModifyBackupPolicyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyBackupPolicyResponse
     */
    public function modifyBackupPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyBackupPolicyResponse::fromMap($this->doRPCRequest('ModifyBackupPolicy', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyBackupPolicyRequest $request
     *
     * @return ModifyBackupPolicyResponse
     */
    public function modifyBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBInstanceConnectionStringRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifyDBInstanceConnectionStringResponse
     */
    public function modifyDBInstanceConnectionStringWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBInstanceConnectionStringResponse::fromMap($this->doRPCRequest('ModifyDBInstanceConnectionString', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDBInstanceConnectionStringRequest $request
     *
     * @return ModifyDBInstanceConnectionStringResponse
     */
    public function modifyDBInstanceConnectionString($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceConnectionStringWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBInstanceDescriptionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyDBInstanceDescriptionResponse
     */
    public function modifyDBInstanceDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBInstanceDescriptionResponse::fromMap($this->doRPCRequest('ModifyDBInstanceDescription', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDBInstanceDescriptionRequest $request
     *
     * @return ModifyDBInstanceDescriptionResponse
     */
    public function modifyDBInstanceDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceDescriptionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBInstanceMaintainTimeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyDBInstanceMaintainTimeResponse
     */
    public function modifyDBInstanceMaintainTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBInstanceMaintainTimeResponse::fromMap($this->doRPCRequest('ModifyDBInstanceMaintainTime', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDBInstanceMaintainTimeRequest $request
     *
     * @return ModifyDBInstanceMaintainTimeResponse
     */
    public function modifyDBInstanceMaintainTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceMaintainTimeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBInstanceMonitorRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyDBInstanceMonitorResponse
     */
    public function modifyDBInstanceMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBInstanceMonitorResponse::fromMap($this->doRPCRequest('ModifyDBInstanceMonitor', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDBInstanceMonitorRequest $request
     *
     * @return ModifyDBInstanceMonitorResponse
     */
    public function modifyDBInstanceMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceMonitorWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBInstanceNetExpireTimeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyDBInstanceNetExpireTimeResponse
     */
    public function modifyDBInstanceNetExpireTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBInstanceNetExpireTimeResponse::fromMap($this->doRPCRequest('ModifyDBInstanceNetExpireTime', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDBInstanceNetExpireTimeRequest $request
     *
     * @return ModifyDBInstanceNetExpireTimeResponse
     */
    public function modifyDBInstanceNetExpireTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceNetExpireTimeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBInstanceNetworkTypeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyDBInstanceNetworkTypeResponse
     */
    public function modifyDBInstanceNetworkTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBInstanceNetworkTypeResponse::fromMap($this->doRPCRequest('ModifyDBInstanceNetworkType', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDBInstanceNetworkTypeRequest $request
     *
     * @return ModifyDBInstanceNetworkTypeResponse
     */
    public function modifyDBInstanceNetworkType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceNetworkTypeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBInstanceSSLRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyDBInstanceSSLResponse
     */
    public function modifyDBInstanceSSLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBInstanceSSLResponse::fromMap($this->doRPCRequest('ModifyDBInstanceSSL', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDBInstanceSSLRequest $request
     *
     * @return ModifyDBInstanceSSLResponse
     */
    public function modifyDBInstanceSSL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceSSLWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBInstanceSpecRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyDBInstanceSpecResponse
     */
    public function modifyDBInstanceSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBInstanceSpecResponse::fromMap($this->doRPCRequest('ModifyDBInstanceSpec', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDBInstanceSpecRequest $request
     *
     * @return ModifyDBInstanceSpecResponse
     */
    public function modifyDBInstanceSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceSpecWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBInstanceTDERequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyDBInstanceTDEResponse
     */
    public function modifyDBInstanceTDEWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBInstanceTDEResponse::fromMap($this->doRPCRequest('ModifyDBInstanceTDE', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDBInstanceTDERequest $request
     *
     * @return ModifyDBInstanceTDEResponse
     */
    public function modifyDBInstanceTDE($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceTDEWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceAutoRenewalAttributeRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ModifyInstanceAutoRenewalAttributeResponse
     */
    public function modifyInstanceAutoRenewalAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceAutoRenewalAttributeResponse::fromMap($this->doRPCRequest('ModifyInstanceAutoRenewalAttribute', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyInstanceAutoRenewalAttributeRequest $request
     *
     * @return ModifyInstanceAutoRenewalAttributeResponse
     */
    public function modifyInstanceAutoRenewalAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceAutoRenewalAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceVpcAuthModeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyInstanceVpcAuthModeResponse
     */
    public function modifyInstanceVpcAuthModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceVpcAuthModeResponse::fromMap($this->doRPCRequest('ModifyInstanceVpcAuthMode', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyInstanceVpcAuthModeRequest $request
     *
     * @return ModifyInstanceVpcAuthModeResponse
     */
    public function modifyInstanceVpcAuthMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceVpcAuthModeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyNodeSpecRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyNodeSpecResponse
     */
    public function modifyNodeSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyNodeSpecResponse::fromMap($this->doRPCRequest('ModifyNodeSpec', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyNodeSpecRequest $request
     *
     * @return ModifyNodeSpecResponse
     */
    public function modifyNodeSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNodeSpecWithOptions($request, $runtime);
    }

    /**
     * @param ModifyNodeSpecBatchRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyNodeSpecBatchResponse
     */
    public function modifyNodeSpecBatchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyNodeSpecBatchResponse::fromMap($this->doRPCRequest('ModifyNodeSpecBatch', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyNodeSpecBatchRequest $request
     *
     * @return ModifyNodeSpecBatchResponse
     */
    public function modifyNodeSpecBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNodeSpecBatchWithOptions($request, $runtime);
    }

    /**
     * @param ModifyParametersRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyParametersResponse
     */
    public function modifyParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyParametersResponse::fromMap($this->doRPCRequest('ModifyParameters', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyParametersRequest $request
     *
     * @return ModifyParametersResponse
     */
    public function modifyParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyParametersWithOptions($request, $runtime);
    }

    /**
     * @param ModifyResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyResourceGroupResponse
     */
    public function modifyResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyResourceGroupResponse::fromMap($this->doRPCRequest('ModifyResourceGroup', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyResourceGroupRequest $request
     *
     * @return ModifyResourceGroupResponse
     */
    public function modifyResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @param ModifySecurityGroupConfigurationRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifySecurityGroupConfigurationResponse
     */
    public function modifySecurityGroupConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySecurityGroupConfigurationResponse::fromMap($this->doRPCRequest('ModifySecurityGroupConfiguration', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySecurityGroupConfigurationRequest $request
     *
     * @return ModifySecurityGroupConfigurationResponse
     */
    public function modifySecurityGroupConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySecurityGroupConfigurationWithOptions($request, $runtime);
    }

    /**
     * @param ModifySecurityIpsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifySecurityIpsResponse
     */
    public function modifySecurityIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySecurityIpsResponse::fromMap($this->doRPCRequest('ModifySecurityIps', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySecurityIpsRequest $request
     *
     * @return ModifySecurityIpsResponse
     */
    public function modifySecurityIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySecurityIpsWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseNodePrivateNetworkAddressRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ReleaseNodePrivateNetworkAddressResponse
     */
    public function releaseNodePrivateNetworkAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReleaseNodePrivateNetworkAddressResponse::fromMap($this->doRPCRequest('ReleaseNodePrivateNetworkAddress', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReleaseNodePrivateNetworkAddressRequest $request
     *
     * @return ReleaseNodePrivateNetworkAddressResponse
     */
    public function releaseNodePrivateNetworkAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseNodePrivateNetworkAddressWithOptions($request, $runtime);
    }

    /**
     * @param ReleasePublicNetworkAddressRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ReleasePublicNetworkAddressResponse
     */
    public function releasePublicNetworkAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReleasePublicNetworkAddressResponse::fromMap($this->doRPCRequest('ReleasePublicNetworkAddress', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReleasePublicNetworkAddressRequest $request
     *
     * @return ReleasePublicNetworkAddressResponse
     */
    public function releasePublicNetworkAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releasePublicNetworkAddressWithOptions($request, $runtime);
    }

    /**
     * @param RenewDBInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RenewDBInstanceResponse
     */
    public function renewDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RenewDBInstanceResponse::fromMap($this->doRPCRequest('RenewDBInstance', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RenewDBInstanceRequest $request
     *
     * @return RenewDBInstanceResponse
     */
    public function renewDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ResetAccountPasswordRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ResetAccountPasswordResponse
     */
    public function resetAccountPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResetAccountPasswordResponse::fromMap($this->doRPCRequest('ResetAccountPassword', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ResetAccountPasswordRequest $request
     *
     * @return ResetAccountPasswordResponse
     */
    public function resetAccountPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAccountPasswordWithOptions($request, $runtime);
    }

    /**
     * @param RestartDBInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RestartDBInstanceResponse
     */
    public function restartDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RestartDBInstanceResponse::fromMap($this->doRPCRequest('RestartDBInstance', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RestartDBInstanceRequest $request
     *
     * @return RestartDBInstanceResponse
     */
    public function restartDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @param RestoreDBInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RestoreDBInstanceResponse
     */
    public function restoreDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RestoreDBInstanceResponse::fromMap($this->doRPCRequest('RestoreDBInstance', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RestoreDBInstanceRequest $request
     *
     * @return RestoreDBInstanceResponse
     */
    public function restoreDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restoreDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @param SwitchDBInstanceHARequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SwitchDBInstanceHAResponse
     */
    public function switchDBInstanceHAWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SwitchDBInstanceHAResponse::fromMap($this->doRPCRequest('SwitchDBInstanceHA', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SwitchDBInstanceHARequest $request
     *
     * @return SwitchDBInstanceHAResponse
     */
    public function switchDBInstanceHA($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchDBInstanceHAWithOptions($request, $runtime);
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

        return TagResourcesResponse::fromMap($this->doRPCRequest('TagResources', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param TransformToPrePaidRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return TransformToPrePaidResponse
     */
    public function transformToPrePaidWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TransformToPrePaidResponse::fromMap($this->doRPCRequest('TransformToPrePaid', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param TransformToPrePaidRequest $request
     *
     * @return TransformToPrePaidResponse
     */
    public function transformToPrePaid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transformToPrePaidWithOptions($request, $runtime);
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

        return UntagResourcesResponse::fromMap($this->doRPCRequest('UntagResources', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

    /**
     * @param UpgradeDBInstanceEngineVersionRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UpgradeDBInstanceEngineVersionResponse
     */
    public function upgradeDBInstanceEngineVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpgradeDBInstanceEngineVersionResponse::fromMap($this->doRPCRequest('UpgradeDBInstanceEngineVersion', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpgradeDBInstanceEngineVersionRequest $request
     *
     * @return UpgradeDBInstanceEngineVersionResponse
     */
    public function upgradeDBInstanceEngineVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeDBInstanceEngineVersionWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeDBInstanceKernelVersionRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UpgradeDBInstanceKernelVersionResponse
     */
    public function upgradeDBInstanceKernelVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpgradeDBInstanceKernelVersionResponse::fromMap($this->doRPCRequest('UpgradeDBInstanceKernelVersion', '2015-12-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpgradeDBInstanceKernelVersionRequest $request
     *
     * @return UpgradeDBInstanceKernelVersionResponse
     */
    public function upgradeDBInstanceKernelVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeDBInstanceKernelVersionWithOptions($request, $runtime);
    }
}
