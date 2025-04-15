<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppRecordingFilesResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $bucket;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var int
     */
    public $fileCreateTs;

    /**
     * @var int
     */
    public $fileDuration;

    /**
     * @var string
     */
    public $filePath;

    /**
     * @var int
     */
    public $fileSize;

    /**
     * @var int
     */
    public $region;

    /**
     * @var int
     */
    public $startTs;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int
     */
    public $vendor;
    protected $_name = [
        'bucket' => 'Bucket',
        'channelId' => 'ChannelId',
        'fileCreateTs' => 'FileCreateTs',
        'fileDuration' => 'FileDuration',
        'filePath' => 'FilePath',
        'fileSize' => 'FileSize',
        'region' => 'Region',
        'startTs' => 'StartTs',
        'taskId' => 'TaskId',
        'vendor' => 'Vendor',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }

        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->fileCreateTs) {
            $res['FileCreateTs'] = $this->fileCreateTs;
        }

        if (null !== $this->fileDuration) {
            $res['FileDuration'] = $this->fileDuration;
        }

        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }

        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->startTs) {
            $res['StartTs'] = $this->startTs;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
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
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }

        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['FileCreateTs'])) {
            $model->fileCreateTs = $map['FileCreateTs'];
        }

        if (isset($map['FileDuration'])) {
            $model->fileDuration = $map['FileDuration'];
        }

        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }

        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['StartTs'])) {
            $model->startTs = $map['StartTs'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
