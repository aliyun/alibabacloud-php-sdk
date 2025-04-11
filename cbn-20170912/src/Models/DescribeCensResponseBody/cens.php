<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCensResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCensResponseBody\cens\cen;

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
        if (\is_array($this->cen)) {
            Model::validateArray($this->cen);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cen) {
            if (\is_array($this->cen)) {
                $res['Cen'] = [];
                $n1 = 0;
                foreach ($this->cen as $item1) {
                    $res['Cen'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Cen'])) {
            if (!empty($map['Cen'])) {
                $model->cen = [];
                $n1 = 0;
                foreach ($map['Cen'] as $item1) {
                    $model->cen[$n1++] = cen::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
