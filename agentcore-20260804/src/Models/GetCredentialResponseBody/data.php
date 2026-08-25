<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetCredentialResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetCredentialResponseBody\data\boundAgents;

class data extends Model
{
    /**
     * @var boundAgents[]
     */
    public $boundAgents;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $credentialId;

    /**
     * @var string
     */
    public $credentialMetadata;

    /**
     * @var string
     */
    public $credentialType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'boundAgents' => 'boundAgents',
        'createdAt' => 'createdAt',
        'credentialId' => 'credentialId',
        'credentialMetadata' => 'credentialMetadata',
        'credentialType' => 'credentialType',
        'description' => 'description',
        'name' => 'name',
        'regionId' => 'regionId',
        'updatedAt' => 'updatedAt',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->boundAgents)) {
            Model::validateArray($this->boundAgents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->boundAgents) {
            if (\is_array($this->boundAgents)) {
                $res['boundAgents'] = [];
                $n1 = 0;
                foreach ($this->boundAgents as $item1) {
                    $res['boundAgents'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->credentialId) {
            $res['credentialId'] = $this->credentialId;
        }

        if (null !== $this->credentialMetadata) {
            $res['credentialMetadata'] = $this->credentialMetadata;
        }

        if (null !== $this->credentialType) {
            $res['credentialType'] = $this->credentialType;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
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
        if (isset($map['boundAgents'])) {
            if (!empty($map['boundAgents'])) {
                $model->boundAgents = [];
                $n1 = 0;
                foreach ($map['boundAgents'] as $item1) {
                    $model->boundAgents[$n1] = boundAgents::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['credentialId'])) {
            $model->credentialId = $map['credentialId'];
        }

        if (isset($map['credentialMetadata'])) {
            $model->credentialMetadata = $map['credentialMetadata'];
        }

        if (isset($map['credentialType'])) {
            $model->credentialType = $map['credentialType'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
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
