<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DeleteSnapshotFilesRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var int[]
     */
    public $createTimestampList;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var bool
     */
    public $removeFile;

    /**
     * @var string
     */
    public $streamName;
    protected $_name = [
        'appName'             => 'AppName',
        'createTimestampList' => 'CreateTimestampList',
        'domainName'          => 'DomainName',
        'ownerId'             => 'OwnerId',
        'removeFile'          => 'RemoveFile',
        'streamName'          => 'StreamName',
    ];

    public function validate()
    {
    }

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
        if (isset($map['RemoveFile'])) {
            $model->removeFile = $map['RemoveFile'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        return $model;
    }
}
