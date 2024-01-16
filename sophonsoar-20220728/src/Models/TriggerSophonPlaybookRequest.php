<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class TriggerSophonPlaybookRequest extends Model
{
    /**
     * @description The name of the command that you want to trigger.
     *
     * >  You can call the [DescribeSophonCommands](~~DescribeSophonCommands~~) operation to query the command name.
     * @example waf_process_command
     *
     * @var string
     */
    public $commandName;

    /**
     * @description The input parameters of the command or playbook that you want to trigger.
     *
     * @example {
     * }
     * @var string
     */
    public $inputParams;

    /**
     * @description The custom ID. If you do not specify this parameter when the playbook is triggered, a random ID is generated for fault locating and troubleshooting.
     *
     * @example f916b93e-e814-459f-9662-xxxxxxxxxx
     *
     * @var string
     */
    public $sophonTaskId;

    /**
     * @description The task type. Valid values:
     *
     *   **command**
     *   **playbook**
     *
     * @example playbook
     *
     * @var string
     */
    public $triggerType;

    /**
     * @description The UUID of the playbook.
     *
     * >  You can call the [DescribePlaybooks](~~DescribePlaybooks~~)operation to query the playbook UUID.
     * @example f916b93e-e814-459f-9662-xxxxxxxxxx
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'commandName'  => 'CommandName',
        'inputParams'  => 'InputParams',
        'sophonTaskId' => 'SophonTaskId',
        'triggerType'  => 'TriggerType',
        'uuid'         => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commandName) {
            $res['CommandName'] = $this->commandName;
        }
        if (null !== $this->inputParams) {
            $res['InputParams'] = $this->inputParams;
        }
        if (null !== $this->sophonTaskId) {
            $res['SophonTaskId'] = $this->sophonTaskId;
        }
        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TriggerSophonPlaybookRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommandName'])) {
            $model->commandName = $map['CommandName'];
        }
        if (isset($map['InputParams'])) {
            $model->inputParams = $map['InputParams'];
        }
        if (isset($map['SophonTaskId'])) {
            $model->sophonTaskId = $map['SophonTaskId'];
        }
        if (isset($map['TriggerType'])) {
            $model->triggerType = $map['TriggerType'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
