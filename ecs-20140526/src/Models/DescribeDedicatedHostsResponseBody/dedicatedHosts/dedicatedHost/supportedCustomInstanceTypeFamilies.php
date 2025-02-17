<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost;

use AlibabaCloud\Dara\Model;

class supportedCustomInstanceTypeFamilies extends Model
{
    /**
     * @var string[]
     */
    public $supportedCustomInstanceTypeFamily;
    protected $_name = [
        'supportedCustomInstanceTypeFamily' => 'SupportedCustomInstanceTypeFamily',
    ];

    public function validate()
    {
        if (\is_array($this->supportedCustomInstanceTypeFamily)) {
            Model::validateArray($this->supportedCustomInstanceTypeFamily);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportedCustomInstanceTypeFamily) {
            if (\is_array($this->supportedCustomInstanceTypeFamily)) {
                $res['SupportedCustomInstanceTypeFamily'] = [];
                $n1                                       = 0;
                foreach ($this->supportedCustomInstanceTypeFamily as $item1) {
                    $res['SupportedCustomInstanceTypeFamily'][$n1++] = $item1;
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
        if (isset($map['SupportedCustomInstanceTypeFamily'])) {
            if (!empty($map['SupportedCustomInstanceTypeFamily'])) {
                $model->supportedCustomInstanceTypeFamily = [];
                $n1                                       = 0;
                foreach ($map['SupportedCustomInstanceTypeFamily'] as $item1) {
                    $model->supportedCustomInstanceTypeFamily[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
