<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class Partition extends Model
{
    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var string
     */
    public $createdBy;

    /**
     * @var bool
     */
    public $done;

    /**
     * @var int
     */
    public $fileCount;

    /**
     * @var int
     */
    public $fileSizeInBytes;

    /**
     * @var int
     */
    public $lastFileCreationTime;

    /**
     * @var int
     */
    public $recordCount;

    /**
     * @var mixed[]
     */
    public $spec;

    /**
     * @var int
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $updatedBy;
    protected $_name = [
        'createdAt' => 'createdAt',
        'createdBy' => 'createdBy',
        'done' => 'done',
        'fileCount' => 'fileCount',
        'fileSizeInBytes' => 'fileSizeInBytes',
        'lastFileCreationTime' => 'lastFileCreationTime',
        'recordCount' => 'recordCount',
        'spec' => 'spec',
        'updatedAt' => 'updatedAt',
        'updatedBy' => 'updatedBy',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }
        if (null !== $this->createdBy) {
            $res['createdBy'] = $this->createdBy;
        }
        if (null !== $this->done) {
            $res['done'] = $this->done;
        }
        if (null !== $this->fileCount) {
            $res['fileCount'] = $this->fileCount;
        }
        if (null !== $this->fileSizeInBytes) {
            $res['fileSizeInBytes'] = $this->fileSizeInBytes;
        }
        if (null !== $this->lastFileCreationTime) {
            $res['lastFileCreationTime'] = $this->lastFileCreationTime;
        }
        if (null !== $this->recordCount) {
            $res['recordCount'] = $this->recordCount;
        }
        if (null !== $this->spec) {
            $res['spec'] = $this->spec;
        }
        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }
        if (null !== $this->updatedBy) {
            $res['updatedBy'] = $this->updatedBy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Partition
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }
        if (isset($map['createdBy'])) {
            $model->createdBy = $map['createdBy'];
        }
        if (isset($map['done'])) {
            $model->done = $map['done'];
        }
        if (isset($map['fileCount'])) {
            $model->fileCount = $map['fileCount'];
        }
        if (isset($map['fileSizeInBytes'])) {
            $model->fileSizeInBytes = $map['fileSizeInBytes'];
        }
        if (isset($map['lastFileCreationTime'])) {
            $model->lastFileCreationTime = $map['lastFileCreationTime'];
        }
        if (isset($map['recordCount'])) {
            $model->recordCount = $map['recordCount'];
        }
        if (isset($map['spec'])) {
            $model->spec = $map['spec'];
        }
        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }
        if (isset($map['updatedBy'])) {
            $model->updatedBy = $map['updatedBy'];
        }

        return $model;
    }
}
