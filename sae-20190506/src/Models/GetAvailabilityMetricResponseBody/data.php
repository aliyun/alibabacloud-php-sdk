<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\GetAvailabilityMetricResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $enableAutoscale;

    /**
     * @var int
     */
    public $errorInstances;

    /**
     * @var int
     */
    public $instances;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $runnings;
    protected $_name = [
        'appId' => 'AppId',
        'enableAutoscale' => 'EnableAutoscale',
        'errorInstances' => 'ErrorInstances',
        'instances' => 'Instances',
        'name' => 'Name',
        'regionId' => 'RegionId',
        'runnings' => 'Runnings',
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

        if (null !== $this->enableAutoscale) {
            $res['EnableAutoscale'] = $this->enableAutoscale;
        }

        if (null !== $this->errorInstances) {
            $res['ErrorInstances'] = $this->errorInstances;
        }

        if (null !== $this->instances) {
            $res['Instances'] = $this->instances;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->runnings) {
            $res['Runnings'] = $this->runnings;
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

        if (isset($map['EnableAutoscale'])) {
            $model->enableAutoscale = $map['EnableAutoscale'];
        }

        if (isset($map['ErrorInstances'])) {
            $model->errorInstances = $map['ErrorInstances'];
        }

        if (isset($map['Instances'])) {
            $model->instances = $map['Instances'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Runnings'])) {
            $model->runnings = $map['Runnings'];
        }

        return $model;
    }
}
