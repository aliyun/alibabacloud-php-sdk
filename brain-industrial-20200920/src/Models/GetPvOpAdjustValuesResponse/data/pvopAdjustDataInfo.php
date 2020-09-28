<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPvOpAdjustValuesResponse\data;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPvOpAdjustValuesResponse\data\pvopAdjustDataInfo\op;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPvOpAdjustValuesResponse\data\pvopAdjustDataInfo\pv;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPvOpAdjustValuesResponse\data\pvopAdjustDataInfo\sp;
use AlibabaCloud\Tea\Model;

class pvopAdjustDataInfo extends Model
{
    /**
     * @var op[]
     */
    public $op;

    /**
     * @var pv[]
     */
    public $pv;

    /**
     * @var sp[]
     */
    public $sp;
    protected $_name = [
        'op' => 'Op',
        'pv' => 'Pv',
        'sp' => 'Sp',
    ];

    public function validate()
    {
        Model::validateRequired('op', $this->op, true);
        Model::validateRequired('pv', $this->pv, true);
        Model::validateRequired('sp', $this->sp, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->op) {
            $res['Op'] = [];
            if (null !== $this->op && \is_array($this->op)) {
                $n = 0;
                foreach ($this->op as $item) {
                    $res['Op'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pv) {
            $res['Pv'] = [];
            if (null !== $this->pv && \is_array($this->pv)) {
                $n = 0;
                foreach ($this->pv as $item) {
                    $res['Pv'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sp) {
            $res['Sp'] = [];
            if (null !== $this->sp && \is_array($this->sp)) {
                $n = 0;
                foreach ($this->sp as $item) {
                    $res['Sp'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pvopAdjustDataInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Op'])) {
            if (!empty($map['Op'])) {
                $model->op = [];
                $n         = 0;
                foreach ($map['Op'] as $item) {
                    $model->op[$n++] = null !== $item ? op::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Pv'])) {
            if (!empty($map['Pv'])) {
                $model->pv = [];
                $n         = 0;
                foreach ($map['Pv'] as $item) {
                    $model->pv[$n++] = null !== $item ? pv::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Sp'])) {
            if (!empty($map['Sp'])) {
                $model->sp = [];
                $n         = 0;
                foreach ($map['Sp'] as $item) {
                    $model->sp[$n++] = null !== $item ? sp::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
