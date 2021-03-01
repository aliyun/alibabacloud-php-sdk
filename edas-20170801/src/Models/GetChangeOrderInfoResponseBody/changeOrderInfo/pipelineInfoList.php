<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pipelineInfo) {
            $res['PipelineInfo'] = [];
            if (null !== $this->pipelineInfo && \is_array($this->pipelineInfo)) {
                $n = 0;
                foreach ($this->pipelineInfo as $item) {
                    $res['PipelineInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pipelineInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PipelineInfo'])) {
            if (!empty($map['PipelineInfo'])) {
                $model->pipelineInfo = [];
                $n                   = 0;
                foreach ($map['PipelineInfo'] as $item) {
                    $model->pipelineInfo[$n++] = null !== $item ? pipelineInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
