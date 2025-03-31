<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters\serviceInspection\inspectionContents;

class serviceInspection extends Model
{
    /**
     * @var inspectionContents[]
     */
    public $inspectionContents;

    /**
     * @var string
     */
    public $inspectionIntroduction;

    /**
     * @var string
     */
    public $sceneIntroduction;

    /**
     * @var mixed[]
     */
    public $speakerMap;
    protected $_name = [
        'inspectionContents' => 'InspectionContents',
        'inspectionIntroduction' => 'InspectionIntroduction',
        'sceneIntroduction' => 'SceneIntroduction',
        'speakerMap' => 'SpeakerMap',
    ];

    public function validate()
    {
        if (\is_array($this->inspectionContents)) {
            Model::validateArray($this->inspectionContents);
        }
        if (\is_array($this->speakerMap)) {
            Model::validateArray($this->speakerMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inspectionContents) {
            if (\is_array($this->inspectionContents)) {
                $res['InspectionContents'] = [];
                $n1 = 0;
                foreach ($this->inspectionContents as $item1) {
                    $res['InspectionContents'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->inspectionIntroduction) {
            $res['InspectionIntroduction'] = $this->inspectionIntroduction;
        }

        if (null !== $this->sceneIntroduction) {
            $res['SceneIntroduction'] = $this->sceneIntroduction;
        }

        if (null !== $this->speakerMap) {
            if (\is_array($this->speakerMap)) {
                $res['SpeakerMap'] = [];
                foreach ($this->speakerMap as $key1 => $value1) {
                    $res['SpeakerMap'][$key1] = $value1;
                }
            }
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
        if (isset($map['InspectionContents'])) {
            if (!empty($map['InspectionContents'])) {
                $model->inspectionContents = [];
                $n1 = 0;
                foreach ($map['InspectionContents'] as $item1) {
                    $model->inspectionContents[$n1++] = inspectionContents::fromMap($item1);
                }
            }
        }

        if (isset($map['InspectionIntroduction'])) {
            $model->inspectionIntroduction = $map['InspectionIntroduction'];
        }

        if (isset($map['SceneIntroduction'])) {
            $model->sceneIntroduction = $map['SceneIntroduction'];
        }

        if (isset($map['SpeakerMap'])) {
            if (!empty($map['SpeakerMap'])) {
                $model->speakerMap = [];
                foreach ($map['SpeakerMap'] as $key1 => $value1) {
                    $model->speakerMap[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
