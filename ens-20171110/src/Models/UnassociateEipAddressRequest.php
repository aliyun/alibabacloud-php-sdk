<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class UnassociateEipAddressRequest extends Model
{
    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $eip;

    /**
     * @var string
     */
    public $instanceIdInternetIp;
    protected $_name = [
        'version'              => 'Version',
        'ensRegionId'          => 'EnsRegionId',
        'eip'                  => 'Eip',
        'instanceIdInternetIp' => 'InstanceIdInternetIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
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
     * @return UnassociateEipAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['Eip'])) {
            $model->eip = $map['Eip'];
        }
        if (isset($map['InstanceIdInternetIp'])) {
            $model->instanceIdInternetIp = $map['InstanceIdInternetIp'];
        }

        return $model;
    }
}
