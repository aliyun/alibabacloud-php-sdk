<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DeleteSnapshotRequest extends Model
{
    /**
     * @description The ID of the snapshot.
     *
     * @example sp-bp1c0doj0taqyzzl****
     *
     * @var string
     */
    public $snapshotId;
    protected $_name = [
        'snapshotId' => 'SnapshotId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSnapshotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }

        return $model;
    }
}
