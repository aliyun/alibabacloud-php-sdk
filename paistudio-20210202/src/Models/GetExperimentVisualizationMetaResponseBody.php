<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\GetExperimentVisualizationMetaResponseBody\visualizationMeta;

class GetExperimentVisualizationMetaResponseBody extends Model
{
    /**
     * @var visualizationMeta[]
     */
    public $visualizationMeta;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'visualizationMeta' => 'VisualizationMeta',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->visualizationMeta)) {
            Model::validateArray($this->visualizationMeta);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->visualizationMeta) {
            if (\is_array($this->visualizationMeta)) {
                $res['VisualizationMeta'] = [];
                $n1 = 0;
                foreach ($this->visualizationMeta as $item1) {
                    $res['VisualizationMeta'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['VisualizationMeta'])) {
            if (!empty($map['VisualizationMeta'])) {
                $model->visualizationMeta = [];
                $n1 = 0;
                foreach ($map['VisualizationMeta'] as $item1) {
                    $model->visualizationMeta[$n1] = visualizationMeta::fromMap($item1);
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
