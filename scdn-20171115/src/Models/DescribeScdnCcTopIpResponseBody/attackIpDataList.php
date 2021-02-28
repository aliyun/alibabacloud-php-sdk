<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnCcTopIpResponseBody;

use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnCcTopIpResponseBody\attackIpDataList\attackIpDatas;
use AlibabaCloud\Tea\Model;

class attackIpDataList extends Model
{
    /**
     * @var attackIpDatas[]
     */
    public $attackIpDatas;
    protected $_name = [
        'attackIpDatas' => 'AttackIpDatas',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attackIpDatas) {
            $res['AttackIpDatas'] = [];
            if (null !== $this->attackIpDatas && \is_array($this->attackIpDatas)) {
                $n = 0;
                foreach ($this->attackIpDatas as $item) {
                    $res['AttackIpDatas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attackIpDataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttackIpDatas'])) {
            if (!empty($map['AttackIpDatas'])) {
                $model->attackIpDatas = [];
                $n                    = 0;
                foreach ($map['AttackIpDatas'] as $item) {
                    $model->attackIpDatas[$n++] = null !== $item ? attackIpDatas::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
