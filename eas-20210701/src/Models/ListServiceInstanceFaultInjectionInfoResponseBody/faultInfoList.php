<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\ListServiceInstanceFaultInjectionInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListServiceInstanceFaultInjectionInfoResponseBody\faultInfoList\faultStatus;

class faultInfoList extends Model
{
    /**
     * @var mixed
     */
    public $faultArgs;

    /**
     * @var faultStatus
     */
    public $faultStatus;

    /**
     * @var string
     */
    public $faultType;
    protected $_name = [
        'faultArgs' => 'FaultArgs',
        'faultStatus' => 'FaultStatus',
        'faultType' => 'FaultType',
    ];

    public function validate()
    {
        if (null !== $this->faultStatus) {
            $this->faultStatus->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->faultArgs) {
            $res['FaultArgs'] = $this->faultArgs;
        }

        if (null !== $this->faultStatus) {
            $res['FaultStatus'] = null !== $this->faultStatus ? $this->faultStatus->toArray($noStream) : $this->faultStatus;
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

        if (isset($map['FaultStatus'])) {
            $model->faultStatus = faultStatus::fromMap($map['FaultStatus']);
        }

        if (isset($map['FaultType'])) {
            $model->faultType = $map['FaultType'];
        }

        return $model;
    }
}
