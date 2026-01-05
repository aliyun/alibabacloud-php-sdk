<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models;

use AlibabaCloud\Dara\Model;

class InstanceStatus extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $phase;

    /**
     * @var int
     */
    public $slotNum;

    /**
     * @var string
     */
    public $usedCapacity;
    protected $_name = [
        'code' => 'Code',
        'message' => 'Message',
        'phase' => 'Phase',
        'slotNum' => 'SlotNum',
        'usedCapacity' => 'UsedCapacity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }

        if (null !== $this->slotNum) {
            $res['SlotNum'] = $this->slotNum;
        }

        if (null !== $this->usedCapacity) {
            $res['UsedCapacity'] = $this->usedCapacity;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }

        if (isset($map['SlotNum'])) {
            $model->slotNum = $map['SlotNum'];
        }

        if (isset($map['UsedCapacity'])) {
            $model->usedCapacity = $map['UsedCapacity'];
        }

        return $model;
    }
}
