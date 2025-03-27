<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class IllustrationTaskResult extends Model
{
    /**
     * @var IllustrationTask
     */
    public $illustrationTask;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'illustrationTask' => 'illustrationTask',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->illustrationTask) {
            $this->illustrationTask->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->illustrationTask) {
            $res['illustrationTask'] = null !== $this->illustrationTask ? $this->illustrationTask->toArray($noStream) : $this->illustrationTask;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['illustrationTask'])) {
            $model->illustrationTask = IllustrationTask::fromMap($map['illustrationTask']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
