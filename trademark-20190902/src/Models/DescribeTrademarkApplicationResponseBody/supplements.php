<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models\DescribeTrademarkApplicationResponseBody;

use AlibabaCloud\SDK\Trademark\V20190902\Models\DescribeTrademarkApplicationResponseBody\supplements\supplement;
use AlibabaCloud\Tea\Model;

class supplements extends Model
{
    /**
     * @var supplement[]
     */
    public $supplement;
    protected $_name = [
        'supplement' => 'Supplement',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supplement) {
            $res['Supplement'] = [];
            if (null !== $this->supplement && \is_array($this->supplement)) {
                $n = 0;
                foreach ($this->supplement as $item) {
                    $res['Supplement'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supplements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Supplement'])) {
            if (!empty($map['Supplement'])) {
                $model->supplement = [];
                $n                 = 0;
                foreach ($map['Supplement'] as $item) {
                    $model->supplement[$n++] = null !== $item ? supplement::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
