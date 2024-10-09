<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models;

use AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeCheckDetailsResponseBody\data;
use AlibabaCloud\Tea\Model;

class DescribeCheckDetailsResponseBody extends Model
{
    /**
     * @var data
     */
    public $data;

    /**
     * @example 92793A50-0B97-59F1-BAEA-EAED83BA1998
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data'      => 'Data',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCheckDetailsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
