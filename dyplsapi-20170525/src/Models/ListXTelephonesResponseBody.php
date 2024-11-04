<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\ListXTelephonesResponseBody\data;
use AlibabaCloud\Tea\Model;

class ListXTelephonesResponseBody extends Model
{
    /**
     * @example 0
     *
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @description 返回状态码 0000表示成功 其他表示失败
     *
     * @example 0000
     *
     * @var string
     */
    public $code;

    /**
     * @description 数据集合
     *
     * @var data[]
     */
    public $data;

    /**
     * @description 返回信息
     *
     * @example 成功
     *
     * @var string
     */
    public $message;

    /**
     * @description 页码
     *
     * @example 6
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description 每页条数
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 返回是否成功 true  表示成功 false表示失败
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description 符合查询条件的总数量
     *
     * @example 60
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'code'               => 'Code',
        'data'               => 'Data',
        'message'            => 'Message',
        'pageNo'             => 'PageNo',
        'pageSize'           => 'PageSize',
        'success'            => 'Success',
        'totalCount'         => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['Data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListXTelephonesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['Data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
