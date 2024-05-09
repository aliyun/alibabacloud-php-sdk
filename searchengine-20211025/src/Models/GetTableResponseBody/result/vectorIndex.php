<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetTableResponseBody\result;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetTableResponseBody\result\vectorIndex\advanceParams;
use AlibabaCloud\Tea\Model;

class vectorIndex extends Model
{
    /**
     * @var advanceParams
     */
    public $advanceParams;

    /**
     * @example 128
     *
     * @var string
     */
    public $dimension;

    /**
     * @example SquaredEuclidean
     *
     * @var string
     */
    public $distanceType;

    /**
     * @example test_odps
     *
     * @var string
     */
    public $indexName;

    /**
     * @example namespace
     *
     * @var string
     */
    public $namespace;

    /**
     * @example sparse_indices
     *
     * @var string
     */
    public $sparseIndexField;

    /**
     * @example sparse_values
     *
     * @var string
     */
    public $sparseValueField;

    /**
     * @example source_image_vector
     *
     * @var string
     */
    public $vectorField;

    /**
     * @example Qc
     *
     * @var string
     */
    public $vectorIndexType;
    protected $_name = [
        'advanceParams'    => 'advanceParams',
        'dimension'        => 'dimension',
        'distanceType'     => 'distanceType',
        'indexName'        => 'indexName',
        'namespace'        => 'namespace',
        'sparseIndexField' => 'sparseIndexField',
        'sparseValueField' => 'sparseValueField',
        'vectorField'      => 'vectorField',
        'vectorIndexType'  => 'vectorIndexType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advanceParams) {
            $res['advanceParams'] = null !== $this->advanceParams ? $this->advanceParams->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return vectorIndex
     */
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
