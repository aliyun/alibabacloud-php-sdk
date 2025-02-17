<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost;

use AlibabaCloud\Dara\Model;

class supportedInstanceTypeFamilies extends Model
{
    /**
     * @var string[]
     */
    public $supportedInstanceTypeFamily;
    protected $_name = [
        'supportedInstanceTypeFamily' => 'SupportedInstanceTypeFamily',
    ];

    public function validate()
    {
        if (\is_array($this->supportedInstanceTypeFamily)) {
            Model::validateArray($this->supportedInstanceTypeFamily);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportedInstanceTypeFamily) {
            if (\is_array($this->supportedInstanceTypeFamily)) {
                $res['SupportedInstanceTypeFamily'] = [];
                $n1                                 = 0;
                foreach ($this->supportedInstanceTypeFamily as $item1) {
                    $res['SupportedInstanceTypeFamily'][$n1++] = $item1;
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
        if (isset($map['SupportedInstanceTypeFamily'])) {
            if (!empty($map['SupportedInstanceTypeFamily'])) {
                $model->supportedInstanceTypeFamily = [];
                $n1                                 = 0;
                foreach ($map['SupportedInstanceTypeFamily'] as $item1) {
                    $model->supportedInstanceTypeFamily[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
