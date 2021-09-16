<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class CreateIncidentRequest extends Model
{
    /**
     * @description P1	事件级别 P1 P2 P3 P4
     *
     * @var string
     */
    public $incidentLevel;

    /**
     * @description 幂等UUID
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 关联服务ID
     *
     * @var int
     */
    public $relatedServiceId;

    /**
     * @description 影响等级 高：HIGH 低 LOW
     *
     * @var string
     */
    public $effect;

    /**
     * @description 事件标题
     *
     * @var string
     */
    public $incidentTitle;

    /**
     * @description 分派的用户ID
     *
     * @var int
     */
    public $assignUserId;

    /**
     * @description 事件描述
     *
     * @var string
     */
    public $incidentDescription;

    /**
     * @description 通知渠道     SMS 短信   EMAIL 邮件   PHONE  电话  WEIXIN_GROUP企微群 DING_GROUP 钉钉群
     *
     * @var string[]
     */
    public $channels;

    /**
     * @description 服务组Id
     *
     * @var int
     */
    public $serviceGroupId;
    protected $_name = [
        'incidentLevel'       => 'incidentLevel',
        'clientToken'         => 'clientToken',
        'relatedServiceId'    => 'relatedServiceId',
        'effect'              => 'effect',
        'incidentTitle'       => 'incidentTitle',
        'assignUserId'        => 'assignUserId',
        'incidentDescription' => 'incidentDescription',
        'channels'            => 'channels',
        'serviceGroupId'      => 'serviceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->incidentLevel) {
            $res['incidentLevel'] = $this->incidentLevel;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->relatedServiceId) {
            $res['relatedServiceId'] = $this->relatedServiceId;
        }
        if (null !== $this->effect) {
            $res['effect'] = $this->effect;
        }
        if (null !== $this->incidentTitle) {
            $res['incidentTitle'] = $this->incidentTitle;
        }
        if (null !== $this->assignUserId) {
            $res['assignUserId'] = $this->assignUserId;
        }
        if (null !== $this->incidentDescription) {
            $res['incidentDescription'] = $this->incidentDescription;
        }
        if (null !== $this->channels) {
            $res['channels'] = $this->channels;
        }
        if (null !== $this->serviceGroupId) {
            $res['serviceGroupId'] = $this->serviceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIncidentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['incidentLevel'])) {
            $model->incidentLevel = $map['incidentLevel'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['relatedServiceId'])) {
            $model->relatedServiceId = $map['relatedServiceId'];
        }
        if (isset($map['effect'])) {
            $model->effect = $map['effect'];
        }
        if (isset($map['incidentTitle'])) {
            $model->incidentTitle = $map['incidentTitle'];
        }
        if (isset($map['assignUserId'])) {
            $model->assignUserId = $map['assignUserId'];
        }
        if (isset($map['incidentDescription'])) {
            $model->incidentDescription = $map['incidentDescription'];
        }
        if (isset($map['channels'])) {
            if (!empty($map['channels'])) {
                $model->channels = $map['channels'];
            }
        }
        if (isset($map['serviceGroupId'])) {
            $model->serviceGroupId = $map['serviceGroupId'];
        }

        return $model;
    }
}
