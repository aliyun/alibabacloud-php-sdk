<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\ListTempFilesResponseBody;

use AlibabaCloud\Dara\Model;

class tempFiles extends Model
{
    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var int
     */
    public $capacity;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtExpiredTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $prefix;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $uploadUrl;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'bandwidth' => 'Bandwidth',
        'capacity' => 'Capacity',
        'description' => 'Description',
        'downloadUrl' => 'DownloadUrl',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtExpiredTime' => 'GmtExpiredTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'instanceId' => 'InstanceId',
        'name' => 'Name',
        'ownerId' => 'OwnerId',
        'prefix' => 'Prefix',
        'status' => 'Status',
        'taskId' => 'TaskId',
        'type' => 'Type',
        'uploadUrl' => 'UploadUrl',
        'userId' => 'UserId',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }

        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtExpiredTime) {
            $res['GmtExpiredTime'] = $this->gmtExpiredTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->uploadUrl) {
            $res['UploadUrl'] = $this->uploadUrl;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtExpiredTime'])) {
            $model->gmtExpiredTime = $map['GmtExpiredTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UploadUrl'])) {
            $model->uploadUrl = $map['UploadUrl'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
