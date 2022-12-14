<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\ListFaceEntitiesResponseBody\data;

use AlibabaCloud\Tea\Model;

class entities extends Model
{
    /**
     * @example 1589203871832
     *
     * @var int
     */
    public $createdAt;

    /**
     * @example default
     *
     * @var string
     */
    public $dbName;

    /**
     * @example 222
     *
     * @var string
     */
    public $entityId;

    /**
     * @example 3
     *
     * @var int
     */
    public $faceCount;

    /**
     * @var string
     */
    public $labels;

    /**
     * @example 1589203871832
     *
     * @var int
     */
    public $updatedAt;
    protected $_name = [
        'createdAt' => 'CreatedAt',
        'dbName'    => 'DbName',
        'entityId'  => 'EntityId',
        'faceCount' => 'FaceCount',
        'labels'    => 'Labels',
        'updatedAt' => 'UpdatedAt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->faceCount) {
            $res['FaceCount'] = $this->faceCount;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return entities
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['FaceCount'])) {
            $model->faceCount = $map['FaceCount'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }

        return $model;
    }
}
