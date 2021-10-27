<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Tea\Model;

class CreateCustomImageRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $dataSnapshotId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $systemSnapshotId;
    protected $_name = [
        'clientToken'      => 'ClientToken',
        'dataSnapshotId'   => 'DataSnapshotId',
        'description'      => 'Description',
        'imageName'        => 'ImageName',
        'instanceId'       => 'InstanceId',
        'regionId'         => 'RegionId',
        'systemSnapshotId' => 'SystemSnapshotId',
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
        if (null !== $this->dataSnapshotId) {
            $res['DataSnapshotId'] = $this->dataSnapshotId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->systemSnapshotId) {
            $res['SystemSnapshotId'] = $this->systemSnapshotId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCustomImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DataSnapshotId'])) {
            $model->dataSnapshotId = $map['DataSnapshotId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SystemSnapshotId'])) {
            $model->systemSnapshotId = $map['SystemSnapshotId'];
        }

        return $model;
    }
}
