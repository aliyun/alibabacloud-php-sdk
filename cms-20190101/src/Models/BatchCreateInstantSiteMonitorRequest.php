<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\BatchCreateInstantSiteMonitorRequest\taskList;
use AlibabaCloud\Tea\Model;

class BatchCreateInstantSiteMonitorRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The site monitoring tasks.
     *
     * This parameter is required.
     * @var taskList[]
     */
    public $taskList;
    protected $_name = [
        'regionId' => 'RegionId',
        'taskList' => 'TaskList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->taskList) {
            $res['TaskList'] = [];
            if (null !== $this->taskList && \is_array($this->taskList)) {
                $n = 0;
                foreach ($this->taskList as $item) {
                    $res['TaskList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchCreateInstantSiteMonitorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TaskList'])) {
            if (!empty($map['TaskList'])) {
                $model->taskList = [];
                $n               = 0;
                foreach ($map['TaskList'] as $item) {
                    $model->taskList[$n++] = null !== $item ? taskList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
