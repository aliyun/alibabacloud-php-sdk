<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DeleteFileSystemRequest extends Model
{
    /**
     * @description The ID of the node.
     *
     * @example cn-chengdu-telecom-4
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The ID of the file system that you want to delete.
     *
     * @example e42640****
     *
     * @var string
     */
    public $fileSystemId;
    protected $_name = [
        'ensRegionId'  => 'EnsRegionId',
        'fileSystemId' => 'FileSystemId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteFileSystemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }

        return $model;
    }
}
