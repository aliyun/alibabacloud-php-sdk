<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetWorkflowInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetWorkflowInstanceResponseBody\data\wfInstanceDag;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetWorkflowInstanceResponseBody\data\wfInstanceInfo;

class data extends Model
{
    /**
     * @var wfInstanceDag
     */
    public $wfInstanceDag;

    /**
     * @var wfInstanceInfo
     */
    public $wfInstanceInfo;
    protected $_name = [
        'wfInstanceDag' => 'WfInstanceDag',
        'wfInstanceInfo' => 'WfInstanceInfo',
    ];

    public function validate()
    {
        if (null !== $this->wfInstanceDag) {
            $this->wfInstanceDag->validate();
        }
        if (null !== $this->wfInstanceInfo) {
            $this->wfInstanceInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->wfInstanceDag) {
            $res['WfInstanceDag'] = null !== $this->wfInstanceDag ? $this->wfInstanceDag->toArray($noStream) : $this->wfInstanceDag;
        }

        if (null !== $this->wfInstanceInfo) {
            $res['WfInstanceInfo'] = null !== $this->wfInstanceInfo ? $this->wfInstanceInfo->toArray($noStream) : $this->wfInstanceInfo;
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
        if (isset($map['WfInstanceDag'])) {
            $model->wfInstanceDag = wfInstanceDag::fromMap($map['WfInstanceDag']);
        }

        if (isset($map['WfInstanceInfo'])) {
            $model->wfInstanceInfo = wfInstanceInfo::fromMap($map['WfInstanceInfo']);
        }

        return $model;
    }
}
