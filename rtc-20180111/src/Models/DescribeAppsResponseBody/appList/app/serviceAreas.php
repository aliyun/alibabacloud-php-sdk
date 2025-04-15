<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppsResponseBody\appList\app;

use AlibabaCloud\Dara\Model;

class serviceAreas extends Model
{
    /**
     * @var string[]
     */
    public $serviceArea;
    protected $_name = [
        'serviceArea' => 'ServiceArea',
    ];

    public function validate()
    {
        if (\is_array($this->serviceArea)) {
            Model::validateArray($this->serviceArea);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serviceArea) {
            if (\is_array($this->serviceArea)) {
                $res['ServiceArea'] = [];
                $n1 = 0;
                foreach ($this->serviceArea as $item1) {
                    $res['ServiceArea'][$n1++] = $item1;
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
        if (isset($map['ServiceArea'])) {
            if (!empty($map['ServiceArea'])) {
                $model->serviceArea = [];
                $n1 = 0;
                foreach ($map['ServiceArea'] as $item1) {
                    $model->serviceArea[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
