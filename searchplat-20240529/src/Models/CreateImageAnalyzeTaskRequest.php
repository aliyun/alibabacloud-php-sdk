<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models;

use AlibabaCloud\SDK\Searchplat\V20240529\Models\CreateImageAnalyzeTaskRequest\document;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->document) {
            $res['document'] = null !== $this->document ? $this->document->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateImageAnalyzeTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['document'])) {
            $model->document = document::fromMap($map['document']);
        }

        return $model;
    }
}
