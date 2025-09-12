<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengfinplus\V20220913\Models\CreateKnowLedgeRequest;

use AlibabaCloud\Dara\Model;

class body extends Model
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
    protected $_name = [
        'appId' => 'appId',
        'internalKnowledgeId' => 'internalKnowledgeId',
        'knowledgeName' => 'knowledgeName',
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

        return $model;
    }
}
