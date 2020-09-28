<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopResponse\loopConfiguration\baseParam;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopResponse\loopConfiguration\baseParam\opParam\increment;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopResponse\loopConfiguration\baseParam\opParam\operate;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopResponse\loopConfiguration\baseParam\opParam\opScope;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopResponse\loopConfiguration\baseParam\opParam\range;
use AlibabaCloud\Tea\Model;

class opParam extends Model
{
    /**
     * @var int
     */
    public $trend;

    /**
     * @var opScope
     */
    public $opScope;

    /**
     * @var range
     */
    public $range;

    /**
     * @var operate
     */
    public $operate;

    /**
     * @var increment
     */
    public $increment;
    protected $_name = [
        'trend'     => 'Trend',
        'opScope'   => 'OpScope',
        'range'     => 'Range',
        'operate'   => 'Operate',
        'increment' => 'Increment',
    ];

    public function validate()
    {
        Model::validateRequired('trend', $this->trend, true);
        Model::validateRequired('opScope', $this->opScope, true);
        Model::validateRequired('range', $this->range, true);
        Model::validateRequired('operate', $this->operate, true);
        Model::validateRequired('increment', $this->increment, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trend) {
            $res['Trend'] = $this->trend;
        }
        if (null !== $this->opScope) {
            $res['OpScope'] = null !== $this->opScope ? $this->opScope->toMap() : null;
        }
        if (null !== $this->range) {
            $res['Range'] = null !== $this->range ? $this->range->toMap() : null;
        }
        if (null !== $this->operate) {
            $res['Operate'] = null !== $this->operate ? $this->operate->toMap() : null;
        }
        if (null !== $this->increment) {
            $res['Increment'] = null !== $this->increment ? $this->increment->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return opParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Trend'])) {
            $model->trend = $map['Trend'];
        }
        if (isset($map['OpScope'])) {
            $model->opScope = opScope::fromMap($map['OpScope']);
        }
        if (isset($map['Range'])) {
            $model->range = range::fromMap($map['Range']);
        }
        if (isset($map['Operate'])) {
            $model->operate = operate::fromMap($map['Operate']);
        }
        if (isset($map['Increment'])) {
            $model->increment = increment::fromMap($map['Increment']);
        }

        return $model;
    }
}
