<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class RetrieveKnowledgeBaseRequest extends Model
{
    /**
     * @var string
     */
    public $filter;

    /**
     * @var string
     */
    public $hybridSearch;

    /**
     * @var string
     */
    public $hybridSearchArgs;

    /**
     * @var string
     */
    public $includeMetadataFields;

    /**
     * @var bool
     */
    public $includeVector;

    /**
     * @var string
     */
    public $kbUuid;

    /**
     * @var string
     */
    public $metrics;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $recallWindow;

    /**
     * @var float
     */
    public $rerankFactor;

    /**
     * @var int
     */
    public $topK;
    protected $_name = [
        'filter' => 'Filter',
        'hybridSearch' => 'HybridSearch',
        'hybridSearchArgs' => 'HybridSearchArgs',
        'includeMetadataFields' => 'IncludeMetadataFields',
        'includeVector' => 'IncludeVector',
        'kbUuid' => 'KbUuid',
        'metrics' => 'Metrics',
        'offset' => 'Offset',
        'orderBy' => 'OrderBy',
        'query' => 'Query',
        'recallWindow' => 'RecallWindow',
        'rerankFactor' => 'RerankFactor',
        'topK' => 'TopK',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }

        if (null !== $this->hybridSearch) {
            $res['HybridSearch'] = $this->hybridSearch;
        }

        if (null !== $this->hybridSearchArgs) {
            $res['HybridSearchArgs'] = $this->hybridSearchArgs;
        }

        if (null !== $this->includeMetadataFields) {
            $res['IncludeMetadataFields'] = $this->includeMetadataFields;
        }

        if (null !== $this->includeVector) {
            $res['IncludeVector'] = $this->includeVector;
        }

        if (null !== $this->kbUuid) {
            $res['KbUuid'] = $this->kbUuid;
        }

        if (null !== $this->metrics) {
            $res['Metrics'] = $this->metrics;
        }

        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }

        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }

        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        if (null !== $this->recallWindow) {
            $res['RecallWindow'] = $this->recallWindow;
        }

        if (null !== $this->rerankFactor) {
            $res['RerankFactor'] = $this->rerankFactor;
        }

        if (null !== $this->topK) {
            $res['TopK'] = $this->topK;
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
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }

        if (isset($map['HybridSearch'])) {
            $model->hybridSearch = $map['HybridSearch'];
        }

        if (isset($map['HybridSearchArgs'])) {
            $model->hybridSearchArgs = $map['HybridSearchArgs'];
        }

        if (isset($map['IncludeMetadataFields'])) {
            $model->includeMetadataFields = $map['IncludeMetadataFields'];
        }

        if (isset($map['IncludeVector'])) {
            $model->includeVector = $map['IncludeVector'];
        }

        if (isset($map['KbUuid'])) {
            $model->kbUuid = $map['KbUuid'];
        }

        if (isset($map['Metrics'])) {
            $model->metrics = $map['Metrics'];
        }

        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }

        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }

        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        if (isset($map['RecallWindow'])) {
            $model->recallWindow = $map['RecallWindow'];
        }

        if (isset($map['RerankFactor'])) {
            $model->rerankFactor = $map['RerankFactor'];
        }

        if (isset($map['TopK'])) {
            $model->topK = $map['TopK'];
        }

        return $model;
    }
}
