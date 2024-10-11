<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\GetFlowControlTaskResponseBody\result;

use AlibabaCloud\SDK\Airec\V20201126\Models\GetFlowControlTaskResponseBody\result\meta\selectionParams;
use AlibabaCloud\SDK\Airec\V20201126\Models\GetFlowControlTaskResponseBody\result\meta\target;
use AlibabaCloud\Tea\Model;

class meta extends Model
{
    /**
     * @description The task description.
     *
     * @example xx
     *
     * @var string
     */
    public $description;

    /**
     * @description The end time. The value is a timestamp in seconds.
     *
     * @example 1656518399
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The metadata type.
     *
     * @example FlowControlTask
     *
     * @var string
     */
    public $metaType;

    /**
     * @description The scene IDs.
     *
     * @example 1,2,3
     *
     * @var string
     */
    public $sceneIds;

    /**
     * @description The parameters specified for the item selection rule.
     *
     * @var selectionParams[]
     */
    public $selectionParams;

    /**
     * @description The start time. The value is a timestamp in seconds.
     *
     * @example 1640739600
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The exposure settings.
     *
     * @var target
     */
    public $target;

    /**
     * @description The task name.
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'description'     => 'description',
        'endTime'         => 'endTime',
        'metaType'        => 'metaType',
        'sceneIds'        => 'sceneIds',
        'selectionParams' => 'selectionParams',
        'startTime'       => 'startTime',
        'target'          => 'target',
        'taskName'        => 'taskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->taskName) {
            $res['taskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return meta
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['taskName'])) {
            $model->taskName = $map['taskName'];
        }

        return $model;
    }
}
