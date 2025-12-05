<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsDebugSampleLogsResponseBody;

use AlibabaCloud\Dara\Model;

class samplingLogs extends Model
{
    /**
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
     * @var string
     */
    public $exportConfig;

    /**
     * @var string
     */
    public $exportContent;

    /**
     * @var string
     */
    public $httpRequestBody;

    /**
     * @var string
     */
    public $httpRequestHeaders;

    /**
     * @var string
     */
    public $httpRequestMethod;

    /**
     * @var string
     */
    public $httpRequestUrl;

    /**
     * @var string
     */
    public $httpResponseBody;

    /**
     * @var string
     */
    public $httpResponseFailMsg;

    /**
     * @var string
     */
    public $httpResponseHeaders;

    /**
     * @var string
     */
    public $httpResponseStatus;

    /**
     * @var int
     */
    public $httpStartTime;

    /**
     * @var string
     */
    public $httpTiming;

    /**
     * @var string
     */
    public $importContent;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $rt;

    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'chainId' => 'ChainId',
        'chainName' => 'ChainName',
        'checkResult' => 'CheckResult',
        'exportConfig' => 'ExportConfig',
        'exportContent' => 'ExportContent',
        'httpRequestBody' => 'HttpRequestBody',
        'httpRequestHeaders' => 'HttpRequestHeaders',
        'httpRequestMethod' => 'HttpRequestMethod',
        'httpRequestUrl' => 'HttpRequestUrl',
        'httpResponseBody' => 'HttpResponseBody',
        'httpResponseFailMsg' => 'HttpResponseFailMsg',
        'httpResponseHeaders' => 'HttpResponseHeaders',
        'httpResponseStatus' => 'HttpResponseStatus',
        'httpStartTime' => 'HttpStartTime',
        'httpTiming' => 'HttpTiming',
        'importContent' => 'ImportContent',
        'nodeId' => 'NodeId',
        'rt' => 'Rt',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
