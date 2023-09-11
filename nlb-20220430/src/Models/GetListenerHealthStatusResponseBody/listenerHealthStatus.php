<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models\GetListenerHealthStatusResponseBody;

use AlibabaCloud\SDK\Nlb\V20220430\Models\GetListenerHealthStatusResponseBody\listenerHealthStatus\serverGroupInfos;
use AlibabaCloud\Tea\Model;

class listenerHealthStatus extends Model
{
    /**
     * @description The ID of the listener of the NLB instance.
     *
     * @example lsn-agkd9gmjx8nd85jjs0****
     *
     * @var string
     */
    public $listenerId;

    /**
     * @description The listening port.
     *
     * @example 80
     *
     * @var int
     */
    public $listenerPort;

    /**
     * @description The listening protocol. Valid values: **TCP**, **UDP**, and **TCPSSL**.
     *
     * @example TCPSSL
     *
     * @var string
     */
    public $listenerProtocol;

    /**
     * @description The information about the server groups.
     *
     * @var serverGroupInfos[]
     */
    public $serverGroupInfos;
    protected $_name = [
        'listenerId'       => 'ListenerId',
        'listenerPort'     => 'ListenerPort',
        'listenerProtocol' => 'ListenerProtocol',
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
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->listenerProtocol) {
            $res['ListenerProtocol'] = $this->listenerProtocol;
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
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['ListenerProtocol'])) {
            $model->listenerProtocol = $map['ListenerProtocol'];
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
