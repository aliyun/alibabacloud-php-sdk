<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCronClearOrderRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCronClearOrderRequest\param\cronClearItemList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCronClearOrderRequest\param\dbItemList;

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
        'classify' => 'Classify',
        'cronClearItemList' => 'CronClearItemList',
        'cronFormat' => 'CronFormat',
        'dbItemList' => 'DbItemList',
        'durationHour' => 'DurationHour',
        'specifyDuration' => 'specifyDuration',
    ];

    public function validate()
    {
        if (\is_array($this->cronClearItemList)) {
            Model::validateArray($this->cronClearItemList);
        }
        if (\is_array($this->dbItemList)) {
            Model::validateArray($this->dbItemList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->classify) {
            $res['Classify'] = $this->classify;
        }

        if (null !== $this->cronClearItemList) {
            if (\is_array($this->cronClearItemList)) {
                $res['CronClearItemList'] = [];
                $n1 = 0;
                foreach ($this->cronClearItemList as $item1) {
                    $res['CronClearItemList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->cronFormat) {
            $res['CronFormat'] = $this->cronFormat;
        }

        if (null !== $this->dbItemList) {
            if (\is_array($this->dbItemList)) {
                $res['DbItemList'] = [];
                $n1 = 0;
                foreach ($this->dbItemList as $item1) {
                    $res['DbItemList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Classify'])) {
            $model->classify = $map['Classify'];
        }

        if (isset($map['CronClearItemList'])) {
            if (!empty($map['CronClearItemList'])) {
                $model->cronClearItemList = [];
                $n1 = 0;
                foreach ($map['CronClearItemList'] as $item1) {
                    $model->cronClearItemList[$n1] = cronClearItemList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CronFormat'])) {
            $model->cronFormat = $map['CronFormat'];
        }

        if (isset($map['DbItemList'])) {
            if (!empty($map['DbItemList'])) {
                $model->dbItemList = [];
                $n1 = 0;
                foreach ($map['DbItemList'] as $item1) {
                    $model->dbItemList[$n1] = dbItemList::fromMap($item1);
                    ++$n1;
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
