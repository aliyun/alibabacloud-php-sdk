<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTmSbjProduceResponseBody;

use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTmSbjProduceResponseBody\moudle\tmSbjProduceList;
use AlibabaCloud\Tea\Model;

class moudle extends Model
{
    /**
     * @var tmSbjProduceList[]
     */
    public $tmSbjProduceList;
    protected $_name = [
        'tmSbjProduceList' => 'TmSbjProduceList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tmSbjProduceList) {
            $res['TmSbjProduceList'] = [];
            if (null !== $this->tmSbjProduceList && \is_array($this->tmSbjProduceList)) {
                $n = 0;
                foreach ($this->tmSbjProduceList as $item) {
                    $res['TmSbjProduceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return moudle
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TmSbjProduceList'])) {
            if (!empty($map['TmSbjProduceList'])) {
                $model->tmSbjProduceList = [];
                $n                       = 0;
                foreach ($map['TmSbjProduceList'] as $item) {
                    $model->tmSbjProduceList[$n++] = null !== $item ? tmSbjProduceList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
