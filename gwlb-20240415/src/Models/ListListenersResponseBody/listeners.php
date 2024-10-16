<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gwlb\V20240415\Models\ListListenersResponseBody;

use AlibabaCloud\SDK\Gwlb\V20240415\Models\ListListenersResponseBody\listeners\tags;
use AlibabaCloud\Tea\Model;

class listeners extends Model
{
    /**
     * @example listener-description
     *
     * @var string
     */
    public $listenerDescription;

    /**
     * @example lsn-vu7folhh5ntm8u****
     *
     * @var string
     */
    public $listenerId;

    /**
     * @example Running
     *
     * @var string
     */
    public $listenerStatus;

    /**
     * @example gwlb-uf6hbeh795xlqln7g****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @example sgp-5yapcb422i51ru****
     *
     * @var string
     */
    public $serverGroupId;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'listenerDescription' => 'ListenerDescription',
        'listenerId'          => 'ListenerId',
        'listenerStatus'      => 'ListenerStatus',
        'loadBalancerId'      => 'LoadBalancerId',
        'serverGroupId'       => 'ServerGroupId',
        'tags'                => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listenerDescription) {
            $res['ListenerDescription'] = $this->listenerDescription;
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
        if (null !== $this->listenerStatus) {
            $res['ListenerStatus'] = $this->listenerStatus;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->serverGroupId) {
            $res['ServerGroupId'] = $this->serverGroupId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listeners
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ListenerDescription'])) {
            $model->listenerDescription = $map['ListenerDescription'];
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
        if (isset($map['ListenerStatus'])) {
            $model->listenerStatus = $map['ListenerStatus'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['ServerGroupId'])) {
            $model->serverGroupId = $map['ServerGroupId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
