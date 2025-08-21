<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreateAlarmRequest\payload;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreateAlarmRequest\payload\scheduleInfo\once;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreateAlarmRequest\payload\scheduleInfo\statutoryWorkingDay;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreateAlarmRequest\payload\scheduleInfo\weekly;

class scheduleInfo extends Model
{
    /**
     * @var once
     */
    public $once;

    /**
     * @var statutoryWorkingDay
     */
    public $statutoryWorkingDay;

    /**
     * @var string
     */
    public $type;

    /**
     * @var weekly
     */
    public $weekly;
    protected $_name = [
        'once' => 'Once',
        'statutoryWorkingDay' => 'StatutoryWorkingDay',
        'type' => 'Type',
        'weekly' => 'Weekly',
    ];

    public function validate()
    {
        if (null !== $this->once) {
            $this->once->validate();
        }
        if (null !== $this->statutoryWorkingDay) {
            $this->statutoryWorkingDay->validate();
        }
        if (null !== $this->weekly) {
            $this->weekly->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->once) {
            $res['Once'] = null !== $this->once ? $this->once->toArray($noStream) : $this->once;
        }

        if (null !== $this->statutoryWorkingDay) {
            $res['StatutoryWorkingDay'] = null !== $this->statutoryWorkingDay ? $this->statutoryWorkingDay->toArray($noStream) : $this->statutoryWorkingDay;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->weekly) {
            $res['Weekly'] = null !== $this->weekly ? $this->weekly->toArray($noStream) : $this->weekly;
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
        if (isset($map['Once'])) {
            $model->once = once::fromMap($map['Once']);
        }

        if (isset($map['StatutoryWorkingDay'])) {
            $model->statutoryWorkingDay = statutoryWorkingDay::fromMap($map['StatutoryWorkingDay']);
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Weekly'])) {
            $model->weekly = weekly::fromMap($map['Weekly']);
        }

        return $model;
    }
}
