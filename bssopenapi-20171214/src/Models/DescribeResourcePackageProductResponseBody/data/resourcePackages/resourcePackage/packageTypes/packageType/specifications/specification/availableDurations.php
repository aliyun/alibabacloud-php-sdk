<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponseBody\data\resourcePackages\resourcePackage\packageTypes\packageType\specifications\specification;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponseBody\data\resourcePackages\resourcePackage\packageTypes\packageType\specifications\specification\availableDurations\availableDuration;

class availableDurations extends Model
{
    /**
     * @var availableDuration[]
     */
    public $availableDuration;
    protected $_name = [
        'availableDuration' => 'AvailableDuration',
    ];

    public function validate()
    {
        if (\is_array($this->availableDuration)) {
            Model::validateArray($this->availableDuration);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableDuration) {
            if (\is_array($this->availableDuration)) {
                $res['AvailableDuration'] = [];
                $n1 = 0;
                foreach ($this->availableDuration as $item1) {
                    $res['AvailableDuration'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AvailableDuration'])) {
            if (!empty($map['AvailableDuration'])) {
                $model->availableDuration = [];
                $n1 = 0;
                foreach ($map['AvailableDuration'] as $item1) {
                    $model->availableDuration[$n1] = availableDuration::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
