<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ExecuteTextbookAssistantStartConversationRequest extends Model
{
    /**
     * @var string
     */
    public $articleId;

    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string
     */
    public $scenario;
    protected $_name = [
        'articleId' => 'articleId',
        'authToken' => 'authToken',
        'scenario' => 'scenario',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->articleId) {
            $res['articleId'] = $this->articleId;
        }

        if (null !== $this->authToken) {
            $res['authToken'] = $this->authToken;
        }

        if (null !== $this->scenario) {
            $res['scenario'] = $this->scenario;
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
        if (isset($map['articleId'])) {
            $model->articleId = $map['articleId'];
        }

        if (isset($map['authToken'])) {
            $model->authToken = $map['authToken'];
        }

        if (isset($map['scenario'])) {
            $model->scenario = $map['scenario'];
        }

        return $model;
    }
}
