<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SMQProxy\V20260409\Models;

use AlibabaCloud\Dara\Model;

class BatchDeleteMessageRequest extends Model
{
    /**
     * @var string[]
     */
    public $receiptHandles;
    protected $_name = [
        'receiptHandles' => 'ReceiptHandles',
    ];

    public function validate()
    {
        if (\is_array($this->receiptHandles)) {
            Model::validateArray($this->receiptHandles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->receiptHandles) {
            if (\is_array($this->receiptHandles)) {
                $res['ReceiptHandles'] = [];
                $n1 = 0;
                foreach ($this->receiptHandles as $item1) {
                    $res['ReceiptHandles'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ReceiptHandles'])) {
            if (!empty($map['ReceiptHandles'])) {
                $model->receiptHandles = [];
                $n1 = 0;
                foreach ($map['ReceiptHandles'] as $item1) {
                    $model->receiptHandles[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
