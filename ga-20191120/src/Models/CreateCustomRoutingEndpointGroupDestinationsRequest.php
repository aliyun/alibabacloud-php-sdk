<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateCustomRoutingEndpointGroupDestinationsRequest\destinationConfigurations;

class CreateCustomRoutingEndpointGroupDestinationsRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var destinationConfigurations[]
     */
    public $destinationConfigurations;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $endpointGroupId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'destinationConfigurations' => 'DestinationConfigurations',
        'dryRun' => 'DryRun',
        'endpointGroupId' => 'EndpointGroupId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->destinationConfigurations)) {
            Model::validateArray($this->destinationConfigurations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->endpointGroupId) {
            $res['EndpointGroupId'] = $this->endpointGroupId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['EndpointGroupId'])) {
            $model->endpointGroupId = $map['EndpointGroupId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
