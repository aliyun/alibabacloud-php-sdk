<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListLumaKnowledgeBasesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\KnowledgeBase;

class data extends Model
{
    /**
     * @var KnowledgeBase[]
     */
    public $knowledgeBases;
    protected $_name = [
        'knowledgeBases' => 'KnowledgeBases',
    ];

    public function validate()
    {
        if (\is_array($this->knowledgeBases)) {
            Model::validateArray($this->knowledgeBases);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->knowledgeBases) {
            if (\is_array($this->knowledgeBases)) {
                $res['KnowledgeBases'] = [];
                $n1 = 0;
                foreach ($this->knowledgeBases as $item1) {
                    $res['KnowledgeBases'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['KnowledgeBases'])) {
            if (!empty($map['KnowledgeBases'])) {
                $model->knowledgeBases = [];
                $n1 = 0;
                foreach ($map['KnowledgeBases'] as $item1) {
                    $model->knowledgeBases[$n1] = KnowledgeBase::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
