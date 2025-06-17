<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class RerankRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string[]
     */
    public $documents;

    /**
     * @var int
     */
    public $maxChunksPerDoc;

    /**
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
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $returnDocuments;

    /**
     * @var int
     */
    public $topK;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'documents' => 'Documents',
        'maxChunksPerDoc' => 'MaxChunksPerDoc',
        'model' => 'Model',
        'ownerId' => 'OwnerId',
        'query' => 'Query',
        'regionId' => 'RegionId',
        'returnDocuments' => 'ReturnDocuments',
        'topK' => 'TopK',
    ];

    public function validate()
    {
        if (\is_array($this->documents)) {
            Model::validateArray($this->documents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->documents) {
            if (\is_array($this->documents)) {
                $res['Documents'] = [];
                $n1 = 0;
                foreach ($this->documents as $item1) {
                    $res['Documents'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['Documents'])) {
            if (!empty($map['Documents'])) {
                $model->documents = [];
                $n1 = 0;
                foreach ($map['Documents'] as $item1) {
                    $model->documents[$n1] = $item1;
                    ++$n1;
                }
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
