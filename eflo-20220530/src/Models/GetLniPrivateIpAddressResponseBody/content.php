<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetLniPrivateIpAddressResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description The instance description.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the data address was created.
     *
     * @example 2022-12-26 20:16:36
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description MAC address of the secondary private network
     *
     * @example 00-ff-84-15-ba-67
     *
     * @var string
     */
    public $ipAddressMac;

    /**
     * @description IP unique identifier
     *
     * @example sip-xxxxx
     *
     * @var string
     */
    public $ipName;

    /**
     * @description The error message. (If the instance is in the Exception state, the exception cause is prompted.)
     *
     * @example You don\\"t have the permission of this operation, action=eflo:ListVpdRouteEntries, arn=acs:eflo:cn-wulanchabu:1263399219805497:vpd_rte/*, resourceGroup=null
     *
     * @var string
     */
    public $message;

    /**
     * @description Lingjun network interface controller ID
     *
     * @example lni-2ze4uww7n6hsfzrwq77y
     *
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @description The secondary private IP address of the Lingjun network interface controller.
     *
     * @example 10.42.5.92
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description The region ID.
     *
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The state of the rule.
     *
     * @example Available
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'description'        => 'Description',
        'gmtCreate'          => 'GmtCreate',
        'ipAddressMac'       => 'IpAddressMac',
        'ipName'             => 'IpName',
        'message'            => 'Message',
        'networkInterfaceId' => 'NetworkInterfaceId',
        'privateIpAddress'   => 'PrivateIpAddress',
        'regionId'           => 'RegionId',
        'status'             => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->ipAddressMac) {
            $res['IpAddressMac'] = $this->ipAddressMac;
        }
        if (null !== $this->ipName) {
            $res['IpName'] = $this->ipName;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['IpAddressMac'])) {
            $model->ipAddressMac = $map['IpAddressMac'];
        }
        if (isset($map['IpName'])) {
            $model->ipName = $map['IpName'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
