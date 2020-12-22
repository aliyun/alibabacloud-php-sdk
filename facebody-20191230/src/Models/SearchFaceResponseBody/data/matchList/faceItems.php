<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\SearchFaceResponseBody\data\matchList;

use AlibabaCloud\Tea\Model;

class faceItems extends Model
{
    /**
     * @var string
     */
    public $entityId;

    /**
     * @var string
     */
    public $faceId;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $extraData;

    /**
     * @var string
     */
    public $dbName;
    protected $_name = [
        'entityId'  => 'EntityId',
        'faceId'    => 'FaceId',
        'score'     => 'Score',
        'extraData' => 'ExtraData',
        'dbName'    => 'DbName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->faceId) {
            $res['FaceId'] = $this->faceId;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->extraData) {
            $res['ExtraData'] = $this->extraData;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faceItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['FaceId'])) {
            $model->faceId = $map['FaceId'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['ExtraData'])) {
            $model->extraData = $map['ExtraData'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        return $model;
    }
}
