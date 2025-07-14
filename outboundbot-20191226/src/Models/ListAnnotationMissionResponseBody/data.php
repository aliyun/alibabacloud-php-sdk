<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListAnnotationMissionResponseBody;

use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListAnnotationMissionResponseBody\data\annotationMissionList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var annotationMissionList[]
     */
    public $annotationMissionList;

    /**
     * @example CDR \\"job-c7b8a817-b8e8-40f3-b7ad-f28dcea218ff\\" doesn\\"t exists.
     *
     * @var string
     */
    public $message;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageIndex;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example 30
     *
     * @var int
     */
    public $totalCount;

    /**
     * @example 4
     *
     * @var int
     */
    public $totalPageCount;
    protected $_name = [
        'annotationMissionList' => 'AnnotationMissionList',
        'message' => 'Message',
        'pageIndex' => 'PageIndex',
        'pageSize' => 'PageSize',
        'success' => 'Success',
        'totalCount' => 'TotalCount',
        'totalPageCount' => 'TotalPageCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->annotationMissionList) {
            $res['AnnotationMissionList'] = [];
            if (null !== $this->annotationMissionList && \is_array($this->annotationMissionList)) {
                $n = 0;
                foreach ($this->annotationMissionList as $item) {
                    $res['AnnotationMissionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->totalPageCount) {
            $res['TotalPageCount'] = $this->totalPageCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnnotationMissionList'])) {
            if (!empty($map['AnnotationMissionList'])) {
                $model->annotationMissionList = [];
                $n = 0;
                foreach ($map['AnnotationMissionList'] as $item) {
                    $model->annotationMissionList[$n++] = null !== $item ? annotationMissionList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TotalPageCount'])) {
            $model->totalPageCount = $map['TotalPageCount'];
        }

        return $model;
    }
}
