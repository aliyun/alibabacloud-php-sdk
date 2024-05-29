<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\SwitchSynchronizationEndpointRequest;

use AlibabaCloud\Tea\Model;

class endpoint extends Model
{
    /**
     * @description The IP address of the database.
     *
     * >  You must specify the IP address only if the **Endpoint.InstanceType** parameter is set to **Express**.
     * @example 172.15.185.***
     *
     * @var string
     */
    public $IP;

    /**
     * @description The ID of the ECS instance or the virtual private cloud (VPC).
     *
     * >
     *   If the **Endpoint.InstanceType** parameter is set to **ECS**, you must specify the ID of the ECS instance.
     *   If the **Endpoint.InstanceType** parameter is set to **Express**, you must specify the ID of the VPC.
     *
     * This parameter is required.
     * @example i-bp11haem1kpkhoup****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The instance type of the database. Valid values:
     *
     *   **LocalInstance**: self-managed database with a public IP address
     *   **ECS**: self-managed database that is hosted on ECS
     *   **Express**: self-managed database that is connected over Express Connect
     *
     * This parameter is required.
     * @example ECS
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The service port number of the database.
     *
     * This parameter is required.
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @description Specifies whether to update the connection settings of the source instance or the destination instance. Valid values:
     *
     *   **Source**
     *   **Destination**
     *
     * This parameter is required.
     * @example Destination
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'IP'           => 'IP',
        'instanceId'   => 'InstanceId',
        'instanceType' => 'InstanceType',
        'port'         => 'Port',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endpoint
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
