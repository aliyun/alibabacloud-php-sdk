<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponseBody\data\resourcePackages\resourcePackage\packageTypes\packageType\specifications;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponseBody\data\resourcePackages\resourcePackage\packageTypes\packageType\specifications\specification\availableDurations;
use AlibabaCloud\Tea\Model;

class specification extends Model
{
    /**
     * @description The validity periods available for the resource plan.
     *
     * @var availableDurations
     */
    public $availableDurations;

    /**
     * @description The name of the specification.
     *
     * @example 1TB
     *
     * @var string
     */
    public $name;

    /**
     * @description The value of the specification.
     *
     * @example 1024
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'availableDurations' => 'AvailableDurations',
        'name'               => 'Name',
        'value'              => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableDurations) {
            $res['AvailableDurations'] = null !== $this->availableDurations ? $this->availableDurations->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return specification
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableDurations'])) {
            $model->availableDurations = availableDurations::fromMap($map['AvailableDurations']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
