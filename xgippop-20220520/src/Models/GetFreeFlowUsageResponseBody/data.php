<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520\Models\GetFreeFlowUsageResponseBody;

use AlibabaCloud\SDK\XgipPop\V20220520\Models\GetFreeFlowUsageResponseBody\data\customerList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 当前页数
     *
     * @var int
     */
    public $curPageNum;

    /**
     * @description C端用户列表
     *
     * @var customerList[]
     */
    public $customerList;

    /**
     * @description 是否有下一页
     *
     * @var bool
     */
    public $hasNext;

    /**
     * @description 是否有上一页
     *
     * @var bool
     */
    public $hasPrev;

    /**
     * @description 实例ID
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 每页的记录条数
     *
     * @var int
     */
    public $numPerPage;

    /**
     * @description 总记录条数
     *
     * @var int
     */
    public $totalNum;

    /**
     * @description 总页数
     *
     * @var int
     */
    public $totalPageNum;
    protected $_name = [
        'curPageNum'   => 'CurPageNum',
        'customerList' => 'CustomerList',
        'hasNext'      => 'HasNext',
        'hasPrev'      => 'HasPrev',
        'instanceId'   => 'InstanceId',
        'numPerPage'   => 'NumPerPage',
        'totalNum'     => 'TotalNum',
        'totalPageNum' => 'TotalPageNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->curPageNum) {
            $res['CurPageNum'] = $this->curPageNum;
        }
        if (null !== $this->customerList) {
            $res['CustomerList'] = [];
            if (null !== $this->customerList && \is_array($this->customerList)) {
                $n = 0;
                foreach ($this->customerList as $item) {
                    $res['CustomerList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hasNext) {
            $res['HasNext'] = $this->hasNext;
        }
        if (null !== $this->hasPrev) {
            $res['HasPrev'] = $this->hasPrev;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->numPerPage) {
            $res['NumPerPage'] = $this->numPerPage;
        }
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }
        if (null !== $this->totalPageNum) {
            $res['TotalPageNum'] = $this->totalPageNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurPageNum'])) {
            $model->curPageNum = $map['CurPageNum'];
        }
        if (isset($map['CustomerList'])) {
            if (!empty($map['CustomerList'])) {
                $model->customerList = [];
                $n                   = 0;
                foreach ($map['CustomerList'] as $item) {
                    $model->customerList[$n++] = null !== $item ? customerList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HasNext'])) {
            $model->hasNext = $map['HasNext'];
        }
        if (isset($map['HasPrev'])) {
            $model->hasPrev = $map['HasPrev'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NumPerPage'])) {
            $model->numPerPage = $map['NumPerPage'];
        }
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }
        if (isset($map['TotalPageNum'])) {
            $model->totalPageNum = $map['TotalPageNum'];
        }

        return $model;
    }
}
