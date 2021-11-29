<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListResourcePoolResponseBody\poolInfoList;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListResourcePoolResponseBody\poolInfoList\poolInfo\ecmResourcePool;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListResourcePoolResponseBody\poolInfoList\poolInfo\ecmResourcePoolConfigList;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListResourcePoolResponseBody\poolInfoList\poolInfo\queueList;
use AlibabaCloud\Tea\Model;

class poolInfo extends Model
{
    /**
     * @var ecmResourcePool
     */
    public $ecmResourcePool;

    /**
     * @var ecmResourcePoolConfigList
     */
    public $ecmResourcePoolConfigList;

    /**
     * @var queueList
     */
    public $queueList;
    protected $_name = [
        'ecmResourcePool'           => 'EcmResourcePool',
        'ecmResourcePoolConfigList' => 'EcmResourcePoolConfigList',
        'queueList'                 => 'QueueList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecmResourcePool) {
            $res['EcmResourcePool'] = null !== $this->ecmResourcePool ? $this->ecmResourcePool->toMap() : null;
        }
        if (null !== $this->ecmResourcePoolConfigList) {
            $res['EcmResourcePoolConfigList'] = null !== $this->ecmResourcePoolConfigList ? $this->ecmResourcePoolConfigList->toMap() : null;
        }
        if (null !== $this->queueList) {
            $res['QueueList'] = null !== $this->queueList ? $this->queueList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return poolInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcmResourcePool'])) {
            $model->ecmResourcePool = ecmResourcePool::fromMap($map['EcmResourcePool']);
        }
        if (isset($map['EcmResourcePoolConfigList'])) {
            $model->ecmResourcePoolConfigList = ecmResourcePoolConfigList::fromMap($map['EcmResourcePoolConfigList']);
        }
        if (isset($map['QueueList'])) {
            $model->queueList = queueList::fromMap($map['QueueList']);
        }

        return $model;
    }
}
