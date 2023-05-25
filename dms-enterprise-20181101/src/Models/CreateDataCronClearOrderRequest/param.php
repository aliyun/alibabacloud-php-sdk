<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCronClearOrderRequest;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCronClearOrderRequest\param\cronClearItemList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCronClearOrderRequest\param\dbItemList;
use AlibabaCloud\Tea\Model;

class param extends Model
{
    /**
     * @description The reason for the data change.
     *
     * @example test
     *
     * @var string
     */
    public $classify;

    /**
     * @description The tables for which you want to clear historical data.
     *
     * @var cronClearItemList[]
     */
    public $cronClearItemList;

    /**
     * @description The crontab expression that you can use to run the task at a specified time. For more information, see [Crontab expression](~~206581~~).
     *
     * @example 0 0 2 * * ?
     *
     * @var string
     */
    public $cronFormat;

    /**
     * @description The databases for which you want to clear historical data.
     *
     * @var dbItemList[]
     */
    public $dbItemList;

    /**
     * @description The amount of time taken to run the task. Unit: hours.
     *
     * >  If the **specifyDuration** parameter is set to **true**, this parameter is required.
     * @example 4
     *
     * @var int
     */
    public $durationHour;

    /**
     * @description Specifies whether to specify an end time for the task. Valid values:
     *
     *   **true**: specifies an end time for the task. The task is automatically suspended after this end time.
     *   **false**: does not specify an end time for the task. The task is stopped after the historical data is cleared.
     *
     * @example true
     *
     * @var bool
     */
    public $specifyDuration;
    protected $_name = [
        'classify'          => 'Classify',
        'cronClearItemList' => 'CronClearItemList',
        'cronFormat'        => 'CronFormat',
        'dbItemList'        => 'DbItemList',
        'durationHour'      => 'DurationHour',
        'specifyDuration'   => 'specifyDuration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classify) {
            $res['Classify'] = $this->classify;
        }
        if (null !== $this->cronClearItemList) {
            $res['CronClearItemList'] = [];
            if (null !== $this->cronClearItemList && \is_array($this->cronClearItemList)) {
                $n = 0;
                foreach ($this->cronClearItemList as $item) {
                    $res['CronClearItemList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->cronFormat) {
            $res['CronFormat'] = $this->cronFormat;
        }
        if (null !== $this->dbItemList) {
            $res['DbItemList'] = [];
            if (null !== $this->dbItemList && \is_array($this->dbItemList)) {
                $n = 0;
                foreach ($this->dbItemList as $item) {
                    $res['DbItemList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->durationHour) {
            $res['DurationHour'] = $this->durationHour;
        }
        if (null !== $this->specifyDuration) {
            $res['specifyDuration'] = $this->specifyDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return param
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Classify'])) {
            $model->classify = $map['Classify'];
        }
        if (isset($map['CronClearItemList'])) {
            if (!empty($map['CronClearItemList'])) {
                $model->cronClearItemList = [];
                $n                        = 0;
                foreach ($map['CronClearItemList'] as $item) {
                    $model->cronClearItemList[$n++] = null !== $item ? cronClearItemList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CronFormat'])) {
            $model->cronFormat = $map['CronFormat'];
        }
        if (isset($map['DbItemList'])) {
            if (!empty($map['DbItemList'])) {
                $model->dbItemList = [];
                $n                 = 0;
                foreach ($map['DbItemList'] as $item) {
                    $model->dbItemList[$n++] = null !== $item ? dbItemList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DurationHour'])) {
            $model->durationHour = $map['DurationHour'];
        }
        if (isset($map['specifyDuration'])) {
            $model->specifyDuration = $map['specifyDuration'];
        }

        return $model;
    }
}
