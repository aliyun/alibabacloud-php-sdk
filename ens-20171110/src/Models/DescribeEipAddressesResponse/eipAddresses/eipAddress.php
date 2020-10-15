<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEipAddressesResponse\eipAddresses;

use AlibabaCloud\Tea\Model;

class eipAddress extends Model
{
    /**
     * @var string
     */
    public $eip;

    /**
     * @var string
     */
    public $instanceIdInternetIp;
    protected $_name = [
        'eip'                  => 'Eip',
        'instanceIdInternetIp' => 'InstanceIdInternetIp',
    ];

    public function validate()
    {
        Model::validateRequired('eip', $this->eip, true);
        Model::validateRequired('instanceIdInternetIp', $this->instanceIdInternetIp, true);
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
