<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111\Models\GetTrialAccessChannelResponseBody\data;

use AlibabaCloud\Dara\Model;

class channelScripts extends Model
{
    /**
     * @var string
     */
    public $labelConfigs;

    /**
     * @var string
     */
    public $scriptId;

    /**
     * @var string
     */
    public $scriptName;

    /**
     * @var string
     */
    public $variableConfigs;
    protected $_name = [
        'labelConfigs' => 'LabelConfigs',
        'scriptId' => 'ScriptId',
        'scriptName' => 'ScriptName',
        'variableConfigs' => 'VariableConfigs',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->labelConfigs) {
            $res['LabelConfigs'] = $this->labelConfigs;
        }

        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }

        if (null !== $this->scriptName) {
            $res['ScriptName'] = $this->scriptName;
        }

        if (null !== $this->variableConfigs) {
            $res['VariableConfigs'] = $this->variableConfigs;
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
        if (isset($map['LabelConfigs'])) {
            $model->labelConfigs = $map['LabelConfigs'];
        }

        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }

        if (isset($map['ScriptName'])) {
            $model->scriptName = $map['ScriptName'];
        }

        if (isset($map['VariableConfigs'])) {
            $model->variableConfigs = $map['VariableConfigs'];
        }

        return $model;
    }
}
