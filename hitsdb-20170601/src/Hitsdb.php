<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20170601;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\CreateHiTSDBInstanceRequest;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\CreateHiTSDBInstanceResponse;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\DeleteHiTSDBInstanceRequest;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\DeleteHiTSDBInstanceResponse;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\DescribeHiTSDBInstanceListRequest;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\DescribeHiTSDBInstanceListResponse;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\DescribeHiTSDBInstanceRequest;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\DescribeHiTSDBInstanceResponse;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\DescribeHiTSDBInstanceSecurityIpListRequest;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\DescribeHiTSDBInstanceSecurityIpListResponse;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\DescribeZonesRequest;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\DescribeZonesResponse;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\ModifyHiTSDBInstanceClassRequest;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\ModifyHiTSDBInstanceClassResponse;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\ModifyHiTSDBInstanceSecurityIpListRequest;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\ModifyHiTSDBInstanceSecurityIpListResponse;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\RenameHiTSDBInstanceAliasRequest;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\RenameHiTSDBInstanceAliasResponse;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\RenewTSDBInstanceRequest;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\RenewTSDBInstanceResponse;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\RestartHiTSDBInstanceRequest;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\RestartHiTSDBInstanceResponse;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\SwitchHiTSDBInstancePublicNetRequest;
use AlibabaCloud\SDK\Hitsdb\V20170601\Models\SwitchHiTSDBInstancePublicNetResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Hitsdb extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-qingdao'                  => 'hitsdb.aliyuncs.com',
            'cn-beijing'                  => 'hitsdb.aliyuncs.com',
            'cn-hangzhou'                 => 'hitsdb.aliyuncs.com',
            'cn-shanghai'                 => 'hitsdb.aliyuncs.com',
            'cn-shenzhen'                 => 'hitsdb.aliyuncs.com',
            'cn-hongkong'                 => 'hitsdb.aliyuncs.com',
            'ap-southeast-1'              => 'hitsdb.aliyuncs.com',
            'us-west-1'                   => 'hitsdb.aliyuncs.com',
            'us-east-1'                   => 'hitsdb.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'hitsdb.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'hitsdb.aliyuncs.com',
            'ap-northeast-2-pop'          => 'hitsdb.aliyuncs.com',
            'cn-beijing-finance-1'        => 'hitsdb.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'hitsdb.aliyuncs.com',
            'cn-beijing-gov-1'            => 'hitsdb.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'hitsdb.aliyuncs.com',
            'cn-chengdu'                  => 'hitsdb.aliyuncs.com',
            'cn-edge-1'                   => 'hitsdb.aliyuncs.com',
            'cn-fujian'                   => 'hitsdb.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'hitsdb.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'hitsdb.aliyuncs.com',
            'cn-hangzhou-finance'         => 'hitsdb.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'hitsdb.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'hitsdb.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'hitsdb.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'hitsdb.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'hitsdb.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'hitsdb.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'hitsdb.aliyuncs.com',
            'cn-qingdao-nebula'           => 'hitsdb.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'hitsdb.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'hitsdb.aliyuncs.com',
            'cn-shanghai-inner'           => 'hitsdb.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'hitsdb.aliyuncs.com',
            'cn-shenzhen-inner'           => 'hitsdb.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'hitsdb.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'hitsdb.aliyuncs.com',
            'cn-wuhan'                    => 'hitsdb.aliyuncs.com',
            'cn-wulanchabu'               => 'hitsdb.aliyuncs.com',
            'cn-yushanfang'               => 'hitsdb.aliyuncs.com',
            'cn-zhangbei'                 => 'hitsdb.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'hitsdb.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'hitsdb.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'hitsdb.aliyuncs.com',
            'eu-west-1-oxs'               => 'hitsdb.aliyuncs.com',
            'me-east-1'                   => 'hitsdb.aliyuncs.com',
            'rus-west-1-pop'              => 'hitsdb.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('hitsdb', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateHiTSDBInstanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateHiTSDBInstanceResponse
     */
    public function createHiTSDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateHiTSDBInstanceResponse::fromMap($this->doRPCRequest('CreateHiTSDBInstance', '2017-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateHiTSDBInstanceRequest $request
     *
     * @return CreateHiTSDBInstanceResponse
     */
    public function createHiTSDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHiTSDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteHiTSDBInstanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteHiTSDBInstanceResponse
     */
    public function deleteHiTSDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteHiTSDBInstanceResponse::fromMap($this->doRPCRequest('DeleteHiTSDBInstance', '2017-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteHiTSDBInstanceRequest $request
     *
     * @return DeleteHiTSDBInstanceResponse
     */
    public function deleteHiTSDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHiTSDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHiTSDBInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeHiTSDBInstanceResponse
     */
    public function describeHiTSDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeHiTSDBInstanceResponse::fromMap($this->doRPCRequest('DescribeHiTSDBInstance', '2017-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeHiTSDBInstanceRequest $request
     *
     * @return DescribeHiTSDBInstanceResponse
     */
    public function describeHiTSDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHiTSDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHiTSDBInstanceListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeHiTSDBInstanceListResponse
     */
    public function describeHiTSDBInstanceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeHiTSDBInstanceListResponse::fromMap($this->doRPCRequest('DescribeHiTSDBInstanceList', '2017-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeHiTSDBInstanceListRequest $request
     *
     * @return DescribeHiTSDBInstanceListResponse
     */
    public function describeHiTSDBInstanceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHiTSDBInstanceListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHiTSDBInstanceSecurityIpListRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeHiTSDBInstanceSecurityIpListResponse
     */
    public function describeHiTSDBInstanceSecurityIpListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeHiTSDBInstanceSecurityIpListResponse::fromMap($this->doRPCRequest('DescribeHiTSDBInstanceSecurityIpList', '2017-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeHiTSDBInstanceSecurityIpListRequest $request
     *
     * @return DescribeHiTSDBInstanceSecurityIpListResponse
     */
    public function describeHiTSDBInstanceSecurityIpList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHiTSDBInstanceSecurityIpListWithOptions($request, $runtime);
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

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2017-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeZonesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeZonesResponse
     */
    public function describeZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeZonesResponse::fromMap($this->doRPCRequest('DescribeZones', '2017-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeZonesRequest $request
     *
     * @return DescribeZonesResponse
     */
    public function describeZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeZonesWithOptions($request, $runtime);
    }

    /**
     * @param ModifyHiTSDBInstanceClassRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyHiTSDBInstanceClassResponse
     */
    public function modifyHiTSDBInstanceClassWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyHiTSDBInstanceClassResponse::fromMap($this->doRPCRequest('ModifyHiTSDBInstanceClass', '2017-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyHiTSDBInstanceClassRequest $request
     *
     * @return ModifyHiTSDBInstanceClassResponse
     */
    public function modifyHiTSDBInstanceClass($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHiTSDBInstanceClassWithOptions($request, $runtime);
    }

    /**
     * @param ModifyHiTSDBInstanceSecurityIpListRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ModifyHiTSDBInstanceSecurityIpListResponse
     */
    public function modifyHiTSDBInstanceSecurityIpListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyHiTSDBInstanceSecurityIpListResponse::fromMap($this->doRPCRequest('ModifyHiTSDBInstanceSecurityIpList', '2017-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyHiTSDBInstanceSecurityIpListRequest $request
     *
     * @return ModifyHiTSDBInstanceSecurityIpListResponse
     */
    public function modifyHiTSDBInstanceSecurityIpList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHiTSDBInstanceSecurityIpListWithOptions($request, $runtime);
    }

    /**
     * @param RenameHiTSDBInstanceAliasRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RenameHiTSDBInstanceAliasResponse
     */
    public function renameHiTSDBInstanceAliasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RenameHiTSDBInstanceAliasResponse::fromMap($this->doRPCRequest('RenameHiTSDBInstanceAlias', '2017-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RenameHiTSDBInstanceAliasRequest $request
     *
     * @return RenameHiTSDBInstanceAliasResponse
     */
    public function renameHiTSDBInstanceAlias($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renameHiTSDBInstanceAliasWithOptions($request, $runtime);
    }

    /**
     * @param RenewTSDBInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RenewTSDBInstanceResponse
     */
    public function renewTSDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RenewTSDBInstanceResponse::fromMap($this->doRPCRequest('RenewTSDBInstance', '2017-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RenewTSDBInstanceRequest $request
     *
     * @return RenewTSDBInstanceResponse
     */
    public function renewTSDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewTSDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @param RestartHiTSDBInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RestartHiTSDBInstanceResponse
     */
    public function restartHiTSDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RestartHiTSDBInstanceResponse::fromMap($this->doRPCRequest('RestartHiTSDBInstance', '2017-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RestartHiTSDBInstanceRequest $request
     *
     * @return RestartHiTSDBInstanceResponse
     */
    public function restartHiTSDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartHiTSDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @param SwitchHiTSDBInstancePublicNetRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return SwitchHiTSDBInstancePublicNetResponse
     */
    public function switchHiTSDBInstancePublicNetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SwitchHiTSDBInstancePublicNetResponse::fromMap($this->doRPCRequest('SwitchHiTSDBInstancePublicNet', '2017-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SwitchHiTSDBInstancePublicNetRequest $request
     *
     * @return SwitchHiTSDBInstancePublicNetResponse
     */
    public function switchHiTSDBInstancePublicNet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchHiTSDBInstancePublicNetWithOptions($request, $runtime);
    }
}
