<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\UpdateEndpointGroupRequest;

use AlibabaCloud\Tea\Model;

class portOverrides extends Model
{
    /**
     * @var int
     */
    public $endpointPort;

    /**
     * @var int
     */
    public $listenerPort;
    protected $_name = [
        'endpointPort' => 'EndpointPort',
        'listenerPort' => 'ListenerPort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpointPort) {
            $res['EndpointPort'] = $this->endpointPort;
        }
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
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
        if (isset($map['EndpointPort'])) {
            $model->endpointPort = $map['EndpointPort'];
        }
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }

        return $model;
    }
}
