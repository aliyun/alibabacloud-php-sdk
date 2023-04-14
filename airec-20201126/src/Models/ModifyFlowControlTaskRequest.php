<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\SDK\Airec\V20201126\Models\ModifyFlowControlTaskRequest\selectionParams;
use AlibabaCloud\SDK\Airec\V20201126\Models\ModifyFlowControlTaskRequest\target;
use AlibabaCloud\Tea\Model;

class ModifyFlowControlTaskRequest extends Model
{
    /**
     * @example testname
     *
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 1639519200
     *
     * @var int
     */
    public $endTime;

    /**
     * @example FlowControlTask
     *
     * @var string
     */
    public $metaType;

    /**
     * @example all,sy101
     *
     * @var string
     */
    public $sceneIds;

    /**
     * @var selectionParams[]
     */
    public $selectionParams;

    /**
     * @example 1638460800
     *
     * @var int
     */
    public $startTime;

    /**
     * @var target
     */
    public $target;
    protected $_name = [
        'taskName'        => 'TaskName',
        'description'     => 'description',
        'endTime'         => 'endTime',
        'metaType'        => 'metaType',
        'sceneIds'        => 'sceneIds',
        'selectionParams' => 'selectionParams',
        'startTime'       => 'startTime',
        'target'          => 'target',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->metaType) {
            $res['metaType'] = $this->metaType;
        }
        if (null !== $this->sceneIds) {
            $res['sceneIds'] = $this->sceneIds;
        }
        if (null !== $this->selectionParams) {
            $res['selectionParams'] = [];
            if (null !== $this->selectionParams && \is_array($this->selectionParams)) {
                $n = 0;
                foreach ($this->selectionParams as $item) {
                    $res['selectionParams'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->target) {
            $res['target'] = null !== $this->target ? $this->target->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyFlowControlTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['metaType'])) {
            $model->metaType = $map['metaType'];
        }
        if (isset($map['sceneIds'])) {
            $model->sceneIds = $map['sceneIds'];
        }
        if (isset($map['selectionParams'])) {
            if (!empty($map['selectionParams'])) {
                $model->selectionParams = [];
                $n                      = 0;
                foreach ($map['selectionParams'] as $item) {
                    $model->selectionParams[$n++] = null !== $item ? selectionParams::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['target'])) {
            $model->target = target::fromMap($map['target']);
        }

        return $model;
    }
}
