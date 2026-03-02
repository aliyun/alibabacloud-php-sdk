<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class ListPbcInvokeReviewsRequest extends Model
{
    /**
     * @var string
     */
    public $applicant;

    /**
     * @var int
     */
    public $companyId;

    /**
     * @var int
     */
    public $marketId;

    /**
     * @var int
     */
    public $orderDirection;

    /**
     * @var int
     */
    public $orderby;

    /**
     * @var string
     */
    public $reviewer;
    protected $_name = [
        'applicant' => 'applicant',
        'companyId' => 'companyId',
        'marketId' => 'marketId',
        'orderDirection' => 'orderDirection',
        'orderby' => 'orderby',
        'reviewer' => 'reviewer',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicant) {
            $res['applicant'] = $this->applicant;
        }

        if (null !== $this->companyId) {
            $res['companyId'] = $this->companyId;
        }

        if (null !== $this->marketId) {
            $res['marketId'] = $this->marketId;
        }

        if (null !== $this->orderDirection) {
            $res['orderDirection'] = $this->orderDirection;
        }

        if (null !== $this->orderby) {
            $res['orderby'] = $this->orderby;
        }

        if (null !== $this->reviewer) {
            $res['reviewer'] = $this->reviewer;
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
        if (isset($map['applicant'])) {
            $model->applicant = $map['applicant'];
        }

        if (isset($map['companyId'])) {
            $model->companyId = $map['companyId'];
        }

        if (isset($map['marketId'])) {
            $model->marketId = $map['marketId'];
        }

        if (isset($map['orderDirection'])) {
            $model->orderDirection = $map['orderDirection'];
        }

        if (isset($map['orderby'])) {
            $model->orderby = $map['orderby'];
        }

        if (isset($map['reviewer'])) {
            $model->reviewer = $map['reviewer'];
        }

        return $model;
    }
}
