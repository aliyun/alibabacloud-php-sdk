<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\PushNotificationsRequest;

use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\PushNotificationsRequest\notificationUnicastRequest\sendTarget;
use AlibabaCloud\Tea\Model;

class notificationUnicastRequest extends Model
{
    /**
     * @description 消息推送的目标信息。
     *
     * @var sendTarget
     */
    public $sendTarget;

    /**
     * @description 消息模板，在天猫精灵应用平台中申请消息模板时得到的模板id。
     *
     * @var string
     */
    public $messageTemplateId;

    /**
     * @description 占位符信息，例如：模板是【你好，{nick}！】这里可以是：{"nick":"小甜甜"}
     *
     * @var mixed[]
     */
    public $placeHolder;

    /**
     * @description 编码类型，获取猫精的设备标识的途径有多种，不同途径对应不同的编码类型： PACKAGE_NAME：apk包名 SKILL_ID：技能id
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

    /**
     * @description 组织标识，推送类型是XX_UNION_XX时才需要配。当存在多种途径获取猫精设备或用户标识且又需要能互通的情况下需要找平台申请组织，申请通过后由平台分配得到。
     *
     * @var string
     */
    public $organizationId;

    /**
     * @description 调试标识
     *
     * @var bool
     */
    public $isDebug;
    protected $_name = [
        'sendTarget'        => 'SendTarget',
        'messageTemplateId' => 'MessageTemplateId',
        'placeHolder'       => 'PlaceHolder',
        'encodeType'        => 'EncodeType',
        'encodeKey'         => 'EncodeKey',
        'organizationId'    => 'OrganizationId',
        'isDebug'           => 'IsDebug',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sendTarget) {
            $res['SendTarget'] = null !== $this->sendTarget ? $this->sendTarget->toMap() : null;
        }
        if (null !== $this->messageTemplateId) {
            $res['MessageTemplateId'] = $this->messageTemplateId;
        }
        if (null !== $this->placeHolder) {
            $res['PlaceHolder'] = $this->placeHolder;
        }
        if (null !== $this->encodeType) {
            $res['EncodeType'] = $this->encodeType;
        }
        if (null !== $this->encodeKey) {
            $res['EncodeKey'] = $this->encodeKey;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->isDebug) {
            $res['IsDebug'] = $this->isDebug;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notificationUnicastRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SendTarget'])) {
            $model->sendTarget = sendTarget::fromMap($map['SendTarget']);
        }
        if (isset($map['MessageTemplateId'])) {
            $model->messageTemplateId = $map['MessageTemplateId'];
        }
        if (isset($map['PlaceHolder'])) {
            $model->placeHolder = $map['PlaceHolder'];
        }
        if (isset($map['EncodeType'])) {
            $model->encodeType = $map['EncodeType'];
        }
        if (isset($map['EncodeKey'])) {
            $model->encodeKey = $map['EncodeKey'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['IsDebug'])) {
            $model->isDebug = $map['IsDebug'];
        }

        return $model;
    }
}
