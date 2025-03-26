<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class AITeacherExpansionPracticeTaskGenerateRequest extends Model
{
    /**
     * @var string
     */
    public $grade;

    /**
     * @var string[]
     */
    public $keySentences;

    /**
     * @var string[]
     */
    public $keyWords;

    /**
     * @var string
     */
    public $learningObject;

    /**
     * @var string
     */
    public $textContent;

    /**
     * @var string
     */
    public $textbook;

    /**
     * @var string
     */
    public $topic;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'grade' => 'grade',
        'keySentences' => 'keySentences',
        'keyWords' => 'keyWords',
        'learningObject' => 'learningObject',
        'textContent' => 'textContent',
        'textbook' => 'textbook',
        'topic' => 'topic',
        'userId' => 'userId',
    ];

    public function validate()
    {
        if (\is_array($this->keySentences)) {
            Model::validateArray($this->keySentences);
        }
        if (\is_array($this->keyWords)) {
            Model::validateArray($this->keyWords);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->grade) {
            $res['grade'] = $this->grade;
        }

        if (null !== $this->keySentences) {
            if (\is_array($this->keySentences)) {
                $res['keySentences'] = [];
                $n1 = 0;
                foreach ($this->keySentences as $item1) {
                    $res['keySentences'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->keyWords) {
            if (\is_array($this->keyWords)) {
                $res['keyWords'] = [];
                $n1 = 0;
                foreach ($this->keyWords as $item1) {
                    $res['keyWords'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->learningObject) {
            $res['learningObject'] = $this->learningObject;
        }

        if (null !== $this->textContent) {
            $res['textContent'] = $this->textContent;
        }

        if (null !== $this->textbook) {
            $res['textbook'] = $this->textbook;
        }

        if (null !== $this->topic) {
            $res['topic'] = $this->topic;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['grade'])) {
            $model->grade = $map['grade'];
        }

        if (isset($map['keySentences'])) {
            if (!empty($map['keySentences'])) {
                $model->keySentences = [];
                $n1 = 0;
                foreach ($map['keySentences'] as $item1) {
                    $model->keySentences[$n1++] = $item1;
                }
            }
        }

        if (isset($map['keyWords'])) {
            if (!empty($map['keyWords'])) {
                $model->keyWords = [];
                $n1 = 0;
                foreach ($map['keyWords'] as $item1) {
                    $model->keyWords[$n1++] = $item1;
                }
            }
        }

        if (isset($map['learningObject'])) {
            $model->learningObject = $map['learningObject'];
        }

        if (isset($map['textContent'])) {
            $model->textContent = $map['textContent'];
        }

        if (isset($map['textbook'])) {
            $model->textbook = $map['textbook'];
        }

        if (isset($map['topic'])) {
            $model->topic = $map['topic'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
