<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateWorkflowRequest\tasks;

use AlibabaCloud\Tea\Model;

class trigger extends Model
{
    /**
     * @description The running mode of the task after it is triggered. This parameter takes effect only if the Type parameter is set to Scheduler. Valid values:
     *
     *   Pause
     *   Skip
     *   Normal
     *
     * This parameter is required.
     *
     * @example Normal
     *
     * @var string
     */
    public $recurrence;

    /**
     * @description The trigger type. Valid values:
     *
     *   Scheduler: scheduling cycle-based trigger
     *   Manual: manual trigger
     *
     * @example Scheduler
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'recurrence' => 'Recurrence',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->recurrence) {
            $res['Recurrence'] = $this->recurrence;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trigger
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Recurrence'])) {
            $model->recurrence = $map['Recurrence'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
