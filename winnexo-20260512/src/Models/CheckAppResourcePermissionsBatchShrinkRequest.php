<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class CheckAppResourcePermissionsBatchShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $checksShrink;

    /**
     * @var string
     */
    public $resourceTenantId;

    /**
     * @var int
     */
    public $targetUserId;

    /**
     * @var string
     */
    public $targetUserTenantId;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'checksShrink' => 'checks',
        'resourceTenantId' => 'resourceTenantId',
        'targetUserId' => 'targetUserId',
        'targetUserTenantId' => 'targetUserTenantId',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checksShrink) {
            $res['checks'] = $this->checksShrink;
        }

        if (null !== $this->resourceTenantId) {
            $res['resourceTenantId'] = $this->resourceTenantId;
        }

        if (null !== $this->targetUserId) {
            $res['targetUserId'] = $this->targetUserId;
        }

        if (null !== $this->targetUserTenantId) {
            $res['targetUserTenantId'] = $this->targetUserTenantId;
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
        if (isset($map['checks'])) {
            $model->checksShrink = $map['checks'];
        }

        if (isset($map['resourceTenantId'])) {
            $model->resourceTenantId = $map['resourceTenantId'];
        }

        if (isset($map['targetUserId'])) {
            $model->targetUserId = $map['targetUserId'];
        }

        if (isset($map['targetUserTenantId'])) {
            $model->targetUserTenantId = $map['targetUserTenantId'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
