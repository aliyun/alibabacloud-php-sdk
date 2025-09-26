<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class AgentRuntimeVersion extends Model
{
    /**
     * @var string
     */
    public $agentRuntimeArn;

    /**
     * @var string
     */
    public $agentRuntimeId;

    /**
     * @var string
     */
    public $agentRuntimeName;

    /**
     * @var string
     */
    public $agentRuntimeVersion;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $lastUpdatedAt;
    protected $_name = [
        'agentRuntimeArn' => 'agentRuntimeArn',
        'agentRuntimeId' => 'agentRuntimeId',
        'agentRuntimeName' => 'agentRuntimeName',
        'agentRuntimeVersion' => 'agentRuntimeVersion',
        'description' => 'description',
        'lastUpdatedAt' => 'lastUpdatedAt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentRuntimeArn) {
            $res['agentRuntimeArn'] = $this->agentRuntimeArn;
        }

        if (null !== $this->agentRuntimeId) {
            $res['agentRuntimeId'] = $this->agentRuntimeId;
        }

        if (null !== $this->agentRuntimeName) {
            $res['agentRuntimeName'] = $this->agentRuntimeName;
        }

        if (null !== $this->agentRuntimeVersion) {
            $res['agentRuntimeVersion'] = $this->agentRuntimeVersion;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->lastUpdatedAt) {
            $res['lastUpdatedAt'] = $this->lastUpdatedAt;
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
        if (isset($map['agentRuntimeArn'])) {
            $model->agentRuntimeArn = $map['agentRuntimeArn'];
        }

        if (isset($map['agentRuntimeId'])) {
            $model->agentRuntimeId = $map['agentRuntimeId'];
        }

        if (isset($map['agentRuntimeName'])) {
            $model->agentRuntimeName = $map['agentRuntimeName'];
        }

        if (isset($map['agentRuntimeVersion'])) {
            $model->agentRuntimeVersion = $map['agentRuntimeVersion'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['lastUpdatedAt'])) {
            $model->lastUpdatedAt = $map['lastUpdatedAt'];
        }

        return $model;
    }
}
