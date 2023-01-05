<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class AddFaceUserPictureRequest extends Model
{
    /**
     * @example https://example.com/test.jpeg
     *
     * @var string
     */
    public $facePicUrl;

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
        'facePicUrl'  => 'FacePicUrl',
        'isolationId' => 'IsolationId',
        'userId'      => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->facePicUrl) {
            $res['FacePicUrl'] = $this->facePicUrl;
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
     * @return AddFaceUserPictureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FacePicUrl'])) {
            $model->facePicUrl = $map['FacePicUrl'];
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
