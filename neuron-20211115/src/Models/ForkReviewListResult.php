<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class ForkReviewListResult extends Model
{
    /**
     * @var ForkReview[]
     */
    public $forkReviews;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'forkReviews' => 'forkReviews',
        'requestId' => 'requestId',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->forkReviews)) {
            Model::validateArray($this->forkReviews);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->forkReviews) {
            if (\is_array($this->forkReviews)) {
                $res['forkReviews'] = [];
                $n1 = 0;
                foreach ($this->forkReviews as $item1) {
                    $res['forkReviews'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
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
        if (isset($map['forkReviews'])) {
            if (!empty($map['forkReviews'])) {
                $model->forkReviews = [];
                $n1 = 0;
                foreach ($map['forkReviews'] as $item1) {
                    $model->forkReviews[$n1] = ForkReview::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
