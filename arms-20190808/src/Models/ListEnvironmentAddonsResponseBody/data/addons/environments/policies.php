<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentAddonsResponseBody\data\addons\environments;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentAddonsResponseBody\data\addons\environments\policies\metricCheckRule;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentAddonsResponseBody\data\addons\environments\policies\protocols;

class policies extends Model
{
    /**
     * @var string
     */
    public $alertDefaultStatus;

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
        'alertDefaultStatus' => 'AlertDefaultStatus',
        'defaultInstall' => 'DefaultInstall',
        'enableServiceAccount' => 'EnableServiceAccount',
        'metricCheckRule' => 'MetricCheckRule',
        'needRestartAfterIntegration' => 'NeedRestartAfterIntegration',
        'protocols' => 'Protocols',
        'targetAddonName' => 'TargetAddonName',
    ];

    public function validate()
    {
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
            $res['AlertDefaultStatus'] = $this->alertDefaultStatus;
        }

        if (null !== $this->defaultInstall) {
            $res['DefaultInstall'] = $this->defaultInstall;
        }

        if (null !== $this->enableServiceAccount) {
            $res['EnableServiceAccount'] = $this->enableServiceAccount;
        }

        if (null !== $this->metricCheckRule) {
            $res['MetricCheckRule'] = null !== $this->metricCheckRule ? $this->metricCheckRule->toArray($noStream) : $this->metricCheckRule;
        }

        if (null !== $this->needRestartAfterIntegration) {
            $res['NeedRestartAfterIntegration'] = $this->needRestartAfterIntegration;
        }

        if (null !== $this->protocols) {
            if (\is_array($this->protocols)) {
                $res['Protocols'] = [];
                $n1 = 0;
                foreach ($this->protocols as $item1) {
                    $res['Protocols'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->targetAddonName) {
            $res['TargetAddonName'] = $this->targetAddonName;
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
        if (isset($map['AlertDefaultStatus'])) {
            $model->alertDefaultStatus = $map['AlertDefaultStatus'];
        }

        if (isset($map['DefaultInstall'])) {
            $model->defaultInstall = $map['DefaultInstall'];
        }

        if (isset($map['EnableServiceAccount'])) {
            $model->enableServiceAccount = $map['EnableServiceAccount'];
        }

        if (isset($map['MetricCheckRule'])) {
            $model->metricCheckRule = metricCheckRule::fromMap($map['MetricCheckRule']);
        }

        if (isset($map['NeedRestartAfterIntegration'])) {
            $model->needRestartAfterIntegration = $map['NeedRestartAfterIntegration'];
        }

        if (isset($map['Protocols'])) {
            if (!empty($map['Protocols'])) {
                $model->protocols = [];
                $n1 = 0;
                foreach ($map['Protocols'] as $item1) {
                    $model->protocols[$n1] = protocols::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TargetAddonName'])) {
            $model->targetAddonName = $map['TargetAddonName'];
        }

        return $model;
    }
}
