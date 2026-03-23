<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class ApplyApplicationPromptsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $disabledPromptIdsShrink;

    /**
     * @var string
     */
    public $enabledPromptIdsShrink;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'disabledPromptIdsShrink' => 'DisabledPromptIds',
        'enabledPromptIdsShrink' => 'EnabledPromptIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->disabledPromptIdsShrink) {
            $res['DisabledPromptIds'] = $this->disabledPromptIdsShrink;
        }

        if (null !== $this->enabledPromptIdsShrink) {
            $res['EnabledPromptIds'] = $this->enabledPromptIdsShrink;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['DisabledPromptIds'])) {
            $model->disabledPromptIdsShrink = $map['DisabledPromptIds'];
        }

        if (isset($map['EnabledPromptIds'])) {
            $model->enabledPromptIdsShrink = $map['EnabledPromptIds'];
        }

        return $model;
    }
}
