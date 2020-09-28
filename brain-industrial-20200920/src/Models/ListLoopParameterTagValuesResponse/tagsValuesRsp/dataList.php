<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListLoopParameterTagValuesResponse\tagsValuesRsp;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListLoopParameterTagValuesResponse\tagsValuesRsp\dataList\op;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListLoopParameterTagValuesResponse\tagsValuesRsp\dataList\op1;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListLoopParameterTagValuesResponse\tagsValuesRsp\dataList\op2;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListLoopParameterTagValuesResponse\tagsValuesRsp\dataList\pv;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListLoopParameterTagValuesResponse\tagsValuesRsp\dataList\sp;
use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @var op[]
     */
    public $op;

    /**
     * @var op1[]
     */
    public $op1;

    /**
     * @var op2[]
     */
    public $op2;

    /**
     * @var sp[]
     */
    public $sp;

    /**
     * @var pv[]
     */
    public $pv;
    protected $_name = [
        'op'  => 'Op',
        'op1' => 'Op1',
        'op2' => 'Op2',
        'sp'  => 'Sp',
        'pv'  => 'Pv',
    ];

    public function validate()
    {
        Model::validateRequired('op', $this->op, true);
        Model::validateRequired('op1', $this->op1, true);
        Model::validateRequired('op2', $this->op2, true);
        Model::validateRequired('sp', $this->sp, true);
        Model::validateRequired('pv', $this->pv, true);
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
        if (null !== $this->op1) {
            $res['Op1'] = [];
            if (null !== $this->op1 && \is_array($this->op1)) {
                $n = 0;
                foreach ($this->op1 as $item) {
                    $res['Op1'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->op2) {
            $res['Op2'] = [];
            if (null !== $this->op2 && \is_array($this->op2)) {
                $n = 0;
                foreach ($this->op2 as $item) {
                    $res['Op2'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return dataList
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
        if (isset($map['Op1'])) {
            if (!empty($map['Op1'])) {
                $model->op1 = [];
                $n          = 0;
                foreach ($map['Op1'] as $item) {
                    $model->op1[$n++] = null !== $item ? op1::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Op2'])) {
            if (!empty($map['Op2'])) {
                $model->op2 = [];
                $n          = 0;
                foreach ($map['Op2'] as $item) {
                    $model->op2[$n++] = null !== $item ? op2::fromMap($item) : $item;
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
