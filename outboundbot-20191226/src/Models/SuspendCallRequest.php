<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class SuspendCallRequest extends Model
{
    /**
     * @example []
     *
     * @var string[]
     */
    public $calledNumbers;

    /**
     * @example f745881b-343d-43e4-9c51-31b7b063031c
     *
     * @var string
     */
    public $groupId;

    /**
     * @example a5fc6490-ef1e-4666-870a-07a4e586c414
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'calledNumbers' => 'CalledNumbers',
        'groupId'       => 'GroupId',
        'instanceId'    => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->calledNumbers) {
            $res['CalledNumbers'] = $this->calledNumbers;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SuspendCallRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CalledNumbers'])) {
            if (!empty($map['CalledNumbers'])) {
                $model->calledNumbers = $map['CalledNumbers'];
            }
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
