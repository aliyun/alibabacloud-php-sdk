<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsDebugSampleLogsResponseBody;

use AlibabaCloud\Tea\Model;

class samplingLogs extends Model
{
    /**
     * @example 65354719
     *
     * @var string
     */
    public $chainId;

    /**
     * @var string
     */
    public $chainName;

    /**
     * @var string
     */
    public $checkResult;

    /**
     * @example {\"skuId\":\"{R:json@$.page.list[0].skuId}\"}
     *
     * @var string
     */
    public $exportConfig;

    /**
     * @example {"skuId":"1"}
     *
     * @var string
     */
    public $exportContent;

    /**
     * @example {"loginacct":"acce"}
     *
     * @var string
     */
    public $httpRequestBody;

    /**
     * @example [{"name":"v2","sensitive":false,"value":"1"},{"name":"x-pts-test","sensitive":false,"value":"2"}]
     *
     * @var string
     */
    public $httpRequestHeaders;

    /**
     * @example GET
     *
     * @var string
     */
    public $httpRequestMethod;

    /**
     * @example http://www.example.com
     *
     * @var string
     */
    public $httpRequestUrl;

    /**
     * @example {"timestamp":1679903049155,"status":404,"error":"Not Found","message":"No message available","path":"/"}
     *
     * @var string
     */
    public $httpResponseBody;

    /**
     * @example ""
     *
     * @var string
     */
    public $httpResponseFailMsg;

    /**
     * @example [{"valuePos":18,"name":"transfer-encoding","buffer":{"empty":false,"full":false},"sensitive":false,"value":"chunked"},{"valuePos":13,"name":"Content-Type","buffer":{"empty":false,"full":false},"sensitive":false,"value":"application/json;charset=UTF-8"},{"valuePos":5,"name":"Date","buffer":{"empty":false,"full":false},"sensitive":false,"value":"Mon, 27 Mar 2023 07:44:08 GMT"}]
     *
     * @var string
     */
    public $httpResponseHeaders;

    /**
     * @example 200
     *
     * @var string
     */
    public $httpResponseStatus;

    /**
     * @example 12
     *
     * @var int
     */
    public $httpStartTime;

    /**
     * @example {"traceId":"0:1:10a94f66pts-2069351-allsparktask","requests":[{"lease":{"conn":{"duration":-1,"finish":-1,"operation":"conn","start":-1},"dns":{"duration":-1,"finish":-1,"operation":"dns","start":-1},"duration":-1,"finish":-1,"operation":"lease","start":32277914755},"recv":{"duration":225975,"finish":32283700284,"message":"","operation":"recv","start":32283474309},"sent":{"duration":594179,"finish":32278776504,"message":"","operation":"sent","start":32278182325},"tag":"GET http://tomcodemall.com:30080/api/product/skuinfo/list?key=2&vv=4&t4=%EF%BB%BF101"}],"message":""}
     *
     * @var string
     */
    public $httpTiming;

    /**
     * @example ""
     *
     * @var string
     */
    public $importContent;

    /**
     * @example 1345531
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example 230
     *
     * @var string
     */
    public $rt;

