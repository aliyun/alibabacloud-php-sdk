<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetAnnotationMissionTagInfoListResponseBody;

use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetAnnotationMissionTagInfoListResponseBody\data\annotationMissionTagInfoList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var annotationMissionTagInfoList[]
     */
    public $annotationMissionTagInfoList;

    /**
     * @example CDR \\"job-efbaeefc-4d45-4e79-83f7-b33b0769c969\\" doesn\\"t exists.
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
    protected $_name = [
        'annotationMissionTagInfoList' => 'AnnotationMissionTagInfoList',
        'message' => 'Message',
        'success' => 'Success',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->annotationMissionTagInfoList) {
            $res['AnnotationMissionTagInfoList'] = [];
            if (null !== $this->annotationMissionTagInfoList && \is_array($this->annotationMissionTagInfoList)) {
                $n = 0;
                foreach ($this->annotationMissionTagInfoList as $item) {
                    $res['AnnotationMissionTagInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['AnnotationMissionTagInfoList'])) {
            if (!empty($map['AnnotationMissionTagInfoList'])) {
                $model->annotationMissionTagInfoList = [];
                $n = 0;
                foreach ($map['AnnotationMissionTagInfoList'] as $item) {
                    $model->annotationMissionTagInfoList[$n++] = null !== $item ? annotationMissionTagInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
