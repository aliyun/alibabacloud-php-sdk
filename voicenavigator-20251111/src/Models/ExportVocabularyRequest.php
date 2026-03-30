<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models;

use AlibabaCloud\Dara\Model;

class ExportVocabularyRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $vocabularyIds;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'vocabularyIds' => 'VocabularyIds',
    ];

    public function validate()
    {
        if (\is_array($this->vocabularyIds)) {
            Model::validateArray($this->vocabularyIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->vocabularyIds) {
            if (\is_array($this->vocabularyIds)) {
                $res['VocabularyIds'] = [];
                $n1 = 0;
                foreach ($this->vocabularyIds as $item1) {
                    $res['VocabularyIds'][$n1] = $item1;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['VocabularyIds'])) {
            if (!empty($map['VocabularyIds'])) {
                $model->vocabularyIds = [];
                $n1 = 0;
                foreach ($map['VocabularyIds'] as $item1) {
                    $model->vocabularyIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
