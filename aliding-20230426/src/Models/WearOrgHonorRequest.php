<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\WearOrgHonorRequest\tenantContext;

class WearOrgHonorRequest extends Model
{
    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @var string
     */
    public $honorId;

    /**
     * @var int
     */
    public $orgId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var bool
     */
    public $wear;
    protected $_name = [
        'tenantContext' => 'TenantContext',
        'honorId' => 'honorId',
        'orgId' => 'orgId',
        'userId' => 'userId',
        'wear' => 'wear',
    ];

    public function validate()
    {
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
        }

        if (null !== $this->honorId) {
            $res['honorId'] = $this->honorId;
        }

        if (null !== $this->orgId) {
            $res['orgId'] = $this->orgId;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        if (null !== $this->wear) {
            $res['wear'] = $this->wear;
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
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        if (isset($map['honorId'])) {
            $model->honorId = $map['honorId'];
        }

        if (isset($map['orgId'])) {
            $model->orgId = $map['orgId'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        if (isset($map['wear'])) {
            $model->wear = $map['wear'];
        }

        return $model;
    }
}
