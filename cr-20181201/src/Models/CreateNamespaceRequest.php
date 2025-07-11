<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Dara\Model;

class CreateNamespaceRequest extends Model
{
    /**
     * @var bool
     */
    public $autoCreateRepo;

    /**
     * @var RepoConfiguration
     */
    public $defaultRepoConfiguration;

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
        'defaultRepoConfiguration' => 'DefaultRepoConfiguration',
        'defaultRepoType' => 'DefaultRepoType',
        'instanceId' => 'InstanceId',
        'namespaceName' => 'NamespaceName',
    ];

    public function validate()
    {
        if (null !== $this->defaultRepoConfiguration) {
            $this->defaultRepoConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoCreateRepo) {
            $res['AutoCreateRepo'] = $this->autoCreateRepo;
        }

        if (null !== $this->defaultRepoConfiguration) {
            $res['DefaultRepoConfiguration'] = null !== $this->defaultRepoConfiguration ? $this->defaultRepoConfiguration->toArray($noStream) : $this->defaultRepoConfiguration;
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
            $model->defaultRepoConfiguration = RepoConfiguration::fromMap($map['DefaultRepoConfiguration']);
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
