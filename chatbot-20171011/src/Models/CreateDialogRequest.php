<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class CreateDialogRequest extends Model
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
    public $description;

    /**
     * @var string
     */
    public $dialogName;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'agentKey'    => 'AgentKey',
        'description' => 'Description',
        'dialogName'  => 'DialogName',
        'instanceId'  => 'InstanceId',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dialogName) {
            $res['DialogName'] = $this->dialogName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDialogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DialogName'])) {
            $model->dialogName = $map['DialogName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
