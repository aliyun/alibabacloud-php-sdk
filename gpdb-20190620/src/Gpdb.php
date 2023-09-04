<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20190620;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Gpdb\V20190620\Models\DescribeDBInstanceForDmsRequest;
use AlibabaCloud\SDK\Gpdb\V20190620\Models\DescribeDBInstanceForDmsResponse;
use AlibabaCloud\SDK\Gpdb\V20190620\Models\DescribeDBInstanceSecurityIpsRequest;
use AlibabaCloud\SDK\Gpdb\V20190620\Models\DescribeDBInstanceSecurityIpsResponse;
use AlibabaCloud\SDK\Gpdb\V20190620\Models\DescribeDBInstancesForDmsRequest;
use AlibabaCloud\SDK\Gpdb\V20190620\Models\DescribeDBInstancesForDmsResponse;
use AlibabaCloud\SDK\Gpdb\V20190620\Models\ModifyDBInstanceSecurityIpsRequest;
use AlibabaCloud\SDK\Gpdb\V20190620\Models\ModifyDBInstanceSecurityIpsResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Gpdb extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-beijing'            => 'gpdb.aliyuncs.com',
            'cn-hangzhou'           => 'gpdb.aliyuncs.com',
            'cn-shanghai'           => 'gpdb.aliyuncs.com',
            'cn-shenzhen'           => 'gpdb.aliyuncs.com',
            'cn-hongkong'           => 'gpdb.aliyuncs.com',
            'ap-southeast-1'        => 'gpdb.aliyuncs.com',
            'us-west-1'             => 'gpdb.aliyuncs.com',
            'us-east-1'             => 'gpdb.aliyuncs.com',
            'cn-hangzhou-finance'   => 'gpdb.aliyuncs.com',
            'cn-shanghai-finance-1' => 'gpdb.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'gpdb.aliyuncs.com',
            'cn-qingdao'            => 'gpdb.aliyuncs.com',
            'cn-north-2-gov-1'      => 'gpdb.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('gpdb', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param DescribeDBInstanceForDmsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDBInstanceForDmsResponse
     */
    public function describeDBInstanceForDmsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->host)) {
            $query['Host'] = $request->host;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceForDms',
            'version'     => '2019-06-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceForDmsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBInstanceForDmsRequest $request
     *
     * @return DescribeDBInstanceForDmsResponse
     */
    public function describeDBInstanceForDms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceForDmsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstanceSecurityIpsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDBInstanceSecurityIpsResponse
     */
    public function describeDBInstanceSecurityIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceSecurityIps',
            'version'     => '2019-06-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceSecurityIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBInstanceSecurityIpsRequest $request
     *
     * @return DescribeDBInstanceSecurityIpsResponse
     */
    public function describeDBInstanceSecurityIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceSecurityIpsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstancesForDmsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDBInstancesForDmsResponse
     */
    public function describeDBInstancesForDmsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstancesForDms',
            'version'     => '2019-06-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstancesForDmsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBInstancesForDmsRequest $request
     *
     * @return DescribeDBInstancesForDmsResponse
     */
    public function describeDBInstancesForDms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstancesForDmsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBInstanceSecurityIpsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyDBInstanceSecurityIpsResponse
     */
    public function modifyDBInstanceSecurityIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->whileList)) {
            $query['WhileList'] = $request->whileList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceSecurityIps',
            'version'     => '2019-06-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceSecurityIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDBInstanceSecurityIpsRequest $request
     *
     * @return ModifyDBInstanceSecurityIpsResponse
     */
    public function modifyDBInstanceSecurityIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceSecurityIpsWithOptions($request, $runtime);
    }
}
