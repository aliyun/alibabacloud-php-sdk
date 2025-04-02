<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserIdRequest\tenantContext;

class GetUserIdRequest extends Model
{
    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @var string
     */
    public $unionId;
    protected $_name = [
        'tenantContext' => 'TenantContext',
        'unionId' => 'UnionId',
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

        if (null !== $this->unionId) {
            $res['UnionId'] = $this->unionId;
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

        if (isset($map['UnionId'])) {
            $model->unionId = $map['UnionId'];
        }

        return $model;
    }
}
