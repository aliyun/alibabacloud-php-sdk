<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreateScheduleTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreateScheduleTaskRequest\payload\actionDTOs;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreateScheduleTaskRequest\payload\scheduleDTO;

class payload extends Model
{
    /**
     * @var actionDTOs[]
     */
    public $actionDTOs;

    /**
     * @var string
     */
    public $idempotentId;

    /**
     * @var scheduleDTO
     */
    public $scheduleDTO;
    protected $_name = [
        'actionDTOs' => 'ActionDTOs',
        'idempotentId' => 'IdempotentId',
        'scheduleDTO' => 'ScheduleDTO',
    ];

    public function validate()
    {
        if (\is_array($this->actionDTOs)) {
            Model::validateArray($this->actionDTOs);
        }
        if (null !== $this->scheduleDTO) {
            $this->scheduleDTO->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionDTOs) {
            if (\is_array($this->actionDTOs)) {
                $res['ActionDTOs'] = [];
                $n1 = 0;
                foreach ($this->actionDTOs as $item1) {
                    $res['ActionDTOs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->idempotentId) {
            $res['IdempotentId'] = $this->idempotentId;
        }

        if (null !== $this->scheduleDTO) {
            $res['ScheduleDTO'] = null !== $this->scheduleDTO ? $this->scheduleDTO->toArray($noStream) : $this->scheduleDTO;
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
        if (isset($map['ActionDTOs'])) {
            if (!empty($map['ActionDTOs'])) {
                $model->actionDTOs = [];
                $n1 = 0;
                foreach ($map['ActionDTOs'] as $item1) {
                    $model->actionDTOs[$n1] = actionDTOs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['IdempotentId'])) {
            $model->idempotentId = $map['IdempotentId'];
        }

        if (isset($map['ScheduleDTO'])) {
            $model->scheduleDTO = scheduleDTO::fromMap($map['ScheduleDTO']);
        }

        return $model;
    }
}
