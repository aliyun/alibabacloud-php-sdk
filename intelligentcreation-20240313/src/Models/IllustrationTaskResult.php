<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class IllustrationTaskResult extends Model
{
    /**
     * @var IllustrationTask
     */
    public $illustrationTask;

    /**
     * @example 3239281273464326823
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'illustrationTask' => 'illustrationTask',
        'requestId'        => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->illustrationTask) {
            $res['illustrationTask'] = null !== $this->illustrationTask ? $this->illustrationTask->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IllustrationTaskResult
     */
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
