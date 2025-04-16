<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class DeleteMachineGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $machineGroupID;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'machineGroupID' => 'MachineGroupID',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->machineGroupID) {
            $res['MachineGroupID'] = $this->machineGroupID;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MachineGroupID'])) {
            $model->machineGroupID = $map['MachineGroupID'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
