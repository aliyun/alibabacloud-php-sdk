<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponseBody\instances\clusterState\userSlbDto;

use AlibabaCloud\Dara\Model;

class userSlbListeners extends Model
{
    /**
     * @var string
     */
    public $listenersStatus;
    /**
     * @var string
     */
    public $port;
    protected $_name = [
        'listenersStatus' => 'ListenersStatus',
        'port'            => 'Port',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->listenersStatus) {
            $res['ListenersStatus'] = $this->listenersStatus;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
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
        if (isset($map['ListenersStatus'])) {
            $model->listenersStatus = $map['ListenersStatus'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}
