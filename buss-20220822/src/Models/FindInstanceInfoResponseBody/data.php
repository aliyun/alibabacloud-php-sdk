<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Buss\V20220822\Models\FindInstanceInfoResponseBody;

use AlibabaCloud\SDK\Buss\V20220822\Models\FindInstanceInfoResponseBody\data\pegInstanceInfoList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var pegInstanceInfoList[]
     */
    public $pegInstanceInfoList;
    protected $_name = [
        'pegInstanceInfoList' => 'PegInstanceInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pegInstanceInfoList) {
            $res['PegInstanceInfoList'] = [];
            if (null !== $this->pegInstanceInfoList && \is_array($this->pegInstanceInfoList)) {
                $n = 0;
                foreach ($this->pegInstanceInfoList as $item) {
                    $res['PegInstanceInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PegInstanceInfoList'])) {
            if (!empty($map['PegInstanceInfoList'])) {
                $model->pegInstanceInfoList = [];
                $n                          = 0;
                foreach ($map['PegInstanceInfoList'] as $item) {
                    $model->pegInstanceInfoList[$n++] = null !== $item ? pegInstanceInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
