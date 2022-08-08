<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Tea\Model;

class CreateInstanceSnapshotRequest extends Model
{
    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $snapshotDescription;

    /**
     * @var string
     */
    public $snapshotName;
    protected $_name = [
        'imageUrl'            => 'ImageUrl',
        'snapshotDescription' => 'SnapshotDescription',
        'snapshotName'        => 'SnapshotName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->snapshotDescription) {
            $res['SnapshotDescription'] = $this->snapshotDescription;
        }
        if (null !== $this->snapshotName) {
            $res['SnapshotName'] = $this->snapshotName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceSnapshotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['SnapshotDescription'])) {
            $model->snapshotDescription = $map['SnapshotDescription'];
        }
        if (isset($map['SnapshotName'])) {
            $model->snapshotName = $map['SnapshotName'];
        }

        return $model;
    }
}
