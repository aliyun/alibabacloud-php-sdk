<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Eci\V20180808\Models\CommitContainerRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\CommitContainerResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\CopyDataCacheRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\CopyDataCacheResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateDataCacheRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateDataCacheResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateImageCacheRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateImageCacheResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateInstanceOpsTaskRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateInstanceOpsTaskResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateVirtualNodeRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateVirtualNodeResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DeleteContainerGroupRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DeleteContainerGroupResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DeleteDataCacheRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DeleteDataCacheResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DeleteImageCacheRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DeleteImageCacheResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DeleteVirtualNodeRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DeleteVirtualNodeResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeAvailableResourceRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeAvailableResourceResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeCommitContainerTaskRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeCommitContainerTaskResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupEventsRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupEventsResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupPriceRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupPriceResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupStatusRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupStatusResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerLogRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerLogResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeDataCachesRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeDataCachesResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeImageCachesRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeImageCachesResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeInstanceOpsRecordsRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeInstanceOpsRecordsResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeVirtualNodesRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeVirtualNodesResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\ExecContainerCommandRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\ExecContainerCommandResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\ListUsageRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\ListUsageResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\ResizeContainerGroupVolumeRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\ResizeContainerGroupVolumeResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\RestartContainerGroupRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\RestartContainerGroupResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateDataCacheRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateDataCacheResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateImageCacheRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateImageCacheResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateVirtualNodeRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateVirtualNodeResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Eci extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('eci', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Creates an asynchronous task to store a specified container in an elastic container instance as an image and pushes the image to an image repository of Alibaba Cloud Container Registry.
     *
     * @remarks
     * You must specify the Alibaba Cloud Resource Name (ARN) of the RAM role of the Container Registry Enterprise Edition instance to grant the elastic container instance to assume the RAM role to push images.
     *
     * @param request - CommitContainerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CommitContainerResponse
     *
     * @param CommitContainerRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CommitContainerResponse
     */
    public function commitContainerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acrRegistryInfo) {
            @$query['AcrRegistryInfo'] = $request->acrRegistryInfo;
        }

        if (null !== $request->arn) {
            @$query['Arn'] = $request->arn;
        }

        if (null !== $request->containerGroupId) {
            @$query['ContainerGroupId'] = $request->containerGroupId;
        }

        if (null !== $request->containerName) {
            @$query['ContainerName'] = $request->containerName;
        }

        if (null !== $request->image) {
            @$query['Image'] = $request->image;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CommitContainer',
            'version' => '2018-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CommitContainerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an asynchronous task to store a specified container in an elastic container instance as an image and pushes the image to an image repository of Alibaba Cloud Container Registry.
     *
     * @remarks
     * You must specify the Alibaba Cloud Resource Name (ARN) of the RAM role of the Container Registry Enterprise Edition instance to grant the elastic container instance to assume the RAM role to push images.
     *
     * @param request - CommitContainerRequest
     *
     * @returns CommitContainerResponse
     *
     * @param CommitContainerRequest $request
     *
     * @return CommitContainerResponse
     */
    public function commitContainer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->commitContainerWithOptions($request, $runtime);
    }

    /**
     * Copies a DataCache from one region to another region.
     *
     * @remarks
     * You cannot directly use a DataCache across regions. You can call this operation to copy a DataCache from one region to another region. This operation is suitable for the following scenarios:
     * *   If you want to use a DataCache across regions and the DataCache exists in Region A, you can call this operation to quickly copy the DataCache to Region B.
     * *   If you directly pull data from a region outside China to a region inside the Chinese mainland when you create a DataCache, the data may be pulled at a slow speed due to network limits. In this case, you can create a DataCache in a region outside the Chinese mainland but inside China, such as the China (Hong Kong) region, and call this operation to copy the data to the region inside the Chinese mainland.
     * > The process of copying a DataCache is equivalent to copying a snapshot. You are charged for the traffic generated during the copy process and the storage of the generated DataCache.
     *
     * @param request - CopyDataCacheRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CopyDataCacheResponse
     *
     * @param CopyDataCacheRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CopyDataCacheResponse
     */
    public function copyDataCacheWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bucket) {
            @$query['Bucket'] = $request->bucket;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dataCacheId) {
            @$query['DataCacheId'] = $request->dataCacheId;
        }

        if (null !== $request->destinationRegionId) {
            @$query['DestinationRegionId'] = $request->destinationRegionId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->retentionDays) {
            @$query['RetentionDays'] = $request->retentionDays;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CopyDataCache',
            'version' => '2018-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CopyDataCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Copies a DataCache from one region to another region.
     *
     * @remarks
     * You cannot directly use a DataCache across regions. You can call this operation to copy a DataCache from one region to another region. This operation is suitable for the following scenarios:
     * *   If you want to use a DataCache across regions and the DataCache exists in Region A, you can call this operation to quickly copy the DataCache to Region B.
     * *   If you directly pull data from a region outside China to a region inside the Chinese mainland when you create a DataCache, the data may be pulled at a slow speed due to network limits. In this case, you can create a DataCache in a region outside the Chinese mainland but inside China, such as the China (Hong Kong) region, and call this operation to copy the data to the region inside the Chinese mainland.
     * > The process of copying a DataCache is equivalent to copying a snapshot. You are charged for the traffic generated during the copy process and the storage of the generated DataCache.
     *
     * @param request - CopyDataCacheRequest
     *
     * @returns CopyDataCacheResponse
     *
     * @param CopyDataCacheRequest $request
     *
     * @return CopyDataCacheResponse
     */
    public function copyDataCache($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyDataCacheWithOptions($request, $runtime);
    }

    /**
     * Creates an elastic container instance.
     *
     * @remarks
     * When you call the CreateContainerGroup operation to create an elastic container instance, the system automatically creates a service-linked role named AliyunServiceRoleForECI. You can assume the service-linked role to access relevant cloud services such as Elastic Compute Service (ECS) and Virtual Private Cloud (VPC). For more information, see [Elastic Container Instance service-linked role](https://help.aliyun.com/document_detail/212914.html).
     * When you create an elastic container instance, you can configure features that are related to instances, images, and storage based on your business requirements. For information about parameters configured for the features and the description of the parameters, see the following documents:
     * **Instances**
     * You can use one of the following methods to create an elastic container instance:
     * *   [Specify the number of vCPUs and memory size to create an elastic container instance](https://help.aliyun.com/document_detail/114662.html)
     * *   [Specify ECS instance types to create an elastic container instance](https://help.aliyun.com/document_detail/114664.html)
     * Both the preceding creation methods support the following features:
     * *   [Create a preemptible elastic container instance](https://help.aliyun.com/document_detail/157759.html)
     * *   [Configure multiple zones](https://help.aliyun.com/document_detail/157290.html)
     * *   [Configure multiple specifications](https://help.aliyun.com/document_detail/146468.html)
     * *   [Use tags to manage elastic container instances](https://help.aliyun.com/document_detail/146608.html)
     * **Images**
     * *   [Configure a container image](https://help.aliyun.com/document_detail/461311.html)
     * *   [Use the image cache feature to accelerate the creation of an elastic container instance](https://help.aliyun.com/document_detail/141281.html)
     * *   [Specify a Container Registry Enterprise Edition instance](https://help.aliyun.com/document_detail/194250.html)
     * *   [Use self-managed image repositories](https://help.aliyun.com/document_detail/378059.html)
     * **Networking**
     * *   [Create and Associate an EIP](https://help.aliyun.com/document_detail/99146.html)
     * *   [Assign a security group](https://help.aliyun.com/document_detail/176237.html)
     * *   [Assign an IPv6 address to an elastic container instance](https://help.aliyun.com/document_detail/451282.html)
     * *   [Configure maximum bandwidth](https://help.aliyun.com/document_detail/190635.html)
     * **Storage**
     * *   [Mount a disk volume](https://help.aliyun.com/document_detail/144571.html)
     * *   [Mount a NAS volume](https://help.aliyun.com/document_detail/464075.html)
     * *   [Mount an OSS bucket to an elastic container instance as a volume](https://help.aliyun.com/document_detail/464076.html)
     * *   [Mount an emptyDir volume](https://help.aliyun.com/document_detail/464078.html)
     * *   [Mount a ConfigFile volume](https://help.aliyun.com/document_detail/464080.html)
     * *   [Increase the size of the temporary storage space](https://help.aliyun.com/document_detail/204066.html)
     * **Container configuration**
     * *   [Configure startup commands and arguments for a container](https://help.aliyun.com/document_detail/94593.html)
     * *   [Use probes to perform health checks on a container](https://help.aliyun.com/document_detail/99053.html)
     * *   [Obtain metadata by using environment variables](https://help.aliyun.com/document_detail/141788.html)
     * *   [Configure a security context for an elastic container instance or a container](https://help.aliyun.com/document_detail/462313.html)
     * *   [Configure the NTP service](https://help.aliyun.com/document_detail/462768.html)
     * **Logging and O\\&M**
     * *   [Use environment variables to configure log collection](https://help.aliyun.com/document_detail/121973.html)
     * *   [Save core files to volumes](https://help.aliyun.com/document_detail/167801.html)
     *
     * @param request - CreateContainerGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateContainerGroupResponse
     *
     * @param CreateContainerGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateContainerGroupResponse
     */
    public function createContainerGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acrRegistryInfo) {
            @$query['AcrRegistryInfo'] = $request->acrRegistryInfo;
        }

        if (null !== $request->activeDeadlineSeconds) {
            @$query['ActiveDeadlineSeconds'] = $request->activeDeadlineSeconds;
        }

        if (null !== $request->autoCreateEip) {
            @$query['AutoCreateEip'] = $request->autoCreateEip;
        }

        if (null !== $request->autoMatchImageCache) {
            @$query['AutoMatchImageCache'] = $request->autoMatchImageCache;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->computeCategory) {
            @$query['ComputeCategory'] = $request->computeCategory;
        }

        if (null !== $request->container) {
            @$query['Container'] = $request->container;
        }

        if (null !== $request->containerGroupName) {
            @$query['ContainerGroupName'] = $request->containerGroupName;
        }

        if (null !== $request->containerResourceView) {
            @$query['ContainerResourceView'] = $request->containerResourceView;
        }

        if (null !== $request->corePattern) {
            @$query['CorePattern'] = $request->corePattern;
        }

        if (null !== $request->cpu) {
            @$query['Cpu'] = $request->cpu;
        }

        if (null !== $request->cpuArchitecture) {
            @$query['CpuArchitecture'] = $request->cpuArchitecture;
        }

        if (null !== $request->cpuOptionsCore) {
            @$query['CpuOptionsCore'] = $request->cpuOptionsCore;
        }

        if (null !== $request->cpuOptionsNuma) {
            @$query['CpuOptionsNuma'] = $request->cpuOptionsNuma;
        }

        if (null !== $request->cpuOptionsThreadsPerCore) {
            @$query['CpuOptionsThreadsPerCore'] = $request->cpuOptionsThreadsPerCore;
        }

        if (null !== $request->dataCacheBucket) {
            @$query['DataCacheBucket'] = $request->dataCacheBucket;
        }

        if (null !== $request->dataCacheBurstingEnabled) {
            @$query['DataCacheBurstingEnabled'] = $request->dataCacheBurstingEnabled;
        }

        if (null !== $request->dataCachePL) {
            @$query['DataCachePL'] = $request->dataCachePL;
        }

        if (null !== $request->dataCacheProvisionedIops) {
            @$query['DataCacheProvisionedIops'] = $request->dataCacheProvisionedIops;
        }

        if (null !== $request->dnsPolicy) {
            @$query['DnsPolicy'] = $request->dnsPolicy;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->egressBandwidth) {
            @$query['EgressBandwidth'] = $request->egressBandwidth;
        }

        if (null !== $request->eipBandwidth) {
            @$query['EipBandwidth'] = $request->eipBandwidth;
        }

        if (null !== $request->eipCommonBandwidthPackage) {
            @$query['EipCommonBandwidthPackage'] = $request->eipCommonBandwidthPackage;
        }

        if (null !== $request->eipISP) {
            @$query['EipISP'] = $request->eipISP;
        }

        if (null !== $request->eipInstanceId) {
            @$query['EipInstanceId'] = $request->eipInstanceId;
        }

        if (null !== $request->ephemeralStorage) {
            @$query['EphemeralStorage'] = $request->ephemeralStorage;
        }

        if (null !== $request->fixedIp) {
            @$query['FixedIp'] = $request->fixedIp;
        }

        if (null !== $request->fixedIpRetainHour) {
            @$query['FixedIpRetainHour'] = $request->fixedIpRetainHour;
        }

        if (null !== $request->gpuDriverVersion) {
            @$query['GpuDriverVersion'] = $request->gpuDriverVersion;
        }

        if (null !== $request->hostAliase) {
            @$query['HostAliase'] = $request->hostAliase;
        }

        if (null !== $request->hostName) {
            @$query['HostName'] = $request->hostName;
        }

        if (null !== $request->imageAccelerateMode) {
            @$query['ImageAccelerateMode'] = $request->imageAccelerateMode;
        }

        if (null !== $request->imageRegistryCredential) {
            @$query['ImageRegistryCredential'] = $request->imageRegistryCredential;
        }

        if (null !== $request->imageSnapshotId) {
            @$query['ImageSnapshotId'] = $request->imageSnapshotId;
        }

        if (null !== $request->ingressBandwidth) {
            @$query['IngressBandwidth'] = $request->ingressBandwidth;
        }

        if (null !== $request->initContainer) {
            @$query['InitContainer'] = $request->initContainer;
        }

        if (null !== $request->insecureRegistry) {
            @$query['InsecureRegistry'] = $request->insecureRegistry;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->ipv6AddressCount) {
            @$query['Ipv6AddressCount'] = $request->ipv6AddressCount;
        }

        if (null !== $request->ipv6GatewayBandwidth) {
            @$query['Ipv6GatewayBandwidth'] = $request->ipv6GatewayBandwidth;
        }

        if (null !== $request->ipv6GatewayBandwidthEnable) {
            @$query['Ipv6GatewayBandwidthEnable'] = $request->ipv6GatewayBandwidthEnable;
        }

        if (null !== $request->maxPendingMinute) {
            @$query['MaxPendingMinute'] = $request->maxPendingMinute;
        }

        if (null !== $request->memory) {
            @$query['Memory'] = $request->memory;
        }

        if (null !== $request->ntpServer) {
            @$query['NtpServer'] = $request->ntpServer;
        }

        if (null !== $request->osType) {
            @$query['OsType'] = $request->osType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->plainHttpRegistry) {
            @$query['PlainHttpRegistry'] = $request->plainHttpRegistry;
        }

        if (null !== $request->privateIpAddress) {
            @$query['PrivateIpAddress'] = $request->privateIpAddress;
        }

        if (null !== $request->ramRoleName) {
            @$query['RamRoleName'] = $request->ramRoleName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->restartPolicy) {
            @$query['RestartPolicy'] = $request->restartPolicy;
        }

        if (null !== $request->scheduleStrategy) {
            @$query['ScheduleStrategy'] = $request->scheduleStrategy;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->shareProcessNamespace) {
            @$query['ShareProcessNamespace'] = $request->shareProcessNamespace;
        }

        if (null !== $request->spotDuration) {
            @$query['SpotDuration'] = $request->spotDuration;
        }

        if (null !== $request->spotPriceLimit) {
            @$query['SpotPriceLimit'] = $request->spotPriceLimit;
        }

        if (null !== $request->spotStrategy) {
            @$query['SpotStrategy'] = $request->spotStrategy;
        }

        if (null !== $request->strictSpot) {
            @$query['StrictSpot'] = $request->strictSpot;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->terminationGracePeriodSeconds) {
            @$query['TerminationGracePeriodSeconds'] = $request->terminationGracePeriodSeconds;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->volume) {
            @$query['Volume'] = $request->volume;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        if (null !== $request->dnsConfig) {
            @$query['DnsConfig'] = $request->dnsConfig;
        }

        if (null !== $request->hostSecurityContext) {
            @$query['HostSecurityContext'] = $request->hostSecurityContext;
        }

        if (null !== $request->securityContext) {
            @$query['SecurityContext'] = $request->securityContext;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateContainerGroup',
            'version' => '2018-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateContainerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an elastic container instance.
     *
     * @remarks
     * When you call the CreateContainerGroup operation to create an elastic container instance, the system automatically creates a service-linked role named AliyunServiceRoleForECI. You can assume the service-linked role to access relevant cloud services such as Elastic Compute Service (ECS) and Virtual Private Cloud (VPC). For more information, see [Elastic Container Instance service-linked role](https://help.aliyun.com/document_detail/212914.html).
     * When you create an elastic container instance, you can configure features that are related to instances, images, and storage based on your business requirements. For information about parameters configured for the features and the description of the parameters, see the following documents:
     * **Instances**
     * You can use one of the following methods to create an elastic container instance:
     * *   [Specify the number of vCPUs and memory size to create an elastic container instance](https://help.aliyun.com/document_detail/114662.html)
     * *   [Specify ECS instance types to create an elastic container instance](https://help.aliyun.com/document_detail/114664.html)
     * Both the preceding creation methods support the following features:
     * *   [Create a preemptible elastic container instance](https://help.aliyun.com/document_detail/157759.html)
     * *   [Configure multiple zones](https://help.aliyun.com/document_detail/157290.html)
     * *   [Configure multiple specifications](https://help.aliyun.com/document_detail/146468.html)
     * *   [Use tags to manage elastic container instances](https://help.aliyun.com/document_detail/146608.html)
     * **Images**
     * *   [Configure a container image](https://help.aliyun.com/document_detail/461311.html)
     * *   [Use the image cache feature to accelerate the creation of an elastic container instance](https://help.aliyun.com/document_detail/141281.html)
     * *   [Specify a Container Registry Enterprise Edition instance](https://help.aliyun.com/document_detail/194250.html)
     * *   [Use self-managed image repositories](https://help.aliyun.com/document_detail/378059.html)
     * **Networking**
     * *   [Create and Associate an EIP](https://help.aliyun.com/document_detail/99146.html)
     * *   [Assign a security group](https://help.aliyun.com/document_detail/176237.html)
     * *   [Assign an IPv6 address to an elastic container instance](https://help.aliyun.com/document_detail/451282.html)
     * *   [Configure maximum bandwidth](https://help.aliyun.com/document_detail/190635.html)
     * **Storage**
     * *   [Mount a disk volume](https://help.aliyun.com/document_detail/144571.html)
     * *   [Mount a NAS volume](https://help.aliyun.com/document_detail/464075.html)
     * *   [Mount an OSS bucket to an elastic container instance as a volume](https://help.aliyun.com/document_detail/464076.html)
     * *   [Mount an emptyDir volume](https://help.aliyun.com/document_detail/464078.html)
     * *   [Mount a ConfigFile volume](https://help.aliyun.com/document_detail/464080.html)
     * *   [Increase the size of the temporary storage space](https://help.aliyun.com/document_detail/204066.html)
     * **Container configuration**
     * *   [Configure startup commands and arguments for a container](https://help.aliyun.com/document_detail/94593.html)
     * *   [Use probes to perform health checks on a container](https://help.aliyun.com/document_detail/99053.html)
     * *   [Obtain metadata by using environment variables](https://help.aliyun.com/document_detail/141788.html)
     * *   [Configure a security context for an elastic container instance or a container](https://help.aliyun.com/document_detail/462313.html)
     * *   [Configure the NTP service](https://help.aliyun.com/document_detail/462768.html)
     * **Logging and O\\&M**
     * *   [Use environment variables to configure log collection](https://help.aliyun.com/document_detail/121973.html)
     * *   [Save core files to volumes](https://help.aliyun.com/document_detail/167801.html)
     *
     * @param request - CreateContainerGroupRequest
     *
     * @returns CreateContainerGroupResponse
     *
     * @param CreateContainerGroupRequest $request
     *
     * @return CreateContainerGroupResponse
     */
    public function createContainerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createContainerGroupWithOptions($request, $runtime);
    }

    /**
     * Creates a DataCache.
     *
     * @remarks
     *   You are charged for the creation of image caches. We recommend that you learn the relevant billing information in advance. For more information, see [DataCaches](https://help.aliyun.com/document_detail/2503093.html).
     * *   Before you create an image cache, you must evaluate the size of the data to be cached. If the size of the data exceeds the specified cache size, the image cache fails to be created.
     * *   When a data cache is being created, the system automatically creates a temporary elastic container instance (ECI) and an enhanced SSD (ESSD) for the data cache. During the creation, do not delete the ECI and ESSD. Otherwise, the data cache fails to be created.
     * *   When a data cache is being created, a snapshot is generated for the data cache. Do not delete the snapshot. Otherwise, the data cache becomes invalid.
     *
     * @param request - CreateDataCacheRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDataCacheResponse
     *
     * @param CreateDataCacheRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateDataCacheResponse
     */
    public function createDataCacheWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bucket) {
            @$query['Bucket'] = $request->bucket;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dataSource) {
            @$query['DataSource'] = $request->dataSource;
        }

        if (null !== $request->eipCreateParam) {
            @$query['EipCreateParam'] = $request->eipCreateParam;
        }

        if (null !== $request->eipInstanceId) {
            @$query['EipInstanceId'] = $request->eipInstanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->retentionDays) {
            @$query['RetentionDays'] = $request->retentionDays;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->size) {
            @$query['Size'] = $request->size;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDataCache',
            'version' => '2018-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDataCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a DataCache.
     *
     * @remarks
     *   You are charged for the creation of image caches. We recommend that you learn the relevant billing information in advance. For more information, see [DataCaches](https://help.aliyun.com/document_detail/2503093.html).
     * *   Before you create an image cache, you must evaluate the size of the data to be cached. If the size of the data exceeds the specified cache size, the image cache fails to be created.
     * *   When a data cache is being created, the system automatically creates a temporary elastic container instance (ECI) and an enhanced SSD (ESSD) for the data cache. During the creation, do not delete the ECI and ESSD. Otherwise, the data cache fails to be created.
     * *   When a data cache is being created, a snapshot is generated for the data cache. Do not delete the snapshot. Otherwise, the data cache becomes invalid.
     *
     * @param request - CreateDataCacheRequest
     *
     * @returns CreateDataCacheResponse
     *
     * @param CreateDataCacheRequest $request
     *
     * @return CreateDataCacheResponse
     */
    public function createDataCache($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataCacheWithOptions($request, $runtime);
    }

    /**
     * Creates an image cache. The image cache can accelerate image pulling and reduce the instance startup time when you create an elastic container instance later.
     *
     * @remarks
     *   **Precautions**
     *     *   You are charged for creation of image caches. We recommend that you learn the relevant billing information in advance. For more information about billing of image caches, see [Image caches](https://help.aliyun.com/document_detail/447682.html).
     *     *   Before you create an image cache, you must estimate the total size of the images that you want to cache. If the total size of the images exceeds the specified cache size, the image cache cannot be created.
     *     *   When an image cache is being created, the system creates an intermediate elastic container instance and an intermediate enhanced SSD (ESSD) at performance level 1 (PL1). Do not delete the intermediate instance and the ESSD while the image cache is being created. If you delete the intermediate instance or the ESSD, the image cache cannot be created.
     *     *   A temporary local snapshot and a specific number of regular snapshots are generated during the creation of the image cache. Do not delete these snapshots. If you delete these snapshots, the image cache becomes invalid.
     *     *   If you use SDKs, SDK for Java 1.0.10 or later and SDK for Python 1.0.7 or later are supported.
     * *   **Usage notes**
     *     *   For images that are created based on Container Registry Enterprise Edition instances and use custom domain names, if you want to configure password-free access to the image caches, you must use AcrRegistryInfo-related parameters to specify Container Registry instances. When you configure AcrRegistryInfo-related parameters, you must set the AcrRegistryInfo.N.InstanceId parameter.
     *     *   If the image cache that you created will be used to create more than 1,000 elastic container instances at a time, we recommend that you use the StandardCopyCount and FlashCopyCount parameters to create multiple temporary local snapshots and regular snapshots of the image. The multiple snapshots are billed based on incremental data. If no incremental data exists on the multiple snapshots, you are not charged for the multiple snapshots.
     * >  When you call the CreateImageCache operation to create an image cache, the system automatically creates a service-linked role named AliyunServiceRoleForECI. The role is used to access other Alibaba Cloud services such as Elastic Compute Service (ECS) and Virtual Private Cloud (VPC). For more information, see [Elastic Container Instance service-linked role](https://help.aliyun.com/document_detail/212914.html).
     *
     * @param request - CreateImageCacheRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateImageCacheResponse
     *
     * @param CreateImageCacheRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateImageCacheResponse
     */
    public function createImageCacheWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acrRegistryInfo) {
            @$query['AcrRegistryInfo'] = $request->acrRegistryInfo;
        }

        if (null !== $request->annotations) {
            @$query['Annotations'] = $request->annotations;
        }

        if (null !== $request->autoMatchImageCache) {
            @$query['AutoMatchImageCache'] = $request->autoMatchImageCache;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->eipInstanceId) {
            @$query['EipInstanceId'] = $request->eipInstanceId;
        }

        if (null !== $request->eliminationStrategy) {
            @$query['EliminationStrategy'] = $request->eliminationStrategy;
        }

        if (null !== $request->flash) {
            @$query['Flash'] = $request->flash;
        }

        if (null !== $request->flashCopyCount) {
            @$query['FlashCopyCount'] = $request->flashCopyCount;
        }

        if (null !== $request->image) {
            @$query['Image'] = $request->image;
        }

        if (null !== $request->imageCacheName) {
            @$query['ImageCacheName'] = $request->imageCacheName;
        }

        if (null !== $request->imageCacheSize) {
            @$query['ImageCacheSize'] = $request->imageCacheSize;
        }

        if (null !== $request->imageRegistryCredential) {
            @$query['ImageRegistryCredential'] = $request->imageRegistryCredential;
        }

        if (null !== $request->insecureRegistry) {
            @$query['InsecureRegistry'] = $request->insecureRegistry;
        }

        if (null !== $request->osType) {
            @$query['OsType'] = $request->osType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->plainHttpRegistry) {
            @$query['PlainHttpRegistry'] = $request->plainHttpRegistry;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->retentionDays) {
            @$query['RetentionDays'] = $request->retentionDays;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->standardCopyCount) {
            @$query['StandardCopyCount'] = $request->standardCopyCount;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateImageCache',
            'version' => '2018-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateImageCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an image cache. The image cache can accelerate image pulling and reduce the instance startup time when you create an elastic container instance later.
     *
     * @remarks
     *   **Precautions**
     *     *   You are charged for creation of image caches. We recommend that you learn the relevant billing information in advance. For more information about billing of image caches, see [Image caches](https://help.aliyun.com/document_detail/447682.html).
     *     *   Before you create an image cache, you must estimate the total size of the images that you want to cache. If the total size of the images exceeds the specified cache size, the image cache cannot be created.
     *     *   When an image cache is being created, the system creates an intermediate elastic container instance and an intermediate enhanced SSD (ESSD) at performance level 1 (PL1). Do not delete the intermediate instance and the ESSD while the image cache is being created. If you delete the intermediate instance or the ESSD, the image cache cannot be created.
     *     *   A temporary local snapshot and a specific number of regular snapshots are generated during the creation of the image cache. Do not delete these snapshots. If you delete these snapshots, the image cache becomes invalid.
     *     *   If you use SDKs, SDK for Java 1.0.10 or later and SDK for Python 1.0.7 or later are supported.
     * *   **Usage notes**
     *     *   For images that are created based on Container Registry Enterprise Edition instances and use custom domain names, if you want to configure password-free access to the image caches, you must use AcrRegistryInfo-related parameters to specify Container Registry instances. When you configure AcrRegistryInfo-related parameters, you must set the AcrRegistryInfo.N.InstanceId parameter.
     *     *   If the image cache that you created will be used to create more than 1,000 elastic container instances at a time, we recommend that you use the StandardCopyCount and FlashCopyCount parameters to create multiple temporary local snapshots and regular snapshots of the image. The multiple snapshots are billed based on incremental data. If no incremental data exists on the multiple snapshots, you are not charged for the multiple snapshots.
     * >  When you call the CreateImageCache operation to create an image cache, the system automatically creates a service-linked role named AliyunServiceRoleForECI. The role is used to access other Alibaba Cloud services such as Elastic Compute Service (ECS) and Virtual Private Cloud (VPC). For more information, see [Elastic Container Instance service-linked role](https://help.aliyun.com/document_detail/212914.html).
     *
     * @param request - CreateImageCacheRequest
     *
     * @returns CreateImageCacheResponse
     *
     * @param CreateImageCacheRequest $request
     *
     * @return CreateImageCacheResponse
     */
    public function createImageCache($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImageCacheWithOptions($request, $runtime);
    }

    /**
     * Creates an O&M task.
     *
     * @remarks
     * O&M tasks are classified into:
     * *   coredump: After you enable coredump, the system generates a core dump file when a container unexpectedly stops. You can use the core dump file to analyze the exception and find out the cause of the problem. For more information, see [Enable coredump](https://help.aliyun.com/document_detail/167801.html).
     * *   tcpdump: After you enable tcpdump, the system captures network packets when a container unexpectedly stops. You can analyze the packets and locate network problems. For more information, see Enable [tcpdump](https://help.aliyun.com/document_detail/429749.html).
     *
     * @param request - CreateInstanceOpsTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceOpsTaskResponse
     *
     * @param CreateInstanceOpsTaskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateInstanceOpsTaskResponse
     */
    public function createInstanceOpsTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->containerGroupId) {
            @$query['ContainerGroupId'] = $request->containerGroupId;
        }

        if (null !== $request->opsType) {
            @$query['OpsType'] = $request->opsType;
        }

        if (null !== $request->opsValue) {
            @$query['OpsValue'] = $request->opsValue;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateInstanceOpsTask',
            'version' => '2018-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateInstanceOpsTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an O&M task.
     *
     * @remarks
     * O&M tasks are classified into:
     * *   coredump: After you enable coredump, the system generates a core dump file when a container unexpectedly stops. You can use the core dump file to analyze the exception and find out the cause of the problem. For more information, see [Enable coredump](https://help.aliyun.com/document_detail/167801.html).
     * *   tcpdump: After you enable tcpdump, the system captures network packets when a container unexpectedly stops. You can analyze the packets and locate network problems. For more information, see Enable [tcpdump](https://help.aliyun.com/document_detail/429749.html).
     *
     * @param request - CreateInstanceOpsTaskRequest
     *
     * @returns CreateInstanceOpsTaskResponse
     *
     * @param CreateInstanceOpsTaskRequest $request
     *
     * @return CreateInstanceOpsTaskResponse
     */
    public function createInstanceOpsTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceOpsTaskWithOptions($request, $runtime);
    }

    /**
     * Creates a VNode to connect self-managed Kubernetes clusters to elastic container instances.
     *
     * @remarks
     *   When you call this operation to create a virtual node, the system automatically creates a service-linked role AliyunServiceRoleForECIVnode. This way, you can use the service-linked role to access relevant cloud services such as Elastic Container Instance, Elastic Compute Service (ECS), and Virtual Private Cloud (VPC). For more information, see [Service-linked role for virtual nodes](https://help.aliyun.com/document_detail/311014.html).
     * *   You are charged for virtual nodes based on number of virtual nodes that you use. Each virtual node has a resident node, which is equivalent to an ECI instance with 2 vCPU cores and 8 GiB memory. You are charged for virtual nodes based on elastic container instances.
     *
     * @param request - CreateVirtualNodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVirtualNodeResponse
     *
     * @param CreateVirtualNodeRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateVirtualNodeResponse
     */
    public function createVirtualNodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->clusterDNS) {
            @$query['ClusterDNS'] = $request->clusterDNS;
        }

        if (null !== $request->clusterDomain) {
            @$query['ClusterDomain'] = $request->clusterDomain;
        }

        if (null !== $request->customResources) {
            @$query['CustomResources'] = $request->customResources;
        }

        if (null !== $request->eipInstanceId) {
            @$query['EipInstanceId'] = $request->eipInstanceId;
        }

        if (null !== $request->enablePublicNetwork) {
            @$query['EnablePublicNetwork'] = $request->enablePublicNetwork;
        }

        if (null !== $request->kubeConfig) {
            @$query['KubeConfig'] = $request->kubeConfig;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->taint) {
            @$query['Taint'] = $request->taint;
        }

        if (null !== $request->tlsBootstrapEnabled) {
            @$query['TlsBootstrapEnabled'] = $request->tlsBootstrapEnabled;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->virtualNodeName) {
            @$query['VirtualNodeName'] = $request->virtualNodeName;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateVirtualNode',
            'version' => '2018-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVirtualNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a VNode to connect self-managed Kubernetes clusters to elastic container instances.
     *
     * @remarks
     *   When you call this operation to create a virtual node, the system automatically creates a service-linked role AliyunServiceRoleForECIVnode. This way, you can use the service-linked role to access relevant cloud services such as Elastic Container Instance, Elastic Compute Service (ECS), and Virtual Private Cloud (VPC). For more information, see [Service-linked role for virtual nodes](https://help.aliyun.com/document_detail/311014.html).
     * *   You are charged for virtual nodes based on number of virtual nodes that you use. Each virtual node has a resident node, which is equivalent to an ECI instance with 2 vCPU cores and 8 GiB memory. You are charged for virtual nodes based on elastic container instances.
     *
     * @param request - CreateVirtualNodeRequest
     *
     * @returns CreateVirtualNodeResponse
     *
     * @param CreateVirtualNodeRequest $request
     *
     * @return CreateVirtualNodeResponse
     */
    public function createVirtualNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVirtualNodeWithOptions($request, $runtime);
    }

    /**
     * Deletes a container group.
     *
     * @remarks
     * You can delete a container group that you no longer need. Before you delete a container group, make sure that you understand the lifecycle of container groups. For more information, see [Lifecycle of an elastic container instance](https://help.aliyun.com/document_detail/122385.html).
     *
     * @param request - DeleteContainerGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteContainerGroupResponse
     *
     * @param DeleteContainerGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteContainerGroupResponse
     */
    public function deleteContainerGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->containerGroupId) {
            @$query['ContainerGroupId'] = $request->containerGroupId;
        }

        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteContainerGroup',
            'version' => '2018-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteContainerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a container group.
     *
     * @remarks
     * You can delete a container group that you no longer need. Before you delete a container group, make sure that you understand the lifecycle of container groups. For more information, see [Lifecycle of an elastic container instance](https://help.aliyun.com/document_detail/122385.html).
     *
     * @param request - DeleteContainerGroupRequest
     *
     * @returns DeleteContainerGroupResponse
     *
     * @param DeleteContainerGroupRequest $request
     *
     * @return DeleteContainerGroupResponse
     */
    public function deleteContainerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteContainerGroupWithOptions($request, $runtime);
    }

    /**
     * Deletes a DataCache.
     *
     * @param request - DeleteDataCacheRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDataCacheResponse
     *
     * @param DeleteDataCacheRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteDataCacheResponse
     */
    public function deleteDataCacheWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bucket) {
            @$query['Bucket'] = $request->bucket;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dataCacheId) {
            @$query['DataCacheId'] = $request->dataCacheId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDataCache',
            'version' => '2018-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDataCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a DataCache.
     *
     * @param request - DeleteDataCacheRequest
     *
     * @returns DeleteDataCacheResponse
     *
     * @param DeleteDataCacheRequest $request
     *
     * @return DeleteDataCacheResponse
     */
    public function deleteDataCache($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataCacheWithOptions($request, $runtime);
    }

    /**
     * Deletes an image cache.
     *
     * @param request - DeleteImageCacheRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteImageCacheResponse
     *
     * @param DeleteImageCacheRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteImageCacheResponse
     */
    public function deleteImageCacheWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->imageCacheId) {
            @$query['ImageCacheId'] = $request->imageCacheId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteImageCache',
            'version' => '2018-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteImageCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an image cache.
     *
     * @param request - DeleteImageCacheRequest
     *
     * @returns DeleteImageCacheResponse
     *
     * @param DeleteImageCacheRequest $request
     *
     * @return DeleteImageCacheResponse
     */
    public function deleteImageCache($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteImageCacheWithOptions($request, $runtime);
    }

    /**
     * Deletes a virtual node.
     *
     * @param request - DeleteVirtualNodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVirtualNodeResponse
     *
     * @param DeleteVirtualNodeRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteVirtualNodeResponse
     */
    public function deleteVirtualNodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->virtualNodeId) {
            @$query['VirtualNodeId'] = $request->virtualNodeId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteVirtualNode',
            'version' => '2018-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteVirtualNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a virtual node.
     *
     * @param request - DeleteVirtualNodeRequest
     *
     * @returns DeleteVirtualNodeResponse
     *
     * @param DeleteVirtualNodeRequest $request
     *
     * @return DeleteVirtualNodeResponse
     */
    public function deleteVirtualNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVirtualNodeWithOptions($request, $runtime);
    }

    /**
     * Queries the Elastic Compute Service (ECS) instance families that are available in a specified region and zone.
     *
     * @remarks
     * When you call the CreateContainerGroup operation to create an elastic container instance, you can use the InstanceType parameter to specify ECS instance types that fit your specific needs. To ensure that the elastic container instance can be created, you can call the DescribeAvailableResource operation to query which ECS instance types and instance families are available in the specified region and zone before you create the elastic container instance.
     *
     * @param request - DescribeAvailableResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAvailableResourceResponse
     *
     * @param DescribeAvailableResourceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAvailableResourceResponse
     */
    public function describeAvailableResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->destinationResource) {
            @$query['DestinationResource'] = $request->destinationResource;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->spotResource) {
            @$query['SpotResource'] = $request->spotResource;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAvailableResource',
            'version' => '2018-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAvailableResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Elastic Compute Service (ECS) instance families that are available in a specified region and zone.
     *
     * @remarks
     * When you call the CreateContainerGroup operation to create an elastic container instance, you can use the InstanceType parameter to specify ECS instance types that fit your specific needs. To ensure that the elastic container instance can be created, you can call the DescribeAvailableResource operation to query which ECS instance types and instance families are available in the specified region and zone before you create the elastic container instance.
     *
     * @param request - DescribeAvailableResourceRequest
     *
     * @returns DescribeAvailableResourceResponse
     *
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
     * Queries the details of a CommitContainer task.
     *
     * @param request - DescribeCommitContainerTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCommitContainerTaskResponse
     *
     * @param DescribeCommitContainerTaskRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeCommitContainerTaskResponse
     */
    public function describeCommitContainerTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->containerGroupId) {
            @$query['ContainerGroupId'] = $request->containerGroupId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskStatus) {
            @$query['TaskStatus'] = $request->taskStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCommitContainerTask',
            'version' => '2018-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCommitContainerTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a CommitContainer task.
     *
     * @param request - DescribeCommitContainerTaskRequest
     *
     * @returns DescribeCommitContainerTaskResponse
     *
     * @param DescribeCommitContainerTaskRequest $request
     *
     * @return DescribeCommitContainerTaskResponse
     */
    public function describeCommitContainerTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCommitContainerTaskWithOptions($request, $runtime);
    }

    /**
     * Queries event information about multiple container groups at a time.
     *
     * @remarks
     * You can call this operation to query the event information about multiple elastic container instances at a time. By default, the most recent 50 entries of events of each elastic container instance are returned.
     *
     * @param request - DescribeContainerGroupEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeContainerGroupEventsResponse
     *
     * @param DescribeContainerGroupEventsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeContainerGroupEventsResponse
     */
    public function describeContainerGroupEventsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->containerGroupIds) {
            @$query['ContainerGroupIds'] = $request->containerGroupIds;
        }

        if (null !== $request->eventSource) {
            @$query['EventSource'] = $request->eventSource;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sinceSecond) {
            @$query['SinceSecond'] = $request->sinceSecond;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeContainerGroupEvents',
            'version' => '2018-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeContainerGroupEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries event information about multiple container groups at a time.
     *
     * @remarks
     * You can call this operation to query the event information about multiple elastic container instances at a time. By default, the most recent 50 entries of events of each elastic container instance are returned.
     *
     * @param request - DescribeContainerGroupEventsRequest
     *
     * @returns DescribeContainerGroupEventsResponse
     *
     * @param DescribeContainerGroupEventsRequest $request
     *
     * @return DescribeContainerGroupEventsResponse
     */
    public function describeContainerGroupEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContainerGroupEventsWithOptions($request, $runtime);
    }

    /**
     * Queries the monitoring data of an elastic container instance.
     *
     * @remarks
     *   A maximum of 50 monitoring data entries can be returned. If the number of monitoring data entries exceeds this limit, an error message is returned.
     * *   You can query real-time monitoring data (data generated within the last 5 minutes) and historical data (data generated more than 5 minutes ago). If the time range to query starts or ends later than the current time, historical monitoring data generated more than 5 minutes ago is returned.
     * *   The elastic container instance whose monitoring data you want to query must be created after April 3, 2019, 15:00 UTC+8.
     *
     * @param request - DescribeContainerGroupMetricRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeContainerGroupMetricResponse
     *
     * @param DescribeContainerGroupMetricRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeContainerGroupMetricResponse
     */
    public function describeContainerGroupMetricWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->containerGroupId) {
            @$query['ContainerGroupId'] = $request->containerGroupId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeContainerGroupMetric',
            'version' => '2018-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeContainerGroupMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the monitoring data of an elastic container instance.
     *
     * @remarks
     *   A maximum of 50 monitoring data entries can be returned. If the number of monitoring data entries exceeds this limit, an error message is returned.
     * *   You can query real-time monitoring data (data generated within the last 5 minutes) and historical data (data generated more than 5 minutes ago). If the time range to query starts or ends later than the current time, historical monitoring data generated more than 5 minutes ago is returned.
     * *   The elastic container instance whose monitoring data you want to query must be created after April 3, 2019, 15:00 UTC+8.
     *
     * @param request - DescribeContainerGroupMetricRequest
     *
     * @returns DescribeContainerGroupMetricResponse
     *
     * @param DescribeContainerGroupMetricRequest $request
     *
     * @return DescribeContainerGroupMetricResponse
     */
    public function describeContainerGroupMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContainerGroupMetricWithOptions($request, $runtime);
    }

    /**
     * Queries the price of an elastic container instance.
     *
     * @remarks
     *   When you call this operation, you cannot use resource groups to control the permissions of a RAM user.
     * *   You can create an elastic container instance by specifying vCPU and memory resource specifications or by specifying ECS instance types. When you call this operation to query the prices of elastic container instances, pass in specifications of the elastic container instances.
     *     *   [vCPU and memory specifications](https://help.aliyun.com/document_detail/114662.html).
     *     *   [ECS instance types that are supported by Elastic Container Instance](https://help.aliyun.com/document_detail/114664.html).
     *
     * @param request - DescribeContainerGroupPriceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeContainerGroupPriceResponse
     *
     * @param DescribeContainerGroupPriceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeContainerGroupPriceResponse
     */
    public function describeContainerGroupPriceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->computeCategory) {
            @$query['ComputeCategory'] = $request->computeCategory;
        }

        if (null !== $request->cpu) {
            @$query['Cpu'] = $request->cpu;
        }

        if (null !== $request->ephemeralStorage) {
            @$query['EphemeralStorage'] = $request->ephemeralStorage;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->memory) {
            @$query['Memory'] = $request->memory;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->spotDuration) {
            @$query['SpotDuration'] = $request->spotDuration;
        }

        if (null !== $request->spotPriceLimit) {
            @$query['SpotPriceLimit'] = $request->spotPriceLimit;
        }

        if (null !== $request->spotStrategy) {
            @$query['SpotStrategy'] = $request->spotStrategy;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeContainerGroupPrice',
            'version' => '2018-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeContainerGroupPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the price of an elastic container instance.
     *
     * @remarks
     *   When you call this operation, you cannot use resource groups to control the permissions of a RAM user.
     * *   You can create an elastic container instance by specifying vCPU and memory resource specifications or by specifying ECS instance types. When you call this operation to query the prices of elastic container instances, pass in specifications of the elastic container instances.
     *     *   [vCPU and memory specifications](https://help.aliyun.com/document_detail/114662.html).
     *     *   [ECS instance types that are supported by Elastic Container Instance](https://help.aliyun.com/document_detail/114664.html).
     *
     * @param request - DescribeContainerGroupPriceRequest
     *
     * @returns DescribeContainerGroupPriceResponse
     *
     * @param DescribeContainerGroupPriceRequest $request
     *
     * @return DescribeContainerGroupPriceResponse
     */
    public function describeContainerGroupPrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContainerGroupPriceWithOptions($request, $runtime);
    }

    /**
     * Queries the statuses of multiple container groups at a time.
     *
     * @param request - DescribeContainerGroupStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeContainerGroupStatusResponse
     *
     * @param DescribeContainerGroupStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeContainerGroupStatusResponse
     */
    public function describeContainerGroupStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->containerGroupIds) {
            @$query['ContainerGroupIds'] = $request->containerGroupIds;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sinceSecond) {
            @$query['SinceSecond'] = $request->sinceSecond;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeContainerGroupStatus',
            'version' => '2018-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeContainerGroupStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the statuses of multiple container groups at a time.
     *
     * @param request - DescribeContainerGroupStatusRequest
     *
     * @returns DescribeContainerGroupStatusResponse
     *
     * @param DescribeContainerGroupStatusRequest $request
     *
     * @return DescribeContainerGroupStatusResponse
     */
    public function describeContainerGroupStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContainerGroupStatusWithOptions($request, $runtime);
    }

    /**
     * Queries information about multiple elastic container instances at a time.
     *
     * @remarks
     *   After an elastic container instance is terminated, its underlying computing resources are recycled. By default, other resources, such as elastic IP addresses (EIPs), that are created together with the instance are released together with the instance.
     * *   The metadata of an instance in the final status (Failed, Succeeded, or Expired) is retained based on the following rules:
     *     *   All metadata information is retained within 1 hour since the instance enters the final status.
     *     *   One hour after the instance enters the final status, only the latest 100 entries of metadata information in each region are retained.
     *
     * @param request - DescribeContainerGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeContainerGroupsResponse
     *
     * @param DescribeContainerGroupsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeContainerGroupsResponse
     */
    public function describeContainerGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->computeCategory) {
            @$query['ComputeCategory'] = $request->computeCategory;
        }

        if (null !== $request->containerGroupIds) {
            @$query['ContainerGroupIds'] = $request->containerGroupIds;
        }

        if (null !== $request->containerGroupName) {
            @$query['ContainerGroupName'] = $request->containerGroupName;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->withEvent) {
            @$query['WithEvent'] = $request->withEvent;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeContainerGroups',
            'version' => '2018-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeContainerGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about multiple elastic container instances at a time.
     *
     * @remarks
     *   After an elastic container instance is terminated, its underlying computing resources are recycled. By default, other resources, such as elastic IP addresses (EIPs), that are created together with the instance are released together with the instance.
     * *   The metadata of an instance in the final status (Failed, Succeeded, or Expired) is retained based on the following rules:
     *     *   All metadata information is retained within 1 hour since the instance enters the final status.
     *     *   One hour after the instance enters the final status, only the latest 100 entries of metadata information in each region are retained.
     *
     * @param request - DescribeContainerGroupsRequest
     *
     * @returns DescribeContainerGroupsResponse
     *
     * @param DescribeContainerGroupsRequest $request
     *
     * @return DescribeContainerGroupsResponse
     */
    public function describeContainerGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContainerGroupsWithOptions($request, $runtime);
    }

    /**
     * Queries the logs of a container in a container group.
     *
     * @param request - DescribeContainerLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeContainerLogResponse
     *
     * @param DescribeContainerLogRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeContainerLogResponse
     */
    public function describeContainerLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->containerGroupId) {
            @$query['ContainerGroupId'] = $request->containerGroupId;
        }

        if (null !== $request->containerName) {
            @$query['ContainerName'] = $request->containerName;
        }

        if (null !== $request->lastTime) {
            @$query['LastTime'] = $request->lastTime;
        }

        if (null !== $request->limitBytes) {
            @$query['LimitBytes'] = $request->limitBytes;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sinceSeconds) {
            @$query['SinceSeconds'] = $request->sinceSeconds;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->tail) {
            @$query['Tail'] = $request->tail;
        }

        if (null !== $request->timestamps) {
            @$query['Timestamps'] = $request->timestamps;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeContainerLog',
            'version' => '2018-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeContainerLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the logs of a container in a container group.
     *
     * @param request - DescribeContainerLogRequest
     *
     * @returns DescribeContainerLogResponse
     *
     * @param DescribeContainerLogRequest $request
     *
     * @return DescribeContainerLogResponse
     */
    public function describeContainerLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContainerLogWithOptions($request, $runtime);
    }

    /**
     * Queries the information about data caches.
     *
     * @param request - DescribeDataCachesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDataCachesResponse
     *
     * @param DescribeDataCachesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDataCachesResponse
     */
    public function describeDataCachesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bucket) {
            @$query['Bucket'] = $request->bucket;
        }

        if (null !== $request->dataCacheId) {
            @$query['DataCacheId'] = $request->dataCacheId;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDataCaches',
            'version' => '2018-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDataCachesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about data caches.
     *
     * @param request - DescribeDataCachesRequest
     *
     * @returns DescribeDataCachesResponse
     *
     * @param DescribeDataCachesRequest $request
     *
     * @return DescribeDataCachesResponse
     */
    public function describeDataCaches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataCachesWithOptions($request, $runtime);
    }

    /**
     * Queries information about image caches.
     *
     * @param request - DescribeImageCachesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeImageCachesResponse
     *
     * @param DescribeImageCachesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeImageCachesResponse
     */
    public function describeImageCachesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->image) {
            @$query['Image'] = $request->image;
        }

        if (null !== $request->imageCacheId) {
            @$query['ImageCacheId'] = $request->imageCacheId;
        }

        if (null !== $request->imageCacheName) {
            @$query['ImageCacheName'] = $request->imageCacheName;
        }

        if (null !== $request->imageFullMatch) {
            @$query['ImageFullMatch'] = $request->imageFullMatch;
        }

        if (null !== $request->imageMatchCountRequest) {
            @$query['ImageMatchCountRequest'] = $request->imageMatchCountRequest;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->matchImage) {
            @$query['MatchImage'] = $request->matchImage;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->snapshotId) {
            @$query['SnapshotId'] = $request->snapshotId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeImageCaches',
            'version' => '2018-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeImageCachesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about image caches.
     *
     * @param request - DescribeImageCachesRequest
     *
     * @returns DescribeImageCachesResponse
     *
     * @param DescribeImageCachesRequest $request
     *
     * @return DescribeImageCachesResponse
     */
    public function describeImageCaches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageCachesWithOptions($request, $runtime);
    }

    /**
     * Queries the information about operations and maintenance tasks of an elastic container instance.
     *
     * @param request - DescribeInstanceOpsRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceOpsRecordsResponse
     *
     * @param DescribeInstanceOpsRecordsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeInstanceOpsRecordsResponse
     */
    public function describeInstanceOpsRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->containerGroupId) {
            @$query['ContainerGroupId'] = $request->containerGroupId;
        }

        if (null !== $request->opsType) {
            @$query['OpsType'] = $request->opsType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceOpsRecords',
            'version' => '2018-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceOpsRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about operations and maintenance tasks of an elastic container instance.
     *
     * @param request - DescribeInstanceOpsRecordsRequest
     *
     * @returns DescribeInstanceOpsRecordsResponse
     *
     * @param DescribeInstanceOpsRecordsRequest $request
     *
     * @return DescribeInstanceOpsRecordsResponse
     */
    public function describeInstanceOpsRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceOpsRecordsWithOptions($request, $runtime);
    }

    /**
     * Queries the monitoring data of elastic container instances.
     *
     * @remarks
     *   Only the latest entry of monitoring data of each elastic container instance is returned.
     * *   You can query only the monitoring data of elastic container instances that are created after April 3, 2019 15:00:00 UTC+8.
     *
     * @param request - DescribeMultiContainerGroupMetricRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMultiContainerGroupMetricResponse
     *
     * @param DescribeMultiContainerGroupMetricRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeMultiContainerGroupMetricResponse
     */
    public function describeMultiContainerGroupMetricWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->containerGroupIds) {
            @$query['ContainerGroupIds'] = $request->containerGroupIds;
        }

        if (null !== $request->metricType) {
            @$query['MetricType'] = $request->metricType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMultiContainerGroupMetric',
            'version' => '2018-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMultiContainerGroupMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the monitoring data of elastic container instances.
     *
     * @remarks
     *   Only the latest entry of monitoring data of each elastic container instance is returned.
     * *   You can query only the monitoring data of elastic container instances that are created after April 3, 2019 15:00:00 UTC+8.
     *
     * @param request - DescribeMultiContainerGroupMetricRequest
     *
     * @returns DescribeMultiContainerGroupMetricResponse
     *
     * @param DescribeMultiContainerGroupMetricRequest $request
     *
     * @return DescribeMultiContainerGroupMetricResponse
     */
    public function describeMultiContainerGroupMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMultiContainerGroupMetricWithOptions($request, $runtime);
    }

    /**
     * Queries the regions and zones in which Elastic Container Instance is available.
     *
     * @param request - DescribeRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2018-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the regions and zones in which Elastic Container Instance is available.
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

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * Queries information about virtual nodes.
     *
     * @param request - DescribeVirtualNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVirtualNodesResponse
     *
     * @param DescribeVirtualNodesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeVirtualNodesResponse
     */
    public function describeVirtualNodesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->virtualNodeIds) {
            @$query['VirtualNodeIds'] = $request->virtualNodeIds;
        }

        if (null !== $request->virtualNodeName) {
            @$query['VirtualNodeName'] = $request->virtualNodeName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVirtualNodes',
            'version' => '2018-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVirtualNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about virtual nodes.
     *
     * @param request - DescribeVirtualNodesRequest
     *
     * @returns DescribeVirtualNodesResponse
     *
     * @param DescribeVirtualNodesRequest $request
     *
     * @return DescribeVirtualNodesResponse
     */
    public function describeVirtualNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVirtualNodesWithOptions($request, $runtime);
    }

    /**
     * Runs commands in a container.
     *
     * @param request - ExecContainerCommandRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecContainerCommandResponse
     *
     * @param ExecContainerCommandRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ExecContainerCommandResponse
     */
    public function execContainerCommandWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->command) {
            @$query['Command'] = $request->command;
        }

        if (null !== $request->containerGroupId) {
            @$query['ContainerGroupId'] = $request->containerGroupId;
        }

        if (null !== $request->containerName) {
            @$query['ContainerName'] = $request->containerName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->stdin) {
            @$query['Stdin'] = $request->stdin;
        }

        if (null !== $request->sync) {
            @$query['Sync'] = $request->sync;
        }

        if (null !== $request->TTY) {
            @$query['TTY'] = $request->TTY;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExecContainerCommand',
            'version' => '2018-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExecContainerCommandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Runs commands in a container.
     *
     * @param request - ExecContainerCommandRequest
     *
     * @returns ExecContainerCommandResponse
     *
     * @param ExecContainerCommandRequest $request
     *
     * @return ExecContainerCommandResponse
     */
    public function execContainerCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->execContainerCommandWithOptions($request, $runtime);
    }

    /**
     * Queries the tags that are added to an Elastic Container Instance resource.
     *
     * @param request - ListTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2018-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the tags that are added to an Elastic Container Instance resource.
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

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * Queries the used amounts and upper limits of privileges and quotas that you have in a specified region.
     *
     * @remarks
     * This operation does not support resource group authentication.
     *
     * @param request - ListUsageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUsageResponse
     *
     * @param ListUsageRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListUsageResponse
     */
    public function listUsageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUsage',
            'version' => '2018-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the used amounts and upper limits of privileges and quotas that you have in a specified region.
     *
     * @remarks
     * This operation does not support resource group authentication.
     *
     * @param request - ListUsageRequest
     *
     * @returns ListUsageResponse
     *
     * @param ListUsageRequest $request
     *
     * @return ListUsageResponse
     */
    public function listUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsageWithOptions($request, $runtime);
    }

    /**
     * Scales up a disk volume that is mounted to an elastic container instance.
     *
     * @remarks
     * ## [](#)Usage notes
     * *   You can scale up volumes by calling this operation. You cannot scale down volumes by calling this operation.
     * *   Only volumes of the disk type can be scaled up. Volumes of other types cannot be scaled up.
     *
     * @param request - ResizeContainerGroupVolumeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResizeContainerGroupVolumeResponse
     *
     * @param ResizeContainerGroupVolumeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ResizeContainerGroupVolumeResponse
     */
    public function resizeContainerGroupVolumeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->containerGroupId) {
            @$query['ContainerGroupId'] = $request->containerGroupId;
        }

        if (null !== $request->newSize) {
            @$query['NewSize'] = $request->newSize;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->volumeName) {
            @$query['VolumeName'] = $request->volumeName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResizeContainerGroupVolume',
            'version' => '2018-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResizeContainerGroupVolumeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Scales up a disk volume that is mounted to an elastic container instance.
     *
     * @remarks
     * ## [](#)Usage notes
     * *   You can scale up volumes by calling this operation. You cannot scale down volumes by calling this operation.
     * *   Only volumes of the disk type can be scaled up. Volumes of other types cannot be scaled up.
     *
     * @param request - ResizeContainerGroupVolumeRequest
     *
     * @returns ResizeContainerGroupVolumeResponse
     *
     * @param ResizeContainerGroupVolumeRequest $request
     *
     * @return ResizeContainerGroupVolumeResponse
     */
    public function resizeContainerGroupVolume($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resizeContainerGroupVolumeWithOptions($request, $runtime);
    }

    /**
     * Restarts an elastic container instance.
     *
     * @remarks
     *   Only elastic container instances that are in the Pending or Running state can be restarted. Instances that are in the Succeeded or Failed state cannot be restarted.
     * *   Elastic container instances that were created before 15:00:00 on March 7, 2019 cannot be restarted.
     * *   When an elastic container instance is being restarted, its status changes into Restarting.
     *
     * @param request - RestartContainerGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartContainerGroupResponse
     *
     * @param RestartContainerGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RestartContainerGroupResponse
     */
    public function restartContainerGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->containerGroupId) {
            @$query['ContainerGroupId'] = $request->containerGroupId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RestartContainerGroup',
            'version' => '2018-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RestartContainerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restarts an elastic container instance.
     *
     * @remarks
     *   Only elastic container instances that are in the Pending or Running state can be restarted. Instances that are in the Succeeded or Failed state cannot be restarted.
     * *   Elastic container instances that were created before 15:00:00 on March 7, 2019 cannot be restarted.
     * *   When an elastic container instance is being restarted, its status changes into Restarting.
     *
     * @param request - RestartContainerGroupRequest
     *
     * @returns RestartContainerGroupResponse
     *
     * @param RestartContainerGroupRequest $request
     *
     * @return RestartContainerGroupResponse
     */
    public function restartContainerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartContainerGroupWithOptions($request, $runtime);
    }

    /**
     * Adds tags to an Elastic Container Instance resource.
     *
     * @param request - TagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2018-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds tags to an Elastic Container Instance resource.
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

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * Removes tags from an Elastic Container Instance resource.
     *
     * @param request - UntagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2018-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes tags from an Elastic Container Instance resource.
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

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * Updates an elastic container instance.
     *
     * @remarks
     *   Only elastic container instances that are in the Pending or Running state can be updated. After you call this operation to update an elastic container instance, the instance enters the Updating state.
     * *   If the RestartPolicy parameter is set to Never for the elastic container instance that you are updating, the containers of the instance may fail. Exercise caution if you want to update the kind of instances.
     *
     * @param request - UpdateContainerGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateContainerGroupResponse
     *
     * @param UpdateContainerGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateContainerGroupResponse
     */
    public function updateContainerGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acrRegistryInfo) {
            @$query['AcrRegistryInfo'] = $request->acrRegistryInfo;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->container) {
            @$query['Container'] = $request->container;
        }

        if (null !== $request->containerGroupId) {
            @$query['ContainerGroupId'] = $request->containerGroupId;
        }

        if (null !== $request->cpu) {
            @$query['Cpu'] = $request->cpu;
        }

        if (null !== $request->imageRegistryCredential) {
            @$query['ImageRegistryCredential'] = $request->imageRegistryCredential;
        }

        if (null !== $request->initContainer) {
            @$query['InitContainer'] = $request->initContainer;
        }

        if (null !== $request->memory) {
            @$query['Memory'] = $request->memory;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->restartPolicy) {
            @$query['RestartPolicy'] = $request->restartPolicy;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->updateType) {
            @$query['UpdateType'] = $request->updateType;
        }

        if (null !== $request->volume) {
            @$query['Volume'] = $request->volume;
        }

        if (null !== $request->dnsConfig) {
            @$query['DnsConfig'] = $request->dnsConfig;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateContainerGroup',
            'version' => '2018-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateContainerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an elastic container instance.
     *
     * @remarks
     *   Only elastic container instances that are in the Pending or Running state can be updated. After you call this operation to update an elastic container instance, the instance enters the Updating state.
     * *   If the RestartPolicy parameter is set to Never for the elastic container instance that you are updating, the containers of the instance may fail. Exercise caution if you want to update the kind of instances.
     *
     * @param request - UpdateContainerGroupRequest
     *
     * @returns UpdateContainerGroupResponse
     *
     * @param UpdateContainerGroupRequest $request
     *
     * @return UpdateContainerGroupResponse
     */
    public function updateContainerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateContainerGroupWithOptions($request, $runtime);
    }

    /**
     * Updates a data cache.
     *
     * @param request - UpdateDataCacheRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDataCacheResponse
     *
     * @param UpdateDataCacheRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateDataCacheResponse
     */
    public function updateDataCacheWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bucket) {
            @$query['Bucket'] = $request->bucket;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dataCacheId) {
            @$query['DataCacheId'] = $request->dataCacheId;
        }

        if (null !== $request->dataSource) {
            @$query['DataSource'] = $request->dataSource;
        }

        if (null !== $request->eipCreateParam) {
            @$query['EipCreateParam'] = $request->eipCreateParam;
        }

        if (null !== $request->eipInstanceId) {
            @$query['EipInstanceId'] = $request->eipInstanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->retentionDays) {
            @$query['RetentionDays'] = $request->retentionDays;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->size) {
            @$query['Size'] = $request->size;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateDataCache',
            'version' => '2018-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDataCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a data cache.
     *
     * @param request - UpdateDataCacheRequest
     *
     * @returns UpdateDataCacheResponse
     *
     * @param UpdateDataCacheRequest $request
     *
     * @return UpdateDataCacheResponse
     */
    public function updateDataCache($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDataCacheWithOptions($request, $runtime);
    }

    /**
     * Updates an image cache.
     *
     * @remarks
     * Only image caches that are in the Ready or UpdateFailed state can be updated.
     *
     * @param request - UpdateImageCacheRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateImageCacheResponse
     *
     * @param UpdateImageCacheRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateImageCacheResponse
     */
    public function updateImageCacheWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acrRegistryInfo) {
            @$query['AcrRegistryInfo'] = $request->acrRegistryInfo;
        }

        if (null !== $request->autoMatchImageCache) {
            @$query['AutoMatchImageCache'] = $request->autoMatchImageCache;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->eipInstanceId) {
            @$query['EipInstanceId'] = $request->eipInstanceId;
        }

        if (null !== $request->eliminationStrategy) {
            @$query['EliminationStrategy'] = $request->eliminationStrategy;
        }

        if (null !== $request->flash) {
            @$query['Flash'] = $request->flash;
        }

        if (null !== $request->flashCopyCount) {
            @$query['FlashCopyCount'] = $request->flashCopyCount;
        }

        if (null !== $request->image) {
            @$query['Image'] = $request->image;
        }

        if (null !== $request->imageCacheId) {
            @$query['ImageCacheId'] = $request->imageCacheId;
        }

        if (null !== $request->imageCacheName) {
            @$query['ImageCacheName'] = $request->imageCacheName;
        }

        if (null !== $request->imageCacheSize) {
            @$query['ImageCacheSize'] = $request->imageCacheSize;
        }

        if (null !== $request->imageRegistryCredential) {
            @$query['ImageRegistryCredential'] = $request->imageRegistryCredential;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->retentionDays) {
            @$query['RetentionDays'] = $request->retentionDays;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->standardCopyCount) {
            @$query['StandardCopyCount'] = $request->standardCopyCount;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateImageCache',
            'version' => '2018-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateImageCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an image cache.
     *
     * @remarks
     * Only image caches that are in the Ready or UpdateFailed state can be updated.
     *
     * @param request - UpdateImageCacheRequest
     *
     * @returns UpdateImageCacheResponse
     *
     * @param UpdateImageCacheRequest $request
     *
     * @return UpdateImageCacheResponse
     */
    public function updateImageCache($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateImageCacheWithOptions($request, $runtime);
    }

    /**
     * Updates attributes of a virtual node.
     *
     * @remarks
     * ## Usage notes
     * Only virtual nodes that are in the Ready state can be updated.
     *
     * @param request - UpdateVirtualNodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateVirtualNodeResponse
     *
     * @param UpdateVirtualNodeRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateVirtualNodeResponse
     */
    public function updateVirtualNodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->clusterDNS) {
            @$query['ClusterDNS'] = $request->clusterDNS;
        }

        if (null !== $request->clusterDomain) {
            @$query['ClusterDomain'] = $request->clusterDomain;
        }

        if (null !== $request->customResources) {
            @$query['CustomResources'] = $request->customResources;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->virtualNodeId) {
            @$query['VirtualNodeId'] = $request->virtualNodeId;
        }

        if (null !== $request->virtualNodeName) {
            @$query['VirtualNodeName'] = $request->virtualNodeName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateVirtualNode',
            'version' => '2018-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateVirtualNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates attributes of a virtual node.
     *
     * @remarks
     * ## Usage notes
     * Only virtual nodes that are in the Ready state can be updated.
     *
     * @param request - UpdateVirtualNodeRequest
     *
     * @returns UpdateVirtualNodeResponse
     *
     * @param UpdateVirtualNodeRequest $request
     *
     * @return UpdateVirtualNodeResponse
     */
    public function updateVirtualNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVirtualNodeWithOptions($request, $runtime);
    }
}
