<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListContextStoreAPIKeysResponseBody;

use AlibabaCloud\Dara\Model;

class results extends Model
{
    /**
     * @var string
     */
    public $agentSpace;

    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $contextStoreName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'agentSpace' => 'agentSpace',
        'apiKey' => 'apiKey',
        'contextStoreName' => 'contextStoreName',
        'createTime' => 'createTime',
        'name' => 'name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentSpace) {
            $res['agentSpace'] = $this->agentSpace;
        }

        if (null !== $this->apiKey) {
            $res['apiKey'] = $this->apiKey;
        }

        if (null !== $this->contextStoreName) {
            $res['contextStoreName'] = $this->contextStoreName;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['agentSpace'])) {
            $model->agentSpace = $map['agentSpace'];
        }

        if (isset($map['apiKey'])) {
            $model->apiKey = $map['apiKey'];
        }

        if (isset($map['contextStoreName'])) {
            $model->contextStoreName = $map['contextStoreName'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
