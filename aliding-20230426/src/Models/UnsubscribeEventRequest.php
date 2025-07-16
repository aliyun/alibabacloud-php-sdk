<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\UnsubscribeEventRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class UnsubscribeEventRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example SPACE
     *
     * @var string
     */
    public $scope;

    /**
     * @description This parameter is required.
     *
     * @example 23456
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->scopeId) {
            $res['ScopeId'] = $this->scopeId;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnsubscribeEventRequest
     */
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
