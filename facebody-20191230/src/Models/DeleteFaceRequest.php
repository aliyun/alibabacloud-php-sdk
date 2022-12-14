<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class DeleteFaceRequest extends Model
{
    /**
     * @example default
     *
     * @var string
     */
    public $dbName;

    /**
     * @example 001
     *
     * @var string
     */
    public $faceId;
    protected $_name = [
        'dbName' => 'DbName',
        'faceId' => 'FaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->faceId) {
            $res['FaceId'] = $this->faceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteFaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['FaceId'])) {
            $model->faceId = $map['FaceId'];
        }

        return $model;
    }
}
