<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListRoutineRoutesResponseBody;

use AlibabaCloud\Dara\Model;

class configs extends Model
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
    public $configType;

    /**
     * @var string
     */
    public $mode;

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

    /**
     * @var string
     */
    public $siteName;

    /**
     * @var int
     */
    public $siteVersion;
    protected $_name = [
        'bypass' => 'Bypass',
        'configId' => 'ConfigId',
        'configType' => 'ConfigType',
        'mode' => 'Mode',
        'routeEnable' => 'RouteEnable',
        'routeName' => 'RouteName',
        'routineName' => 'RoutineName',
        'rule' => 'Rule',
        'sequence' => 'Sequence',
        'siteId' => 'SiteId',
        'siteName' => 'SiteName',
        'siteVersion' => 'SiteVersion',
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

        if (null !== $this->configType) {
            $res['ConfigType'] = $this->configType;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
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

        if (null !== $this->siteName) {
            $res['SiteName'] = $this->siteName;
        }

        if (null !== $this->siteVersion) {
            $res['SiteVersion'] = $this->siteVersion;
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

        if (isset($map['ConfigType'])) {
            $model->configType = $map['ConfigType'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
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

        if (isset($map['SiteName'])) {
            $model->siteName = $map['SiteName'];
        }

        if (isset($map['SiteVersion'])) {
            $model->siteVersion = $map['SiteVersion'];
        }

        return $model;
    }
}
