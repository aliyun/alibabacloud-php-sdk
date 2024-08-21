<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\GetInstanceRecordConfigResponseBody;

use AlibabaCloud\Tea\Model;

class root extends Model
{
    /**
     * @example 7
     *
     * @var int
     */
    public $expirationDays;

    /**
     * @example i-xxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 123
     *
     * @var string
     */
    public $parentId;

    /**
     * @example acs:oss:cn-shanghai:123:workbench-record-123-1/record
     *
     * @var string
     */
    public $recordStorageTarget;
    protected $_name = [
        'expirationDays'      => 'ExpirationDays',
        'instanceId'          => 'InstanceId',
        'parentId'            => 'ParentId',
        'recordStorageTarget' => 'RecordStorageTarget',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return root
     */
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
