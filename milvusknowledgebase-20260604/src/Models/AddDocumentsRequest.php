<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MilvusKnowledgeBase\V20260604\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MilvusKnowledgeBase\V20260604\Models\AddDocumentsRequest\dedup;
use AlibabaCloud\SDK\MilvusKnowledgeBase\V20260604\Models\AddDocumentsRequest\dingTalkConfiguration;
use AlibabaCloud\SDK\MilvusKnowledgeBase\V20260604\Models\AddDocumentsRequest\documents;

class AddDocumentsRequest extends Model
{
    /**
     * @var dedup
     */
    public $dedup;

    /**
     * @var documents[]
     */
    public $documents;

    /**
     * @var string
     */
    public $importType;

    /**
     * @var string
     */
    public $knowledgeBaseId;

    /**
     * @var mixed
     */
    public $metaFields;

    /**
     * @var string
     */
    public $strategyId;

    /**
     * @var dingTalkConfiguration
     */
    public $dingTalkConfiguration;

    /**
     * @var string
     */
    public $parentId;
    protected $_name = [
        'dedup' => 'Dedup',
        'documents' => 'Documents',
        'importType' => 'ImportType',
        'knowledgeBaseId' => 'KnowledgeBaseId',
        'metaFields' => 'MetaFields',
        'strategyId' => 'StrategyId',
        'dingTalkConfiguration' => 'dingTalkConfiguration',
        'parentId' => 'parentId',
    ];

    public function validate()
    {
        if (null !== $this->dedup) {
            $this->dedup->validate();
        }
        if (\is_array($this->documents)) {
            Model::validateArray($this->documents);
        }
        if (null !== $this->dingTalkConfiguration) {
            $this->dingTalkConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dedup) {
            $res['Dedup'] = null !== $this->dedup ? $this->dedup->toArray($noStream) : $this->dedup;
        }

        if (null !== $this->documents) {
            if (\is_array($this->documents)) {
                $res['Documents'] = [];
                $n1 = 0;
                foreach ($this->documents as $item1) {
                    $res['Documents'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->importType) {
            $res['ImportType'] = $this->importType;
        }

        if (null !== $this->knowledgeBaseId) {
            $res['KnowledgeBaseId'] = $this->knowledgeBaseId;
        }

        if (null !== $this->metaFields) {
            $res['MetaFields'] = $this->metaFields;
        }

        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }

        if (null !== $this->dingTalkConfiguration) {
            $res['dingTalkConfiguration'] = null !== $this->dingTalkConfiguration ? $this->dingTalkConfiguration->toArray($noStream) : $this->dingTalkConfiguration;
        }

        if (null !== $this->parentId) {
            $res['parentId'] = $this->parentId;
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
        if (isset($map['Dedup'])) {
            $model->dedup = dedup::fromMap($map['Dedup']);
        }

        if (isset($map['Documents'])) {
            if (!empty($map['Documents'])) {
                $model->documents = [];
                $n1 = 0;
                foreach ($map['Documents'] as $item1) {
                    $model->documents[$n1] = documents::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ImportType'])) {
            $model->importType = $map['ImportType'];
        }

        if (isset($map['KnowledgeBaseId'])) {
            $model->knowledgeBaseId = $map['KnowledgeBaseId'];
        }

        if (isset($map['MetaFields'])) {
            $model->metaFields = $map['MetaFields'];
        }

        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }

        if (isset($map['dingTalkConfiguration'])) {
            $model->dingTalkConfiguration = dingTalkConfiguration::fromMap($map['dingTalkConfiguration']);
        }

        if (isset($map['parentId'])) {
            $model->parentId = $map['parentId'];
        }

        return $model;
    }
}
