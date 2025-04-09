<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetAnnotationMissionTagInfoListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetAnnotationMissionTagInfoListResponseBody\data\annotationMissionTagInfoList;

class data extends Model
{
    /**
     * @var annotationMissionTagInfoList[]
     */
    public $annotationMissionTagInfoList;

    /**
     * @var string
     */
    public $message;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'annotationMissionTagInfoList' => 'AnnotationMissionTagInfoList',
        'message' => 'Message',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->annotationMissionTagInfoList)) {
            Model::validateArray($this->annotationMissionTagInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->annotationMissionTagInfoList) {
            if (\is_array($this->annotationMissionTagInfoList)) {
                $res['AnnotationMissionTagInfoList'] = [];
                $n1 = 0;
                foreach ($this->annotationMissionTagInfoList as $item1) {
                    $res['AnnotationMissionTagInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnnotationMissionTagInfoList'])) {
            if (!empty($map['AnnotationMissionTagInfoList'])) {
                $model->annotationMissionTagInfoList = [];
                $n1 = 0;
                foreach ($map['AnnotationMissionTagInfoList'] as $item1) {
                    $model->annotationMissionTagInfoList[$n1++] = annotationMissionTagInfoList::fromMap($item1);
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
