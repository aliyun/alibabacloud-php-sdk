<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;

class TriggerSophonPlaybookRequest extends Model
{
    /**
     * @var string
     */
    public $commandName;

    /**
     * @var string
     */
    public $inputParams;

    /**
     * @var string
     */
    public $sophonTaskId;

    /**
     * @var string
     */
    public $triggerType;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'commandName' => 'CommandName',
        'inputParams' => 'InputParams',
        'sophonTaskId' => 'SophonTaskId',
        'triggerType' => 'TriggerType',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
