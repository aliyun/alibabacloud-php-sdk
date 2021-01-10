<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivision\V20190308\Models;

use AlibabaCloud\SDK\Ivision\V20190308\Models\ImagePredictResponseBody\imagePredict;
use AlibabaCloud\Tea\Model;

class ImagePredictResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var imagePredict
     */
    public $imagePredict;
    protected $_name = [
        'requestId'    => 'RequestId',
        'imagePredict' => 'ImagePredict',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->imagePredict) {
            $res['ImagePredict'] = null !== $this->imagePredict ? $this->imagePredict->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImagePredictResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ImagePredict'])) {
            $model->imagePredict = imagePredict::fromMap($map['ImagePredict']);
        }

        return $model;
    }
}
