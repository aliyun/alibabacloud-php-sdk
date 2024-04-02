<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\SDK\Green\V20170823\Models\DescribeBizTypeTextLibResponseBody\black;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeBizTypeTextLibResponseBody\ignore;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeBizTypeTextLibResponseBody\review;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeBizTypeTextLibResponseBody\white;
use AlibabaCloud\Tea\Model;

class DescribeBizTypeTextLibResponseBody extends Model
{
    /**
     * @var black
     */
    public $black;

    /**
     * @var ignore
     */
    public $ignore;

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
        'ignore'    => 'Ignore',
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
        if (null !== $this->ignore) {
            $res['Ignore'] = null !== $this->ignore ? $this->ignore->toMap() : null;
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
     * @return DescribeBizTypeTextLibResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Black'])) {
            $model->black = black::fromMap($map['Black']);
        }
        if (isset($map['Ignore'])) {
            $model->ignore = ignore::fromMap($map['Ignore']);
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
