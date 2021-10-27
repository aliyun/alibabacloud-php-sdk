<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeFaceVerifyResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
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
    protected $_name = [
        'deviceToken'  => 'DeviceToken',
        'identityInfo' => 'IdentityInfo',
        'materialInfo' => 'MaterialInfo',
        'passed'       => 'Passed',
        'subCode'      => 'SubCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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

        return $model;
    }
}
