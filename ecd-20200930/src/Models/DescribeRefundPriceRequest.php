<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeRefundPriceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $desktopId;

    /**
     * @example RemainRefund
     *
     * @var string
     */
    public $refundType;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'desktopId'  => 'DesktopId',
        'refundType' => 'RefundType',
        'regionId'   => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->refundType) {
            $res['RefundType'] = $this->refundType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRefundPriceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopId'])) {
            if (!empty($map['DesktopId'])) {
                $model->desktopId = $map['DesktopId'];
            }
        }
        if (isset($map['RefundType'])) {
            $model->refundType = $map['RefundType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
