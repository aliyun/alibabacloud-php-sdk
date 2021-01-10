<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivision\V20190308\Models;

use AlibabaCloud\Tea\Model;

class UnregisterFaceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $faceToken;
    protected $_name = [
        'requestId' => 'RequestId',
        'groupId'   => 'GroupId',
        'faceToken' => 'FaceToken',
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
     * @return UnregisterFaceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
