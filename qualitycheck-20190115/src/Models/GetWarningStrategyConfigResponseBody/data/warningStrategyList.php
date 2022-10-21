<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetWarningStrategyConfigResponseBody\data;

use AlibabaCloud\Tea\Model;

class warningStrategyList extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetWarningStrategyConfigResponseBody\data\warningStrategyList\warningStrategyList[]
     */
    public $warningStrategyList;
    protected $_name = [
        'warningStrategyList' => 'warningStrategyList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->warningStrategyList) {
            $res['warningStrategyList'] = [];
            if (null !== $this->warningStrategyList && \is_array($this->warningStrategyList)) {
                $n = 0;
                foreach ($this->warningStrategyList as $item) {
                    $res['warningStrategyList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return warningStrategyList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['warningStrategyList'])) {
            if (!empty($map['warningStrategyList'])) {
                $model->warningStrategyList = [];
                $n                          = 0;
                foreach ($map['warningStrategyList'] as $item) {
                    $model->warningStrategyList[$n++] = null !== $item ? \AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetWarningStrategyConfigResponseBody\data\warningStrategyList\warningStrategyList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
