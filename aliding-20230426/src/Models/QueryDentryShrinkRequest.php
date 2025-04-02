<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class QueryDentryShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $dentryId;

    /**
     * @var bool
     */
    public $includeSpace;

    /**
     * @var string
     */
    public $spaceId;

    /**
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'dentryId' => 'DentryId',
        'includeSpace' => 'IncludeSpace',
        'spaceId' => 'SpaceId',
        'tenantContextShrink' => 'TenantContext',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
