<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NBF\V20211110_21312586\Models;

use AlibabaCloud\Tea\Model;

class OpenApiGenericProxyResponseBody extends Model
{
    /**
     * @var string
     */
    public $data;
    protected $_name = [
        'data' => 'data',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OpenApiGenericProxyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['data'])) {
            $model->data = $map['data'];
        }

        return $model;
    }
}
