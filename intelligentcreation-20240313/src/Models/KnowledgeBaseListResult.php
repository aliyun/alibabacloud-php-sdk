<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class KnowledgeBaseListResult extends Model
{
    /**
     * @var KnowledgeBaseInfo[]
     */
    public $knowledgeBases;

    /**
     * @example 3239281273464326823
     *
     * @var string
     */
    public $requestId;

    /**
     * @description This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'knowledgeBases' => 'knowledgeBases',
        'requestId'      => 'requestId',
        'total'          => 'total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->knowledgeBases) {
            $res['knowledgeBases'] = [];
            if (null !== $this->knowledgeBases && \is_array($this->knowledgeBases)) {
                $n = 0;
                foreach ($this->knowledgeBases as $item) {
                    $res['knowledgeBases'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return KnowledgeBaseListResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['knowledgeBases'])) {
            if (!empty($map['knowledgeBases'])) {
                $model->knowledgeBases = [];
                $n                     = 0;
                foreach ($map['knowledgeBases'] as $item) {
                    $model->knowledgeBases[$n++] = null !== $item ? KnowledgeBaseInfo::fromMap($item) : $item;
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
