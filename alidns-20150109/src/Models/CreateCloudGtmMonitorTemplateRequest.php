<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\CreateCloudGtmMonitorTemplateRequest\ispCityNodes;
use AlibabaCloud\Tea\Model;

class CreateCloudGtmMonitorTemplateRequest extends Model
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
     * @description This parameter is required.
     *
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
     * @description This parameter is required.
     *
     * @example 50
     *
     * @var int
     */
    public $failureRate;

    /**
     * @description This parameter is required.
     *
     * @example 60
     *
     * @var int
     */
    public $interval;

    /**
     * @description This parameter is required.
     *
     * @example IPv4
     *
     * @var string
     */
    public $ipVersion;

    /**
     * @description This parameter is required.
     *
     * @var ispCityNodes[]
     */
    public $ispCityNodes;

    /**
     * @description This parameter is required.
     *
     * @example Ping-IPv4
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example ping
     *
     * @var string
     */
    public $protocol;

    /**
     * @description This parameter is required.
     *
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
        'ipVersion'       => 'IpVersion',
        'ispCityNodes'    => 'IspCityNodes',
        'name'            => 'Name',
        'protocol'        => 'Protocol',
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
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
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
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCloudGtmMonitorTemplateRequest
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
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
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
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
