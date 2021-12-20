<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models\GetBucketWebsiteResponseBody;

use AlibabaCloud\Tea\Model;

class errorDocument extends Model
{
    /**
     * @var string
     */
    public $httpStatus;

    /**
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
     * @return errorDocument
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
