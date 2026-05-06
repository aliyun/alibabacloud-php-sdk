<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\GetApplicationResponseBody\data\publishedVersion;

use AlibabaCloud\Dara\Model;

class ragConfig extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string[]
     */
    public $knowledgeBaseIds;

    /**
     * @var int
     */
    public $maxContentLength;

    /**
     * @var string
     */
    public $ragEngine;

    /**
     * @var int
     */
    public $topN;
    protected $_name = [
        'enabled' => 'Enabled',
        'knowledgeBaseIds' => 'KnowledgeBaseIds',
        'maxContentLength' => 'MaxContentLength',
        'ragEngine' => 'RagEngine',
        'topN' => 'TopN',
    ];

    public function validate()
    {
        if (\is_array($this->knowledgeBaseIds)) {
            Model::validateArray($this->knowledgeBaseIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->knowledgeBaseIds) {
            if (\is_array($this->knowledgeBaseIds)) {
                $res['KnowledgeBaseIds'] = [];
                $n1 = 0;
                foreach ($this->knowledgeBaseIds as $item1) {
                    $res['KnowledgeBaseIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxContentLength) {
            $res['MaxContentLength'] = $this->maxContentLength;
        }

        if (null !== $this->ragEngine) {
            $res['RagEngine'] = $this->ragEngine;
        }

        if (null !== $this->topN) {
            $res['TopN'] = $this->topN;
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
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['KnowledgeBaseIds'])) {
            if (!empty($map['KnowledgeBaseIds'])) {
                $model->knowledgeBaseIds = [];
                $n1 = 0;
                foreach ($map['KnowledgeBaseIds'] as $item1) {
                    $model->knowledgeBaseIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxContentLength'])) {
            $model->maxContentLength = $map['MaxContentLength'];
        }

        if (isset($map['RagEngine'])) {
            $model->ragEngine = $map['RagEngine'];
        }

        if (isset($map['TopN'])) {
            $model->topN = $map['TopN'];
        }

        return $model;
    }
}
