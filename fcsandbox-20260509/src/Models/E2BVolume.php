<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCSandbox\V20260509\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\E2BVolume\mountConfig;

class E2BVolume extends Model
{
    /**
     * @var AgenticFSVolumeConfig
     */
    public $agenticFSVolumeConfig;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var mountConfig
     */
    public $mountConfig;

    /**
     * @var OSSVolumeConfig
     */
    public $ossVolumeConfig;

    /**
     * @var string
     */
    public $resourceGroupID;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusReason;

    /**
     * @var string
     */
    public $storageClass;

    /**
     * @var string
     */
    public $teamID;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $userID;

    /**
     * @var string
     */
    public $volumeID;

    /**
     * @var string
     */
    public $volumeName;
    protected $_name = [
        'agenticFSVolumeConfig' => 'agenticFSVolumeConfig',
        'createdAt' => 'createdAt',
        'mountConfig' => 'mountConfig',
        'ossVolumeConfig' => 'ossVolumeConfig',
        'resourceGroupID' => 'resourceGroupID',
        'status' => 'status',
        'statusReason' => 'statusReason',
        'storageClass' => 'storageClass',
        'teamID' => 'teamID',
        'updatedAt' => 'updatedAt',
        'userID' => 'userID',
        'volumeID' => 'volumeID',
        'volumeName' => 'volumeName',
    ];

    public function validate()
    {
        if (null !== $this->agenticFSVolumeConfig) {
            $this->agenticFSVolumeConfig->validate();
        }
        if (null !== $this->mountConfig) {
            $this->mountConfig->validate();
        }
        if (null !== $this->ossVolumeConfig) {
            $this->ossVolumeConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agenticFSVolumeConfig) {
            $res['agenticFSVolumeConfig'] = null !== $this->agenticFSVolumeConfig ? $this->agenticFSVolumeConfig->toArray($noStream) : $this->agenticFSVolumeConfig;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->mountConfig) {
            $res['mountConfig'] = null !== $this->mountConfig ? $this->mountConfig->toArray($noStream) : $this->mountConfig;
        }

        if (null !== $this->ossVolumeConfig) {
            $res['ossVolumeConfig'] = null !== $this->ossVolumeConfig ? $this->ossVolumeConfig->toArray($noStream) : $this->ossVolumeConfig;
        }

        if (null !== $this->resourceGroupID) {
            $res['resourceGroupID'] = $this->resourceGroupID;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->statusReason) {
            $res['statusReason'] = $this->statusReason;
        }

        if (null !== $this->storageClass) {
            $res['storageClass'] = $this->storageClass;
        }

        if (null !== $this->teamID) {
            $res['teamID'] = $this->teamID;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }

        if (null !== $this->userID) {
            $res['userID'] = $this->userID;
        }

        if (null !== $this->volumeID) {
            $res['volumeID'] = $this->volumeID;
        }

        if (null !== $this->volumeName) {
            $res['volumeName'] = $this->volumeName;
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
        if (isset($map['agenticFSVolumeConfig'])) {
            $model->agenticFSVolumeConfig = AgenticFSVolumeConfig::fromMap($map['agenticFSVolumeConfig']);
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['mountConfig'])) {
            $model->mountConfig = mountConfig::fromMap($map['mountConfig']);
        }

        if (isset($map['ossVolumeConfig'])) {
            $model->ossVolumeConfig = OSSVolumeConfig::fromMap($map['ossVolumeConfig']);
        }

        if (isset($map['resourceGroupID'])) {
            $model->resourceGroupID = $map['resourceGroupID'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['statusReason'])) {
            $model->statusReason = $map['statusReason'];
        }

        if (isset($map['storageClass'])) {
            $model->storageClass = $map['storageClass'];
        }

        if (isset($map['teamID'])) {
            $model->teamID = $map['teamID'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        if (isset($map['userID'])) {
            $model->userID = $map['userID'];
        }

        if (isset($map['volumeID'])) {
            $model->volumeID = $map['volumeID'];
        }

        if (isset($map['volumeName'])) {
            $model->volumeName = $map['volumeName'];
        }

        return $model;
    }
}
