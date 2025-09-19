<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAllImageBaselineResponseBody\imageBaselines;

class DescribeAllImageBaselineResponseBody extends Model
{
    /**
     * @var imageBaselines
     */
    public $imageBaselines;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imageBaselines' => 'ImageBaselines',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->imageBaselines) {
            $this->imageBaselines->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageBaselines) {
            $res['ImageBaselines'] = null !== $this->imageBaselines ? $this->imageBaselines->toArray($noStream) : $this->imageBaselines;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
