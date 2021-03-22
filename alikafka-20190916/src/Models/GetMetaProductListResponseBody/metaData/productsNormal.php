<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetMetaProductListResponseBody\metaData;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetMetaProductListResponseBody\metaData\productsNormal\specVO;
use AlibabaCloud\Tea\Model;

class productsNormal extends Model
{
    /**
     * @var specVO[]
     */
    public $specVO;
    protected $_name = [
        'specVO' => 'SpecVO',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->specVO) {
            $res['SpecVO'] = [];
            if (null !== $this->specVO && \is_array($this->specVO)) {
                $n = 0;
                foreach ($this->specVO as $item) {
                    $res['SpecVO'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return productsNormal
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpecVO'])) {
            if (!empty($map['SpecVO'])) {
                $model->specVO = [];
                $n             = 0;
                foreach ($map['SpecVO'] as $item) {
                    $model->specVO[$n++] = null !== $item ? specVO::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
