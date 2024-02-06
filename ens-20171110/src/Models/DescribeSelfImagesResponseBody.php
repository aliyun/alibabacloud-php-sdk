<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSelfImagesResponseBody\images;
use AlibabaCloud\Tea\Model;

class DescribeSelfImagesResponseBody extends Model
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
     * @description The image information.
     *
     * @var images
     */
    public $images;

    /**
     * @description The request ID.
     *
     * @example A8B8EB73-B4FD-4262-8EF6-680DF39C9BA0
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
     * @return DescribeSelfImagesResponseBody
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
