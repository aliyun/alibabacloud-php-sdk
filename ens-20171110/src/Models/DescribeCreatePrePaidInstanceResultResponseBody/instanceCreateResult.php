<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeCreatePrePaidInstanceResultResponseBody;

use AlibabaCloud\Tea\Model;

class instanceCreateResult extends Model
{
    /**
     * @example Successed
     *
     * @var string
     */
    public $instanceCreateStatus;

    /**
     * @example i-6ecpqvkicnchxccozrpxxxx
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'instanceCreateStatus' => 'InstanceCreateStatus',
        'instanceId'           => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return instanceCreateResult
     */
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
