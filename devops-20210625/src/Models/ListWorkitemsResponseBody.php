<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkitemsResponseBody\workitems;
use AlibabaCloud\Tea\Model;

class ListWorkitemsResponseBody extends Model
{
    /**
     * @description 错误码
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description 错误信息
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description 每页数量
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 分页Token，没有下一页则为空
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 请求id，每次请求都是唯一值，便于后续排查问题
     *
     * @var string
     */
    public $requestId;

    /**
     * @description true或者false
     *
     * @var bool
     */
    public $success;

    /**
     * @description 总数
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description 工作项信息
     *
     * @var workitems[]
     */
    public $workitems;
    protected $_name = [
        'errorCode'  => 'errorCode',
        'errorMsg'   => 'errorMsg',
        'maxResults' => 'maxResults',
        'nextToken'  => 'nextToken',
        'requestId'  => 'requestId',
        'success'    => 'success',
        'totalCount' => 'totalCount',
        'workitems'  => 'workitems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
        }
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }
        if (null !== $this->workitems) {
            $res['workitems'] = [];
            if (null !== $this->workitems && \is_array($this->workitems)) {
                $n = 0;
                foreach ($this->workitems as $item) {
                    $res['workitems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWorkitemsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }
        if (isset($map['workitems'])) {
            if (!empty($map['workitems'])) {
                $model->workitems = [];
                $n                = 0;
                foreach ($map['workitems'] as $item) {
                    $model->workitems[$n++] = null !== $item ? workitems::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
