<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Buss\V20220822\Models;

use AlibabaCloud\SDK\Buss\V20220822\Models\SearchPunishRequestResponseBody\dataList;
use AlibabaCloud\Tea\Model;

class SearchPunishRequestResponseBody extends Model
{
    /**
     * @var string
     */
    public $class;

    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $count;

    /**
     * @var dataList[]
     */
    public $dataList;

    /**
     * @var string
     */
    public $message;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $viewCount;
    protected $_name = [
        'class'      => 'Class',
        'code'       => 'Code',
        'count'      => 'Count',
        'dataList'   => 'DataList',
        'message'    => 'Message',
        'success'    => 'Success',
        'totalCount' => 'TotalCount',
        'viewCount'  => 'ViewCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->class) {
            $res['Class'] = $this->class;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->dataList) {
            $res['DataList'] = [];
            if (null !== $this->dataList && \is_array($this->dataList)) {
                $n = 0;
                foreach ($this->dataList as $item) {
                    $res['DataList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->viewCount) {
            $res['ViewCount'] = $this->viewCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchPunishRequestResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Class'])) {
            $model->class = $map['Class'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['DataList'])) {
            if (!empty($map['DataList'])) {
                $model->dataList = [];
                $n               = 0;
                foreach ($map['DataList'] as $item) {
                    $model->dataList[$n++] = null !== $item ? dataList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['ViewCount'])) {
            $model->viewCount = $map['ViewCount'];
        }

        return $model;
    }
}
