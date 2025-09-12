<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models;

use AlibabaCloud\Dara\Model;

class UpgradeVersionRequest extends Model
{
    /**
     * @var bool
     */
    public $fastMode;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $minor;

    /**
     * @var string
     */
    public $targetVersion;
    protected $_name = [
        'fastMode' => 'FastMode',
        'instanceId' => 'InstanceId',
        'minor' => 'Minor',
        'targetVersion' => 'TargetVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fastMode) {
            $res['FastMode'] = $this->fastMode;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->minor) {
            $res['Minor'] = $this->minor;
        }

        if (null !== $this->targetVersion) {
            $res['TargetVersion'] = $this->targetVersion;
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
        if (isset($map['FastMode'])) {
            $model->fastMode = $map['FastMode'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Minor'])) {
            $model->minor = $map['Minor'];
        }

        if (isset($map['TargetVersion'])) {
            $model->targetVersion = $map['TargetVersion'];
        }

        return $model;
    }
}
