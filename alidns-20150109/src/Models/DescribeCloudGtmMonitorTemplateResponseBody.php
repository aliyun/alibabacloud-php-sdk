<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmMonitorTemplateResponseBody\ispCityNodes;
use AlibabaCloud\Tea\Model;

class DescribeCloudGtmMonitorTemplateResponseBody extends Model
{
    /**
     * @example 2024-03-23T13:09Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1527690629357
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @example 2
     *
     * @var int
     */
    public $evaluationCount;

    /**
     * @example {\\"code\\":200,\\"path\\":\\"\\\\index.htm\\",\\"host\\":\\"aliyun.com\\"}
     *
     * @var string
     */
    public $extendInfo;

    /**
     * @example 50
     *
     * @var int
     */
    public $failureRate;

    /**
     * @example 60
     *
     * @var int
     */
    public $interval;

    /**
     * @example IPv4
     *
     * @var string
     */
    public $ipVersion;

    /**
     * @var ispCityNodes
     */
    public $ispCityNodes;

    /**
     * @example Ping-IPv4
     *
     * @var string
     */
    public $name;

    /**
     * @example ping
     *
     * @var string
     */
    public $protocol;

    /**
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @example 6AEC7A64-3CB1-4C49-8B35-0B901F1E26BF
     *
     * @var string
     */
    public $requestId;

    /**
     * @example mtp-89518052425100**80
     *
     * @var string
     */
    public $templateId;

    /**
     * @example 5000
     *
     * @var int
     */
    public $timeout;

    /**
     * @example 2024-03-29T13:20Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 1527690629357
     *
     * @var int
     */
    public $updateTimestamp;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'evaluationCount' => 'EvaluationCount',
        'extendInfo'      => 'ExtendInfo',
        'failureRate'     => 'FailureRate',
        'interval'        => 'Interval',
        'ipVersion'       => 'IpVersion',
        'ispCityNodes'    => 'IspCityNodes',
        'name'            => 'Name',
        'protocol'        => 'Protocol',
        'remark'          => 'Remark',
        'requestId'       => 'RequestId',
        'templateId'      => 'TemplateId',
        'timeout'         => 'Timeout',
        'updateTime'      => 'UpdateTime',
        'updateTimestamp' => 'UpdateTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->evaluationCount) {
            $res['EvaluationCount'] = $this->evaluationCount;
        }
        if (null !== $this->extendInfo) {
            $res['ExtendInfo'] = $this->extendInfo;
        }
        if (null !== $this->failureRate) {
            $res['FailureRate'] = $this->failureRate;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->ispCityNodes) {
            $res['IspCityNodes'] = null !== $this->ispCityNodes ? $this->ispCityNodes->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCloudGtmMonitorTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['EvaluationCount'])) {
            $model->evaluationCount = $map['EvaluationCount'];
        }
        if (isset($map['ExtendInfo'])) {
            $model->extendInfo = $map['ExtendInfo'];
        }
        if (isset($map['FailureRate'])) {
            $model->failureRate = $map['FailureRate'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['IspCityNodes'])) {
            $model->ispCityNodes = ispCityNodes::fromMap($map['IspCityNodes']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }

        return $model;
    }
}
