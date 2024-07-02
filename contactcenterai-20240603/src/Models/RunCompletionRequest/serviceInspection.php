<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionRequest;

use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionRequest\serviceInspection\inspectionContents;
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
    protected $_name = [
        'inspectionContents'     => 'InspectionContents',
        'inspectionIntroduction' => 'InspectionIntroduction',
        'sceneIntroduction'      => 'SceneIntroduction',
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

        return $model;
    }
}
