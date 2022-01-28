<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class AssociateEipAddressRequest extends Model
{
    /**
     * @var string
     */
    public $eip;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $instanceIdInternetIp;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'eip'                  => 'Eip',
        'ensRegionId'          => 'EnsRegionId',
        'instanceIdInternetIp' => 'InstanceIdInternetIp',
        'version'              => 'Version',
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
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->instanceIdInternetIp) {
            $res['InstanceIdInternetIp'] = $this->instanceIdInternetIp;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssociateEipAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Eip'])) {
            $model->eip = $map['Eip'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['InstanceIdInternetIp'])) {
            $model->instanceIdInternetIp = $map['InstanceIdInternetIp'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
