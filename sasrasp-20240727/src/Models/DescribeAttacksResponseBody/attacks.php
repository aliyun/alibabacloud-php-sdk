<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SasRasp\V20240727\Models\DescribeAttacksResponseBody;

use AlibabaCloud\SDK\SasRasp\V20240727\Models\DescribeAttacksResponseBody\attacks\inputParamItemList;
use AlibabaCloud\Tea\Model;

class attacks extends Model
{
    /**
     * @example /app
     *
     * @var string
     */
    public $appDir;

    /**
     * @example 661dece60bb1
     *
     * @var string
     */
    public $appId;

    /**
     * @example zhxy
     *
     * @var string
     */
    public $appName;

    /**
     * @example null
     *
     * @var string
     */
    public $avd;

    /**
     * @example jar
     *
     * @var string
     */
    public $cmdline;

    /**
     * @example high
     *
     * @var string
     */
    public $confidence;

    /**
     * @example {\\"Exist\\": \\"false\\"}
     *
     * @var string
     */
    public $content;

    /**
     * @example 1024
     *
     * @var int
     */
    public $contentLength;

    /**
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @example {\\"All\\": 12, \\"Online\\": 9}
     *
     * @var string
     */
    public $data;

    /**
     * @example {\\"X-Total-Count\\": 1}
     *
     * @var string
     */
    public $headers;

    /**
     * @example 100.116.60.78
     *
     * @var string
     */
    public $hostId;

    /**
     * @example hostnames
     *
     * @var string
     */
    public $hostname;

    /**
     * @var inputParamItemList[]
     */
    public $inputParamItemList;

    /**
     * @var int
     */
    public $installType;

    /**
     * @example 47.92.92.85
     *
     * @var string
     */
    public $ip;

    /**
     * @example 1.8.0_342
     *
     * @var string
     */
    public $jdk;

    /**
     * @example cn
     *
     * @var string
     */
    public $language;

    /**
     * @example 1.0
     *
     * @var string
     */
    public $languageVersion;

    /**
     * @example 1727281449756
     *
     * @var int
     */
    public $maxTimestamp;

    /**
     * @var string
     */
    public $message;

    /**
     * @example POST
     *
     * @var string
     */
    public $method;

    /**
     * @example null
     *
     * @var string
     */
    public $middlewareInstanceId;

    /**
     * @example 1727281449756
     *
     * @var int
     */
    public $minTimestamp;

    /**
     * @example linux
     *
     * @var string
     */
    public $os;

    /**
     * @example linux
     *
     * @var string
     */
    public $osArch;

    /**
     * @example aliyun_V3_5.1
     *
     * @var string
     */
    public $osVersion;

    /**
     * @example PUBLIC_CLOUD
     *
     * @var string
     */
    public $param;

    /**
     * @example 245256
     *
     * @var string
     */
    public $payload;

    /**
     * @example 100
     *
     * @var int
     */
    public $payloadLength;

    /**
     * @example 29719
     *
     * @var string
     */
    public $pid;

    /**
     * @example php
     *
     * @var string
     */
    public $raspVersion;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @example 192.168.1.1
     *
     * @var string
     */
    public $remote;

    /**
     * @example [{\\"TagKey\\": \\"acs:rm:rgId\\", \\"TagValue\\": \\"rg-aek25bwhtt22cjq\\"}]
     *
     * @var string
     */
    public $result;

    /**
     * @example 2
     *
     * @var string
     */
    public $ruleResult;

    /**
     * @example low
     *
     * @var string
     */
    public $severity;

    /**
     * @var string[]
     */
    public $stacktrace;

    /**
     * @example 1724033134746
     *
     * @var string
     */
    public $time;

    /**
     * @example 1712284140
     *
     * @var int
     */
    public $timestamp;

    /**
     * @example exact
     *
     * @var string
     */
    public $type;

    /**
     * @description unionId。
     *
     * @example 23yaet4dg6ek3s7aj
     *
     * @var string
     */
    public $unionId;

