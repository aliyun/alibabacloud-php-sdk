<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryModifyDiskNumberPriceResponseBody\data;

use AlibabaCloud\Dara\Model;

class depreciateInfo extends Model
{
    /**
     * @var float
     */
    public $cheapRate;

    /**
     * @var float
     */
    public $cheapStandAmount;

    /**
     * @var bool
     */
    public $isShow;

    /**
     * @var float
     */
    public $originalStandAmount;
    protected $_name = [
        'cheapRate' => 'CheapRate',
        'cheapStandAmount' => 'CheapStandAmount',
        'isShow' => 'IsShow',
        'originalStandAmount' => 'OriginalStandAmount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cheapRate) {
            $res['CheapRate'] = $this->cheapRate;
        }

        if (null !== $this->cheapStandAmount) {
            $res['CheapStandAmount'] = $this->cheapStandAmount;
        }

        if (null !== $this->isShow) {
            $res['IsShow'] = $this->isShow;
        }

        if (null !== $this->originalStandAmount) {
            $res['OriginalStandAmount'] = $this->originalStandAmount;
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
        if (isset($map['CheapRate'])) {
            $model->cheapRate = $map['CheapRate'];
        }

        if (isset($map['CheapStandAmount'])) {
            $model->cheapStandAmount = $map['CheapStandAmount'];
        }

        if (isset($map['IsShow'])) {
            $model->isShow = $map['IsShow'];
        }

        if (isset($map['OriginalStandAmount'])) {
            $model->originalStandAmount = $map['OriginalStandAmount'];
        }

        return $model;
    }
}
