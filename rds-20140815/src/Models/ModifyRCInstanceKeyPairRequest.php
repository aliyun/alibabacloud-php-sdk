<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class ModifyRCInstanceKeyPairRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $keyPairName;
    /**
     * @var bool
     */
    public $reboot;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
