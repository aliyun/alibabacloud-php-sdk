<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models;

use AlibabaCloud\Dara\Model;

class ExportVocabularyRequest extends Model
{
    /**
     * @var string
     */
    public $businessUnitId;

    /**
     * @var string[]
     */
    public $vocabularyIds;
    protected $_name = [
        'businessUnitId' => 'BusinessUnitId',
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
        if (null !== $this->businessUnitId) {
            $res['BusinessUnitId'] = $this->businessUnitId;
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
        if (isset($map['BusinessUnitId'])) {
            $model->businessUnitId = $map['BusinessUnitId'];
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
