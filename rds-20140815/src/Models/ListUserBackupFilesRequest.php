<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ListUserBackupFilesRequest extends Model
{
    /**
     * @description The ID of the full backup file.
     *
     * @example b-kwwvr7v8t7of********
     *
     * @var string
     */
    public $backupId;

    /**
     * @description The description of the full backup file.
     *
     * > The system implements a fuzzy match based on the value of this parameter.
     * @example BackupTest
     *
     * @var string
     */
    public $comment;

    /**
     * @description The URL from which you can download the full backup file that is stored as an object in an Object Storage Service (OSS) bucket. For more information about how to obtain the URL, see [Obtain the access URL after you upload objects](~~39607~~).
     *
     * @example https://******.oss-ap-********.aliyuncs.com/backup_qp.xb
     *
     * @var string
     */
    public $ossUrl;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the region. You can call the [DescribeRegions](~~26243~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The status of the full backup file. Valid values:
     *
     *   **Importing**: The full backup file is being imported.
     *   **Failed**: The full backup file fails to be imported.
     *   **CheckSucccess**: The full backup file passes the check.
     *   **BackupSuccess**: The full backup file is imported.
     *   **Deleted**: The full backup file is deleted.
     *
     * @example CheckSuccess
     *
     * @var string
     */
    public $status;

    /**
     * @description The tag that is added to the full backup file.
     *
     * @example key1:value1
     *
     * @var string
     */
    public $tags;
    protected $_name = [
        'backupId'             => 'BackupId',
        'comment'              => 'Comment',
        'ossUrl'               => 'OssUrl',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'status'               => 'Status',
        'tags'                 => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->ossUrl) {
            $res['OssUrl'] = $this->ossUrl;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserBackupFilesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['OssUrl'])) {
            $model->ossUrl = $map['OssUrl'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
