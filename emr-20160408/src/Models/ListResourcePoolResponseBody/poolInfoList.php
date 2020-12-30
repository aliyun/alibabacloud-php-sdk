<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListResourcePoolResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListResourcePoolResponseBody\poolInfoList\poolInfo;
use AlibabaCloud\Tea\Model;

class poolInfoList extends Model
{
    /**
     * @var poolInfo[]
     */
    public $poolInfo;
    protected $_name = [
        'poolInfo' => 'PoolInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->poolInfo) {
            $res['PoolInfo'] = [];
            if (null !== $this->poolInfo && \is_array($this->poolInfo)) {
                $n = 0;
                foreach ($this->poolInfo as $item) {
                    $res['PoolInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return poolInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PoolInfo'])) {
            if (!empty($map['PoolInfo'])) {
                $model->poolInfo = [];
                $n               = 0;
                foreach ($map['PoolInfo'] as $item) {
                    $model->poolInfo[$n++] = null !== $item ? poolInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
