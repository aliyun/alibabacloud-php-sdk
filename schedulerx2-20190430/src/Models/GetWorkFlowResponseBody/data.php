<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetWorkFlowResponseBody;

use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetWorkFlowResponseBody\data\workFlowInfo;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetWorkFlowResponseBody\data\workFlowNodeInfo;
use AlibabaCloud\Tea\Model;

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
        'workFlowInfo'     => 'WorkFlowInfo',
        'workFlowNodeInfo' => 'WorkFlowNodeInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->workFlowInfo) {
            $res['WorkFlowInfo'] = null !== $this->workFlowInfo ? $this->workFlowInfo->toMap() : null;
        }
        if (null !== $this->workFlowNodeInfo) {
            $res['WorkFlowNodeInfo'] = null !== $this->workFlowNodeInfo ? $this->workFlowNodeInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
