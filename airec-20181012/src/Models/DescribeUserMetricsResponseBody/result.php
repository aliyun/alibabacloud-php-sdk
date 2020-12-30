<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models\DescribeUserMetricsResponseBody;

use AlibabaCloud\SDK\Airec\V20181012\Models\DescribeUserMetricsResponseBody\result\dataPoints;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var dataPoints[]
     */
    public $dataPoints;

    /**
     * @var string
     */
    public $sceneId;
    protected $_name = [
        'dataPoints' => 'DataPoints',
        'sceneId'    => 'SceneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataPoints) {
            $res['DataPoints'] = [];
            if (null !== $this->dataPoints && \is_array($this->dataPoints)) {
                $n = 0;
                foreach ($this->dataPoints as $item) {
                    $res['DataPoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataPoints'])) {
            if (!empty($map['DataPoints'])) {
                $model->dataPoints = [];
                $n                 = 0;
                foreach ($map['DataPoints'] as $item) {
                    $model->dataPoints[$n++] = null !== $item ? dataPoints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        return $model;
    }
}
