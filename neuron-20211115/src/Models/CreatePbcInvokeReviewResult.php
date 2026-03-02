<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class CreatePbcInvokeReviewResult extends Model
{
    /**
     * @var int
     */
    public $pbcInvokeReviewId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pbcInvokeReviewId' => 'pbcInvokeReviewId',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pbcInvokeReviewId) {
            $res['pbcInvokeReviewId'] = $this->pbcInvokeReviewId;
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
        if (isset($map['pbcInvokeReviewId'])) {
            $model->pbcInvokeReviewId = $map['pbcInvokeReviewId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
