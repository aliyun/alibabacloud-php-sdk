<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant\tenantZones;

use AlibabaCloud\Tea\Model;

class tenantZoneReplicas extends Model
{
    /**
     * @description The ID of the full-featured replica.
     *
     * @example 3
     *
     * @var int
     */
    public $fullCopyId;

    /**
     * @description The name of the logical zone.
     *
     * @example cn-shanghai-f-z0
     *
     * @var string
     */
    public $logicZoneName;

    /**
     * @description The ID of the read-only replica.
     *
     * @example 3
     *
     * @var string
     */
    public $readOnlyCopyId;

    /**
     * @description The type of the read-only replica.
     *
     * @example ROW_STORE
     *
     * @var string
     */
    public $readOnlyReplicaType;

    /**
     * @description The ID of the zone replica.
     *
     * @example 2
     *
     * @var int
     */
    public $zoneCopyId;

    /**
     * @description The number of nodes in the zone.
     *
     * @example 1
     *
     * @var int
     */
    public $zoneNodes;

    /**
     * @description The type of the zone replica.
     *
     * @example FULL
     *
     * @var string
     */
    public $zoneReplicaType;
    protected $_name = [
        'fullCopyId'          => 'FullCopyId',
        'logicZoneName'       => 'LogicZoneName',
        'readOnlyCopyId'      => 'ReadOnlyCopyId',
        'readOnlyReplicaType' => 'ReadOnlyReplicaType',
        'zoneCopyId'          => 'ZoneCopyId',
        'zoneNodes'           => 'ZoneNodes',
        'zoneReplicaType'     => 'ZoneReplicaType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fullCopyId) {
            $res['FullCopyId'] = $this->fullCopyId;
        }
        if (null !== $this->logicZoneName) {
            $res['LogicZoneName'] = $this->logicZoneName;
        }
        if (null !== $this->readOnlyCopyId) {
            $res['ReadOnlyCopyId'] = $this->readOnlyCopyId;
        }
        if (null !== $this->readOnlyReplicaType) {
            $res['ReadOnlyReplicaType'] = $this->readOnlyReplicaType;
        }
        if (null !== $this->zoneCopyId) {
            $res['ZoneCopyId'] = $this->zoneCopyId;
        }
        if (null !== $this->zoneNodes) {
            $res['ZoneNodes'] = $this->zoneNodes;
        }
        if (null !== $this->zoneReplicaType) {
            $res['ZoneReplicaType'] = $this->zoneReplicaType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tenantZoneReplicas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FullCopyId'])) {
            $model->fullCopyId = $map['FullCopyId'];
        }
        if (isset($map['LogicZoneName'])) {
            $model->logicZoneName = $map['LogicZoneName'];
        }
        if (isset($map['ReadOnlyCopyId'])) {
            $model->readOnlyCopyId = $map['ReadOnlyCopyId'];
        }
        if (isset($map['ReadOnlyReplicaType'])) {
            $model->readOnlyReplicaType = $map['ReadOnlyReplicaType'];
        }
        if (isset($map['ZoneCopyId'])) {
            $model->zoneCopyId = $map['ZoneCopyId'];
        }
        if (isset($map['ZoneNodes'])) {
            $model->zoneNodes = $map['ZoneNodes'];
        }
        if (isset($map['ZoneReplicaType'])) {
            $model->zoneReplicaType = $map['ZoneReplicaType'];
        }

        return $model;
    }
}
