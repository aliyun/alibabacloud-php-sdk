<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ListFpShotNotaryResponseBody;

use AlibabaCloud\SDK\Mts\V20140618\Models\ListFpShotNotaryResponseBody\fpShotNotaryList\fpShotNotary;
use AlibabaCloud\Tea\Model;

class fpShotNotaryList extends Model
{
    /**
     * @var fpShotNotary[]
     */
    public $fpShotNotary;
    protected $_name = [
        'fpShotNotary' => 'FpShotNotary',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fpShotNotary) {
            $res['FpShotNotary'] = [];
            if (null !== $this->fpShotNotary && \is_array($this->fpShotNotary)) {
                $n = 0;
                foreach ($this->fpShotNotary as $item) {
                    $res['FpShotNotary'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fpShotNotaryList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FpShotNotary'])) {
            if (!empty($map['FpShotNotary'])) {
                $model->fpShotNotary = [];
                $n                   = 0;
                foreach ($map['FpShotNotary'] as $item) {
                    $model->fpShotNotary[$n++] = null !== $item ? fpShotNotary::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
