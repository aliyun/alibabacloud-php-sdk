<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\ListServiceInstanceFaultInjectionInfoResponseBody\faultInfoList;

use AlibabaCloud\Dara\Model;

class faultStatus extends Model
{
    /**
     * @var string
     */
    public $faultStatus;

    /**
     * @var string
     */
    public $faultStatusMessage;
    protected $_name = [
        'faultStatus' => 'FaultStatus',
        'faultStatusMessage' => 'FaultStatusMessage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->faultStatus) {
            $res['FaultStatus'] = $this->faultStatus;
        }

        if (null !== $this->faultStatusMessage) {
            $res['FaultStatusMessage'] = $this->faultStatusMessage;
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
        if (isset($map['FaultStatus'])) {
            $model->faultStatus = $map['FaultStatus'];
        }

        if (isset($map['FaultStatusMessage'])) {
            $model->faultStatusMessage = $map['FaultStatusMessage'];
        }

        return $model;
    }
}
