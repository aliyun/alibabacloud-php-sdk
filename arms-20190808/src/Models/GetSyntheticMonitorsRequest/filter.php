<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticMonitorsRequest;

use AlibabaCloud\Dara\Model;

class filter extends Model
{
    /**
     * @var int
     */
    public $monitorCategory;
    /**
     * @var int
     */
    public $network;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
