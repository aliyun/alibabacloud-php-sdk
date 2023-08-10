<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Tea\Model;

class ListNetworkAccessEndpointAvailableZonesRequest extends Model
{
    /**
     * @description 专属网络端点支持的地域
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $naeRegionId;
    protected $_name = [
        'naeRegionId' => 'NaeRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->naeRegionId) {
            $res['NaeRegionId'] = $this->naeRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNetworkAccessEndpointAvailableZonesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NaeRegionId'])) {
            $model->naeRegionId = $map['NaeRegionId'];
        }

        return $model;
    }
}
