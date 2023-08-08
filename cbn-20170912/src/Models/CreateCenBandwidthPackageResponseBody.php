<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class CreateCenBandwidthPackageResponseBody extends Model
{
    /**
     * @description The ID of the bandwidth plan.
     *
     * @example cenbwp-4c2zaavbvh5fx****
     *
     * @var string
     */
    public $cenBandwidthPackageId;

    /**
     * @description The ID of the order for the bandwidth plan.
     *
     * @example 20156420004****
     *
     * @var string
     */
    public $cenBandwidthPackageOrderId;

    /**
     * @description The ID of the request.
     *
     * @example E4B345CD-2CBA-4881-AF6D-E5D9BAE1CA7B
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cenBandwidthPackageId'      => 'CenBandwidthPackageId',
        'cenBandwidthPackageOrderId' => 'CenBandwidthPackageOrderId',
        'requestId'                  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenBandwidthPackageId) {
            $res['CenBandwidthPackageId'] = $this->cenBandwidthPackageId;
        }
        if (null !== $this->cenBandwidthPackageOrderId) {
            $res['CenBandwidthPackageOrderId'] = $this->cenBandwidthPackageOrderId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCenBandwidthPackageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenBandwidthPackageId'])) {
            $model->cenBandwidthPackageId = $map['CenBandwidthPackageId'];
        }
        if (isset($map['CenBandwidthPackageOrderId'])) {
            $model->cenBandwidthPackageOrderId = $map['CenBandwidthPackageOrderId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
