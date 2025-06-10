<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Dara\Model;

class CreateNamespaceShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $autoCreateRepo;

    /**
     * @var string
     */
    public $defaultRepoConfigurationShrink;

    /**
     * @var string
     */
    public $defaultRepoType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $namespaceName;
    protected $_name = [
        'autoCreateRepo' => 'AutoCreateRepo',
        'defaultRepoConfigurationShrink' => 'DefaultRepoConfiguration',
        'defaultRepoType' => 'DefaultRepoType',
        'instanceId' => 'InstanceId',
        'namespaceName' => 'NamespaceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoCreateRepo) {
            $res['AutoCreateRepo'] = $this->autoCreateRepo;
        }

        if (null !== $this->defaultRepoConfigurationShrink) {
            $res['DefaultRepoConfiguration'] = $this->defaultRepoConfigurationShrink;
        }

        if (null !== $this->defaultRepoType) {
            $res['DefaultRepoType'] = $this->defaultRepoType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->namespaceName) {
            $res['NamespaceName'] = $this->namespaceName;
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
        if (isset($map['AutoCreateRepo'])) {
            $model->autoCreateRepo = $map['AutoCreateRepo'];
        }

        if (isset($map['DefaultRepoConfiguration'])) {
            $model->defaultRepoConfigurationShrink = $map['DefaultRepoConfiguration'];
        }

        if (isset($map['DefaultRepoType'])) {
            $model->defaultRepoType = $map['DefaultRepoType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NamespaceName'])) {
            $model->namespaceName = $map['NamespaceName'];
        }

        return $model;
    }
}
