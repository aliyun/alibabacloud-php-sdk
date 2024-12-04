<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\SDK\PaiStudio\V20210202\Models\GetExperimentVisualizationMetaResponseBody\visualizationMeta;
use AlibabaCloud\Tea\Model;

class GetExperimentVisualizationMetaResponseBody extends Model
{
    /**
     * @var visualizationMeta[]
     */
    public $visualizationMeta;

    /**
     * @example A84A1282-D3E7-5198-9E8E-2AD09C78C6C1
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'visualizationMeta' => 'VisualizationMeta',
        'requestId'         => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->visualizationMeta) {
            $res['VisualizationMeta'] = [];
            if (null !== $this->visualizationMeta && \is_array($this->visualizationMeta)) {
                $n = 0;
                foreach ($this->visualizationMeta as $item) {
                    $res['VisualizationMeta'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return GetExperimentVisualizationMetaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VisualizationMeta'])) {
            if (!empty($map['VisualizationMeta'])) {
                $model->visualizationMeta = [];
                $n                        = 0;
                foreach ($map['VisualizationMeta'] as $item) {
                    $model->visualizationMeta[$n++] = null !== $item ? visualizationMeta::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
