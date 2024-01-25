<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Adp\V20210720\Models\AddEnvironmentNodesRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\AddEnvironmentNodesResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\AddEnvironmentProductVersionsRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\AddEnvironmentProductVersionsResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\AddProductComponentVersionRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\AddProductComponentVersionResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\AddProductVersionConfigRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\AddProductVersionConfigResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\AddResourceSnapshotRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\AddResourceSnapshotResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\BatchAddEnvironmentNodesRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\BatchAddEnvironmentNodesResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\BatchAddProductVersionConfigRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\BatchAddProductVersionConfigResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\CreateDeliverableRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\CreateDeliverableResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\CreateDeliveryInstanceRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\CreateDeliveryInstanceResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\CreateDeliveryPackageRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\CreateDeliveryPackageResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\CreateEnvironmentHeaders;
use AlibabaCloud\SDK\Adp\V20210720\Models\CreateEnvironmentLicenseRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\CreateEnvironmentLicenseResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\CreateEnvironmentRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\CreateEnvironmentResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\CreateFoundationReferenceRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\CreateFoundationReferenceResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\CreateProductDeploymentRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\CreateProductDeploymentResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\CreateProductHeaders;
use AlibabaCloud\SDK\Adp\V20210720\Models\CreateProductRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\CreateProductResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\CreateProductVersionPackageHeaders;
use AlibabaCloud\SDK\Adp\V20210720\Models\CreateProductVersionPackageRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\CreateProductVersionPackageResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\CreateProductVersionRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\CreateProductVersionResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\DeleteEnvironmentLicenseResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\DeleteEnvironmentNodeResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\DeleteEnvironmentProductVersionResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\DeleteEnvironmentResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\DeleteProductComponentVersionResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\DeleteProductInstanceConfigRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\DeleteProductInstanceConfigResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\DeleteProductResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\DeleteProductVersionConfigResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\DeleteProductVersionResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\GenerateProductInstanceDeploymentConfigRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\GenerateProductInstanceDeploymentConfigResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\GetComponentResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\GetComponentVersionRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\GetComponentVersionResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\GetDeliverableResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\GetDeliveryPackageResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\GetEnvironmentDeliveryInstanceRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\GetEnvironmentDeliveryInstanceResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\GetEnvironmentLicenseRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\GetEnvironmentLicenseResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\GetEnvironmentLicenseShrinkRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\GetEnvironmentNodeResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\GetEnvironmentRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\GetEnvironmentResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\GetEnvironmentShrinkRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\GetFoundationComponentReferenceResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\GetFoundationReferenceResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\GetFoundationVersionResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\GetProductComponentVersionResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\GetProductDeploymentRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\GetProductDeploymentResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\GetProductRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\GetProductResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\GetProductVersionDifferencesRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\GetProductVersionDifferencesResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\GetProductVersionPackageRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\GetProductVersionPackageResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\GetProductVersionRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\GetProductVersionResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\GetResourceSnapshotRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\GetResourceSnapshotResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\GetWorkflowStatusRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\GetWorkflowStatusResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\InitEnvironmentResourceRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\InitEnvironmentResourceResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListComponentsRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListComponentsResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListComponentVersionsRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListComponentVersionsResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListComponentVersionsShrinkRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListDeliveryInstanceChangeRecordsResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListDeliveryPackageRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListDeliveryPackageResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListEnvironmentLicensesRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListEnvironmentLicensesResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListEnvironmentNodesRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListEnvironmentNodesResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListEnvironmentsRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListEnvironmentsResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListEnvironmentTunnelsResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListFoundationComponentVersionsRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListFoundationComponentVersionsResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListFoundationReferenceComponentsRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListFoundationReferenceComponentsResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListFoundationVersionsRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListFoundationVersionsResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListProductComponentVersionsRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListProductComponentVersionsResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListProductDeploymentsRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListProductDeploymentsResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListProductEnvironmentsRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListProductEnvironmentsResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListProductEnvironmentsShrinkRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListProductFoundationReferencesResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListProductInstanceConfigsRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListProductInstanceConfigsResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListProductInstancesRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListProductInstancesResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListProductInstancesShrinkRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListProductsRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListProductsResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListProductVersionConfigsRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListProductVersionConfigsResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListProductVersionsRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListProductVersionsResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListProductVersionsShrinkRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListWorkflowTaskLogsRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListWorkflowTaskLogsResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListWorkflowTaskLogsShrinkRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\PutEnvironmentTunnelRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\PutEnvironmentTunnelResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\PutProductInstanceConfigRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\PutProductInstanceConfigResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\SetEnvironmentFoundationReferenceResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\UpdateDeliverableRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\UpdateDeliverableResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\UpdateDeliveryInstanceRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\UpdateDeliveryInstanceResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\UpdateEnvironmentNodeRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\UpdateEnvironmentNodeResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\UpdateEnvironmentProductVersionRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\UpdateEnvironmentProductVersionResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\UpdateEnvironmentRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\UpdateEnvironmentResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\UpdateFoundationComponentReferenceRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\UpdateFoundationComponentReferenceResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\UpdateFoundationReferenceRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\UpdateFoundationReferenceResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\UpdateProductComponentVersionRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\UpdateProductComponentVersionResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\UpdateProductFoundationVersionRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\UpdateProductFoundationVersionResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\UpdateProductRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\UpdateProductResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\UpdateProductVersionConfigRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\UpdateProductVersionConfigResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\UpdateProductVersionRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\UpdateProductVersionResponse;
use AlibabaCloud\SDK\Adp\V20210720\Models\ValidateEnvironmentTunnelRequest;
use AlibabaCloud\SDK\Adp\V20210720\Models\ValidateEnvironmentTunnelResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Adp extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('adp', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param string                     $uid
     * @param AddEnvironmentNodesRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return AddEnvironmentNodesResponse
     */
    public function addEnvironmentNodesWithOptions($uid, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->applicationDisk)) {
            $body['applicationDisk'] = $request->applicationDisk;
        }
        if (!Utils::isUnset($request->cpu)) {
            $body['cpu'] = $request->cpu;
        }
        if (!Utils::isUnset($request->dataDisk)) {
            $body['dataDisk'] = $request->dataDisk;
        }
        if (!Utils::isUnset($request->etcdDisk)) {
            $body['etcdDisk'] = $request->etcdDisk;
        }
        if (!Utils::isUnset($request->hostName)) {
            $body['hostName'] = $request->hostName;
        }
        if (!Utils::isUnset($request->labels)) {
            $body['labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->masterPrivateIPs)) {
            $body['masterPrivateIPs'] = $request->masterPrivateIPs;
        }
        if (!Utils::isUnset($request->memory)) {
            $body['memory'] = $request->memory;
        }
        if (!Utils::isUnset($request->os)) {
            $body['os'] = $request->os;
        }
        if (!Utils::isUnset($request->rootPassword)) {
            $body['rootPassword'] = $request->rootPassword;
        }
        if (!Utils::isUnset($request->systemDisk)) {
            $body['systemDisk'] = $request->systemDisk;
        }
        if (!Utils::isUnset($request->taints)) {
            $body['taints'] = $request->taints;
        }
        if (!Utils::isUnset($request->tridentSystemDisk)) {
            $body['tridentSystemDisk'] = $request->tridentSystemDisk;
        }
        if (!Utils::isUnset($request->tridentSystemSizeDisk)) {
            $body['tridentSystemSizeDisk'] = $request->tridentSystemSizeDisk;
        }
        if (!Utils::isUnset($request->workerPrivateIPs)) {
            $body['workerPrivateIPs'] = $request->workerPrivateIPs;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddEnvironmentNodes',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/environments/' . OpenApiUtilClient::getEncodeParam($uid) . '/nodes',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddEnvironmentNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                     $uid
     * @param AddEnvironmentNodesRequest $request
     *
     * @return AddEnvironmentNodesResponse
     */
    public function addEnvironmentNodes($uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addEnvironmentNodesWithOptions($uid, $request, $headers, $runtime);
    }

    /**
     * @param string                               $uid
     * @param AddEnvironmentProductVersionsRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return AddEnvironmentProductVersionsResponse
     */
    public function addEnvironmentProductVersionsWithOptions($uid, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->productVersionInfoList)) {
            $body['productVersionInfoList'] = $request->productVersionInfoList;
        }
        if (!Utils::isUnset($request->productVersionUIDList)) {
            $body['productVersionUIDList'] = $request->productVersionUIDList;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddEnvironmentProductVersions',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/environments/' . OpenApiUtilClient::getEncodeParam($uid) . '/product-versions',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddEnvironmentProductVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                               $uid
     * @param AddEnvironmentProductVersionsRequest $request
     *
     * @return AddEnvironmentProductVersionsResponse
     */
    public function addEnvironmentProductVersions($uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addEnvironmentProductVersionsWithOptions($uid, $request, $headers, $runtime);
    }

    /**
     * @param string                            $uid
     * @param string                            $componentVersionUID
     * @param AddProductComponentVersionRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return AddProductComponentVersionResponse
     */
    public function addProductComponentVersionWithOptions($uid, $componentVersionUID, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->componentVersionSpecUID)) {
            $body['componentVersionSpecUID'] = $request->componentVersionSpecUID;
        }
        if (!Utils::isUnset($request->componentVersionSpecValues)) {
            $body['componentVersionSpecValues'] = $request->componentVersionSpecValues;
        }
        if (!Utils::isUnset($request->releaseName)) {
            $body['releaseName'] = $request->releaseName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddProductComponentVersion',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/integration/api/v2/product-versions/' . OpenApiUtilClient::getEncodeParam($uid) . '/component-versions/' . OpenApiUtilClient::getEncodeParam($componentVersionUID) . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddProductComponentVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                            $uid
     * @param string                            $componentVersionUID
     * @param AddProductComponentVersionRequest $request
     *
     * @return AddProductComponentVersionResponse
     */
    public function addProductComponentVersion($uid, $componentVersionUID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addProductComponentVersionWithOptions($uid, $componentVersionUID, $request, $headers, $runtime);
    }

    /**
     * @param string                         $uid
     * @param AddProductVersionConfigRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return AddProductVersionConfigResponse
     */
    public function addProductVersionConfigWithOptions($uid, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->componentReleaseName)) {
            $body['componentReleaseName'] = $request->componentReleaseName;
        }
        if (!Utils::isUnset($request->componentVersionUID)) {
            $body['componentVersionUID'] = $request->componentVersionUID;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->parentComponentReleaseName)) {
            $body['parentComponentReleaseName'] = $request->parentComponentReleaseName;
        }
        if (!Utils::isUnset($request->parentComponentVersionUID)) {
            $body['parentComponentVersionUID'] = $request->parentComponentVersionUID;
        }
        if (!Utils::isUnset($request->scope)) {
            $body['scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->value)) {
            $body['value'] = $request->value;
        }
        if (!Utils::isUnset($request->valueType)) {
            $body['valueType'] = $request->valueType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddProductVersionConfig',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/product-versions/' . OpenApiUtilClient::getEncodeParam($uid) . '/configs',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddProductVersionConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                         $uid
     * @param AddProductVersionConfigRequest $request
     *
     * @return AddProductVersionConfigResponse
     */
    public function addProductVersionConfig($uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addProductVersionConfigWithOptions($uid, $request, $headers, $runtime);
    }

    /**
     * @param AddResourceSnapshotRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return AddResourceSnapshotResponse
     */
    public function addResourceSnapshotWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterUID)) {
            $query['clusterUID'] = $request->clusterUID;
        }
        if (!Utils::isUnset($request->productVersionUID)) {
            $query['productVersionUID'] = $request->productVersionUID;
        }
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddResourceSnapshot',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/resource-snapshots',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddResourceSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddResourceSnapshotRequest $request
     *
     * @return AddResourceSnapshotResponse
     */
    public function addResourceSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addResourceSnapshotWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string                          $uid
     * @param BatchAddEnvironmentNodesRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return BatchAddEnvironmentNodesResponse
     */
    public function batchAddEnvironmentNodesWithOptions($uid, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceList)) {
            $body['instanceList'] = $request->instanceList;
        }
        if (!Utils::isUnset($request->overwrite)) {
            $body['overwrite'] = $request->overwrite;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchAddEnvironmentNodes',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/environments/' . OpenApiUtilClient::getEncodeParam($uid) . '/batch/nodes',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BatchAddEnvironmentNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                          $uid
     * @param BatchAddEnvironmentNodesRequest $request
     *
     * @return BatchAddEnvironmentNodesResponse
     */
    public function batchAddEnvironmentNodes($uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchAddEnvironmentNodesWithOptions($uid, $request, $headers, $runtime);
    }

    /**
     * @param string                              $uid
     * @param BatchAddProductVersionConfigRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return BatchAddProductVersionConfigResponse
     */
    public function batchAddProductVersionConfigWithOptions($uid, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->productVersionConfigList)) {
            $body['productVersionConfigList'] = $request->productVersionConfigList;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchAddProductVersionConfig',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/product-versions/' . OpenApiUtilClient::getEncodeParam($uid) . '/batch/configs',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BatchAddProductVersionConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                              $uid
     * @param BatchAddProductVersionConfigRequest $request
     *
     * @return BatchAddProductVersionConfigResponse
     */
    public function batchAddProductVersionConfig($uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchAddProductVersionConfigWithOptions($uid, $request, $headers, $runtime);
    }

    /**
     * @param CreateDeliverableRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateDeliverableResponse
     */
    public function createDeliverableWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->foundation)) {
            $body['foundation'] = $request->foundation;
        }
        if (!Utils::isUnset($request->products)) {
            $body['products'] = $request->products;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDeliverable',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/delivery/deliverables',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDeliverableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDeliverableRequest $request
     *
     * @return CreateDeliverableResponse
     */
    public function createDeliverable($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDeliverableWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateDeliveryInstanceRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateDeliveryInstanceResponse
     */
    public function createDeliveryInstanceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clusterUID)) {
            $body['clusterUID'] = $request->clusterUID;
        }
        if (!Utils::isUnset($request->deliverableConfigUID)) {
            $body['deliverableConfigUID'] = $request->deliverableConfigUID;
        }
        if (!Utils::isUnset($request->deliverableUID)) {
            $body['deliverableUID'] = $request->deliverableUID;
        }
        if (!Utils::isUnset($request->envUID)) {
            $body['envUID'] = $request->envUID;
        }
        if (!Utils::isUnset($request->foundation)) {
            $body['foundation'] = $request->foundation;
        }
        if (!Utils::isUnset($request->products)) {
            $body['products'] = $request->products;
        }
        if (!Utils::isUnset($request->templateUID)) {
            $body['templateUID'] = $request->templateUID;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDeliveryInstance',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/delivery/delivery-instances',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDeliveryInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDeliveryInstanceRequest $request
     *
     * @return CreateDeliveryInstanceResponse
     */
    public function createDeliveryInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDeliveryInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateDeliveryPackageRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateDeliveryPackageResponse
     */
    public function createDeliveryPackageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->deliverableUID)) {
            $body['deliverableUID'] = $request->deliverableUID;
        }
        if (!Utils::isUnset($request->deliveryInstanceUID)) {
            $body['deliveryInstanceUID'] = $request->deliveryInstanceUID;
        }
        if (!Utils::isUnset($request->originDeliverableUID)) {
            $body['originDeliverableUID'] = $request->originDeliverableUID;
        }
        if (!Utils::isUnset($request->packageContentType)) {
            $body['packageContentType'] = $request->packageContentType;
        }
        if (!Utils::isUnset($request->packageType)) {
            $body['packageType'] = $request->packageType;
        }
        if (!Utils::isUnset($request->platform)) {
            $body['platform'] = $request->platform;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDeliveryPackage',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/delivery/delivery-packages',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDeliveryPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDeliveryPackageRequest $request
     *
     * @return CreateDeliveryPackageResponse
     */
    public function createDeliveryPackage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDeliveryPackageWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateEnvironmentRequest $request
     * @param CreateEnvironmentHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateEnvironmentResponse
     */
    public function createEnvironmentWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->annotations)) {
            $body['annotations'] = $request->annotations;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->expiredAt)) {
            $body['expiredAt'] = $request->expiredAt;
        }
        if (!Utils::isUnset($request->location)) {
            $body['location'] = $request->location;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->platform)) {
            $body['platform'] = $request->platform;
        }
        if (!Utils::isUnset($request->platformList)) {
            $body['platformList'] = $request->platformList;
        }
        if (!Utils::isUnset($request->productVersionUID)) {
            $body['productVersionUID'] = $request->productVersionUID;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        if (!Utils::isUnset($request->vendorConfig)) {
            $body['vendorConfig'] = $request->vendorConfig;
        }
        if (!Utils::isUnset($request->vendorType)) {
            $body['vendorType'] = $request->vendorType;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->clientToken)) {
            $realHeaders['ClientToken'] = Utils::toJSONString($headers->clientToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateEnvironment',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/environments',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateEnvironmentRequest $request
     *
     * @return CreateEnvironmentResponse
     */
    public function createEnvironment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateEnvironmentHeaders([]);

        return $this->createEnvironmentWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string                          $uid
     * @param CreateEnvironmentLicenseRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateEnvironmentLicenseResponse
     */
    public function createEnvironmentLicenseWithOptions($uid, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->companyName)) {
            $body['companyName'] = $request->companyName;
        }
        if (!Utils::isUnset($request->contact)) {
            $body['contact'] = $request->contact;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->expireTime)) {
            $body['expireTime'] = $request->expireTime;
        }
        if (!Utils::isUnset($request->licenseQuota)) {
            $body['licenseQuota'] = $request->licenseQuota;
        }
        if (!Utils::isUnset($request->machineFingerprint)) {
            $body['machineFingerprint'] = $request->machineFingerprint;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->productVersionUID)) {
            $body['productVersionUID'] = $request->productVersionUID;
        }
        if (!Utils::isUnset($request->scenario)) {
            $body['scenario'] = $request->scenario;
        }
        if (!Utils::isUnset($request->scope)) {
            $body['scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateEnvironmentLicense',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/environments/' . OpenApiUtilClient::getEncodeParam($uid) . '/licenses',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateEnvironmentLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                          $uid
     * @param CreateEnvironmentLicenseRequest $request
     *
     * @return CreateEnvironmentLicenseResponse
     */
    public function createEnvironmentLicense($uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createEnvironmentLicenseWithOptions($uid, $request, $headers, $runtime);
    }

    /**
     * @param CreateFoundationReferenceRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateFoundationReferenceResponse
     */
    public function createFoundationReferenceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clusterConfig)) {
            $body['clusterConfig'] = $request->clusterConfig;
        }
        if (!Utils::isUnset($request->componentConfigs)) {
            $body['componentConfigs'] = $request->componentConfigs;
        }
        if (!Utils::isUnset($request->foundationReferenceConfigs)) {
            $body['foundationReferenceConfigs'] = $request->foundationReferenceConfigs;
        }
        if (!Utils::isUnset($request->foundationVersionUID)) {
            $body['foundationVersionUID'] = $request->foundationVersionUID;
        }
        if (!Utils::isUnset($request->originFoundationReferenceUID)) {
            $body['originFoundationReferenceUID'] = $request->originFoundationReferenceUID;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateFoundationReference',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/foundation-references',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateFoundationReferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateFoundationReferenceRequest $request
     *
     * @return CreateFoundationReferenceResponse
     */
    public function createFoundationReference($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFoundationReferenceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateProductRequest $request
     * @param CreateProductHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProductResponse
     */
    public function createProductWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->categories)) {
            $body['categories'] = $request->categories;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['displayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->foundationVersionUID)) {
            $body['foundationVersionUID'] = $request->foundationVersionUID;
        }
        if (!Utils::isUnset($request->productName)) {
            $body['productName'] = $request->productName;
        }
        if (!Utils::isUnset($request->vendor)) {
            $body['vendor'] = $request->vendor;
        }
        if (!Utils::isUnset($request->withoutProductVersion)) {
            $body['withoutProductVersion'] = $request->withoutProductVersion;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->clientToken)) {
            $realHeaders['ClientToken'] = Utils::toJSONString($headers->clientToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateProduct',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/integration/api/v2/products',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateProductRequest $request
     *
     * @return CreateProductResponse
     */
    public function createProduct($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateProductHeaders([]);

        return $this->createProductWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateProductDeploymentRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateProductDeploymentResponse
     */
    public function createProductDeploymentWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->environmentUID)) {
            $body['environmentUID'] = $request->environmentUID;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $body['namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->oldProductVersionUID)) {
            $body['oldProductVersionUID'] = $request->oldProductVersionUID;
        }
        if (!Utils::isUnset($request->packageConfig)) {
            $body['packageConfig'] = $request->packageConfig;
        }
        if (!Utils::isUnset($request->packageUID)) {
            $body['packageUID'] = $request->packageUID;
        }
        if (!Utils::isUnset($request->productVersionUID)) {
            $body['productVersionUID'] = $request->productVersionUID;
        }
        if (!Utils::isUnset($request->timeout)) {
            $body['timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateProductDeployment',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/product-instances/deployments',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateProductDeploymentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateProductDeploymentRequest $request
     *
     * @return CreateProductDeploymentResponse
     */
    public function createProductDeployment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProductDeploymentWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string                      $uid
     * @param CreateProductVersionRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateProductVersionResponse
     */
    public function createProductVersionWithOptions($uid, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseProductVersionUID)) {
            $query['baseProductVersionUID'] = $request->baseProductVersionUID;
        }
        $body = [];
        if (!Utils::isUnset($request->version)) {
            $body['version'] = $request->version;
        }
        if (!Utils::isUnset($request->withoutBaseProductVersion)) {
            $body['withoutBaseProductVersion'] = $request->withoutBaseProductVersion;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateProductVersion',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/integration/api/v2/products/' . OpenApiUtilClient::getEncodeParam($uid) . '/versions',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateProductVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                      $uid
     * @param CreateProductVersionRequest $request
     *
     * @return CreateProductVersionResponse
     */
    public function createProductVersion($uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProductVersionWithOptions($uid, $request, $headers, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param string                             $uid
     * @param CreateProductVersionPackageRequest $request CreateProductVersionPackageRequest
     * @param CreateProductVersionPackageHeaders $headers CreateProductVersionPackageHeaders
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateProductVersionPackageResponse CreateProductVersionPackageResponse
     */
    public function createProductVersionPackageWithOptions($uid, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterEngineType)) {
            $query['clusterEngineType'] = $request->clusterEngineType;
        }
        if (!Utils::isUnset($request->foundationReferenceUID)) {
            $query['foundationReferenceUID'] = $request->foundationReferenceUID;
        }
        if (!Utils::isUnset($request->oldFoundationReferenceUID)) {
            $query['oldFoundationReferenceUID'] = $request->oldFoundationReferenceUID;
        }
        if (!Utils::isUnset($request->oldProductVersionUID)) {
            $query['oldProductVersionUID'] = $request->oldProductVersionUID;
        }
        if (!Utils::isUnset($request->packageContentType)) {
            $query['packageContentType'] = $request->packageContentType;
        }
        if (!Utils::isUnset($request->packageToolType)) {
            $query['packageToolType'] = $request->packageToolType;
        }
        if (!Utils::isUnset($request->packageType)) {
            $query['packageType'] = $request->packageType;
        }
        if (!Utils::isUnset($request->platform)) {
            $query['platform'] = $request->platform;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->clientToken)) {
            $realHeaders['ClientToken'] = Utils::toJSONString($headers->clientToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateProductVersionPackage',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/hosting/product-versions/' . OpenApiUtilClient::getEncodeParam($uid) . '/packages',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateProductVersionPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param string                             $uid
     * @param CreateProductVersionPackageRequest $request CreateProductVersionPackageRequest
     *
     * @return CreateProductVersionPackageResponse CreateProductVersionPackageResponse
     */
    public function createProductVersionPackage($uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateProductVersionPackageHeaders([]);

        return $this->createProductVersionPackageWithOptions($uid, $request, $headers, $runtime);
    }

    /**
     * @param string         $uid
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteEnvironmentResponse
     */
    public function deleteEnvironmentWithOptions($uid, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteEnvironment',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/environments/' . OpenApiUtilClient::getEncodeParam($uid) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $uid
     *
     * @return DeleteEnvironmentResponse
     */
    public function deleteEnvironment($uid)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteEnvironmentWithOptions($uid, $headers, $runtime);
    }

    /**
     * @param string         $uid
     * @param string         $licenseUID
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteEnvironmentLicenseResponse
     */
    public function deleteEnvironmentLicenseWithOptions($uid, $licenseUID, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteEnvironmentLicense',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/environments/' . OpenApiUtilClient::getEncodeParam($uid) . '/licenses/' . OpenApiUtilClient::getEncodeParam($licenseUID) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteEnvironmentLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $uid
     * @param string $licenseUID
     *
     * @return DeleteEnvironmentLicenseResponse
     */
    public function deleteEnvironmentLicense($uid, $licenseUID)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteEnvironmentLicenseWithOptions($uid, $licenseUID, $headers, $runtime);
    }

    /**
     * @param string         $uid
     * @param string         $nodeUID
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteEnvironmentNodeResponse
     */
    public function deleteEnvironmentNodeWithOptions($uid, $nodeUID, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteEnvironmentNode',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/environments/' . OpenApiUtilClient::getEncodeParam($uid) . '/nodes/' . OpenApiUtilClient::getEncodeParam($nodeUID) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteEnvironmentNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $uid
     * @param string $nodeUID
     *
     * @return DeleteEnvironmentNodeResponse
     */
    public function deleteEnvironmentNode($uid, $nodeUID)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteEnvironmentNodeWithOptions($uid, $nodeUID, $headers, $runtime);
    }

    /**
     * @param string         $uid
     * @param string         $productVersionUID
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteEnvironmentProductVersionResponse
     */
    public function deleteEnvironmentProductVersionWithOptions($uid, $productVersionUID, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteEnvironmentProductVersion',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/environments/' . OpenApiUtilClient::getEncodeParam($uid) . '/product-versions/' . OpenApiUtilClient::getEncodeParam($productVersionUID) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteEnvironmentProductVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $uid
     * @param string $productVersionUID
     *
     * @return DeleteEnvironmentProductVersionResponse
     */
    public function deleteEnvironmentProductVersion($uid, $productVersionUID)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteEnvironmentProductVersionWithOptions($uid, $productVersionUID, $headers, $runtime);
    }

    /**
     * @param string         $uid
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteProductResponse
     */
    public function deleteProductWithOptions($uid, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteProduct',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/integration/api/v2/products/' . OpenApiUtilClient::getEncodeParam($uid) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $uid
     *
     * @return DeleteProductResponse
     */
    public function deleteProduct($uid)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProductWithOptions($uid, $headers, $runtime);
    }

    /**
     * @param string         $uid
     * @param string         $relationUID
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteProductComponentVersionResponse
     */
    public function deleteProductComponentVersionWithOptions($uid, $relationUID, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteProductComponentVersion',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/product-versions/' . OpenApiUtilClient::getEncodeParam($uid) . '/relations/' . OpenApiUtilClient::getEncodeParam($relationUID) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteProductComponentVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $uid
     * @param string $relationUID
     *
     * @return DeleteProductComponentVersionResponse
     */
    public function deleteProductComponentVersion($uid, $relationUID)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProductComponentVersionWithOptions($uid, $relationUID, $headers, $runtime);
    }

    /**
     * @param string                             $configUID
     * @param DeleteProductInstanceConfigRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteProductInstanceConfigResponse
     */
    public function deleteProductInstanceConfigWithOptions($configUID, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->environmentUID)) {
            $query['environmentUID'] = $request->environmentUID;
        }
        if (!Utils::isUnset($request->productVersionUID)) {
            $query['productVersionUID'] = $request->productVersionUID;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteProductInstanceConfig',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/product-instances/configs/' . OpenApiUtilClient::getEncodeParam($configUID) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteProductInstanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                             $configUID
     * @param DeleteProductInstanceConfigRequest $request
     *
     * @return DeleteProductInstanceConfigResponse
     */
    public function deleteProductInstanceConfig($configUID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProductInstanceConfigWithOptions($configUID, $request, $headers, $runtime);
    }

    /**
     * @param string         $uid
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteProductVersionResponse
     */
    public function deleteProductVersionWithOptions($uid, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteProductVersion',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/product-versions/' . OpenApiUtilClient::getEncodeParam($uid) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteProductVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $uid
     *
     * @return DeleteProductVersionResponse
     */
    public function deleteProductVersion($uid)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProductVersionWithOptions($uid, $headers, $runtime);
    }

    /**
     * @param string         $uid
     * @param string         $configUID
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteProductVersionConfigResponse
     */
    public function deleteProductVersionConfigWithOptions($uid, $configUID, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteProductVersionConfig',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/product-versions/' . OpenApiUtilClient::getEncodeParam($uid) . '/configs/' . OpenApiUtilClient::getEncodeParam($configUID) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteProductVersionConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $uid
     * @param string $configUID
     *
     * @return DeleteProductVersionConfigResponse
     */
    public function deleteProductVersionConfig($uid, $configUID)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProductVersionConfigWithOptions($uid, $configUID, $headers, $runtime);
    }

    /**
     * @param GenerateProductInstanceDeploymentConfigRequest $request
     * @param string[]                                       $headers
     * @param RuntimeOptions                                 $runtime
     *
     * @return GenerateProductInstanceDeploymentConfigResponse
     */
    public function generateProductInstanceDeploymentConfigWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->environmentUID)) {
            $body['environmentUID'] = $request->environmentUID;
        }
        if (!Utils::isUnset($request->packageContentType)) {
            $body['packageContentType'] = $request->packageContentType;
        }
        if (!Utils::isUnset($request->packageUID)) {
            $body['packageUID'] = $request->packageUID;
        }
        if (!Utils::isUnset($request->productVersionUID)) {
            $body['productVersionUID'] = $request->productVersionUID;
        }
        if (!Utils::isUnset($request->productVersionUIDList)) {
            $body['productVersionUIDList'] = $request->productVersionUIDList;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GenerateProductInstanceDeploymentConfig',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/product-instances/package-configs',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GenerateProductInstanceDeploymentConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GenerateProductInstanceDeploymentConfigRequest $request
     *
     * @return GenerateProductInstanceDeploymentConfigResponse
     */
    public function generateProductInstanceDeploymentConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generateProductInstanceDeploymentConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string         $uid
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetComponentResponse
     */
    public function getComponentWithOptions($uid, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetComponent',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/components/' . OpenApiUtilClient::getEncodeParam($uid) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetComponentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $uid
     *
     * @return GetComponentResponse
     */
    public function getComponent($uid)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getComponentWithOptions($uid, $headers, $runtime);
    }

    /**
     * @param string                     $uid
     * @param string                     $versionUID
     * @param GetComponentVersionRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetComponentVersionResponse
     */
    public function getComponentVersionWithOptions($uid, $versionUID, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->withoutChartContent)) {
            $query['withoutChartContent'] = $request->withoutChartContent;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetComponentVersion',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/integration/api/v2/components/' . OpenApiUtilClient::getEncodeParam($uid) . '/versions/' . OpenApiUtilClient::getEncodeParam($versionUID) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetComponentVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                     $uid
     * @param string                     $versionUID
     * @param GetComponentVersionRequest $request
     *
     * @return GetComponentVersionResponse
     */
    public function getComponentVersion($uid, $versionUID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getComponentVersionWithOptions($uid, $versionUID, $request, $headers, $runtime);
    }

    /**
     * @param string         $uid
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetDeliverableResponse
     */
    public function getDeliverableWithOptions($uid, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetDeliverable',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/delivery/deliverables/' . OpenApiUtilClient::getEncodeParam($uid) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDeliverableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $uid
     *
     * @return GetDeliverableResponse
     */
    public function getDeliverable($uid)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDeliverableWithOptions($uid, $headers, $runtime);
    }

    /**
     * @param string         $uid
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetDeliveryPackageResponse
     */
    public function getDeliveryPackageWithOptions($uid, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetDeliveryPackage',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/delivery/delivery-packages/' . OpenApiUtilClient::getEncodeParam($uid) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDeliveryPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $uid
     *
     * @return GetDeliveryPackageResponse
     */
    public function getDeliveryPackage($uid)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDeliveryPackageWithOptions($uid, $headers, $runtime);
    }

    /**
     * @param string                $uid
     * @param GetEnvironmentRequest $tmpReq
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetEnvironmentResponse
     */
    public function getEnvironmentWithOptions($uid, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetEnvironmentShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->options)) {
            $request->optionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->options, 'options', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->optionsShrink)) {
            $query['options'] = $request->optionsShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEnvironment',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/environments/' . OpenApiUtilClient::getEncodeParam($uid) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                $uid
     * @param GetEnvironmentRequest $request
     *
     * @return GetEnvironmentResponse
     */
    public function getEnvironment($uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEnvironmentWithOptions($uid, $request, $headers, $runtime);
    }

    /**
     * @param GetEnvironmentDeliveryInstanceRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return GetEnvironmentDeliveryInstanceResponse
     */
    public function getEnvironmentDeliveryInstanceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterUID)) {
            $query['clusterUID'] = $request->clusterUID;
        }
        if (!Utils::isUnset($request->envUID)) {
            $query['envUID'] = $request->envUID;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEnvironmentDeliveryInstance',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/delivery/delivery-instances',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetEnvironmentDeliveryInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetEnvironmentDeliveryInstanceRequest $request
     *
     * @return GetEnvironmentDeliveryInstanceResponse
     */
    public function getEnvironmentDeliveryInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEnvironmentDeliveryInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string                       $uid
     * @param string                       $licenseUID
     * @param GetEnvironmentLicenseRequest $tmpReq
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetEnvironmentLicenseResponse
     */
    public function getEnvironmentLicenseWithOptions($uid, $licenseUID, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetEnvironmentLicenseShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->options)) {
            $request->optionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->options, 'options', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->optionsShrink)) {
            $query['options'] = $request->optionsShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEnvironmentLicense',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/environments/' . OpenApiUtilClient::getEncodeParam($uid) . '/licenses/' . OpenApiUtilClient::getEncodeParam($licenseUID) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetEnvironmentLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                       $uid
     * @param string                       $licenseUID
     * @param GetEnvironmentLicenseRequest $request
     *
     * @return GetEnvironmentLicenseResponse
     */
    public function getEnvironmentLicense($uid, $licenseUID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEnvironmentLicenseWithOptions($uid, $licenseUID, $request, $headers, $runtime);
    }

    /**
     * @param string         $uid
     * @param string         $nodeUID
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetEnvironmentNodeResponse
     */
    public function getEnvironmentNodeWithOptions($uid, $nodeUID, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetEnvironmentNode',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/environments/' . OpenApiUtilClient::getEncodeParam($uid) . '/nodes/' . OpenApiUtilClient::getEncodeParam($nodeUID) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetEnvironmentNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $uid
     * @param string $nodeUID
     *
     * @return GetEnvironmentNodeResponse
     */
    public function getEnvironmentNode($uid, $nodeUID)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEnvironmentNodeWithOptions($uid, $nodeUID, $headers, $runtime);
    }

    /**
     * @param string         $componentReferenceUID
     * @param string         $uid
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetFoundationComponentReferenceResponse
     */
    public function getFoundationComponentReferenceWithOptions($componentReferenceUID, $uid, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetFoundationComponentReference',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/foundation-references/' . OpenApiUtilClient::getEncodeParam($uid) . '/components/' . OpenApiUtilClient::getEncodeParam($componentReferenceUID) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFoundationComponentReferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $componentReferenceUID
     * @param string $uid
     *
     * @return GetFoundationComponentReferenceResponse
     */
    public function getFoundationComponentReference($componentReferenceUID, $uid)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFoundationComponentReferenceWithOptions($componentReferenceUID, $uid, $headers, $runtime);
    }

    /**
     * @param string         $uid
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetFoundationReferenceResponse
     */
    public function getFoundationReferenceWithOptions($uid, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetFoundationReference',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/foundation-references/' . OpenApiUtilClient::getEncodeParam($uid) . '/info',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFoundationReferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $uid
     *
     * @return GetFoundationReferenceResponse
     */
    public function getFoundationReference($uid)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFoundationReferenceWithOptions($uid, $headers, $runtime);
    }

    /**
     * @param string         $uid
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetFoundationVersionResponse
     */
    public function getFoundationVersionWithOptions($uid, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetFoundationVersion',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/foundation/versions/' . OpenApiUtilClient::getEncodeParam($uid) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFoundationVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $uid
     *
     * @return GetFoundationVersionResponse
     */
    public function getFoundationVersion($uid)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFoundationVersionWithOptions($uid, $headers, $runtime);
    }

    /**
     * @param string            $uid
     * @param GetProductRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetProductResponse
     */
    public function getProductWithOptions($uid, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->withIconURL)) {
            $query['withIconURL'] = $request->withIconURL;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetProduct',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/products/' . OpenApiUtilClient::getEncodeParam($uid) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string            $uid
     * @param GetProductRequest $request
     *
     * @return GetProductResponse
     */
    public function getProduct($uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProductWithOptions($uid, $request, $headers, $runtime);
    }

    /**
     * @param string         $relationUID
     * @param string         $uid
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetProductComponentVersionResponse
     */
    public function getProductComponentVersionWithOptions($relationUID, $uid, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetProductComponentVersion',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/integration/api/v2/product-versions/' . OpenApiUtilClient::getEncodeParam($uid) . '/relations/' . OpenApiUtilClient::getEncodeParam($relationUID) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetProductComponentVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $relationUID
     * @param string $uid
     *
     * @return GetProductComponentVersionResponse
     */
    public function getProductComponentVersion($relationUID, $uid)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProductComponentVersionWithOptions($relationUID, $uid, $headers, $runtime);
    }

    /**
     * @param string                      $deploymentUID
     * @param GetProductDeploymentRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetProductDeploymentResponse
     */
    public function getProductDeploymentWithOptions($deploymentUID, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->environmentUID)) {
            $query['environmentUID'] = $request->environmentUID;
        }
        if (!Utils::isUnset($request->productVersionUID)) {
            $query['productVersionUID'] = $request->productVersionUID;
        }
        if (!Utils::isUnset($request->withParamConfig)) {
            $query['withParamConfig'] = $request->withParamConfig;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetProductDeployment',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/product-instances/deployments/' . OpenApiUtilClient::getEncodeParam($deploymentUID) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetProductDeploymentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                      $deploymentUID
     * @param GetProductDeploymentRequest $request
     *
     * @return GetProductDeploymentResponse
     */
    public function getProductDeployment($deploymentUID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProductDeploymentWithOptions($deploymentUID, $request, $headers, $runtime);
    }

    /**
     * @param string                   $uid
     * @param GetProductVersionRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetProductVersionResponse
     */
    public function getProductVersionWithOptions($uid, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->withDocumentationURL)) {
            $query['withDocumentationURL'] = $request->withDocumentationURL;
        }
        if (!Utils::isUnset($request->withExtendResourceURL)) {
            $query['withExtendResourceURL'] = $request->withExtendResourceURL;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetProductVersion',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/product-versions/' . OpenApiUtilClient::getEncodeParam($uid) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetProductVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                   $uid
     * @param GetProductVersionRequest $request
     *
     * @return GetProductVersionResponse
     */
    public function getProductVersion($uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProductVersionWithOptions($uid, $request, $headers, $runtime);
    }

    /**
     * @param string                              $uid
     * @param string                              $versionUID
     * @param GetProductVersionDifferencesRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return GetProductVersionDifferencesResponse
     */
    public function getProductVersionDifferencesWithOptions($uid, $versionUID, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->preVersionUID)) {
            $query['preVersionUID'] = $request->preVersionUID;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetProductVersionDifferences',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/integration/api/v2/products/' . OpenApiUtilClient::getEncodeParam($uid) . '/versions/' . OpenApiUtilClient::getEncodeParam($versionUID) . '/differences',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetProductVersionDifferencesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                              $uid
     * @param string                              $versionUID
     * @param GetProductVersionDifferencesRequest $request
     *
     * @return GetProductVersionDifferencesResponse
     */
    public function getProductVersionDifferences($uid, $versionUID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProductVersionDifferencesWithOptions($uid, $versionUID, $request, $headers, $runtime);
    }

    /**
     * @param string                          $uid
     * @param GetProductVersionPackageRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return GetProductVersionPackageResponse
     */
    public function getProductVersionPackageWithOptions($uid, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->foundationReferenceUID)) {
            $query['foundationReferenceUID'] = $request->foundationReferenceUID;
        }
        if (!Utils::isUnset($request->oldFoundationReferenceUID)) {
            $query['oldFoundationReferenceUID'] = $request->oldFoundationReferenceUID;
        }
        if (!Utils::isUnset($request->oldProductVersionUID)) {
            $query['oldProductVersionUID'] = $request->oldProductVersionUID;
        }
        if (!Utils::isUnset($request->packageContentType)) {
            $query['packageContentType'] = $request->packageContentType;
        }
        if (!Utils::isUnset($request->packageType)) {
            $query['packageType'] = $request->packageType;
        }
        if (!Utils::isUnset($request->packageUID)) {
            $query['packageUID'] = $request->packageUID;
        }
        if (!Utils::isUnset($request->platform)) {
            $query['platform'] = $request->platform;
        }
        if (!Utils::isUnset($request->withURL)) {
            $query['withURL'] = $request->withURL;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetProductVersionPackage',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/hosting/product-versions/' . OpenApiUtilClient::getEncodeParam($uid) . '/packages',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetProductVersionPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                          $uid
     * @param GetProductVersionPackageRequest $request
     *
     * @return GetProductVersionPackageResponse
     */
    public function getProductVersionPackage($uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProductVersionPackageWithOptions($uid, $request, $headers, $runtime);
    }

    /**
     * @param GetResourceSnapshotRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetResourceSnapshotResponse
     */
    public function getResourceSnapshotWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->productVersionUID)) {
            $query['productVersionUID'] = $request->productVersionUID;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourceSnapshot',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/resource-snapshots',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetResourceSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetResourceSnapshotRequest $request
     *
     * @return GetResourceSnapshotResponse
     */
    public function getResourceSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getResourceSnapshotWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetWorkflowStatusRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetWorkflowStatusResponse
     */
    public function getWorkflowStatusWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workflowType)) {
            $query['workflowType'] = $request->workflowType;
        }
        if (!Utils::isUnset($request->xuid)) {
            $query['xuid'] = $request->xuid;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetWorkflowStatus',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/workflows/status',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetWorkflowStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetWorkflowStatusRequest $request
     *
     * @return GetWorkflowStatusResponse
     */
    public function getWorkflowStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkflowStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string                         $uid
     * @param InitEnvironmentResourceRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return InitEnvironmentResourceResponse
     */
    public function initEnvironmentResourceWithOptions($uid, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessKeyID)) {
            $body['accessKeyID'] = $request->accessKeyID;
        }
        if (!Utils::isUnset($request->accessKeySecret)) {
            $body['accessKeySecret'] = $request->accessKeySecret;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $body['securityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InitEnvironmentResource',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/environments/' . OpenApiUtilClient::getEncodeParam($uid) . '/resources',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InitEnvironmentResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                         $uid
     * @param InitEnvironmentResourceRequest $request
     *
     * @return InitEnvironmentResourceResponse
     */
    public function initEnvironmentResource($uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->initEnvironmentResourceWithOptions($uid, $request, $headers, $runtime);
    }

    /**
     * @param string                       $uid
     * @param ListComponentVersionsRequest $tmpReq
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListComponentVersionsResponse
     */
    public function listComponentVersionsWithOptions($uid, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListComponentVersionsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->platforms)) {
            $request->platformsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->platforms, 'platforms', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->pageNum)) {
            $query['pageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->platformsShrink)) {
            $query['platforms'] = $request->platformsShrink;
        }
        if (!Utils::isUnset($request->version)) {
            $query['version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListComponentVersions',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/components/' . OpenApiUtilClient::getEncodeParam($uid) . '/versions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListComponentVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                       $uid
     * @param ListComponentVersionsRequest $request
     *
     * @return ListComponentVersionsResponse
     */
    public function listComponentVersions($uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listComponentVersionsWithOptions($uid, $request, $headers, $runtime);
    }

    /**
     * @param ListComponentsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListComponentsResponse
     */
    public function listComponentsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['category'] = $request->category;
        }
        if (!Utils::isUnset($request->fuzzy)) {
            $query['fuzzy'] = $request->fuzzy;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['pageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->public_)) {
            $query['public'] = $request->public_;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListComponents',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/components',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListComponentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListComponentsRequest $request
     *
     * @return ListComponentsResponse
     */
    public function listComponents($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listComponentsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string         $uid
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListDeliveryInstanceChangeRecordsResponse
     */
    public function listDeliveryInstanceChangeRecordsWithOptions($uid, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListDeliveryInstanceChangeRecords',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/delivery/delivery-instances/' . OpenApiUtilClient::getEncodeParam($uid) . '/delivery-records',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDeliveryInstanceChangeRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $uid
     *
     * @return ListDeliveryInstanceChangeRecordsResponse
     */
    public function listDeliveryInstanceChangeRecords($uid)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDeliveryInstanceChangeRecordsWithOptions($uid, $headers, $runtime);
    }

    /**
     * @param ListDeliveryPackageRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListDeliveryPackageResponse
     */
    public function listDeliveryPackageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deliverableUID)) {
            $query['deliverableUID'] = $request->deliverableUID;
        }
        if (!Utils::isUnset($request->platform)) {
            $query['platform'] = $request->platform;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDeliveryPackage',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/delivery/delivery-packages',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDeliveryPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDeliveryPackageRequest $request
     *
     * @return ListDeliveryPackageResponse
     */
    public function listDeliveryPackage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDeliveryPackageWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string                         $uid
     * @param ListEnvironmentLicensesRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListEnvironmentLicensesResponse
     */
    public function listEnvironmentLicensesWithOptions($uid, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNum)) {
            $query['pageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->scope)) {
            $query['scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEnvironmentLicenses',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/environments/' . OpenApiUtilClient::getEncodeParam($uid) . '/licenses',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListEnvironmentLicensesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                         $uid
     * @param ListEnvironmentLicensesRequest $request
     *
     * @return ListEnvironmentLicensesResponse
     */
    public function listEnvironmentLicenses($uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEnvironmentLicensesWithOptions($uid, $request, $headers, $runtime);
    }

    /**
     * @param string                      $uid
     * @param ListEnvironmentNodesRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListEnvironmentNodesResponse
     */
    public function listEnvironmentNodesWithOptions($uid, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNum)) {
            $query['pageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEnvironmentNodes',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/environments/' . OpenApiUtilClient::getEncodeParam($uid) . '/nodes',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListEnvironmentNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                      $uid
     * @param ListEnvironmentNodesRequest $request
     *
     * @return ListEnvironmentNodesResponse
     */
    public function listEnvironmentNodes($uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEnvironmentNodesWithOptions($uid, $request, $headers, $runtime);
    }

    /**
     * @param string         $uid
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListEnvironmentTunnelsResponse
     */
    public function listEnvironmentTunnelsWithOptions($uid, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListEnvironmentTunnels',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/environments/' . OpenApiUtilClient::getEncodeParam($uid) . '/tunnels',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListEnvironmentTunnelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $uid
     *
     * @return ListEnvironmentTunnelsResponse
     */
    public function listEnvironmentTunnels($uid)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEnvironmentTunnelsWithOptions($uid, $headers, $runtime);
    }

    /**
     * @param ListEnvironmentsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListEnvironmentsResponse
     */
    public function listEnvironmentsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterUID)) {
            $query['clusterUID'] = $request->clusterUID;
        }
        if (!Utils::isUnset($request->endpoint)) {
            $query['endpoint'] = $request->endpoint;
        }
        if (!Utils::isUnset($request->foundationType)) {
            $query['foundationType'] = $request->foundationType;
        }
        if (!Utils::isUnset($request->fuzzy)) {
            $query['fuzzy'] = $request->fuzzy;
        }
        if (!Utils::isUnset($request->instanceStatus)) {
            $query['instanceStatus'] = $request->instanceStatus;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['pageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        if (!Utils::isUnset($request->vendorType)) {
            $query['vendorType'] = $request->vendorType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEnvironments',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/environments',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListEnvironmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListEnvironmentsRequest $request
     *
     * @return ListEnvironmentsResponse
     */
    public function listEnvironments($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEnvironmentsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string                                 $uid
     * @param ListFoundationComponentVersionsRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return ListFoundationComponentVersionsResponse
     */
    public function listFoundationComponentVersionsWithOptions($uid, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->onlyEnabled)) {
            $query['onlyEnabled'] = $request->onlyEnabled;
        }
        if (!Utils::isUnset($request->parentComponentRelationUID)) {
            $query['parentComponentRelationUID'] = $request->parentComponentRelationUID;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFoundationComponentVersions',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/foundation/versions/' . OpenApiUtilClient::getEncodeParam($uid) . '/component-versions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFoundationComponentVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                                 $uid
     * @param ListFoundationComponentVersionsRequest $request
     *
     * @return ListFoundationComponentVersionsResponse
     */
    public function listFoundationComponentVersions($uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFoundationComponentVersionsWithOptions($uid, $request, $headers, $runtime);
    }

    /**
     * @param ListFoundationReferenceComponentsRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return ListFoundationReferenceComponentsResponse
     */
    public function listFoundationReferenceComponentsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->foundationReferenceUID)) {
            $query['foundationReferenceUID'] = $request->foundationReferenceUID;
        }
        if (!Utils::isUnset($request->foundationVersionUID)) {
            $query['foundationVersionUID'] = $request->foundationVersionUID;
        }
        if (!Utils::isUnset($request->onlyEnabled)) {
            $query['onlyEnabled'] = $request->onlyEnabled;
        }
        if (!Utils::isUnset($request->parentComponentReferenceUID)) {
            $query['parentComponentReferenceUID'] = $request->parentComponentReferenceUID;
        }
        if (!Utils::isUnset($request->productVersionUID)) {
            $query['productVersionUID'] = $request->productVersionUID;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFoundationReferenceComponents',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/foundation-references/component-versions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFoundationReferenceComponentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFoundationReferenceComponentsRequest $request
     *
     * @return ListFoundationReferenceComponentsResponse
     */
    public function listFoundationReferenceComponents($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFoundationReferenceComponentsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListFoundationVersionsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListFoundationVersionsResponse
     */
    public function listFoundationVersionsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->onlyDefault)) {
            $query['onlyDefault'] = $request->onlyDefault;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['pageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortDirect)) {
            $query['sortDirect'] = $request->sortDirect;
        }
        if (!Utils::isUnset($request->sortKey)) {
            $query['sortKey'] = $request->sortKey;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        if (!Utils::isUnset($request->version)) {
            $query['version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFoundationVersions',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/foundation/versions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFoundationVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFoundationVersionsRequest $request
     *
     * @return ListFoundationVersionsResponse
     */
    public function listFoundationVersions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFoundationVersionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string                              $uid
     * @param ListProductComponentVersionsRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return ListProductComponentVersionsResponse
     */
    public function listProductComponentVersionsWithOptions($uid, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['category'] = $request->category;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['pageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->releaseName)) {
            $query['releaseName'] = $request->releaseName;
        }
        if (!Utils::isUnset($request->sortDirect)) {
            $query['sortDirect'] = $request->sortDirect;
        }
        if (!Utils::isUnset($request->sortKey)) {
            $query['sortKey'] = $request->sortKey;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProductComponentVersions',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/product-versions/' . OpenApiUtilClient::getEncodeParam($uid) . '/component-versions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProductComponentVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                              $uid
     * @param ListProductComponentVersionsRequest $request
     *
     * @return ListProductComponentVersionsResponse
     */
    public function listProductComponentVersions($uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProductComponentVersionsWithOptions($uid, $request, $headers, $runtime);
    }

    /**
     * @param ListProductDeploymentsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListProductDeploymentsResponse
     */
    public function listProductDeploymentsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->environmentUID)) {
            $query['environmentUID'] = $request->environmentUID;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['pageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productVersionUID)) {
            $query['productVersionUID'] = $request->productVersionUID;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProductDeployments',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/product-instances/deployments',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProductDeploymentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListProductDeploymentsRequest $request
     *
     * @return ListProductDeploymentsResponse
     */
    public function listProductDeployments($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProductDeploymentsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string                         $uid
     * @param ListProductEnvironmentsRequest $tmpReq
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListProductEnvironmentsResponse
     */
    public function listProductEnvironmentsWithOptions($uid, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListProductEnvironmentsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->options)) {
            $request->optionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->options, 'options', 'json');
        }
        if (!Utils::isUnset($tmpReq->platforms)) {
            $request->platformsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->platforms, 'platforms', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->compatibleProductVersionUID)) {
            $query['compatibleProductVersionUID'] = $request->compatibleProductVersionUID;
        }
        if (!Utils::isUnset($request->envType)) {
            $query['envType'] = $request->envType;
        }
        if (!Utils::isUnset($request->optionsShrink)) {
            $query['options'] = $request->optionsShrink;
        }
        if (!Utils::isUnset($request->platformsShrink)) {
            $query['platforms'] = $request->platformsShrink;
        }
        if (!Utils::isUnset($request->productVersionSpecUID)) {
            $query['productVersionSpecUID'] = $request->productVersionSpecUID;
        }
        if (!Utils::isUnset($request->productVersionUID)) {
            $query['productVersionUID'] = $request->productVersionUID;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProductEnvironments',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/hosting/products/' . OpenApiUtilClient::getEncodeParam($uid) . '/environments',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProductEnvironmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                         $uid
     * @param ListProductEnvironmentsRequest $request
     *
     * @return ListProductEnvironmentsResponse
     */
    public function listProductEnvironments($uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProductEnvironmentsWithOptions($uid, $request, $headers, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param string         $uid
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListProductFoundationReferencesResponse ListProductFoundationReferencesResponse
     */
    public function listProductFoundationReferencesWithOptions($uid, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListProductFoundationReferences',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/product-versions/' . OpenApiUtilClient::getEncodeParam($uid) . '/foundation-references',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProductFoundationReferencesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param string $uid
     *
     * @return ListProductFoundationReferencesResponse ListProductFoundationReferencesResponse
     */
    public function listProductFoundationReferences($uid)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProductFoundationReferencesWithOptions($uid, $headers, $runtime);
    }

    /**
     * @param ListProductInstanceConfigsRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ListProductInstanceConfigsResponse
     */
    public function listProductInstanceConfigsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->componentReleaseName)) {
            $query['componentReleaseName'] = $request->componentReleaseName;
        }
        if (!Utils::isUnset($request->environmentUID)) {
            $query['environmentUID'] = $request->environmentUID;
        }
        if (!Utils::isUnset($request->fuzzy)) {
            $query['fuzzy'] = $request->fuzzy;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['pageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->paramType)) {
            $query['paramType'] = $request->paramType;
        }
        if (!Utils::isUnset($request->parameter)) {
            $query['parameter'] = $request->parameter;
        }
        if (!Utils::isUnset($request->productVersionUID)) {
            $query['productVersionUID'] = $request->productVersionUID;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProductInstanceConfigs',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/product-instances/configs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProductInstanceConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListProductInstanceConfigsRequest $request
     *
     * @return ListProductInstanceConfigsResponse
     */
    public function listProductInstanceConfigs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProductInstanceConfigsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListProductInstancesRequest $tmpReq
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListProductInstancesResponse
     */
    public function listProductInstancesWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListProductInstancesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->options)) {
            $request->optionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->options, 'options', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->envUID)) {
            $query['envUID'] = $request->envUID;
        }
        if (!Utils::isUnset($request->optionsShrink)) {
            $query['options'] = $request->optionsShrink;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['pageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productVersionUID)) {
            $query['productVersionUID'] = $request->productVersionUID;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProductInstances',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/product-instances',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProductInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListProductInstancesRequest $request
     *
     * @return ListProductInstancesResponse
     */
    public function listProductInstances($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProductInstancesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string                           $uid
     * @param ListProductVersionConfigsRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListProductVersionConfigsResponse
     */
    public function listProductVersionConfigsWithOptions($uid, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->componentReleaseName)) {
            $query['componentReleaseName'] = $request->componentReleaseName;
        }
        if (!Utils::isUnset($request->configType)) {
            $query['configType'] = $request->configType;
        }
        if (!Utils::isUnset($request->fuzzy)) {
            $query['fuzzy'] = $request->fuzzy;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['pageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->parameter)) {
            $query['parameter'] = $request->parameter;
        }
        if (!Utils::isUnset($request->scope)) {
            $query['scope'] = $request->scope;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProductVersionConfigs',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/product-versions/' . OpenApiUtilClient::getEncodeParam($uid) . '/configs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProductVersionConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                           $uid
     * @param ListProductVersionConfigsRequest $request
     *
     * @return ListProductVersionConfigsResponse
     */
    public function listProductVersionConfigs($uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProductVersionConfigsWithOptions($uid, $request, $headers, $runtime);
    }

    /**
     * @param ListProductVersionsRequest $tmpReq
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListProductVersionsResponse
     */
    public function listProductVersionsWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListProductVersionsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->platforms)) {
            $request->platformsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->platforms, 'platforms', 'json');
        }
        if (!Utils::isUnset($tmpReq->supportedFoundationTypes)) {
            $request->supportedFoundationTypesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->supportedFoundationTypes, 'supportedFoundationTypes', 'json');
        }
        if (!Utils::isUnset($tmpReq->tag)) {
            $request->tagShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'tag', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->fuzzy)) {
            $query['fuzzy'] = $request->fuzzy;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['pageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->platformsShrink)) {
            $query['platforms'] = $request->platformsShrink;
        }
        if (!Utils::isUnset($request->productName)) {
            $query['productName'] = $request->productName;
        }
        if (!Utils::isUnset($request->productUID)) {
            $query['productUID'] = $request->productUID;
        }
        if (!Utils::isUnset($request->released)) {
            $query['released'] = $request->released;
        }
        if (!Utils::isUnset($request->supportedFoundationTypesShrink)) {
            $query['supportedFoundationTypes'] = $request->supportedFoundationTypesShrink;
        }
        if (!Utils::isUnset($request->tagShrink)) {
            $query['tag'] = $request->tagShrink;
        }
        if (!Utils::isUnset($request->version)) {
            $query['version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProductVersions',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/product-versions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProductVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListProductVersionsRequest $request
     *
     * @return ListProductVersionsResponse
     */
    public function listProductVersions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProductVersionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListProductsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListProductsResponse
     */
    public function listProductsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['description'] = $request->description;
        }
        if (!Utils::isUnset($request->fuzzy)) {
            $query['fuzzy'] = $request->fuzzy;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['pageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProducts',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/products',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProductsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListProductsRequest $request
     *
     * @return ListProductsResponse
     */
    public function listProducts($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProductsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string                      $stepName
     * @param string                      $taskName
     * @param ListWorkflowTaskLogsRequest $tmpReq
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListWorkflowTaskLogsResponse
     */
    public function listWorkflowTaskLogsWithOptions($stepName, $taskName, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListWorkflowTaskLogsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filterValues)) {
            $request->filterValuesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filterValues, 'filterValues', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->filterValuesShrink)) {
            $query['filterValues'] = $request->filterValuesShrink;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['orderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['pageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->workflowType)) {
            $query['workflowType'] = $request->workflowType;
        }
        if (!Utils::isUnset($request->xuid)) {
            $query['xuid'] = $request->xuid;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWorkflowTaskLogs',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/workflows/steps/' . OpenApiUtilClient::getEncodeParam($stepName) . '/tasks/' . OpenApiUtilClient::getEncodeParam($taskName) . '/logs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListWorkflowTaskLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                      $stepName
     * @param string                      $taskName
     * @param ListWorkflowTaskLogsRequest $request
     *
     * @return ListWorkflowTaskLogsResponse
     */
    public function listWorkflowTaskLogs($stepName, $taskName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkflowTaskLogsWithOptions($stepName, $taskName, $request, $headers, $runtime);
    }

    /**
     * @param string                      $uid
     * @param PutEnvironmentTunnelRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return PutEnvironmentTunnelResponse
     */
    public function putEnvironmentTunnelWithOptions($uid, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->tunnelConfig)) {
            $body['tunnelConfig'] = $request->tunnelConfig;
        }
        if (!Utils::isUnset($request->tunnelType)) {
            $body['tunnelType'] = $request->tunnelType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutEnvironmentTunnel',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/environments/' . OpenApiUtilClient::getEncodeParam($uid) . '/tunnels',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PutEnvironmentTunnelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                      $uid
     * @param PutEnvironmentTunnelRequest $request
     *
     * @return PutEnvironmentTunnelResponse
     */
    public function putEnvironmentTunnel($uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putEnvironmentTunnelWithOptions($uid, $request, $headers, $runtime);
    }

    /**
     * @param PutProductInstanceConfigRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return PutProductInstanceConfigResponse
     */
    public function putProductInstanceConfigWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->componentUID)) {
            $body['componentUID'] = $request->componentUID;
        }
        if (!Utils::isUnset($request->componentVersionUID)) {
            $body['componentVersionUID'] = $request->componentVersionUID;
        }
        if (!Utils::isUnset($request->configUID)) {
            $body['configUID'] = $request->configUID;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->environmentUID)) {
            $body['environmentUID'] = $request->environmentUID;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->parentComponentName)) {
            $body['parentComponentName'] = $request->parentComponentName;
        }
        if (!Utils::isUnset($request->parentComponentVersionUID)) {
            $body['parentComponentVersionUID'] = $request->parentComponentVersionUID;
        }
        if (!Utils::isUnset($request->productVersionUID)) {
            $body['productVersionUID'] = $request->productVersionUID;
        }
        if (!Utils::isUnset($request->releaseName)) {
            $body['releaseName'] = $request->releaseName;
        }
        if (!Utils::isUnset($request->scope)) {
            $body['scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->value)) {
            $body['value'] = $request->value;
        }
        if (!Utils::isUnset($request->valueType)) {
            $body['valueType'] = $request->valueType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutProductInstanceConfig',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/product-instances/configs',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PutProductInstanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PutProductInstanceConfigRequest $request
     *
     * @return PutProductInstanceConfigResponse
     */
    public function putProductInstanceConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putProductInstanceConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string         $uid
     * @param string         $foundationReferenceUID
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return SetEnvironmentFoundationReferenceResponse
     */
    public function setEnvironmentFoundationReferenceWithOptions($uid, $foundationReferenceUID, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'SetEnvironmentFoundationReference',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/environments/' . OpenApiUtilClient::getEncodeParam($uid) . '/foundation-references/' . OpenApiUtilClient::getEncodeParam($foundationReferenceUID) . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SetEnvironmentFoundationReferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $uid
     * @param string $foundationReferenceUID
     *
     * @return SetEnvironmentFoundationReferenceResponse
     */
    public function setEnvironmentFoundationReference($uid, $foundationReferenceUID)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->setEnvironmentFoundationReferenceWithOptions($uid, $foundationReferenceUID, $headers, $runtime);
    }

    /**
     * @param string                   $uid
     * @param UpdateDeliverableRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateDeliverableResponse
     */
    public function updateDeliverableWithOptions($uid, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->foundation)) {
            $body['foundation'] = $request->foundation;
        }
        if (!Utils::isUnset($request->products)) {
            $body['products'] = $request->products;
        }
        if (!Utils::isUnset($request->status)) {
            $body['status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDeliverable',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/delivery/deliverables/' . OpenApiUtilClient::getEncodeParam($uid) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateDeliverableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                   $uid
     * @param UpdateDeliverableRequest $request
     *
     * @return UpdateDeliverableResponse
     */
    public function updateDeliverable($uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDeliverableWithOptions($uid, $request, $headers, $runtime);
    }

    /**
     * @param string                        $uid
     * @param UpdateDeliveryInstanceRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateDeliveryInstanceResponse
     */
    public function updateDeliveryInstanceWithOptions($uid, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->deliverableConfigUID)) {
            $body['deliverableConfigUID'] = $request->deliverableConfigUID;
        }
        if (!Utils::isUnset($request->deliverableUID)) {
            $body['deliverableUID'] = $request->deliverableUID;
        }
        if (!Utils::isUnset($request->desc)) {
            $body['desc'] = $request->desc;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDeliveryInstance',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/delivery/delivery-instances/' . OpenApiUtilClient::getEncodeParam($uid) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateDeliveryInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                        $uid
     * @param UpdateDeliveryInstanceRequest $request
     *
     * @return UpdateDeliveryInstanceResponse
     */
    public function updateDeliveryInstance($uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDeliveryInstanceWithOptions($uid, $request, $headers, $runtime);
    }

    /**
     * @param string                   $uid
     * @param UpdateEnvironmentRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateEnvironmentResponse
     */
    public function updateEnvironmentWithOptions($uid, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->advancedConfigs)) {
            $body['advancedConfigs'] = $request->advancedConfigs;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->location)) {
            $body['location'] = $request->location;
        }
        if (!Utils::isUnset($request->vendorConfig)) {
            $body['vendorConfig'] = $request->vendorConfig;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateEnvironment',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/environments/' . OpenApiUtilClient::getEncodeParam($uid) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                   $uid
     * @param UpdateEnvironmentRequest $request
     *
     * @return UpdateEnvironmentResponse
     */
    public function updateEnvironment($uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateEnvironmentWithOptions($uid, $request, $headers, $runtime);
    }

    /**
     * @param string                       $uid
     * @param string                       $nodeUID
     * @param UpdateEnvironmentNodeRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateEnvironmentNodeResponse
     */
    public function updateEnvironmentNodeWithOptions($uid, $nodeUID, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->applicationDisk)) {
            $body['applicationDisk'] = $request->applicationDisk;
        }
        if (!Utils::isUnset($request->etcdDisk)) {
            $body['etcdDisk'] = $request->etcdDisk;
        }
        if (!Utils::isUnset($request->labels)) {
            $body['labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->rootPassword)) {
            $body['rootPassword'] = $request->rootPassword;
        }
        if (!Utils::isUnset($request->taints)) {
            $body['taints'] = $request->taints;
        }
        if (!Utils::isUnset($request->tridentSystemDisk)) {
            $body['tridentSystemDisk'] = $request->tridentSystemDisk;
        }
        if (!Utils::isUnset($request->tridentSystemSizeDisk)) {
            $body['tridentSystemSizeDisk'] = $request->tridentSystemSizeDisk;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateEnvironmentNode',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/environments/' . OpenApiUtilClient::getEncodeParam($uid) . '/nodes/' . OpenApiUtilClient::getEncodeParam($nodeUID) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateEnvironmentNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                       $uid
     * @param string                       $nodeUID
     * @param UpdateEnvironmentNodeRequest $request
     *
     * @return UpdateEnvironmentNodeResponse
     */
    public function updateEnvironmentNode($uid, $nodeUID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateEnvironmentNodeWithOptions($uid, $nodeUID, $request, $headers, $runtime);
    }

    /**
     * @param string                                 $uid
     * @param UpdateEnvironmentProductVersionRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateEnvironmentProductVersionResponse
     */
    public function updateEnvironmentProductVersionWithOptions($uid, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->oldProductVersionSpecUID)) {
            $body['oldProductVersionSpecUID'] = $request->oldProductVersionSpecUID;
        }
        if (!Utils::isUnset($request->oldProductVersionUID)) {
            $body['oldProductVersionUID'] = $request->oldProductVersionUID;
        }
        if (!Utils::isUnset($request->productVersionSpecUID)) {
            $body['productVersionSpecUID'] = $request->productVersionSpecUID;
        }
        if (!Utils::isUnset($request->productVersionUID)) {
            $body['productVersionUID'] = $request->productVersionUID;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateEnvironmentProductVersion',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/environments/' . OpenApiUtilClient::getEncodeParam($uid) . '/product-versions',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateEnvironmentProductVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                                 $uid
     * @param UpdateEnvironmentProductVersionRequest $request
     *
     * @return UpdateEnvironmentProductVersionResponse
     */
    public function updateEnvironmentProductVersion($uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateEnvironmentProductVersionWithOptions($uid, $request, $headers, $runtime);
    }

    /**
     * @param string                                    $uid
     * @param string                                    $componentReferenceUID
     * @param UpdateFoundationComponentReferenceRequest $request
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return UpdateFoundationComponentReferenceResponse
     */
    public function updateFoundationComponentReferenceWithOptions($uid, $componentReferenceUID, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->componentOrchestrationValues)) {
            $body['componentOrchestrationValues'] = $request->componentOrchestrationValues;
        }
        if (!Utils::isUnset($request->enable)) {
            $body['enable'] = $request->enable;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateFoundationComponentReference',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/foundation-references/' . OpenApiUtilClient::getEncodeParam($uid) . '/components/' . OpenApiUtilClient::getEncodeParam($componentReferenceUID) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateFoundationComponentReferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                                    $uid
     * @param string                                    $componentReferenceUID
     * @param UpdateFoundationComponentReferenceRequest $request
     *
     * @return UpdateFoundationComponentReferenceResponse
     */
    public function updateFoundationComponentReference($uid, $componentReferenceUID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFoundationComponentReferenceWithOptions($uid, $componentReferenceUID, $request, $headers, $runtime);
    }

    /**
     * @param string                           $uid
     * @param UpdateFoundationReferenceRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateFoundationReferenceResponse
     */
    public function updateFoundationReferenceWithOptions($uid, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clusterConfig)) {
            $body['clusterConfig'] = $request->clusterConfig;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateFoundationReference',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/foundation-references/' . OpenApiUtilClient::getEncodeParam($uid) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateFoundationReferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                           $uid
     * @param UpdateFoundationReferenceRequest $request
     *
     * @return UpdateFoundationReferenceResponse
     */
    public function updateFoundationReference($uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFoundationReferenceWithOptions($uid, $request, $headers, $runtime);
    }

    /**
     * @param string               $uid
     * @param UpdateProductRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProductResponse
     */
    public function updateProductWithOptions($uid, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->categories)) {
            $body['categories'] = $request->categories;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['displayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->vendor)) {
            $body['vendor'] = $request->vendor;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateProduct',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/products/' . OpenApiUtilClient::getEncodeParam($uid) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string               $uid
     * @param UpdateProductRequest $request
     *
     * @return UpdateProductResponse
     */
    public function updateProduct($uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProductWithOptions($uid, $request, $headers, $runtime);
    }

    /**
     * @param string                               $uid
     * @param string                               $relationUID
     * @param UpdateProductComponentVersionRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateProductComponentVersionResponse
     */
    public function updateProductComponentVersionWithOptions($uid, $relationUID, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->componentOrchestrationValues)) {
            $body['componentOrchestrationValues'] = $request->componentOrchestrationValues;
        }
        if (!Utils::isUnset($request->componentSpecificationUid)) {
            $body['componentSpecificationUid'] = $request->componentSpecificationUid;
        }
        if (!Utils::isUnset($request->componentSpecificationValues)) {
            $body['componentSpecificationValues'] = $request->componentSpecificationValues;
        }
        if (!Utils::isUnset($request->enable)) {
            $body['enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->newComponentVersionUID)) {
            $body['newComponentVersionUID'] = $request->newComponentVersionUID;
        }
        if (!Utils::isUnset($request->policy)) {
            $body['policy'] = $request->policy;
        }
        if (!Utils::isUnset($request->releaseName)) {
            $body['releaseName'] = $request->releaseName;
        }
        if (!Utils::isUnset($request->unsetComponentVersionSpec)) {
            $body['unsetComponentVersionSpec'] = $request->unsetComponentVersionSpec;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateProductComponentVersion',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/product-versions/' . OpenApiUtilClient::getEncodeParam($uid) . '/relations/' . OpenApiUtilClient::getEncodeParam($relationUID) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateProductComponentVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                               $uid
     * @param string                               $relationUID
     * @param UpdateProductComponentVersionRequest $request
     *
     * @return UpdateProductComponentVersionResponse
     */
    public function updateProductComponentVersion($uid, $relationUID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProductComponentVersionWithOptions($uid, $relationUID, $request, $headers, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param string                                $uid
     * @param UpdateProductFoundationVersionRequest $request UpdateProductFoundationVersionRequest
     * @param string[]                              $headers map
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateProductFoundationVersionResponse UpdateProductFoundationVersionResponse
     */
    public function updateProductFoundationVersionWithOptions($uid, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->foundationVersionUID)) {
            $body['foundationVersionUID'] = $request->foundationVersionUID;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateProductFoundationVersion',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/product-versions/' . OpenApiUtilClient::getEncodeParam($uid) . '/foundation',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateProductFoundationVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param string                                $uid
     * @param UpdateProductFoundationVersionRequest $request UpdateProductFoundationVersionRequest
     *
     * @return UpdateProductFoundationVersionResponse UpdateProductFoundationVersionResponse
     */
    public function updateProductFoundationVersion($uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProductFoundationVersionWithOptions($uid, $request, $headers, $runtime);
    }

    /**
     * @param string                      $uid
     * @param UpdateProductVersionRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateProductVersionResponse
     */
    public function updateProductVersionWithOptions($uid, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->action)) {
            $query['action'] = $request->action;
        }
        $body = [];
        if (!Utils::isUnset($request->continuousIntegration)) {
            $body['continuousIntegration'] = $request->continuousIntegration;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->entry)) {
            $body['entry'] = $request->entry;
        }
        if (!Utils::isUnset($request->timeout)) {
            $body['timeout'] = $request->timeout;
        }
        if (!Utils::isUnset($request->version)) {
            $body['version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateProductVersion',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/product-versions/' . OpenApiUtilClient::getEncodeParam($uid) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateProductVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                      $uid
     * @param UpdateProductVersionRequest $request
     *
     * @return UpdateProductVersionResponse
     */
    public function updateProductVersion($uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProductVersionWithOptions($uid, $request, $headers, $runtime);
    }

    /**
     * @param string                            $uid
     * @param string                            $configUID
     * @param UpdateProductVersionConfigRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateProductVersionConfigResponse
     */
    public function updateProductVersionConfigWithOptions($uid, $configUID, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->componentVersionUID)) {
            $body['componentVersionUID'] = $request->componentVersionUID;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->parentComponentVersionUID)) {
            $body['parentComponentVersionUID'] = $request->parentComponentVersionUID;
        }
        if (!Utils::isUnset($request->value)) {
            $body['value'] = $request->value;
        }
        if (!Utils::isUnset($request->valueType)) {
            $body['valueType'] = $request->valueType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateProductVersionConfig',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/product-versions/' . OpenApiUtilClient::getEncodeParam($uid) . '/configs/' . OpenApiUtilClient::getEncodeParam($configUID) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateProductVersionConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                            $uid
     * @param string                            $configUID
     * @param UpdateProductVersionConfigRequest $request
     *
     * @return UpdateProductVersionConfigResponse
     */
    public function updateProductVersionConfig($uid, $configUID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProductVersionConfigWithOptions($uid, $configUID, $request, $headers, $runtime);
    }

    /**
     * @param string                           $uid
     * @param ValidateEnvironmentTunnelRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ValidateEnvironmentTunnelResponse
     */
    public function validateEnvironmentTunnelWithOptions($uid, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->tunnelConfig)) {
            $body['tunnelConfig'] = $request->tunnelConfig;
        }
        if (!Utils::isUnset($request->tunnelType)) {
            $body['tunnelType'] = $request->tunnelType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ValidateEnvironmentTunnel',
            'version'     => '2021-07-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/environments/' . OpenApiUtilClient::getEncodeParam($uid) . '/tunnels/validation',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ValidateEnvironmentTunnelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                           $uid
     * @param ValidateEnvironmentTunnelRequest $request
     *
     * @return ValidateEnvironmentTunnelResponse
     */
    public function validateEnvironmentTunnel($uid, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->validateEnvironmentTunnelWithOptions($uid, $request, $headers, $runtime);
    }
}
