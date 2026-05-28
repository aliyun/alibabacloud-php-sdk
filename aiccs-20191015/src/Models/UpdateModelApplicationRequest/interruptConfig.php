<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateModelApplicationRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateModelApplicationRequest\interruptConfig\avoidInterruptDTO;

class interruptConfig extends Model
{
    /**
     * @var avoidInterruptDTO
     */
    public $avoidInterruptDTO;

    /**
     * @var bool
     */
    public $enableAvoidInterrupt;

    /**
     * @var bool
     */
    public $enableInterruptBackchannel;

    /**
     * @var bool
     */
    public $enableStartwordEntireNotInterrupt;

    /**
     * @var bool
     */
    public $enableStartwordNotInterrupt;

    /**
     * @var float
     */
    public $startwordProtectDuration;
    protected $_name = [
        'avoidInterruptDTO' => 'AvoidInterruptDTO',
        'enableAvoidInterrupt' => 'EnableAvoidInterrupt',
        'enableInterruptBackchannel' => 'EnableInterruptBackchannel',
        'enableStartwordEntireNotInterrupt' => 'EnableStartwordEntireNotInterrupt',
        'enableStartwordNotInterrupt' => 'EnableStartwordNotInterrupt',
        'startwordProtectDuration' => 'StartwordProtectDuration',
    ];

    public function validate()
    {
        if (null !== $this->avoidInterruptDTO) {
            $this->avoidInterruptDTO->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avoidInterruptDTO) {
            $res['AvoidInterruptDTO'] = null !== $this->avoidInterruptDTO ? $this->avoidInterruptDTO->toArray($noStream) : $this->avoidInterruptDTO;
        }

        if (null !== $this->enableAvoidInterrupt) {
            $res['EnableAvoidInterrupt'] = $this->enableAvoidInterrupt;
        }

        if (null !== $this->enableInterruptBackchannel) {
            $res['EnableInterruptBackchannel'] = $this->enableInterruptBackchannel;
        }

        if (null !== $this->enableStartwordEntireNotInterrupt) {
            $res['EnableStartwordEntireNotInterrupt'] = $this->enableStartwordEntireNotInterrupt;
        }

        if (null !== $this->enableStartwordNotInterrupt) {
            $res['EnableStartwordNotInterrupt'] = $this->enableStartwordNotInterrupt;
        }

        if (null !== $this->startwordProtectDuration) {
            $res['StartwordProtectDuration'] = $this->startwordProtectDuration;
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
        if (isset($map['AvoidInterruptDTO'])) {
            $model->avoidInterruptDTO = avoidInterruptDTO::fromMap($map['AvoidInterruptDTO']);
        }

        if (isset($map['EnableAvoidInterrupt'])) {
            $model->enableAvoidInterrupt = $map['EnableAvoidInterrupt'];
        }

        if (isset($map['EnableInterruptBackchannel'])) {
            $model->enableInterruptBackchannel = $map['EnableInterruptBackchannel'];
        }

        if (isset($map['EnableStartwordEntireNotInterrupt'])) {
            $model->enableStartwordEntireNotInterrupt = $map['EnableStartwordEntireNotInterrupt'];
        }

        if (isset($map['EnableStartwordNotInterrupt'])) {
            $model->enableStartwordNotInterrupt = $map['EnableStartwordNotInterrupt'];
        }

        if (isset($map['StartwordProtectDuration'])) {
            $model->startwordProtectDuration = $map['StartwordProtectDuration'];
        }

        return $model;
    }
}
