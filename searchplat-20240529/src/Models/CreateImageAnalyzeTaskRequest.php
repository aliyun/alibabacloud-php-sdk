<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\CreateImageAnalyzeTaskRequest\document;

class CreateImageAnalyzeTaskRequest extends Model
{
    /**
     * @var document
     */
    public $document;
    protected $_name = [
        'document' => 'document',
    ];

    public function validate()
    {
        if (null !== $this->document) {
            $this->document->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->document) {
            $res['document'] = null !== $this->document ? $this->document->toArray($noStream) : $this->document;
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

        return $model;
    }
}
