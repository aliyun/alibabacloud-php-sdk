<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponseBody\data\resourcePackages\resourcePackage\packageTypes;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponseBody\data\resourcePackages\resourcePackage\packageTypes\packageType\properties;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponseBody\data\resourcePackages\resourcePackage\packageTypes\packageType\specifications;

class packageType extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $name;

    /**
     * @var properties
     */
    public $properties;

    /**
     * @var specifications
     */
    public $specifications;
    protected $_name = [
        'code' => 'Code',
        'name' => 'Name',
        'properties' => 'Properties',
        'specifications' => 'Specifications',
    ];

    public function validate()
    {
        if (null !== $this->properties) {
            $this->properties->validate();
        }
        if (null !== $this->specifications) {
            $this->specifications->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->properties) {
            $res['Properties'] = null !== $this->properties ? $this->properties->toArray($noStream) : $this->properties;
        }

        if (null !== $this->specifications) {
            $res['Specifications'] = null !== $this->specifications ? $this->specifications->toArray($noStream) : $this->specifications;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Properties'])) {
            $model->properties = properties::fromMap($map['Properties']);
        }

        if (isset($map['Specifications'])) {
            $model->specifications = specifications::fromMap($map['Specifications']);
        }

        return $model;
    }
}
