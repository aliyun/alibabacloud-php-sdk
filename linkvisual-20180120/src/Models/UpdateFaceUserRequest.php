<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class UpdateFaceUserRequest extends Model
{
    /**
     * @example 52242819650301xxxx
     *
     * @var string
     */
    public $customUserId;

    /**
     * @example https://test.com/test.jpg
     *
     * @var string
     */
    public $facePicUrl;

    /**
     * @example TestIsolati****
     *
     * @var string
     */
    public $isolationId;

    /**
     * @example ZhangSan
     *
     * @var string
     */
    public $name;

    /**
     * @example {"age":28, "sex":"male"}
     *
     * @var string
     */
    public $params;

    /**
     * @example tibce3fsgqel****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'customUserId' => 'CustomUserId',
        'facePicUrl'   => 'FacePicUrl',
        'isolationId'  => 'IsolationId',
        'name'         => 'Name',
        'params'       => 'Params',
        'userId'       => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customUserId) {
            $res['CustomUserId'] = $this->customUserId;
        }
        if (null !== $this->facePicUrl) {
            $res['FacePicUrl'] = $this->facePicUrl;
        }
        if (null !== $this->isolationId) {
            $res['IsolationId'] = $this->isolationId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFaceUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomUserId'])) {
            $model->customUserId = $map['CustomUserId'];
        }
        if (isset($map['FacePicUrl'])) {
            $model->facePicUrl = $map['FacePicUrl'];
        }
        if (isset($map['IsolationId'])) {
            $model->isolationId = $map['IsolationId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
