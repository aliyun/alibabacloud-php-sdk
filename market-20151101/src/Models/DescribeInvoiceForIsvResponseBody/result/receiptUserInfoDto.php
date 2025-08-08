<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeInvoiceForIsvResponseBody\result;

use AlibabaCloud\Dara\Model;

class receiptUserInfoDto extends Model
{
    /**
     * @var string
     */
    public $taxNumber;
    protected $_name = [
        'taxNumber' => 'TaxNumber',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->taxNumber) {
            $res['TaxNumber'] = $this->taxNumber;
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
        if (isset($map['TaxNumber'])) {
            $model->taxNumber = $map['TaxNumber'];
        }

        return $model;
    }
}
