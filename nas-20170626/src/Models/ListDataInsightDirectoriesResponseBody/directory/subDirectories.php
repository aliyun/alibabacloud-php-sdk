<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\ListDataInsightDirectoriesResponseBody\directory;

use AlibabaCloud\Dara\Model;

class subDirectories extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var int
     */
    public $dirCapacity;

    /**
     * @var int
     */
    public $dirCapacityOffline;

    /**
     * @var int
     */
    public $dirCapacityOnline;

    /**
     * @var int
     */
    public $dirLevel;

    /**
     * @var string
     */
    public $dirName;

    /**
     * @var int
     */
    public $fileCount;

    /**
     * @var int
     */
    public $fileCountOffline;

    /**
     * @var int
     */
    public $fileCountOnline;

    /**
     * @var string
     */
    public $lastAccessTime;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'createdAt' => 'CreatedAt',
        'dirCapacity' => 'DirCapacity',
        'dirCapacityOffline' => 'DirCapacityOffline',
        'dirCapacityOnline' => 'DirCapacityOnline',
        'dirLevel' => 'DirLevel',
        'dirName' => 'DirName',
        'fileCount' => 'FileCount',
        'fileCountOffline' => 'FileCountOffline',
        'fileCountOnline' => 'FileCountOnline',
        'lastAccessTime' => 'LastAccessTime',
        'updatedAt' => 'UpdatedAt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->dirCapacity) {
            $res['DirCapacity'] = $this->dirCapacity;
        }

        if (null !== $this->dirCapacityOffline) {
            $res['DirCapacityOffline'] = $this->dirCapacityOffline;
        }

        if (null !== $this->dirCapacityOnline) {
            $res['DirCapacityOnline'] = $this->dirCapacityOnline;
        }

        if (null !== $this->dirLevel) {
            $res['DirLevel'] = $this->dirLevel;
        }

        if (null !== $this->dirName) {
            $res['DirName'] = $this->dirName;
        }

        if (null !== $this->fileCount) {
            $res['FileCount'] = $this->fileCount;
        }

        if (null !== $this->fileCountOffline) {
            $res['FileCountOffline'] = $this->fileCountOffline;
        }

        if (null !== $this->fileCountOnline) {
            $res['FileCountOnline'] = $this->fileCountOnline;
        }

        if (null !== $this->lastAccessTime) {
            $res['LastAccessTime'] = $this->lastAccessTime;
        }

        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
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
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['DirCapacity'])) {
            $model->dirCapacity = $map['DirCapacity'];
        }

        if (isset($map['DirCapacityOffline'])) {
            $model->dirCapacityOffline = $map['DirCapacityOffline'];
        }

        if (isset($map['DirCapacityOnline'])) {
            $model->dirCapacityOnline = $map['DirCapacityOnline'];
        }

        if (isset($map['DirLevel'])) {
            $model->dirLevel = $map['DirLevel'];
        }

        if (isset($map['DirName'])) {
            $model->dirName = $map['DirName'];
        }

        if (isset($map['FileCount'])) {
            $model->fileCount = $map['FileCount'];
        }

        if (isset($map['FileCountOffline'])) {
            $model->fileCountOffline = $map['FileCountOffline'];
        }

        if (isset($map['FileCountOnline'])) {
            $model->fileCountOnline = $map['FileCountOnline'];
        }

        if (isset($map['LastAccessTime'])) {
            $model->lastAccessTime = $map['LastAccessTime'];
        }

        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }

        return $model;
    }
}
