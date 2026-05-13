<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class BillingBillSummaryPointDTO extends Model
{
    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var float
     */
    public $totalAmount;
    protected $_name = [
        'timestamp' => 'timestamp',
        'totalAmount' => 'totalAmount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
        }

        if (null !== $this->totalAmount) {
            $res['totalAmount'] = $this->totalAmount;
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
        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }

        if (isset($map['totalAmount'])) {
            $model->totalAmount = $map['totalAmount'];
        }

        return $model;
    }
}
