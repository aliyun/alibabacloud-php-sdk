<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\CreateCustomRoutingEndpointGroupsRequest;

use AlibabaCloud\SDK\Ga\V20191120\Models\CreateCustomRoutingEndpointGroupsRequest\endpointGroupConfigurations\destinationConfigurations;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateCustomRoutingEndpointGroupsRequest\endpointGroupConfigurations\endpointConfigurations;
use AlibabaCloud\Tea\Model;

class endpointGroupConfigurations extends Model
{
    /**
     * @description The description of the endpoint group.
     *
     * You can specify up to five endpoint group descriptions.
     * @example test
     *
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
     * @description The ID of the region in which to create the endpoint group.
     *
     * You can specify up to five region IDs.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $endpointGroupRegion;

    /**
     * @description The name of the endpoint group.
     *
     * You can specify up to five endpoint group names.
     * @example test
     *
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
     * @return endpointGroupConfigurations
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
