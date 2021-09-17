<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Tea\Model;

class GetDeviceIdByIdentityRequest extends Model
{
    /**
     * @description 认证类型，MAC/SN
     *
     * @var string
     */
    public $identityType;

    /**
     * @description 编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型： PACKAGE_NAME：apk包名 SKILL_ID：技能id
     *
     * @var string
     */
    public $encodeType;

    /**
     * @description 认证标识，具体的MAC地址或者SN号
     *
     * @var string
     */
    public $identityId;

    /**
     * @description 产品唯一标志符productKey，从AI开放平台中获取
     *
     * @var string
     */
    public $productKey;

    /**
     * @description 编码类型对应的值，例如：编码类型是SKILLID，其值就为webhook服务中得到的skillId；编码类似是PACKAGENAME，其值就为对应客户端app的packageName。
     *
     * @var string
     */
    public $encodeKey;
    protected $_name = [
        'identityType' => 'IdentityType',
        'encodeType'   => 'EncodeType',
        'identityId'   => 'IdentityId',
        'productKey'   => 'ProductKey',
        'encodeKey'    => 'EncodeKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->identityType) {
            $res['IdentityType'] = $this->identityType;
        }
        if (null !== $this->encodeType) {
            $res['EncodeType'] = $this->encodeType;
        }
        if (null !== $this->identityId) {
            $res['IdentityId'] = $this->identityId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->encodeKey) {
            $res['EncodeKey'] = $this->encodeKey;
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
        if (isset($map['IdentityType'])) {
            $model->identityType = $map['IdentityType'];
        }
        if (isset($map['EncodeType'])) {
            $model->encodeType = $map['EncodeType'];
        }
        if (isset($map['IdentityId'])) {
            $model->identityId = $map['IdentityId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['EncodeKey'])) {
            $model->encodeKey = $map['EncodeKey'];
        }

        return $model;
    }
}
