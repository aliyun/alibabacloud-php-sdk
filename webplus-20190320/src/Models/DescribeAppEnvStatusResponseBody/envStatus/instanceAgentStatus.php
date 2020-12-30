<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeAppEnvStatusResponseBody\envStatus;

use AlibabaCloud\Tea\Model;

class instanceAgentStatus extends Model
{
    /**
     * @var int
     */
    public $connectedInstances;

    /**
     * @var int
     */
    public $disconnectedInstances;
    protected $_name = [
        'connectedInstances'    => 'ConnectedInstances',
        'disconnectedInstances' => 'DisconnectedInstances',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectedInstances) {
            $res['ConnectedInstances'] = $this->connectedInstances;
        }
        if (null !== $this->disconnectedInstances) {
            $res['DisconnectedInstances'] = $this->disconnectedInstances;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceAgentStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectedInstances'])) {
            $model->connectedInstances = $map['ConnectedInstances'];
        }
        if (isset($map['DisconnectedInstances'])) {
            $model->disconnectedInstances = $map['DisconnectedInstances'];
        }

        return $model;
    }
}
