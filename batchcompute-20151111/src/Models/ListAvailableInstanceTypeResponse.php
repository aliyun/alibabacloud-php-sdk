<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BatchCompute\V20151111\Models;

use AlibabaCloud\Tea\Model;

class ListAvailableInstanceTypeResponse extends Model
{
    /**
     * @var string[]
     */
    public $headers;
    protected $_name = [
        'headers' => 'headers',
    ];

    public function validate()
    {
        Model::validateRequired('headers', $this->headers, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->headers) {
            $res['headers'] = $this->headers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAvailableInstanceTypeResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['headers'])) {
            $model->headers = $map['headers'];
        }

        return $model;
    }
}
