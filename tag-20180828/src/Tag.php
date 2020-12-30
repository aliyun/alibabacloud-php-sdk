<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Tag\V20180828\Models\ListTagKeysRequest;
use AlibabaCloud\SDK\Tag\V20180828\Models\ListTagKeysResponse;
use AlibabaCloud\SDK\Tag\V20180828\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Tag\V20180828\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Tag\V20180828\Models\ListTagValuesRequest;
use AlibabaCloud\SDK\Tag\V20180828\Models\ListTagValuesResponse;
use AlibabaCloud\SDK\Tag\V20180828\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Tag\V20180828\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Tag\V20180828\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Tag\V20180828\Models\UntagResourcesResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Tag extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-qingdao'                  => 'tag.aliyuncs.com',
            'cn-beijing'                  => 'tag.aliyuncs.com',
            'cn-hangzhou'                 => 'tag.aliyuncs.com',
            'cn-shanghai'                 => 'tag.aliyuncs.com',
            'cn-shenzhen'                 => 'tag.aliyuncs.com',
            'cn-hongkong'                 => 'tag.aliyuncs.com',
            'ap-southeast-1'              => 'tag.aliyuncs.com',
            'us-west-1'                   => 'tag.aliyuncs.com',
            'us-east-1'                   => 'tag.aliyuncs.com',
            'cn-hangzhou-finance'         => 'tag.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'tag.aliyuncs.com',
            'ap-northeast-2-pop'          => 'tag.aliyuncs.com',
            'cn-beijing-finance-1'        => 'tag.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'tag.aliyuncs.com',
            'cn-beijing-gov-1'            => 'tag.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'tag.aliyuncs.com',
            'cn-edge-1'                   => 'tag.aliyuncs.com',
            'cn-fujian'                   => 'tag.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'tag.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'tag.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'tag.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'tag.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'tag.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'tag.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'tag.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'tag.aliyuncs.com',
            'cn-qingdao-nebula'           => 'tag.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'tag.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'tag.aliyuncs.com',
            'cn-shanghai-inner'           => 'tag.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'tag.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'tag.aliyuncs.com',
            'cn-shenzhen-inner'           => 'tag.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'tag.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'tag.aliyuncs.com',
            'cn-wuhan'                    => 'tag.aliyuncs.com',
            'cn-yushanfang'               => 'tag.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'tag.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'tag.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'tag.aliyuncs.com',
            'eu-west-1-oxs'               => 'tag.cn-shenzhen-cloudstone.aliyuncs.com',
            'rus-west-1-pop'              => 'tag.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('tag', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ListTagKeysRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagKeysResponse::fromMap($this->doRPCRequest('ListTagKeys', '2018-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTagKeysRequest $request
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagKeysWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagResourcesResponse::fromMap($this->doRPCRequest('ListTagResources', '2018-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListTagValuesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTagValuesResponse
     */
    public function listTagValuesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagValuesResponse::fromMap($this->doRPCRequest('ListTagValues', '2018-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTagValuesRequest $request
     *
     * @return ListTagValuesResponse
     */
    public function listTagValues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagValuesWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TagResourcesResponse::fromMap($this->doRPCRequest('TagResources', '2018-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UntagResourcesResponse::fromMap($this->doRPCRequest('UntagResources', '2018-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
