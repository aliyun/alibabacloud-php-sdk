<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListAScriptsResponseBody;

use AlibabaCloud\Dara\Model;

class AScripts extends Model
{
    /**
     * @var string
     */
    public $AScriptId;

    /**
     * @var string
     */
    public $AScriptName;

    /**
     * @var string
     */
    public $AScriptStatus;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $listenerId;

    /**
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var string
     */
    public $scriptContent;
    protected $_name = [
        'AScriptId' => 'AScriptId',
        'AScriptName' => 'AScriptName',
        'AScriptStatus' => 'AScriptStatus',
        'enabled' => 'Enabled',
        'listenerId' => 'ListenerId',
        'loadBalancerId' => 'LoadBalancerId',
        'scriptContent' => 'ScriptContent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
