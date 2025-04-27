<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionalInstanceConfigResponseBody\result;

use AlibabaCloud\Dara\Model;

class warmNodeAmountRange extends Model
{
    /**
     * @var int
     */
    public $maxAmount;

    /**
     * @var int
     */
    public $minAmount;
    protected $_name = [
        'maxAmount' => 'maxAmount',
        'minAmount' => 'minAmount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxAmount) {
            $res['maxAmount'] = $this->maxAmount;
        }

        if (null !== $this->minAmount) {
            $res['minAmount'] = $this->minAmount;
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
        if (isset($map['maxAmount'])) {
            $model->maxAmount = $map['maxAmount'];
        }

        if (isset($map['minAmount'])) {
            $model->minAmount = $map['minAmount'];
        }

        return $model;
    }
}
