<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models\QueryExperimentVisualizationDataRequest;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @example 2021-01-30T12:51:33.028Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example node-2dfd8xfjda
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example 2021-01-30T12:51:33.028Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @var string[]
     */
    public $visualizationDataIds;
    protected $_name = [
        'endTime'              => 'EndTime',
        'nodeId'               => 'NodeId',
        'startTime'            => 'StartTime',
        'visualizationDataIds' => 'VisualizationDataIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->visualizationDataIds) {
            $res['VisualizationDataIds'] = $this->visualizationDataIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['VisualizationDataIds'])) {
            if (!empty($map['VisualizationDataIds'])) {
                $model->visualizationDataIds = $map['VisualizationDataIds'];
            }
        }

        return $model;
    }
}
