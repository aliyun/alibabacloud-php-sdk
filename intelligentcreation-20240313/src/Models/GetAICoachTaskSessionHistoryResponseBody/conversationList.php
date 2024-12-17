<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachTaskSessionHistoryResponseBody;

use AlibabaCloud\Tea\Model;

class conversationList extends Model
{
    /**
     * @var string
     */
    public $audioUrl;

    /**
     * @example {}
     *
     * @var string
     */
    public $evaluationResult;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $recordId;

    /**
     * @var string
     */
    public $role;
    protected $_name = [
        'audioUrl'         => 'audioUrl',
        'evaluationResult' => 'evaluationResult',
        'message'          => 'message',
        'recordId'         => 'recordId',
        'role'             => 'role',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioUrl) {
            $res['audioUrl'] = $this->audioUrl;
        }
        if (null !== $this->evaluationResult) {
            $res['evaluationResult'] = $this->evaluationResult;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->recordId) {
            $res['recordId'] = $this->recordId;
        }
        if (null !== $this->role) {
            $res['role'] = $this->role;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conversationList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['audioUrl'])) {
            $model->audioUrl = $map['audioUrl'];
        }
        if (isset($map['evaluationResult'])) {
            $model->evaluationResult = $map['evaluationResult'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['recordId'])) {
            $model->recordId = $map['recordId'];
        }
        if (isset($map['role'])) {
            $model->role = $map['role'];
        }

        return $model;
    }
}
