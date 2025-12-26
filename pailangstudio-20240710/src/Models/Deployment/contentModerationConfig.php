<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models\Deployment;

use AlibabaCloud\Dara\Model;

class contentModerationConfig extends Model
{
    /**
     * @var bool
     */
    public $enableInputModeration;

    /**
     * @var bool
     */
    public $enableOutputModeration;

    /**
     * @var int
     */
    public $streamingModerationThreshold;
    protected $_name = [
        'enableInputModeration' => 'EnableInputModeration',
        'enableOutputModeration' => 'EnableOutputModeration',
        'streamingModerationThreshold' => 'StreamingModerationThreshold',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableInputModeration) {
            $res['EnableInputModeration'] = $this->enableInputModeration;
        }

        if (null !== $this->enableOutputModeration) {
            $res['EnableOutputModeration'] = $this->enableOutputModeration;
        }

        if (null !== $this->streamingModerationThreshold) {
            $res['StreamingModerationThreshold'] = $this->streamingModerationThreshold;
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
        if (isset($map['EnableInputModeration'])) {
            $model->enableInputModeration = $map['EnableInputModeration'];
        }

        if (isset($map['EnableOutputModeration'])) {
            $model->enableOutputModeration = $map['EnableOutputModeration'];
        }

        if (isset($map['StreamingModerationThreshold'])) {
            $model->streamingModerationThreshold = $map['StreamingModerationThreshold'];
        }

        return $model;
    }
}
