<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\GetDeviceOtaAutoStatusResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $autoUpdate;

    /**
     * @var string
     */
    public $autoUpdateTimeSchedule;

    /**
     * @var int
     */
    public $forceUpgrade;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'autoUpdate'             => 'AutoUpdate',
        'autoUpdateTimeSchedule' => 'AutoUpdateTimeSchedule',
        'forceUpgrade'           => 'ForceUpgrade',
        'status'                 => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoUpdate) {
            $res['AutoUpdate'] = $this->autoUpdate;
        }
        if (null !== $this->autoUpdateTimeSchedule) {
            $res['AutoUpdateTimeSchedule'] = $this->autoUpdateTimeSchedule;
        }
        if (null !== $this->forceUpgrade) {
            $res['ForceUpgrade'] = $this->forceUpgrade;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AutoUpdate'])) {
            $model->autoUpdate = $map['AutoUpdate'];
        }
        if (isset($map['AutoUpdateTimeSchedule'])) {
            $model->autoUpdateTimeSchedule = $map['AutoUpdateTimeSchedule'];
        }
        if (isset($map['ForceUpgrade'])) {
            $model->forceUpgrade = $map['ForceUpgrade'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