    /**
     * @example 1650253024471
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'chainId'             => 'ChainId',
        'chainName'           => 'ChainName',
        'checkResult'         => 'CheckResult',
        'exportConfig'        => 'ExportConfig',
        'exportContent'       => 'ExportContent',
        'httpRequestBody'     => 'HttpRequestBody',
        'httpRequestHeaders'  => 'HttpRequestHeaders',
        'httpRequestMethod'   => 'HttpRequestMethod',
        'httpRequestUrl'      => 'HttpRequestUrl',
        'httpResponseBody'    => 'HttpResponseBody',
        'httpResponseFailMsg' => 'HttpResponseFailMsg',
        'httpResponseHeaders' => 'HttpResponseHeaders',
        'httpResponseStatus'  => 'HttpResponseStatus',
        'httpStartTime'       => 'HttpStartTime',
        'httpTiming'          => 'HttpTiming',
        'importContent'       => 'ImportContent',
        'nodeId'              => 'NodeId',
        'rt'                  => 'Rt',
        'timestamp'           => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chainId) {
            $res['ChainId'] = $this->chainId;
        }
        if (null !== $this->chainName) {
            $res['ChainName'] = $this->chainName;
        }
        if (null !== $this->checkResult) {
            $res['CheckResult'] = $this->checkResult;
        }
        if (null !== $this->exportConfig) {
            $res['ExportConfig'] = $this->exportConfig;
        }
        if (null !== $this->exportContent) {
            $res['ExportContent'] = $this->exportContent;
        }
        if (null !== $this->httpRequestBody) {
            $res['HttpRequestBody'] = $this->httpRequestBody;
        }
        if (null !== $this->httpRequestHeaders) {
            $res['HttpRequestHeaders'] = $this->httpRequestHeaders;
        }
        if (null !== $this->httpRequestMethod) {
            $res['HttpRequestMethod'] = $this->httpRequestMethod;
        }
        if (null !== $this->httpRequestUrl) {
            $res['HttpRequestUrl'] = $this->httpRequestUrl;
        }
        if (null !== $this->httpResponseBody) {
            $res['HttpResponseBody'] = $this->httpResponseBody;
        }
        if (null !== $this->httpResponseFailMsg) {
            $res['HttpResponseFailMsg'] = $this->httpResponseFailMsg;
        }
        if (null !== $this->httpResponseHeaders) {
            $res['HttpResponseHeaders'] = $this->httpResponseHeaders;
        }
        if (null !== $this->httpResponseStatus) {
            $res['HttpResponseStatus'] = $this->httpResponseStatus;
        }
        if (null !== $this->httpStartTime) {
            $res['HttpStartTime'] = $this->httpStartTime;
        }
        if (null !== $this->httpTiming) {
            $res['HttpTiming'] = $this->httpTiming;
        }
        if (null !== $this->importContent) {
            $res['ImportContent'] = $this->importContent;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->rt) {
            $res['Rt'] = $this->rt;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return samplingLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChainId'])) {
            $model->chainId = $map['ChainId'];
        }
        if (isset($map['ChainName'])) {
            $model->chainName = $map['ChainName'];
        }
        if (isset($map['CheckResult'])) {
            $model->checkResult = $map['CheckResult'];
        }
        if (isset($map['ExportConfig'])) {
            $model->exportConfig = $map['ExportConfig'];
        }
        if (isset($map['ExportContent'])) {
            $model->exportContent = $map['ExportContent'];
        }
        if (isset($map['HttpRequestBody'])) {
            $model->httpRequestBody = $map['HttpRequestBody'];
        }
        if (isset($map['HttpRequestHeaders'])) {
            $model->httpRequestHeaders = $map['HttpRequestHeaders'];
        }
        if (isset($map['HttpRequestMethod'])) {
            $model->httpRequestMethod = $map['HttpRequestMethod'];
        }
        if (isset($map['HttpRequestUrl'])) {
            $model->httpRequestUrl = $map['HttpRequestUrl'];
        }
        if (isset($map['HttpResponseBody'])) {
            $model->httpResponseBody = $map['HttpResponseBody'];
        }
        if (isset($map['HttpResponseFailMsg'])) {
            $model->httpResponseFailMsg = $map['HttpResponseFailMsg'];
        }
        if (isset($map['HttpResponseHeaders'])) {
            $model->httpResponseHeaders = $map['HttpResponseHeaders'];
        }
        if (isset($map['HttpResponseStatus'])) {
            $model->httpResponseStatus = $map['HttpResponseStatus'];
        }
        if (isset($map['HttpStartTime'])) {
            $model->httpStartTime = $map['HttpStartTime'];
        }
        if (isset($map['HttpTiming'])) {
            $model->httpTiming = $map['HttpTiming'];
        }
        if (isset($map['ImportContent'])) {
            $model->importContent = $map['ImportContent'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['Rt'])) {
            $model->rt = $map['Rt'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
