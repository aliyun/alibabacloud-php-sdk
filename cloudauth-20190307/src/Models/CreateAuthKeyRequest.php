<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class CreateAuthKeyRequest extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $userDeviceId;

    /**
     * @var bool
     */
    public $test;

    /**
     * @var int
     */
    public $authYears;
    protected $_name = [
        'bizType'      => 'BizType',
        'userDeviceId' => 'UserDeviceId',
        'test'         => 'Test',
        'authYears'    => 'AuthYears',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->userDeviceId) {
            $res['UserDeviceId'] = $this->userDeviceId;
        }
        if (null !== $this->test) {
            $res['Test'] = $this->test;
        }
        if (null !== $this->authYears) {
            $res['AuthYears'] = $this->authYears;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAuthKeyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['UserDeviceId'])) {
            $model->userDeviceId = $map['UserDeviceId'];
        }
        if (isset($map['Test'])) {
            $model->test = $map['Test'];
        }
        if (isset($map['AuthYears'])) {
            $model->authYears = $map['AuthYears'];
        }

        return $model;
    }
}
