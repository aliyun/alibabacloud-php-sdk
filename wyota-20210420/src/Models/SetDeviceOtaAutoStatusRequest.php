<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

class SetDeviceOtaAutoStatusRequest extends Model
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
    public $clientType;

    /**
     * @var int
     */
    public $forceUpgrade;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'autoUpdate'             => 'AutoUpdate',
        'autoUpdateTimeSchedule' => 'AutoUpdateTimeSchedule',
        'clientType'             => 'ClientType',
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
        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
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
     * @return SetDeviceOtaAutoStatusRequest
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
        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
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
