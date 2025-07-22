<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class ListTableDetailsResponse extends Model
{
    /**
     * @var string[]
     */
    public $headers;

    /**
     * @var int
     */
    public $statusCode;

    /**
     * @var ListTableDetailsResponseBody
     */
    public $body;
    protected $_name = [
        'headers' => 'headers',
        'statusCode' => 'statusCode',
        'body' => 'body',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->headers) {
            $res['headers'] = $this->headers;
        }
        if (null !== $this->statusCode) {
            $res['statusCode'] = $this->statusCode;
        }
        if (null !== $this->body) {
            $res['body'] = null !== $this->body ? $this->body->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTableDetailsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['headers'])) {
            $model->headers = $map['headers'];
        }
        if (isset($map['statusCode'])) {
            $model->statusCode = $map['statusCode'];
        }
        if (isset($map['body'])) {
            $model->body = ListTableDetailsResponseBody::fromMap($map['body']);
        }

        return $model;
    }
}
