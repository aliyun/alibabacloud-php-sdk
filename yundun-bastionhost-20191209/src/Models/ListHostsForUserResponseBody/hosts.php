<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostsForUserResponseBody;

use AlibabaCloud\Tea\Model;

class hosts extends Model
{
    /**
     * @description The endpoint type of the host. Valid values:
     *
     *   **Public**: public endpoint
     *   **Private**: internal endpoint
     *
     * @example Public
     *
     * @var string
     */
    public $activeAddressType;

    /**
     * @description The description of the host.
     *
     * @example comment
     *
     * @var string
     */
    public $comment;

    /**
     * @description The ID of the host.
     *
     * @example 1
     *
     * @var string
     */
    public $hostId;

    /**
     * @description The name of the host.
     *
     * @example host01
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The internal endpoint of the host. The value is a domain name or an IP address.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $hostPrivateAddress;

    /**
     * @description The public endpoint of the host. The value is a domain name or an IP address.
     *
     * @example 10.158.XX.XX
     *
     * @var string
     */
    public $hostPublicAddress;

    /**
     * @description The operating system of the host. Valid values:
     *
     *   **Linux**
     *   **Windows**
     *
     * @example Linux
     *
     * @var string
     */
    public $OSType;
    protected $_name = [
        'activeAddressType'  => 'ActiveAddressType',
        'comment'            => 'Comment',
        'hostId'             => 'HostId',
        'hostName'           => 'HostName',
        'hostPrivateAddress' => 'HostPrivateAddress',
        'hostPublicAddress'  => 'HostPublicAddress',
        'OSType'             => 'OSType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeAddressType) {
            $res['ActiveAddressType'] = $this->activeAddressType;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->hostPrivateAddress) {
            $res['HostPrivateAddress'] = $this->hostPrivateAddress;
        }
        if (null !== $this->hostPublicAddress) {
            $res['HostPublicAddress'] = $this->hostPublicAddress;
        }
        if (null !== $this->OSType) {
            $res['OSType'] = $this->OSType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hosts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveAddressType'])) {
            $model->activeAddressType = $map['ActiveAddressType'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['HostPrivateAddress'])) {
            $model->hostPrivateAddress = $map['HostPrivateAddress'];
        }
        if (isset($map['HostPublicAddress'])) {
            $model->hostPublicAddress = $map['HostPublicAddress'];
        }
        if (isset($map['OSType'])) {
            $model->OSType = $map['OSType'];
        }

        return $model;
    }
}
