<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListHostGroupsResponseBody\hostGroups;
use AlibabaCloud\Tea\Model;

class ListHostGroupsResponseBody extends Model
{
    /**
     * @description 请求id，每次请求都是唯一值，便于后续排查问题
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 错误信息
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description 错误码
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description true 接口调用成功，false 接口调用失败
     *
     * @var bool
     */
    public $success;

    /**
     * @description 主机组
     *
     * @var hostGroups[]
     */
    public $hostGroups;

    /**
     * @description 总数
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description 分页token,空表示最后一页
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'requestId'    => 'requestId',
        'errorMessage' => 'errorMessage',
        'errorCode'    => 'errorCode',
        'success'      => 'success',
        'hostGroups'   => 'hostGroups',
        'totalCount'   => 'totalCount',
        'nextToken'    => 'nextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->hostGroups) {
            $res['hostGroups'] = [];
            if (null !== $this->hostGroups && \is_array($this->hostGroups)) {
                $n = 0;
                foreach ($this->hostGroups as $item) {
                    $res['hostGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHostGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }
        if (isset($map['hostGroups'])) {
            if (!empty($map['hostGroups'])) {
                $model->hostGroups = [];
                $n                 = 0;
                foreach ($map['hostGroups'] as $item) {
                    $model->hostGroups[$n++] = null !== $item ? hostGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        return $model;
    }
}
