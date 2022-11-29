<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class InstanceActiveOpsTask extends Model
{
    /**
     * @var string
     */
    public $instanceActiveOpsTaskId;

    /**
     * @var string
     */
    public $instanceActiveOpsTaskStatus;
    protected $_name = [
        'instanceActiveOpsTaskId'     => 'InstanceActiveOpsTaskId',
        'instanceActiveOpsTaskStatus' => 'InstanceActiveOpsTaskStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceActiveOpsTaskId) {
            $res['InstanceActiveOpsTaskId'] = $this->instanceActiveOpsTaskId;
        }
        if (null !== $this->instanceActiveOpsTaskStatus) {
            $res['InstanceActiveOpsTaskStatus'] = $this->instanceActiveOpsTaskStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InstanceActiveOpsTask
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceActiveOpsTaskId'])) {
            $model->instanceActiveOpsTaskId = $map['InstanceActiveOpsTaskId'];
        }
        if (isset($map['InstanceActiveOpsTaskStatus'])) {
            $model->instanceActiveOpsTaskStatus = $map['InstanceActiveOpsTaskStatus'];
        }

        return $model;
    }
}
