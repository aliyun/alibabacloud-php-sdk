<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class GetDIJobLogRequest extends Model
{
    /**
     * @var int
     */
    public $DIJobId;
    /**
     * @var int
     */
    public $failoverId;
    /**
     * @var int
     */
    public $id;
    /**
     * @var int
     */
    public $instanceId;
    protected $_name = [
        'DIJobId'    => 'DIJobId',
        'failoverId' => 'FailoverId',
        'id'         => 'Id',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DIJobId) {
            $res['DIJobId'] = $this->DIJobId;
        }

        if (null !== $this->failoverId) {
            $res['FailoverId'] = $this->failoverId;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['DIJobId'])) {
            $model->DIJobId = $map['DIJobId'];
        }

        if (isset($map['FailoverId'])) {
            $model->failoverId = $map['FailoverId'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
