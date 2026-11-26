<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class RLJobSettings extends Model
{
    /**
     * @var mixed[]
     */
    public $advancedSettings;

    /**
     * @var string
     */
    public $businessUserId;

    /**
     * @var string
     */
    public $caller;

    /**
     * @var bool
     */
    public $enableRDMA;

    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var string[]
     */
    public $tags;
    protected $_name = [
        'advancedSettings' => 'AdvancedSettings',
        'businessUserId' => 'BusinessUserId',
        'caller' => 'Caller',
        'enableRDMA' => 'EnableRDMA',
        'pipelineId' => 'PipelineId',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->advancedSettings)) {
            Model::validateArray($this->advancedSettings);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->advancedSettings) {
            if (\is_array($this->advancedSettings)) {
                $res['AdvancedSettings'] = [];
                foreach ($this->advancedSettings as $key1 => $value1) {
                    $res['AdvancedSettings'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->businessUserId) {
            $res['BusinessUserId'] = $this->businessUserId;
        }

        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }

        if (null !== $this->enableRDMA) {
            $res['EnableRDMA'] = $this->enableRDMA;
        }

        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                foreach ($this->tags as $key1 => $value1) {
                    $res['Tags'][$key1] = $value1;
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
        if (isset($map['AdvancedSettings'])) {
            if (!empty($map['AdvancedSettings'])) {
                $model->advancedSettings = [];
                foreach ($map['AdvancedSettings'] as $key1 => $value1) {
                    $model->advancedSettings[$key1] = $value1;
                }
            }
        }

        if (isset($map['BusinessUserId'])) {
            $model->businessUserId = $map['BusinessUserId'];
        }

        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }

        if (isset($map['EnableRDMA'])) {
            $model->enableRDMA = $map['EnableRDMA'];
        }

        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                foreach ($map['Tags'] as $key1 => $value1) {
                    $model->tags[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
