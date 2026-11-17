<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateKnowledgeObjectRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateKnowledgeObjectRequest\content\document;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateKnowledgeObjectRequest\content\semanticModel;

class content extends Model
{
    /**
     * @var document
     */
    public $document;

    /**
     * @var semanticModel
     */
    public $semanticModel;
    protected $_name = [
        'document' => 'Document',
        'semanticModel' => 'SemanticModel',
    ];

    public function validate()
    {
        if (null !== $this->document) {
            $this->document->validate();
        }
        if (null !== $this->semanticModel) {
            $this->semanticModel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->document) {
            $res['Document'] = null !== $this->document ? $this->document->toArray($noStream) : $this->document;
        }

        if (null !== $this->semanticModel) {
            $res['SemanticModel'] = null !== $this->semanticModel ? $this->semanticModel->toArray($noStream) : $this->semanticModel;
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
        if (isset($map['Document'])) {
            $model->document = document::fromMap($map['Document']);
        }

        if (isset($map['SemanticModel'])) {
            $model->semanticModel = semanticModel::fromMap($map['SemanticModel']);
        }

        return $model;
    }
}
