<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ModifySnapshotAttributeRequest extends Model
{
    /**
     * @description The description of the snapshot. The description must be 2 to 256 characters in length. It cannot start with `http://` or `https://`.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the snapshot.
     *
     * @example sp-bp199lyny9bb47pa****
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description The name of the snapshot. The name must be 2 to 128 characters in length. It must start with a letter but cannot start with `http://` or `https://`. It can contain letters, digits, colons (:), underscores (\_), and hyphens (-).
     *
     * The name cannot start with **auto** because snapshots whose names start with auto are recognized as automatic snapshots.
     * @example testSnapshotName
     *
     * @var string
     */
    public $snapshotName;
    protected $_name = [
        'description'  => 'Description',
        'snapshotId'   => 'SnapshotId',
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
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->snapshotName) {
            $res['SnapshotName'] = $this->snapshotName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySnapshotAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['SnapshotName'])) {
            $model->snapshotName = $map['SnapshotName'];
        }

        return $model;
    }
}
