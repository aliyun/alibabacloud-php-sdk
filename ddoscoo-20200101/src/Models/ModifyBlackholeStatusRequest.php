<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;

class ModifyBlackholeStatusRequest extends Model
{
    /**
     * @var string
     */
    public $blackholeStatus;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'blackholeStatus' => 'BlackholeStatus',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blackholeStatus) {
            $res['BlackholeStatus'] = $this->blackholeStatus;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['BlackholeStatus'])) {
            $model->blackholeStatus = $map['BlackholeStatus'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
