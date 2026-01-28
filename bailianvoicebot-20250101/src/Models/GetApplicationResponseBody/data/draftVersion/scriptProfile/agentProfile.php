<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\GetApplicationResponseBody\data\draftVersion\scriptProfile;

use AlibabaCloud\Dara\Model;

class agentProfile extends Model
{
    /**
     * @var string
     */
    public $agentProfileId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $promptsJson;

    /**
     * @var string
     */
    public $scriptProfileTemplateId;
    protected $_name = [
        'agentProfileId' => 'AgentProfileId',
        'description' => 'Description',
        'promptsJson' => 'PromptsJson',
        'scriptProfileTemplateId' => 'ScriptProfileTemplateId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentProfileId) {
            $res['AgentProfileId'] = $this->agentProfileId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->promptsJson) {
            $res['PromptsJson'] = $this->promptsJson;
        }

        if (null !== $this->scriptProfileTemplateId) {
            $res['ScriptProfileTemplateId'] = $this->scriptProfileTemplateId;
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
        if (isset($map['AgentProfileId'])) {
            $model->agentProfileId = $map['AgentProfileId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['PromptsJson'])) {
            $model->promptsJson = $map['PromptsJson'];
        }

        if (isset($map['ScriptProfileTemplateId'])) {
            $model->scriptProfileTemplateId = $map['ScriptProfileTemplateId'];
        }

        return $model;
    }
}
