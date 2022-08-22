<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreateScheduleTaskRequest;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreateScheduleTaskRequest\payload\actionDTOs;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreateScheduleTaskRequest\payload\scheduleDTO;
use AlibabaCloud\Tea\Model;

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
        'actionDTOs'   => 'ActionDTOs',
        'idempotentId' => 'IdempotentId',
        'scheduleDTO'  => 'ScheduleDTO',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionDTOs) {
            $res['ActionDTOs'] = [];
            if (null !== $this->actionDTOs && \is_array($this->actionDTOs)) {
                $n = 0;
                foreach ($this->actionDTOs as $item) {
                    $res['ActionDTOs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->idempotentId) {
            $res['IdempotentId'] = $this->idempotentId;
        }
        if (null !== $this->scheduleDTO) {
            $res['ScheduleDTO'] = null !== $this->scheduleDTO ? $this->scheduleDTO->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return payload
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionDTOs'])) {
            if (!empty($map['ActionDTOs'])) {
                $model->actionDTOs = [];
                $n                 = 0;
                foreach ($map['ActionDTOs'] as $item) {
                    $model->actionDTOs[$n++] = null !== $item ? actionDTOs::fromMap($item) : $item;
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
