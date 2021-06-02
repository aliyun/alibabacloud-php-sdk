<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\SDK\Tdsr\V20200101\Models\ListProjectResponseBody\list_;
use AlibabaCloud\Tea\Model;

class ListProjectResponseBody extends Model
{
    /**
     * @description 请求ID，与入参requestId对应
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 返回码
     *
     * @var int
     */
    public $code;

    /**
     * @description 是否请求成功
     *
     * @var bool
     */
    public $success;

    /**
     * @description 错误消息
     *
     * @var string
     */
    public $message;

    /**
     * @description 是否有下一页
     *
     * @var bool
     */
    public $hasNext;

    /**
     * @description 当前页
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description 总页数
     *
     * @var int
     */
    public $totalPage;

    /**
     * @description count
     *
     * @var int
     */
    public $count;

    /**
     * @description 项目数据
     *
     * @var list_[]
     */
    public $list;
    protected $_name = [
        'requestId'   => 'RequestId',
        'code'        => 'Code',
        'success'     => 'Success',
        'message'     => 'Message',
        'hasNext'     => 'HasNext',
        'currentPage' => 'CurrentPage',
        'totalPage'   => 'TotalPage',
        'count'       => 'Count',
        'list'        => 'List',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->hasNext) {
            $res['HasNext'] = $this->hasNext;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->list) {
            $res['List'] = [];
            if (null !== $this->list && \is_array($this->list)) {
                $n = 0;
                foreach ($this->list as $item) {
                    $res['List'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProjectResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['HasNext'])) {
            $model->hasNext = $map['HasNext'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['List'])) {
            if (!empty($map['List'])) {
                $model->list = [];
                $n           = 0;
                foreach ($map['List'] as $item) {
                    $model->list[$n++] = null !== $item ? list_::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
