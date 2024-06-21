<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models;

use AlibabaCloud\SDK\Searchplat\V20240529\Models\CreateDocumentAnalyzeTaskRequest\document;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\CreateDocumentAnalyzeTaskRequest\output;
use AlibabaCloud\Tea\Model;

class CreateDocumentAnalyzeTaskRequest extends Model
{
    /**
     * @var document
     */
    public $document;

    /**
     * @var output
     */
    public $output;
    protected $_name = [
        'document' => 'document',
        'output'   => 'output',
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
        if (null !== $this->output) {
            $res['output'] = null !== $this->output ? $this->output->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDocumentAnalyzeTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['document'])) {
            $model->document = document::fromMap($map['document']);
        }
        if (isset($map['output'])) {
            $model->output = output::fromMap($map['output']);
        }

        return $model;
    }
}
