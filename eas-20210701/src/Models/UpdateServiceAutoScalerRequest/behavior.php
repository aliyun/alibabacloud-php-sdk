<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceAutoScalerRequest;

use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceAutoScalerRequest\behavior\onZero;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceAutoScalerRequest\behavior\scaleDown;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceAutoScalerRequest\behavior\scaleUp;
use AlibabaCloud\Tea\Model;

class behavior extends Model
{
    /**
     * @description The operation that reduces the number of instances to 0.
     *
     * @var onZero
     */
    public $onZero;

    /**
     * @description The scale-in operation.
     *
     * @var scaleDown
     */
    public $scaleDown;

    /**
     * @description The scale-out operation.
     *
     * @var scaleUp
     */
    public $scaleUp;
    protected $_name = [
        'onZero'    => 'onZero',
        'scaleDown' => 'scaleDown',
        'scaleUp'   => 'scaleUp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->onZero) {
            $res['onZero'] = null !== $this->onZero ? $this->onZero->toMap() : null;
        }
        if (null !== $this->scaleDown) {
            $res['scaleDown'] = null !== $this->scaleDown ? $this->scaleDown->toMap() : null;
        }
        if (null !== $this->scaleUp) {
            $res['scaleUp'] = null !== $this->scaleUp ? $this->scaleUp->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return behavior
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['onZero'])) {
            $model->onZero = onZero::fromMap($map['onZero']);
        }
        if (isset($map['scaleDown'])) {
            $model->scaleDown = scaleDown::fromMap($map['scaleDown']);
        }
        if (isset($map['scaleUp'])) {
            $model->scaleUp = scaleUp::fromMap($map['scaleUp']);
        }

        return $model;
    }
}
