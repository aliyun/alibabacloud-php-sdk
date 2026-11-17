<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetKnowledgeBaseBuildTaskResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetKnowledgeBaseBuildTaskResponseBody\data\input\entities;

class input extends Model
{
    /**
     * @var entities[]
     */
    public $entities;

    /**
     * @var string[]
     */
    public $knowledgeObjectIds;

    /**
     * @var int[]
     */
    public $projectIds;

    /**
     * @var string[]
     */
    public $sourceIds;

    /**
     * @var string
     */
    public $yamlUploadId;
    protected $_name = [
        'entities' => 'Entities',
        'knowledgeObjectIds' => 'KnowledgeObjectIds',
        'projectIds' => 'ProjectIds',
        'sourceIds' => 'SourceIds',
        'yamlUploadId' => 'YamlUploadId',
    ];

    public function validate()
    {
        if (\is_array($this->entities)) {
            Model::validateArray($this->entities);
        }
        if (\is_array($this->knowledgeObjectIds)) {
            Model::validateArray($this->knowledgeObjectIds);
        }
        if (\is_array($this->projectIds)) {
            Model::validateArray($this->projectIds);
        }
        if (\is_array($this->sourceIds)) {
            Model::validateArray($this->sourceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entities) {
            if (\is_array($this->entities)) {
                $res['Entities'] = [];
                $n1 = 0;
                foreach ($this->entities as $item1) {
                    $res['Entities'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->knowledgeObjectIds) {
            if (\is_array($this->knowledgeObjectIds)) {
                $res['KnowledgeObjectIds'] = [];
                $n1 = 0;
                foreach ($this->knowledgeObjectIds as $item1) {
                    $res['KnowledgeObjectIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->projectIds) {
            if (\is_array($this->projectIds)) {
                $res['ProjectIds'] = [];
                $n1 = 0;
                foreach ($this->projectIds as $item1) {
                    $res['ProjectIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sourceIds) {
            if (\is_array($this->sourceIds)) {
                $res['SourceIds'] = [];
                $n1 = 0;
                foreach ($this->sourceIds as $item1) {
                    $res['SourceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->yamlUploadId) {
            $res['YamlUploadId'] = $this->yamlUploadId;
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
        if (isset($map['Entities'])) {
            if (!empty($map['Entities'])) {
                $model->entities = [];
                $n1 = 0;
                foreach ($map['Entities'] as $item1) {
                    $model->entities[$n1] = entities::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['KnowledgeObjectIds'])) {
            if (!empty($map['KnowledgeObjectIds'])) {
                $model->knowledgeObjectIds = [];
                $n1 = 0;
                foreach ($map['KnowledgeObjectIds'] as $item1) {
                    $model->knowledgeObjectIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ProjectIds'])) {
            if (!empty($map['ProjectIds'])) {
                $model->projectIds = [];
                $n1 = 0;
                foreach ($map['ProjectIds'] as $item1) {
                    $model->projectIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SourceIds'])) {
            if (!empty($map['SourceIds'])) {
                $model->sourceIds = [];
                $n1 = 0;
                foreach ($map['SourceIds'] as $item1) {
                    $model->sourceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['YamlUploadId'])) {
            $model->yamlUploadId = $map['YamlUploadId'];
        }

        return $model;
    }
}
