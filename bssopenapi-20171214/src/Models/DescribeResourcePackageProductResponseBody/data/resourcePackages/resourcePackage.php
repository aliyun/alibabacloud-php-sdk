<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponseBody\data\resourcePackages;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponseBody\data\resourcePackages\resourcePackage\packageTypes;

class resourcePackage extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var packageTypes
     */
    public $packageTypes;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productType;
    protected $_name = [
        'name' => 'Name',
        'packageTypes' => 'PackageTypes',
        'productCode' => 'ProductCode',
        'productType' => 'ProductType',
    ];

    public function validate()
    {
        if (null !== $this->packageTypes) {
            $this->packageTypes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->packageTypes) {
            $res['PackageTypes'] = null !== $this->packageTypes ? $this->packageTypes->toArray($noStream) : $this->packageTypes;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PackageTypes'])) {
            $model->packageTypes = packageTypes::fromMap($map['PackageTypes']);
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        return $model;
    }
}
