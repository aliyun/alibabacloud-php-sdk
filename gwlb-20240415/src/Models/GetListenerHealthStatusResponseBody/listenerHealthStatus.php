<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gwlb\V20240415\Models\GetListenerHealthStatusResponseBody;

use AlibabaCloud\SDK\Gwlb\V20240415\Models\GetListenerHealthStatusResponseBody\listenerHealthStatus\serverGroupInfos;
use AlibabaCloud\Tea\Model;

class listenerHealthStatus extends Model
{
    /**
     * @example lsn-sg8aha6pzjavvo****
     *
     * @var string
     */
    public $listenerId;

    /**
     * @var serverGroupInfos[]
     */
    public $serverGroupInfos;
    protected $_name = [
        'listenerId'       => 'ListenerId',
        'serverGroupInfos' => 'ServerGroupInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
        if (null !== $this->serverGroupInfos) {
            $res['ServerGroupInfos'] = [];
            if (null !== $this->serverGroupInfos && \is_array($this->serverGroupInfos)) {
                $n = 0;
                foreach ($this->serverGroupInfos as $item) {
                    $res['ServerGroupInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listenerHealthStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
        if (isset($map['ServerGroupInfos'])) {
            if (!empty($map['ServerGroupInfos'])) {
                $model->serverGroupInfos = [];
                $n                       = 0;
                foreach ($map['ServerGroupInfos'] as $item) {
                    $model->serverGroupInfos[$n++] = null !== $item ? serverGroupInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
