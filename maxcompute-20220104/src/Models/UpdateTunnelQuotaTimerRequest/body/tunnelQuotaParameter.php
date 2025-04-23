<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateTunnelQuotaTimerRequest\body;

use AlibabaCloud\Dara\Model;

class tunnelQuotaParameter extends Model
{
    /**
     * @var int
     */
    public $elasticReservedSlotNum;

    /**
     * @var int
     */
    public $slotNum;
    protected $_name = [
        'elasticReservedSlotNum' => 'elasticReservedSlotNum',
        'slotNum' => 'slotNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elasticReservedSlotNum) {
            $res['elasticReservedSlotNum'] = $this->elasticReservedSlotNum;
        }

        if (null !== $this->slotNum) {
            $res['slotNum'] = $this->slotNum;
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
        if (isset($map['elasticReservedSlotNum'])) {
            $model->elasticReservedSlotNum = $map['elasticReservedSlotNum'];
        }

        if (isset($map['slotNum'])) {
            $model->slotNum = $map['slotNum'];
        }

        return $model;
    }
}
