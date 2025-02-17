<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class ProductSpecValue extends Model
{
    /**
     * @var string
     */
    public $value;
    /**
     * @var string
     */
    public $valueAlias;
    /**
     * @var int
     */
    public $valueId;
    protected $_name = [
        'value'      => 'value',
        'valueAlias' => 'valueAlias',
        'valueId'    => 'valueId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        if (null !== $this->valueAlias) {
            $res['valueAlias'] = $this->valueAlias;
        }

        if (null !== $this->valueId) {
            $res['valueId'] = $this->valueId;
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
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        if (isset($map['valueAlias'])) {
            $model->valueAlias = $map['valueAlias'];
        }

        if (isset($map['valueId'])) {
            $model->valueId = $map['valueId'];
        }

        return $model;
    }
}
