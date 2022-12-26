<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class UpdateDSEntityValueShrinkRequest extends Model
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
    public $content;

    /**
     * @example 223423423
     *
     * @var int
     */
    public $entityId;

    /**
     * @example 2342377423
     *
     * @var int
     */
    public $entityValueId;

    /**
     * @example chatbot-cn-yjzbyrEvqd
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $synonymsShrink;
    protected $_name = [
        'agentKey'       => 'AgentKey',
        'content'        => 'Content',
        'entityId'       => 'EntityId',
        'entityValueId'  => 'EntityValueId',
        'instanceId'     => 'InstanceId',
        'synonymsShrink' => 'Synonyms',
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
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->entityValueId) {
            $res['EntityValueId'] = $this->entityValueId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->synonymsShrink) {
            $res['Synonyms'] = $this->synonymsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDSEntityValueShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['EntityValueId'])) {
            $model->entityValueId = $map['EntityValueId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Synonyms'])) {
            $model->synonymsShrink = $map['Synonyms'];
        }

        return $model;
    }
}
