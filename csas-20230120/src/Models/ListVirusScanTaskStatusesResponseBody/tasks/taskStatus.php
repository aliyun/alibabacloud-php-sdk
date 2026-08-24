<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListVirusScanTaskStatusesResponseBody\tasks;

use AlibabaCloud\Dara\Model;

class taskStatus extends Model
{
    /**
     * @var int
     */
    public $deviceAckCount;

    /**
     * @var int
     */
    public $deviceResultFailCount;

    /**
     * @var int
     */
    public $deviceResultSuccessCount;

    /**
     * @var int
     */
    public $deviceStartCount;
    protected $_name = [
        'deviceAckCount' => 'DeviceAckCount',
        'deviceResultFailCount' => 'DeviceResultFailCount',
        'deviceResultSuccessCount' => 'DeviceResultSuccessCount',
        'deviceStartCount' => 'DeviceStartCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceAckCount) {
            $res['DeviceAckCount'] = $this->deviceAckCount;
        }

        if (null !== $this->deviceResultFailCount) {
            $res['DeviceResultFailCount'] = $this->deviceResultFailCount;
        }

        if (null !== $this->deviceResultSuccessCount) {
            $res['DeviceResultSuccessCount'] = $this->deviceResultSuccessCount;
        }

        if (null !== $this->deviceStartCount) {
            $res['DeviceStartCount'] = $this->deviceStartCount;
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
        if (isset($map['DeviceAckCount'])) {
            $model->deviceAckCount = $map['DeviceAckCount'];
        }

        if (isset($map['DeviceResultFailCount'])) {
            $model->deviceResultFailCount = $map['DeviceResultFailCount'];
        }

        if (isset($map['DeviceResultSuccessCount'])) {
            $model->deviceResultSuccessCount = $map['DeviceResultSuccessCount'];
        }

        if (isset($map['DeviceStartCount'])) {
            $model->deviceStartCount = $map['DeviceStartCount'];
        }

        return $model;
    }
}
