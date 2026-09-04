<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CreateCopilotChatRequest;

use AlibabaCloud\Dara\Model;

class createConversation extends Model
{
    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $planMode;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $thinkingMode;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'model' => 'Model',
        'planMode' => 'PlanMode',
        'projectId' => 'ProjectId',
        'thinkingMode' => 'ThinkingMode',
        'title' => 'Title',
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

        if (null !== $this->planMode) {
            $res['PlanMode'] = $this->planMode;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->thinkingMode) {
            $res['ThinkingMode'] = $this->thinkingMode;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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

        if (isset($map['PlanMode'])) {
            $model->planMode = $map['PlanMode'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['ThinkingMode'])) {
            $model->thinkingMode = $map['ThinkingMode'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
