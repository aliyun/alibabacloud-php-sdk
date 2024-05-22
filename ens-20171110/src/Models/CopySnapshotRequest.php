<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CopySnapshotRequest extends Model
{
    /**
     * @description The destination nodes.
     *
     * This parameter is required.
     * @var string[]
     */
    public $destinationRegionIds;

    /**
     * @description The description of the snapshot. The description must be 2 to 256 characters in length and cannot start with `http://` or `https://`.
     *
     * @example testDescription
     *
     * @var string
     */
    public $destinationSnapshotDescription;

    /**
     * @description The name of the snapshot. The name must be 2 to 128 characters in length. It must start with a letter and cannot start with `http://` or `https://`. It can contain letters, digits, colons (:), underscores (_), and hyphens (-).
     *
     * @example testSnapshotName
     *
     * @var string
     */
    public $destinationSnapshotName;

    /**
     * @description The ID of the source snapshot.
     *
     * This parameter is required.
     * @example sp-bp1c0doj0taqyzzl****
     *
     * @var string
     */
    public $snapshotId;
    protected $_name = [
        'destinationRegionIds'           => 'DestinationRegionIds',
        'destinationSnapshotDescription' => 'DestinationSnapshotDescription',
        'destinationSnapshotName'        => 'DestinationSnapshotName',
        'snapshotId'                     => 'SnapshotId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationRegionIds) {
            $res['DestinationRegionIds'] = $this->destinationRegionIds;
        }
        if (null !== $this->destinationSnapshotDescription) {
            $res['DestinationSnapshotDescription'] = $this->destinationSnapshotDescription;
        }
        if (null !== $this->destinationSnapshotName) {
            $res['DestinationSnapshotName'] = $this->destinationSnapshotName;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CopySnapshotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationRegionIds'])) {
            if (!empty($map['DestinationRegionIds'])) {
                $model->destinationRegionIds = $map['DestinationRegionIds'];
            }
        }
        if (isset($map['DestinationSnapshotDescription'])) {
            $model->destinationSnapshotDescription = $map['DestinationSnapshotDescription'];
        }
        if (isset($map['DestinationSnapshotName'])) {
            $model->destinationSnapshotName = $map['DestinationSnapshotName'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }

        return $model;
    }
}
