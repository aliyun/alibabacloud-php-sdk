<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAsrConfigResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAsrConfigResponseBody\liveAsrConfig\liveAsrConfigList;
use AlibabaCloud\Tea\Model;

class liveAsrConfig extends Model
{
    /**
     * @var liveAsrConfigList[]
     */
    public $liveAsrConfigList;
    protected $_name = [
        'liveAsrConfigList' => 'LiveAsrConfigList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveAsrConfigList) {
            $res['LiveAsrConfigList'] = [];
            if (null !== $this->liveAsrConfigList && \is_array($this->liveAsrConfigList)) {
                $n = 0;
                foreach ($this->liveAsrConfigList as $item) {
                    $res['LiveAsrConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveAsrConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveAsrConfigList'])) {
            if (!empty($map['LiveAsrConfigList'])) {
                $model->liveAsrConfigList = [];
                $n                        = 0;
                foreach ($map['LiveAsrConfigList'] as $item) {
                    $model->liveAsrConfigList[$n++] = null !== $item ? liveAsrConfigList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
