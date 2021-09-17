<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\WakeUpAppRequest;

use AlibabaCloud\Tea\Model;

class targetInfo extends Model
{
    /**
     * @description 推送目标类型，获取到对应设备标识时的类型  DEVICE_UNION_ID：设备unionId； DEVICE_OPEN_ID：设备openId
     *
     * @var string
     */
    public $targetType;

    /**
     * @description 推送目标类型对应的标识值
     *
     * @var string
     */
    public $targetIdentity;

    /**
     * @description 组织标识，推送类型是XX_UNION_XX时才需要配。当存在多种途径获取猫精设备标识且又需要能互通的情况下需要找平台申请组织，申请通过后由平台分配得到。
     *
     * @var string
     */
    public $organizationId;

    /**
     * @description 编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型：  PACKAGE_NAME：apk包名 SKILL_ID：技能id
     *
     * @var string
     */
    public $encodeType;

    /**
     * @description 编码类型对应的值，例如：编码类型是SKILLID，其值就为webhook服务中得到的skillId；编码类似是PACKAGENAME，其值就为对应客户端app的packageName。
     *
     * @var string
     */
    public $encodeKey;
    protected $_name = [
        'targetType'     => 'TargetType',
        'targetIdentity' => 'TargetIdentity',
        'organizationId' => 'OrganizationId',
        'encodeType'     => 'EncodeType',
        'encodeKey'      => 'EncodeKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->targetIdentity) {
            $res['TargetIdentity'] = $this->targetIdentity;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->encodeType) {
            $res['EncodeType'] = $this->encodeType;
        }
        if (null !== $this->encodeKey) {
            $res['EncodeKey'] = $this->encodeKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targetInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['TargetIdentity'])) {
            $model->targetIdentity = $map['TargetIdentity'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['EncodeType'])) {
            $model->encodeType = $map['EncodeType'];
        }
        if (isset($map['EncodeKey'])) {
            $model->encodeKey = $map['EncodeKey'];
        }

        return $model;
    }
}
