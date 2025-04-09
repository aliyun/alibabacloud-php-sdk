<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetDocumentSplitRequest\document;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetDocumentSplitRequest\strategy;

class GetDocumentSplitRequest extends Model
{
    /**
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
        if (null !== $this->document) {
            $this->document->validate();
        }
        if (null !== $this->strategy) {
            $this->strategy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->document) {
            $res['document'] = null !== $this->document ? $this->document->toArray($noStream) : $this->document;
        }

        if (null !== $this->strategy) {
            $res['strategy'] = null !== $this->strategy ? $this->strategy->toArray($noStream) : $this->strategy;
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
        if (isset($map['document'])) {
            $model->document = document::fromMap($map['document']);
        }

        if (isset($map['strategy'])) {
            $model->strategy = strategy::fromMap($map['strategy']);
        }

        return $model;
    }
}
