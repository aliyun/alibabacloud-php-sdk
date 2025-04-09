<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models\GetListenerHealthStatusResponseBody\listenerHealthStatus;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Nlb\V20220430\Models\GetListenerHealthStatusResponseBody\listenerHealthStatus\serverGroupInfos\nonNormalServers;

class serverGroupInfos extends Model
{
    /**
     * @var bool
     */
    public $heathCheckEnabled;

    /**
     * @var nonNormalServers[]
     */
    public $nonNormalServers;

    /**
     * @var string
     */
    public $serverGroupId;
    protected $_name = [
        'heathCheckEnabled' => 'HeathCheckEnabled',
        'nonNormalServers' => 'NonNormalServers',
        'serverGroupId' => 'ServerGroupId',
    ];

    public function validate()
    {
        if (\is_array($this->nonNormalServers)) {
            Model::validateArray($this->nonNormalServers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->heathCheckEnabled) {
            $res['HeathCheckEnabled'] = $this->heathCheckEnabled;
        }

        if (null !== $this->nonNormalServers) {
            if (\is_array($this->nonNormalServers)) {
                $res['NonNormalServers'] = [];
                $n1 = 0;
                foreach ($this->nonNormalServers as $item1) {
                    $res['NonNormalServers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->serverGroupId) {
            $res['ServerGroupId'] = $this->serverGroupId;
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
        if (isset($map['HeathCheckEnabled'])) {
            $model->heathCheckEnabled = $map['HeathCheckEnabled'];
        }

        if (isset($map['NonNormalServers'])) {
            if (!empty($map['NonNormalServers'])) {
                $model->nonNormalServers = [];
                $n1 = 0;
                foreach ($map['NonNormalServers'] as $item1) {
                    $model->nonNormalServers[$n1++] = nonNormalServers::fromMap($item1);
                }
            }
        }

        if (isset($map['ServerGroupId'])) {
            $model->serverGroupId = $map['ServerGroupId'];
        }

        return $model;
    }
}
