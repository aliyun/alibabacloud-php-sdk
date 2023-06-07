<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Tea\Model;

class CreateCustomImageRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must ensure that it is unique among different requests. The **ClientToken** value can only contain ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](~~25693~~).
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the data disk snapshot.
     *
     * @example s-acscasca****
     *
     * @var string
     */
    public $dataSnapshotId;

    /**
     * @description The description of the custom image.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the custom image. The name must be 2 to 128 characters in length, and can contain letters, digits, colons (:), underscores (\_), and hyphens (-). The name must start with a letter or a digit.
     *
     * This parameter is empty by default.
     * @example customImage-test
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The ID of the simple application server.
     *
     * @example ace0706b2ac4454d984295a94213****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region ID of the simple application server. You can call the [ListRegions](~~189315~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the system disk snapshot.
     *
     * @example s-acscasca****
     *
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
