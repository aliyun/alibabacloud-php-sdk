<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SaveAnnotationMissionTagInfoListRequest\annotationMissionTagInfoList;
use AlibabaCloud\Tea\Model;

class SaveAnnotationMissionTagInfoListRequest extends Model
{
    /**
     * @var annotationMissionTagInfoList[]
     */
    public $annotationMissionTagInfoList;

    /**
     * @example []
     *
     * @var string
     */
    public $annotationMissionTagInfoListJsonString;

    /**
     * @example af81a389-91f0-4157-8d82-720edd02b66a
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example false
     *
     * @var bool
     */
    public $reset;
    protected $_name = [
        'annotationMissionTagInfoList' => 'AnnotationMissionTagInfoList',
        'annotationMissionTagInfoListJsonString' => 'AnnotationMissionTagInfoListJsonString',
        'instanceId' => 'InstanceId',
        'reset' => 'Reset',
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
        if (null !== $this->annotationMissionTagInfoListJsonString) {
            $res['AnnotationMissionTagInfoListJsonString'] = $this->annotationMissionTagInfoListJsonString;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->reset) {
            $res['Reset'] = $this->reset;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveAnnotationMissionTagInfoListRequest
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
        if (isset($map['AnnotationMissionTagInfoListJsonString'])) {
            $model->annotationMissionTagInfoListJsonString = $map['AnnotationMissionTagInfoListJsonString'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Reset'])) {
            $model->reset = $map['Reset'];
        }

        return $model;
    }
}
