<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\AgentResource\latestVersion;

class AgentResource extends Model
{
    /**
     * @var Flow
     */
    public $flow;

    /**
     * @var latestVersion
     */
    public $latestVersion;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var AgentRuntime
     */
    public $runtime;
    protected $_name = [
        'flow' => 'flow',
        'latestVersion' => 'latestVersion',
        'resourceType' => 'resourceType',
        'runtime' => 'runtime',
    ];

    public function validate()
    {
        if (null !== $this->flow) {
            $this->flow->validate();
        }
        if (null !== $this->latestVersion) {
            $this->latestVersion->validate();
        }
        if (null !== $this->runtime) {
            $this->runtime->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flow) {
            $res['flow'] = null !== $this->flow ? $this->flow->toArray($noStream) : $this->flow;
        }

        if (null !== $this->latestVersion) {
            $res['latestVersion'] = null !== $this->latestVersion ? $this->latestVersion->toArray($noStream) : $this->latestVersion;
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        if (null !== $this->runtime) {
            $res['runtime'] = null !== $this->runtime ? $this->runtime->toArray($noStream) : $this->runtime;
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
        if (isset($map['flow'])) {
            $model->flow = Flow::fromMap($map['flow']);
        }

        if (isset($map['latestVersion'])) {
            $model->latestVersion = latestVersion::fromMap($map['latestVersion']);
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        if (isset($map['runtime'])) {
            $model->runtime = AgentRuntime::fromMap($map['runtime']);
        }

        return $model;
    }
}
