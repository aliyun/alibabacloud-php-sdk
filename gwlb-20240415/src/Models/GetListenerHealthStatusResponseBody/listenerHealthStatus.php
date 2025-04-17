<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gwlb\V20240415\Models\GetListenerHealthStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\GetListenerHealthStatusResponseBody\listenerHealthStatus\serverGroupInfos;

class listenerHealthStatus extends Model
{
    /**
     * @var string
     */
    public $listenerId;

    /**
     * @var serverGroupInfos[]
     */
    public $serverGroupInfos;
    protected $_name = [
        'listenerId' => 'ListenerId',
        'serverGroupInfos' => 'ServerGroupInfos',
    ];

    public function validate()
    {
        if (\is_array($this->serverGroupInfos)) {
            Model::validateArray($this->serverGroupInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }

        if (null !== $this->serverGroupInfos) {
            if (\is_array($this->serverGroupInfos)) {
                $res['ServerGroupInfos'] = [];
                $n1 = 0;
                foreach ($this->serverGroupInfos as $item1) {
                    $res['ServerGroupInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }

        if (isset($map['ServerGroupInfos'])) {
            if (!empty($map['ServerGroupInfos'])) {
                $model->serverGroupInfos = [];
                $n1 = 0;
                foreach ($map['ServerGroupInfos'] as $item1) {
                    $model->serverGroupInfos[$n1++] = serverGroupInfos::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
