<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageDetailList\stageDetailDTO;

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
        if (\is_array($this->stageDetailDTO)) {
            Model::validateArray($this->stageDetailDTO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->stageDetailDTO) {
            if (\is_array($this->stageDetailDTO)) {
                $res['StageDetailDTO'] = [];
                $n1 = 0;
                foreach ($this->stageDetailDTO as $item1) {
                    $res['StageDetailDTO'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['StageDetailDTO'])) {
            if (!empty($map['StageDetailDTO'])) {
                $model->stageDetailDTO = [];
                $n1 = 0;
                foreach ($map['StageDetailDTO'] as $item1) {
                    $model->stageDetailDTO[$n1] = stageDetailDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
