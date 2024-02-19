<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListAddonsResponseBody\data\environments;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListAddonsResponseBody\data\environments\policies\metricCheckRule;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListAddonsResponseBody\data\environments\policies\protocols;
use AlibabaCloud\Tea\Model;

class policies extends Model
{
    /**
     * @description Default alert status.
     *
     * @example default
     *
     * @var string
     */
    public $alertDefaultStatus;

    /**
     * @description Default install status.
     *
     * @example false
     *
     * @var bool
     */
    public $defaultInstall;

    /**
     * @description Whether to enable a service account.
     *
     * @example false.
     *
     * @var bool
     */
    public $enableServiceAccount;

    /**
     * @description Metric check rule PromQL.
     *
     * @var metricCheckRule
     */
    public $metricCheckRule;

    /**
     * @description Whether to restart after integration.
     *
     * @example false
     *
     * @var bool
     */
    public $needRestartAfterIntegration;

    /**
     * @description Protocol list.
     *
     * @var protocols[]
     */
    public $protocols;

    /**
     * @description Target Addon name.
     *
     * @example cloud-rds-mysql
     *
     * @var string
     */
    public $targetAddonName;
    protected $_name = [
        'alertDefaultStatus'          => 'AlertDefaultStatus',
        'defaultInstall'              => 'DefaultInstall',
        'enableServiceAccount'        => 'EnableServiceAccount',
        'metricCheckRule'             => 'MetricCheckRule',
        'needRestartAfterIntegration' => 'NeedRestartAfterIntegration',
        'protocols'                   => 'Protocols',
        'targetAddonName'             => 'TargetAddonName',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['MetricCheckRule'] = null !== $this->metricCheckRule ? $this->metricCheckRule->toMap() : null;
        }
        if (null !== $this->needRestartAfterIntegration) {
            $res['NeedRestartAfterIntegration'] = $this->needRestartAfterIntegration;
        }
        if (null !== $this->protocols) {
            $res['Protocols'] = [];
            if (null !== $this->protocols && \is_array($this->protocols)) {
                $n = 0;
                foreach ($this->protocols as $item) {
                    $res['Protocols'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->targetAddonName) {
            $res['TargetAddonName'] = $this->targetAddonName;
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
                $n                = 0;
                foreach ($map['Protocols'] as $item) {
                    $model->protocols[$n++] = null !== $item ? protocols::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TargetAddonName'])) {
            $model->targetAddonName = $map['TargetAddonName'];
        }

        return $model;
    }
}
