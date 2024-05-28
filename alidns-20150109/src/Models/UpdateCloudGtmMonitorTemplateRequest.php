<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmMonitorTemplateRequest\ispCityNodes;
use AlibabaCloud\Tea\Model;

class UpdateCloudGtmMonitorTemplateRequest extends Model
{
    /**
     * @example en-US
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @example 1ae05db4-10e7-11ef-b126-00163e24**22
     *
     * @var string
     */
    public $clientToken;

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
     * @var ispCityNodes[]
     */
    public $ispCityNodes;

    /**
     * @example Ping-IPv4
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
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
    protected $_name = [
        'acceptLanguage'  => 'AcceptLanguage',
        'clientToken'     => 'ClientToken',
        'evaluationCount' => 'EvaluationCount',
        'extendInfo'      => 'ExtendInfo',
        'failureRate'     => 'FailureRate',
        'interval'        => 'Interval',
        'ispCityNodes'    => 'IspCityNodes',
        'name'            => 'Name',
        'templateId'      => 'TemplateId',
        'timeout'         => 'Timeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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
        if (null !== $this->ispCityNodes) {
            $res['IspCityNodes'] = [];
            if (null !== $this->ispCityNodes && \is_array($this->ispCityNodes)) {
                $n = 0;
                foreach ($this->ispCityNodes as $item) {
                    $res['IspCityNodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCloudGtmMonitorTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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
        if (isset($map['IspCityNodes'])) {
            if (!empty($map['IspCityNodes'])) {
                $model->ispCityNodes = [];
                $n                   = 0;
                foreach ($map['IspCityNodes'] as $item) {
                    $model->ispCityNodes[$n++] = null !== $item ? ispCityNodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
