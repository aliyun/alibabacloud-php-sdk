<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListAnnotationMissionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListAnnotationMissionResponseBody\data\annotationMissionList;

class data extends Model
{
    /**
     * @var annotationMissionList[]
     */
    public $annotationMissionList;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $totalCount;

    /**
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

    public function validate()
    {
        if (\is_array($this->annotationMissionList)) {
            Model::validateArray($this->annotationMissionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->annotationMissionList) {
            if (\is_array($this->annotationMissionList)) {
                $res['AnnotationMissionList'] = [];
                $n1 = 0;
                foreach ($this->annotationMissionList as $item1) {
                    $res['AnnotationMissionList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnnotationMissionList'])) {
            if (!empty($map['AnnotationMissionList'])) {
                $model->annotationMissionList = [];
                $n1 = 0;
                foreach ($map['AnnotationMissionList'] as $item1) {
                    $model->annotationMissionList[$n1] = annotationMissionList::fromMap($item1);
                    ++$n1;
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
