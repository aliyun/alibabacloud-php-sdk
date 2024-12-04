<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\EHPC\V20240730\Models\AttachSharedStoragesRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\AttachSharedStoragesResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\AttachSharedStoragesShrinkRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\CreateClusterRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\CreateClusterResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\CreateClusterShrinkRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\CreateJobRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\CreateJobResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\CreateJobShrinkRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\CreateNodesRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\CreateNodesResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\CreateNodesShrinkRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\CreateQueueRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\CreateQueueResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\CreateQueueShrinkRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\CreateUsersRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\CreateUsersResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\CreateUsersShrinkRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\DeleteClusterRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\DeleteClusterResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\DeleteNodesRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\DeleteNodesResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\DeleteNodesShrinkRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\DeleteQueuesRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\DeleteQueuesResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\DeleteQueuesShrinkRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\DeleteUsersRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\DeleteUsersResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\DeleteUsersShrinkRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\DescribeAddonTemplateRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\DescribeAddonTemplateResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\DetachSharedStoragesRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\DetachSharedStoragesResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\DetachSharedStoragesShrinkRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\GetAddonRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\GetAddonResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\GetClusterRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\GetClusterResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\GetCommonLogDetailRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\GetCommonLogDetailResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\GetJobLogRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\GetJobLogResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\GetJobRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\GetJobResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\GetQueueRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\GetQueueResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\InstallAddonRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\InstallAddonResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\InstallSoftwaresRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\InstallSoftwaresResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\InstallSoftwaresShrinkRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListAddonsRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListAddonsResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListAddonsShrinkRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListAddonTemplatesRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListAddonTemplatesResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListAvailableFileSystemsRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListAvailableFileSystemsResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListAvailableImagesRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListAvailableImagesResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListAvailableImagesShrinkRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListClustersRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListClustersResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListClustersShrinkRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListCommonLogsRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListCommonLogsResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListCommonLogsShrinkRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListInstalledSoftwaresRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListInstalledSoftwaresResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListJobsRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListJobsResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListJobsShrinkRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListNodesRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListNodesResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListNodesShrinkRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListQueuesRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListQueuesResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListQueuesShrinkRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListSharedStoragesRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListSharedStoragesResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListSoftwaresRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListSoftwaresResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListUsersRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListUsersResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\StopJobsRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\StopJobsResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\StopJobsShrinkRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\UnInstallAddonRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\UnInstallAddonResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\UninstallSoftwaresRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\UninstallSoftwaresResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\UninstallSoftwaresShrinkRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\UpdateClusterRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\UpdateClusterResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\UpdateClusterShrinkRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\UpdateNodesRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\UpdateNodesResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\UpdateNodesShrinkRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\UpdateQueueRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\UpdateQueueResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\UpdateQueueShrinkRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\UpdateUserRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\UpdateUserResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class EHPC extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ehpc', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary Attaches shared storage to an Elastic High Performance Computing (E-HPC) cluster.
     *  *
     * @description ## [](#)Usage notes
     * When you call this operation, take note of the following items:
     * *   The file system that you want to attach must be created in advance in the same virtual private cloud (VPC) as the destination cluster. For more information, see [Create a file system](https://help.aliyun.com/document_detail/27530.html) and [Manage mount targets](https://help.aliyun.com/document_detail/27531.html).
     * *   E-HPC clusters support Apsara File Storage NAS file systems.
     *  *
     * @param AttachSharedStoragesRequest $tmpReq  AttachSharedStoragesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachSharedStoragesResponse AttachSharedStoragesResponse
     */
    public function attachSharedStoragesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AttachSharedStoragesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->sharedStorages)) {
            $request->sharedStoragesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sharedStorages, 'SharedStorages', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->sharedStoragesShrink)) {
            $query['SharedStorages'] = $request->sharedStoragesShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachSharedStorages',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachSharedStoragesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Attaches shared storage to an Elastic High Performance Computing (E-HPC) cluster.
     *  *
     * @description ## [](#)Usage notes
     * When you call this operation, take note of the following items:
     * *   The file system that you want to attach must be created in advance in the same virtual private cloud (VPC) as the destination cluster. For more information, see [Create a file system](https://help.aliyun.com/document_detail/27530.html) and [Manage mount targets](https://help.aliyun.com/document_detail/27531.html).
     * *   E-HPC clusters support Apsara File Storage NAS file systems.
     *  *
     * @param AttachSharedStoragesRequest $request AttachSharedStoragesRequest
     *
     * @return AttachSharedStoragesResponse AttachSharedStoragesResponse
     */
    public function attachSharedStorages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachSharedStoragesWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a pay-as-you-go or subscription Elastic High Performance Computing (E-HPC) cluster.
     *  *
     * @description ## [](#)Usage notes
     * Before you call this operation, make sure that you are familiar with the billing and pricing of E-HPC. For more information, see [Overview](https://help.aliyun.com/document_detail/2842985.html).
     *  *
     * @param CreateClusterRequest $tmpReq  CreateClusterRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateClusterResponse CreateClusterResponse
     */
    public function createClusterWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateClusterShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->additionalPackages)) {
            $request->additionalPackagesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->additionalPackages, 'AdditionalPackages', 'json');
        }
        if (!Utils::isUnset($tmpReq->addons)) {
            $request->addonsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->addons, 'Addons', 'json');
        }
        if (!Utils::isUnset($tmpReq->clusterCredentials)) {
            $request->clusterCredentialsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->clusterCredentials, 'ClusterCredentials', 'json');
        }
        if (!Utils::isUnset($tmpReq->clusterCustomConfiguration)) {
            $request->clusterCustomConfigurationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->clusterCustomConfiguration, 'ClusterCustomConfiguration', 'json');
        }
        if (!Utils::isUnset($tmpReq->manager)) {
            $request->managerShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->manager, 'Manager', 'json');
        }
        if (!Utils::isUnset($tmpReq->queues)) {
            $request->queuesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->queues, 'Queues', 'json');
        }
        if (!Utils::isUnset($tmpReq->sharedStorages)) {
            $request->sharedStoragesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sharedStorages, 'SharedStorages', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->additionalPackagesShrink)) {
            $query['AdditionalPackages'] = $request->additionalPackagesShrink;
        }
        if (!Utils::isUnset($request->addonsShrink)) {
            $query['Addons'] = $request->addonsShrink;
        }
        if (!Utils::isUnset($request->clientVersion)) {
            $query['ClientVersion'] = $request->clientVersion;
        }
        if (!Utils::isUnset($request->clusterCategory)) {
            $query['ClusterCategory'] = $request->clusterCategory;
        }
        if (!Utils::isUnset($request->clusterCredentialsShrink)) {
            $query['ClusterCredentials'] = $request->clusterCredentialsShrink;
        }
        if (!Utils::isUnset($request->clusterCustomConfigurationShrink)) {
            $query['ClusterCustomConfiguration'] = $request->clusterCustomConfigurationShrink;
        }
        if (!Utils::isUnset($request->clusterDescription)) {
            $query['ClusterDescription'] = $request->clusterDescription;
        }
        if (!Utils::isUnset($request->clusterMode)) {
            $query['ClusterMode'] = $request->clusterMode;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->clusterVSwitchId)) {
            $query['ClusterVSwitchId'] = $request->clusterVSwitchId;
        }
        if (!Utils::isUnset($request->clusterVpcId)) {
            $query['ClusterVpcId'] = $request->clusterVpcId;
        }
        if (!Utils::isUnset($request->deletionProtection)) {
            $query['DeletionProtection'] = $request->deletionProtection;
        }
        if (!Utils::isUnset($request->isEnterpriseSecurityGroup)) {
            $query['IsEnterpriseSecurityGroup'] = $request->isEnterpriseSecurityGroup;
        }
        if (!Utils::isUnset($request->managerShrink)) {
            $query['Manager'] = $request->managerShrink;
        }
        if (!Utils::isUnset($request->maxCoreCount)) {
            $query['MaxCoreCount'] = $request->maxCoreCount;
        }
        if (!Utils::isUnset($request->maxCount)) {
            $query['MaxCount'] = $request->maxCount;
        }
        if (!Utils::isUnset($request->queuesShrink)) {
            $query['Queues'] = $request->queuesShrink;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->sharedStoragesShrink)) {
            $query['SharedStorages'] = $request->sharedStoragesShrink;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCluster',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a pay-as-you-go or subscription Elastic High Performance Computing (E-HPC) cluster.
     *  *
     * @description ## [](#)Usage notes
     * Before you call this operation, make sure that you are familiar with the billing and pricing of E-HPC. For more information, see [Overview](https://help.aliyun.com/document_detail/2842985.html).
     *  *
     * @param CreateClusterRequest $request CreateClusterRequest
     *
     * @return CreateClusterResponse CreateClusterResponse
     */
    public function createCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a job for a cluster.
     *  *
     * @description Before you call this operation, make sure that you understand the billing and [pricing](https://www.aliyun.com/price/product#/ecs/detail) of E-HPC.
     *  *
     * @param CreateJobRequest $tmpReq  CreateJobRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateJobResponse CreateJobResponse
     */
    public function createJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->jobSpec)) {
            $request->jobSpecShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->jobSpec, 'JobSpec', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->jobName)) {
            $query['JobName'] = $request->jobName;
        }
        if (!Utils::isUnset($request->jobSpecShrink)) {
            $query['JobSpec'] = $request->jobSpecShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateJob',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a job for a cluster.
     *  *
     * @description Before you call this operation, make sure that you understand the billing and [pricing](https://www.aliyun.com/price/product#/ecs/detail) of E-HPC.
     *  *
     * @param CreateJobRequest $request CreateJobRequest
     *
     * @return CreateJobResponse CreateJobResponse
     */
    public function createJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createJobWithOptions($request, $runtime);
    }

    /**
     * @summary Creates compute nodes for an Elastic High Performance Computing (E-HPC) cluster.
     *  *
     * @description ## [](#)
     *  *
     * @param CreateNodesRequest $tmpReq  CreateNodesRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateNodesResponse CreateNodesResponse
     */
    public function createNodesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateNodesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->computeNode)) {
            $request->computeNodeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->computeNode, 'ComputeNode', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->computeNodeShrink)) {
            $query['ComputeNode'] = $request->computeNodeShrink;
        }
        if (!Utils::isUnset($request->count)) {
            $query['Count'] = $request->count;
        }
        if (!Utils::isUnset($request->deploymentSetId)) {
            $query['DeploymentSetId'] = $request->deploymentSetId;
        }
        if (!Utils::isUnset($request->HPCInterConnect)) {
            $query['HPCInterConnect'] = $request->HPCInterConnect;
        }
        if (!Utils::isUnset($request->hostnamePrefix)) {
            $query['HostnamePrefix'] = $request->hostnamePrefix;
        }
        if (!Utils::isUnset($request->hostnameSuffix)) {
            $query['HostnameSuffix'] = $request->hostnameSuffix;
        }
        if (!Utils::isUnset($request->keepAlive)) {
            $query['KeepAlive'] = $request->keepAlive;
        }
        if (!Utils::isUnset($request->queueName)) {
            $query['QueueName'] = $request->queueName;
        }
        if (!Utils::isUnset($request->ramRole)) {
            $query['RamRole'] = $request->ramRole;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateNodes',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates compute nodes for an Elastic High Performance Computing (E-HPC) cluster.
     *  *
     * @description ## [](#)
     *  *
     * @param CreateNodesRequest $request CreateNodesRequest
     *
     * @return CreateNodesResponse CreateNodesResponse
     */
    public function createNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNodesWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a queue for an Enterprise High Performance Computing (E-HPC) cluster.
     *  *
     * @param CreateQueueRequest $tmpReq  CreateQueueRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateQueueResponse CreateQueueResponse
     */
    public function createQueueWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateQueueShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->queue)) {
            $request->queueShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->queue, 'Queue', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->queueShrink)) {
            $query['Queue'] = $request->queueShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateQueue',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a queue for an Enterprise High Performance Computing (E-HPC) cluster.
     *  *
     * @param CreateQueueRequest $request CreateQueueRequest
     *
     * @return CreateQueueResponse CreateQueueResponse
     */
    public function createQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQueueWithOptions($request, $runtime);
    }

    /**
     * @summary Adds users to an Elastic High Performance Computing (E-HPC) cluster.
     *  *
     * @param CreateUsersRequest $tmpReq  CreateUsersRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateUsersResponse CreateUsersResponse
     */
    public function createUsersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateUsersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->user)) {
            $request->userShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->user, 'User', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->userShrink)) {
            $query['User'] = $request->userShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateUsers',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds users to an Elastic High Performance Computing (E-HPC) cluster.
     *  *
     * @param CreateUsersRequest $request CreateUsersRequest
     *
     * @return CreateUsersResponse CreateUsersResponse
     */
    public function createUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUsersWithOptions($request, $runtime);
    }

    /**
     * @summary Releases an Enterprise High Performance Computing (E-HPC) cluster.
     *  *
     * @description ## [](#)Usage notes
     * Make sure that data of the cluster to be deleted is backed up before you call this operation.
     * > After a cluster is released, you cannot restore the data stored in the cluster. Exercise caution when you release a cluster.
     *  *
     * @param DeleteClusterRequest $request DeleteClusterRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteClusterResponse DeleteClusterResponse
     */
    public function deleteClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCluster',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Releases an Enterprise High Performance Computing (E-HPC) cluster.
     *  *
     * @description ## [](#)Usage notes
     * Make sure that data of the cluster to be deleted is backed up before you call this operation.
     * > After a cluster is released, you cannot restore the data stored in the cluster. Exercise caution when you release a cluster.
     *  *
     * @param DeleteClusterRequest $request DeleteClusterRequest
     *
     * @return DeleteClusterResponse DeleteClusterResponse
     */
    public function deleteCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes compute nodes from an Enterprise High Performance Computing (E-HPC) cluster at a time.
     *  *
     * @description ## [](#)Usage notes
     * Before you delete a compute node, we recommend that you export all job data from the node to prevent data loss.
     *  *
     * @param DeleteNodesRequest $tmpReq  DeleteNodesRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteNodesResponse DeleteNodesResponse
     */
    public function deleteNodesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteNodesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->instanceIds)) {
            $request->instanceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->instanceIdsShrink)) {
            $query['InstanceIds'] = $request->instanceIdsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteNodes',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes compute nodes from an Enterprise High Performance Computing (E-HPC) cluster at a time.
     *  *
     * @description ## [](#)Usage notes
     * Before you delete a compute node, we recommend that you export all job data from the node to prevent data loss.
     *  *
     * @param DeleteNodesRequest $request DeleteNodesRequest
     *
     * @return DeleteNodesResponse DeleteNodesResponse
     */
    public function deleteNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNodesWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes queues from an Enterprise High Performance Computing (E-HPC) cluster.
     *  *
     * @description ## [](#)Usage notes
     * Before you delete a queue, you must delete all compute nodes in the queue.
     *  *
     * @param DeleteQueuesRequest $tmpReq  DeleteQueuesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteQueuesResponse DeleteQueuesResponse
     */
    public function deleteQueuesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteQueuesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->queueNames)) {
            $request->queueNamesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->queueNames, 'QueueNames', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->queueNamesShrink)) {
            $query['QueueNames'] = $request->queueNamesShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteQueues',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteQueuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes queues from an Enterprise High Performance Computing (E-HPC) cluster.
     *  *
     * @description ## [](#)Usage notes
     * Before you delete a queue, you must delete all compute nodes in the queue.
     *  *
     * @param DeleteQueuesRequest $request DeleteQueuesRequest
     *
     * @return DeleteQueuesResponse DeleteQueuesResponse
     */
    public function deleteQueues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQueuesWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes users from a cluster.
     *  *
     * @param DeleteUsersRequest $tmpReq  DeleteUsersRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteUsersResponse DeleteUsersResponse
     */
    public function deleteUsersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteUsersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->user)) {
            $request->userShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->user, 'User', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUsers',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes users from a cluster.
     *  *
     * @param DeleteUsersRequest $request DeleteUsersRequest
     *
     * @return DeleteUsersResponse DeleteUsersResponse
     */
    public function deleteUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUsersWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of an addon template.
     *  *
     * @param DescribeAddonTemplateRequest $request DescribeAddonTemplateRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAddonTemplateResponse DescribeAddonTemplateResponse
     */
    public function describeAddonTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addonName)) {
            $query['AddonName'] = $request->addonName;
        }
        if (!Utils::isUnset($request->addonVersion)) {
            $query['AddonVersion'] = $request->addonVersion;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAddonTemplate',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAddonTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of an addon template.
     *  *
     * @param DescribeAddonTemplateRequest $request DescribeAddonTemplateRequest
     *
     * @return DescribeAddonTemplateResponse DescribeAddonTemplateResponse
     */
    public function describeAddonTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAddonTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Unmounts shared storage from the mount directory of a cluster.
     *  *
     * @param DetachSharedStoragesRequest $tmpReq  DetachSharedStoragesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachSharedStoragesResponse DetachSharedStoragesResponse
     */
    public function detachSharedStoragesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DetachSharedStoragesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->sharedStorages)) {
            $request->sharedStoragesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sharedStorages, 'SharedStorages', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->sharedStoragesShrink)) {
            $query['SharedStorages'] = $request->sharedStoragesShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachSharedStorages',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachSharedStoragesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Unmounts shared storage from the mount directory of a cluster.
     *  *
     * @param DetachSharedStoragesRequest $request DetachSharedStoragesRequest
     *
     * @return DetachSharedStoragesResponse DetachSharedStoragesResponse
     */
    public function detachSharedStorages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachSharedStoragesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of an installed addon.
     *  *
     * @param GetAddonRequest $request GetAddonRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAddonResponse GetAddonResponse
     */
    public function getAddonWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addonId)) {
            $query['AddonId'] = $request->addonId;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAddon',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAddonResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of an installed addon.
     *  *
     * @param GetAddonRequest $request GetAddonRequest
     *
     * @return GetAddonResponse GetAddonResponse
     */
    public function getAddon($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAddonWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about an Elastic High Performance Computing (E-HPC) cluster.
     *  *
     * @param GetClusterRequest $request GetClusterRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetClusterResponse GetClusterResponse
     */
    public function getClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCluster',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries information about an Elastic High Performance Computing (E-HPC) cluster.
     *  *
     * @param GetClusterRequest $request GetClusterRequest
     *
     * @return GetClusterResponse GetClusterResponse
     */
    public function getCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Query logs based on a request ID. Logs for specific actions can be queried thanks to an Action-Stage-Method three-layer log splitting structure.
     *  *
     * @param GetCommonLogDetailRequest $request GetCommonLogDetailRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCommonLogDetailResponse GetCommonLogDetailResponse
     */
    public function getCommonLogDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->from)) {
            $query['From'] = $request->from;
        }
        if (!Utils::isUnset($request->hiddenProcess)) {
            $query['HiddenProcess'] = $request->hiddenProcess;
        }
        if (!Utils::isUnset($request->logRequestId)) {
            $query['LogRequestId'] = $request->logRequestId;
        }
        if (!Utils::isUnset($request->to)) {
            $query['To'] = $request->to;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCommonLogDetail',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCommonLogDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Query logs based on a request ID. Logs for specific actions can be queried thanks to an Action-Stage-Method three-layer log splitting structure.
     *  *
     * @param GetCommonLogDetailRequest $request GetCommonLogDetailRequest
     *
     * @return GetCommonLogDetailResponse GetCommonLogDetailResponse
     */
    public function getCommonLogDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCommonLogDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the details of a job.
     *  *
     * @param GetJobRequest  $request GetJobRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetJobResponse GetJobResponse
     */
    public function getJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetJob',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the details of a job.
     *  *
     * @param GetJobRequest $request GetJobRequest
     *
     * @return GetJobResponse GetJobResponse
     */
    public function getJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the output logs of a job, including standard output logs and error output logs.
     *  *
     * @description ## [](#)Usage notes
     * Currently, only Slurm and PBS Pro schedulers for Standard Edition clusters are supported.
     *  *
     * @param GetJobLogRequest $request GetJobLogRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetJobLogResponse GetJobLogResponse
     */
    public function getJobLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->logType)) {
            $query['LogType'] = $request->logType;
        }
        if (!Utils::isUnset($request->offset)) {
            $query['Offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetJobLog',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetJobLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the output logs of a job, including standard output logs and error output logs.
     *  *
     * @description ## [](#)Usage notes
     * Currently, only Slurm and PBS Pro schedulers for Standard Edition clusters are supported.
     *  *
     * @param GetJobLogRequest $request GetJobLogRequest
     *
     * @return GetJobLogResponse GetJobLogResponse
     */
    public function getJobLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobLogWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a queue in an Elastic High Performance Computing (E-HPC) cluster.
     *  *
     * @param GetQueueRequest $request GetQueueRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetQueueResponse GetQueueResponse
     */
    public function getQueueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->queueName)) {
            $query['QueueName'] = $request->queueName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetQueue',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a queue in an Elastic High Performance Computing (E-HPC) cluster.
     *  *
     * @param GetQueueRequest $request GetQueueRequest
     *
     * @return GetQueueResponse GetQueueResponse
     */
    public function getQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQueueWithOptions($request, $runtime);
    }

    /**
     * @summary Installs an addon.
     *  *
     * @description ## [](#)Usage notes
     * Take note of the following items when you call this operation:
     * *   The cluster must be in the `Running` state.
     * *   Clusters fall into two types:
     *     *   Regular clusters on Alibaba Cloud Public Cloud
     *     *   Managed clusters on Alibaba Cloud Public Cloud
     *  *
     * @param InstallAddonRequest $request InstallAddonRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return InstallAddonResponse InstallAddonResponse
     */
    public function installAddonWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addonName)) {
            $query['AddonName'] = $request->addonName;
        }
        if (!Utils::isUnset($request->addonVersion)) {
            $query['AddonVersion'] = $request->addonVersion;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->resourcesSpec)) {
            $query['ResourcesSpec'] = $request->resourcesSpec;
        }
        if (!Utils::isUnset($request->servicesSpec)) {
            $query['ServicesSpec'] = $request->servicesSpec;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InstallAddon',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InstallAddonResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Installs an addon.
     *  *
     * @description ## [](#)Usage notes
     * Take note of the following items when you call this operation:
     * *   The cluster must be in the `Running` state.
     * *   Clusters fall into two types:
     *     *   Regular clusters on Alibaba Cloud Public Cloud
     *     *   Managed clusters on Alibaba Cloud Public Cloud
     *  *
     * @param InstallAddonRequest $request InstallAddonRequest
     *
     * @return InstallAddonResponse InstallAddonResponse
     */
    public function installAddon($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installAddonWithOptions($request, $runtime);
    }

    /**
     * @summary Installs software for a specified cluster.
     *  *
     * @param InstallSoftwaresRequest $tmpReq  InstallSoftwaresRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return InstallSoftwaresResponse InstallSoftwaresResponse
     */
    public function installSoftwaresWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new InstallSoftwaresShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->additionalPackages)) {
            $request->additionalPackagesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->additionalPackages, 'AdditionalPackages', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InstallSoftwares',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InstallSoftwaresResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Installs software for a specified cluster.
     *  *
     * @param InstallSoftwaresRequest $request InstallSoftwaresRequest
     *
     * @return InstallSoftwaresResponse InstallSoftwaresResponse
     */
    public function installSoftwares($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installSoftwaresWithOptions($request, $runtime);
    }

    /**
     * @summary Queries supported addon templates.
     *  *
     * @param ListAddonTemplatesRequest $request ListAddonTemplatesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAddonTemplatesResponse ListAddonTemplatesResponse
     */
    public function listAddonTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addonNames)) {
            $query['AddonNames'] = $request->addonNames;
        }
        if (!Utils::isUnset($request->clusterCategory)) {
            $query['ClusterCategory'] = $request->clusterCategory;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAddonTemplates',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAddonTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries supported addon templates.
     *  *
     * @param ListAddonTemplatesRequest $request ListAddonTemplatesRequest
     *
     * @return ListAddonTemplatesResponse ListAddonTemplatesResponse
     */
    public function listAddonTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAddonTemplatesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries installed addons of an Elastic High Performance Computing (E-HPC) cluster.
     *  *
     * @param ListAddonsRequest $tmpReq  ListAddonsRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAddonsResponse ListAddonsResponse
     */
    public function listAddonsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListAddonsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->addonIds)) {
            $request->addonIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->addonIds, 'AddonIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->addonIdsShrink)) {
            $query['AddonIds'] = $request->addonIdsShrink;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
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
            'action'      => 'ListAddons',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAddonsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries installed addons of an Elastic High Performance Computing (E-HPC) cluster.
     *  *
     * @param ListAddonsRequest $request ListAddonsRequest
     *
     * @return ListAddonsResponse ListAddonsResponse
     */
    public function listAddons($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAddonsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the file systems that can be attached in a region.
     *  *
     * @param ListAvailableFileSystemsRequest $request ListAvailableFileSystemsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAvailableFileSystemsResponse ListAvailableFileSystemsResponse
     */
    public function listAvailableFileSystemsWithOptions($request, $runtime)
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
            'action'      => 'ListAvailableFileSystems',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAvailableFileSystemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the file systems that can be attached in a region.
     *  *
     * @param ListAvailableFileSystemsRequest $request ListAvailableFileSystemsRequest
     *
     * @return ListAvailableFileSystemsResponse ListAvailableFileSystemsResponse
     */
    public function listAvailableFileSystems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAvailableFileSystemsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries images that are available for Elastic High Performance Computing (E-HPC) clusters.
     *  *
     * @param ListAvailableImagesRequest $tmpReq  ListAvailableImagesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAvailableImagesResponse ListAvailableImagesResponse
     */
    public function listAvailableImagesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListAvailableImagesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->directoryService)) {
            $request->directoryServiceShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->directoryService, 'DirectoryService', 'json');
        }
        if (!Utils::isUnset($tmpReq->scheduler)) {
            $request->schedulerShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->scheduler, 'Scheduler', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAvailableImages',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAvailableImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries images that are available for Elastic High Performance Computing (E-HPC) clusters.
     *  *
     * @param ListAvailableImagesRequest $request ListAvailableImagesRequest
     *
     * @return ListAvailableImagesResponse ListAvailableImagesResponse
     */
    public function listAvailableImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAvailableImagesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all clusters of a user in each region.
     *  *
     * @param ListClustersRequest $tmpReq  ListClustersRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListClustersResponse ListClustersResponse
     */
    public function listClustersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListClustersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->clusterIds)) {
            $request->clusterIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->clusterIds, 'ClusterIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->clusterNames)) {
            $request->clusterNamesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->clusterNames, 'ClusterNames', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clusterIdsShrink)) {
            $query['ClusterIds'] = $request->clusterIdsShrink;
        }
        if (!Utils::isUnset($request->clusterNamesShrink)) {
            $query['ClusterNames'] = $request->clusterNamesShrink;
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
            'action'      => 'ListClusters',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries all clusters of a user in each region.
     *  *
     * @param ListClustersRequest $request ListClustersRequest
     *
     * @return ListClustersResponse ListClustersResponse
     */
    public function listClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClustersWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the logs of a cluster that are generated within a time range.
     *  *
     * @param ListCommonLogsRequest $tmpReq  ListCommonLogsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCommonLogsResponse ListCommonLogsResponse
     */
    public function listCommonLogsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListCommonLogsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->actionName)) {
            $request->actionNameShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->actionName, 'ActionName', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->actionNameShrink)) {
            $query['ActionName'] = $request->actionNameShrink;
        }
        if (!Utils::isUnset($request->actionStatus)) {
            $query['ActionStatus'] = $request->actionStatus;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->from)) {
            $query['From'] = $request->from;
        }
        if (!Utils::isUnset($request->isReverse)) {
            $query['IsReverse'] = $request->isReverse;
        }
        if (!Utils::isUnset($request->logRequestId)) {
            $query['LogRequestId'] = $request->logRequestId;
        }
        if (!Utils::isUnset($request->logType)) {
            $query['LogType'] = $request->logType;
        }
        if (!Utils::isUnset($request->operatorUid)) {
            $query['OperatorUid'] = $request->operatorUid;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->to)) {
            $query['To'] = $request->to;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCommonLogs',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCommonLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the logs of a cluster that are generated within a time range.
     *  *
     * @param ListCommonLogsRequest $request ListCommonLogsRequest
     *
     * @return ListCommonLogsResponse ListCommonLogsResponse
     */
    public function listCommonLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCommonLogsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the installed software of a cluster.
     *  *
     * @param ListInstalledSoftwaresRequest $request ListInstalledSoftwaresRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstalledSoftwaresResponse ListInstalledSoftwaresResponse
     */
    public function listInstalledSoftwaresWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstalledSoftwares',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInstalledSoftwaresResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the installed software of a cluster.
     *  *
     * @param ListInstalledSoftwaresRequest $request ListInstalledSoftwaresRequest
     *
     * @return ListInstalledSoftwaresResponse ListInstalledSoftwaresResponse
     */
    public function listInstalledSoftwares($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstalledSoftwaresWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the jobs in a cluster.
     *  *
     * @param ListJobsRequest $tmpReq  ListJobsRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListJobsResponse ListJobsResponse
     */
    public function listJobsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListJobsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->jobFilter)) {
            $request->jobFilterShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->jobFilter, 'JobFilter', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->jobFilterShrink)) {
            $query['JobFilter'] = $request->jobFilterShrink;
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
            'action'      => 'ListJobs',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the jobs in a cluster.
     *  *
     * @param ListJobsRequest $request ListJobsRequest
     *
     * @return ListJobsResponse ListJobsResponse
     */
    public function listJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the nodes of an Elastic High Performance Computing (E-HPC) cluster.
     *  *
     * @param ListNodesRequest $tmpReq  ListNodesRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListNodesResponse ListNodesResponse
     */
    public function listNodesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListNodesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->hostnames)) {
            $request->hostnamesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->hostnames, 'Hostnames', 'json');
        }
        if (!Utils::isUnset($tmpReq->privateIpAddress)) {
            $request->privateIpAddressShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->privateIpAddress, 'PrivateIpAddress', 'json');
        }
        if (!Utils::isUnset($tmpReq->queueNames)) {
            $request->queueNamesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->queueNames, 'QueueNames', 'json');
        }
        if (!Utils::isUnset($tmpReq->status)) {
            $request->statusShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->status, 'Status', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->hostnamesShrink)) {
            $query['Hostnames'] = $request->hostnamesShrink;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->privateIpAddressShrink)) {
            $query['PrivateIpAddress'] = $request->privateIpAddressShrink;
        }
        if (!Utils::isUnset($request->queueNamesShrink)) {
            $query['QueueNames'] = $request->queueNamesShrink;
        }
        if (!Utils::isUnset($request->sequence)) {
            $query['Sequence'] = $request->sequence;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->statusShrink)) {
            $query['Status'] = $request->statusShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNodes',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the nodes of an Elastic High Performance Computing (E-HPC) cluster.
     *  *
     * @param ListNodesRequest $request ListNodesRequest
     *
     * @return ListNodesResponse ListNodesResponse
     */
    public function listNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries queues in an Elastic High Performance Computing (E-HPC) cluster.
     *  *
     * @param ListQueuesRequest $tmpReq  ListQueuesRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListQueuesResponse ListQueuesResponse
     */
    public function listQueuesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListQueuesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->queueNames)) {
            $request->queueNamesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->queueNames, 'QueueNames', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->queueNamesShrink)) {
            $query['QueueNames'] = $request->queueNamesShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListQueues',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListQueuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries queues in an Elastic High Performance Computing (E-HPC) cluster.
     *  *
     * @param ListQueuesRequest $request ListQueuesRequest
     *
     * @return ListQueuesResponse ListQueuesResponse
     */
    public function listQueues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQueuesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the shared storage that is attached to a cluster.
     *  *
     * @param ListSharedStoragesRequest $request ListSharedStoragesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSharedStoragesResponse ListSharedStoragesResponse
     */
    public function listSharedStoragesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->fileSystemType)) {
            $query['FileSystemType'] = $request->fileSystemType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSharedStorages',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSharedStoragesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the shared storage that is attached to a cluster.
     *  *
     * @param ListSharedStoragesRequest $request ListSharedStoragesRequest
     *
     * @return ListSharedStoragesResponse ListSharedStoragesResponse
     */
    public function listSharedStorages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSharedStoragesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the software that can be installed in an Elastic High Performance Computing (E-HPC) cluster.
     *  *
     * @param ListSoftwaresRequest $request ListSoftwaresRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSoftwaresResponse ListSoftwaresResponse
     */
    public function listSoftwaresWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSoftwares',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSoftwaresResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the software that can be installed in an Elastic High Performance Computing (E-HPC) cluster.
     *  *
     * @param ListSoftwaresRequest $request ListSoftwaresRequest
     *
     * @return ListSoftwaresResponse ListSoftwaresResponse
     */
    public function listSoftwares($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSoftwaresWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the users of a cluster.
     *  *
     * @param ListUsersRequest $request ListUsersRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUsersResponse ListUsersResponse
     */
    public function listUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUsers',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the users of a cluster.
     *  *
     * @param ListUsersRequest $request ListUsersRequest
     *
     * @return ListUsersResponse ListUsersResponse
     */
    public function listUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsersWithOptions($request, $runtime);
    }

    /**
     * @summary Stops uncompleted jobs in a batch in an Elastic High Performance Computing (E-HPC) cluster.
     *  *
     * @param StopJobsRequest $tmpReq  StopJobsRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return StopJobsResponse StopJobsResponse
     */
    public function stopJobsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new StopJobsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->jobIds)) {
            $request->jobIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->jobIds, 'JobIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->jobIdsShrink)) {
            $query['JobIds'] = $request->jobIdsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopJobs',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Stops uncompleted jobs in a batch in an Elastic High Performance Computing (E-HPC) cluster.
     *  *
     * @param StopJobsRequest $request StopJobsRequest
     *
     * @return StopJobsResponse StopJobsResponse
     */
    public function stopJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopJobsWithOptions($request, $runtime);
    }

    /**
     * @summary Uninstalls an addon.
     *  *
     * @description ## [](#)Usage notes
     * Take note of the following items when you call this operation:
     * *   The cluster must be in the `Running` state.
     * *   Clusters fall into the following types:
     *     *   Regular clusters on Alibaba Cloud Public Cloud
     *     *   Managed clusters on Alibaba Cloud Public Cloud
     *  *
     * @param UnInstallAddonRequest $request UnInstallAddonRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UnInstallAddonResponse UnInstallAddonResponse
     */
    public function unInstallAddonWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addonId)) {
            $query['AddonId'] = $request->addonId;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnInstallAddon',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnInstallAddonResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Uninstalls an addon.
     *  *
     * @description ## [](#)Usage notes
     * Take note of the following items when you call this operation:
     * *   The cluster must be in the `Running` state.
     * *   Clusters fall into the following types:
     *     *   Regular clusters on Alibaba Cloud Public Cloud
     *     *   Managed clusters on Alibaba Cloud Public Cloud
     *  *
     * @param UnInstallAddonRequest $request UnInstallAddonRequest
     *
     * @return UnInstallAddonResponse UnInstallAddonResponse
     */
    public function unInstallAddon($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unInstallAddonWithOptions($request, $runtime);
    }

    /**
     * @summary Uninstalls software systems from an Enterprise High Performance Computing (E-HPC) cluster.
     *  *
     * @param UninstallSoftwaresRequest $tmpReq  UninstallSoftwaresRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UninstallSoftwaresResponse UninstallSoftwaresResponse
     */
    public function uninstallSoftwaresWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UninstallSoftwaresShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->additionalPackages)) {
            $request->additionalPackagesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->additionalPackages, 'AdditionalPackages', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UninstallSoftwares',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UninstallSoftwaresResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Uninstalls software systems from an Enterprise High Performance Computing (E-HPC) cluster.
     *  *
     * @param UninstallSoftwaresRequest $request UninstallSoftwaresRequest
     *
     * @return UninstallSoftwaresResponse UninstallSoftwaresResponse
     */
    public function uninstallSoftwares($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uninstallSoftwaresWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of an Elastic High Performance Computing (E-HPC) cluster.
     *  *
     * @param UpdateClusterRequest $tmpReq  UpdateClusterRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateClusterResponse UpdateClusterResponse
     */
    public function updateClusterWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateClusterShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->clusterCustomConfiguration)) {
            $request->clusterCustomConfigurationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->clusterCustomConfiguration, 'ClusterCustomConfiguration', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientVersion)) {
            $query['ClientVersion'] = $request->clientVersion;
        }
        if (!Utils::isUnset($request->clusterCustomConfigurationShrink)) {
            $query['ClusterCustomConfiguration'] = $request->clusterCustomConfigurationShrink;
        }
        if (!Utils::isUnset($request->clusterDescription)) {
            $query['ClusterDescription'] = $request->clusterDescription;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->deletionProtection)) {
            $query['DeletionProtection'] = $request->deletionProtection;
        }
        if (!Utils::isUnset($request->enableScaleIn)) {
            $query['EnableScaleIn'] = $request->enableScaleIn;
        }
        if (!Utils::isUnset($request->enableScaleOut)) {
            $query['EnableScaleOut'] = $request->enableScaleOut;
        }
        if (!Utils::isUnset($request->growInterval)) {
            $query['GrowInterval'] = $request->growInterval;
        }
        if (!Utils::isUnset($request->idleInterval)) {
            $query['IdleInterval'] = $request->idleInterval;
        }
        if (!Utils::isUnset($request->maxCoreCount)) {
            $query['MaxCoreCount'] = $request->maxCoreCount;
        }
        if (!Utils::isUnset($request->maxCount)) {
            $query['MaxCount'] = $request->maxCount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateCluster',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of an Elastic High Performance Computing (E-HPC) cluster.
     *  *
     * @param UpdateClusterRequest $request UpdateClusterRequest
     *
     * @return UpdateClusterResponse UpdateClusterResponse
     */
    public function updateCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the configurations of compute nodes in an Enterprise High Performance Computing (E-HPC) cluster.
     *  *
     * @description ## [](#)Usage notes
     * Before you delete a compute node, we recommend that you export all job data from the node to prevent data loss.
     *  *
     * @param UpdateNodesRequest $tmpReq  UpdateNodesRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateNodesResponse UpdateNodesResponse
     */
    public function updateNodesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateNodesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->instances)) {
            $request->instancesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->instances, 'Instances', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->instancesShrink)) {
            $query['Instances'] = $request->instancesShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateNodes',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the configurations of compute nodes in an Enterprise High Performance Computing (E-HPC) cluster.
     *  *
     * @description ## [](#)Usage notes
     * Before you delete a compute node, we recommend that you export all job data from the node to prevent data loss.
     *  *
     * @param UpdateNodesRequest $request UpdateNodesRequest
     *
     * @return UpdateNodesResponse UpdateNodesResponse
     */
    public function updateNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNodesWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of a queue in an Elastic High Performance Computing (E-HPC) cluster.
     *  *
     * @param UpdateQueueRequest $tmpReq  UpdateQueueRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateQueueResponse UpdateQueueResponse
     */
    public function updateQueueWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateQueueShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->queue)) {
            $request->queueShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->queue, 'Queue', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->queueShrink)) {
            $query['Queue'] = $request->queueShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateQueue',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of a queue in an Elastic High Performance Computing (E-HPC) cluster.
     *  *
     * @param UpdateQueueRequest $request UpdateQueueRequest
     *
     * @return UpdateQueueResponse UpdateQueueResponse
     */
    public function updateQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateQueueWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the information of a user in an Elastic High Performance Computing (E-HPC) cluster, including the user group and password.
     *  *
     * @param UpdateUserRequest $request UpdateUserRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateUserResponse UpdateUserResponse
     */
    public function updateUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->group)) {
            $query['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateUser',
            'version'     => '2024-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the information of a user in an Elastic High Performance Computing (E-HPC) cluster, including the user group and password.
     *  *
     * @param UpdateUserRequest $request UpdateUserRequest
     *
     * @return UpdateUserResponse UpdateUserResponse
     */
    public function updateUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserWithOptions($request, $runtime);
    }
}
