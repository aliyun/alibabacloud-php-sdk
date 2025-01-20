<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFilesetsResponseBody\entries;

class DescribeFilesetsResponseBody extends Model
{
    /**
     * @var entries
     */
    public $entries;
    /**
     * @var string
     */
    public $fileSystemId;
    /**
     * @var string
     */
    public $nextToken;
    /**
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
        if (null !== $this->entries) {
            $this->entries->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entries) {
            $res['Entries'] = null !== $this->entries ? $this->entries->toArray($noStream) : $this->entries;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
