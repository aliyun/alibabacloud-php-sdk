<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class RerankRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example gp-xxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string[]
     */
    public $documents;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxChunksPerDoc;

    /**
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
     * @var string
     */
    public $query;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example false
     *
     * @var bool
     */
    public $returnDocuments;

    /**
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
