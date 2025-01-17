<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ModifyImageFixCycleConfigRequest extends Model
{
    /**
     * @var int
     */
    public $imageFixCycle;
    /**
     * @var string
     */
    public $imageFixSwitch;
    /**
     * @var string
     */
    public $imageFixTarget;
    /**
     * @var int
     */
    public $imageTimeRange;
    protected $_name = [
        'imageFixCycle'  => 'ImageFixCycle',
        'imageFixSwitch' => 'ImageFixSwitch',
        'imageFixTarget' => 'ImageFixTarget',
        'imageTimeRange' => 'ImageTimeRange',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageFixCycle) {
            $res['ImageFixCycle'] = $this->imageFixCycle;
        }

        if (null !== $this->imageFixSwitch) {
            $res['ImageFixSwitch'] = $this->imageFixSwitch;
        }

        if (null !== $this->imageFixTarget) {
            $res['ImageFixTarget'] = $this->imageFixTarget;
        }

        if (null !== $this->imageTimeRange) {
            $res['ImageTimeRange'] = $this->imageTimeRange;
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
        if (isset($map['ImageFixCycle'])) {
            $model->imageFixCycle = $map['ImageFixCycle'];
        }

        if (isset($map['ImageFixSwitch'])) {
            $model->imageFixSwitch = $map['ImageFixSwitch'];
        }

        if (isset($map['ImageFixTarget'])) {
            $model->imageFixTarget = $map['ImageFixTarget'];
        }

        if (isset($map['ImageTimeRange'])) {
            $model->imageTimeRange = $map['ImageTimeRange'];
        }

        return $model;
    }
}
