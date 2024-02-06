<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeImageInfosResponseBody\images;
use AlibabaCloud\Tea\Model;

class DescribeImageInfosResponseBody extends Model
{
    /**
     * @description The HTTP status code that is returned.
     *
     * @example 0
     *
     * @var int
     */
    public $code;

    /**
     * @description The information about images.
     *
     * @var images
     */
    public $images;

    /**
     * @description The request ID.
     *
     * @example 5568A08C-10A9-47F3-902F-647298B463FB
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'      => 'Code',
        'images'    => 'Images',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->images) {
            $res['Images'] = null !== $this->images ? $this->images->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageInfosResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Images'])) {
            $model->images = images::fromMap($map['Images']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
