<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListResourcePoolResponseBody\poolInfoList\poolInfo\queueList;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListResourcePoolResponseBody\poolInfoList\poolInfo\queueList\queue\ecmResourcePoolConfigList;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListResourcePoolResponseBody\poolInfoList\poolInfo\queueList\queue\ecmResourceQueue;
use AlibabaCloud\Tea\Model;

class queue extends Model
{
    /**
     * @var ecmResourcePoolConfigList
     */
    public $ecmResourcePoolConfigList;

    /**
     * @var ecmResourceQueue
     */
    public $ecmResourceQueue;
    protected $_name = [
        'ecmResourcePoolConfigList' => 'EcmResourcePoolConfigList',
        'ecmResourceQueue'          => 'EcmResourceQueue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecmResourcePoolConfigList) {
            $res['EcmResourcePoolConfigList'] = null !== $this->ecmResourcePoolConfigList ? $this->ecmResourcePoolConfigList->toMap() : null;
        }
        if (null !== $this->ecmResourceQueue) {
            $res['EcmResourceQueue'] = null !== $this->ecmResourceQueue ? $this->ecmResourceQueue->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return queue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcmResourcePoolConfigList'])) {
            $model->ecmResourcePoolConfigList = ecmResourcePoolConfigList::fromMap($map['EcmResourcePoolConfigList']);
        }
        if (isset($map['EcmResourceQueue'])) {
            $model->ecmResourceQueue = ecmResourceQueue::fromMap($map['EcmResourceQueue']);
        }

        return $model;
    }
}
