<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Multimediaai\V20190810\Models;

use AlibabaCloud\SDK\Multimediaai\V20190810\Models\ListFaceImagesResponseBody\faceImages;
use AlibabaCloud\Tea\Model;

class ListFaceImagesResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var faceImages[]
     */
    public $faceImages;
    protected $_name = [
        'totalCount' => 'TotalCount',
        'requestId'  => 'RequestId',
        'pageSize'   => 'PageSize',
        'pageNumber' => 'PageNumber',
        'faceImages' => 'FaceImages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->faceImages) {
            $res['FaceImages'] = [];
            if (null !== $this->faceImages && \is_array($this->faceImages)) {
                $n = 0;
                foreach ($this->faceImages as $item) {
                    $res['FaceImages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFaceImagesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['FaceImages'])) {
            if (!empty($map['FaceImages'])) {
                $model->faceImages = [];
                $n                 = 0;
                foreach ($map['FaceImages'] as $item) {
                    $model->faceImages[$n++] = null !== $item ? faceImages::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
