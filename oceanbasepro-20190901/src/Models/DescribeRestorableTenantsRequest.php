<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DescribeRestorableTenantsRequest extends Model
{
    /**
     * @description The ID of the OceanBase cluster.
     *
     * This parameter is required.
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Specifies whether the target cluster is online. **Note** This parameter is used for compatibility with earlier versions and can be left empty. When left empty, it specifies negation for the value of `isRemote`.
     *
     * @example true
     *
     * @var bool
     */
    public $isOnline;

    /**
     * @description This parameter is provided for compatibility with earlier versions and can be left empty.
     *
     * @example true
     *
     * @var bool
     */
    public $isRemote;

    /**
     * @description The backup method.
     *
     * @example native_logical
     *
     * @var string
     */
    public $method;

    /**
     * @description The restore method. This parameter is required when `IsRemote` is set to `true`, and is optional otherwise.
     *
     * @example from_time_point
     *
     * @var string
     */
    public $restoreMode;

    /**
     * @description The type of the restore object.
     *
     * @example tenant
     *
     * @var string
     */
    public $restoreObjectType;

    /**
     * @description The ID of the backup set.
     *
     * @example bak-xxxxx
     *
     * @var string
     */
    public $setId;
    protected $_name = [
        'instanceId'        => 'InstanceId',
        'isOnline'          => 'IsOnline',
        'isRemote'          => 'IsRemote',
        'method'            => 'Method',
        'restoreMode'       => 'RestoreMode',
        'restoreObjectType' => 'RestoreObjectType',
        'setId'             => 'SetId',
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
        if (null !== $this->isOnline) {
            $res['IsOnline'] = $this->isOnline;
        }
        if (null !== $this->isRemote) {
            $res['IsRemote'] = $this->isRemote;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->restoreMode) {
            $res['RestoreMode'] = $this->restoreMode;
        }
        if (null !== $this->restoreObjectType) {
            $res['RestoreObjectType'] = $this->restoreObjectType;
        }
        if (null !== $this->setId) {
            $res['SetId'] = $this->setId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRestorableTenantsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IsOnline'])) {
            $model->isOnline = $map['IsOnline'];
        }
        if (isset($map['IsRemote'])) {
            $model->isRemote = $map['IsRemote'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['RestoreMode'])) {
            $model->restoreMode = $map['RestoreMode'];
        }
        if (isset($map['RestoreObjectType'])) {
            $model->restoreObjectType = $map['RestoreObjectType'];
        }
        if (isset($map['SetId'])) {
            $model->setId = $map['SetId'];
        }

        return $model;
    }
}
