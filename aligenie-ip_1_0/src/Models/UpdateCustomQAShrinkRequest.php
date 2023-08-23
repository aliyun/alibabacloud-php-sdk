<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class UpdateCustomQAShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $answersShrink;

    /**
     * @example 1
     *
     * @var string
     */
    public $customQAId;

    /**
     * @example af7***536
     *
     * @var string
     */
    public $hotelId;

    /**
     * @var string
     */
    public $keyWordsShrink;

    /**
     * @example ***
     *
     * @var string
     */
    public $majorQuestion;

    /**
     * @var string
     */
    public $supplementaryQuestionsShrink;
    protected $_name = [
        'answersShrink'                => 'Answers',
        'customQAId'                   => 'CustomQAId',
        'hotelId'                      => 'HotelId',
        'keyWordsShrink'               => 'KeyWords',
        'majorQuestion'                => 'MajorQuestion',
        'supplementaryQuestionsShrink' => 'SupplementaryQuestions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->answersShrink) {
            $res['Answers'] = $this->answersShrink;
        }
        if (null !== $this->customQAId) {
            $res['CustomQAId'] = $this->customQAId;
        }
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }
        if (null !== $this->keyWordsShrink) {
            $res['KeyWords'] = $this->keyWordsShrink;
        }
        if (null !== $this->majorQuestion) {
            $res['MajorQuestion'] = $this->majorQuestion;
        }
        if (null !== $this->supplementaryQuestionsShrink) {
            $res['SupplementaryQuestions'] = $this->supplementaryQuestionsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCustomQAShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Answers'])) {
            $model->answersShrink = $map['Answers'];
        }
        if (isset($map['CustomQAId'])) {
            $model->customQAId = $map['CustomQAId'];
        }
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }
        if (isset($map['KeyWords'])) {
            $model->keyWordsShrink = $map['KeyWords'];
        }
        if (isset($map['MajorQuestion'])) {
            $model->majorQuestion = $map['MajorQuestion'];
        }
        if (isset($map['SupplementaryQuestions'])) {
            $model->supplementaryQuestionsShrink = $map['SupplementaryQuestions'];
        }

        return $model;
    }
}
