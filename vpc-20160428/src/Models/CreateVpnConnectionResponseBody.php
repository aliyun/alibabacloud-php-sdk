<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateVpnConnectionResponseBody extends Model
{
    /**
     * @example 1544666102000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example 082AD562-B8DB-4BB2-861F-DA1FCA01FD76
     *
     * @var string
     */
    public $requestId;

    /**
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
