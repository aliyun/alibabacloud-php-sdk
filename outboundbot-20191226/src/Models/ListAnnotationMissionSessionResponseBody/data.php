<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListAnnotationMissionSessionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListAnnotationMissionSessionResponseBody\data\annotationMissionSessionList;

class data extends Model
{
    /**
     * @var string
     */
    public $annotationMissionId;

    /**
     * @var annotationMissionSessionList[]
     */
    public $annotationMissionSessionList;

    /**
     * @var string
     */
    public $message;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'annotationMissionId' => 'AnnotationMissionId',
        'annotationMissionSessionList' => 'AnnotationMissionSessionList',
        'message' => 'Message',
        'success' => 'Success',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->annotationMissionSessionList)) {
            Model::validateArray($this->annotationMissionSessionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->annotationMissionId) {
            $res['AnnotationMissionId'] = $this->annotationMissionId;
        }

        if (null !== $this->annotationMissionSessionList) {
            if (\is_array($this->annotationMissionSessionList)) {
                $res['AnnotationMissionSessionList'] = [];
                $n1 = 0;
                foreach ($this->annotationMissionSessionList as $item1) {
                    $res['AnnotationMissionSessionList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['AnnotationMissionId'])) {
            $model->annotationMissionId = $map['AnnotationMissionId'];
        }

        if (isset($map['AnnotationMissionSessionList'])) {
            if (!empty($map['AnnotationMissionSessionList'])) {
                $model->annotationMissionSessionList = [];
                $n1 = 0;
                foreach ($map['AnnotationMissionSessionList'] as $item1) {
                    $model->annotationMissionSessionList[$n1++] = annotationMissionSessionList::fromMap($item1);
                }
            }
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
