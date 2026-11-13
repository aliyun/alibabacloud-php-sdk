<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetKnowledgePointResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetKnowledgePointResponseBody\data\graph;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetKnowledgePointResponseBody\data\knowledgeContent;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetKnowledgePointResponseBody\data\warnings;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetKnowledgePointResponseBody\data\wiki;

class data extends Model
{
    /**
     * @var graph
     */
    public $graph;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $knowledgeBaseId;

    /**
     * @var knowledgeContent
     */
    public $knowledgeContent;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $type;

    /**
     * @var warnings[]
     */
    public $warnings;

    /**
     * @var wiki
     */
    public $wiki;
    protected $_name = [
        'graph' => 'Graph',
        'id' => 'Id',
        'knowledgeBaseId' => 'KnowledgeBaseId',
        'knowledgeContent' => 'KnowledgeContent',
        'nextToken' => 'NextToken',
        'type' => 'Type',
        'warnings' => 'Warnings',
        'wiki' => 'Wiki',
    ];

    public function validate()
    {
        if (null !== $this->graph) {
            $this->graph->validate();
        }
        if (null !== $this->knowledgeContent) {
            $this->knowledgeContent->validate();
        }
        if (\is_array($this->warnings)) {
            Model::validateArray($this->warnings);
        }
        if (null !== $this->wiki) {
            $this->wiki->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->graph) {
            $res['Graph'] = null !== $this->graph ? $this->graph->toArray($noStream) : $this->graph;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->knowledgeBaseId) {
            $res['KnowledgeBaseId'] = $this->knowledgeBaseId;
        }

        if (null !== $this->knowledgeContent) {
            $res['KnowledgeContent'] = null !== $this->knowledgeContent ? $this->knowledgeContent->toArray($noStream) : $this->knowledgeContent;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->warnings) {
            if (\is_array($this->warnings)) {
                $res['Warnings'] = [];
                $n1 = 0;
                foreach ($this->warnings as $item1) {
                    $res['Warnings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->wiki) {
            $res['Wiki'] = null !== $this->wiki ? $this->wiki->toArray($noStream) : $this->wiki;
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
        if (isset($map['Graph'])) {
            $model->graph = graph::fromMap($map['Graph']);
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['KnowledgeBaseId'])) {
            $model->knowledgeBaseId = $map['KnowledgeBaseId'];
        }

        if (isset($map['KnowledgeContent'])) {
            $model->knowledgeContent = knowledgeContent::fromMap($map['KnowledgeContent']);
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Warnings'])) {
            if (!empty($map['Warnings'])) {
                $model->warnings = [];
                $n1 = 0;
                foreach ($map['Warnings'] as $item1) {
                    $model->warnings[$n1] = warnings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Wiki'])) {
            $model->wiki = wiki::fromMap($map['Wiki']);
        }

        return $model;
    }
}
