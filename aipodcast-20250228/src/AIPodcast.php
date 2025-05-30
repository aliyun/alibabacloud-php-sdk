<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIPodcast\V20250228;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\AIPodcast\V20250228\Models\PodcastTaskResultQueryRequest;
use AlibabaCloud\SDK\AIPodcast\V20250228\Models\PodcastTaskResultQueryResponse;
use AlibabaCloud\SDK\AIPodcast\V20250228\Models\PodcastTaskSubmitRequest;
use AlibabaCloud\SDK\AIPodcast\V20250228\Models\PodcastTaskSubmitResponse;
use AlibabaCloud\SDK\AIPodcast\V20250228\Models\PodcastTaskSubmitShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class AIPodcast extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('aipodcast', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * ai播客生成任务结果查询.
     *
     * @param request - PodcastTaskResultQueryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PodcastTaskResultQueryResponse
     *
     * @param PodcastTaskResultQueryRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return PodcastTaskResultQueryResponse
     */
    public function podcastTaskResultQueryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->taskId) {
            @$body['taskId'] = $request->taskId;
        }

        if (null !== $request->workspaceId) {
            @$body['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PodcastTaskResultQuery',
            'version' => '2025-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/podcast/task',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PodcastTaskResultQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ai播客生成任务结果查询.
     *
     * @param request - PodcastTaskResultQueryRequest
     *
     * @returns PodcastTaskResultQueryResponse
     *
     * @param PodcastTaskResultQueryRequest $request
     *
     * @return PodcastTaskResultQueryResponse
     */
    public function podcastTaskResultQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->podcastTaskResultQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * ai播客生成任务提交.
     *
     * @param tmpReq - PodcastTaskSubmitRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PodcastTaskSubmitResponse
     *
     * @param PodcastTaskSubmitRequest $tmpReq
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return PodcastTaskSubmitResponse
     */
    public function podcastTaskSubmitWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new PodcastTaskSubmitShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->fileUrls) {
            $request->fileUrlsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->fileUrls, 'fileUrls', 'json');
        }

        if (null !== $tmpReq->voices) {
            $request->voicesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->voices, 'voices', 'json');
        }

        $body = [];
        if (null !== $request->counts) {
            @$body['counts'] = $request->counts;
        }

        if (null !== $request->fileUrlsShrink) {
            @$body['fileUrls'] = $request->fileUrlsShrink;
        }

        if (null !== $request->sourceLang) {
            @$body['sourceLang'] = $request->sourceLang;
        }

        if (null !== $request->text) {
            @$body['text'] = $request->text;
        }

        if (null !== $request->topic) {
            @$body['topic'] = $request->topic;
        }

        if (null !== $request->voicesShrink) {
            @$body['voices'] = $request->voicesShrink;
        }

        if (null !== $request->workspaceId) {
            @$body['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PodcastTaskSubmit',
            'version' => '2025-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/podcast/task/submit',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PodcastTaskSubmitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ai播客生成任务提交.
     *
     * @param request - PodcastTaskSubmitRequest
     *
     * @returns PodcastTaskSubmitResponse
     *
     * @param PodcastTaskSubmitRequest $request
     *
     * @return PodcastTaskSubmitResponse
     */
    public function podcastTaskSubmit($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->podcastTaskSubmitWithOptions($request, $headers, $runtime);
    }
}
