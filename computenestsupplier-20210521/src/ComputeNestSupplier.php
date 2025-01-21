<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\AddServiceSharedAccountsRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\AddServiceSharedAccountsResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ApproveServiceUsageRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ApproveServiceUsageResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ContinueDeployServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ContinueDeployServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateArtifactRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateArtifactResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateArtifactShrinkRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceInstanceShrinkRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceShrinkRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceUsageRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceUsageResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\DeleteArtifactRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\DeleteArtifactResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\DeleteServiceInstancesRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\DeleteServiceInstancesResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\DeleteServiceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\DeleteServiceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\DeployServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\DeployServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GenerateServicePolicyRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GenerateServicePolicyResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetArtifactRepositoryCredentialsRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetArtifactRepositoryCredentialsResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetArtifactRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetArtifactResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceEstimateCostRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceEstimateCostResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceEstimateCostShrinkRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceProvisionsRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceProvisionsResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceProvisionsShrinkRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceTemplateParameterConstraintsRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceTemplateParameterConstraintsResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetUploadCredentialsRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetUploadCredentialsResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\LaunchServiceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\LaunchServiceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListAcrImageRepositoriesRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListAcrImageRepositoriesResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListAcrImageTagsRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListAcrImageTagsResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListArtifactsRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListArtifactsResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListArtifactVersionsRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListArtifactVersionsResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListArtifactVersionsShrinkRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceInstanceDeployDetailsRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceInstanceDeployDetailsResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceInstancesRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceInstancesResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceSharedAccountsRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceSharedAccountsResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServicesRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServicesResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceUsagesRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceUsagesResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListTagKeysRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListTagKeysResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListTagValuesRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListTagValuesResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ModifyServiceInstanceResourcesRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ModifyServiceInstanceResourcesResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\PreLaunchServiceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\PreLaunchServiceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\PushMeteringDataRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\PushMeteringDataResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\RegisterServiceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\RegisterServiceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\RejectServiceUsageRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\RejectServiceUsageResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ReleaseArtifactRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ReleaseArtifactResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\RemoveServiceSharedAccountsRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\RemoveServiceSharedAccountsResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\RestartServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\RestartServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\RollbackServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\RollbackServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\StartServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\StartServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\StopServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\StopServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\TagResourcesRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\TagResourcesResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UnTagResourcesRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UnTagResourcesResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateArtifactRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateArtifactResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateArtifactShrinkRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceInstanceAttributeRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceInstanceAttributeResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceInstanceAttributeShrinkRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceInstanceSpecRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceInstanceSpecResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceInstanceSpecShrinkRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceShrinkRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpgradeServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpgradeServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpgradeServiceInstanceShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class ComputeNestSupplier extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('computenestsupplier', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Adds a shared account of a service.
     *
     * @param request - AddServiceSharedAccountsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AddServiceSharedAccountsResponse
     *
     * @param AddServiceSharedAccountsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AddServiceSharedAccountsResponse
     */
    public function addServiceSharedAccountsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->sharedAccounts) {
            @$query['SharedAccounts'] = $request->sharedAccounts;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddServiceSharedAccounts',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddServiceSharedAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddServiceSharedAccountsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Adds a shared account of a service.
     *
     * @param request - AddServiceSharedAccountsRequest
     * @returns AddServiceSharedAccountsResponse
     *
     * @param AddServiceSharedAccountsRequest $request
     *
     * @return AddServiceSharedAccountsResponse
     */
    public function addServiceSharedAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addServiceSharedAccountsWithOptions($request, $runtime);
    }

    /**
     * 商家通过服务使用请求
     *
     * @param request - ApproveServiceUsageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ApproveServiceUsageResponse
     *
     * @param ApproveServiceUsageRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ApproveServiceUsageResponse
     */
    public function approveServiceUsageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->comments) {
            @$query['Comments'] = $request->comments;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->userAliUid) {
            @$query['UserAliUid'] = $request->userAliUid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApproveServiceUsage',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ApproveServiceUsageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ApproveServiceUsageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 商家通过服务使用请求
     *
     * @param request - ApproveServiceUsageRequest
     * @returns ApproveServiceUsageResponse
     *
     * @param ApproveServiceUsageRequest $request
     *
     * @return ApproveServiceUsageResponse
     */
    public function approveServiceUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->approveServiceUsageWithOptions($request, $runtime);
    }

    /**
     * Redeploys a service instance after the service instance failed to be deployed.
     *
     * @param request - ContinueDeployServiceInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ContinueDeployServiceInstanceResponse
     *
     * @param ContinueDeployServiceInstanceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ContinueDeployServiceInstanceResponse
     */
    public function continueDeployServiceInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ContinueDeployServiceInstance',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ContinueDeployServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ContinueDeployServiceInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Redeploys a service instance after the service instance failed to be deployed.
     *
     * @param request - ContinueDeployServiceInstanceRequest
     * @returns ContinueDeployServiceInstanceResponse
     *
     * @param ContinueDeployServiceInstanceRequest $request
     *
     * @return ContinueDeployServiceInstanceResponse
     */
    public function continueDeployServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->continueDeployServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * Creates a deployment package.
     *
     * @param tmpReq - CreateArtifactRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateArtifactResponse
     *
     * @param CreateArtifactRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return CreateArtifactResponse
     */
    public function createArtifactWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateArtifactShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->artifactBuildProperty) {
            $request->artifactBuildPropertyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->artifactBuildProperty, 'ArtifactBuildProperty', 'json');
        }

        if (null !== $tmpReq->artifactProperty) {
            $request->artifactPropertyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->artifactProperty, 'ArtifactProperty', 'json');
        }

        $query = [];
        if (null !== $request->artifactBuildPropertyShrink) {
            @$query['ArtifactBuildProperty'] = $request->artifactBuildPropertyShrink;
        }

        if (null !== $request->artifactBuildType) {
            @$query['ArtifactBuildType'] = $request->artifactBuildType;
        }

        if (null !== $request->artifactId) {
            @$query['ArtifactId'] = $request->artifactId;
        }

        if (null !== $request->artifactPropertyShrink) {
            @$query['ArtifactProperty'] = $request->artifactPropertyShrink;
        }

        if (null !== $request->artifactType) {
            @$query['ArtifactType'] = $request->artifactType;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->supportRegionIds) {
            @$query['SupportRegionIds'] = $request->supportRegionIds;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->versionName) {
            @$query['VersionName'] = $request->versionName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateArtifact',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateArtifactResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateArtifactResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a deployment package.
     *
     * @param request - CreateArtifactRequest
     * @returns CreateArtifactResponse
     *
     * @param CreateArtifactRequest $request
     *
     * @return CreateArtifactResponse
     */
    public function createArtifact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createArtifactWithOptions($request, $runtime);
    }

    /**
     * Creates a service.
     *
     * @param tmpReq - CreateServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateServiceResponse
     *
     * @param CreateServiceRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return CreateServiceResponse
     */
    public function createServiceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateServiceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->complianceMetadata) {
            $request->complianceMetadataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->complianceMetadata, 'ComplianceMetadata', 'json');
        }

        $query = [];
        if (null !== $request->alarmMetadata) {
            @$query['AlarmMetadata'] = $request->alarmMetadata;
        }

        if (null !== $request->approvalType) {
            @$query['ApprovalType'] = $request->approvalType;
        }

        if (null !== $request->buildParameters) {
            @$query['BuildParameters'] = $request->buildParameters;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->complianceMetadataShrink) {
            @$query['ComplianceMetadata'] = $request->complianceMetadataShrink;
        }

        if (null !== $request->deployMetadata) {
            @$query['DeployMetadata'] = $request->deployMetadata;
        }

        if (null !== $request->deployType) {
            @$query['DeployType'] = $request->deployType;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->isSupportOperated) {
            @$query['IsSupportOperated'] = $request->isSupportOperated;
        }

        if (null !== $request->licenseMetadata) {
            @$query['LicenseMetadata'] = $request->licenseMetadata;
        }

        if (null !== $request->logMetadata) {
            @$query['LogMetadata'] = $request->logMetadata;
        }

        if (null !== $request->operationMetadata) {
            @$query['OperationMetadata'] = $request->operationMetadata;
        }

        if (null !== $request->policyNames) {
            @$query['PolicyNames'] = $request->policyNames;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resellable) {
            @$query['Resellable'] = $request->resellable;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->serviceInfo) {
            @$query['ServiceInfo'] = $request->serviceInfo;
        }

        if (null !== $request->serviceType) {
            @$query['ServiceType'] = $request->serviceType;
        }

        if (null !== $request->shareType) {
            @$query['ShareType'] = $request->shareType;
        }

        if (null !== $request->sourceServiceId) {
            @$query['SourceServiceId'] = $request->sourceServiceId;
        }

        if (null !== $request->sourceServiceVersion) {
            @$query['SourceServiceVersion'] = $request->sourceServiceVersion;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->tenantType) {
            @$query['TenantType'] = $request->tenantType;
        }

        if (null !== $request->trialDuration) {
            @$query['TrialDuration'] = $request->trialDuration;
        }

        if (null !== $request->upgradeMetadata) {
            @$query['UpgradeMetadata'] = $request->upgradeMetadata;
        }

        if (null !== $request->versionName) {
            @$query['VersionName'] = $request->versionName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateService',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateServiceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateServiceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a service.
     *
     * @param request - CreateServiceRequest
     * @returns CreateServiceResponse
     *
     * @param CreateServiceRequest $request
     *
     * @return CreateServiceResponse
     */
    public function createService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceWithOptions($request, $runtime);
    }

    /**
     * Creates and deploys a service instance.
     *
     * @param tmpReq - CreateServiceInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateServiceInstanceResponse
     *
     * @param CreateServiceInstanceRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return CreateServiceInstanceResponse
     */
    public function createServiceInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateServiceInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->parameters) {
            $request->parametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->parametersShrink) {
            @$query['Parameters'] = $request->parametersShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->serviceVersion) {
            @$query['ServiceVersion'] = $request->serviceVersion;
        }

        if (null !== $request->specificationName) {
            @$query['SpecificationName'] = $request->specificationName;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateServiceInstance',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateServiceInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates and deploys a service instance.
     *
     * @param request - CreateServiceInstanceRequest
     * @returns CreateServiceInstanceResponse
     *
     * @param CreateServiceInstanceRequest $request
     *
     * @return CreateServiceInstanceResponse
     */
    public function createServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * Create  Service resell application.
     *
     * @param request - CreateServiceUsageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateServiceUsageResponse
     *
     * @param CreateServiceUsageRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateServiceUsageResponse
     */
    public function createServiceUsageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateServiceUsage',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateServiceUsageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateServiceUsageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Create  Service resell application.
     *
     * @param request - CreateServiceUsageRequest
     * @returns CreateServiceUsageResponse
     *
     * @param CreateServiceUsageRequest $request
     *
     * @return CreateServiceUsageResponse
     */
    public function createServiceUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceUsageWithOptions($request, $runtime);
    }

    /**
     * Deletes an artifact.
     *
     * @param request - DeleteArtifactRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteArtifactResponse
     *
     * @param DeleteArtifactRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteArtifactResponse
     */
    public function deleteArtifactWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->artifactId) {
            @$query['ArtifactId'] = $request->artifactId;
        }

        if (null !== $request->artifactVersion) {
            @$query['ArtifactVersion'] = $request->artifactVersion;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteArtifact',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteArtifactResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteArtifactResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an artifact.
     *
     * @param request - DeleteArtifactRequest
     * @returns DeleteArtifactResponse
     *
     * @param DeleteArtifactRequest $request
     *
     * @return DeleteArtifactResponse
     */
    public function deleteArtifact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteArtifactWithOptions($request, $runtime);
    }

    /**
     * Deletes a service.
     *
     * @param request - DeleteServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteServiceResponse
     *
     * @param DeleteServiceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteServiceResponse
     */
    public function deleteServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->serviceVersion) {
            @$query['ServiceVersion'] = $request->serviceVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteService',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteServiceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteServiceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a service.
     *
     * @param request - DeleteServiceRequest
     * @returns DeleteServiceResponse
     *
     * @param DeleteServiceRequest $request
     *
     * @return DeleteServiceResponse
     */
    public function deleteService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteServiceWithOptions($request, $runtime);
    }

    /**
     * Deletes a service instance.
     *
     * @param request - DeleteServiceInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteServiceInstancesResponse
     *
     * @param DeleteServiceInstancesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteServiceInstancesResponse
     */
    public function deleteServiceInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteServiceInstances',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteServiceInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteServiceInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a service instance.
     *
     * @param request - DeleteServiceInstancesRequest
     * @returns DeleteServiceInstancesResponse
     *
     * @param DeleteServiceInstancesRequest $request
     *
     * @return DeleteServiceInstancesResponse
     */
    public function deleteServiceInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteServiceInstancesWithOptions($request, $runtime);
    }

    /**
     * Deploys a service instance.
     *
     * @param request - DeployServiceInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeployServiceInstanceResponse
     *
     * @param DeployServiceInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeployServiceInstanceResponse
     */
    public function deployServiceInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeployServiceInstance',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeployServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeployServiceInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deploys a service instance.
     *
     * @param request - DeployServiceInstanceRequest
     * @returns DeployServiceInstanceResponse
     *
     * @param DeployServiceInstanceRequest $request
     *
     * @return DeployServiceInstanceResponse
     */
    public function deployServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deployServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * 生成并校验服务创建stack所需要
     *
     * @param request - GenerateServicePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GenerateServicePolicyResponse
     *
     * @param GenerateServicePolicyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GenerateServicePolicyResponse
     */
    public function generateServicePolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->operationTypes) {
            @$query['OperationTypes'] = $request->operationTypes;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->serviceVersion) {
            @$query['ServiceVersion'] = $request->serviceVersion;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->trialType) {
            @$query['TrialType'] = $request->trialType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateServicePolicy',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GenerateServicePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GenerateServicePolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 生成并校验服务创建stack所需要
     *
     * @param request - GenerateServicePolicyRequest
     * @returns GenerateServicePolicyResponse
     *
     * @param GenerateServicePolicyRequest $request
     *
     * @return GenerateServicePolicyResponse
     */
    public function generateServicePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateServicePolicyWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a deployment package.
     *
     * @param request - GetArtifactRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetArtifactResponse
     *
     * @param GetArtifactRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetArtifactResponse
     */
    public function getArtifactWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->artifactId) {
            @$query['ArtifactId'] = $request->artifactId;
        }

        if (null !== $request->artifactName) {
            @$query['ArtifactName'] = $request->artifactName;
        }

        if (null !== $request->artifactVersion) {
            @$query['ArtifactVersion'] = $request->artifactVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetArtifact',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetArtifactResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetArtifactResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a deployment package.
     *
     * @param request - GetArtifactRequest
     * @returns GetArtifactResponse
     *
     * @param GetArtifactRequest $request
     *
     * @return GetArtifactResponse
     */
    public function getArtifact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getArtifactWithOptions($request, $runtime);
    }

    /**
     * Queries the credentials that are required to upload a deployment package.
     *
     * @param request - GetArtifactRepositoryCredentialsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetArtifactRepositoryCredentialsResponse
     *
     * @param GetArtifactRepositoryCredentialsRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return GetArtifactRepositoryCredentialsResponse
     */
    public function getArtifactRepositoryCredentialsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->artifactType) {
            @$query['ArtifactType'] = $request->artifactType;
        }

        if (null !== $request->deployRegionId) {
            @$query['DeployRegionId'] = $request->deployRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetArtifactRepositoryCredentials',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetArtifactRepositoryCredentialsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetArtifactRepositoryCredentialsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the credentials that are required to upload a deployment package.
     *
     * @param request - GetArtifactRepositoryCredentialsRequest
     * @returns GetArtifactRepositoryCredentialsResponse
     *
     * @param GetArtifactRepositoryCredentialsRequest $request
     *
     * @return GetArtifactRepositoryCredentialsResponse
     */
    public function getArtifactRepositoryCredentials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getArtifactRepositoryCredentialsWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a service.
     *
     * @param request - GetServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetServiceResponse
     *
     * @param GetServiceRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetServiceResponse
     */
    public function getServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filterAliUid) {
            @$query['FilterAliUid'] = $request->filterAliUid;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        if (null !== $request->serviceVersion) {
            @$query['ServiceVersion'] = $request->serviceVersion;
        }

        if (null !== $request->sharedAccountType) {
            @$query['SharedAccountType'] = $request->sharedAccountType;
        }

        if (null !== $request->showDetail) {
            @$query['ShowDetail'] = $request->showDetail;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetService',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetServiceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetServiceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a service.
     *
     * @param request - GetServiceRequest
     * @returns GetServiceResponse
     *
     * @param GetServiceRequest $request
     *
     * @return GetServiceResponse
     */
    public function getService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceWithOptions($request, $runtime);
    }

    /**
     * Queries the estimated price for creating a service instance.
     *
     * @param tmpReq - GetServiceEstimateCostRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetServiceEstimateCostResponse
     *
     * @param GetServiceEstimateCostRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return GetServiceEstimateCostResponse
     */
    public function getServiceEstimateCostWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetServiceEstimateCostShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->commodity) {
            $request->commodityShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->commodity, 'Commodity', 'json');
        }

        if (null !== $tmpReq->parameters) {
            $request->parametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->commodityShrink) {
            @$query['Commodity'] = $request->commodityShrink;
        }

        if (null !== $request->parametersShrink) {
            @$query['Parameters'] = $request->parametersShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        if (null !== $request->serviceVersion) {
            @$query['ServiceVersion'] = $request->serviceVersion;
        }

        if (null !== $request->specificationName) {
            @$query['SpecificationName'] = $request->specificationName;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetServiceEstimateCost',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetServiceEstimateCostResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetServiceEstimateCostResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the estimated price for creating a service instance.
     *
     * @param request - GetServiceEstimateCostRequest
     * @returns GetServiceEstimateCostResponse
     *
     * @param GetServiceEstimateCostRequest $request
     *
     * @return GetServiceEstimateCostResponse
     */
    public function getServiceEstimateCost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceEstimateCostWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a service instance.
     *
     * @param request - GetServiceInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetServiceInstanceResponse
     *
     * @param GetServiceInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetServiceInstanceResponse
     */
    public function getServiceInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetServiceInstance',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetServiceInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a service instance.
     *
     * @param request - GetServiceInstanceRequest
     * @returns GetServiceInstanceResponse
     *
     * @param GetServiceInstanceRequest $request
     *
     * @return GetServiceInstanceResponse
     */
    public function getServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * 计算巢查询服务是否开通.
     *
     * @param tmpReq - GetServiceProvisionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetServiceProvisionsResponse
     *
     * @param GetServiceProvisionsRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return GetServiceProvisionsResponse
     */
    public function getServiceProvisionsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetServiceProvisionsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->parameters) {
            $request->parametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }

        $query = [];
        if (null !== $request->parametersShrink) {
            @$query['Parameters'] = $request->parametersShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->serviceVersion) {
            @$query['ServiceVersion'] = $request->serviceVersion;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetServiceProvisions',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetServiceProvisionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetServiceProvisionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 计算巢查询服务是否开通.
     *
     * @param request - GetServiceProvisionsRequest
     * @returns GetServiceProvisionsResponse
     *
     * @param GetServiceProvisionsRequest $request
     *
     * @return GetServiceProvisionsResponse
     */
    public function getServiceProvisions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceProvisionsWithOptions($request, $runtime);
    }

    /**
     * Queries the valid values of parameters in a Resource Orchestration Service (ROS) template.
     *
     * @param request - GetServiceTemplateParameterConstraintsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetServiceTemplateParameterConstraintsResponse
     *
     * @param GetServiceTemplateParameterConstraintsRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return GetServiceTemplateParameterConstraintsResponse
     */
    public function getServiceTemplateParameterConstraintsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->deployRegionId) {
            @$query['DeployRegionId'] = $request->deployRegionId;
        }

        if (null !== $request->enablePrivateVpcConnection) {
            @$query['EnablePrivateVpcConnection'] = $request->enablePrivateVpcConnection;
        }

        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        if (null !== $request->serviceVersion) {
            @$query['ServiceVersion'] = $request->serviceVersion;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetServiceTemplateParameterConstraints',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetServiceTemplateParameterConstraintsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetServiceTemplateParameterConstraintsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the valid values of parameters in a Resource Orchestration Service (ROS) template.
     *
     * @param request - GetServiceTemplateParameterConstraintsRequest
     * @returns GetServiceTemplateParameterConstraintsResponse
     *
     * @param GetServiceTemplateParameterConstraintsRequest $request
     *
     * @return GetServiceTemplateParameterConstraintsResponse
     */
    public function getServiceTemplateParameterConstraints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceTemplateParameterConstraintsWithOptions($request, $runtime);
    }

    /**
     * Obtain the AccessKey pair of uploaded files.
     *
     * @param request - GetUploadCredentialsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetUploadCredentialsResponse
     *
     * @param GetUploadCredentialsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetUploadCredentialsResponse
     */
    public function getUploadCredentialsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->visibility) {
            @$query['Visibility'] = $request->visibility;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUploadCredentials',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetUploadCredentialsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetUploadCredentialsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtain the AccessKey pair of uploaded files.
     *
     * @param request - GetUploadCredentialsRequest
     * @returns GetUploadCredentialsResponse
     *
     * @param GetUploadCredentialsRequest $request
     *
     * @return GetUploadCredentialsResponse
     */
    public function getUploadCredentials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUploadCredentialsWithOptions($request, $runtime);
    }

    /**
     * 上线服务
     *
     * @param request - LaunchServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns LaunchServiceResponse
     *
     * @param LaunchServiceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return LaunchServiceResponse
     */
    public function launchServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->categories) {
            @$query['Categories'] = $request->categories;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->recommend) {
            @$query['Recommend'] = $request->recommend;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->serviceVersion) {
            @$query['ServiceVersion'] = $request->serviceVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'LaunchService',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return LaunchServiceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return LaunchServiceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 上线服务
     *
     * @param request - LaunchServiceRequest
     * @returns LaunchServiceResponse
     *
     * @param LaunchServiceRequest $request
     *
     * @return LaunchServiceResponse
     */
    public function launchService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->launchServiceWithOptions($request, $runtime);
    }

    /**
     * Queries a list of images uploaded to Container Registry.
     *
     * @param request - ListAcrImageRepositoriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListAcrImageRepositoriesResponse
     *
     * @param ListAcrImageRepositoriesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListAcrImageRepositoriesResponse
     */
    public function listAcrImageRepositoriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->artifactType) {
            @$query['ArtifactType'] = $request->artifactType;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->repoName) {
            @$query['RepoName'] = $request->repoName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAcrImageRepositories',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListAcrImageRepositoriesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAcrImageRepositoriesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of images uploaded to Container Registry.
     *
     * @param request - ListAcrImageRepositoriesRequest
     * @returns ListAcrImageRepositoriesResponse
     *
     * @param ListAcrImageRepositoriesRequest $request
     *
     * @return ListAcrImageRepositoriesResponse
     */
    public function listAcrImageRepositories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAcrImageRepositoriesWithOptions($request, $runtime);
    }

    /**
     * Queries the versions of images that are uploaded to the image repository.
     *
     * @param request - ListAcrImageTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListAcrImageTagsResponse
     *
     * @param ListAcrImageTagsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListAcrImageTagsResponse
     */
    public function listAcrImageTagsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->artifactType) {
            @$query['ArtifactType'] = $request->artifactType;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->repoId) {
            @$query['RepoId'] = $request->repoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAcrImageTags',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListAcrImageTagsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAcrImageTagsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the versions of images that are uploaded to the image repository.
     *
     * @param request - ListAcrImageTagsRequest
     * @returns ListAcrImageTagsResponse
     *
     * @param ListAcrImageTagsRequest $request
     *
     * @return ListAcrImageTagsResponse
     */
    public function listAcrImageTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAcrImageTagsWithOptions($request, $runtime);
    }

    /**
     * Queries the version information about a deployment package.
     *
     * @param tmpReq - ListArtifactVersionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListArtifactVersionsResponse
     *
     * @param ListArtifactVersionsRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return ListArtifactVersionsResponse
     */
    public function listArtifactVersionsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListArtifactVersionsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filters) {
            $request->filtersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filters, 'Filters', 'json');
        }

        $query = [];
        if (null !== $request->artifactId) {
            @$query['ArtifactId'] = $request->artifactId;
        }

        if (null !== $request->filtersShrink) {
            @$query['Filters'] = $request->filtersShrink;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListArtifactVersions',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListArtifactVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListArtifactVersionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the version information about a deployment package.
     *
     * @param request - ListArtifactVersionsRequest
     * @returns ListArtifactVersionsResponse
     *
     * @param ListArtifactVersionsRequest $request
     *
     * @return ListArtifactVersionsResponse
     */
    public function listArtifactVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listArtifactVersionsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of deployment packages.
     *
     * @param request - ListArtifactsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListArtifactsResponse
     *
     * @param ListArtifactsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListArtifactsResponse
     */
    public function listArtifactsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListArtifacts',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListArtifactsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListArtifactsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of deployment packages.
     *
     * @param request - ListArtifactsRequest
     * @returns ListArtifactsResponse
     *
     * @param ListArtifactsRequest $request
     *
     * @return ListArtifactsResponse
     */
    public function listArtifacts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listArtifactsWithOptions($request, $runtime);
    }

    /**
     * 查询服务实例部署详情.
     *
     * @param request - ListServiceInstanceDeployDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListServiceInstanceDeployDetailsResponse
     *
     * @param ListServiceInstanceDeployDetailsRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ListServiceInstanceDeployDetailsResponse
     */
    public function listServiceInstanceDeployDetailsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cycleTimeZone) {
            @$query['CycleTimeZone'] = $request->cycleTimeZone;
        }

        if (null !== $request->cycleType) {
            @$query['CycleType'] = $request->cycleType;
        }

        if (null !== $request->dimension) {
            @$query['Dimension'] = $request->dimension;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServiceInstanceDeployDetails',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListServiceInstanceDeployDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListServiceInstanceDeployDetailsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询服务实例部署详情.
     *
     * @param request - ListServiceInstanceDeployDetailsRequest
     * @returns ListServiceInstanceDeployDetailsResponse
     *
     * @param ListServiceInstanceDeployDetailsRequest $request
     *
     * @return ListServiceInstanceDeployDetailsResponse
     */
    public function listServiceInstanceDeployDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceInstanceDeployDetailsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of service instances.
     *
     * @param request - ListServiceInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListServiceInstancesResponse
     *
     * @param ListServiceInstancesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListServiceInstancesResponse
     */
    public function listServiceInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
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

        if (null !== $request->showDeleted) {
            @$query['ShowDeleted'] = $request->showDeleted;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServiceInstances',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListServiceInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListServiceInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of service instances.
     *
     * @param request - ListServiceInstancesRequest
     * @returns ListServiceInstancesResponse
     *
     * @param ListServiceInstancesRequest $request
     *
     * @return ListServiceInstancesResponse
     */
    public function listServiceInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceInstancesWithOptions($request, $runtime);
    }

    /**
     * 调用ListServiceSharedAccounts查看服务共享账号列表。
     *
     * @param request - ListServiceSharedAccountsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListServiceSharedAccountsResponse
     *
     * @param ListServiceSharedAccountsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListServiceSharedAccountsResponse
     */
    public function listServiceSharedAccountsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->permission) {
            @$query['Permission'] = $request->permission;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServiceSharedAccounts',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListServiceSharedAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListServiceSharedAccountsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 调用ListServiceSharedAccounts查看服务共享账号列表。
     *
     * @param request - ListServiceSharedAccountsRequest
     * @returns ListServiceSharedAccountsResponse
     *
     * @param ListServiceSharedAccountsRequest $request
     *
     * @return ListServiceSharedAccountsResponse
     */
    public function listServiceSharedAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceSharedAccountsWithOptions($request, $runtime);
    }

    /**
     * Queries the applications for using a service.
     *
     * @param request - ListServiceUsagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListServiceUsagesResponse
     *
     * @param ListServiceUsagesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListServiceUsagesResponse
     */
    public function listServiceUsagesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->supplierRole) {
            @$query['SupplierRole'] = $request->supplierRole;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServiceUsages',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListServiceUsagesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListServiceUsagesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the applications for using a service.
     *
     * @param request - ListServiceUsagesRequest
     * @returns ListServiceUsagesResponse
     *
     * @param ListServiceUsagesRequest $request
     *
     * @return ListServiceUsagesResponse
     */
    public function listServiceUsages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceUsagesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of services.
     *
     * @param request - ListServicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListServicesResponse
     *
     * @param ListServicesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListServicesResponse
     */
    public function listServicesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allVersions) {
            @$query['AllVersions'] = $request->allVersions;
        }

        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
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

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServices',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListServicesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListServicesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of services.
     *
     * @param request - ListServicesRequest
     * @returns ListServicesResponse
     *
     * @param ListServicesRequest $request
     *
     * @return ListServicesResponse
     */
    public function listServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServicesWithOptions($request, $runtime);
    }

    /**
     * 查询标签键列表.
     *
     * @param request - ListTagKeysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListTagKeysResponse
     *
     * @param ListTagKeysRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeysWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagKeys',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTagKeysResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTagKeysResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询标签键列表.
     *
     * @param request - ListTagKeysRequest
     * @returns ListTagKeysResponse
     *
     * @param ListTagKeysRequest $request
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagKeysWithOptions($request, $runtime);
    }

    /**
     * 查询标签值列表.
     *
     * @param request - ListTagValuesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListTagValuesResponse
     *
     * @param ListTagValuesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTagValuesResponse
     */
    public function listTagValuesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagValues',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTagValuesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTagValuesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询标签值列表.
     *
     * @param request - ListTagValuesRequest
     * @returns ListTagValuesResponse
     *
     * @param ListTagValuesRequest $request
     *
     * @return ListTagValuesResponse
     */
    public function listTagValues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagValuesWithOptions($request, $runtime);
    }

    /**
     * Modifies the resource information about a service instance.
     *
     * @param request - ModifyServiceInstanceResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ModifyServiceInstanceResourcesResponse
     *
     * @param ModifyServiceInstanceResourcesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyServiceInstanceResourcesResponse
     */
    public function modifyServiceInstanceResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resources) {
            @$query['Resources'] = $request->resources;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        if (null !== $request->serviceInstanceResourcesAction) {
            @$query['ServiceInstanceResourcesAction'] = $request->serviceInstanceResourcesAction;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyServiceInstanceResources',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyServiceInstanceResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyServiceInstanceResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the resource information about a service instance.
     *
     * @param request - ModifyServiceInstanceResourcesRequest
     * @returns ModifyServiceInstanceResourcesResponse
     *
     * @param ModifyServiceInstanceResourcesRequest $request
     *
     * @return ModifyServiceInstanceResourcesResponse
     */
    public function modifyServiceInstanceResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyServiceInstanceResourcesWithOptions($request, $runtime);
    }

    /**
     * 预发布服务
     *
     * @param request - PreLaunchServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns PreLaunchServiceResponse
     *
     * @param PreLaunchServiceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return PreLaunchServiceResponse
     */
    public function preLaunchServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'PreLaunchService',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return PreLaunchServiceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PreLaunchServiceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 预发布服务
     *
     * @param request - PreLaunchServiceRequest
     * @returns PreLaunchServiceResponse
     *
     * @param PreLaunchServiceRequest $request
     *
     * @return PreLaunchServiceResponse
     */
    public function preLaunchService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->preLaunchServiceWithOptions($request, $runtime);
    }

    /**
     * Pushes metering data of an Alibaba Cloud Marketplace commodity.
     *
     * @param request - PushMeteringDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns PushMeteringDataResponse
     *
     * @param PushMeteringDataRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return PushMeteringDataResponse
     */
    public function pushMeteringDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->metering) {
            @$query['Metering'] = $request->metering;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'PushMeteringData',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return PushMeteringDataResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PushMeteringDataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Pushes metering data of an Alibaba Cloud Marketplace commodity.
     *
     * @param request - PushMeteringDataRequest
     * @returns PushMeteringDataResponse
     *
     * @param PushMeteringDataRequest $request
     *
     * @return PushMeteringDataResponse
     */
    public function pushMeteringData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushMeteringDataWithOptions($request, $runtime);
    }

    /**
     * Registers an artifact.
     *
     * @param request - RegisterServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RegisterServiceResponse
     *
     * @param RegisterServiceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RegisterServiceResponse
     */
    public function registerServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'RegisterService',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RegisterServiceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RegisterServiceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Registers an artifact.
     *
     * @param request - RegisterServiceRequest
     * @returns RegisterServiceResponse
     *
     * @param RegisterServiceRequest $request
     *
     * @return RegisterServiceResponse
     */
    public function registerService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerServiceWithOptions($request, $runtime);
    }

    /**
     * Reject service usage.
     *
     * @param request - RejectServiceUsageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RejectServiceUsageResponse
     *
     * @param RejectServiceUsageRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RejectServiceUsageResponse
     */
    public function rejectServiceUsageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->comments) {
            @$query['Comments'] = $request->comments;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->userAliUid) {
            @$query['UserAliUid'] = $request->userAliUid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'RejectServiceUsage',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RejectServiceUsageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RejectServiceUsageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Reject service usage.
     *
     * @param request - RejectServiceUsageRequest
     * @returns RejectServiceUsageResponse
     *
     * @param RejectServiceUsageRequest $request
     *
     * @return RejectServiceUsageResponse
     */
    public function rejectServiceUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rejectServiceUsageWithOptions($request, $runtime);
    }

    /**
     * Publishes an artifact.
     *
     * @param request - ReleaseArtifactRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ReleaseArtifactResponse
     *
     * @param ReleaseArtifactRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ReleaseArtifactResponse
     */
    public function releaseArtifactWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->artifactId) {
            @$query['ArtifactId'] = $request->artifactId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleaseArtifact',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ReleaseArtifactResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ReleaseArtifactResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Publishes an artifact.
     *
     * @param request - ReleaseArtifactRequest
     * @returns ReleaseArtifactResponse
     *
     * @param ReleaseArtifactRequest $request
     *
     * @return ReleaseArtifactResponse
     */
    public function releaseArtifact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseArtifactWithOptions($request, $runtime);
    }

    /**
     * Remove  service shared account.
     *
     * @param request - RemoveServiceSharedAccountsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RemoveServiceSharedAccountsResponse
     *
     * @param RemoveServiceSharedAccountsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RemoveServiceSharedAccountsResponse
     */
    public function removeServiceSharedAccountsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->userAliUids) {
            @$query['UserAliUids'] = $request->userAliUids;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveServiceSharedAccounts',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RemoveServiceSharedAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RemoveServiceSharedAccountsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Remove  service shared account.
     *
     * @param request - RemoveServiceSharedAccountsRequest
     * @returns RemoveServiceSharedAccountsResponse
     *
     * @param RemoveServiceSharedAccountsRequest $request
     *
     * @return RemoveServiceSharedAccountsResponse
     */
    public function removeServiceSharedAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeServiceSharedAccountsWithOptions($request, $runtime);
    }

    /**
     * When the service instance is Deployed, call the RestartServiceInstance interface to restart the service instance.
     *
     * @param request - RestartServiceInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RestartServiceInstanceResponse
     *
     * @param RestartServiceInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RestartServiceInstanceResponse
     */
    public function restartServiceInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestartServiceInstance',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RestartServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RestartServiceInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * When the service instance is Deployed, call the RestartServiceInstance interface to restart the service instance.
     *
     * @param request - RestartServiceInstanceRequest
     * @returns RestartServiceInstanceResponse
     *
     * @param RestartServiceInstanceRequest $request
     *
     * @return RestartServiceInstanceResponse
     */
    public function restartServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * Rollback Service Instance.
     *
     * @param request - RollbackServiceInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RollbackServiceInstanceResponse
     *
     * @param RollbackServiceInstanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RollbackServiceInstanceResponse
     */
    public function rollbackServiceInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'RollbackServiceInstance',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RollbackServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RollbackServiceInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Rollback Service Instance.
     *
     * @param request - RollbackServiceInstanceRequest
     * @returns RollbackServiceInstanceResponse
     *
     * @param RollbackServiceInstanceRequest $request
     *
     * @return RollbackServiceInstanceResponse
     */
    public function rollbackServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rollbackServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * When the service instance status is Stopped (Stopped) or StartFailed (Startup failed), the StartServiceInstance interface is invoked to start the service instance.
     *
     * @param request - StartServiceInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns StartServiceInstanceResponse
     *
     * @param StartServiceInstanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return StartServiceInstanceResponse
     */
    public function startServiceInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartServiceInstance',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StartServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartServiceInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * When the service instance status is Stopped (Stopped) or StartFailed (Startup failed), the StartServiceInstance interface is invoked to start the service instance.
     *
     * @param request - StartServiceInstanceRequest
     * @returns StartServiceInstanceResponse
     *
     * @param StartServiceInstanceRequest $request
     *
     * @return StartServiceInstanceResponse
     */
    public function startServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * When the service instance is Deployed and StopFailed, call the StopServiceInstance interface to stop the service instance.
     *
     * @param request - StopServiceInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns StopServiceInstanceResponse
     *
     * @param StopServiceInstanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return StopServiceInstanceResponse
     */
    public function stopServiceInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopServiceInstance',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StopServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopServiceInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * When the service instance is Deployed and StopFailed, call the StopServiceInstance interface to stop the service instance.
     *
     * @param request - StopServiceInstanceRequest
     * @returns StopServiceInstanceResponse
     *
     * @param StopServiceInstanceRequest $request
     *
     * @return StopServiceInstanceResponse
     */
    public function stopServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * 给资源打标签.
     *
     * @param request - TagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
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
            'action'      => 'TagResources',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return TagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 给资源打标签.
     *
     * @param request - TagResourcesRequest
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
     * 资源解绑标签.
     *
     * @param request - UnTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UnTagResourcesResponse
     *
     * @param UnTagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UnTagResourcesResponse
     */
    public function unTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
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
            'action'      => 'UnTagResources',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UnTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UnTagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 资源解绑标签.
     *
     * @param request - UnTagResourcesRequest
     * @returns UnTagResourcesResponse
     *
     * @param UnTagResourcesRequest $request
     *
     * @return UnTagResourcesResponse
     */
    public function unTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unTagResourcesWithOptions($request, $runtime);
    }

    /**
     * Updates a deployment package.
     *
     * @param tmpReq - UpdateArtifactRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateArtifactResponse
     *
     * @param UpdateArtifactRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateArtifactResponse
     */
    public function updateArtifactWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateArtifactShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->artifactBuildProperty) {
            $request->artifactBuildPropertyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->artifactBuildProperty, 'ArtifactBuildProperty', 'json');
        }

        if (null !== $tmpReq->artifactProperty) {
            $request->artifactPropertyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->artifactProperty, 'ArtifactProperty', 'json');
        }

        $query = [];
        if (null !== $request->artifactBuildPropertyShrink) {
            @$query['ArtifactBuildProperty'] = $request->artifactBuildPropertyShrink;
        }

        if (null !== $request->artifactId) {
            @$query['ArtifactId'] = $request->artifactId;
        }

        if (null !== $request->artifactPropertyShrink) {
            @$query['ArtifactProperty'] = $request->artifactPropertyShrink;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->permissionType) {
            @$query['PermissionType'] = $request->permissionType;
        }

        if (null !== $request->supportRegionIds) {
            @$query['SupportRegionIds'] = $request->supportRegionIds;
        }

        if (null !== $request->versionName) {
            @$query['VersionName'] = $request->versionName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateArtifact',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateArtifactResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateArtifactResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a deployment package.
     *
     * @param request - UpdateArtifactRequest
     * @returns UpdateArtifactResponse
     *
     * @param UpdateArtifactRequest $request
     *
     * @return UpdateArtifactResponse
     */
    public function updateArtifact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateArtifactWithOptions($request, $runtime);
    }

    /**
     * Update a service.
     *
     * @param tmpReq - UpdateServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateServiceResponse
     *
     * @param UpdateServiceRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateServiceResponse
     */
    public function updateServiceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateServiceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->commodity) {
            $request->commodityShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->commodity, 'Commodity', 'json');
        }

        if (null !== $tmpReq->complianceMetadata) {
            $request->complianceMetadataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->complianceMetadata, 'ComplianceMetadata', 'json');
        }

        if (null !== $tmpReq->updateOption) {
            $request->updateOptionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->updateOption, 'UpdateOption', 'json');
        }

        $query = [];
        if (null !== $request->alarmMetadata) {
            @$query['AlarmMetadata'] = $request->alarmMetadata;
        }

        if (null !== $request->approvalType) {
            @$query['ApprovalType'] = $request->approvalType;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->commodityShrink) {
            @$query['Commodity'] = $request->commodityShrink;
        }

        if (null !== $request->complianceMetadataShrink) {
            @$query['ComplianceMetadata'] = $request->complianceMetadataShrink;
        }

        if (null !== $request->deployMetadata) {
            @$query['DeployMetadata'] = $request->deployMetadata;
        }

        if (null !== $request->deployType) {
            @$query['DeployType'] = $request->deployType;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->isSupportOperated) {
            @$query['IsSupportOperated'] = $request->isSupportOperated;
        }

        if (null !== $request->licenseMetadata) {
            @$query['LicenseMetadata'] = $request->licenseMetadata;
        }

        if (null !== $request->logMetadata) {
            @$query['LogMetadata'] = $request->logMetadata;
        }

        if (null !== $request->operationMetadata) {
            @$query['OperationMetadata'] = $request->operationMetadata;
        }

        if (null !== $request->policyNames) {
            @$query['PolicyNames'] = $request->policyNames;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resellable) {
            @$query['Resellable'] = $request->resellable;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->serviceInfo) {
            @$query['ServiceInfo'] = $request->serviceInfo;
        }

        if (null !== $request->serviceType) {
            @$query['ServiceType'] = $request->serviceType;
        }

        if (null !== $request->serviceVersion) {
            @$query['ServiceVersion'] = $request->serviceVersion;
        }

        if (null !== $request->shareType) {
            @$query['ShareType'] = $request->shareType;
        }

        if (null !== $request->tenantType) {
            @$query['TenantType'] = $request->tenantType;
        }

        if (null !== $request->trialDuration) {
            @$query['TrialDuration'] = $request->trialDuration;
        }

        if (null !== $request->updateOptionShrink) {
            @$query['UpdateOption'] = $request->updateOptionShrink;
        }

        if (null !== $request->upgradeMetadata) {
            @$query['UpgradeMetadata'] = $request->upgradeMetadata;
        }

        if (null !== $request->versionName) {
            @$query['VersionName'] = $request->versionName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateService',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateServiceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateServiceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Update a service.
     *
     * @param request - UpdateServiceRequest
     * @returns UpdateServiceResponse
     *
     * @param UpdateServiceRequest $request
     *
     * @return UpdateServiceResponse
     */
    public function updateService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServiceWithOptions($request, $runtime);
    }

    /**
     * Updates the properties of a service instance.
     *
     * @param tmpReq - UpdateServiceInstanceAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateServiceInstanceAttributeResponse
     *
     * @param UpdateServiceInstanceAttributeRequest $tmpReq
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdateServiceInstanceAttributeResponse
     */
    public function updateServiceInstanceAttributeWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateServiceInstanceAttributeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->licenseData) {
            $request->licenseDataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->licenseData, 'LicenseData', 'json');
        }

        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->licenseDataShrink) {
            @$query['LicenseData'] = $request->licenseDataShrink;
        }

        if (null !== $request->reason) {
            @$query['Reason'] = $request->reason;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateServiceInstanceAttribute',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateServiceInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateServiceInstanceAttributeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the properties of a service instance.
     *
     * @param request - UpdateServiceInstanceAttributeRequest
     * @returns UpdateServiceInstanceAttributeResponse
     *
     * @param UpdateServiceInstanceAttributeRequest $request
     *
     * @return UpdateServiceInstanceAttributeResponse
     */
    public function updateServiceInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServiceInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * Updates the configurations of a service instance.
     *
     * @param tmpReq - UpdateServiceInstanceSpecRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateServiceInstanceSpecResponse
     *
     * @param UpdateServiceInstanceSpecRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateServiceInstanceSpecResponse
     */
    public function updateServiceInstanceSpecWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateServiceInstanceSpecShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->parameters) {
            $request->parametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->enableUserPrometheus) {
            @$query['EnableUserPrometheus'] = $request->enableUserPrometheus;
        }

        if (null !== $request->operationName) {
            @$query['OperationName'] = $request->operationName;
        }

        if (null !== $request->parametersShrink) {
            @$query['Parameters'] = $request->parametersShrink;
        }

        if (null !== $request->predefinedParametersName) {
            @$query['PredefinedParametersName'] = $request->predefinedParametersName;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateServiceInstanceSpec',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateServiceInstanceSpecResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateServiceInstanceSpecResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the configurations of a service instance.
     *
     * @param request - UpdateServiceInstanceSpecRequest
     * @returns UpdateServiceInstanceSpecResponse
     *
     * @param UpdateServiceInstanceSpecRequest $request
     *
     * @return UpdateServiceInstanceSpecResponse
     */
    public function updateServiceInstanceSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServiceInstanceSpecWithOptions($request, $runtime);
    }

    /**
     * Upgrades a service instance.
     *
     * @param tmpReq - UpgradeServiceInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpgradeServiceInstanceResponse
     *
     * @param UpgradeServiceInstanceRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return UpgradeServiceInstanceResponse
     */
    public function upgradeServiceInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpgradeServiceInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->parameters) {
            $request->parametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->parametersShrink) {
            @$query['Parameters'] = $request->parametersShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceInstanceId) {
            @$query['ServiceInstanceId'] = $request->serviceInstanceId;
        }

        if (null !== $request->serviceVersion) {
            @$query['ServiceVersion'] = $request->serviceVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeServiceInstance',
            'version'     => '2021-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpgradeServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpgradeServiceInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Upgrades a service instance.
     *
     * @param request - UpgradeServiceInstanceRequest
     * @returns UpgradeServiceInstanceResponse
     *
     * @param UpgradeServiceInstanceRequest $request
     *
     * @return UpgradeServiceInstanceResponse
     */
    public function upgradeServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeServiceInstanceWithOptions($request, $runtime);
    }
}
