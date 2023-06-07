<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetWorkflowInstanceResponseBody;

use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetWorkflowInstanceResponseBody\data\wfInstanceDag;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetWorkflowInstanceResponseBody\data\wfInstanceInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The directed acyclic graph (DAG) of the workflow instance, including job instances and dependencies.
     *
     * @var wfInstanceDag
     */
    public $wfInstanceDag;

    /**
     * @description The details of the workflow instance, including the state of the workflow instance, the time when the workflow instance started to run, the time when the workflow instance stopped running, the state of each job instance, and the dependencies between job instances.
     *
     * @var wfInstanceInfo
     */
    public $wfInstanceInfo;
    protected $_name = [
        'wfInstanceDag'  => 'WfInstanceDag',
        'wfInstanceInfo' => 'WfInstanceInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->wfInstanceDag) {
            $res['WfInstanceDag'] = null !== $this->wfInstanceDag ? $this->wfInstanceDag->toMap() : null;
        }
        if (null !== $this->wfInstanceInfo) {
            $res['WfInstanceInfo'] = null !== $this->wfInstanceInfo ? $this->wfInstanceInfo->toMap() : null;
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
        if (isset($map['WfInstanceDag'])) {
            $model->wfInstanceDag = wfInstanceDag::fromMap($map['WfInstanceDag']);
        }
        if (isset($map['WfInstanceInfo'])) {
            $model->wfInstanceInfo = wfInstanceInfo::fromMap($map['WfInstanceInfo']);
        }

        return $model;
    }
}
