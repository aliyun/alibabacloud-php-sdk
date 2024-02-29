<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class AddCustomQAV2Request extends Model
{
    /**
     * @var string[]
     */
    public $answers;

    /**
     * @example 520a0c0***5eb
     *
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
        'answers'                => 'Answers',
        'hotelId'                => 'HotelId',
        'keyWords'               => 'KeyWords',
        'majorQuestion'          => 'MajorQuestion',
        'supplementaryQuestions' => 'SupplementaryQuestions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->answers) {
            $res['Answers'] = $this->answers;
        }
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }
        if (null !== $this->keyWords) {
            $res['KeyWords'] = $this->keyWords;
        }
        if (null !== $this->majorQuestion) {
            $res['MajorQuestion'] = $this->majorQuestion;
        }
        if (null !== $this->supplementaryQuestions) {
            $res['SupplementaryQuestions'] = $this->supplementaryQuestions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddCustomQAV2Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Answers'])) {
            if (!empty($map['Answers'])) {
                $model->answers = $map['Answers'];
            }
        }
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }
        if (isset($map['KeyWords'])) {
            if (!empty($map['KeyWords'])) {
                $model->keyWords = $map['KeyWords'];
            }
        }
        if (isset($map['MajorQuestion'])) {
            $model->majorQuestion = $map['MajorQuestion'];
        }
        if (isset($map['SupplementaryQuestions'])) {
            if (!empty($map['SupplementaryQuestions'])) {
                $model->supplementaryQuestions = $map['SupplementaryQuestions'];
            }
        }

        return $model;
    }
}
