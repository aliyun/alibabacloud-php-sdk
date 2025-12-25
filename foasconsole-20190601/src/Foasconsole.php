<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601;

use AlibabaCloud\Dara\Models\RuntimeOptions;
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
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * 按量付费转包年包月.
     *
     * @param request - ConvertInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConvertInstanceResponse
     *
     * @param ConvertInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ConvertInstanceResponse
     */
    public function convertInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->convertPostpayInstanceRequest) {
            @$bodyFlat['ConvertPostpayInstanceRequest'] = $request->convertPostpayInstanceRequest;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ConvertInstance',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConvertInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 按量付费转包年包月.
     *
     * @param request - ConvertInstanceRequest
     *
     * @returns ConvertInstanceResponse
     *
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
     * 包年包月转按量付费.
     *
     * @param request - ConvertPrepayInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConvertPrepayInstanceResponse
     *
     * @param ConvertPrepayInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ConvertPrepayInstanceResponse
     */
    public function convertPrepayInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->convertPrepayInstanceRequest) {
            @$bodyFlat['ConvertPrepayInstanceRequest'] = $request->convertPrepayInstanceRequest;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ConvertPrepayInstance',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConvertPrepayInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 包年包月转按量付费.
     *
     * @param request - ConvertPrepayInstanceRequest
     *
     * @returns ConvertPrepayInstanceResponse
     *
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
     * 创建实例.
     *
     * @param request - CreateInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceResponse
     *
     * @param CreateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->createInstanceRequest) {
            @$bodyFlat['CreateInstanceRequest'] = $request->createInstanceRequest;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateInstance',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建实例.
     *
     * @param request - CreateInstanceRequest
     *
     * @returns CreateInstanceResponse
     *
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
     * 创建命名空间.
     *
     * @param request - CreateNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateNamespaceResponse
     *
     * @param CreateNamespaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateNamespaceResponse
     */
    public function createNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->createNamespaceRequest) {
            @$bodyFlat['CreateNamespaceRequest'] = $request->createNamespaceRequest;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateNamespace',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建命名空间.
     *
     * @param request - CreateNamespaceRequest
     *
     * @returns CreateNamespaceResponse
     *
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
     * 释放按量付费的实例.
     *
     * @param request - DeleteInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteInstanceResponse
     *
     * @param DeleteInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->deleteInstanceRequest) {
            @$bodyFlat['DeleteInstanceRequest'] = $request->deleteInstanceRequest;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteInstance',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 释放按量付费的实例.
     *
     * @param request - DeleteInstanceRequest
     *
     * @returns DeleteInstanceResponse
     *
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
     * 删除namespace.
     *
     * @param request - DeleteNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNamespaceResponse
     *
     * @param DeleteNamespaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteNamespaceResponse
     */
    public function deleteNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->deleteNamespaceRequest) {
            @$bodyFlat['DeleteNamespaceRequest'] = $request->deleteNamespaceRequest;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteNamespace',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除namespace.
     *
     * @param request - DeleteNamespaceRequest
     *
     * @returns DeleteNamespaceResponse
     *
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
     * 扩容/缩容.
     *
     * @param request - DescribeInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstancesResponse
     *
     * @param DescribeInstancesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstances',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 扩容/缩容.
     *
     * @param request - DescribeInstancesRequest
     *
     * @returns DescribeInstancesResponse
     *
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
     * namespace列表.
     *
     * @param request - DescribeNamespacesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNamespacesResponse
     *
     * @param DescribeNamespacesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeNamespacesResponse
     */
    public function describeNamespacesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNamespaces',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNamespacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * namespace列表.
     *
     * @param request - DescribeNamespacesRequest
     *
     * @returns DescribeNamespacesResponse
     *
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
     * 获取支持的region列表.
     *
     * @param request - DescribeSupportedRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSupportedRegionsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeSupportedRegionsResponse
     */
    public function describeSupportedRegionsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeSupportedRegions',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSupportedRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取支持的region列表.
     *
     * @returns DescribeSupportedRegionsResponse
     *
     * @return DescribeSupportedRegionsResponse
     */
    public function describeSupportedRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSupportedRegionsWithOptions($runtime);
    }

    /**
     * 获取支持的zoneId列表.
     *
     * @param request - DescribeSupportedZonesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSupportedZonesResponse
     *
     * @param DescribeSupportedZonesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSupportedZonesResponse
     */
    public function describeSupportedZonesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSupportedZones',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSupportedZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取支持的zoneId列表.
     *
     * @param request - DescribeSupportedZonesRequest
     *
     * @returns DescribeSupportedZonesResponse
     *
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
     * 列举flinkasi标签.
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

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列举flinkasi标签.
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
     * 扩容/缩容.
     *
     * @deprecated openAPI ModifyPrepayInstanceSpec is deprecated, please use foasconsole::2019-06-01::ModifyInstanceSpec instead
     *
     * @param request - ModifyPrepayInstanceSpecRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyPrepayInstanceSpecResponse
     *
     * @param ModifyPrepayInstanceSpecRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyPrepayInstanceSpecResponse
     */
    public function modifyPrepayInstanceSpecWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->modifyPrepayInstanceSpecRequest) {
            @$bodyFlat['ModifyPrepayInstanceSpecRequest'] = $request->modifyPrepayInstanceSpecRequest;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyPrepayInstanceSpec',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyPrepayInstanceSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * 扩容/缩容.
     *
     * @deprecated openAPI ModifyPrepayInstanceSpec is deprecated, please use foasconsole::2019-06-01::ModifyInstanceSpec instead
     *
     * @param request - ModifyPrepayInstanceSpecRequest
     *
     * @returns ModifyPrepayInstanceSpecResponse
     *
     * @param ModifyPrepayInstanceSpecRequest $request
     *
     * @return ModifyPrepayInstanceSpecResponse
     */
    public function modifyPrepayInstanceSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPrepayInstanceSpecWithOptions($request, $runtime);
    }

    /**
     * 修改namespace资源分配.
     *
     * @deprecated openAPI ModifyPrepayNamespaceSpec is deprecated, please use foasconsole::2019-06-01::ModifyNamespaceSpec instead
     *
     * @param request - ModifyPrepayNamespaceSpecRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyPrepayNamespaceSpecResponse
     *
     * @param ModifyPrepayNamespaceSpecRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyPrepayNamespaceSpecResponse
     */
    public function modifyPrepayNamespaceSpecWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->modifyPrepayNamespaceSpecRequest) {
            @$bodyFlat['ModifyPrepayNamespaceSpecRequest'] = $request->modifyPrepayNamespaceSpecRequest;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyPrepayNamespaceSpec',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyPrepayNamespaceSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * 修改namespace资源分配.
     *
     * @deprecated openAPI ModifyPrepayNamespaceSpec is deprecated, please use foasconsole::2019-06-01::ModifyNamespaceSpec instead
     *
     * @param request - ModifyPrepayNamespaceSpecRequest
     *
     * @returns ModifyPrepayNamespaceSpecResponse
     *
     * @param ModifyPrepayNamespaceSpecRequest $request
     *
     * @return ModifyPrepayNamespaceSpecResponse
     */
    public function modifyPrepayNamespaceSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPrepayNamespaceSpecWithOptions($request, $runtime);
    }

    /**
     * 按量付费转包年包月询价.
     *
     * @param request - QueryConvertInstancePriceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryConvertInstancePriceResponse
     *
     * @param QueryConvertInstancePriceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryConvertInstancePriceResponse
     */
    public function queryConvertInstancePriceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->convertPostpayInstanceRequest) {
            @$bodyFlat['ConvertPostpayInstanceRequest'] = $request->convertPostpayInstanceRequest;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryConvertInstancePrice',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryConvertInstancePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 按量付费转包年包月询价.
     *
     * @param request - QueryConvertInstancePriceRequest
     *
     * @returns QueryConvertInstancePriceResponse
     *
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
     * 包年包月转按量付费询价.
     *
     * @param request - QueryConvertPrepayInstancePriceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryConvertPrepayInstancePriceResponse
     *
     * @param QueryConvertPrepayInstancePriceRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return QueryConvertPrepayInstancePriceResponse
     */
    public function queryConvertPrepayInstancePriceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->convertPrepayInstanceRequest) {
            @$bodyFlat['ConvertPrepayInstanceRequest'] = $request->convertPrepayInstanceRequest;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryConvertPrepayInstancePrice',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryConvertPrepayInstancePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 包年包月转按量付费询价.
     *
     * @param request - QueryConvertPrepayInstancePriceRequest
     *
     * @returns QueryConvertPrepayInstancePriceResponse
     *
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
     * 获取创建实例的价格
     *
     * @param request - QueryCreateInstancePriceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCreateInstancePriceResponse
     *
     * @param QueryCreateInstancePriceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryCreateInstancePriceResponse
     */
    public function queryCreateInstancePriceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->createInstanceRequest) {
            @$bodyFlat['CreateInstanceRequest'] = $request->createInstanceRequest;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryCreateInstancePrice',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCreateInstancePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取创建实例的价格
     *
     * @param request - QueryCreateInstancePriceRequest
     *
     * @returns QueryCreateInstancePriceResponse
     *
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
     * 查询付费类型为包年包月的实例修改资源规格的价格
     *
     * @param request - QueryModifyInstancePriceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryModifyInstancePriceResponse
     *
     * @param QueryModifyInstancePriceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryModifyInstancePriceResponse
     */
    public function queryModifyInstancePriceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->modifyPrepayInstanceSpecRequest) {
            @$bodyFlat['ModifyPrepayInstanceSpecRequest'] = $request->modifyPrepayInstanceSpecRequest;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryModifyInstancePrice',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryModifyInstancePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询付费类型为包年包月的实例修改资源规格的价格
     *
     * @param request - QueryModifyInstancePriceRequest
     *
     * @returns QueryModifyInstancePriceResponse
     *
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
     * 查询付费类型为包年包月的实例续费价格
     *
     * @param request - QueryRenewInstancePriceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryRenewInstancePriceResponse
     *
     * @param QueryRenewInstancePriceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryRenewInstancePriceResponse
     */
    public function queryRenewInstancePriceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->renewInstanceRequest) {
            @$bodyFlat['RenewInstanceRequest'] = $request->renewInstanceRequest;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryRenewInstancePrice',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryRenewInstancePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询付费类型为包年包月的实例续费价格
     *
     * @param request - QueryRenewInstancePriceRequest
     *
     * @returns QueryRenewInstancePriceResponse
     *
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
     * 续费.
     *
     * @param request - RenewInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenewInstanceResponse
     *
     * @param RenewInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RenewInstanceResponse
     */
    public function renewInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->renewInstanceRequest) {
            @$bodyFlat['RenewInstanceRequest'] = $request->renewInstanceRequest;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RenewInstance',
            'version' => '2019-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RenewInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 续费.
     *
     * @param request - RenewInstanceRequest
     *
     * @returns RenewInstanceResponse
     *
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
     * 打标签接口.
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

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 打标签接口.
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
     * flinkasi去标签.
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

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * flinkasi去标签.
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
