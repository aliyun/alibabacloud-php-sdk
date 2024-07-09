<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeResolverAvailableZonesResponseBody;

use AlibabaCloud\Tea\Model;

class availableZones extends Model
{
    /**
     * @description The zone ID.
     *
     * @example cn-zhangjiakou-a
     *
     * @var string
     */
    public $azId;

    /**
     * @description The state of resources in the zone. Valid values:
     *
     *   NORMAL: The resources are in the normal state.
     *   SOLD_OUT: The resources are sold out.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'azId'   => 'AzId',
        'status' => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->azId) {
            $res['AzId'] = $this->azId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableZones
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AzId'])) {
            $model->azId = $map['AzId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
