<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SasRasp\V20240727\Models\DescribeAttacksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SasRasp\V20240727\Models\DescribeAttacksResponseBody\attacks\inputParamItemList;

class attacks extends Model
{
    /**
     * @var string
     */
    public $appDir;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $avd;

    /**
     * @var string
     */
    public $cmdline;

    /**
     * @var string
     */
    public $confidence;

    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $contentLength;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $data;

    /**
     * @var int
     */
    public $handleStatus;

    /**
     * @var int
     */
    public $handleTimestamp;

    /**
     * @var string
     */
    public $headers;

    /**
     * @var string
     */
    public $hostId;

    /**
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
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $jdk;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $languageVersion;

    /**
     * @var int
     */
    public $maxTimestamp;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $middlewareInstanceId;

    /**
     * @var int
     */
    public $minTimestamp;

    /**
     * @var string
     */
    public $os;

    /**
     * @var string
     */
    public $osArch;

    /**
     * @var string
     */
    public $osVersion;

    /**
     * @var string
     */
    public $param;

    /**
     * @var string
     */
    public $payload;

    /**
     * @var int
     */
    public $payloadLength;

    /**
     * @var string
     */
    public $pid;

    /**
     * @var string
     */
    public $raspVersion;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $remote;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $ruleResult;

    /**
     * @var string
     */
    public $severity;

    /**
     * @var string[]
     */
    public $stacktrace;

    /**
     * @var string
     */
    public $time;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $unionId;

    /**
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
        'handleStatus' => 'HandleStatus',
        'handleTimestamp' => 'HandleTimestamp',
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

    public function validate()
    {
        if (\is_array($this->inputParamItemList)) {
            Model::validateArray($this->inputParamItemList);
        }
        if (\is_array($this->stacktrace)) {
            Model::validateArray($this->stacktrace);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->handleStatus) {
            $res['HandleStatus'] = $this->handleStatus;
        }

        if (null !== $this->handleTimestamp) {
            $res['HandleTimestamp'] = $this->handleTimestamp;
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
            if (\is_array($this->inputParamItemList)) {
                $res['InputParamItemList'] = [];
                $n1 = 0;
                foreach ($this->inputParamItemList as $item1) {
                    $res['InputParamItemList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->stacktrace)) {
                $res['Stacktrace'] = [];
                $n1 = 0;
                foreach ($this->stacktrace as $item1) {
                    $res['Stacktrace'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['HandleStatus'])) {
            $model->handleStatus = $map['HandleStatus'];
        }

        if (isset($map['HandleTimestamp'])) {
            $model->handleTimestamp = $map['HandleTimestamp'];
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
                $n1 = 0;
                foreach ($map['InputParamItemList'] as $item1) {
                    $model->inputParamItemList[$n1] = inputParamItemList::fromMap($item1);
                    ++$n1;
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
                $model->stacktrace = [];
                $n1 = 0;
                foreach ($map['Stacktrace'] as $item1) {
                    $model->stacktrace[$n1] = $item1;
                    ++$n1;
                }
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
