<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class KnowledgeBaseListResult extends Model
{
    /**
     * @var KnowledgeBaseInfo[]
     */
    public $knowledgeBases;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'knowledgeBases' => 'knowledgeBases',
        'requestId' => 'requestId',
        'total' => 'total',
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
                $res['knowledgeBases'] = [];
                $n1 = 0;
                foreach ($this->knowledgeBases as $item1) {
                    $res['knowledgeBases'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
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
        if (isset($map['knowledgeBases'])) {
            if (!empty($map['knowledgeBases'])) {
                $model->knowledgeBases = [];
                $n1 = 0;
                foreach ($map['knowledgeBases'] as $item1) {
                    $model->knowledgeBases[$n1++] = KnowledgeBaseInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
