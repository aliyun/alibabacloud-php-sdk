<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class RerankRequest extends Model
{
    /**
     * @description Instance ID.
     *
     * This parameter is required.
     * @example gp-xxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description List of documents to be re-ordered.
     *
     * @var string[]
     */
    public $documents;

    /**
     * @description Maximum number of chunks allowed when the text exceeds the model window:
     * > - If using the bge-reranker-v2-minicpm-layerwise model, the maximum single inference window is 2048 tokens. If the query is 48 tokens and the content of a single document parameter is 9000 tokens, it will be divided as follows: 1-2000 for the first, 2001-4000 for the second, and so on. If the number of splits exceeds MaxChunksPerDoc, the remaining sentences will be discarded.
     * @example 10
     *
     * @var int
     */
    public $maxChunksPerDoc;

    /**
     * @description Rerank model, currently supports:
     * - bge-reranker-v2-minicpm-layerwise: better performance than v2-m3, supports 2048 tokens per inference, if exceeded, it will be split, which may reduce the effect.
     * @example bge-reranker-v2-m3
     *
     * @var string
     */
    public $model;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description Query statement for Rerank.
     *
     * @example What is ADBPG?
     *
     * @var string
     */
    public $query;

    /**
     * @description Region ID where the instance is located.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description If set to false, does not return the Documents text, only returns the index of the document order and the rerank score.
     *
     * @example false
     *
     * @var bool
     */
    public $returnDocuments;

    /**
     * @description Number of most relevant documents to return.
     *
     * @example 3
     *
     * @var int
     */
    public $topK;
    protected $_name = [
        'DBInstanceId'    => 'DBInstanceId',
        'documents'       => 'Documents',
        'maxChunksPerDoc' => 'MaxChunksPerDoc',
        'model'           => 'Model',
        'ownerId'         => 'OwnerId',
        'query'           => 'Query',
        'regionId'        => 'RegionId',
        'returnDocuments' => 'ReturnDocuments',
        'topK'            => 'TopK',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->documents) {
            $res['Documents'] = $this->documents;
        }
        if (null !== $this->maxChunksPerDoc) {
            $res['MaxChunksPerDoc'] = $this->maxChunksPerDoc;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->returnDocuments) {
            $res['ReturnDocuments'] = $this->returnDocuments;
        }
        if (null !== $this->topK) {
            $res['TopK'] = $this->topK;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RerankRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Documents'])) {
            if (!empty($map['Documents'])) {
                $model->documents = $map['Documents'];
            }
        }
        if (isset($map['MaxChunksPerDoc'])) {
            $model->maxChunksPerDoc = $map['MaxChunksPerDoc'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReturnDocuments'])) {
            $model->returnDocuments = $map['ReturnDocuments'];
        }
        if (isset($map['TopK'])) {
            $model->topK = $map['TopK'];
        }

        return $model;
    }
}
