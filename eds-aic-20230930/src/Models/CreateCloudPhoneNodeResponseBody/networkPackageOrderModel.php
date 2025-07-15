<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateCloudPhoneNodeResponseBody;

use AlibabaCloud\Tea\Model;

class networkPackageOrderModel extends Model
{
    /**
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @var string
     */
    public $bandwidthPackageOrderId;
    protected $_name = [
        'bandwidthPackageId' => 'BandwidthPackageId',
        'bandwidthPackageOrderId' => 'BandwidthPackageOrderId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidthPackageId) {
            $res['BandwidthPackageId'] = $this->bandwidthPackageId;
        }
        if (null !== $this->bandwidthPackageOrderId) {
            $res['BandwidthPackageOrderId'] = $this->bandwidthPackageOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkPackageOrderModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandwidthPackageId'])) {
            $model->bandwidthPackageId = $map['BandwidthPackageId'];
        }
        if (isset($map['BandwidthPackageOrderId'])) {
            $model->bandwidthPackageOrderId = $map['BandwidthPackageOrderId'];
        }

        return $model;
    }
}
