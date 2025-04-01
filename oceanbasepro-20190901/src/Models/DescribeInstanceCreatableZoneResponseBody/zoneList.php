<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceCreatableZoneResponseBody;

use AlibabaCloud\Dara\Model;

class zoneList extends Model
{
    /**
     * @var string
     */
    public $fullCopyId;

    /**
     * @var bool
     */
    public $isInCluster;

    /**
     * @var string
     */
    public $logicalZoneName;

    /**
     * @var int
     */
    public $replicateZoneIndex;

    /**
     * @var string
     */
    public $zone;
    protected $_name = [
        'fullCopyId' => 'FullCopyId',
        'isInCluster' => 'IsInCluster',
        'logicalZoneName' => 'LogicalZoneName',
        'replicateZoneIndex' => 'ReplicateZoneIndex',
        'zone' => 'Zone',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fullCopyId) {
            $res['FullCopyId'] = $this->fullCopyId;
        }

        if (null !== $this->isInCluster) {
            $res['IsInCluster'] = $this->isInCluster;
        }

        if (null !== $this->logicalZoneName) {
            $res['LogicalZoneName'] = $this->logicalZoneName;
        }

        if (null !== $this->replicateZoneIndex) {
            $res['ReplicateZoneIndex'] = $this->replicateZoneIndex;
        }

        if (null !== $this->zone) {
            $res['Zone'] = $this->zone;
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
        if (isset($map['FullCopyId'])) {
            $model->fullCopyId = $map['FullCopyId'];
        }

        if (isset($map['IsInCluster'])) {
            $model->isInCluster = $map['IsInCluster'];
        }

        if (isset($map['LogicalZoneName'])) {
            $model->logicalZoneName = $map['LogicalZoneName'];
        }

        if (isset($map['ReplicateZoneIndex'])) {
            $model->replicateZoneIndex = $map['ReplicateZoneIndex'];
        }

        if (isset($map['Zone'])) {
            $model->zone = $map['Zone'];
        }

        return $model;
    }
}
