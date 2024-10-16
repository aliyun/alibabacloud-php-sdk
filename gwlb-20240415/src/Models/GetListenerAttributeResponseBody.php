<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gwlb\V20240415\Models;

use AlibabaCloud\SDK\Gwlb\V20240415\Models\GetListenerAttributeResponseBody\tags;
use AlibabaCloud\Tea\Model;

class GetListenerAttributeResponseBody extends Model
{
    /**
     * @example listener_description
     *
     * @var string
     */
    public $listenerDescription;

    /**
     * @example lsn-3kbj3587mqhm3p****
     *
     * @var string
     */
    public $listenerId;

    /**
     * @example Provisioning
     *
     * @var string
     */
    public $listenerStatus;

    /**
     * @example gwlb-te609d6696632f76****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 75CC3312-7757-5EE1-90D8-49CEA66608AE
     *
     * @var string
     */
    public $requestId;

    /**
     * @example sgp-sp8d2r6y7t0xtl****
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
        'regionId'            => 'RegionId',
        'requestId'           => 'RequestId',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return GetListenerAttributeResponseBody
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