    /**
     * @example https://other-general-huadong1.oss-cn-hangzhou.aliyuncs.com/uploadWidget/TaxiInvoice_01.jpeg
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'appDir' => 'AppDir',
        'appId' => 'AppId',
        'appName' => 'AppName',
        'avd' => 'Avd',
        'cmdline' => 'Cmdline',
        'confidence' => 'Confidence',
        'content' => 'Content',
        'contentLength' => 'ContentLength',
        'count' => 'Count',
        'data' => 'Data',
        'headers' => 'Headers',
        'hostId' => 'HostId',
        'hostname' => 'Hostname',
        'inputParamItemList' => 'InputParamItemList',
        'installType' => 'InstallType',
        'ip' => 'Ip',
        'jdk' => 'Jdk',
        'language' => 'Language',
        'languageVersion' => 'LanguageVersion',
        'maxTimestamp' => 'MaxTimestamp',
        'message' => 'Message',
        'method' => 'Method',
        'middlewareInstanceId' => 'MiddlewareInstanceId',
        'minTimestamp' => 'MinTimestamp',
        'os' => 'Os',
        'osArch' => 'OsArch',
        'osVersion' => 'OsVersion',
        'param' => 'Param',
        'payload' => 'Payload',
        'payloadLength' => 'PayloadLength',
        'pid' => 'Pid',
        'raspVersion' => 'RaspVersion',
        'region' => 'Region',
        'remote' => 'Remote',
        'result' => 'Result',
        'ruleResult' => 'RuleResult',
        'severity' => 'Severity',
        'stacktrace' => 'Stacktrace',
        'time' => 'Time',
        'timestamp' => 'Timestamp',
        'type' => 'Type',
        'unionId' => 'UnionId',
        'url' => 'Url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appDir) {
            $res['AppDir'] = $this->appDir;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->avd) {
            $res['Avd'] = $this->avd;
        }
        if (null !== $this->cmdline) {
            $res['Cmdline'] = $this->cmdline;
        }
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->contentLength) {
            $res['ContentLength'] = $this->contentLength;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->headers) {
            $res['Headers'] = $this->headers;
        }
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }
        if (null !== $this->inputParamItemList) {
            $res['InputParamItemList'] = [];
            if (null !== $this->inputParamItemList && \is_array($this->inputParamItemList)) {
                $n = 0;
                foreach ($this->inputParamItemList as $item) {
                    $res['InputParamItemList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->installType) {
            $res['InstallType'] = $this->installType;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->jdk) {
            $res['Jdk'] = $this->jdk;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->languageVersion) {
            $res['LanguageVersion'] = $this->languageVersion;
        }
        if (null !== $this->maxTimestamp) {
            $res['MaxTimestamp'] = $this->maxTimestamp;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->middlewareInstanceId) {
            $res['MiddlewareInstanceId'] = $this->middlewareInstanceId;
        }
        if (null !== $this->minTimestamp) {
            $res['MinTimestamp'] = $this->minTimestamp;
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->osArch) {
            $res['OsArch'] = $this->osArch;
        }
        if (null !== $this->osVersion) {
            $res['OsVersion'] = $this->osVersion;
        }
        if (null !== $this->param) {
            $res['Param'] = $this->param;
        }
        if (null !== $this->payload) {
            $res['Payload'] = $this->payload;
        }
        if (null !== $this->payloadLength) {
            $res['PayloadLength'] = $this->payloadLength;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->raspVersion) {
            $res['RaspVersion'] = $this->raspVersion;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->remote) {
            $res['Remote'] = $this->remote;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->ruleResult) {
            $res['RuleResult'] = $this->ruleResult;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }
        if (null !== $this->stacktrace) {
            $res['Stacktrace'] = $this->stacktrace;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->unionId) {
            $res['UnionId'] = $this->unionId;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attacks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppDir'])) {
            $model->appDir = $map['AppDir'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Avd'])) {
            $model->avd = $map['Avd'];
        }
        if (isset($map['Cmdline'])) {
            $model->cmdline = $map['Cmdline'];
        }
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ContentLength'])) {
            $model->contentLength = $map['ContentLength'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Headers'])) {
            $model->headers = $map['Headers'];
        }
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }
        if (isset($map['InputParamItemList'])) {
            if (!empty($map['InputParamItemList'])) {
                $model->inputParamItemList = [];
                $n = 0;
                foreach ($map['InputParamItemList'] as $item) {
                    $model->inputParamItemList[$n++] = null !== $item ? inputParamItemList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstallType'])) {
            $model->installType = $map['InstallType'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Jdk'])) {
            $model->jdk = $map['Jdk'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['LanguageVersion'])) {
            $model->languageVersion = $map['LanguageVersion'];
        }
        if (isset($map['MaxTimestamp'])) {
            $model->maxTimestamp = $map['MaxTimestamp'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['MiddlewareInstanceId'])) {
            $model->middlewareInstanceId = $map['MiddlewareInstanceId'];
        }
        if (isset($map['MinTimestamp'])) {
            $model->minTimestamp = $map['MinTimestamp'];
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['OsArch'])) {
            $model->osArch = $map['OsArch'];
        }
        if (isset($map['OsVersion'])) {
            $model->osVersion = $map['OsVersion'];
        }
        if (isset($map['Param'])) {
            $model->param = $map['Param'];
        }
        if (isset($map['Payload'])) {
            $model->payload = $map['Payload'];
        }
        if (isset($map['PayloadLength'])) {
            $model->payloadLength = $map['PayloadLength'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['RaspVersion'])) {
            $model->raspVersion = $map['RaspVersion'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Remote'])) {
            $model->remote = $map['Remote'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['RuleResult'])) {
            $model->ruleResult = $map['RuleResult'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['Stacktrace'])) {
            if (!empty($map['Stacktrace'])) {
                $model->stacktrace = $map['Stacktrace'];
            }
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UnionId'])) {
            $model->unionId = $map['UnionId'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
