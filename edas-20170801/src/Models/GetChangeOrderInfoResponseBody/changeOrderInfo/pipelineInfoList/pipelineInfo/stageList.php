<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageList\stageInfoDTO;

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
        if (\is_array($this->stageInfoDTO)) {
            Model::validateArray($this->stageInfoDTO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->stageInfoDTO) {
            if (\is_array($this->stageInfoDTO)) {
                $res['StageInfoDTO'] = [];
                $n1 = 0;
                foreach ($this->stageInfoDTO as $item1) {
                    $res['StageInfoDTO'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['StageInfoDTO'])) {
            if (!empty($map['StageInfoDTO'])) {
                $model->stageInfoDTO = [];
                $n1 = 0;
                foreach ($map['StageInfoDTO'] as $item1) {
                    $model->stageInfoDTO[$n1] = stageInfoDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
