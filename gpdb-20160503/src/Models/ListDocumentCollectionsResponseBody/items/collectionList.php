<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListDocumentCollectionsResponseBody\items;

use AlibabaCloud\Dara\Model;

class collectionList extends Model
{
    /**
     * @var string
     */
    public $collectionName;

    /**
     * @var int
     */
    public $dimension;

    /**
     * @var string
     */
    public $embeddingModel;

    /**
     * @var string
     */
    public $fullTextRetrievalFields;

    /**
     * @var string
     */
    public $metadata;

    /**
     * @var string
     */
    public $metrics;

    /**
     * @var string
     */
    public $parser;

    /**
     * @var string
     */
    public $sparseRetrievalFields;

    /**
     * @var bool
     */
    public $supportSparse;
    protected $_name = [
        'collectionName' => 'CollectionName',
        'dimension' => 'Dimension',
        'embeddingModel' => 'EmbeddingModel',
        'fullTextRetrievalFields' => 'FullTextRetrievalFields',
        'metadata' => 'Metadata',
        'metrics' => 'Metrics',
        'parser' => 'Parser',
        'sparseRetrievalFields' => 'SparseRetrievalFields',
        'supportSparse' => 'SupportSparse',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->sparseRetrievalFields) {
            $res['SparseRetrievalFields'] = $this->sparseRetrievalFields;
        }

        if (null !== $this->supportSparse) {
            $res['SupportSparse'] = $this->supportSparse;
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

        if (isset($map['SparseRetrievalFields'])) {
            $model->sparseRetrievalFields = $map['SparseRetrievalFields'];
        }

        if (isset($map['SupportSparse'])) {
            $model->supportSparse = $map['SupportSparse'];
        }

        return $model;
    }
}
