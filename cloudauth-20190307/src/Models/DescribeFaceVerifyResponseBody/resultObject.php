<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeFaceVerifyResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $deviceRisk;

    /**
     * @var string
     */
    public $deviceToken;

    /**
     * @var string
     */
    public $identityInfo;

    /**
     * @var string
     */
    public $materialInfo;

    /**
     * @var string
     */
    public $passed;

    /**
     * @var string
     */
    public $subCode;

    /**
     * @var string
     */
    public $success;

    /**
     * @var string
     */
    public $userInfo;
    protected $_name = [
        'deviceRisk' => 'DeviceRisk',
        'deviceToken' => 'DeviceToken',
        'identityInfo' => 'IdentityInfo',
        'materialInfo' => 'MaterialInfo',
        'passed' => 'Passed',
        'subCode' => 'SubCode',
        'success' => 'Success',
        'userInfo' => 'UserInfo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceRisk) {
            $res['DeviceRisk'] = $this->deviceRisk;
        }

        if (null !== $this->deviceToken) {
            $res['DeviceToken'] = $this->deviceToken;
        }

        if (null !== $this->identityInfo) {
            $res['IdentityInfo'] = $this->identityInfo;
        }

        if (null !== $this->materialInfo) {
            $res['MaterialInfo'] = $this->materialInfo;
        }

        if (null !== $this->passed) {
            $res['Passed'] = $this->passed;
        }

        if (null !== $this->subCode) {
            $res['SubCode'] = $this->subCode;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->userInfo) {
            $res['UserInfo'] = $this->userInfo;
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
        if (isset($map['DeviceRisk'])) {
            $model->deviceRisk = $map['DeviceRisk'];
        }

        if (isset($map['DeviceToken'])) {
            $model->deviceToken = $map['DeviceToken'];
        }

        if (isset($map['IdentityInfo'])) {
            $model->identityInfo = $map['IdentityInfo'];
        }

        if (isset($map['MaterialInfo'])) {
            $model->materialInfo = $map['MaterialInfo'];
        }

        if (isset($map['Passed'])) {
            $model->passed = $map['Passed'];
        }

        if (isset($map['SubCode'])) {
            $model->subCode = $map['SubCode'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['UserInfo'])) {
            $model->userInfo = $map['UserInfo'];
        }

        return $model;
    }
}
