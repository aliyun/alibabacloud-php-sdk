<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageList\stageInfoDTO;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageList\stageInfoDTO\stageResultDTO\instanceDTOList;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageList\stageInfoDTO\stageResultDTO\serviceStage;
use AlibabaCloud\Tea\Model;

class stageResultDTO extends Model
{
    /**
     * @var serviceStage
     */
    public $serviceStage;

    /**
     * @var instanceDTOList
     */
    public $instanceDTOList;
    protected $_name = [
        'serviceStage'    => 'ServiceStage',
        'instanceDTOList' => 'InstanceDTOList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceStage) {
            $res['ServiceStage'] = null !== $this->serviceStage ? $this->serviceStage->toMap() : null;
        }
        if (null !== $this->instanceDTOList) {
            $res['InstanceDTOList'] = null !== $this->instanceDTOList ? $this->instanceDTOList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stageResultDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceStage'])) {
            $model->serviceStage = serviceStage::fromMap($map['ServiceStage']);
        }
        if (isset($map['InstanceDTOList'])) {
            $model->instanceDTOList = instanceDTOList::fromMap($map['InstanceDTOList']);
        }

        return $model;
    }
}
