<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\SDK\Imm\V20200930\Models\DetectImageScoreResponseBody\imageScore;
use AlibabaCloud\Tea\Model;

class DetectImageScoreResponseBody extends Model
{
    /**
     * @description The quality score of the image.
     *
     * @var imageScore
     */
    public $imageScore;

    /**
     * @description The request ID.
     *
     * @example 6E93D6C9-5AC0-49F9-914D-E02678D3****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imageScore' => 'ImageScore',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageScore) {
            $res['ImageScore'] = null !== $this->imageScore ? $this->imageScore->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectImageScoreResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageScore'])) {
            $model->imageScore = imageScore::fromMap($map['ImageScore']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
