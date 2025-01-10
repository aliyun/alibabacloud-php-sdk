<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\AssignPrivateIpAddressResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description The unique IP identifier.
     *
     * @example sip-8exxqa2r
     *
     * @var string
     */
    public $ipName;

    /**
     * @description Lingjun network interface controller ID.
     *
     * @example lni-bp18exxqa2rvfn45e5pz
     *
     * @var string
     */
    public $networkInterfaceId;
    protected $_name = [
        'ipName'             => 'IpName',
        'networkInterfaceId' => 'NetworkInterfaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipName) {
            $res['IpName'] = $this->ipName;
        }
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
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
        if (isset($map['IpName'])) {
            $model->ipName = $map['IpName'];
        }
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }

        return $model;
    }
}
