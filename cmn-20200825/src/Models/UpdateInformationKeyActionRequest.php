<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class UpdateInformationKeyActionRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @example ip
     *
     * @var string
     */
    public $key;

    /**
     * @example AGENT_SYNC
     *
     * @var string
     */
    public $keyAction;

    /**
     * @var string
     */
    public $resourceInformationId;

    /**
     * @example adaieaoweif_s3834
     *
     * @var string
     */
    public $setupProjectId;

    /**
     * @example 192.168.1.1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'instanceId'            => 'InstanceId',
        'key'                   => 'Key',
        'keyAction'             => 'KeyAction',
        'resourceInformationId' => 'ResourceInformationId',
        'setupProjectId'        => 'SetupProjectId',
        'value'                 => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->keyAction) {
            $res['KeyAction'] = $this->keyAction;
        }
        if (null !== $this->resourceInformationId) {
            $res['ResourceInformationId'] = $this->resourceInformationId;
        }
        if (null !== $this->setupProjectId) {
            $res['SetupProjectId'] = $this->setupProjectId;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateInformationKeyActionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['KeyAction'])) {
            $model->keyAction = $map['KeyAction'];
        }
        if (isset($map['ResourceInformationId'])) {
            $model->resourceInformationId = $map['ResourceInformationId'];
        }
        if (isset($map['SetupProjectId'])) {
            $model->setupProjectId = $map['SetupProjectId'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
