<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryOrgTodoTasksRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class QueryOrgTodoTasksRequest extends Model
{
    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @example true
     *
     * @var bool
     */
    public $isDone;

    /**
     * @example 0
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'tenantContext' => 'TenantContext',
        'isDone'        => 'isDone',
        'nextToken'     => 'nextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }
        if (null !== $this->isDone) {
            $res['isDone'] = $this->isDone;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryOrgTodoTasksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }
        if (isset($map['isDone'])) {
            $model->isDone = $map['isDone'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        return $model;
    }
}
