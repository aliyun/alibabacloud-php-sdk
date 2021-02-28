<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnCcTopUrlResponseBody;

use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnCcTopUrlResponseBody\attackUrlDataList\attackUrlDatas;
use AlibabaCloud\Tea\Model;

class attackUrlDataList extends Model
{
    /**
     * @var attackUrlDatas[]
     */
    public $attackUrlDatas;
    protected $_name = [
        'attackUrlDatas' => 'AttackUrlDatas',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attackUrlDatas) {
            $res['AttackUrlDatas'] = [];
            if (null !== $this->attackUrlDatas && \is_array($this->attackUrlDatas)) {
                $n = 0;
                foreach ($this->attackUrlDatas as $item) {
                    $res['AttackUrlDatas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attackUrlDataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttackUrlDatas'])) {
            if (!empty($map['AttackUrlDatas'])) {
                $model->attackUrlDatas = [];
                $n                     = 0;
                foreach ($map['AttackUrlDatas'] as $item) {
                    $model->attackUrlDatas[$n++] = null !== $item ? attackUrlDatas::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
