<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateBasicAccelerateIpEndpointRelationsRequest\accelerateIpEndpointRelations;

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
        'acceleratorId' => 'AcceleratorId',
        'clientToken' => 'ClientToken',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->accelerateIpEndpointRelations)) {
            Model::validateArray($this->accelerateIpEndpointRelations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accelerateIpEndpointRelations) {
            if (\is_array($this->accelerateIpEndpointRelations)) {
                $res['AccelerateIpEndpointRelations'] = [];
                $n1 = 0;
                foreach ($this->accelerateIpEndpointRelations as $item1) {
                    $res['AccelerateIpEndpointRelations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccelerateIpEndpointRelations'])) {
            if (!empty($map['AccelerateIpEndpointRelations'])) {
                $model->accelerateIpEndpointRelations = [];
                $n1 = 0;
                foreach ($map['AccelerateIpEndpointRelations'] as $item1) {
                    $model->accelerateIpEndpointRelations[$n1] = accelerateIpEndpointRelations::fromMap($item1);
                    ++$n1;
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
