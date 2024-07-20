<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\CreateIpSetsRequest\accelerateRegion;
use AlibabaCloud\Tea\Model;

class CreateIpSetsRequest extends Model
{
    /**
     * @description The information about the acceleration regions.
     *
     * This parameter is required.
     * @var accelerateRegion[]
     */
    public $accelerateRegion;

    /**
     * @description The GA instance ID.
     *
     * This parameter is required.
     * @example ga-bp1yeeq8yfoyszmqy****
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     * @example 1F4B6A4A-C89E-489E-BAF1-52777EE148EF
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The region ID of the GA instance. Set the value to **cn-hangzhou**.
     *
     * This parameter is required.
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
