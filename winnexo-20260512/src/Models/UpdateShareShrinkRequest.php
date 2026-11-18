<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class UpdateShareShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $outputItemId;

    /**
     * @var string
     */
    public $outputItemName;

    /**
     * @var bool
     */
    public $refreshShareLink;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $shareAccessType;

    /**
     * @var bool
     */
    public $shareEnabled;

    /**
     * @var string
     */
    public $shareUserGroupIdsShrink;

    /**
     * @var string
     */
    public $shareUserIdsShrink;

    /**
     * @var string
     */
    public $targetType;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'outputItemId' => 'outputItemId',
        'outputItemName' => 'outputItemName',
        'refreshShareLink' => 'refreshShareLink',
        'sessionId' => 'sessionId',
        'shareAccessType' => 'shareAccessType',
        'shareEnabled' => 'shareEnabled',
        'shareUserGroupIdsShrink' => 'shareUserGroupIds',
        'shareUserIdsShrink' => 'shareUserIds',
        'targetType' => 'targetType',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->outputItemId) {
            $res['outputItemId'] = $this->outputItemId;
        }

        if (null !== $this->outputItemName) {
            $res['outputItemName'] = $this->outputItemName;
        }

        if (null !== $this->refreshShareLink) {
            $res['refreshShareLink'] = $this->refreshShareLink;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->shareAccessType) {
            $res['shareAccessType'] = $this->shareAccessType;
        }

        if (null !== $this->shareEnabled) {
            $res['shareEnabled'] = $this->shareEnabled;
        }

        if (null !== $this->shareUserGroupIdsShrink) {
            $res['shareUserGroupIds'] = $this->shareUserGroupIdsShrink;
        }

        if (null !== $this->shareUserIdsShrink) {
            $res['shareUserIds'] = $this->shareUserIdsShrink;
        }

        if (null !== $this->targetType) {
            $res['targetType'] = $this->targetType;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['outputItemId'])) {
            $model->outputItemId = $map['outputItemId'];
        }

        if (isset($map['outputItemName'])) {
            $model->outputItemName = $map['outputItemName'];
        }

        if (isset($map['refreshShareLink'])) {
            $model->refreshShareLink = $map['refreshShareLink'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['shareAccessType'])) {
            $model->shareAccessType = $map['shareAccessType'];
        }

        if (isset($map['shareEnabled'])) {
            $model->shareEnabled = $map['shareEnabled'];
        }

        if (isset($map['shareUserGroupIds'])) {
            $model->shareUserGroupIdsShrink = $map['shareUserGroupIds'];
        }

        if (isset($map['shareUserIds'])) {
            $model->shareUserIdsShrink = $map['shareUserIds'];
        }

        if (isset($map['targetType'])) {
            $model->targetType = $map['targetType'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
