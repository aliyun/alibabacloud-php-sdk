<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class CheckInstanceModuleStatusRequest extends Model
{
    /**
     * @var string
     */
    public $featureKey;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $moduleKey;

    /**
     * @var string
     */
    public $subFeatureKey;
    protected $_name = [
        'featureKey' => 'FeatureKey',
        'instanceId' => 'InstanceId',
        'moduleKey' => 'ModuleKey',
        'subFeatureKey' => 'SubFeatureKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->featureKey) {
            $res['FeatureKey'] = $this->featureKey;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->moduleKey) {
            $res['ModuleKey'] = $this->moduleKey;
        }

        if (null !== $this->subFeatureKey) {
            $res['SubFeatureKey'] = $this->subFeatureKey;
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
        if (isset($map['FeatureKey'])) {
            $model->featureKey = $map['FeatureKey'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ModuleKey'])) {
            $model->moduleKey = $map['ModuleKey'];
        }

        if (isset($map['SubFeatureKey'])) {
            $model->subFeatureKey = $map['SubFeatureKey'];
        }

        return $model;
    }
}
