<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\ListDataInsightDirectoriesResponseBody\directory;

class ListDataInsightDirectoriesResponseBody extends Model
{
    /**
     * @var directory
     */
    public $directory;

    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'directory' => 'Directory',
        'fileSystemId' => 'FileSystemId',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->directory) {
            $this->directory->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->directory) {
            $res['Directory'] = null !== $this->directory ? $this->directory->toArray($noStream) : $this->directory;
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

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Directory'])) {
            $model->directory = directory::fromMap($map['Directory']);
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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
