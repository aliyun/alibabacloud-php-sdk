<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Tea\Model;

class GetDeviceIdByIdentityRequest extends Model
{
    /**
     * @example 129****0946
     *
     * @var string
     */
    public $encodeKey;

    /**
     * @example PROJECT_ID
     *
     * @var string
     */
    public $encodeType;

    /**
     * @example b4:xx:xx:xx:65:2b
     *
     * @var string
     */
    public $identityId;

    /**
     * @example MAC
     *
     * @var string
     */
    public $identityType;

    /**
     * @example Mm*****XnZ8
     *
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
