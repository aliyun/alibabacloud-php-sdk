<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\CreateListenerRequest\endpointGroupConfigurations;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
