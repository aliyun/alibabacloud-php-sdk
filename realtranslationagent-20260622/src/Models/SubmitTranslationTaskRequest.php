<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RealTranslationAgent\V20260622\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RealTranslationAgent\V20260622\Models\SubmitTranslationTaskRequest\config;
use AlibabaCloud\SDK\RealTranslationAgent\V20260622\Models\SubmitTranslationTaskRequest\customTerms;

class SubmitTranslationTaskRequest extends Model
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
     * @var config
     */
    public $config;

    /**
     * @var customTerms[]
     */
    public $customTerms;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'APIKey' => 'APIKey',
        'baseTaskId' => 'BaseTaskId',
        'config' => 'Config',
        'customTerms' => 'CustomTerms',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        if (null !== $this->config) {
            $this->config->validate();
        }
        if (\is_array($this->customTerms)) {
            Model::validateArray($this->customTerms);
        }
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

        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toArray($noStream) : $this->config;
        }

        if (null !== $this->customTerms) {
            if (\is_array($this->customTerms)) {
                $res['CustomTerms'] = [];
                $n1 = 0;
                foreach ($this->customTerms as $item1) {
                    $res['CustomTerms'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            $model->config = config::fromMap($map['Config']);
        }

        if (isset($map['CustomTerms'])) {
            if (!empty($map['CustomTerms'])) {
                $model->customTerms = [];
                $n1 = 0;
                foreach ($map['CustomTerms'] as $item1) {
                    $model->customTerms[$n1] = customTerms::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
