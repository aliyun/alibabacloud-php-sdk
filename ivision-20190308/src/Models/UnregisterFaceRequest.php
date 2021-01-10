<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivision\V20190308\Models;

use AlibabaCloud\Tea\Model;

class UnregisterFaceRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $showLog;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $faceToken;
    protected $_name = [
        'ownerId'   => 'OwnerId',
        'showLog'   => 'ShowLog',
        'groupId'   => 'GroupId',
        'faceToken' => 'FaceToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->showLog) {
            $res['ShowLog'] = $this->showLog;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->faceToken) {
            $res['FaceToken'] = $this->faceToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnregisterFaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ShowLog'])) {
            $model->showLog = $map['ShowLog'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['FaceToken'])) {
            $model->faceToken = $map['FaceToken'];
        }

        return $model;
    }
}
