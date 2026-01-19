<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\GetDocumentResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\GetDocumentResponseBody\data\schema;

class data extends Model
{
    /**
     * @var mixed[]
     */
    public $document;

    /**
     * @var schema
     */
    public $schema;
    protected $_name = [
        'document' => 'Document',
        'schema' => 'Schema',
    ];

    public function validate()
    {
        if (\is_array($this->document)) {
            Model::validateArray($this->document);
        }
        if (null !== $this->schema) {
            $this->schema->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->document) {
            if (\is_array($this->document)) {
                $res['Document'] = [];
                foreach ($this->document as $key1 => $value1) {
                    $res['Document'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->schema) {
            $res['Schema'] = null !== $this->schema ? $this->schema->toArray($noStream) : $this->schema;
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
            if (!empty($map['Document'])) {
                $model->document = [];
                foreach ($map['Document'] as $key1 => $value1) {
                    $model->document[$key1] = $value1;
                }
            }
        }

        if (isset($map['Schema'])) {
            $model->schema = schema::fromMap($map['Schema']);
        }

        return $model;
    }
}
