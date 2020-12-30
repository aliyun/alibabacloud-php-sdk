<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Multimediaai\V20190810\Models;

use AlibabaCloud\Tea\Model;

class ListFacePersonsRequest extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $faceGroupId;

    /**
     * @var string
     */
    public $facePersonName;
    protected $_name = [
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'faceGroupId'    => 'FaceGroupId',
        'facePersonName' => 'FacePersonName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->faceGroupId) {
            $res['FaceGroupId'] = $this->faceGroupId;
        }
        if (null !== $this->facePersonName) {
            $res['FacePersonName'] = $this->facePersonName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFacePersonsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['FaceGroupId'])) {
            $model->faceGroupId = $map['FaceGroupId'];
        }
        if (isset($map['FacePersonName'])) {
            $model->facePersonName = $map['FacePersonName'];
        }

        return $model;
    }
}
