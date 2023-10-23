<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ots\V20160620;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Ots\V20160620\Models\BindInstance2VpcRequest;
use AlibabaCloud\SDK\Ots\V20160620\Models\BindInstance2VpcResponse;
use AlibabaCloud\SDK\Ots\V20160620\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\Ots\V20160620\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\Ots\V20160620\Models\DeleteTagsRequest;
use AlibabaCloud\SDK\Ots\V20160620\Models\DeleteTagsResponse;
use AlibabaCloud\SDK\Ots\V20160620\Models\GetInstanceRequest;
use AlibabaCloud\SDK\Ots\V20160620\Models\GetInstanceResponse;
use AlibabaCloud\SDK\Ots\V20160620\Models\GetOtsServiceStatusRequest;
use AlibabaCloud\SDK\Ots\V20160620\Models\GetOtsServiceStatusResponse;
use AlibabaCloud\SDK\Ots\V20160620\Models\InsertInstanceRequest;
use AlibabaCloud\SDK\Ots\V20160620\Models\InsertInstanceResponse;
use AlibabaCloud\SDK\Ots\V20160620\Models\InsertTagsRequest;
use AlibabaCloud\SDK\Ots\V20160620\Models\InsertTagsResponse;
use AlibabaCloud\SDK\Ots\V20160620\Models\ListClusterTypeRequest;
use AlibabaCloud\SDK\Ots\V20160620\Models\ListClusterTypeResponse;
use AlibabaCloud\SDK\Ots\V20160620\Models\ListInstanceRequest;
use AlibabaCloud\SDK\Ots\V20160620\Models\ListInstanceResponse;
use AlibabaCloud\SDK\Ots\V20160620\Models\ListTagsRequest;
use AlibabaCloud\SDK\Ots\V20160620\Models\ListTagsResponse;
use AlibabaCloud\SDK\Ots\V20160620\Models\ListVpcInfoByInstanceRequest;
use AlibabaCloud\SDK\Ots\V20160620\Models\ListVpcInfoByInstanceResponse;
use AlibabaCloud\SDK\Ots\V20160620\Models\ListVpcInfoByVpcRequest;
use AlibabaCloud\SDK\Ots\V20160620\Models\ListVpcInfoByVpcResponse;
use AlibabaCloud\SDK\Ots\V20160620\Models\OpenOtsServiceResponse;
use AlibabaCloud\SDK\Ots\V20160620\Models\UnbindInstance2VpcRequest;
use AlibabaCloud\SDK\Ots\V20160620\Models\UnbindInstance2VpcResponse;
use AlibabaCloud\SDK\Ots\V20160620\Models\UpdateInstanceRequest;
use AlibabaCloud\SDK\Ots\V20160620\Models\UpdateInstanceResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Ots extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ots', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param BindInstance2VpcRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return BindInstance2VpcResponse
     */
    public function bindInstance2VpcWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->instanceVpcName)) {
            $query['InstanceVpcName'] = $request->instanceVpcName;
        }
        if (!Utils::isUnset($request->network)) {
            $query['Network'] = $request->network;
        }
        if (!Utils::isUnset($request->regionNo)) {
            $query['RegionNo'] = $request->regionNo;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->virtualSwitchId)) {
            $query['VirtualSwitchId'] = $request->virtualSwitchId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindInstance2Vpc',
            'version'     => '2016-06-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindInstance2VpcResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BindInstance2VpcRequest $request
     *
     * @return BindInstance2VpcResponse
     */
    public function bindInstance2Vpc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindInstance2VpcWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteInstance',
            'version'     => '2016-06-20',
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
     * @param DeleteTagsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteTagsResponse
     */
    public function deleteTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tagInfo)) {
            $query['TagInfo'] = $request->tagInfo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTags',
            'version'     => '2016-06-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteTagsRequest $request
     *
     * @return DeleteTagsResponse
     */
    public function deleteTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTagsWithOptions($request, $runtime);
    }

    /**
     * @param GetInstanceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetInstanceResponse
     */
    public function getInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInstance',
            'version'     => '2016-06-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetInstanceRequest $request
     *
     * @return GetInstanceResponse
     */
    public function getInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceWithOptions($request, $runtime);
    }

    /**
     * @param GetOtsServiceStatusRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetOtsServiceStatusResponse
     */
    public function getOtsServiceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOtsServiceStatus',
            'version'     => '2016-06-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOtsServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOtsServiceStatusRequest $request
     *
     * @return GetOtsServiceStatusResponse
     */
    public function getOtsServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOtsServiceStatusWithOptions($request, $runtime);
    }

    /**
     * @param InsertInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return InsertInstanceResponse
     */
    public function insertInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->network)) {
            $query['Network'] = $request->network;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tagInfo)) {
            $query['TagInfo'] = $request->tagInfo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InsertInstance',
            'version'     => '2016-06-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InsertInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InsertInstanceRequest $request
     *
     * @return InsertInstanceResponse
     */
    public function insertInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->insertInstanceWithOptions($request, $runtime);
    }

    /**
     * @param InsertTagsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return InsertTagsResponse
     */
    public function insertTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tagInfo)) {
            $query['TagInfo'] = $request->tagInfo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InsertTags',
            'version'     => '2016-06-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InsertTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InsertTagsRequest $request
     *
     * @return InsertTagsResponse
     */
    public function insertTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->insertTagsWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterTypeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListClusterTypeResponse
     */
    public function listClusterTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusterType',
            'version'     => '2016-06-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClusterTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClusterTypeRequest $request
     *
     * @return ListClusterTypeResponse
     */
    public function listClusterType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterTypeWithOptions($request, $runtime);
    }

    /**
     * @param ListInstanceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListInstanceResponse
     */
    public function listInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstance',
            'version'     => '2016-06-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListInstanceRequest $request
     *
     * @return ListInstanceResponse
     */
    public function listInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ListTagsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListTagsResponse
     */
    public function listTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tagInfo)) {
            $query['TagInfo'] = $request->tagInfo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTags',
            'version'     => '2016-06-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTagsRequest $request
     *
     * @return ListTagsResponse
     */
    public function listTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagsWithOptions($request, $runtime);
    }

    /**
     * @param ListVpcInfoByInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListVpcInfoByInstanceResponse
     */
    public function listVpcInfoByInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVpcInfoByInstance',
            'version'     => '2016-06-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVpcInfoByInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListVpcInfoByInstanceRequest $request
     *
     * @return ListVpcInfoByInstanceResponse
     */
    public function listVpcInfoByInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVpcInfoByInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ListVpcInfoByVpcRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListVpcInfoByVpcResponse
     */
    public function listVpcInfoByVpcWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVpcInfoByVpc',
            'version'     => '2016-06-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVpcInfoByVpcResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListVpcInfoByVpcRequest $request
     *
     * @return ListVpcInfoByVpcResponse
     */
    public function listVpcInfoByVpc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVpcInfoByVpcWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return OpenOtsServiceResponse
     */
    public function openOtsServiceWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'OpenOtsService',
            'version'     => '2016-06-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenOtsServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return OpenOtsServiceResponse
     */
    public function openOtsService()
    {
        $runtime = new RuntimeOptions([]);

        return $this->openOtsServiceWithOptions($runtime);
    }

    /**
     * @param UnbindInstance2VpcRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UnbindInstance2VpcResponse
     */
    public function unbindInstance2VpcWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->instanceVpcName)) {
            $query['InstanceVpcName'] = $request->instanceVpcName;
        }
        if (!Utils::isUnset($request->regionNo)) {
            $query['RegionNo'] = $request->regionNo;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnbindInstance2Vpc',
            'version'     => '2016-06-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindInstance2VpcResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnbindInstance2VpcRequest $request
     *
     * @return UnbindInstance2VpcResponse
     */
    public function unbindInstance2Vpc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindInstance2VpcWithOptions($request, $runtime);
    }

    /**
     * @param UpdateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->network)) {
            $query['Network'] = $request->network;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateInstance',
            'version'     => '2016-06-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateInstanceRequest $request
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceWithOptions($request, $runtime);
    }
}
