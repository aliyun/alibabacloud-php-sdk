<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageDetailList\stageDetailDTO;
use AlibabaCloud\Tea\Model;

class stageDetailList extends Model
{
    /**
     * @var stageDetailDTO[]
     */
    public $stageDetailDTO;
    protected $_name = [
        'stageDetailDTO' => 'StageDetailDTO',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stageDetailDTO) {
            $res['StageDetailDTO'] = [];
            if (null !== $this->stageDetailDTO && \is_array($this->stageDetailDTO)) {
                $n = 0;
                foreach ($this->stageDetailDTO as $item) {
                    $res['StageDetailDTO'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stageDetailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StageDetailDTO'])) {
            if (!empty($map['StageDetailDTO'])) {
                $model->stageDetailDTO = [];
                $n                     = 0;
                foreach ($map['StageDetailDTO'] as $item) {
                    $model->stageDetailDTO[$n++] = null !== $item ? stageDetailDTO::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
