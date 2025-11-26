<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeCreatePrePaidInstanceResultResponseBody;

use AlibabaCloud\Dara\Model;

class instanceCreateResult extends Model
{
    /**
     * @var string
     */
    public $instanceCreateStatus;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'instanceCreateStatus' => 'InstanceCreateStatus',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceCreateStatus) {
            $res['InstanceCreateStatus'] = $this->instanceCreateStatus;
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
        if (isset($map['InstanceCreateStatus'])) {
            $model->instanceCreateStatus = $map['InstanceCreateStatus'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
