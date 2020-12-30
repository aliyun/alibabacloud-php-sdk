<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Uis\V20180821\Models\DescribeUisNetworkInterfacesResponseBody\networkInterfaces;

use AlibabaCloud\Tea\Model;

class networkInterface extends Model
{
    /**
     * @var string
     */
    public $uisEniId;

    /**
     * @var string
     */
    public $uisNodeId;

    /**
     * @var string
     */
    public $ipAddress;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $securityGroupID;

    /**
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $log;
    protected $_name = [
        'uisEniId'           => 'UisEniId',
        'uisNodeId'          => 'UisNodeId',
        'ipAddress'          => 'IpAddress',
        'description'        => 'Description',
        'vswitchId'          => 'VswitchId',
        'state'              => 'State',
        'securityGroupID'    => 'SecurityGroupID',
        'networkInterfaceId' => 'NetworkInterfaceId',
        'name'               => 'Name',
        'log'                => 'Log',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uisEniId) {
            $res['UisEniId'] = $this->uisEniId;
        }
        if (null !== $this->uisNodeId) {
            $res['UisNodeId'] = $this->uisNodeId;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->securityGroupID) {
            $res['SecurityGroupID'] = $this->securityGroupID;
        }
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->log) {
            $res['Log'] = $this->log;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkInterface
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UisEniId'])) {
            $model->uisEniId = $map['UisEniId'];
        }
        if (isset($map['UisNodeId'])) {
            $model->uisNodeId = $map['UisNodeId'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['SecurityGroupID'])) {
            $model->securityGroupID = $map['SecurityGroupID'];
        }
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Log'])) {
            $model->log = $map['Log'];
        }

        return $model;
    }
}
