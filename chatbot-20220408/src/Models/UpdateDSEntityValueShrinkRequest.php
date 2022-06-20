<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class UpdateDSEntityValueShrinkRequest extends Model
{
    /**
     * @description 业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取
     *
     * @var string
     */
    public $agentKey;

    /**
     * @description 实体类型为synonyms时，表示实体归一化值；当实体类型为regex时，表示正则表达式文本
     *
     * @var string
     */
    public $content;

    /**
     * @description 实体ID，修改实体成员时可为空
     *
     * @var int
     */
    public $entityId;

    /**
     * @description 实体成员ID，创建实体成员时为空
     *
     * @var int
     */
    public $entityValueId;

    /**
     * @description 机器人ID
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 实体同义词
     *
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
