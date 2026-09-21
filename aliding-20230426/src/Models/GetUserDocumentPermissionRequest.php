<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserDocumentPermissionRequest\tenantContext;

class GetUserDocumentPermissionRequest extends Model
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
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'dentryId' => 'DentryId',
        'dentryUuid' => 'DentryUuid',
        'resourceType' => 'ResourceType',
        'spaceId' => 'SpaceId',
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
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}
