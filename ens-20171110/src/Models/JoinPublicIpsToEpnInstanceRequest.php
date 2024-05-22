<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class JoinPublicIpsToEpnInstanceRequest extends Model
{
    /**
     * @description The ID of the EPN instance.
     *
     * This parameter is required.
     * @example epn-xxxx
     *
     * @var string
     */
    public $EPNInstanceId;

    /**
     * @description The information about the public IP address that you want to add to the EPN instance.
     *
     * This parameter is required.
     * @example InstanceInfos=[{"PublicIpAddress":"2.230.XX.XX"},{"PublicIpAddress":"2.230.XX.XX"}]
     *
     * @var string
     */
    public $instanceInfos;
    protected $_name = [
        'EPNInstanceId' => 'EPNInstanceId',
        'instanceInfos' => 'InstanceInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->EPNInstanceId) {
            $res['EPNInstanceId'] = $this->EPNInstanceId;
        }
        if (null !== $this->instanceInfos) {
            $res['InstanceInfos'] = $this->instanceInfos;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return JoinPublicIpsToEpnInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EPNInstanceId'])) {
            $model->EPNInstanceId = $map['EPNInstanceId'];
        }
        if (isset($map['InstanceInfos'])) {
            $model->instanceInfos = $map['InstanceInfos'];
        }

        return $model;
    }
}
