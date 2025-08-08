<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeInstanceResponseBody\modules\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeInstanceResponseBody\modules\module\properties\property;

class properties extends Model
{
    /**
     * @var property[]
     */
    public $property;
    protected $_name = [
        'property' => 'Property',
    ];

    public function validate()
    {
        if (\is_array($this->property)) {
            Model::validateArray($this->property);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->property) {
            if (\is_array($this->property)) {
                $res['Property'] = [];
                $n1 = 0;
                foreach ($this->property as $item1) {
                    $res['Property'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Property'])) {
            if (!empty($map['Property'])) {
                $model->property = [];
                $n1 = 0;
                foreach ($map['Property'] as $item1) {
                    $model->property[$n1] = property::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
