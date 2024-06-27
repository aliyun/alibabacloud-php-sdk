<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListDocumentCollectionsResponseBody\items;

use AlibabaCloud\Tea\Model;

class collectionList extends Model
{
    /**
     * @description The name of the document collection.
     *
     * @example document
     *
     * @var string
     */
    public $collectionName;

    /**
     * @description The number of vector dimensions.
     *
     * @example 1536
     *
     * @var int
     */
    public $dimension;

    /**
     * @description The name of the vector algorithm.
     *
     * @example text-embeddding-v1
     *
     * @var string
     */
    public $embeddingModel;

    /**
     * @description The fields that are used for full-text search. Multiple fields are separated by commas (,).
     *
     * @example title
     *
     * @var string
     */
    public $fullTextRetrievalFields;

    /**
     * @description The metadata.
     *
     * @example {\\"page\\": \\"int\\", \\"title\\": \\"text\\"}
     *
     * @var string
     */
    public $metadata;

    /**
     * @description The vector similarity algorithm.
     *
     * @example cosine
     *
     * @var string
     */
    public $metrics;

    /**
     * @description The analyzer that is used for full-text search.
     *
     * @example zh_cn
     *
     * @var string
     */
    public $parser;
    protected $_name = [
        'collectionName'          => 'CollectionName',
        'dimension'               => 'Dimension',
        'embeddingModel'          => 'EmbeddingModel',
        'fullTextRetrievalFields' => 'FullTextRetrievalFields',
        'metadata'                => 'Metadata',
        'metrics'                 => 'Metrics',
        'parser'                  => 'Parser',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->collectionName) {
            $res['CollectionName'] = $this->collectionName;
        }
        if (null !== $this->dimension) {
            $res['Dimension'] = $this->dimension;
        }
        if (null !== $this->embeddingModel) {
            $res['EmbeddingModel'] = $this->embeddingModel;
        }
        if (null !== $this->fullTextRetrievalFields) {
            $res['FullTextRetrievalFields'] = $this->fullTextRetrievalFields;
        }
        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }
        if (null !== $this->metrics) {
            $res['Metrics'] = $this->metrics;
        }
        if (null !== $this->parser) {
            $res['Parser'] = $this->parser;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return collectionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CollectionName'])) {
            $model->collectionName = $map['CollectionName'];
        }
        if (isset($map['Dimension'])) {
            $model->dimension = $map['Dimension'];
        }
        if (isset($map['EmbeddingModel'])) {
            $model->embeddingModel = $map['EmbeddingModel'];
        }
        if (isset($map['FullTextRetrievalFields'])) {
            $model->fullTextRetrievalFields = $map['FullTextRetrievalFields'];
        }
        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }
        if (isset($map['Metrics'])) {
            $model->metrics = $map['Metrics'];
        }
        if (isset($map['Parser'])) {
            $model->parser = $map['Parser'];
        }

        return $model;
    }
}
