<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230608;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\Tea\Utils\Utils;
use Darabonba\OpenApi\OpenApiClient;

class Linkedmall extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-hangzhou'                 => 'linkedmall.aliyuncs.com',
            'cn-shanghai'                 => 'linkedmall.aliyuncs.com',
            'ap-northeast-1'              => 'linkedmall.aliyuncs.com',
            'ap-northeast-2-pop'          => 'linkedmall.aliyuncs.com',
            'ap-south-1'                  => 'linkedmall.aliyuncs.com',
            'ap-southeast-1'              => 'linkedmall.aliyuncs.com',
            'ap-southeast-2'              => 'linkedmall.aliyuncs.com',
            'ap-southeast-3'              => 'linkedmall.aliyuncs.com',
            'ap-southeast-5'              => 'linkedmall.aliyuncs.com',
            'cn-beijing'                  => 'linkedmall.aliyuncs.com',
            'cn-beijing-finance-1'        => 'linkedmall.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'linkedmall.aliyuncs.com',
            'cn-beijing-gov-1'            => 'linkedmall.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'linkedmall.aliyuncs.com',
            'cn-chengdu'                  => 'linkedmall.aliyuncs.com',
            'cn-edge-1'                   => 'linkedmall.aliyuncs.com',
            'cn-fujian'                   => 'linkedmall.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'linkedmall.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'linkedmall.aliyuncs.com',
            'cn-hangzhou-finance'         => 'linkedmall.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'linkedmall.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'linkedmall.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'linkedmall.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'linkedmall.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'linkedmall.aliyuncs.com',
            'cn-hongkong'                 => 'linkedmall.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'linkedmall.aliyuncs.com',
            'cn-huhehaote'                => 'linkedmall.aliyuncs.com',
            'cn-north-2-gov-1'            => 'linkedmall.aliyuncs.com',
            'cn-qingdao'                  => 'linkedmall.aliyuncs.com',
            'cn-qingdao-nebula'           => 'linkedmall.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'linkedmall.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'linkedmall.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'linkedmall.aliyuncs.com',
            'cn-shanghai-inner'           => 'linkedmall.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'linkedmall.aliyuncs.com',
            'cn-shenzhen'                 => 'linkedmall.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'linkedmall.aliyuncs.com',
            'cn-shenzhen-inner'           => 'linkedmall.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'linkedmall.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'linkedmall.aliyuncs.com',
            'cn-wuhan'                    => 'linkedmall.aliyuncs.com',
            'cn-yushanfang'               => 'linkedmall.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'linkedmall.aliyuncs.com',
            'cn-zhangjiakou'              => 'linkedmall.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'linkedmall.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'linkedmall.aliyuncs.com',
            'eu-central-1'                => 'linkedmall.aliyuncs.com',
            'eu-west-1'                   => 'linkedmall.aliyuncs.com',
            'eu-west-1-oxs'               => 'linkedmall.aliyuncs.com',
            'me-east-1'                   => 'linkedmall.aliyuncs.com',
            'rus-west-1-pop'              => 'linkedmall.aliyuncs.com',
            'us-east-1'                   => 'linkedmall.aliyuncs.com',
            'us-west-1'                   => 'linkedmall.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('linkedmall', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
}
