<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class BandwidthPackageAddAcceleratorResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $accelerators;

    /**
     * @var string
     */
    public $bandwidthPackageId;

    /**
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
