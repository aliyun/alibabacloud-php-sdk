<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class DeleteRCSnapshotRequest extends Model
{
    /**
     * @var bool
     */
    public $force;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $snapshotId;
    protected $_name = [
        'force'      => 'Force',
        'regionId'   => 'RegionId',
        'snapshotId' => 'SnapshotId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }

        return $model;
    }
}
