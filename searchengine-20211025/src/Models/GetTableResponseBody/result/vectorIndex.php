<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetTableResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetTableResponseBody\result\vectorIndex\advanceParams;

class vectorIndex extends Model
{
    /**
     * @var advanceParams
     */
    public $advanceParams;

    /**
     * @var string
     */
    public $dimension;

    /**
     * @var string
     */
    public $distanceType;

    /**
     * @var string
     */
    public $indexName;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $sparseIndexField;

    /**
     * @var string
     */
    public $sparseValueField;

    /**
     * @var string
     */
    public $vectorField;

    /**
     * @var string
     */
    public $vectorIndexType;
    protected $_name = [
        'advanceParams' => 'advanceParams',
        'dimension' => 'dimension',
        'distanceType' => 'distanceType',
        'indexName' => 'indexName',
        'namespace' => 'namespace',
        'sparseIndexField' => 'sparseIndexField',
        'sparseValueField' => 'sparseValueField',
        'vectorField' => 'vectorField',
        'vectorIndexType' => 'vectorIndexType',
    ];

    public function validate()
    {
        if (null !== $this->advanceParams) {
            $this->advanceParams->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->advanceParams) {
            $res['advanceParams'] = null !== $this->advanceParams ? $this->advanceParams->toArray($noStream) : $this->advanceParams;
        }

        if (null !== $this->dimension) {
            $res['dimension'] = $this->dimension;
        }

        if (null !== $this->distanceType) {
            $res['distanceType'] = $this->distanceType;
        }

        if (null !== $this->indexName) {
            $res['indexName'] = $this->indexName;
        }

        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }

        if (null !== $this->sparseIndexField) {
            $res['sparseIndexField'] = $this->sparseIndexField;
        }

        if (null !== $this->sparseValueField) {
            $res['sparseValueField'] = $this->sparseValueField;
        }

        if (null !== $this->vectorField) {
            $res['vectorField'] = $this->vectorField;
        }

        if (null !== $this->vectorIndexType) {
            $res['vectorIndexType'] = $this->vectorIndexType;
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
        if (isset($map['advanceParams'])) {
            $model->advanceParams = advanceParams::fromMap($map['advanceParams']);
        }

        if (isset($map['dimension'])) {
            $model->dimension = $map['dimension'];
        }

        if (isset($map['distanceType'])) {
            $model->distanceType = $map['distanceType'];
        }

        if (isset($map['indexName'])) {
            $model->indexName = $map['indexName'];
        }

        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }

        if (isset($map['sparseIndexField'])) {
            $model->sparseIndexField = $map['sparseIndexField'];
        }

        if (isset($map['sparseValueField'])) {
            $model->sparseValueField = $map['sparseValueField'];
        }

        if (isset($map['vectorField'])) {
            $model->vectorField = $map['vectorField'];
        }

        if (isset($map['vectorIndexType'])) {
            $model->vectorIndexType = $map['vectorIndexType'];
        }

        return $model;
    }
}
