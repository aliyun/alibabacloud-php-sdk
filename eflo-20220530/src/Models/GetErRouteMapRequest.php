<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class GetErRouteMapRequest extends Model
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
     * @description routing policy ID
     *
     * This parameter is required.
     * @example er-rmap-uwglhzom
     *
     * @var string
     */
    public $erRouteMapId;

    /**
     * @description The region ID.
     *
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'erId'         => 'ErId',
        'erRouteMapId' => 'ErRouteMapId',
        'regionId'     => 'RegionId',
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
        if (null !== $this->erRouteMapId) {
            $res['ErRouteMapId'] = $this->erRouteMapId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetErRouteMapRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErId'])) {
            $model->erId = $map['ErId'];
        }
        if (isset($map['ErRouteMapId'])) {
            $model->erRouteMapId = $map['ErRouteMapId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
