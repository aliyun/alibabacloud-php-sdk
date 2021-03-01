<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageList\stageInfoDTO;
use AlibabaCloud\Tea\Model;

class stageList extends Model
{
    /**
     * @var stageInfoDTO[]
     */
    public $stageInfoDTO;
    protected $_name = [
        'stageInfoDTO' => 'StageInfoDTO',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stageInfoDTO) {
            $res['StageInfoDTO'] = [];
            if (null !== $this->stageInfoDTO && \is_array($this->stageInfoDTO)) {
                $n = 0;
                foreach ($this->stageInfoDTO as $item) {
                    $res['StageInfoDTO'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stageList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StageInfoDTO'])) {
            if (!empty($map['StageInfoDTO'])) {
                $model->stageInfoDTO = [];
                $n                   = 0;
                foreach ($map['StageInfoDTO'] as $item) {
                    $model->stageInfoDTO[$n++] = null !== $item ? stageInfoDTO::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
