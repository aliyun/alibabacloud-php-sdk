<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MilvusKnowledgeBase\V20260604\Models\AddDocumentsRequest;

use AlibabaCloud\Dara\Model;

class dingTalkConfiguration extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appPassword;

    /**
     * @var string
     */
    public $dingDocMcpLink;

    /**
     * @var string
     */
    public $dingTableMcpLink;

    /**
     * @var string
     */
    public $knowledgeId;

    /**
     * @var string
     */
    public $knowledgeType;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'appId' => 'appId',
        'appPassword' => 'appPassword',
        'dingDocMcpLink' => 'dingDocMcpLink',
        'dingTableMcpLink' => 'dingTableMcpLink',
        'knowledgeId' => 'knowledgeId',
        'knowledgeType' => 'knowledgeType',
        'userId' => 'userId',
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

        if (null !== $this->appPassword) {
            $res['appPassword'] = $this->appPassword;
        }

        if (null !== $this->dingDocMcpLink) {
            $res['dingDocMcpLink'] = $this->dingDocMcpLink;
        }

        if (null !== $this->dingTableMcpLink) {
            $res['dingTableMcpLink'] = $this->dingTableMcpLink;
        }

        if (null !== $this->knowledgeId) {
            $res['knowledgeId'] = $this->knowledgeId;
        }

        if (null !== $this->knowledgeType) {
            $res['knowledgeType'] = $this->knowledgeType;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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

        if (isset($map['appPassword'])) {
            $model->appPassword = $map['appPassword'];
        }

        if (isset($map['dingDocMcpLink'])) {
            $model->dingDocMcpLink = $map['dingDocMcpLink'];
        }

        if (isset($map['dingTableMcpLink'])) {
            $model->dingTableMcpLink = $map['dingTableMcpLink'];
        }

        if (isset($map['knowledgeId'])) {
            $model->knowledgeId = $map['knowledgeId'];
        }

        if (isset($map['knowledgeType'])) {
            $model->knowledgeType = $map['knowledgeType'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
