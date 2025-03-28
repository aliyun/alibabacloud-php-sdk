<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetHistoryListByBizTypeResponseBody\data;

use AlibabaCloud\Dara\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var mixed
     */
    public $extraMessage;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $llmAnswer;

    /**
     * @var string
     */
    public $llmPrompt;

    /**
     * @var string
     */
    public $llmType;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $userQuery;
    protected $_name = [
        'bizId' => 'bizId',
        'bizType' => 'bizType',
        'extraMessage' => 'extraMessage',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'id' => 'id',
        'llmAnswer' => 'llmAnswer',
        'llmPrompt' => 'llmPrompt',
        'llmType' => 'llmType',
        'sessionId' => 'sessionId',
        'userQuery' => 'userQuery',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['bizId'] = $this->bizId;
        }

        if (null !== $this->bizType) {
            $res['bizType'] = $this->bizType;
        }

        if (null !== $this->extraMessage) {
            $res['extraMessage'] = $this->extraMessage;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->llmAnswer) {
            $res['llmAnswer'] = $this->llmAnswer;
        }

        if (null !== $this->llmPrompt) {
            $res['llmPrompt'] = $this->llmPrompt;
        }

        if (null !== $this->llmType) {
            $res['llmType'] = $this->llmType;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->userQuery) {
            $res['userQuery'] = $this->userQuery;
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
        if (isset($map['bizId'])) {
            $model->bizId = $map['bizId'];
        }

        if (isset($map['bizType'])) {
            $model->bizType = $map['bizType'];
        }

        if (isset($map['extraMessage'])) {
            $model->extraMessage = $map['extraMessage'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['llmAnswer'])) {
            $model->llmAnswer = $map['llmAnswer'];
        }

        if (isset($map['llmPrompt'])) {
            $model->llmPrompt = $map['llmPrompt'];
        }

        if (isset($map['llmType'])) {
            $model->llmType = $map['llmType'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['userQuery'])) {
            $model->userQuery = $map['userQuery'];
        }

        return $model;
    }
}
