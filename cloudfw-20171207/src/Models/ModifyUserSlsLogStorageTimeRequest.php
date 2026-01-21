<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class ModifyUserSlsLogStorageTimeRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $logVersion;

    /**
     * @var string
     */
    public $slsRegionId;

    /**
     * @var int
     */
    public $storageTime;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'logVersion' => 'LogVersion',
        'slsRegionId' => 'SlsRegionId',
        'storageTime' => 'StorageTime',
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

        if (null !== $this->logVersion) {
            $res['LogVersion'] = $this->logVersion;
        }

        if (null !== $this->slsRegionId) {
            $res['SlsRegionId'] = $this->slsRegionId;
        }

        if (null !== $this->storageTime) {
            $res['StorageTime'] = $this->storageTime;
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

        if (isset($map['LogVersion'])) {
            $model->logVersion = $map['LogVersion'];
        }

        if (isset($map['SlsRegionId'])) {
            $model->slsRegionId = $map['SlsRegionId'];
        }

        if (isset($map['StorageTime'])) {
            $model->storageTime = $map['StorageTime'];
        }

        return $model;
    }
}
