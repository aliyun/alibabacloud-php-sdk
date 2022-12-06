<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\CreateBasicAccelerateIpEndpointRelationsRequest\accelerateIpEndpointRelations;
use AlibabaCloud\Tea\Model;

class CreateBasicAccelerateIpEndpointRelationsRequest extends Model
{
    /**
     * @var accelerateIpEndpointRelations[]
     */
    public $accelerateIpEndpointRelations;

    /**
     * @var string
     */
    public $acceleratorId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'accelerateIpEndpointRelations' => 'AccelerateIpEndpointRelations',
        'acceleratorId'                 => 'AcceleratorId',
        'clientToken'                   => 'ClientToken',
        'regionId'                      => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accelerateIpEndpointRelations) {
            $res['AccelerateIpEndpointRelations'] = [];
            if (null !== $this->accelerateIpEndpointRelations && \is_array($this->accelerateIpEndpointRelations)) {
                $n = 0;
                foreach ($this->accelerateIpEndpointRelations as $item) {
                    $res['AccelerateIpEndpointRelations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBasicAccelerateIpEndpointRelationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccelerateIpEndpointRelations'])) {
            if (!empty($map['AccelerateIpEndpointRelations'])) {
                $model->accelerateIpEndpointRelations = [];
                $n                                    = 0;
                foreach ($map['AccelerateIpEndpointRelations'] as $item) {
                    $model->accelerateIpEndpointRelations[$n++] = null !== $item ? accelerateIpEndpointRelations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
