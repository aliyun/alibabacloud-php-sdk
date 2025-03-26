<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetNetworkInterfaceResponseBody\content;

use AlibabaCloud\Dara\Model;

class privateIpAddressMacGroup extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ipAddressMac;

    /**
     * @var string
     */
    public $ipName;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $privateIpAddress;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'description' => 'Description',
        'ipAddressMac' => 'IpAddressMac',
        'ipName' => 'IpName',
        'message' => 'Message',
        'privateIpAddress' => 'PrivateIpAddress',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
