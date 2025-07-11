<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class CreateDefenseResourceResponseBody extends Model
{
    /**
     * @example 1738C613-D054-5191-888B-DC0CF4C3A4A0
     *
     * @var string
     */
    public $requestId;

    /**
     * @example cdX.XXX-call.cn-alb
     *
     * @var string
     */
    public $resource;
    protected $_name = [
        'requestId' => 'RequestId',
        'resource' => 'Resource',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDefenseResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }

        return $model;
    }
}
