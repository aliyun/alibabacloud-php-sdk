<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateTunnelQuotaTimerRequest\body;

use AlibabaCloud\Tea\Model;

class tunnelQuotaParameter extends Model
{
    /**
     * @description The number of elastically reserved slots.
     *
     * @example 100
     *
     * @var int
     */
    public $elasticReservedSlotNum;

    /**
     * @description The number of reserved slots.
     *
     * @example 100
     *
     * @var int
     */
    public $slotNum;
    protected $_name = [
        'elasticReservedSlotNum' => 'elasticReservedSlotNum',
        'slotNum' => 'slotNum',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return tunnelQuotaParameter
     */
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
