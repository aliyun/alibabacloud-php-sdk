<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\ApplyCoordinationForMonitoringResponseBody\coordinateFlowModels;
use AlibabaCloud\Tea\Model;

class ApplyCoordinationForMonitoringResponseBody extends Model
{
    /**
     * @var coordinateFlowModels[]
     */
    public $coordinateFlowModels;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'coordinateFlowModels' => 'CoordinateFlowModels',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coordinateFlowModels) {
            $res['CoordinateFlowModels'] = [];
            if (null !== $this->coordinateFlowModels && \is_array($this->coordinateFlowModels)) {
                $n = 0;
                foreach ($this->coordinateFlowModels as $item) {
                    $res['CoordinateFlowModels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyCoordinationForMonitoringResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CoordinateFlowModels'])) {
            if (!empty($map['CoordinateFlowModels'])) {
                $model->coordinateFlowModels = [];
                $n                           = 0;
                foreach ($map['CoordinateFlowModels'] as $item) {
                    $model->coordinateFlowModels[$n++] = null !== $item ? coordinateFlowModels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
