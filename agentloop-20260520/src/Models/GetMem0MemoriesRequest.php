<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class GetMem0MemoriesRequest extends Model
{
    /**
     * @var string
     */
    public $agentSpace;

    /**
     * @var mixed[]
     */
    public $body;

    /**
     * @var string
     */
    public $contextStoreId;

    /**
     * @var bool
     */
    public $enableGraph;

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
        'body' => 'body',
        'contextStoreId' => 'context_store_id',
        'enableGraph' => 'enable_graph',
        'orgId' => 'org_id',
        'projectId' => 'project_id',
    ];

    public function validate()
    {
        if (\is_array($this->body)) {
            Model::validateArray($this->body);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentSpace) {
            $res['agentSpace'] = $this->agentSpace;
        }

        if (null !== $this->body) {
            if (\is_array($this->body)) {
                $res['body'] = [];
                foreach ($this->body as $key1 => $value1) {
                    $res['body'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->contextStoreId) {
            $res['context_store_id'] = $this->contextStoreId;
        }

        if (null !== $this->enableGraph) {
            $res['enable_graph'] = $this->enableGraph;
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

        if (isset($map['body'])) {
            if (!empty($map['body'])) {
                $model->body = [];
                foreach ($map['body'] as $key1 => $value1) {
                    $model->body[$key1] = $value1;
                }
            }
        }

        if (isset($map['context_store_id'])) {
            $model->contextStoreId = $map['context_store_id'];
        }

        if (isset($map['enable_graph'])) {
            $model->enableGraph = $map['enable_graph'];
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
