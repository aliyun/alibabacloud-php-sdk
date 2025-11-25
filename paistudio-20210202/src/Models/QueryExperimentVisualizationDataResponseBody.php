<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\QueryExperimentVisualizationDataResponseBody\visualizationData;

class QueryExperimentVisualizationDataResponseBody extends Model
{
    /**
     * @var visualizationData[]
     */
    public $visualizationData;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'visualizationData' => 'VisualizationData',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->visualizationData)) {
            Model::validateArray($this->visualizationData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->visualizationData) {
            if (\is_array($this->visualizationData)) {
                $res['VisualizationData'] = [];
                $n1 = 0;
                foreach ($this->visualizationData as $item1) {
                    $res['VisualizationData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['VisualizationData'])) {
            if (!empty($map['VisualizationData'])) {
                $model->visualizationData = [];
                $n1 = 0;
                foreach ($map['VisualizationData'] as $item1) {
                    $model->visualizationData[$n1] = visualizationData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
