<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\AddonMeta\environments;

use AlibabaCloud\SDK\Cms\V20240330\Models\AddonMeta\environments\policies\bindEntity;
use AlibabaCloud\SDK\Cms\V20240330\Models\AddonMeta\environments\policies\metricCheckRule;
use AlibabaCloud\SDK\Cms\V20240330\Models\AddonMeta\environments\policies\protocols;
use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertDefaultStatus) {
            $res['alertDefaultStatus'] = $this->alertDefaultStatus;
        }
        if (null !== $this->bindDefaultPolicy) {
            $res['bindDefaultPolicy'] = $this->bindDefaultPolicy;
        }
        if (null !== $this->bindEntity) {
            $res['bindEntity'] = null !== $this->bindEntity ? $this->bindEntity->toMap() : null;
        }
        if (null !== $this->defaultInstall) {
            $res['defaultInstall'] = $this->defaultInstall;
        }
        if (null !== $this->enableServiceAccount) {
            $res['enableServiceAccount'] = $this->enableServiceAccount;
        }
        if (null !== $this->metricCheckRule) {
            $res['metricCheckRule'] = null !== $this->metricCheckRule ? $this->metricCheckRule->toMap() : null;
        }
        if (null !== $this->needRestartAfterIntegration) {
            $res['needRestartAfterIntegration'] = $this->needRestartAfterIntegration;
        }
        if (null !== $this->protocols) {
            $res['protocols'] = [];
            if (null !== $this->protocols && \is_array($this->protocols)) {
                $n = 0;
                foreach ($this->protocols as $item) {
                    $res['protocols'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->targetAddonName) {
            $res['targetAddonName'] = $this->targetAddonName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policies
     */
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
                $n = 0;
                foreach ($map['protocols'] as $item) {
                    $model->protocols[$n++] = null !== $item ? protocols::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['targetAddonName'])) {
            $model->targetAddonName = $map['targetAddonName'];
        }

        return $model;
    }
}
