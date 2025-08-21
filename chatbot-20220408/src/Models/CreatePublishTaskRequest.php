<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Dara\Model;

class CreatePublishTaskRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string[]
     */
    public $dataIdList;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'bizType' => 'BizType',
        'dataIdList' => 'DataIdList',
    ];

    public function validate()
    {
        if (\is_array($this->dataIdList)) {
            Model::validateArray($this->dataIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->dataIdList) {
            if (\is_array($this->dataIdList)) {
                $res['DataIdList'] = [];
                $n1 = 0;
                foreach ($this->dataIdList as $item1) {
                    $res['DataIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['DataIdList'])) {
            if (!empty($map['DataIdList'])) {
                $model->dataIdList = [];
                $n1 = 0;
                foreach ($map['DataIdList'] as $item1) {
                    $model->dataIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
