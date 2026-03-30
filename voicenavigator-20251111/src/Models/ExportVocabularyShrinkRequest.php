<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models;

use AlibabaCloud\Dara\Model;

class ExportVocabularyShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $vocabularyIdsShrink;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'vocabularyIdsShrink' => 'VocabularyIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->vocabularyIdsShrink) {
            $res['VocabularyIds'] = $this->vocabularyIdsShrink;
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
            $model->vocabularyIdsShrink = $map['VocabularyIds'];
        }

        return $model;
    }
}
