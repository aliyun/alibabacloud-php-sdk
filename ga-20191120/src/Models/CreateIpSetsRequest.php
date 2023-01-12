<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\CreateIpSetsRequest\accelerateRegion;
use AlibabaCloud\Tea\Model;

class CreateIpSetsRequest extends Model
{
    /**
     * @var accelerateRegion[]
     */
    public $accelerateRegion;

    /**
     * @description The ID of the GA instance.
     *
     * @example ga-bp1yeeq8yfoyszmqy****
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among different requests. ClientToken can contain only ASCII characters.
     *
     * >  If you do not set this parameter, **ClientToken** is set to the value of **RequestId**. The value of **RequestId** may be different for each API request.
     * @example 1F4B6A4A-C89E-489E-BAF1-52777EE148EF
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the region where the GA instance is deployed. Set the value to **cn-hangzhou**.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'accelerateRegion' => 'AccelerateRegion',
        'acceleratorId'    => 'AcceleratorId',
        'clientToken'      => 'ClientToken',
        'regionId'         => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accelerateRegion) {
            $res['AccelerateRegion'] = [];
            if (null !== $this->accelerateRegion && \is_array($this->accelerateRegion)) {
                $n = 0;
                foreach ($this->accelerateRegion as $item) {
                    $res['AccelerateRegion'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return CreateIpSetsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccelerateRegion'])) {
            if (!empty($map['AccelerateRegion'])) {
                $model->accelerateRegion = [];
                $n                       = 0;
                foreach ($map['AccelerateRegion'] as $item) {
                    $model->accelerateRegion[$n++] = null !== $item ? accelerateRegion::fromMap($item) : $item;
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
