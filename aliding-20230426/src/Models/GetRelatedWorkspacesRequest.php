<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetRelatedWorkspacesRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class GetRelatedWorkspacesRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $includeRecent;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'includeRecent' => 'IncludeRecent',
        'tenantContext' => 'TenantContext',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->includeRecent) {
            $res['IncludeRecent'] = $this->includeRecent;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRelatedWorkspacesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IncludeRecent'])) {
            $model->includeRecent = $map['IncludeRecent'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}
