<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $storageAction;

    /**
     * @var int
     */
    public $storageActionTimestamp;

    /**
     * @var string
     */
    public $storageClass;

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
        'storageAction' => 'storageAction',
        'storageActionTimestamp' => 'storageActionTimestamp',
        'storageClass' => 'storageClass',
        'updatedAt' => 'updatedAt',
        'updatedBy' => 'updatedBy',
    ];

    public function validate()
    {
        if (\is_array($this->spec)) {
            Model::validateArray($this->spec);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->spec)) {
                $res['spec'] = [];
                foreach ($this->spec as $key1 => $value1) {
                    $res['spec'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->storageAction) {
            $res['storageAction'] = $this->storageAction;
        }

        if (null !== $this->storageActionTimestamp) {
            $res['storageActionTimestamp'] = $this->storageActionTimestamp;
        }

        if (null !== $this->storageClass) {
            $res['storageClass'] = $this->storageClass;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }

        if (null !== $this->updatedBy) {
            $res['updatedBy'] = $this->updatedBy;
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
            if (!empty($map['spec'])) {
                $model->spec = [];
                foreach ($map['spec'] as $key1 => $value1) {
                    $model->spec[$key1] = $value1;
                }
            }
        }

        if (isset($map['storageAction'])) {
            $model->storageAction = $map['storageAction'];
        }

        if (isset($map['storageActionTimestamp'])) {
            $model->storageActionTimestamp = $map['storageActionTimestamp'];
        }

        if (isset($map['storageClass'])) {
            $model->storageClass = $map['storageClass'];
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
