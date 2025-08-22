<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnRegionAndIspResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnRegionAndIspResponseBody\isps\isp;

class isps extends Model
{
    /**
     * @var isp[]
     */
    public $isp;
    protected $_name = [
        'isp' => 'Isp',
    ];

    public function validate()
    {
        if (\is_array($this->isp)) {
            Model::validateArray($this->isp);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isp) {
            if (\is_array($this->isp)) {
                $res['Isp'] = [];
                $n1 = 0;
                foreach ($this->isp as $item1) {
                    $res['Isp'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Isp'])) {
            if (!empty($map['Isp'])) {
                $model->isp = [];
                $n1 = 0;
                foreach ($map['Isp'] as $item1) {
                    $model->isp[$n1] = isp::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
