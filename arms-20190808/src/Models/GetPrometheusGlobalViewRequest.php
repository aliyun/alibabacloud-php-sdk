<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GetPrometheusGlobalViewRequest extends Model
{
    /**
     * @description The ID of the global aggregation instance.
     *
     * This parameter is required.
     * @example global-v2-cn-1478326682034601-vss8pd0i
     *
     * @var string
     */
    public $globalViewClusterId;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'globalViewClusterId' => 'GlobalViewClusterId',
        'regionId'            => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->globalViewClusterId) {
            $res['GlobalViewClusterId'] = $this->globalViewClusterId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPrometheusGlobalViewRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GlobalViewClusterId'])) {
            $model->globalViewClusterId = $map['GlobalViewClusterId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
