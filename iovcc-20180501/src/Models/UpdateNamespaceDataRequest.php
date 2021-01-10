<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class UpdateNamespaceDataRequest extends Model
{
    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $authType;

    /**
     * @var string
     */
    public $deviceIdType;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $accountType;

    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $oldData;

    /**
     * @var string
     */
    public $newData;
    protected $_name = [
        'projectId'    => 'ProjectId',
        'namespace'    => 'Namespace',
        'authType'     => 'AuthType',
        'deviceIdType' => 'DeviceIdType',
        'deviceId'     => 'DeviceId',
        'accountType'  => 'AccountType',
        'accountId'    => 'AccountId',
        'path'         => 'Path',
        'oldData'      => 'OldData',
        'newData'      => 'NewData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }
        if (null !== $this->deviceIdType) {
            $res['DeviceIdType'] = $this->deviceIdType;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->oldData) {
            $res['OldData'] = $this->oldData;
        }
        if (null !== $this->newData) {
            $res['NewData'] = $this->newData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateNamespaceDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }
        if (isset($map['DeviceIdType'])) {
            $model->deviceIdType = $map['DeviceIdType'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['OldData'])) {
            $model->oldData = $map['OldData'];
        }
        if (isset($map['NewData'])) {
            $model->newData = $map['NewData'];
        }

        return $model;
    }
}
