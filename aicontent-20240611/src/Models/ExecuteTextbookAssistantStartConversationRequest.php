<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Tea\Model;

class ExecuteTextbookAssistantStartConversationRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 0c05700d4d9411efbe6e0c42a106bb02
     *
     * @var string
     */
    public $articleId;

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
     * @example SYNC
     *
     * @var string
     */
    public $scenario;
    protected $_name = [
        'articleId' => 'articleId',
        'authToken' => 'authToken',
        'scenario'  => 'scenario',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ExecuteTextbookAssistantStartConversationRequest
     */
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
