<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeTagsResponseBody\tags\tag;

use AlibabaCloud\Tea\Model;

class fileSystemIds extends Model
{
    /**
     * @var string[]
     */
    public $fileSystemId;
    protected $_name = [
        'fileSystemId' => 'FileSystemId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileSystemIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystemId'])) {
            if (!empty($map['FileSystemId'])) {
                $model->fileSystemId = $map['FileSystemId'];
            }
        }

        return $model;
    }
}
