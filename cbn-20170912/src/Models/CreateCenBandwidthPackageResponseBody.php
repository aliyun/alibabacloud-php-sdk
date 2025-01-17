<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;

class CreateCenBandwidthPackageResponseBody extends Model
{
    /**
     * @var string
     */
    public $cenBandwidthPackageId;
    /**
     * @var string
     */
    public $cenBandwidthPackageOrderId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
