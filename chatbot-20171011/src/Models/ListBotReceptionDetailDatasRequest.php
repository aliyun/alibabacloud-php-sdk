<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class ListBotReceptionDetailDatasRequest extends Model
{
    /**
     * @var string
     */
    public $cubeId;

    /**
     * @var string
     */
    public $measures;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $robotInstanceId;

    /**
     * @var string
     */
    public $dimensions;
    protected $_name = [
        'cubeId'          => 'CubeId',
        'measures'        => 'Measures',
        'startTime'       => 'StartTime',
        'endTime'         => 'EndTime',
        'robotInstanceId' => 'RobotInstanceId',
        'dimensions'      => 'Dimensions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cubeId) {
            $res['CubeId'] = $this->cubeId;
        }
        if (null !== $this->measures) {
            $res['Measures'] = $this->measures;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->robotInstanceId) {
            $res['RobotInstanceId'] = $this->robotInstanceId;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = $this->dimensions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListBotReceptionDetailDatasRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CubeId'])) {
            $model->cubeId = $map['CubeId'];
        }
        if (isset($map['Measures'])) {
            $model->measures = $map['Measures'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RobotInstanceId'])) {
            $model->robotInstanceId = $map['RobotInstanceId'];
        }
        if (isset($map['Dimensions'])) {
            $model->dimensions = $map['Dimensions'];
        }

        return $model;
    }
}
