<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListCustomImagesResponseBody;

use AlibabaCloud\Tea\Model;

class customImages extends Model
{
    /**
     * @example 2022-10-09T02:28:06Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example s-bp19rn9u8eqzlfb***
     *
     * @var string
     */
    public $dataSnapshotId;

    /**
     * @var string
     */
    public $dataSnapshotName;

    /**
     * @var string
     */
    public $description;

    /**
     * @example m-bp1e79zktg26n2b***
     *
     * @var string
     */
    public $imageId;

    /**
     * @var bool
     */
    public $inShare;

    /**
     * @example 2d06ee0520b44de1ae88d4be****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example swas-asdf23***
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example hua
     *
     * @var string
     */
    public $name;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @example s-bp1h173hj21puxb***
     *
     * @var string
     */
    public $systemSnapshotId;

    /**
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
