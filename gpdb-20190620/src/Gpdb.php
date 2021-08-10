<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20190620;

use AlibabaCloud\Endpoint\Endpoint;
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBInstanceForDmsResponse::fromMap($this->doRPCRequest('DescribeDBInstanceForDms', '2019-06-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBInstanceSecurityIpsResponse::fromMap($this->doRPCRequest('DescribeDBInstanceSecurityIps', '2019-06-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBInstancesForDmsResponse::fromMap($this->doRPCRequest('DescribeDBInstancesForDms', '2019-06-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBInstanceSecurityIpsResponse::fromMap($this->doRPCRequest('ModifyDBInstanceSecurityIps', '2019-06-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
