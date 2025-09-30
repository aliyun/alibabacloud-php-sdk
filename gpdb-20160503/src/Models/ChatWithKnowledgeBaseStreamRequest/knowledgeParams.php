<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseStreamRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseStreamRequest\knowledgeParams\mergeMethodArgs;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseStreamRequest\knowledgeParams\sourceCollection;

class knowledgeParams extends Model
{
    /**
     * @var string
     */
    public $mergeMethod;

    /**
     * @var mergeMethodArgs
     */
    public $mergeMethodArgs;

    /**
     * @var float
     */
    public $rerankFactor;

    /**
     * @var sourceCollection[]
     */
    public $sourceCollection;

    /**
     * @var int
     */
    public $topK;
    protected $_name = [
        'mergeMethod' => 'MergeMethod',
        'mergeMethodArgs' => 'MergeMethodArgs',
        'rerankFactor' => 'RerankFactor',
        'sourceCollection' => 'SourceCollection',
        'topK' => 'TopK',
    ];

    public function validate()
    {
        if (null !== $this->mergeMethodArgs) {
            $this->mergeMethodArgs->validate();
        }
        if (\is_array($this->sourceCollection)) {
            Model::validateArray($this->sourceCollection);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mergeMethod) {
            $res['MergeMethod'] = $this->mergeMethod;
        }

        if (null !== $this->mergeMethodArgs) {
            $res['MergeMethodArgs'] = null !== $this->mergeMethodArgs ? $this->mergeMethodArgs->toArray($noStream) : $this->mergeMethodArgs;
        }

        if (null !== $this->rerankFactor) {
            $res['RerankFactor'] = $this->rerankFactor;
        }

        if (null !== $this->sourceCollection) {
            if (\is_array($this->sourceCollection)) {
                $res['SourceCollection'] = [];
                $n1 = 0;
                foreach ($this->sourceCollection as $item1) {
                    $res['SourceCollection'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->topK) {
            $res['TopK'] = $this->topK;
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
        if (isset($map['MergeMethod'])) {
            $model->mergeMethod = $map['MergeMethod'];
        }

        if (isset($map['MergeMethodArgs'])) {
            $model->mergeMethodArgs = mergeMethodArgs::fromMap($map['MergeMethodArgs']);
        }

        if (isset($map['RerankFactor'])) {
            $model->rerankFactor = $map['RerankFactor'];
        }

        if (isset($map['SourceCollection'])) {
            if (!empty($map['SourceCollection'])) {
                $model->sourceCollection = [];
                $n1 = 0;
                foreach ($map['SourceCollection'] as $item1) {
                    $model->sourceCollection[$n1] = sourceCollection::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TopK'])) {
            $model->topK = $map['TopK'];
        }

        return $model;
    }
}
