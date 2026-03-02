<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class FeedbackLibraryReviewRequest extends Model
{
    /**
     * @var string
     */
    public $approve;

    /**
     * @var string
     */
    public $feedback;

    /**
     * @var int
     */
    public $reviewId;
    protected $_name = [
        'approve' => 'approve',
        'feedback' => 'feedback',
        'reviewId' => 'reviewId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approve) {
            $res['approve'] = $this->approve;
        }

        if (null !== $this->feedback) {
            $res['feedback'] = $this->feedback;
        }

        if (null !== $this->reviewId) {
            $res['reviewId'] = $this->reviewId;
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
        if (isset($map['approve'])) {
            $model->approve = $map['approve'];
        }

        if (isset($map['feedback'])) {
            $model->feedback = $map['feedback'];
        }

        if (isset($map['reviewId'])) {
            $model->reviewId = $map['reviewId'];
        }

        return $model;
    }
}
