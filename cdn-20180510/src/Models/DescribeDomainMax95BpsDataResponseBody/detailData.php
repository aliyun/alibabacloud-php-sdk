<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainMax95BpsDataResponseBody;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainMax95BpsDataResponseBody\detailData\max95Detail;
use AlibabaCloud\Tea\Model;

class detailData extends Model
{
    /**
     * @var max95Detail[]
     */
    public $max95Detail;
    protected $_name = [
        'max95Detail' => 'Max95Detail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->max95Detail) {
            $res['Max95Detail'] = [];
            if (null !== $this->max95Detail && \is_array($this->max95Detail)) {
                $n = 0;
                foreach ($this->max95Detail as $item) {
                    $res['Max95Detail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detailData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Max95Detail'])) {
            if (!empty($map['Max95Detail'])) {
                $model->max95Detail = [];
                $n                  = 0;
                foreach ($map['Max95Detail'] as $item) {
                    $model->max95Detail[$n++] = null !== $item ? max95Detail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
