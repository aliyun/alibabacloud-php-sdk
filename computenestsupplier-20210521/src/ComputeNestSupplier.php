<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\AddServiceSharedAccountsRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\AddServiceSharedAccountsResponse;
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
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\DeleteArtifactRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\DeleteArtifactResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\DeleteServiceInstancesRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\DeleteServiceInstancesResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\DeleteServiceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\DeleteServiceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\DeployServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\DeployServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetArtifactRepositoryCredentialsRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetArtifactRepositoryCredentialsResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetArtifactRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetArtifactResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceEstimateCostRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceEstimateCostResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceEstimateCostShrinkRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceTemplateParameterConstraintsRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceTemplateParameterConstraintsResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetUploadCredentialsRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetUploadCredentialsResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListAcrImageRepositoriesRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListAcrImageRepositoriesResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListAcrImageTagsRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListAcrImageTagsResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListArtifactsRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListArtifactsResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListArtifactVersionsRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListArtifactVersionsResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceInstancesRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceInstancesResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServicesRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServicesResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceUsagesRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceUsagesResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ModifyServiceInstanceResourcesRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ModifyServiceInstanceResourcesResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\PushMeteringDataRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\PushMeteringDataResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\RegisterServiceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\RegisterServiceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ReleaseArtifactRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ReleaseArtifactResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\RestartServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\RestartServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\StartServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\StartServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\StopServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\StopServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateArtifactRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateArtifactResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateArtifactShrinkRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceInstanceAttributeRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceInstanceAttributeResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceInstanceSpecRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceInstanceSpecResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceInstanceSpecShrinkRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceShrinkRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpgradeServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpgradeServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpgradeServiceInstanceShrinkRequest;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param AddServiceSharedAccountsRequest $request AddServiceSharedAccountsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return AddServiceSharedAccountsResponse AddServiceSharedAccountsResponse
     */
    public function addServiceSharedAccountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->sharedAccounts)) {
            $query['SharedAccounts'] = $request->sharedAccounts;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return AddServiceSharedAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddServiceSharedAccountsRequest $request AddServiceSharedAccountsRequest
     *
     * @return AddServiceSharedAccountsResponse AddServiceSharedAccountsResponse
     */
    public function addServiceSharedAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addServiceSharedAccountsWithOptions($request, $runtime);
    }

    /**
     * @param ContinueDeployServiceInstanceRequest $request ContinueDeployServiceInstanceRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ContinueDeployServiceInstanceResponse ContinueDeployServiceInstanceResponse
     */
    public function continueDeployServiceInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->parameters)) {
            $query['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ContinueDeployServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ContinueDeployServiceInstanceRequest $request ContinueDeployServiceInstanceRequest
     *
     * @return ContinueDeployServiceInstanceResponse ContinueDeployServiceInstanceResponse
     */
    public function continueDeployServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->continueDeployServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 创建部署物
     *  *
     * @param CreateArtifactRequest $tmpReq  CreateArtifactRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateArtifactResponse CreateArtifactResponse
     */
    public function createArtifactWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateArtifactShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->artifactProperty)) {
            $request->artifactPropertyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->artifactProperty, 'ArtifactProperty', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->artifactId)) {
            $query['ArtifactId'] = $request->artifactId;
        }
        if (!Utils::isUnset($request->artifactPropertyShrink)) {
            $query['ArtifactProperty'] = $request->artifactPropertyShrink;
        }
        if (!Utils::isUnset($request->artifactType)) {
            $query['ArtifactType'] = $request->artifactType;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->supportRegionIds)) {
            $query['SupportRegionIds'] = $request->supportRegionIds;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->versionName)) {
            $query['VersionName'] = $request->versionName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateArtifactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建部署物
     *  *
     * @param CreateArtifactRequest $request CreateArtifactRequest
     *
     * @return CreateArtifactResponse CreateArtifactResponse
     */
    public function createArtifact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createArtifactWithOptions($request, $runtime);
    }

    /**
     * @summary 创建新服务版本
     *  *
     * @param CreateServiceRequest $request CreateServiceRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateServiceResponse CreateServiceResponse
     */
    public function createServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alarmMetadata)) {
            $query['AlarmMetadata'] = $request->alarmMetadata;
        }
        if (!Utils::isUnset($request->approvalType)) {
            $query['ApprovalType'] = $request->approvalType;
        }
        if (!Utils::isUnset($request->buildParameters)) {
            $query['BuildParameters'] = $request->buildParameters;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->deployMetadata)) {
            $query['DeployMetadata'] = $request->deployMetadata;
        }
        if (!Utils::isUnset($request->deployType)) {
            $query['DeployType'] = $request->deployType;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->isSupportOperated)) {
            $query['IsSupportOperated'] = $request->isSupportOperated;
        }
        if (!Utils::isUnset($request->licenseMetadata)) {
            $query['LicenseMetadata'] = $request->licenseMetadata;
        }
        if (!Utils::isUnset($request->logMetadata)) {
            $query['LogMetadata'] = $request->logMetadata;
        }
        if (!Utils::isUnset($request->operationMetadata)) {
            $query['OperationMetadata'] = $request->operationMetadata;
        }
        if (!Utils::isUnset($request->policyNames)) {
            $query['PolicyNames'] = $request->policyNames;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resellable)) {
            $query['Resellable'] = $request->resellable;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceInfo)) {
            $query['ServiceInfo'] = $request->serviceInfo;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $query['ServiceType'] = $request->serviceType;
        }
        if (!Utils::isUnset($request->shareType)) {
            $query['ShareType'] = $request->shareType;
        }
        if (!Utils::isUnset($request->sourceServiceId)) {
            $query['SourceServiceId'] = $request->sourceServiceId;
        }
        if (!Utils::isUnset($request->sourceServiceVersion)) {
            $query['SourceServiceVersion'] = $request->sourceServiceVersion;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->tenantType)) {
            $query['TenantType'] = $request->tenantType;
        }
        if (!Utils::isUnset($request->trialDuration)) {
            $query['TrialDuration'] = $request->trialDuration;
        }
        if (!Utils::isUnset($request->upgradeMetadata)) {
            $query['UpgradeMetadata'] = $request->upgradeMetadata;
        }
        if (!Utils::isUnset($request->versionName)) {
            $query['VersionName'] = $request->versionName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建新服务版本
     *  *
     * @param CreateServiceRequest $request CreateServiceRequest
     *
     * @return CreateServiceResponse CreateServiceResponse
     */
    public function createService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceWithOptions($request, $runtime);
    }

    /**
     * @summary 商家侧创建服务实例
     *  *
     * @param CreateServiceInstanceRequest $tmpReq  CreateServiceInstanceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateServiceInstanceResponse CreateServiceInstanceResponse
     */
    public function createServiceInstanceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateServiceInstanceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->parameters)) {
            $request->parametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->parametersShrink)) {
            $query['Parameters'] = $request->parametersShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $query['ServiceVersion'] = $request->serviceVersion;
        }
        if (!Utils::isUnset($request->specificationName)) {
            $query['SpecificationName'] = $request->specificationName;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 商家侧创建服务实例
     *  *
     * @param CreateServiceInstanceRequest $request CreateServiceInstanceRequest
     *
     * @return CreateServiceInstanceResponse CreateServiceInstanceResponse
     */
    public function createServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 删除部署物
     *  *
     * @param DeleteArtifactRequest $request DeleteArtifactRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteArtifactResponse DeleteArtifactResponse
     */
    public function deleteArtifactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->artifactId)) {
            $query['ArtifactId'] = $request->artifactId;
        }
        if (!Utils::isUnset($request->artifactVersion)) {
            $query['ArtifactVersion'] = $request->artifactVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteArtifactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除部署物
     *  *
     * @param DeleteArtifactRequest $request DeleteArtifactRequest
     *
     * @return DeleteArtifactResponse DeleteArtifactResponse
     */
    public function deleteArtifact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteArtifactWithOptions($request, $runtime);
    }

    /**
     * @param DeleteServiceRequest $request DeleteServiceRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteServiceResponse DeleteServiceResponse
     */
    public function deleteServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $query['ServiceVersion'] = $request->serviceVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteServiceRequest $request DeleteServiceRequest
     *
     * @return DeleteServiceResponse DeleteServiceResponse
     */
    public function deleteService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteServiceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteServiceInstancesRequest $request DeleteServiceInstancesRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteServiceInstancesResponse DeleteServiceInstancesResponse
     */
    public function deleteServiceInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteServiceInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteServiceInstancesRequest $request DeleteServiceInstancesRequest
     *
     * @return DeleteServiceInstancesResponse DeleteServiceInstancesResponse
     */
    public function deleteServiceInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteServiceInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DeployServiceInstanceRequest $request DeployServiceInstanceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeployServiceInstanceResponse DeployServiceInstanceResponse
     */
    public function deployServiceInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeployServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeployServiceInstanceRequest $request DeployServiceInstanceRequest
     *
     * @return DeployServiceInstanceResponse DeployServiceInstanceResponse
     */
    public function deployServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deployServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 获取部署物信息
     *  *
     * @param GetArtifactRequest $request GetArtifactRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetArtifactResponse GetArtifactResponse
     */
    public function getArtifactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->artifactId)) {
            $query['ArtifactId'] = $request->artifactId;
        }
        if (!Utils::isUnset($request->artifactName)) {
            $query['ArtifactName'] = $request->artifactName;
        }
        if (!Utils::isUnset($request->artifactVersion)) {
            $query['ArtifactVersion'] = $request->artifactVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetArtifactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取部署物信息
     *  *
     * @param GetArtifactRequest $request GetArtifactRequest
     *
     * @return GetArtifactResponse GetArtifactResponse
     */
    public function getArtifact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getArtifactWithOptions($request, $runtime);
    }

    /**
     * @summary 获取部署物仓库访问凭证
     *  *
     * @param GetArtifactRepositoryCredentialsRequest $request GetArtifactRepositoryCredentialsRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetArtifactRepositoryCredentialsResponse GetArtifactRepositoryCredentialsResponse
     */
    public function getArtifactRepositoryCredentialsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->artifactType)) {
            $query['ArtifactType'] = $request->artifactType;
        }
        if (!Utils::isUnset($request->deployRegionId)) {
            $query['DeployRegionId'] = $request->deployRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetArtifactRepositoryCredentialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取部署物仓库访问凭证
     *  *
     * @param GetArtifactRepositoryCredentialsRequest $request GetArtifactRepositoryCredentialsRequest
     *
     * @return GetArtifactRepositoryCredentialsResponse GetArtifactRepositoryCredentialsResponse
     */
    public function getArtifactRepositoryCredentials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getArtifactRepositoryCredentialsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询服务详情
     *  *
     * @param GetServiceRequest $request GetServiceRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetServiceResponse GetServiceResponse
     */
    public function getServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filterAliUid)) {
            $query['FilterAliUid'] = $request->filterAliUid;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $query['ServiceVersion'] = $request->serviceVersion;
        }
        if (!Utils::isUnset($request->sharedAccountType)) {
            $query['SharedAccountType'] = $request->sharedAccountType;
        }
        if (!Utils::isUnset($request->showDetail)) {
            $query['ShowDetail'] = $request->showDetail;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询服务详情
     *  *
     * @param GetServiceRequest $request GetServiceRequest
     *
     * @return GetServiceResponse GetServiceResponse
     */
    public function getService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceWithOptions($request, $runtime);
    }

    /**
     * @summary 计算巢服务部署询价
     *  *
     * @param GetServiceEstimateCostRequest $tmpReq  GetServiceEstimateCostRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetServiceEstimateCostResponse GetServiceEstimateCostResponse
     */
    public function getServiceEstimateCostWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetServiceEstimateCostShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->commodity)) {
            $request->commodityShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->commodity, 'Commodity', 'json');
        }
        if (!Utils::isUnset($tmpReq->parameters)) {
            $request->parametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->commodityShrink)) {
            $query['Commodity'] = $request->commodityShrink;
        }
        if (!Utils::isUnset($request->parametersShrink)) {
            $query['Parameters'] = $request->parametersShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $query['ServiceVersion'] = $request->serviceVersion;
        }
        if (!Utils::isUnset($request->specificationName)) {
            $query['SpecificationName'] = $request->specificationName;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetServiceEstimateCostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 计算巢服务部署询价
     *  *
     * @param GetServiceEstimateCostRequest $request GetServiceEstimateCostRequest
     *
     * @return GetServiceEstimateCostResponse GetServiceEstimateCostResponse
     */
    public function getServiceEstimateCost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceEstimateCostWithOptions($request, $runtime);
    }

    /**
     * @param GetServiceInstanceRequest $request GetServiceInstanceRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetServiceInstanceResponse GetServiceInstanceResponse
     */
    public function getServiceInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetServiceInstanceRequest $request GetServiceInstanceRequest
     *
     * @return GetServiceInstanceResponse GetServiceInstanceResponse
     */
    public function getServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 获取ROS模板参数限制
     *  *
     * @param GetServiceTemplateParameterConstraintsRequest $request GetServiceTemplateParameterConstraintsRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetServiceTemplateParameterConstraintsResponse GetServiceTemplateParameterConstraintsResponse
     */
    public function getServiceTemplateParameterConstraintsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->deployRegionId)) {
            $query['DeployRegionId'] = $request->deployRegionId;
        }
        if (!Utils::isUnset($request->enablePrivateVpcConnection)) {
            $query['EnablePrivateVpcConnection'] = $request->enablePrivateVpcConnection;
        }
        if (!Utils::isUnset($request->parameters)) {
            $query['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $query['ServiceVersion'] = $request->serviceVersion;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetServiceTemplateParameterConstraintsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取ROS模板参数限制
     *  *
     * @param GetServiceTemplateParameterConstraintsRequest $request GetServiceTemplateParameterConstraintsRequest
     *
     * @return GetServiceTemplateParameterConstraintsResponse GetServiceTemplateParameterConstraintsResponse
     */
    public function getServiceTemplateParameterConstraints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceTemplateParameterConstraintsWithOptions($request, $runtime);
    }

    /**
     * @param GetUploadCredentialsRequest $request GetUploadCredentialsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUploadCredentialsResponse GetUploadCredentialsResponse
     */
    public function getUploadCredentialsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetUploadCredentialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUploadCredentialsRequest $request GetUploadCredentialsRequest
     *
     * @return GetUploadCredentialsResponse GetUploadCredentialsResponse
     */
    public function getUploadCredentials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUploadCredentialsWithOptions($request, $runtime);
    }

    /**
     * @summary 展示部署物
     *  *
     * @param ListAcrImageRepositoriesRequest $request ListAcrImageRepositoriesRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAcrImageRepositoriesResponse ListAcrImageRepositoriesResponse
     */
    public function listAcrImageRepositoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->artifactType)) {
            $query['ArtifactType'] = $request->artifactType;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->repoName)) {
            $query['RepoName'] = $request->repoName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListAcrImageRepositoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 展示部署物
     *  *
     * @param ListAcrImageRepositoriesRequest $request ListAcrImageRepositoriesRequest
     *
     * @return ListAcrImageRepositoriesResponse ListAcrImageRepositoriesResponse
     */
    public function listAcrImageRepositories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAcrImageRepositoriesWithOptions($request, $runtime);
    }

    /**
     * @summary 展示部署物
     *  *
     * @param ListAcrImageTagsRequest $request ListAcrImageTagsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAcrImageTagsResponse ListAcrImageTagsResponse
     */
    public function listAcrImageTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->artifactType)) {
            $query['ArtifactType'] = $request->artifactType;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->repoId)) {
            $query['RepoId'] = $request->repoId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListAcrImageTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 展示部署物
     *  *
     * @param ListAcrImageTagsRequest $request ListAcrImageTagsRequest
     *
     * @return ListAcrImageTagsResponse ListAcrImageTagsResponse
     */
    public function listAcrImageTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAcrImageTagsWithOptions($request, $runtime);
    }

    /**
     * @summary 展示部署物版本
     *  *
     * @param ListArtifactVersionsRequest $request ListArtifactVersionsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListArtifactVersionsResponse ListArtifactVersionsResponse
     */
    public function listArtifactVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->artifactId)) {
            $query['ArtifactId'] = $request->artifactId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListArtifactVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 展示部署物版本
     *  *
     * @param ListArtifactVersionsRequest $request ListArtifactVersionsRequest
     *
     * @return ListArtifactVersionsResponse ListArtifactVersionsResponse
     */
    public function listArtifactVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listArtifactVersionsWithOptions($request, $runtime);
    }

    /**
     * @summary 展示部署物
     *  *
     * @param ListArtifactsRequest $request ListArtifactsRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListArtifactsResponse ListArtifactsResponse
     */
    public function listArtifactsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListArtifactsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 展示部署物
     *  *
     * @param ListArtifactsRequest $request ListArtifactsRequest
     *
     * @return ListArtifactsResponse ListArtifactsResponse
     */
    public function listArtifacts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listArtifactsWithOptions($request, $runtime);
    }

    /**
     * @param ListServiceInstancesRequest $request ListServiceInstancesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListServiceInstancesResponse ListServiceInstancesResponse
     */
    public function listServiceInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
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
        if (!Utils::isUnset($request->showDeleted)) {
            $query['ShowDeleted'] = $request->showDeleted;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListServiceInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListServiceInstancesRequest $request ListServiceInstancesRequest
     *
     * @return ListServiceInstancesResponse ListServiceInstancesResponse
     */
    public function listServiceInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary 商家获取服务使用申请接口
     *  *
     * @param ListServiceUsagesRequest $request ListServiceUsagesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListServiceUsagesResponse ListServiceUsagesResponse
     */
    public function listServiceUsagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->supplierRole)) {
            $query['SupplierRole'] = $request->supplierRole;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListServiceUsagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 商家获取服务使用申请接口
     *  *
     * @param ListServiceUsagesRequest $request ListServiceUsagesRequest
     *
     * @return ListServiceUsagesResponse ListServiceUsagesResponse
     */
    public function listServiceUsages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceUsagesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询服务
     *  *
     * @param ListServicesRequest $request ListServicesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListServicesResponse ListServicesResponse
     */
    public function listServicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allVersions)) {
            $query['AllVersions'] = $request->allVersions;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
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
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询服务
     *  *
     * @param ListServicesRequest $request ListServicesRequest
     *
     * @return ListServicesResponse ListServicesResponse
     */
    public function listServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServicesWithOptions($request, $runtime);
    }

    /**
     * @summary 修改服务实例资源
     *  *
     * @param ModifyServiceInstanceResourcesRequest $request ModifyServiceInstanceResourcesRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyServiceInstanceResourcesResponse ModifyServiceInstanceResourcesResponse
     */
    public function modifyServiceInstanceResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resources)) {
            $query['Resources'] = $request->resources;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        if (!Utils::isUnset($request->serviceInstanceResourcesAction)) {
            $query['ServiceInstanceResourcesAction'] = $request->serviceInstanceResourcesAction;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ModifyServiceInstanceResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改服务实例资源
     *  *
     * @param ModifyServiceInstanceResourcesRequest $request ModifyServiceInstanceResourcesRequest
     *
     * @return ModifyServiceInstanceResourcesResponse ModifyServiceInstanceResourcesResponse
     */
    public function modifyServiceInstanceResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyServiceInstanceResourcesWithOptions($request, $runtime);
    }

    /**
     * @param PushMeteringDataRequest $request PushMeteringDataRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return PushMeteringDataResponse PushMeteringDataResponse
     */
    public function pushMeteringDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->metering)) {
            $query['Metering'] = $request->metering;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return PushMeteringDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PushMeteringDataRequest $request PushMeteringDataRequest
     *
     * @return PushMeteringDataResponse PushMeteringDataResponse
     */
    public function pushMeteringData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushMeteringDataWithOptions($request, $runtime);
    }

    /**
     * @param RegisterServiceRequest $request RegisterServiceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return RegisterServiceResponse RegisterServiceResponse
     */
    public function registerServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return RegisterServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RegisterServiceRequest $request RegisterServiceRequest
     *
     * @return RegisterServiceResponse RegisterServiceResponse
     */
    public function registerService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerServiceWithOptions($request, $runtime);
    }

    /**
     * @summary 发布部署物
     *  *
     * @param ReleaseArtifactRequest $request ReleaseArtifactRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleaseArtifactResponse ReleaseArtifactResponse
     */
    public function releaseArtifactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->artifactId)) {
            $query['ArtifactId'] = $request->artifactId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ReleaseArtifactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 发布部署物
     *  *
     * @param ReleaseArtifactRequest $request ReleaseArtifactRequest
     *
     * @return ReleaseArtifactResponse ReleaseArtifactResponse
     */
    public function releaseArtifact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseArtifactWithOptions($request, $runtime);
    }

    /**
     * @summary 重启服务实例
     *  *
     * @param RestartServiceInstanceRequest $request RestartServiceInstanceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return RestartServiceInstanceResponse RestartServiceInstanceResponse
     */
    public function restartServiceInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return RestartServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 重启服务实例
     *  *
     * @param RestartServiceInstanceRequest $request RestartServiceInstanceRequest
     *
     * @return RestartServiceInstanceResponse RestartServiceInstanceResponse
     */
    public function restartServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 启动服务实例
     *  *
     * @param StartServiceInstanceRequest $request StartServiceInstanceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return StartServiceInstanceResponse StartServiceInstanceResponse
     */
    public function startServiceInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return StartServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 启动服务实例
     *  *
     * @param StartServiceInstanceRequest $request StartServiceInstanceRequest
     *
     * @return StartServiceInstanceResponse StartServiceInstanceResponse
     */
    public function startServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 停止服务实例
     *  *
     * @param StopServiceInstanceRequest $request StopServiceInstanceRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return StopServiceInstanceResponse StopServiceInstanceResponse
     */
    public function stopServiceInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return StopServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 停止服务实例
     *  *
     * @param StopServiceInstanceRequest $request StopServiceInstanceRequest
     *
     * @return StopServiceInstanceResponse StopServiceInstanceResponse
     */
    public function stopServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 更新部署物
     *  *
     * @param UpdateArtifactRequest $tmpReq  UpdateArtifactRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateArtifactResponse UpdateArtifactResponse
     */
    public function updateArtifactWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateArtifactShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->artifactProperty)) {
            $request->artifactPropertyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->artifactProperty, 'ArtifactProperty', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->artifactId)) {
            $query['ArtifactId'] = $request->artifactId;
        }
        if (!Utils::isUnset($request->artifactPropertyShrink)) {
            $query['ArtifactProperty'] = $request->artifactPropertyShrink;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->supportRegionIds)) {
            $query['SupportRegionIds'] = $request->supportRegionIds;
        }
        if (!Utils::isUnset($request->versionName)) {
            $query['VersionName'] = $request->versionName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateArtifactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新部署物
     *  *
     * @param UpdateArtifactRequest $request UpdateArtifactRequest
     *
     * @return UpdateArtifactResponse UpdateArtifactResponse
     */
    public function updateArtifact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateArtifactWithOptions($request, $runtime);
    }

    /**
     * @param UpdateServiceRequest $tmpReq  UpdateServiceRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateServiceResponse UpdateServiceResponse
     */
    public function updateServiceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateServiceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->updateOption)) {
            $request->updateOptionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->updateOption, 'UpdateOption', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->alarmMetadata)) {
            $query['AlarmMetadata'] = $request->alarmMetadata;
        }
        if (!Utils::isUnset($request->approvalType)) {
            $query['ApprovalType'] = $request->approvalType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->deployMetadata)) {
            $query['DeployMetadata'] = $request->deployMetadata;
        }
        if (!Utils::isUnset($request->deployType)) {
            $query['DeployType'] = $request->deployType;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->isSupportOperated)) {
            $query['IsSupportOperated'] = $request->isSupportOperated;
        }
        if (!Utils::isUnset($request->licenseMetadata)) {
            $query['LicenseMetadata'] = $request->licenseMetadata;
        }
        if (!Utils::isUnset($request->logMetadata)) {
            $query['LogMetadata'] = $request->logMetadata;
        }
        if (!Utils::isUnset($request->operationMetadata)) {
            $query['OperationMetadata'] = $request->operationMetadata;
        }
        if (!Utils::isUnset($request->policyNames)) {
            $query['PolicyNames'] = $request->policyNames;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resellable)) {
            $query['Resellable'] = $request->resellable;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceInfo)) {
            $query['ServiceInfo'] = $request->serviceInfo;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $query['ServiceType'] = $request->serviceType;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $query['ServiceVersion'] = $request->serviceVersion;
        }
        if (!Utils::isUnset($request->shareType)) {
            $query['ShareType'] = $request->shareType;
        }
        if (!Utils::isUnset($request->tenantType)) {
            $query['TenantType'] = $request->tenantType;
        }
        if (!Utils::isUnset($request->trialDuration)) {
            $query['TrialDuration'] = $request->trialDuration;
        }
        if (!Utils::isUnset($request->updateOptionShrink)) {
            $query['UpdateOption'] = $request->updateOptionShrink;
        }
        if (!Utils::isUnset($request->upgradeMetadata)) {
            $query['UpgradeMetadata'] = $request->upgradeMetadata;
        }
        if (!Utils::isUnset($request->versionName)) {
            $query['VersionName'] = $request->versionName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateServiceRequest $request UpdateServiceRequest
     *
     * @return UpdateServiceResponse UpdateServiceResponse
     */
    public function updateService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServiceWithOptions($request, $runtime);
    }

    /**
     * @summary 更新服务实例属性
     *  *
     * @param UpdateServiceInstanceAttributeRequest $request UpdateServiceInstanceAttributeRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateServiceInstanceAttributeResponse UpdateServiceInstanceAttributeResponse
     */
    public function updateServiceInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateServiceInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新服务实例属性
     *  *
     * @param UpdateServiceInstanceAttributeRequest $request UpdateServiceInstanceAttributeRequest
     *
     * @return UpdateServiceInstanceAttributeResponse UpdateServiceInstanceAttributeResponse
     */
    public function updateServiceInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServiceInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary 变配服务实例
     *  *
     * @param UpdateServiceInstanceSpecRequest $tmpReq  UpdateServiceInstanceSpecRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateServiceInstanceSpecResponse UpdateServiceInstanceSpecResponse
     */
    public function updateServiceInstanceSpecWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateServiceInstanceSpecShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->parameters)) {
            $request->parametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->enableUserPrometheus)) {
            $query['EnableUserPrometheus'] = $request->enableUserPrometheus;
        }
        if (!Utils::isUnset($request->operationName)) {
            $query['OperationName'] = $request->operationName;
        }
        if (!Utils::isUnset($request->parametersShrink)) {
            $query['Parameters'] = $request->parametersShrink;
        }
        if (!Utils::isUnset($request->predefinedParametersName)) {
            $query['PredefinedParametersName'] = $request->predefinedParametersName;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateServiceInstanceSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 变配服务实例
     *  *
     * @param UpdateServiceInstanceSpecRequest $request UpdateServiceInstanceSpecRequest
     *
     * @return UpdateServiceInstanceSpecResponse UpdateServiceInstanceSpecResponse
     */
    public function updateServiceInstanceSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServiceInstanceSpecWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeServiceInstanceRequest $tmpReq  UpgradeServiceInstanceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeServiceInstanceResponse UpgradeServiceInstanceResponse
     */
    public function upgradeServiceInstanceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpgradeServiceInstanceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->parameters)) {
            $request->parametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->parametersShrink)) {
            $query['Parameters'] = $request->parametersShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $query['ServiceVersion'] = $request->serviceVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpgradeServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpgradeServiceInstanceRequest $request UpgradeServiceInstanceRequest
     *
     * @return UpgradeServiceInstanceResponse UpgradeServiceInstanceResponse
     */
    public function upgradeServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeServiceInstanceWithOptions($request, $runtime);
    }
}
