<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class SetKnowledgeBaseVisibilityShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appToken;

    /**
     * @var string
     */
    public $cascadeMode;

    /**
     * @var string
     */
    public $opsUserCode;

    /**
     * @var string
     */
    public $opsUserId;

    /**
     * @var string
     */
    public $targetId;

    /**
     * @var string
     */
    public $targetType;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $userGroupIdsShrink;

    /**
     * @var string
     */
    public $userIdsShrink;

    /**
     * @var string
     */
    public $visibilityMode;
    protected $_name = [
        'appToken' => 'appToken',
        'cascadeMode' => 'cascadeMode',
        'opsUserCode' => 'opsUserCode',
        'opsUserId' => 'opsUserId',
        'targetId' => 'targetId',
        'targetType' => 'targetType',
        'tenantId' => 'tenantId',
        'userGroupIdsShrink' => 'userGroupIds',
        'userIdsShrink' => 'userIds',
        'visibilityMode' => 'visibilityMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appToken) {
            $res['appToken'] = $this->appToken;
        }

        if (null !== $this->cascadeMode) {
            $res['cascadeMode'] = $this->cascadeMode;
        }

        if (null !== $this->opsUserCode) {
            $res['opsUserCode'] = $this->opsUserCode;
        }

        if (null !== $this->opsUserId) {
            $res['opsUserId'] = $this->opsUserId;
        }

        if (null !== $this->targetId) {
            $res['targetId'] = $this->targetId;
        }

        if (null !== $this->targetType) {
            $res['targetType'] = $this->targetType;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->userGroupIdsShrink) {
            $res['userGroupIds'] = $this->userGroupIdsShrink;
        }

        if (null !== $this->userIdsShrink) {
            $res['userIds'] = $this->userIdsShrink;
        }

        if (null !== $this->visibilityMode) {
            $res['visibilityMode'] = $this->visibilityMode;
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
        if (isset($map['appToken'])) {
            $model->appToken = $map['appToken'];
        }

        if (isset($map['cascadeMode'])) {
            $model->cascadeMode = $map['cascadeMode'];
        }

        if (isset($map['opsUserCode'])) {
            $model->opsUserCode = $map['opsUserCode'];
        }

        if (isset($map['opsUserId'])) {
            $model->opsUserId = $map['opsUserId'];
        }

        if (isset($map['targetId'])) {
            $model->targetId = $map['targetId'];
        }

        if (isset($map['targetType'])) {
            $model->targetType = $map['targetType'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['userGroupIds'])) {
            $model->userGroupIdsShrink = $map['userGroupIds'];
        }

        if (isset($map['userIds'])) {
            $model->userIdsShrink = $map['userIds'];
        }

        if (isset($map['visibilityMode'])) {
            $model->visibilityMode = $map['visibilityMode'];
        }

        return $model;
    }
}
