<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetectImageScoreResponseBody\imageScore;

class DetectImageScoreResponseBody extends Model
{
    /**
     * @var imageScore
     */
    public $imageScore;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imageScore' => 'ImageScore',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->imageScore) {
            $this->imageScore->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageScore) {
            $res['ImageScore'] = null !== $this->imageScore ? $this->imageScore->toArray($noStream) : $this->imageScore;
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
        if (isset($map['ImageScore'])) {
            $model->imageScore = imageScore::fromMap($map['ImageScore']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
