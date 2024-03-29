<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEipAddressesResponseBody\eipAddresses;

use AlibabaCloud\Tea\Model;

class eipAddress extends Model
{
    /**
     * @description The information about an EIP.
     *
     * @example 203.107.XX.XX
     *
     * @var string
     */
    public $eip;

    /**
     * @description The public IP address of the ENS instance.
     *
     * @example 203.107.XX.XX
     *
     * @var string
     */
    public $instanceIdInternetIp;
    protected $_name = [
        'eip'                  => 'Eip',
        'instanceIdInternetIp' => 'InstanceIdInternetIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eip) {
            $res['Eip'] = $this->eip;
        }
        if (null !== $this->instanceIdInternetIp) {
            $res['InstanceIdInternetIp'] = $this->instanceIdInternetIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eipAddress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Eip'])) {
            $model->eip = $map['Eip'];
        }
        if (isset($map['InstanceIdInternetIp'])) {
            $model->instanceIdInternetIp = $map['InstanceIdInternetIp'];
        }

        return $model;
    }
}
