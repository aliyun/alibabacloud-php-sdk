<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListAnnotationMissionSessionResponseBody;

use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListAnnotationMissionSessionResponseBody\data\annotationMissionSessionList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example b3f2c931-5180-43ca-b4aa-2baee2d73c8b
     *
     * @var string
     */
    public $annotationMissionId;

    /**
     * @var annotationMissionSessionList[]
     */
    public $annotationMissionSessionList;

    /**
     * @example bp.java.nopowerContact
     *
     * @var string
     */
    public $message;

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
    protected $_name = [
        'annotationMissionId' => 'AnnotationMissionId',
        'annotationMissionSessionList' => 'AnnotationMissionSessionList',
        'message' => 'Message',
        'success' => 'Success',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->annotationMissionId) {
            $res['AnnotationMissionId'] = $this->annotationMissionId;
        }
        if (null !== $this->annotationMissionSessionList) {
            $res['AnnotationMissionSessionList'] = [];
            if (null !== $this->annotationMissionSessionList && \is_array($this->annotationMissionSessionList)) {
                $n = 0;
                foreach ($this->annotationMissionSessionList as $item) {
                    $res['AnnotationMissionSessionList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnnotationMissionId'])) {
            $model->annotationMissionId = $map['AnnotationMissionId'];
        }
        if (isset($map['AnnotationMissionSessionList'])) {
            if (!empty($map['AnnotationMissionSessionList'])) {
                $model->annotationMissionSessionList = [];
                $n = 0;
                foreach ($map['AnnotationMissionSessionList'] as $item) {
                    $model->annotationMissionSessionList[$n++] = null !== $item ? annotationMissionSessionList::fromMap($item) : $item;
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
