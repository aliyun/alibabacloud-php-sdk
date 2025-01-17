<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListPipelinesResponseBody\pipelineList;

class ListPipelinesResponseBody extends Model
{
    /**
     * @var pipelineList[]
     */
    public $pipelineList;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pipelineList' => 'PipelineList',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->pipelineList)) {
            Model::validateArray($this->pipelineList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pipelineList) {
            if (\is_array($this->pipelineList)) {
                $res['PipelineList'] = [];
                $n1                  = 0;
                foreach ($this->pipelineList as $item1) {
                    $res['PipelineList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['PipelineList'])) {
            if (!empty($map['PipelineList'])) {
                $model->pipelineList = [];
                $n1                  = 0;
                foreach ($map['PipelineList'] as $item1) {
                    $model->pipelineList[$n1++] = pipelineList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
