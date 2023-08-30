<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListCustomImagesResponseBody;

use AlibabaCloud\Tea\Model;

class customImages extends Model
{
    /**
     * @description The time when the snapshot was created. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2022-10-09T02:28:06Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The ID of the data disk snapshot.
     *
     * @example s-bp19rn9u8eqzlfb***
     *
     * @var string
     */
    public $dataSnapshotId;

    /**
     * @description The name of the data disk snapshot.
     *
     * @var string
     */
    public $dataSnapshotName;

    /**
     * @description The description of the custom image.
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the custom image.
     *
     * @example m-bp1e79zktg26n2b***
     *
     * @var string
     */
    public $imageId;

    /**
     * @description Indicates whether the custom image is shared with Elastic Compute Service (ECS).
     *
     * @example false
     *
     * @var bool
     */
    public $inShare;

    /**
     * @description The ID of the simple application server.
     *
     * @example 2d06ee0520b44de1ae88d4be****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the simple application server.
     *
     * @example swas-asdf23***
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The name of the custom image.
     *
     * @example hua
     *
     * @var string
     */
    public $name;

    /**
     * @description The region ID of the custom images.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The status of the custom image.
     *
     * @example 1
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the system disk snapshot.
     *
     * @example s-bp1h173hj21puxb***
     *
     * @var string
     */
    public $systemSnapshotId;

    /**
     * @description The name of the system disk snapshot.
     *
     * @var string
     */
    public $systemSnapshotName;
    protected $_name = [
        'creationTime'       => 'CreationTime',
        'dataSnapshotId'     => 'DataSnapshotId',
        'dataSnapshotName'   => 'DataSnapshotName',
        'description'        => 'Description',
        'imageId'            => 'ImageId',
        'inShare'            => 'InShare',
        'instanceId'         => 'InstanceId',
        'instanceName'       => 'InstanceName',
        'name'               => 'Name',
        'regionId'           => 'RegionId',
        'status'             => 'Status',
        'systemSnapshotId'   => 'SystemSnapshotId',
        'systemSnapshotName' => 'SystemSnapshotName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->dataSnapshotId) {
            $res['DataSnapshotId'] = $this->dataSnapshotId;
        }
        if (null !== $this->dataSnapshotName) {
            $res['DataSnapshotName'] = $this->dataSnapshotName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->inShare) {
            $res['InShare'] = $this->inShare;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->systemSnapshotId) {
            $res['SystemSnapshotId'] = $this->systemSnapshotId;
        }
        if (null !== $this->systemSnapshotName) {
            $res['SystemSnapshotName'] = $this->systemSnapshotName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customImages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DataSnapshotId'])) {
            $model->dataSnapshotId = $map['DataSnapshotId'];
        }
        if (isset($map['DataSnapshotName'])) {
            $model->dataSnapshotName = $map['DataSnapshotName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InShare'])) {
            $model->inShare = $map['InShare'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SystemSnapshotId'])) {
            $model->systemSnapshotId = $map['SystemSnapshotId'];
        }
        if (isset($map['SystemSnapshotName'])) {
            $model->systemSnapshotName = $map['SystemSnapshotName'];
        }

        return $model;
    }
}
