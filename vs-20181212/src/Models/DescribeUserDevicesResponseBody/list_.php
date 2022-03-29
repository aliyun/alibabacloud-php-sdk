<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeUserDevicesResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $aliUid;

    /**
     * @var string
     */
    public $edgeNodeName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $macAddress;

    /**
     * @var string
     */
    public $matrixId;

    /**
     * @var string
     */
    public $server;

    /**
     * @var string
     */
    public $specification;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'aliUid'        => 'AliUid',
        'edgeNodeName'  => 'EdgeNodeName',
        'instanceId'    => 'InstanceId',
        'macAddress'    => 'MacAddress',
        'matrixId'      => 'MatrixId',
        'server'        => 'Server',
        'specification' => 'Specification',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->edgeNodeName) {
            $res['EdgeNodeName'] = $this->edgeNodeName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->macAddress) {
            $res['MacAddress'] = $this->macAddress;
        }
        if (null !== $this->matrixId) {
            $res['MatrixId'] = $this->matrixId;
        }
        if (null !== $this->server) {
            $res['Server'] = $this->server;
        }
        if (null !== $this->specification) {
            $res['Specification'] = $this->specification;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['EdgeNodeName'])) {
            $model->edgeNodeName = $map['EdgeNodeName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MacAddress'])) {
            $model->macAddress = $map['MacAddress'];
        }
        if (isset($map['MatrixId'])) {
            $model->matrixId = $map['MatrixId'];
        }
        if (isset($map['Server'])) {
            $model->server = $map['Server'];
        }
        if (isset($map['Specification'])) {
            $model->specification = $map['Specification'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
