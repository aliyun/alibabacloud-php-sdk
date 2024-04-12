<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\Eci\V20180808\Models\ListUsageRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\ListUsageResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\ResizeContainerGroupVolumeRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\ResizeContainerGroupVolumeResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\RestartContainerGroupRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\RestartContainerGroupResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateDataCacheRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateDataCacheResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateImageCacheRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateImageCacheResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateVirtualNodeRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateVirtualNodeResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * You must specify the Alibaba Cloud Resource Name (ARN) of the RAM role of the Container Registry Enterprise Edition instance to grant the elastic container instance to assume the RAM role to push images.
     *   *
     * @param CommitContainerRequest $request CommitContainerRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CommitContainerResponse CommitContainerResponse
     */
    public function commitContainerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acrRegistryInfo)) {
            $query['AcrRegistryInfo'] = $request->acrRegistryInfo;
        }
        if (!Utils::isUnset($request->arn)) {
            $query['Arn'] = $request->arn;
        }
        if (!Utils::isUnset($request->containerGroupId)) {
            $query['ContainerGroupId'] = $request->containerGroupId;
        }
        if (!Utils::isUnset($request->containerName)) {
            $query['ContainerName'] = $request->containerName;
        }
        if (!Utils::isUnset($request->image)) {
            $query['Image'] = $request->image;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CommitContainer',
            'version'     => '2018-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CommitContainerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You must specify the Alibaba Cloud Resource Name (ARN) of the RAM role of the Container Registry Enterprise Edition instance to grant the elastic container instance to assume the RAM role to push images.
     *   *
     * @param CommitContainerRequest $request CommitContainerRequest
     *
     * @return CommitContainerResponse CommitContainerResponse
     */
    public function commitContainer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->commitContainerWithOptions($request, $runtime);
    }

    /**
     * You cannot directly use a DataCache across regions. You can call this operation to copy a DataCache from one region to another region. This operation is suitable for the following scenarios:
     *   * *   If you want to use a DataCache across regions and the DataCache exists in Region A, you can call this operation to quickly copy the DataCache to Region B.
     *   * *   If you directly pull data from a region outside China to a region inside the Chinese mainland when you create a DataCache, the data may be pulled at a slow speed due to network limits. In this case, you can create a DataCache in a region outside the Chinese mainland but inside China, such as the China (Hong Kong) region, and call this operation to copy the data to the region inside the Chinese mainland.
     *   * > The process of copying a DataCache is equivalent to copying a snapshot. You are charged for the traffic generated during the copy process and the storage of the generated DataCache.
     *   *
     * @param CopyDataCacheRequest $request CopyDataCacheRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CopyDataCacheResponse CopyDataCacheResponse
     */
    public function copyDataCacheWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucket)) {
            $query['Bucket'] = $request->bucket;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dataCacheId)) {
            $query['DataCacheId'] = $request->dataCacheId;
        }
        if (!Utils::isUnset($request->destinationRegionId)) {
            $query['DestinationRegionId'] = $request->destinationRegionId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->retentionDays)) {
            $query['RetentionDays'] = $request->retentionDays;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CopyDataCache',
            'version'     => '2018-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CopyDataCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You cannot directly use a DataCache across regions. You can call this operation to copy a DataCache from one region to another region. This operation is suitable for the following scenarios:
     *   * *   If you want to use a DataCache across regions and the DataCache exists in Region A, you can call this operation to quickly copy the DataCache to Region B.
     *   * *   If you directly pull data from a region outside China to a region inside the Chinese mainland when you create a DataCache, the data may be pulled at a slow speed due to network limits. In this case, you can create a DataCache in a region outside the Chinese mainland but inside China, such as the China (Hong Kong) region, and call this operation to copy the data to the region inside the Chinese mainland.
     *   * > The process of copying a DataCache is equivalent to copying a snapshot. You are charged for the traffic generated during the copy process and the storage of the generated DataCache.
     *   *
     * @param CopyDataCacheRequest $request CopyDataCacheRequest
     *
     * @return CopyDataCacheResponse CopyDataCacheResponse
     */
    public function copyDataCache($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyDataCacheWithOptions($request, $runtime);
    }

    /**
     * When you call the CreateContainerGroup operation to create an elastic container instance, the system creates a service-linked role named AliyunServiceRoleForECI. This role is used to access other Alibaba Cloud services such as Elastic Compute Service (ECS) and Virtual Private Cloud (VPC). For more information, see [Elastic Container Instance service-linked role](~~212914~~).
     *   * When you create an elastic container instance, you can configure features such as instances, images, and storage based on your business requirements. For information about parameters configured for the features and the description of the parameters, see the following documents:
     *   * **Instances** You can use one of the following methods to create an elastic container instance:
     *   * *   [Specify the number of vCPUs and memory size to create an elastic container instance](~~114662~~)
     *   * *   [Specify ECS instance types to create an elastic container instance](~~114664~~)
     *   * Both the preceding creation methods support the following features:
     *   * *   [Specify CPU options](~~197781~~)
     *   * *   [Create a preemptible elastic container instance](~~157759~~)
     *   * *   [Configure multiple zones](~~157290~~)
     *   * *   [Configure multiple specifications](~~146468~~)
     *   * *   [Use tags to manage elastic container instances](~~146608~~)
     *   * **Images**
     *   * *   [Configure a container image](~~461311~~)
     *   * *   [Use the image cache feature to accelerate the creation of an elastic container instance](~~141281~~)
     *   * *   [Specify a Container Registry Enterprise Edition instance](~~194250~~)
     *   * *   [Use self-managed image repositories](~~378059~~)
     *   * **Networking**
     *   * *   [Create and Associate an EIP](~~99146~~)
     *   * *   [Assign a security group](~~176237~~)
     *   * *   [Assign an IPv6 address to an elastic container instance](~~451282~~)
     *   * *   [Configure maximum bandwidth](~~190635~~)
     *   * **Storage**
     *   * *   [Mount a disk volume](~~144571~~)
     *   * *   [Mount a NAS volume](~~464075~~)
     *   * *   [Mount an OSS bucket to an elastic container instance as a volume](~~464076~~)
     *   * *   [Mount an emptyDir volume](~~464078~~)
     *   * *   [Mount a ConfigFile volume](~~464080~~)
     *   * *   [Increase the size of the temporary storage space](~~204066~~)
     *   * **Container configuration**
     *   * *   [Configure startup commands and arguments for a container](~~94593~~)
     *   * *   [Use probes to perform health checks on a container](~~99053~~)
     *   * *   [Obtain metadata by using environment variables](~~141788~~)
     *   * *   [Configure a security context for an elastic container instance or a container](~~462313~~)
     *   * *   [Configure the NTP service](~~462768~~)
     *   * **Logging and O\\&M**
     *   * *   [Use environment variables to configure log collection](~~121973~~)
     *   * *   [Save core files to volumes](~~167801~~).
     *   *
     * @param CreateContainerGroupRequest $request CreateContainerGroupRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateContainerGroupResponse CreateContainerGroupResponse
     */
    public function createContainerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acrRegistryInfo)) {
            $query['AcrRegistryInfo'] = $request->acrRegistryInfo;
        }
        if (!Utils::isUnset($request->activeDeadlineSeconds)) {
            $query['ActiveDeadlineSeconds'] = $request->activeDeadlineSeconds;
        }
        if (!Utils::isUnset($request->autoCreateEip)) {
            $query['AutoCreateEip'] = $request->autoCreateEip;
        }
        if (!Utils::isUnset($request->autoMatchImageCache)) {
            $query['AutoMatchImageCache'] = $request->autoMatchImageCache;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->computeCategory)) {
            $query['ComputeCategory'] = $request->computeCategory;
        }
        if (!Utils::isUnset($request->container)) {
            $query['Container'] = $request->container;
        }
        if (!Utils::isUnset($request->containerGroupName)) {
            $query['ContainerGroupName'] = $request->containerGroupName;
        }
        if (!Utils::isUnset($request->containerResourceView)) {
            $query['ContainerResourceView'] = $request->containerResourceView;
        }
        if (!Utils::isUnset($request->corePattern)) {
            $query['CorePattern'] = $request->corePattern;
        }
        if (!Utils::isUnset($request->cpu)) {
            $query['Cpu'] = $request->cpu;
        }
        if (!Utils::isUnset($request->cpuArchitecture)) {
            $query['CpuArchitecture'] = $request->cpuArchitecture;
        }
        if (!Utils::isUnset($request->cpuOptionsCore)) {
            $query['CpuOptionsCore'] = $request->cpuOptionsCore;
        }
        if (!Utils::isUnset($request->cpuOptionsNuma)) {
            $query['CpuOptionsNuma'] = $request->cpuOptionsNuma;
        }
        if (!Utils::isUnset($request->cpuOptionsThreadsPerCore)) {
            $query['CpuOptionsThreadsPerCore'] = $request->cpuOptionsThreadsPerCore;
        }
        if (!Utils::isUnset($request->dataCacheBucket)) {
            $query['DataCacheBucket'] = $request->dataCacheBucket;
        }
        if (!Utils::isUnset($request->dataCacheBurstingEnabled)) {
            $query['DataCacheBurstingEnabled'] = $request->dataCacheBurstingEnabled;
        }
        if (!Utils::isUnset($request->dataCachePL)) {
            $query['DataCachePL'] = $request->dataCachePL;
        }
        if (!Utils::isUnset($request->dataCacheProvisionedIops)) {
            $query['DataCacheProvisionedIops'] = $request->dataCacheProvisionedIops;
        }
        if (!Utils::isUnset($request->dnsPolicy)) {
            $query['DnsPolicy'] = $request->dnsPolicy;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->egressBandwidth)) {
            $query['EgressBandwidth'] = $request->egressBandwidth;
        }
        if (!Utils::isUnset($request->eipBandwidth)) {
            $query['EipBandwidth'] = $request->eipBandwidth;
        }
        if (!Utils::isUnset($request->eipCommonBandwidthPackage)) {
            $query['EipCommonBandwidthPackage'] = $request->eipCommonBandwidthPackage;
        }
        if (!Utils::isUnset($request->eipISP)) {
            $query['EipISP'] = $request->eipISP;
        }
        if (!Utils::isUnset($request->eipInstanceId)) {
            $query['EipInstanceId'] = $request->eipInstanceId;
        }
        if (!Utils::isUnset($request->ephemeralStorage)) {
            $query['EphemeralStorage'] = $request->ephemeralStorage;
        }
        if (!Utils::isUnset($request->fixedIp)) {
            $query['FixedIp'] = $request->fixedIp;
        }
        if (!Utils::isUnset($request->fixedIpRetainHour)) {
            $query['FixedIpRetainHour'] = $request->fixedIpRetainHour;
        }
        if (!Utils::isUnset($request->gpuDriverVersion)) {
            $query['GpuDriverVersion'] = $request->gpuDriverVersion;
        }
        if (!Utils::isUnset($request->hostAliase)) {
            $query['HostAliase'] = $request->hostAliase;
        }
        if (!Utils::isUnset($request->hostName)) {
            $query['HostName'] = $request->hostName;
        }
        if (!Utils::isUnset($request->imageAccelerateMode)) {
            $query['ImageAccelerateMode'] = $request->imageAccelerateMode;
        }
        if (!Utils::isUnset($request->imageRegistryCredential)) {
            $query['ImageRegistryCredential'] = $request->imageRegistryCredential;
        }
        if (!Utils::isUnset($request->imageSnapshotId)) {
            $query['ImageSnapshotId'] = $request->imageSnapshotId;
        }
        if (!Utils::isUnset($request->ingressBandwidth)) {
            $query['IngressBandwidth'] = $request->ingressBandwidth;
        }
        if (!Utils::isUnset($request->initContainer)) {
            $query['InitContainer'] = $request->initContainer;
        }
        if (!Utils::isUnset($request->insecureRegistry)) {
            $query['InsecureRegistry'] = $request->insecureRegistry;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->ipv6AddressCount)) {
            $query['Ipv6AddressCount'] = $request->ipv6AddressCount;
        }
        if (!Utils::isUnset($request->ipv6GatewayBandwidth)) {
            $query['Ipv6GatewayBandwidth'] = $request->ipv6GatewayBandwidth;
        }
        if (!Utils::isUnset($request->ipv6GatewayBandwidthEnable)) {
            $query['Ipv6GatewayBandwidthEnable'] = $request->ipv6GatewayBandwidthEnable;
        }
        if (!Utils::isUnset($request->memory)) {
            $query['Memory'] = $request->memory;
        }
        if (!Utils::isUnset($request->ntpServer)) {
            $query['NtpServer'] = $request->ntpServer;
        }
        if (!Utils::isUnset($request->osType)) {
            $query['OsType'] = $request->osType;
        }
        if (!Utils::isUnset($request->overheadReservationOption)) {
            $query['OverheadReservationOption'] = $request->overheadReservationOption;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->plainHttpRegistry)) {
            $query['PlainHttpRegistry'] = $request->plainHttpRegistry;
        }
        if (!Utils::isUnset($request->privateIpAddress)) {
            $query['PrivateIpAddress'] = $request->privateIpAddress;
        }
        if (!Utils::isUnset($request->ramRoleName)) {
            $query['RamRoleName'] = $request->ramRoleName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->restartPolicy)) {
            $query['RestartPolicy'] = $request->restartPolicy;
        }
        if (!Utils::isUnset($request->scheduleStrategy)) {
            $query['ScheduleStrategy'] = $request->scheduleStrategy;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->shareProcessNamespace)) {
            $query['ShareProcessNamespace'] = $request->shareProcessNamespace;
        }
        if (!Utils::isUnset($request->spotDuration)) {
            $query['SpotDuration'] = $request->spotDuration;
        }
        if (!Utils::isUnset($request->spotPriceLimit)) {
            $query['SpotPriceLimit'] = $request->spotPriceLimit;
        }
        if (!Utils::isUnset($request->spotStrategy)) {
            $query['SpotStrategy'] = $request->spotStrategy;
        }
        if (!Utils::isUnset($request->strictSpot)) {
            $query['StrictSpot'] = $request->strictSpot;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->terminationGracePeriodSeconds)) {
            $query['TerminationGracePeriodSeconds'] = $request->terminationGracePeriodSeconds;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->volume)) {
            $query['Volume'] = $request->volume;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        if (!Utils::isUnset($request->dnsConfig)) {
            $query['DnsConfig'] = $request->dnsConfig;
        }
        if (!Utils::isUnset($request->hostSecurityContext)) {
            $query['HostSecurityContext'] = $request->hostSecurityContext;
        }
        if (!Utils::isUnset($request->securityContext)) {
            $query['SecurityContext'] = $request->securityContext;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateContainerGroup',
            'version'     => '2018-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateContainerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * When you call the CreateContainerGroup operation to create an elastic container instance, the system creates a service-linked role named AliyunServiceRoleForECI. This role is used to access other Alibaba Cloud services such as Elastic Compute Service (ECS) and Virtual Private Cloud (VPC). For more information, see [Elastic Container Instance service-linked role](~~212914~~).
     *   * When you create an elastic container instance, you can configure features such as instances, images, and storage based on your business requirements. For information about parameters configured for the features and the description of the parameters, see the following documents:
     *   * **Instances** You can use one of the following methods to create an elastic container instance:
     *   * *   [Specify the number of vCPUs and memory size to create an elastic container instance](~~114662~~)
     *   * *   [Specify ECS instance types to create an elastic container instance](~~114664~~)
     *   * Both the preceding creation methods support the following features:
     *   * *   [Specify CPU options](~~197781~~)
     *   * *   [Create a preemptible elastic container instance](~~157759~~)
     *   * *   [Configure multiple zones](~~157290~~)
     *   * *   [Configure multiple specifications](~~146468~~)
     *   * *   [Use tags to manage elastic container instances](~~146608~~)
     *   * **Images**
     *   * *   [Configure a container image](~~461311~~)
     *   * *   [Use the image cache feature to accelerate the creation of an elastic container instance](~~141281~~)
     *   * *   [Specify a Container Registry Enterprise Edition instance](~~194250~~)
     *   * *   [Use self-managed image repositories](~~378059~~)
     *   * **Networking**
     *   * *   [Create and Associate an EIP](~~99146~~)
     *   * *   [Assign a security group](~~176237~~)
     *   * *   [Assign an IPv6 address to an elastic container instance](~~451282~~)
     *   * *   [Configure maximum bandwidth](~~190635~~)
     *   * **Storage**
     *   * *   [Mount a disk volume](~~144571~~)
     *   * *   [Mount a NAS volume](~~464075~~)
     *   * *   [Mount an OSS bucket to an elastic container instance as a volume](~~464076~~)
     *   * *   [Mount an emptyDir volume](~~464078~~)
     *   * *   [Mount a ConfigFile volume](~~464080~~)
     *   * *   [Increase the size of the temporary storage space](~~204066~~)
     *   * **Container configuration**
     *   * *   [Configure startup commands and arguments for a container](~~94593~~)
     *   * *   [Use probes to perform health checks on a container](~~99053~~)
     *   * *   [Obtain metadata by using environment variables](~~141788~~)
     *   * *   [Configure a security context for an elastic container instance or a container](~~462313~~)
     *   * *   [Configure the NTP service](~~462768~~)
     *   * **Logging and O\\&M**
     *   * *   [Use environment variables to configure log collection](~~121973~~)
     *   * *   [Save core files to volumes](~~167801~~).
     *   *
     * @param CreateContainerGroupRequest $request CreateContainerGroupRequest
     *
     * @return CreateContainerGroupResponse CreateContainerGroupResponse
     */
    public function createContainerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createContainerGroupWithOptions($request, $runtime);
    }

    /**
     * *   You are charged for the creation of image caches. We recommend that you learn the relevant billing information in advance. For more information, see [DataCaches](~~2503093~~).
     *   * *   Before you create an image cache, you must evaluate the size of the data to be cached. If the size of the data exceeds the specified cache size, the image cache fails to be created.
     *   * *   When a data cache is being created, the system automatically creates a temporary elastic container instance (ECI) and an enhanced SSD (ESSD) for the data cache. During the creation, do not delete the ECI and ESSD. Otherwise, the data cache fails to be created.
     *   * *   When a data cache is being created, a snapshot is generated for the data cache. Do not delete the snapshot. Otherwise, the data cache becomes invalid.
     *   *
     * @param CreateDataCacheRequest $request CreateDataCacheRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDataCacheResponse CreateDataCacheResponse
     */
    public function createDataCacheWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucket)) {
            $query['Bucket'] = $request->bucket;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dataSource)) {
            $query['DataSource'] = $request->dataSource;
        }
        if (!Utils::isUnset($request->eipCreateParam)) {
            $query['EipCreateParam'] = $request->eipCreateParam;
        }
        if (!Utils::isUnset($request->eipInstanceId)) {
            $query['EipInstanceId'] = $request->eipInstanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->retentionDays)) {
            $query['RetentionDays'] = $request->retentionDays;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDataCache',
            'version'     => '2018-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDataCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   You are charged for the creation of image caches. We recommend that you learn the relevant billing information in advance. For more information, see [DataCaches](~~2503093~~).
     *   * *   Before you create an image cache, you must evaluate the size of the data to be cached. If the size of the data exceeds the specified cache size, the image cache fails to be created.
     *   * *   When a data cache is being created, the system automatically creates a temporary elastic container instance (ECI) and an enhanced SSD (ESSD) for the data cache. During the creation, do not delete the ECI and ESSD. Otherwise, the data cache fails to be created.
     *   * *   When a data cache is being created, a snapshot is generated for the data cache. Do not delete the snapshot. Otherwise, the data cache becomes invalid.
     *   *
     * @param CreateDataCacheRequest $request CreateDataCacheRequest
     *
     * @return CreateDataCacheResponse CreateDataCacheResponse
     */
    public function createDataCache($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataCacheWithOptions($request, $runtime);
    }

    /**
     * *   **Precautions**
     *   *     *   You are charged for creation of image caches. We recommend that you learn the relevant billing information in advance. For more information about billing of image caches, see [Image caches](~~447682~~).
     *   *     *   Before you create an image cache, you must estimate the total size of the images that you want to cache. If the total size of the images exceeds the specified cache size, the image cache cannot be created.
     *   *     *   When an image cache is being created, the system creates an intermediate elastic container instance and an intermediate enhanced SSD (ESSD) at performance level 1 (PL1). Do not delete the intermediate instance and the ESSD while the image cache is being created. If you delete the intermediate instance or the ESSD, the image cache cannot be created.
     *   *     *   A temporary local snapshot and a specific number of regular snapshots are generated during the creation of the image cache. Do not delete these snapshots. If you delete these snapshots, the image cache becomes invalid.
     *   *     *   If you use SDKs, SDK for Java 1.0.10 or later and SDK for Python 1.0.7 or later are supported.
     *   * *   **Usage notes**
     *   *     *   For images that are created based on Container Registry Enterprise Edition instances and use custom domain names, if you want to configure password-free access to the image caches, you must use AcrRegistryInfo-related parameters to specify Container Registry instances. When you configure AcrRegistryInfo-related parameters, you must set the AcrRegistryInfo.N.InstanceId parameter.
     *   *     *   If the image cache that you created will be used to create more than 1,000 elastic container instances at a time, we recommend that you use the StandardCopyCount and FlashCopyCount parameters to create multiple temporary local snapshots and regular snapshots of the image. The multiple snapshots are billed based on incremental data. If no incremental data exists on the multiple snapshots, you are not charged for the multiple snapshots.
     *   * >  When you call the CreateImageCache operation to create an image cache, the system automatically creates a service-linked role named AliyunServiceRoleForECI. The role is used to access other Alibaba Cloud services such as Elastic Compute Service (ECS) and Virtual Private Cloud (VPC). For more information, see [Elastic Container Instance service-linked role](~~212914~~).
     *   *
     * @param CreateImageCacheRequest $request CreateImageCacheRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateImageCacheResponse CreateImageCacheResponse
     */
    public function createImageCacheWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acrRegistryInfo)) {
            $query['AcrRegistryInfo'] = $request->acrRegistryInfo;
        }
        if (!Utils::isUnset($request->annotations)) {
            $query['Annotations'] = $request->annotations;
        }
        if (!Utils::isUnset($request->autoMatchImageCache)) {
            $query['AutoMatchImageCache'] = $request->autoMatchImageCache;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->eipInstanceId)) {
            $query['EipInstanceId'] = $request->eipInstanceId;
        }
        if (!Utils::isUnset($request->eliminationStrategy)) {
            $query['EliminationStrategy'] = $request->eliminationStrategy;
        }
        if (!Utils::isUnset($request->flash)) {
            $query['Flash'] = $request->flash;
        }
        if (!Utils::isUnset($request->flashCopyCount)) {
            $query['FlashCopyCount'] = $request->flashCopyCount;
        }
        if (!Utils::isUnset($request->image)) {
            $query['Image'] = $request->image;
        }
        if (!Utils::isUnset($request->imageCacheName)) {
            $query['ImageCacheName'] = $request->imageCacheName;
        }
        if (!Utils::isUnset($request->imageCacheSize)) {
            $query['ImageCacheSize'] = $request->imageCacheSize;
        }
        if (!Utils::isUnset($request->imageRegistryCredential)) {
            $query['ImageRegistryCredential'] = $request->imageRegistryCredential;
        }
        if (!Utils::isUnset($request->insecureRegistry)) {
            $query['InsecureRegistry'] = $request->insecureRegistry;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->plainHttpRegistry)) {
            $query['PlainHttpRegistry'] = $request->plainHttpRegistry;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->retentionDays)) {
            $query['RetentionDays'] = $request->retentionDays;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->standardCopyCount)) {
            $query['StandardCopyCount'] = $request->standardCopyCount;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateImageCache',
            'version'     => '2018-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateImageCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   **Precautions**
     *   *     *   You are charged for creation of image caches. We recommend that you learn the relevant billing information in advance. For more information about billing of image caches, see [Image caches](~~447682~~).
     *   *     *   Before you create an image cache, you must estimate the total size of the images that you want to cache. If the total size of the images exceeds the specified cache size, the image cache cannot be created.
     *   *     *   When an image cache is being created, the system creates an intermediate elastic container instance and an intermediate enhanced SSD (ESSD) at performance level 1 (PL1). Do not delete the intermediate instance and the ESSD while the image cache is being created. If you delete the intermediate instance or the ESSD, the image cache cannot be created.
     *   *     *   A temporary local snapshot and a specific number of regular snapshots are generated during the creation of the image cache. Do not delete these snapshots. If you delete these snapshots, the image cache becomes invalid.
     *   *     *   If you use SDKs, SDK for Java 1.0.10 or later and SDK for Python 1.0.7 or later are supported.
     *   * *   **Usage notes**
     *   *     *   For images that are created based on Container Registry Enterprise Edition instances and use custom domain names, if you want to configure password-free access to the image caches, you must use AcrRegistryInfo-related parameters to specify Container Registry instances. When you configure AcrRegistryInfo-related parameters, you must set the AcrRegistryInfo.N.InstanceId parameter.
     *   *     *   If the image cache that you created will be used to create more than 1,000 elastic container instances at a time, we recommend that you use the StandardCopyCount and FlashCopyCount parameters to create multiple temporary local snapshots and regular snapshots of the image. The multiple snapshots are billed based on incremental data. If no incremental data exists on the multiple snapshots, you are not charged for the multiple snapshots.
     *   * >  When you call the CreateImageCache operation to create an image cache, the system automatically creates a service-linked role named AliyunServiceRoleForECI. The role is used to access other Alibaba Cloud services such as Elastic Compute Service (ECS) and Virtual Private Cloud (VPC). For more information, see [Elastic Container Instance service-linked role](~~212914~~).
     *   *
     * @param CreateImageCacheRequest $request CreateImageCacheRequest
     *
     * @return CreateImageCacheResponse CreateImageCacheResponse
     */
    public function createImageCache($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImageCacheWithOptions($request, $runtime);
    }

    /**
     * O&M tasks are classified into:
     *   * *   coredump: After you enable coredump, the system generates a core dump file when a container unexpectedly stops. You can use the core dump file to analyze the exception and find out the cause of the problem. For more information, see [Enable coredump](~~167801~~).
     *   * *   tcpdump: After you enable tcpdump, the system captures network packets when a container unexpectedly stops. You can analyze the packets and locate network problems. For more information, see Enable [tcpdump](~~429749~~).
     *   *
     * @param CreateInstanceOpsTaskRequest $request CreateInstanceOpsTaskRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateInstanceOpsTaskResponse CreateInstanceOpsTaskResponse
     */
    public function createInstanceOpsTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->containerGroupId)) {
            $query['ContainerGroupId'] = $request->containerGroupId;
        }
        if (!Utils::isUnset($request->opsType)) {
            $query['OpsType'] = $request->opsType;
        }
        if (!Utils::isUnset($request->opsValue)) {
            $query['OpsValue'] = $request->opsValue;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateInstanceOpsTask',
            'version'     => '2018-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceOpsTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * O&M tasks are classified into:
     *   * *   coredump: After you enable coredump, the system generates a core dump file when a container unexpectedly stops. You can use the core dump file to analyze the exception and find out the cause of the problem. For more information, see [Enable coredump](~~167801~~).
     *   * *   tcpdump: After you enable tcpdump, the system captures network packets when a container unexpectedly stops. You can analyze the packets and locate network problems. For more information, see Enable [tcpdump](~~429749~~).
     *   *
     * @param CreateInstanceOpsTaskRequest $request CreateInstanceOpsTaskRequest
     *
     * @return CreateInstanceOpsTaskResponse CreateInstanceOpsTaskResponse
     */
    public function createInstanceOpsTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceOpsTaskWithOptions($request, $runtime);
    }

    /**
     * *   When you call this operation to create a virtual node, the system automatically creates a service-linked role AliyunServiceRoleForECIVnode. This way, you can use the service-linked role to access relevant cloud services such as Elastic Container Instance, Elastic Compute Service (ECS), and Virtual Private Cloud (VPC). For more information, see [Service-linked role for virtual nodes](~~311014~~).
     *   * *   You are charged for virtual nodes based on number of virtual nodes that you use. Each virtual node has a resident node, which is equivalent to an ECI instance with 2 vCPU cores and 8 GiB memory. You are charged for virtual nodes based on elastic container instances.
     *   *
     * @param CreateVirtualNodeRequest $request CreateVirtualNodeRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateVirtualNodeResponse CreateVirtualNodeResponse
     */
    public function createVirtualNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->clusterDNS)) {
            $query['ClusterDNS'] = $request->clusterDNS;
        }
        if (!Utils::isUnset($request->clusterDomain)) {
            $query['ClusterDomain'] = $request->clusterDomain;
        }
        if (!Utils::isUnset($request->customResources)) {
            $query['CustomResources'] = $request->customResources;
        }
        if (!Utils::isUnset($request->eipInstanceId)) {
            $query['EipInstanceId'] = $request->eipInstanceId;
        }
        if (!Utils::isUnset($request->enablePublicNetwork)) {
            $query['EnablePublicNetwork'] = $request->enablePublicNetwork;
        }
        if (!Utils::isUnset($request->kubeConfig)) {
            $query['KubeConfig'] = $request->kubeConfig;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->taint)) {
            $query['Taint'] = $request->taint;
        }
        if (!Utils::isUnset($request->tlsBootstrapEnabled)) {
            $query['TlsBootstrapEnabled'] = $request->tlsBootstrapEnabled;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->virtualNodeName)) {
            $query['VirtualNodeName'] = $request->virtualNodeName;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVirtualNode',
            'version'     => '2018-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVirtualNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   When you call this operation to create a virtual node, the system automatically creates a service-linked role AliyunServiceRoleForECIVnode. This way, you can use the service-linked role to access relevant cloud services such as Elastic Container Instance, Elastic Compute Service (ECS), and Virtual Private Cloud (VPC). For more information, see [Service-linked role for virtual nodes](~~311014~~).
     *   * *   You are charged for virtual nodes based on number of virtual nodes that you use. Each virtual node has a resident node, which is equivalent to an ECI instance with 2 vCPU cores and 8 GiB memory. You are charged for virtual nodes based on elastic container instances.
     *   *
     * @param CreateVirtualNodeRequest $request CreateVirtualNodeRequest
     *
     * @return CreateVirtualNodeResponse CreateVirtualNodeResponse
     */
    public function createVirtualNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVirtualNodeWithOptions($request, $runtime);
    }

    /**
     * @param DeleteContainerGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteContainerGroupResponse
     */
    public function deleteContainerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->containerGroupId)) {
            $query['ContainerGroupId'] = $request->containerGroupId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteContainerGroup',
            'version'     => '2018-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteContainerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteDataCacheRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteDataCacheResponse
     */
    public function deleteDataCacheWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucket)) {
            $query['Bucket'] = $request->bucket;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dataCacheId)) {
            $query['DataCacheId'] = $request->dataCacheId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDataCache',
            'version'     => '2018-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDataCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteImageCacheRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteImageCacheResponse
     */
    public function deleteImageCacheWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->imageCacheId)) {
            $query['ImageCacheId'] = $request->imageCacheId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteImageCache',
            'version'     => '2018-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteImageCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteVirtualNodeRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteVirtualNodeResponse
     */
    public function deleteVirtualNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->virtualNodeId)) {
            $query['VirtualNodeId'] = $request->virtualNodeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVirtualNode',
            'version'     => '2018-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVirtualNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * When you call the CreateContainerGroup operation to create an elastic container instance, you can use the InstanceType parameter to specify ECS instance types that fit your specific needs. To ensure that the elastic container instance can be created, you can call the DescribeAvailableResource operation to query which ECS instance types and instance families are available in the specified region and zone before you create the elastic container instance.
     *   *
     * @param DescribeAvailableResourceRequest $request DescribeAvailableResourceRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAvailableResourceResponse DescribeAvailableResourceResponse
     */
    public function describeAvailableResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->destinationResource)) {
            $query['DestinationResource'] = $request->destinationResource;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->spotResource)) {
            $query['SpotResource'] = $request->spotResource;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAvailableResource',
            'version'     => '2018-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAvailableResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * When you call the CreateContainerGroup operation to create an elastic container instance, you can use the InstanceType parameter to specify ECS instance types that fit your specific needs. To ensure that the elastic container instance can be created, you can call the DescribeAvailableResource operation to query which ECS instance types and instance families are available in the specified region and zone before you create the elastic container instance.
     *   *
     * @param DescribeAvailableResourceRequest $request DescribeAvailableResourceRequest
     *
     * @return DescribeAvailableResourceResponse DescribeAvailableResourceResponse
     */
    public function describeAvailableResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableResourceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCommitContainerTaskRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeCommitContainerTaskResponse
     */
    public function describeCommitContainerTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->containerGroupId)) {
            $query['ContainerGroupId'] = $request->containerGroupId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->taskStatus)) {
            $query['TaskStatus'] = $request->taskStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCommitContainerTask',
            'version'     => '2018-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCommitContainerTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * You can call this operation to query the event information about multiple elastic container instances at a time. By default, the most recent 50 entries of events of each elastic container instance are returned.
     *   *
     * @param DescribeContainerGroupEventsRequest $request DescribeContainerGroupEventsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeContainerGroupEventsResponse DescribeContainerGroupEventsResponse
     */
    public function describeContainerGroupEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->containerGroupIds)) {
            $query['ContainerGroupIds'] = $request->containerGroupIds;
        }
        if (!Utils::isUnset($request->eventSource)) {
            $query['EventSource'] = $request->eventSource;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sinceSecond)) {
            $query['SinceSecond'] = $request->sinceSecond;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeContainerGroupEvents',
            'version'     => '2018-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeContainerGroupEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the event information about multiple elastic container instances at a time. By default, the most recent 50 entries of events of each elastic container instance are returned.
     *   *
     * @param DescribeContainerGroupEventsRequest $request DescribeContainerGroupEventsRequest
     *
     * @return DescribeContainerGroupEventsResponse DescribeContainerGroupEventsResponse
     */
    public function describeContainerGroupEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContainerGroupEventsWithOptions($request, $runtime);
    }

    /**
     * *   A maximum of 50 monitoring data entries can be returned. If the number of monitoring data entries exceeds this limit, an error message is returned.
     *   * *   You can query real-time monitoring data (data generated within the last 5 minutes) and historical data (data generated more than 5 minutes ago). If the time range to query starts or ends later than the current time, historical monitoring data generated more than 5 minutes ago is returned.
     *   * *   The elastic container instance whose monitoring data you want to query must be created after April 3, 2019, 15:00 UTC+8.
     *   *
     * @param DescribeContainerGroupMetricRequest $request DescribeContainerGroupMetricRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeContainerGroupMetricResponse DescribeContainerGroupMetricResponse
     */
    public function describeContainerGroupMetricWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->containerGroupId)) {
            $query['ContainerGroupId'] = $request->containerGroupId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeContainerGroupMetric',
            'version'     => '2018-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeContainerGroupMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   A maximum of 50 monitoring data entries can be returned. If the number of monitoring data entries exceeds this limit, an error message is returned.
     *   * *   You can query real-time monitoring data (data generated within the last 5 minutes) and historical data (data generated more than 5 minutes ago). If the time range to query starts or ends later than the current time, historical monitoring data generated more than 5 minutes ago is returned.
     *   * *   The elastic container instance whose monitoring data you want to query must be created after April 3, 2019, 15:00 UTC+8.
     *   *
     * @param DescribeContainerGroupMetricRequest $request DescribeContainerGroupMetricRequest
     *
     * @return DescribeContainerGroupMetricResponse DescribeContainerGroupMetricResponse
     */
    public function describeContainerGroupMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContainerGroupMetricWithOptions($request, $runtime);
    }

    /**
     * *   When you call this operation, you cannot use resource groups to control the permissions of a RAM user.
     *   * *   You can create an elastic container instance by specifying vCPU and memory resource specifications or by specifying ECS instance types. When you call this operation to query the prices of elastic container instances, pass in specifications of the elastic container instances.
     *   *     *   [vCPU and memory specifications](~~114662~~).
     *   *     *   [ECS instance types that are supported by Elastic Container Instance](~~114664~~).
     *   *
     * @param DescribeContainerGroupPriceRequest $request DescribeContainerGroupPriceRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeContainerGroupPriceResponse DescribeContainerGroupPriceResponse
     */
    public function describeContainerGroupPriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->computeCategory)) {
            $query['ComputeCategory'] = $request->computeCategory;
        }
        if (!Utils::isUnset($request->cpu)) {
            $query['Cpu'] = $request->cpu;
        }
        if (!Utils::isUnset($request->ephemeralStorage)) {
            $query['EphemeralStorage'] = $request->ephemeralStorage;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->memory)) {
            $query['Memory'] = $request->memory;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->spotDuration)) {
            $query['SpotDuration'] = $request->spotDuration;
        }
        if (!Utils::isUnset($request->spotPriceLimit)) {
            $query['SpotPriceLimit'] = $request->spotPriceLimit;
        }
        if (!Utils::isUnset($request->spotStrategy)) {
            $query['SpotStrategy'] = $request->spotStrategy;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeContainerGroupPrice',
            'version'     => '2018-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeContainerGroupPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   When you call this operation, you cannot use resource groups to control the permissions of a RAM user.
     *   * *   You can create an elastic container instance by specifying vCPU and memory resource specifications or by specifying ECS instance types. When you call this operation to query the prices of elastic container instances, pass in specifications of the elastic container instances.
     *   *     *   [vCPU and memory specifications](~~114662~~).
     *   *     *   [ECS instance types that are supported by Elastic Container Instance](~~114664~~).
     *   *
     * @param DescribeContainerGroupPriceRequest $request DescribeContainerGroupPriceRequest
     *
     * @return DescribeContainerGroupPriceResponse DescribeContainerGroupPriceResponse
     */
    public function describeContainerGroupPrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContainerGroupPriceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeContainerGroupStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeContainerGroupStatusResponse
     */
    public function describeContainerGroupStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->containerGroupIds)) {
            $query['ContainerGroupIds'] = $request->containerGroupIds;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sinceSecond)) {
            $query['SinceSecond'] = $request->sinceSecond;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeContainerGroupStatus',
            'version'     => '2018-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeContainerGroupStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * *   After an elastic container instance is terminated, its underlying computing resources are recycled. By default, other resources, such as elastic IP addresses (EIPs), that are created together with the instance are released together with the instance.
     *   * *   The metadata of an instance in the final status (Failed, Succeeded, or Expired) is retained based on the following rules:
     *   *     *   All metadata information is retained within 1 hour since the instance enters the final status.
     *   *     *   One hour after the instance enters the final status, only the latest 100 entries of metadata information in each region are retained.
     *   *
     * @param DescribeContainerGroupsRequest $request DescribeContainerGroupsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeContainerGroupsResponse DescribeContainerGroupsResponse
     */
    public function describeContainerGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->computeCategory)) {
            $query['ComputeCategory'] = $request->computeCategory;
        }
        if (!Utils::isUnset($request->containerGroupIds)) {
            $query['ContainerGroupIds'] = $request->containerGroupIds;
        }
        if (!Utils::isUnset($request->containerGroupName)) {
            $query['ContainerGroupName'] = $request->containerGroupName;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->withEvent)) {
            $query['WithEvent'] = $request->withEvent;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeContainerGroups',
            'version'     => '2018-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeContainerGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   After an elastic container instance is terminated, its underlying computing resources are recycled. By default, other resources, such as elastic IP addresses (EIPs), that are created together with the instance are released together with the instance.
     *   * *   The metadata of an instance in the final status (Failed, Succeeded, or Expired) is retained based on the following rules:
     *   *     *   All metadata information is retained within 1 hour since the instance enters the final status.
     *   *     *   One hour after the instance enters the final status, only the latest 100 entries of metadata information in each region are retained.
     *   *
     * @param DescribeContainerGroupsRequest $request DescribeContainerGroupsRequest
     *
     * @return DescribeContainerGroupsResponse DescribeContainerGroupsResponse
     */
    public function describeContainerGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContainerGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeContainerLogRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeContainerLogResponse
     */
    public function describeContainerLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->containerGroupId)) {
            $query['ContainerGroupId'] = $request->containerGroupId;
        }
        if (!Utils::isUnset($request->containerName)) {
            $query['ContainerName'] = $request->containerName;
        }
        if (!Utils::isUnset($request->lastTime)) {
            $query['LastTime'] = $request->lastTime;
        }
        if (!Utils::isUnset($request->limitBytes)) {
            $query['LimitBytes'] = $request->limitBytes;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sinceSeconds)) {
            $query['SinceSeconds'] = $request->sinceSeconds;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tail)) {
            $query['Tail'] = $request->tail;
        }
        if (!Utils::isUnset($request->timestamps)) {
            $query['Timestamps'] = $request->timestamps;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeContainerLog',
            'version'     => '2018-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeContainerLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeDataCachesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDataCachesResponse
     */
    public function describeDataCachesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucket)) {
            $query['Bucket'] = $request->bucket;
        }
        if (!Utils::isUnset($request->dataCacheId)) {
            $query['DataCacheId'] = $request->dataCacheId;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDataCaches',
            'version'     => '2018-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDataCachesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeImageCachesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeImageCachesResponse
     */
    public function describeImageCachesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->image)) {
            $query['Image'] = $request->image;
        }
        if (!Utils::isUnset($request->imageCacheId)) {
            $query['ImageCacheId'] = $request->imageCacheId;
        }
        if (!Utils::isUnset($request->imageCacheName)) {
            $query['ImageCacheName'] = $request->imageCacheName;
        }
        if (!Utils::isUnset($request->imageFullMatch)) {
            $query['ImageFullMatch'] = $request->imageFullMatch;
        }
        if (!Utils::isUnset($request->imageMatchCountRequest)) {
            $query['ImageMatchCountRequest'] = $request->imageMatchCountRequest;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->matchImage)) {
            $query['MatchImage'] = $request->matchImage;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->snapshotId)) {
            $query['SnapshotId'] = $request->snapshotId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeImageCaches',
            'version'     => '2018-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImageCachesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeInstanceOpsRecordsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeInstanceOpsRecordsResponse
     */
    public function describeInstanceOpsRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->containerGroupId)) {
            $query['ContainerGroupId'] = $request->containerGroupId;
        }
        if (!Utils::isUnset($request->opsType)) {
            $query['OpsType'] = $request->opsType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceOpsRecords',
            'version'     => '2018-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceOpsRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * *   Only the latest entry of monitoring data of each elastic container instance is returned.
     *   * *   You can query only the monitoring data of elastic container instances that are created after April 3, 2019 15:00:00 UTC+8.
     *   *
     * @param DescribeMultiContainerGroupMetricRequest $request DescribeMultiContainerGroupMetricRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMultiContainerGroupMetricResponse DescribeMultiContainerGroupMetricResponse
     */
    public function describeMultiContainerGroupMetricWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->containerGroupIds)) {
            $query['ContainerGroupIds'] = $request->containerGroupIds;
        }
        if (!Utils::isUnset($request->metricType)) {
            $query['MetricType'] = $request->metricType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMultiContainerGroupMetric',
            'version'     => '2018-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMultiContainerGroupMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   Only the latest entry of monitoring data of each elastic container instance is returned.
     *   * *   You can query only the monitoring data of elastic container instances that are created after April 3, 2019 15:00:00 UTC+8.
     *   *
     * @param DescribeMultiContainerGroupMetricRequest $request DescribeMultiContainerGroupMetricRequest
     *
     * @return DescribeMultiContainerGroupMetricResponse DescribeMultiContainerGroupMetricResponse
     */
    public function describeMultiContainerGroupMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMultiContainerGroupMetricWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2018-08-08',
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
     * @param DescribeVirtualNodesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeVirtualNodesResponse
     */
    public function describeVirtualNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->virtualNodeIds)) {
            $query['VirtualNodeIds'] = $request->virtualNodeIds;
        }
        if (!Utils::isUnset($request->virtualNodeName)) {
            $query['VirtualNodeName'] = $request->virtualNodeName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVirtualNodes',
            'version'     => '2018-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVirtualNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ExecContainerCommandRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ExecContainerCommandResponse
     */
    public function execContainerCommandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->command)) {
            $query['Command'] = $request->command;
        }
        if (!Utils::isUnset($request->containerGroupId)) {
            $query['ContainerGroupId'] = $request->containerGroupId;
        }
        if (!Utils::isUnset($request->containerName)) {
            $query['ContainerName'] = $request->containerName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->stdin)) {
            $query['Stdin'] = $request->stdin;
        }
        if (!Utils::isUnset($request->sync)) {
            $query['Sync'] = $request->sync;
        }
        if (!Utils::isUnset($request->TTY)) {
            $query['TTY'] = $request->TTY;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExecContainerCommand',
            'version'     => '2018-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExecContainerCommandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * This operation does not support resource group authentication.
     *   *
     * @param ListUsageRequest $request ListUsageRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUsageResponse ListUsageResponse
     */
    public function listUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUsage',
            'version'     => '2018-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation does not support resource group authentication.
     *   *
     * @param ListUsageRequest $request ListUsageRequest
     *
     * @return ListUsageResponse ListUsageResponse
     */
    public function listUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsageWithOptions($request, $runtime);
    }

    /**
     * You can scale up volumes by calling this operation. You cannot scale down volumes by calling this operation. Only volumes of Alibaba Cloud disks can be scaled up.
     *   *
     * @param ResizeContainerGroupVolumeRequest $request ResizeContainerGroupVolumeRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ResizeContainerGroupVolumeResponse ResizeContainerGroupVolumeResponse
     */
    public function resizeContainerGroupVolumeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->containerGroupId)) {
            $query['ContainerGroupId'] = $request->containerGroupId;
        }
        if (!Utils::isUnset($request->newSize)) {
            $query['NewSize'] = $request->newSize;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->volumeName)) {
            $query['VolumeName'] = $request->volumeName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResizeContainerGroupVolume',
            'version'     => '2018-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResizeContainerGroupVolumeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can scale up volumes by calling this operation. You cannot scale down volumes by calling this operation. Only volumes of Alibaba Cloud disks can be scaled up.
     *   *
     * @param ResizeContainerGroupVolumeRequest $request ResizeContainerGroupVolumeRequest
     *
     * @return ResizeContainerGroupVolumeResponse ResizeContainerGroupVolumeResponse
     */
    public function resizeContainerGroupVolume($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resizeContainerGroupVolumeWithOptions($request, $runtime);
    }

    /**
     * *   Only elastic container instances that are in the Pending or Running state can be restarted. Instances that are in the Succeeded or Failed state cannot be restarted.
     *   * *   Elastic container instances that were created before 15:00:00 on March 7, 2019 cannot be restarted.
     *   * *   When an elastic container instance is being restarted, its status changes into Restarting.
     *   *
     * @param RestartContainerGroupRequest $request RestartContainerGroupRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return RestartContainerGroupResponse RestartContainerGroupResponse
     */
    public function restartContainerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->containerGroupId)) {
            $query['ContainerGroupId'] = $request->containerGroupId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestartContainerGroup',
            'version'     => '2018-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RestartContainerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   Only elastic container instances that are in the Pending or Running state can be restarted. Instances that are in the Succeeded or Failed state cannot be restarted.
     *   * *   Elastic container instances that were created before 15:00:00 on March 7, 2019 cannot be restarted.
     *   * *   When an elastic container instance is being restarted, its status changes into Restarting.
     *   *
     * @param RestartContainerGroupRequest $request RestartContainerGroupRequest
     *
     * @return RestartContainerGroupResponse RestartContainerGroupResponse
     */
    public function restartContainerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartContainerGroupWithOptions($request, $runtime);
    }

    /**
     * *   Only elastic container instances that are in the Pending or Running state can be updated. After you call this operation to update an elastic container instance, the instance enters the Updating state.
     *   * *   If the RestartPolicy parameter is set to Never for the elastic container instance that you are updating, the containers of the instance may fail. Exercise caution if you want to update the kind of instances.
     *   *
     * @param UpdateContainerGroupRequest $request UpdateContainerGroupRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateContainerGroupResponse UpdateContainerGroupResponse
     */
    public function updateContainerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acrRegistryInfo)) {
            $query['AcrRegistryInfo'] = $request->acrRegistryInfo;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->container)) {
            $query['Container'] = $request->container;
        }
        if (!Utils::isUnset($request->containerGroupId)) {
            $query['ContainerGroupId'] = $request->containerGroupId;
        }
        if (!Utils::isUnset($request->cpu)) {
            $query['Cpu'] = $request->cpu;
        }
        if (!Utils::isUnset($request->imageRegistryCredential)) {
            $query['ImageRegistryCredential'] = $request->imageRegistryCredential;
        }
        if (!Utils::isUnset($request->initContainer)) {
            $query['InitContainer'] = $request->initContainer;
        }
        if (!Utils::isUnset($request->memory)) {
            $query['Memory'] = $request->memory;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->restartPolicy)) {
            $query['RestartPolicy'] = $request->restartPolicy;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->updateType)) {
            $query['UpdateType'] = $request->updateType;
        }
        if (!Utils::isUnset($request->volume)) {
            $query['Volume'] = $request->volume;
        }
        if (!Utils::isUnset($request->dnsConfig)) {
            $query['DnsConfig'] = $request->dnsConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateContainerGroup',
            'version'     => '2018-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateContainerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   Only elastic container instances that are in the Pending or Running state can be updated. After you call this operation to update an elastic container instance, the instance enters the Updating state.
     *   * *   If the RestartPolicy parameter is set to Never for the elastic container instance that you are updating, the containers of the instance may fail. Exercise caution if you want to update the kind of instances.
     *   *
     * @param UpdateContainerGroupRequest $request UpdateContainerGroupRequest
     *
     * @return UpdateContainerGroupResponse UpdateContainerGroupResponse
     */
    public function updateContainerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateContainerGroupWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDataCacheRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateDataCacheResponse
     */
    public function updateDataCacheWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucket)) {
            $query['Bucket'] = $request->bucket;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dataCacheId)) {
            $query['DataCacheId'] = $request->dataCacheId;
        }
        if (!Utils::isUnset($request->dataSource)) {
            $query['DataSource'] = $request->dataSource;
        }
        if (!Utils::isUnset($request->eipCreateParam)) {
            $query['EipCreateParam'] = $request->eipCreateParam;
        }
        if (!Utils::isUnset($request->eipInstanceId)) {
            $query['EipInstanceId'] = $request->eipInstanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->retentionDays)) {
            $query['RetentionDays'] = $request->retentionDays;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDataCache',
            'version'     => '2018-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDataCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * Only image caches that are in the Ready or UpdateFailed state can be updated.
     *   *
     * @param UpdateImageCacheRequest $request UpdateImageCacheRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateImageCacheResponse UpdateImageCacheResponse
     */
    public function updateImageCacheWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acrRegistryInfo)) {
            $query['AcrRegistryInfo'] = $request->acrRegistryInfo;
        }
        if (!Utils::isUnset($request->autoMatchImageCache)) {
            $query['AutoMatchImageCache'] = $request->autoMatchImageCache;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->eipInstanceId)) {
            $query['EipInstanceId'] = $request->eipInstanceId;
        }
        if (!Utils::isUnset($request->eliminationStrategy)) {
            $query['EliminationStrategy'] = $request->eliminationStrategy;
        }
        if (!Utils::isUnset($request->flash)) {
            $query['Flash'] = $request->flash;
        }
        if (!Utils::isUnset($request->flashCopyCount)) {
            $query['FlashCopyCount'] = $request->flashCopyCount;
        }
        if (!Utils::isUnset($request->image)) {
            $query['Image'] = $request->image;
        }
        if (!Utils::isUnset($request->imageCacheId)) {
            $query['ImageCacheId'] = $request->imageCacheId;
        }
        if (!Utils::isUnset($request->imageCacheName)) {
            $query['ImageCacheName'] = $request->imageCacheName;
        }
        if (!Utils::isUnset($request->imageCacheSize)) {
            $query['ImageCacheSize'] = $request->imageCacheSize;
        }
        if (!Utils::isUnset($request->imageRegistryCredential)) {
            $query['ImageRegistryCredential'] = $request->imageRegistryCredential;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->retentionDays)) {
            $query['RetentionDays'] = $request->retentionDays;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->standardCopyCount)) {
            $query['StandardCopyCount'] = $request->standardCopyCount;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateImageCache',
            'version'     => '2018-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateImageCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Only image caches that are in the Ready or UpdateFailed state can be updated.
     *   *
     * @param UpdateImageCacheRequest $request UpdateImageCacheRequest
     *
     * @return UpdateImageCacheResponse UpdateImageCacheResponse
     */
    public function updateImageCache($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateImageCacheWithOptions($request, $runtime);
    }

    /**
     * ## Usage notes
     *   * Only virtual nodes that are in the Ready state can be updated.
     *   *
     * @param UpdateVirtualNodeRequest $request UpdateVirtualNodeRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateVirtualNodeResponse UpdateVirtualNodeResponse
     */
    public function updateVirtualNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->clusterDNS)) {
            $query['ClusterDNS'] = $request->clusterDNS;
        }
        if (!Utils::isUnset($request->clusterDomain)) {
            $query['ClusterDomain'] = $request->clusterDomain;
        }
        if (!Utils::isUnset($request->customResources)) {
            $query['CustomResources'] = $request->customResources;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->virtualNodeId)) {
            $query['VirtualNodeId'] = $request->virtualNodeId;
        }
        if (!Utils::isUnset($request->virtualNodeName)) {
            $query['VirtualNodeName'] = $request->virtualNodeName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateVirtualNode',
            'version'     => '2018-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateVirtualNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Usage notes
     *   * Only virtual nodes that are in the Ready state can be updated.
     *   *
     * @param UpdateVirtualNodeRequest $request UpdateVirtualNodeRequest
     *
     * @return UpdateVirtualNodeResponse UpdateVirtualNodeResponse
     */
    public function updateVirtualNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVirtualNodeWithOptions($request, $runtime);
    }
}
