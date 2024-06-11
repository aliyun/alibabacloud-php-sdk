<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class CheckResourceStockRequest extends Model
{
    /**
     * @example acp.basic.small
     *
     * @var string
     */
    public $acpSpecId;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $bizRegionId;

    /**
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'acpSpecId'   => 'AcpSpecId',
        'bizRegionId' => 'BizRegionId',
        'zoneId'      => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acpSpecId) {
            $res['AcpSpecId'] = $this->acpSpecId;
        }
        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckResourceStockRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcpSpecId'])) {
            $model->acpSpecId = $map['AcpSpecId'];
        }
        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
