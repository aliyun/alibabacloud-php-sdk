<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;

class CheckAgentConfigSupportedRequest extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $checkType;

    /**
     * @var string
     */
    public $clusters;

    /**
     * @var string
     */
    public $configId;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $instances;
    protected $_name = [
        'agentId' => 'agentId',
        'checkType' => 'checkType',
        'clusters' => 'clusters',
        'configId' => 'configId',
        'content' => 'content',
        'instances' => 'instances',
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

        if (null !== $this->checkType) {
            $res['checkType'] = $this->checkType;
        }

        if (null !== $this->clusters) {
            $res['clusters'] = $this->clusters;
        }

        if (null !== $this->configId) {
            $res['configId'] = $this->configId;
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->instances) {
            $res['instances'] = $this->instances;
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

        if (isset($map['checkType'])) {
            $model->checkType = $map['checkType'];
        }

        if (isset($map['clusters'])) {
            $model->clusters = $map['clusters'];
        }

        if (isset($map['configId'])) {
            $model->configId = $map['configId'];
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['instances'])) {
            $model->instances = $map['instances'];
        }

        return $model;
    }
}
