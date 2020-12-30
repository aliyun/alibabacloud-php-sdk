<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Multimediaai\V20190810\Models;

use AlibabaCloud\Tea\Model;

class ListFaceImagesRequest extends Model
{
    /**
     * @var int
     */
    public $faceGroupId;

    /**
     * @var int
     */
    public $facePersonId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'faceGroupId'  => 'FaceGroupId',
        'facePersonId' => 'FacePersonId',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceGroupId) {
            $res['FaceGroupId'] = $this->faceGroupId;
        }
        if (null !== $this->facePersonId) {
            $res['FacePersonId'] = $this->facePersonId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFaceImagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceGroupId'])) {
            $model->faceGroupId = $map['FaceGroupId'];
        }
        if (isset($map['FacePersonId'])) {
            $model->facePersonId = $map['FacePersonId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
