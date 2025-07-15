<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CreateLiveMessageGroupResponseBody extends Model
{
    /**
     * @description Indicates whether the group is deleted. If the group existed and is deleted, the group ID is unavailable. We recommend that you create a new group.
     *
     * @example true
     *
     * @var bool
     */
    public $alreadyDelete;

    /**
     * @description Indicates whether the group already exists.
     *
     * @example true
     *
     * @var bool
     */
    public $alreadyExists;

    /**
     * @description The ID of the group created.
     *
     * @example grouptest
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The request ID.
     *
     * @example A8C7B033-B339-1A58-B0E0-7B9197BA****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'alreadyDelete' => 'AlreadyDelete',
        'alreadyExists' => 'AlreadyExists',
        'groupId' => 'GroupId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alreadyDelete) {
            $res['AlreadyDelete'] = $this->alreadyDelete;
        }
        if (null !== $this->alreadyExists) {
            $res['AlreadyExists'] = $this->alreadyExists;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLiveMessageGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlreadyDelete'])) {
            $model->alreadyDelete = $map['AlreadyDelete'];
        }
        if (isset($map['AlreadyExists'])) {
            $model->alreadyExists = $map['AlreadyExists'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
