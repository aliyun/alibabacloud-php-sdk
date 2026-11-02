<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CalculateNatGatewayCapacityUnitsResponseBody;

use AlibabaCloud\Dara\Model;

class natGatewayPerformanceValues extends Model
{
    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var int
     */
    public $cps;

    /**
     * @var int
     */
    public $pps;

    /**
     * @var int
     */
    public $sessionCount;
    protected $_name = [
        'bandwidth' => 'Bandwidth',
        'cps' => 'Cps',
        'pps' => 'Pps',
        'sessionCount' => 'SessionCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }

        if (null !== $this->cps) {
            $res['Cps'] = $this->cps;
        }

        if (null !== $this->pps) {
            $res['Pps'] = $this->pps;
        }

        if (null !== $this->sessionCount) {
            $res['SessionCount'] = $this->sessionCount;
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
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        if (isset($map['Cps'])) {
            $model->cps = $map['Cps'];
        }

        if (isset($map['Pps'])) {
            $model->pps = $map['Pps'];
        }

        if (isset($map['SessionCount'])) {
            $model->sessionCount = $map['SessionCount'];
        }

        return $model;
    }
}
