<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\CreateCustomRoutingEndpointGroupsRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateCustomRoutingEndpointGroupsRequest\endpointGroupConfigurations\destinationConfigurations;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateCustomRoutingEndpointGroupsRequest\endpointGroupConfigurations\endpointConfigurations;

class endpointGroupConfigurations extends Model
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
        'description' => 'Description',
        'destinationConfigurations' => 'DestinationConfigurations',
        'endpointConfigurations' => 'EndpointConfigurations',
        'endpointGroupRegion' => 'EndpointGroupRegion',
        'name' => 'Name',
    ];

    public function validate()
    {
        if (\is_array($this->destinationConfigurations)) {
            Model::validateArray($this->destinationConfigurations);
        }
        if (\is_array($this->endpointConfigurations)) {
            Model::validateArray($this->endpointConfigurations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->destinationConfigurations) {
            if (\is_array($this->destinationConfigurations)) {
                $res['DestinationConfigurations'] = [];
                $n1 = 0;
                foreach ($this->destinationConfigurations as $item1) {
                    $res['DestinationConfigurations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endpointConfigurations) {
            if (\is_array($this->endpointConfigurations)) {
                $res['EndpointConfigurations'] = [];
                $n1 = 0;
                foreach ($this->endpointConfigurations as $item1) {
                    $res['EndpointConfigurations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DestinationConfigurations'])) {
            if (!empty($map['DestinationConfigurations'])) {
                $model->destinationConfigurations = [];
                $n1 = 0;
                foreach ($map['DestinationConfigurations'] as $item1) {
                    $model->destinationConfigurations[$n1] = destinationConfigurations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EndpointConfigurations'])) {
            if (!empty($map['EndpointConfigurations'])) {
                $model->endpointConfigurations = [];
                $n1 = 0;
                foreach ($map['EndpointConfigurations'] as $item1) {
                    $model->endpointConfigurations[$n1] = endpointConfigurations::fromMap($item1);
                    ++$n1;
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
