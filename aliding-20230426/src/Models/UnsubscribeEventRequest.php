<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UnsubscribeEventRequest\tenantContext;

class UnsubscribeEventRequest extends Model
{
    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $scopeId;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'scope' => 'Scope',
        'scopeId' => 'ScopeId',
        'tenantContext' => 'TenantContext',
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
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        if (null !== $this->scopeId) {
            $res['ScopeId'] = $this->scopeId;
        }

        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
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
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        if (isset($map['ScopeId'])) {
            $model->scopeId = $map['ScopeId'];
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}
