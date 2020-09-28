<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPvCustomSimulationValuesResponse\data;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPvCustomSimulationValuesResponse\data\pvCustomSimulateDataInfo\pv;
use AlibabaCloud\Tea\Model;

class pvCustomSimulateDataInfo extends Model
{
    /**
     * @var pv[]
     */
    public $pv;
    protected $_name = [
        'pv' => 'Pv',
    ];

    public function validate()
    {
        Model::validateRequired('pv', $this->pv, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pv) {
            $res['Pv'] = [];
            if (null !== $this->pv && \is_array($this->pv)) {
                $n = 0;
                foreach ($this->pv as $item) {
                    $res['Pv'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pvCustomSimulateDataInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Pv'])) {
            if (!empty($map['Pv'])) {
                $model->pv = [];
                $n         = 0;
                foreach ($map['Pv'] as $item) {
                    $model->pv[$n++] = null !== $item ? pv::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
