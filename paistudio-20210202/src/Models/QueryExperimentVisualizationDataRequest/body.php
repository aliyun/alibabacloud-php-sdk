<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models\QueryExperimentVisualizationDataRequest;

use AlibabaCloud\Dara\Model;

class body extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string[]
     */
    public $visualizationDataIds;
    protected $_name = [
        'endTime' => 'EndTime',
        'nodeId' => 'NodeId',
        'startTime' => 'StartTime',
        'visualizationDataIds' => 'VisualizationDataIds',
    ];

    public function validate()
    {
        if (\is_array($this->visualizationDataIds)) {
            Model::validateArray($this->visualizationDataIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->visualizationDataIds)) {
                $res['VisualizationDataIds'] = [];
                $n1 = 0;
                foreach ($this->visualizationDataIds as $item1) {
                    $res['VisualizationDataIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
                $model->visualizationDataIds = [];
                $n1 = 0;
                foreach ($map['VisualizationDataIds'] as $item1) {
                    $model->visualizationDataIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
