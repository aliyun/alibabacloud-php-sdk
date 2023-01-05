<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class AddFaceUserRequest extends Model
{
    /**
     * @example 1234567890
     *
     * @var string
     */
    public $customUserId;

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
     * @example Tony
     *
     * @var string
     */
    public $name;

    /**
     * @example {"key1":"value1", "key2":"value2"}
     *
     * @var string
     */
    public $params;
    protected $_name = [
        'customUserId' => 'CustomUserId',
        'facePicUrl'   => 'FacePicUrl',
        'isolationId'  => 'IsolationId',
        'name'         => 'Name',
        'params'       => 'Params',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddFaceUserRequest
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

        return $model;
    }
}
