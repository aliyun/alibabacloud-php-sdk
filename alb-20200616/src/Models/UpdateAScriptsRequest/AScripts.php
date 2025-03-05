<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\UpdateAScriptsRequest;

use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateAScriptsRequest\AScripts\extAttributes;
use AlibabaCloud\Tea\Model;

class AScripts extends Model
{
    /**
     * @description The rule ID.
     *
     * This parameter is required.
     * @example as-mhqxcanmivn4g5****
     *
     * @var string
     */
    public $AScriptId;

    /**
     * @description The name of the AScript rule.
     *
     * The name must be 2 to 128 character in length, and can contain letters, digits, periods (.), underscores (_), and hyphens (-). It must start with a letter.
     * @example Group1
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
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description Specifies whether to enable the extended attributes of the Ascript rule. Valid values:
     *
     *   true
     *   false (false)
     *
     * @example true
     *
     * @var bool
     */
    public $extAttributeEnabled;

    /**
     * @description The extended attribute.
     *
     * @var extAttributes[]
     */
    public $extAttributes;

    /**
     * @description The content of the AScript rule.
     *
     * @example if and(match_re($uri, \\"^/1.txt$\\"), $arg_type) { rewrite(concat(\\"/1.\\", $arg_type), \\"break\\") }
     *
     * @var string
     */
    public $scriptContent;
    protected $_name = [
        'AScriptId'           => 'AScriptId',
        'AScriptName'         => 'AScriptName',
        'enabled'             => 'Enabled',
        'extAttributeEnabled' => 'ExtAttributeEnabled',
        'extAttributes'       => 'ExtAttributes',
        'scriptContent'       => 'ScriptContent',
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
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->extAttributeEnabled) {
            $res['ExtAttributeEnabled'] = $this->extAttributeEnabled;
        }
        if (null !== $this->extAttributes) {
            $res['ExtAttributes'] = [];
            if (null !== $this->extAttributes && \is_array($this->extAttributes)) {
                $n = 0;
                foreach ($this->extAttributes as $item) {
                    $res['ExtAttributes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['ExtAttributeEnabled'])) {
            $model->extAttributeEnabled = $map['ExtAttributeEnabled'];
        }
        if (isset($map['ExtAttributes'])) {
            if (!empty($map['ExtAttributes'])) {
                $model->extAttributes = [];
                $n                    = 0;
                foreach ($map['ExtAttributes'] as $item) {
                    $model->extAttributes[$n++] = null !== $item ? extAttributes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ScriptContent'])) {
            $model->scriptContent = $map['ScriptContent'];
        }

        return $model;
    }
}
