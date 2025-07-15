<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DeleteSnapshotFilesRequest extends Model
{
    /**
     * @description The name of the application to which the live stream belongs.
     *
     * This parameter is required.
     *
     * @example liveApp****
     *
     * @var string
     */
    public $appName;

    /**
     * @description The timestamps when the snapshots that you want to delete were captured.
     *
     * This parameter is required.
     *
     * @example 1653641526637
     *
     * @var int[]
     */
    public $createTimestampList;

    /**
     * @description The main streaming domain.
     *
     * This parameter is required.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to also delete the corresponding file in Object Storage Service (OSS) at the same time. Value values:
     *
     *   **true**: deletes the corresponding file in OSS.
     *   **false**: does not delete the corresponding file in OSS.
     *
     * >  To delete the corresponding file in OSS, you must have the permissions on the OSS bucket.
     *
     * This parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $removeFile;

    /**
     * @description The name of the live stream.
     *
     * This parameter is required.
     *
     * @example liveStream****
     *
     * @var string
     */
    public $streamName;
    protected $_name = [
        'appName' => 'AppName',
        'createTimestampList' => 'CreateTimestampList',
        'domainName' => 'DomainName',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'removeFile' => 'RemoveFile',
        'streamName' => 'StreamName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->createTimestampList) {
            $res['CreateTimestampList'] = $this->createTimestampList;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->removeFile) {
            $res['RemoveFile'] = $this->removeFile;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSnapshotFilesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['CreateTimestampList'])) {
            if (!empty($map['CreateTimestampList'])) {
                $model->createTimestampList = $map['CreateTimestampList'];
            }
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RemoveFile'])) {
            $model->removeFile = $map['RemoveFile'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        return $model;
    }
}
