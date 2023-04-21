<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\CopyCdsFileResponseBody;

use AlibabaCloud\Tea\Model;

class copyCdsFileModel extends Model
{
    /**
     * @example 4221bf6e6ab43a255edc4463bffa6f5f5d31****
     *
     * @var string
     */
    public $asyncTaskId;

    /**
     * @example 6400727cb878821bcb414615a609b4072463****
     *
     * @var string
     */
    public $fileId;
    protected $_name = [
        'asyncTaskId' => 'AsyncTaskId',
        'fileId'      => 'FileId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asyncTaskId) {
            $res['AsyncTaskId'] = $this->asyncTaskId;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return copyCdsFileModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsyncTaskId'])) {
            $model->asyncTaskId = $map['AsyncTaskId'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        return $model;
    }
}
