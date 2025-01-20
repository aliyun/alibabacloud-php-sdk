<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;

class DeleteNacosServiceRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;
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
    public $serviceName;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'groupName'      => 'GroupName',
        'instanceId'     => 'InstanceId',
        'namespaceId'    => 'NamespaceId',
        'serviceName'    => 'ServiceName',
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

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
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

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
