<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DescribeNfsAclRequest extends Model
{
    /**
     * @description The ID of the file system.
     *
     * This parameter is required.
     *
     * @example 206614xxxx
     *
     * @var string
     */
    public $fileSystemId;
    protected $_name = [
        'fileSystemId' => 'FileSystemId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNfsAclRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }

        return $model;
    }
}
