<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ApplyCoordinationForMonitoringResponseBody\coordinateFlowModels;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->coordinateFlowModels)) {
            Model::validateArray($this->coordinateFlowModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coordinateFlowModels) {
            if (\is_array($this->coordinateFlowModels)) {
                $res['CoordinateFlowModels'] = [];
                $n1 = 0;
                foreach ($this->coordinateFlowModels as $item1) {
                    $res['CoordinateFlowModels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CoordinateFlowModels'])) {
            if (!empty($map['CoordinateFlowModels'])) {
                $model->coordinateFlowModels = [];
                $n1 = 0;
                foreach ($map['CoordinateFlowModels'] as $item1) {
                    $model->coordinateFlowModels[$n1] = coordinateFlowModels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
