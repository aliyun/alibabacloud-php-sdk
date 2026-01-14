<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;

class DeleteCustomRoutingEndpointsRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $endpointGroupId;

    /**
     * @var string[]
     */
    public $endpointIds;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'endpointGroupId' => 'EndpointGroupId',
        'endpointIds' => 'EndpointIds',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->endpointIds)) {
            Model::validateArray($this->endpointIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->endpointGroupId) {
            $res['EndpointGroupId'] = $this->endpointGroupId;
        }

        if (null !== $this->endpointIds) {
            if (\is_array($this->endpointIds)) {
                $res['EndpointIds'] = [];
                $n1 = 0;
                foreach ($this->endpointIds as $item1) {
                    $res['EndpointIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['EndpointGroupId'])) {
            $model->endpointGroupId = $map['EndpointGroupId'];
        }

        if (isset($map['EndpointIds'])) {
            if (!empty($map['EndpointIds'])) {
                $model->endpointIds = [];
                $n1 = 0;
                foreach ($map['EndpointIds'] as $item1) {
                    $model->endpointIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
