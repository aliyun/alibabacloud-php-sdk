<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class ListDirectoriesAndFilesRequest extends Model
{
    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var bool
     */
    public $directoryOnly;

    /**
     * @var int
     */
    public $maxResults;
    protected $_name = [
        'fileSystemId'  => 'FileSystemId',
        'path'          => 'Path',
        'nextToken'     => 'NextToken',
        'storageType'   => 'StorageType',
        'directoryOnly' => 'DirectoryOnly',
        'maxResults'    => 'MaxResults',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->directoryOnly) {
            $res['DirectoryOnly'] = $this->directoryOnly;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDirectoriesAndFilesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['DirectoryOnly'])) {
            $model->directoryOnly = $map['DirectoryOnly'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        return $model;
    }
}
