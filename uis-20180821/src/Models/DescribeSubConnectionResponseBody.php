<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Uis\V20180821\Models;

use AlibabaCloud\Tea\Model;

class DescribeSubConnectionResponseBody extends Model
{
    /**
     * @var string
     */
    public $customerTunnelIp;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $localTunnelIp;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $uisId;

    /**
     * @var string
     */
    public $customerIp;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $uisNodeId;

    /**
     * @var string
     */
    public $uisSubConnectionId;

    /**
     * @var string
     */
    public $customerSubnet;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'customerTunnelIp'   => 'CustomerTunnelIp',
        'description'        => 'Description',
        'localTunnelIp'      => 'LocalTunnelIp',
        'requestId'          => 'RequestId',
        'uisId'              => 'UisId',
        'customerIp'         => 'CustomerIp',
        'ip'                 => 'Ip',
        'uisNodeId'          => 'UisNodeId',
        'uisSubConnectionId' => 'UisSubConnectionId',
        'customerSubnet'     => 'CustomerSubnet',
        'name'               => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customerTunnelIp) {
            $res['CustomerTunnelIp'] = $this->customerTunnelIp;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->localTunnelIp) {
            $res['LocalTunnelIp'] = $this->localTunnelIp;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->uisId) {
            $res['UisId'] = $this->uisId;
        }
        if (null !== $this->customerIp) {
            $res['CustomerIp'] = $this->customerIp;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->uisNodeId) {
            $res['UisNodeId'] = $this->uisNodeId;
        }
        if (null !== $this->uisSubConnectionId) {
            $res['UisSubConnectionId'] = $this->uisSubConnectionId;
        }
        if (null !== $this->customerSubnet) {
            $res['CustomerSubnet'] = $this->customerSubnet;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSubConnectionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomerTunnelIp'])) {
            $model->customerTunnelIp = $map['CustomerTunnelIp'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['LocalTunnelIp'])) {
            $model->localTunnelIp = $map['LocalTunnelIp'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UisId'])) {
            $model->uisId = $map['UisId'];
        }
        if (isset($map['CustomerIp'])) {
            $model->customerIp = $map['CustomerIp'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['UisNodeId'])) {
            $model->uisNodeId = $map['UisNodeId'];
        }
        if (isset($map['UisSubConnectionId'])) {
            $model->uisSubConnectionId = $map['UisSubConnectionId'];
        }
        if (isset($map['CustomerSubnet'])) {
            $model->customerSubnet = $map['CustomerSubnet'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
