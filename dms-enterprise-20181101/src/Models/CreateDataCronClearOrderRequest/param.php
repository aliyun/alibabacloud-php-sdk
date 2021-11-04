<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCronClearOrderRequest;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCronClearOrderRequest\param\cronClearItemList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCronClearOrderRequest\param\dbItemList;
use AlibabaCloud\Tea\Model;

class param extends Model
{
    /**
     * @var string
     */
    public $classify;

    /**
     * @var cronClearItemList[]
     */
    public $cronClearItemList;

    /**
     * @var string
     */
    public $cronFormat;

    /**
     * @var dbItemList[]
     */
    public $dbItemList;

    /**
     * @var int
     */
    public $durationHour;

    /**
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
