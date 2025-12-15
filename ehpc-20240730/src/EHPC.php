<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\EHPC\V20240730\Models\AttachNodesRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\AttachNodesResponse;
use AlibabaCloud\SDK\EHPC\V20240730\Models\AttachNodesShrinkRequest;
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
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListRegionsRequest;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListRegionsResponse;
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
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Adds Elastic Compute Service (ECS) instances as compute nodes to Elastic High Performance Computing (E-HPC) clusters.
     *
     * @remarks
     * The ECS instances must meet the following requirements:
     * *   The ECS instances do not belong to any E-HPC cluster.
     * *   The ECS instances reside in the same virtual private cloud (VPC) as the cluster.
     * *   The ECS instances are in the Stopped state.
     * Take of the following limits:
     * *   You can specify multiple instance IDs to add them at a time. However, the instances must be of the same type.
     * *   When an instance is added to the cluster, [the system disk is reset](https://help.aliyun.com/zh/ecs/user-guide/re-initialize-a-system-disk) by using the image specified by the input parameters.
     * *   If the instance has data disks, they are not automatically created and mounted after the instance is added.
     * *   The hostname of the instance remains the same. Therefore, you must ensure that the hostname of the instance to be added is different from the hostname of an existing node in the cluster.
     *
     * @param tmpReq - AttachNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachNodesResponse
     *
     * @param AttachNodesRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return AttachNodesResponse
     */
    public function attachNodesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AttachNodesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->computeNode) {
            $request->computeNodeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->computeNode, 'ComputeNode', 'json');
        }

        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->computeNodeShrink) {
            @$query['ComputeNode'] = $request->computeNodeShrink;
        }

        if (null !== $request->queueName) {
            @$query['QueueName'] = $request->queueName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachNodes',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds Elastic Compute Service (ECS) instances as compute nodes to Elastic High Performance Computing (E-HPC) clusters.
     *
     * @remarks
     * The ECS instances must meet the following requirements:
     * *   The ECS instances do not belong to any E-HPC cluster.
     * *   The ECS instances reside in the same virtual private cloud (VPC) as the cluster.
     * *   The ECS instances are in the Stopped state.
     * Take of the following limits:
     * *   You can specify multiple instance IDs to add them at a time. However, the instances must be of the same type.
     * *   When an instance is added to the cluster, [the system disk is reset](https://help.aliyun.com/zh/ecs/user-guide/re-initialize-a-system-disk) by using the image specified by the input parameters.
     * *   If the instance has data disks, they are not automatically created and mounted after the instance is added.
     * *   The hostname of the instance remains the same. Therefore, you must ensure that the hostname of the instance to be added is different from the hostname of an existing node in the cluster.
     *
     * @param request - AttachNodesRequest
     *
     * @returns AttachNodesResponse
     *
     * @param AttachNodesRequest $request
     *
     * @return AttachNodesResponse
     */
    public function attachNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachNodesWithOptions($request, $runtime);
    }

    /**
     * Attaches shared storage to an Elastic High Performance Computing (E-HPC) cluster.
     *
     * @remarks
     * ## [](#)Usage notes
     * When you call this operation, take note of the following items:
     * *   The file system that you want to attach must be created in advance in the same virtual private cloud (VPC) as the destination cluster. For more information, see [Create a file system](https://help.aliyun.com/document_detail/27530.html) and [Manage mount targets](https://help.aliyun.com/document_detail/27531.html).
     * *   E-HPC clusters support Apsara File Storage NAS file systems.
     *
     * @param tmpReq - AttachSharedStoragesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachSharedStoragesResponse
     *
     * @param AttachSharedStoragesRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return AttachSharedStoragesResponse
     */
    public function attachSharedStoragesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AttachSharedStoragesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sharedStorages) {
            $request->sharedStoragesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sharedStorages, 'SharedStorages', 'json');
        }

        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->sharedStoragesShrink) {
            @$query['SharedStorages'] = $request->sharedStoragesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachSharedStorages',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachSharedStoragesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Attaches shared storage to an Elastic High Performance Computing (E-HPC) cluster.
     *
     * @remarks
     * ## [](#)Usage notes
     * When you call this operation, take note of the following items:
     * *   The file system that you want to attach must be created in advance in the same virtual private cloud (VPC) as the destination cluster. For more information, see [Create a file system](https://help.aliyun.com/document_detail/27530.html) and [Manage mount targets](https://help.aliyun.com/document_detail/27531.html).
     * *   E-HPC clusters support Apsara File Storage NAS file systems.
     *
     * @param request - AttachSharedStoragesRequest
     *
     * @returns AttachSharedStoragesResponse
     *
     * @param AttachSharedStoragesRequest $request
     *
     * @return AttachSharedStoragesResponse
     */
    public function attachSharedStorages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachSharedStoragesWithOptions($request, $runtime);
    }

    /**
     * Creates a pay-as-you-go or subscription Elastic High Performance Computing (E-HPC) cluster.
     *
     * @remarks
     * ## [](#)Usage notes
     * Before you call this operation, make sure that you are familiar with the billing and pricing of E-HPC. For more information, see [Overview](https://help.aliyun.com/document_detail/2842985.html).
     *
     * @param tmpReq - CreateClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateClusterResponse
     *
     * @param CreateClusterRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return CreateClusterResponse
     */
    public function createClusterWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateClusterShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->additionalPackages) {
            $request->additionalPackagesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->additionalPackages, 'AdditionalPackages', 'json');
        }

        if (null !== $tmpReq->addons) {
            $request->addonsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->addons, 'Addons', 'json');
        }

        if (null !== $tmpReq->clusterCredentials) {
            $request->clusterCredentialsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->clusterCredentials, 'ClusterCredentials', 'json');
        }

        if (null !== $tmpReq->clusterCustomConfiguration) {
            $request->clusterCustomConfigurationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->clusterCustomConfiguration, 'ClusterCustomConfiguration', 'json');
        }

        if (null !== $tmpReq->manager) {
            $request->managerShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->manager, 'Manager', 'json');
        }

        if (null !== $tmpReq->queues) {
            $request->queuesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->queues, 'Queues', 'json');
        }

        if (null !== $tmpReq->sharedStorages) {
            $request->sharedStoragesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sharedStorages, 'SharedStorages', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->additionalPackagesShrink) {
            @$query['AdditionalPackages'] = $request->additionalPackagesShrink;
        }

        if (null !== $request->addonsShrink) {
            @$query['Addons'] = $request->addonsShrink;
        }

        if (null !== $request->clientVersion) {
            @$query['ClientVersion'] = $request->clientVersion;
        }

        if (null !== $request->clusterCategory) {
            @$query['ClusterCategory'] = $request->clusterCategory;
        }

        if (null !== $request->clusterCredentialsShrink) {
            @$query['ClusterCredentials'] = $request->clusterCredentialsShrink;
        }

        if (null !== $request->clusterCustomConfigurationShrink) {
            @$query['ClusterCustomConfiguration'] = $request->clusterCustomConfigurationShrink;
        }

        if (null !== $request->clusterDescription) {
            @$query['ClusterDescription'] = $request->clusterDescription;
        }

        if (null !== $request->clusterMode) {
            @$query['ClusterMode'] = $request->clusterMode;
        }

        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->clusterVSwitchId) {
            @$query['ClusterVSwitchId'] = $request->clusterVSwitchId;
        }

        if (null !== $request->clusterVpcId) {
            @$query['ClusterVpcId'] = $request->clusterVpcId;
        }

        if (null !== $request->deletionProtection) {
            @$query['DeletionProtection'] = $request->deletionProtection;
        }

        if (null !== $request->isEnterpriseSecurityGroup) {
            @$query['IsEnterpriseSecurityGroup'] = $request->isEnterpriseSecurityGroup;
        }

        if (null !== $request->managerShrink) {
            @$query['Manager'] = $request->managerShrink;
        }

        if (null !== $request->maxCoreCount) {
            @$query['MaxCoreCount'] = $request->maxCoreCount;
        }

        if (null !== $request->maxCount) {
            @$query['MaxCount'] = $request->maxCount;
        }

        if (null !== $request->queuesShrink) {
            @$query['Queues'] = $request->queuesShrink;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->sharedStoragesShrink) {
            @$query['SharedStorages'] = $request->sharedStoragesShrink;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCluster',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a pay-as-you-go or subscription Elastic High Performance Computing (E-HPC) cluster.
     *
     * @remarks
     * ## [](#)Usage notes
     * Before you call this operation, make sure that you are familiar with the billing and pricing of E-HPC. For more information, see [Overview](https://help.aliyun.com/document_detail/2842985.html).
     *
     * @param request - CreateClusterRequest
     *
     * @returns CreateClusterResponse
     *
     * @param CreateClusterRequest $request
     *
     * @return CreateClusterResponse
     */
    public function createCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClusterWithOptions($request, $runtime);
    }

    /**
     * Creates a job for a cluster.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing and [pricing](https://www.aliyun.com/price/product#/ecs/detail) of E-HPC.
     *
     * @param tmpReq - CreateJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateJobResponse
     *
     * @param CreateJobRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return CreateJobResponse
     */
    public function createJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->jobSpec) {
            $request->jobSpecShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->jobSpec, 'JobSpec', 'json');
        }

        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->jobName) {
            @$query['JobName'] = $request->jobName;
        }

        if (null !== $request->jobSpecShrink) {
            @$query['JobSpec'] = $request->jobSpecShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateJob',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a job for a cluster.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing and [pricing](https://www.aliyun.com/price/product#/ecs/detail) of E-HPC.
     *
     * @param request - CreateJobRequest
     *
     * @returns CreateJobResponse
     *
     * @param CreateJobRequest $request
     *
     * @return CreateJobResponse
     */
    public function createJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createJobWithOptions($request, $runtime);
    }

    /**
     * Creates compute nodes for an Elastic High Performance Computing (E-HPC) cluster.
     *
     * @remarks
     * ## [](#)
     *
     * @param tmpReq - CreateNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateNodesResponse
     *
     * @param CreateNodesRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return CreateNodesResponse
     */
    public function createNodesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateNodesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->computeNode) {
            $request->computeNodeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->computeNode, 'ComputeNode', 'json');
        }

        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->computeNodeShrink) {
            @$query['ComputeNode'] = $request->computeNodeShrink;
        }

        if (null !== $request->count) {
            @$query['Count'] = $request->count;
        }

        if (null !== $request->deploymentSetId) {
            @$query['DeploymentSetId'] = $request->deploymentSetId;
        }

        if (null !== $request->HPCInterConnect) {
            @$query['HPCInterConnect'] = $request->HPCInterConnect;
        }

        if (null !== $request->hostnamePrefix) {
            @$query['HostnamePrefix'] = $request->hostnamePrefix;
        }

        if (null !== $request->hostnameSuffix) {
            @$query['HostnameSuffix'] = $request->hostnameSuffix;
        }

        if (null !== $request->keepAlive) {
            @$query['KeepAlive'] = $request->keepAlive;
        }

        if (null !== $request->queueName) {
            @$query['QueueName'] = $request->queueName;
        }

        if (null !== $request->ramRole) {
            @$query['RamRole'] = $request->ramRole;
        }

        if (null !== $request->reservedNodePoolId) {
            @$query['ReservedNodePoolId'] = $request->reservedNodePoolId;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateNodes',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates compute nodes for an Elastic High Performance Computing (E-HPC) cluster.
     *
     * @remarks
     * ## [](#)
     *
     * @param request - CreateNodesRequest
     *
     * @returns CreateNodesResponse
     *
     * @param CreateNodesRequest $request
     *
     * @return CreateNodesResponse
     */
    public function createNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNodesWithOptions($request, $runtime);
    }

    /**
     * Creates a queue for an Enterprise High Performance Computing (E-HPC) cluster.
     *
     * @param tmpReq - CreateQueueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateQueueResponse
     *
     * @param CreateQueueRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return CreateQueueResponse
     */
    public function createQueueWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateQueueShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->queue) {
            $request->queueShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->queue, 'Queue', 'json');
        }

        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->queueShrink) {
            @$query['Queue'] = $request->queueShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateQueue',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a queue for an Enterprise High Performance Computing (E-HPC) cluster.
     *
     * @param request - CreateQueueRequest
     *
     * @returns CreateQueueResponse
     *
     * @param CreateQueueRequest $request
     *
     * @return CreateQueueResponse
     */
    public function createQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQueueWithOptions($request, $runtime);
    }

    /**
     * Adds users to an Elastic High Performance Computing (E-HPC) cluster.
     *
     * @param tmpReq - CreateUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateUsersResponse
     *
     * @param CreateUsersRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return CreateUsersResponse
     */
    public function createUsersWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateUsersShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->user) {
            $request->userShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->user, 'User', 'json');
        }

        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->userShrink) {
            @$query['User'] = $request->userShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateUsers',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds users to an Elastic High Performance Computing (E-HPC) cluster.
     *
     * @param request - CreateUsersRequest
     *
     * @returns CreateUsersResponse
     *
     * @param CreateUsersRequest $request
     *
     * @return CreateUsersResponse
     */
    public function createUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUsersWithOptions($request, $runtime);
    }

    /**
     * Releases an Enterprise High Performance Computing (E-HPC) cluster.
     *
     * @remarks
     * ## [](#)Usage notes
     * Make sure that data of the cluster to be deleted is backed up before you call this operation.
     * > After a cluster is released, you cannot restore the data stored in the cluster. Exercise caution when you release a cluster.
     *
     * @param request - DeleteClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteClusterResponse
     *
     * @param DeleteClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteClusterResponse
     */
    public function deleteClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCluster',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Releases an Enterprise High Performance Computing (E-HPC) cluster.
     *
     * @remarks
     * ## [](#)Usage notes
     * Make sure that data of the cluster to be deleted is backed up before you call this operation.
     * > After a cluster is released, you cannot restore the data stored in the cluster. Exercise caution when you release a cluster.
     *
     * @param request - DeleteClusterRequest
     *
     * @returns DeleteClusterResponse
     *
     * @param DeleteClusterRequest $request
     *
     * @return DeleteClusterResponse
     */
    public function deleteCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClusterWithOptions($request, $runtime);
    }

    /**
     * Deletes compute nodes from an Enterprise High Performance Computing (E-HPC) cluster at a time.
     *
     * @remarks
     * ## [](#)Usage notes
     * Before you delete a compute node, we recommend that you export all job data from the node to prevent data loss.
     *
     * @param tmpReq - DeleteNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNodesResponse
     *
     * @param DeleteNodesRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteNodesResponse
     */
    public function deleteNodesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteNodesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceIds) {
            $request->instanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }

        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->instanceIdsShrink) {
            @$query['InstanceIds'] = $request->instanceIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteNodes',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes compute nodes from an Enterprise High Performance Computing (E-HPC) cluster at a time.
     *
     * @remarks
     * ## [](#)Usage notes
     * Before you delete a compute node, we recommend that you export all job data from the node to prevent data loss.
     *
     * @param request - DeleteNodesRequest
     *
     * @returns DeleteNodesResponse
     *
     * @param DeleteNodesRequest $request
     *
     * @return DeleteNodesResponse
     */
    public function deleteNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNodesWithOptions($request, $runtime);
    }

    /**
     * Deletes queues from an Enterprise High Performance Computing (E-HPC) cluster.
     *
     * @remarks
     * ## [](#)Usage notes
     * Before you delete a queue, you must delete all compute nodes in the queue.
     *
     * @param tmpReq - DeleteQueuesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteQueuesResponse
     *
     * @param DeleteQueuesRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteQueuesResponse
     */
    public function deleteQueuesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteQueuesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->queueNames) {
            $request->queueNamesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->queueNames, 'QueueNames', 'json');
        }

        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->queueNamesShrink) {
            @$query['QueueNames'] = $request->queueNamesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteQueues',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteQueuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes queues from an Enterprise High Performance Computing (E-HPC) cluster.
     *
     * @remarks
     * ## [](#)Usage notes
     * Before you delete a queue, you must delete all compute nodes in the queue.
     *
     * @param request - DeleteQueuesRequest
     *
     * @returns DeleteQueuesResponse
     *
     * @param DeleteQueuesRequest $request
     *
     * @return DeleteQueuesResponse
     */
    public function deleteQueues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQueuesWithOptions($request, $runtime);
    }

    /**
     * Deletes users from a cluster.
     *
     * @param tmpReq - DeleteUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUsersResponse
     *
     * @param DeleteUsersRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteUsersResponse
     */
    public function deleteUsersWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteUsersShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->user) {
            $request->userShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->user, 'User', 'json');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteUsers',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes users from a cluster.
     *
     * @param request - DeleteUsersRequest
     *
     * @returns DeleteUsersResponse
     *
     * @param DeleteUsersRequest $request
     *
     * @return DeleteUsersResponse
     */
    public function deleteUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUsersWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an addon template.
     *
     * @param request - DescribeAddonTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAddonTemplateResponse
     *
     * @param DescribeAddonTemplateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeAddonTemplateResponse
     */
    public function describeAddonTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addonName) {
            @$query['AddonName'] = $request->addonName;
        }

        if (null !== $request->addonVersion) {
            @$query['AddonVersion'] = $request->addonVersion;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAddonTemplate',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAddonTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an addon template.
     *
     * @param request - DescribeAddonTemplateRequest
     *
     * @returns DescribeAddonTemplateResponse
     *
     * @param DescribeAddonTemplateRequest $request
     *
     * @return DescribeAddonTemplateResponse
     */
    public function describeAddonTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAddonTemplateWithOptions($request, $runtime);
    }

    /**
     * Unmounts shared storage from the mount directory of a cluster.
     *
     * @param tmpReq - DetachSharedStoragesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachSharedStoragesResponse
     *
     * @param DetachSharedStoragesRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return DetachSharedStoragesResponse
     */
    public function detachSharedStoragesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DetachSharedStoragesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sharedStorages) {
            $request->sharedStoragesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sharedStorages, 'SharedStorages', 'json');
        }

        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->sharedStoragesShrink) {
            @$query['SharedStorages'] = $request->sharedStoragesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachSharedStorages',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachSharedStoragesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unmounts shared storage from the mount directory of a cluster.
     *
     * @param request - DetachSharedStoragesRequest
     *
     * @returns DetachSharedStoragesResponse
     *
     * @param DetachSharedStoragesRequest $request
     *
     * @return DetachSharedStoragesResponse
     */
    public function detachSharedStorages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachSharedStoragesWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an installed addon.
     *
     * @param request - GetAddonRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAddonResponse
     *
     * @param GetAddonRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetAddonResponse
     */
    public function getAddonWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addonId) {
            @$query['AddonId'] = $request->addonId;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAddon',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAddonResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an installed addon.
     *
     * @param request - GetAddonRequest
     *
     * @returns GetAddonResponse
     *
     * @param GetAddonRequest $request
     *
     * @return GetAddonResponse
     */
    public function getAddon($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAddonWithOptions($request, $runtime);
    }

    /**
     * Queries information about an Elastic High Performance Computing (E-HPC) cluster.
     *
     * @param request - GetClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetClusterResponse
     *
     * @param GetClusterRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetClusterResponse
     */
    public function getClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCluster',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about an Elastic High Performance Computing (E-HPC) cluster.
     *
     * @param request - GetClusterRequest
     *
     * @returns GetClusterResponse
     *
     * @param GetClusterRequest $request
     *
     * @return GetClusterResponse
     */
    public function getCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getClusterWithOptions($request, $runtime);
    }

    /**
     * Query logs based on a request ID. Logs for specific actions can be queried thanks to an Action-Stage-Method three-layer log splitting structure.
     *
     * @param request - GetCommonLogDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCommonLogDetailResponse
     *
     * @param GetCommonLogDetailRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetCommonLogDetailResponse
     */
    public function getCommonLogDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->from) {
            @$query['From'] = $request->from;
        }

        if (null !== $request->hiddenProcess) {
            @$query['HiddenProcess'] = $request->hiddenProcess;
        }

        if (null !== $request->logRequestId) {
            @$query['LogRequestId'] = $request->logRequestId;
        }

        if (null !== $request->to) {
            @$query['To'] = $request->to;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCommonLogDetail',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCommonLogDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query logs based on a request ID. Logs for specific actions can be queried thanks to an Action-Stage-Method three-layer log splitting structure.
     *
     * @param request - GetCommonLogDetailRequest
     *
     * @returns GetCommonLogDetailResponse
     *
     * @param GetCommonLogDetailRequest $request
     *
     * @return GetCommonLogDetailResponse
     */
    public function getCommonLogDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCommonLogDetailWithOptions($request, $runtime);
    }

    /**
     * Obtains the details of a job.
     *
     * @param request - GetJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetJobResponse
     *
     * @param GetJobRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return GetJobResponse
     */
    public function getJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetJob',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the details of a job.
     *
     * @param request - GetJobRequest
     *
     * @returns GetJobResponse
     *
     * @param GetJobRequest $request
     *
     * @return GetJobResponse
     */
    public function getJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobWithOptions($request, $runtime);
    }

    /**
     * Queries the output logs of a job, including standard output logs and error output logs.
     *
     * @remarks
     * ## [](#)Usage notes
     * Currently, only Slurm and PBS Pro schedulers for Standard Edition clusters are supported.
     *
     * @param request - GetJobLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetJobLogResponse
     *
     * @param GetJobLogRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetJobLogResponse
     */
    public function getJobLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->logType) {
            @$query['LogType'] = $request->logType;
        }

        if (null !== $request->offset) {
            @$query['Offset'] = $request->offset;
        }

        if (null !== $request->size) {
            @$query['Size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetJobLog',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetJobLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the output logs of a job, including standard output logs and error output logs.
     *
     * @remarks
     * ## [](#)Usage notes
     * Currently, only Slurm and PBS Pro schedulers for Standard Edition clusters are supported.
     *
     * @param request - GetJobLogRequest
     *
     * @returns GetJobLogResponse
     *
     * @param GetJobLogRequest $request
     *
     * @return GetJobLogResponse
     */
    public function getJobLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobLogWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a queue in an Elastic High Performance Computing (E-HPC) cluster.
     *
     * @param request - GetQueueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQueueResponse
     *
     * @param GetQueueRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetQueueResponse
     */
    public function getQueueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->queueName) {
            @$query['QueueName'] = $request->queueName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQueue',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a queue in an Elastic High Performance Computing (E-HPC) cluster.
     *
     * @param request - GetQueueRequest
     *
     * @returns GetQueueResponse
     *
     * @param GetQueueRequest $request
     *
     * @return GetQueueResponse
     */
    public function getQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQueueWithOptions($request, $runtime);
    }

    /**
     * Installs an addon.
     *
     * @remarks
     * ## [](#)Usage notes
     * Take note of the following items when you call this operation:
     * *   The cluster must be in the `Running` state.
     * *   Clusters fall into two types:
     *     *   Regular clusters on Alibaba Cloud Public Cloud
     *     *   Managed clusters on Alibaba Cloud Public Cloud
     *
     * @param request - InstallAddonRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InstallAddonResponse
     *
     * @param InstallAddonRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return InstallAddonResponse
     */
    public function installAddonWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addonName) {
            @$query['AddonName'] = $request->addonName;
        }

        if (null !== $request->addonVersion) {
            @$query['AddonVersion'] = $request->addonVersion;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->resourcesSpec) {
            @$query['ResourcesSpec'] = $request->resourcesSpec;
        }

        if (null !== $request->servicesSpec) {
            @$query['ServicesSpec'] = $request->servicesSpec;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InstallAddon',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InstallAddonResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Installs an addon.
     *
     * @remarks
     * ## [](#)Usage notes
     * Take note of the following items when you call this operation:
     * *   The cluster must be in the `Running` state.
     * *   Clusters fall into two types:
     *     *   Regular clusters on Alibaba Cloud Public Cloud
     *     *   Managed clusters on Alibaba Cloud Public Cloud
     *
     * @param request - InstallAddonRequest
     *
     * @returns InstallAddonResponse
     *
     * @param InstallAddonRequest $request
     *
     * @return InstallAddonResponse
     */
    public function installAddon($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installAddonWithOptions($request, $runtime);
    }

    /**
     * Install software for the specified cluster.
     *
     * @remarks
     * ## Interface Description
     * When calling this interface, please note the following:
     * - The cluster status must be `Running`.
     * - If the cluster series is `Serverless`, ensure that there is at least one login node or compute node in the cluster; otherwise, software cannot be added to the target cluster.
     *
     * @param tmpReq - InstallSoftwaresRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InstallSoftwaresResponse
     *
     * @param InstallSoftwaresRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return InstallSoftwaresResponse
     */
    public function installSoftwaresWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new InstallSoftwaresShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->additionalPackages) {
            $request->additionalPackagesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->additionalPackages, 'AdditionalPackages', 'json');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InstallSoftwares',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InstallSoftwaresResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Install software for the specified cluster.
     *
     * @remarks
     * ## Interface Description
     * When calling this interface, please note the following:
     * - The cluster status must be `Running`.
     * - If the cluster series is `Serverless`, ensure that there is at least one login node or compute node in the cluster; otherwise, software cannot be added to the target cluster.
     *
     * @param request - InstallSoftwaresRequest
     *
     * @returns InstallSoftwaresResponse
     *
     * @param InstallSoftwaresRequest $request
     *
     * @return InstallSoftwaresResponse
     */
    public function installSoftwares($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installSoftwaresWithOptions($request, $runtime);
    }

    /**
     * Queries supported addon templates.
     *
     * @param request - ListAddonTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAddonTemplatesResponse
     *
     * @param ListAddonTemplatesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListAddonTemplatesResponse
     */
    public function listAddonTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addonNames) {
            @$query['AddonNames'] = $request->addonNames;
        }

        if (null !== $request->clusterCategory) {
            @$query['ClusterCategory'] = $request->clusterCategory;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAddonTemplates',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAddonTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries supported addon templates.
     *
     * @param request - ListAddonTemplatesRequest
     *
     * @returns ListAddonTemplatesResponse
     *
     * @param ListAddonTemplatesRequest $request
     *
     * @return ListAddonTemplatesResponse
     */
    public function listAddonTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAddonTemplatesWithOptions($request, $runtime);
    }

    /**
     * Queries installed addons of an Elastic High Performance Computing (E-HPC) cluster.
     *
     * @param tmpReq - ListAddonsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAddonsResponse
     *
     * @param ListAddonsRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return ListAddonsResponse
     */
    public function listAddonsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListAddonsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->addonIds) {
            $request->addonIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->addonIds, 'AddonIds', 'json');
        }

        $query = [];
        if (null !== $request->addonIdsShrink) {
            @$query['AddonIds'] = $request->addonIdsShrink;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAddons',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAddonsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries installed addons of an Elastic High Performance Computing (E-HPC) cluster.
     *
     * @param request - ListAddonsRequest
     *
     * @returns ListAddonsResponse
     *
     * @param ListAddonsRequest $request
     *
     * @return ListAddonsResponse
     */
    public function listAddons($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAddonsWithOptions($request, $runtime);
    }

    /**
     * Queries the file systems that can be attached in a region.
     *
     * @param request - ListAvailableFileSystemsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAvailableFileSystemsResponse
     *
     * @param ListAvailableFileSystemsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListAvailableFileSystemsResponse
     */
    public function listAvailableFileSystemsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAvailableFileSystems',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAvailableFileSystemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the file systems that can be attached in a region.
     *
     * @param request - ListAvailableFileSystemsRequest
     *
     * @returns ListAvailableFileSystemsResponse
     *
     * @param ListAvailableFileSystemsRequest $request
     *
     * @return ListAvailableFileSystemsResponse
     */
    public function listAvailableFileSystems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAvailableFileSystemsWithOptions($request, $runtime);
    }

    /**
     * Queries images that are available for Elastic High Performance Computing (E-HPC) clusters.
     *
     * @param tmpReq - ListAvailableImagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAvailableImagesResponse
     *
     * @param ListAvailableImagesRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return ListAvailableImagesResponse
     */
    public function listAvailableImagesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListAvailableImagesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->directoryService) {
            $request->directoryServiceShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->directoryService, 'DirectoryService', 'json');
        }

        if (null !== $tmpReq->scheduler) {
            $request->schedulerShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->scheduler, 'Scheduler', 'json');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAvailableImages',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAvailableImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries images that are available for Elastic High Performance Computing (E-HPC) clusters.
     *
     * @param request - ListAvailableImagesRequest
     *
     * @returns ListAvailableImagesResponse
     *
     * @param ListAvailableImagesRequest $request
     *
     * @return ListAvailableImagesResponse
     */
    public function listAvailableImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAvailableImagesWithOptions($request, $runtime);
    }

    /**
     * Queries all clusters of a user in each region.
     *
     * @param tmpReq - ListClustersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListClustersResponse
     *
     * @param ListClustersRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return ListClustersResponse
     */
    public function listClustersWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListClustersShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->clusterIds) {
            $request->clusterIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->clusterIds, 'ClusterIds', 'json');
        }

        if (null !== $tmpReq->clusterNames) {
            $request->clusterNamesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->clusterNames, 'ClusterNames', 'json');
        }

        $query = [];
        if (null !== $request->clusterIdsShrink) {
            @$query['ClusterIds'] = $request->clusterIdsShrink;
        }

        if (null !== $request->clusterNamesShrink) {
            @$query['ClusterNames'] = $request->clusterNamesShrink;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListClusters',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all clusters of a user in each region.
     *
     * @param request - ListClustersRequest
     *
     * @returns ListClustersResponse
     *
     * @param ListClustersRequest $request
     *
     * @return ListClustersResponse
     */
    public function listClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClustersWithOptions($request, $runtime);
    }

    /**
     * Queries the logs of a cluster that are generated within a time range.
     *
     * @param tmpReq - ListCommonLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCommonLogsResponse
     *
     * @param ListCommonLogsRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return ListCommonLogsResponse
     */
    public function listCommonLogsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListCommonLogsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->actionName) {
            $request->actionNameShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->actionName, 'ActionName', 'json');
        }

        $query = [];
        if (null !== $request->actionNameShrink) {
            @$query['ActionName'] = $request->actionNameShrink;
        }

        if (null !== $request->actionStatus) {
            @$query['ActionStatus'] = $request->actionStatus;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->from) {
            @$query['From'] = $request->from;
        }

        if (null !== $request->isReverse) {
            @$query['IsReverse'] = $request->isReverse;
        }

        if (null !== $request->logRequestId) {
            @$query['LogRequestId'] = $request->logRequestId;
        }

        if (null !== $request->logType) {
            @$query['LogType'] = $request->logType;
        }

        if (null !== $request->operatorUid) {
            @$query['OperatorUid'] = $request->operatorUid;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->to) {
            @$query['To'] = $request->to;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCommonLogs',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCommonLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the logs of a cluster that are generated within a time range.
     *
     * @param request - ListCommonLogsRequest
     *
     * @returns ListCommonLogsResponse
     *
     * @param ListCommonLogsRequest $request
     *
     * @return ListCommonLogsResponse
     */
    public function listCommonLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCommonLogsWithOptions($request, $runtime);
    }

    /**
     * Queries the installed software of a cluster.
     *
     * @param request - ListInstalledSoftwaresRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstalledSoftwaresResponse
     *
     * @param ListInstalledSoftwaresRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListInstalledSoftwaresResponse
     */
    public function listInstalledSoftwaresWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstalledSoftwares',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListInstalledSoftwaresResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the installed software of a cluster.
     *
     * @param request - ListInstalledSoftwaresRequest
     *
     * @returns ListInstalledSoftwaresResponse
     *
     * @param ListInstalledSoftwaresRequest $request
     *
     * @return ListInstalledSoftwaresResponse
     */
    public function listInstalledSoftwares($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstalledSoftwaresWithOptions($request, $runtime);
    }

    /**
     * Queries the jobs in a cluster.
     *
     * @param tmpReq - ListJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJobsResponse
     *
     * @param ListJobsRequest $tmpReq
     * @param RuntimeOptions  $runtime
     *
     * @return ListJobsResponse
     */
    public function listJobsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListJobsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->jobFilter) {
            $request->jobFilterShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->jobFilter, 'JobFilter', 'json');
        }

        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->jobFilterShrink) {
            @$query['JobFilter'] = $request->jobFilterShrink;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListJobs',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the jobs in a cluster.
     *
     * @param request - ListJobsRequest
     *
     * @returns ListJobsResponse
     *
     * @param ListJobsRequest $request
     *
     * @return ListJobsResponse
     */
    public function listJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobsWithOptions($request, $runtime);
    }

    /**
     * Queries the nodes of an Elastic High Performance Computing (E-HPC) cluster.
     *
     * @param tmpReq - ListNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNodesResponse
     *
     * @param ListNodesRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return ListNodesResponse
     */
    public function listNodesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListNodesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->hostnames) {
            $request->hostnamesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->hostnames, 'Hostnames', 'json');
        }

        if (null !== $tmpReq->privateIpAddress) {
            $request->privateIpAddressShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->privateIpAddress, 'PrivateIpAddress', 'json');
        }

        if (null !== $tmpReq->queueNames) {
            $request->queueNamesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->queueNames, 'QueueNames', 'json');
        }

        if (null !== $tmpReq->status) {
            $request->statusShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->status, 'Status', 'json');
        }

        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->hostnamesShrink) {
            @$query['Hostnames'] = $request->hostnamesShrink;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->privateIpAddressShrink) {
            @$query['PrivateIpAddress'] = $request->privateIpAddressShrink;
        }

        if (null !== $request->queueNamesShrink) {
            @$query['QueueNames'] = $request->queueNamesShrink;
        }

        if (null !== $request->sequence) {
            @$query['Sequence'] = $request->sequence;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->statusShrink) {
            @$query['Status'] = $request->statusShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListNodes',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the nodes of an Elastic High Performance Computing (E-HPC) cluster.
     *
     * @param request - ListNodesRequest
     *
     * @returns ListNodesResponse
     *
     * @param ListNodesRequest $request
     *
     * @return ListNodesResponse
     */
    public function listNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodesWithOptions($request, $runtime);
    }

    /**
     * Queries queues in an Elastic High Performance Computing (E-HPC) cluster.
     *
     * @param tmpReq - ListQueuesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListQueuesResponse
     *
     * @param ListQueuesRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return ListQueuesResponse
     */
    public function listQueuesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListQueuesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->queueNames) {
            $request->queueNamesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->queueNames, 'QueueNames', 'json');
        }

        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->queueNamesShrink) {
            @$query['QueueNames'] = $request->queueNamesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListQueues',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListQueuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries queues in an Elastic High Performance Computing (E-HPC) cluster.
     *
     * @param request - ListQueuesRequest
     *
     * @returns ListQueuesResponse
     *
     * @param ListQueuesRequest $request
     *
     * @return ListQueuesResponse
     */
    public function listQueues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQueuesWithOptions($request, $runtime);
    }

    /**
     * 查询产品支持的地域列表。
     *
     * @param request - ListRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRegionsResponse
     *
     * @param ListRegionsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListRegionsResponse
     */
    public function listRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->specCode) {
            @$query['SpecCode'] = $request->specCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRegions',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询产品支持的地域列表。
     *
     * @param request - ListRegionsRequest
     *
     * @returns ListRegionsResponse
     *
     * @param ListRegionsRequest $request
     *
     * @return ListRegionsResponse
     */
    public function listRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRegionsWithOptions($request, $runtime);
    }

    /**
     * Queries the shared storage that is attached to a cluster.
     *
     * @param request - ListSharedStoragesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSharedStoragesResponse
     *
     * @param ListSharedStoragesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListSharedStoragesResponse
     */
    public function listSharedStoragesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->fileSystemType) {
            @$query['FileSystemType'] = $request->fileSystemType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSharedStorages',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSharedStoragesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the shared storage that is attached to a cluster.
     *
     * @param request - ListSharedStoragesRequest
     *
     * @returns ListSharedStoragesResponse
     *
     * @param ListSharedStoragesRequest $request
     *
     * @return ListSharedStoragesResponse
     */
    public function listSharedStorages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSharedStoragesWithOptions($request, $runtime);
    }

    /**
     * Queries the software that can be installed in an Elastic High Performance Computing (E-HPC) cluster.
     *
     * @param request - ListSoftwaresRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSoftwaresResponse
     *
     * @param ListSoftwaresRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListSoftwaresResponse
     */
    public function listSoftwaresWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSoftwares',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSoftwaresResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the software that can be installed in an Elastic High Performance Computing (E-HPC) cluster.
     *
     * @param request - ListSoftwaresRequest
     *
     * @returns ListSoftwaresResponse
     *
     * @param ListSoftwaresRequest $request
     *
     * @return ListSoftwaresResponse
     */
    public function listSoftwares($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSoftwaresWithOptions($request, $runtime);
    }

    /**
     * Queries the users of a cluster.
     *
     * @param request - ListUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUsersResponse
     *
     * @param ListUsersRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListUsersResponse
     */
    public function listUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUsers',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the users of a cluster.
     *
     * @param request - ListUsersRequest
     *
     * @returns ListUsersResponse
     *
     * @param ListUsersRequest $request
     *
     * @return ListUsersResponse
     */
    public function listUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsersWithOptions($request, $runtime);
    }

    /**
     * Stops uncompleted jobs in a batch in an Elastic High Performance Computing (E-HPC) cluster.
     *
     * @param tmpReq - StopJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopJobsResponse
     *
     * @param StopJobsRequest $tmpReq
     * @param RuntimeOptions  $runtime
     *
     * @return StopJobsResponse
     */
    public function stopJobsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new StopJobsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->jobIds) {
            $request->jobIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->jobIds, 'JobIds', 'json');
        }

        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->jobIdsShrink) {
            @$query['JobIds'] = $request->jobIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopJobs',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops uncompleted jobs in a batch in an Elastic High Performance Computing (E-HPC) cluster.
     *
     * @param request - StopJobsRequest
     *
     * @returns StopJobsResponse
     *
     * @param StopJobsRequest $request
     *
     * @return StopJobsResponse
     */
    public function stopJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopJobsWithOptions($request, $runtime);
    }

    /**
     * Uninstalls an addon.
     *
     * @remarks
     * ## [](#)Usage notes
     * Take note of the following items when you call this operation:
     * *   The cluster must be in the `Running` state.
     * *   Clusters fall into the following types:
     *     *   Regular clusters on Alibaba Cloud Public Cloud
     *     *   Managed clusters on Alibaba Cloud Public Cloud
     *
     * @param request - UnInstallAddonRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnInstallAddonResponse
     *
     * @param UnInstallAddonRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UnInstallAddonResponse
     */
    public function unInstallAddonWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addonId) {
            @$query['AddonId'] = $request->addonId;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnInstallAddon',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnInstallAddonResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uninstalls an addon.
     *
     * @remarks
     * ## [](#)Usage notes
     * Take note of the following items when you call this operation:
     * *   The cluster must be in the `Running` state.
     * *   Clusters fall into the following types:
     *     *   Regular clusters on Alibaba Cloud Public Cloud
     *     *   Managed clusters on Alibaba Cloud Public Cloud
     *
     * @param request - UnInstallAddonRequest
     *
     * @returns UnInstallAddonResponse
     *
     * @param UnInstallAddonRequest $request
     *
     * @return UnInstallAddonResponse
     */
    public function unInstallAddon($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unInstallAddonWithOptions($request, $runtime);
    }

    /**
     * Uninstalls software systems from an Enterprise High Performance Computing (E-HPC) cluster.
     *
     * @remarks
     * ## Interface Description
     * When calling this interface, please note:
     * The cluster status must be `Running`.
     *
     * @param tmpReq - UninstallSoftwaresRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UninstallSoftwaresResponse
     *
     * @param UninstallSoftwaresRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return UninstallSoftwaresResponse
     */
    public function uninstallSoftwaresWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UninstallSoftwaresShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->additionalPackages) {
            $request->additionalPackagesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->additionalPackages, 'AdditionalPackages', 'json');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UninstallSoftwares',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UninstallSoftwaresResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uninstalls software systems from an Enterprise High Performance Computing (E-HPC) cluster.
     *
     * @remarks
     * ## Interface Description
     * When calling this interface, please note:
     * The cluster status must be `Running`.
     *
     * @param request - UninstallSoftwaresRequest
     *
     * @returns UninstallSoftwaresResponse
     *
     * @param UninstallSoftwaresRequest $request
     *
     * @return UninstallSoftwaresResponse
     */
    public function uninstallSoftwares($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uninstallSoftwaresWithOptions($request, $runtime);
    }

    /**
     * Modify the basic information of a specified cluster.
     *
     * @param tmpReq - UpdateClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateClusterResponse
     *
     * @param UpdateClusterRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateClusterResponse
     */
    public function updateClusterWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateClusterShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->clusterCustomConfiguration) {
            $request->clusterCustomConfigurationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->clusterCustomConfiguration, 'ClusterCustomConfiguration', 'json');
        }

        if (null !== $tmpReq->monitorSpec) {
            $request->monitorSpecShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->monitorSpec, 'MonitorSpec', 'json');
        }

        if (null !== $tmpReq->schedulerSpec) {
            $request->schedulerSpecShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->schedulerSpec, 'SchedulerSpec', 'json');
        }

        $query = [];
        if (null !== $request->clientVersion) {
            @$query['ClientVersion'] = $request->clientVersion;
        }

        if (null !== $request->clusterCustomConfigurationShrink) {
            @$query['ClusterCustomConfiguration'] = $request->clusterCustomConfigurationShrink;
        }

        if (null !== $request->clusterDescription) {
            @$query['ClusterDescription'] = $request->clusterDescription;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->deletionProtection) {
            @$query['DeletionProtection'] = $request->deletionProtection;
        }

        if (null !== $request->enableScaleIn) {
            @$query['EnableScaleIn'] = $request->enableScaleIn;
        }

        if (null !== $request->enableScaleOut) {
            @$query['EnableScaleOut'] = $request->enableScaleOut;
        }

        if (null !== $request->growInterval) {
            @$query['GrowInterval'] = $request->growInterval;
        }

        if (null !== $request->idleInterval) {
            @$query['IdleInterval'] = $request->idleInterval;
        }

        if (null !== $request->maxCoreCount) {
            @$query['MaxCoreCount'] = $request->maxCoreCount;
        }

        if (null !== $request->maxCount) {
            @$query['MaxCount'] = $request->maxCount;
        }

        if (null !== $request->monitorSpecShrink) {
            @$query['MonitorSpec'] = $request->monitorSpecShrink;
        }

        if (null !== $request->schedulerSpecShrink) {
            @$query['SchedulerSpec'] = $request->schedulerSpecShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCluster',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify the basic information of a specified cluster.
     *
     * @param request - UpdateClusterRequest
     *
     * @returns UpdateClusterResponse
     *
     * @param UpdateClusterRequest $request
     *
     * @return UpdateClusterResponse
     */
    public function updateCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateClusterWithOptions($request, $runtime);
    }

    /**
     * Updates the configurations of compute nodes in an Enterprise High Performance Computing (E-HPC) cluster.
     *
     * @remarks
     * ## [](#)Usage notes
     * Before you delete a compute node, we recommend that you export all job data from the node to prevent data loss.
     *
     * @param tmpReq - UpdateNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateNodesResponse
     *
     * @param UpdateNodesRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateNodesResponse
     */
    public function updateNodesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateNodesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instances) {
            $request->instancesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instances, 'Instances', 'json');
        }

        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->instancesShrink) {
            @$query['Instances'] = $request->instancesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateNodes',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the configurations of compute nodes in an Enterprise High Performance Computing (E-HPC) cluster.
     *
     * @remarks
     * ## [](#)Usage notes
     * Before you delete a compute node, we recommend that you export all job data from the node to prevent data loss.
     *
     * @param request - UpdateNodesRequest
     *
     * @returns UpdateNodesResponse
     *
     * @param UpdateNodesRequest $request
     *
     * @return UpdateNodesResponse
     */
    public function updateNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNodesWithOptions($request, $runtime);
    }

    /**
     * Modifies the configurations of a queue in an Elastic High Performance Computing (E-HPC) cluster.
     *
     * @param tmpReq - UpdateQueueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateQueueResponse
     *
     * @param UpdateQueueRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateQueueResponse
     */
    public function updateQueueWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateQueueShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->queue) {
            $request->queueShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->queue, 'Queue', 'json');
        }

        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->queueShrink) {
            @$query['Queue'] = $request->queueShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateQueue',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of a queue in an Elastic High Performance Computing (E-HPC) cluster.
     *
     * @param request - UpdateQueueRequest
     *
     * @returns UpdateQueueResponse
     *
     * @param UpdateQueueRequest $request
     *
     * @return UpdateQueueResponse
     */
    public function updateQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateQueueWithOptions($request, $runtime);
    }

    /**
     * Updates the information of a user in an Elastic High Performance Computing (E-HPC) cluster, including the user group and password.
     *
     * @param request - UpdateUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateUserResponse
     *
     * @param UpdateUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateUserResponse
     */
    public function updateUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->group) {
            @$query['Group'] = $request->group;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateUser',
            'version' => '2024-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the information of a user in an Elastic High Performance Computing (E-HPC) cluster, including the user group and password.
     *
     * @param request - UpdateUserRequest
     *
     * @returns UpdateUserResponse
     *
     * @param UpdateUserRequest $request
     *
     * @return UpdateUserResponse
     */
    public function updateUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserWithOptions($request, $runtime);
    }
}
