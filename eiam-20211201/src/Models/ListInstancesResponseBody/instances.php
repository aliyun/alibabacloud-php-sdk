<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListInstancesResponseBody\instances\defaultEndpoint;

class instances extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var defaultEndpoint
     */
    public $defaultEndpoint;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $managedServiceCode;

    /**
     * @var bool
     */
    public $serviceManaged;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime' => 'CreateTime',
        'defaultEndpoint' => 'DefaultEndpoint',
        'description' => 'Description',
        'instanceId' => 'InstanceId',
        'managedServiceCode' => 'ManagedServiceCode',
        'serviceManaged' => 'ServiceManaged',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->defaultEndpoint) {
            $this->defaultEndpoint->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->defaultEndpoint) {
            $res['DefaultEndpoint'] = null !== $this->defaultEndpoint ? $this->defaultEndpoint->toArray($noStream) : $this->defaultEndpoint;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->managedServiceCode) {
            $res['ManagedServiceCode'] = $this->managedServiceCode;
        }

        if (null !== $this->serviceManaged) {
            $res['ServiceManaged'] = $this->serviceManaged;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DefaultEndpoint'])) {
            $model->defaultEndpoint = defaultEndpoint::fromMap($map['DefaultEndpoint']);
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ManagedServiceCode'])) {
            $model->managedServiceCode = $map['ManagedServiceCode'];
        }

        if (isset($map['ServiceManaged'])) {
            $model->serviceManaged = $map['ServiceManaged'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
