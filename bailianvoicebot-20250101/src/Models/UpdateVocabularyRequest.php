<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models;

use AlibabaCloud\Dara\Model;

class UpdateVocabularyRequest extends Model
{
    /**
     * @var string
     */
    public $businessUnitId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $vocabularyId;

    /**
     * @var string[]
     */
    public $words;
    protected $_name = [
        'businessUnitId' => 'BusinessUnitId',
        'description' => 'Description',
        'name' => 'Name',
        'vocabularyId' => 'VocabularyId',
        'words' => 'Words',
    ];

    public function validate()
    {
        if (\is_array($this->words)) {
            Model::validateArray($this->words);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessUnitId) {
            $res['BusinessUnitId'] = $this->businessUnitId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->vocabularyId) {
            $res['VocabularyId'] = $this->vocabularyId;
        }

        if (null !== $this->words) {
            if (\is_array($this->words)) {
                $res['Words'] = [];
                foreach ($this->words as $key1 => $value1) {
                    $res['Words'][$key1] = $value1;
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

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['VocabularyId'])) {
            $model->vocabularyId = $map['VocabularyId'];
        }

        if (isset($map['Words'])) {
            if (!empty($map['Words'])) {
                $model->words = [];
                foreach ($map['Words'] as $key1 => $value1) {
                    $model->words[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
