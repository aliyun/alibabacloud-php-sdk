<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class CopySnapshotShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $destinationRegionIdsShrink;

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
        'destinationRegionIdsShrink' => 'DestinationRegionIds',
        'destinationSnapshotDescription' => 'DestinationSnapshotDescription',
        'destinationSnapshotName' => 'DestinationSnapshotName',
        'instanceBillingCycle' => 'InstanceBillingCycle',
        'snapshotId' => 'SnapshotId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destinationRegionIdsShrink) {
            $res['DestinationRegionIds'] = $this->destinationRegionIdsShrink;
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
            $model->destinationRegionIdsShrink = $map['DestinationRegionIds'];
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
