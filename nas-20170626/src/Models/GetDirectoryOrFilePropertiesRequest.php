<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class GetDirectoryOrFilePropertiesRequest extends Model
{
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
     * @description The absolute path of the directory.
     *
     * This parameter is required.
     * @example /pathway/to/folder
     *
     * @var string
     */
    public $path;
    protected $_name = [
        'fileSystemId' => 'FileSystemId',
        'path'         => 'Path',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDirectoryOrFilePropertiesRequest
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

        return $model;
    }
}
