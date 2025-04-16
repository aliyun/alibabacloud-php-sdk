<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ParseBatchTaskDependencyResponseBody\parseResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ParseBatchTaskDependencyResponseBody\parseResult\dependNodeList\scheduleNodeInfoList;

class dependNodeList extends Model
{
    /**
     * @var string
     */
    public $nodeIoType;

    /**
     * @var scheduleNodeInfoList[]
     */
    public $scheduleNodeInfoList;
    protected $_name = [
        'nodeIoType' => 'NodeIoType',
        'scheduleNodeInfoList' => 'ScheduleNodeInfoList',
    ];

    public function validate()
    {
        if (\is_array($this->scheduleNodeInfoList)) {
            Model::validateArray($this->scheduleNodeInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeIoType) {
            $res['NodeIoType'] = $this->nodeIoType;
        }

        if (null !== $this->scheduleNodeInfoList) {
            if (\is_array($this->scheduleNodeInfoList)) {
                $res['ScheduleNodeInfoList'] = [];
                $n1 = 0;
                foreach ($this->scheduleNodeInfoList as $item1) {
                    $res['ScheduleNodeInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NodeIoType'])) {
            $model->nodeIoType = $map['NodeIoType'];
        }

        if (isset($map['ScheduleNodeInfoList'])) {
            if (!empty($map['ScheduleNodeInfoList'])) {
                $model->scheduleNodeInfoList = [];
                $n1 = 0;
                foreach ($map['ScheduleNodeInfoList'] as $item1) {
                    $model->scheduleNodeInfoList[$n1++] = scheduleNodeInfoList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
