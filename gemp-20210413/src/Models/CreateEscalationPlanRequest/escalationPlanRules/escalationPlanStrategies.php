<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\CreateEscalationPlanRequest\escalationPlanRules;

use AlibabaCloud\Tea\Model;

class escalationPlanStrategies extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $enableWebhook;

    /**
     * @var string
     */
    public $escalationPlanType;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $noticeChannels;

    /**
     * @description This parameter is required.
     *
     * @var int[]
     */
    public $noticeObjects;

    /**
     * @var int[]
     */
    public $noticeRoleList;

    /**
     * @description This parameter is required.
     *
     * @example 40
     *
     * @var string
     */
    public $noticeTime;

    /**
     * @var int[]
     */
    public $serviceGroupIds;
    protected $_name = [
        'enableWebhook'      => 'enableWebhook',
        'escalationPlanType' => 'escalationPlanType',
        'noticeChannels'     => 'noticeChannels',
        'noticeObjects'      => 'noticeObjects',
        'noticeRoleList'     => 'noticeRoleList',
        'noticeTime'         => 'noticeTime',
        'serviceGroupIds'    => 'serviceGroupIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableWebhook) {
            $res['enableWebhook'] = $this->enableWebhook;
        }
        if (null !== $this->escalationPlanType) {
            $res['escalationPlanType'] = $this->escalationPlanType;
        }
        if (null !== $this->noticeChannels) {
            $res['noticeChannels'] = $this->noticeChannels;
        }
        if (null !== $this->noticeObjects) {
            $res['noticeObjects'] = $this->noticeObjects;
        }
        if (null !== $this->noticeRoleList) {
            $res['noticeRoleList'] = $this->noticeRoleList;
        }
        if (null !== $this->noticeTime) {
            $res['noticeTime'] = $this->noticeTime;
        }
        if (null !== $this->serviceGroupIds) {
            $res['serviceGroupIds'] = $this->serviceGroupIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return escalationPlanStrategies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['enableWebhook'])) {
            $model->enableWebhook = $map['enableWebhook'];
        }
        if (isset($map['escalationPlanType'])) {
            $model->escalationPlanType = $map['escalationPlanType'];
        }
        if (isset($map['noticeChannels'])) {
            if (!empty($map['noticeChannels'])) {
                $model->noticeChannels = $map['noticeChannels'];
            }
        }
        if (isset($map['noticeObjects'])) {
            if (!empty($map['noticeObjects'])) {
                $model->noticeObjects = $map['noticeObjects'];
            }
        }
        if (isset($map['noticeRoleList'])) {
            if (!empty($map['noticeRoleList'])) {
                $model->noticeRoleList = $map['noticeRoleList'];
            }
        }
        if (isset($map['noticeTime'])) {
            $model->noticeTime = $map['noticeTime'];
        }
        if (isset($map['serviceGroupIds'])) {
            if (!empty($map['serviceGroupIds'])) {
                $model->serviceGroupIds = $map['serviceGroupIds'];
            }
        }

        return $model;
    }
}
