<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class ListRecycledDirectoriesAndFilesRequest extends Model
{
    /**
     * @description The ID of the directory that you want to query.
     *
     * This parameter is required.
     * @example 04***08
     *
     * @var string
     */
    public $fileId;

    /**
     * @description The ID of the file system.
     *
     * This parameter is required.
     * @example 1ca404****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The number of files or directories to return for each query.
     *
     * Default value: 100.
     * @example 100
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request.
     *
     * If all the files and directories are incompletely returned in a query, the return value of the NextToken parameter is not empty. In this case, you can specify a valid value for the NextToken parameter to continue the query.
     * @example 1256****25
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'fileId'       => 'FileId',
        'fileSystemId' => 'FileSystemId',
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRecycledDirectoriesAndFilesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
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

        return $model;
    }
}
