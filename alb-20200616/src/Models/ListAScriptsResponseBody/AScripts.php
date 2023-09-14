<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListAScriptsResponseBody;

use AlibabaCloud\Tea\Model;

class AScripts extends Model
{
    /**
     * @description The AScript rule ID.
     *
     * @example as-aznwocxofkakf7****
     *
     * @var string
     */
    public $AScriptId;

    /**
     * @description The name of the AScript rule.
     *
     * @example test
     *
     * @var string
     */
    public $AScriptName;

    /**
     * @description The status of the AScript rule. Valid values:
     *
     *   **Creating**
     *   **Available**
     *   **Configuring**
     *   **Deleting**
     *
     * @example Available
     *
     * @var string
     */
    public $AScriptStatus;

    /**
     * @description Indicates whether the AScript rule is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The listener ID.
     *
     * @example lsn-t0w1m9r6suiwmc****
     *
     * @var string
     */
    public $listenerId;

    /**
     * @description The Application Load Balancer (ALB) instance ID.
     *
     * @example alb-vv9rg2ub31tyec****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The content of the AScript rule.
     *
     * @example {test}
     *
     * @var string
     */
    public $scriptContent;
    protected $_name = [
        'AScriptId'      => 'AScriptId',
        'AScriptName'    => 'AScriptName',
        'AScriptStatus'  => 'AScriptStatus',
        'enabled'        => 'Enabled',
        'listenerId'     => 'ListenerId',
        'loadBalancerId' => 'LoadBalancerId',
        'scriptContent'  => 'ScriptContent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->AScriptId) {
            $res['AScriptId'] = $this->AScriptId;
        }
        if (null !== $this->AScriptName) {
            $res['AScriptName'] = $this->AScriptName;
        }
        if (null !== $this->AScriptStatus) {
            $res['AScriptStatus'] = $this->AScriptStatus;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->scriptContent) {
            $res['ScriptContent'] = $this->scriptContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AScripts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AScriptId'])) {
            $model->AScriptId = $map['AScriptId'];
        }
        if (isset($map['AScriptName'])) {
            $model->AScriptName = $map['AScriptName'];
        }
        if (isset($map['AScriptStatus'])) {
            $model->AScriptStatus = $map['AScriptStatus'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['ScriptContent'])) {
            $model->scriptContent = $map['ScriptContent'];
        }

        return $model;
    }
}
