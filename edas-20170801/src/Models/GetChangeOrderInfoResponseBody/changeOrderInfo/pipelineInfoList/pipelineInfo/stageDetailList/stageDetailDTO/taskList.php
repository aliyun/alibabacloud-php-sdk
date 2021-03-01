<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageDetailList\stageDetailDTO;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageDetailList\stageDetailDTO\taskList\taskInfoDTO;
use AlibabaCloud\Tea\Model;

class taskList extends Model
{
    /**
     * @var taskInfoDTO[]
     */
    public $taskInfoDTO;
    protected $_name = [
        'taskInfoDTO' => 'TaskInfoDTO',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskInfoDTO) {
            $res['TaskInfoDTO'] = [];
            if (null !== $this->taskInfoDTO && \is_array($this->taskInfoDTO)) {
                $n = 0;
                foreach ($this->taskInfoDTO as $item) {
                    $res['TaskInfoDTO'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskInfoDTO'])) {
            if (!empty($map['TaskInfoDTO'])) {
                $model->taskInfoDTO = [];
                $n                  = 0;
                foreach ($map['TaskInfoDTO'] as $item) {
                    $model->taskInfoDTO[$n++] = null !== $item ? taskInfoDTO::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
