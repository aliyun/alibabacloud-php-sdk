<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateHotelSceneItemRequest\updateHotelSceneReq;

use AlibabaCloud\Tea\Model;

class dialogueList extends Model
{
    /**
     * @example 335
     *
     * @var string
     */
    public $dialogueId;

    /**
     * @example 对不起，暂时不提供此物品
     *
     * @var string
     */
    public $noAnswer;

    /**
     * @example 4
     *
     * @var string
     */
    public $noAnswerTemplate;

    /**
     * @example 0
     *
     * @var int
     */
    public $process;

    /**
     * @var string
     */
    public $question;

    /**
     * @description itemId
     *
     * @example 10337
     *
     * @var string
     */
    public $serviceId;

    /**
     * @example 纸巾1.5元，请问需要么？
     *
     * @var string
     */
    public $yesAnswer;

    /**
     * @example 4
     *
     * @var string
     */
    public $yesAnswerTemplate;
    protected $_name = [
        'dialogueId'        => 'DialogueId',
        'noAnswer'          => 'NoAnswer',
        'noAnswerTemplate'  => 'NoAnswerTemplate',
        'process'           => 'Process',
        'question'          => 'Question',
        'serviceId'         => 'ServiceId',
        'yesAnswer'         => 'YesAnswer',
        'yesAnswerTemplate' => 'YesAnswerTemplate',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return dialogueList
     */
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
