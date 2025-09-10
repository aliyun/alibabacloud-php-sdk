<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentAdvanceRequest\graphSearchArgs;
use GuzzleHttp\Psr7\Stream;

class QueryContentAdvanceRequest extends Model
{
    /**
     * @var string
     */
    public $collection;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var Stream
     */
    public $fileUrlObject;

    /**
     * @var string
     */
    public $filter;

    /**
     * @var bool
     */
    public $graphEnhance;

    /**
     * @var graphSearchArgs
     */
    public $graphSearchArgs;

    /**
     * @var string
     */
    public $hybridSearch;

    /**
     * @var mixed[][]
     */
    public $hybridSearchArgs;

    /**
     * @var bool
     */
    public $includeFileUrl;

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
    public $metrics;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $namespacePassword;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int[]
     */
    public $recallWindow;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var float
     */
    public $rerankFactor;

    /**
     * @var int
     */
    public $topK;

    /**
     * @var string
     */
    public $urlExpiration;

    /**
     * @var bool
     */
    public $useFullTextRetrieval;
    protected $_name = [
        'collection' => 'Collection',
        'content' => 'Content',
        'DBInstanceId' => 'DBInstanceId',
        'fileName' => 'FileName',
        'fileUrlObject' => 'FileUrl',
        'filter' => 'Filter',
        'graphEnhance' => 'GraphEnhance',
        'graphSearchArgs' => 'GraphSearchArgs',
        'hybridSearch' => 'HybridSearch',
        'hybridSearchArgs' => 'HybridSearchArgs',
        'includeFileUrl' => 'IncludeFileUrl',
        'includeMetadataFields' => 'IncludeMetadataFields',
        'includeVector' => 'IncludeVector',
        'metrics' => 'Metrics',
        'namespace' => 'Namespace',
        'namespacePassword' => 'NamespacePassword',
        'ownerId' => 'OwnerId',
        'recallWindow' => 'RecallWindow',
        'regionId' => 'RegionId',
        'rerankFactor' => 'RerankFactor',
        'topK' => 'TopK',
        'urlExpiration' => 'UrlExpiration',
        'useFullTextRetrieval' => 'UseFullTextRetrieval',
    ];

    public function validate()
    {
        if (null !== $this->graphSearchArgs) {
            $this->graphSearchArgs->validate();
        }
        if (\is_array($this->hybridSearchArgs)) {
            Model::validateArray($this->hybridSearchArgs);
        }
        if (\is_array($this->recallWindow)) {
            Model::validateArray($this->recallWindow);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->collection) {
            $res['Collection'] = $this->collection;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->fileUrlObject) {
            $res['FileUrl'] = $this->fileUrlObject;
        }

        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }

        if (null !== $this->graphEnhance) {
            $res['GraphEnhance'] = $this->graphEnhance;
        }

        if (null !== $this->graphSearchArgs) {
            $res['GraphSearchArgs'] = null !== $this->graphSearchArgs ? $this->graphSearchArgs->toArray($noStream) : $this->graphSearchArgs;
        }

        if (null !== $this->hybridSearch) {
            $res['HybridSearch'] = $this->hybridSearch;
        }

        if (null !== $this->hybridSearchArgs) {
            if (\is_array($this->hybridSearchArgs)) {
                $res['HybridSearchArgs'] = [];
                foreach ($this->hybridSearchArgs as $key1 => $value1) {
                    $res['HybridSearchArgs'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->includeFileUrl) {
            $res['IncludeFileUrl'] = $this->includeFileUrl;
        }

        if (null !== $this->includeMetadataFields) {
            $res['IncludeMetadataFields'] = $this->includeMetadataFields;
        }

        if (null !== $this->includeVector) {
            $res['IncludeVector'] = $this->includeVector;
        }

        if (null !== $this->metrics) {
            $res['Metrics'] = $this->metrics;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->namespacePassword) {
            $res['NamespacePassword'] = $this->namespacePassword;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->recallWindow) {
            if (\is_array($this->recallWindow)) {
                $res['RecallWindow'] = [];
                $n1 = 0;
                foreach ($this->recallWindow as $item1) {
                    $res['RecallWindow'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->rerankFactor) {
            $res['RerankFactor'] = $this->rerankFactor;
        }

        if (null !== $this->topK) {
            $res['TopK'] = $this->topK;
        }

        if (null !== $this->urlExpiration) {
            $res['UrlExpiration'] = $this->urlExpiration;
        }

        if (null !== $this->useFullTextRetrieval) {
            $res['UseFullTextRetrieval'] = $this->useFullTextRetrieval;
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

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FileUrl'])) {
            $model->fileUrlObject = $map['FileUrl'];
        }

        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }

        if (isset($map['GraphEnhance'])) {
            $model->graphEnhance = $map['GraphEnhance'];
        }

        if (isset($map['GraphSearchArgs'])) {
            $model->graphSearchArgs = graphSearchArgs::fromMap($map['GraphSearchArgs']);
        }

        if (isset($map['HybridSearch'])) {
            $model->hybridSearch = $map['HybridSearch'];
        }

        if (isset($map['HybridSearchArgs'])) {
            if (!empty($map['HybridSearchArgs'])) {
                $model->hybridSearchArgs = [];
                foreach ($map['HybridSearchArgs'] as $key1 => $value1) {
                    $model->hybridSearchArgs[$key1] = $value1;
                }
            }
        }

        if (isset($map['IncludeFileUrl'])) {
            $model->includeFileUrl = $map['IncludeFileUrl'];
        }

        if (isset($map['IncludeMetadataFields'])) {
            $model->includeMetadataFields = $map['IncludeMetadataFields'];
        }

        if (isset($map['IncludeVector'])) {
            $model->includeVector = $map['IncludeVector'];
        }

        if (isset($map['Metrics'])) {
            $model->metrics = $map['Metrics'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['NamespacePassword'])) {
            $model->namespacePassword = $map['NamespacePassword'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RecallWindow'])) {
            if (!empty($map['RecallWindow'])) {
                $model->recallWindow = [];
                $n1 = 0;
                foreach ($map['RecallWindow'] as $item1) {
                    $model->recallWindow[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RerankFactor'])) {
            $model->rerankFactor = $map['RerankFactor'];
        }

        if (isset($map['TopK'])) {
            $model->topK = $map['TopK'];
        }

        if (isset($map['UrlExpiration'])) {
            $model->urlExpiration = $map['UrlExpiration'];
        }

        if (isset($map['UseFullTextRetrieval'])) {
            $model->useFullTextRetrieval = $map['UseFullTextRetrieval'];
        }

        return $model;
    }
}
