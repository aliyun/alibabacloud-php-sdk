<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateSnapshotRequest extends Model
{
    /**
     * @description The description of the snapshot. The description must be 2 to 256 characters in length and cannot start with `http://` or `https://`.
     *
     * By default, this parameter is left empty.
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the cloud disk.
     *
     * This parameter is required.
     * @example d-bp1s5fnvk4gn2tws0****
     *
     * @var string
     */
    public $diskId;

    /**
     * @description The ID of the edge node.
     *
     * This parameter is required.
     * @example cn-shenzhen-3
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The name of the snapshot. The name must be 2 to 128 characters in length. It must start with a letter and cannot start with `http://` or `https://`. It can contain letters, digits, colons (:), underscores (_), and hyphens (-).
     *
     * @example testSnapshotName
     *
     * @var string
     */
    public $snapshotName;
    protected $_name = [
        'description'  => 'Description',
        'diskId'       => 'DiskId',
        'ensRegionId'  => 'EnsRegionId',
        'snapshotName' => 'SnapshotName',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->snapshotName) {
            $res['SnapshotName'] = $this->snapshotName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSnapshotRequest
     */
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
        if (isset($map['SnapshotName'])) {
            $model->snapshotName = $map['SnapshotName'];
        }

        return $model;
    }
}
