<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class GetRelatedWorkspacesShrinkRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $includeRecent;

    /**
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'includeRecent'       => 'IncludeRecent',
        'tenantContextShrink' => 'TenantContext',
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
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRelatedWorkspacesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IncludeRecent'])) {
            $model->includeRecent = $map['IncludeRecent'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        return $model;
    }
}
