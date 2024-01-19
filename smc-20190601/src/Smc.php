<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Smc\V20190601\Models\CreateAccessTokenRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\CreateAccessTokenResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\CreateReplicationJobRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\CreateReplicationJobResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\CutOverReplicationJobRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\CutOverReplicationJobResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\DeleteAccessTokenRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\DeleteAccessTokenResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\DeleteReplicationJobRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\DeleteReplicationJobResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\DeleteSourceServerRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\DeleteSourceServerResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeReplicationJobsRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeReplicationJobsResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\DisableAccessTokenRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\DisableAccessTokenResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\ListAccessTokensRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\ListAccessTokensResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\ModifyReplicationJobAttributeRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\ModifyReplicationJobAttributeResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\ModifySourceServerAttributeRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\ModifySourceServerAttributeResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\StartReplicationJobRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\StartReplicationJobResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\StopReplicationJobRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\StopReplicationJobResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\UntagResourcesResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * If you want to import the information of migration sources by using an activation code, you can call this operation to create one.
     *   *
     * @param CreateAccessTokenRequest $request CreateAccessTokenRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAccessTokenResponse CreateAccessTokenResponse
     */
    public function createAccessTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->count)) {
            $query['Count'] = $request->count;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->timeToLiveInDays)) {
            $query['TimeToLiveInDays'] = $request->timeToLiveInDays;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAccessToken',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAccessTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If you want to import the information of migration sources by using an activation code, you can call this operation to create one.
     *   *
     * @param CreateAccessTokenRequest $request CreateAccessTokenRequest
     *
     * @return CreateAccessTokenResponse CreateAccessTokenResponse
     */
    public function createAccessToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccessTokenWithOptions($request, $runtime);
    }

    /**
     * ## Usage notes
     *   * *   You can create migration jobs only for source servers that are in the Available state.
     *   * *   Each source server can be associated with only one migration job that is in the Ready, Running, Stopped, Waiting, InError, or Expired state.
     *   * *   You can create a maximum of 1,000 migration jobs within each Alibaba Cloud account.
     *   * *   If you migrate a source server to an image, you must specify the ImageName, SystemDiskSize, and DataDisk parameters.
     *   * *   If you use a virtual private cloud (VPC) to migrate data, the VSwitchId parameter is required and the VpcId parameter is optional.
     *   * *   Server Migration Center (SMC) allows you to migrate source servers to Docker container images. This allows you to migrate containerized applications in a cost-effective way.
     *   *
     * @param CreateReplicationJobRequest $request CreateReplicationJobRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateReplicationJobResponse CreateReplicationJobResponse
     */
    public function createReplicationJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->containerNamespace)) {
            $query['ContainerNamespace'] = $request->containerNamespace;
        }
        if (!Utils::isUnset($request->containerRepository)) {
            $query['ContainerRepository'] = $request->containerRepository;
        }
        if (!Utils::isUnset($request->containerTag)) {
            $query['ContainerTag'] = $request->containerTag;
        }
        if (!Utils::isUnset($request->dataDisk)) {
            $query['DataDisk'] = $request->dataDisk;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->frequency)) {
            $query['Frequency'] = $request->frequency;
        }
        if (!Utils::isUnset($request->imageName)) {
            $query['ImageName'] = $request->imageName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceRamRole)) {
            $query['InstanceRamRole'] = $request->instanceRamRole;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->jobType)) {
            $query['JobType'] = $request->jobType;
        }
        if (!Utils::isUnset($request->launchTemplateId)) {
            $query['LaunchTemplateId'] = $request->launchTemplateId;
        }
        if (!Utils::isUnset($request->launchTemplateVersion)) {
            $query['LaunchTemplateVersion'] = $request->launchTemplateVersion;
        }
        if (!Utils::isUnset($request->licenseType)) {
            $query['LicenseType'] = $request->licenseType;
        }
        if (!Utils::isUnset($request->maxNumberOfImageToKeep)) {
            $query['MaxNumberOfImageToKeep'] = $request->maxNumberOfImageToKeep;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->netMode)) {
            $query['NetMode'] = $request->netMode;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->replicationParameters)) {
            $query['ReplicationParameters'] = $request->replicationParameters;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->runOnce)) {
            $query['RunOnce'] = $request->runOnce;
        }
        if (!Utils::isUnset($request->scheduledStartTime)) {
            $query['ScheduledStartTime'] = $request->scheduledStartTime;
        }
        if (!Utils::isUnset($request->sourceId)) {
            $query['SourceId'] = $request->sourceId;
        }
        if (!Utils::isUnset($request->systemDiskPart)) {
            $query['SystemDiskPart'] = $request->systemDiskPart;
        }
        if (!Utils::isUnset($request->systemDiskSize)) {
            $query['SystemDiskSize'] = $request->systemDiskSize;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->validTime)) {
            $query['ValidTime'] = $request->validTime;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateReplicationJob',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateReplicationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Usage notes
     *   * *   You can create migration jobs only for source servers that are in the Available state.
     *   * *   Each source server can be associated with only one migration job that is in the Ready, Running, Stopped, Waiting, InError, or Expired state.
     *   * *   You can create a maximum of 1,000 migration jobs within each Alibaba Cloud account.
     *   * *   If you migrate a source server to an image, you must specify the ImageName, SystemDiskSize, and DataDisk parameters.
     *   * *   If you use a virtual private cloud (VPC) to migrate data, the VSwitchId parameter is required and the VpcId parameter is optional.
     *   * *   Server Migration Center (SMC) allows you to migrate source servers to Docker container images. This allows you to migrate containerized applications in a cost-effective way.
     *   *
     * @param CreateReplicationJobRequest $request CreateReplicationJobRequest
     *
     * @return CreateReplicationJobResponse CreateReplicationJobResponse
     */
    public function createReplicationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createReplicationJobWithOptions($request, $runtime);
    }

    /**
     * ## Usage notes
     *   * *   The incremental migration job must be in the Waiting state.
     *   * *   After you call this operation, the incremental migration job no longer periodically runs. In the meantime, Server Migration Center (SMC) determines whether to perform a full data migration for the last time based on the value of the `SyncData` parameter. If you set the SyncData parameter to `false`, SMC releases intermediate resources without data migration before the migration job is complete. If you set the SyncData parameter to `true`, SMC performs a full data migration and releases intermediate resources before the migration job is complete.
     *   *
     * @param CutOverReplicationJobRequest $request CutOverReplicationJobRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CutOverReplicationJobResponse CutOverReplicationJobResponse
     */
    public function cutOverReplicationJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->syncData)) {
            $query['SyncData'] = $request->syncData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CutOverReplicationJob',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CutOverReplicationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Usage notes
     *   * *   The incremental migration job must be in the Waiting state.
     *   * *   After you call this operation, the incremental migration job no longer periodically runs. In the meantime, Server Migration Center (SMC) determines whether to perform a full data migration for the last time based on the value of the `SyncData` parameter. If you set the SyncData parameter to `false`, SMC releases intermediate resources without data migration before the migration job is complete. If you set the SyncData parameter to `true`, SMC performs a full data migration and releases intermediate resources before the migration job is complete.
     *   *
     * @param CutOverReplicationJobRequest $request CutOverReplicationJobRequest
     *
     * @return CutOverReplicationJobResponse CutOverReplicationJobResponse
     */
    public function cutOverReplicationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cutOverReplicationJobWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to delete an activation code if you no longer need to import the information about migration sources by using the activation code or if the activation code has expired.
     *   *
     * @param DeleteAccessTokenRequest $request DeleteAccessTokenRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAccessTokenResponse DeleteAccessTokenResponse
     */
    public function deleteAccessTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessTokenId)) {
            $query['AccessTokenId'] = $request->accessTokenId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAccessToken',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAccessTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to delete an activation code if you no longer need to import the information about migration sources by using the activation code or if the activation code has expired.
     *   *
     * @param DeleteAccessTokenRequest $request DeleteAccessTokenRequest
     *
     * @return DeleteAccessTokenResponse DeleteAccessTokenResponse
     */
    public function deleteAccessToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccessTokenWithOptions($request, $runtime);
    }

    /**
     * ## Usage notes
     *   * *   Deleted migration jobs cannot be restored.
     *   * *   After a migration job is deleted, associated resources, such as the intermediate instance, are automatically released.
     *   *
     * @param DeleteReplicationJobRequest $request DeleteReplicationJobRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteReplicationJobResponse DeleteReplicationJobResponse
     */
    public function deleteReplicationJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteReplicationJob',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteReplicationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Usage notes
     *   * *   Deleted migration jobs cannot be restored.
     *   * *   After a migration job is deleted, associated resources, such as the intermediate instance, are automatically released.
     *   *
     * @param DeleteReplicationJobRequest $request DeleteReplicationJobRequest
     *
     * @return DeleteReplicationJobResponse DeleteReplicationJobResponse
     */
    public function deleteReplicationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteReplicationJobWithOptions($request, $runtime);
    }

    /**
     * ## Usage notes
     *   * *   If a migration job is created for the migration source and the migration job is in the Running state, the migration source cannot be deleted.
     *   * *   If a migration job is created for the migration source but the migration job is not in the Running state, you can set the `Force` parameter to true to delete the migration source.
     *   *
     * @param DeleteSourceServerRequest $request DeleteSourceServerRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSourceServerResponse DeleteSourceServerResponse
     */
    public function deleteSourceServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->sourceId)) {
            $query['SourceId'] = $request->sourceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSourceServer',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSourceServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Usage notes
     *   * *   If a migration job is created for the migration source and the migration job is in the Running state, the migration source cannot be deleted.
     *   * *   If a migration job is created for the migration source but the migration job is not in the Running state, you can set the `Force` parameter to true to delete the migration source.
     *   *
     * @param DeleteSourceServerRequest $request DeleteSourceServerRequest
     *
     * @return DeleteSourceServerResponse DeleteSourceServerResponse
     */
    public function deleteSourceServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSourceServerWithOptions($request, $runtime);
    }

    /**
     * ## Usage notes
     *   * *   You can specify multiple request parameters to be queried. Specified parameters are evaluated by using the AND operator. Only the specified parameters are used as filter conditions.
     *   * *   Server Migration Center (SMC) allows you to migrate source servers to Docker container images. You can use SMC to migrate containerized applications in a cost-effective way. For more information, see [Terms](~~60744~~).
     *   *
     * @param DescribeReplicationJobsRequest $request DescribeReplicationJobsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeReplicationJobsResponse DescribeReplicationJobsResponse
     */
    public function describeReplicationJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessStatus)) {
            $query['BusinessStatus'] = $request->businessStatus;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->jobType)) {
            $query['JobType'] = $request->jobType;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->sourceId)) {
            $query['SourceId'] = $request->sourceId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeReplicationJobs',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeReplicationJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Usage notes
     *   * *   You can specify multiple request parameters to be queried. Specified parameters are evaluated by using the AND operator. Only the specified parameters are used as filter conditions.
     *   * *   Server Migration Center (SMC) allows you to migrate source servers to Docker container images. You can use SMC to migrate containerized applications in a cost-effective way. For more information, see [Terms](~~60744~~).
     *   *
     * @param DescribeReplicationJobsRequest $request DescribeReplicationJobsRequest
     *
     * @return DescribeReplicationJobsResponse DescribeReplicationJobsResponse
     */
    public function describeReplicationJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeReplicationJobsWithOptions($request, $runtime);
    }

    /**
     * ## Usage notes
     *   * You can specify multiple request parameters to be queried. Specified parameters are evaluated by using the AND operator. Only the specified parameters are used as filter conditions.
     *   *
     * @param DescribeSourceServersRequest $request DescribeSourceServersRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSourceServersResponse DescribeSourceServersResponse
     */
    public function describeSourceServersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->sourceId)) {
            $query['SourceId'] = $request->sourceId;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSourceServers',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSourceServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Usage notes
     *   * You can specify multiple request parameters to be queried. Specified parameters are evaluated by using the AND operator. Only the specified parameters are used as filter conditions.
     *   *
     * @param DescribeSourceServersRequest $request DescribeSourceServersRequest
     *
     * @return DescribeSourceServersResponse DescribeSourceServersResponse
     */
    public function describeSourceServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSourceServersWithOptions($request, $runtime);
    }

    /**
     * To prevent an activation code from being leaked, you can call this operation to disable the activation code. Disabled activation codes can no longer be used to import the information about migration sources. However, migration sources whose information has been imported are not affected.
     *   *
     * @param DisableAccessTokenRequest $request DisableAccessTokenRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableAccessTokenResponse DisableAccessTokenResponse
     */
    public function disableAccessTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessTokenId)) {
            $query['AccessTokenId'] = $request->accessTokenId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableAccessToken',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableAccessTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * To prevent an activation code from being leaked, you can call this operation to disable the activation code. Disabled activation codes can no longer be used to import the information about migration sources. However, migration sources whose information has been imported are not affected.
     *   *
     * @param DisableAccessTokenRequest $request DisableAccessTokenRequest
     *
     * @return DisableAccessTokenResponse DisableAccessTokenResponse
     */
    public function disableAccessToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableAccessTokenWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query activation codes and the usage details of the activation codes. An activation code can be in the activated, unactivated, or expired state.
     *   *
     * @param ListAccessTokensRequest $request ListAccessTokensRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAccessTokensResponse ListAccessTokensResponse
     */
    public function listAccessTokensWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessTokenId)) {
            $query['AccessTokenId'] = $request->accessTokenId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAccessTokens',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAccessTokensResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query activation codes and the usage details of the activation codes. An activation code can be in the activated, unactivated, or expired state.
     *   *
     * @param ListAccessTokensRequest $request ListAccessTokensRequest
     *
     * @return ListAccessTokensResponse ListAccessTokensResponse
     */
    public function listAccessTokens($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccessTokensWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * ## Usage notes
     *   * Before you modify the parameters of a migration job, take note of the following information:
     *   * *   The `Name` and `Description` parameters can be modified during the lifecycle of the migration job.
     *   * *   The `Frequency` and `MaxNumberOfImageToKeep` parameters can be modified only before the migration job is executed or when the migration job is in the `Waiting` state.
     *   * *   Other parameters can be modified only before the migration job is executed.
     *   *
     * @param ModifyReplicationJobAttributeRequest $request ModifyReplicationJobAttributeRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyReplicationJobAttributeResponse ModifyReplicationJobAttributeResponse
     */
    public function modifyReplicationJobAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->containerNamespace)) {
            $query['ContainerNamespace'] = $request->containerNamespace;
        }
        if (!Utils::isUnset($request->containerRepository)) {
            $query['ContainerRepository'] = $request->containerRepository;
        }
        if (!Utils::isUnset($request->containerTag)) {
            $query['ContainerTag'] = $request->containerTag;
        }
        if (!Utils::isUnset($request->dataDisk)) {
            $query['DataDisk'] = $request->dataDisk;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->frequency)) {
            $query['Frequency'] = $request->frequency;
        }
        if (!Utils::isUnset($request->imageName)) {
            $query['ImageName'] = $request->imageName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceRamRole)) {
            $query['InstanceRamRole'] = $request->instanceRamRole;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->launchTemplateId)) {
            $query['LaunchTemplateId'] = $request->launchTemplateId;
        }
        if (!Utils::isUnset($request->launchTemplateVersion)) {
            $query['LaunchTemplateVersion'] = $request->launchTemplateVersion;
        }
        if (!Utils::isUnset($request->licenseType)) {
            $query['LicenseType'] = $request->licenseType;
        }
        if (!Utils::isUnset($request->maxNumberOfImageToKeep)) {
            $query['MaxNumberOfImageToKeep'] = $request->maxNumberOfImageToKeep;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->netMode)) {
            $query['NetMode'] = $request->netMode;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->replicationParameters)) {
            $query['ReplicationParameters'] = $request->replicationParameters;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scheduledStartTime)) {
            $query['ScheduledStartTime'] = $request->scheduledStartTime;
        }
        if (!Utils::isUnset($request->systemDiskPart)) {
            $query['SystemDiskPart'] = $request->systemDiskPart;
        }
        if (!Utils::isUnset($request->systemDiskSize)) {
            $query['SystemDiskSize'] = $request->systemDiskSize;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->validTime)) {
            $query['ValidTime'] = $request->validTime;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyReplicationJobAttribute',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyReplicationJobAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Usage notes
     *   * Before you modify the parameters of a migration job, take note of the following information:
     *   * *   The `Name` and `Description` parameters can be modified during the lifecycle of the migration job.
     *   * *   The `Frequency` and `MaxNumberOfImageToKeep` parameters can be modified only before the migration job is executed or when the migration job is in the `Waiting` state.
     *   * *   Other parameters can be modified only before the migration job is executed.
     *   *
     * @param ModifyReplicationJobAttributeRequest $request ModifyReplicationJobAttributeRequest
     *
     * @return ModifyReplicationJobAttributeResponse ModifyReplicationJobAttributeResponse
     */
    public function modifyReplicationJobAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyReplicationJobAttributeWithOptions($request, $runtime);
    }

    /**
     * ## Usage notes
     *   * You can call this operation regardless of the status of the migration source.
     *   *
     * @param ModifySourceServerAttributeRequest $request ModifySourceServerAttributeRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifySourceServerAttributeResponse ModifySourceServerAttributeResponse
     */
    public function modifySourceServerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->sourceId)) {
            $query['SourceId'] = $request->sourceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySourceServerAttribute',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySourceServerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Usage notes
     *   * You can call this operation regardless of the status of the migration source.
     *   *
     * @param ModifySourceServerAttributeRequest $request ModifySourceServerAttributeRequest
     *
     * @return ModifySourceServerAttributeResponse ModifySourceServerAttributeResponse
     */
    public function modifySourceServerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySourceServerAttributeWithOptions($request, $runtime);
    }

    /**
     * ## Usage notes
     *   * This operation can only be used to start the migration jobs that are in the Ready, Stopped, or InError state.
     *   *
     * @param StartReplicationJobRequest $request StartReplicationJobRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return StartReplicationJobResponse StartReplicationJobResponse
     */
    public function startReplicationJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartReplicationJob',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartReplicationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Usage notes
     *   * This operation can only be used to start the migration jobs that are in the Ready, Stopped, or InError state.
     *   *
     * @param StartReplicationJobRequest $request StartReplicationJobRequest
     *
     * @return StartReplicationJobResponse StartReplicationJobResponse
     */
    public function startReplicationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startReplicationJobWithOptions($request, $runtime);
    }

    /**
     * ## Usage notes
     *   * You can call this operation to pause only a migration job whose primary status is Running and business status is Syncing.
     *   *
     * @param StopReplicationJobRequest $request StopReplicationJobRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return StopReplicationJobResponse StopReplicationJobResponse
     */
    public function stopReplicationJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopReplicationJob',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopReplicationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Usage notes
     *   * You can call this operation to pause only a migration job whose primary status is Running and business status is Syncing.
     *   *
     * @param StopReplicationJobRequest $request StopReplicationJobRequest
     *
     * @return StopReplicationJobResponse StopReplicationJobResponse
     */
    public function stopReplicationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopReplicationJobWithOptions($request, $runtime);
    }

    /**
     * ## Usage notes
     *   * Up to 20 tags can be added to each SMC resource.
     *   * Before you add tags to an SMC resource, Alibaba Cloud checks the number of the tags that have been added to the resource. If the maximum number is reached, an error message is returned.
     *   *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Usage notes
     *   * Up to 20 tags can be added to each SMC resource.
     *   * Before you add tags to an SMC resource, Alibaba Cloud checks the number of the tags that have been added to the resource. If the maximum number is reached, an error message is returned.
     *   *
     * @param TagResourcesRequest $request TagResourcesRequest
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to remove tags that are added to one or more SMC resources and deletes the tags if the tags are no longer used.
     *   *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to remove tags that are added to one or more SMC resources and deletes the tags if the tags are no longer used.
     *   *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }
}
