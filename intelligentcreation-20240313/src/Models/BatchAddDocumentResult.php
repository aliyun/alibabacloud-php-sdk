<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class BatchAddDocumentResult extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var AddDocumentResult[]
     */
    public $addDocumentResults;

    /**
     * @example 3239281273464326823
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'addDocumentResults' => 'addDocumentResults',
        'requestId'          => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addDocumentResults) {
            $res['addDocumentResults'] = [];
            if (null !== $this->addDocumentResults && \is_array($this->addDocumentResults)) {
                $n = 0;
                foreach ($this->addDocumentResults as $item) {
                    $res['addDocumentResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchAddDocumentResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['addDocumentResults'])) {
            if (!empty($map['addDocumentResults'])) {
                $model->addDocumentResults = [];
                $n                         = 0;
                foreach ($map['addDocumentResults'] as $item) {
                    $model->addDocumentResults[$n++] = null !== $item ? AddDocumentResult::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
