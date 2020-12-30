<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Multimediaai\V20190810\Models;

use AlibabaCloud\SDK\Multimediaai\V20190810\Models\ListFacePersonsResponseBody\facePersons;
use AlibabaCloud\Tea\Model;

class ListFacePersonsResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var facePersons[]
     */
    public $facePersons;

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
    protected $_name = [
        'totalCount'  => 'TotalCount',
        'facePersons' => 'FacePersons',
        'requestId'   => 'RequestId',
        'pageSize'    => 'PageSize',
        'pageNumber'  => 'PageNumber',
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
        if (null !== $this->facePersons) {
            $res['FacePersons'] = [];
            if (null !== $this->facePersons && \is_array($this->facePersons)) {
                $n = 0;
                foreach ($this->facePersons as $item) {
                    $res['FacePersons'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFacePersonsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['FacePersons'])) {
            if (!empty($map['FacePersons'])) {
                $model->facePersons = [];
                $n                  = 0;
                foreach ($map['FacePersons'] as $item) {
                    $model->facePersons[$n++] = null !== $item ? facePersons::fromMap($item) : $item;
                }
            }
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

        return $model;
    }
}
