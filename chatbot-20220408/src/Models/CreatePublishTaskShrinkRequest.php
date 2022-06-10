<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class CreatePublishTaskShrinkRequest extends Model
{
    /**
     * @description 业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取
     *
     * @var string
     */
    public $agentKey;

    /**
     * @description 发布单元类型，机器人发布请使用 CreateInstancePublishTask API
     *
     * @var string
     */
    public $bizType;

    /**
     * @description 附加发布信息，当前支持：如果BizType是faq，此字段填写类目Id，表示只发布这些类目下面的知识
     *
     * @var string
     */
    public $dataIdListShrink;
    protected $_name = [
        'agentKey'         => 'AgentKey',
        'bizType'          => 'BizType',
        'dataIdListShrink' => 'DataIdList',
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
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->dataIdListShrink) {
            $res['DataIdList'] = $this->dataIdListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePublishTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['DataIdList'])) {
            $model->dataIdListShrink = $map['DataIdList'];
        }

        return $model;
    }
}
