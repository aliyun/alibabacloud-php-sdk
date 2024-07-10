<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\GetAvailabilityMetricResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The application ID.
     *
     * @example 017f39b8-dfa4-4e16-a84b-1dcee4b1****
     *
     * @var string
     */
    public $appId;

    /**
     * @description Indicates whether an auto scaling policy is enabled. Valid values:
     *
     *   **1**: An auto scaling policy is enabled.
     *   **0**: No auto scaling policy is enabled.
     *
     * @example 0
     *
     * @var int
     */
    public $enableAutoscale;

    /**
     * @description The number of abnormal instances.
     *
     * @example 0
     *
     * @var int
     */
    public $errorInstances;

    /**
     * @description The expected number of instances.
     *
     * @example 0
     *
     * @var int
     */
    public $instances;

    /**
     * @description The application name.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The namespace ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The current number of instances.
     *
     * @example 1
     *
     * @var int
     */
    public $runnings;
    protected $_name = [
        'appId'           => 'AppId',
        'enableAutoscale' => 'EnableAutoscale',
        'errorInstances'  => 'ErrorInstances',
        'instances'       => 'Instances',
        'name'            => 'Name',
        'regionId'        => 'RegionId',
        'runnings'        => 'Runnings',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
