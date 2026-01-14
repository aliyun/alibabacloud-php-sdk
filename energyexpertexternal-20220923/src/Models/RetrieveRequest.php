<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Dara\Model;

class RetrieveRequest extends Model
{
    /**
     * @var int[]
     */
    public $documentIds;

    /**
     * @var string[]
     */
    public $folderIds;

    /**
     * @var int
     */
    public $preRetrieveTopK;

    /**
     * @var string
     */
    public $query;

    /**
     * @var float
     */
    public $rerankerThreshold;

    /**
     * @var int
     */
    public $topK;

    /**
     * @var bool
     */
    public $useReranker;
    protected $_name = [
        'documentIds' => 'documentIds',
        'folderIds' => 'folderIds',
        'preRetrieveTopK' => 'preRetrieveTopK',
        'query' => 'query',
        'rerankerThreshold' => 'rerankerThreshold',
        'topK' => 'topK',
        'useReranker' => 'useReranker',
    ];

    public function validate()
    {
        if (\is_array($this->documentIds)) {
            Model::validateArray($this->documentIds);
        }
        if (\is_array($this->folderIds)) {
            Model::validateArray($this->folderIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->documentIds) {
            if (\is_array($this->documentIds)) {
                $res['documentIds'] = [];
                $n1 = 0;
                foreach ($this->documentIds as $item1) {
                    $res['documentIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->folderIds) {
            if (\is_array($this->folderIds)) {
                $res['folderIds'] = [];
                $n1 = 0;
                foreach ($this->folderIds as $item1) {
                    $res['folderIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->preRetrieveTopK) {
            $res['preRetrieveTopK'] = $this->preRetrieveTopK;
        }

        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        if (null !== $this->rerankerThreshold) {
            $res['rerankerThreshold'] = $this->rerankerThreshold;
        }

        if (null !== $this->topK) {
            $res['topK'] = $this->topK;
        }

        if (null !== $this->useReranker) {
            $res['useReranker'] = $this->useReranker;
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
        if (isset($map['documentIds'])) {
            if (!empty($map['documentIds'])) {
                $model->documentIds = [];
                $n1 = 0;
                foreach ($map['documentIds'] as $item1) {
                    $model->documentIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['folderIds'])) {
            if (!empty($map['folderIds'])) {
                $model->folderIds = [];
                $n1 = 0;
                foreach ($map['folderIds'] as $item1) {
                    $model->folderIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['preRetrieveTopK'])) {
            $model->preRetrieveTopK = $map['preRetrieveTopK'];
        }

        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        if (isset($map['rerankerThreshold'])) {
            $model->rerankerThreshold = $map['rerankerThreshold'];
        }

        if (isset($map['topK'])) {
            $model->topK = $map['topK'];
        }

        if (isset($map['useReranker'])) {
            $model->useReranker = $map['useReranker'];
        }

        return $model;
    }
}
