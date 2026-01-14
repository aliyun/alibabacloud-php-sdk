<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCommodityResponseBody\components\properties;

use AlibabaCloud\Dara\Model;

class propertyValueList extends Model
{
    /**
     * @var int
     */
    public $orderIndex;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $tips;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'orderIndex' => 'OrderIndex',
        'text' => 'Text',
        'tips' => 'Tips',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderIndex) {
            $res['OrderIndex'] = $this->orderIndex;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        if (null !== $this->tips) {
            $res['Tips'] = $this->tips;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['OrderIndex'])) {
            $model->orderIndex = $map['OrderIndex'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        if (isset($map['Tips'])) {
            $model->tips = $map['Tips'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
