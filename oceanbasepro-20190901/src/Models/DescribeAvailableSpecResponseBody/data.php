<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableSpecResponseBody;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableSpecResponseBody\data\availableSpecifications;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var availableSpecifications[]
     */
    public $availableSpecifications;
    protected $_name = [
        'availableSpecifications' => 'AvailableSpecifications',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableSpecifications) {
            $res['AvailableSpecifications'] = [];
            if (null !== $this->availableSpecifications && \is_array($this->availableSpecifications)) {
                $n = 0;
                foreach ($this->availableSpecifications as $item) {
                    $res['AvailableSpecifications'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableSpecifications'])) {
            if (!empty($map['AvailableSpecifications'])) {
                $model->availableSpecifications = [];
                $n                              = 0;
                foreach ($map['AvailableSpecifications'] as $item) {
                    $model->availableSpecifications[$n++] = null !== $item ? availableSpecifications::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
