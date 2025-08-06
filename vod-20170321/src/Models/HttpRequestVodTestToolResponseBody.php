<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class HttpRequestVodTestToolResponseBody extends Model
{
    /**
     * @var string
     */
    public $body;

    /**
     * @var string
     */
    public $header;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $statusCode;
    protected $_name = [
        'body' => 'Body',
        'header' => 'Header',
        'requestId' => 'RequestId',
        'statusCode' => 'StatusCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->body) {
            $res['Body'] = $this->body;
        }

        if (null !== $this->header) {
            $res['Header'] = $this->header;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
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
        if (isset($map['Body'])) {
            $model->body = $map['Body'];
        }

        if (isset($map['Header'])) {
            $model->header = $map['Header'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }

        return $model;
    }
}
