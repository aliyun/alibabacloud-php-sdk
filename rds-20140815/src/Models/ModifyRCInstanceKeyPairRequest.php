<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyRCInstanceKeyPairRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * @example rc-m5sc1271fv344a1r****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the key pair.
     *
     * @example customer_keypairs
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description Specifies whether to restart the instance.
     *
     *   **true**
     *   **false**
     *
     * @example ture
     *
     * @var bool
     */
    public $reboot;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'instanceId'  => 'InstanceId',
        'keyPairName' => 'KeyPairName',
        'reboot'      => 'Reboot',
        'regionId'    => 'RegionId',
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
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->reboot) {
            $res['Reboot'] = $this->reboot;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyRCInstanceKeyPairRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['Reboot'])) {
            $model->reboot = $map['Reboot'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
