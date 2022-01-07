<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetCertifyResultResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
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
    public $verifyDesc;

    /**
     * @var string
     */
    public $verifyResult;
    protected $_name = [
        'deviceToken'  => 'DeviceToken',
        'identityInfo' => 'IdentityInfo',
        'materialInfo' => 'MaterialInfo',
        'verifyDesc'   => 'VerifyDesc',
        'verifyResult' => 'VerifyResult',
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
        if (null !== $this->verifyDesc) {
            $res['VerifyDesc'] = $this->verifyDesc;
        }
        if (null !== $this->verifyResult) {
            $res['VerifyResult'] = $this->verifyResult;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['VerifyDesc'])) {
            $model->verifyDesc = $map['VerifyDesc'];
        }
        if (isset($map['VerifyResult'])) {
            $model->verifyResult = $map['VerifyResult'];
        }

        return $model;
    }
}
