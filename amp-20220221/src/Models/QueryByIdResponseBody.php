<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amp\V20220221\Models;

use AlibabaCloud\Tea\Model;

class QueryByIdResponseBody extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @description fsdfsa
     *
     * @var string
     */
    public $color;

    /**
     * @var string
     */
    public $name;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $size;
    protected $_name = [
        'address'   => 'Address',
        'color'     => 'Color',
        'name'      => 'Name',
        'requestId' => 'RequestId',
        'size'      => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->color) {
            $res['Color'] = $this->color;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryByIdResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['Color'])) {
            $model->color = $map['Color'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
