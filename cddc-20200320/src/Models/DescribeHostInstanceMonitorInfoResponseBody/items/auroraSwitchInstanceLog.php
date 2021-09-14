<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeHostInstanceMonitorInfoResponseBody\items;

use AlibabaCloud\Tea\Model;

class auroraSwitchInstanceLog extends Model
{
    /**
     * @var float
     */
    public $switchFrom;

    /**
     * @var float
     */
    public $switchType;

    /**
     * @var int
     */
    public $switchTime;
    protected $_name = [
        'switchFrom' => 'SwitchFrom',
        'switchType' => 'SwitchType',
        'switchTime' => 'SwitchTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->switchFrom) {
            $res['SwitchFrom'] = $this->switchFrom;
        }
        if (null !== $this->switchType) {
            $res['SwitchType'] = $this->switchType;
        }
        if (null !== $this->switchTime) {
            $res['SwitchTime'] = $this->switchTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return auroraSwitchInstanceLog
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SwitchFrom'])) {
            $model->switchFrom = $map['SwitchFrom'];
        }
        if (isset($map['SwitchType'])) {
            $model->switchType = $map['SwitchType'];
        }
        if (isset($map['SwitchTime'])) {
            $model->switchTime = $map['SwitchTime'];
        }

        return $model;
    }
}
