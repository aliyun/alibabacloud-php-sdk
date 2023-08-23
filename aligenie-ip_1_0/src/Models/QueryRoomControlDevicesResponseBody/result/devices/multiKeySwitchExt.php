<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryRoomControlDevicesResponseBody\result\devices;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryRoomControlDevicesResponseBody\result\devices\multiKeySwitchExt\switchList;
use AlibabaCloud\Tea\Model;

class multiKeySwitchExt extends Model
{
    /**
     * @var switchList[]
     */
    public $switchList;
    protected $_name = [
        'switchList' => 'SwitchList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->switchList) {
            $res['SwitchList'] = [];
            if (null !== $this->switchList && \is_array($this->switchList)) {
                $n = 0;
                foreach ($this->switchList as $item) {
                    $res['SwitchList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return multiKeySwitchExt
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SwitchList'])) {
            if (!empty($map['SwitchList'])) {
                $model->switchList = [];
                $n                 = 0;
                foreach ($map['SwitchList'] as $item) {
                    $model->switchList[$n++] = null !== $item ? switchList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
