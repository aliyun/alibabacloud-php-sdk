<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\CreateListenerRequest\endpointGroupConfigurations;

use AlibabaCloud\Tea\Model;

class portOverrides extends Model
{
    /**
     * @description The endpoint port that is mapped to the listening port.
     *
     * >
     *   You can configure endpoint groups and endpoints for an intelligent routing listener only if the **Type** parameter is set to **Standard**.
     *   Only HTTP and HTTPS intelligent routing listeners support port mappings.
     *
     * @example 80
     *
     * @var int
     */
    public $endpointPort;

    /**
     * @description The listening port that is mapped to the endpoint port.
     *
     * >
     *   You can configure endpoint groups and endpoints for an intelligent routing listener only if the **Type** parameter is set to **Standard**.
     *   Only HTTP and HTTPS intelligent routing listeners support port mappings.
     *   The listening port in a port mapping must be the one used by the current listener.
     *
     * @example 443
     *
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
