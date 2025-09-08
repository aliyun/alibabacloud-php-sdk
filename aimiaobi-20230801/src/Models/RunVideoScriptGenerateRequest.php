<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class RunVideoScriptGenerateRequest extends Model
{
    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var string
     */
    public $scriptLength;

    /**
     * @var int
     */
    public $scriptNumber;

    /**
     * @var bool
     */
    public $useSearch;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'language' => 'Language',
        'prompt' => 'Prompt',
        'scriptLength' => 'ScriptLength',
        'scriptNumber' => 'ScriptNumber',
        'useSearch' => 'UseSearch',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }

        if (null !== $this->scriptLength) {
            $res['ScriptLength'] = $this->scriptLength;
        }

        if (null !== $this->scriptNumber) {
            $res['ScriptNumber'] = $this->scriptNumber;
        }

        if (null !== $this->useSearch) {
            $res['UseSearch'] = $this->useSearch;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }

        if (isset($map['ScriptLength'])) {
            $model->scriptLength = $map['ScriptLength'];
        }

        if (isset($map['ScriptNumber'])) {
            $model->scriptNumber = $map['ScriptNumber'];
        }

        if (isset($map['UseSearch'])) {
            $model->useSearch = $map['UseSearch'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
