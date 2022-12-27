<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListResourceMembersResponseBody\resourceMembers;
use AlibabaCloud\Tea\Model;

class ListResourceMembersResponseBody extends Model
{
    /**
     * @example ""
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example ""
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example ASSDS-ASSASX-XSAXSA-XSAXSAXS
     *
     * @var string
     */
    public $requestId;

    /**
     * @var resourceMembers[]
     */
    public $resourceMembers;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode'       => 'errorCode',
        'errorMessage'    => 'errorMessage',
        'requestId'       => 'requestId',
        'resourceMembers' => 'resourceMembers',
        'success'         => 'success',
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
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (null !== $this->success) {
            $res['success'] = $this->success;
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
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
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
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
