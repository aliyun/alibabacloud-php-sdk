<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class CompleteMultipartUploadRequest extends Model
{
    /**
     * @var CompleteMultipartUpload
     */
    public $body;

    /**
     * @var string
     */
    public $encodingType;

    /**
     * @example 0004B9895DBBB6E****
     *
     * @var string
     */
    public $uploadId;
    protected $_name = [
        'body'         => 'CompleteMultipartUpload',
        'encodingType' => 'encoding-type',
        'uploadId'     => 'uploadId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['CompleteMultipartUpload'] = null !== $this->body ? $this->body->toMap() : null;
        }
        if (null !== $this->encodingType) {
            $res['encoding-type'] = $this->encodingType;
        }
        if (null !== $this->uploadId) {
            $res['uploadId'] = $this->uploadId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CompleteMultipartUploadRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompleteMultipartUpload'])) {
            $model->body = CompleteMultipartUpload::fromMap($map['CompleteMultipartUpload']);
        }
        if (isset($map['encoding-type'])) {
            $model->encodingType = $map['encoding-type'];
        }
        if (isset($map['uploadId'])) {
            $model->uploadId = $map['uploadId'];
        }

        return $model;
    }
}
