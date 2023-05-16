<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlAvailableResourceResponseBody\saleControlAvailableResource;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlAvailableResourceResponseBody\saleControlAvailableResource\availableStorageType\availableDefaultStorageType;
use AlibabaCloud\SDK\Ens\V20171110\Models\undefined;
use AlibabaCloud\Tea\Model;

class availableStorageType extends Model
{
    /**
     * @var availableDefaultStorageType[]
     */
    public $availableDefaultStorageType;

    /**
     * @var undefined[][]
     */
    public $availableSpecialStorageType;
    protected $_name = [
        'availableDefaultStorageType' => 'AvailableDefaultStorageType',
        'availableSpecialStorageType' => 'AvailableSpecialStorageType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableDefaultStorageType) {
            $res['AvailableDefaultStorageType'] = [];
            if (null !== $this->availableDefaultStorageType && \is_array($this->availableDefaultStorageType)) {
                $n = 0;
                foreach ($this->availableDefaultStorageType as $item) {
                    $res['AvailableDefaultStorageType'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->availableSpecialStorageType) {
            $res['AvailableSpecialStorageType'] = $this->availableSpecialStorageType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableStorageType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableDefaultStorageType'])) {
            if (!empty($map['AvailableDefaultStorageType'])) {
                $model->availableDefaultStorageType = [];
                $n                                  = 0;
                foreach ($map['AvailableDefaultStorageType'] as $item) {
                    $model->availableDefaultStorageType[$n++] = null !== $item ? availableDefaultStorageType::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AvailableSpecialStorageType'])) {
            if (!empty($map['AvailableSpecialStorageType'])) {
                $model->availableSpecialStorageType = $map['AvailableSpecialStorageType'];
            }
        }

        return $model;
    }
}
