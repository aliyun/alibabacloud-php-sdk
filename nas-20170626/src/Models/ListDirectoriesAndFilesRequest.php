<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class ListDirectoriesAndFilesRequest extends Model
{
    /**
     * @description Specifies whether to query only directories.
     *
     * Valid values:
     *
     *   false (default): queries both directories and files
     *   true: queries only directories
     *
     * @example false
     *
     * @var bool
     */
    public $directoryOnly;

    /**
     * @description The ID of the file system.
     *
     * This parameter is required.
     * @example 31a8e4****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The maximum number of directories or files to include in the results of each query.
     *
     * Default value: 100.
     * @example 100
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example TGlzdFJlc291cmNlU****mVzJjE1MTI2NjY4NzY5MTAzOTEmMiZORnI4NDhVeEtrUT0=
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The absolute path of the directory.
     *
     * This parameter is required.
     * @example /pathway/to/folder
     *
     * @var string
     */
    public $path;

    /**
     * @description The storage type of the files.
     *
     * This parameter is required.
     * @example InfrequentAccess
     *
     * @var string
     */
    public $storageType;
    protected $_name = [
        'directoryOnly' => 'DirectoryOnly',
        'fileSystemId'  => 'FileSystemId',
        'maxResults'    => 'MaxResults',
        'nextToken'     => 'NextToken',
        'path'          => 'Path',
        'storageType'   => 'StorageType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->directoryOnly) {
            $res['DirectoryOnly'] = $this->directoryOnly;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
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
        if (isset($map['DirectoryOnly'])) {
            $model->directoryOnly = $map['DirectoryOnly'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        return $model;
    }
}
