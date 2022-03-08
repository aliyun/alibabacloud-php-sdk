<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ft\V20210101\Models;

use AlibabaCloud\Tea\Model;

class UserGcGrayResponseBody extends Model
{
    /**
     * @description Body
     *
     * @var string
     */
    public $body;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @description RequestURL
     *
     * @var string
     */
    public $requestURL;
    protected $_name = [
        'body'       => 'Body',
        'requestId'  => 'RequestId',
        'requestURL' => 'RequestURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['Body'] = $this->body;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->requestURL) {
            $res['RequestURL'] = $this->requestURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UserGcGrayResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Body'])) {
            $model->body = $map['Body'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RequestURL'])) {
            $model->requestURL = $map['RequestURL'];
        }

        return $model;
    }
}
