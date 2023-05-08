<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAllImageBaselineResponseBody\imageBaselines;
use AlibabaCloud\Tea\Model;

class DescribeAllImageBaselineResponseBody extends Model
{
    /**
     * @var imageBaselines
     */
    public $imageBaselines;

    /**
     * @example 1A975D03-5F49-5354-B2CB-3918D5DA****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imageBaselines' => 'ImageBaselines',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageBaselines) {
            $res['ImageBaselines'] = null !== $this->imageBaselines ? $this->imageBaselines->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAllImageBaselineResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageBaselines'])) {
            $model->imageBaselines = imageBaselines::fromMap($map['ImageBaselines']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
