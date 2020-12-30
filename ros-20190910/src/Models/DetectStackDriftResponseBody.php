<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class DetectStackDriftResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $driftDetectionId;
    protected $_name = [
        'requestId'        => 'RequestId',
        'driftDetectionId' => 'DriftDetectionId',
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
        if (null !== $this->driftDetectionId) {
            $res['DriftDetectionId'] = $this->driftDetectionId;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DriftDetectionId'])) {
            $model->driftDetectionId = $map['DriftDetectionId'];
        }

        return $model;
    }
}
