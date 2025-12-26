<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models;

use AlibabaCloud\Dara\Model;

class RetrieveKnowledgeBaseResponseBody extends Model
{
    /**
     * @var KnowledgeBaseFileChunk[]
     */
    public $knowledgeBaseFileChunks;
    protected $_name = [
        'knowledgeBaseFileChunks' => 'KnowledgeBaseFileChunks',
    ];

    public function validate()
    {
        if (\is_array($this->knowledgeBaseFileChunks)) {
            Model::validateArray($this->knowledgeBaseFileChunks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->knowledgeBaseFileChunks) {
            if (\is_array($this->knowledgeBaseFileChunks)) {
                $res['KnowledgeBaseFileChunks'] = [];
                $n1 = 0;
                foreach ($this->knowledgeBaseFileChunks as $item1) {
                    $res['KnowledgeBaseFileChunks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['KnowledgeBaseFileChunks'])) {
            if (!empty($map['KnowledgeBaseFileChunks'])) {
                $model->knowledgeBaseFileChunks = [];
                $n1 = 0;
                foreach ($map['KnowledgeBaseFileChunks'] as $item1) {
                    $model->knowledgeBaseFileChunks[$n1] = KnowledgeBaseFileChunk::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
