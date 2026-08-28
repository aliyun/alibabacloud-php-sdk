<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ListManagedAgentsResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $createMode;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $deployType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $effectiveSpecVersion;

    /**
     * @var int
     */
    public $latestSpecVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $runtime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'agentId' => 'agentId',
        'createMode' => 'createMode',
        'createdAt' => 'createdAt',
        'deployType' => 'deployType',
        'description' => 'description',
        'effectiveSpecVersion' => 'effectiveSpecVersion',
        'latestSpecVersion' => 'latestSpecVersion',
        'name' => 'name',
        'runtime' => 'runtime',
        'status' => 'status',
        'updatedAt' => 'updatedAt',
        'workspaceId' => 'workspaceId',
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

        if (null !== $this->createMode) {
            $res['createMode'] = $this->createMode;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->deployType) {
            $res['deployType'] = $this->deployType;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->effectiveSpecVersion) {
            $res['effectiveSpecVersion'] = $this->effectiveSpecVersion;
        }

        if (null !== $this->latestSpecVersion) {
            $res['latestSpecVersion'] = $this->latestSpecVersion;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->runtime) {
            $res['runtime'] = $this->runtime;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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

        if (isset($map['createMode'])) {
            $model->createMode = $map['createMode'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['deployType'])) {
            $model->deployType = $map['deployType'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['effectiveSpecVersion'])) {
            $model->effectiveSpecVersion = $map['effectiveSpecVersion'];
        }

        if (isset($map['latestSpecVersion'])) {
            $model->latestSpecVersion = $map['latestSpecVersion'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['runtime'])) {
            $model->runtime = $map['runtime'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
