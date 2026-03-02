<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class PbcReviewCreateCmd extends Model
{
    /**
     * @var int
     */
    public $marketId;

    /**
     * @var string
     */
    public $pbcUrl;

    /**
     * @var int
     */
    public $pbcVersionId;

    /**
     * @var int
     */
    public $reviewerId;
    protected $_name = [
        'marketId' => 'marketId',
        'pbcUrl' => 'pbcUrl',
        'pbcVersionId' => 'pbcVersionId',
        'reviewerId' => 'reviewerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->marketId) {
            $res['marketId'] = $this->marketId;
        }

        if (null !== $this->pbcUrl) {
            $res['pbcUrl'] = $this->pbcUrl;
        }

        if (null !== $this->pbcVersionId) {
            $res['pbcVersionId'] = $this->pbcVersionId;
        }

        if (null !== $this->reviewerId) {
            $res['reviewerId'] = $this->reviewerId;
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
        if (isset($map['marketId'])) {
            $model->marketId = $map['marketId'];
        }

        if (isset($map['pbcUrl'])) {
            $model->pbcUrl = $map['pbcUrl'];
        }

        if (isset($map['pbcVersionId'])) {
            $model->pbcVersionId = $map['pbcVersionId'];
        }

        if (isset($map['reviewerId'])) {
            $model->reviewerId = $map['reviewerId'];
        }

        return $model;
    }
}
