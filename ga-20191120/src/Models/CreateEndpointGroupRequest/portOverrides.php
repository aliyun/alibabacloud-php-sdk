<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\CreateEndpointGroupRequest;

use AlibabaCloud\Tea\Model;

class portOverrides extends Model
{
    /**
     * @var int
     */
    public $listenerPort;

    /**
     * @var int
     */
    public $endpointPort;
    protected $_name = [
        'listenerPort' => 'ListenerPort',
        'endpointPort' => 'EndpointPort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->endpointPort) {
            $res['EndpointPort'] = $this->endpointPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return portOverrides
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['EndpointPort'])) {
            $model->endpointPort = $map['EndpointPort'];
        }

        return $model;
    }
}
