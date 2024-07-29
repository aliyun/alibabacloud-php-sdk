<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters;

use AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters\serviceInspection\inspectionContents;
use AlibabaCloud\Tea\Model;

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
        'inspectionContents'     => 'InspectionContents',
        'inspectionIntroduction' => 'InspectionIntroduction',
        'sceneIntroduction'      => 'SceneIntroduction',
        'speakerMap'             => 'SpeakerMap',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inspectionContents) {
            $res['InspectionContents'] = [];
            if (null !== $this->inspectionContents && \is_array($this->inspectionContents)) {
                $n = 0;
                foreach ($this->inspectionContents as $item) {
                    $res['InspectionContents'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['SpeakerMap'] = $this->speakerMap;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceInspection
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InspectionContents'])) {
            if (!empty($map['InspectionContents'])) {
                $model->inspectionContents = [];
                $n                         = 0;
                foreach ($map['InspectionContents'] as $item) {
                    $model->inspectionContents[$n++] = null !== $item ? inspectionContents::fromMap($item) : $item;
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
            $model->speakerMap = $map['SpeakerMap'];
        }

        return $model;
    }
}
