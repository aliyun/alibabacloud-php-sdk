<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageList\stageInfoDTO\stageResultDTO\instanceDTOList\instanceDTO;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageList\stageInfoDTO\stageResultDTO\instanceDTOList\instanceDTO\instanceStageDTOList\instanceStageDTO;
use AlibabaCloud\Tea\Model;

class instanceStageDTOList extends Model
{
    /**
     * @var instanceStageDTO[]
     */
    public $instanceStageDTO;
    protected $_name = [
        'instanceStageDTO' => 'InstanceStageDTO',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceStageDTO) {
            $res['InstanceStageDTO'] = [];
            if (null !== $this->instanceStageDTO && \is_array($this->instanceStageDTO)) {
                $n = 0;
                foreach ($this->instanceStageDTO as $item) {
                    $res['InstanceStageDTO'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceStageDTOList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceStageDTO'])) {
            if (!empty($map['InstanceStageDTO'])) {
                $model->instanceStageDTO = [];
                $n                       = 0;
                foreach ($map['InstanceStageDTO'] as $item) {
                    $model->instanceStageDTO[$n++] = null !== $item ? instanceStageDTO::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
