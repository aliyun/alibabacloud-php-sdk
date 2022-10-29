<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\CreateListenerRequest;

use AlibabaCloud\SDK\Ga\V20191120\Models\CreateListenerRequest\customRoutingEndpointGroupConfigurations\destinationConfigurations;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateListenerRequest\customRoutingEndpointGroupConfigurations\endpointConfigurations;
use AlibabaCloud\Tea\Model;

class customRoutingEndpointGroupConfigurations extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var destinationConfigurations[]
     */
    public $destinationConfigurations;

    /**
     * @var endpointConfigurations[]
     */
    public $endpointConfigurations;

    /**
     * @var string
     */
    public $endpointGroupRegion;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'description'               => 'Description',
        'destinationConfigurations' => 'DestinationConfigurations',
        'endpointConfigurations'    => 'EndpointConfigurations',
        'endpointGroupRegion'       => 'EndpointGroupRegion',
        'name'                      => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->destinationConfigurations) {
            $res['DestinationConfigurations'] = [];
            if (null !== $this->destinationConfigurations && \is_array($this->destinationConfigurations)) {
                $n = 0;
                foreach ($this->destinationConfigurations as $item) {
                    $res['DestinationConfigurations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->endpointConfigurations) {
            $res['EndpointConfigurations'] = [];
            if (null !== $this->endpointConfigurations && \is_array($this->endpointConfigurations)) {
                $n = 0;
                foreach ($this->endpointConfigurations as $item) {
                    $res['EndpointConfigurations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->endpointGroupRegion) {
            $res['EndpointGroupRegion'] = $this->endpointGroupRegion;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customRoutingEndpointGroupConfigurations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DestinationConfigurations'])) {
            if (!empty($map['DestinationConfigurations'])) {
                $model->destinationConfigurations = [];
                $n                                = 0;
                foreach ($map['DestinationConfigurations'] as $item) {
                    $model->destinationConfigurations[$n++] = null !== $item ? destinationConfigurations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EndpointConfigurations'])) {
            if (!empty($map['EndpointConfigurations'])) {
                $model->endpointConfigurations = [];
                $n                             = 0;
                foreach ($map['EndpointConfigurations'] as $item) {
                    $model->endpointConfigurations[$n++] = null !== $item ? endpointConfigurations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EndpointGroupRegion'])) {
            $model->endpointGroupRegion = $map['EndpointGroupRegion'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
