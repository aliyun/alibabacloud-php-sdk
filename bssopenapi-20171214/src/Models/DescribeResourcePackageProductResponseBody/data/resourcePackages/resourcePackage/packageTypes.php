<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponseBody\data\resourcePackages\resourcePackage;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponseBody\data\resourcePackages\resourcePackage\packageTypes\packageType;

class packageTypes extends Model
{
    /**
     * @var packageType[]
     */
    public $packageType;
    protected $_name = [
        'packageType' => 'PackageType',
    ];

    public function validate()
    {
        if (\is_array($this->packageType)) {
            Model::validateArray($this->packageType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->packageType) {
            if (\is_array($this->packageType)) {
                $res['PackageType'] = [];
                $n1 = 0;
                foreach ($this->packageType as $item1) {
                    $res['PackageType'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PackageType'])) {
            if (!empty($map['PackageType'])) {
                $model->packageType = [];
                $n1 = 0;
                foreach ($map['PackageType'] as $item1) {
                    $model->packageType[$n1] = packageType::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
