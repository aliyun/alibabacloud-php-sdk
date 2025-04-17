<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gwlb\V20240415\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\GetListenerAttributeResponseBody\tags;

class GetListenerAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $listenerDescription;

    /**
     * @var string
     */
    public $listenerId;

    /**
     * @var string
     */
    public $listenerStatus;

    /**
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $serverGroupId;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'listenerDescription' => 'ListenerDescription',
        'listenerId' => 'ListenerId',
        'listenerStatus' => 'ListenerStatus',
        'loadBalancerId' => 'LoadBalancerId',
        'regionId' => 'RegionId',
        'requestId' => 'RequestId',
        'serverGroupId' => 'ServerGroupId',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
