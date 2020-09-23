<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\CS\V20151215\Models\AttachInstancesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\AttachInstancesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CancelClusterUpgradeRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CancelClusterUpgradeResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CancelComponentUpgradeRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CancelComponentUpgradeResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateKubernetesTriggerRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateKubernetesTriggerResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteKubernetesTriggerRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteKubernetesTriggerResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeAddonsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeAddonsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAddonsUpgradeStatusRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAddonsUpgradeStatusResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAddonsVersionRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAddonsVersionResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAddonUpgradeStatusRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAddonUpgradeStatusResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAttachScriptsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAttachScriptsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterDetailRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterDetailResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterLogsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterLogsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterResourcesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterResourcesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClustersRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClustersResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClustersV1Request;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClustersV1Response;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterUserKubeconfigRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterUserKubeconfigResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterV2UserKubeconfigRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterV2UserKubeconfigResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeExternalAgentRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeExternalAgentResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeTemplatesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeTemplatesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeUserQuotaResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\GetKubernetesTriggerRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\GetKubernetesTriggerResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\GetUpgradeStatusRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\GetUpgradeStatusResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\InstallClusterAddonsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\InstallClusterAddonsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterConfigurationRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterConfigurationResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterTagsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterTagsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\PauseComponentUpgradeRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\PauseComponentUpgradeResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\RemoveClusterNodesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\RemoveClusterNodesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ResumeComponentUpgradeRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ResumeComponentUpgradeResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ScaleClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ScaleClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ScaleClusterShrinkRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ScaleOutClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ScaleOutClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\UnInstallClusterAddonsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UnInstallClusterAddonsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateTemplateRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateTemplateResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\UpgradeClusterAddonsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UpgradeClusterAddonsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\UpgradeClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UpgradeClusterResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class CS extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-2-pop'          => 'cs.aliyuncs.com',
            'cn-beijing-finance-1'        => 'cs.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'cs.aliyuncs.com',
            'cn-beijing-gov-1'            => 'cs.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'cs.aliyuncs.com',
            'cn-edge-1'                   => 'cs.aliyuncs.com',
            'cn-fujian'                   => 'cs.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'cs.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'cs.aliyuncs.com',
            'cn-hangzhou-finance'         => 'cs.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'cs.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'cs.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'cs.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'cs.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'cs.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'cs.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'cs.aliyuncs.com',
            'cn-qingdao-nebula'           => 'cs.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'cs.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'cs.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'cs.aliyuncs.com',
            'cn-shanghai-inner'           => 'cs.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'cs.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'cs.aliyuncs.com',
            'cn-shenzhen-inner'           => 'cs.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'cs.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'cs.aliyuncs.com',
            'cn-wuhan'                    => 'cs.aliyuncs.com',
            'cn-wulanchabu'               => 'cs.aliyuncs.com',
            'cn-yushanfang'               => 'cs.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'cs.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'cs.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'cs.aliyuncs.com',
            'eu-west-1-oxs'               => 'cs.aliyuncs.com',
            'rus-west-1-pop'              => 'cs.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cs', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
        if (!Utils::isUnset($endpointMap) && !Utils::empty_($endpointMap['regionId'])) {
            return $endpointMap['regionId'];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param string                 $ClusterId
     * @param AttachInstancesRequest $request
     *
     * @return AttachInstancesResponse
     */
    public function attachInstances($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->attachInstancesWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                 $ClusterId
     * @param AttachInstancesRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return AttachInstancesResponse
     */
    public function attachInstancesWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body                       = [];
        $body['instances']          = $request->instances;
        $body['runtime']            = $request->runtime;
        $body['image_id']           = $request->imageId;
        $body['format_disk']        = $request->formatDisk;
        $body['keep_instance_name'] = $request->keepInstanceName;
        $body['cpu_policy']         = $request->cpuPolicy;
        $body['key_pair']           = $request->keyPair;
        $body['password']           = $request->password;
        $body['is_edge_worker']     = $request->isEdgeWorker;
        $body['user_data']          = $request->userData;
        $body['nodepool_id']        = $request->nodepoolId;
        $body['rds_instances']      = $request->rdsInstances;
        $body['tags']               = $request->tags;
        $req                        = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $body,
        ]);

        return AttachInstancesResponse::fromMap($this->doROARequestWithForm('AttachInstances', '2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $ClusterId . '/attach', 'json', $req, $runtime));
    }

    /**
     * @param string                      $ClusterId
     * @param CancelClusterUpgradeRequest $request
     *
     * @return CancelClusterUpgradeResponse
     */
    public function cancelClusterUpgrade($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelClusterUpgradeWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                      $ClusterId
     * @param CancelClusterUpgradeRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CancelClusterUpgradeResponse
     */
    public function cancelClusterUpgradeWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return CancelClusterUpgradeResponse::fromMap($this->doROARequest('CancelClusterUpgrade', '2015-12-15', 'HTTPS', 'POST', 'AK', '/api/v2/clusters/' . $ClusterId . '/upgrade/cancel', 'none', $req, $runtime));
    }

    /**
     * @param string                        $clusterid
     * @param string                        $componentid
     * @param CancelComponentUpgradeRequest $request
     *
     * @return CancelComponentUpgradeResponse
     */
    public function cancelComponentUpgrade($clusterid, $componentid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelComponentUpgradeWithOptions($clusterid, $componentid, $request, $headers, $runtime);
    }

    /**
     * @param string                        $clusterid
     * @param string                        $componentid
     * @param CancelComponentUpgradeRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CancelComponentUpgradeResponse
     */
    public function cancelComponentUpgradeWithOptions($clusterid, $componentid, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return CancelComponentUpgradeResponse::fromMap($this->doROARequest('CancelComponentUpgrade', '2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $clusterid . '/components/{componentid}/cancel', 'none', $req, $runtime));
    }

    /**
     * @param CreateClusterRequest $request
     *
     * @return CreateClusterResponse
     */
    public function createCluster($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createClusterWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateClusterRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateClusterResponse
     */
    public function createClusterWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body                                 = [];
        $body['name']                         = $request->name;
        $body['cluster_type']                 = $request->clusterType;
        $body['region_id']                    = $request->regionId;
        $body['zone_id']                      = $request->zoneId;
        $body['kubernetes_version']           = $request->kubernetesVersion;
        $body['deletion_protection']          = $request->deletionProtection;
        $body['runtime']                      = $request->runtime;
        $body['vpcid']                        = $request->vpcid;
        $body['worker_vswitch_ids']           = $request->workerVswitchIds;
        $body['container_cidr']               = $request->containerCidr;
        $body['service_cidr']                 = $request->serviceCidr;
        $body['node_cidr_mask']               = $request->nodeCidrMask;
        $body['snat_entry']                   = $request->snatEntry;
        $body['endpoint_public_access']       = $request->endpointPublicAccess;
        $body['ssh_flags']                    = $request->sshFlags;
        $body['rds_instances']                = $request->rdsInstances;
        $body['security_group_id']            = $request->securityGroupId;
        $body['is_enterprise_security_group'] = $request->isEnterpriseSecurityGroup;
        $body['proxy_mode']                   = $request->proxyMode;
        $body['tags']                         = $request->tags;
        $body['images_id']                    = $request->imagesId;
        $body['master_instance_charge_type']  = $request->masterInstanceChargeType;
        $body['master_period']                = $request->masterPeriod;
        $body['master_period_unit']           = $request->masterPeriodUnit;
        $body['master_auto_renew']            = $request->masterAutoRenew;
        $body['master_auto_renew_period']     = $request->masterAutoRenewPeriod;
        $body['master_count']                 = $request->masterCount;
        $body['master_vswitch_ids']           = $request->masterVswitchIds;
        $body['master_instance_types']        = $request->masterInstanceTypes;
        $body['master_system_disk_category']  = $request->masterSystemDiskCategory;
        $body['master_system_disk_size']      = $request->masterSystemDiskSize;
        $body['worker_instance_charge_type']  = $request->workerInstanceChargeType;
        $body['worker_period']                = $request->workerPeriod;
        $body['worker_period_unit']           = $request->workerPeriodUnit;
        $body['worker_auto_renew']            = $request->workerAutoRenew;
        $body['worker_auto_renew_period']     = $request->workerAutoRenewPeriod;
        $body['num_of_nodes']                 = $request->numOfNodes;
        $body['worker_instance_types']        = $request->workerInstanceTypes;
        $body['worker_system_disk_category']  = $request->workerSystemDiskCategory;
        $body['worker_system_disk_size']      = $request->workerSystemDiskSize;
        $body['worker_data_disks']            = $request->workerDataDisks;
        $body['os_type']                      = $request->osType;
        $body['key_pair']                     = $request->keyPair;
        $body['login_password']               = $request->loginPassword;
        $body['user_data']                    = $request->userData;
        $body['node_port_range']              = $request->nodePortRange;
        $body['cpu_policy']                   = $request->cpuPolicy;
        $body['taints']                       = $request->taints;
        $body['cloud_monitor_flags']          = $request->cloudMonitorFlags;
        $body['addons']                       = $request->addons;
        $body['platform']                     = $request->platform;
        $body['vswitch_ids']                  = $request->vswitchIds;
        $body['private_zone']                 = $request->privateZone;
        $body['profile']                      = $request->profile;
        $body['pod_vswitch_ids']              = $request->podVswitchIds;
        $body['disable_rollback']             = $request->disableRollback;
        $body['timeout_mins']                 = $request->timeoutMins;
        $req                                  = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $body,
        ]);

        return CreateClusterResponse::fromMap($this->doROARequestWithForm('CreateCluster', '2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters', 'json', $req, $runtime));
    }

    /**
     * @param CreateKubernetesTriggerRequest $request
     *
     * @return CreateKubernetesTriggerResponse
     */
    public function createKubernetesTrigger($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createKubernetesTriggerWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateKubernetesTriggerRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateKubernetesTriggerResponse
     */
    public function createKubernetesTriggerWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body              = [];
        $body['RegionId']  = $request->regionId;
        $body['ClusterId'] = $request->clusterId;
        $body['ProjectId'] = $request->projectId;
        $body['Type']      = $request->type;
        $req               = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $body,
        ]);

        return CreateKubernetesTriggerResponse::fromMap($this->doROARequestWithForm('CreateKubernetesTrigger', '2015-12-15', 'HTTPS', 'POST', 'AK', '/triggers', 'json', $req, $runtime));
    }

    /**
     * @param string               $ClusterId
     * @param DeleteClusterRequest $request
     *
     * @return DeleteClusterResponse
     */
    public function deleteCluster($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteClusterWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string               $ClusterId
     * @param DeleteClusterRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteClusterResponse
     */
    public function deleteClusterWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query                     = [];
        $query['retain_resources'] = $request->retainResources;
        $req                       = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteClusterResponse::fromMap($this->doROARequest('DeleteCluster', '2015-12-15', 'HTTPS', 'DELETE', 'AK', '/clusters/' . $ClusterId . '', 'none', $req, $runtime));
    }

    /**
     * @param string                         $Id
     * @param DeleteKubernetesTriggerRequest $request
     *
     * @return DeleteKubernetesTriggerResponse
     */
    public function deleteKubernetesTrigger($Id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteKubernetesTriggerWithOptions($Id, $request, $headers, $runtime);
    }

    /**
     * @param string                         $Id
     * @param DeleteKubernetesTriggerRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteKubernetesTriggerResponse
     */
    public function deleteKubernetesTriggerWithOptions($Id, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DeleteKubernetesTriggerResponse::fromMap($this->doROARequest('DeleteKubernetesTrigger', '2015-12-15', 'HTTPS', 'DELETE', 'AK', '/triggers/revoke/' . $Id . '', 'none', $req, $runtime));
    }

    /**
     * @param DescribeAddonsRequest $request
     *
     * @return DescribeAddonsResponse
     */
    public function describeAddons($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeAddonsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeAddonsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeAddonsResponse
     */
    public function describeAddonsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['region']       = $request->region;
        $query['cluster_type'] = $request->clusterType;
        $req                   = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeAddonsResponse::fromMap($this->doROARequest('DescribeAddons', '2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters/components/metadata', 'json', $req, $runtime));
    }

    /**
     * @param string                                   $ClusterId
     * @param string                                   $ComponentId
     * @param DescribeClusterAddonUpgradeStatusRequest $request
     *
     * @return DescribeClusterAddonUpgradeStatusResponse
     */
    public function describeClusterAddonUpgradeStatus($ClusterId, $ComponentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterAddonUpgradeStatusWithOptions($ClusterId, $ComponentId, $request, $headers, $runtime);
    }

    /**
     * @param string                                   $ClusterId
     * @param string                                   $ComponentId
     * @param DescribeClusterAddonUpgradeStatusRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeClusterAddonUpgradeStatusResponse
     */
    public function describeClusterAddonUpgradeStatusWithOptions($ClusterId, $ComponentId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeClusterAddonUpgradeStatusResponse::fromMap($this->doROARequest('DescribeClusterAddonUpgradeStatus', '2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters/' . $ClusterId . '/components/{ComponentId}/upgradestatus', 'json', $req, $runtime));
    }

    /**
     * 批量查询集群Addon升级状态
     *
     * @param string                                    $ClusterId
     * @param DescribeClusterAddonsUpgradeStatusRequest $request
     *
     * @return DescribeClusterAddonsUpgradeStatusResponse
     */
    public function describeClusterAddonsUpgradeStatus($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterAddonsUpgradeStatusWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                                    $ClusterId
     * @param DescribeClusterAddonsUpgradeStatusRequest $request
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeClusterAddonsUpgradeStatusResponse
     */
    public function describeClusterAddonsUpgradeStatusWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['componentIds'] = $request->componentIds;
        $req                   = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeClusterAddonsUpgradeStatusResponse::fromMap($this->doROARequest('DescribeClusterAddonsUpgradeStatus', '2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters/[ClusterId]/components/upgradestatus', 'none', $req, $runtime));
    }

    /**
     * @param string                              $ClusterId
     * @param DescribeClusterAddonsVersionRequest $request
     *
     * @return DescribeClusterAddonsVersionResponse
     */
    public function describeClusterAddonsVersion($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterAddonsVersionWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                              $ClusterId
     * @param DescribeClusterAddonsVersionRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeClusterAddonsVersionResponse
     */
    public function describeClusterAddonsVersionWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeClusterAddonsVersionResponse::fromMap($this->doROARequest('DescribeClusterAddonsVersion', '2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters/' . $ClusterId . '/components/version', 'json', $req, $runtime));
    }

    /**
     * @param string                              $ClusterId
     * @param DescribeClusterAttachScriptsRequest $request
     *
     * @return DescribeClusterAttachScriptsResponse
     */
    public function describeClusterAttachScripts($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterAttachScriptsWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                              $ClusterId
     * @param DescribeClusterAttachScriptsRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeClusterAttachScriptsResponse
     */
    public function describeClusterAttachScriptsWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body            = [];
        $body['arch']    = $request->arch;
        $body['options'] = $request->options;
        $req             = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $body,
        ]);

        return DescribeClusterAttachScriptsResponse::fromMap($this->doROARequestWithForm('DescribeClusterAttachScripts', '2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $ClusterId . '/attachscript', 'string', $req, $runtime));
    }

    /**
     * @param string                       $ClusterId
     * @param DescribeClusterDetailRequest $request
     *
     * @return DescribeClusterDetailResponse
     */
    public function describeClusterDetail($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterDetailWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                       $ClusterId
     * @param DescribeClusterDetailRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeClusterDetailResponse
     */
    public function describeClusterDetailWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeClusterDetailResponse::fromMap($this->doROARequest('DescribeClusterDetail', '2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters/' . $ClusterId . '', 'json', $req, $runtime));
    }

    /**
     * @param string                     $ClusterId
     * @param DescribeClusterLogsRequest $request
     *
     * @return DescribeClusterLogsResponse
     */
    public function describeClusterLogs($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterLogsWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                     $ClusterId
     * @param DescribeClusterLogsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeClusterLogsResponse
     */
    public function describeClusterLogsWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeClusterLogsResponse::fromMap($this->doROARequest('DescribeClusterLogs', '2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters/' . $ClusterId . '/logs', 'json', $req, $runtime));
    }

    /**
     * @param string                      $ClusterId
     * @param DescribeClusterNodesRequest $request
     *
     * @return DescribeClusterNodesResponse
     */
    public function describeClusterNodes($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterNodesWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                      $ClusterId
     * @param DescribeClusterNodesRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeClusterNodesResponse
     */
    public function describeClusterNodesWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['pageSize']    = $request->pageSize;
        $query['pageNumber']  = $request->pageNumber;
        $query['nodepool_id'] = $request->nodepoolId;
        $query['state']       = $request->state;
        $req                  = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeClusterNodesResponse::fromMap($this->doROARequest('DescribeClusterNodes', '2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters/' . $ClusterId . '/nodes', 'json', $req, $runtime));
    }

    /**
     * @param string                          $ClusterId
     * @param DescribeClusterResourcesRequest $request
     *
     * @return DescribeClusterResourcesResponse
     */
    public function describeClusterResources($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterResourcesWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                          $ClusterId
     * @param DescribeClusterResourcesRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeClusterResourcesResponse
     */
    public function describeClusterResourcesWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeClusterResourcesResponse::fromMap($this->doROARequest('DescribeClusterResources', '2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters/' . $ClusterId . '/resources', 'array', $req, $runtime));
    }

    /**
     * @param string                               $ClusterId
     * @param DescribeClusterUserKubeconfigRequest $request
     *
     * @return DescribeClusterUserKubeconfigResponse
     */
    public function describeClusterUserKubeconfig($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterUserKubeconfigWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                               $ClusterId
     * @param DescribeClusterUserKubeconfigRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeClusterUserKubeconfigResponse
     */
    public function describeClusterUserKubeconfigWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query                     = [];
        $query['PrivateIpAddress'] = $request->privateIpAddress;
        $req                       = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeClusterUserKubeconfigResponse::fromMap($this->doROARequest('DescribeClusterUserKubeconfig', '2015-12-15', 'HTTPS', 'GET', 'AK', '/k8s/' . $ClusterId . '/user_config', 'json', $req, $runtime));
    }

    /**
     * @param string                                 $ClusterId
     * @param DescribeClusterV2UserKubeconfigRequest $request
     *
     * @return DescribeClusterV2UserKubeconfigResponse
     */
    public function describeClusterV2UserKubeconfig($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterV2UserKubeconfigWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                                 $ClusterId
     * @param DescribeClusterV2UserKubeconfigRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeClusterV2UserKubeconfigResponse
     */
    public function describeClusterV2UserKubeconfigWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query                     = [];
        $query['PrivateIpAddress'] = $request->privateIpAddress;
        $req                       = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeClusterV2UserKubeconfigResponse::fromMap($this->doROARequest('DescribeClusterV2UserKubeconfig', '2015-12-15', 'HTTPS', 'GET', 'AK', '/api/v2/k8s/' . $ClusterId . '/user_config', 'json', $req, $runtime));
    }

    /**
     * @param DescribeClustersRequest $request
     *
     * @return DescribeClustersResponse
     */
    public function describeClusters($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClustersWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeClustersRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeClustersResponse
     */
    public function describeClustersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['name']        = $request->name;
        $query['clusterType'] = $request->clusterType;
        $req                  = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeClustersResponse::fromMap($this->doROARequest('DescribeClusters', '2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters', 'array', $req, $runtime));
    }

    /**
     * @param DescribeClustersV1Request $request
     *
     * @return DescribeClustersV1Response
     */
    public function describeClustersV1($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClustersV1WithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeClustersV1Request $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeClustersV1Response
     */
    public function describeClustersV1WithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['Name']        = $request->name;
        $query['ClusterType'] = $request->clusterType;
        $query['page_size']   = $request->pageSize;
        $query['page_number'] = $request->pageNumber;
        $req                  = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeClustersV1Response::fromMap($this->doROARequest('DescribeClustersV1', '2015-12-15', 'HTTPS', 'GET', 'AK', '/api/v1/clusters', 'json', $req, $runtime));
    }

    /**
     * @param string                       $ClusterId
     * @param DescribeExternalAgentRequest $request
     *
     * @return DescribeExternalAgentResponse
     */
    public function describeExternalAgent($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeExternalAgentWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                       $ClusterId
     * @param DescribeExternalAgentRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeExternalAgentResponse
     */
    public function describeExternalAgentWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeExternalAgentResponse::fromMap($this->doROARequest('DescribeExternalAgent', '2015-12-15', 'HTTPS', 'GET', 'AK', '/k8s/' . $ClusterId . '/external/agent/deployment', 'json', $req, $runtime));
    }

    /**
     * @param DescribeTemplatesRequest $request
     *
     * @return DescribeTemplatesResponse
     */
    public function describeTemplates($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeTemplatesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeTemplatesRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeTemplatesResponse
     */
    public function describeTemplatesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['template_type'] = $request->templateType;
        $req                    = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeTemplatesResponse::fromMap($this->doROARequest('DescribeTemplates', '2015-12-15', 'HTTPS', 'GET', 'AK', '/templates', 'json', $req, $runtime));
    }

    /**
     * @return DescribeUserQuotaResponse
     */
    public function describeUserQuota()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeUserQuotaWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeUserQuotaResponse
     */
    public function describeUserQuotaWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeUserQuotaResponse::fromMap($this->doROARequest('DescribeUserQuota', '2015-12-15', 'HTTPS', 'GET', 'AK', '/quota', 'json', $req, $runtime));
    }

    /**
     * @param string                      $ClusterId
     * @param GetKubernetesTriggerRequest $request
     *
     * @return GetKubernetesTriggerResponse
     */
    public function getKubernetesTrigger($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getKubernetesTriggerWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                      $ClusterId
     * @param GetKubernetesTriggerRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetKubernetesTriggerResponse
     */
    public function getKubernetesTriggerWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query              = [];
        $query['Namespace'] = $request->namespace;
        $query['Type']      = $request->type;
        $query['Name']      = $request->name;
        $req                = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetKubernetesTriggerResponse::fromMap($this->doROARequest('GetKubernetesTrigger', '2015-12-15', 'HTTPS', 'GET', 'AK', '/triggers/' . $ClusterId . '', 'json', $req, $runtime));
    }

    /**
     * @param string                  $ClusterId
     * @param GetUpgradeStatusRequest $request
     *
     * @return GetUpgradeStatusResponse
     */
    public function getUpgradeStatus($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUpgradeStatusWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                  $ClusterId
     * @param GetUpgradeStatusRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetUpgradeStatusResponse
     */
    public function getUpgradeStatusWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetUpgradeStatusResponse::fromMap($this->doROARequest('GetUpgradeStatus', '2015-12-15', 'HTTPS', 'GET', 'AK', '/api/v2/clusters/' . $ClusterId . '/upgrade/status', 'json', $req, $runtime));
    }

    /**
     * @param string                      $ClusterId
     * @param InstallClusterAddonsRequest $request
     *
     * @return InstallClusterAddonsResponse
     */
    public function installClusterAddons($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->installClusterAddonsWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                      $ClusterId
     * @param InstallClusterAddonsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return InstallClusterAddonsResponse
     */
    public function installClusterAddonsWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::toArray($request->body),
        ]);

        return InstallClusterAddonsResponse::fromMap($this->doROARequest('InstallClusterAddons', '2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $ClusterId . '/components/install', 'none', $req, $runtime));
    }

    /**
     * @param string               $ClusterId
     * @param ModifyClusterRequest $request
     *
     * @return ModifyClusterResponse
     */
    public function modifyCluster($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyClusterWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string               $ClusterId
     * @param ModifyClusterRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ModifyClusterResponse
     */
    public function modifyClusterWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body                             = [];
        $body['deletion_protection']      = $request->deletionProtection;
        $body['ingress_loadbalancer_id']  = $request->ingressLoadbalancerId;
        $body['api_server_eip']           = $request->apiServerEip;
        $body['api_server_eip_id']        = $request->apiServerEipId;
        $body['resource_group_id']        = $request->resourceGroupId;
        $body['ingress_domain_rebinding'] = $request->ingressDomainRebinding;
        $req                              = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $body,
        ]);

        return ModifyClusterResponse::fromMap($this->doROARequestWithForm('ModifyCluster', '2015-12-15', 'HTTPS', 'PUT', 'AK', '/api/v2/clusters/' . $ClusterId . '', 'json', $req, $runtime));
    }

    /**
     * @param string                            $ClusterId
     * @param ModifyClusterConfigurationRequest $request
     *
     * @return ModifyClusterConfigurationResponse
     */
    public function modifyClusterConfiguration($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyClusterConfigurationWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                            $ClusterId
     * @param ModifyClusterConfigurationRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyClusterConfigurationResponse
     */
    public function modifyClusterConfigurationWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body                     = [];
        $body['customize_config'] = $request->customizeConfig;
        $req                      = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $body,
        ]);

        return ModifyClusterConfigurationResponse::fromMap($this->doROARequestWithForm('ModifyClusterConfiguration', '2015-12-15', 'HTTPS', 'PUT', 'AK', '/clusters/' . $ClusterId . '/configuration', 'none', $req, $runtime));
    }

    /**
     * @param string                   $ClusterId
     * @param ModifyClusterTagsRequest $request
     *
     * @return ModifyClusterTagsResponse
     */
    public function modifyClusterTags($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyClusterTagsWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                   $ClusterId
     * @param ModifyClusterTagsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyClusterTagsResponse
     */
    public function modifyClusterTagsWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::toArray($request->body),
        ]);

        return ModifyClusterTagsResponse::fromMap($this->doROARequest('ModifyClusterTags', '2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $ClusterId . '/tags', 'none', $req, $runtime));
    }

    /**
     * @param string                       $clusterid
     * @param string                       $componentid
     * @param PauseComponentUpgradeRequest $request
     *
     * @return PauseComponentUpgradeResponse
     */
    public function pauseComponentUpgrade($clusterid, $componentid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pauseComponentUpgradeWithOptions($clusterid, $componentid, $request, $headers, $runtime);
    }

    /**
     * @param string                       $clusterid
     * @param string                       $componentid
     * @param PauseComponentUpgradeRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return PauseComponentUpgradeResponse
     */
    public function pauseComponentUpgradeWithOptions($clusterid, $componentid, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return PauseComponentUpgradeResponse::fromMap($this->doROARequest('PauseComponentUpgrade', '2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $clusterid . '/components/{componentid}/pause', 'none', $req, $runtime));
    }

    /**
     * @param string                    $ClusterId
     * @param RemoveClusterNodesRequest $request
     *
     * @return RemoveClusterNodesResponse
     */
    public function removeClusterNodes($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeClusterNodesWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                    $ClusterId
     * @param RemoveClusterNodesRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return RemoveClusterNodesResponse
     */
    public function removeClusterNodesWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body                 = [];
        $body['release_node'] = $request->releaseNode;
        $body['drain_node']   = $request->drainNode;
        $body['nodes']        = $request->nodes;
        $req                  = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $body,
        ]);

        return RemoveClusterNodesResponse::fromMap($this->doROARequestWithForm('RemoveClusterNodes', '2015-12-15', 'HTTPS', 'POST', 'AK', '/api/v2/clusters/' . $ClusterId . '/nodes/remove', 'none', $req, $runtime));
    }

    /**
     * @param string                        $clusterid
     * @param string                        $componentid
     * @param ResumeComponentUpgradeRequest $request
     *
     * @return ResumeComponentUpgradeResponse
     */
    public function resumeComponentUpgrade($clusterid, $componentid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resumeComponentUpgradeWithOptions($clusterid, $componentid, $request, $headers, $runtime);
    }

    /**
     * @param string                        $clusterid
     * @param string                        $componentid
     * @param ResumeComponentUpgradeRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ResumeComponentUpgradeResponse
     */
    public function resumeComponentUpgradeWithOptions($clusterid, $componentid, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ResumeComponentUpgradeResponse::fromMap($this->doROARequest('ResumeComponentUpgrade', '2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $clusterid . '/components/{componentid}/resume', 'none', $req, $runtime));
    }

    /**
     * @param string              $ClusterId
     * @param ScaleClusterRequest $request
     *
     * @return ScaleClusterResponse
     */
    public function scaleCluster($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->scaleClusterWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string              $ClusterId
     * @param ScaleClusterRequest $tmpReq
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ScaleClusterResponse
     */
    public function scaleClusterWithOptions($ClusterId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ScaleClusterShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->taints)) {
            $request->taintsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->taints, 'taints', 'json');
        }
        $body                                = [];
        $body['count']                       = $request->count;
        $body['key_pair']                    = $request->keyPair;
        $body['login_password']              = $request->loginPassword;
        $body['worker_data_disk']            = $request->workerDataDisk;
        $body['worker_instance_types']       = $request->workerInstanceTypes;
        $body['worker_instance_charge_type'] = $request->workerInstanceChargeType;
        $body['worker_period']               = $request->workerPeriod;
        $body['worker_period_unit']          = $request->workerPeriodUnit;
        $body['worker_auto_renew']           = $request->workerAutoRenew;
        $body['worker_auto_renew_period']    = $request->workerAutoRenewPeriod;
        $body['worker_system_disk_category'] = $request->workerSystemDiskCategory;
        $body['worker_system_disk_size']     = $request->workerSystemDiskSize;
        $body['cloud_monitor_flags']         = $request->cloudMonitorFlags;
        $body['cpu_policy']                  = $request->cpuPolicy;
        $body['disable_rollback']            = $request->disableRollback;
        $body['vswitch_ids']                 = $request->vswitchIds;
        $body['worker_data_disks']           = $request->workerDataDisks;
        $body['tags']                        = $request->tags;
        $body['taints']                      = $request->taintsShrink;
        $req                                 = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $body,
        ]);

        return ScaleClusterResponse::fromMap($this->doROARequestWithForm('ScaleCluster', '2015-12-15', 'HTTPS', 'PUT', 'AK', '/clusters/' . $ClusterId . '', 'json', $req, $runtime));
    }

    /**
     * @param string                 $ClusterId
     * @param ScaleOutClusterRequest $request
     *
     * @return ScaleOutClusterResponse
     */
    public function scaleOutCluster($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->scaleOutClusterWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                 $ClusterId
     * @param ScaleOutClusterRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ScaleOutClusterResponse
     */
    public function scaleOutClusterWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body                                = [];
        $body['count']                       = $request->count;
        $body['worker_instance_charge_type'] = $request->workerInstanceChargeType;
        $body['worker_period']               = $request->workerPeriod;
        $body['worker_period_unit']          = $request->workerPeriodUnit;
        $body['worker_auto_renew']           = $request->workerAutoRenew;
        $body['worker_auto_renew_period']    = $request->workerAutoRenewPeriod;
        $body['worker_system_disk_category'] = $request->workerSystemDiskCategory;
        $body['worker_system_disk_size']     = $request->workerSystemDiskSize;
        $body['worker_data_disk']            = $request->workerDataDisk;
        $body['key_pair']                    = $request->keyPair;
        $body['login_password']              = $request->loginPassword;
        $body['cloud_monitor_flags']         = $request->cloudMonitorFlags;
        $body['cpu_policy']                  = $request->cpuPolicy;
        $body['disable_rollback']            = $request->disableRollback;
        $body['image_id']                    = $request->imageId;
        $body['user_data']                   = $request->userData;
        $body['runtime']                     = $request->runtime;
        $body['vswitch_ids']                 = $request->vswitchIds;
        $body['worker_instance_types']       = $request->workerInstanceTypes;
        $body['rds_instances']               = $request->rdsInstances;
        $body['worker_data_disks']           = $request->workerDataDisks;
        $body['tags']                        = $request->tags;
        $body['taints']                      = $request->taints;
        $req                                 = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $body,
        ]);

        return ScaleOutClusterResponse::fromMap($this->doROARequestWithForm('ScaleOutCluster', '2015-12-15', 'HTTPS', 'POST', 'AK', '/api/v2/clusters/' . $ClusterId . '', 'json', $req, $runtime));
    }

    /**
     * @param string                        $ClusterId
     * @param UnInstallClusterAddonsRequest $request
     *
     * @return UnInstallClusterAddonsResponse
     */
    public function unInstallClusterAddons($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->unInstallClusterAddonsWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                        $ClusterId
     * @param UnInstallClusterAddonsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UnInstallClusterAddonsResponse
     */
    public function unInstallClusterAddonsWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body           = [];
        $body['addons'] = $request->addons;
        $req            = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $body,
        ]);

        return UnInstallClusterAddonsResponse::fromMap($this->doROARequestWithForm('UnInstallClusterAddons', '2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $ClusterId . '/components/uninstall', 'none', $req, $runtime));
    }

    /**
     * @param string                $TemplateId
     * @param UpdateTemplateRequest $request
     *
     * @return UpdateTemplateResponse
     */
    public function updateTemplate($TemplateId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTemplateWithOptions($TemplateId, $request, $headers, $runtime);
    }

    /**
     * @param string                $TemplateId
     * @param UpdateTemplateRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateTemplateResponse
     */
    public function updateTemplateWithOptions($TemplateId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body                  = [];
        $body['name']          = $request->name;
        $body['template']      = $request->template;
        $body['tags']          = $request->tags;
        $body['description']   = $request->description;
        $body['template_type'] = $request->templateType;
        $req                   = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $body,
        ]);

        return UpdateTemplateResponse::fromMap($this->doROARequestWithForm('UpdateTemplate', '2015-12-15', 'HTTPS', 'PUT', 'AK', '/templates/' . $TemplateId . '', 'none', $req, $runtime));
    }

    /**
     * @param string                $ClusterId
     * @param UpgradeClusterRequest $request
     *
     * @return UpgradeClusterResponse
     */
    public function upgradeCluster($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->upgradeClusterWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                $ClusterId
     * @param UpgradeClusterRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpgradeClusterResponse
     */
    public function upgradeClusterWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body                   = [];
        $body['component_name'] = $request->componentName;
        $body['version']        = $request->version;
        $body['next_version']   = $request->nextVersion;
        $req                    = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $body,
        ]);

        return UpgradeClusterResponse::fromMap($this->doROARequestWithForm('UpgradeCluster', '2015-12-15', 'HTTPS', 'POST', 'AK', '/api/v2/clusters/' . $ClusterId . '/upgrade', 'none', $req, $runtime));
    }

    /**
     * @param string                      $ClusterId
     * @param UpgradeClusterAddonsRequest $request
     *
     * @return UpgradeClusterAddonsResponse
     */
    public function upgradeClusterAddons($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->upgradeClusterAddonsWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                      $ClusterId
     * @param UpgradeClusterAddonsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpgradeClusterAddonsResponse
     */
    public function upgradeClusterAddonsWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::toArray($request->body),
        ]);

        return UpgradeClusterAddonsResponse::fromMap($this->doROARequest('UpgradeClusterAddons', '2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $ClusterId . '/components/upgrade', 'none', $req, $runtime));
    }
}
