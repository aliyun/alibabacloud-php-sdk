<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class UpdateBizTraceRequest extends Model
{
    /**
     * @var string
     */
    public $advancedConfig;

    /**
     * @var string
     */
    public $bizTraceName;

    /**
     * @var string
     */
    public $ruleConfig;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'advancedConfig' => 'advancedConfig',
        'bizTraceName' => 'bizTraceName',
        'ruleConfig' => 'ruleConfig',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->advancedConfig) {
            $res['advancedConfig'] = $this->advancedConfig;
        }

        if (null !== $this->bizTraceName) {
            $res['bizTraceName'] = $this->bizTraceName;
        }

        if (null !== $this->ruleConfig) {
            $res['ruleConfig'] = $this->ruleConfig;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['advancedConfig'])) {
            $model->advancedConfig = $map['advancedConfig'];
        }

        if (isset($map['bizTraceName'])) {
            $model->bizTraceName = $map['bizTraceName'];
        }

        if (isset($map['ruleConfig'])) {
            $model->ruleConfig = $map['ruleConfig'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
