<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class CreateAuthKeyRequest extends Model
{
    /**
     * @var int
     */
    public $authYears;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var bool
     */
    public $test;

    /**
     * @var string
     */
    public $userDeviceId;
    protected $_name = [
        'authYears'    => 'AuthYears',
        'bizType'      => 'BizType',
        'test'         => 'Test',
        'userDeviceId' => 'UserDeviceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authYears) {
            $res['AuthYears'] = $this->authYears;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->test) {
            $res['Test'] = $this->test;
        }
        if (null !== $this->userDeviceId) {
            $res['UserDeviceId'] = $this->userDeviceId;
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
        if (isset($map['AuthYears'])) {
            $model->authYears = $map['AuthYears'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['Test'])) {
            $model->test = $map['Test'];
        }
        if (isset($map['UserDeviceId'])) {
            $model->userDeviceId = $map['UserDeviceId'];
        }

        return $model;
    }
}
