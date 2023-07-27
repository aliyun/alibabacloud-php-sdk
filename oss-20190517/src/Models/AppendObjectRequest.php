<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class AppendObjectRequest extends Model
{
    /**
     * @var Stream
     */
    public $body;

    /**
     * @example 0
     *
     * @var int
     */
    public $position;
    protected $_name = [
        'body'     => 'body',
        'position' => 'position',
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
        if (null !== $this->position) {
            $res['position'] = $this->position;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AppendObjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }
        if (isset($map['position'])) {
            $model->position = $map['position'];
        }

        return $model;
    }
}
