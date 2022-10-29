<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\CreateCustomRoutingEndpointGroupsRequest\endpointGroupConfigurations;
use AlibabaCloud\Tea\Model;

class CreateCustomRoutingEndpointGroupsRequest extends Model
{
    /**
     * @var string
     */
    public $acceleratorId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var endpointGroupConfigurations[]
     */
    public $endpointGroupConfigurations;

    /**
     * @var string
     */
    public $listenerId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'acceleratorId'               => 'AcceleratorId',
        'clientToken'                 => 'ClientToken',
        'dryRun'                      => 'DryRun',
        'endpointGroupConfigurations' => 'EndpointGroupConfigurations',
        'listenerId'                  => 'ListenerId',
        'regionId'                    => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->endpointGroupConfigurations) {
            $res['EndpointGroupConfigurations'] = [];
            if (null !== $this->endpointGroupConfigurations && \is_array($this->endpointGroupConfigurations)) {
                $n = 0;
                foreach ($this->endpointGroupConfigurations as $item) {
                    $res['EndpointGroupConfigurations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCustomRoutingEndpointGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EndpointGroupConfigurations'])) {
            if (!empty($map['EndpointGroupConfigurations'])) {
                $model->endpointGroupConfigurations = [];
                $n                                  = 0;
                foreach ($map['EndpointGroupConfigurations'] as $item) {
                    $model->endpointGroupConfigurations[$n++] = null !== $item ? endpointGroupConfigurations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
