<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class JoinPublicIpsToEpnInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $EPNInstanceId;

    /**
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
