<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListPipelinesResponseBody\pipelineList;
use AlibabaCloud\Tea\Model;

class ListPipelinesResponseBody extends Model
{
    /**
     * @var pipelineList[]
     */
    public $pipelineList;

    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pipelineList' => 'PipelineList',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pipelineList) {
            $res['PipelineList'] = [];
            if (null !== $this->pipelineList && \is_array($this->pipelineList)) {
                $n = 0;
                foreach ($this->pipelineList as $item) {
                    $res['PipelineList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPipelinesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PipelineList'])) {
            if (!empty($map['PipelineList'])) {
                $model->pipelineList = [];
                $n                   = 0;
                foreach ($map['PipelineList'] as $item) {
                    $model->pipelineList[$n++] = null !== $item ? pipelineList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
