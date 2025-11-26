<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlAvailableResourceResponseBody\saleControlAvailableResource;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlAvailableResourceResponseBody\saleControlAvailableResource\availableStorageType\availableDefaultStorageType;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlAvailableResourceResponseBody\saleControlAvailableResource\availableStorageType\availableSpecialStorageType;

class availableStorageType extends Model
{
    /**
     * @var availableDefaultStorageType[]
     */
    public $availableDefaultStorageType;

    /**
     * @var availableSpecialStorageType[][]
     */
    public $availableSpecialStorageType;
    protected $_name = [
        'availableDefaultStorageType' => 'AvailableDefaultStorageType',
        'availableSpecialStorageType' => 'AvailableSpecialStorageType',
    ];

    public function validate()
    {
        if (\is_array($this->availableDefaultStorageType)) {
            Model::validateArray($this->availableDefaultStorageType);
        }
        if (\is_array($this->availableSpecialStorageType)) {
            Model::validateArray($this->availableSpecialStorageType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableDefaultStorageType) {
            if (\is_array($this->availableDefaultStorageType)) {
                $res['AvailableDefaultStorageType'] = [];
                $n1 = 0;
                foreach ($this->availableDefaultStorageType as $item1) {
                    $res['AvailableDefaultStorageType'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->availableSpecialStorageType) {
            if (\is_array($this->availableSpecialStorageType)) {
                $res['AvailableSpecialStorageType'] = [];
                $n1 = 0;
                foreach ($this->availableSpecialStorageType as $item1) {
                    if (\is_array($item1)) {
                        $res['AvailableSpecialStorageType'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['AvailableSpecialStorageType'][$n1][$n2] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                            ++$n2;
                        }
                    }
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
        if (isset($map['AvailableDefaultStorageType'])) {
            if (!empty($map['AvailableDefaultStorageType'])) {
                $model->availableDefaultStorageType = [];
                $n1 = 0;
                foreach ($map['AvailableDefaultStorageType'] as $item1) {
                    $model->availableDefaultStorageType[$n1] = availableDefaultStorageType::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AvailableSpecialStorageType'])) {
            if (!empty($map['AvailableSpecialStorageType'])) {
                $model->availableSpecialStorageType = [];
                $n1 = 0;
                foreach ($map['AvailableSpecialStorageType'] as $item1) {
                    if (!empty($item1)) {
                        $model->availableSpecialStorageType[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->availableSpecialStorageType[$n1][$n2] = availableSpecialStorageType::fromMap($item2);
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
