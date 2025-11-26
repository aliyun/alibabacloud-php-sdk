<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class CopySnapshotRequest extends Model
{
    /**
     * @var string[]
     */
    public $destinationRegionIds;

    /**
     * @var string
     */
    public $destinationSnapshotDescription;

    /**
     * @var string
     */
    public $destinationSnapshotName;

    /**
     * @var string
     */
    public $instanceBillingCycle;

    /**
     * @var string
     */
    public $snapshotId;
    protected $_name = [
        'destinationRegionIds' => 'DestinationRegionIds',
        'destinationSnapshotDescription' => 'DestinationSnapshotDescription',
        'destinationSnapshotName' => 'DestinationSnapshotName',
        'instanceBillingCycle' => 'InstanceBillingCycle',
        'snapshotId' => 'SnapshotId',
    ];

    public function validate()
    {
        if (\is_array($this->destinationRegionIds)) {
            Model::validateArray($this->destinationRegionIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destinationRegionIds) {
            if (\is_array($this->destinationRegionIds)) {
                $res['DestinationRegionIds'] = [];
                $n1 = 0;
                foreach ($this->destinationRegionIds as $item1) {
                    $res['DestinationRegionIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->destinationSnapshotDescription) {
            $res['DestinationSnapshotDescription'] = $this->destinationSnapshotDescription;
        }

        if (null !== $this->destinationSnapshotName) {
            $res['DestinationSnapshotName'] = $this->destinationSnapshotName;
        }

        if (null !== $this->instanceBillingCycle) {
            $res['InstanceBillingCycle'] = $this->instanceBillingCycle;
        }

        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
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
        if (isset($map['DestinationRegionIds'])) {
            if (!empty($map['DestinationRegionIds'])) {
                $model->destinationRegionIds = [];
                $n1 = 0;
                foreach ($map['DestinationRegionIds'] as $item1) {
                    $model->destinationRegionIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DestinationSnapshotDescription'])) {
            $model->destinationSnapshotDescription = $map['DestinationSnapshotDescription'];
        }

        if (isset($map['DestinationSnapshotName'])) {
            $model->destinationSnapshotName = $map['DestinationSnapshotName'];
        }

        if (isset($map['InstanceBillingCycle'])) {
            $model->instanceBillingCycle = $map['InstanceBillingCycle'];
        }

        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }

        return $model;
    }
}
