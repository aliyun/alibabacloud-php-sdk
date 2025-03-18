<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListIndicesResponseBody\indices;

use AlibabaCloud\Tea\Model;

class indices extends Model
{
    /**
     * @example testcollection
     *
     * @var string
     */
    public $collection;

    /**
     * @example CREATE INDEX testindex ON mynamespace. testcollection
     *
     * @var string
     */
    public $indexDef;

    /**
     * @example testindex
     *
     * @var string
     */
    public $indexName;

    /**
     * @example mynamespace
     *
     * @var string
     */
    public $namespace;
    protected $_name = [
        'collection' => 'Collection',
        'indexDef' => 'IndexDef',
        'indexName' => 'IndexName',
        'namespace' => 'Namespace',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return indices
     */
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
