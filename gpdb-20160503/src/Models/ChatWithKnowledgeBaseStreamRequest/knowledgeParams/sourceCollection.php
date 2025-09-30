<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseStreamRequest\knowledgeParams;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseStreamRequest\knowledgeParams\sourceCollection\queryParams;

class sourceCollection extends Model
{
    /**
     * @var string
     */
    public $collection;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $namespacePassword;

    /**
     * @var queryParams
     */
    public $queryParams;
    protected $_name = [
        'collection' => 'Collection',
        'namespace' => 'Namespace',
        'namespacePassword' => 'NamespacePassword',
        'queryParams' => 'QueryParams',
    ];

    public function validate()
    {
        if (null !== $this->queryParams) {
            $this->queryParams->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->collection) {
            $res['Collection'] = $this->collection;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->namespacePassword) {
            $res['NamespacePassword'] = $this->namespacePassword;
        }

        if (null !== $this->queryParams) {
            $res['QueryParams'] = null !== $this->queryParams ? $this->queryParams->toArray($noStream) : $this->queryParams;
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

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['NamespacePassword'])) {
            $model->namespacePassword = $map['NamespacePassword'];
        }

        if (isset($map['QueryParams'])) {
            $model->queryParams = queryParams::fromMap($map['QueryParams']);
        }

        return $model;
    }
}
