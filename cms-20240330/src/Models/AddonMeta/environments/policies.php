<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\AddonMeta\environments;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\AddonMeta\environments\policies\bindEntity;
use AlibabaCloud\SDK\Cms\V20240330\Models\AddonMeta\environments\policies\metricCheckRule;
use AlibabaCloud\SDK\Cms\V20240330\Models\AddonMeta\environments\policies\protocols;

class policies extends Model
{
    /**
     * @var string
     */
    public $alertDefaultStatus;

    /**
     * @var bool
     */
    public $bindDefaultPolicy;

    /**
     * @var bindEntity
     */
    public $bindEntity;

    /**
     * @var bool
     */
    public $defaultInstall;

    /**
     * @var bool
     */
    public $enableServiceAccount;

    /**
     * @var metricCheckRule
     */
    public $metricCheckRule;

    /**
     * @var bool
     */
    public $needRestartAfterIntegration;

    /**
     * @var protocols[]
     */
    public $protocols;

    /**
     * @var string
     */
    public $targetAddonName;
    protected $_name = [
        'alertDefaultStatus' => 'alertDefaultStatus',
        'bindDefaultPolicy' => 'bindDefaultPolicy',
        'bindEntity' => 'bindEntity',
        'defaultInstall' => 'defaultInstall',
        'enableServiceAccount' => 'enableServiceAccount',
        'metricCheckRule' => 'metricCheckRule',
        'needRestartAfterIntegration' => 'needRestartAfterIntegration',
        'protocols' => 'protocols',
        'targetAddonName' => 'targetAddonName',
    ];

    public function validate()
    {
        if (null !== $this->bindEntity) {
            $this->bindEntity->validate();
        }
        if (null !== $this->metricCheckRule) {
            $this->metricCheckRule->validate();
        }
        if (\is_array($this->protocols)) {
            Model::validateArray($this->protocols);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertDefaultStatus) {
            $res['alertDefaultStatus'] = $this->alertDefaultStatus;
        }

        if (null !== $this->bindDefaultPolicy) {
            $res['bindDefaultPolicy'] = $this->bindDefaultPolicy;
        }

        if (null !== $this->bindEntity) {
            $res['bindEntity'] = null !== $this->bindEntity ? $this->bindEntity->toArray($noStream) : $this->bindEntity;
        }

        if (null !== $this->defaultInstall) {
            $res['defaultInstall'] = $this->defaultInstall;
        }

        if (null !== $this->enableServiceAccount) {
            $res['enableServiceAccount'] = $this->enableServiceAccount;
        }

        if (null !== $this->metricCheckRule) {
            $res['metricCheckRule'] = null !== $this->metricCheckRule ? $this->metricCheckRule->toArray($noStream) : $this->metricCheckRule;
        }

        if (null !== $this->needRestartAfterIntegration) {
            $res['needRestartAfterIntegration'] = $this->needRestartAfterIntegration;
        }

        if (null !== $this->protocols) {
            if (\is_array($this->protocols)) {
                $res['protocols'] = [];
                $n1 = 0;
                foreach ($this->protocols as $item1) {
                    $res['protocols'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->targetAddonName) {
            $res['targetAddonName'] = $this->targetAddonName;
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
        if (isset($map['alertDefaultStatus'])) {
            $model->alertDefaultStatus = $map['alertDefaultStatus'];
        }

        if (isset($map['bindDefaultPolicy'])) {
            $model->bindDefaultPolicy = $map['bindDefaultPolicy'];
        }

        if (isset($map['bindEntity'])) {
            $model->bindEntity = bindEntity::fromMap($map['bindEntity']);
        }

        if (isset($map['defaultInstall'])) {
            $model->defaultInstall = $map['defaultInstall'];
        }

        if (isset($map['enableServiceAccount'])) {
            $model->enableServiceAccount = $map['enableServiceAccount'];
        }

        if (isset($map['metricCheckRule'])) {
            $model->metricCheckRule = metricCheckRule::fromMap($map['metricCheckRule']);
        }

        if (isset($map['needRestartAfterIntegration'])) {
            $model->needRestartAfterIntegration = $map['needRestartAfterIntegration'];
        }

        if (isset($map['protocols'])) {
            if (!empty($map['protocols'])) {
                $model->protocols = [];
                $n1 = 0;
                foreach ($map['protocols'] as $item1) {
                    $model->protocols[$n1++] = protocols::fromMap($item1);
                }
            }
        }

        if (isset($map['targetAddonName'])) {
            $model->targetAddonName = $map['targetAddonName'];
        }

        return $model;
    }
}
