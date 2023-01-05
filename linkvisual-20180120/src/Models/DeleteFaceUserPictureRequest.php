<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class DeleteFaceUserPictureRequest extends Model
{
    /**
     * @example 1bb580ef7****
     *
     * @var string
     */
    public $facePicMd5;

    /**
     * @example ZheJiangHZ
     *
     * @var string
     */
    public $isolationId;

    /**
     * @example 3mtjaqebeq4d****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'facePicMd5'  => 'FacePicMd5',
        'isolationId' => 'IsolationId',
        'userId'      => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->facePicMd5) {
            $res['FacePicMd5'] = $this->facePicMd5;
        }
        if (null !== $this->isolationId) {
            $res['IsolationId'] = $this->isolationId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteFaceUserPictureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FacePicMd5'])) {
            $model->facePicMd5 = $map['FacePicMd5'];
        }
        if (isset($map['IsolationId'])) {
            $model->isolationId = $map['IsolationId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
