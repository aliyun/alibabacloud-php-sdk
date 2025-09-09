<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\SearchCloudGtmMonitorTemplatesResponseBody\templates;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SearchCloudGtmMonitorTemplatesResponseBody\templates\template\ispCityNodes;

class template extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var int
     */
    public $evaluationCount;

    /**
     * @var string
     */
    public $extendInfo;

    /**
     * @var int
     */
    public $failureRate;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var string
     */
    public $ipVersion;

    /**
     * @var ispCityNodes
     */
    public $ispCityNodes;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var int
     */
    public $updateTimestamp;
    protected $_name = [
        'createTime' => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'evaluationCount' => 'EvaluationCount',
        'extendInfo' => 'ExtendInfo',
        'failureRate' => 'FailureRate',
        'interval' => 'Interval',
        'ipVersion' => 'IpVersion',
        'ispCityNodes' => 'IspCityNodes',
        'name' => 'Name',
        'protocol' => 'Protocol',
        'remark' => 'Remark',
        'templateId' => 'TemplateId',
        'timeout' => 'Timeout',
        'updateTime' => 'UpdateTime',
        'updateTimestamp' => 'UpdateTimestamp',
    ];

    public function validate()
    {
        if (null !== $this->ispCityNodes) {
            $this->ispCityNodes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['IspCityNodes'] = null !== $this->ispCityNodes ? $this->ispCityNodes->toArray($noStream) : $this->ispCityNodes;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
