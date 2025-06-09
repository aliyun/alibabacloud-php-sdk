<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class GetCollectionPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $dataCode;

    /**
     * @var string
     */
    public $productCode;
    protected $_name = [
        'dataCode' => 'dataCode',
        'productCode' => 'productCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataCode) {
            $res['dataCode'] = $this->dataCode;
        }

        if (null !== $this->productCode) {
            $res['productCode'] = $this->productCode;
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
        if (isset($map['dataCode'])) {
            $model->dataCode = $map['dataCode'];
        }

        if (isset($map['productCode'])) {
            $model->productCode = $map['productCode'];
        }

        return $model;
    }
}
