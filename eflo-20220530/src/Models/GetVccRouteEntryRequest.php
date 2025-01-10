<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class GetVccRouteEntryRequest extends Model
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
     * @description Lingjun Connection ID
     *
     * This parameter is required.
     * @example vcc-cn-zvp2w222001
     *
     * @var string
     */
    public $vccId;

    /**
     * @description The ID of the route entry.
     *
     * This parameter is required.
     * @example vcc-rte-31ocvdhq
     *
     * @var string
     */
    public $vccRouteEntryId;
    protected $_name = [
        'regionId'        => 'RegionId',
        'vccId'           => 'VccId',
        'vccRouteEntryId' => 'VccRouteEntryId',
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
        if (null !== $this->vccId) {
            $res['VccId'] = $this->vccId;
        }
        if (null !== $this->vccRouteEntryId) {
            $res['VccRouteEntryId'] = $this->vccRouteEntryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVccRouteEntryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VccId'])) {
            $model->vccId = $map['VccId'];
        }
        if (isset($map['VccRouteEntryId'])) {
            $model->vccRouteEntryId = $map['VccRouteEntryId'];
        }

        return $model;
    }
}
