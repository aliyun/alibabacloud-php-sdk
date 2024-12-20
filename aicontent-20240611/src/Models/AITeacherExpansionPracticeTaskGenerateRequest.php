<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Tea\Model;

class AITeacherExpansionPracticeTaskGenerateRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 13
     *
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
     * @example Understanding unique professions such as dog walkers, hotel test sleepers, and food tasters, including their job responsibilities and the benefits or challenges associated with each role.
     *
     * @var string
     */
    public $learningObject;

    /**
     * @description This parameter is required.
     *
     * @example Dog walker Dog walking, as a profession, originated in the US. Some may think that it\\"s a perfect job, because dog walkers won\\"t be imprisoned in an office. But it\\"s actually manual labour. At their busiest, dog walkers may have more than ten dogs to take care of in a day. Hotel test sleeper A hotel test sleeper, as the name suggests, has to write expert reviews about the facilities, locations, prices, dining and other services of hotels, in order to provide evaluations and guides for travelers. Hotel test sleepers don\\"t need to punch in for work and they get about ten thousand yuan as income every month. What a comfortable job! Food taster In ancient times, a food taster was a person who tasted foods (or drinks) to be served to someone else, to confirm that it was safe to eat. But now, those working as food tasters just get to taste various new foods and drinks aimed at specific regions across the world. They then give their opinions on these products to the companies and suggest improvements.
     *
     * @var string
     */
    public $textContent;

    /**
     * @var string
     */
    public $textbook;

    /**
     * @description This parameter is required.
     *
     * @example talk about your dream job.
     *
     * @var string
     */
    public $topic;

    /**
     * @description This parameter is required.
     *
     * @example 6440xxxxxxxxxx5fafc98c421
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'grade'          => 'grade',
        'keySentences'   => 'keySentences',
        'keyWords'       => 'keyWords',
        'learningObject' => 'learningObject',
        'textContent'    => 'textContent',
        'textbook'       => 'textbook',
        'topic'          => 'topic',
        'userId'         => 'userId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->grade) {
            $res['grade'] = $this->grade;
        }
        if (null !== $this->keySentences) {
            $res['keySentences'] = $this->keySentences;
        }
        if (null !== $this->keyWords) {
            $res['keyWords'] = $this->keyWords;
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

    /**
     * @param array $map
     *
     * @return AITeacherExpansionPracticeTaskGenerateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['grade'])) {
            $model->grade = $map['grade'];
        }
        if (isset($map['keySentences'])) {
            if (!empty($map['keySentences'])) {
                $model->keySentences = $map['keySentences'];
            }
        }
        if (isset($map['keyWords'])) {
            if (!empty($map['keyWords'])) {
                $model->keyWords = $map['keyWords'];
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
