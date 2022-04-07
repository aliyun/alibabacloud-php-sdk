<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class ErrorDocument extends Model
{
    /**
     * @description description
     *
     * @var string
     */
    public $httpStatus;

    /**
     * @description description
     *
     * @var string
     */
    public $key;
    protected $_name = [
        'httpStatus' => 'HttpStatus',
        'key'        => 'Key',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->httpStatus) {
            $res['HttpStatus'] = $this->httpStatus;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ErrorDocument
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HttpStatus'])) {
            $model->httpStatus = $map['HttpStatus'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        return $model;
    }
}
