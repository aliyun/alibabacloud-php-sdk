<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class CreateCoreWordRequest extends Model
{
    /**
     * @description 业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取
     *
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $coreWordName;
    protected $_name = [
        'agentKey'     => 'AgentKey',
        'coreWordName' => 'CoreWordName',
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
        if (null !== $this->coreWordName) {
            $res['CoreWordName'] = $this->coreWordName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCoreWordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['CoreWordName'])) {
            $model->coreWordName = $map['CoreWordName'];
        }

        return $model;
    }
}
