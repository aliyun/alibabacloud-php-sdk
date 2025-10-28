<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageList\stageInfoDTO\stageResultDTO\instanceDTOList\instanceDTO;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageList\stageInfoDTO\stageResultDTO\instanceDTOList\instanceDTO\instanceStageDTOList\instanceStageDTO;

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
        if (\is_array($this->instanceStageDTO)) {
            Model::validateArray($this->instanceStageDTO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceStageDTO) {
            if (\is_array($this->instanceStageDTO)) {
                $res['InstanceStageDTO'] = [];
                $n1 = 0;
                foreach ($this->instanceStageDTO as $item1) {
                    $res['InstanceStageDTO'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstanceStageDTO'])) {
            if (!empty($map['InstanceStageDTO'])) {
                $model->instanceStageDTO = [];
                $n1 = 0;
                foreach ($map['InstanceStageDTO'] as $item1) {
                    $model->instanceStageDTO[$n1] = instanceStageDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
