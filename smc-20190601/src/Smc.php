<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Smc\V20190601\Models\AssociateSourceServersRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\AssociateSourceServersResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\CreateAccessTokenRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\CreateAccessTokenResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\CreateCrossZoneMigrationJobRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\CreateCrossZoneMigrationJobResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\CreateReplicationJobRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\CreateReplicationJobResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\CreateWorkgroupRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\CreateWorkgroupResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\CutOverReplicationJobRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\CutOverReplicationJobResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\DeleteAccessTokenRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\DeleteAccessTokenResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\DeleteReplicationJobRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\DeleteReplicationJobResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\DeleteSourceServerRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\DeleteSourceServerResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\DeleteWorkgroupRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\DeleteWorkgroupResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeReplicationJobsRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeReplicationJobsResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeWorkgroupsRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeWorkgroupsResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\DisableAccessTokenRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\DisableAccessTokenResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\DisassociateSourceServersRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\DisassociateSourceServersResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\ListAccessTokensRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\ListAccessTokensResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\ModifyReplicationJobAttributeRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\ModifyReplicationJobAttributeResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\ModifySourceServerAttributeRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\ModifySourceServerAttributeResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\ModifyWorkgroupAttributeRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\ModifyWorkgroupAttributeResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\StartReplicationJobRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\StartReplicationJobResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\StopReplicationJobRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\StopReplicationJobResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\UntagResourcesResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Smc extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('smc', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Associates multiple migration sources with a workgroup.
     *
     * @remarks
     * A migration source can be associated with only one workgroup.
     *
     * @param request - AssociateSourceServersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssociateSourceServersResponse
     *
     * @param AssociateSourceServersRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AssociateSourceServersResponse
     */
    public function associateSourceServersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->sourceId) {
            @$query['SourceId'] = $request->sourceId;
        }

        if (null !== $request->workgroupId) {
            @$query['WorkgroupId'] = $request->workgroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AssociateSourceServers',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AssociateSourceServersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AssociateSourceServersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Associates multiple migration sources with a workgroup.
     *
     * @remarks
     * A migration source can be associated with only one workgroup.
     *
     * @param request - AssociateSourceServersRequest
     *
     * @returns AssociateSourceServersResponse
     *
     * @param AssociateSourceServersRequest $request
     *
     * @return AssociateSourceServersResponse
     */
    public function associateSourceServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateSourceServersWithOptions($request, $runtime);
    }

    /**
     * Creates an activation code.
     *
     * @remarks
     * If you want to import the information of migration sources by using an activation code, you can call this operation to create one.
     *
     * @param request - CreateAccessTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAccessTokenResponse
     *
     * @param CreateAccessTokenRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateAccessTokenResponse
     */
    public function createAccessTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->count) {
            @$query['Count'] = $request->count;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->timeToLiveInDays) {
            @$query['TimeToLiveInDays'] = $request->timeToLiveInDays;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAccessToken',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateAccessTokenResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateAccessTokenResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates an activation code.
     *
     * @remarks
     * If you want to import the information of migration sources by using an activation code, you can call this operation to create one.
     *
     * @param request - CreateAccessTokenRequest
     *
     * @returns CreateAccessTokenResponse
     *
     * @param CreateAccessTokenRequest $request
     *
     * @return CreateAccessTokenResponse
     */
    public function createAccessToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccessTokenWithOptions($request, $runtime);
    }

    /**
     * Server Migration Center (SMC) allows you to migrate Alibaba Cloud ECS instances across zones in the same region. You can also change the instance type (vCPU and memory) within the same instance family to meet your business requirements. You can use this API to create a cross-zone migration job.
     *
     * @remarks
     * For more information about the limits and impacts of cross-zone migration, see [Cross-zone ECS instance migration](https://help.aliyun.com/document_detail/476797.html).
     *
     * @param request - CreateCrossZoneMigrationJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCrossZoneMigrationJobResponse
     *
     * @param CreateCrossZoneMigrationJobRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateCrossZoneMigrationJobResponse
     */
    public function createCrossZoneMigrationJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->disk) {
            @$query['Disk'] = $request->disk;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
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

        if (null !== $request->targetInstanceType) {
            @$query['TargetInstanceType'] = $request->targetInstanceType;
        }

        if (null !== $request->targetVSwitchId) {
            @$query['TargetVSwitchId'] = $request->targetVSwitchId;
        }

        if (null !== $request->targetZoneId) {
            @$query['TargetZoneId'] = $request->targetZoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCrossZoneMigrationJob',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateCrossZoneMigrationJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateCrossZoneMigrationJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Server Migration Center (SMC) allows you to migrate Alibaba Cloud ECS instances across zones in the same region. You can also change the instance type (vCPU and memory) within the same instance family to meet your business requirements. You can use this API to create a cross-zone migration job.
     *
     * @remarks
     * For more information about the limits and impacts of cross-zone migration, see [Cross-zone ECS instance migration](https://help.aliyun.com/document_detail/476797.html).
     *
     * @param request - CreateCrossZoneMigrationJobRequest
     *
     * @returns CreateCrossZoneMigrationJobResponse
     *
     * @param CreateCrossZoneMigrationJobRequest $request
     *
     * @return CreateCrossZoneMigrationJobResponse
     */
    public function createCrossZoneMigrationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCrossZoneMigrationJobWithOptions($request, $runtime);
    }

    /**
     * Creates a migration job for a source server.
     *
     * @remarks
     * ## Usage notes
     * *   You can create migration jobs only for source servers that are in the Available state.
     * *   Each source server can be associated with only one migration job that is in the Ready, Running, Stopped, Waiting, InError, or Expired state.
     * *   You can create a maximum of 1,000 migration jobs within each Alibaba Cloud account.
     * *   If you migrate a source server to an image, you must specify the ImageName, SystemDiskSize, and DataDisk parameters.
     * *   If you use a virtual private cloud (VPC) to migrate data, the VSwitchId parameter is required and the VpcId parameter is optional.
     * *   Server Migration Center (SMC) allows you to migrate source servers to Docker container images. This allows you to migrate containerized applications in a cost-effective way.
     *
     * @param request - CreateReplicationJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateReplicationJobResponse
     *
     * @param CreateReplicationJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateReplicationJobResponse
     */
    public function createReplicationJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->containerNamespace) {
            @$query['ContainerNamespace'] = $request->containerNamespace;
        }

        if (null !== $request->containerRepository) {
            @$query['ContainerRepository'] = $request->containerRepository;
        }

        if (null !== $request->containerTag) {
            @$query['ContainerTag'] = $request->containerTag;
        }

        if (null !== $request->dataDisk) {
            @$query['DataDisk'] = $request->dataDisk;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->disks) {
            @$query['Disks'] = $request->disks;
        }

        if (null !== $request->frequency) {
            @$query['Frequency'] = $request->frequency;
        }

        if (null !== $request->imageName) {
            @$query['ImageName'] = $request->imageName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceRamRole) {
            @$query['InstanceRamRole'] = $request->instanceRamRole;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->jobType) {
            @$query['JobType'] = $request->jobType;
        }

        if (null !== $request->launchTemplateId) {
            @$query['LaunchTemplateId'] = $request->launchTemplateId;
        }

        if (null !== $request->launchTemplateVersion) {
            @$query['LaunchTemplateVersion'] = $request->launchTemplateVersion;
        }

        if (null !== $request->licenseType) {
            @$query['LicenseType'] = $request->licenseType;
        }

        if (null !== $request->maxNumberOfImageToKeep) {
            @$query['MaxNumberOfImageToKeep'] = $request->maxNumberOfImageToKeep;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->netMode) {
            @$query['NetMode'] = $request->netMode;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->replicationParameters) {
            @$query['ReplicationParameters'] = $request->replicationParameters;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->runOnce) {
            @$query['RunOnce'] = $request->runOnce;
        }

        if (null !== $request->scheduledStartTime) {
            @$query['ScheduledStartTime'] = $request->scheduledStartTime;
        }

        if (null !== $request->sourceId) {
            @$query['SourceId'] = $request->sourceId;
        }

        if (null !== $request->systemDiskPart) {
            @$query['SystemDiskPart'] = $request->systemDiskPart;
        }

        if (null !== $request->systemDiskSize) {
            @$query['SystemDiskSize'] = $request->systemDiskSize;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->targetType) {
            @$query['TargetType'] = $request->targetType;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->validTime) {
            @$query['ValidTime'] = $request->validTime;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateReplicationJob',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateReplicationJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateReplicationJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a migration job for a source server.
     *
     * @remarks
     * ## Usage notes
     * *   You can create migration jobs only for source servers that are in the Available state.
     * *   Each source server can be associated with only one migration job that is in the Ready, Running, Stopped, Waiting, InError, or Expired state.
     * *   You can create a maximum of 1,000 migration jobs within each Alibaba Cloud account.
     * *   If you migrate a source server to an image, you must specify the ImageName, SystemDiskSize, and DataDisk parameters.
     * *   If you use a virtual private cloud (VPC) to migrate data, the VSwitchId parameter is required and the VpcId parameter is optional.
     * *   Server Migration Center (SMC) allows you to migrate source servers to Docker container images. This allows you to migrate containerized applications in a cost-effective way.
     *
     * @param request - CreateReplicationJobRequest
     *
     * @returns CreateReplicationJobResponse
     *
     * @param CreateReplicationJobRequest $request
     *
     * @return CreateReplicationJobResponse
     */
    public function createReplicationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createReplicationJobWithOptions($request, $runtime);
    }

    /**
     * Creates a workgroup. You can create a workgroup to manage the lifecycles of multiple migration tasks at a time. This is suitable for scenarios in which multiple servers are migrated.
     *
     * @remarks
     *   You can create up to 50 workgroups within an Alibaba Cloud account.
     * *   A workgroup can be associated with a maximum of 50 migration sources.
     * *   A migration source can be associated with only one workgroup.
     *
     * @param request - CreateWorkgroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWorkgroupResponse
     *
     * @param CreateWorkgroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateWorkgroupResponse
     */
    public function createWorkgroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateWorkgroup',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateWorkgroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateWorkgroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a workgroup. You can create a workgroup to manage the lifecycles of multiple migration tasks at a time. This is suitable for scenarios in which multiple servers are migrated.
     *
     * @remarks
     *   You can create up to 50 workgroups within an Alibaba Cloud account.
     * *   A workgroup can be associated with a maximum of 50 migration sources.
     * *   A migration source can be associated with only one workgroup.
     *
     * @param request - CreateWorkgroupRequest
     *
     * @returns CreateWorkgroupResponse
     *
     * @param CreateWorkgroupRequest $request
     *
     * @return CreateWorkgroupResponse
     */
    public function createWorkgroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWorkgroupWithOptions($request, $runtime);
    }

    /**
     * Stops an incremental migration job that periodically runs. After you call this operation to stop an incremental migration job, the migration job is complete.
     *
     * @remarks
     * ## Usage notes
     * *   The incremental migration job must be in the Waiting state.
     * *   After you call this operation, the incremental migration job no longer periodically runs. In the meantime, Server Migration Center (SMC) determines whether to perform a full data migration for the last time based on the value of the `SyncData` parameter. If you set the SyncData parameter to `false`, SMC releases intermediate resources without data migration before the migration job is complete. If you set the SyncData parameter to `true`, SMC performs a full data migration and releases intermediate resources before the migration job is complete.
     *
     * @param request - CutOverReplicationJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CutOverReplicationJobResponse
     *
     * @param CutOverReplicationJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CutOverReplicationJobResponse
     */
    public function cutOverReplicationJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->syncData) {
            @$query['SyncData'] = $request->syncData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CutOverReplicationJob',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CutOverReplicationJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CutOverReplicationJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Stops an incremental migration job that periodically runs. After you call this operation to stop an incremental migration job, the migration job is complete.
     *
     * @remarks
     * ## Usage notes
     * *   The incremental migration job must be in the Waiting state.
     * *   After you call this operation, the incremental migration job no longer periodically runs. In the meantime, Server Migration Center (SMC) determines whether to perform a full data migration for the last time based on the value of the `SyncData` parameter. If you set the SyncData parameter to `false`, SMC releases intermediate resources without data migration before the migration job is complete. If you set the SyncData parameter to `true`, SMC performs a full data migration and releases intermediate resources before the migration job is complete.
     *
     * @param request - CutOverReplicationJobRequest
     *
     * @returns CutOverReplicationJobResponse
     *
     * @param CutOverReplicationJobRequest $request
     *
     * @return CutOverReplicationJobResponse
     */
    public function cutOverReplicationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cutOverReplicationJobWithOptions($request, $runtime);
    }

    /**
     * Deletes an activation code.
     *
     * @remarks
     * You can call this operation to delete an activation code if you no longer need to import the information about migration sources by using the activation code or if the activation code has expired.
     *
     * @param request - DeleteAccessTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAccessTokenResponse
     *
     * @param DeleteAccessTokenRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteAccessTokenResponse
     */
    public function deleteAccessTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessTokenId) {
            @$query['AccessTokenId'] = $request->accessTokenId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAccessToken',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteAccessTokenResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAccessTokenResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an activation code.
     *
     * @remarks
     * You can call this operation to delete an activation code if you no longer need to import the information about migration sources by using the activation code or if the activation code has expired.
     *
     * @param request - DeleteAccessTokenRequest
     *
     * @returns DeleteAccessTokenResponse
     *
     * @param DeleteAccessTokenRequest $request
     *
     * @return DeleteAccessTokenResponse
     */
    public function deleteAccessToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccessTokenWithOptions($request, $runtime);
    }

    /**
     * Deletes a migration job.
     *
     * @remarks
     * ## Usage notes
     * *   Deleted migration jobs cannot be restored.
     * *   After a migration job is deleted, associated resources, such as the intermediate instance, are automatically released.
     *
     * @param request - DeleteReplicationJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteReplicationJobResponse
     *
     * @param DeleteReplicationJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteReplicationJobResponse
     */
    public function deleteReplicationJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteReplicationJob',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteReplicationJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteReplicationJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a migration job.
     *
     * @remarks
     * ## Usage notes
     * *   Deleted migration jobs cannot be restored.
     * *   After a migration job is deleted, associated resources, such as the intermediate instance, are automatically released.
     *
     * @param request - DeleteReplicationJobRequest
     *
     * @returns DeleteReplicationJobResponse
     *
     * @param DeleteReplicationJobRequest $request
     *
     * @return DeleteReplicationJobResponse
     */
    public function deleteReplicationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteReplicationJobWithOptions($request, $runtime);
    }

    /**
     * Deletes a migration source.
     *
     * @remarks
     * ## Usage notes
     * *   If a migration job is created for the migration source and the migration job is in the Running state, the migration source cannot be deleted.
     * *   If a migration job is created for the migration source but the migration job is not in the Running state, you can set the `Force` parameter to true to delete the migration source.
     *
     * @param request - DeleteSourceServerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSourceServerResponse
     *
     * @param DeleteSourceServerRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteSourceServerResponse
     */
    public function deleteSourceServerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->sourceId) {
            @$query['SourceId'] = $request->sourceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSourceServer',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteSourceServerResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteSourceServerResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a migration source.
     *
     * @remarks
     * ## Usage notes
     * *   If a migration job is created for the migration source and the migration job is in the Running state, the migration source cannot be deleted.
     * *   If a migration job is created for the migration source but the migration job is not in the Running state, you can set the `Force` parameter to true to delete the migration source.
     *
     * @param request - DeleteSourceServerRequest
     *
     * @returns DeleteSourceServerResponse
     *
     * @param DeleteSourceServerRequest $request
     *
     * @return DeleteSourceServerResponse
     */
    public function deleteSourceServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSourceServerWithOptions($request, $runtime);
    }

    /**
     * Deletes a workgroup.
     *
     * @remarks
     * To delete a workgroup, you must delete or dissociate the migration source that is associated with the workgroup. For more information, see [DeleteSourceServer](https://help.aliyun.com/document_detail/2402124.html).
     *
     * @param request - DeleteWorkgroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWorkgroupResponse
     *
     * @param DeleteWorkgroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteWorkgroupResponse
     */
    public function deleteWorkgroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->workgroupId) {
            @$query['WorkgroupId'] = $request->workgroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteWorkgroup',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteWorkgroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteWorkgroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a workgroup.
     *
     * @remarks
     * To delete a workgroup, you must delete or dissociate the migration source that is associated with the workgroup. For more information, see [DeleteSourceServer](https://help.aliyun.com/document_detail/2402124.html).
     *
     * @param request - DeleteWorkgroupRequest
     *
     * @returns DeleteWorkgroupResponse
     *
     * @param DeleteWorkgroupRequest $request
     *
     * @return DeleteWorkgroupResponse
     */
    public function deleteWorkgroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWorkgroupWithOptions($request, $runtime);
    }

    /**
     * Queries the details of migration jobs.
     *
     * @remarks
     * ## Usage notes
     * *   You can specify multiple request parameters to be queried. Specified parameters are evaluated by using the AND operator. Only the specified parameters are used as filter conditions.
     * *   Server Migration Center (SMC) allows you to migrate source servers to Docker container images. You can use SMC to migrate containerized applications in a cost-effective way. For more information, see [Terms](https://help.aliyun.com/document_detail/60744.html).
     *
     * @param request - DescribeReplicationJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeReplicationJobsResponse
     *
     * @param DescribeReplicationJobsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeReplicationJobsResponse
     */
    public function describeReplicationJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessStatus) {
            @$query['BusinessStatus'] = $request->businessStatus;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->jobType) {
            @$query['JobType'] = $request->jobType;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->sourceId) {
            @$query['SourceId'] = $request->sourceId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeReplicationJobs',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeReplicationJobsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeReplicationJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of migration jobs.
     *
     * @remarks
     * ## Usage notes
     * *   You can specify multiple request parameters to be queried. Specified parameters are evaluated by using the AND operator. Only the specified parameters are used as filter conditions.
     * *   Server Migration Center (SMC) allows you to migrate source servers to Docker container images. You can use SMC to migrate containerized applications in a cost-effective way. For more information, see [Terms](https://help.aliyun.com/document_detail/60744.html).
     *
     * @param request - DescribeReplicationJobsRequest
     *
     * @returns DescribeReplicationJobsResponse
     *
     * @param DescribeReplicationJobsRequest $request
     *
     * @return DescribeReplicationJobsResponse
     */
    public function describeReplicationJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeReplicationJobsWithOptions($request, $runtime);
    }

    /**
     * Queries the information about one or more source servers.
     *
     * @remarks
     * ## [](#)Usage notes
     * You can specify multiple request parameters to filter instances. Specified parameters have logical AND relations. Only the specified parameters are used as filter conditions.
     *
     * @param request - DescribeSourceServersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSourceServersResponse
     *
     * @param DescribeSourceServersRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeSourceServersResponse
     */
    public function describeSourceServersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->relatedJobType) {
            @$query['RelatedJobType'] = $request->relatedJobType;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->sourceId) {
            @$query['SourceId'] = $request->sourceId;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->workgroupId) {
            @$query['WorkgroupId'] = $request->workgroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSourceServers',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeSourceServersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSourceServersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about one or more source servers.
     *
     * @remarks
     * ## [](#)Usage notes
     * You can specify multiple request parameters to filter instances. Specified parameters have logical AND relations. Only the specified parameters are used as filter conditions.
     *
     * @param request - DescribeSourceServersRequest
     *
     * @returns DescribeSourceServersResponse
     *
     * @param DescribeSourceServersRequest $request
     *
     * @return DescribeSourceServersResponse
     */
    public function describeSourceServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSourceServersWithOptions($request, $runtime);
    }

    /**
     * Queries the information about workgroups. After you create a workgroup, you can query the information about the workgroup, such as the name, description, and alert information.
     *
     * @param request - DescribeWorkgroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeWorkgroupsResponse
     *
     * @param DescribeWorkgroupsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeWorkgroupsResponse
     */
    public function describeWorkgroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->workgroupId) {
            @$query['WorkgroupId'] = $request->workgroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeWorkgroups',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeWorkgroupsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeWorkgroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about workgroups. After you create a workgroup, you can query the information about the workgroup, such as the name, description, and alert information.
     *
     * @param request - DescribeWorkgroupsRequest
     *
     * @returns DescribeWorkgroupsResponse
     *
     * @param DescribeWorkgroupsRequest $request
     *
     * @return DescribeWorkgroupsResponse
     */
    public function describeWorkgroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWorkgroupsWithOptions($request, $runtime);
    }

    /**
     * Disables an activation code.
     *
     * @remarks
     * To prevent an activation code from being leaked, you can call this operation to disable the activation code. Disabled activation codes can no longer be used to import the information about migration sources. However, migration sources whose information has been imported are not affected.
     *
     * @param request - DisableAccessTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableAccessTokenResponse
     *
     * @param DisableAccessTokenRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DisableAccessTokenResponse
     */
    public function disableAccessTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessTokenId) {
            @$query['AccessTokenId'] = $request->accessTokenId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableAccessToken',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DisableAccessTokenResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DisableAccessTokenResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Disables an activation code.
     *
     * @remarks
     * To prevent an activation code from being leaked, you can call this operation to disable the activation code. Disabled activation codes can no longer be used to import the information about migration sources. However, migration sources whose information has been imported are not affected.
     *
     * @param request - DisableAccessTokenRequest
     *
     * @returns DisableAccessTokenResponse
     *
     * @param DisableAccessTokenRequest $request
     *
     * @return DisableAccessTokenResponse
     */
    public function disableAccessToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableAccessTokenWithOptions($request, $runtime);
    }

    /**
     * Disassociates migration sources from a workgroup. If you do not need to use a workgroup to migrate migration sources, you can disassociate the migration sources from the workgroup.
     *
     * @param request - DisassociateSourceServersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisassociateSourceServersResponse
     *
     * @param DisassociateSourceServersRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DisassociateSourceServersResponse
     */
    public function disassociateSourceServersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->sourceId) {
            @$query['SourceId'] = $request->sourceId;
        }

        if (null !== $request->workgroupId) {
            @$query['WorkgroupId'] = $request->workgroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisassociateSourceServers',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DisassociateSourceServersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DisassociateSourceServersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Disassociates migration sources from a workgroup. If you do not need to use a workgroup to migrate migration sources, you can disassociate the migration sources from the workgroup.
     *
     * @param request - DisassociateSourceServersRequest
     *
     * @returns DisassociateSourceServersResponse
     *
     * @param DisassociateSourceServersRequest $request
     *
     * @return DisassociateSourceServersResponse
     */
    public function disassociateSourceServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disassociateSourceServersWithOptions($request, $runtime);
    }

    /**
     * Queries activation codes and the usage details of the activation codes.
     *
     * @remarks
     * You can call this operation to query activation codes and the usage details of the activation codes. An activation code can be in the activated, unactivated, or expired state.
     *
     * @param request - ListAccessTokensRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAccessTokensResponse
     *
     * @param ListAccessTokensRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListAccessTokensResponse
     */
    public function listAccessTokensWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessTokenId) {
            @$query['AccessTokenId'] = $request->accessTokenId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAccessTokens',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListAccessTokensResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAccessTokensResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries activation codes and the usage details of the activation codes.
     *
     * @remarks
     * You can call this operation to query activation codes and the usage details of the activation codes. An activation code can be in the activated, unactivated, or expired state.
     *
     * @param request - ListAccessTokensRequest
     *
     * @returns ListAccessTokensResponse
     *
     * @param ListAccessTokensRequest $request
     *
     * @return ListAccessTokensResponse
     */
    public function listAccessTokens($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccessTokensWithOptions($request, $runtime);
    }

    /**
     * Queries the tags that are attached to Server Migration Center (SMC) resources. SMC resources include migration sources and migration jobs.
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
        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
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
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the tags that are attached to Server Migration Center (SMC) resources. SMC resources include migration sources and migration jobs.
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
     * Modifies the parameters of a migration job.
     *
     * @remarks
     * ## Usage notes
     * Before you modify the parameters of a migration job, take note of the following information:
     * *   The `Name` and `Description` parameters can be modified during the lifecycle of the migration job.
     * *   The `Frequency` and `MaxNumberOfImageToKeep` parameters can be modified only before the migration job is executed or when the migration job is in the `Waiting` state.
     * *   Other parameters can be modified only before the migration job is executed.
     *
     * @param request - ModifyReplicationJobAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyReplicationJobAttributeResponse
     *
     * @param ModifyReplicationJobAttributeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyReplicationJobAttributeResponse
     */
    public function modifyReplicationJobAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->containerNamespace) {
            @$query['ContainerNamespace'] = $request->containerNamespace;
        }

        if (null !== $request->containerRepository) {
            @$query['ContainerRepository'] = $request->containerRepository;
        }

        if (null !== $request->containerTag) {
            @$query['ContainerTag'] = $request->containerTag;
        }

        if (null !== $request->dataDisk) {
            @$query['DataDisk'] = $request->dataDisk;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->frequency) {
            @$query['Frequency'] = $request->frequency;
        }

        if (null !== $request->imageName) {
            @$query['ImageName'] = $request->imageName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceRamRole) {
            @$query['InstanceRamRole'] = $request->instanceRamRole;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->launchTemplateId) {
            @$query['LaunchTemplateId'] = $request->launchTemplateId;
        }

        if (null !== $request->launchTemplateVersion) {
            @$query['LaunchTemplateVersion'] = $request->launchTemplateVersion;
        }

        if (null !== $request->maxNumberOfImageToKeep) {
            @$query['MaxNumberOfImageToKeep'] = $request->maxNumberOfImageToKeep;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->netMode) {
            @$query['NetMode'] = $request->netMode;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->replicationParameters) {
            @$query['ReplicationParameters'] = $request->replicationParameters;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->scheduledStartTime) {
            @$query['ScheduledStartTime'] = $request->scheduledStartTime;
        }

        if (null !== $request->systemDiskPart) {
            @$query['SystemDiskPart'] = $request->systemDiskPart;
        }

        if (null !== $request->systemDiskSize) {
            @$query['SystemDiskSize'] = $request->systemDiskSize;
        }

        if (null !== $request->targetType) {
            @$query['TargetType'] = $request->targetType;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->validTime) {
            @$query['ValidTime'] = $request->validTime;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyReplicationJobAttribute',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyReplicationJobAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyReplicationJobAttributeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the parameters of a migration job.
     *
     * @remarks
     * ## Usage notes
     * Before you modify the parameters of a migration job, take note of the following information:
     * *   The `Name` and `Description` parameters can be modified during the lifecycle of the migration job.
     * *   The `Frequency` and `MaxNumberOfImageToKeep` parameters can be modified only before the migration job is executed or when the migration job is in the `Waiting` state.
     * *   Other parameters can be modified only before the migration job is executed.
     *
     * @param request - ModifyReplicationJobAttributeRequest
     *
     * @returns ModifyReplicationJobAttributeResponse
     *
     * @param ModifyReplicationJobAttributeRequest $request
     *
     * @return ModifyReplicationJobAttributeResponse
     */
    public function modifyReplicationJobAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyReplicationJobAttributeWithOptions($request, $runtime);
    }

    /**
     * Modifies the name and description of a migration source.
     *
     * @remarks
     * ## Usage notes
     * You can call this operation regardless of the status of the migration source.
     *
     * @param request - ModifySourceServerAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySourceServerAttributeResponse
     *
     * @param ModifySourceServerAttributeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifySourceServerAttributeResponse
     */
    public function modifySourceServerAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->sourceId) {
            @$query['SourceId'] = $request->sourceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySourceServerAttribute',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifySourceServerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifySourceServerAttributeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the name and description of a migration source.
     *
     * @remarks
     * ## Usage notes
     * You can call this operation regardless of the status of the migration source.
     *
     * @param request - ModifySourceServerAttributeRequest
     *
     * @returns ModifySourceServerAttributeResponse
     *
     * @param ModifySourceServerAttributeRequest $request
     *
     * @return ModifySourceServerAttributeResponse
     */
    public function modifySourceServerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySourceServerAttributeWithOptions($request, $runtime);
    }

    /**
     * Modifies the name and description of a workgroup.
     *
     * @param request - ModifyWorkgroupAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyWorkgroupAttributeResponse
     *
     * @param ModifyWorkgroupAttributeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyWorkgroupAttributeResponse
     */
    public function modifyWorkgroupAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->workgroupId) {
            @$query['WorkgroupId'] = $request->workgroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyWorkgroupAttribute',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyWorkgroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyWorkgroupAttributeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the name and description of a workgroup.
     *
     * @param request - ModifyWorkgroupAttributeRequest
     *
     * @returns ModifyWorkgroupAttributeResponse
     *
     * @param ModifyWorkgroupAttributeRequest $request
     *
     * @return ModifyWorkgroupAttributeResponse
     */
    public function modifyWorkgroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWorkgroupAttributeWithOptions($request, $runtime);
    }

    /**
     * Starts a migration job.
     *
     * @remarks
     * ## Usage notes
     * This operation can only be used to start the migration jobs that are in the Ready, Stopped, or InError state.
     *
     * @param request - StartReplicationJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartReplicationJobResponse
     *
     * @param StartReplicationJobRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return StartReplicationJobResponse
     */
    public function startReplicationJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartReplicationJob',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StartReplicationJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartReplicationJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Starts a migration job.
     *
     * @remarks
     * ## Usage notes
     * This operation can only be used to start the migration jobs that are in the Ready, Stopped, or InError state.
     *
     * @param request - StartReplicationJobRequest
     *
     * @returns StartReplicationJobResponse
     *
     * @param StartReplicationJobRequest $request
     *
     * @return StartReplicationJobResponse
     */
    public function startReplicationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startReplicationJobWithOptions($request, $runtime);
    }

    /**
     * Pauses a migration job.
     *
     * @remarks
     * ## Usage notes
     * You can call this operation to pause only a migration job whose primary status is Running and business status is Syncing.
     *
     * @param request - StopReplicationJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopReplicationJobResponse
     *
     * @param StopReplicationJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return StopReplicationJobResponse
     */
    public function stopReplicationJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopReplicationJob',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StopReplicationJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopReplicationJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Pauses a migration job.
     *
     * @remarks
     * ## Usage notes
     * You can call this operation to pause only a migration job whose primary status is Running and business status is Syncing.
     *
     * @param request - StopReplicationJobRequest
     *
     * @returns StopReplicationJobResponse
     *
     * @param StopReplicationJobRequest $request
     *
     * @return StopReplicationJobResponse
     */
    public function stopReplicationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopReplicationJobWithOptions($request, $runtime);
    }

    /**
     * Creates tags and adds them to Server Migration Center (SMC) resources. The SMC resources include migration sources and jobs.
     *
     * @remarks
     * ## Usage notes
     * Up to 20 tags can be added to each SMC resource.
     * Before you add tags to an SMC resource, Alibaba Cloud checks the number of the tags that have been added to the resource. If the maximum number is reached, an error message is returned.
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
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
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
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return TagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates tags and adds them to Server Migration Center (SMC) resources. The SMC resources include migration sources and jobs.
     *
     * @remarks
     * ## Usage notes
     * Up to 20 tags can be added to each SMC resource.
     * Before you add tags to an SMC resource, Alibaba Cloud checks the number of the tags that have been added to the resource. If the maximum number is reached, an error message is returned.
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
     * Removes tags that are added to Server Migration Center (SMC) resources. The SMC resources include migration sources and jobs.
     *
     * @remarks
     * You can call this operation to remove tags that are added to one or more SMC resources and delete the tags if the tags are no longer used.
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

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
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
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UntagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Removes tags that are added to Server Migration Center (SMC) resources. The SMC resources include migration sources and jobs.
     *
     * @remarks
     * You can call this operation to remove tags that are added to one or more SMC resources and delete the tags if the tags are no longer used.
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
}
