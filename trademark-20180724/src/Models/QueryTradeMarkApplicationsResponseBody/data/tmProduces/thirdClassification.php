<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationsResponseBody\data\tmProduces;

use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationsResponseBody\data\tmProduces\thirdClassification\thirdClassifications;
use AlibabaCloud\Tea\Model;

class thirdClassification extends Model
{
    /**
     * @var thirdClassifications[]
     */
    public $thirdClassifications;
    protected $_name = [
        'thirdClassifications' => 'ThirdClassifications',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->thirdClassifications) {
            $res['ThirdClassifications'] = [];
            if (null !== $this->thirdClassifications && \is_array($this->thirdClassifications)) {
                $n = 0;
                foreach ($this->thirdClassifications as $item) {
                    $res['ThirdClassifications'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return thirdClassification
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ThirdClassifications'])) {
            if (!empty($map['ThirdClassifications'])) {
                $model->thirdClassifications = [];
                $n                           = 0;
                foreach ($map['ThirdClassifications'] as $item) {
                    $model->thirdClassifications[$n++] = null !== $item ? thirdClassifications::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
