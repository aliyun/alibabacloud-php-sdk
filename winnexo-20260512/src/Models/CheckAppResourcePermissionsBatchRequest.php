<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CheckAppResourcePermissionsBatchRequest\checks;

class CheckAppResourcePermissionsBatchRequest extends Model
{
    /**
     * @var checks[]
     */
    public $checks;

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
        'checks' => 'checks',
        'resourceTenantId' => 'resourceTenantId',
        'targetUserId' => 'targetUserId',
        'targetUserTenantId' => 'targetUserTenantId',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        if (\is_array($this->checks)) {
            Model::validateArray($this->checks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checks) {
            if (\is_array($this->checks)) {
                $res['checks'] = [];
                $n1 = 0;
                foreach ($this->checks as $item1) {
                    $res['checks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['checks'])) {
                $model->checks = [];
                $n1 = 0;
                foreach ($map['checks'] as $item1) {
                    $model->checks[$n1] = checks::fromMap($item1);
                    ++$n1;
                }
            }
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
