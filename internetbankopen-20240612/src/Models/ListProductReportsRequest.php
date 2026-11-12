<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\InternetBankOpen\V20240612\Models;

use AlibabaCloud\Dara\Model;

class ListProductReportsRequest extends Model
{
    /**
     * @var bool
     */
    public $latestOnly;

    /**
     * @var string
     */
    public $productCode;
    protected $_name = [
        'latestOnly' => 'LatestOnly',
        'productCode' => 'ProductCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->latestOnly) {
            $res['LatestOnly'] = $this->latestOnly;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
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
        if (isset($map['LatestOnly'])) {
            $model->latestOnly = $map['LatestOnly'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}
