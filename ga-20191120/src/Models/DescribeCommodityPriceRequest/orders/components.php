<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCommodityPriceRequest\orders;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCommodityPriceRequest\orders\components\properties;

class components extends Model
{
    /**
     * @var string
     */
    public $componentCode;

    /**
     * @var properties[]
     */
    public $properties;
    protected $_name = [
        'componentCode' => 'ComponentCode',
        'properties' => 'Properties',
    ];

    public function validate()
    {
        if (\is_array($this->properties)) {
            Model::validateArray($this->properties);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentCode) {
            $res['ComponentCode'] = $this->componentCode;
        }

        if (null !== $this->properties) {
            if (\is_array($this->properties)) {
                $res['Properties'] = [];
                $n1 = 0;
                foreach ($this->properties as $item1) {
                    $res['Properties'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ComponentCode'])) {
            $model->componentCode = $map['ComponentCode'];
        }

        if (isset($map['Properties'])) {
            if (!empty($map['Properties'])) {
                $model->properties = [];
                $n1 = 0;
                foreach ($map['Properties'] as $item1) {
                    $model->properties[$n1] = properties::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
