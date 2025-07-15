<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DeleteLiveStreamRecordIndexFilesRequest extends Model
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
     * @description The name of the main streaming domain.
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
     * @description The index file IDs.
     *
     * This parameter is required.
     *
     * @example c4d7f0a4-b506-43f9-8de3-07732c3f****
     *
     * @var string[]
     */
    public $recordId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to delete the corresponding file in Object Storage Service (OSS) synchronously. Valid values:
     *
     *   **true**: The corresponding file in OSS is deleted.
     *   **false**: The corresponding file in OSS is not deleted.
     *
     * This parameter is required.
     *
     * @example true
     *
     * @var string
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
        'domainName' => 'DomainName',
        'ownerId' => 'OwnerId',
        'recordId' => 'RecordId',
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
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
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
     * @return DeleteLiveStreamRecordIndexFilesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RecordId'])) {
            if (!empty($map['RecordId'])) {
                $model->recordId = $map['RecordId'];
            }
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
