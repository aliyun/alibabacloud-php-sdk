<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class UpgradeClusterRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $requestPars;

    /**
     * @var string
     */
    public $upgradeVersion;
    protected $_name = [
        'instanceId'     => 'InstanceId',
        'requestPars'    => 'RequestPars',
        'upgradeVersion' => 'UpgradeVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->requestPars) {
            $res['RequestPars'] = $this->requestPars;
        }
        if (null !== $this->upgradeVersion) {
            $res['UpgradeVersion'] = $this->upgradeVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RequestPars'])) {
            $model->requestPars = $map['RequestPars'];
        }
        if (isset($map['UpgradeVersion'])) {
            $model->upgradeVersion = $map['UpgradeVersion'];
        }

        return $model;
    }
}
