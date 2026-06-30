<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RealTranslationAgent\V20260622\Models;

use AlibabaCloud\Dara\Model;

class SubmitTranslationTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $APIKey;

    /**
     * @var string
     */
    public $baseTaskId;

    /**
     * @var string
     */
    public $configShrink;

    /**
     * @var string
     */
    public $customTermsShrink;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'APIKey' => 'APIKey',
        'baseTaskId' => 'BaseTaskId',
        'configShrink' => 'Config',
        'customTermsShrink' => 'CustomTerms',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->APIKey) {
            $res['APIKey'] = $this->APIKey;
        }

        if (null !== $this->baseTaskId) {
            $res['BaseTaskId'] = $this->baseTaskId;
        }

        if (null !== $this->configShrink) {
            $res['Config'] = $this->configShrink;
        }

        if (null !== $this->customTermsShrink) {
            $res['CustomTerms'] = $this->customTermsShrink;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['APIKey'])) {
            $model->APIKey = $map['APIKey'];
        }

        if (isset($map['BaseTaskId'])) {
            $model->baseTaskId = $map['BaseTaskId'];
        }

        if (isset($map['Config'])) {
            $model->configShrink = $map['Config'];
        }

        if (isset($map['CustomTerms'])) {
            $model->customTermsShrink = $map['CustomTerms'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
