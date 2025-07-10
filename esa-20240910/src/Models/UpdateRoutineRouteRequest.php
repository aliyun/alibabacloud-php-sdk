<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class UpdateRoutineRouteRequest extends Model
{
    /**
     * @var string
     */
    public $bypass;

    /**
     * @var int
     */
    public $configId;

    /**
     * @var string
     */
    public $fallback;

    /**
     * @var string
     */
    public $routeEnable;

    /**
     * @var string
     */
    public $routeName;

    /**
     * @var string
     */
    public $routineName;

    /**
     * @var string
     */
    public $rule;

    /**
     * @var int
     */
    public $sequence;

    /**
     * @var int
     */
    public $siteId;
    protected $_name = [
        'bypass' => 'Bypass',
        'configId' => 'ConfigId',
        'fallback' => 'Fallback',
        'routeEnable' => 'RouteEnable',
        'routeName' => 'RouteName',
        'routineName' => 'RoutineName',
        'rule' => 'Rule',
        'sequence' => 'Sequence',
        'siteId' => 'SiteId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bypass) {
            $res['Bypass'] = $this->bypass;
        }

        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }

        if (null !== $this->fallback) {
            $res['Fallback'] = $this->fallback;
        }

        if (null !== $this->routeEnable) {
            $res['RouteEnable'] = $this->routeEnable;
        }

        if (null !== $this->routeName) {
            $res['RouteName'] = $this->routeName;
        }

        if (null !== $this->routineName) {
            $res['RoutineName'] = $this->routineName;
        }

        if (null !== $this->rule) {
            $res['Rule'] = $this->rule;
        }

        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
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
        if (isset($map['Bypass'])) {
            $model->bypass = $map['Bypass'];
        }

        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }

        if (isset($map['Fallback'])) {
            $model->fallback = $map['Fallback'];
        }

        if (isset($map['RouteEnable'])) {
            $model->routeEnable = $map['RouteEnable'];
        }

        if (isset($map['RouteName'])) {
            $model->routeName = $map['RouteName'];
        }

        if (isset($map['RoutineName'])) {
            $model->routineName = $map['RoutineName'];
        }

        if (isset($map['Rule'])) {
            $model->rule = $map['Rule'];
        }

        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
