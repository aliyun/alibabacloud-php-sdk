<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class GetErRouteEntryRequest extends Model
{
    /**
     * @description Lingjun HUB ID
     *
     * This parameter is required.
     * @example er-kkopgtne
     *
     * @var string
     */
    public $erId;

    /**
     * @description The ID of the route entry.
     *
     * This parameter is required.
     * @example er-rte-4q0jbylz
     *
     * @var string
     */
    public $erRouteEntryId;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'erId'           => 'ErId',
        'erRouteEntryId' => 'ErRouteEntryId',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->erId) {
            $res['ErId'] = $this->erId;
        }
        if (null !== $this->erRouteEntryId) {
            $res['ErRouteEntryId'] = $this->erRouteEntryId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetErRouteEntryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErId'])) {
            $model->erId = $map['ErId'];
        }
        if (isset($map['ErRouteEntryId'])) {
            $model->erRouteEntryId = $map['ErRouteEntryId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
