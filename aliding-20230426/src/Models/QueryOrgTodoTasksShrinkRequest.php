<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class QueryOrgTodoTasksShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @var bool
     */
    public $isDone;

    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'tenantContextShrink' => 'TenantContext',
        'isDone' => 'isDone',
        'nextToken' => 'nextToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }

        if (null !== $this->isDone) {
            $res['isDone'] = $this->isDone;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
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
            $model->tenantContextShrink = $map['TenantContext'];
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
