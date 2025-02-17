<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostTypesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostTypesResponseBody\dedicatedHostTypes\dedicatedHostType;

class dedicatedHostTypes extends Model
{
    /**
     * @var dedicatedHostType[]
     */
    public $dedicatedHostType;
    protected $_name = [
        'dedicatedHostType' => 'DedicatedHostType',
    ];

    public function validate()
    {
        if (\is_array($this->dedicatedHostType)) {
            Model::validateArray($this->dedicatedHostType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dedicatedHostType) {
            if (\is_array($this->dedicatedHostType)) {
                $res['DedicatedHostType'] = [];
                $n1                       = 0;
                foreach ($this->dedicatedHostType as $item1) {
                    $res['DedicatedHostType'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DedicatedHostType'])) {
            if (!empty($map['DedicatedHostType'])) {
                $model->dedicatedHostType = [];
                $n1                       = 0;
                foreach ($map['DedicatedHostType'] as $item1) {
                    $model->dedicatedHostType[$n1++] = dedicatedHostType::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
