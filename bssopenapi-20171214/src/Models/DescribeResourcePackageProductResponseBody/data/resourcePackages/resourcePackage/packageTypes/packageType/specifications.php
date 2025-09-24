<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponseBody\data\resourcePackages\resourcePackage\packageTypes\packageType;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponseBody\data\resourcePackages\resourcePackage\packageTypes\packageType\specifications\specification;

class specifications extends Model
{
    /**
     * @var specification[]
     */
    public $specification;
    protected $_name = [
        'specification' => 'Specification',
    ];

    public function validate()
    {
        if (\is_array($this->specification)) {
            Model::validateArray($this->specification);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->specification) {
            if (\is_array($this->specification)) {
                $res['Specification'] = [];
                $n1 = 0;
                foreach ($this->specification as $item1) {
                    $res['Specification'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Specification'])) {
            if (!empty($map['Specification'])) {
                $model->specification = [];
                $n1 = 0;
                foreach ($map['Specification'] as $item1) {
                    $model->specification[$n1] = specification::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
