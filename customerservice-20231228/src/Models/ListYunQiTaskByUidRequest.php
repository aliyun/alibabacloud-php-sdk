<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CustomerService\V20231228\Models;

use AlibabaCloud\Dara\Model;

class ListYunQiTaskByUidRequest extends Model
{
    /**
     * @var int
     */
    public $createTimeEnd;

    /**
     * @var int
     */
    public $createTimeStart;

    /**
     * @var string[]
     */
    public $freeOrderApplyCodes;

    /**
     * @var int[]
     */
    public $freeOrderApplyIds;

    /**
     * @var int[]
     */
    public $orderIds;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $statusList;
    protected $_name = [
        'createTimeEnd' => 'createTimeEnd',
        'createTimeStart' => 'createTimeStart',
        'freeOrderApplyCodes' => 'freeOrderApplyCodes',
        'freeOrderApplyIds' => 'freeOrderApplyIds',
        'orderIds' => 'orderIds',
        'pageNum' => 'pageNum',
        'pageSize' => 'pageSize',
        'statusList' => 'statusList',
    ];

    public function validate()
    {
        if (\is_array($this->freeOrderApplyCodes)) {
            Model::validateArray($this->freeOrderApplyCodes);
        }
        if (\is_array($this->freeOrderApplyIds)) {
            Model::validateArray($this->freeOrderApplyIds);
        }
        if (\is_array($this->orderIds)) {
            Model::validateArray($this->orderIds);
        }
        if (\is_array($this->statusList)) {
            Model::validateArray($this->statusList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTimeEnd) {
            $res['createTimeEnd'] = $this->createTimeEnd;
        }

        if (null !== $this->createTimeStart) {
            $res['createTimeStart'] = $this->createTimeStart;
        }

        if (null !== $this->freeOrderApplyCodes) {
            if (\is_array($this->freeOrderApplyCodes)) {
                $res['freeOrderApplyCodes'] = [];
                $n1 = 0;
                foreach ($this->freeOrderApplyCodes as $item1) {
                    $res['freeOrderApplyCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->freeOrderApplyIds) {
            if (\is_array($this->freeOrderApplyIds)) {
                $res['freeOrderApplyIds'] = [];
                $n1 = 0;
                foreach ($this->freeOrderApplyIds as $item1) {
                    $res['freeOrderApplyIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->orderIds) {
            if (\is_array($this->orderIds)) {
                $res['orderIds'] = [];
                $n1 = 0;
                foreach ($this->orderIds as $item1) {
                    $res['orderIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNum) {
            $res['pageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->statusList) {
            if (\is_array($this->statusList)) {
                $res['statusList'] = [];
                $n1 = 0;
                foreach ($this->statusList as $item1) {
                    $res['statusList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['createTimeEnd'])) {
            $model->createTimeEnd = $map['createTimeEnd'];
        }

        if (isset($map['createTimeStart'])) {
            $model->createTimeStart = $map['createTimeStart'];
        }

        if (isset($map['freeOrderApplyCodes'])) {
            if (!empty($map['freeOrderApplyCodes'])) {
                $model->freeOrderApplyCodes = [];
                $n1 = 0;
                foreach ($map['freeOrderApplyCodes'] as $item1) {
                    $model->freeOrderApplyCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['freeOrderApplyIds'])) {
            if (!empty($map['freeOrderApplyIds'])) {
                $model->freeOrderApplyIds = [];
                $n1 = 0;
                foreach ($map['freeOrderApplyIds'] as $item1) {
                    $model->freeOrderApplyIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['orderIds'])) {
            if (!empty($map['orderIds'])) {
                $model->orderIds = [];
                $n1 = 0;
                foreach ($map['orderIds'] as $item1) {
                    $model->orderIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['pageNum'])) {
            $model->pageNum = $map['pageNum'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['statusList'])) {
            if (!empty($map['statusList'])) {
                $model->statusList = [];
                $n1 = 0;
                foreach ($map['statusList'] as $item1) {
                    $model->statusList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
