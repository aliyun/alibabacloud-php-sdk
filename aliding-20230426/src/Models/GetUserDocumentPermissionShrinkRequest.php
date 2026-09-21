<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class GetUserDocumentPermissionShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $dentryId;

    /**
     * @var string
     */
    public $dentryUuid;

    /**
     * @var int
     */
    public $resourceType;

    /**
     * @var int
     */
    public $spaceId;

    /**
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'dentryId' => 'DentryId',
        'dentryUuid' => 'DentryUuid',
        'resourceType' => 'ResourceType',
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

        if (null !== $this->dentryUuid) {
            $res['DentryUuid'] = $this->dentryUuid;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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

        if (isset($map['DentryUuid'])) {
            $model->dentryUuid = $map['DentryUuid'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
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
