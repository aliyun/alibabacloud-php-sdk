<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class CreateSnapshotRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $diskId;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $instanceBillingCycle;

    /**
     * @var string
     */
    public $snapshotName;
    protected $_name = [
        'description' => 'Description',
        'diskId' => 'DiskId',
        'ensRegionId' => 'EnsRegionId',
        'instanceBillingCycle' => 'InstanceBillingCycle',
        'snapshotName' => 'SnapshotName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }

        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        if (null !== $this->instanceBillingCycle) {
            $res['InstanceBillingCycle'] = $this->instanceBillingCycle;
        }

        if (null !== $this->snapshotName) {
            $res['SnapshotName'] = $this->snapshotName;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }

        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        if (isset($map['InstanceBillingCycle'])) {
            $model->instanceBillingCycle = $map['InstanceBillingCycle'];
        }

        if (isset($map['SnapshotName'])) {
            $model->snapshotName = $map['SnapshotName'];
        }

        return $model;
    }
}
