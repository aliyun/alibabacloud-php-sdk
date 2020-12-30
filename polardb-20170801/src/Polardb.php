<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterMonitorRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterMonitorResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Polardb extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-qingdao'                  => 'polardb.aliyuncs.com',
            'cn-beijing'                  => 'polardb.aliyuncs.com',
            'cn-hangzhou'                 => 'polardb.aliyuncs.com',
            'cn-shanghai'                 => 'polardb.aliyuncs.com',
            'cn-shenzhen'                 => 'polardb.aliyuncs.com',
            'cn-hongkong'                 => 'polardb.aliyuncs.com',
            'ap-southeast-1'              => 'polardb.aliyuncs.com',
            'us-west-1'                   => 'polardb.aliyuncs.com',
            'us-east-1'                   => 'polardb.aliyuncs.com',
            'cn-hangzhou-finance'         => 'polardb.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'polardb.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'polardb.aliyuncs.com',
            'ap-northeast-2-pop'          => 'polardb.aliyuncs.com',
            'cn-beijing-finance-1'        => 'polardb.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'polardb.aliyuncs.com',
            'cn-beijing-gov-1'            => 'polardb.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'polardb.aliyuncs.com',
            'cn-edge-1'                   => 'polardb.aliyuncs.com',
            'cn-fujian'                   => 'polardb.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'polardb.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'polardb.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'polardb.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'polardb.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'polardb.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'polardb.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'polardb.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'polardb.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'polardb.aliyuncs.com',
            'cn-north-2-gov-1'            => 'polardb.aliyuncs.com',
            'cn-qingdao-nebula'           => 'polardb.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'polardb.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'polardb.aliyuncs.com',
            'cn-shanghai-inner'           => 'polardb.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'polardb.aliyuncs.com',
            'cn-shenzhen-inner'           => 'polardb.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'polardb.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'polardb.aliyuncs.com',
            'cn-wuhan'                    => 'polardb.aliyuncs.com',
            'cn-wulanchabu'               => 'polardb.aliyuncs.com',
            'cn-yushanfang'               => 'polardb.aliyuncs.com',
            'cn-zhangbei'                 => 'polardb.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'polardb.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'polardb.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'polardb.aliyuncs.com',
            'eu-west-1-oxs'               => 'polardb.aliyuncs.com',
            'rus-west-1-pop'              => 'polardb.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('polardb', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ModifyDBClusterMonitorRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyDBClusterMonitorResponse
     */
    public function modifyDBClusterMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBClusterMonitorResponse::fromMap($this->doRPCRequest('ModifyDBClusterMonitor', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDBClusterMonitorRequest $request
     *
     * @return ModifyDBClusterMonitorResponse
     */
    public function modifyDBClusterMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterMonitorWithOptions($request, $runtime);
    }
}
