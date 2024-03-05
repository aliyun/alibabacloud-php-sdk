<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CustomerService\V20231228\Models;

use AlibabaCloud\Tea\Model;

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
        'createTimeEnd'       => 'createTimeEnd',
        'createTimeStart'     => 'createTimeStart',
        'freeOrderApplyCodes' => 'freeOrderApplyCodes',
        'freeOrderApplyIds'   => 'freeOrderApplyIds',
        'orderIds'            => 'orderIds',
        'pageNum'             => 'pageNum',
        'pageSize'            => 'pageSize',
        'statusList'          => 'statusList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTimeEnd) {
            $res['createTimeEnd'] = $this->createTimeEnd;
        }
        if (null !== $this->createTimeStart) {
            $res['createTimeStart'] = $this->createTimeStart;
        }
        if (null !== $this->freeOrderApplyCodes) {
            $res['freeOrderApplyCodes'] = $this->freeOrderApplyCodes;
        }
        if (null !== $this->freeOrderApplyIds) {
            $res['freeOrderApplyIds'] = $this->freeOrderApplyIds;
        }
        if (null !== $this->orderIds) {
            $res['orderIds'] = $this->orderIds;
        }
        if (null !== $this->pageNum) {
            $res['pageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->statusList) {
            $res['statusList'] = $this->statusList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListYunQiTaskByUidRequest
     */
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
                $model->freeOrderApplyCodes = $map['freeOrderApplyCodes'];
            }
        }
        if (isset($map['freeOrderApplyIds'])) {
            if (!empty($map['freeOrderApplyIds'])) {
                $model->freeOrderApplyIds = $map['freeOrderApplyIds'];
            }
        }
        if (isset($map['orderIds'])) {
            if (!empty($map['orderIds'])) {
                $model->orderIds = $map['orderIds'];
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
                $model->statusList = $map['statusList'];
            }
        }

        return $model;
    }
}
