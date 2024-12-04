<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\SDK\PaiStudio\V20210202\Models\QueryExperimentVisualizationDataResponseBody\visualizationData;
use AlibabaCloud\Tea\Model;

class QueryExperimentVisualizationDataResponseBody extends Model
{
    /**
     * @var visualizationData[]
     */
    public $visualizationData;

    /**
     * @example FFB1D4B4-B253-540A-9B3B-AA711C48A1B7
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'visualizationData' => 'VisualizationData',
        'requestId'         => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->visualizationData) {
            $res['VisualizationData'] = [];
            if (null !== $this->visualizationData && \is_array($this->visualizationData)) {
                $n = 0;
                foreach ($this->visualizationData as $item) {
                    $res['VisualizationData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryExperimentVisualizationDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VisualizationData'])) {
            if (!empty($map['VisualizationData'])) {
                $model->visualizationData = [];
                $n                        = 0;
                foreach ($map['VisualizationData'] as $item) {
                    $model->visualizationData[$n++] = null !== $item ? visualizationData::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
