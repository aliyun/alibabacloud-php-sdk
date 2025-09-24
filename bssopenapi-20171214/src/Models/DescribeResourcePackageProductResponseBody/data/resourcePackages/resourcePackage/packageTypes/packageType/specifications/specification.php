<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponseBody\data\resourcePackages\resourcePackage\packageTypes\packageType\specifications;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponseBody\data\resourcePackages\resourcePackage\packageTypes\packageType\specifications\specification\availableDurations;

class specification extends Model
{
    /**
     * @var availableDurations
     */
    public $availableDurations;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'availableDurations' => 'AvailableDurations',
        'name' => 'Name',
        'value' => 'Value',
    ];

    public function validate()
    {
        if (null !== $this->availableDurations) {
            $this->availableDurations->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableDurations) {
            $res['AvailableDurations'] = null !== $this->availableDurations ? $this->availableDurations->toArray($noStream) : $this->availableDurations;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
