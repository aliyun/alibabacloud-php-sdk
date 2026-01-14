<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;

class DeleteCustomRoutingEndpointGroupDestinationsRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string[]
     */
    public $destinationIds;

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
        'destinationIds' => 'DestinationIds',
        'dryRun' => 'DryRun',
        'endpointGroupId' => 'EndpointGroupId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->destinationIds)) {
            Model::validateArray($this->destinationIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->destinationIds) {
            if (\is_array($this->destinationIds)) {
                $res['DestinationIds'] = [];
                $n1 = 0;
                foreach ($this->destinationIds as $item1) {
                    $res['DestinationIds'][$n1] = $item1;
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

        if (isset($map['DestinationIds'])) {
            if (!empty($map['DestinationIds'])) {
                $model->destinationIds = [];
                $n1 = 0;
                foreach ($map['DestinationIds'] as $item1) {
                    $model->destinationIds[$n1] = $item1;
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
