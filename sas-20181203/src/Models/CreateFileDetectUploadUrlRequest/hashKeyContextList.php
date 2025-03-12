<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\CreateFileDetectUploadUrlRequest;

use AlibabaCloud\Tea\Model;

class hashKeyContextList extends Model
{
    /**
     * @description The size of the file. Unit: bytes.
     *
     * @example 2698557
     *
     * @var int
     */
    public $fileSize;

    /**
     * @description The hash value of the file.
     *
     * @example 30319dd5cee8f894766e479cac170da0
     *
     * @var string
     */
    public $hashKey;
    protected $_name = [
        'fileSize' => 'FileSize',
        'hashKey'  => 'HashKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->hashKey) {
            $res['HashKey'] = $this->hashKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hashKeyContextList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['HashKey'])) {
            $model->hashKey = $map['HashKey'];
        }

        return $model;
    }
}
