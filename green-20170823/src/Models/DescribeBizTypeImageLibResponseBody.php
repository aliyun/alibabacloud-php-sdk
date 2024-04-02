<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\SDK\Green\V20170823\Models\DescribeBizTypeImageLibResponseBody\black;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeBizTypeImageLibResponseBody\review;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeBizTypeImageLibResponseBody\white;
use AlibabaCloud\Tea\Model;

class DescribeBizTypeImageLibResponseBody extends Model
{
    /**
     * @var black
     */
    public $black;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var review
     */
    public $review;

    /**
     * @var white
     */
    public $white;
    protected $_name = [
        'black'     => 'Black',
        'requestId' => 'RequestId',
        'review'    => 'Review',
        'white'     => 'White',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->black) {
            $res['Black'] = null !== $this->black ? $this->black->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->review) {
            $res['Review'] = null !== $this->review ? $this->review->toMap() : null;
        }
        if (null !== $this->white) {
            $res['White'] = null !== $this->white ? $this->white->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBizTypeImageLibResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Black'])) {
            $model->black = black::fromMap($map['Black']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Review'])) {
            $model->review = review::fromMap($map['Review']);
        }
        if (isset($map['White'])) {
            $model->white = white::fromMap($map['White']);
        }

        return $model;
    }
}
