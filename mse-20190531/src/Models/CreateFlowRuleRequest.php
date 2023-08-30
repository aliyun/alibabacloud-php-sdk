<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class CreateFlowRuleRequest extends Model
{
    /**
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @example ib09eblv6p@c3df23522******
     *
     * @var string
     */
    public $appId;

    /**
     * @example spring-cloud-a
     *
     * @var string
     */
    public $appName;

    /**
     * @example 0
     *
     * @var int
     */
    public $controlBehavior;

    /**
     * @example false
     *
     * @var bool
     */
    public $enable;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxQueueingTimeMs;

    /**
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example /b
     *
     * @var string
     */
    public $resource;

    /**
     * @example 20
     *
     * @var int
     */
    public $threshold;
    protected $_name = [
        'acceptLanguage'    => 'AcceptLanguage',
        'appId'             => 'AppId',
        'appName'           => 'AppName',
        'controlBehavior'   => 'ControlBehavior',
        'enable'            => 'Enable',
        'maxQueueingTimeMs' => 'MaxQueueingTimeMs',
        'namespace'         => 'Namespace',
        'regionId'          => 'RegionId',
        'resource'          => 'Resource',
        'threshold'         => 'Threshold',
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
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->controlBehavior) {
            $res['ControlBehavior'] = $this->controlBehavior;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->maxQueueingTimeMs) {
            $res['MaxQueueingTimeMs'] = $this->maxQueueingTimeMs;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFlowRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['ControlBehavior'])) {
            $model->controlBehavior = $map['ControlBehavior'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['MaxQueueingTimeMs'])) {
            $model->maxQueueingTimeMs = $map['MaxQueueingTimeMs'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        return $model;
    }
}
