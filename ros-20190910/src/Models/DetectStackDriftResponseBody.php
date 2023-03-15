<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class DetectStackDriftResponseBody extends Model
{
    /**
     * @description The ID of the drift detection.
     *
     * @example a7044f0d-6f2e-4128-a307-4524ef88****
     *
     * @var string
     */
    public $driftDetectionId;

    /**
     * @description The ID of the request.
     *
     * @example B288A0BE-D927-4888-B0F7-B35EF84B6E6
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'driftDetectionId' => 'DriftDetectionId',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->driftDetectionId) {
            $res['DriftDetectionId'] = $this->driftDetectionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectStackDriftResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DriftDetectionId'])) {
            $model->driftDetectionId = $map['DriftDetectionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
