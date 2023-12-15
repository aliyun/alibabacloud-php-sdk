<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class QuerySystemEntitiesRequest extends Model
{
    /**
     * @example ac627989eb4f8a98ed05fd098bbae5_p_beebot_public
     *
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $entityName;
    protected $_name = [
        'agentKey'   => 'AgentKey',
        'entityName' => 'EntityName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->entityName) {
            $res['EntityName'] = $this->entityName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySystemEntitiesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['EntityName'])) {
            $model->entityName = $map['EntityName'];
        }

        return $model;
    }
}
