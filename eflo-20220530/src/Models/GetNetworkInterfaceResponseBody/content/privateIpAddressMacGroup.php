<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetNetworkInterfaceResponseBody\content;

use AlibabaCloud\Tea\Model;

class privateIpAddressMacGroup extends Model
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
     * @description Secondary private MAC address
     *
     * @example 01-00-5e-00-00-16
     *
     * @var string
     */
    public $ipAddressMac;

    /**
     * @description IP unique identifier
     *
     * @example sip-xxxx
     *
     * @var string
     */
    public $ipName;

    /**
     * @description The error message. (If the instance is in the Exception state, the exception cause is prompted.)
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description Secondary private IP address
     *
     * @example 172.23.161.57
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description The state of the rule.
     *
     * @example Available
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'description'      => 'Description',
        'ipAddressMac'     => 'IpAddressMac',
        'ipName'           => 'IpName',
        'message'          => 'Message',
        'privateIpAddress' => 'PrivateIpAddress',
        'status'           => 'Status',
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
        if (null !== $this->ipAddressMac) {
            $res['IpAddressMac'] = $this->ipAddressMac;
        }
        if (null !== $this->ipName) {
            $res['IpName'] = $this->ipName;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return privateIpAddressMacGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
