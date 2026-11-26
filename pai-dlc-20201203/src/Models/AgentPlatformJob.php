<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class AgentPlatformJob extends Model
{
    /**
     * @var string
     */
    public $agentJobId;

    /**
     * @var int
     */
    public $attempt;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var int
     */
    public $durationMs;

    /**
     * @var string
     */
    public $finishedAt;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $sandboxId;

    /**
     * @var AgentSandboxInfo
     */
    public $sandboxInfo;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var string
     */
    public $template;
    protected $_name = [
        'agentJobId' => 'AgentJobId',
        'attempt' => 'Attempt',
        'createdAt' => 'CreatedAt',
        'durationMs' => 'DurationMs',
        'finishedAt' => 'FinishedAt',
        'instanceId' => 'InstanceId',
        'jobId' => 'JobId',
        'sandboxId' => 'SandboxId',
        'sandboxInfo' => 'SandboxInfo',
        'status' => 'Status',
        'tags' => 'Tags',
        'template' => 'Template',
    ];

    public function validate()
    {
        if (null !== $this->sandboxInfo) {
            $this->sandboxInfo->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentJobId) {
            $res['AgentJobId'] = $this->agentJobId;
        }

        if (null !== $this->attempt) {
            $res['Attempt'] = $this->attempt;
        }

        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->durationMs) {
            $res['DurationMs'] = $this->durationMs;
        }

        if (null !== $this->finishedAt) {
            $res['FinishedAt'] = $this->finishedAt;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->sandboxId) {
            $res['SandboxId'] = $this->sandboxId;
        }

        if (null !== $this->sandboxInfo) {
            $res['SandboxInfo'] = null !== $this->sandboxInfo ? $this->sandboxInfo->toArray($noStream) : $this->sandboxInfo;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->template) {
            $res['Template'] = $this->template;
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
        if (isset($map['AgentJobId'])) {
            $model->agentJobId = $map['AgentJobId'];
        }

        if (isset($map['Attempt'])) {
            $model->attempt = $map['Attempt'];
        }

        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['DurationMs'])) {
            $model->durationMs = $map['DurationMs'];
        }

        if (isset($map['FinishedAt'])) {
            $model->finishedAt = $map['FinishedAt'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['SandboxId'])) {
            $model->sandboxId = $map['SandboxId'];
        }

        if (isset($map['SandboxInfo'])) {
            $model->sandboxInfo = AgentSandboxInfo::fromMap($map['SandboxInfo']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Template'])) {
            $model->template = $map['Template'];
        }

        return $model;
    }
}
