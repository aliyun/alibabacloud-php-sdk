<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class GetVpdRouteEntryRequest extends Model
{
    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Lingjun CIDR block instance ID
     *
     * This parameter is required.
     * @example vpd-iv2zm1qf
     *
     * @var string
     */
    public $vpdId;

    /**
     * @description The ID of the route entry instance.
     *
     * This parameter is required.
     * @example vpd-rte-toekyqel
     *
     * @var string
     */
    public $vpdRouteEntryId;
    protected $_name = [
        'regionId'        => 'RegionId',
        'vpdId'           => 'VpdId',
        'vpdRouteEntryId' => 'VpdRouteEntryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
        }
        if (null !== $this->vpdRouteEntryId) {
            $res['VpdRouteEntryId'] = $this->vpdRouteEntryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVpdRouteEntryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }
        if (isset($map['VpdRouteEntryId'])) {
            $model->vpdRouteEntryId = $map['VpdRouteEntryId'];
        }

        return $model;
    }
}
