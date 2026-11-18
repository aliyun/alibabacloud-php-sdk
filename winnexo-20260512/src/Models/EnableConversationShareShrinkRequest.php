<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class EnableConversationShareShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $shareAccessType;

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
    public $tenantId;
    protected $_name = [
        'sessionId' => 'sessionId',
        'shareAccessType' => 'shareAccessType',
        'shareUserGroupIdsShrink' => 'shareUserGroupIds',
        'shareUserIdsShrink' => 'shareUserIds',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->shareAccessType) {
            $res['shareAccessType'] = $this->shareAccessType;
        }

        if (null !== $this->shareUserGroupIdsShrink) {
            $res['shareUserGroupIds'] = $this->shareUserGroupIdsShrink;
        }

        if (null !== $this->shareUserIdsShrink) {
            $res['shareUserIds'] = $this->shareUserIdsShrink;
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
        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['shareAccessType'])) {
            $model->shareAccessType = $map['shareAccessType'];
        }

        if (isset($map['shareUserGroupIds'])) {
            $model->shareUserGroupIdsShrink = $map['shareUserGroupIds'];
        }

        if (isset($map['shareUserIds'])) {
            $model->shareUserIdsShrink = $map['shareUserIds'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
