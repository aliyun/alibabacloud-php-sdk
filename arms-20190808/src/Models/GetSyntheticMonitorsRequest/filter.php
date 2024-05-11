<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticMonitorsRequest;

use AlibabaCloud\Tea\Model;

class filter extends Model
{
    /**
     * @description The type of the monitoring point. Valid values: 1: PC. 2: mobile device.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $monitorCategory;

    /**
     * @description The network type. Valid values: 1: private network. 2: Internet.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $network;

    /**
     * @description The type of the monitoring task. Valid values:
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $taskType;
    protected $_name = [
        'monitorCategory' => 'MonitorCategory',
        'network'         => 'Network',
        'taskType'        => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->monitorCategory) {
            $res['MonitorCategory'] = $this->monitorCategory;
        }
        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MonitorCategory'])) {
            $model->monitorCategory = $map['MonitorCategory'];
        }
        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
