<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateHotelSceneItemRequest\updateHotelSceneReq;

use AlibabaCloud\Dara\Model;

class dialogueList extends Model
{
    /**
     * @var string
     */
    public $dialogueId;

    /**
     * @var string
     */
    public $noAnswer;

    /**
     * @var string
     */
    public $noAnswerTemplate;

    /**
     * @var int
     */
    public $process;

    /**
     * @var string
     */
    public $question;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $yesAnswer;

    /**
     * @var string
     */
    public $yesAnswerTemplate;
    protected $_name = [
        'dialogueId' => 'DialogueId',
        'noAnswer' => 'NoAnswer',
        'noAnswerTemplate' => 'NoAnswerTemplate',
        'process' => 'Process',
        'question' => 'Question',
        'serviceId' => 'ServiceId',
        'yesAnswer' => 'YesAnswer',
        'yesAnswerTemplate' => 'YesAnswerTemplate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dialogueId) {
            $res['DialogueId'] = $this->dialogueId;
        }

        if (null !== $this->noAnswer) {
            $res['NoAnswer'] = $this->noAnswer;
        }

        if (null !== $this->noAnswerTemplate) {
            $res['NoAnswerTemplate'] = $this->noAnswerTemplate;
        }

        if (null !== $this->process) {
            $res['Process'] = $this->process;
        }

        if (null !== $this->question) {
            $res['Question'] = $this->question;
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->yesAnswer) {
            $res['YesAnswer'] = $this->yesAnswer;
        }

        if (null !== $this->yesAnswerTemplate) {
            $res['YesAnswerTemplate'] = $this->yesAnswerTemplate;
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
        if (isset($map['DialogueId'])) {
            $model->dialogueId = $map['DialogueId'];
        }

        if (isset($map['NoAnswer'])) {
            $model->noAnswer = $map['NoAnswer'];
        }

        if (isset($map['NoAnswerTemplate'])) {
            $model->noAnswerTemplate = $map['NoAnswerTemplate'];
        }

        if (isset($map['Process'])) {
            $model->process = $map['Process'];
        }

        if (isset($map['Question'])) {
            $model->question = $map['Question'];
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['YesAnswer'])) {
            $model->yesAnswer = $map['YesAnswer'];
        }

        if (isset($map['YesAnswerTemplate'])) {
            $model->yesAnswerTemplate = $map['YesAnswerTemplate'];
        }

        return $model;
    }
}
