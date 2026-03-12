<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ConvertHybridInstanceRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ConvertHybridInstanceResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ConvertHybridInstanceShrinkRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ConvertInstanceRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ConvertInstanceResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ConvertInstanceShrinkRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ConvertPrepayInstanceRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ConvertPrepayInstanceResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\CreateInstanceShrinkRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\CreateNamespaceRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\CreateNamespaceResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\CreateNamespaceShrinkRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DeleteNamespaceRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DeleteNamespaceResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesShrinkRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeNamespacesRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeNamespacesResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeNamespacesShrinkRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeSupportedRegionsResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeSupportedZonesRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeSupportedZonesResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ModifyElasticResourceSpecRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ModifyElasticResourceSpecResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ModifyElasticResourceSpecShrinkRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ModifyInstanceSpecRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ModifyInstanceSpecResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ModifyInstanceSpecShrinkRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ModifyInstanceVswitchRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ModifyInstanceVswitchResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ModifyInstanceVswitchShrinkRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ModifyNamespaceSpecV2Request;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ModifyNamespaceSpecV2Response;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ModifyNamespaceSpecV2ShrinkRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ModifyPrepayInstanceSpecRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ModifyPrepayInstanceSpecResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ModifyPrepayInstanceSpecShrinkRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ModifyPrepayNamespaceSpecRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ModifyPrepayNamespaceSpecResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ModifyPrepayNamespaceSpecShrinkRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\QueryConvertInstancePriceRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\QueryConvertInstancePriceResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\QueryConvertInstancePriceShrinkRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\QueryConvertPrepayInstancePriceRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\QueryConvertPrepayInstancePriceResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\QueryCreateInstancePriceRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\QueryCreateInstancePriceResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\QueryCreateInstancePriceShrinkRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\QueryModifyInstancePriceRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\QueryModifyInstancePriceResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\QueryModifyInstancePriceShrinkRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\QueryRenewInstancePriceRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\QueryRenewInstancePriceResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\RenewInstanceRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\RenewInstanceResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\UntagResourcesResponse;
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
     * 开通弹性计算.
     *
     * @param tmpReq - ConvertHybridInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConvertHybridInstanceResponse
     *
     * @param ConvertHybridInstanceRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return ConvertHybridInstanceResponse
     */
    public function convertHybridInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ConvertHybridInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceSpec) {
            $request->resourceSpecShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceSpec, 'ResourceSpec', 'json');
        }

        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->resourceSpecShrink) {
            @$query['ResourceSpec'] = $request->resourceSpecShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConvertHybridInstance',
            'version' => '2021-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConvertHybridInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 开通弹性计算.
     *
     * @param request - ConvertHybridInstanceRequest
     *
     * @returns ConvertHybridInstanceResponse
     *
     * @param ConvertHybridInstanceRequest $request
     *
     * @return ConvertHybridInstanceResponse
     */
    public function convertHybridInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->convertHybridInstanceWithOptions($request, $runtime);
    }

    /**
     * Changes the billing method of a workspace from pay-as-you-go to subscription.
     *
     * @param tmpReq - ConvertInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConvertInstanceResponse
     *
     * @param ConvertInstanceRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return ConvertInstanceResponse
     */
    public function convertInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ConvertInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->namespaceResourceSpecs) {
            $request->namespaceResourceSpecsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->namespaceResourceSpecs, 'NamespaceResourceSpecs', 'json');
        }

        $body = [];
        if (null !== $request->duration) {
            @$body['Duration'] = $request->duration;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->isAutoRenew) {
            @$body['IsAutoRenew'] = $request->isAutoRenew;
        }

        if (null !== $request->namespaceResourceSpecsShrink) {
            @$body['NamespaceResourceSpecs'] = $request->namespaceResourceSpecsShrink;
        }

        if (null !== $request->pricingCycle) {
            @$body['PricingCycle'] = $request->pricingCycle;
        }

        if (null !== $request->promotionCode) {
            @$body['PromotionCode'] = $request->promotionCode;
        }

        if (null !== $request->region) {
            @$body['Region'] = $request->region;
        }

        if (null !== $request->usePromotionCode) {
            @$body['UsePromotionCode'] = $request->usePromotionCode;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ConvertInstance',
            'version' => '2021-10-28',
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
     * Changes the billing method of a workspace from pay-as-you-go to subscription.
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
     * Changes the billing method of a workspace from subscription to pay-as-you-go.
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
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->region) {
            @$body['Region'] = $request->region;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ConvertPrepayInstance',
            'version' => '2021-10-28',
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
     * Changes the billing method of a workspace from subscription to pay-as-you-go.
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
     * Creates a subscription workspace or a pay-as-you-go workspace of Realtime Compute for Apache Flink.
     *
     * @param tmpReq - CreateInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceResponse
     *
     * @param CreateInstanceRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->haResourceSpec) {
            $request->haResourceSpecShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->haResourceSpec, 'HaResourceSpec', 'json');
        }

        if (null !== $tmpReq->haVSwitchIds) {
            $request->haVSwitchIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->haVSwitchIds, 'HaVSwitchIds', 'json');
        }

        if (null !== $tmpReq->resourceSpec) {
            $request->resourceSpecShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceSpec, 'ResourceSpec', 'json');
        }

        if (null !== $tmpReq->storage) {
            $request->storageShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->storage, 'Storage', 'json');
        }

        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        if (null !== $tmpReq->vSwitchIds) {
            $request->vSwitchIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->vSwitchIds, 'VSwitchIds', 'json');
        }

        $body = [];
        if (null !== $request->architectureType) {
            @$body['ArchitectureType'] = $request->architectureType;
        }

        if (null !== $request->autoRenew) {
            @$body['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->chargeType) {
            @$body['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->duration) {
            @$body['Duration'] = $request->duration;
        }

        if (null !== $request->extra) {
            @$body['Extra'] = $request->extra;
        }

        if (null !== $request->ha) {
            @$body['Ha'] = $request->ha;
        }

        if (null !== $request->haResourceSpecShrink) {
            @$body['HaResourceSpec'] = $request->haResourceSpecShrink;
        }

        if (null !== $request->haVSwitchIdsShrink) {
            @$body['HaVSwitchIds'] = $request->haVSwitchIdsShrink;
        }

        if (null !== $request->instanceName) {
            @$body['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->monitorType) {
            @$body['MonitorType'] = $request->monitorType;
        }

        if (null !== $request->pricingCycle) {
            @$body['PricingCycle'] = $request->pricingCycle;
        }

        if (null !== $request->promotionCode) {
            @$body['PromotionCode'] = $request->promotionCode;
        }

        if (null !== $request->region) {
            @$body['Region'] = $request->region;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceSpecShrink) {
            @$body['ResourceSpec'] = $request->resourceSpecShrink;
        }

        if (null !== $request->storageShrink) {
            @$body['Storage'] = $request->storageShrink;
        }

        if (null !== $request->tagShrink) {
            @$body['Tag'] = $request->tagShrink;
        }

        if (null !== $request->usePromotionCode) {
            @$body['UsePromotionCode'] = $request->usePromotionCode;
        }

        if (null !== $request->vSwitchIdsShrink) {
            @$body['VSwitchIds'] = $request->vSwitchIdsShrink;
        }

        if (null !== $request->vpcId) {
            @$body['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateInstance',
            'version' => '2021-10-28',
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
     * Creates a subscription workspace or a pay-as-you-go workspace of Realtime Compute for Apache Flink.
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
     * Creates a namespace in a Realtime Compute for Apache Flink workspace.
     *
     * @param tmpReq - CreateNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateNamespaceResponse
     *
     * @param CreateNamespaceRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return CreateNamespaceResponse
     */
    public function createNamespaceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateNamespaceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceSpec) {
            $request->resourceSpecShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceSpec, 'ResourceSpec', 'json');
        }

        $body = [];
        if (null !== $request->ha) {
            @$body['Ha'] = $request->ha;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespace) {
            @$body['Namespace'] = $request->namespace;
        }

        if (null !== $request->region) {
            @$body['Region'] = $request->region;
        }

        if (null !== $request->resourceSpecShrink) {
            @$body['ResourceSpec'] = $request->resourceSpecShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateNamespace',
            'version' => '2021-10-28',
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
     * Creates a namespace in a Realtime Compute for Apache Flink workspace.
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
     * Deletes a pay-as-you-go workspace of Realtime Compute for Apache Flink.
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
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->region) {
            @$body['Region'] = $request->region;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteInstance',
            'version' => '2021-10-28',
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
     * Deletes a pay-as-you-go workspace of Realtime Compute for Apache Flink.
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
     * Deletes a namespace.
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
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespace) {
            @$body['Namespace'] = $request->namespace;
        }

        if (null !== $request->region) {
            @$body['Region'] = $request->region;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteNamespace',
            'version' => '2021-10-28',
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
     * Deletes a namespace.
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
     * Queries the details of one or more Realtime Compute for Apache Flink workspaces.
     *
     * @param tmpReq - DescribeInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstancesResponse
     *
     * @param DescribeInstancesRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstancesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstances',
            'version' => '2021-10-28',
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
     * Queries the details of one or more Realtime Compute for Apache Flink workspaces.
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
     * Queries the information about a namespace that belongs to a workspace.
     *
     * @param tmpReq - DescribeNamespacesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNamespacesResponse
     *
     * @param DescribeNamespacesRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeNamespacesResponse
     */
    public function describeNamespacesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeNamespacesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNamespaces',
            'version' => '2021-10-28',
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
     * Queries the information about a namespace that belongs to a workspace.
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
     * Queries the regions that are available in which Realtime Compute for Apache Flink is supported.
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
            'version' => '2021-10-28',
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
     * Queries the regions that are available in which Realtime Compute for Apache Flink is supported.
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
     * Obtains the zones that are supported by Realtime Compute for Apache Flink.
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
            'version' => '2021-10-28',
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
     * Obtains the zones that are supported by Realtime Compute for Apache Flink.
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
     * Queries the tags of specified resources. You can query the key of a tag by tag value, or query the value of a tag by tag key. You can also obtain information about all tags that you use in a workspace in the console of fully managed Flink.
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
            'version' => '2021-10-28',
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
     * Queries the tags of specified resources. You can query the key of a tag by tag value, or query the value of a tag by tag key. You can also obtain information about all tags that you use in a workspace in the console of fully managed Flink.
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
     * 对按量弹性实例修改resource quota.
     *
     * @param tmpReq - ModifyElasticResourceSpecRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyElasticResourceSpecResponse
     *
     * @param ModifyElasticResourceSpecRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyElasticResourceSpecResponse
     */
    public function modifyElasticResourceSpecWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyElasticResourceSpecShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceSpec) {
            $request->resourceSpecShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceSpec, 'ResourceSpec', 'json');
        }

        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->region) {
            @$body['Region'] = $request->region;
        }

        if (null !== $request->resourceSpecShrink) {
            @$body['ResourceSpec'] = $request->resourceSpecShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyElasticResourceSpec',
            'version' => '2021-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyElasticResourceSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 对按量弹性实例修改resource quota.
     *
     * @param request - ModifyElasticResourceSpecRequest
     *
     * @returns ModifyElasticResourceSpecResponse
     *
     * @param ModifyElasticResourceSpecRequest $request
     *
     * @return ModifyElasticResourceSpecResponse
     */
    public function modifyElasticResourceSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyElasticResourceSpecWithOptions($request, $runtime);
    }

    /**
     * Scale in or out a workspace to reconfigure resources for the workspace.
     *
     * @param tmpReq - ModifyInstanceSpecRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceSpecResponse
     *
     * @param ModifyInstanceSpecRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyInstanceSpecResponse
     */
    public function modifyInstanceSpecWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyInstanceSpecShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->haResourceSpec) {
            $request->haResourceSpecShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->haResourceSpec, 'HaResourceSpec', 'json');
        }

        if (null !== $tmpReq->haVSwitchIds) {
            $request->haVSwitchIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->haVSwitchIds, 'HaVSwitchIds', 'json');
        }

        if (null !== $tmpReq->resourceSpec) {
            $request->resourceSpecShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceSpec, 'ResourceSpec', 'json');
        }

        $body = [];
        if (null !== $request->ha) {
            @$body['Ha'] = $request->ha;
        }

        if (null !== $request->haResourceSpecShrink) {
            @$body['HaResourceSpec'] = $request->haResourceSpecShrink;
        }

        if (null !== $request->haVSwitchIdsShrink) {
            @$body['HaVSwitchIds'] = $request->haVSwitchIdsShrink;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->promotionCode) {
            @$body['PromotionCode'] = $request->promotionCode;
        }

        if (null !== $request->region) {
            @$body['Region'] = $request->region;
        }

        if (null !== $request->resourceSpecShrink) {
            @$body['ResourceSpec'] = $request->resourceSpecShrink;
        }

        if (null !== $request->usePromotionCode) {
            @$body['UsePromotionCode'] = $request->usePromotionCode;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceSpec',
            'version' => '2021-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Scale in or out a workspace to reconfigure resources for the workspace.
     *
     * @param request - ModifyInstanceSpecRequest
     *
     * @returns ModifyInstanceSpecResponse
     *
     * @param ModifyInstanceSpecRequest $request
     *
     * @return ModifyInstanceSpecResponse
     */
    public function modifyInstanceSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceSpecWithOptions($request, $runtime);
    }

    /**
     * 修改集群交换机.
     *
     * @deprecated OpenAPI ModifyInstanceVswitch is deprecated
     *
     * @param tmpReq - ModifyInstanceVswitchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceVswitchResponse
     *
     * @param ModifyInstanceVswitchRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyInstanceVswitchResponse
     */
    public function modifyInstanceVswitchWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyInstanceVswitchShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->haVSwitchIds) {
            $request->haVSwitchIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->haVSwitchIds, 'HaVSwitchIds', 'json');
        }

        if (null !== $tmpReq->vSwitchIds) {
            $request->vSwitchIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->vSwitchIds, 'VSwitchIds', 'json');
        }

        $body = [];
        if (null !== $request->haVSwitchIdsShrink) {
            @$body['HaVSwitchIds'] = $request->haVSwitchIdsShrink;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->vSwitchIdsShrink) {
            @$body['VSwitchIds'] = $request->vSwitchIdsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceVswitch',
            'version' => '2021-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceVswitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * 修改集群交换机.
     *
     * @deprecated OpenAPI ModifyInstanceVswitch is deprecated
     *
     * @param request - ModifyInstanceVswitchRequest
     *
     * @returns ModifyInstanceVswitchResponse
     *
     * @param ModifyInstanceVswitchRequest $request
     *
     * @return ModifyInstanceVswitchResponse
     */
    public function modifyInstanceVswitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceVswitchWithOptions($request, $runtime);
    }

    /**
     * 修改namespace资源，包含按量和包年包月、混合计费.
     *
     * @param tmpReq - ModifyNamespaceSpecV2Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyNamespaceSpecV2Response
     *
     * @param ModifyNamespaceSpecV2Request $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyNamespaceSpecV2Response
     */
    public function modifyNamespaceSpecV2WithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyNamespaceSpecV2ShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->elasticResourceSpec) {
            $request->elasticResourceSpecShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->elasticResourceSpec, 'ElasticResourceSpec', 'json');
        }

        if (null !== $tmpReq->guaranteedResourceSpec) {
            $request->guaranteedResourceSpecShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->guaranteedResourceSpec, 'GuaranteedResourceSpec', 'json');
        }

        $query = [];
        if (null !== $request->ha) {
            @$query['Ha'] = $request->ha;
        }

        $body = [];
        if (null !== $request->elasticResourceSpecShrink) {
            @$body['ElasticResourceSpec'] = $request->elasticResourceSpecShrink;
        }

        if (null !== $request->guaranteedResourceSpecShrink) {
            @$body['GuaranteedResourceSpec'] = $request->guaranteedResourceSpecShrink;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespace) {
            @$body['Namespace'] = $request->namespace;
        }

        if (null !== $request->region) {
            @$body['Region'] = $request->region;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyNamespaceSpecV2',
            'version' => '2021-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyNamespaceSpecV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改namespace资源，包含按量和包年包月、混合计费.
     *
     * @param request - ModifyNamespaceSpecV2Request
     *
     * @returns ModifyNamespaceSpecV2Response
     *
     * @param ModifyNamespaceSpecV2Request $request
     *
     * @return ModifyNamespaceSpecV2Response
     */
    public function modifyNamespaceSpecV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNamespaceSpecV2WithOptions($request, $runtime);
    }

    /**
     * Modifies the configuration of the computing resources of a subscription fully managed Flink workspace. If the number of computing resources after the modification is less than the current number of computing resources, the scale-in operation is performed. If the number of computing resources after the modification is larger than the current number of computing resources, the scale-out operation is performed.
     *
     * @deprecated openAPI ModifyPrepayInstanceSpec is deprecated, please use foasconsole::2021-10-28::ModifyInstanceSpec instead
     *
     * @param tmpReq - ModifyPrepayInstanceSpecRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyPrepayInstanceSpecResponse
     *
     * @param ModifyPrepayInstanceSpecRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyPrepayInstanceSpecResponse
     */
    public function modifyPrepayInstanceSpecWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyPrepayInstanceSpecShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->haResourceSpec) {
            $request->haResourceSpecShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->haResourceSpec, 'HaResourceSpec', 'json');
        }

        if (null !== $tmpReq->haVSwitchIds) {
            $request->haVSwitchIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->haVSwitchIds, 'HaVSwitchIds', 'json');
        }

        if (null !== $tmpReq->resourceSpec) {
            $request->resourceSpecShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceSpec, 'ResourceSpec', 'json');
        }

        $body = [];
        if (null !== $request->ha) {
            @$body['Ha'] = $request->ha;
        }

        if (null !== $request->haResourceSpecShrink) {
            @$body['HaResourceSpec'] = $request->haResourceSpecShrink;
        }

        if (null !== $request->haVSwitchIdsShrink) {
            @$body['HaVSwitchIds'] = $request->haVSwitchIdsShrink;
        }

        if (null !== $request->haZoneId) {
            @$body['HaZoneId'] = $request->haZoneId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->region) {
            @$body['Region'] = $request->region;
        }

        if (null !== $request->resourceSpecShrink) {
            @$body['ResourceSpec'] = $request->resourceSpecShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyPrepayInstanceSpec',
            'version' => '2021-10-28',
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
     * Modifies the configuration of the computing resources of a subscription fully managed Flink workspace. If the number of computing resources after the modification is less than the current number of computing resources, the scale-in operation is performed. If the number of computing resources after the modification is larger than the current number of computing resources, the scale-out operation is performed.
     *
     * @deprecated openAPI ModifyPrepayInstanceSpec is deprecated, please use foasconsole::2021-10-28::ModifyInstanceSpec instead
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
     * Modifies the resource configurations of a namespace in a subscription workspace.
     *
     * @deprecated openAPI ModifyPrepayNamespaceSpec is deprecated, please use foasconsole::2021-10-28::ModifyNamespaceSpec instead
     *
     * @param tmpReq - ModifyPrepayNamespaceSpecRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyPrepayNamespaceSpecResponse
     *
     * @param ModifyPrepayNamespaceSpecRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyPrepayNamespaceSpecResponse
     */
    public function modifyPrepayNamespaceSpecWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyPrepayNamespaceSpecShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceSpec) {
            $request->resourceSpecShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceSpec, 'ResourceSpec', 'json');
        }

        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespace) {
            @$body['Namespace'] = $request->namespace;
        }

        if (null !== $request->region) {
            @$body['Region'] = $request->region;
        }

        if (null !== $request->resourceSpecShrink) {
            @$body['ResourceSpec'] = $request->resourceSpecShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyPrepayNamespaceSpec',
            'version' => '2021-10-28',
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
     * Modifies the resource configurations of a namespace in a subscription workspace.
     *
     * @deprecated openAPI ModifyPrepayNamespaceSpec is deprecated, please use foasconsole::2021-10-28::ModifyNamespaceSpec instead
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
     * Queries the fee of switching the billing method of a workspace from pay-as-you-go to subscription.
     *
     * @param tmpReq - QueryConvertInstancePriceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryConvertInstancePriceResponse
     *
     * @param QueryConvertInstancePriceRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryConvertInstancePriceResponse
     */
    public function queryConvertInstancePriceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryConvertInstancePriceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->namespaceResourceSpecs) {
            $request->namespaceResourceSpecsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->namespaceResourceSpecs, 'NamespaceResourceSpecs', 'json');
        }

        $body = [];
        if (null !== $request->duration) {
            @$body['Duration'] = $request->duration;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->isAutoRenew) {
            @$body['IsAutoRenew'] = $request->isAutoRenew;
        }

        if (null !== $request->namespaceResourceSpecsShrink) {
            @$body['NamespaceResourceSpecs'] = $request->namespaceResourceSpecsShrink;
        }

        if (null !== $request->pricingCycle) {
            @$body['PricingCycle'] = $request->pricingCycle;
        }

        if (null !== $request->promotionCode) {
            @$body['PromotionCode'] = $request->promotionCode;
        }

        if (null !== $request->region) {
            @$body['Region'] = $request->region;
        }

        if (null !== $request->usePromotionCode) {
            @$body['UsePromotionCode'] = $request->usePromotionCode;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryConvertInstancePrice',
            'version' => '2021-10-28',
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
     * Queries the fee of switching the billing method of a workspace from pay-as-you-go to subscription.
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
     * Obtains the estimated refund after the billing method of your Realtime Compute for Apache Flink workspace is changed from subscription to pay-as-you-go. After you change the billing method of your workspace to pay-as-you-go, bills are generated on an hourly basis.
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
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->region) {
            @$body['Region'] = $request->region;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryConvertPrepayInstancePrice',
            'version' => '2021-10-28',
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
     * Obtains the estimated refund after the billing method of your Realtime Compute for Apache Flink workspace is changed from subscription to pay-as-you-go. After you change the billing method of your workspace to pay-as-you-go, bills are generated on an hourly basis.
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
     * Queries the fee of creating a workspace.
     *
     * @param tmpReq - QueryCreateInstancePriceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCreateInstancePriceResponse
     *
     * @param QueryCreateInstancePriceRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryCreateInstancePriceResponse
     */
    public function queryCreateInstancePriceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryCreateInstancePriceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->haResourceSpec) {
            $request->haResourceSpecShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->haResourceSpec, 'HaResourceSpec', 'json');
        }

        if (null !== $tmpReq->resourceSpec) {
            $request->resourceSpecShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceSpec, 'ResourceSpec', 'json');
        }

        if (null !== $tmpReq->storage) {
            $request->storageShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->storage, 'Storage', 'json');
        }

        if (null !== $tmpReq->vSwitchIds) {
            $request->vSwitchIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->vSwitchIds, 'VSwitchIds', 'json');
        }

        $body = [];
        if (null !== $request->architectureType) {
            @$body['ArchitectureType'] = $request->architectureType;
        }

        if (null !== $request->autoRenew) {
            @$body['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->chargeType) {
            @$body['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->duration) {
            @$body['Duration'] = $request->duration;
        }

        if (null !== $request->extra) {
            @$body['Extra'] = $request->extra;
        }

        if (null !== $request->ha) {
            @$body['Ha'] = $request->ha;
        }

        if (null !== $request->haResourceSpecShrink) {
            @$body['HaResourceSpec'] = $request->haResourceSpecShrink;
        }

        if (null !== $request->instanceName) {
            @$body['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->pricingCycle) {
            @$body['PricingCycle'] = $request->pricingCycle;
        }

        if (null !== $request->promotionCode) {
            @$body['PromotionCode'] = $request->promotionCode;
        }

        if (null !== $request->region) {
            @$body['Region'] = $request->region;
        }

        if (null !== $request->resourceSpecShrink) {
            @$body['ResourceSpec'] = $request->resourceSpecShrink;
        }

        if (null !== $request->storageShrink) {
            @$body['Storage'] = $request->storageShrink;
        }

        if (null !== $request->usePromotionCode) {
            @$body['UsePromotionCode'] = $request->usePromotionCode;
        }

        if (null !== $request->vSwitchIdsShrink) {
            @$body['VSwitchIds'] = $request->vSwitchIdsShrink;
        }

        if (null !== $request->vpcId) {
            @$body['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryCreateInstancePrice',
            'version' => '2021-10-28',
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
     * Queries the fee of creating a workspace.
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
     * Queries the fee of modifying the resource configuration of a workspace.
     *
     * @param tmpReq - QueryModifyInstancePriceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryModifyInstancePriceResponse
     *
     * @param QueryModifyInstancePriceRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryModifyInstancePriceResponse
     */
    public function queryModifyInstancePriceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryModifyInstancePriceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->haResourceSpec) {
            $request->haResourceSpecShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->haResourceSpec, 'HaResourceSpec', 'json');
        }

        if (null !== $tmpReq->haVSwitchIds) {
            $request->haVSwitchIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->haVSwitchIds, 'HaVSwitchIds', 'json');
        }

        if (null !== $tmpReq->resourceSpec) {
            $request->resourceSpecShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceSpec, 'ResourceSpec', 'json');
        }

        $body = [];
        if (null !== $request->ha) {
            @$body['Ha'] = $request->ha;
        }

        if (null !== $request->haResourceSpecShrink) {
            @$body['HaResourceSpec'] = $request->haResourceSpecShrink;
        }

        if (null !== $request->haVSwitchIdsShrink) {
            @$body['HaVSwitchIds'] = $request->haVSwitchIdsShrink;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->promotionCode) {
            @$body['PromotionCode'] = $request->promotionCode;
        }

        if (null !== $request->region) {
            @$body['Region'] = $request->region;
        }

        if (null !== $request->resourceSpecShrink) {
            @$body['ResourceSpec'] = $request->resourceSpecShrink;
        }

        if (null !== $request->usePromotionCode) {
            @$body['UsePromotionCode'] = $request->usePromotionCode;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryModifyInstancePrice',
            'version' => '2021-10-28',
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
     * Queries the fee of modifying the resource configuration of a workspace.
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
     * Queries the fee of renewing a subscription workspace.
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
        if (null !== $request->duration) {
            @$body['Duration'] = $request->duration;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pricingCycle) {
            @$body['PricingCycle'] = $request->pricingCycle;
        }

        if (null !== $request->promotionCode) {
            @$body['PromotionCode'] = $request->promotionCode;
        }

        if (null !== $request->region) {
            @$body['Region'] = $request->region;
        }

        if (null !== $request->usePromotionCode) {
            @$body['UsePromotionCode'] = $request->usePromotionCode;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryRenewInstancePrice',
            'version' => '2021-10-28',
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
     * Queries the fee of renewing a subscription workspace.
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
     * Renews a subscription workspace of Realtime Compute for Apache Flink.
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
        if (null !== $request->duration) {
            @$body['Duration'] = $request->duration;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pricingCycle) {
            @$body['PricingCycle'] = $request->pricingCycle;
        }

        if (null !== $request->promotionCode) {
            @$body['PromotionCode'] = $request->promotionCode;
        }

        if (null !== $request->region) {
            @$body['Region'] = $request->region;
        }

        if (null !== $request->usePromotionCode) {
            @$body['UsePromotionCode'] = $request->usePromotionCode;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RenewInstance',
            'version' => '2021-10-28',
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
     * Renews a subscription workspace of Realtime Compute for Apache Flink.
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
     * Adds tags to specified resources.
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
            'version' => '2021-10-28',
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
     * Adds tags to specified resources.
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
     * Removes tags from specified resources.
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
            'version' => '2021-10-28',
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
     * Removes tags from specified resources.
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
