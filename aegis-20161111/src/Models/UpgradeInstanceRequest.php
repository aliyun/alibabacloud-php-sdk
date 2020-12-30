<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aegis\V20161111\Models;

use AlibabaCloud\Tea\Model;

class UpgradeInstanceRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $versionCode;

    /**
     * @var int
     */
    public $vmNumber;
    protected $_name = [
        'ownerId'     => 'OwnerId',
        'clientToken' => 'ClientToken',
        'instanceId'  => 'InstanceId',
        'versionCode' => 'VersionCode',
        'vmNumber'    => 'VmNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
        }
        if (null !== $this->vmNumber) {
            $res['VmNumber'] = $this->vmNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }
        if (isset($map['VmNumber'])) {
            $model->vmNumber = $map['VmNumber'];
        }

        return $model;
    }
}
