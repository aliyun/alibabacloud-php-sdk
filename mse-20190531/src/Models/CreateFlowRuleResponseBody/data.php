<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\CreateFlowRuleResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appId;
    /**
     * @var string
     */
    public $appName;
    /**
     * @var int
     */
    public $controlBehavior;
    /**
     * @var bool
     */
    public $enable;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $limitApp;
    /**
     * @var int
     */
    public $maxQueueingTimeMs;
    /**
     * @var string
     */
    public $namespace;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resource;
    /**
     * @var float
     */
    public $threshold;
    protected $_name = [
        'appId'             => 'AppId',
        'appName'           => 'AppName',
        'controlBehavior'   => 'ControlBehavior',
        'enable'            => 'Enable',
        'id'                => 'Id',
        'limitApp'          => 'LimitApp',
        'maxQueueingTimeMs' => 'MaxQueueingTimeMs',
        'namespace'         => 'Namespace',
        'regionId'          => 'RegionId',
        'resource'          => 'Resource',
        'threshold'         => 'Threshold',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->limitApp) {
            $res['LimitApp'] = $this->limitApp;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
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

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['LimitApp'])) {
            $model->limitApp = $map['LimitApp'];
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
