<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetWorkFlowResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetWorkFlowResponseBody\data\workFlowInfo;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetWorkFlowResponseBody\data\workFlowNodeInfo;

class data extends Model
{
    /**
     * @var workFlowInfo
     */
    public $workFlowInfo;

    /**
     * @var workFlowNodeInfo
     */
    public $workFlowNodeInfo;
    protected $_name = [
        'workFlowInfo' => 'WorkFlowInfo',
        'workFlowNodeInfo' => 'WorkFlowNodeInfo',
    ];

    public function validate()
    {
        if (null !== $this->workFlowInfo) {
            $this->workFlowInfo->validate();
        }
        if (null !== $this->workFlowNodeInfo) {
            $this->workFlowNodeInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->workFlowInfo) {
            $res['WorkFlowInfo'] = null !== $this->workFlowInfo ? $this->workFlowInfo->toArray($noStream) : $this->workFlowInfo;
        }

        if (null !== $this->workFlowNodeInfo) {
            $res['WorkFlowNodeInfo'] = null !== $this->workFlowNodeInfo ? $this->workFlowNodeInfo->toArray($noStream) : $this->workFlowNodeInfo;
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
        if (isset($map['WorkFlowInfo'])) {
            $model->workFlowInfo = workFlowInfo::fromMap($map['WorkFlowInfo']);
        }

        if (isset($map['WorkFlowNodeInfo'])) {
            $model->workFlowNodeInfo = workFlowNodeInfo::fromMap($map['WorkFlowNodeInfo']);
        }

        return $model;
    }
}
