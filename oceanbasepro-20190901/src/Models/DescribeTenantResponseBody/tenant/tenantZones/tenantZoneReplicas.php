<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant\tenantZones;

use AlibabaCloud\Tea\Model;

class tenantZoneReplicas extends Model
{
    /**
     * @var int
     */
    public $fullCopyId;

    /**
     * @var string
     */
    public $logicZoneName;

    /**
     * @var string
     */
    public $readOnlyCopyId;

    /**
     * @var int
     */
    public $zoneCopyId;

    /**
     * @var string
     */
    public $zoneNodes;

    /**
     * @var string
     */
    public $zoneReplicaType;
    protected $_name = [
        'fullCopyId'      => 'FullCopyId',
        'logicZoneName'   => 'LogicZoneName',
        'readOnlyCopyId'  => 'ReadOnlyCopyId',
        'zoneCopyId'      => 'ZoneCopyId',
        'zoneNodes'       => 'ZoneNodes',
        'zoneReplicaType' => 'ZoneReplicaType',
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
