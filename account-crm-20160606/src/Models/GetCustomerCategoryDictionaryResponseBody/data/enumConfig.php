<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models\GetCustomerCategoryDictionaryResponseBody\data;

use AlibabaCloud\Dara\Model;

class enumConfig extends Model
{
    /**
     * @var string
     */
    public $enumName;

    /**
     * @var string
     */
    public $enumValue;
    protected $_name = [
        'enumName' => 'enumName',
        'enumValue' => 'enumValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enumName) {
            $res['enumName'] = $this->enumName;
        }

        if (null !== $this->enumValue) {
            $res['enumValue'] = $this->enumValue;
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
        if (isset($map['enumName'])) {
            $model->enumName = $map['enumName'];
        }

        if (isset($map['enumValue'])) {
            $model->enumValue = $map['enumValue'];
        }

        return $model;
    }
}
