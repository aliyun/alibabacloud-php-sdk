<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\RAI\V20240701\Models\BatchContentAsyncDetectRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\BatchContentAsyncDetectResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\BatchContentSyncDetectRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\BatchContentSyncDetectResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\CheckAccountRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\CheckAccountResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\ContentAsyncDetectRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\ContentAsyncDetectResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\ContentSyncDetectRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\ContentSyncDetectResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetContentDetectResultRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetContentDetectResultResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\ListSensitiveWordRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\ListSensitiveWordResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\RegisterAccountRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\RegisterAccountResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\SyncSensitiveWordRequest;
use AlibabaCloud\SDK\RAI\V20240701\Models\SyncSensitiveWordResponse;
use AlibabaCloud\SDK\RAI\V20240701\Models\SyncSensitiveWordShrinkRequest;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class RAI extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('rai', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary BatchContentAsyncDetect
     *  *
     * @param BatchContentAsyncDetectRequest $request BatchContentAsyncDetectRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchContentAsyncDetectResponse BatchContentAsyncDetectResponse
     */
    public function batchContentAsyncDetectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sceneName)) {
            $query['SceneName'] = $request->sceneName;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $body = [];
        if (!Utils::isUnset($request->serviceParameterList)) {
            $body['serviceParameterList'] = $request->serviceParameterList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchContentAsyncDetect',
            'version'     => '2024-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BatchContentAsyncDetectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary BatchContentAsyncDetect
     *  *
     * @param BatchContentAsyncDetectRequest $request BatchContentAsyncDetectRequest
     *
     * @return BatchContentAsyncDetectResponse BatchContentAsyncDetectResponse
     */
    public function batchContentAsyncDetect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchContentAsyncDetectWithOptions($request, $runtime);
    }

    /**
     * @summary BatchContentSyncDetect
     *  *
     * @param BatchContentSyncDetectRequest $request BatchContentSyncDetectRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchContentSyncDetectResponse BatchContentSyncDetectResponse
     */
    public function batchContentSyncDetectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sceneName)) {
            $query['SceneName'] = $request->sceneName;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $body = [];
        if (!Utils::isUnset($request->serviceParameterList)) {
            $body['serviceParameterList'] = $request->serviceParameterList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchContentSyncDetect',
            'version'     => '2024-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BatchContentSyncDetectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary BatchContentSyncDetect
     *  *
     * @param BatchContentSyncDetectRequest $request BatchContentSyncDetectRequest
     *
     * @return BatchContentSyncDetectResponse BatchContentSyncDetectResponse
     */
    public function batchContentSyncDetect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchContentSyncDetectWithOptions($request, $runtime);
    }

    /**
     * @summary 检查用户是否开通RAI服务
     *  *
     * @param CheckAccountRequest $request CheckAccountRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckAccountResponse CheckAccountResponse
     */
    public function checkAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckAccount',
            'version'     => '2024-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 检查用户是否开通RAI服务
     *  *
     * @param CheckAccountRequest $request CheckAccountRequest
     *
     * @return CheckAccountResponse CheckAccountResponse
     */
    public function checkAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkAccountWithOptions($request, $runtime);
    }

    /**
     * @summary ContentAsyncDetect
     *  *
     * @param ContentAsyncDetectRequest $request ContentAsyncDetectRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ContentAsyncDetectResponse ContentAsyncDetectResponse
     */
    public function contentAsyncDetectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sceneName)) {
            $query['SceneName'] = $request->sceneName;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $body = [];
        if (!Utils::isUnset($request->serviceParameter)) {
            $body['serviceParameter'] = $request->serviceParameter;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ContentAsyncDetect',
            'version'     => '2024-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ContentAsyncDetectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary ContentAsyncDetect
     *  *
     * @param ContentAsyncDetectRequest $request ContentAsyncDetectRequest
     *
     * @return ContentAsyncDetectResponse ContentAsyncDetectResponse
     */
    public function contentAsyncDetect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->contentAsyncDetectWithOptions($request, $runtime);
    }

    /**
     * @summary ContentSyncDetect
     *  *
     * @param ContentSyncDetectRequest $request ContentSyncDetectRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ContentSyncDetectResponse ContentSyncDetectResponse
     */
    public function contentSyncDetectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sceneName)) {
            $query['SceneName'] = $request->sceneName;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $body = [];
        if (!Utils::isUnset($request->serviceParameter)) {
            $body['serviceParameter'] = $request->serviceParameter;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ContentSyncDetect',
            'version'     => '2024-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ContentSyncDetectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary ContentSyncDetect
     *  *
     * @param ContentSyncDetectRequest $request ContentSyncDetectRequest
     *
     * @return ContentSyncDetectResponse ContentSyncDetectResponse
     */
    public function contentSyncDetect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->contentSyncDetectWithOptions($request, $runtime);
    }

    /**
     * @summary GetContentDetectResult
     *  *
     * @param GetContentDetectResultRequest $request GetContentDetectResultRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetContentDetectResultResponse GetContentDetectResultResponse
     */
    public function getContentDetectResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetContentDetectResult',
            'version'     => '2024-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetContentDetectResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary GetContentDetectResult
     *  *
     * @param GetContentDetectResultRequest $request GetContentDetectResultRequest
     *
     * @return GetContentDetectResultResponse GetContentDetectResultResponse
     */
    public function getContentDetectResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getContentDetectResultWithOptions($request, $runtime);
    }

    /**
     * @summary ListSensitiveWord
     *  *
     * @param ListSensitiveWordRequest $request ListSensitiveWordRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSensitiveWordResponse ListSensitiveWordResponse
     */
    public function listSensitiveWordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSensitiveWord',
            'version'     => '2024-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSensitiveWordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary ListSensitiveWord
     *  *
     * @param ListSensitiveWordRequest $request ListSensitiveWordRequest
     *
     * @return ListSensitiveWordResponse ListSensitiveWordResponse
     */
    public function listSensitiveWord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSensitiveWordWithOptions($request, $runtime);
    }

    /**
     * @summary 注册RAI账号
     *  *
     * @param RegisterAccountRequest $request RegisterAccountRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return RegisterAccountResponse RegisterAccountResponse
     */
    public function registerAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->memo)) {
            $query['Memo'] = $request->memo;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RegisterAccount',
            'version'     => '2024-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RegisterAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 注册RAI账号
     *  *
     * @param RegisterAccountRequest $request RegisterAccountRequest
     *
     * @return RegisterAccountResponse RegisterAccountResponse
     */
    public function registerAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerAccountWithOptions($request, $runtime);
    }

    /**
     * @summary SyncSensitiveWord
     *  *
     * @param SyncSensitiveWordRequest $tmpReq  SyncSensitiveWordRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return SyncSensitiveWordResponse SyncSensitiveWordResponse
     */
    public function syncSensitiveWordWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SyncSensitiveWordShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->bodyData)) {
            $request->bodyDataShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->bodyData, 'BodyData', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->commit)) {
            $query['Commit'] = $request->commit;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->bodyDataShrink)) {
            $body['BodyData'] = $request->bodyDataShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SyncSensitiveWord',
            'version'     => '2024-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SyncSensitiveWordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary SyncSensitiveWord
     *  *
     * @param SyncSensitiveWordRequest $request SyncSensitiveWordRequest
     *
     * @return SyncSensitiveWordResponse SyncSensitiveWordResponse
     */
    public function syncSensitiveWord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncSensitiveWordWithOptions($request, $runtime);
    }
}
