<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\TypedAIAsset\identityIdentifiers;

use AlibabaCloud\Dara\Model;

class peProductIdentity extends Model
{
    /**
     * @var string
     */
    public $companyName;

    /**
     * @var string
     */
    public $productName;
    protected $_name = [
        'companyName' => 'company_name',
        'productName' => 'product_name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->companyName) {
            $res['company_name'] = $this->companyName;
        }

        if (null !== $this->productName) {
            $res['product_name'] = $this->productName;
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
        if (isset($map['company_name'])) {
            $model->companyName = $map['company_name'];
        }

        if (isset($map['product_name'])) {
            $model->productName = $map['product_name'];
        }

        return $model;
    }
}
