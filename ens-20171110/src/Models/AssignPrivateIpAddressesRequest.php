<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class AssignPrivateIpAddressesRequest extends Model
{
    /**
     * @example eni-uf6533jbifugr5fo2j1w
     *
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @example vsw-5rllcjb3ol6duzjdnbm1ombn7
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'networkInterfaceId' => 'NetworkInterfaceId',
        'vSwitchId'          => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssignPrivateIpAddressesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
