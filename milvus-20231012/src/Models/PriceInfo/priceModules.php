<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models\PriceInfo;

use AlibabaCloud\Dara\Model;

class priceModules extends Model
{
    /**
     * @var string
     */
    public $originalAmount;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'originalAmount' => 'originalAmount',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->originalAmount) {
            $res['originalAmount'] = $this->originalAmount;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['originalAmount'])) {
            $model->originalAmount = $map['originalAmount'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
