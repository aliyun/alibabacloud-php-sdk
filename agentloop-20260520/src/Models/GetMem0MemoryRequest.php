<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class GetMem0MemoryRequest extends Model
{
    /**
     * @var string
     */
    public $agentSpace;

    /**
     * @var string
     */
    public $contextStoreId;

    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $projectId;
    protected $_name = [
        'agentSpace' => 'agentSpace',
        'contextStoreId' => 'context_store_id',
        'orgId' => 'org_id',
        'projectId' => 'project_id',
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

        if (null !== $this->contextStoreId) {
            $res['context_store_id'] = $this->contextStoreId;
        }

        if (null !== $this->orgId) {
            $res['org_id'] = $this->orgId;
        }

        if (null !== $this->projectId) {
            $res['project_id'] = $this->projectId;
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

        if (isset($map['context_store_id'])) {
            $model->contextStoreId = $map['context_store_id'];
        }

        if (isset($map['org_id'])) {
            $model->orgId = $map['org_id'];
        }

        if (isset($map['project_id'])) {
            $model->projectId = $map['project_id'];
        }

        return $model;
    }
}
