<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponseBody\data\resourcePackages\resourcePackage;

class resourcePackages extends Model
{
    /**
     * @var resourcePackage[]
     */
    public $resourcePackage;
    protected $_name = [
        'resourcePackage' => 'ResourcePackage',
    ];

    public function validate()
    {
        if (\is_array($this->resourcePackage)) {
            Model::validateArray($this->resourcePackage);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourcePackage) {
            if (\is_array($this->resourcePackage)) {
                $res['ResourcePackage'] = [];
                $n1 = 0;
                foreach ($this->resourcePackage as $item1) {
                    $res['ResourcePackage'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ResourcePackage'])) {
            if (!empty($map['ResourcePackage'])) {
                $model->resourcePackage = [];
                $n1 = 0;
                foreach ($map['ResourcePackage'] as $item1) {
                    $model->resourcePackage[$n1] = resourcePackage::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
