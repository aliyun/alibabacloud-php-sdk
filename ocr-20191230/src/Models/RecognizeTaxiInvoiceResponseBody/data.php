<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTaxiInvoiceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTaxiInvoiceResponseBody\data\invoices;

class data extends Model
{
    /**
     * @var invoices[]
     */
    public $invoices;
    protected $_name = [
        'invoices' => 'Invoices',
    ];

    public function validate()
    {
        if (\is_array($this->invoices)) {
            Model::validateArray($this->invoices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->invoices) {
            if (\is_array($this->invoices)) {
                $res['Invoices'] = [];
                $n1 = 0;
                foreach ($this->invoices as $item1) {
                    $res['Invoices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Invoices'])) {
            if (!empty($map['Invoices'])) {
                $model->invoices = [];
                $n1 = 0;
                foreach ($map['Invoices'] as $item1) {
                    $model->invoices[$n1] = invoices::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
