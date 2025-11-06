<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class CreateFaultInjectionRequest extends Model
{
    /**
     * @var mixed
     */
    public $faultArgs;

    /**
     * @var string
     */
    public $faultType;
    protected $_name = [
        'faultArgs' => 'FaultArgs',
        'faultType' => 'FaultType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->faultArgs) {
            $res['FaultArgs'] = $this->faultArgs;
        }

        if (null !== $this->faultType) {
            $res['FaultType'] = $this->faultType;
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
        if (isset($map['FaultArgs'])) {
            $model->faultArgs = $map['FaultArgs'];
        }

        if (isset($map['FaultType'])) {
            $model->faultType = $map['FaultType'];
        }

        return $model;
    }
}
