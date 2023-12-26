<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFilesetsResponseBody\entries;
use AlibabaCloud\Tea\Model;

class DescribeFilesetsResponseBody extends Model
{
    /**
     * @description The fileset information.
     *
     * @var entries
     */
    public $entries;

    /**
     * @description The ID of the file system.
     *
     * @example cpfs-099394bd928c****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results.
     *
     * @example TGlzdFJlc291cmNlU****mVzJjE1MTI2NjY4NzY5MTAzOTEmMiZORnI4NDhVeEtrUT0=
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example 2D69A58F-345C-4FDE-88E4-BF518948****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'entries'      => 'Entries',
        'fileSystemId' => 'FileSystemId',
        'nextToken'    => 'NextToken',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entries) {
            $res['Entries'] = null !== $this->entries ? $this->entries->toMap() : null;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFilesetsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Entries'])) {
            $model->entries = entries::fromMap($map['Entries']);
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
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
