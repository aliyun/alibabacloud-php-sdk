<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class RemoveKnowledgeBaseAdministratorRequest extends Model
{
    /**
     * @var string
     */
    public $administratorUserId;

    /**
     * @var string
     */
    public $knowledgeBaseId;
    protected $_name = [
        'administratorUserId' => 'AdministratorUserId',
        'knowledgeBaseId' => 'KnowledgeBaseId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->administratorUserId) {
            $res['AdministratorUserId'] = $this->administratorUserId;
        }

        if (null !== $this->knowledgeBaseId) {
            $res['KnowledgeBaseId'] = $this->knowledgeBaseId;
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
        if (isset($map['AdministratorUserId'])) {
            $model->administratorUserId = $map['AdministratorUserId'];
        }

        if (isset($map['KnowledgeBaseId'])) {
            $model->knowledgeBaseId = $map['KnowledgeBaseId'];
        }

        return $model;
    }
}
