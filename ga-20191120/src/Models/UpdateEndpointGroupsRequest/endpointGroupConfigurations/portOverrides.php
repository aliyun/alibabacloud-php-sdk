<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\UpdateEndpointGroupsRequest\endpointGroupConfigurations;

use AlibabaCloud\Tea\Model;

class portOverrides extends Model
{
    /**
     * @description The endpoint port.
     *
     * Valid values: **1** to **65499**.
     * @example 80
     *
     * @var int
     */
    public $endpointPort;

    /**
     * @description The listener port.
     *
     * Valid values: **1** to **65499**.
     *
     * > *   Only HTTP and HTTPS listeners support port mappings.
     * >*   The listener port in a port mapping must be the port that is used by the current listener.
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
