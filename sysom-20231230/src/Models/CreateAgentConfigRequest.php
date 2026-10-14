<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;

class CreateAgentConfigRequest extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $configName;

    /**
     * @var string
     */
    public $content;
    protected $_name = [
        'agentId' => 'agentId',
        'configName' => 'configName',
        'content' => 'content',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }

        if (null !== $this->configName) {
            $res['configName'] = $this->configName;
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
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
        if (isset($map['agentId'])) {
            $model->agentId = $map['agentId'];
        }

        if (isset($map['configName'])) {
            $model->configName = $map['configName'];
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        return $model;
    }
}
