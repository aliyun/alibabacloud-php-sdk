<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Uis\V20180821;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Uis\V20180821\Models\AddHighPriorityIpRequest;
use AlibabaCloud\SDK\Uis\V20180821\Models\AddHighPriorityIpResponse;
use AlibabaCloud\SDK\Uis\V20180821\Models\AddUisNodeIpRequest;
use AlibabaCloud\SDK\Uis\V20180821\Models\AddUisNodeIpResponse;
use AlibabaCloud\SDK\Uis\V20180821\Models\CreateDnatEntryRequest;
use AlibabaCloud\SDK\Uis\V20180821\Models\CreateDnatEntryResponse;
use AlibabaCloud\SDK\Uis\V20180821\Models\CreateSubConnectionRequest;
use AlibabaCloud\SDK\Uis\V20180821\Models\CreateSubConnectionResponse;
use AlibabaCloud\SDK\Uis\V20180821\Models\CreateUisConnectionRequest;
use AlibabaCloud\SDK\Uis\V20180821\Models\CreateUisConnectionResponse;
use AlibabaCloud\SDK\Uis\V20180821\Models\CreateUisNetworkInterfaceRequest;
use AlibabaCloud\SDK\Uis\V20180821\Models\CreateUisNetworkInterfaceResponse;
use AlibabaCloud\SDK\Uis\V20180821\Models\CreateUisNodeRequest;
use AlibabaCloud\SDK\Uis\V20180821\Models\CreateUisNodeResponse;
use AlibabaCloud\SDK\Uis\V20180821\Models\CreateUisRequest;
use AlibabaCloud\SDK\Uis\V20180821\Models\CreateUisResponse;
use AlibabaCloud\SDK\Uis\V20180821\Models\DeleteDnatEntryRequest;
use AlibabaCloud\SDK\Uis\V20180821\Models\DeleteDnatEntryResponse;
use AlibabaCloud\SDK\Uis\V20180821\Models\DeleteHighPriorityIpRequest;
use AlibabaCloud\SDK\Uis\V20180821\Models\DeleteHighPriorityIpResponse;
use AlibabaCloud\SDK\Uis\V20180821\Models\DeleteSubConnectionRequest;
use AlibabaCloud\SDK\Uis\V20180821\Models\DeleteSubConnectionResponse;
use AlibabaCloud\SDK\Uis\V20180821\Models\DeleteUisConnectionRequest;
use AlibabaCloud\SDK\Uis\V20180821\Models\DeleteUisConnectionResponse;
use AlibabaCloud\SDK\Uis\V20180821\Models\DeleteUisNetworkInterfaceRequest;
use AlibabaCloud\SDK\Uis\V20180821\Models\DeleteUisNetworkInterfaceResponse;
use AlibabaCloud\SDK\Uis\V20180821\Models\DeleteUisNodeIpRequest;
use AlibabaCloud\SDK\Uis\V20180821\Models\DeleteUisNodeIpResponse;
use AlibabaCloud\SDK\Uis\V20180821\Models\DeleteUisNodeRequest;
use AlibabaCloud\SDK\Uis\V20180821\Models\DeleteUisNodeResponse;
use AlibabaCloud\SDK\Uis\V20180821\Models\DeleteUisRequest;
use AlibabaCloud\SDK\Uis\V20180821\Models\DeleteUisResponse;
use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeAreasRequest;
use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeAreasResponse;
use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeDnatEntriesRequest;
use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeDnatEntriesResponse;
use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeHighPriorityIpRequest;
use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeHighPriorityIpResponse;
use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeHighPriorityIpsRequest;
use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeHighPriorityIpsResponse;
use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeSubConnectionRequest;
use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeSubConnectionResponse;
use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeSubConnectionsRequest;
use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeSubConnectionsResponse;
use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeUisConnectionsRequest;
use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeUisConnectionsResponse;
use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeUiseNodeStatusRequest;
use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeUiseNodeStatusResponse;
use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeUisesRequest;
use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeUisesResponse;
use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeUisNetworkInterfacesRequest;
use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeUisNetworkInterfacesResponse;
use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeUisNodesRequest;
use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeUisNodesResponse;
use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeWhiteListRequest;
use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeWhiteListResponse;
use AlibabaCloud\SDK\Uis\V20180821\Models\GetDroppedIpListRequest;
use AlibabaCloud\SDK\Uis\V20180821\Models\GetDroppedIpListResponse;
use AlibabaCloud\SDK\Uis\V20180821\Models\ModifyDnatEntryRequest;
use AlibabaCloud\SDK\Uis\V20180821\Models\ModifyDnatEntryResponse;
use AlibabaCloud\SDK\Uis\V20180821\Models\ModifyHighPriorityIpRequest;
use AlibabaCloud\SDK\Uis\V20180821\Models\ModifyHighPriorityIpResponse;
use AlibabaCloud\SDK\Uis\V20180821\Models\ModifySubConnectionRequest;
use AlibabaCloud\SDK\Uis\V20180821\Models\ModifySubConnectionResponse;
use AlibabaCloud\SDK\Uis\V20180821\Models\ModifyUisAttributeRequest;
use AlibabaCloud\SDK\Uis\V20180821\Models\ModifyUisAttributeResponse;
use AlibabaCloud\SDK\Uis\V20180821\Models\ModifyUisConnectionAttributeRequest;
use AlibabaCloud\SDK\Uis\V20180821\Models\ModifyUisConnectionAttributeResponse;
use AlibabaCloud\SDK\Uis\V20180821\Models\ModifyUisNodeAttributeRequest;
use AlibabaCloud\SDK\Uis\V20180821\Models\ModifyUisNodeAttributeResponse;
use AlibabaCloud\SDK\Uis\V20180821\Models\ModifyWhiteListRequest;
use AlibabaCloud\SDK\Uis\V20180821\Models\ModifyWhiteListResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Uis extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-north-2-gov-1'            => 'uis.cn-hangzhou.aliyuncs.com',
            'ap-northeast-1'              => 'uis.aliyuncs.com',
            'ap-northeast-2-pop'          => 'uis.aliyuncs.com',
            'ap-south-1'                  => 'uis.aliyuncs.com',
            'ap-southeast-1'              => 'uis.aliyuncs.com',
            'ap-southeast-2'              => 'uis.aliyuncs.com',
            'ap-southeast-3'              => 'uis.aliyuncs.com',
            'ap-southeast-5'              => 'uis.aliyuncs.com',
            'cn-beijing'                  => 'uis.aliyuncs.com',
            'cn-beijing-finance-1'        => 'uis.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'uis.aliyuncs.com',
            'cn-beijing-gov-1'            => 'uis.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'uis.aliyuncs.com',
            'cn-chengdu'                  => 'uis.aliyuncs.com',
            'cn-edge-1'                   => 'uis.aliyuncs.com',
            'cn-fujian'                   => 'uis.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'uis.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'uis.aliyuncs.com',
            'cn-hangzhou-finance'         => 'uis.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'uis.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'uis.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'uis.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'uis.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'uis.aliyuncs.com',
            'cn-hongkong'                 => 'uis.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'uis.aliyuncs.com',
            'cn-huhehaote'                => 'uis.aliyuncs.com',
            'cn-qingdao'                  => 'uis.aliyuncs.com',
            'cn-qingdao-nebula'           => 'uis.aliyuncs.com',
            'cn-shanghai'                 => 'uis.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'uis.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'uis.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'uis.aliyuncs.com',
            'cn-shanghai-inner'           => 'uis.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'uis.aliyuncs.com',
            'cn-shenzhen'                 => 'uis.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'uis.aliyuncs.com',
            'cn-shenzhen-inner'           => 'uis.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'uis.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'uis.aliyuncs.com',
            'cn-wuhan'                    => 'uis.aliyuncs.com',
            'cn-yushanfang'               => 'uis.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'uis.aliyuncs.com',
            'cn-zhangjiakou'              => 'uis.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'uis.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'uis.aliyuncs.com',
            'eu-central-1'                => 'uis.aliyuncs.com',
            'eu-west-1'                   => 'uis.aliyuncs.com',
            'eu-west-1-oxs'               => 'uis.aliyuncs.com',
            'me-east-1'                   => 'uis.aliyuncs.com',
            'rus-west-1-pop'              => 'uis.aliyuncs.com',
            'us-east-1'                   => 'uis.aliyuncs.com',
            'us-west-1'                   => 'uis.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('uis', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddHighPriorityIpRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AddHighPriorityIpResponse
     */
    public function addHighPriorityIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddHighPriorityIpResponse::fromMap($this->doRPCRequest('AddHighPriorityIp', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddHighPriorityIpRequest $request
     *
     * @return AddHighPriorityIpResponse
     */
    public function addHighPriorityIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addHighPriorityIpWithOptions($request, $runtime);
    }

    /**
     * @param AddUisNodeIpRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AddUisNodeIpResponse
     */
    public function addUisNodeIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddUisNodeIpResponse::fromMap($this->doRPCRequest('AddUisNodeIp', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddUisNodeIpRequest $request
     *
     * @return AddUisNodeIpResponse
     */
    public function addUisNodeIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUisNodeIpWithOptions($request, $runtime);
    }

    /**
     * @param CreateDnatEntryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateDnatEntryResponse
     */
    public function createDnatEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDnatEntryResponse::fromMap($this->doRPCRequest('CreateDnatEntry', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDnatEntryRequest $request
     *
     * @return CreateDnatEntryResponse
     */
    public function createDnatEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDnatEntryWithOptions($request, $runtime);
    }

    /**
     * @param CreateSubConnectionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateSubConnectionResponse
     */
    public function createSubConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSubConnectionResponse::fromMap($this->doRPCRequest('CreateSubConnection', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSubConnectionRequest $request
     *
     * @return CreateSubConnectionResponse
     */
    public function createSubConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSubConnectionWithOptions($request, $runtime);
    }

    /**
     * @param CreateUisRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateUisResponse
     */
    public function createUisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateUisResponse::fromMap($this->doRPCRequest('CreateUis', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateUisRequest $request
     *
     * @return CreateUisResponse
     */
    public function createUis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUisWithOptions($request, $runtime);
    }

    /**
     * @param CreateUisConnectionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateUisConnectionResponse
     */
    public function createUisConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateUisConnectionResponse::fromMap($this->doRPCRequest('CreateUisConnection', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateUisConnectionRequest $request
     *
     * @return CreateUisConnectionResponse
     */
    public function createUisConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUisConnectionWithOptions($request, $runtime);
    }

    /**
     * @param CreateUisNetworkInterfaceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateUisNetworkInterfaceResponse
     */
    public function createUisNetworkInterfaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateUisNetworkInterfaceResponse::fromMap($this->doRPCRequest('CreateUisNetworkInterface', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateUisNetworkInterfaceRequest $request
     *
     * @return CreateUisNetworkInterfaceResponse
     */
    public function createUisNetworkInterface($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUisNetworkInterfaceWithOptions($request, $runtime);
    }

    /**
     * @param CreateUisNodeRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateUisNodeResponse
     */
    public function createUisNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateUisNodeResponse::fromMap($this->doRPCRequest('CreateUisNode', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateUisNodeRequest $request
     *
     * @return CreateUisNodeResponse
     */
    public function createUisNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUisNodeWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDnatEntryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteDnatEntryResponse
     */
    public function deleteDnatEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDnatEntryResponse::fromMap($this->doRPCRequest('DeleteDnatEntry', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDnatEntryRequest $request
     *
     * @return DeleteDnatEntryResponse
     */
    public function deleteDnatEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDnatEntryWithOptions($request, $runtime);
    }

    /**
     * @param DeleteHighPriorityIpRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteHighPriorityIpResponse
     */
    public function deleteHighPriorityIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteHighPriorityIpResponse::fromMap($this->doRPCRequest('DeleteHighPriorityIp', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteHighPriorityIpRequest $request
     *
     * @return DeleteHighPriorityIpResponse
     */
    public function deleteHighPriorityIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHighPriorityIpWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSubConnectionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteSubConnectionResponse
     */
    public function deleteSubConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSubConnectionResponse::fromMap($this->doRPCRequest('DeleteSubConnection', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteSubConnectionRequest $request
     *
     * @return DeleteSubConnectionResponse
     */
    public function deleteSubConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSubConnectionWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUisRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteUisResponse
     */
    public function deleteUisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteUisResponse::fromMap($this->doRPCRequest('DeleteUis', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteUisRequest $request
     *
     * @return DeleteUisResponse
     */
    public function deleteUis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUisWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUisConnectionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteUisConnectionResponse
     */
    public function deleteUisConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteUisConnectionResponse::fromMap($this->doRPCRequest('DeleteUisConnection', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteUisConnectionRequest $request
     *
     * @return DeleteUisConnectionResponse
     */
    public function deleteUisConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUisConnectionWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUisNetworkInterfaceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteUisNetworkInterfaceResponse
     */
    public function deleteUisNetworkInterfaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteUisNetworkInterfaceResponse::fromMap($this->doRPCRequest('DeleteUisNetworkInterface', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteUisNetworkInterfaceRequest $request
     *
     * @return DeleteUisNetworkInterfaceResponse
     */
    public function deleteUisNetworkInterface($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUisNetworkInterfaceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUisNodeRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteUisNodeResponse
     */
    public function deleteUisNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteUisNodeResponse::fromMap($this->doRPCRequest('DeleteUisNode', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteUisNodeRequest $request
     *
     * @return DeleteUisNodeResponse
     */
    public function deleteUisNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUisNodeWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUisNodeIpRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteUisNodeIpResponse
     */
    public function deleteUisNodeIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteUisNodeIpResponse::fromMap($this->doRPCRequest('DeleteUisNodeIp', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteUisNodeIpRequest $request
     *
     * @return DeleteUisNodeIpResponse
     */
    public function deleteUisNodeIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUisNodeIpWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAreasRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeAreasResponse
     */
    public function describeAreasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAreasResponse::fromMap($this->doRPCRequest('DescribeAreas', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAreasRequest $request
     *
     * @return DescribeAreasResponse
     */
    public function describeAreas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAreasWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDnatEntriesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDnatEntriesResponse
     */
    public function describeDnatEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDnatEntriesResponse::fromMap($this->doRPCRequest('DescribeDnatEntries', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDnatEntriesRequest $request
     *
     * @return DescribeDnatEntriesResponse
     */
    public function describeDnatEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDnatEntriesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHighPriorityIpRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeHighPriorityIpResponse
     */
    public function describeHighPriorityIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeHighPriorityIpResponse::fromMap($this->doRPCRequest('DescribeHighPriorityIp', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeHighPriorityIpRequest $request
     *
     * @return DescribeHighPriorityIpResponse
     */
    public function describeHighPriorityIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHighPriorityIpWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHighPriorityIpsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeHighPriorityIpsResponse
     */
    public function describeHighPriorityIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeHighPriorityIpsResponse::fromMap($this->doRPCRequest('DescribeHighPriorityIps', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeHighPriorityIpsRequest $request
     *
     * @return DescribeHighPriorityIpsResponse
     */
    public function describeHighPriorityIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHighPriorityIpsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSubConnectionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeSubConnectionResponse
     */
    public function describeSubConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSubConnectionResponse::fromMap($this->doRPCRequest('DescribeSubConnection', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSubConnectionRequest $request
     *
     * @return DescribeSubConnectionResponse
     */
    public function describeSubConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSubConnectionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSubConnectionsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSubConnectionsResponse
     */
    public function describeSubConnectionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSubConnectionsResponse::fromMap($this->doRPCRequest('DescribeSubConnections', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSubConnectionsRequest $request
     *
     * @return DescribeSubConnectionsResponse
     */
    public function describeSubConnections($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSubConnectionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUisConnectionsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeUisConnectionsResponse
     */
    public function describeUisConnectionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUisConnectionsResponse::fromMap($this->doRPCRequest('DescribeUisConnections', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeUisConnectionsRequest $request
     *
     * @return DescribeUisConnectionsResponse
     */
    public function describeUisConnections($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUisConnectionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUiseNodeStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeUiseNodeStatusResponse
     */
    public function describeUiseNodeStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUiseNodeStatusResponse::fromMap($this->doRPCRequest('DescribeUiseNodeStatus', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeUiseNodeStatusRequest $request
     *
     * @return DescribeUiseNodeStatusResponse
     */
    public function describeUiseNodeStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUiseNodeStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUisesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeUisesResponse
     */
    public function describeUisesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUisesResponse::fromMap($this->doRPCRequest('DescribeUises', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeUisesRequest $request
     *
     * @return DescribeUisesResponse
     */
    public function describeUises($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUisesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUisNetworkInterfacesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeUisNetworkInterfacesResponse
     */
    public function describeUisNetworkInterfacesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUisNetworkInterfacesResponse::fromMap($this->doRPCRequest('DescribeUisNetworkInterfaces', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeUisNetworkInterfacesRequest $request
     *
     * @return DescribeUisNetworkInterfacesResponse
     */
    public function describeUisNetworkInterfaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUisNetworkInterfacesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUisNodesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeUisNodesResponse
     */
    public function describeUisNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUisNodesResponse::fromMap($this->doRPCRequest('DescribeUisNodes', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeUisNodesRequest $request
     *
     * @return DescribeUisNodesResponse
     */
    public function describeUisNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUisNodesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWhiteListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeWhiteListResponse
     */
    public function describeWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeWhiteListResponse::fromMap($this->doRPCRequest('DescribeWhiteList', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeWhiteListRequest $request
     *
     * @return DescribeWhiteListResponse
     */
    public function describeWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param GetDroppedIpListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetDroppedIpListResponse
     */
    public function getDroppedIpListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDroppedIpListResponse::fromMap($this->doRPCRequest('GetDroppedIpList', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDroppedIpListRequest $request
     *
     * @return GetDroppedIpListResponse
     */
    public function getDroppedIpList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDroppedIpListWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDnatEntryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyDnatEntryResponse
     */
    public function modifyDnatEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDnatEntryResponse::fromMap($this->doRPCRequest('ModifyDnatEntry', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDnatEntryRequest $request
     *
     * @return ModifyDnatEntryResponse
     */
    public function modifyDnatEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDnatEntryWithOptions($request, $runtime);
    }

    /**
     * @param ModifyHighPriorityIpRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyHighPriorityIpResponse
     */
    public function modifyHighPriorityIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyHighPriorityIpResponse::fromMap($this->doRPCRequest('ModifyHighPriorityIp', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyHighPriorityIpRequest $request
     *
     * @return ModifyHighPriorityIpResponse
     */
    public function modifyHighPriorityIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHighPriorityIpWithOptions($request, $runtime);
    }

    /**
     * @param ModifySubConnectionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifySubConnectionResponse
     */
    public function modifySubConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySubConnectionResponse::fromMap($this->doRPCRequest('ModifySubConnection', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySubConnectionRequest $request
     *
     * @return ModifySubConnectionResponse
     */
    public function modifySubConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySubConnectionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyUisAttributeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyUisAttributeResponse
     */
    public function modifyUisAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyUisAttributeResponse::fromMap($this->doRPCRequest('ModifyUisAttribute', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyUisAttributeRequest $request
     *
     * @return ModifyUisAttributeResponse
     */
    public function modifyUisAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUisAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyUisConnectionAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyUisConnectionAttributeResponse
     */
    public function modifyUisConnectionAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyUisConnectionAttributeResponse::fromMap($this->doRPCRequest('ModifyUisConnectionAttribute', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyUisConnectionAttributeRequest $request
     *
     * @return ModifyUisConnectionAttributeResponse
     */
    public function modifyUisConnectionAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUisConnectionAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyUisNodeAttributeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyUisNodeAttributeResponse
     */
    public function modifyUisNodeAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyUisNodeAttributeResponse::fromMap($this->doRPCRequest('ModifyUisNodeAttribute', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyUisNodeAttributeRequest $request
     *
     * @return ModifyUisNodeAttributeResponse
     */
    public function modifyUisNodeAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUisNodeAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyWhiteListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyWhiteListResponse
     */
    public function modifyWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyWhiteListResponse::fromMap($this->doRPCRequest('ModifyWhiteList', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyWhiteListRequest $request
     *
     * @return ModifyWhiteListResponse
     */
    public function modifyWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWhiteListWithOptions($request, $runtime);
    }
}
