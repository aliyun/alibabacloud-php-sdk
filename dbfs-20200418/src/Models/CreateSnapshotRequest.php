<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models;

use AlibabaCloud\Tea\Model;

class CreateSnapshotRequest extends Model
{
    /**
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @example d-bp131n0q38u3a4zi*****
     *
     * @var string
     */
    public $fsId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 30
     *
     * @var int
     */
    public $retentionDays;

    /**
     * @example testSnapshotName
     *
     * @var string
     */
    public $snapshotName;
    protected $_name = [
        'clientToken'   => 'ClientToken',
        'description'   => 'Description',
        'fsId'          => 'FsId',
        'regionId'      => 'RegionId',
        'retentionDays' => 'RetentionDays',
        'snapshotName'  => 'SnapshotName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fsId) {
            $res['FsId'] = $this->fsId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->retentionDays) {
            $res['RetentionDays'] = $this->retentionDays;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FsId'])) {
            $model->fsId = $map['FsId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RetentionDays'])) {
            $model->retentionDays = $map['RetentionDays'];
        }
        if (isset($map['SnapshotName'])) {
            $model->snapshotName = $map['SnapshotName'];
        }

        return $model;
    }
}
