<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateVpnConnectionResponseBody extends Model
{
    /**
     * @description The timestamp generated when the IPsec-VPN connection was created. Unit: milliseconds.
     *
     * This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     * @example 1544666102000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The name of the IPsec-VPN connection.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the request.
     *
     * @example 082AD562-B8DB-4BB2-861F-DA1FCA01FD76
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the IPsec-VPN connection.
     *
     * @example vco-bp15oes1py4i6****
     *
     * @var string
     */
    public $vpnConnectionId;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'name'            => 'Name',
        'requestId'       => 'RequestId',
        'vpnConnectionId' => 'VpnConnectionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->vpnConnectionId) {
            $res['VpnConnectionId'] = $this->vpnConnectionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVpnConnectionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VpnConnectionId'])) {
            $model->vpnConnectionId = $map['VpnConnectionId'];
        }

        return $model;
    }
}
