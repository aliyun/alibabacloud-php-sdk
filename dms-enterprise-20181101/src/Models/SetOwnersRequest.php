<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class SetOwnersRequest extends Model
{
    /**
     * @description The ID of the user whom you want to specify as an owner. Separate multiple IDs with commas (,). You can call the [GetUser](~~147098~~) or [ListUsers](~~141938~~) operation to query the ID of the user.
     *
     * >  The value of the OwnerIds parameter is that of the UserId parameter.
     * @example 51****
     *
     * @var string
     */
    public $ownerIds;

    /**
     * @description The type of the owner. Valid values:
     *
     *   INSTANCE: an owner of an instance.
     *   DATABASE: an owner of a physical database.
     *   LOGIC_DATABASE: an owner of a logical database.
     *   TABLE: an owner of a physical table.
     *   LOGIC_TABLE: an owner of a logical table.
     *
     * @example INSTANCE
     *
     * @var string
     */
    public $ownerType;

    /**
     * @description The ID of the resource. The ID of the resource varies with the owner type. The owner types and resource IDs have the following mappings:
     *
     *   INSTANCE: the ID of an instance. You can call the [ListInstances](~~141936~~) operation to query the ID of the instance.
     *   DATABASE: the ID of a physical database. You can call the [ListDatabases](~~141873~~) operation to query the ID of the physical database.
     *   LOGIC_DATABASE: the ID of a logical database. You can call the [ListLogicDatabases](~~141874~~) operation to query the ID of the logical database.
     *   TABLE: the ID of a physical table. You can call the [ListTables](~~141878~~) operation to query the ID of the physical table.
     *   LOGIC_DATABASE: the ID of a logical table. You can call the [ListLogicTables](~~141875~~) operation to query the ID of the logical table.
     *
     * @example 174****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The ID of the tenant.
     *
     * >  To view the ID of the tenant, move the pointer over the profile picture in the upper-right corner of the Data Management (DMS) console. For more information, see the "View information about the current tenant" section of the [Manage DMS tenants](~~181330~~) topic.
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'ownerIds'   => 'OwnerIds',
        'ownerType'  => 'OwnerType',
        'resourceId' => 'ResourceId',
        'tid'        => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerIds) {
            $res['OwnerIds'] = $this->ownerIds;
        }
        if (null !== $this->ownerType) {
            $res['OwnerType'] = $this->ownerType;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetOwnersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerIds'])) {
            $model->ownerIds = $map['OwnerIds'];
        }
        if (isset($map['OwnerType'])) {
            $model->ownerType = $map['OwnerType'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
