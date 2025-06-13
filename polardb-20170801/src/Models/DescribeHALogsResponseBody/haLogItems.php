<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeHALogsResponseBody;

use AlibabaCloud\Dara\Model;

class haLogItems extends Model
{
    /**
     * @var string
     */
    public $switchCauseCode;

    /**
     * @var string
     */
    public $switchCauseDetail;

    /**
     * @var string
     */
    public $switchFinishTime;

    /**
     * @var string
     */
    public $switchId;

    /**
     * @var string
     */
    public $switchStartTime;
    protected $_name = [
        'switchCauseCode' => 'SwitchCauseCode',
        'switchCauseDetail' => 'SwitchCauseDetail',
        'switchFinishTime' => 'SwitchFinishTime',
        'switchId' => 'SwitchId',
        'switchStartTime' => 'SwitchStartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->switchCauseCode) {
            $res['SwitchCauseCode'] = $this->switchCauseCode;
        }

        if (null !== $this->switchCauseDetail) {
            $res['SwitchCauseDetail'] = $this->switchCauseDetail;
        }

        if (null !== $this->switchFinishTime) {
            $res['SwitchFinishTime'] = $this->switchFinishTime;
        }

        if (null !== $this->switchId) {
            $res['SwitchId'] = $this->switchId;
        }

        if (null !== $this->switchStartTime) {
            $res['SwitchStartTime'] = $this->switchStartTime;
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
        if (isset($map['SwitchCauseCode'])) {
            $model->switchCauseCode = $map['SwitchCauseCode'];
        }

        if (isset($map['SwitchCauseDetail'])) {
            $model->switchCauseDetail = $map['SwitchCauseDetail'];
        }

        if (isset($map['SwitchFinishTime'])) {
            $model->switchFinishTime = $map['SwitchFinishTime'];
        }

        if (isset($map['SwitchId'])) {
            $model->switchId = $map['SwitchId'];
        }

        if (isset($map['SwitchStartTime'])) {
            $model->switchStartTime = $map['SwitchStartTime'];
        }

        return $model;
    }
}
