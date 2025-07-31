<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ParseBatchTaskDependencyResponseBody\parseResult;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ParseBatchTaskDependencyResponseBody\parseResult\dependNodeList\scheduleNodeInfoList;
use AlibabaCloud\Tea\Model;

class dependNodeList extends Model
{
    /**
     * @example input
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeIoType) {
            $res['NodeIoType'] = $this->nodeIoType;
        }
        if (null !== $this->scheduleNodeInfoList) {
            $res['ScheduleNodeInfoList'] = [];
            if (null !== $this->scheduleNodeInfoList && \is_array($this->scheduleNodeInfoList)) {
                $n = 0;
                foreach ($this->scheduleNodeInfoList as $item) {
                    $res['ScheduleNodeInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dependNodeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeIoType'])) {
            $model->nodeIoType = $map['NodeIoType'];
        }
        if (isset($map['ScheduleNodeInfoList'])) {
            if (!empty($map['ScheduleNodeInfoList'])) {
                $model->scheduleNodeInfoList = [];
                $n = 0;
                foreach ($map['ScheduleNodeInfoList'] as $item) {
                    $model->scheduleNodeInfoList[$n++] = null !== $item ? scheduleNodeInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
