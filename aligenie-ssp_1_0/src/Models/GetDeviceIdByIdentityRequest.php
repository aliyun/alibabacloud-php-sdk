<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Tea\Model;

class GetDeviceIdByIdentityRequest extends Model
{
    /**
     * @var string
     */
    public $encodeKey;

    /**
     * @var string
     */
    public $encodeType;

    /**
     * @var string
     */
    public $identityId;

    /**
     * @var string
     */
    public $identityType;

    /**
     * @var string
     */
    public $productKey;
    protected $_name = [
        'encodeKey'    => 'EncodeKey',
        'encodeType'   => 'EncodeType',
        'identityId'   => 'IdentityId',
        'identityType' => 'IdentityType',
        'productKey'   => 'ProductKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->encodeKey) {
            $res['EncodeKey'] = $this->encodeKey;
        }
        if (null !== $this->encodeType) {
            $res['EncodeType'] = $this->encodeType;
        }
        if (null !== $this->identityId) {
            $res['IdentityId'] = $this->identityId;
        }
        if (null !== $this->identityType) {
            $res['IdentityType'] = $this->identityType;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDeviceIdByIdentityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EncodeKey'])) {
            $model->encodeKey = $map['EncodeKey'];
        }
        if (isset($map['EncodeType'])) {
            $model->encodeType = $map['EncodeType'];
        }
        if (isset($map['IdentityId'])) {
            $model->identityId = $map['IdentityId'];
        }
        if (isset($map['IdentityType'])) {
            $model->identityType = $map['IdentityType'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        return $model;
    }
}
