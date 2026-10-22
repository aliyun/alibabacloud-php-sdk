<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ListCustomAgentsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListCustomAgentsResponseBody\items\artifact;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListCustomAgentsResponseBody\items\codePackageInfo;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListCustomAgentsResponseBody\items\protocol;

class items extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var artifact
     */
    public $artifact;

    /**
     * @var codePackageInfo
     */
    public $codePackageInfo;

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
    public $latestSpecVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var protocol[]
     */
    public $protocol;

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
        'artifact' => 'artifact',
        'codePackageInfo' => 'codePackageInfo',
        'createMode' => 'createMode',
        'createdAt' => 'createdAt',
        'deployType' => 'deployType',
        'description' => 'description',
        'latestSpecVersion' => 'latestSpecVersion',
        'name' => 'name',
        'protocol' => 'protocol',
        'runtime' => 'runtime',
        'status' => 'status',
        'updatedAt' => 'updatedAt',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (null !== $this->artifact) {
            $this->artifact->validate();
        }
        if (null !== $this->codePackageInfo) {
            $this->codePackageInfo->validate();
        }
        if (\is_array($this->protocol)) {
            Model::validateArray($this->protocol);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }

        if (null !== $this->artifact) {
            $res['artifact'] = null !== $this->artifact ? $this->artifact->toArray($noStream) : $this->artifact;
        }

        if (null !== $this->codePackageInfo) {
            $res['codePackageInfo'] = null !== $this->codePackageInfo ? $this->codePackageInfo->toArray($noStream) : $this->codePackageInfo;
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

        if (null !== $this->latestSpecVersion) {
            $res['latestSpecVersion'] = $this->latestSpecVersion;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->protocol) {
            if (\is_array($this->protocol)) {
                $res['protocol'] = [];
                $n1 = 0;
                foreach ($this->protocol as $item1) {
                    $res['protocol'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['artifact'])) {
            $model->artifact = artifact::fromMap($map['artifact']);
        }

        if (isset($map['codePackageInfo'])) {
            $model->codePackageInfo = codePackageInfo::fromMap($map['codePackageInfo']);
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

        if (isset($map['latestSpecVersion'])) {
            $model->latestSpecVersion = $map['latestSpecVersion'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['protocol'])) {
            if (!empty($map['protocol'])) {
                $model->protocol = [];
                $n1 = 0;
                foreach ($map['protocol'] as $item1) {
                    $model->protocol[$n1] = protocol::fromMap($item1);
                    ++$n1;
                }
            }
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
