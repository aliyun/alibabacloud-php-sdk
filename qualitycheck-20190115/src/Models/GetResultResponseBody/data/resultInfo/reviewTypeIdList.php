<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo;

use AlibabaCloud\Tea\Model;

class reviewTypeIdList extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\reviewTypeIdList\reviewTypeIdList[]
     */
    public $reviewTypeIdList;
    protected $_name = [
        'reviewTypeIdList' => 'ReviewTypeIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reviewTypeIdList) {
            $res['ReviewTypeIdList'] = [];
            if (null !== $this->reviewTypeIdList && \is_array($this->reviewTypeIdList)) {
                $n = 0;
                foreach ($this->reviewTypeIdList as $item) {
                    $res['ReviewTypeIdList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reviewTypeIdList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReviewTypeIdList'])) {
            if (!empty($map['ReviewTypeIdList'])) {
                $model->reviewTypeIdList = [];
                $n                       = 0;
                foreach ($map['ReviewTypeIdList'] as $item) {
                    $model->reviewTypeIdList[$n++] = null !== $item ? \AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\reviewTypeIdList\reviewTypeIdList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
