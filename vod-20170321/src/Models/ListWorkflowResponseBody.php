<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListWorkflowResponseBody\workflowInfoList;

class ListWorkflowResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var workflowInfoList[]
     */
    public $workflowInfoList;
    protected $_name = [
        'requestId' => 'RequestId',
        'workflowInfoList' => 'WorkflowInfoList',
    ];

    public function validate()
    {
        if (\is_array($this->workflowInfoList)) {
            Model::validateArray($this->workflowInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->workflowInfoList) {
            if (\is_array($this->workflowInfoList)) {
                $res['WorkflowInfoList'] = [];
                $n1 = 0;
                foreach ($this->workflowInfoList as $item1) {
                    $res['WorkflowInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['WorkflowInfoList'])) {
            if (!empty($map['WorkflowInfoList'])) {
                $model->workflowInfoList = [];
                $n1 = 0;
                foreach ($map['WorkflowInfoList'] as $item1) {
                    $model->workflowInfoList[$n1] = workflowInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
