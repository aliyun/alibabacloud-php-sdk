<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo;

class pipelineInfoList extends Model
{
    /**
     * @var pipelineInfo[]
     */
    public $pipelineInfo;
    protected $_name = [
        'pipelineInfo' => 'PipelineInfo',
    ];

    public function validate()
    {
        if (\is_array($this->pipelineInfo)) {
            Model::validateArray($this->pipelineInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pipelineInfo) {
            if (\is_array($this->pipelineInfo)) {
                $res['PipelineInfo'] = [];
                $n1 = 0;
                foreach ($this->pipelineInfo as $item1) {
                    $res['PipelineInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PipelineInfo'])) {
            if (!empty($map['PipelineInfo'])) {
                $model->pipelineInfo = [];
                $n1 = 0;
                foreach ($map['PipelineInfo'] as $item1) {
                    $model->pipelineInfo[$n1] = pipelineInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
