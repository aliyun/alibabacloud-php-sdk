<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Multimediaai\V20190810\Models;

use AlibabaCloud\SDK\Multimediaai\V20190810\Models\ListFaceGroupsResponseBody\faceGroups;
use AlibabaCloud\Tea\Model;

class ListFaceGroupsResponseBody extends Model
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
     * @var faceGroups[]
     */
    public $faceGroups;
    protected $_name = [
        'totalCount' => 'TotalCount',
        'requestId'  => 'RequestId',
        'pageSize'   => 'PageSize',
        'pageNumber' => 'PageNumber',
        'faceGroups' => 'FaceGroups',
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
        if (null !== $this->faceGroups) {
            $res['FaceGroups'] = [];
            if (null !== $this->faceGroups && \is_array($this->faceGroups)) {
                $n = 0;
                foreach ($this->faceGroups as $item) {
                    $res['FaceGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFaceGroupsResponseBody
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
        if (isset($map['FaceGroups'])) {
            if (!empty($map['FaceGroups'])) {
                $model->faceGroups = [];
                $n                 = 0;
                foreach ($map['FaceGroups'] as $item) {
                    $model->faceGroups[$n++] = null !== $item ? faceGroups::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
