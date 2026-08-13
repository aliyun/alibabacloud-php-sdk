<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class QuerySemanticKnowledgeRequest extends Model
{
    /**
     * @var string
     */
    public $agentName;

    /**
     * @var string
     */
    public $graphName;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'agentName' => 'agentName',
        'graphName' => 'graphName',
        'query' => 'query',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentName) {
            $res['agentName'] = $this->agentName;
        }

        if (null !== $this->graphName) {
            $res['graphName'] = $this->graphName;
        }

        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['agentName'])) {
            $model->agentName = $map['agentName'];
        }

        if (isset($map['graphName'])) {
            $model->graphName = $map['graphName'];
        }

        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
