<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;

class CreateNacosServiceRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var bool
     */
    public $ephemeral;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $protectThreshold;

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'clusterId' => 'ClusterId',
        'ephemeral' => 'Ephemeral',
        'groupName' => 'GroupName',
        'instanceId' => 'InstanceId',
        'namespaceId' => 'NamespaceId',
        'protectThreshold' => 'ProtectThreshold',
        'serviceName' => 'ServiceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->ephemeral) {
            $res['Ephemeral'] = $this->ephemeral;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        if (null !== $this->protectThreshold) {
            $res['ProtectThreshold'] = $this->protectThreshold;
        }

        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['Ephemeral'])) {
            $model->ephemeral = $map['Ephemeral'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        if (isset($map['ProtectThreshold'])) {
            $model->protectThreshold = $map['ProtectThreshold'];
        }

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
