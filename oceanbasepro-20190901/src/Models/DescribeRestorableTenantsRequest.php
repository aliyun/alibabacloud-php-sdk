<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;

class DescribeRestorableTenantsRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $isOnline;

    /**
     * @var bool
     */
    public $isRemote;

    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $restoreMode;

    /**
     * @var string
     */
    public $restoreObjectType;

    /**
     * @var string
     */
    public $setId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'isOnline' => 'IsOnline',
        'isRemote' => 'IsRemote',
        'method' => 'Method',
        'restoreMode' => 'RestoreMode',
        'restoreObjectType' => 'RestoreObjectType',
        'setId' => 'SetId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
