<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListInstancesResponseBody\instances\defaultEndpoint;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListInstancesResponseBody\instances\replicationConfiguration;

class instances extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $crossRegionReplication;

    /**
     * @var string
     */
    public $crossRegionReplicationRole;

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
    public $instanceFailoverStatus;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $managedServiceCode;

    /**
     * @var replicationConfiguration
     */
    public $replicationConfiguration;

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
        'crossRegionReplication' => 'CrossRegionReplication',
        'crossRegionReplicationRole' => 'CrossRegionReplicationRole',
        'defaultEndpoint' => 'DefaultEndpoint',
        'description' => 'Description',
        'instanceFailoverStatus' => 'InstanceFailoverStatus',
        'instanceId' => 'InstanceId',
        'managedServiceCode' => 'ManagedServiceCode',
        'replicationConfiguration' => 'ReplicationConfiguration',
        'serviceManaged' => 'ServiceManaged',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->defaultEndpoint) {
            $this->defaultEndpoint->validate();
        }
        if (null !== $this->replicationConfiguration) {
            $this->replicationConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->crossRegionReplication) {
            $res['CrossRegionReplication'] = $this->crossRegionReplication;
        }

        if (null !== $this->crossRegionReplicationRole) {
            $res['CrossRegionReplicationRole'] = $this->crossRegionReplicationRole;
        }

        if (null !== $this->defaultEndpoint) {
            $res['DefaultEndpoint'] = null !== $this->defaultEndpoint ? $this->defaultEndpoint->toArray($noStream) : $this->defaultEndpoint;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceFailoverStatus) {
            $res['InstanceFailoverStatus'] = $this->instanceFailoverStatus;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->managedServiceCode) {
            $res['ManagedServiceCode'] = $this->managedServiceCode;
        }

        if (null !== $this->replicationConfiguration) {
            $res['ReplicationConfiguration'] = null !== $this->replicationConfiguration ? $this->replicationConfiguration->toArray($noStream) : $this->replicationConfiguration;
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

        if (isset($map['CrossRegionReplication'])) {
            $model->crossRegionReplication = $map['CrossRegionReplication'];
        }

        if (isset($map['CrossRegionReplicationRole'])) {
            $model->crossRegionReplicationRole = $map['CrossRegionReplicationRole'];
        }

        if (isset($map['DefaultEndpoint'])) {
            $model->defaultEndpoint = defaultEndpoint::fromMap($map['DefaultEndpoint']);
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InstanceFailoverStatus'])) {
            $model->instanceFailoverStatus = $map['InstanceFailoverStatus'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ManagedServiceCode'])) {
            $model->managedServiceCode = $map['ManagedServiceCode'];
        }

        if (isset($map['ReplicationConfiguration'])) {
            $model->replicationConfiguration = replicationConfiguration::fromMap($map['ReplicationConfiguration']);
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
