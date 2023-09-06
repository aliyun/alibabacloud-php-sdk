<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryDentryRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class QueryDentryRequest extends Model
{
    /**
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
     * @example space-fxhb96vuddz8htqt
     *
     * @var string
     */
    public $spaceId;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'dentryId'      => 'DentryId',
        'includeSpace'  => 'IncludeSpace',
        'spaceId'       => 'SpaceId',
        'tenantContext' => 'TenantContext',
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
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDentryRequest
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
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}
