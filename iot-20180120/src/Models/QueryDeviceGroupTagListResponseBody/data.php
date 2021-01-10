<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceGroupTagListResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceGroupTagListResponseBody\data\groupTagInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var groupTagInfo[]
     */
    public $groupTagInfo;
    protected $_name = [
        'groupTagInfo' => 'GroupTagInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupTagInfo) {
            $res['GroupTagInfo'] = [];
            if (null !== $this->groupTagInfo && \is_array($this->groupTagInfo)) {
                $n = 0;
                foreach ($this->groupTagInfo as $item) {
                    $res['GroupTagInfo'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['GroupTagInfo'])) {
            if (!empty($map['GroupTagInfo'])) {
                $model->groupTagInfo = [];
                $n                   = 0;
                foreach ($map['GroupTagInfo'] as $item) {
                    $model->groupTagInfo[$n++] = null !== $item ? groupTagInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
