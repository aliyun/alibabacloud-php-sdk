<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateAScriptsRequest;

use AlibabaCloud\Tea\Model;

class AScripts extends Model
{
    /**
     * @description The name of the AScript rule.
     *
     * The name must be 2 to 128 characters in length and can contain letters, digits, periods (.), underscores (\_), and hyphens (-). The name must start with a letter.
     * @example test
     *
     * @var string
     */
    public $AScriptName;

    /**
     * @description Specifies whether to enable the AScript rule. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example false
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The content of the AScript rule.
     *
     * @example if and(match_re($uri, \"^/1.txt$\"), $arg_type) {   rewrite(concat(\"/1.\", $arg_type), \"break\") }
     *
     * @var string
     */
    public $scriptContent;
    protected $_name = [
        'AScriptName'   => 'AScriptName',
        'enabled'       => 'Enabled',
        'scriptContent' => 'ScriptContent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->AScriptName) {
            $res['AScriptName'] = $this->AScriptName;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
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
        if (isset($map['AScriptName'])) {
            $model->AScriptName = $map['AScriptName'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['ScriptContent'])) {
            $model->scriptContent = $map['ScriptContent'];
        }

        return $model;
    }
}
