<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ThirdswAicall\V20251127;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\ThirdswAicall\V20251127\Models\ReadOutboundTaskCallListRequest;
use AlibabaCloud\SDK\ThirdswAicall\V20251127\Models\ReadOutboundTaskCallListResponse;
use AlibabaCloud\SDK\ThirdswAicall\V20251127\Models\ReadOutboundTaskCallListShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class ThirdswAicall extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('thirdswaicall', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * 外呼任务通话列表查询.
     *
     * @param tmpReq - ReadOutboundTaskCallListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReadOutboundTaskCallListResponse
     *
     * @param ReadOutboundTaskCallListRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return ReadOutboundTaskCallListResponse
     */
    public function readOutboundTaskCallListWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ReadOutboundTaskCallListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->displayStatusList) {
            $request->displayStatusListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->displayStatusList, 'DisplayStatusList', 'json');
        }

        if (null !== $tmpReq->labelTags) {
            $request->labelTagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->labelTags, 'LabelTags', 'json');
        }

        $body = [];
        if (null !== $request->current) {
            @$body['Current'] = $request->current;
        }

        if (null !== $request->customerNameOrPhone) {
            @$body['CustomerNameOrPhone'] = $request->customerNameOrPhone;
        }

        if (null !== $request->displayStatusListShrink) {
            @$body['DisplayStatusList'] = $request->displayStatusListShrink;
        }

        if (null !== $request->labelTagsShrink) {
            @$body['LabelTags'] = $request->labelTagsShrink;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->size) {
            @$body['Size'] = $request->size;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReadOutboundTaskCallList',
            'version' => '2025-11-27',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReadOutboundTaskCallListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 外呼任务通话列表查询.
     *
     * @param request - ReadOutboundTaskCallListRequest
     *
     * @returns ReadOutboundTaskCallListResponse
     *
     * @param ReadOutboundTaskCallListRequest $request
     *
     * @return ReadOutboundTaskCallListResponse
     */
    public function readOutboundTaskCallList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->readOutboundTaskCallListWithOptions($request, $runtime);
    }
}
