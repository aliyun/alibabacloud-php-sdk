<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListResourceMembersResponseBody\resourceMembers;
use AlibabaCloud\Tea\Model;

class ListResourceMembersResponseBody extends Model
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
     * @description 请求id，每次请求都是唯一值，便于后续排查问题
     *
     * @var bool
     */
    public $success;

    /**
     * @description 成员
     *
     * @var resourceMembers[]
     */
    public $resourceMembers;
    protected $_name = [
        'requestId'       => 'requestId',
        'errorMessage'    => 'errorMessage',
        'errorCode'       => 'errorCode',
        'success'         => 'success',
        'resourceMembers' => 'resourceMembers',
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
        if (null !== $this->resourceMembers) {
            $res['resourceMembers'] = [];
            if (null !== $this->resourceMembers && \is_array($this->resourceMembers)) {
                $n = 0;
                foreach ($this->resourceMembers as $item) {
                    $res['resourceMembers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourceMembersResponseBody
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
        if (isset($map['resourceMembers'])) {
            if (!empty($map['resourceMembers'])) {
                $model->resourceMembers = [];
                $n                      = 0;
                foreach ($map['resourceMembers'] as $item) {
                    $model->resourceMembers[$n++] = null !== $item ? resourceMembers::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
