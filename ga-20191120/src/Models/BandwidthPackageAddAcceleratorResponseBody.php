<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class BandwidthPackageAddAcceleratorResponseBody extends Model
{
    /**
     * @description The ID of the GA instance.
     *
     * @var string[]
     */
    public $accelerators;

    /**
     * @description The ID of the bandwidth plan.
     *
     * @example gbwp-bp1sgzldyj6b4q7cx****
     *
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @description The ID of the request.
     *
     * @example B7770CB9-9745-4FE5-9EDA-D14B01A12A50
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accelerators'       => 'Accelerators',
        'bandwidthPackageId' => 'BandwidthPackageId',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accelerators) {
            $res['Accelerators'] = $this->accelerators;
        }
        if (null !== $this->bandwidthPackageId) {
            $res['BandwidthPackageId'] = $this->bandwidthPackageId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BandwidthPackageAddAcceleratorResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accelerators'])) {
            if (!empty($map['Accelerators'])) {
                $model->accelerators = $map['Accelerators'];
            }
        }
        if (isset($map['BandwidthPackageId'])) {
            $model->bandwidthPackageId = $map['BandwidthPackageId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
