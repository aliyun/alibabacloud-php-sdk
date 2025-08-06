<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetBucketDeleteTaskResponseBody;

use AlibabaCloud\Dara\Model;

class taskInfo extends Model
{
    /**
     * @var int
     */
    public $attachedMediaRemain;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var bool
     */
    public $deleteFiles;

    /**
     * @var int
     */
    public $imageRemain;

    /**
     * @var string
     */
    public $modificationTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $storageLocation;

    /**
     * @var int
     */
    public $storageSize;

    /**
     * @var int
     */
    public $videoRemain;
    protected $_name = [
        'attachedMediaRemain' => 'AttachedMediaRemain',
        'creationTime' => 'CreationTime',
        'deleteFiles' => 'DeleteFiles',
        'imageRemain' => 'ImageRemain',
        'modificationTime' => 'ModificationTime',
        'status' => 'Status',
        'storageLocation' => 'StorageLocation',
        'storageSize' => 'StorageSize',
        'videoRemain' => 'VideoRemain',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachedMediaRemain) {
            $res['AttachedMediaRemain'] = $this->attachedMediaRemain;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->deleteFiles) {
            $res['DeleteFiles'] = $this->deleteFiles;
        }

        if (null !== $this->imageRemain) {
            $res['ImageRemain'] = $this->imageRemain;
        }

        if (null !== $this->modificationTime) {
            $res['ModificationTime'] = $this->modificationTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->storageLocation) {
            $res['StorageLocation'] = $this->storageLocation;
        }

        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
        }

        if (null !== $this->videoRemain) {
            $res['VideoRemain'] = $this->videoRemain;
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
        if (isset($map['AttachedMediaRemain'])) {
            $model->attachedMediaRemain = $map['AttachedMediaRemain'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['DeleteFiles'])) {
            $model->deleteFiles = $map['DeleteFiles'];
        }

        if (isset($map['ImageRemain'])) {
            $model->imageRemain = $map['ImageRemain'];
        }

        if (isset($map['ModificationTime'])) {
            $model->modificationTime = $map['ModificationTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StorageLocation'])) {
            $model->storageLocation = $map['StorageLocation'];
        }

        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }

        if (isset($map['VideoRemain'])) {
            $model->videoRemain = $map['VideoRemain'];
        }

        return $model;
    }
}
