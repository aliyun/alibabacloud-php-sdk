<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models;

use AlibabaCloud\Dara\Model;

class ExportVocabularyShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $businessUnitId;

    /**
     * @var string
     */
    public $vocabularyIdsShrink;
    protected $_name = [
        'businessUnitId' => 'BusinessUnitId',
        'vocabularyIdsShrink' => 'VocabularyIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessUnitId) {
            $res['BusinessUnitId'] = $this->businessUnitId;
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
        if (isset($map['BusinessUnitId'])) {
            $model->businessUnitId = $map['BusinessUnitId'];
        }

        if (isset($map['VocabularyIds'])) {
            $model->vocabularyIdsShrink = $map['VocabularyIds'];
        }

        return $model;
    }
}
