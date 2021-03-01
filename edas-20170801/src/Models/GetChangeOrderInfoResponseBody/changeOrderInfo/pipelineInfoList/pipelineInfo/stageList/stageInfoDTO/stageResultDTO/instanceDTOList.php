<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageList\stageInfoDTO\stageResultDTO;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageList\stageInfoDTO\stageResultDTO\instanceDTOList\instanceDTO;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceDTO) {
            $res['InstanceDTO'] = [];
            if (null !== $this->instanceDTO && \is_array($this->instanceDTO)) {
                $n = 0;
                foreach ($this->instanceDTO as $item) {
                    $res['InstanceDTO'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceDTOList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceDTO'])) {
            if (!empty($map['InstanceDTO'])) {
                $model->instanceDTO = [];
                $n                  = 0;
                foreach ($map['InstanceDTO'] as $item) {
                    $model->instanceDTO[$n++] = null !== $item ? instanceDTO::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
