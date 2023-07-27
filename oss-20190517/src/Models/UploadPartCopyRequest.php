<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class UploadPartCopyRequest extends Model
{
    /**
     * @example 10000
     *
     * @var int
     */
    public $partNumber;

    /**
     * @example 0004B999EF5A239BB9138C6227D69F95
     *
     * @var string
     */
    public $uploadId;
    protected $_name = [
        'partNumber' => 'partNumber',
        'uploadId'   => 'uploadId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->partNumber) {
            $res['partNumber'] = $this->partNumber;
        }
        if (null !== $this->uploadId) {
            $res['uploadId'] = $this->uploadId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadPartCopyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['partNumber'])) {
            $model->partNumber = $map['partNumber'];
        }
        if (isset($map['uploadId'])) {
            $model->uploadId = $map['uploadId'];
        }

        return $model;
    }
}
