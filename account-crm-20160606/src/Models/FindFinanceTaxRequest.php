<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;

class FindFinanceTaxRequest extends Model
{
    /**
     * @var int
     */
    public $HId;

    /**
     * @var string
     */
    public $taxVersion;
    protected $_name = [
        'HId' => 'HId',
        'taxVersion' => 'TaxVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->HId) {
            $res['HId'] = $this->HId;
        }

        if (null !== $this->taxVersion) {
            $res['TaxVersion'] = $this->taxVersion;
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
        if (isset($map['HId'])) {
            $model->HId = $map['HId'];
        }

        if (isset($map['TaxVersion'])) {
            $model->taxVersion = $map['TaxVersion'];
        }

        return $model;
    }
}
