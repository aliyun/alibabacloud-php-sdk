<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class CreateLiveMessageGroupResponseBody extends Model
{
    /**
     * @var bool
     */
    public $alreadyDelete;

    /**
     * @var bool
     */
    public $alreadyExists;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'alreadyDelete' => 'AlreadyDelete',
        'alreadyExists' => 'AlreadyExists',
        'groupId' => 'GroupId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
