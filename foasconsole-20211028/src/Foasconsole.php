<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ConvertInstanceRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ConvertInstanceResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ConvertInstanceShrinkRequest;
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
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ModifyPrepayInstanceSpecRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ModifyPrepayInstanceSpecResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ModifyPrepayInstanceSpecShrinkRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ModifyPrepayNamespaceSpecRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ModifyPrepayNamespaceSpecResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ModifyPrepayNamespaceSpecShrinkRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\QueryConvertInstancePriceRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\QueryConvertInstancePriceResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\QueryConvertInstancePriceShrinkRequest;
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
     * @param ConvertInstanceRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return ConvertInstanceResponse
     */
    public function convertInstanceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ConvertInstanceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->namespaceResourceSpecs)) {
            $request->namespaceResourceSpecsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->namespaceResourceSpecs, 'NamespaceResourceSpecs', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->duration)) {
            $body['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->isAutoRenew)) {
            $body['IsAutoRenew'] = $request->isAutoRenew;
        }
        if (!Utils::isUnset($request->namespaceResourceSpecsShrink)) {
            $body['NamespaceResourceSpecs'] = $request->namespaceResourceSpecsShrink;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $body['PricingCycle'] = $request->pricingCycle;
        }
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ConvertInstance',
            'version'     => '2021-10-28',
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
     * @param CreateInstanceRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateInstanceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->haResourceSpec)) {
            $request->haResourceSpecShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->haResourceSpec, 'HaResourceSpec', 'json');
        }
        if (!Utils::isUnset($tmpReq->haVSwitchIds)) {
            $request->haVSwitchIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->haVSwitchIds, 'HaVSwitchIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->resourceSpec)) {
            $request->resourceSpecShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceSpec, 'ResourceSpec', 'json');
        }
        if (!Utils::isUnset($tmpReq->storage)) {
            $request->storageShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->storage, 'Storage', 'json');
        }
        if (!Utils::isUnset($tmpReq->tag)) {
            $request->tagShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }
        if (!Utils::isUnset($tmpReq->vSwitchIds)) {
            $request->vSwitchIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->vSwitchIds, 'VSwitchIds', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->architectureType)) {
            $body['ArchitectureType'] = $request->architectureType;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $body['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $body['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->duration)) {
            $body['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->extra)) {
            $body['Extra'] = $request->extra;
        }
        if (!Utils::isUnset($request->ha)) {
            $body['Ha'] = $request->ha;
        }
        if (!Utils::isUnset($request->haResourceSpecShrink)) {
            $body['HaResourceSpec'] = $request->haResourceSpecShrink;
        }
        if (!Utils::isUnset($request->haVSwitchIdsShrink)) {
            $body['HaVSwitchIds'] = $request->haVSwitchIdsShrink;
        }
        if (!Utils::isUnset($request->haZoneId)) {
            $body['HaZoneId'] = $request->haZoneId;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $body['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->monitorType)) {
            $body['MonitorType'] = $request->monitorType;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $body['PricingCycle'] = $request->pricingCycle;
        }
        if (!Utils::isUnset($request->promotionCode)) {
            $body['PromotionCode'] = $request->promotionCode;
        }
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceSpecShrink)) {
            $body['ResourceSpec'] = $request->resourceSpecShrink;
        }
        if (!Utils::isUnset($request->storageShrink)) {
            $body['Storage'] = $request->storageShrink;
        }
        if (!Utils::isUnset($request->tagShrink)) {
            $body['Tag'] = $request->tagShrink;
        }
        if (!Utils::isUnset($request->usePromotionCode)) {
            $body['UsePromotionCode'] = $request->usePromotionCode;
        }
        if (!Utils::isUnset($request->vSwitchIdsShrink)) {
            $body['VSwitchIds'] = $request->vSwitchIdsShrink;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $body['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateInstance',
            'version'     => '2021-10-28',
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
     * @param CreateNamespaceRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return CreateNamespaceResponse
     */
    public function createNamespaceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateNamespaceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resourceSpec)) {
            $request->resourceSpecShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceSpec, 'ResourceSpec', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->ha)) {
            $body['Ha'] = $request->ha;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $body['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->resourceSpecShrink)) {
            $body['ResourceSpec'] = $request->resourceSpecShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateNamespace',
            'version'     => '2021-10-28',
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
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteInstance',
            'version'     => '2021-10-28',
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
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $body['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteNamespace',
            'version'     => '2021-10-28',
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
     * @param DescribeInstancesRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstancesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeInstancesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstances',
            'version'     => '2021-10-28',
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
     * @param DescribeNamespacesRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeNamespacesResponse
     */
    public function describeNamespacesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeNamespacesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNamespaces',
            'version'     => '2021-10-28',
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
            'version'     => '2021-10-28',
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
            'version'     => '2021-10-28',
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
            'version'     => '2021-10-28',
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
     * @deprecated : ModifyPrepayInstanceSpec is deprecated, please use foasconsole::2021-10-28::ModifyInstanceSpec instead.
     *   *
     * Deprecated
     *
     * @param ModifyPrepayInstanceSpecRequest $tmpReq  ModifyPrepayInstanceSpecRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyPrepayInstanceSpecResponse ModifyPrepayInstanceSpecResponse
     */
    public function modifyPrepayInstanceSpecWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyPrepayInstanceSpecShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->haResourceSpec)) {
            $request->haResourceSpecShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->haResourceSpec, 'HaResourceSpec', 'json');
        }
        if (!Utils::isUnset($tmpReq->haVSwitchIds)) {
            $request->haVSwitchIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->haVSwitchIds, 'HaVSwitchIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->resourceSpec)) {
            $request->resourceSpecShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceSpec, 'ResourceSpec', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->ha)) {
            $body['Ha'] = $request->ha;
        }
        if (!Utils::isUnset($request->haResourceSpecShrink)) {
            $body['HaResourceSpec'] = $request->haResourceSpecShrink;
        }
        if (!Utils::isUnset($request->haVSwitchIdsShrink)) {
            $body['HaVSwitchIds'] = $request->haVSwitchIdsShrink;
        }
        if (!Utils::isUnset($request->haZoneId)) {
            $body['HaZoneId'] = $request->haZoneId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->resourceSpecShrink)) {
            $body['ResourceSpec'] = $request->resourceSpecShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyPrepayInstanceSpec',
            'version'     => '2021-10-28',
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
     * @deprecated : ModifyPrepayInstanceSpec is deprecated, please use foasconsole::2021-10-28::ModifyInstanceSpec instead.
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
     * @deprecated : ModifyPrepayNamespaceSpec is deprecated, please use foasconsole::2021-10-28::ModifyNamespaceSpec instead.
     *   *
     * Deprecated
     *
     * @param ModifyPrepayNamespaceSpecRequest $tmpReq  ModifyPrepayNamespaceSpecRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyPrepayNamespaceSpecResponse ModifyPrepayNamespaceSpecResponse
     */
    public function modifyPrepayNamespaceSpecWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyPrepayNamespaceSpecShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resourceSpec)) {
            $request->resourceSpecShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceSpec, 'ResourceSpec', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $body['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->resourceSpecShrink)) {
            $body['ResourceSpec'] = $request->resourceSpecShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyPrepayNamespaceSpec',
            'version'     => '2021-10-28',
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
     * @deprecated : ModifyPrepayNamespaceSpec is deprecated, please use foasconsole::2021-10-28::ModifyNamespaceSpec instead.
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
     * @param QueryConvertInstancePriceRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryConvertInstancePriceResponse
     */
    public function queryConvertInstancePriceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryConvertInstancePriceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->namespaceResourceSpecs)) {
            $request->namespaceResourceSpecsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->namespaceResourceSpecs, 'NamespaceResourceSpecs', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->duration)) {
            $body['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->isAutoRenew)) {
            $body['IsAutoRenew'] = $request->isAutoRenew;
        }
        if (!Utils::isUnset($request->namespaceResourceSpecsShrink)) {
            $body['NamespaceResourceSpecs'] = $request->namespaceResourceSpecsShrink;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $body['PricingCycle'] = $request->pricingCycle;
        }
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryConvertInstancePrice',
            'version'     => '2021-10-28',
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
     * @param QueryCreateInstancePriceRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryCreateInstancePriceResponse
     */
    public function queryCreateInstancePriceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryCreateInstancePriceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->haResourceSpec)) {
            $request->haResourceSpecShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->haResourceSpec, 'HaResourceSpec', 'json');
        }
        if (!Utils::isUnset($tmpReq->resourceSpec)) {
            $request->resourceSpecShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceSpec, 'ResourceSpec', 'json');
        }
        if (!Utils::isUnset($tmpReq->storage)) {
            $request->storageShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->storage, 'Storage', 'json');
        }
        if (!Utils::isUnset($tmpReq->vSwitchIds)) {
            $request->vSwitchIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->vSwitchIds, 'VSwitchIds', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->architectureType)) {
            $body['ArchitectureType'] = $request->architectureType;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $body['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $body['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->duration)) {
            $body['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->extra)) {
            $body['Extra'] = $request->extra;
        }
        if (!Utils::isUnset($request->ha)) {
            $body['Ha'] = $request->ha;
        }
        if (!Utils::isUnset($request->haResourceSpecShrink)) {
            $body['HaResourceSpec'] = $request->haResourceSpecShrink;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $body['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $body['PricingCycle'] = $request->pricingCycle;
        }
        if (!Utils::isUnset($request->promotionCode)) {
            $body['PromotionCode'] = $request->promotionCode;
        }
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->resourceSpecShrink)) {
            $body['ResourceSpec'] = $request->resourceSpecShrink;
        }
        if (!Utils::isUnset($request->storageShrink)) {
            $body['Storage'] = $request->storageShrink;
        }
        if (!Utils::isUnset($request->usePromotionCode)) {
            $body['UsePromotionCode'] = $request->usePromotionCode;
        }
        if (!Utils::isUnset($request->vSwitchIdsShrink)) {
            $body['VSwitchIds'] = $request->vSwitchIdsShrink;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $body['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryCreateInstancePrice',
            'version'     => '2021-10-28',
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
     * @param QueryModifyInstancePriceRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryModifyInstancePriceResponse
     */
    public function queryModifyInstancePriceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryModifyInstancePriceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->haResourceSpec)) {
            $request->haResourceSpecShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->haResourceSpec, 'HaResourceSpec', 'json');
        }
        if (!Utils::isUnset($tmpReq->haVSwitchIds)) {
            $request->haVSwitchIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->haVSwitchIds, 'HaVSwitchIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->resourceSpec)) {
            $request->resourceSpecShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceSpec, 'ResourceSpec', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->ha)) {
            $body['Ha'] = $request->ha;
        }
        if (!Utils::isUnset($request->haResourceSpecShrink)) {
            $body['HaResourceSpec'] = $request->haResourceSpecShrink;
        }
        if (!Utils::isUnset($request->haVSwitchIdsShrink)) {
            $body['HaVSwitchIds'] = $request->haVSwitchIdsShrink;
        }
        if (!Utils::isUnset($request->haZoneId)) {
            $body['HaZoneId'] = $request->haZoneId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->resourceSpecShrink)) {
            $body['ResourceSpec'] = $request->resourceSpecShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryModifyInstancePrice',
            'version'     => '2021-10-28',
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
        $body = [];
        if (!Utils::isUnset($request->duration)) {
            $body['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $body['PricingCycle'] = $request->pricingCycle;
        }
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryRenewInstancePrice',
            'version'     => '2021-10-28',
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
        $body = [];
        if (!Utils::isUnset($request->duration)) {
            $body['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $body['PricingCycle'] = $request->pricingCycle;
        }
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RenewInstance',
            'version'     => '2021-10-28',
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
            'version'     => '2021-10-28',
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
            'version'     => '2021-10-28',
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
