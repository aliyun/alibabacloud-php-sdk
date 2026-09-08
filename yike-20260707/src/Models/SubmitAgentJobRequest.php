<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260707\Models;

use AlibabaCloud\Dara\Model;

class SubmitAgentJobRequest extends Model
{
    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $notifyUrl;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var string
     */
    public $skill;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'model' => 'Model',
        'notifyUrl' => 'NotifyUrl',
        'prompt' => 'Prompt',
        'skill' => 'Skill',
        'userData' => 'UserData',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->notifyUrl) {
            $res['NotifyUrl'] = $this->notifyUrl;
        }

        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }

        if (null !== $this->skill) {
            $res['Skill'] = $this->skill;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['NotifyUrl'])) {
            $model->notifyUrl = $map['NotifyUrl'];
        }

        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }

        if (isset($map['Skill'])) {
            $model->skill = $map['Skill'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
