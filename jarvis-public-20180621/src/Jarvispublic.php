<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Jarvispublic\V20180621;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Jarvispublic\V20180621\Models\CreateConsoleAccessWhiteListRequest;
use AlibabaCloud\SDK\Jarvispublic\V20180621\Models\CreateConsoleAccessWhiteListResponse;
use AlibabaCloud\SDK\Jarvispublic\V20180621\Models\DeleteConsoleAccessWhiteListRequest;
use AlibabaCloud\SDK\Jarvispublic\V20180621\Models\DeleteConsoleAccessWhiteListResponse;
use AlibabaCloud\SDK\Jarvispublic\V20180621\Models\DescribeAccessWhitelistEcsListRequest;
use AlibabaCloud\SDK\Jarvispublic\V20180621\Models\DescribeAccessWhitelistEcsListResponse;
use AlibabaCloud\SDK\Jarvispublic\V20180621\Models\DescribeAccessWhiteListSlbListRequest;
use AlibabaCloud\SDK\Jarvispublic\V20180621\Models\DescribeAccessWhiteListSlbListResponse;
use AlibabaCloud\SDK\Jarvispublic\V20180621\Models\DescribeAttackedIpRequest;
use AlibabaCloud\SDK\Jarvispublic\V20180621\Models\DescribeAttackedIpResponse;
use AlibabaCloud\SDK\Jarvispublic\V20180621\Models\DescribeAttackEventRequest;
use AlibabaCloud\SDK\Jarvispublic\V20180621\Models\DescribeAttackEventResponse;
use AlibabaCloud\SDK\Jarvispublic\V20180621\Models\DescribeConsoleAccessWhiteListRequest;
use AlibabaCloud\SDK\Jarvispublic\V20180621\Models\DescribeConsoleAccessWhiteListResponse;
use AlibabaCloud\SDK\Jarvispublic\V20180621\Models\DescribeCountAttackEventRequest;
use AlibabaCloud\SDK\Jarvispublic\V20180621\Models\DescribeCountAttackEventResponse;
use AlibabaCloud\SDK\Jarvispublic\V20180621\Models\DescribePhoneInfoRequest;
use AlibabaCloud\SDK\Jarvispublic\V20180621\Models\DescribePhoneInfoResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Jarvispublic extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('jarvis-public', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateConsoleAccessWhiteListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateConsoleAccessWhiteListResponse
     */
    public function createConsoleAccessWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dstPort)) {
            $query['DstPort'] = $request->dstPort;
        }
        if (!Utils::isUnset($request->instanceIdList)) {
            $query['InstanceIdList'] = $request->instanceIdList;
        }
        if (!Utils::isUnset($request->instanceInfoList)) {
            $query['InstanceInfoList'] = $request->instanceInfoList;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->liveTime)) {
            $query['LiveTime'] = $request->liveTime;
        }
        if (!Utils::isUnset($request->note)) {
            $query['Note'] = $request->note;
        }
        if (!Utils::isUnset($request->productName)) {
            $query['ProductName'] = $request->productName;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sourceCode)) {
            $query['SourceCode'] = $request->sourceCode;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->srcIP)) {
            $query['SrcIP'] = $request->srcIP;
        }
        if (!Utils::isUnset($request->whiteListType)) {
            $query['WhiteListType'] = $request->whiteListType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateConsoleAccessWhiteList',
            'version'     => '2018-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateConsoleAccessWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateConsoleAccessWhiteListRequest $request
     *
     * @return CreateConsoleAccessWhiteListResponse
     */
    public function createConsoleAccessWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConsoleAccessWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param DeleteConsoleAccessWhiteListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteConsoleAccessWhiteListResponse
     */
    public function deleteConsoleAccessWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->disableWhitelist)) {
            $query['DisableWhitelist'] = $request->disableWhitelist;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceCode)) {
            $query['SourceCode'] = $request->sourceCode;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteConsoleAccessWhiteList',
            'version'     => '2018-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteConsoleAccessWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteConsoleAccessWhiteListRequest $request
     *
     * @return DeleteConsoleAccessWhiteListResponse
     */
    public function deleteConsoleAccessWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteConsoleAccessWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAccessWhiteListSlbListRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeAccessWhiteListSlbListResponse
     */
    public function describeAccessWhiteListSlbListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceCode)) {
            $query['SourceCode'] = $request->sourceCode;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAccessWhiteListSlbList',
            'version'     => '2018-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAccessWhiteListSlbListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAccessWhiteListSlbListRequest $request
     *
     * @return DescribeAccessWhiteListSlbListResponse
     */
    public function describeAccessWhiteListSlbList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccessWhiteListSlbListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAccessWhitelistEcsListRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeAccessWhitelistEcsListResponse
     */
    public function describeAccessWhitelistEcsListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceCode)) {
            $query['SourceCode'] = $request->sourceCode;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAccessWhitelistEcsList',
            'version'     => '2018-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAccessWhitelistEcsListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAccessWhitelistEcsListRequest $request
     *
     * @return DescribeAccessWhitelistEcsListResponse
     */
    public function describeAccessWhitelistEcsList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccessWhitelistEcsListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAttackEventRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeAttackEventResponse
     */
    public function describeAttackEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->serverIpList)) {
            $query['ServerIpList'] = $request->serverIpList;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAttackEvent',
            'version'     => '2018-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAttackEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAttackEventRequest $request
     *
     * @return DescribeAttackEventResponse
     */
    public function describeAttackEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAttackEventWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAttackedIpRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeAttackedIpResponse
     */
    public function describeAttackedIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->serverIpList)) {
            $query['ServerIpList'] = $request->serverIpList;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAttackedIp',
            'version'     => '2018-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAttackedIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAttackedIpRequest $request
     *
     * @return DescribeAttackedIpResponse
     */
    public function describeAttackedIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAttackedIpWithOptions($request, $runtime);
    }

    /**
     * @param DescribeConsoleAccessWhiteListRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeConsoleAccessWhiteListResponse
     */
    public function describeConsoleAccessWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->dstIP)) {
            $query['DstIP'] = $request->dstIP;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sourceCode)) {
            $query['SourceCode'] = $request->sourceCode;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->srcIP)) {
            $query['SrcIP'] = $request->srcIP;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->whiteListType)) {
            $query['WhiteListType'] = $request->whiteListType;
        }
        if (!Utils::isUnset($request->queryProduct)) {
            $query['queryProduct'] = $request->queryProduct;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeConsoleAccessWhiteList',
            'version'     => '2018-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeConsoleAccessWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeConsoleAccessWhiteListRequest $request
     *
     * @return DescribeConsoleAccessWhiteListResponse
     */
    public function describeConsoleAccessWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConsoleAccessWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCountAttackEventRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeCountAttackEventResponse
     */
    public function describeCountAttackEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->serverIpList)) {
            $query['ServerIpList'] = $request->serverIpList;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCountAttackEvent',
            'version'     => '2018-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCountAttackEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCountAttackEventRequest $request
     *
     * @return DescribeCountAttackEventResponse
     */
    public function describeCountAttackEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCountAttackEventWithOptions($request, $runtime);
    }

    /**
     * @param DescribePhoneInfoRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribePhoneInfoResponse
     */
    public function describePhoneInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->phoneNum)) {
            $query['phoneNum'] = $request->phoneNum;
        }
        if (!Utils::isUnset($request->sourceCode)) {
            $query['sourceCode'] = $request->sourceCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePhoneInfo',
            'version'     => '2018-06-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePhoneInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePhoneInfoRequest $request
     *
     * @return DescribePhoneInfoResponse
     */
    public function describePhoneInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePhoneInfoWithOptions($request, $runtime);
    }
}
