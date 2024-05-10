<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class QueryDentryShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example xxx
     *
     * @var string
     */
    public $dentryId;

    /**
     * @example true
     *
     * @var bool
     */
    public $includeSpace;

    /**
     * @description This parameter is required.
     *
     * @example space-fxhb96vuddz8htqt
     *
     * @var string
     */
    public $spaceId;

    /**
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'dentryId'            => 'DentryId',
        'includeSpace'        => 'IncludeSpace',
        'spaceId'             => 'SpaceId',
        'tenantContextShrink' => 'TenantContext',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dentryId) {
            $res['DentryId'] = $this->dentryId;
        }
        if (null !== $this->includeSpace) {
            $res['IncludeSpace'] = $this->includeSpace;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDentryShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DentryId'])) {
            $model->dentryId = $map['DentryId'];
        }
        if (isset($map['IncludeSpace'])) {
            $model->includeSpace = $map['IncludeSpace'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        return $model;
    }
}
