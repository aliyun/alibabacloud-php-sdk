<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateAgentVersionResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $agentVersion;

    /**
     * @var string
     */
    public $artifactStatus;

    /**
     * @var mixed[]
     */
    public $configuration;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $createdBy;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $targetSpecVersion;

    /**
     * @var string
     */
    public $versionName;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'agentId' => 'agentId',
        'agentVersion' => 'agentVersion',
        'artifactStatus' => 'artifactStatus',
        'configuration' => 'configuration',
        'createdAt' => 'createdAt',
        'createdBy' => 'createdBy',
        'description' => 'description',
        'targetSpecVersion' => 'targetSpecVersion',
        'versionName' => 'versionName',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->configuration)) {
            Model::validateArray($this->configuration);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }

        if (null !== $this->agentVersion) {
            $res['agentVersion'] = $this->agentVersion;
        }

        if (null !== $this->artifactStatus) {
            $res['artifactStatus'] = $this->artifactStatus;
        }

        if (null !== $this->configuration) {
            if (\is_array($this->configuration)) {
                $res['configuration'] = [];
                foreach ($this->configuration as $key1 => $value1) {
                    $res['configuration'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->createdBy) {
            $res['createdBy'] = $this->createdBy;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->targetSpecVersion) {
            $res['targetSpecVersion'] = $this->targetSpecVersion;
        }

        if (null !== $this->versionName) {
            $res['versionName'] = $this->versionName;
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

        if (isset($map['agentVersion'])) {
            $model->agentVersion = $map['agentVersion'];
        }

        if (isset($map['artifactStatus'])) {
            $model->artifactStatus = $map['artifactStatus'];
        }

        if (isset($map['configuration'])) {
            if (!empty($map['configuration'])) {
                $model->configuration = [];
                foreach ($map['configuration'] as $key1 => $value1) {
                    $model->configuration[$key1] = $value1;
                }
            }
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['createdBy'])) {
            $model->createdBy = $map['createdBy'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['targetSpecVersion'])) {
            $model->targetSpecVersion = $map['targetSpecVersion'];
        }

        if (isset($map['versionName'])) {
            $model->versionName = $map['versionName'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
