<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20210728;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Mts\V20210728\Models\QueryCopyrightExtractRequest;
use AlibabaCloud\SDK\Mts\V20210728\Models\QueryCopyrightExtractResponse;
use AlibabaCloud\SDK\Mts\V20210728\Models\QueryCopyrightRequest;
use AlibabaCloud\SDK\Mts\V20210728\Models\QueryCopyrightResponse;
use AlibabaCloud\SDK\Mts\V20210728\Models\QueryTraceAbRequest;
use AlibabaCloud\SDK\Mts\V20210728\Models\QueryTraceAbResponse;
use AlibabaCloud\SDK\Mts\V20210728\Models\QueryTraceExtractRequest;
use AlibabaCloud\SDK\Mts\V20210728\Models\QueryTraceExtractResponse;
use AlibabaCloud\SDK\Mts\V20210728\Models\QueryTraceMuRequest;
use AlibabaCloud\SDK\Mts\V20210728\Models\QueryTraceMuResponse;
use AlibabaCloud\SDK\Mts\V20210728\Models\SubmitCopyrightExtractRequest;
use AlibabaCloud\SDK\Mts\V20210728\Models\SubmitCopyrightExtractResponse;
use AlibabaCloud\SDK\Mts\V20210728\Models\SubmitCopyrightJobRequest;
use AlibabaCloud\SDK\Mts\V20210728\Models\SubmitCopyrightJobResponse;
use AlibabaCloud\SDK\Mts\V20210728\Models\SubmitImageCopyrightRequest;
use AlibabaCloud\SDK\Mts\V20210728\Models\SubmitImageCopyrightResponse;
use AlibabaCloud\SDK\Mts\V20210728\Models\SubmitTraceAbRequest;
use AlibabaCloud\SDK\Mts\V20210728\Models\SubmitTraceAbResponse;
use AlibabaCloud\SDK\Mts\V20210728\Models\SubmitTraceExtractRequest;
use AlibabaCloud\SDK\Mts\V20210728\Models\SubmitTraceExtractResponse;
use AlibabaCloud\SDK\Mts\V20210728\Models\SubmitTracemuRequest;
use AlibabaCloud\SDK\Mts\V20210728\Models\SubmitTracemuResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Mts extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-2-pop'          => 'mts.aliyuncs.com',
            'ap-southeast-2'              => 'mts.aliyuncs.com',
            'ap-southeast-3'              => 'mts.aliyuncs.com',
            'cn-beijing-finance-1'        => 'mts.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'mts.aliyuncs.com',
            'cn-beijing-gov-1'            => 'mts.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'mts.aliyuncs.com',
            'cn-chengdu'                  => 'mts.aliyuncs.com',
            'cn-edge-1'                   => 'mts.aliyuncs.com',
            'cn-fujian'                   => 'mts.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'mts.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'mts.aliyuncs.com',
            'cn-hangzhou-finance'         => 'mts.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'mts.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'mts.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'mts.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'mts.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'mts.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'mts.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'mts.aliyuncs.com',
            'cn-north-2-gov-1'            => 'mts.aliyuncs.com',
            'cn-qingdao-nebula'           => 'mts.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'mts.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'mts.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'mts.aliyuncs.com',
            'cn-shanghai-inner'           => 'mts.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'mts.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'mts.aliyuncs.com',
            'cn-shenzhen-inner'           => 'mts.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'mts.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'mts.aliyuncs.com',
            'cn-wuhan'                    => 'mts.aliyuncs.com',
            'cn-wulanchabu'               => 'mts.aliyuncs.com',
            'cn-yushanfang'               => 'mts.aliyuncs.com',
            'cn-zhangbei'                 => 'mts.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'mts.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'mts.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'mts.aliyuncs.com',
            'eu-west-1-oxs'               => 'mts.aliyuncs.com',
            'me-east-1'                   => 'mts.aliyuncs.com',
            'rus-west-1-pop'              => 'mts.aliyuncs.com',
            'us-east-1'                   => 'mts.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('mts', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param QueryCopyrightRequest $request
     *
     * @return QueryCopyrightResponse
     */
    public function queryCopyright($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryCopyrightWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryCopyrightRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return QueryCopyrightResponse
     */
    public function queryCopyrightWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->createTimeEnd)) {
            $body['CreateTimeEnd'] = $request->createTimeEnd;
        }
        if (!Utils::isUnset($request->createTimeStart)) {
            $body['CreateTimeStart'] = $request->createTimeStart;
        }
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->level)) {
            $body['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryCopyright',
            'version'     => '2021-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/queryCopyrightJob',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryCopyrightResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryCopyrightExtractRequest $request
     *
     * @return QueryCopyrightExtractResponse
     */
    public function queryCopyrightExtract($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryCopyrightExtractWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryCopyrightExtractRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return QueryCopyrightExtractResponse
     */
    public function queryCopyrightExtractWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryCopyrightExtract',
            'version'     => '2021-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/queryCopyrightExtract',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryCopyrightExtractResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTraceAbRequest $request
     *
     * @return QueryTraceAbResponse
     */
    public function queryTraceAb($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryTraceAbWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryTraceAbRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return QueryTraceAbResponse
     */
    public function queryTraceAbWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->mediaId)) {
            $body['MediaId'] = $request->mediaId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryTraceAb',
            'version'     => '2021-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/queryTraceAb',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryTraceAbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTraceExtractRequest $request
     *
     * @return QueryTraceExtractResponse
     */
    public function queryTraceExtract($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryTraceExtractWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryTraceExtractRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return QueryTraceExtractResponse
     */
    public function queryTraceExtractWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryTraceExtract',
            'version'     => '2021-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/queryTraceExtract',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryTraceExtractResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTraceMuRequest $request
     *
     * @return QueryTraceMuResponse
     */
    public function queryTraceMu($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryTraceMuWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryTraceMuRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return QueryTraceMuResponse
     */
    public function queryTraceMuWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->createTimeEnd)) {
            $body['CreateTimeEnd'] = $request->createTimeEnd;
        }
        if (!Utils::isUnset($request->createTimeStart)) {
            $body['CreateTimeStart'] = $request->createTimeStart;
        }
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->level)) {
            $body['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->messageId)) {
            $body['MessageId'] = $request->messageId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryTraceMu',
            'version'     => '2021-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/queryTraceM3u8',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryTraceMuResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitCopyrightExtractRequest $request
     *
     * @return SubmitCopyrightExtractResponse
     */
    public function submitCopyrightExtract($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitCopyrightExtractWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SubmitCopyrightExtractRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return SubmitCopyrightExtractResponse
     */
    public function submitCopyrightExtractWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->callBack)) {
            $body['CallBack'] = $request->callBack;
        }
        if (!Utils::isUnset($request->input)) {
            $body['Input'] = $request->input;
        }
        if (!Utils::isUnset($request->url)) {
            $body['Url'] = $request->url;
        }
        if (!Utils::isUnset($request->userData)) {
            $body['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubmitCopyrightExtract',
            'version'     => '2021-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/submitCopyrightExtract',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SubmitCopyrightExtractResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitCopyrightJobRequest $request
     *
     * @return SubmitCopyrightJobResponse
     */
    public function submitCopyrightJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitCopyrightJobWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SubmitCopyrightJobRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitCopyrightJobResponse
     */
    public function submitCopyrightJobWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->callBack)) {
            $body['CallBack'] = $request->callBack;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->input)) {
            $body['Input'] = $request->input;
        }
        if (!Utils::isUnset($request->level)) {
            $body['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->message)) {
            $body['Message'] = $request->message;
        }
        if (!Utils::isUnset($request->output)) {
            $body['Output'] = $request->output;
        }
        if (!Utils::isUnset($request->params)) {
            $body['Params'] = $request->params;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->totalTime)) {
            $body['TotalTime'] = $request->totalTime;
        }
        if (!Utils::isUnset($request->url)) {
            $body['Url'] = $request->url;
        }
        if (!Utils::isUnset($request->userData)) {
            $body['UserData'] = $request->userData;
        }
        if (!Utils::isUnset($request->visibleMessage)) {
            $body['VisibleMessage'] = $request->visibleMessage;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubmitCopyrightJob',
            'version'     => '2021-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/submitCopyrightJob',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SubmitCopyrightJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitImageCopyrightRequest $request
     *
     * @return SubmitImageCopyrightResponse
     */
    public function submitImageCopyright($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitImageCopyrightWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SubmitImageCopyrightRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return SubmitImageCopyrightResponse
     */
    public function submitImageCopyrightWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->level)) {
            $body['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->message)) {
            $body['Message'] = $request->message;
        }
        if (!Utils::isUnset($request->output)) {
            $body['Output'] = $request->output;
        }
        if (!Utils::isUnset($request->params)) {
            $body['Params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubmitImageCopyright',
            'version'     => '2021-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/submitImageCopyright',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SubmitImageCopyrightResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitTraceAbRequest $request
     *
     * @return SubmitTraceAbResponse
     */
    public function submitTraceAb($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitTraceAbWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SubmitTraceAbRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return SubmitTraceAbResponse
     */
    public function submitTraceAbWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->callBack)) {
            $body['CallBack'] = $request->callBack;
        }
        if (!Utils::isUnset($request->cipherBase64ed)) {
            $body['CipherBase64ed'] = $request->cipherBase64ed;
        }
        if (!Utils::isUnset($request->input)) {
            $body['Input'] = $request->input;
        }
        if (!Utils::isUnset($request->level)) {
            $body['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->output)) {
            $body['Output'] = $request->output;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->totalTime)) {
            $body['TotalTime'] = $request->totalTime;
        }
        if (!Utils::isUnset($request->url)) {
            $body['Url'] = $request->url;
        }
        if (!Utils::isUnset($request->userData)) {
            $body['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubmitTraceAb',
            'version'     => '2021-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/submitTraceAb',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SubmitTraceAbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitTraceExtractRequest $request
     *
     * @return SubmitTraceExtractResponse
     */
    public function submitTraceExtract($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitTraceExtractWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SubmitTraceExtractRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitTraceExtractResponse
     */
    public function submitTraceExtractWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->callBack)) {
            $body['CallBack'] = $request->callBack;
        }
        if (!Utils::isUnset($request->input)) {
            $body['Input'] = $request->input;
        }
        if (!Utils::isUnset($request->url)) {
            $body['Url'] = $request->url;
        }
        if (!Utils::isUnset($request->userData)) {
            $body['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubmitTraceExtract',
            'version'     => '2021-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/submitTraceExtract',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SubmitTraceExtractResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitTracemuRequest $request
     *
     * @return SubmitTracemuResponse
     */
    public function submitTracemu($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitTracemuWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SubmitTracemuRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return SubmitTracemuResponse
     */
    public function submitTracemuWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->keyUri)) {
            $body['KeyUri'] = $request->keyUri;
        }
        if (!Utils::isUnset($request->mediaId)) {
            $body['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->output)) {
            $body['Output'] = $request->output;
        }
        if (!Utils::isUnset($request->trace)) {
            $body['Trace'] = $request->trace;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubmitTracemu',
            'version'     => '2021-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/submitTraceM3u8',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SubmitTracemuResponse::fromMap($this->callApi($params, $req, $runtime));
    }
}
