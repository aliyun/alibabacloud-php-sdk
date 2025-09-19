<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\GetInstanceRecordConfigResponseBody;

use AlibabaCloud\Dara\Model;

class root extends Model
{
    /**
     * @var int
     */
    public $expirationDays;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $parentId;

    /**
     * @var string
     */
    public $recordStorageTarget;
    protected $_name = [
        'expirationDays' => 'ExpirationDays',
        'instanceId' => 'InstanceId',
        'parentId' => 'ParentId',
        'recordStorageTarget' => 'RecordStorageTarget',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expirationDays) {
            $res['ExpirationDays'] = $this->expirationDays;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }

        if (null !== $this->recordStorageTarget) {
            $res['RecordStorageTarget'] = $this->recordStorageTarget;
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
        if (isset($map['ExpirationDays'])) {
            $model->expirationDays = $map['ExpirationDays'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }

        if (isset($map['RecordStorageTarget'])) {
            $model->recordStorageTarget = $map['RecordStorageTarget'];
        }

        return $model;
    }
}
