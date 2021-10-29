<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20171016\Models\DescribeDrdsInstanceNetInfoForInnerResponseBody;

use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeDrdsInstanceNetInfoForInnerResponseBody\netInfos\netInfo;
use AlibabaCloud\Tea\Model;

class netInfos extends Model
{
    /**
     * @var netInfo[]
     */
    public $netInfo;
    protected $_name = [
        'netInfo' => 'NetInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->netInfo) {
            $res['NetInfo'] = [];
            if (null !== $this->netInfo && \is_array($this->netInfo)) {
                $n = 0;
                foreach ($this->netInfo as $item) {
                    $res['NetInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return netInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetInfo'])) {
            if (!empty($map['NetInfo'])) {
                $model->netInfo = [];
                $n              = 0;
                foreach ($map['NetInfo'] as $item) {
                    $model->netInfo[$n++] = null !== $item ? netInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
