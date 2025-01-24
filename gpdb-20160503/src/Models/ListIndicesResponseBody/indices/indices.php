<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListIndicesResponseBody\indices;

use AlibabaCloud\Dara\Model;

class indices extends Model
{
    /**
     * @var string
     */
    public $collection;
    /**
     * @var string
     */
    public $indexDef;
    /**
     * @var string
     */
    public $indexName;
    /**
     * @var string
     */
    public $namespace;
    protected $_name = [
        'collection' => 'Collection',
        'indexDef'   => 'IndexDef',
        'indexName'  => 'IndexName',
        'namespace'  => 'Namespace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->collection) {
            $res['Collection'] = $this->collection;
        }

        if (null !== $this->indexDef) {
            $res['IndexDef'] = $this->indexDef;
        }

        if (null !== $this->indexName) {
            $res['IndexName'] = $this->indexName;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
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
        if (isset($map['Collection'])) {
            $model->collection = $map['Collection'];
        }

        if (isset($map['IndexDef'])) {
            $model->indexDef = $map['IndexDef'];
        }

        if (isset($map['IndexName'])) {
            $model->indexName = $map['IndexName'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        return $model;
    }
}
