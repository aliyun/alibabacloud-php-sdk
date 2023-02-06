<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateArtifactRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateArtifactResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateArtifactShrinkRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\DeleteArtifactRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\DeleteArtifactResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetArtifactRepositoryCredentialsRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetArtifactRepositoryCredentialsResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetArtifactRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetArtifactResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListArtifactsRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListArtifactsResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListArtifactVersionsRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListArtifactVersionsResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceInstancesRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceInstancesResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceUsagesRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceUsagesResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ReleaseArtifactRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ReleaseArtifactResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateArtifactRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateArtifactResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateArtifactShrinkRequest;
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
     * @param CreateArtifactRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return CreateArtifactResponse
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
     * @param DeleteArtifactRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteArtifactResponse
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
     * @param GetArtifactRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetArtifactResponse
     */
    public function getArtifactWithOptions($request, $runtime)
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
     * @param GetArtifactRepositoryCredentialsRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return GetArtifactRepositoryCredentialsResponse
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
     * @param GetServiceInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetServiceInstanceResponse
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
     * @param ListArtifactVersionsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListArtifactVersionsResponse
     */
    public function listArtifactVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->artifactId)) {
            $query['ArtifactId'] = $request->artifactId;
        }
        if (!Utils::isUnset($request->maxResult)) {
            $query['MaxResult'] = $request->maxResult;
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
     * @param ListArtifactsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListArtifactsResponse
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
     * @param ListServiceInstancesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListServiceInstancesResponse
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
     * @param ListServiceUsagesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListServiceUsagesResponse
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
     * @param ReleaseArtifactRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ReleaseArtifactResponse
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
     * @param UpdateArtifactRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateArtifactResponse
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
     * @param UpdateArtifactRequest $request
     *
     * @return UpdateArtifactResponse
     */
    public function updateArtifact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateArtifactWithOptions($request, $runtime);
    }
}
