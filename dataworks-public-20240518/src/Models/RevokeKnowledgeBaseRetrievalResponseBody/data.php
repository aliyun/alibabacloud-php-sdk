<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\RevokeKnowledgeBaseRetrievalResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $knowledgeBaseId;

    /**
     * @var string
     */
    public $principalId;

    /**
     * @var string
     */
    public $principalType;
    protected $_name = [
        'knowledgeBaseId' => 'KnowledgeBaseId',
        'principalId' => 'PrincipalId',
        'principalType' => 'PrincipalType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->knowledgeBaseId) {
            $res['KnowledgeBaseId'] = $this->knowledgeBaseId;
        }

        if (null !== $this->principalId) {
            $res['PrincipalId'] = $this->principalId;
        }

        if (null !== $this->principalType) {
            $res['PrincipalType'] = $this->principalType;
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
        if (isset($map['KnowledgeBaseId'])) {
            $model->knowledgeBaseId = $map['KnowledgeBaseId'];
        }

        if (isset($map['PrincipalId'])) {
            $model->principalId = $map['PrincipalId'];
        }

        if (isset($map['PrincipalType'])) {
            $model->principalType = $map['PrincipalType'];
        }

        return $model;
    }
}
