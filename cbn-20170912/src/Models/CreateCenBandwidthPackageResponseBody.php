<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class CreateCenBandwidthPackageResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $cenBandwidthPackageId;

    /**
     * @var string
     */
    public $cenBandwidthPackageOrderId;
    protected $_name = [
        'requestId'                  => 'RequestId',
        'cenBandwidthPackageId'      => 'CenBandwidthPackageId',
        'cenBandwidthPackageOrderId' => 'CenBandwidthPackageOrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->cenBandwidthPackageId) {
            $res['CenBandwidthPackageId'] = $this->cenBandwidthPackageId;
        }
        if (null !== $this->cenBandwidthPackageOrderId) {
            $res['CenBandwidthPackageOrderId'] = $this->cenBandwidthPackageOrderId;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CenBandwidthPackageId'])) {
            $model->cenBandwidthPackageId = $map['CenBandwidthPackageId'];
        }
        if (isset($map['CenBandwidthPackageOrderId'])) {
            $model->cenBandwidthPackageOrderId = $map['CenBandwidthPackageOrderId'];
        }

        return $model;
    }
}
