<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MilvusKnowledgeBase\V20260604\Models\AddDocumentsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MilvusKnowledgeBase\V20260604\Models\AddDocumentsResponseBody\data\documents;

class data extends Model
{
    /**
     * @var documents[]
     */
    public $documents;

    /**
     * @var string[]
     */
    public $errors;
    protected $_name = [
        'documents' => 'documents',
        'errors' => 'errors',
    ];

    public function validate()
    {
        if (\is_array($this->documents)) {
            Model::validateArray($this->documents);
        }
        if (\is_array($this->errors)) {
            Model::validateArray($this->errors);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->documents) {
            if (\is_array($this->documents)) {
                $res['documents'] = [];
                $n1 = 0;
                foreach ($this->documents as $item1) {
                    $res['documents'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->errors) {
            if (\is_array($this->errors)) {
                $res['errors'] = [];
                $n1 = 0;
                foreach ($this->errors as $item1) {
                    $res['errors'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['documents'])) {
            if (!empty($map['documents'])) {
                $model->documents = [];
                $n1 = 0;
                foreach ($map['documents'] as $item1) {
                    $model->documents[$n1] = documents::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['errors'])) {
            if (!empty($map['errors'])) {
                $model->errors = [];
                $n1 = 0;
                foreach ($map['errors'] as $item1) {
                    $model->errors[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
