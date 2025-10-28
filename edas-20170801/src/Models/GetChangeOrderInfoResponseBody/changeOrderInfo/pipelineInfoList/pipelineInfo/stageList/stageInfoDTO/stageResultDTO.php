<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageList\stageInfoDTO;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageList\stageInfoDTO\stageResultDTO\instanceDTOList;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageList\stageInfoDTO\stageResultDTO\serviceStage;

class stageResultDTO extends Model
{
    /**
     * @var instanceDTOList
     */
    public $instanceDTOList;

    /**
     * @var serviceStage
     */
    public $serviceStage;
    protected $_name = [
        'instanceDTOList' => 'InstanceDTOList',
        'serviceStage' => 'ServiceStage',
    ];

    public function validate()
    {
        if (null !== $this->instanceDTOList) {
            $this->instanceDTOList->validate();
        }
        if (null !== $this->serviceStage) {
            $this->serviceStage->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceDTOList) {
            $res['InstanceDTOList'] = null !== $this->instanceDTOList ? $this->instanceDTOList->toArray($noStream) : $this->instanceDTOList;
        }

        if (null !== $this->serviceStage) {
            $res['ServiceStage'] = null !== $this->serviceStage ? $this->serviceStage->toArray($noStream) : $this->serviceStage;
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
        if (isset($map['InstanceDTOList'])) {
            $model->instanceDTOList = instanceDTOList::fromMap($map['InstanceDTOList']);
        }

        if (isset($map['ServiceStage'])) {
            $model->serviceStage = serviceStage::fromMap($map['ServiceStage']);
        }

        return $model;
    }
}
