<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Tea\Model;

class ExecuteTextbookAssistantGrammarCheckRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example tc_e6dc70c890866f4028ca685b6fa29874
     *
     * @var string
     */
    public $authToken;

    /**
     * @description This parameter is required.
     *
     * @example 6788e0b475a4631ffc626722
     *
     * @var string
     */
    public $chatId;

    /**
     * @description This parameter is required.
     *
     * @example SYNC
     *
     * @var string
     */
    public $scenario;

    /**
     * @description This parameter is required.
     *
     * @example 6788e0b45bdfc807f077a5a1
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'authToken' => 'authToken',
        'chatId'    => 'chatId',
        'scenario'  => 'scenario',
        'user'      => 'user',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['authToken'] = $this->authToken;
        }
        if (null !== $this->chatId) {
            $res['chatId'] = $this->chatId;
        }
        if (null !== $this->scenario) {
            $res['scenario'] = $this->scenario;
        }
        if (null !== $this->user) {
            $res['user'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteTextbookAssistantGrammarCheckRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['authToken'])) {
            $model->authToken = $map['authToken'];
        }
        if (isset($map['chatId'])) {
            $model->chatId = $map['chatId'];
        }
        if (isset($map['scenario'])) {
            $model->scenario = $map['scenario'];
        }
        if (isset($map['user'])) {
            $model->user = $map['user'];
        }

        return $model;
    }
}
