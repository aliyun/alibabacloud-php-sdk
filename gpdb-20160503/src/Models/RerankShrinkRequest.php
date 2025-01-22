<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class RerankShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;
    /**
     * @var string
     */
    public $documentsShrink;
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
        'DBInstanceId'    => 'DBInstanceId',
        'documentsShrink' => 'Documents',
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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->documentsShrink) {
            $res['Documents'] = $this->documentsShrink;
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
            $model->documentsShrink = $map['Documents'];
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
