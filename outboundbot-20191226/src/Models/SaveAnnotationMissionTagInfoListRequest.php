<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SaveAnnotationMissionTagInfoListRequest\annotationMissionTagInfoList;

class SaveAnnotationMissionTagInfoListRequest extends Model
{
    /**
     * @var annotationMissionTagInfoList[]
     */
    public $annotationMissionTagInfoList;

    /**
     * @var string
     */
    public $annotationMissionTagInfoListJsonString;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $reset;
    protected $_name = [
        'annotationMissionTagInfoList' => 'AnnotationMissionTagInfoList',
        'annotationMissionTagInfoListJsonString' => 'AnnotationMissionTagInfoListJsonString',
        'instanceId' => 'InstanceId',
        'reset' => 'Reset',
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
                    $res['AnnotationMissionTagInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
                    $model->annotationMissionTagInfoList[$n1] = annotationMissionTagInfoList::fromMap($item1);
                    ++$n1;
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
