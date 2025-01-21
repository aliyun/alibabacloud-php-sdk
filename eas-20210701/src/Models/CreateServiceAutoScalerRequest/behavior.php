<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\CreateServiceAutoScalerRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateServiceAutoScalerRequest\behavior\onZero;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateServiceAutoScalerRequest\behavior\scaleDown;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateServiceAutoScalerRequest\behavior\scaleUp;

class behavior extends Model
{
    /**
     * @var onZero
     */
    public $onZero;
    /**
     * @var scaleDown
     */
    public $scaleDown;
    /**
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
        if (null !== $this->onZero) {
            $this->onZero->validate();
        }
        if (null !== $this->scaleDown) {
            $this->scaleDown->validate();
        }
        if (null !== $this->scaleUp) {
            $this->scaleUp->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->onZero) {
            $res['onZero'] = null !== $this->onZero ? $this->onZero->toArray($noStream) : $this->onZero;
        }

        if (null !== $this->scaleDown) {
            $res['scaleDown'] = null !== $this->scaleDown ? $this->scaleDown->toArray($noStream) : $this->scaleDown;
        }

        if (null !== $this->scaleUp) {
            $res['scaleUp'] = null !== $this->scaleUp ? $this->scaleUp->toArray($noStream) : $this->scaleUp;
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
