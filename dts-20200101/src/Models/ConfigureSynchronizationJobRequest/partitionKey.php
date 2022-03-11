<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureSynchronizationJobRequest;

use AlibabaCloud\Tea\Model;

class partitionKey extends Model
{
    /**
     * @var bool
     */
    public $modifyTimeDay;

    /**
     * @var bool
     */
    public $modifyTimeHour;

    /**
     * @var bool
     */
    public $modifyTimeMinute;

    /**
     * @var bool
     */
    public $modifyTimeMonth;

    /**
     * @var bool
     */
    public $modifyTimeYear;
    protected $_name = [
        'modifyTimeDay'    => 'ModifyTime_Day',
        'modifyTimeHour'   => 'ModifyTime_Hour',
        'modifyTimeMinute' => 'ModifyTime_Minute',
        'modifyTimeMonth'  => 'ModifyTime_Month',
        'modifyTimeYear'   => 'ModifyTime_Year',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modifyTimeDay) {
            $res['ModifyTime_Day'] = $this->modifyTimeDay;
        }
        if (null !== $this->modifyTimeHour) {
            $res['ModifyTime_Hour'] = $this->modifyTimeHour;
        }
        if (null !== $this->modifyTimeMinute) {
            $res['ModifyTime_Minute'] = $this->modifyTimeMinute;
        }
        if (null !== $this->modifyTimeMonth) {
            $res['ModifyTime_Month'] = $this->modifyTimeMonth;
        }
        if (null !== $this->modifyTimeYear) {
            $res['ModifyTime_Year'] = $this->modifyTimeYear;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return partitionKey
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModifyTime_Day'])) {
            $model->modifyTimeDay = $map['ModifyTime_Day'];
        }
        if (isset($map['ModifyTime_Hour'])) {
            $model->modifyTimeHour = $map['ModifyTime_Hour'];
        }
        if (isset($map['ModifyTime_Minute'])) {
            $model->modifyTimeMinute = $map['ModifyTime_Minute'];
        }
        if (isset($map['ModifyTime_Month'])) {
            $model->modifyTimeMonth = $map['ModifyTime_Month'];
        }
        if (isset($map['ModifyTime_Year'])) {
            $model->modifyTimeYear = $map['ModifyTime_Year'];
        }

        return $model;
    }
}
