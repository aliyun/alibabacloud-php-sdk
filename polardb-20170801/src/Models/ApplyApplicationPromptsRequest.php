<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class ApplyApplicationPromptsRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string[]
     */
    public $disabledPromptIds;

    /**
     * @var string[]
     */
    public $enabledPromptIds;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'disabledPromptIds' => 'DisabledPromptIds',
        'enabledPromptIds' => 'EnabledPromptIds',
    ];

    public function validate()
    {
        if (\is_array($this->disabledPromptIds)) {
            Model::validateArray($this->disabledPromptIds);
        }
        if (\is_array($this->enabledPromptIds)) {
            Model::validateArray($this->enabledPromptIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->disabledPromptIds) {
            if (\is_array($this->disabledPromptIds)) {
                $res['DisabledPromptIds'] = [];
                $n1 = 0;
                foreach ($this->disabledPromptIds as $item1) {
                    $res['DisabledPromptIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->enabledPromptIds) {
            if (\is_array($this->enabledPromptIds)) {
                $res['EnabledPromptIds'] = [];
                $n1 = 0;
                foreach ($this->enabledPromptIds as $item1) {
                    $res['EnabledPromptIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['DisabledPromptIds'])) {
                $model->disabledPromptIds = [];
                $n1 = 0;
                foreach ($map['DisabledPromptIds'] as $item1) {
                    $model->disabledPromptIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EnabledPromptIds'])) {
            if (!empty($map['EnabledPromptIds'])) {
                $model->enabledPromptIds = [];
                $n1 = 0;
                foreach ($map['EnabledPromptIds'] as $item1) {
                    $model->enabledPromptIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
