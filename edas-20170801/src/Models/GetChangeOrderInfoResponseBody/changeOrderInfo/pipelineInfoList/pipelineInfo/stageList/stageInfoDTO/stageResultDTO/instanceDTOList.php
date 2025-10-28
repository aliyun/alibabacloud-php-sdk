<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageList\stageInfoDTO\stageResultDTO;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageList\stageInfoDTO\stageResultDTO\instanceDTOList\instanceDTO;

class instanceDTOList extends Model
{
    /**
     * @var instanceDTO[]
     */
    public $instanceDTO;
    protected $_name = [
        'instanceDTO' => 'InstanceDTO',
    ];

    public function validate()
    {
        if (\is_array($this->instanceDTO)) {
            Model::validateArray($this->instanceDTO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceDTO) {
            if (\is_array($this->instanceDTO)) {
                $res['InstanceDTO'] = [];
                $n1 = 0;
                foreach ($this->instanceDTO as $item1) {
                    $res['InstanceDTO'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstanceDTO'])) {
            if (!empty($map['InstanceDTO'])) {
                $model->instanceDTO = [];
                $n1 = 0;
                foreach ($map['InstanceDTO'] as $item1) {
                    $model->instanceDTO[$n1] = instanceDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
