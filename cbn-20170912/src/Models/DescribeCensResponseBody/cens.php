<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCensResponseBody;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCensResponseBody\cens\cen;
use AlibabaCloud\Tea\Model;

class cens extends Model
{
    /**
     * @var cen[]
     */
    public $cen;
    protected $_name = [
        'cen' => 'Cen',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cen) {
            $res['Cen'] = [];
            if (null !== $this->cen && \is_array($this->cen)) {
                $n = 0;
                foreach ($this->cen as $item) {
                    $res['Cen'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cens
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cen'])) {
            if (!empty($map['Cen'])) {
                $model->cen = [];
                $n          = 0;
                foreach ($map['Cen'] as $item) {
                    $model->cen[$n++] = null !== $item ? cen::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
