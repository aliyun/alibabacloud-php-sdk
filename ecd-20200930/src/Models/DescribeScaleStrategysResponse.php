<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeScaleStrategysResponse\scaleStrategys;
use AlibabaCloud\Tea\Model;

class DescribeScaleStrategysResponse extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var scaleStrategys[]
     */
    public $scaleStrategys;
    protected $_name = [
        'nextToken'      => 'NextToken',
        'requestId'      => 'RequestId',
        'scaleStrategys' => 'ScaleStrategys',
    ];

    public function validate()
    {
        Model::validateRequired('nextToken', $this->nextToken, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('scaleStrategys', $this->scaleStrategys, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scaleStrategys) {
            $res['ScaleStrategys'] = [];
            if (null !== $this->scaleStrategys && \is_array($this->scaleStrategys)) {
                $n = 0;
                foreach ($this->scaleStrategys as $item) {
                    $res['ScaleStrategys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScaleStrategysResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScaleStrategys'])) {
            if (!empty($map['ScaleStrategys'])) {
                $model->scaleStrategys = [];
                $n                     = 0;
                foreach ($map['ScaleStrategys'] as $item) {
                    $model->scaleStrategys[$n++] = null !== $item ? scaleStrategys::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
