<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class ListDsMenusRequest extends Model
{
    /**
     * @description 业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取
     *
     * @var string
     */
    public $agentKey;

    /**
     * @description 机器人ID
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 1-正式环境，2-测试环境（默认）
     *
     * @var int
     */
    public $robotEnv;

    /**
     * @description 业务来源标识：
     * 1-集团内部aliyun域名；2-外部使用4service域名（默认）
     * @var int
     */
    public $source;

    /**
     * @description 功能标识，为空表示所有；支持的tag有：Dialog / Intent / Entity / Var / TaskCenter；传入多个时通过英文逗号分隔
     *
     * @var string
     */
    public $tags;
    protected $_name = [
        'agentKey'   => 'AgentKey',
        'instanceId' => 'InstanceId',
        'robotEnv'   => 'RobotEnv',
        'source'     => 'Source',
        'tags'       => 'Tags',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->robotEnv) {
            $res['RobotEnv'] = $this->robotEnv;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDsMenusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RobotEnv'])) {
            $model->robotEnv = $map['RobotEnv'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
