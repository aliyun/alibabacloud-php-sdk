<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceGroupByDeviceResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceGroupByDeviceResponseBody\groupInfos\groupInfo;
use AlibabaCloud\Tea\Model;

class groupInfos extends Model
{
    /**
     * @var groupInfo[]
     */
    public $groupInfo;
    protected $_name = [
        'groupInfo' => 'GroupInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupInfo) {
            $res['GroupInfo'] = [];
            if (null !== $this->groupInfo && \is_array($this->groupInfo)) {
                $n = 0;
                foreach ($this->groupInfo as $item) {
                    $res['GroupInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupInfo'])) {
            if (!empty($map['GroupInfo'])) {
                $model->groupInfo = [];
                $n                = 0;
                foreach ($map['GroupInfo'] as $item) {
                    $model->groupInfo[$n++] = null !== $item ? groupInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
