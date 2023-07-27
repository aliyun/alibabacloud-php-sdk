<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class UploadPartRequest extends Model
{
    /**
     * @var Stream
     */
    public $body;

    /**
     * @example 2
     *
     * @var int
     */
    public $partNumber;

    /**
     * @example 0004B9895DBBB6EC98E36
     *
     * @var string
     */
    public $uploadId;
    protected $_name = [
        'body'       => 'body',
        'partNumber' => 'partNumber',
        'uploadId'   => 'uploadId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }
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
     * @return UploadPartRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }
        if (isset($map['partNumber'])) {
            $model->partNumber = $map['partNumber'];
        }
        if (isset($map['uploadId'])) {
            $model->uploadId = $map['uploadId'];
        }

        return $model;
    }
}
