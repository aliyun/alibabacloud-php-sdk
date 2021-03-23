<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponseBody\data\resourcePackages;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponseBody\data\resourcePackages\resourcePackage\packageTypes;
use AlibabaCloud\Tea\Model;

class resourcePackage extends Model
{
    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var packageTypes
     */
    public $packageTypes;
    protected $_name = [
        'productCode'  => 'ProductCode',
        'productType'  => 'ProductType',
        'name'         => 'Name',
        'packageTypes' => 'PackageTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->packageTypes) {
            $res['PackageTypes'] = null !== $this->packageTypes ? $this->packageTypes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourcePackage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PackageTypes'])) {
            $model->packageTypes = packageTypes::fromMap($map['PackageTypes']);
        }

        return $model;
    }
}
