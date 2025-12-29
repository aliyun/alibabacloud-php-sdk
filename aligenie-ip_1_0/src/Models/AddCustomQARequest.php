<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;

class AddCustomQARequest extends Model
{
    /**
     * @var string[]
     */
    public $answers;

    /**
     * @var string
     */
    public $hotelId;

    /**
     * @var string[]
     */
    public $keyWords;

    /**
     * @var string
     */
    public $majorQuestion;

    /**
     * @var string[]
     */
    public $supplementaryQuestions;
    protected $_name = [
        'answers' => 'Answers',
        'hotelId' => 'HotelId',
        'keyWords' => 'KeyWords',
        'majorQuestion' => 'MajorQuestion',
        'supplementaryQuestions' => 'SupplementaryQuestions',
    ];

    public function validate()
    {
        if (\is_array($this->answers)) {
            Model::validateArray($this->answers);
        }
        if (\is_array($this->keyWords)) {
            Model::validateArray($this->keyWords);
        }
        if (\is_array($this->supplementaryQuestions)) {
            Model::validateArray($this->supplementaryQuestions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answers) {
            if (\is_array($this->answers)) {
                $res['Answers'] = [];
                $n1 = 0;
                foreach ($this->answers as $item1) {
                    $res['Answers'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }

        if (null !== $this->keyWords) {
            if (\is_array($this->keyWords)) {
                $res['KeyWords'] = [];
                $n1 = 0;
                foreach ($this->keyWords as $item1) {
                    $res['KeyWords'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->majorQuestion) {
            $res['MajorQuestion'] = $this->majorQuestion;
        }

        if (null !== $this->supplementaryQuestions) {
            if (\is_array($this->supplementaryQuestions)) {
                $res['SupplementaryQuestions'] = [];
                $n1 = 0;
                foreach ($this->supplementaryQuestions as $item1) {
                    $res['SupplementaryQuestions'][$n1] = $item1;
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
        if (isset($map['Answers'])) {
            if (!empty($map['Answers'])) {
                $model->answers = [];
                $n1 = 0;
                foreach ($map['Answers'] as $item1) {
                    $model->answers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }

        if (isset($map['KeyWords'])) {
            if (!empty($map['KeyWords'])) {
                $model->keyWords = [];
                $n1 = 0;
                foreach ($map['KeyWords'] as $item1) {
                    $model->keyWords[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MajorQuestion'])) {
            $model->majorQuestion = $map['MajorQuestion'];
        }

        if (isset($map['SupplementaryQuestions'])) {
            if (!empty($map['SupplementaryQuestions'])) {
                $model->supplementaryQuestions = [];
                $n1 = 0;
                foreach ($map['SupplementaryQuestions'] as $item1) {
                    $model->supplementaryQuestions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
