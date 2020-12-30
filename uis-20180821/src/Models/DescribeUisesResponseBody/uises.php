<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Uis\V20180821\Models\DescribeUisesResponseBody;

use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeUisesResponseBody\uises\uis;
use AlibabaCloud\Tea\Model;

class uises extends Model
{
    /**
     * @var uis[]
     */
    public $uis;
    protected $_name = [
        'uis' => 'Uis',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uis) {
            $res['Uis'] = [];
            if (null !== $this->uis && \is_array($this->uis)) {
                $n = 0;
                foreach ($this->uis as $item) {
                    $res['Uis'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return uises
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Uis'])) {
            if (!empty($map['Uis'])) {
                $model->uis = [];
                $n          = 0;
                foreach ($map['Uis'] as $item) {
                    $model->uis[$n++] = null !== $item ? uis::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
