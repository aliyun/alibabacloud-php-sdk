<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\DescribeUserMetricsResponseBody;

use AlibabaCloud\SDK\Airec\V20201126\Models\DescribeUserMetricsResponseBody\result\dataPoints;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var dataPoints[]
     */
    public $dataPoints;

    /**
     * @example all
     *
     * @var string
     */
    public $sceneId;
    protected $_name = [
        'dataPoints' => 'dataPoints',
        'sceneId'    => 'sceneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataPoints) {
            $res['dataPoints'] = [];
            if (null !== $this->dataPoints && \is_array($this->dataPoints)) {
                $n = 0;
                foreach ($this->dataPoints as $item) {
                    $res['dataPoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sceneId) {
            $res['sceneId'] = $this->sceneId;
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
        if (isset($map['dataPoints'])) {
            if (!empty($map['dataPoints'])) {
                $model->dataPoints = [];
                $n                 = 0;
                foreach ($map['dataPoints'] as $item) {
                    $model->dataPoints[$n++] = null !== $item ? dataPoints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['sceneId'])) {
            $model->sceneId = $map['sceneId'];
        }

        return $model;
    }
}
