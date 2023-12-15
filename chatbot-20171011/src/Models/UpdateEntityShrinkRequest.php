<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class UpdateEntityShrinkRequest extends Model
{
    /**
     * @example ac627989eb4f8a98ed05fd098bbae5_p_beebot_public
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example 13866
     *
     * @var int
     */
    public $entityId;

    /**
     * @var string
     */
    public $entityName;

    /**
     * @example synonyms
     *
     * @var string
     */
    public $entityType;

    /**
     * @var string
     */
    public $membersShrink;

    /**
     * @example (\\d+-\\d+-\\d+\\s\\S+)\\s\\[(\\S+)\\s([^:]+):(\\d+)\\s(\\w+)]\\s\\[(\\d+)\\s(\\d+)]\\s\\[([^]]+)]\\s(\\w+)\\s(.*)
     *
     * @var string
     */
    public $regex;
    protected $_name = [
        'agentKey'      => 'AgentKey',
        'entityId'      => 'EntityId',
        'entityName'    => 'EntityName',
        'entityType'    => 'EntityType',
        'membersShrink' => 'Members',
        'regex'         => 'Regex',
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
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->entityName) {
            $res['EntityName'] = $this->entityName;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->membersShrink) {
            $res['Members'] = $this->membersShrink;
        }
        if (null !== $this->regex) {
            $res['Regex'] = $this->regex;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateEntityShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['EntityName'])) {
            $model->entityName = $map['EntityName'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['Members'])) {
            $model->membersShrink = $map['Members'];
        }
        if (isset($map['Regex'])) {
            $model->regex = $map['Regex'];
        }

        return $model;
    }
}
