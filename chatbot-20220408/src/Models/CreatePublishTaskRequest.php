<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class CreatePublishTaskRequest extends Model
{
    /**
     * @example ac627989eb4f8a98ed05fd098bbae5_p_beebot_public
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example faq
     *
     * @var string
     */
    public $bizType;

    /**
     * @example ["8521"]
     *
     * @var string[]
     */
    public $dataIdList;
    protected $_name = [
        'agentKey'   => 'AgentKey',
        'bizType'    => 'BizType',
        'dataIdList' => 'DataIdList',
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
        if (null !== $this->dataIdList) {
            $res['DataIdList'] = $this->dataIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePublishTaskRequest
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
            if (!empty($map['DataIdList'])) {
                $model->dataIdList = $map['DataIdList'];
            }
        }

        return $model;
    }
}
