<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class PbcInvokeReviewListResult extends Model
{
    /**
     * @var PbcInvokeReview[]
     */
    public $pbcInvokeReviews;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pbcInvokeReviews' => 'pbcInvokeReviews',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->pbcInvokeReviews)) {
            Model::validateArray($this->pbcInvokeReviews);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pbcInvokeReviews) {
            if (\is_array($this->pbcInvokeReviews)) {
                $res['pbcInvokeReviews'] = [];
                $n1 = 0;
                foreach ($this->pbcInvokeReviews as $item1) {
                    $res['pbcInvokeReviews'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['pbcInvokeReviews'])) {
            if (!empty($map['pbcInvokeReviews'])) {
                $model->pbcInvokeReviews = [];
                $n1 = 0;
                foreach ($map['pbcInvokeReviews'] as $item1) {
                    $model->pbcInvokeReviews[$n1] = PbcInvokeReview::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
