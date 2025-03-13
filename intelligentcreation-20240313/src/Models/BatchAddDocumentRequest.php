<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class BatchAddDocumentRequest extends Model
{
    /**
     * @var AddDocumentInfo[]
     */
    public $addDocumentInfos;
    protected $_name = [
        'addDocumentInfos' => 'addDocumentInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addDocumentInfos) {
            $res['addDocumentInfos'] = [];
            if (null !== $this->addDocumentInfos && \is_array($this->addDocumentInfos)) {
                $n = 0;
                foreach ($this->addDocumentInfos as $item) {
                    $res['addDocumentInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchAddDocumentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['addDocumentInfos'])) {
            if (!empty($map['addDocumentInfos'])) {
                $model->addDocumentInfos = [];
                $n                       = 0;
                foreach ($map['addDocumentInfos'] as $item) {
                    $model->addDocumentInfos[$n++] = null !== $item ? AddDocumentInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
