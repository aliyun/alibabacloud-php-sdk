<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class DeleteFaceUserPictureRequest extends Model
{
    /**
     * @var string
     */
    public $apiProduct;

    /**
     * @var string
     */
    public $apiRevision;

    /**
     * @var string
     */
    public $isolationId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $facePicMd5;
    protected $_name = [
        'apiProduct'  => 'ApiProduct',
        'apiRevision' => 'ApiRevision',
        'isolationId' => 'IsolationId',
        'userId'      => 'UserId',
        'facePicMd5'  => 'FacePicMd5',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiProduct) {
            $res['ApiProduct'] = $this->apiProduct;
        }
        if (null !== $this->apiRevision) {
            $res['ApiRevision'] = $this->apiRevision;
        }
        if (null !== $this->isolationId) {
            $res['IsolationId'] = $this->isolationId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->facePicMd5) {
            $res['FacePicMd5'] = $this->facePicMd5;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteFaceUserPictureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiProduct'])) {
            $model->apiProduct = $map['ApiProduct'];
        }
        if (isset($map['ApiRevision'])) {
            $model->apiRevision = $map['ApiRevision'];
        }
        if (isset($map['IsolationId'])) {
            $model->isolationId = $map['IsolationId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['FacePicMd5'])) {
            $model->facePicMd5 = $map['FacePicMd5'];
        }

        return $model;
    }
}
