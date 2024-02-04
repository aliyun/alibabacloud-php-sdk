<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\ConvertInstanceRequest;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\ConvertInstanceResponse;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\ConvertPrepayInstanceRequest;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\ConvertPrepayInstanceResponse;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\CreateNamespaceRequest;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\CreateNamespaceResponse;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\DeleteNamespaceRequest;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\DeleteNamespaceResponse;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\DescribeInstancesRequest;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\DescribeInstancesResponse;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\DescribeNamespacesRequest;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\DescribeNamespacesResponse;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\DescribeSupportedRegionsResponse;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\DescribeSupportedZonesRequest;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\DescribeSupportedZonesResponse;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\ModifyPrepayInstanceSpecRequest;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\ModifyPrepayInstanceSpecResponse;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\ModifyPrepayNamespaceSpecRequest;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\ModifyPrepayNamespaceSpecResponse;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\QueryConvertInstancePriceRequest;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\QueryConvertInstancePriceResponse;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\QueryConvertPrepayInstancePriceRequest;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\QueryConvertPrepayInstancePriceResponse;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\QueryCreateInstancePriceRequest;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\QueryCreateInstancePriceResponse;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\QueryModifyInstancePriceRequest;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\QueryModifyInstancePriceResponse;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\QueryRenewInstancePriceRequest;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\QueryRenewInstancePriceResponse;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\RenewInstanceRequest;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\RenewInstanceResponse;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\UntagResourcesResponse;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Foasconsole extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('foasconsole', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ConvertInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ConvertInstanceResponse
     */
    public function convertInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->convertPostpayInstanceRequest)) {
            $bodyFlat['ConvertPostpayInstanceRequest'] = $request->convertPostpayInstanceRequest;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ConvertInstance',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConvertInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConvertInstanceRequest $request
     *
     * @return ConvertInstanceResponse
     */
    public function convertInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->convertInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ConvertPrepayInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ConvertPrepayInstanceResponse
     */
    public function convertPrepayInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->convertPrepayInstanceRequest)) {
            $bodyFlat['ConvertPrepayInstanceRequest'] = $request->convertPrepayInstanceRequest;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ConvertPrepayInstance',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConvertPrepayInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConvertPrepayInstanceRequest $request
     *
     * @return ConvertPrepayInstanceResponse
     */
    public function convertPrepayInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->convertPrepayInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->createInstanceRequest)) {
            $bodyFlat['CreateInstanceRequest'] = $request->createInstanceRequest;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateInstance',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateInstanceRequest $request
     *
     * @return CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateNamespaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateNamespaceResponse
     */
    public function createNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->createNamespaceRequest)) {
            $bodyFlat['CreateNamespaceRequest'] = $request->createNamespaceRequest;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateNamespace',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateNamespaceRequest $request
     *
     * @return CreateNamespaceResponse
     */
    public function createNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNamespaceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->deleteInstanceRequest)) {
            $bodyFlat['DeleteInstanceRequest'] = $request->deleteInstanceRequest;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteInstance',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteInstanceRequest $request
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteNamespaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteNamespaceResponse
     */
    public function deleteNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->deleteNamespaceRequest)) {
            $bodyFlat['DeleteNamespaceRequest'] = $request->deleteNamespaceRequest;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteNamespace',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteNamespaceRequest $request
     *
     * @return DeleteNamespaceResponse
     */
    public function deleteNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNamespaceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstancesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstances',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstancesRequest $request
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeNamespacesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeNamespacesResponse
     */
    public function describeNamespacesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNamespaces',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNamespacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeNamespacesRequest $request
     *
     * @return DescribeNamespacesResponse
     */
    public function describeNamespaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNamespacesWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeSupportedRegionsResponse
     */
    public function describeSupportedRegionsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeSupportedRegions',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSupportedRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeSupportedRegionsResponse
     */
    public function describeSupportedRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSupportedRegionsWithOptions($runtime);
    }

    /**
     * @param DescribeSupportedZonesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSupportedZonesResponse
     */
    public function describeSupportedZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSupportedZones',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSupportedZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSupportedZonesRequest $request
     *
     * @return DescribeSupportedZonesResponse
     */
    public function describeSupportedZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSupportedZonesWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
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
     * @deprecated : ModifyPrepayInstanceSpec is deprecated, please use foasconsole::2019-06-01::ModifyInstanceSpec instead.
     *   *
     * Deprecated
     *
     * @param ModifyPrepayInstanceSpecRequest $request ModifyPrepayInstanceSpecRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyPrepayInstanceSpecResponse ModifyPrepayInstanceSpecResponse
     */
    public function modifyPrepayInstanceSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->modifyPrepayInstanceSpecRequest)) {
            $bodyFlat['ModifyPrepayInstanceSpecRequest'] = $request->modifyPrepayInstanceSpecRequest;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyPrepayInstanceSpec',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyPrepayInstanceSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated : ModifyPrepayInstanceSpec is deprecated, please use foasconsole::2019-06-01::ModifyInstanceSpec instead.
     *   *
     * Deprecated
     *
     * @param ModifyPrepayInstanceSpecRequest $request ModifyPrepayInstanceSpecRequest
     *
     * @return ModifyPrepayInstanceSpecResponse ModifyPrepayInstanceSpecResponse
     */
    public function modifyPrepayInstanceSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPrepayInstanceSpecWithOptions($request, $runtime);
    }

    /**
     * @deprecated : ModifyPrepayNamespaceSpec is deprecated, please use foasconsole::2019-06-01::ModifyNamespaceSpec instead.
     *   *
     * Deprecated
     *
     * @param ModifyPrepayNamespaceSpecRequest $request ModifyPrepayNamespaceSpecRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyPrepayNamespaceSpecResponse ModifyPrepayNamespaceSpecResponse
     */
    public function modifyPrepayNamespaceSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->modifyPrepayNamespaceSpecRequest)) {
            $bodyFlat['ModifyPrepayNamespaceSpecRequest'] = $request->modifyPrepayNamespaceSpecRequest;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyPrepayNamespaceSpec',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyPrepayNamespaceSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated : ModifyPrepayNamespaceSpec is deprecated, please use foasconsole::2019-06-01::ModifyNamespaceSpec instead.
     *   *
     * Deprecated
     *
     * @param ModifyPrepayNamespaceSpecRequest $request ModifyPrepayNamespaceSpecRequest
     *
     * @return ModifyPrepayNamespaceSpecResponse ModifyPrepayNamespaceSpecResponse
     */
    public function modifyPrepayNamespaceSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPrepayNamespaceSpecWithOptions($request, $runtime);
    }

    /**
     * @param QueryConvertInstancePriceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryConvertInstancePriceResponse
     */
    public function queryConvertInstancePriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->convertPostpayInstanceRequest)) {
            $bodyFlat['ConvertPostpayInstanceRequest'] = $request->convertPostpayInstanceRequest;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryConvertInstancePrice',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryConvertInstancePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryConvertInstancePriceRequest $request
     *
     * @return QueryConvertInstancePriceResponse
     */
    public function queryConvertInstancePrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryConvertInstancePriceWithOptions($request, $runtime);
    }

    /**
     * @param QueryConvertPrepayInstancePriceRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return QueryConvertPrepayInstancePriceResponse
     */
    public function queryConvertPrepayInstancePriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->convertPrepayInstanceRequest)) {
            $bodyFlat['ConvertPrepayInstanceRequest'] = $request->convertPrepayInstanceRequest;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryConvertPrepayInstancePrice',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryConvertPrepayInstancePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryConvertPrepayInstancePriceRequest $request
     *
     * @return QueryConvertPrepayInstancePriceResponse
     */
    public function queryConvertPrepayInstancePrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryConvertPrepayInstancePriceWithOptions($request, $runtime);
    }

    /**
     * @param QueryCreateInstancePriceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryCreateInstancePriceResponse
     */
    public function queryCreateInstancePriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->createInstanceRequest)) {
            $bodyFlat['CreateInstanceRequest'] = $request->createInstanceRequest;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryCreateInstancePrice',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCreateInstancePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryCreateInstancePriceRequest $request
     *
     * @return QueryCreateInstancePriceResponse
     */
    public function queryCreateInstancePrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCreateInstancePriceWithOptions($request, $runtime);
    }

    /**
     * @param QueryModifyInstancePriceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryModifyInstancePriceResponse
     */
    public function queryModifyInstancePriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->modifyPrepayInstanceSpecRequest)) {
            $bodyFlat['ModifyPrepayInstanceSpecRequest'] = $request->modifyPrepayInstanceSpecRequest;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryModifyInstancePrice',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryModifyInstancePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryModifyInstancePriceRequest $request
     *
     * @return QueryModifyInstancePriceResponse
     */
    public function queryModifyInstancePrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryModifyInstancePriceWithOptions($request, $runtime);
    }

    /**
     * @param QueryRenewInstancePriceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryRenewInstancePriceResponse
     */
    public function queryRenewInstancePriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->renewInstanceRequest)) {
            $bodyFlat['RenewInstanceRequest'] = $request->renewInstanceRequest;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryRenewInstancePrice',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryRenewInstancePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryRenewInstancePriceRequest $request
     *
     * @return QueryRenewInstancePriceResponse
     */
    public function queryRenewInstancePrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRenewInstancePriceWithOptions($request, $runtime);
    }

    /**
     * @param RenewInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RenewInstanceResponse
     */
    public function renewInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->renewInstanceRequest)) {
            $bodyFlat['RenewInstanceRequest'] = $request->renewInstanceRequest;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RenewInstance',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenewInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RenewInstanceRequest $request
     *
     * @return RenewInstanceResponse
     */
    public function renewInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewInstanceWithOptions($request, $runtime);
    }

    /**
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
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
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
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
