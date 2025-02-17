<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone\availableResources\resourcesInfo;

use AlibabaCloud\Dara\Model;

class instanceTypeFamilies extends Model
{
    /**
     * @var string[]
     */
    public $supportedInstanceTypeFamily;
    protected $_name = [
        'supportedInstanceTypeFamily' => 'supportedInstanceTypeFamily',
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
                $res['supportedInstanceTypeFamily'] = [];
                $n1                                 = 0;
                foreach ($this->supportedInstanceTypeFamily as $item1) {
                    $res['supportedInstanceTypeFamily'][$n1++] = $item1;
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
        if (isset($map['supportedInstanceTypeFamily'])) {
            if (!empty($map['supportedInstanceTypeFamily'])) {
                $model->supportedInstanceTypeFamily = [];
                $n1                                 = 0;
                foreach ($map['supportedInstanceTypeFamily'] as $item1) {
                    $model->supportedInstanceTypeFamily[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
