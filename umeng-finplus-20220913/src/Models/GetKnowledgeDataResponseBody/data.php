<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengfinplus\V20220913\Models\GetKnowledgeDataResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $internalKnowledgeId;

    /**
     * @var string
     */
    public $knowledgeName;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'appId' => 'appId',
        'internalKnowledgeId' => 'internalKnowledgeId',
        'knowledgeName' => 'knowledgeName',
        'message' => 'message',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }

        if (null !== $this->internalKnowledgeId) {
            $res['internalKnowledgeId'] = $this->internalKnowledgeId;
        }

        if (null !== $this->knowledgeName) {
            $res['knowledgeName'] = $this->knowledgeName;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }

        if (isset($map['internalKnowledgeId'])) {
            $model->internalKnowledgeId = $map['internalKnowledgeId'];
        }

        if (isset($map['knowledgeName'])) {
            $model->knowledgeName = $map['knowledgeName'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
