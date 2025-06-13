<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\UpdateAScriptsRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateAScriptsRequest\AScripts\extAttributes;

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
     * @var bool
     */
    public $enabled;

    /**
     * @var bool
     */
    public $extAttributeEnabled;

    /**
     * @var extAttributes[]
     */
    public $extAttributes;

    /**
     * @var string
     */
    public $scriptContent;
    protected $_name = [
        'AScriptId' => 'AScriptId',
        'AScriptName' => 'AScriptName',
        'enabled' => 'Enabled',
        'extAttributeEnabled' => 'ExtAttributeEnabled',
        'extAttributes' => 'ExtAttributes',
        'scriptContent' => 'ScriptContent',
    ];

    public function validate()
    {
        if (\is_array($this->extAttributes)) {
            Model::validateArray($this->extAttributes);
        }
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

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->extAttributeEnabled) {
            $res['ExtAttributeEnabled'] = $this->extAttributeEnabled;
        }

        if (null !== $this->extAttributes) {
            if (\is_array($this->extAttributes)) {
                $res['ExtAttributes'] = [];
                $n1 = 0;
                foreach ($this->extAttributes as $item1) {
                    $res['ExtAttributes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['ExtAttributeEnabled'])) {
            $model->extAttributeEnabled = $map['ExtAttributeEnabled'];
        }

        if (isset($map['ExtAttributes'])) {
            if (!empty($map['ExtAttributes'])) {
                $model->extAttributes = [];
                $n1 = 0;
                foreach ($map['ExtAttributes'] as $item1) {
                    $model->extAttributes[$n1] = extAttributes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ScriptContent'])) {
            $model->scriptContent = $map['ScriptContent'];
        }

        return $model;
    }
}
