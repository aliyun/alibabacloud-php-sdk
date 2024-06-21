<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models;

use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetDocumentSplitRequest\document;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetDocumentSplitRequest\strategy;
use AlibabaCloud\Tea\Model;

class GetDocumentSplitRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var document
     */
    public $document;

    /**
     * @var strategy
     */
    public $strategy;
    protected $_name = [
        'document' => 'document',
        'strategy' => 'strategy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->document) {
            $res['document'] = null !== $this->document ? $this->document->toMap() : null;
        }
        if (null !== $this->strategy) {
            $res['strategy'] = null !== $this->strategy ? $this->strategy->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDocumentSplitRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['document'])) {
            $model->document = document::fromMap($map['document']);
        }
        if (isset($map['strategy'])) {
            $model->strategy = strategy::fromMap($map['strategy']);
        }

        return $model;
    }
}
