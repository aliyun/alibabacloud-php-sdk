<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnRegionAndIspResponseBody;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnRegionAndIspResponseBody\isps\isp;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isp) {
            $res['Isp'] = [];
            if (null !== $this->isp && \is_array($this->isp)) {
                $n = 0;
                foreach ($this->isp as $item) {
                    $res['Isp'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return isps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Isp'])) {
            if (!empty($map['Isp'])) {
                $model->isp = [];
                $n          = 0;
                foreach ($map['Isp'] as $item) {
                    $model->isp[$n++] = null !== $item ? isp::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
