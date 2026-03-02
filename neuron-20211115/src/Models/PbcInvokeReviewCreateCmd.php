<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class PbcInvokeReviewCreateCmd extends Model
{
    /**
     * @var int
     */
    public $companyId;

    /**
     * @var int
     */
    public $invokePbcId;

    /**
     * @var int
     */
    public $marketId;

    /**
     * @var int
     */
    public $pbcId;

    /**
     * @var string
     */
    public $usage;
    protected $_name = [
        'companyId' => 'companyId',
        'invokePbcId' => 'invokePbcId',
        'marketId' => 'marketId',
        'pbcId' => 'pbcId',
        'usage' => 'usage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->companyId) {
            $res['companyId'] = $this->companyId;
        }

        if (null !== $this->invokePbcId) {
            $res['invokePbcId'] = $this->invokePbcId;
        }

        if (null !== $this->marketId) {
            $res['marketId'] = $this->marketId;
        }

        if (null !== $this->pbcId) {
            $res['pbcId'] = $this->pbcId;
        }

        if (null !== $this->usage) {
            $res['usage'] = $this->usage;
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
        if (isset($map['companyId'])) {
            $model->companyId = $map['companyId'];
        }

        if (isset($map['invokePbcId'])) {
            $model->invokePbcId = $map['invokePbcId'];
        }

        if (isset($map['marketId'])) {
            $model->marketId = $map['marketId'];
        }

        if (isset($map['pbcId'])) {
            $model->pbcId = $map['pbcId'];
        }

        if (isset($map['usage'])) {
            $model->usage = $map['usage'];
        }

        return $model;
    }
}
